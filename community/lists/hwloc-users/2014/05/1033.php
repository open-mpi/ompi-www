<?
$subject_val = "Re: [hwloc-users] node configuration differs form hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 09:29:00 2014" -->
<!-- isoreceived="20140528132900" -->
<!-- sent="Wed, 28 May 2014 07:28:59 -0600" -->
<!-- isosent="20140528132859" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] node configuration differs form hardware" -->
<!-- id="00db01cf7a78$c8d17c70$5a747550$_at_wattsys.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5385DE1A.6080504_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] node configuration differs form hardware<br>
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 09:28:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1034.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1032.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1032.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1034.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You have found what we found (also in other areas of OpenMPI) &#150; that Slurm
<br>
has some &#147;interesting&#148; behaviors.
<br>
<p>&nbsp;
<br>
<p>If it was easy, anyone could do it &#133;
<br>
<p>&nbsp;
<br>
<p>Ken
<br>
<p>==========================
<br>
<p>Kenneth A. Lloyd, Jr.
<br>
<p>CEO - Director, Systems Science
<br>
<p>Watt Systems Technologies Inc.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of
<br>
Brice Goglin
<br>
Sent: Wednesday, May 28, 2014 7:01 AM
<br>
To: Craig Kapfer; Hardware locality user list
<br>
Subject: Re: [hwloc-users] node configuration differs form hardware
<br>
<p>&nbsp;
<br>
<p>Le 28/05/2014 14:57, Craig Kapfer a &#233;crit :
<br>
<p>&nbsp;
<br>
<p><p>Hmm ... the slurm config defines that all nodes have 4 sockets with 16 cores
<br>
per socket (which corresponds to the hardware--all nodes are the same).
<br>
Slurm node config is as follows:
<br>
<p>&nbsp;
<br>
<p>NodeName=n[001-008] RealMemory=258452 Sockets=4 CoresPerSocket=16
<br>
ThreadsPerCore=1 State=UNKNOWN Port=[17001-17008]
<br>
<p>&nbsp;
<br>
<p>But we get this error--so I suspect it's a parsing error on the slurm side?
<br>
<p><p>No, it's slurm properly reading info from hwloc, but that info doesn't match
<br>
the actual hardware because the BIOS is buggy.
<br>
<p>Brice
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1033/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1034.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1032.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1032.php">Brice Goglin: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1034.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
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
