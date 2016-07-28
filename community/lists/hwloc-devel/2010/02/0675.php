<?
$subject_val = "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 17:16:23 2010" -->
<!-- isoreceived="20100215221623" -->
<!-- sent="Mon, 15 Feb 2010 22:16:16 +0000" -->
<!-- isosent="20100215221616" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction" -->
<!-- id="CB235717-0169-4220-B72A-4751B7308272_at_pittman.co.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100215220205.GT21016_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-15 17:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0676.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Previous message:</strong> <a href="0674.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>In reply to:</strong> <a href="0674.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0676.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Reply:</strong> <a href="0676.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 15 Feb 2010, at 22:02, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Ashley Pittman, le Mon 15 Feb 2010 21:52:29 +0000, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 15 Feb 2010, at 21:46, Samuel Thibault wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I say the commit r1726 which closed #21 and am working on testing this now, it certainly appears to be what I requested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe, depending on whether you want to discover according to the other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process' binding (sched_setaffinity) or according to the other process'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restricted view of the machine (Linux cpuset).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand the difference, I thought they were two ways of achieving the same thing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Linux cpusets are administrator restrictions.  A normal user can not
</span><br>
<span class="quotelev1">&gt; escape its cpuset.  It can however choose the binding within that
</span><br>
<span class="quotelev1">&gt; cpuset.  That is why by default hwloc limits its topology detection
</span><br>
<span class="quotelev1">&gt; to the cpuset of the current process, since it's not allowed to bind
</span><br>
<span class="quotelev1">&gt; threads of the process beyond that anyway. (same for the set of online
</span><br>
<span class="quotelev1">&gt; cpus).
</span><br>
<p>Ah that makes sense.
<br>
<p>I suspect the right thing to do is to from my perspective is to report the affinity rather than the cpuset then or rather whichever of the two is most restrictive which will be the affinity if it's set and the cpuset if it's not.  
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0676.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Previous message:</strong> <a href="0674.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>In reply to:</strong> <a href="0674.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0676.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Reply:</strong> <a href="0676.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
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
