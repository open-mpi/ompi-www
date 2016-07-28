<?
$subject_val = "Re: [hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 07:53:24 2010" -->
<!-- isoreceived="20101124125324" -->
<!-- sent="Wed, 24 Nov 2010 06:53:14 -0600" -->
<!-- isosent="20101124125314" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patches for upstream" -->
<!-- id="4CED0ABA.6080306_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CECE075.7090000_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patches for upstream<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 07:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1601.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1599.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831"</a>
<li><strong>In reply to:</strong> <a href="1597.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1601.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/24/2010 03:52 AM, Brice Goglin wrote:
<br>
<span class="quotelev2">&gt;&gt; 3. Warning squashes from shadowing global variables:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks ok but I don't see why index/depth would be global variables.
</span><br>
<span class="quotelev1">&gt; Aren't they reserved keywords instead?
</span><br>
<p>&quot;depth&quot; was first defined in the parent function (main()), and redefined 
<br>
within a smaller scope.
<br>
<p>&quot;index&quot; was defined in string.h.
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1601.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1599.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831"</a>
<li><strong>In reply to:</strong> <a href="1597.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1601.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
