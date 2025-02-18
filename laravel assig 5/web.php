    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistrationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [UserRegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserRegistrationController::class, 'register']);

