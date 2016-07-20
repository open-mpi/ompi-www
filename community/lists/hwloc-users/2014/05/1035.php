<?
$subject_val = "Re: [hwloc-users] node configuration differs form hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 10:16:07 2014" -->
<!-- isoreceived="20140528141607" -->
<!-- sent="Wed, 28 May 2014 16:16:06 +0200" -->
<!-- isosent="20140528141606" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] node configuration differs form hardware" -->
<!-- id="5385EFA6.9020404_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1401284806.34537.YahooMailNeo_at_web120603.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 10:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1036.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1034.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1034.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1036.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1036.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/05/2014 15:46, Craig Kapfer a &#233;crit :
<br>
<span class="quotelev1">&gt; Wait, I'm sorry, I must be missing something, please bear with me!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     By the way, your discussion of groups 1 and 2 below is wrong.
</span><br>
<span class="quotelev1">&gt;     Group 2 doesn't say that NUMA node == socket, and it doesn't
</span><br>
<span class="quotelev1">&gt;     report 8 sockets of 8 cores each. It reports 4 sockets containing
</span><br>
<span class="quotelev1">&gt;     2 NUMA nodes each containing 8 cores each, and that's likely what
</span><br>
<span class="quotelev1">&gt;     you have here (AMD Opteron 6300 or 6200 processors?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output of lstopo from nodes of both BIOS versions seem to indicate
</span><br>
<span class="quotelev1">&gt; that there are 4 sockets, but slurm is reporting on numa nodes, no?
</span><br>
<span class="quotelev1">&gt;  If not, which version of the BIOS is correct?
</span><br>
<p>Ah right, I misread group1. Group1 reports 4 sockets = 4 numa nodes
<br>
containing 16 cores each. That's wrong. There are 2 NUMA nodes in each
<br>
socket, and 8 cores in each NUMA nodes (instead of 1 NUMA node in each
<br>
socket, and 16 core in each NUMA node).
<br>
<p>Slurm is indeed saying something wrong. I wonder if it confuses NUMA
<br>
nodes and sockets, I can't find anything like this in Google. On Intel
<br>
that doesn't matter. On AMD it does.
<br>
<p>Anyway G2 is correct, so its BIOS may be less buggy than G1. Which BIOS
<br>
is more recent? Try updating the BIOS on one G1 machines to see if that
<br>
fixes the issue.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1035/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1036.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1034.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1034.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1036.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1036.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
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
