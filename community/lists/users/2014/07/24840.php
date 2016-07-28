<?
$subject_val = "[OMPI users] Question on process and memory affinity with 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 18:01:37 2014" -->
<!-- isoreceived="20140721220137" -->
<!-- sent="Mon, 21 Jul 2014 22:00:38 +0000" -->
<!-- isosent="20140721220038" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Question on process and memory affinity with 1.8.1" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CBCB07C_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Question on process and memory affinity with 1.8.1<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-21 18:00:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24841.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Previous message:</strong> <a href="24839.php">Tom Rosmond: "Re: [OMPI users] MPIIO and derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24849.php">Ralph Castain: "Re: [OMPI users] Question on process and memory affinity with 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24849.php">Ralph Castain: "Re: [OMPI users] Question on process and memory affinity with 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In making the leap from 1.6 to 1.8, how can I check whether or not process/memory affinity is supported?
<br>
<p>I've built OpenMPI on a system where the numactl-devel package was not installed, and another where it was, but I can't see anything in the output of ompi_info that suggests any difference between the two builds.  Both builds on Linux RHEL6 systems, just different hosts.  both Sandy Bridge.
<br>
<p>I guess I can try -bind-to-core on both systems and -report-bindings, then see what output I get.
<br>
<p>I was just wondering if there's a quick way to tell by using ompi_info.
<br>
<p>Thanks
<br>
<p>Ed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24840/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24841.php">Syed Ahsan Ali: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Previous message:</strong> <a href="24839.php">Tom Rosmond: "Re: [OMPI users] MPIIO and derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24849.php">Ralph Castain: "Re: [OMPI users] Question on process and memory affinity with 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24849.php">Ralph Castain: "Re: [OMPI users] Question on process and memory affinity with 1.8.1"</a>
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
