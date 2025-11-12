<?php 
declare(strict_types=1);
namespace Boilerplate\Boilerplate\Core;

class Middleware 
{
    /**
     * Check if a session token exists before allowing access.
     * If not, redirect to a given page.
     */
    public static function tokenBaseAuthentication(string $sessionKey, ?string $redirect = null): void
    {

        // Check if session token exists
        if (empty($_SESSION[$sessionKey])) {
            
            // Redirect to given URL or homepage
            $location = BURL . ($redirect ?? '');
            header("Location: $location");
            exit;
        }
    }
}
