
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to load content after a user scroll down with ajax and php</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="pb-3  pt-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                <span class="fs-4">Loading content on scroll using ajax and php example</span>
            </a>
        </header>
            
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">How to Load content after a user scrolls down the page using ajax and PHP</h1>
                <p class="col-md-8 fs-4">Sometimes you need to show more content to the user as he/she scrolls down the page. This can have more benefits like increasing page load performance. Scroll down to see the effect.</p>
                <button class="btn btn-primary btn-lg" type="button">Source Code</button>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-3">
                <img src="https://cdn.r24live.rw/images/medium/1669127605_perimi.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h5>
                    <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4">
                <div class="card mb-3">
                <img src="https://cdn.r24live.rw/images/medium/1669133014_arton67499-c9afd.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h5>
                    <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4">
                <div class="card mb-3">
                <img src="https://cdn.r24live.rw/images/medium/1669127605_perimi.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h5>
                    <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4">
                <div class="card mb-3">
                <img src="https://cdn.r24live.rw/images/medium/1668844691_thumbs-b-c-98dea8ca4d06daf62d054e2d73ab4bf5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h5>
                    <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4">
                <div class="card mb-3">
                <img src="https://cdn.r24live.rw/images/medium/1668770770_arton67405-1cd42.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h5>
                    <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4">
                <div class="card mb-3">
                <img src="https://cdn.r24live.rw/images/medium/1634385128_impenure-2542491596784417.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</h5>
                    <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="ajaxContent"></div>
        <div id="loading" class="text-center d-none">Loading...</div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        /**Wait until the dom is full loaded**/
        document.addEventListener("DOMContentLoaded", function () {
            // Listen as user scroll down the document 
            window.addEventListener('scroll',onScrollHandler);
            console.log(document.body.scrollHeight);
        });
        function onScrollHandler(e){
            var ajaxContentContainer = document.getElementById('ajaxContent');
            var scrolledHeight = (window.innerHeight + window.scrollY);
            if(scrolledHeight == document.documentElement.scrollHeight) {
                loadContent((content)=>{
                    console.log(content);
                    var newContent = document.createElement('div');
                    newContent.innerHTML=content;
                    ajaxContentContainer.append(newContent);
                });
            }
        }

        function loadContent(callback){
            let loading = document.getElementById('loading');
            loading.classList.remove('d-none');
            fetch('content.php',{
                method:'post'
            })
            .then(res=>{return res.text()})
            .then(data=>{
                loading.classList.add('d-none');
                if(!data){
                    throw "Data was not found";
                }
                else{
                    callback(data);
                }
            })
            .catch(err=>{
                loading.classList.add('d-none');
                console.log(err);
            })
        }
    </script>
</body>
</html>
