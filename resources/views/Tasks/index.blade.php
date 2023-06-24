<!doctype html>
<html lang="en">

<head>
    <title>Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .wrap-td {
            word-wrap: break-word;
        }

        tr:nth-child(even) {
            background-color: #bbd4ce
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container" style="margin-top: 50px;">
            <div class="row" style="margin-bottom: 20px;">
                <h1 style="text-align: center;">TASKS</h1>
            </div>
            <div class="row" style="display: flex;justify-content: center;margin-bottom: 20px;">
                <div class="col-4" style="display: flex;justify-content: center;">
                    <a name="submit" id="edit" class="btn btn-primary" style="background-color: #004d00;border-color: #fdebd3;" href="{{route('task.create')}}" role="button">Add new task here</a>
                </div>
            </div>
            <table class="table table-hover table-responsive-sm" style="table-layout: fixed;border-radius: 10px;overflow: hidden;">
                <thead>
                    <tr style="background-color: #679186; color:white">
                        <th scope="col" style="width: 100px">ID</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">DUE DATE</th>
                        <th scope="col" style="width: 100px">VIEW TASK</th>
                        <th scope="col" style="text-align: center;width: 200px">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td class="wrap-td">{{ $loop->iteration }}</td>
                        <td class="wrap-td">{{$task->title}}</td>
                        <td class="wrap-td">{{$task->description}}</td>
                        <td class="wrap-td">{{$task->due_date}}</td>
                        <td class="wrap-td" style="text-align: center;">
                            <a name="submit" id="edit" class="btn btn-primary" style="background-color: seagreen;border-color: darkgrey;" href="{{route('task.show', ['id' => $task])}}" role="button">View</a>
                        </td>
                        <td class="wrap-td" style="text-align: center;">
                            <a name="submit" id="edit" class="btn btn-primary" style="background-color: seagreen;border-color: darkgrey;" href="{{route('task.edit', ['id' => $task])}}" role="button">Edit</a>
                            <form style="display: inline-block;" method="POST" action="{{route('task.delete', ['id' => $task])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')" data-toggle="tooltip" title='Delete'>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>