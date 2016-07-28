<?
$subject_val = "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 08:41:48 2009" -->
<!-- isoreceived="20091021124148" -->
<!-- sent="Wed, 21 Oct 2009 08:41:43 -0400" -->
<!-- isosent="20091021124143" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ibverbs -&amp;gt; not just infiniband!" -->
<!-- id="0929FBFF-E11C-41A1-8AD1-6953BF7DF1B1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ADEFD3C.8020602_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] ibverbs -&gt; not just infiniband!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 08:41:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0196.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0194.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0194.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0196.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0196.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 8:23 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; So I think the name would be better as of-verbs.h, or
</span><br>
<span class="quotelev2">&gt; &gt; openfabrics-verbs.h, or ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd vote for or openfabrics-verbs.h then :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ok.  Sorry for all the lengthy explanations -- these brands/names are  
<br>
not well differentiated to the common observer (IMHO).  :-(
<br>
<p>I'll do the grunt work for the renaming.
<br>
<p><span class="quotelev2">&gt; &gt; Fair enough -- I have no problems #if LINUX'ing it for this release.
</span><br>
<span class="quotelev2">&gt; &gt; Mebbe someday if/when verbs is officially released on Solaris and
</span><br>
<span class="quotelev2">&gt; &gt; Windows and if we get adventurous enough, we can test on those
</span><br>
<span class="quotelev2">&gt; &gt; platforms and remove the #if LINUX protection.  Cool?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, we could install it only on Linux for now? (and document this in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; doxyfile)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Ok.  I'll add a test for that.  We're safe for the moment, because I  
<br>
don't think Sun has yet released their verbs stack publicly, nor do I  
<br>
think the Windows verbs effort is ready yet, either (but I really only  
<br>
very very loosely track these efforts, so I could be totally wrong).   
<br>
It'll help future-proof us for when these plaforms' verbs stacks are  
<br>
available -- we'll know to do proper testing at that point.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0196.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Previous message:</strong> <a href="0194.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>In reply to:</strong> <a href="0194.php">Brice Goglin: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0196.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<li><strong>Reply:</strong> <a href="0196.php">Jeff Squyres: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
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
