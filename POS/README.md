### Soal Praktikum

3. 
a. Halaman Home <br>
<img src = "../public/screenshot/19.png"> <br>
b. Halaman Products <br>
<img src = "../public/screenshot/18.png"> <br>
c. Halaman User <br>
<img src = "../public/screenshot/16.png"> <br>
d. Halaman Penjualan <br>
<img src = "../public/screenshot/17.png">

    Isi dari halamannya kosong karena pada directory view nya tidak ada datanya maka tidak ada data yang ditampilkan.

4.  Kodingan Routing <br>

        Route::get('/', [HomeController::class, 'index']);

        Route::prefix('category')->group(function () {<br>
        Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
        Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
        Route::get('/home-care', [ProductController::class, 'homeCare']);
        Route::get('/baby-kid', [ProductController::class, 'babyKid']); <br>
        });

        Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

        Route::get('/sales', [SaleController::class, 'index']);

5.  Kodingan Fungsi <br>

            class HomeController extends Controller <br>
            {
            public function index()
            {
            return view('home');
            }
            }

            class ProductController extends Controller <br>
            {
            public function beautyHealth()
            {
            return view('products.index');
            }

            public function homeCare()
            {
            return view('products.index');
            }

            public function babyKid()
            {
            return view('products.index');
            }
            public function foodBeverage()
            {
            return view('products.index');
            }
            }

            class SaleController extends Controller <br>
            {
            public function index()
            {
            return view('sale');
            }
            }

            class UserController extends Controller <br>
            {
            public function show($id, $name)
            {
            return view('user', compact('id', 'name'));
            }  
            }