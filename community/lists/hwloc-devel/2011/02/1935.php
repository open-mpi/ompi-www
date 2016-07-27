<?
$subject_val = "Re: [hwloc-devel] What does this C99 notation mean?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 08:22:36 2011" -->
<!-- isoreceived="20110214132236" -->
<!-- sent="Mon, 14 Feb 2011 14:22:28 +0100" -->
<!-- isosent="20110214132228" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] What does this C99 notation mean?" -->
<!-- id="20110214132228.GJ8120_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="145044843.52935.1297689319704.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 08:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1936.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1934.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1921.php">Jeff Squyres: "[hwloc-devel] What does this C99 notation mean?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1937.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Mon 14 Feb 2011 14:15:19 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 11, 2011, at 10:51 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres, le Sat 12 Feb 2011 04:34:36 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; static void
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc_setup_groups_from_distances(struct hwloc_topology *topology,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 				  unsigned nbobjs,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 				  struct hwloc_obj **objs,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 				  float *_distances)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  float (*distances)[nbobjs][nbobjs] = (float (*)[nbobjs][nbobjs])_distances;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As far as I can tell, _distances is a 1D array of floats, but it is of size (nbobjs*nbobjs) -- i.e., you could think of it as a 2D array, and index the i'th column in the j'th row at _distances[i * nbobjs + j].  From how its used in the code, distances is treated as a 2D array -- i.e., distances[i][j] is accessed. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That's exactly it. It permits to keep code less clumsly to read.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does it silently make a (temporary) 2nd array of pointers for the 2nd dimension indexing, or does the compiler translate all distances[i][j] to _distances[i*nbojbs + j] ?
</span><br>
<p>No, it's the matrix type, with only one level of indirection, [i][j]
<br>
being automatically translated into [i*nobjs+j].
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1936.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1934.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1921.php">Jeff Squyres: "[hwloc-devel] What does this C99 notation mean?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1937.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
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
