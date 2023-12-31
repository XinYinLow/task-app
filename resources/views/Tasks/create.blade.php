<!doctype html>
<html lang="en">

<head>
    <title>Add New Task</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>

    </header>
    <main>
        <div class="container" style="margin-top: 50px;">
            <div class="row" style="margin-bottom: 20px;">
                <h1 style="text-align: center;">CREATE NEW TASK</h1>
            </div>
            <div class="container" style="border-radius: 10px;background-color: #bbd4ce;padding: 20px;">
                <form action="{{route('task.store')}}" method="POST" style="padding-top: 10px;">
                    @csrf
                    @method('post')
                    <div class="mb-3 row">
                        <label for="Title" class="col-4 col-form-label">Title</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="title" id="taskTitle" placeholder="TITLE">
                            @error('title') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Description" class="col-4 col-form-label">Description</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="description" id="taskDes" placeholder="DESCRIPTION">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="DueDate" class="col-4 col-form-label">Due Date</label>
                        <div class="col-8">
                            <input type="datetime-local" class="form-control" name="due_date" id="taskDue" placeholder="DUE DATE">
                            @error('due_date') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="offset-sm-4 col-sm-4">
                            <button type="submit" class="btn btn-primary" style="background-color: seagreen;border-color: darkgrey;">Create</button>
                        </div>
                        <div class="col-sm-4" style="justify-content: flex-end;display: flex;">
                            <a href="{{ route('task.index') }}" class="btn btn-primary" style="background-color: #454d66;border-color: darkgrey;">Back</a>
                        </div>
                    </div>
                </form>
            </div>
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