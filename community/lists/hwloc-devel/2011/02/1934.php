<?
$subject_val = "Re: [hwloc-devel] What does this C99 notation mean?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 08:21:00 2011" -->
<!-- isoreceived="20110214132100" -->
<!-- sent="Mon, 14 Feb 2011 08:20:55 -0500" -->
<!-- isosent="20110214132055" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] What does this C99 notation mean?" -->
<!-- id="EB88326A-33C1-475A-8F60-54346389F52E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44433ED6-AA84-436D-A9E9-111832E6E029_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] What does this C99 notation mean?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 08:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1935.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Previous message:</strong> <a href="1933.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>In reply to:</strong> <a href="1932.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1935.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2011, at 8:14 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; static void
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_setup_groups_from_distances(struct hwloc_topology *topology,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 				  unsigned nbobjs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 				  struct hwloc_obj **objs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 				  float *_distances)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; float (*distances)[nbobjs][nbobjs] = (float (*)[nbobjs][nbobjs])_distances;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it silently make a (temporary) 2nd array of pointers for the 2nd dimension indexing, or does the compiler translate all distances[i][j] to _distances[i*nbojbs + j] ?
</span><br>
<p>Let me re-phrase that, because the way I phrased it, I could guess that that detail might be implementation-dependent.
<br>
<p>What I meant was: _distances is clearly a 1D array.  Does the above C99 notation say &quot;treat this 1D array like a 2D array of size [x][y]&quot;?  And then how it actually happens underneath is implementation dependent (e.g., whether it makes a silent/temporary array or pointers, or converts indexing)?
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
<li><strong>Next message:</strong> <a href="1935.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Previous message:</strong> <a href="1933.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>In reply to:</strong> <a href="1932.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1935.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
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
