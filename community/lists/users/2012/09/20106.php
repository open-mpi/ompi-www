<?
$subject_val = "[OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 17:12:21 2012" -->
<!-- isoreceived="20120903211221" -->
<!-- sent="Mon, 3 Sep 2012 23:12:14 +0200" -->
<!-- isosent="20120903211214" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="[OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken" -->
<!-- id="B8136F9F-DA01-4F04-A9F2-0F72D2B7A484_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-03 17:12:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20107.php">Ralph Castain: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20105.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20108.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Reply:</strong> <a href="20108.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I just compiled Open MPI 1.6.1 and before digging any deeper: does anyone else notice, that the command:
<br>
<p>$ mpiexec -n 4 -machinefile mymachines ./mpihello
<br>
<p>will ignore the argument &quot;-machinefile mymachines&quot; and use the file &quot;openmpi-default-hostfile&quot; instead all the time?
<br>
<p>==
<br>
<p>SGE issue
<br>
<p>I usually don't install new versions instantly, so I only noticed right now, that in 1.4.5 I get a wrong allocation inside SGE (always one process less than requested with `qsub -pe orted N ...`. This I tried only, as with 1.6.1 I get:
<br>
<p>--------------------------------------------------------------------------
<br>
There are no nodes allocated to this job.
<br>
--------------------------------------------------------------------------
<br>
<p>all the time.
<br>
<p>==
<br>
<p>I configured with:
<br>
<p>./configure --prefix=$HOME/local/... --enable-static --disable-shared --with-sge
<br>
<p>and adjusted my PATHs accordingly (at least: I hope so).
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20107.php">Ralph Castain: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20105.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20108.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Reply:</strong> <a href="20108.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
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
