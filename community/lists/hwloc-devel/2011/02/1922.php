<?
$subject_val = "Re: [hwloc-devel] What does this C99 notation mean?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 11 22:51:26 2011" -->
<!-- isoreceived="20110212035126" -->
<!-- sent="Sat, 12 Feb 2011 04:51:18 +0100" -->
<!-- isosent="20110212035118" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] What does this C99 notation mean?" -->
<!-- id="20110212035118.GE5131_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="748503321.36528.1297481676570.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-02-11 22:51:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1923.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1921.php">Jeff Squyres: "[hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1921.php">Jeff Squyres: "[hwloc-devel] What does this C99 notation mean?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1932.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Reply:</strong> <a href="1932.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Sat 12 Feb 2011 04:34:36 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; static void
</span><br>
<span class="quotelev1">&gt; hwloc_setup_groups_from_distances(struct hwloc_topology *topology,
</span><br>
<span class="quotelev1">&gt; 				  unsigned nbobjs,
</span><br>
<span class="quotelev1">&gt; 				  struct hwloc_obj **objs,
</span><br>
<span class="quotelev1">&gt; 				  float *_distances)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   float (*distances)[nbobjs][nbobjs] = (float (*)[nbobjs][nbobjs])_distances;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I can tell, _distances is a 1D array of floats, but it is of size (nbobjs*nbobjs) -- i.e., you could think of it as a 2D array, and index the i'th column in the j'th row at _distances[i * nbobjs + j].  From how its used in the code, distances is treated as a 2D array -- i.e., distances[i][j] is accessed. 
</span><br>
<p>That's exactly it. It permits to keep code less clumsly to read.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1923.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1921.php">Jeff Squyres: "[hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1921.php">Jeff Squyres: "[hwloc-devel] What does this C99 notation mean?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1932.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Reply:</strong> <a href="1932.php">Jeff Squyres: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
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
