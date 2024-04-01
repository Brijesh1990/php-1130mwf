<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    
</head>
<body>

    <!-- web services  : fetch any url data or json data inside of your webpage i.e called web services
    
      http://country.io/names.json
      
    -->
    <div class="container col-md-8 mx-auto p-5 mt-5">
        <h4>Fetch country list using json web services</h4>
        <form method="post">
            <div class="form-group">
                <select name="country" class="form-control">
                    <option value="">-select country-</option>
                    <?php 
                    $url="http://country.io/names.json";
                    $data=file_get_contents($url,true);
                    $decode_data=json_decode($data,true);
                    foreach($decode_data as $row)
                    {
                     ?>
                    <option value="<?php echo $row;?>"><?php echo $row;?></option>
                    <?php 
                    }
                    ?>
                </select>
            </div>
        </form>

    </div>
    
</body>
</html>
