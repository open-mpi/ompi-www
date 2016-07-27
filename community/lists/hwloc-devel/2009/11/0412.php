<?
$subject_val = "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 10:00:51 2009" -->
<!-- isoreceived="20091120150051" -->
<!-- sent="Fri, 20 Nov 2009 09:00:47 -0600" -->
<!-- isosent="20091120150047" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2" -->
<!-- id="4B06AF1F.8000408_at_sgi.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091120145443.GX4967_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2009-11-20 10:00:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0411.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0410.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;NUMAGROUP sounds fine to me.  Misc appears to be working for me though
<br>
and I'd like to start shipping hwloc on all our boxes in the next few
<br>
months.
<br>
<p>Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael Raymond, le Fri 20 Nov 2009 08:43:10 -0600, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;   In one pattern I might want to place processes on all the Cores in a
</span><br>
<span class="quotelev2">&gt;&gt; Misc and then move to the next Misc.  A topology tree that looks like
</span><br>
<span class="quotelev2">&gt;&gt; System -&gt; Misc -&gt; Core makes that easy.  Having Nodes in there just adds
</span><br>
<span class="quotelev2">&gt;&gt; unneeded complexity.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, I see.  What I'd see is instead of using the MISC type for numa
</span><br>
<span class="quotelev1">&gt; groups, introducing a NUMAGROUP object type.  In that case, ignoring
</span><br>
<span class="quotelev1">&gt; NUMA but not NUMAGROUP makes sense and would provide that result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, with a better version of hwloc you may still get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; System -&gt; Numagroup -&gt; Numagroup -&gt; Core
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; because e.g. thanks to more precise distances hwloc has noticed that the
</span><br>
<span class="quotelev1">&gt; first Numagroup level itself is hierarchical, forming another Numagroup
</span><br>
<span class="quotelev1">&gt; level.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Introduce several numagroup types?  How many?  That's not easy to
</span><br>
<span class="quotelev1">&gt; answer.
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
<li><strong>Next message:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0411.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0410.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0413.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
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
