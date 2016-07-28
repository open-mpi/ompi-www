<?
$subject_val = "[OMPI users] 1.8.1 [SEC=UNCLASSIFIED]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 00:40:12 2015" -->
<!-- isoreceived="20150128054012" -->
<!-- sent="Wed, 28 Jan 2015 05:39:49 +0000" -->
<!-- isosent="20150128053949" -->
<!-- name="DOHERTY, Greg" -->
<!-- email="gdz_at_[hidden]" -->
<!-- subject="[OMPI users] 1.8.1 [SEC=UNCLASSIFIED]" -->
<!-- id="31AF19C9C3A1AF4FA8FBE7A0E8F3DEB81B08A875_at_exmbs1-b51.ansto.gov.au" -->
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
<strong>Subject:</strong> [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]<br>
<strong>From:</strong> DOHERTY, Greg (<em>gdz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-28 00:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26240.php">Ralph Castain: "Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="26238.php">Kris Kersten: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26240.php">Ralph Castain: "Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<li><strong>Reply:</strong> <a href="26240.php">Ralph Castain: "Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This might or might not be related to openmpi 1.8.1. I have not seen the problem with the same program and previous versions of openmpi
<br>
We have 64 core AMD nodes. I have recently recompiled  a large Monte Carlo program using 1.8.1 version of openmpi. Users start this program using maui/torque asking for a number of cores, usually on only one node. One run of the program asking for any number of cores up to 64 runs with full cpu utilisation on each core. A user might start a run asking for 16 cores - fine. Then he starts a second run on the same node, asking for another 16 cores. Immediately the cpu utilisation on all cores of the first job drops to 50%, as it is for the newly starting job. If a different program were using the remaining 32 cores on the same node at the same time, the cpu utilisation of its cores is unaffected. If we qdel the second 16 core job, the cpu utilisation of each core of the first job immediately climbs back to 100%. Any suggestions please, on where I might start looking for the solution to this problem?
<br>
Greg Doherty
<br>
ANSTO
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26240.php">Ralph Castain: "Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<li><strong>Previous message:</strong> <a href="26238.php">Kris Kersten: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26240.php">Ralph Castain: "Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
<li><strong>Reply:</strong> <a href="26240.php">Ralph Castain: "Re: [OMPI users] 1.8.1 [SEC=UNCLASSIFIED]"</a>
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
