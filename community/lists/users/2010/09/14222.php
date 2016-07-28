<?
$subject_val = "[OMPI users] computing the latency with OpenMpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 13 04:47:27 2010" -->
<!-- isoreceived="20100913084727" -->
<!-- sent="Mon, 13 Sep 2010 10:47:06 +0200" -->
<!-- isosent="20100913084706" -->
<!-- name="Georges Markomanolis" -->
<!-- email="georges.markomanolis_at_[hidden]" -->
<!-- subject="[OMPI users] computing the latency with OpenMpi" -->
<!-- id="4C8DE50A.3010103_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> [OMPI users] computing the latency with OpenMpi<br>
<strong>From:</strong> Georges Markomanolis (<em>georges.markomanolis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-13 04:47:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14223.php">Georges Markomanolis: "[OMPI users] latency #2"</a>
<li><strong>Previous message:</strong> <a href="14221.php">Srikanth Raju: "Re: [OMPI users] send message twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14225.php">Eugene Loh: "Re: [OMPI users] computing the latency with OpenMpi"</a>
<li><strong>Reply:</strong> <a href="14225.php">Eugene Loh: "Re: [OMPI users] computing the latency with OpenMpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have some questions about the duration of the communication with 
<br>
MPI_Send and MPI_Recv. I am using either SkaMPI either my implementation 
<br>
to measure the pingpong (MPI_Send and MPI_Recv) time between two nodes 
<br>
for 1 byte and more. The timing of the pingpong is 106.8 microseconds. 
<br>
Although if I measure only the ping of the message (only the MPI_Send) 
<br>
the time is ~20 microseconds. Could anyone explain me why it is not the 
<br>
half? I would like to understand what is the difference inside to 
<br>
OpenMpi about MPI_Send and MPI_Recv.
<br>
<p>More analytical the timings for pingpong between two nodes with a simple 
<br>
pingpong application, timings only for rank 0 (almost the same for rank 1):
<br>
1 byte, time for MPI_Send, 9 microsec, time for MPI_Recv, 86.4 microsec
<br>
1600 bytes, time for MPI_Send, 14.7 microsec, time for MPI_Recv, 197.07 
<br>
microsec
<br>
3200 bytes, time for MPI_Send, 19.73 microsec, time for MPI_Recv, 227.6 
<br>
microsec
<br>
518400 bytes, time for MPI_Send, 3536.5 microsec, time for MPI_Recv, 
<br>
5739.6 microsec
<br>
1049760 bytes, time for MPI_Send, 8020.33 microsec, time for MPI_Recv, 
<br>
10287 microsec
<br>
<p>So the duration of the MPI_Send is till the buffer goes to the queue of 
<br>
the destination without the message to be saved in the memory or 
<br>
something like this, right?  So if I want to know the real time of 
<br>
sending one message to another node (taking the half of pingpoing seems 
<br>
that is not right) should I use a program with other commands like  
<br>
MPI_Fence, MPI_Put etc? Or is there any flag when I execute the 
<br>
application where MPI_Send behaves like I would expect? According to MPI 
<br>
standards what is MPI_Send measuring? If there is any article which 
<br>
explain all these please inform me.
<br>
<p>Thanks a lot,
<br>
Best regards,
<br>
George Markomanolis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14223.php">Georges Markomanolis: "[OMPI users] latency #2"</a>
<li><strong>Previous message:</strong> <a href="14221.php">Srikanth Raju: "Re: [OMPI users] send message twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14225.php">Eugene Loh: "Re: [OMPI users] computing the latency with OpenMpi"</a>
<li><strong>Reply:</strong> <a href="14225.php">Eugene Loh: "Re: [OMPI users] computing the latency with OpenMpi"</a>
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
