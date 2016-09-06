<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Create Package</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Create Package</h1>
            <form method = 'get' action = '{{url("package")}}'>
                <button class = 'btn btn-danger'>Package Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("package")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="name">name</label>
                    <input id="name" name = "name" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea id="description" name = "description" type="text" class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="description_does_what">description_does_what</label>
                    <input id="description_does_what" name = "description_does_what" type="text" class="form-control">
                </div>
                                
                <div class="form-group">
                    <label for="string_composer">string_composer</label>
                    <input id="string_composer" name = "string_composer" type="text" class="form-control">
                </div>
                
                                                
                <div class="form-group">
                    <label for="dashboard_URL">dashboard_URL</label>
                    <input id="dashboard_URL" name = "dashboard_URL" type="text" class="form-control">
                </div>
                
                                                
                <div class="form-group">
                    <label for="github_URL">github_URL</label>
                    <input id="github_URL" name = "github_URL" type="text" class="form-control">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
