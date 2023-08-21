<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Document</title>
</head>
<style>
    .big{
        display:flex;
        flex-wrap:nowrap;
       
       
    }
    .container {
        background-color:black;
        margin-right:50px;
      
        
        
    }
</style>
<body>
    <h1> this is book</h1>
   <h2>
<div class="big">
 @foreach($index as $value)
    
 <!-- for image link dont forget img syntax-->
 <br>
 <div class="container">

    <div class="image">
    <img src=" {{$value['image']}}" alt="">
    </div>
    <br>

    <div class="text">
    <span style="color:red">{{$value['title']}}</span>
    <br>
    <span style="color:blue">{{$value['short_desc']}}</span>
</div>
</div>
  @endforeach;
</div>

</h2>
</body>
</html>