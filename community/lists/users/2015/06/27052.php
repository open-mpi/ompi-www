<?
$subject_val = "[OMPI users] orte-clean hang in 1.8.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 18:10:12 2015" -->
<!-- isoreceived="20150608221012" -->
<!-- sent="Mon, 08 Jun 2015 16:10:10 -0600" -->
<!-- isosent="20150608221010" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="[OMPI users] orte-clean hang in 1.8.5" -->
<!-- id="557612C2.7010509_at_lanl.gov" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] orte-clean hang in 1.8.5<br>
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-08 18:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27053.php">Ralph Castain: "Re: [OMPI users] orte-clean hang in 1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27051.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27053.php">Ralph Castain: "Re: [OMPI users] orte-clean hang in 1.8.5"</a>
<li><strong>Reply:</strong> <a href="27053.php">Ralph Castain: "Re: [OMPI users] orte-clean hang in 1.8.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>I had a user report that orte-clean is hanging on him with Open MPI 
<br>
1.8.5. Here are the steps I used to reproduce what he reported:
<br>
<p>%&gt; which orte-clean
<br>
/usr/projects/hpcsoft/toss2/moonlight/openmpi/1.6.5-gcc-4.4/bin/orte-clean
<br>
%&gt; mpirun -n 1 
<br>
/usr/projects/hpcsoft/toss2/moonlight/openmpi/1.6.5-gcc-4.4/bin/orte-clean
<br>
Reported: 1 (out of 1) daemons - 1 (out of 1) procs
<br>
[hangs]
<br>
<p>I have found that the same behavior does not happen using 1.6.5. That 
<br>
is, I get a command prompt after running orte-clean.
<br>
<p>Is this behavior expected? I am not familiar with orte-clean, so I am 
<br>
not sure if it hanging when used in this fashion is an actual problem 
<br>
with orte-clean. If it is unexpected behavior, I'll dig some more.
<br>
<p>Thank you very much for your time,
<br>
David
<br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27053.php">Ralph Castain: "Re: [OMPI users] orte-clean hang in 1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27051.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27053.php">Ralph Castain: "Re: [OMPI users] orte-clean hang in 1.8.5"</a>
<li><strong>Reply:</strong> <a href="27053.php">Ralph Castain: "Re: [OMPI users] orte-clean hang in 1.8.5"</a>
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
