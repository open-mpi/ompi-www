<?
$subject_val = "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 10:26:32 2009" -->
<!-- isoreceived="20091022142632" -->
<!-- sent="Thu, 22 Oct 2009 15:26:48 +0100" -->
<!-- isosent="20091022142648" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs" -->
<!-- id="1256221608.3392.67.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AE06910.6060905_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 10:26:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0244.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Previous message:</strong> <a href="0242.php">Brice Goglin: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<li><strong>In reply to:</strong> <a href="0242.php">Brice Goglin: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0247.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-10-22 at 16:15 +0200, Brice Goglin wrote:
<br>
<span class="quotelev2">&gt; &gt; I've added the code to padb to run this against jobs, you can now do
</span><br>
<span class="quotelev2">&gt; &gt; &quot;padb -a --lstopo -c&quot; to see information about hosts where your jobs are
</span><br>
<span class="quotelev2">&gt; &gt; running.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://code.google.com/p/padb/source/detail?r=297">http://code.google.com/p/padb/source/detail?r=297</a>
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought you wanted the topology of the whole machine, not only the
</span><br>
<span class="quotelev1">&gt; current cpuset? If so, you want to add --whole-system to the lstopo
</span><br>
<span class="quotelev1">&gt; command-line.
</span><br>
<p>That's exactly what the code I've just committed does.
<br>
<p>Padb targets existing jobs but is also a parallel job itself, what would
<br>
be best would be if the padb job could report the topology for the
<br>
existing job by either supplying the pid or cpuset to lstopo.
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
<li><strong>Next message:</strong> <a href="0244.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Previous message:</strong> <a href="0242.php">Brice Goglin: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<li><strong>In reply to:</strong> <a href="0242.php">Brice Goglin: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0247.php">Ashley Pittman: "Re: [hwloc-devel] [hwloc] #21: Allow lookup of specific PIDs"</a>
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
