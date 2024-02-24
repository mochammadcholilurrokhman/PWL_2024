## Laporan JOBSHEET 02 ROUTING, CONTROLLER, DAN VIEW

NIM : 2241720033 <br>
Nama : Mochammad Cholilur Rokhman <br>
Kelas : TI-1D

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