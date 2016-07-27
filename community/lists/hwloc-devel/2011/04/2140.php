<?
$subject_val = "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid Scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 13:27:53 2011" -->
<!-- isoreceived="20110413172753" -->
<!-- sent="Wed, 13 Apr 2011 13:21:46 -0400" -->
<!-- isosent="20110413172146" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc support added in Grid Engine / Grid Scheduler" -->
<!-- id="BANLkTikr1SoUgX3VMD8-WkVQ=9pTnp9mPw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DA4B42D.8090906_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc support added in Grid Engine / Grid Scheduler<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 13:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2141.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>Previous message:</strong> <a href="2139.php">Samuel Thibault: "Re: [hwloc-devel] 1.2rc2 released"</a>
<li><strong>In reply to:</strong> <a href="2136.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid Scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2141.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>Reply:</strong> <a href="2141.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks Brice!
<br>
<p>And I have a question for the list -- if the machine has processors
<br>
that are not idential - ie. some &quot;processors&quot; have SMT (or HT)
<br>
enabled, and some don't even have this support in the hardware, then
<br>
what would the tree look like?? Or if the cache structure is different
<br>
among the &quot;processors&quot;, then would I still be able to use
<br>
hwloc_get_depth_type() to get a consistent depth while I am iterating
<br>
through the tree??
<br>
<p>So far, my code has only been tested on homogeneous machines.
<br>
<p>Rayson
<br>
<p><p><p>On Tue, Apr 12, 2011 at 4:21 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Added!
</span><br>
<span class="quotelev1">&gt; thanks!
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 12/04/2011 22:12, Rayson Ho a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Can someone please add &quot;Open Grid Scheduler&quot; to the list of &quot;...
</span><br>
<span class="quotelev2">&gt;&gt; software already benefit from hwloc or are being ported to it&quot; in the
</span><br>
<span class="quotelev2">&gt;&gt; hwloc project homepage??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our homepage is:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Open Grid Scheduler is a fork of Sun Grid Engine, in total there are
</span><br>
<span class="quotelev2">&gt;&gt; 3 forks. And Oracle is still developing its own closed source
</span><br>
<span class="quotelev2">&gt;&gt; version!)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We will update the project status at:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net/projects/hwloc/GridEnginehwloc.html">http://gridscheduler.sourceforge.net/projects/hwloc/GridEnginehwloc.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We still need to fix a bug or 2, and then we will ship hwloc support
</span><br>
<span class="quotelev2">&gt;&gt; in SGE 6.2u5p3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<p><a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
<br>
<a href="http://sourceforge.net/projects/gridscheduler/">http://sourceforge.net/projects/gridscheduler/</a>
<br>
<p><span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2141.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>Previous message:</strong> <a href="2139.php">Samuel Thibault: "Re: [hwloc-devel] 1.2rc2 released"</a>
<li><strong>In reply to:</strong> <a href="2136.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid Scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2141.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
<li><strong>Reply:</strong> <a href="2141.php">Brice Goglin: "Re: [hwloc-devel] hwloc support added in Grid Engine / Grid	Scheduler"</a>
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
