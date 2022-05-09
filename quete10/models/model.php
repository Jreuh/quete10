<?php

class bdd
{
        function dbConnect()
    {

    try {
    $db = new PDO(
        'mysql:host=localhost;dbname=quete10;charset=UTF8',
    'user1','user1');

    
        return $db;
        } catch (Exception $e) {
        die("Error: " . $e->getMessage());
        }
}
        public function createTable()
        {
    $db = $this->dbConnect();
    $sql = "CREATE TABLE `quete10`.`championdwwm2` ( `id` INT(3) NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(64) NOT NULL , `last_name` VARCHAR(64) NOT NULL , `age` INT(3) NOT NULL , `size` FLOAT(4) NOT NULL , `situation` VARCHAR(64) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    $query = $db->prepare($sql);
    $query->execute();
    require 'view/createTableView.php';
    header("Refresh:5; url=index.php");
    }
    public function readTable()
    {

    $db = $this->dbConnect();
    $sql = "SELECT * FROM `championdwwm2`";
    $query = $db->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $stagiaire) {
    ?>
    <h2 class="d-flex justify-content-center"><strong><?= $stagiaire['first_name'], ' ', $stagiaire['last_name'] ?> </strong></h2>
    <p class="d-flex justify-content-center"><?= $stagiaire['age'], " " ?>ans &nbsp;je &nbsp; mesure &nbsp;<?= $stagiaire['size'] ?> et&nbsp;je&nbsp;fais&nbsp;partie des
    <?= $stagiaire['situation'] ?>&nbsp;de L'&nbsp;AFCI.</p>
    <?php }
    }
    public function deleteAll()
    {
    $db = $this->dbConnect();
    $deletall = "TRUNCATE TABLE championdwwm2";
    $query = $db->prepare($deletall);
    $query->execute();
    }
    public function dropTable()
    {
    $db = $this->dbConnect();
    $sql = "DROP TABLE `championdwwm2`";
    $query = $db->prepare($sql);
    $query->execute();
    }
    public function createAll()
    {
    $db = $this->dbConnect();
    $sql = "INSERT INTO `championdwwm2` (`first_name`, `last_name`, `age`, `size`, `situation`) 
    VALUES ('JR', 'Decoster', '33', '1.7', 'Stagiaire'),('Valentin','Bruneel',28,1.7,'Stagiaire'),
    ('Anne','Devos',56,1.7,'Stagiaire'),('Yuliya','Bert',54,1.7,'Stagiaire'),('Dubar','JB',24,1.7,'Stagiaire'),
    ('Cappelaere','Nicolas',22,1.7,'Stagiaire'),('Fabien','Greaux',37,1.7,'Stagiaire'),
    ('Calbet','Colin',25,1.7,'Stagiaire'),('Decoster','JR',34,1.7,'Stagiaire'),('Ryckelynck','Allan',22,1.7,'Stagiaire'),
    ('Derouich','Omar',23,1.7,'Stagiaire')";
    $query = $db->prepare($sql);
    $query->execute();
    }
    public function randomID()
    {
    $db = $this->dbConnect();
    $search = "SELECT MIN(id) FROM championdwwm2";
    $query = $db->prepare($search);
    $query->execute();
    $minid = $query->fetch();
    $minid = $minid['MIN(id)'];
    $db = $this->dbConnect();
    $search = "SELECT Max(id) FROM championdwwm2";
    $query = $db->prepare($search);
    $query->execute();
    $maxid = $query->fetch();
    $maxid = $maxid['Max(id)'];
    $id = rand($minid, $maxid);
    return $id;
    }
    public function readOne()
    {
    $id = $this->randomID();
    $db = $this->dbConnect();
    $sql = "SELECT * FROM championdwwm2 WHERE id=$id";
    $query = $db->prepare($sql);
    $query->execute();
    $info = $query->fetch(); ?>

    <h2 class="d-flex justify-content-center"><strong><?= $info['first_name'], ' ', $info['last_name'] ?> </strong></h2>
    <p class="d-flex justify-content-center"><?= $info['age'], " " ?>ans &nbsp;je &nbsp; mesure &nbsp;<?= $info['size'] ?> et&nbsp;je&nbsp;fais&nbsp;partie des
    <?= $info['situation'] ?>&nbsp;de L'&nbsp;AFCI.</p><?php
    }
    public function updateOne()
    {
    $db = $this->dbConnect();
    $id = $this->randomID();
    $sql = "SELECT * FROM championdwwm2 WHERE id=$id";
    $query = $db->prepare($sql);
    $query->execute();
    $info = $query->fetch();
    $age = $info['age'] + 1;
    $sql = "UPDATE team SET age= :age where id=$id";
    $query = $db->prepare($sql);
    $query->bindValue(':age', $age, PDO::PARAM_INT);
    $query->execute();
    $sql = "SELECT * FROM championdwwm2 WHERE id=$id";
    $query = $db->prepare($sql);
    $query->execute();
    $info = $query->fetch();
    ?>

    <h2 class="d-flex justify-content-center"><strong><?= $info['first_name'], ' ',
    $info['last_name'] ?> </strong></h2>
    <p class="d-flex justify-content-center"><?= $info['age'], " " ?>ans
    &nbsp;je &nbsp; mesure &nbsp;<?= $info['size'] ?> et&nbsp;je&nbsp;fais&nbsp;
    partie des<?= $info['situation'] ?>&nbsp;de L'&nbsp;AFCI.</p><?php

    }
    public function deleteOne()
    {
    $id = $this->randomID();
    $db = $this->dbConnect();
    $del = "DELETE FROM championdwwm2 where id=:id";
    $query = $db->prepare($del);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    }
    public function listage()
    {
    $db = $this->dbConnect();
    $list = "SELECT* FROM championdwwm2 ORDER BY age";
    $query = $db->prepare($list);
    $query->execute();
    $infos = $query->fetchAll();
    foreach ($infos as $stagiaire) {
    ?>
    <h2 class="d-flex justify-content-center"><strong><?= $stagiaire['first_name'], ' ', $stagiaire['last_name'] ?> </strong></h2>
    <p class="d-flex justify-content-center"><?= $stagiaire['age'], " " ?>ans &nbsp;je &nbsp; mesure &nbsp;<?= $stagiaire['size'] ?> et&nbsp;je&nbsp;fais&nbsp;partie des
    <?= $stagiaire['situation'] ?>&nbsp;de L'&nbsp;AFCI.</p>
    <?php }
    }
}
