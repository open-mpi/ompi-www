<?
$subject_val = "[hwloc-devel] hwloc-bind again";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 21:23:14 2009" -->
<!-- isoreceived="20091204022314" -->
<!-- sent="Thu, 3 Dec 2009 21:23:07 -0500" -->
<!-- isosent="20091204022307" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-bind again" -->
<!-- id="E768E532-8000-4510-AA89-BF9408C76562_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-bind again<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 21:23:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0463.php">Jeff Squyres: "[hwloc-devel] Proof hwloc-bind.1in"</a>
<li><strong>Previous message:</strong> <a href="0461.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0464.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind again"</a>
<li><strong>Reply:</strong> <a href="0464.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that
<br>
<p>shell$ hwloc-bind
<br>
<p>(i.e., invoking hwloc-bind with no arguments)
<br>
<p>returns an exit status of 0.  Shouldn't it return non-zero?  I'd think it was an error if you didn't give hwloc-bind anything to do.  For example, we wouldn't want a script with something like this:
<br>
<p>hwloc-bind $actions_to_do
<br>
<p>to return 0 if $actions_to_do was mistakenly empty.
<br>
<p>Right?
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
<li><strong>Next message:</strong> <a href="0463.php">Jeff Squyres: "[hwloc-devel] Proof hwloc-bind.1in"</a>
<li><strong>Previous message:</strong> <a href="0461.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0464.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind again"</a>
<li><strong>Reply:</strong> <a href="0464.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind again"</a>
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
