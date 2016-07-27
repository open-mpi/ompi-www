<?
$subject_val = "[hwloc-devel] 1.3 -- wait!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 11 09:05:01 2011" -->
<!-- isoreceived="20111011130501" -->
<!-- sent="Tue, 11 Oct 2011 09:04:56 -0400" -->
<!-- isosent="20111011130456" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] 1.3 -- wait!" -->
<!-- id="D259E5CF-8552-4EFC-BA39-3BDBF62BAB0E_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] 1.3 -- wait!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-11 09:04:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2502.php">Brice Goglin: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<li><strong>Previous message:</strong> <a href="2500.php">Jeff Squyres: "Re: [hwloc-devel] final v1.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2502.php">Brice Goglin: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<li><strong>Reply:</strong> <a href="2502.php">Brice Goglin: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like Ralph's size/linesize patch didn't make it to v1.3:
<br>
<p>Index: src/traversal.c
<br>
===================================================================
<br>
--- src/traversal.c	(revision 3883)
<br>
+++ src/traversal.c	(working copy)
<br>
@@ -478,7 +478,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*assoc = '\0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;snprintf(assoc, sizeof(assoc), &quot;%sways=%d&quot;, separator, obj-&gt;attr-&gt;cache.associativity);
<br>
-      res = hwloc_snprintf(tmp, tmplen, &quot;%s%lu%s%sline=%u%s&quot;,
<br>
+      res = hwloc_snprintf(tmp, tmplen, &quot;%ssize=%lu%s%slinesize=%u%s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prefix,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(unsigned long) hwloc_memory_size_printf_value(obj-&gt;attr-&gt;cache.size, verbose),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_memory_size_printf_unit(obj-&gt;attr-&gt;cache.size, verbose),
<br>
<p><p>Can this go in before 1.3 is released?
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
<li><strong>Next message:</strong> <a href="2502.php">Brice Goglin: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<li><strong>Previous message:</strong> <a href="2500.php">Jeff Squyres: "Re: [hwloc-devel] final v1.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2502.php">Brice Goglin: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<li><strong>Reply:</strong> <a href="2502.php">Brice Goglin: "Re: [hwloc-devel] 1.3 -- wait!"</a>
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
