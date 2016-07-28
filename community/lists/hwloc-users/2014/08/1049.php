<?
$subject_val = "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 08:30:01 2014" -->
<!-- isoreceived="20140815123001" -->
<!-- sent="Fri, 15 Aug 2014 14:29:59 +0200" -->
<!-- isosent="20140815122959" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error" -->
<!-- id="53EDFD47.7060500_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140815131157.26a67d07_at_antares" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-15 08:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1050.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>Previous message:</strong> <a href="1048.php">Andrej Prsa: "[hwloc-users] hwloc error"</a>
<li><strong>In reply to:</strong> <a href="1048.php">Andrej Prsa: "[hwloc-users] hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1050.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>Reply:</strong> <a href="1050.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>Reply:</strong> <a href="1053.php">Andrej Prsa: "Re: [hwloc-users] hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Your platform reports buggy L3 cache locality information. This is very
<br>
common on AMD 62xx and 63xx platforms unfortunately.
<br>
<p>You have 8 L3 caches (one per 6-core NUMA node, two per socket), but the
<br>
platform report 11 L3 caches instead:
<br>
Socket s1, 2 and 4 report one L3 above 2 cores, one L3 above 4 other
<br>
cores, and one L3 above 4 cores in one NUMA node and 2 cores in the
<br>
other NUMA node.
<br>
<p>Your kernel looks recent enough, can you try upgrading your BIOS ? You
<br>
have version 3.0b and there's a 3.5 version at
<br>
<a href="http://www.supermicro.com/aplus/motherboard/opteron6000/sr56x0/h8qg6-f.cfm">http://www.supermicro.com/aplus/motherboard/opteron6000/sr56x0/h8qg6-f.cfm</a>
<br>
<p>Brice
<br>
<p><p><p><p>Le 15/08/2014 14:11, Andrej Prsa a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset 0x0000003f) without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 940
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As requested, reporting this and including the output and the tarball. 
</span><br>
<span class="quotelev1">&gt; This is hwloc-1.9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH,
</span><br>
<span class="quotelev1">&gt; Andrej
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1049.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1049.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1049/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1050.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>Previous message:</strong> <a href="1048.php">Andrej Prsa: "[hwloc-users] hwloc error"</a>
<li><strong>In reply to:</strong> <a href="1048.php">Andrej Prsa: "[hwloc-users] hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1050.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>Reply:</strong> <a href="1050.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>Reply:</strong> <a href="1053.php">Andrej Prsa: "Re: [hwloc-users] hwloc error"</a>
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
