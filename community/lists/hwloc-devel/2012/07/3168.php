<?
$subject_val = "[hwloc-devel] Compiler warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 12 07:35:36 2012" -->
<!-- isoreceived="20120712113536" -->
<!-- sent="Thu, 12 Jul 2012 07:35:35 -0400" -->
<!-- isosent="20120712113535" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Compiler warnings" -->
<!-- id="1DB45318-1DAE-4874-B9EF-7B4759CF0684_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Compiler warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-12 07:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3169.php">Brice Goglin: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="3167.php">Brice Goglin: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3169.php">Brice Goglin: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Reply:</strong> <a href="3169.php">Brice Goglin: "Re: [hwloc-devel] Compiler warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I silenced some harmless compiler warnings (i.e., the compiler couldn't tell that some variables would always be initialized) in r4610.
<br>
<p>I'm getting a few others, though -- could you have a look?
<br>
<p>distances.c: In function 'hwloc_distances_set_from_env':
<br>
distances.c:259: warning: '__old_locale' may be used uninitialized in this function
<br>
topology-xml.c: In function 'hwloc_topology_export_xmlbuffer':
<br>
topology-xml.c:882: warning: '__old_locale' may be used uninitialized in this function
<br>
topology-xml.c: In function 'hwloc_topology_export_xml':
<br>
topology-xml.c:857: warning: '__old_locale' may be used uninitialized in this function
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3169.php">Brice Goglin: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="3167.php">Brice Goglin: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3169.php">Brice Goglin: "Re: [hwloc-devel] Compiler warnings"</a>
<li><strong>Reply:</strong> <a href="3169.php">Brice Goglin: "Re: [hwloc-devel] Compiler warnings"</a>
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
