<?
$subject_val = "[hwloc-devel] 1.1 .so version number";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  8 09:38:10 2010" -->
<!-- isoreceived="20101108143810" -->
<!-- sent="Mon, 8 Nov 2010 09:38:05 -0500" -->
<!-- isosent="20101108143805" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] 1.1 .so version number" -->
<!-- id="FDE8F4BE-255F-4F50-B89E-8B86DE22807F_at_cisco.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [hwloc-devel] 1.1 .so version number<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-08 09:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1443.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1441.php">Jeff Squyres: "[hwloc-devel] 1.0.3 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1445.php">Brice Goglin: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Reply:</strong> <a href="1445.php">Brice Goglin: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Maybe reply:</strong> <a href="1450.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Maybe reply:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Maybe reply:</strong> <a href="1453.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
--------------
<br>
<p>I have not looked closely -- I *think* APIs have been added and changed since v1.0.  As such, I *think* the libtool .so version number for 1.1 should be 1:0:0.
<br>
<p>Can someone verify?
<br>
<p>Note that this means that applications linked against hwloc 1.0.x will not be able to upgrade to hwloc 1.1 without a recompile/relink.
<br>
<p>More details:
<br>
-------------
<br>
<p>If we assume the last version number of the 1.0 series will be 0:2:0, per Libtool .so versioning guidelines here:
<br>
<p><a href="http://www.gnu.org/software/libtool/manual/html_node/Libtool-versioning.html#Libtool-versioning">http://www.gnu.org/software/libtool/manual/html_node/Libtool-versioning.html#Libtool-versioning</a>
<br>
<p>and
<br>
<p><a href="http://www.gnu.org/software/libtool/manual/html_node/Updating-version-info.html#Updating-version-info">http://www.gnu.org/software/libtool/manual/html_node/Updating-version-info.html#Updating-version-info</a>
<br>
<p>The following rules apply:
<br>
<p>- If the library source code has changed at all since the last update, then increment revision (&#145;c :r :a &#146; becomes &#145;c :r + 1:a &#146;).
<br>
&nbsp;&nbsp;--&gt; takes us to 0:3:0
<br>
<p>- If any interfaces have been added, removed, or changed since the last update, increment current, and set revision to 0.
<br>
&nbsp;&nbsp;--&gt; takes us to 1:0:0
<br>
<p>- If any interfaces have been added since the last public release, then increment age.
<br>
&nbsp;&nbsp;--&gt; takes us to 1:0:1
<br>
<p>- If any interfaces have been removed or changed since the last public release, then set
<br>
age to 0.
<br>
&nbsp;&nbsp;--&gt; takes us back to 1:0:0
<br>
<p>The last one is what I'm not sure about, but what I'm inferring from Samuel's statement about &quot;API breaks&quot;.
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
<li><strong>Next message:</strong> <a href="1443.php">Brice Goglin: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>Previous message:</strong> <a href="1441.php">Jeff Squyres: "[hwloc-devel] 1.0.3 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1445.php">Brice Goglin: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Reply:</strong> <a href="1445.php">Brice Goglin: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Maybe reply:</strong> <a href="1450.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Maybe reply:</strong> <a href="1451.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<li><strong>Maybe reply:</strong> <a href="1453.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
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
