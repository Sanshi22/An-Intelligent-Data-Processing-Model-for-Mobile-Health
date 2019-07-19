<?php
// Starting session
session_start();
 
// Accessing session data
echo 'Hi, ' . $_SESSION["user"] ;
?>

<!DOCTYPE html>

<html lang="en">
  <head>
<style>
    .panel-body
    {
      color: black ;
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SANJEEVANI</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			
			</nav>
			
			      <br>
            <br>
            <br>
            <div class="banner-logo text-center">
            <br>
            <br>
            <div class="container">
               <div class="panel panel-default">
                  <div class="panel-heading"><h3 class="black">AN INTELLIGENT CLOUD BASED DATA PROCESSING MODEL FOR MOBILE HEALTH</h3></div>
                   <div class="panel-body" ><div class="banner-text text-center">     
                   <a href="home2.php" ><input type="submit" name="usermode" class="btn btn-appoint" value =" HOME " /></a>
                  <a href="doc_mod.php"><input type="submit" name="usermode" class="btn btn-appoint" value=" DOCTOR'S MODE " /></a>
                  <br>
                <br>
                <br>
    <div style ="color :black ; ">       
  <form action="/C_XAMPP_HTDOCS_ashu/ashu/kl.php" method ="post">
    <select name="symptom1">
      <option value="sym">SYMPTOM-1</option>  
      <option value="sym1">recurrent fever</option>
        <option value="sym2">chills</option>
        <option value="sym3">sweating</option>
        <option value="sym4">vomiting</option>
        <option value="sym4">pallor</option>
        <option value="sym4">headache</option>
        <option value="sym4">abdomen pain</option>
        <option value="sym4">fatigue</option>
        <option value="sym4">weight loss</option>
        <option value="sym4">breathlessness</option>
        <option value="sym4">oedema</option>
        <option value="sym4">muscle and joint pain</option>
          <option value="sym4">rashes</option>
          <option value="sym4">facial puffiness</option>
          <option value="sym4">chest pain</option>
          <option value="sym4">wheezing</option>
        <option value="sym4">appetite loss</option>
          <option value="sym4">delayed development</option>
          <option value="sym4">swelling of wrists</option>
          <option value="sym4">pot belly</option>
            <option value="sym4">protruding tongue</option>
            <option value="sym4">neck stiffness</option>
              <option value="sym4">feet oedema</option>
      
    </select>

    <select name="range1">
      <option value="r1">VERY LOW(0-20)</option>  
       <option value="r2">LOW(21-40)</option>
        <option value="r3">MEDIUM(41-60)</option>
        <option value="r4">HIGH(61-80)</option>
        <option value="r5">VERY HIGH(81-100)</option>

    </select>

    <input type="text" name="in" placeholder="Enter the intensity" value="0"></input>
    <br>
    <select name="symptom2">
        <option value="sym">SYMPTOM-2</option>  
        <option value="sym1">recurrent fever</option>
        <option value="sym2">chills</option>
        <option value="sym3">sweating</option>
       <option value="sym4">vomiting</option>
        <option value="sym4">pallor</option>
        <option value="sym4">headache</option>
        <option value="sym4">abdomen pain</option>
        <option value="sym4">fatigue</option>
        <option value="sym4">weight loss</option>
        <option value="sym4">breathlessness</option>
        <option value="sym4">oedema</option>
         <option value="sym4">muscle and joint pain</option>
          <option value="sym4">rashes</option>
          <option value="sym4">facial puffiness</option>
          <option value="sym4">chest pain</option>
         <option value="sym4">wheezing</option>
        <option value="sym4">appetite loss</option>
           <option value="sym4">delayed development</option>
          <option value="sym4">swelling of wrists</option>
          <option value="sym4">pot belly</option>
           <option value="sym4">protruding tongue</option>
            <option value="sym4">neck stiffness</option>
             <option value="sym4">feet oedema</option>
      
    </select>

    <select name="range1">
      <option value="r1">VERY LOW(0-20)</option>  
        <option value="r2">LOW(21-40)</option>
        <option value="r3">MEDIUM(41-60)</option>
        <option value="r4">HIGH(61-80)</option>
        <option value="r5">VERY HIGH(81-100)</option>

    </select>

    <input type="text" name="in2" placeholder="Enter the intensity" value="0"></input>

    <br>
    <select name="symptom3">
        <option value="sym">SYMPTOM-3</option>  
          <option value="sym1">recurrent fever</option>
        <option value="sym2">chills</option>
        <option value="sym3">sweating</option>
  <option value="sym4">vomiting</option>
  <option value="sym4">pallor</option>
  <option value="sym4">headache</option>
  <option value="sym4">abdomen pain</option>
  <option value="sym4">fatigue</option>
  <option value="sym4">weight loss</option>
  <option value="sym4">breathlessness</option>
  <option value="sym4">oedema</option>
   <option value="sym4">muscle and joint pain</option>
    <option value="sym4">rashes</option>
    <option value="sym4">facial puffiness</option>
    <option value="sym4">chest pain</option>
    <option value="sym4">wheezing</option>
   <option value="sym4">appetite loss</option>
     <option value="sym4">delayed development</option>
     <option value="sym4">swelling of wrists</option>
     <option value="sym4">pot belly</option>
      <option value="sym4">protruding tongue</option>
       <option value="sym4">neck stiffness</option>
          <option value="sym4">feet oedema</option>
      
</select>

<select name="range1">
<option value="r1">VERY LOW(0-20)</option>  
  <option value="r2">LOW(21-40)</option>
  <option value="r3">MEDIUM(41-60)</option>
  <option value="r4">HIGH(61-80)</option>
  <option value="r5">VERY HIGH(81-100)</option>

</select>

<input type="text" name="in3" placeholder="Enter the intensity" value="0"></input>
<br>
<select name="symptom3">
  <option value="sym">SYMPTOM-4</option>  
  <option value="sym1">recurrent fever</option>
  <option value="sym2">chills</option>
  <option value="sym3">sweating</option>
  <option value="sym4">vomiting</option>
  <option value="sym4">pallor</option>
  <option value="sym4">headache</option>
  <option value="sym4">abdomen pain</option>
  <option value="sym4">fatigue</option>
  <option value="sym4">weight loss</option>
  <option value="sym4">breathlessness</option>
  <option value="sym4">oedema</option>
   <option value="sym4">muscle and joint pain</option>
    <option value="sym4">rashes</option>
    <option value="sym4">facial puffiness</option>
    <option value="sym4">chest pain</option>
    <option value="sym4">wheezing</option>
   <option value="sym4">appetite loss</option>
     <option value="sym4">delayed development</option>
     <option value="sym4">swelling of wrists</option>
     <option value="sym4">pot belly</option>
      <option value="sym4">protruding tongue</option>
       <option value="sym4">neck stiffness</option>
          <option value="sym4">feet oedema</option>
      
</select>

<select name="range1">
<option value="r1">VERY LOW(0-20)</option>  
  <option value="r2">LOW(21-40)</option>
  <option value="r3">MEDIUM(41-60)</option>
  <option value="r4">HIGH(61-80)</option>
  <option value="r5">VERY HIGH(81-100)</option>

</select>

<input type="text" name="in4" placeholder="Enter the intensity" value="0"></input>

<br>
<select name="symptom3">
  <option value="sym">SYMPTOM-5</option>  
  <option value="sym1">recurrent fever</option>
  <option value="sym2">chills</option>
  <option value="sym3">sweating</option>
  <option value="sym4">vomiting</option>
  <option value="sym4">pallor</option>
  <option value="sym4">headache</option>
  <option value="sym4">abdomen pain</option>
  <option value="sym4">fatigue</option>
  <option value="sym4">weight loss</option>
  <option value="sym4">breathlessness</option>
  <option value="sym4">oedema</option>
   <option value="sym4">muscle and joint pain</option>
    <option value="sym4">rashes</option>
    <option value="sym4">facial puffiness</option>
    <option value="sym4">chest pain</option>
    <option value="sym4">wheezing</option>
   <option value="sym4">appetite loss</option>
     <option value="sym4">delayed development</option>
     <option value="sym4">swelling of wrists</option>
     <option value="sym4">pot belly</option>
      <option value="sym4">protruding tongue</option>
       <option value="sym4">neck stiffness</option>
          <option value="sym4">feet oedema</option>
      
</select>

<select name="range1">
<option value="r1">VERY LOW(0-20)</option>  
  <option value="r2">LOW(21-40)</option>
  <option value="r3">MEDIUM(41-60)</option>
  <option value="r4">HIGH(61-80)</option>
  <option value="r5">VERY HIGH(81-100)</option>

</select>

<input type="text" name="in5" placeholder="Enter the intensity" value="0"></input>

<br>
<select name="symptom3">
  <option value="sym">SYMPTOM-6</option>  
  <option value="sym1">recurrent fever</option>
  <option value="sym2">chills</option>
  <option value="sym3">sweating</option>
  <option value="sym4">vomiting</option>
  <option value="sym4">pallor</option>
  <option value="sym4">headache</option>
  <option value="sym4">abdomen pain</option>
  <option value="sym4">fatigue</option>
  <option value="sym4">weight loss</option>
  <option value="sym4">breathlessness</option>
  <option value="sym4">oedema</option>
   <option value="sym4">muscle and joint pain</option>
    <option value="sym4">rashes</option>
    <option value="sym4">facial puffiness</option>
    <option value="sym4">chest pain</option>
    <option value="sym4">wheezing</option>
   <option value="sym4">appetite loss</option>
     <option value="sym4">delayed development</option>
     <option value="sym4">swelling of wrists</option>
     <option value="sym4">pot belly</option>
      <option value="sym4">protruding tongue</option>
       <option value="sym4">neck stiffness</option>
          <option value="sym4">feet oedema</option>
      
</select>

<select name="range1">
<option value="r1">VERY LOW(0-20)</option>  
  <option value="r2">LOW(21-40)</option>
  <option value="r3">MEDIUM(41-60)</option>
  <option value="r4">HIGH(61-80)</option>
  <option value="r5">VERY HIGH(81-100)</option>

</select>

<input type="text" name="in6" placeholder="Enter the intensity" value="0"></input>

<br>
<select name="symptom3">
  <option value="sym">SYMPTOM-7</option>  
  <option value="sym1">recurrent fever</option>
  <option value="sym2">chills</option>
  <option value="sym3">sweating</option>
  <option value="sym4">vomiting</option>
  <option value="sym4">pallor</option>
  <option value="sym4">headache</option>
  <option value="sym4">abdomen pain</option>
  <option value="sym4">fatigue</option>
  <option value="sym4">weight loss</option>
  <option value="sym4">breathlessness</option>
  <option value="sym4">oedema</option>
   <option value="sym4">muscle and joint pain</option>
    <option value="sym4">rashes</option>
    <option value="sym4">facial puffiness</option>
    <option value="sym4">chest pain</option>
    <option value="sym4">wheezing</option>
   <option value="sym4">appetite loss</option>
     <option value="sym4">delayed development</option>
     <option value="sym4">swelling of wrists</option>
     <option value="sym4">pot belly</option>
      <option value="sym4">protruding tongue</option>
       <option value="sym4">neck stiffness</option>
          <option value="sym4">feet oedema</option>
      
</select>

<select name="range1">
<option value="r1">VERY LOW(0-20)</option>  
  <option value="r2">LOW(21-40)</option>
  <option value="r3">MEDIUM(41-60)</option>
  <option value="r4">HIGH(61-80)</option>
  <option value="r5">VERY HIGH(81-100)</option>

</select>

<input type="text" name="in7" placeholder="Enter the intensity" value="0"></input>

<br>
<select name="symptom3">
  <option value="sym">SYMPTOM-8</option>  
  <option value="sym1">recurrent fever</option>
  <option value="sym2">chills</option>
  <option value="sym3">sweating</option>
  <option value="sym4">vomiting</option>
  <option value="sym4">pallor</option>
  <option value="sym4">headache</option>
  <option value="sym4">abdomen pain</option>
  <option value="sym4">fatigue</option>
  <option value="sym4">weight loss</option>
  <option value="sym4">breathlessness</option>
  <option value="sym4">oedema</option>
   <option value="sym4">muscle and joint pain</option>
    <option value="sym4">rashes</option>
    <option value="sym4">facial puffiness</option>
    <option value="sym4">chest pain</option>
    <option value="sym4">wheezing</option>
   <option value="sym4">appetite loss</option>
     <option value="sym4">delayed development</option>
     <option value="sym4">swelling of wrists</option>
     <option value="sym4">pot belly</option>
      <option value="sym4">protruding tongue</option>
       <option value="sym4">neck stiffness</option>
          <option value="sym4">feet oedema</option>
      
</select>

<select name="range1">
<option value="r1">VERY LOW(0-20)</option>  
  <option value="r2">LOW(21-40)</option>
  <option value="r3">MEDIUM(41-60)</option>
  <option value="r4">HIGH(61-80)</option>
  <option value="r5">VERY HIGH(81-100)</option>

</select>

<input type="text" name="in8" placeholder="Enter the intensity" value="0"></input>

<br>
<select name="symptom3">
  <option value="sym">SYMPTOM-9</option>  
  <option value="sym1">recurrent fever</option>
  <option value="sym2">chills</option>
  <option value="sym3">sweating</option>
  <option value="sym4">vomiting</option>
  <option value="sym4">pallor</option>
  <option value="sym4">headache</option>
  <option value="sym4">abdomen pain</option>
  <option value="sym4">fatigue</option>
  <option value="sym4">weight loss</option>
  <option value="sym4">breathlessness</option>
  <option value="sym4">oedema</option>
   <option value="sym4">muscle and joint pain</option>
    <option value="sym4">rashes</option>
    <option value="sym4">facial puffiness</option>
    <option value="sym4">chest pain</option>
    <option value="sym4">wheezing</option>
   <option value="sym4">appetite loss</option>
     <option value="sym4">delayed development</option>
     <option value="sym4">swelling of wrists</option>
     <option value="sym4">pot belly</option>
      <option value="sym4">protruding tongue</option>
       <option value="sym4">neck stiffness</option>
          <option value="sym4">feet oedema</option>
      
</select>

<select name="range1">
<option value="r1">VERY LOW(0-20)</option>  
  <option value="r2">LOW(21-40)</option>
  <option value="r3">MEDIUM(41-60)</option>
  <option value="r4">HIGH(61-80)</option>
  <option value="r5">VERY HIGH(81-100)</option>

</select>

<input type="text" name="in9" placeholder="Enter the intensity" value="0"></input>

<br>
<select name="symptom3">
  <option value="sym">SYMPTOM-10</option> 
  <option value="sym1">recurrent fever</option>
  <option value="sym2">chills</option>
  <option value="sym3">sweating</option>
  <option value="sym4">vomiting</option>
  <option value="sym4">pallor</option>
  <option value="sym4">headache</option>
  <option value="sym4">abdomen pain</option>
  <option value="sym4">fatigue</option>
  <option value="sym4">weight loss</option>
  <option value="sym4">breathlessness</option>
  <option value="sym4">oedema</option>
   <option value="sym4">muscle and joint pain</option>
    <option value="sym4">rashes</option>
    <option value="sym4">facial puffiness</option>
    <option value="sym4">chest pain</option>
    <option value="sym4">wheezing</option>
   <option value="sym4">appetite loss</option>
     <option value="sym4">delayed development</option>
     <option value="sym4">swelling of wrists</option>
     <option value="sym4">pot belly</option>
      <option value="sym4">protruding tongue</option>
       <option value="sym4">neck stiffness</option>
          <option value="sym4">feet oedema</option>
      
</select>

<select name="range1">
<option value="r1">VERY LOW(0-20)</option>  
  <option value="r2">LOW(21-40)</option>
  <option value="r3">MEDIUM(41-60)</option>
  <option value="r4">HIGH(61-80)</option>
  <option value="r5">VERY HIGH(81-100)</option>

</select>

<input type="text" name="in10" placeholder="Enter the intensity" value="0"></input>

<br>
<select name="symptom3">
  <option value="sym">SYMPTOM-11</option> 
  <option value="sym1">recurrent fever</option>
  <option value="sym2">chills</option>
  <option value="sym3">sweating</option>
  <option value="sym4">vomiting</option>
  <option value="sym4">pallor</option>
  <option value="sym4">headache</option>
  <option value="sym4">abdomen pain</option>
  <option value="sym4">fatigue</option>
  <option value="sym4">weight loss</option>
  <option value="sym4">breathlessness</option>
  <option value="sym4">oedema</option>
   <option value="sym4">muscle and joint pain</option>
    <option value="sym4">rashes</option>
    <option value="sym4">facial puffiness</option>
    <option value="sym4">chest pain</option>
    <option value="sym4">wheezing</option>
   <option value="sym4">appetite loss</option>
     <option value="sym4">delayed development</option>
     <option value="sym4">swelling of wrists</option>
     <option value="sym4">pot belly</option>
      <option value="sym4">protruding tongue</option>
       <option value="sym4">neck stiffness</option>
          <option value="sym4">feet oedema</option>
      
</select>

<select name="range1">
<option value="r1">VERY LOW(0-20)</option>  
  <option value="r2">LOW(21-40)</option>
  <option value="r3">MEDIUM(41-60)</option>
  <option value="r4">HIGH(61-80)</option>
  <option value="r5">VERY HIGH(81-100)</option>

</select>

<input type="text" name="in11" placeholder="Enter the intensity" value="0"></input>

<br>
<select name="symptom3">
  <option value="sym">SYMPTOM-12</option> 
  <option value="sym1">recurrent fever</option>
  <option value="sym2">chills</option>
  <option value="sym3">sweating</option>
  <option value="sym4">vomiting</option>
  <option value="sym4">pallor</option>
  <option value="sym4">headache</option>
  <option value="sym4">abdomen pain</option>
  <option value="sym4">fatigue</option>
  <option value="sym4">weight loss</option>
  <option value="sym4">breathlessness</option>
  <option value="sym4">oedema</option>
   <option value="sym4">muscle and joint pain</option>
    <option value="sym4">rashes</option>
    <option value="sym4">facial puffiness</option>
    <option value="sym4">chest pain</option>
    <option value="sym4">wheezing</option>
   <option value="sym4">appetite loss</option>
     <option value="sym4">delayed development</option>
     <option value="sym4">swelling of wrists</option>
     <option value="sym4">pot belly</option>
      <option value="sym4">protruding tongue</option>
       <option value="sym4">neck stiffness</option>
          <option value="sym4">feet oedema</option>
      
</select>

<select name="range1">
<option value="r1">VERY LOW(0-20)</option>  
  <option value="r2">LOW(21-40)</option>
  <option value="r3">MEDIUM(41-60)</option>
  <option value="r4">HIGH(61-80)</option>
  <option value="r5">VERY HIGH(81-100)</option>

</select>

<input type="text" name="in12" placeholder="Enter the intensity" value="0"></input>
<br>
<center><input type="submit" class="btn btn-appoint" value="Submit"></center>
</form>
          </div>
                </div>
                </div>
                </div>  
                </div>
  </section>

  </body>
</html>





