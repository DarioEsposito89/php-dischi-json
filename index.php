<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DISCHI JSON</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.5/axios.min.js" integrity="sha512-JEXkqJItqNp0+qvX53ETuwTLoz/r1Tn5yTRnZWWz0ghMKM2WFCEYLdQnsdcYnryMNANMAnxNcBa/dN7wQtESdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body style="background-color: rgb(38, 50, 79);">
    <div id="app">
        <main>
            <div class="container d-flex jusify-content-center">
                <div class="row row-cols-4 d-flex gap-5 justify-content-center p-5">
                    <div class="card my-2 p-2" style="background-color: rgb(68, 107, 199);" v-for=" item in diskList ">
                        <img :src="item.poster" alt="" srcset="">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <p class="card-title fs-3 fw-bold text-center text-white"> {{ item.title }} </p>
                            <p class="card-author fs-4 mt-1 fw-bold"> {{ item.author  }} </p>
                            <p class="card-genre fs-6"> {{ item.genre  }} </p>
                            <p class="card-year fs-4"> {{ item.year }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./script.js"></script>
</body>

</html>