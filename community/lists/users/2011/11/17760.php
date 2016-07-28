<?
$subject_val = "[OMPI users] mpi_sendrecv call example : case for a deadlock ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 11 17:44:54 2011" -->
<!-- isoreceived="20111111224454" -->
<!-- sent="Fri, 11 Nov 2011 17:44:10 -0500" -->
<!-- isosent="20111111224410" -->
<!-- name="shankha" -->
<!-- email="shankhabanerjee_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_sendrecv call example : case for a deadlock ?" -->
<!-- id="CAO_L6qHFDf4+KGCVmYt9Nc6w0zG7sGVAXez0KpH-2m-ehHtveg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpi_sendrecv call example : case for a deadlock ?<br>
<strong>From:</strong> shankha (<em>shankhabanerjee_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-11 17:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17761.php">Radomir Szewczyk: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Previous message:</strong> <a href="17759.php">Ioannis Papadopoulos: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have a example code using sendrecv. Could you please tell me if there is
<br>
a chance for a deadlock ?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;right =(myrank + 1) % size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left  = myrank - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (left &lt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;left = size - 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Sendrecv(&amp;s, 1, MPI_CHAR, left, 1231, &amp;r, 1, MPI_CHAR, right,
<br>
1231, MPI_COMM_WORLD, &amp;status_1[0]);
<br>
<p>Node A         Node B                       Node C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send to A
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recv from C
<br>
<p>Each node is sending data to the node denoted by left and receiving data
<br>
from the node denoted by right. IS this is a case for deadlock.
<br>
Thanks for your help.
<br>
<p><pre>
-- 
Thanks
Shankha Banerjee
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17760/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17761.php">Radomir Szewczyk: "Re: [OMPI users] Printing information on computing nodes."</a>
<li><strong>Previous message:</strong> <a href="17759.php">Ioannis Papadopoulos: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
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
