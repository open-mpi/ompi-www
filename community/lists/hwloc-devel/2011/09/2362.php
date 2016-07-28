<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  4 12:59:41 2011" -->
<!-- isoreceived="20110904165941" -->
<!-- sent="Sun, 04 Sep 2011 18:59:33 +0200" -->
<!-- isosent="20110904165933" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="4E63AE75.5000702_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2D9D4DEF-6800-4379-9907-E35875A06831_at_cisco.com" -->
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
<strong>Date:</strong> 2011-09-04 12:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2363.php">Brice Goglin: "[hwloc-devel] xmlbuffer and xmlFree()"</a>
<li><strong>Previous message:</strong> <a href="2361.php">Igor Gali&#196;&#135;: "[hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2338.php">Jeff Squyres: "[hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2364.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2364.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
JSON looks a bit more verbose than YAML, but JSON also looked better for
<br>
our hierarchical information, so I gave JSON a try. I just pushed the
<br>
result to the new json branch.
<br>
<p>Notes:
<br>
* You can only load/save from/to a memory buffer (set_jsonbufffer and
<br>
export_jsonbuffer), but lstopo needed to load/save from/to a file, so I
<br>
could add the corresponding routines (set_json and export_json) to the
<br>
public interface to match what we have for XML
<br>
* We don't care about the validity of our JSON output, but some quick
<br>
tests seem to say that it's OK anyway
<br>
* I tried to handle most parsing errors, it should not crash during
<br>
parsing, but it may crash later after the discovery (e.g. if you get an
<br>
error within a child before finishing its parent). It's not clear that
<br>
it's worse than XML. Loading a bogus JSON or XML topology is a user
<br>
error anyway :)
<br>
* Distances needs rework (the same I did for XML recently). I didn't do
<br>
it because it would make backporting to &lt;v1.3 harder (OMPI).
<br>
* Documentation is not updated until the API is finished
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2363.php">Brice Goglin: "[hwloc-devel] xmlbuffer and xmlFree()"</a>
<li><strong>Previous message:</strong> <a href="2361.php">Igor Gali&#196;&#135;: "[hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2338.php">Jeff Squyres: "[hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2364.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2364.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
