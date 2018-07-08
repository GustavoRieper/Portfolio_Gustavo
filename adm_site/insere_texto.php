<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- include libraries(jQuery, bootstrap) -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

        <!-- include summernote css/js -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
        <style>
            .texto{
                width: 60%;
                margin-left: 20%;
            }
            #summernote{
                height: 500px!important;
            }
            .note-editing-area{
                height: 500px;
            }
        </style>
               
    </head>
    
    <body>
        <div class="texto">
            <div id="summernote">Insira o Texto</div>

            <script>
                $(document).ready(function() {
                  $('#summernote').summernote();
                });
            </script>
        </div>
    </body>
</html>