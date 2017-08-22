# Project hướng dẫn lớp PHP0517E

## Hướng dẫn cài đặt project

Sau khi lấy code về các bạn bật Shell di chuyển đến project và chạy lệnh sau:
- Tải thư viện từ server composer:
```php
composer install
```
- Tạo một database mới tên là _*"demo0517e"*_
- Mở file ".env" sửa thông tin kết nối đến database
- Sau đó chạy lệnh để hệ thống generate key:
```php
php artisan key:generate
```
- Tiếp theo chạy lệnh để hệ thống sinh ra database: 
```php
php artisan migrate
```

Sau khi cài đặt xong truy cập _*localhost/demo0517e/public/index.php*_ để kiểm tra kết quả.

## Tạo file Migration Product

- Chạy lệnh:
```php
php artisan make:migration create_products_table --create=products
```

- Mở file "create_products_table" và sửa nội dung như sau:
```php
public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('description')->nullable();
        $table->text('content')->nullable();
        $table->string('thumbnail')->nullable();
        $table->float('price')->default(0);
        $table->string('status')->default('0');
        $table->timestamps();
    });
}
```

- Tiếp theo chạy lệnh để hệ thống sinh ra database: 
```php
php artisan migrate
```

## Hướng dẫn tạo Model Product

- Chạy lệnh:
```php
php artisan make:model Product
```

- Sử dụng tinker để test, gõ lệnh sau:
```php
php artisan tinker
$p = new App\Product();
$p->name = "San pham 1";
$p->save();
exit
```
    
## Hướng dẫn tạo Product Controller

- Chạy lệnh:
```php
php artisan make:controller ProductController --resource
```
- Mở file "ProductController.php" và thêm nội dung function index
```php
use Illuminate\Http\Request;
use App\Product; //Nhớ thêm thư viện

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('product.index', [ 'products' => $products ]);
    }
    
    ....................
}
```

## Hướng dẫn tạo Product View
- Tạo file view nằm trong đường dẫn "resources/views/product/index.blade.php" với nội dung như sau:
```php
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    @if(isset($products))
        @foreach($products as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
            </tr>
        @endforeach
    @endif
</table>
```

## Hướng dẫn tạo Route cho Product
- Mở file "_*routes/web.php*_" thêm dòng sua:
```php
Route::get('/', function () {
    return view('welcome');
});

//thêm dòng này
Route::get('product', 'ProductController@index'); 
```



