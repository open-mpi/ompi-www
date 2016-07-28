<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 04:52:08 2012" -->
<!-- isoreceived="20120925085208" -->
<!-- sent="Tue, 25 Sep 2012 10:52:03 +0200" -->
<!-- isosent="20120925085203" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="20120925085203.GI6096_at_type.oeaw.ads" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50616C7C.4090200_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] merging plugins?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 04:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3300.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3298.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3297.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3298.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 25 Sep 2012 10:34:29 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I am also going to add a hwloc_ prefix to plugin filenames because we
</span><br>
<span class="quotelev1">&gt; obviously can't create a libpci.so (libtool even warns about this).
</span><br>
<p>And it makes things clearer, I believe.
<br>
<p><span class="quotelev1">&gt; XML backends could be hwlocxml_ (not hwloc_xml_) to make it clear that
</span><br>
<span class="quotelev1">&gt; they are not normal hwloc_ plugins.
</span><br>
<p>Well, in the detection point of view they are: they simply replace all
<br>
other detection plugins (i.e. provide &quot;cpu&quot; and &quot;pci&quot; exclusion points,
<br>
but not &quot;bind&quot;), and third-party could want to do the same with their
<br>
own plugin.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3300.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3298.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3297.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3298.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
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
