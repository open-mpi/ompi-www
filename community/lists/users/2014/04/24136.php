<?
$subject_val = "Re: [OMPI users] Performance issue of mpirun/mpi_init";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 10:58:25 2014" -->
<!-- isoreceived="20140410145825" -->
<!-- sent="Thu, 10 Apr 2014 14:58:23 +0000" -->
<!-- isosent="20140410145823" -->
<!-- name="Victor Vysotskiy" -->
<!-- email="victor.vysotskiy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance issue of mpirun/mpi_init" -->
<!-- id="8D58A4B5E6148C419C6AD6334962375DC21190F6_at_UWMBX04.uw.lu.se" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Performance issue of mpirun/mpi_init" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance issue of mpirun/mpi_init<br>
<strong>From:</strong> Victor Vysotskiy (<em>victor.vysotskiy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 10:58:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24137.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="24135.php">Ralph Castain: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Maybe in reply to:</strong> <a href="24131.php">Victor Vysotskiy: "[OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24139.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Reply:</strong> <a href="24139.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
<p><span class="quotelev1">&gt; it appears that 1.8 is much faster than 1.6.5 with the default settings, but slower when you set btl=tcp,self?
</span><br>
<p>Precisely. However, with the default settings  both versions are much slower compared to other MPI distributions such as MPICH, MVAPICH, and proprietary ones.  The  'btl=tcp,self' setting substantially boost performance of 1.6.5 on single processor multi-core computers running under Linux, or Mac OS X. But it doesn't work in 1.8 anymore ... 
<br>
<p><span class="quotelev1">&gt; Is this a copy/paste error? 
</span><br>
<p>Unfortunately,  it is not a copy/paste error. 
<br>
<p><span class="quotelev1">&gt; the next question is: how many nodes were in your allocation? 
</span><br>
<p>2 processes on a single machine running under Ubuntu Linux (laptop), or Mac OS X (Mac mini). 
<br>
<p>With best regards,
<br>
Victor.<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24137.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="24135.php">Ralph Castain: "Re: [OMPI users] How to set a process on a host but not bound to any core"</a>
<li><strong>Maybe in reply to:</strong> <a href="24131.php">Victor Vysotskiy: "[OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24139.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Reply:</strong> <a href="24139.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
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
