<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 04:15:33 2011" -->
<!-- isoreceived="20111214091533" -->
<!-- sent="Wed, 14 Dec 2011 10:15:25 +0100" -->
<!-- isosent="20111214091525" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="20111214091525.GI4197_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="944787307.647666.1323799094295.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.1 and 1.4rc1<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 04:15:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2632.php">Brice Goglin: "[hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<li><strong>Previous message:</strong> <a href="2630.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Maybe in reply to:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2660.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 13 Dec 2011 18:58:14 +0100, a &#233;crit :
<br>
<span class="quotelev3">&gt; &gt;&gt; * About the &quot;tight&quot; attribute, can't you just make a special case when
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you're inside a GPU?
</span><br>
<span class="quotelev2">&gt; &gt; I don't like such kind of special-casing: in the future we could very
</span><br>
<span class="quotelev2">&gt; &gt; well also have a full-fledged core alongside an MP on the GPU.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wait, I just saw in the code that it's only a *group* attribute!
</span><br>
<p>BTW, that reminds me that there is a problem here with this actually:
<br>
exporting to XML works fine, but when importing back again, the group
<br>
object gets ignored, because the shared memory object just above it
<br>
(with exactly same scope) makes the core ignore the group object because
<br>
the latter does not bring any topology structure...
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2632.php">Brice Goglin: "[hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<li><strong>Previous message:</strong> <a href="2630.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1rc1: odd &quot;make check&quot; failure on Solaris 11"</a>
<li><strong>Maybe in reply to:</strong> <a href="2587.php">Brice Goglin: "[hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2660.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
