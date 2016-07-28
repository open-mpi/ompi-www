<?
$subject_val = "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 16:46:11 2010" -->
<!-- isoreceived="20100215214611" -->
<!-- sent="Mon, 15 Feb 2010 22:46:05 +0100" -->
<!-- isosent="20100215214605" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction" -->
<!-- id="20100215214605.GS21016_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="49A97A61-F8B4-499A-A876-73283DFBBC67_at_pittman.co.uk" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-15 16:46:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0673.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Previous message:</strong> <a href="0671.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>In reply to:</strong> <a href="0671.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0673.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Reply:</strong> <a href="0673.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman, le Mon 15 Feb 2010 21:39:29 +0000, a &#233;crit :
<br>
<span class="quotelev1">&gt; On 15 Feb 2010, at 21:29, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brice Goglin, le Mon 15 Feb 2010 22:19:33 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - Add a configuration flag to limit the discovery to the current binding
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; of the process
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do we still want this for 1.0?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think Ashley wanted the first item when he requested lstopo --pid
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;pid&gt; but I may be wrong.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You mean in addition to the resolution of #21?  Maybe indeed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I follow ticket #12 but I suspect it's the same thing as #21.
</span><br>
<p>No, it's not, really :)
<br>
<p>#21 was never meant to limit the discovery to the current binding
<br>
(understand sched_setaffinity) of some process, it was just meant
<br>
to discover according to what another process would see, e.g. with
<br>
administrative constraints (understand Linux cpuset).
<br>
<p><span class="quotelev1">&gt; I say the commit r1726 which closed #21 and am working on testing this now, it certainly appears to be what I requested.
</span><br>
<p>Maybe, depending on whether you want to discover according to the other
<br>
process' binding (sched_setaffinity) or according to the other process'
<br>
restricted view of the machine (Linux cpuset).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0673.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Previous message:</strong> <a href="0671.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>In reply to:</strong> <a href="0671.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0673.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Reply:</strong> <a href="0673.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
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
