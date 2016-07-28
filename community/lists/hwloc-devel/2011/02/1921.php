<?
$subject_val = "[hwloc-devel] What does this C99 notation mean?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 11 22:34:19 2011" -->
<!-- isoreceived="20110212033419" -->
<!-- sent="Fri, 11 Feb 2011 18:04:25 -0800" -->
<!-- isosent="20110212020425" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] What does this C99 notation mean?" -->
<!-- id="5F6E979C-4787-4427-92D6-0FBF1D179D18_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] What does this C99 notation mean?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-11 21:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1922.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Previous message:</strong> <a href="1920.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3171)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1922.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe reply:</strong> <a href="1922.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe reply:</strong> <a href="1935.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe reply:</strong> <a href="1937.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In distances.c, I see:
<br>
<p>static void
<br>
hwloc_setup_groups_from_distances(struct hwloc_topology *topology,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned nbobjs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct hwloc_obj **objs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float *_distances)
<br>
{
<br>
&nbsp;&nbsp;float (*distances)[nbobjs][nbobjs] = (float (*)[nbobjs][nbobjs])_distances;
<br>
<p>As far as I can tell, _distances is a 1D array of floats, but it is of size (nbobjs*nbobjs) -- i.e., you could think of it as a 2D array, and index the i'th column in the j'th row at _distances[i * nbobjs + j].  From how its used in the code, distances is treated as a 2D array -- i.e., distances[i][j] is accessed. 
<br>
<p>I have a bunch of guesses as to what this means, but none of them seem quite right, so I figured I just ask -- what the heck does that declaration statement mean?
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
<li><strong>Next message:</strong> <a href="1922.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Previous message:</strong> <a href="1920.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3171)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1922.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe reply:</strong> <a href="1922.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe reply:</strong> <a href="1935.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe reply:</strong> <a href="1937.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
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
