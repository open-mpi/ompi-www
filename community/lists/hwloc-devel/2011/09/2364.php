<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  5 03:22:37 2011" -->
<!-- isoreceived="20110905072237" -->
<!-- sent="Mon, 05 Sep 2011 09:22:33 +0200" -->
<!-- isosent="20110905072233" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="4E6478B9.7090305_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E63AE75.5000702_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Something lighter-weight than XML?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-05 03:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2365.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2363.php">Brice Goglin: "[hwloc-devel] xmlbuffer and xmlFree()"</a>
<li><strong>In reply to:</strong> <a href="2362.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2368.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2368.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel thinks we could stay with XML and reimplement our own
<br>
parsing/dumping without libxml2.
<br>
<p>My feeling about this is:
<br>
+ We would have a single file format for import/export.
<br>
+ Saving would likely be easy (copy-paste from the current code and/or
<br>
from the JSON export)
<br>
- Parsing would require some work (the libxml2-based parser isn't easy
<br>
to modify, but we could adapt the JSON parser)
<br>
- Encoding may be annoying. libxml2 does a lot of things to manage
<br>
strings properly. There's not a lot of special character in a usual XML
<br>
output, but there can be (because the user can annotate the objects).
<br>
- I am a bit afraid that we would go from a well-working XML support to
<br>
something much less reliable (do we need to be fully XML compliant so
<br>
that external programs can load our XML files and play with them?)
<br>
<p>Opinions?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2365.php">Christopher Samuel: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2363.php">Brice Goglin: "[hwloc-devel] xmlbuffer and xmlFree()"</a>
<li><strong>In reply to:</strong> <a href="2362.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2368.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2368.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
