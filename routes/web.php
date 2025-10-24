<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\MuridController;
use App\Models\Mahasiswa;
use App\Models\Post;
use App\Models\Siswa;
use App\Models\Biodata;
use App\Models\Wali;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\BiodatasController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return 'Selamat datang di halaman about';
// });

// Route::get('/profile', function () {
//     return 'Selamat datang di halaman profile';
// });

// Route::get('/biodata', function () {
//     return "<h1>Biodata</h1>" .
//         "Nama : Rehan Ramadhan" .
//         "<br>Tempat, Tanggal Lahir : Bandung, 06 September 2008" .
//         "<br>Alamat : Kp. Bojong Tanjung, Bandung" .
//         "<br>Jenis Kelamin : Laki-laki" .
//         "<br>Agama : Islam" .
//         "<br>Nomor Telepon : 666";
// });

// Route::get('/biodata/{nama}/{tempat_lahir}/{tanggal_lahir}/{alamat}/{jenis_kelamin}/{agama}/{nomor_telepon}', function ($nama, $tempat_lahir, $tanggal_lahir, $alamat, $jenis_kelamin, $agama, $nomor_telepon) {
//     return "<h1>Biodata</h1>" .
//         "Nama : $nama" .
//         "<br>Tempat, Tanggal Lahir : $tempat_lahir, $tanggal_lahir" .
//         "<br>Alamat : $alamat" .
//         "<br>Jenis Kelamin : $jenis_kelamin" .
//         "<br>Agama : $agama" .
//         "<br>Nomor Telepon : $nomor_telepon";
// });

// Route::get("hitung/{bilangan1}/{bilangan2}", function ($bilangan1, $bilangan2) {
//     $hasil = $bilangan1 + $bilangan2;
//     return "Hasil dari $bilangan1 + $bilangan2 = $hasil";
// });

// Route::get("luas_persegi/{sisi}", function ($sisi) {
//     $hasil = $sisi * $sisi;
//     return "Luas persegi dengan sisi $sisi adalah $hasil";
// });

// Route::get("luas_persegi_panjang/{panjang}/{lebar}", function ($panjang, $lebar) {
//     $hasil = $panjang * $lebar;
//     return "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah $hasil";
// });

// Route::get("luas_segitiga/{alas}/{tinggi}", function ($alas, $tinggi) {
//     $hasil = 0.5 * $alas * $tinggi;
//     return "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah $hasil";
// });

// Route::get("luas_lingkaran/{jari_jari}", function ($jari_jari) {
//     $hasil = 3.14 * $jari_jari * $jari_jari;
//     return "Luas lingkaran dengan jari-jari $jari_jari adalah $hasil";
// });

// Route::get("pesanan/{nama}/{nomor_telepon}/{tanggal_beli}/{jenis}/{menu}/{jumlah}", function ($nama, $nomor_telepon, $tanggal_beli, $jenis, $menu, $jumlah) {
//     switch ($jenis) {
//         case 'Makanan':
//             switch ($menu) {
//                 case 'Seblak':
//                     $harga = 10000;
//                     break;
//                 case 'Pentol':
//                     $harga = 15000;
//                     break;
//                 case 'Batagor':
//                     $harga = 20000;
//                     break;
                
//                 default:
//                     echo "Menu makanan tidak ada";
//                     break;
//                 }
//             break;
//         case 'Minuman':
//             switch ($menu) {
//                 case 'Kopi':
//                     $harga = 5000;
//                     break;
//                 case 'Jus':
//                     $harga = 10000;
//                     break;
//                 case 'Thai Tea':
//                     $harga = 15000;
//                     break;
                
//                 default:
//                     echo "Menu minuman tidak ada";
//                     break;
//                 }
//             break;
        
//         default:
//             echo "Menu minuman tidak ada";
//             break;
//     }

//     $total = $harga * $jumlah;
//     $diskon = 0.1;

//     if ($total > 50000) {
//         $totalDiskon = $total * $diskon;
//     } else {
//         $totalDiskon = 0;
//     }

//     $totalBayar = $total - $totalDiskon;

//     return"
//     <h1>~Assalaam Coffe~</h1> <hr>

//     Nama: $nama <br>
//     Nomor Telepon: $nomor_telepon <br>
//     Tanggal Beli: $tanggal_beli <br>
//     Jenis: $jenis <br>
//     Menu: $menu <br>
//     Harga: $harga <br>
//     Jumlah: $jumlah
//     <hr>
//     Total: $total <br>
//     Diskon 10%: $totalDiskon
//     <hr>
//     Total Bayar: $totalBayar
//     ";
// });

// // routing view
//     Route::get('halaman1', function () {

//         $siswa = ['Rehan', 'Ilman', 'Fakhri', 'Davin', 'Radiedtya'];

//         return view('tampil1', compact('siswa'));
//     });

//     Route::get('halaman2', function () {

//         $hobi = ['Menyanyi', 'Membaca', 'Olahraga', 'Bermain', 'Belajar', 'Mancing', 'Mancing', 'Mancing', 'Mancing', 'Mancing'];

//         return view('tampil2', compact('hobi'));
//     });

//     Route::get('halaman3', function () {

//         $kelas = ['XI RPL 1', 'XI RPL 1', 'XI RPL 1', 'XI RPL 1', 'XI RPL 1', 'XI RPL 1', 'XI RPL 1', 'XI RPL 1', 'XI RPL 1', 'XI RPL 1'];

//         return view('tampil3', compact('kelas'));
//     });

// Route::get('post', [PostsController::class, 'menampilkan']);

Route::get('biodata', [BiodatasController::class, 'menampilkan']);

Route::get('post', function () {

    // // menampilkan data tertentu
    // return $post = Post::where('id', 'like', '%1%')->get();

    // // merubah data tertentu
    // $post = Post::find(1);
    // $post->content = "Belajar dengan giat lagi";
    // $post->save();
    // return $post;

    // // menampilkan semua data
    // return $post = Post::all();

    // // menambah data baru
    // $post = new Post;
    // $post->title = "menjadi teman yang baik";
    // $post->content = "menjadi teman yang baik adalah hal yang positif";
    // $post->save();
    // return $post;

    // // menghapus data tertentu
    // $post = Post::find(1);
    // $post->delete();
    // return $post;

    return view('halaman_post', compact('post'));
    
});

Route::get('post2', function () {

    $post = Post::all();
    return view('halaman_post2', compact('post'));
});

Route::get('siswa', function () {

    $siswa = Siswa::all();
    return view('halaman_siswa', compact('siswa'));
});

Route::get('biodata', function () {

    $biodata = Biodata::all();
    return view('halaman_biodata', compact('biodata'));
});

use App\Http\Controllers\StokController;

Route::resource('products', StokController::class);

// Route::get('biodata', function () {

//     $biodata = new Biodata;
//     $biodata->nama_lengkap = "Fakhri";
//     $biodata->jenis_kelamin = "Laki-laki";
//     $biodata->tanggal_lahir = "2000-09-06";
//     $biodata->tempat_lahir = "Bandung";
//     $biodata->agama = "Islam";
//     $biodata->alamat = "Kp. Bojong Tanjung, Bandung";
//     $biodata->telepon = "66666";
//     $biodata->email = "fakhri@gmail.com";
//     $biodata->save();
//     return $biodata;
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('post', PostsController::class);
Route::resource('biodata', BiodatasController::class);
Route::resource('pengguna', PenggunaController::class);

// Route::get('/wali-ke-mahasiswa', function () {
//     $wali = Wali::with('mahasiswa')->first();
//     return "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama}";
// });
// Route::get('/mahasiswa-ke-wali', function () {
//     $mahasiswa = Mahasiswa::with('wali')->first();
//     return "{$mahasiswa->nama} memiliki wali bernama {$mahasiswa->wali->nama}";
// });

Route::get('/one-to-many', [RelasiController::class, 'oneToMany']);

// Route::get('/mahasiswa-ke-dosen', function () {
//     $mhs = Mahasiswa::where('nim', '123456')->first();
//     return "{$mhs->nama} dibimbing oleh {$mhs->dosen->nama}";
// });

Route::get('/many-to-many', [RelasiController::class, 'manyToMany']);

Route::get('/one-to-one', [RelasiController::class, 'oneToOne']);
Route::resource('telepon', TeleponController::class);

Route::resource('kelas', KelasController::class);
Route::resource('murid', MuridController::class);

Route::resource('barang', BarangController::class);
Route::resource('pembeli', PembeliController::class);
Route::resource('transaksi', TransaksiController::class);