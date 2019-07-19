<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Health Prediction System Using Machine Learning</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- =======================================================
        Theme Name: Health Prediction System Using Machine Learning
        Author: Ashutosh Rout
    ======================================================= -->
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			
			</nav>
			
			<div class="container">
				<div class="row">
					<div class="banner-info">
						<div class="banner-logo text-center">
							<h1 class="white">Health Prediction System Using Machine Learning</h1>
							<div class="banner-text text-center">
							<a href="patient_mode.php" ><input type="submit" name="usermode" class="btn btn-appoint" value =" PATIENT'S MODE " /></a>
							<a href="doc_mode.php"><input type="submit" name="usermode" class="btn btn-appoint" value=" DOCTOR'S MODE " /></a>
						</div>
						<!--	<img src="img/logo1.png" class="img-responsive"> -->
						</div>
						<div class="banner-text text-center">
							<h1 class="white">Healthcare at your desk!!</h1>
						</div>
						
						<form action="#" method="post" type="submit" name="diagnose">
							<a href="doc_mode.php"><input type="submit" name="diagnose" class="btn btn-appoint" value=" CLICK TO DIAGNOSE " /></a>
							<br><br>
						</form>
				
				
				
				<?php
				static $i=0;
			//this is  basicaly done  to  read  the  data  from  the  external  file 
		
			$fileName = "C:/Users/ASHUTOSH/Documents/Machine_learning/ques_ans.txt";
			$fp = fopen($fileName,"r");
			if( $fp == false )
			{
				echo ( "Error in opening file" );
				exit();
			}
				
				$contents=file_get_contents($fileName);
				$sympt=explode(",",$contents);
						//echo ("What is the intensity of " .$sympt[0]." ?");
					//echo '<i style="color:white;font-size:30px;font-family:calibri ;">What is the intensity of ' .$sympt[$i].' ? </i> ';
			
			
				if(isset($_POST['diagnose']))
				{
						
					echo '<i style="color:white;font-size:30px;font-family:calibri ;">What is the intensity of ' .$sympt[$i].' ? </i> ';				
					echo $i;
				}
				if(isset($_POST['submit_respons']))
				{	
					$i++;
					
						echo $i;
						unset($_POST['submit_respons']);				
							
					
					echo isset($_POST['submit_respons']);
					echo '<i style="color:white;font-size:30px;font-family:calibri ;">What is the intensity of ' .$sympt[$i].' ? </i> ';										
				}
				//
				
				
		
			?>	
			
			
						<!-- following code is use to put options just after the question -->
				
				<br><br>
				
				<form action="#" method="post" type="submit" name="submit_response">
				<font color="white">LOW </font><select name="x">
					<option value="#">None</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="3">2</option>
					<option value="4">3</option>
					<option value="5">4</option>
					<option value="6">5</option>
					<option value="0">6</option>
					<option value="1">7</option>
					<option value="3">8</option>
					<option value="4">9</option>
					<option value="5">10</option>
					<option value="1">11</option>
					<option value="3">12</option>
					<option value="4">13</option>
					<option value="5">14</option>
					<option value="6">15</option>
					<option value="0">16</option>
					<option value="1">17</option>
					<option value="3">18</option>
					<option value="4">19</option>
					<option value="5">20</option>
					<option value="1">21</option>
					<option value="3">22</option>
					<option value="4">23</option>
					<option value="5">24</option>
					<option value="6">25</option>
					<option value="0">26</option>
					<option value="1">27</option>
					<option value="3">28</option>
					<option value="4">29</option>
					<option value="5">30</option>

				</select>
				<font color="white">MODERATE </font><select name="y">
					<option value="#">None</option>
					<option value="1">31</option>
					<option value="3">32</option>
					<option value="4">33</option>
					<option value="5">34</option>
					<option value="6">35</option>
					<option value="0">36</option>
					<option value="1">37</option>
					<option value="3">38</option>
					<option value="4">39</option>
					<option value="5">40</option>
					<option value="1">41</option>
					<option value="3">42</option>
					<option value="4">43</option>
					<option value="5">44</option>
					<option value="6">45</option>
					<option value="0">46</option>
					<option value="1">47</option>
					<option value="3">48</option>
					<option value="4">49</option>
					<option value="5">50</option>
					<option value="1">51</option>
					<option value="3">52</option>
					<option value="4">53</option>
					<option value="5">54</option>
					<option value="6">55</option>
					<option value="0">56</option>
					<option value="1">57</option>
					<option value="3">58</option>
					<option value="4">59</option>
					<option value="5">60</option>

				</select>
				<font color="white">HIGH </font><select name="z">
					<option value="#">None</option>
					<option value="1">61</option>
					<option value="3">62</option>
					<option value="4">63</option>
					<option value="5">64</option>
					<option value="6">65</option>
					<option value="0">66</option>
					<option value="1">67</option>
					<option value="3">68</option>
					<option value="4">69</option>
					<option value="5">70</option>
					<option value="1">71</option>
					<option value="3">72</option>
					<option value="4">73</option>
					<option value="5">74</option>
					<option value="6">75</option>
					<option value="0">76</option>
					<option value="1">77</option>
					<option value="3">78</option>
					<option value="4">79</option>
					<option value="5">80</option>
					<option value="1">81</option>
					<option value="3">82</option>
					<option value="4">83</option>
					<option value="5">84</option>
					<option value="6">85</option>
					<option value="0">86</option>
					<option value="1">87</option>
					<option value="3">88</option>
					<option value="4">89</option>
					<option value="5">90</option>
					<option value="1">91</option>
					<option value="3">92</option>
					<option value="4">93</option>
					<option value="5">94</option>
					<option value="6">95</option>
					<option value="0">96</option>
					<option value="1">97</option>
					<option value="3">98</option>
					<option value="4">99</option>

				</select>
				<input type="submit" name="submit_respons" value=" SUBMIT YOUR RESPONSE " />
				<br><br><br>
				
			</form>
						
					


			
			
			
				
			
					
			
			
			
			
			
			
			
			
					
						
						
						
						
						<div class="overlay-detail text-center">
			               <a href="#service"><i class="fa fa-angle-down"></i></a>
						   
			             </div>		
					</div>
					
					
					
				</div>
			</div>
		</div>
	</section>
	<!--/ banner-->
	<!--service-->
	
			
			
			
			
			
			
			
	
	
		
 	
			
			
		
		<br><br><br>
		
		
		
		
		<input type="submit" name="preict1" class="btn btn-appoint" value=" PREDICT USING DECISION TREE" />
		
		<input type="submit" name="preict2" class="btn btn-appoint" value=" PREDICT USING LOGISTIC REGRESSION" />
		
		<input type="submit" name="preict3" class="btn btn-appoint" value=" PREDICT USING NAIVE BAEYES" />
		
		<input type="submit" name="preict4" class="btn btn-appoint" value=" PREDICT USING SVM " />
		
		<input type="submit" name="preict5" class="btn btn-appoint" value=" PREDICT USING RANDOM FOREST " />
			

		<br><br><br>

				
	
	
	
	
	
					
	
  </body>
</html>