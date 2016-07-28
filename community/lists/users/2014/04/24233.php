<?
$subject_val = "[OMPI users] Conflicts between jobs running on the same node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 13:38:13 2014" -->
<!-- isoreceived="20140417173813" -->
<!-- sent="Thu, 17 Apr 2014 17:37:56 +0000" -->
<!-- isosent="20140417173756" -->
<!-- name="Alfonso Sanchez" -->
<!-- email="alfonso.sanchez_at_[hidden]" -->
<!-- subject="[OMPI users] Conflicts between jobs running on the same node" -->
<!-- id="D80DA68B7508364190D631DB32964DE92212F13C_at_MAILBOXSERVER.tyndall.ie" -->
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
<strong>Subject:</strong> [OMPI users] Conflicts between jobs running on the same node<br>
<strong>From:</strong> Alfonso Sanchez (<em>alfonso.sanchez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-17 13:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24234.php">Ralph Castain: "Re: [OMPI users] Conflicts between jobs running on the same node"</a>
<li><strong>Previous message:</strong> <a href="24232.php">George Bosilca: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24234.php">Ralph Castain: "Re: [OMPI users] Conflicts between jobs running on the same node"</a>
<li><strong>Reply:</strong> <a href="24234.php">Ralph Castain: "Re: [OMPI users] Conflicts between jobs running on the same node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I've compiled OMPI 1.8 on a x64 linux cluster using the PGI compilers v14.1 (I've tried it with PGI v11.10 and get the same result). I'm able to compile with the resulting mpicc/mpifort/etc. When running the codes, everything seems to be working fine when there's only one job running on a given computing node. However, whenever a second job gets assigned the same computing node, the CPU load of every process gets divided by 2. I'm using pbs torque. As an example:
<br>
<p>-Submit jobA using torque to node1 using mpirun -n 4
<br>
<p>-All 4 rocesses of jobA show 100% CPU load.
<br>
<p>-Submit jobB using torque to node1 using mpirun -n 4
<br>
<p>-All 8 processes ( 4 from jobA &amp; 4 from jobB ) show 50% CPU load.
<br>
<p>Moreover, whilst jobA/jobB would run in 30 mins by itself; when both jobs are on the same node they've gone 14 hrs without completing.
<br>
<p>I'm attaching config.log &amp; the output of ompi_info --all (bzipped)
<br>
<p>Some more info:
<br>
<p>$&gt; ompi_info | grep tm
<br>
<p>MCA ess: tm (MCA v2.0, API v3.0, Component v1.8)
<br>
MCA plm: tm (MCA v2.0, API v2.0, Component v1.8)
<br>
MCA ras: tm (MCA v2.0, API v2.0, Component v1.8)
<br>
<p>Sorry if this is a common problem but I've tried searching for posts discussing similar problems but haven't been able to find any.
<br>
<p>Thanks for your help,
<br>
Alfonso
<br>


<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24233/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24233/ompi_output.log.bz2">ompi_output.log.bz2</a>
</ul>
<!-- attachment="ompi_output.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24234.php">Ralph Castain: "Re: [OMPI users] Conflicts between jobs running on the same node"</a>
<li><strong>Previous message:</strong> <a href="24232.php">George Bosilca: "Re: [OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24234.php">Ralph Castain: "Re: [OMPI users] Conflicts between jobs running on the same node"</a>
<li><strong>Reply:</strong> <a href="24234.php">Ralph Castain: "Re: [OMPI users] Conflicts between jobs running on the same node"</a>
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
