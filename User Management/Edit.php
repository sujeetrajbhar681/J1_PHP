<?php
session_start();
include 'db.php';

if(isset($_GET["id"])){
    $id=$_GET["id"];

    $sql=$conn->prepare("select * from employee where id=?");
    $sql->bind_param("i", $id);
    $sql->execute();

    $user=$sql->get_result()->fetch_assoc();

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name=$_POST["name"];
        $age=$_POST["age"];
        $salary=$_POST["salary"];
        $email=$_POST["email"];

        $sql=$conn->prepare("update employee set name=?, age=?, salary=?, email=? where id=?");
        $sql->bind_param("sidsi", $name, $age, $salary, $email, $id);

        if($sql->execute()){
            header("Location: Home.php");
        }
    }
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
        </header>
        <main>
           <form method="POST">
             <div
                class="container container rounded shadow border mt-5 my-5 p-5 col-4"
            >
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        value="<?= $user["name"] ?>"
                        id="name"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Age</label>
                    <input
                        type="text"
                        class="form-control"
                        name="age"
                        value="<?= $user["age"] ?>"
                        id="age"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Salary</label>
                    <input
                        type="text"
                        class="form-control"
                        name="salary"
                        value="<?= $user["salary"] ?>"
                        id="salary"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        value="<?= $user["email"] ?>"
                        id="email"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

               <button type="submit" class="btn btn-primary">Edit</button>
                
                
            </div>
           </form>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
