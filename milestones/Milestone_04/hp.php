<?php include('header.php'); ?>
<style>
	.active {
    background-color: #CCCC00;
	
}

/*.mySlides {display:none;}  */

#wrapper {
	/*background-color: #ffcc66;
	background-image:linear-gradient(to bottom, #ffffff,#ffcc66);
	background-repeat: no-repeat; */
	background-size: cover;
	background-position:50% 50%;
	
	
color: black;
margin-left: 20px;
padding: 20px;
	}

.mybutton {
	color: #CCCC00;
    border: none;
    color: black;    
    text-decoration: none;
	margin-top: 10px;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
	
}
h1 {color:#000066;}


.parentRelative{
	width: 400px;
	height: 500px;
	background:rgba(0,153,255, 0.8);

	display: block;
    margin-left: auto;
    margin-right: auto ;
	border: 1px solid black;
	color: 	#CCCC00;
	text-align: center;
}
.first {
	padding-top: 20px;
	padding-bottom: 30px;
	color:white;
}
</style>
  
 <div id="wrapper">
 <div class="parentRelative">
  <h2> &nbsp;Join our Community today!</h2>
<p class = "first">"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain."
"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain."</p>
</div> 	 
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {

    var x = ["images/background2.jpg","images/background3.jpg","images/desk.jpg"];
      document.getElementById('wrapper').style.backgroundImage = 'url('+ x[myIndex++]+')' ; 	  
	  if(x.length<=myIndex){myIndex = 0}
	setTimeout(carousel, 2000);
    }

</script>	

 <?php include('footer.php'); ?>