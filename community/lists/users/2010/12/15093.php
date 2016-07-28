<?
$subject_val = "[OMPI users] how to set the connecttimeout para?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 06:04:52 2010" -->
<!-- isoreceived="20101213110452" -->
<!-- sent="Mon, 13 Dec 2010 19:04:41 +0800 (CST)" -->
<!-- isosent="20101213110441" -->
<!-- name="peifan" -->
<!-- email="fp356_at_[hidden]" -->
<!-- subject="[OMPI users] how to set the connecttimeout para?" -->
<!-- id="400523a5.e1a0.12cdf675ccb.Coremail.fp356_at_163.com" -->
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
<strong>Subject:</strong> [OMPI users] how to set the connecttimeout para?<br>
<strong>From:</strong> peifan (<em>fp356_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 06:04:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15094.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15092.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15097.php">Ralph Castain: "Re: [OMPI users] how to set the connecttimeout para?"</a>
<li><strong>Reply:</strong> <a href="15097.php">Ralph Castain: "Re: [OMPI users] how to set the connecttimeout para?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i have 3 nodes, one is master node and another is computing nodes,these nodes deployed in the internet (not in cluster)
<br>
<p><p>when i running NPB (NASA parallel benchmark) in one node (use 2 processes)
<br>
&nbsp;mpirun -np 2  exe. 
<br>
I can get the successful result, but when i running in two nodes(for example running on B and C nodes) i got a fail
<br>
mprirun -nolocal -hostfile hostfile -np 2 exe.
<br>
the fail information is :
<br>
B [0,1,0] connectimeout ,connect() fail errno=110 
<br>
C [0,1,1] connectimeout ,connect() fail errno=110
<br>
but the connect between B and  C has no problem, because i can use ping and ssh form B to C (or C to B).
<br>
I think this problem may be caused by the para connectimeout (so little that lead  fail?). Because my nodes deployed on internet so delay is bigger. 
<br>
who can help me attack this problem and how to set the connectimeout in openmpi?
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15093/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15094.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15092.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15097.php">Ralph Castain: "Re: [OMPI users] how to set the connecttimeout para?"</a>
<li><strong>Reply:</strong> <a href="15097.php">Ralph Castain: "Re: [OMPI users] how to set the connecttimeout para?"</a>
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
