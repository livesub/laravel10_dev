@php
    header ('Pragma: no-cache');
    header('Cache-Control: no-store, private, no-cache, must-revalidate');
    header('Cache-Control: pre-check=0, post-check=0, max-age=0, max-stale = 0', false);
    header('Pragma: public');
@endphp

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title>kim_dev_board</title>
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <table border=1>
        <tr>
            <td align="center">
                <h4>LARABEL10 BOARD DEMO</h4>
            </td>


        </tr>

        <tr>
            <td>
                <a href='{{ route('join.create') }}'>REGISTER</a>
            </td>
        </tr>
    </table>

    {{-- 각 내용 뿌리기 --}}
    @yield('content')


</body>
</html>