<?
$subject_val = "Re: [hwloc-devel] restrict and PCI branch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 14 06:19:53 2011" -->
<!-- isoreceived="20110314101953" -->
<!-- sent="Mon, 14 Mar 2011 11:19:46 +0100" -->
<!-- isosent="20110314101946" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] restrict and PCI branch" -->
<!-- id="20110314101946.GG6903_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="17626215.61996.1300096928242.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] restrict and PCI branch<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-14 06:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2057.php">Brice Goglin: "Re: [hwloc-devel] restrict and PCI branch"</a>
<li><strong>Previous message:</strong> <a href="2055.php">Brice Goglin: "Re: [hwloc-devel] restrict branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2057.php">Brice Goglin: "Re: [hwloc-devel] restrict and PCI branch"</a>
<li><strong>Reply:</strong> <a href="2057.php">Brice Goglin: "Re: [hwloc-devel] restrict and PCI branch"</a>
<li><strong>Reply:</strong> <a href="2070.php">Brice Goglin: "[hwloc-devel] Merging the PCI branch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Mon 14 Mar 2011 11:02:08 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 07/03/2011 17:56, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Le 01/03/2011 11:00, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also, in 1.2, we'll have a hwloc_topology_restrict() function which will
</span><br>
<span class="quotelev3">&gt; &gt;&gt; let you load the whole machine topology and then restrict it to whatever
</span><br>
<span class="quotelev3">&gt; &gt;&gt; part of it (a part is defined by a hwloc_cpuset_t).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; The restrict may be ready for merging in the near future. The interface
</span><br>
<span class="quotelev2">&gt; &gt; looks like this:
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If nobody complains about this, I will likely merge the branch within a
</span><br>
<span class="quotelev1">&gt; couple days.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, we may seriously consider doing a 1.2 beta release.
</span><br>
<p>I was wondering about merging the I/O branch:
<br>
- people have not expressed what they want so much,
<br>
- but people will probably not until it's exposed more,
<br>
- it's really a useful thing, and works fine in our tests,
<br>
- I'd like to see it out :)
<br>
<p>I believe the key issue could have been that applications may not expect
<br>
to have objects with an empty cpuset, but since by default I/O objects
<br>
are not added this is not an issue.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2057.php">Brice Goglin: "Re: [hwloc-devel] restrict and PCI branch"</a>
<li><strong>Previous message:</strong> <a href="2055.php">Brice Goglin: "Re: [hwloc-devel] restrict branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2057.php">Brice Goglin: "Re: [hwloc-devel] restrict and PCI branch"</a>
<li><strong>Reply:</strong> <a href="2057.php">Brice Goglin: "Re: [hwloc-devel] restrict and PCI branch"</a>
<li><strong>Reply:</strong> <a href="2070.php">Brice Goglin: "[hwloc-devel] Merging the PCI branch?"</a>
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
