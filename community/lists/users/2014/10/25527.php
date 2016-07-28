<?
$subject_val = "[OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 06:37:56 2014" -->
<!-- isoreceived="20141017103756" -->
<!-- sent="Fri, 17 Oct 2014 21:37:36 +1100" -->
<!-- isosent="20141017103736" -->
<!-- name="Marshall Ward" -->
<!-- email="marshall.ward_at_[hidden]" -->
<!-- subject="[OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus" -->
<!-- id="CANtTEmZRYOeX=Ye-Gichr=rbgy+Uapr1i2_3cQMDobjXxdd5_A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus<br>
<strong>From:</strong> Marshall Ward (<em>marshall.ward_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 06:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25528.php">Jed Brown: "Re: [OMPI users] [FEniCS] Question about MPI barriers"</a>
<li><strong>Previous message:</strong> <a href="25526.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25536.php">Ralph Castain: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>Reply:</strong> <a href="25536.php">Ralph Castain: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I currently have a numerical model that, for reasons unknown, requires
<br>
preconnection to avoid hanging on an initial MPI_Allreduce call. But
<br>
when we try to scale out beyond around 1000 cores, we are unable to
<br>
get past MPI_Init's preconnection phase.
<br>
<p>To test this, I have a basic C program containing only MPI_Init() and
<br>
MPI_Finalize() named `mpi_init`, which I compile and run using `mpirun
<br>
-mca mpi_preconnect_mpi 1 mpi_init`.
<br>
<p>This preconnection seems to consume a large amount of memory, and is
<br>
exceeding the available memory on our nodes (~2GiB/core) as the number
<br>
gets into the thousands (~4000 or so). If we try to preconnect to
<br>
around ~6000, we start to see hangs and crashes.
<br>
<p>A failed 5600 core preconnection gave this warning (~10k times) while
<br>
hanging for 30 minutes:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[warn] opal_libevent2021_event_base_loop: reentrant invocation.
<br>
Only one event_base_loop can run on each event_base at once.
<br>
<p>A failed 6000-core preconnection job crashed almost immediately with
<br>
the following error.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[r104:18459] [[32743,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file ras_tm_module.c at line 159
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[r104:18459] [[32743,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file ras_tm_module.c at line 85
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[r104:18459] [[32743,0],0] ORTE_ERROR_LOG: File open failure in
<br>
file base/ras_base_allocate.c at line 187
<br>
<p>Should we expect to use very large amounts of memory for
<br>
preconnections of thousands of CPUs? And can these
<br>
<p>I am using Open MPI 1.8.2 on Linux 2.6.32 (centOS) and FDR infiniband
<br>
network. This is probably not enough information, but I'll try to
<br>
provide more if necessary. My knowledge of implementation is
<br>
unfortunately very limited.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25528.php">Jed Brown: "Re: [OMPI users] [FEniCS] Question about MPI barriers"</a>
<li><strong>Previous message:</strong> <a href="25526.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25536.php">Ralph Castain: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>Reply:</strong> <a href="25536.php">Ralph Castain: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
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
