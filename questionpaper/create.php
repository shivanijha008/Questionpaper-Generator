<?php
require_once('C:\xampp\htdocs\question\questionpaper\q1\vendor\autoload.php');
$conn=mysqli_connect('localhost', 'root', '', 'qp');
$res=mysqli_query($conn, "select * from addque");
if(mysqli_num_rows($res)>0){
	$html='<style>
		h1,h3{
			text-align:center;
		}
			p
			{
				text-align: right;
			}
		
					</style><table class= "table">';
		while($row=mysqli_fetch_assoc($res)){
			$html.= '<tr><td>'.$row['YourQuestion'].'</td><td>&nbsp;&nbsp;&nbsp;&nbsp;' .$row['Marks'].'</td></tr><br><br>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf= new \Mpdf\Mpdf();
$mpdf->WriteHTML("<h1>QUESTION PAPER</h1>");
$mpdf->WriteHTML("<h3>BANASTHALI VIDYAPITH</h3>");
$mpdf->WriteHTML("<p><i>Time Allowed:1 hr</i></p>");
$mpdf->WriteHTML("<hr>");
$mpdf->WriteHTML("<h2><i>General Instructions:</i></h2>");
$mpdf->WriteHTML("<p><i>i.All Questions are Compulsory.</i></p>");
$mpdf->WriteHTML("<p><i>ii.Answer either Section A or B, and Section C is compulsory
.</i></p>");
$mpdf->WriteHTML("<p><i>iii.Write the question number properly for each answer.</i></p>");
$mpdf->WriteHTML("<p><b>All the best!!</p>");
$mpdf->WriteHTML("<hr>");
$mpdf->WriteHTML("<h2>Questions:</h2>");
$mpdf->WriteHTML($html);
$mpdf->Output('q2.pdf', "D");



?>