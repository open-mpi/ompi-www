<?
$subject_val = "Re: [hwloc-devel] 1.1 .so version number";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  8 10:50:21 2010" -->
<!-- isoreceived="20101108155021" -->
<!-- sent="Mon, 08 Nov 2010 16:50:26 +0100" -->
<!-- isosent="20101108155026" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.1 .so version number" -->
<!-- id="4CD81C42.201_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="FDE8F4BE-255F-4F50-B89E-8B86DE22807F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.1 .so version number<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-08 10:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1446.php">Jeff Squyres: "[hwloc-devel] 1.0.3rc1 and 1.1rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="1444.php">Jeff Squyres: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>In reply to:</strong> <a href="1442.php">Jeff Squyres: "[hwloc-devel] 1.1 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1450.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/11/2010 15:38, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Short version:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not looked closely -- I *think* APIs have been added and changed since v1.0.  As such, I *think* the libtool .so version number for 1.1 should be 1:0:0.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I don't think any function behavior changed. But the object structure
<br>
has been extended, cache attributes were extended, machine attributes
<br>
were removed.
<br>
<p><span class="quotelev1">&gt; Can someone verify?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this means that applications linked against hwloc 1.0.x will not be able to upgrade to hwloc 1.1 without a recompile/relink.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>It looks ok.
<br>
<p><span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we assume the last version number of the 1.0 series will be 0:2:0, per Libtool .so versioning guidelines here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gnu.org/software/libtool/manual/html_node/Libtool-versioning.html#Libtool-versioning">http://www.gnu.org/software/libtool/manual/html_node/Libtool-versioning.html#Libtool-versioning</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gnu.org/software/libtool/manual/html_node/Updating-version-info.html#Updating-version-info">http://www.gnu.org/software/libtool/manual/html_node/Updating-version-info.html#Updating-version-info</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following rules apply:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - If the library source code has changed at all since the last update, then increment revision (&#145;c :r :a &#146; becomes &#145;c :r + 1:a &#146;).
</span><br>
<span class="quotelev1">&gt;   --&gt; takes us to 0:3:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - If any interfaces have been added, removed, or changed since the last update, increment current, and set revision to 0.
</span><br>
<span class="quotelev1">&gt;   --&gt; takes us to 1:0:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - If any interfaces have been added since the last public release, then increment age.
</span><br>
<span class="quotelev1">&gt;   --&gt; takes us to 1:0:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - If any interfaces have been removed or changed since the last public release, then set
</span><br>
<span class="quotelev1">&gt; age to 0.
</span><br>
<span class="quotelev1">&gt;   --&gt; takes us back to 1:0:0
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Looks ok too.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1446.php">Jeff Squyres: "[hwloc-devel] 1.0.3rc1 and 1.1rc2 posted"</a>
<li><strong>Previous message:</strong> <a href="1444.php">Jeff Squyres: "Re: [hwloc-devel] 1.0.3 .so version number"</a>
<li><strong>In reply to:</strong> <a href="1442.php">Jeff Squyres: "[hwloc-devel] 1.1 .so version number"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1450.php">Samuel Thibault: "Re: [hwloc-devel] 1.1 .so version number"</a>
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
