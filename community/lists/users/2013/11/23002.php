<?
$subject_val = "[OMPI users] calling a parallel solver from sequential code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 18 09:07:42 2013" -->
<!-- isoreceived="20131118140742" -->
<!-- sent="Mon, 18 Nov 2013 15:09:08 +0100" -->
<!-- isosent="20131118140908" -->
<!-- name="Florian Bruckner" -->
<!-- email="e0425375_at_[hidden]" -->
<!-- subject="[OMPI users] calling a parallel solver from sequential code" -->
<!-- id="528A1F84.10705_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] calling a parallel solver from sequential code<br>
<strong>From:</strong> Florian Bruckner (<em>e0425375_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-18 09:09:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23003.php">Damien: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>Previous message:</strong> <a href="23001.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23003.php">Damien: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>Reply:</strong> <a href="23003.php">Damien: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>how can i call an MPI parallelized solver routine from a sequential 
<br>
code. The sequential code is already existing and the structure looks 
<br>
like to following:
<br>
<p>void main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = rand();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sequential_code(); // this sequential code should only be 
<br>
executed on the master node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (x == 2345) MPIsolve(); // this should be run in parallel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} while(x == 1234);
<br>
}
<br>
<p>i'm wondering how the call MPI-parallelized solver routine can be called 
<br>
without parallelizing the whole existing sequential code. at a certain 
<br>
point of the code-path of the sequential code, the parallel execution 
<br>
should be started, but how can this be achived.
<br>
<p>when starting the application with mpirun there must be some code 
<br>
running on each node. and the same code-path needs to be followed by 
<br>
each process. But this would mean that exactly the same sequential code 
<br>
needs to be executed on each node!?
<br>
<p>what am i missing?
<br>
thanks in advance
<br>
Florian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23003.php">Damien: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>Previous message:</strong> <a href="23001.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646 with -hostfile option under Torque manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23003.php">Damien: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
<li><strong>Reply:</strong> <a href="23003.php">Damien: "Re: [OMPI users] calling a parallel solver from sequential code"</a>
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
