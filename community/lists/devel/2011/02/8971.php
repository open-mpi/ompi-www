<?
$subject_val = "[OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 10:35:18 2011" -->
<!-- isoreceived="20110210153518" -->
<!-- sent="Thu, 10 Feb 2011 08:34:07 -0700" -->
<!-- isosent="20110210153407" -->
<!-- name="Nikolay Piskun" -->
<!-- email="Nikolay.Piskun_at_[hidden]" -->
<!-- subject="[OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)" -->
<!-- id="05A2D633CD5E734DAF0DF7A7CBBB8C7E63B76BFCED_at_Eagle.Blue.Roguewave.Com" -->
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
<strong>Subject:</strong> [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)<br>
<strong>From:</strong> Nikolay Piskun (<em>Nikolay.Piskun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 10:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8972.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)"</a>
<li><strong>Previous message:</strong> <a href="8970.php">Jeff Squyres: "Re: [OMPI devel] hwloc causes compilation to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8972.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)"</a>
<li><strong>Reply:</strong> <a href="8972.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;Hi,
<br>
I am trying to use Totalview with srun and hit interesting problem. Looks like if OMPI is started by &quot;srun   -mpi=ompi &quot;, mpi job is hang in ompi_wait_for_debugger() subroutine. What happen, I think is ompi was compiled without ORTE_DISABLE_FULL_SUPPORT and as result rank 0 is waiting for message from HNP (by the way what is HNP?)  that was supposed to be send by orterun. The problem is that orterun was never invoked because MPI was initiated by srun, not orterun.  So what is the solution? Should we always compile OMPI with  ORTE_DISABLE_FULL_SUPPORT=true for anything that uses different starters like srun from SLURM?
<br>
Thanks
<br>
Nikolay
<br>
<p>Nikolay Piskun | Director of Continuing Engineering | Totalview Technologies |
<br>
Rogue Wave Software Inc  |  24 Prime Parkway, Natick, MA 01760 | p 508-652-7739|
<br>
nikolay.piskun_at_[hidden]&lt;mailto:nikolay_at_[hidden]&gt;
<br>
www.roguewave.com&lt;<a href="http://www.roguewave.com">http://www.roguewave.com</a>&gt;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8971/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8972.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)"</a>
<li><strong>Previous message:</strong> <a href="8970.php">Jeff Squyres: "Re: [OMPI devel] hwloc causes compilation to fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8972.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)"</a>
<li><strong>Reply:</strong> <a href="8972.php">Ralph Castain: "Re: [OMPI devel] Debugger problem with srun and openmpi 1.5 (hang in OMPI)"</a>
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
