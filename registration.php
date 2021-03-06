<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
<style>
body {
  font-family: Arial;
  font-size: 17px;
  margin: 0 auto;
}

* {
  box-sizing: border-box;
}
a{
	text-decoration: none;
}

.header{
	width: 100%;
	height: 60px;
	background-color:;
	position: absolute;
	top:0;
	display: flex;
	background-image:linear-gradient(rgba(0,0,0,0.0),rgba(0,0,0,0.5));

}

.header .logo{
	margin-left: 5%;
}
.header .logo h2{
	font-family: 'Amarante';
	color: white;
	line-height: 20px;
}
.header .dcrust-logo {
width: 60px;
margin-top: 5px;
margin-left: 25%;
}
.header .dcrust-logo img{
	width: 90%;
}

.header .nav{
	position: absolute;
	right: 50px;
	top: 10px;
	display: block;
	height: 10px;

}

.header .nav a{
	float: left;
	color: white;
	font-weight: ;
	position: relative;
	font-size: 20px;
	font-family: times new roman;
	margin-left: 20px;
	padding: 5px;
	border: 1px solid transparent;
        transition: all .4s ease-in-out;
        -webkit-transition: all .4s ease-in-out;
        -o-transition: all .4s ease-in-out;
        -ms-transition: all .4s ease-in-out;
        -moz-transition: all .4s ease-in-out;
}
.header .nav a:hover{
	border-color: white;
}



.form-head{
	background-image: url("123.png");
	background-size: cover;
	background-position: 0% 10%;
	background-attachment: fixed;
	opacity: .8;
	text-align: center;
	margin-bottom: 20px;
	margin-top: 0px;
	width: 100%;
	height: 400px;
}
.form-head h1{
	position: absolute;
	top: 150px;
	left:0px;
	right: 0px;
	font-size: 60px;
	color: white;
  font-weight: normal;
  font-style: normal;
	font-family: 'century gothic';
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}
.col-40 {
  -ms-flex: 40%; /* IE10 */
  flex: 40%;
}

.col-20 {
  -ms-flex: 20%; /* IE10 */
  flex: 20%;
}
.col-25,
.col-50,
.col-75,
.col-40,
.col-20 {
  padding: 0 16px;
}

.container {
	width: 95%;
	margin: 0 auto;
  padding: 5px 20px 15px 20px;
  border-radius: 3px;
}

input,textarea,select {
  width: 100%;
  margin-bottom: 20px;
  padding: 11px;
  border: 1px solid #ccc;
  border-radius: 7px;

  background-color: #f2f2f2;
  font-size: 16px;
}

input[type=radio]{
	width: 5%;
}

textarea{
	resize: none;
	height: 100px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;  
  border: none;
  width: 40%;
  margin: 20px 0px 20px 30%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}
 

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column;
  }
}
</style>
</head>
<body>
	
<div class="form-head">
	<div class="header">
    <div class="logo">
      <h2>Campus Squares</h2>
    </div>
    <div class="dcrust-logo">
      <img src="dcrust-logo_compressed.png">
    </div>
    
    <div class="nav">

      <a href="index.php">Home</a>

    </div>
  </div>
<h1>Register Yourself Here</h1>
</div>
<div class="row">
    <div class="container">
      <form action="includes/registration.inc.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Personal Details</h3>
            
            <div class="row">
              <div class="col-50">
                <label>Branch / Course <span style="color: red">*</span></label>
                <input type="text" name="course" placeholder="Course">
              </div>
              <div class="col-50">
                <label>Select Year</label>
                <select name="year">
          <option value="1">1st</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
      </select>
              </div>
            </div>
            <label><i class="fa fa-user"></i> Full Name <span style="color: red">*</span></label>
            <input type="text" name="name" placeholder="Name">

            <label><i class="fa fa-phone"></i> Phone <span style="color: red">*</span></label>
            <input type="text" name="phone" placeholder="Phone No.">

            <label><i class="fa fa-envelope"></i> Email <span style="color: red">*</span></label>
            <input type="email" name="email" placeholder="Email">

            <label><i class="fa fa-address-card-o"></i> Address <span style="color: red">*</span></label>
            <input type="text" name="address" placeholder="Address">

            <label>Select Your Institute</label>
            <select name="college">
    			<option value="a">Dcrust</option>
    			<option value="b">IITM</option>
    			<option value="c">college2</option>
    			<option value="d">college3</option>
    			<option value="e">college4</option>
			</select>
			<label>Roll No <span style="color: red">*</span></label>
                <input type="text" name="roll" placeholder="College Roll No.">

            <div class="row">
              <div class="col-50">
                <label>Branch / Course <span style="color: red">*</span></label>
                <input type="text" name="course" placeholder="Course">
              </div>
              <div class="col-50">
                <label>Select Year</label>
                <select name="year">
    			<option value="1">1st</option>
    			<option value="2">2nd</option>
    			<option value="3">3rd</option>
    			<option value="4">4th</option>
    			<option value="5">5th</option>
			</select>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Events Details</h3>
            <label >Choose Event</label>
            <select name="event" >
   				<option value="01">Solo Dance</option>
   			 	<option value="02">Group Dance</option>
    			<option value="03">Nukkar</option>
   				<option value="04">Skit</option>
    			<option value="05">Singing</option>
				</select>

			<label>Select Team Type</label>
			<select name="tm_type" >
   				<option value="1">Single</option>
   			 	<option value="2">More than 1</option>
				</select>

        <label><strong> Enter Team Details</strong></label>
        <div >
     <div class="row" style="display: none;" id = "div0">
      <div class="col-40">Name:<input style="padding-top: 4px;padding-bottom: 4px" type="text" id="input0" disabled/></div>
      
      <div class="col-40">Roll Number:<input style="padding-top: 4px;padding-bottom: 4px" type="text"  id="in0" disabled/></div> 
      <div ><input style="padding-top: 4px;padding-bottom: 4px" id= "del0" type="button"value="X" onclick="remove_input(this)" /></div> 
    </div>

     <div class="row" style="display: none;" id = "div1">
      <div class="col-40">Name:<input style="padding-top: 4px;padding-bottom: 4px" type="text" id="input1" disabled/></div>
      <div class="col-40">Roll Number:<input style="padding-top: 4px;padding-bottom: 4px" type="text"  id="in1" disabled/></div>
      <div ><input style="padding-top: 4px;padding-bottom: 4px" id= "del1" type="button"value="X" onclick="remove_input(this)" /></div>
      
    </div>

     <div style="display: none;" id = "div2">Name:<input type="text" id="input2" disabled/>
      Roll Number:<input type="text"  id="in2" disabled/><input id= "del2" type="button"value="X" onclick="remove_input(this)" />
    </div>
     <div style="display: none;" id = "div3">Name:<input type="text" id="input3" disabled/>
      Roll Number:<input type="text"  id="in3" disabled/><input id= "del3" type="button"value="X" onclick="remove_input(this)" />
    </div>
     <div style="display: none;" id = "div4">Name:<input type="text" id="input4" disabled/>
      Roll Number:<input type="text"  id="in4" disabled/><input id= "del4" type="button"value="X" onclick="remove_input(this)" />
    </div>
     <div style="display: none;" id = "div5">Name:<input type="text" id="input5" disabled/>
      Roll Number:<input type="text"  id="in5" disabled/><input id= "del5" type="button"value="X" onclick="remove_input(this)" />button</div>
     <div style="display: none;" id = "div6">Name:<input type="text" id="input6" disabled/>
      Roll Number:<input type="text"  id="in6" disabled/><input id= "del6" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div7">Name:<input type="text" id="input7" disabled/>
      Roll Number:<input type="text"  id="in7" disabled/><input id= "del7" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div8">Name:<input type="text" id="input8" disabled/>
      Roll Number:<input type="text"  id="in8" disabled/><input id= "del8" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div9">Name:<input type="text" id="input9" disabled/>
      Roll Number:<input type="text"  id="in9" disabled/><input id= "del9" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div10">Name:<input type="text" id="input10" disabled/>
      Roll Number:<input type="text"  id="in10" disabled/><input id= "del10" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div11">Name:<input type="text" id="input11" disabled/>
      Roll Number:<input type="text"  id="in11" disabled/><input id= "del11" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div12">Name:<input type="text" id="input12" disabled/>
      Roll Number:<input type="text"  id="in12" disabled/><input id= "del12" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div13">Name:<input type="text" id="input13" disabled/>
      Roll Number:<input type="text"  id="in13" disabled/><input id= "del13" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div14">Name:<input type="text" id="input14" disabled/>
      Roll Number:<input type="text"  id="in14" disabled/><input id= "del14" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div15">Name:<input type="text" id="input15" disabled/>
      Roll Number:<input type="text"  id="in15" disabled/><input id= "del15" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div16">Name:<input type="text" id="input16" disabled/>
      Roll Number:<input type="text"  id="in16" disabled/><input id= "del16" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div17">Name:<input type="text" id="input17" disabled/>
      Roll Number:<input type="text"  id="in17" disabled/><input id= "del17" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div18">Name:<input type="text" id="input18" disabled/>
      Roll Number:<input type="text"  id="in18" disabled/><input id= "del18" type="button"value="X" onclick="remove_input(this)" /></div>
     <div style="display: none;" id = "div19">Name:<input type="text" id="input19" disabled/>
      Roll Number:<input type="text"  id="in19" disabled/><input id="del19" type="button"value="X" onclick="remove_input(this)" /></div>
  </div>​

  <div class="row">
    <div class="col-50">
     Name: <input type="text"  id="inpt"/>
   </div>
   <div class="col-50">
     Roll Number:<input type="text"  id="inp"/>
     <input style="background-color: grey;color:white;width: 60%;border:none" type="button"value="Add Participant" onclick="add_to_hidden()" />
   </div>
  </div>​

            <!--<label>Enter Name & Roll No. of Team</label>
            <textarea name="team_details" placeholder="Name and Roll No.*"></textarea>

            <textarea placeholder="Name And Roll No. of participants should be in below way'\n'bjbhb" disabled>Name And Roll No. Should be Written in below way&#13;&#10;Name,Roll No. =>seperated by Coma&#13;&#10;Two entries => seperated by SemiColumn&#13;&#10;Sahil Chhabra,1600100800;Rahul Chauhan,1600100700</textarea>
          -->
          </div>         
        </div>       
        <button type="submit" name="submit" class="btn">Submit</button>
      </form>
    </div>
</div>

<script type="text/javascript">
  var count = 0;
  
  var ele = document.getElementById('inpt');
  var ele2 = document.getElementById('inp');
  function add_to_hidden(){
    if(count>19){
      alert("not more than 20");    
    }
    if(ele.value !="" && count < 20 &&ele2.value != ""){
      edit_id = "input"+ count;
      div_edit = "div" + count; 
      roll_edit = "in" + count;
      console.log('edit_id =');
      document.getElementById(edit_id).value = ele.value; 
      document.getElementById(roll_edit).value = ele2.value;  
      document.getElementById(div_edit).style.display = "";
      ele.value = "";
      ele2.value = "";
      count++;
    }
  }
  var tempi = 0;
    function remove_input(ip){
    var a =ip.id.substring(3,);
    for(let i= a;i<=18;i++){
      inp = "input" + i;
      ++i;
      inpNext = "input" + i;
      --i;
      element = document.getElementById(inp);
      element2 = document.getElementById(inpNext);
      element.value = element2.value;
      if (element2.value == "") {
        break;
      }
    }
    count--;
    element3 ="div"+count;
    element3 = document.getElementById(element3);
    element3.style.display = "none";
  }
</script>

</body>
</html>