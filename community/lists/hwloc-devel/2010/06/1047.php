<?
$subject_val = "[hwloc-devel] libhwloc.so version number";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  3 15:02:40 2010" -->
<!-- isoreceived="20100603190240" -->
<!-- sent="Thu, 3 Jun 2010 15:02:35 -0400" -->
<!-- isosent="20100603190235" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] libhwloc.so version number" -->
<!-- id="F3D633E3-2528-458F-8B27-0F12D3AF7A75_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] libhwloc.so version number<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-03 15:02:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1048.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] libhwloc.so version number"</a>
<li><strong>Previous message:</strong> <a href="1046.php">Jeff Squyres: "Re: [hwloc-devel] solaris 9 fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1048.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] libhwloc.so version number"</a>
<li><strong>Reply:</strong> <a href="1048.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] libhwloc.so version number"</a>
<li><strong>Reply:</strong> <a href="1049.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at the changes from 1.0 -&gt; 1.0.1, it doesn't look like any interfaces changed:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/changeset?old_path=/branches/v1.0&amp;old=2100&amp;new_path=/branches/v1.0&amp;new=HEAD">https://svn.open-mpi.org/trac/hwloc/changeset?old_path=/branches/v1.0&amp;old=2100&amp;new_path=/branches/v1.0&amp;new=HEAD</a>
<br>
<p>Per the Libtool rules cited here (scroll down to the &quot;Shared Library Version Number&quot; section):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a>
<br>
<p>I think that hwloc's Libtool version number should go from 0:0:0 to 0:1:0.
<br>
<p>Can someone sanity check to ensure that's right?
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
<li><strong>Next message:</strong> <a href="1048.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] libhwloc.so version number"</a>
<li><strong>Previous message:</strong> <a href="1046.php">Jeff Squyres: "Re: [hwloc-devel] solaris 9 fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1048.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] libhwloc.so version number"</a>
<li><strong>Reply:</strong> <a href="1048.php">Wheeler, Kyle Bruce: "Re: [hwloc-devel] libhwloc.so version number"</a>
<li><strong>Reply:</strong> <a href="1049.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so version number"</a>
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
