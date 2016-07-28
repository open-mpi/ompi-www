<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 16:40:26 2010" -->
<!-- isoreceived="20100909204026" -->
<!-- sent="Thu, 9 Sep 2010 16:40:17 -0400" -->
<!-- isosent="20100909204017" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="OFE248AA67.166CDF92-ON85257799.00703A6C-85257799.00719297_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20393AAE-9FF0-475D-B131-D357DFFA40CF_at_pittman.co.uk" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 16:40:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14208.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14206.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14208.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14208.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley
<br>
<p>Can you provide an example of a situation in which these semantically 
<br>
redundant barriers help?
<br>
<p>I may be missing something but my statement for the text book would be 
<br>
<p>&quot;If adding a barrier to your MPI program makes it run faster, there is 
<br>
almost certainly a flaw in it that is better solved another way.&quot;
<br>
<p>The only exception I can think of is some sort of one direction data 
<br>
dependancy with messages small enough to go eagerly.  A program that calls 
<br>
MPI_Reduce with a small message and the same root every iteration and 
<br>
calls no other collective would be an example.
<br>
<p>In that case, fast tasks at leaf positions would run free and a slow task 
<br>
near the root could pile up early arrivals and end up with some additional 
<br>
slowing. Unless it was driven into paging I cannot imagine the slowdown 
<br>
would be significant though.
<br>
<p>&nbsp;Even that should not be a problem for an MPI implementation that backs 
<br>
off on eager send before it floods early arrival buffers.
<br>
<p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14207/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14208.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14206.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14208.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14208.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
