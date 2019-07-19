<!DOCTYPE html>
<html>
<body background="medical_background.jpg">
<a href="doc_mode.php"><input type="submit" name="docmode" value=" DOCTOR'S MODE " /></a>
<a href="home2.php"><input type="submit" name="home" value=" HOME PAGE " /></a>
<h1><center>Health Prediction System Using Machine Learning</center></h1>

<p align="right">BE IT</p>

<!--
	<button type="button" onclick="myFunction()">Try it</button>
	<button type="button" onclick="WriteFile()">File Handling</button>
	<p>(myFunction is stored in an external file called "myScript.js")</p>
-->

	<?php
		$my_file = 'file.txt';
		$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates fil
		$read = fopen($my_file, 'r');
		
			
		
		$tobewritn = '1234567 8 90';
		fwrite($handle, $tobewritn);
		$data = fread($read,filesize($my_file));
		$datanew = "\n"." definetly";
		fwrite($handle, $datanew);
		//print(filesize($my_file));
		fclose($handle);
		
	?>
	
	
	<?php
		//this is  basicaly done  to  read  the  data  from  the  external  file 
		/*
		$fileName = "C:/Users/ASHUTOSH/Documents/Machine_learning/test.txt";
		$fp = fopen($fileName,"r");
		if( $fp == false )
		{
			echo ( "Error in opening file" );
			exit();
		}
  
		while(!feof($fp))
		{
			echo fgets($fp). "<br>";
		}
		*/
	?> 

    <H1>Enter Your Symptoms!!</H1>
<table border=4>
<tr><td>
	<ol>		
			<form action="#" method="post" type="submit">
		<li>	<select name="symtom1">
				<option value="0">None</option>
				<option value="breathlessness">breathlessness</option>
				<option value="decreased consciousness">decreased consciousness</option>
				<option value="high fever">high fever</option>
				<option value="Fatigue">Fatigue</option>
				<option value="Weakness on one side of body">Weakness on one side of body</option>
				<option value="Weakness of both sides of body">Weakness of both sides of body</option>
				<option value="oedema">oedema</option>
				<option value="Pain in joints">Pain in joints</option>
				<option value="Increase urine volume and frequency">Increase urine volume and frequency</option>
				<option value="Weakness">Weakness</option>
				<option value="Urine dark yellow">Urine dark yellow</option>
				<option value="Cough with expectoration">Cough with expectoration</option>
				<option value="Recurring fever">Recurring fever</option>
				<option value="irritability">irritability</option>
				<option value="puffy face">puffy face</option>
				<option value="moon face">moon face</option>
			</select>
		<!--</form>-->
				
				
				<!--<form action="#" method="post">-->
		<li>	<select name="symtom2">
				<option value="0">None</option>
				<option value="chest pain">chest pain</option>
				<option value="high fever">high fever</option>
				<option value="weight loss">weight loss</option>
				<option value="headache">headache</option>
				<option value="loss of sensations on both side">loss of sensations on both side</option>
				<option value="proteinuria">proteinuria</option>
				<option value="prolonged morning stiffness">prolonged morning stiffness</option>
				<option value="increased thirst">increased thirst</option>
				<option value="fatigue">fatigue</option>
				<option value="Stool clay colored with steatorrhoea">Stool clay colored with steatorrhoea</option>
				<option value="Haemoptysis Fever">Haemoptysis Fever</option>
				<option value="chills">chills</option>
				<option value="delayed development">delayed development</option>
				<option value="coarse hair">coarse hair</option>
				<option value="obesity">obesity</option>
			</select>
		<!--</form>-->
		
		
		
		
			<!--<form action="#" method="post">-->
		<li>	<select name="symtom3">
				<option value="0">None</option>
				<option value="palpitation">palpitation</option>
				<option value="headache">headache</option>
				<option value="cough">cough</option>
				<option value="flatulence">flatulence</option>
				<option value="behavioral changes">behavioral changes</option>
				<option value="loss of bowel control">loss of bowel control</option>
				<option value="Decreased albumin">Decreased albumin</option>
				<option value="symmetrical involvement">symmetrical involvement</option>
				<option value="increased appetite">increased appetite</option>
				<option value="giddiness">giddiness</option>
				<option value="Yellow discoloration of body">Yellow discoloration of body</option>
				<option value="chills">chills</option>
				<option value="sweating">sweating</option>
				<option value="sweating in forehead">sweating in forehead</option>
				<option value="dry skin">dry skin</option>
				<option value="purple striae">purple striae</option>
			</select>
		<!--</form>-->
		
		
		
			<!--<form action="#" method="post">-->
		<li>	<select name="symtom4">
				<option value="0">None</option>
				<option value="cough">cough</option>
				<option value="vomiting">vomiting</option>
				<option value="chest pain">chest pain</option>
				<option value="low grade fever">low grade fever</option>
				<option value="speech difficulty">speech difficulty</option>
				<option value="hesitancy in urination">hesitancy in urination</option>
				<option value="facial puffiness">facial puffiness</option>
				<option value="small joints involves">small joints involves</option>
				<option value="dimness of vision">dimness of vision</option>
				<option value="fainting">fainting</option>
				<option value="Generalised pruritis">Generalised pruritis</option>
				<option value="nausea">nausea</option>
				<option value="poor dentition">poor dentition</option>
				<option value="facial pallor">facial pallor</option>
				<option value="hirusitism">hirusitism</option>
			</select>
		<!--</form>-->
		
		
		
			<!--<form action="#" method="post">-->
		<li>	<select name="symtom5">
				<option value="0">None</option>
				<option value="poor dentition">poor dentition</option>
				<option value="decreased consciousness">decreased consciousness</option>
				<option value="Symptomm3">Symptomm3</option>
				<option value="Symptomm4">Symptomm4</option>
				<option value="Symptomm5">Symptomm5</option>
				<option value="Symptomm6">Symptomm6</option>
				<option value="Symptomm7">Symptomm7</option>
				<option value="Symptomm8">Symptomm8</option>
				<option value="Symptomm9">Symptomm9</option>
				<option value="Symptomm10">Symptomm10</option>
				<option value="Symptomm11">Symptomm11</option>
				<option value="Symptomm12">Symptomm12</option>
			</select>
		<!--</form>-->
		
		
		
			<!--<form action="#" method="post">-->
		<li>	<select name="symtom6">
				<option value="0">None</option>
				<option value="breathlessness">breathlessness</option>
				<option value="decreased consciousness">decreased consciousness</option>
				<option value="Symptomm3">Symptomm3</option>
				<option value="Symptomm4">Symptomm4</option>
				<option value="Symptomm5">Symptomm5</option>
				<option value="Symptomm6">Symptomm6</option>
				<option value="Symptomm7">Symptomm7</option>
				<option value="Symptomm8">Symptomm8</option>
				<option value="Symptomm9">Symptomm9</option>
				<option value="Symptomm10">Symptomm10</option>
				<option value="Symptomm11">Symptomm11</option>
				<option value="Symptomm12">Symptomm12</option>
			</select>
		<!--</form>-->
		
		
		
			<!--<form action="#" method="post">-->
		<li>	<select name="symtom7">
				<option value="0">None</option>
				<option value="breathlessness">breathlessness</option>
				<option value="decreased consciousness">decreased consciousness</option>
				<option value="Symptomm3">Symptomm3</option>
				<option value="Symptomm4">Symptomm4</option>
				<option value="Symptomm5">Symptomm5</option>
				<option value="Symptomm6">Symptomm6</option>
				<option value="Symptomm7">Symptomm7</option>
				<option value="Symptomm8">Symptomm8</option>
				<option value="Symptomm9">Symptomm9</option>
				<option value="Symptomm10">Symptomm10</option>
				<option value="Symptomm11">Symptomm11</option>
				<option value="Symptomm12">Symptomm12</option>
			</select>
		<!--</form>-->
		
		
		
		<!--<form action="#" method="post">-->
		<li>	<select name="symtom8">
				<option value="0">None</option>
				<option value="breathlessness">breathlessness</option>
				<option value="decreased consciousness">decreased consciousness</option>
				<option value="Symptomm3">Symptomm3</option>
				<option value="Symptomm4">Symptomm4</option>
				<option value="Symptomm5">Symptomm5</option>
				<option value="Symptomm6">Symptomm6</option>
				<option value="Symptomm7">Symptomm7</option>
				<option value="Symptomm8">Symptomm8</option>
				<option value="Symptomm9">Symptomm9</option>
				<option value="Symptomm10">Symptomm10</option>
				<option value="Symptomm11">Symptomm11</option>
				<option value="Symptomm12">Symptomm12</option>
			</select>
		<!--</form>-->
		
		
		
			<!--<form action="#" method="post">-->
		<li>	<select name="symtom9">
				<option value="0">None</option>
				<option value="breathlessness">breathlessness</option>
				<option value="decreased consciousness">decreased consciousness</option>
				<option value="Symptomm3">Symptomm3</option>
				<option value="Symptomm4">Symptomm4</option>
				<option value="Symptomm5">Symptomm5</option>
				<option value="Symptomm6">Symptomm6</option>
				<option value="Symptomm7">Symptomm7</option>
				<option value="Symptomm8">Symptomm8</option>
				<option value="Symptomm9">Symptomm9</option>
				<option value="Symptomm10">Symptomm10</option>
				<option value="Symptomm11">Symptomm11</option>
				<option value="Symptomm12">Symptomm12</option>
			</select>
		<!--</form>-->
		
		
			<!--<form action="#" method="post">-->
		<li>	<select name="symtom10">
				<option value="0">None</option>
				<option value="breathlessness">breathlessness</option>
				<option value="decreased consciousness">decreased consciousness</option>
				<option value="Symptomm3">Symptomm3</option>
				<option value="Symptomm4">Symptomm4</option>
				<option value="Symptomm5">Symptomm5</option>
				<option value="Symptomm6">Symptomm6</option>
				<option value="Symptomm7">Symptomm7</option>
				<option value="Symptomm8">Symptomm8</option>
				<option value="Symptomm9">Symptomm9</option>
				<option value="Symptomm10">Symptomm10</option>
				<option value="Symptomm11">Symptomm11</option>
				<option value="Symptomm12">Symptomm12</option>
			</select>
		<!--</form>-->
		
		
		
		
			<!--<form action="#" method="post">-->
		<li>	<select name="symtom11">
				<option value="0">None</option>
				<option value="breathlessness">breathlessness</option>
				<option value="decreased consciousness">decreased consciousness</option>
				<option value="Symptomm3">Symptomm3</option>
				<option value="Symptomm4">Symptomm4</option>
				<option value="Symptomm5">Symptomm5</option>
				<option value="Symptomm6">Symptomm6</option>
				<option value="Symptomm7">Symptomm7</option>
				<option value="Symptomm8">Symptomm8</option>
				<option value="Symptomm9">Symptomm9</option>
				<option value="Symptomm10">Symptomm10</option>
				<option value="Symptomm11">Symptomm11</option>
				<option value="Symptomm12">Symptomm12</option>
			</select>
		<!--</form>-->
		
		
		
			<!--<form action="#" method="post">-->
		<li>	<select name="symtom12">
				<option value="0">None</option>
				<option value="breathlessness">breathlessness</option>
				<option value="decreased consciousness">decreased consciousness</option>
				<option value="Symptomm3">Symptomm3</option>
				<option value="Symptomm4">Symptomm4</option>
				<option value="Symptomm5">Symptomm5</option>
				<option value="Symptomm6">Symptomm6</option>
				<option value="Symptomm7">Symptomm7</option>
				<option value="Symptomm8">Symptomm8</option>
				<option value="Symptomm9">Symptomm9</option>
				<option value="Symptomm10">Symptomm10</option>
				<option value="Symptomm11">Symptomm11</option>
				<option value="Symptomm12">Symptomm12</option>
			</select>
		<!--</form>-->
		
		
		
			<!--<form action="#" method="post">-->
		<li>	<select name="symtom13">
				<option value="0">None</option>
				<option value="breathlessness">breathlessness</option>
				<option value="decreased consciousness">decreased consciousness</option>
				<option value="Symptomm3">Symptomm3</option>
				<option value="Symptomm4">Symptomm4</option>
				<option value="Symptomm5">Symptomm5</option>
				<option value="Symptomm6">Symptomm6</option>
				<option value="Symptomm7">Symptomm7</option>
				<option value="Symptomm8">Symptomm8</option>
				<option value="Symptomm9">Symptomm9</option>
				<option value="Symptomm10">Symptomm10</option>
				<option value="Symptomm11">Symptomm11</option>
				<option value="Symptomm12">Symptomm12</option>
			</select>
		<!--</form>-->
		
				
				
				
			
			<!--<form action="#" method="post">-->
		<li>	<select name="symtom14">
				<option value="0">None</option>
				<option value="breathlessness">breathlessness</option>
				<option value="decreased consciousness">decreased consciousness</option>
				<option value="Symptomm3">Symptomm3</option>
				<option value="Symptomm4">Symptomm4</option>
				<option value="Symptomm5">Symptomm5</option>
				<option value="Symptomm6">Symptomm6</option>
				<option value="Symptomm7">Symptomm7</option>
				<option value="Symptomm8">Symptomm8</option>
				<option value="Symptomm9">Symptomm9</option>
				<option value="Symptomm10">Symptomm10</option>
				<option value="Symptomm11">Symptomm11</option>
				<option value="Symptomm12">Symptomm12</option>
			</select><br><br><br>
					<input type="submit" name="submit" value=" UPLOAD SYMPTOMS " />
		</form>
			
	</ol>		
			
						
			
			
			
	<td>	<?php
		if(isset($_POST['submit']))
		{
			$symptoms=array($_POST['symtom1'],$_POST['symtom2'],$_POST['symtom3'],$_POST['symtom4'],$_POST['symtom5'],$_POST['symtom6'],$_POST['symtom7'],$_POST['symtom8'],$_POST['symtom9'],$_POST['symtom10'],$_POST['symtom11'],$_POST['symtom12'],$_POST['symtom13'],$_POST['symtom14']);
			echo ("\n". $symptoms[0] . "," . $symptoms[1] . "," . $symptoms[2] . "," .$symptoms[3] . "," . $symptoms[4] . "," . $symptoms[5]. "," .$symptoms[6] . "," . $symptoms[7] . "," . $symptoms[8]. "," .  $symptoms[9] . "," . $symptoms[10] . "," . $symptoms[12]. "," .$symptoms[13]);
			
			//$selected_val = $_POST['symtom1'];  // Storing Selected Value In Variable
			//echo "You have selected :" .$selected_val;  // Displaying Selected Value
		}
		?>
		<br><br>
		
		<form action="#" method="post" type="fnarrow">
		
		<input type="submit" name="narrow_down" value="  NARROW DOWN THE DISEASES   " />
		
		</form>
		
		<br><br>
		<?php
		//this is  basicaly done  to  read  the  data  from  the  external  file 
	
		$fileName = "C:/Users/ASHUTOSH/Documents/Machine_learning/narrow_symptom.txt";
		$fp = fopen($fileName,"r");
		if(isset($_POST['narrow_down']))
		{
				if( $fp == false )
				{
					echo ( "Error in opening file" );
					exit();
				}
  
				while(!feof($fp))
					{
						echo fgets($fp). "<br>";
					}
		}
	?> 
		
		
		
		
		
		
		
		
	<td> 	<?php
				if(isset($_POST['submit']))
		{
			//$symptoms=array($_POST['symtom1'],$_POST['symtom2'],$_POST['symtom3'],$_POST['symtom4'],$_POST['symtom5'],$_POST['symtom6'],$_POST['symtom7'],$_POST['symtom8'],$_POST['symtom9'],$_POST['symtom10'],$_POST['symtom11'],$_POST['symtom12'],$_POST['symtom13'],$_POST['symtom14']);
			//echo ("\n". $symptoms[0] . "," . $symptoms[1] . "," . $symptoms[2] . "," .$symptoms[3] . "," . $symptoms[4] . "," . $symptoms[5]. "," .$symptoms[6] . "," . $symptoms[7] . "," . $symptoms[8]. "," .  $symptoms[9] . "," . $symptoms[10] . "," . $symptoms[12]. "," .$symptoms[13]);
			
			//$selected_val = $_POST['symtom1'];  // Storing Selected Value In Variable
			//for($i=0; $i < count($symptoms); $i++)
			//{
			//echo ("What is the intensity of " .$symptoms[$i] ." ?"); 
			//}
			 echo ("What is the intensity of " .$symptoms[0] ." ?"); 
			 // Displaying Selected Value
		}
			?>
			<form action="#" method="post" type="submit_response">
				LOW<select name="x">
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
				MODERATE<select name="y">
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
				HIGH<select name="z">
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
				<br><br><br>
				
			</form>
			<input type="submit" name="submit_respons" value=" SUBMIT YOUR RESPONSE " />
		
		<br>
		<br>
		<br>
		<tr>
		<td ><a href="predict.php"><input type="submit" name="preict1" value=" PREDICT USING DECISION TREE" /></a>
		<tr>
		<td><input type="submit" name="preict2" value=" PREDICT USING LOGISTIC REGRESSION" />
		<tr>
		<td><input type="submit" name="preict3" value=" PREDICT USING NAIVE BAEYES" />
		<tr>
		<td><input type="submit" name="preict4" value=" PREDICT USING SVM " />
			
	</table>	
	
	
	<!-- following codes  are  written for making  an  external file -->
		<?php
		$symptomfile = 'symtoms.txt';
		$handle = fopen($symptomfile, 'w') or die('Cannot open file:  '.$symptomfile); //implicitly creates file
		
		for($i=0; $i < count($symptoms); $i++)
			{
			fwrite($handle, $symptoms[$i]);
			fwrite($handle, "\t");
			}
		
		$fp = fopen($symptomfile,"r");
		if( $fp == false )
		{
			echo ( "Error in opening file" );
			exit();
		}
  
		?> 
	
	
	
	
			<!--dialog box codes -->
	
			
			

<script src="myScript.js"></script>

</body>
</html>