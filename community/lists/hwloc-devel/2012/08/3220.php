<?
$subject_val = "[hwloc-devel] merging the valarray branch (with a better name)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 04:26:45 2012" -->
<!-- isoreceived="20120824082645" -->
<!-- sent="Fri, 24 Aug 2012 10:26:39 +0200" -->
<!-- isosent="20120824082639" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] merging the valarray branch (with a better name)" -->
<!-- id="50373ABF.7050704_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] merging the valarray branch (with a better name)<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 04:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3221.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3219.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.1rc1r4761)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3221.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3221.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I got some positive feedback from the user who requested what's in the
<br>
&quot;valarray&quot; branch so I am planning to include it in v1.6.
<br>
<p>For the record, it's about annotating objects with randoms values.
<br>
Before that, we can annotate objects with strings only (&quot;info&quot;). This
<br>
adds a structure containing a name, a number of elements, an array of
<br>
indexes, and an array of floats. Typically, you would use it to store
<br>
things like HW benchmark results there, and applications would just load
<br>
the annotated XML topology to get benchmark results too.
<br>
<p>The configurable number of elements and the array of indexes lets you
<br>
store a lot of things, even 2D or 3D matrices (you just need to compute
<br>
a 1D index from the 2D/3D coordinates). Floats are not perfect but they
<br>
should be enough for most cases.
<br>
<p>The question that remains is about the naming. Right now, it's
<br>
&quot;valarray&quot; but it don't like it. What it really means is &quot;custom array
<br>
of float values&quot;. Maybe just &quot;values&quot;, or &quot;floats&quot;, or &quot;custom floats&quot;,
<br>
or ... ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3221.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3219.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.1rc1r4761)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3221.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3221.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
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
