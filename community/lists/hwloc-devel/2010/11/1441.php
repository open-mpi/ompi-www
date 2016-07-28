<?
$subject_val = "[hwloc-devel] 1.0.3 .so version number";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  8 09:17:43 2010" -->
<!-- isoreceived="20101108141743" -->
<!-- sent="Mon, 8 Nov 2010 09:17:37 -0500" -->
<!-- isosent="20101108141737" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] 1.0.3 .so version number" -->
<!-- id="CA90C0EC-C87E-4EBF-982A-857587CF9114_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] 1.0.3 .so version number<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-08 09:17:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1442.php">Jeff Squyres: "[hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1440.php">Jeff Squyres: "Re: [hwloc-devel] Final 1.0.x release?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1443.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Reply:</strong> <a href="1443.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Maybe reply:</strong> <a href="1449.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
--------------
<br>
<p>According to Libtool docs, I think the 1.0.3 .so version number should be 0:2:0.  
<br>
<p>Can someone verify/sanity check this?
<br>
<p>More details:
<br>
-------------
<br>
<p>Here's a Trac colorized diff between the 1.0 branch from r2349 and the current HEAD:
<br>
<p><a href="https://svn.open-mpi.org/trac/hwloc/changeset?old_path=/branches/v1.0&amp;old=2349&amp;new_path=/branches/v1.0&amp;new=HEAD">https://svn.open-mpi.org/trac/hwloc/changeset?old_path=/branches/v1.0&amp;old=2349&amp;new_path=/branches/v1.0&amp;new=HEAD</a>):
<br>
<p>The only interface change I see is this:
<br>
<p>-hwloc_linux_set_tid_cpubind(hwloc_topology_t topology __hwloc_attribute_unused, pid_t tid, hwloc_const_cpuset_t hwloc_set)
<br>
+hwloc_linux_set_tid_cpubind(hwloc_topology_t topology __hwloc_attribute_unused, pid_t tid __hwloc_attribute_unused, hwloc_const_cpuset_t hwloc_set __hwloc_attribute_unused)
<br>
<p>Which I don't believe impacts shared library linking (i.e., if an app used hwloc_linux_set_tid_cpubind() and compiled against hwloc 1.0.2, I believe it would still link successfully against the 1.0.3 libhwloc.  As such, I believe that this is a non-event, in terms of shared library versioning.
<br>
<p>So according to the Libtool .so versioning instructions:
<br>
<p><a href="http://www.gnu.org/software/libtool/manual/html_node/Libtool-versioning.html#Libtool-versioning">http://www.gnu.org/software/libtool/manual/html_node/Libtool-versioning.html#Libtool-versioning</a>
<br>
<p>and
<br>
<p><a href="http://www.gnu.org/software/libtool/manual/html_node/Updating-version-info.html#Updating-version-info">http://www.gnu.org/software/libtool/manual/html_node/Updating-version-info.html#Updating-version-info</a>
<br>
<p>I believe the version number should be 0:2:0.
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
<li><strong>Next message:</strong> <a href="1442.php">Jeff Squyres: "[hwloc-devel] 1.1 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1440.php">Jeff Squyres: "Re: [hwloc-devel] Final 1.0.x release?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1443.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Reply:</strong> <a href="1443.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Maybe reply:</strong> <a href="1449.php">Samuel Thibault: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
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
