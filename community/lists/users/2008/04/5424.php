<?
$subject_val = "Re: [OMPI users] mpi parallel code to run on infinipath env.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 02:50:50 2008" -->
<!-- isoreceived="20080421065050" -->
<!-- sent="Mon, 21 Apr 2008 08:50:42 +0200 (CEST)" -->
<!-- isosent="20080421065042" -->
<!-- name="Dani&#235;l Mantione" -->
<!-- email="daniel.mantione_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi parallel code to run on infinipath env." -->
<!-- id="Pine.LNX.4.63.0804210842390.15262_at_druifje.clustervision.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="323666.1505.qm_at_web53406.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi parallel code to run on infinipath env.<br>
<strong>From:</strong> Dani&#235;l Mantione (<em>daniel.mantione_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 02:50:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5425.php">cfdman7_at_[hidden]: "[OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5423.php">yacob sen: "[OMPI users] mpi parallel code to run on infinipath env."</a>
<li><strong>In reply to:</strong> <a href="5423.php">yacob sen: "[OMPI users] mpi parallel code to run on infinipath env."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 20 Apr 2008, yacob sen wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have parallel program written on mpi. I am able to run on openmpi environment in our Linux cluster.
</span><br>
<span class="quotelev1">&gt; I found out that it is rather slow. I have heard that it could be faster if it is run on infinipath environment where
</span><br>
<span class="quotelev1">&gt; it has lower latency. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run my program which runs perfectly on openmpi environment first by changing the environment to 
</span><br>
<span class="quotelev1">&gt; using  (infinipath/core/gcc/2.1   and   infinipath/ofed/2.1 in my case ) and submit my job as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qsub -R y -pe infinipath 8  myscript.sh 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where the script &quot;myscript&quot; contains the command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -m $TMPDIR/machines -np $NSLOTS ./test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where test  is the executable file that was produced by running my parallel program test.f90
</span><br>
<span class="quotelev1">&gt; as 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif90   test.f90    -o    test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After submitting my jobs with a given number of &quot;Nslots&quot;, I got the error message as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/Cluster-Apps/sge/default/spool/node103/job_scripts/4947620: line 37: mpirun: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments are welcome, thankx ? Do I need to change inside  my mpi parallel code to run on infinipath environment ?
</span><br>
<p>Sounds like ClusterVisionOS? The module for the native Infinipath MPI is 
<br>
often called something like infinipath/mpi/compilername/2.1. By loading 
<br>
&quot;base&quot; and &quot;ofed&quot; you probably do not yet have loaded the MPI in your 
<br>
environment.
<br>
<p>Alternatively, you can also ask ClusterVision support to install an 
<br>
Infinipath-psm capable OpenMPI on your cluster, so you can continue using 
<br>
OpenMPI.
<br>
<p>Best regards,
<br>
<p>Dani&#235;l Mantione
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5425.php">cfdman7_at_[hidden]: "[OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5423.php">yacob sen: "[OMPI users] mpi parallel code to run on infinipath env."</a>
<li><strong>In reply to:</strong> <a href="5423.php">yacob sen: "[OMPI users] mpi parallel code to run on infinipath env."</a>
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
