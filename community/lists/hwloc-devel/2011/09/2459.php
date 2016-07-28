<?
$subject_val = "Re: [hwloc-devel] Some practical hwloc API feedback";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 10:01:53 2011" -->
<!-- isoreceived="20110924140153" -->
<!-- sent="Sat, 24 Sep 2011 08:01:45 -0600" -->
<!-- isosent="20110924140145" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Some practical hwloc API feedback" -->
<!-- id="111F8724-50C6-483B-B8DF-1E338F1B5C7F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C1D430ED-F949-43FA-9970-0AD064C39192_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 10:01:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2460.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2458.php">Jeff Squyres: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>In reply to:</strong> <a href="2457.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2460.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2460.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 24, 2011, at 5:52 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 24, 2011, at 7:46 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The funky thing here is that the parent/child links between the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket and its core go across level 2 because nothing matches there. In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the first socket, you have Socket(depth1)-&gt;Core(depth3) while in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; second socket you have Socket(depth1)-&gt;Cache(depth2)-&gt;Core(depth3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh crap; this scenario is explicitly listed in the figure on page 21 of the letter PDF.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So... disregard my comments here.
</span><br>
<p>You might want to point that section out in hwloc.h as this is somewhat non-intuitive.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2460.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2458.php">Jeff Squyres: "Re: [hwloc-devel] CPUBIND flags when getting proc/thread affinity"</a>
<li><strong>In reply to:</strong> <a href="2457.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2460.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2460.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
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
