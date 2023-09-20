<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    
    
</head>
<body>
    
    <div class="profile-container">
        <h1>MY profile</h1>
        <div class="person">
          <i class="bi bi-person-circle"></i>
        </div>
        <hr class="line">
        <div class="person-form">
        Name:
            <input type="text" id="pname" class="pname" name="pname" ><br><br>
        Email:
            <input type="text" id="pmail" class="pmail" name="pmail" ><br><br>
        Mobile Number:
            <input type="text" id="pmobile" class="pmobile" name="pmobile" ><br><br>
        Address
            <input type="text" id="pAddress" class="pAddress" name="pAddress" ><br><br>
        </div>

        <div class="person-group">
            <button type="submit" class="div1" name="editbtn">edit</button>
            <button type="submit" class="div2" name="deletebtn">delete</button>
            <button type="submit" class="div3" name="createbtn">crate new</button>
        </div>


    
    </div>

    
</body>
</html>