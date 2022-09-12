<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    fieldset {
      overflow: hidden
    }
    
    .some-class {
      float: left;
      clear: none;
    }
    
    label {
      float: left;
      clear: none;
      display: block;
      padding: 0px 1em 0px 8px;
    }
    
    input[type=radio],
    input.radio {
      float: left;
      clear: none;
      margin: 2px 0 0 2px;
    }
    .help{
        -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
    }
    label {
    color: #a58888;
}
input.col-md-12 {
    padding: 4px;
    border-radius: 6px;
    border: 1px solid #836f6f;
}
</style>

</head>
<body>
  <div class="container-fluid">
    <p>Simply enter your text, font and color choices into the design tool above to get an instant quote for most signs. For more complex designs and special requests, please use this form and our friendly team will be happy to help.</p>

    <form action="saveform" method="post">
        <label for="name">Your Name *</label><br>
        <input type="text" class="col-md-12" name="name"><br><br>

        <label for="email">Your Email *</label><br>
        <input type="text" class="col-md-12" name="email"><br><br>

        <label for="phone">Your Phone</label><br>
        <input type="text" class="col-md-12" name="phone"><br><br>

        <p>Indoor/outdoor Sign*</p>
        <fieldset>
            <div class="some-class">
              <input type="radio" class="radio" name="indoor-outdoor" value="indoor" id="indoor" />
              <label for="indoor">Indoor</label>
              <input type="radio" class="radio" name="indoor-outdoor" value="outdoor" id="outdoor" />
              <label for="outdoor">Outdoor</label>
            </div>
          </fieldset>
       
          <label class="container">What Can I help you with?* </label><br>
          <textarea name="help" class="col-md-12 help" rows="7"></textarea><br><br>
       <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input class="btn btn-primary" type="button" value="Send form">
        </div>
        <div class="col-md-4"></div>
       </div>
    </form>
</div>
</body>
</html>