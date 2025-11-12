<?php 
declare(strict_types=1);
namespace App\Core;

class Router {

	private array $routes = [];

	// Register GET route
	public function get(string $path, $callback): void 
	{
		$this->routes["GET"][$path] = $callback;
	}

	// Register POST route
	public function post(string $path, $callback): void 
	{
		$this->routes["POST"][$path] = $callback;
	}

	// Register PUT route
	public function put(string $path, $callback): void 
	{
		$this->routes["PUT"][$path] = $callback;
	}

	// Register DELETE route
	public function delete(string $path, $callback): void 
	{
		$this->routes["DELETE"][$path] = $callback;
	}

	// Dispatch request
	public function dispatch(): void
	{
		$method = $_SERVER['REQUEST_METHOD'] ?? null;
		$uri = "/" . trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/");

		// Remove project folder (if running inside subfolder)
		$uri = str_replace("/", "", $uri);

		$callback = $this->routes[$method][$uri] ?? null;

		if ($callback) {
			$this->executeCallback($callback);
			return;
		}

		// Handle dynamic routes with parameters (e.g. /user/{id})
		foreach ($this->routes[$method] ?? [] as $route => $callback) {
			if (strpos($route, "{") !== false) {
				$pattern = preg_replace("/\{[\w]+\}/", "([^/]+)", $route);
				$pattern = "#^" . rtrim($pattern, "/") . "$#";

				if (preg_match($pattern, $uri, $matches)) {
					array_shift($matches); // remove full match
					$this->executeCallback($callback, $matches);
					return;
				}
			}
		}

		// If no match, render 404
		$this->render404();
	}

	// Execute callback or controller method
	public function executeCallback($callback, array $params = []): void
	{
		if (is_array($callback) && count($callback) === 2) {
			[$controller, $method] = $callback;
			$instance = new $controller();
			$result = call_user_func_array([$instance, $method], $params);

		} elseif (is_callable($callback)) {
			$result = call_user_func_array($callback, $params);
		}

		// Handle result types
		if (is_array($result) && isset($result['view'])) {
			// Extract data array to variables for the view
			if (isset($result['data']) && is_array($result['data'])) {
				extract($result['data']);
			}
			require_once $result['view'];

		} elseif (is_string($result) && file_exists($result)) {
			require_once $result;

		} elseif ($result !== null) {
			echo $result;
		}
	}

	// Render 404 page
	public function render404(): void 
	{
		http_response_code(404);
		$file = __DIR__ . "/../../public/error404.php";
		if (file_exists($file)) {
			require_once $file;
		} else {
			echo "<h1>404 - Page Not Found</h1>";
		}
	}
}
