# Tạo table students
```
CREATE TABLE students(
	id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    phone_number VARCHAR(12),
    address VARCHAR(250),
    created_at timestamp NOT NULL DEFAULT current_timestamp(),
  	updated_at timestamp NOT NULL DEFAULT current_timestamp()

);
    Dữ liệu mẫu
INSERT INTO students(firstname,lastname, phone_number,address)
VALUES ("Van", "Mai", "1234567890","Binh Dinh"),
("Hoa","Nguyen", "0123456789","Quang Ngai");
```
# Chạy dự án
```
cmd: php artisan serve 
```
# Liên kết với database
```
trong file .evn: DB_DATABASE=laravel => DB_DATABASE=studentmanagement(tên DB)
```
# Đặt tên route và method
```
Verb    |     URL              |    Action     |    Route name  |Purpose
GET     |/sutdents             |index          |student.index   |show all student
GET     |/students/create      |create         |students.create |show view to create student
POST    |/students             |store          |studens.store   |store post to db
GET     |/students/edit/{id}   |edit           |students.edit   |show view to update the post
PATCH   |/students/{id}        |update         |student.update  |update post into db
DELETE  |/students/delete/{id} |destroy        |photos.destroy  |delete post from db
```
# Tạo model
```
php artisan make:model <Tên model>(tên bảng trong database nhưng không có 's')

php artisan make:model Student

```
# Tạo controller
```
php artisan make:controller <Tên controller>

php artisan make:controller StudentController
```
