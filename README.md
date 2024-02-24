## Laporan JOBSHEET 02 ROUTING, CONTROLLER, DAN VIEW

NIM : 2241720033 <br>
Nama : Mochammad Cholilur Rokhman <br>
Kelas : TI-2F

### BASIC ROUTING

#### Langkah Langkah Praktikum

1. Route Hello <br>
   <img src = "public/screenshot/1.png">

2. Route World <br>
   <img src = "public/screenshot/2.png">

3. Route Selamat datang <br>
   <img src = "public/screenshot/3.png">

4. Route About <br>
   <img src = "public/screenshot/4.png">

### Route Parameters

#### Langkah Langkah Praktikum

b. <img src = "public/screenshot/5.png">

c. <img src = "public/screenshot/6.png">

e. <img src = "public/screenshot/7.png">

f. Route::get('/articles{id}', function ($id) {
echo "Halaman Artikel dengan ID $id";
}); <br>
<img src = "public/screenshot/8.png">

### Operational Parameters

#### Langkah Langkah Praktikum

b. <img src = "public/screenshot/9.png">
c. <img src = "public/screenshot/10.png">
e. <img src = "public/screenshot/11.png">

### Controller (Membuat Controller)

#### Langkah Langkah Praktikum

e. <img src = "public/screenshot/12.png"> 
f. class PageController extends Controller
{
    public function index ()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        $nim = '2241720033';
        $nama = 'Moch. Cholilur Rokhman';

        return 'NIM : ' . $nim . '<br>' .
               'Nama : ' . $nama;
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }

};

    Untuk Routingnya 
    Route::get('/', [PageController::class, 'index']);
    Route::get('/about', [PageController::class, 'about']);
    Route::get('/articles{id}', [PageController::class, 'articles']);

g.  Routing nya <br>
    Route::get('/', [HomeController::class, "index"]); <br>
    Route::get('/about', [AboutController::class, 'About']); <br>
    Route::get('/articles{id}', [ArticleController::class, 'articles']);



###  Resource Controller

#### Langkah Langkah Praktikum

 <img src = "public/screenshot/13.png"> 



###  View (Membuat View)

#### Langkah Langkah Praktikum

c.  <img src = "public/screenshot/14.png"> 

###  View dalam direktori

#### Langkah Langkah Praktikum

c.  <img src = "public/screenshot/14.png"> 

###  Menampilkan View dari Controller 

#### Langkah Langkah Praktikum

c.  <img src = "public/screenshot/14.png"> 


###  Meneruskan data ke View

#### Langkah Langkah Praktikum

c.  <img src = "public/screenshot/15.png"> 


### Soal Praktikum

 Untuk File nya berada didalam direktori PWL_2024/POS <br>
3. a. Halaman Home <br>
       <img src = "public/screenshot/19.png"> 
   b. Halaman Products <br>
       <img src = "public/screenshot/18.png"> 
   c. Halaman User <br>
       <img src = "public/screenshot/16.png"> 
   d. Halaman Penjualan <br>
       <img src = "public/screenshot/17.png"> 

    Isi dari halamannya kosong karena pada directory view nya tidak ada datanya maka tidak ada data yang ditampilkan.
4. Kodingan Route <br>
    Route::get('/', [HomeController::class, 'index']);

    Route::prefix('category')->group(function ()  {<br>
        Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
        Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
        Route::get('/home-care', [ProductController::class, 'homeCare']);
        Route::get('/baby-kid', [ProductController::class, 'babyKid']); <br>
    });

    Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

    Route::get('/sales', [SaleController::class, 'index']);

5. Kodingan Fungsi <br>
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




