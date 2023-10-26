<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <form action="?url=doctors/create" method="post">
  
  <!-- <div class="grid grid-cols-2 p-2">
    <div><span>FirstName</span>
      <input type="text" name="" id="" class="border-2"></div>
      <div><span>LastName</span>
      <input type="text" name="" id=""  class="border-2"></div>
  </div> -->
  
  <div>
    <label for="">Firstname</label>
  <input type="text" name="firstname" id="firstname" class="border-2">
  </div>

  <div>
    <label for="">lastname</label>
  <input type="text" name="lastname" id="lastname" class="border-2">
  </div>

  <div>
    <label for="">email</label>
  <input type="text" name="email" id="email">
  </div>

  <div>
    <label for="">address</label>
  <input type="text" name="address" id="address">
  </div>

  <div>
    <label for="">About</label>
  <input type="text" name="About" id="About">
  </div>

  <div>
    <label for="">specialist</label>
  <input type="text" name="specialist" id="specialist">
  </div>

<div>
  <input type="submit" name="submit" id="submit" class="cursor-pointer">
</div> 


   </form>
  
</body>
</html>