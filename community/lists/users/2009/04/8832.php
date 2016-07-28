<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 17:16:48 2009" -->
<!-- isoreceived="20090407211648" -->
<!-- sent="Tue, 7 Apr 2009 14:16:43 -0700" -->
<!-- isosent="20090407211643" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="20090407211643.GA95107_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0B2D8B8F-921F-411D-9E3B-09A2E6684D05_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 17:16:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8833.php">Steve Lowder: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Previous message:</strong> <a href="8831.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8830.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8831.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 07, 2009 at 02:23:45PM -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It isn't in a file - unless you specify it, OMPI will set it  
</span><br>
<span class="quotelev1">&gt; automatically based on the number of procs on the node vs. what OMPI  
</span><br>
<span class="quotelev1">&gt; thinks are the number of available processors. The question is: why  
</span><br>
<span class="quotelev1">&gt; does OMPI not correctly know the number of processors on your machine?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't remember now, but did you send us this info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If not, could you please do so? It would help us track down the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I've attached config.log.gz from my 1.3.1 build and
<br>
the compressed output of
<br>
<p>/usr/local/openmpi-1.3.1/bin/ompi_info --all &gt; ompi_info.all
<br>
<p>My PATH is
<br>
<p>PATH=/home/kargl/bin:/sbin:/usr/sbin:/bin:/usr/bin:/usr/local/bin:\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/local/libexec:/usr/local/sbin
<br>
<p>LD_LIBRARY_PATH is unset, and should be irrelevant because everything
<br>
is statically linked.
<br>
<p>The command lines are 
<br>
/usr/local/openmpi-1.3.1/bin/mpicc -o z -O -static GetOpt.c netmpi.c
<br>
/usr/local/openmpi-1.3.1/bin/mpiexec -machinefile mf_ompi_2 \
<br>
&nbsp;&nbsp;&nbsp;-mca mpi_yield_when_idle 0 -n 2 ./z
<br>
/usr/local/openmpi-1.3.1/bin/mpiexec -machinefile mf_ompi_2 -n 2 ./z
<br>
<p>The former gives performance on par with 1.2.9 while the latter is
<br>
a factor of 10 slower.
<br>
<p><pre>
-- 
Steve


</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8832/ompi_info.all.gz">ompi_info.all.gz</a>
</ul>
<!-- attachment="ompi_info.all.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8832/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8833.php">Steve Lowder: "Re: [OMPI users] Interaction between Intel and OpenMPI floating point exceptions"</a>
<li><strong>Previous message:</strong> <a href="8831.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8830.php">Ralph Castain: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8831.php">Mostyn Lewis: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
