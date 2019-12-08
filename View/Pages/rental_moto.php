<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Moto name</th>
                        <th>Year of product</th>
                        <th>Number_plate</th>
                        <th>Person's name</th>
                        <th>Phone</th>
                        <th>ID Card</th>
                        <th>StartDate</th>
                        <th>EndDate</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                if (isset($data['view'])) {
                    foreach ($data['view'] as $result) {
                        ?>
                        <tbody>
                            <tr>
                                     
                                <td> <?php echo $result['motoId'];  ?> </td>
                                <td> <?php echo $result['moto_name'];  ?> </td>
                                <td> <?php echo $result['number_plate'];  ?> </td>
                                <td> <?php echo $result['year_of_product'];  ?> </td>

                                <td> <?php echo $result['userId'];  ?> </td>
                                <td> <?php echo $result['username'];  ?> </td>
                                <td> <?php echo $result['id_card'];  ?> </td>
                                <td> <?php echo $result['phonenumber'];  ?> </td>
                                <td> <?php echo $result['start_date'];  ?> </td>
                                <td> <?php echo $result['end_date'];  ?> </td>
                                <td>
                                    <a href=""> <i class="fas fa-edit"></i></a>
                                    <a href=""> <i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        </tbody>
                <?php
                    }
                }
                ?>

            </table>
        </div>
    </div>
</body>

</html>