<?
$subject_val = "[OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 13 06:12:06 2012" -->
<!-- isoreceived="20120213111206" -->
<!-- sent="Mon, 13 Feb 2012 12:11:59 +0100" -->
<!-- isosent="20120213111159" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="[OMPI devel] poor btl sm latency" -->
<!-- id="201202131212.00586.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] poor btl sm latency<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-13 06:11:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10402.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10400.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10402.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10402.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10618.php">Christopher Samuel: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10708.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>on our new AMD cluster (AMD Opteron 6274, 2,2GHz) we get very bad latencies 
<br>
(~1.5us) when performing 0-byte p2p communication on one single node using the 
<br>
Open MPI sm BTL. When using Platform MPI we get ~0.5us latencies which is 
<br>
pretty good. The bandwidth results are similar for both MPI implementations 
<br>
(~3,3GB/s) - this is okay.
<br>
<p>One node has 64 cores and 64Gb RAM where it doesn't matter how many ranks 
<br>
allocated by the application. We get similar results with different number of 
<br>
ranks.
<br>
<p>We are using Open MPI 1.5.4 which is built by gcc 4.3.4 without any special 
<br>
configure options except the installation prefix and the location of the LSF 
<br>
stuff.
<br>
<p>As mentioned at <a href="http://www.open-mpi.org/faq/?category=sm">http://www.open-mpi.org/faq/?category=sm</a> we tried to use 
<br>
/dev/shm instead of /tmp for the session directory, but it had no effect. 
<br>
Furthermore, we tried the current release candidate 1.5.5rc1 of Open MPI which 
<br>
provides an option to use the SysV shared memory (-mca shmem sysv) - also this 
<br>
results in similar poor latencies.
<br>
<p>Do you have any idea? Please help!
<br>
<p>Thanks,
<br>
Matthias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10402.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10400.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10402.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10402.php">sylvain.jeaugey_at_[hidden]: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10618.php">Christopher Samuel: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10708.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
