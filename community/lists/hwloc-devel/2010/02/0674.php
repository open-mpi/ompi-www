<?
$subject_val = "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 17:02:13 2010" -->
<!-- isoreceived="20100215220213" -->
<!-- sent="Mon, 15 Feb 2010 23:02:05 +0100" -->
<!-- isosent="20100215220205" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction" -->
<!-- id="20100215220205.GT21016_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0D7F888C-7E6F-493B-B56B-5AF53DD530FF_at_pittman.co.uk" -->
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
<strong>Date:</strong> 2010-02-15 17:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0675.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Previous message:</strong> <a href="0673.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>In reply to:</strong> <a href="0673.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0675.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Reply:</strong> <a href="0675.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman, le Mon 15 Feb 2010 21:52:29 +0000, a &#233;crit :
<br>
<span class="quotelev1">&gt; On 15 Feb 2010, at 21:46, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I say the commit r1726 which closed #21 and am working on testing this now, it certainly appears to be what I requested.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Maybe, depending on whether you want to discover according to the other
</span><br>
<span class="quotelev2">&gt; &gt; process' binding (sched_setaffinity) or according to the other process'
</span><br>
<span class="quotelev2">&gt; &gt; restricted view of the machine (Linux cpuset).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't understand the difference, I thought they were two ways of achieving the same thing?
</span><br>
<p>Linux cpusets are administrator restrictions.  A normal user can not
<br>
escape its cpuset.  It can however choose the binding within that
<br>
cpuset.  That is why by default hwloc limits its topology detection
<br>
to the cpuset of the current process, since it's not allowed to bind
<br>
threads of the process beyond that anyway. (same for the set of online
<br>
cpus).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0675.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Previous message:</strong> <a href="0673.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>In reply to:</strong> <a href="0673.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0675.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
<li><strong>Reply:</strong> <a href="0675.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #12: support user-defined processor restriction"</a>
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
