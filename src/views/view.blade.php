<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</head>
<body>

    <div class="container">
        <div class="row">

            <div class="col-md-10 col-12 mx-auto">
                @include('bulkemailtool::app')
            </div>

            <div class="col-md-10 col-12 mx-auto rounded border p-4 mt-5 bg-light">
                <h3>
                    Sent Email View
                    <a href="{{route('bulk_email_recent')}}" class="btn btn-sm btn-primary">Back to List</a>
                </h3>
                <br/>
                    <div class="form-group">
                        <label for="">Mail Subject</label>
                        <input type="text" name="subject" class="form-control" value="{{$email->subject}}">
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea name="message" id="summernote" rows="10" class="form-control">{!! $email->message !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Email List</label>
                        <textarea name="list" rows="10" class="form-control">@foreach($email->email_list as $email_list){{$email_list}}, @endforeach</textarea>
                    </div>

                <script>
                    $('#summernote').summernote({
                      placeholder: 'Message here',
                      tabsize: 2,
                      height: 320,
                      toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                      ]
                    });
                  </script>
                  
            </div>
        </div>
    </div>


   
    
</body>
</html>