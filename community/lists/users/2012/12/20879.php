<?
$subject_val = "[OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 06:20:14 2012" -->
<!-- isoreceived="20121205112014" -->
<!-- sent="Wed, 5 Dec 2012 19:20:04 +0800 (CST)" -->
<!-- isosent="20121205112004" -->
<!-- name="&#213;&#212;&#211;&#161;" -->
<!-- email="yin_zhao_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program" -->
<!-- id="73b832f0.ac85.13b6acb42aa.Coremail.yin_zhao_at_126.com" -->
<!-- charset="GBK" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program<br>
<strong>From:</strong> &#213;&#212;&#211;&#161; (<em>yin_zhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-05 06:20:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20880.php">Brian Budge: "Re: [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<li><strong>Previous message:</strong> <a href="20878.php">&#213;&#212;&#211;&#161;: "Re: [OMPI users] users Digest, Vol 2428, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20880.php">Brian Budge: "Re: [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<li><strong>Reply:</strong> <a href="20880.php">Brian Budge: "Re: [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all, 
<br>
<p><p>I have a MPI_Isend/MPI_Recv problem in  a multi-thread program. 
<br>
<p><p>In the program:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The first machine has one thread does some computation and call MPI_Isend to send buffer to the second machine, and another thread is always trying toMPI_Recv data from the second machine. And the first thread will MPI_Wait its last MPI_Isend to complete before call MPI_Isend again.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The second machine does the exact same thing.
<br>
<p><p>Then I got the result that : 
<br>
The first machine: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thread 0 : MPI_Isend data to the second machine successfully. but blocked in MPI_Wait because last MPI_Isend did not complete. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thread 1 : try to MPI_Recv data from the second machine, but no data and it blocked. 
<br>
The second machine: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thread 0 : MPI_Isend data to the first machine successfully. but blocked in MPI_Wait because last MPI_Isend did not complete. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thread 1 : try to MPI_Recv data from the first machine, but no data and it blocked. 
<br>
<p><p>Does anyone have any ideas?   I appreciated it very much, because I have tracked the problem for two days but no progress. 
<br>
<p><p>Eason Zhao 
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20880.php">Brian Budge: "Re: [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<li><strong>Previous message:</strong> <a href="20878.php">&#213;&#212;&#211;&#161;: "Re: [OMPI users] users Digest, Vol 2428, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20880.php">Brian Budge: "Re: [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<li><strong>Reply:</strong> <a href="20880.php">Brian Budge: "Re: [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
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
