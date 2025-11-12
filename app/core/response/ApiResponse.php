<?php 
declare(strict_types=1);
namespace Boilerplate\Boilerplate\Core\Response;

use Boilerplate\Boilerplate\Core\ErrorHandling;

class ApiResponse
{
    private static function setHeaders(string $header, int $http_code): void
    {
        header("Content-Type: $header");
        http_response_code($http_code);
    }

    public static function checkContentTypeHeader(bool $content_type = true): string 
    {
        return $content_type ? "application/json" : "text/html";
    }

    public static function body(array $payload, ?int $http_code = 200, bool $content_type = true): void
    {
        $header = self::checkContentTypeHeader($content_type);
        self::setHeaders($header, $http_code);
        echo json_encode($payload);
        exit;
    }

    public static function webhook(array $payload, string $callback_uri, int $http_code = 200, bool $content_type = true): void 
    {
        $header = self::checkContentTypeHeader($content_type);
        self::setHeaders($header, $http_code);
        header("Location: $callback_uri");
        echo json_encode($payload);
        exit;
    }

    public static function post_curl(string $uri, array $payload, string $post_field = "json", bool $content_type = true)
    {
        $header = self::checkContentTypeHeader($content_type);

        if ($post_field !== "json" && $post_field !== "html") {
            http_response_code(403);
            ErrorHandling::logErrorToCustomFile("Postfields should either have a value of json or html");
            self::body(["error" => "Postfields should either have a value of json or html"], 403);
        }

        $curl = curl_init($uri);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);

        $post_field === "json"
            ? curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($payload))
            : curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($payload));

        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            "Content-Type: $header",
            "Cache-Control: no-cache",
        ]);

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            $error = curl_error($curl);
            ErrorHandling::logErrorToCustomFile($error);
            self::body(["error" => "There is an error in your POST CURL. Please check your error log file."], 500);
        }

        curl_close($curl);
        return $response;
    }
}
