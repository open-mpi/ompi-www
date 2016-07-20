<?
$subject_val = "Re: [hwloc-users] node configuration differs form hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 09:01:16 2014" -->
<!-- isoreceived="20140528130116" -->
<!-- sent="Wed, 28 May 2014 15:01:14 +0200" -->
<!-- isosent="20140528130114" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] node configuration differs form hardware" -->
<!-- id="5385DE1A.6080504_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1401281864.78110.YahooMailNeo_at_web120602.mail.ne1.yahoo.com" -->
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
<strong>Date:</strong> 2014-05-28 09:01:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1033.php">Kenneth A. Lloyd: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1031.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1031.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1033.php">Kenneth A. Lloyd: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1033.php">Kenneth A. Lloyd: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1034.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/05/2014 14:57, Craig Kapfer a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm ... the slurm config defines that all nodes have 4 sockets with 16
</span><br>
<span class="quotelev1">&gt; cores per socket (which corresponds to the hardware--all nodes are the
</span><br>
<span class="quotelev1">&gt; same).   Slurm node config is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NodeName=n[001-008] RealMemory=258452 Sockets=4 CoresPerSocket=16
</span><br>
<span class="quotelev1">&gt; ThreadsPerCore=1 State=UNKNOWN Port=[17001-17008]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But we get this error--so I suspect it's a parsing error on the slurm
</span><br>
<span class="quotelev1">&gt; side?
</span><br>
<p>No, it's slurm properly reading info from hwloc, but that info doesn't
<br>
match the actual hardware because the BIOS is buggy.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1032/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1033.php">Kenneth A. Lloyd: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1031.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1031.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1033.php">Kenneth A. Lloyd: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1033.php">Kenneth A. Lloyd: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1034.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
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
