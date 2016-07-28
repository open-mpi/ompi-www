<?
$subject_val = "[OMPI users] latency #2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 13 07:20:40 2010" -->
<!-- isoreceived="20100913112040" -->
<!-- sent="Mon, 13 Sep 2010 13:20:20 +0200" -->
<!-- isosent="20100913112020" -->
<!-- name="Georges Markomanolis" -->
<!-- email="georges.markomanolis_at_[hidden]" -->
<!-- subject="[OMPI users] latency #2" -->
<!-- id="4C8E08F4.9020606_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> [OMPI users] latency #2<br>
<strong>From:</strong> Georges Markomanolis (<em>georges.markomanolis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-13 07:20:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14224.php">Ashley Pittman: "Re: [OMPI users] latency #2"</a>
<li><strong>Previous message:</strong> <a href="14222.php">Georges Markomanolis: "[OMPI users] computing the latency with OpenMpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14224.php">Ashley Pittman: "Re: [OMPI users] latency #2"</a>
<li><strong>Reply:</strong> <a href="14224.php">Ashley Pittman: "Re: [OMPI users] latency #2"</a>
<li><strong>Reply:</strong> <a href="14226.php">Eugene Loh: "Re: [OMPI users] latency #2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>Hi again, after using MPI_Ssend seems to be what I was looking for but I 
<br>
would like to know more about MPI_Send.
<br>
<p>For example sending 1 byte with MPI_Send it takes 8.69 microsec but with 
<br>
MPI_Ssend it takes 152.9 microsec. I understand the difference but it 
<br>
seems that from one message's size and after their difference is not so 
<br>
big like trying for 518400 bytes where it needs 3515.78 microsec with 
<br>
MPI_Send and 3584.1 microsec with MPI_Ssend. So has is there any rule to 
<br>
figure out (of course it depends on the hardware) the threshold that 
<br>
after this size the difference between the timings of MPI_Send and 
<br>
MPI_Send is not so big or at least how to find it for my hardware?
<br>
<p>Thanks a lot,
<br>
Best regards,
<br>
Georges
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14224.php">Ashley Pittman: "Re: [OMPI users] latency #2"</a>
<li><strong>Previous message:</strong> <a href="14222.php">Georges Markomanolis: "[OMPI users] computing the latency with OpenMpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14224.php">Ashley Pittman: "Re: [OMPI users] latency #2"</a>
<li><strong>Reply:</strong> <a href="14224.php">Ashley Pittman: "Re: [OMPI users] latency #2"</a>
<li><strong>Reply:</strong> <a href="14226.php">Eugene Loh: "Re: [OMPI users] latency #2"</a>
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
