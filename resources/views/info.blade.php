<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    {{-- <button class="btn btn-primary">Button bootstrap</button> --}}

    <div class="container">
        <div class="alert alert-info m3 text-center" role="alert">Trần Tiến - PH12974</div>
        <div class="alert alert-success text-center m-3" role="alert">
            ID = {{$id}}, Name = {{$res['name']}}, Class = {{$res['class']}}, Info = {{$res['info']}}
          </div>
        <h2 class="text-center m-5">Bảng dữ liệu</h2>
        <table class="table table-hover">
            <thead>
                <th>Tên</th>
                <th>Chiều cao</th>
                <th>Cân nặng</th>
                <th>Tuổi</th>
                <th>Giới tính</th>
                <th>avatar</th>
            </thead>
            <tbody>
                @foreach ($users as $student)
                    <tr>
                        <td>{{$student['name']}}</td>
                        <td>{{$student['height']}} CM</td>
                        <td>{{$student['weight']}} KG</td>
                        <td>{{$student['age']}}</td>
                        <td>
                            @if ($student['gender'] == 1)
                                Nam
                            @else
                                Nữ
                            @endif
                        </td>
                        <td><img width="100px" src="{{$student['avatar']}}" alt=""></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>