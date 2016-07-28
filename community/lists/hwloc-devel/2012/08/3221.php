<?
$subject_val = "Re: [hwloc-devel] merging the valarray branch (with a better name)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 05:46:06 2012" -->
<!-- isoreceived="20120824094606" -->
<!-- sent="Fri, 24 Aug 2012 05:46:00 -0400" -->
<!-- isosent="20120824094600" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging the valarray branch (with a better name)" -->
<!-- id="B36E54CD-A230-4A10-BCAA-CDAF48382F83_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50373ABF.7050704_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] merging the valarray branch (with a better name)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 05:46:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3222.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3220.php">Brice Goglin: "[hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3220.php">Brice Goglin: "[hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3222.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3222.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2012, at 4:26 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; The question that remains is about the naming. Right now, it's
</span><br>
<span class="quotelev1">&gt; &quot;valarray&quot; but it don't like it. What it really means is &quot;custom array
</span><br>
<span class="quotelev1">&gt; of float values&quot;. Maybe just &quot;values&quot;, or &quot;floats&quot;, or &quot;custom floats&quot;,
</span><br>
<span class="quotelev1">&gt; or ... ?
</span><br>
<p><p>Random question: why floats and not doubles?
<br>
<p>Another name suggestion: cached_floats (cached_doubles)
<br>
<p>If the goal is to be able to store some data that will also show up in the XML (and text/gui output?), why not make the mechanism more general?  E.g., the values array should be a union, with an enum indicating its type, and support a small number of intrinsic types: float (or double), string, int (and/or long?).
<br>
<p>Then you can call it &quot;cached_values&quot;, or some such.
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
<li><strong>Next message:</strong> <a href="3222.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3220.php">Brice Goglin: "[hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3220.php">Brice Goglin: "[hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3222.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3222.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
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
