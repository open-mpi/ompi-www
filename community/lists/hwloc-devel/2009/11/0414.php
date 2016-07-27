<?
$subject_val = "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 13:36:18 2009" -->
<!-- isoreceived="20091120183618" -->
<!-- sent="Fri, 20 Nov 2009 12:36:13 -0600" -->
<!-- isosent="20091120183613" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2" -->
<!-- id="4B06E19D.5030408_at_sgi.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091120154939.GY4967_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2<br>
<strong>From:</strong> Michael Raymond (<em>mraymond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-20 13:36:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0415.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Previous message:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Reply:</strong> <a href="0424.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;I wouldn't say no to the ability to flatten Misc / NUMA.  As to the
<br>
current issue though, does my patch look acceptable?  Thanks.
<br>
<p>Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Samuel Thibault, le Fri 20 Nov 2009 15:54:43 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Introduce several numagroup types?  How many?  That's not easy to
</span><br>
<span class="quotelev2">&gt;&gt; answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or maybe we can add an &quot;ignore&quot; configuration function that also takes a
</span><br>
<span class="quotelev1">&gt; pair of depth parameters to ignore a range of depths for a given type.
</span><br>
<span class="quotelev1">&gt; Here you would ignore the NUMA level and the NUMAGROUP depths different
</span><br>
<span class="quotelev1">&gt; from the one you're interested in, and this also permits to e.g. ignore
</span><br>
<span class="quotelev1">&gt; the L1 and L2 caches but not the L3 cache, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Michael A. Raymond
Message Passing Toolkit Team
Silicon Graphics Inc
(651) 683-3434
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0415.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Previous message:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0424.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Reply:</strong> <a href="0424.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
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
