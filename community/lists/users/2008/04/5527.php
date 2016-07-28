<?
$subject_val = "[OMPI users] Memory question and possible bug in 64bit addressing under Leopard!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 16:07:04 2008" -->
<!-- isoreceived="20080425200704" -->
<!-- sent="Fri, 25 Apr 2008 16:06:56 -0400" -->
<!-- isosent="20080425200656" -->
<!-- name="Gregory John Orris" -->
<!-- email="gregory.orris_at_[hidden]" -->
<!-- subject="[OMPI users] Memory question and possible bug in 64bit addressing under Leopard!" -->
<!-- id="60474719-1D46-4556-9FB5-6748ED6413A3_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!<br>
<strong>From:</strong> Gregory John Orris (<em>gregory.orris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-25 16:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Previous message:</strong> <a href="5526.php">Roopesh Ojha: "[OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Reply:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Maybe reply:</strong> <a href="5533.php">Warner Yuen: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK folks,
<br>
<p>Whilst testing cases of ratcheting up memory usage under Mac OSX  
<br>
Leopard I ran into a peculiar problem of segmentation faults that just  
<br>
should not be happening. I whittled down the code to find where the  
<br>
error took place and well, for this simple code...
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int n = 10000000;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float X[n];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
<p>Using mpic++ -m64 test.cpp -o test
<br>
and mpiexec -np 1 ./test
<br>
<p>produces a core dump on a machine with 12Gb of RAM.
<br>
<p>and the error message
<br>
<p>mpiexec noticed that job rank 0 with PID 75545 on node mymachine.com  
<br>
exited on signal 4 (Illegal instruction).
<br>
<p>However, substituting in
<br>
<p>float *X = new float[n];
<br>
for
<br>
float X[n];
<br>
<p>Succeeds!
<br>
<p>Before we get too far, the implication and the reason I found the  
<br>
error in the first place is that I was allocating 2D arrays that were  
<br>
pretty large with the line
<br>
float X[n][m];
<br>
and they were failing. However the total size times the number of  
<br>
processors was well within the RAM of the machine.
<br>
<p>Am I missing something? Has this been seen before?
<br>
<p>Regards,
<br>
Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Previous message:</strong> <a href="5526.php">Roopesh Ojha: "[OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Reply:</strong> <a href="5528.php">Brian Barrett: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
<li><strong>Maybe reply:</strong> <a href="5533.php">Warner Yuen: "Re: [OMPI users] Memory question and possible bug in 64bit addressing under Leopard!"</a>
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
