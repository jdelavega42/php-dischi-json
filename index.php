<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div id="app">
        <div class="mc_wrapper text p-3 p-relative">
            <header class="d-flex align-items-center">
            <i class="fa-brands fa-spotify fa-2x" style="color: #18d860;"></i>
            </header>
            <main class="container">
                <div class="row row-cols-3 ">
                    <div v-for="(disco, index) in dischi" :key="index" class="col p-3">
                        <div class="card h-100 ms_card text-white">
                            <img :src="disco.poster" alt="">
                            <p> {{disco.title}}</p>
                            <p> {{disco.author}}</p>
                            <p> {{disco.year}}</p>
                        </div>
                    </div>
                </div>
                <div class="text-white ms_details">
                    <div class="ms_info">
                        <div class="text-end mb-3">
                            <i class="fa-regular fa-rectangle-xmark fa-2x"></i>
                        </div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quasi assumenda, iusto, facilis rem adipisci pariatur itaque mollitia quis possimus corrupti porro. Sint corrupti minima magnam quae, porro mollitia non?
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>