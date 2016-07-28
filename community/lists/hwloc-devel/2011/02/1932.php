<?
$subject_val = "Re: [hwloc-devel] What does this C99 notation mean?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 08:15:02 2011" -->
<!-- isoreceived="20110214131502" -->
<!-- sent="Mon, 14 Feb 2011 08:14:58 -0500" -->
<!-- isosent="20110214131458" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] What does this C99 notation mean?" -->
<!-- id="44433ED6-AA84-436D-A9E9-111832E6E029_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20110212035118.GE5131_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2011-02-14 08:14:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1933.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1931.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] CMake instead of m4"</a>
<li><strong>In reply to:</strong> <a href="1922.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1934.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Reply:</strong> <a href="1934.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2011, at 10:51 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres, le Sat 12 Feb 2011 04:34:36 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; static void
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_setup_groups_from_distances(struct hwloc_topology *topology,
</span><br>
<span class="quotelev2">&gt;&gt; 				  unsigned nbobjs,
</span><br>
<span class="quotelev2">&gt;&gt; 				  struct hwloc_obj **objs,
</span><br>
<span class="quotelev2">&gt;&gt; 				  float *_distances)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  float (*distances)[nbobjs][nbobjs] = (float (*)[nbobjs][nbobjs])_distances;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As far as I can tell, _distances is a 1D array of floats, but it is of size (nbobjs*nbobjs) -- i.e., you could think of it as a 2D array, and index the i'th column in the j'th row at _distances[i * nbobjs + j].  From how its used in the code, distances is treated as a 2D array -- i.e., distances[i][j] is accessed. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's exactly it. It permits to keep code less clumsly to read.
</span><br>
<p>Does it silently make a (temporary) 2nd array of pointers for the 2nd dimension indexing, or does the compiler translate all distances[i][j] to _distances[i*nbojbs + j] ?
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
<li><strong>Next message:</strong> <a href="1933.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1931.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] CMake instead of m4"</a>
<li><strong>In reply to:</strong> <a href="1922.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1934.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Reply:</strong> <a href="1934.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
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
