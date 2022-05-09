<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/styles/style.css">
</head>

<body>

    <header class="container-fluid bg-secondary text-white" id="top">
        <div class="row justify-content-center">
            <div id="champion"></div>
        </div>
        <div class="text-center bg-secondary text-white align-middle">
            <a href="index.php?action=cTable"><button class="bg-secondary text-white align-middle">Create</button></a>
            <a href="index.php?action=rTable"><button class="bg-secondary text-white align-middle">Read</button></a>
            <a href="index.php?action=tTable"><button class="bg-secondary text-white align-middle">Truncate</button></a>
            <a href="index.php?action=dTable"><button class="bg-secondary text-white align-middle">Delete</button></a>
        </div>
        <div class="text-center bg-secondary">
            <a href="index.php?action=cAll"><button class="bg-secondary text-white align-middle">Createall</button></a>
            <a href="index.php?action=rOne"><button class="bg-secondary text-white align-middle">Readone</button></a>
            <a href="index.php?action=updO"><button class="bg-secondary text-white align-middle">Updateone</button></a>
            <a href="index.php?action=delO"><button class="bg-secondary text-white align-middle">Deleteone</button></a>
            <a href="index.php?action=list"><button class="bg-secondary text-white align-middle">List by age</button></a>
        </div>
    </header>

    <?php echo $content ?>
    <p class="d-flex justify-content-center"> <img src="./public/img/me.png" alt="Mon avatar"></p>
    <footer class="d-flex justify-content-center">

        <p> <br> &copy;J-R &nbsp;Decoster</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>