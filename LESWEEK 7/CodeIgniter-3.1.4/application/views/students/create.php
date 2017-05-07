<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
    <style>

        .container{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .section{
            display: block;
            width:40%;
        }

        .listStudents {

            background-color: #00aced;
            color: white;
        }

        .alert{
            display: block;
            border-radius: 15px;
            padding:5px 10px;
            color: white;
        }
        .alert-success{
            background-color: green;
        }
        .alert-error{
            background-color: red;
        }

        form input, button{
            padding:10px;
            border-radius: 15px;
            margin:10px;
        }

    </style>
</head>
<body>

<div class="container">

    <div class="section">

        <h1>Add a Student</h1>

        <form action="" method="post">
            <div>
                <input type="text" id="firstname" name="firstname" placeholder="Firstname">
            </div>
            <div>
                <input type="text" id="lastname" name="lastname" placeholder="Lastname">
            </div>
            <div>
                <button>Save</button>
            </div>
        </form>

    </div>

    <div class="section">

        <h2>Search students </h2>

        <form action="" method="get">

            <div>
                <input type="text" id="search" name="search" placeholder="Search">
                <button>Search</button>

            </div>
        </form>

        <div class="listStudents">
        <ul>
            <?php foreach ($students->result() as $s): ?>
                <li><p><?php echo $s->firstname . " " . $s->lastname; ?></p></li>
                <br>
            <?php endforeach; ?>
        </ul>

        </div>

    </div>

</div>

</body>
</html>