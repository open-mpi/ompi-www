<?
$subject_val = "Re: [hwloc-devel] v1.0 features";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 16:21:13 2009" -->
<!-- isoreceived="20091214212113" -->
<!-- sent="Mon, 14 Dec 2009 22:21:08 +0100" -->
<!-- isosent="20091214212108" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] v1.0 features" -->
<!-- id="4B26AC44.4070609_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F0850BD-77EC-409C-B26C-3A5B7505C9CD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] v1.0 features<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-14 16:21:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-devel] v1.0 features"</a>
<li><strong>Previous message:</strong> <a href="0508.php">Jeff Squyres: "[hwloc-devel] v1.0 features"</a>
<li><strong>In reply to:</strong> <a href="0508.php">Jeff Squyres: "[hwloc-devel] v1.0 features"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-devel] v1.0 features"</a>
<li><strong>Reply:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-devel] v1.0 features"</a>
<li><strong>Reply:</strong> <a href="0511.php">Jeff Squyres: "Re: [hwloc-devel] v1.0 features"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; So where do we want to draw the line for v1.0?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Due to some external forces, it may be desirable to get hwloc embedded in Open MPI sooner rather than later.  We can take a beta/snapshot of hwloc in Open MPI, but it would always be nicer to take an officially released version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What other things did we want to get in hwloc before v1.0?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm about halfway through the embedding code.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Initially, memory binding was the main missing feature. But I'd be ok to
<br>
wait for 1.1 and just make 1.0 the first good release with a good API
<br>
and the embedding stuff.
<br>
<p>Apart from that, from the ticket list:
<br>
* fix icc warnings -&gt; can wait
<br>
* vsnprintf warnings -&gt; can wait
<br>
* PLPA-like API -&gt; will work on it soon
<br>
* user-defined processor restriction -&gt; Samuel may know how far we are
<br>
from this
<br>
* lookup of specific PID -&gt; not sure
<br>
* lstopo logical/physical -&gt; will work on it soon
<br>
* use same logical/physical index bias in all CLI tools -&gt; might be easy
<br>
from the above
<br>
* get nbprocs from the command line -&gt; easy, just need to agree what we
<br>
actually want
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-devel] v1.0 features"</a>
<li><strong>Previous message:</strong> <a href="0508.php">Jeff Squyres: "[hwloc-devel] v1.0 features"</a>
<li><strong>In reply to:</strong> <a href="0508.php">Jeff Squyres: "[hwloc-devel] v1.0 features"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-devel] v1.0 features"</a>
<li><strong>Reply:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-devel] v1.0 features"</a>
<li><strong>Reply:</strong> <a href="0511.php">Jeff Squyres: "Re: [hwloc-devel] v1.0 features"</a>
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
