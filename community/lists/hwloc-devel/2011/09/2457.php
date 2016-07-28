<?
$subject_val = "Re: [hwloc-devel] Some practical hwloc API feedback";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 07:52:33 2011" -->
<!-- isoreceived="20110924115233" -->
<!-- sent="Sat, 24 Sep 2011 07:52:23 -0400" -->
<!-- isosent="20110924115223" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Some practical hwloc API feedback" -->
<!-- id="C1D430ED-F949-43FA-9970-0AD064C39192_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DE50CF43-2772-4889-A660-2DE4E134B140_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Some practical hwloc API feedback<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 07:52:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2458.php">Jeff Squyres: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>Previous message:</strong> <a href="2456.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>In reply to:</strong> <a href="2456.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2459.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2459.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 24, 2011, at 7:46 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; The funky thing here is that the parent/child links between the first
</span><br>
<span class="quotelev2">&gt;&gt; socket and its core go across level 2 because nothing matches there. In
</span><br>
<span class="quotelev2">&gt;&gt; the first socket, you have Socket(depth1)-&gt;Core(depth3) while in the
</span><br>
<span class="quotelev2">&gt;&gt; second socket you have Socket(depth1)-&gt;Cache(depth2)-&gt;Core(depth3)
</span><br>
<p>Oh crap; this scenario is explicitly listed in the figure on page 21 of the letter PDF.  :-\
<br>
<p>So... disregard my comments here.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2458.php">Jeff Squyres: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>Previous message:</strong> <a href="2456.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>In reply to:</strong> <a href="2456.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2459.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2459.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
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
