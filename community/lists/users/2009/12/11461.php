<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 18:01:40 2009" -->
<!-- isoreceived="20091208230140" -->
<!-- sent="Tue, 08 Dec 2009 15:01:26 -0800" -->
<!-- isosent="20091208230126" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4" -->
<!-- id="4B1EDAC6.5010002_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B1EAF09.9080603_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 18:01:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11462.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11460.php">Jeff Squyres: "[OMPI users] Open MPI v1.4 release: explanation"</a>
<li><strong>In reply to:</strong> <a href="11458.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11468.php">Ashley Pittman: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Matthew
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 5) Are you setting processor affinity on mpiexec?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -mca mpi_paffinity_alone 1 -np  ... bla, bla ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Good point.  This option optimizes processor affinity on the assumption 
<br>
that no other jobs are running.  If you ran 2 MPI jobs with this option, 
<br>
they would attempt to use the same logical processors, rather than 
<br>
spreading the work effectively.
<br>
I have doubts whether the mpi_affinity could be relied upon with 
<br>
HyperThreading enabled; it would work OK if it understood how to avoid 
<br>
multiple processes on the same core.
<br>
If you don't find an option inside openmpi to specify which logicals 
<br>
your jobs should use, you could do it by mpiexec -np 4 taskset...
<br>
taking care to use a different core for each process (also different 
<br>
between jobs running together).  You would have to check on your machine 
<br>
whether the taskset options would be such as -c 0,2,4,6  for separate 
<br>
cores on one package and -c 8,10,12,14 for the other, or some other 
<br>
scheme.  /proc/cpuinfo would give valuable clues, even more 
<br>
/usr/sbin/irqbalance -debug (or wherever it lives on your system).
<br>
Without affinity setting, you could also run into problems when running 
<br>
out of individual cores and forcing some pairs of processes to run 
<br>
(quite slowly) on single cores, while others run full speed on other cores.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11462.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11460.php">Jeff Squyres: "[OMPI users] Open MPI v1.4 release: explanation"</a>
<li><strong>In reply to:</strong> <a href="11458.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11468.php">Ashley Pittman: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
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
