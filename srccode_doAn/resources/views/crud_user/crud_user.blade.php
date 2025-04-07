@extends('dashboard')

@section('content')



<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lí người dùng</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .table thead {
      background-color: #343a40;
      color: white;
    }
    .table tbody tr:hover {
      background-color: #f1f1f1;
    }
    .action-icons i {
      cursor: pointer;
      margin: 0 5px;
    }
    .action-icons i:hover {
      color: #0d6efd;
    }
    .title {
      text-align: center;
      margin-top: 30px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2 class="title">Quản lí người dùng</h2>
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Loại tài khoản</th>
          <th>ID người dùng</th>
          <th>Tên người dùng</th>
          <th>Mật khẩu</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Số điện thoại</th>
          <th>Chức vụ</th>
          <th>Chức năng</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        

        <tr>
          <td>{{ $user->account_type}}</td>
          <td>{{$user->user_id}}</td>
          <td>{{$user->user_name}}</td>
          <td>{{$user->user_pass}}</td>
          <td>{{$user->user_email}}</td>
          <td>{{$user->user_address}}</td>
          <td>{{$user->user_phone}}</td>
          <td>{{$user->role}}</td>
          <td class="action-icons">
            <a href="{{ route('users.createUser') }}">
            <i class="fas fa-plus-circle text-success" title="Thêm"></i>
            </a>
            <a href="{{ route('users.createUser') }}">
            <i class="fas fa-trash-alt text-danger" title="Xoá"></i>
            </a>
            <i class="fas fa-edit text-primary" title="Sửa"></i>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection


@extends('dashboard')

@section('content')



<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lí người dùng</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .table thead {
      background-color: #343a40;
      color: white;
    }
    .table tbody tr:hover {
      background-color: #f1f1f1;
    }
    .action-icons i {
      cursor: pointer;
      margin: 0 5px;
    }
    .action-icons i:hover {
      color: #0d6efd;
    }
    .title {
      text-align: center;
      margin-top: 30px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2 class="title">Quản lí người dùng</h2>
    <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th>Loại tài khoản</th>
          <th>ID người dùng</th>
          <th>Tên người dùng</th>
          <th>Mật khẩu</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Số điện thoại</th>
          <th>Chức vụ</th>
          <th>Chức năng</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        

        <tr>
          <td>{{ $user->account_type}}</td>
          <td>{{$user->user_id}}</td>
          <td>{{$user->user_name}}</td>
          <td>{{$user->user_pass}}</td>
          <td>{{$user->user_email}}</td>
          <td>{{$user->user_address}}</td>
          <td>{{$user->user_phone}}</td>
          <td>{{$user->role}}</td>
          <td class="action-icons">
            <a href="{{ route('users.createUser') }}">
            <i class="fas fa-plus-circle text-success" title="Thêm"></i>
            </a>
            <a href="{{ route('users.createUser') }}">
            <i class="fas fa-trash-alt text-danger" title="Xoá"></i>
            </a>
            <i class="fas fa-edit text-primary" title="Sửa"></i>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection