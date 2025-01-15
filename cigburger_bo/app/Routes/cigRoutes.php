<?PHP

namespace App\Routes;

use Config\Services;

$routes = Services::routes();

// CigBurger BO Routes
$routes->get('/', 'Auth::index');