<?php session_start();
	require("header.php");
	require("checkUser.php");
	
	$id=$_GET["id"];
?>

<a href="question.php?stid=<?php echo $id ?>">Ask Question<img src="res/images/askq.jpg"  class='imagedel'/></a>
<hr />
<?php 
	
	$str="SELECT * FROM question, user WHERE question.user_id=user.user_id and subtopic_id=$id";
	$result=ExecuteQuery($str);
	
	$no_rows = mysql_num_rows($result);
	
	if ($no_rows > 0)
	{
		while($row = mysql_fetch_array($result))
		{
			$rowsc=ExecuteQuery("SELECT count(*) as counter from answer where question_id=$row[question_id]");
			$rowc = mysql_fetch_array($rowsc);
			$count = $rowc['counter'];
			
			echo "<h4>";
			echo "<span class='box2'>";
			echo "<span class='head'><a>$row[heading]</a><a style='margin-left:40px;color : white;' href='answer.php?id=$row[question_id]'>REPLY</a> </span>";
			
			echo "</span>";
			echo "</h4>";
			
			echo "$row[question_detail] <span class='view2'>Views : $row[views], Replies :$count</span>";
			echo "<br/><br/>";
			
			echo "Asked by<br/>$row[fullname]";
		
			echo "<br/><div class='line'></div>";
			//echo  "<a href='answer.php?qid=$row[question_id]' class='reply'>REPLY</a>";

				$sql="select * from answer,user where question_id=$row[question_id] and answer.user_id=user.user_id ORDER BY  datetime desc";

				$result1=ExecuteQuery($sql);
				$no_rows = mysql_num_rows($result1);
				
				if ($no_rows > 0)
				{	
					
					while($row1 = mysql_fetch_array($result1))
					{
						
						echo "<span style='margin:left:10px;' class='box2'>";
						echo "<span class='head'><a href='like.php?id=$row1[answer_id] ' class='view2' >Like $row1[like]</a> <a href='dwdpap.php?id=$row[question_id]' class='view2'>Download</a>
			</span>";
				
						echo "<table>";
									echo "<tr><td valign='top' width='100px'>
						<img src='$row1[uimg]' alt='' class='uimg'/>
							<br/>
						$row1[fullname]<td valign='top'><b>Re : $row[heading]</b><br/>$row1[datetime]<br/><br/>$row1[answer_detail]</tr>";
						
						echo "</table></span><div class='h10'></div>";	
						
					}
				}
			
		}
	
		
	}
	
			

	else
	{
		echo "No questions at the moment";
	}
	
 

?>
<?php require("footer.php")?>