<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 05:15:26 2010" -->
<!-- isoreceived="20100707091526" -->
<!-- sent="Wed, 7 Jul 2010 11:15:19 +0200" -->
<!-- isosent="20100707091519" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="201007071115.19347.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C3167D6.80304_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] How to get information about hwloc objects?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 05:15:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1132.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2290)"</a>
<li><strong>In reply to:</strong> <a href="1129.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, July 05, 2010 07:04:22 am Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 05/07/2010 02:06, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I need to get NUMAnode since I'm comparing numactl and taskset commands.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --pulist and --nodelist were designed for when you need to pass the
</span><br>
<span class="quotelev1">&gt; result to numactl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I'm already using these:-)
<br>
<p>I have also seen you recent change:
<br>
==========================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--list &lt;type|depth&gt;
<br>
and replaces
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--nodelist with --list numanode (still supported but undocumented)
<br>
It should work for core and socket as well.
<br>
==========================
<br>
<p>I have downloaded hwloc-1.1a1r2290.tar.bz2 but apparently the modification is 
<br>
not there yet. If I get right you have implemented following, right?
<br>
<p>===========================================
<br>
hwloc-calc --list numanode --physical proc:0
<br>
=&gt; Should give NUMAnode to which proc:0 belongs.
<br>
<p>hwloc-calc --list socket --physical proc:0
<br>
=&gt; Should give Socket to which proc:0 belongs.
<br>
<p>hwloc-calc --list core --physical proc:0
<br>
=&gt; Should give Socket to which proc:0 belongs.
<br>
==============================================
<br>
<p>That's would be terrific! Please let me know in which nightly build will it be 
<br>
included.
<br>
<p><p><p>I have few suggestions regarding error handling in hwloc-calc 1.0.1:
<br>
=====================================================
<br>
hwloc-calc --nodelist --physical proc:0
<br>
=&gt; gives nothing back on systems without NUMA. I would expect some sort of 
<br>
error message on stderr.
<br>
<p>hwloc-calc --nodelist --physical proc:120
<br>
=&gt;gives nothing back. On that system, there is NUMA but only 64 processors. I 
<br>
would expect error message &quot;proc:120 does not exist&quot; reported on stderr. 
<br>
=====================================================
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1132.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2290)"</a>
<li><strong>In reply to:</strong> <a href="1129.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
