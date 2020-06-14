<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet" />
        <title>Summernote 圖片上傳</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2 mt-5">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h6 class="text-white">Summernote 圖片上傳</h6>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('summernote.upload') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label><strong>描述：</strong></label>
                                    <textarea class="form-control summernote" name="description"></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success btn-sm">儲存</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/lang/summernote-zh-TW.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".summernote").summernote({
                    tabsize: 4,
                    height: 300,
                    /*
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ],
                    */
                    lang: 'zh-TW'
                });
            });
        </script>
    </body>
</html>
