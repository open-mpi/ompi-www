<?
$subject_val = "Re: [hwloc-devel] merging the valarray branch (with a better name)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 17:44:43 2012" -->
<!-- isoreceived="20120824214443" -->
<!-- sent="Fri, 24 Aug 2012 17:44:38 -0400" -->
<!-- isosent="20120824214438" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging the valarray branch (with a better name)" -->
<!-- id="5DF1577C-3F4B-4214-821D-32C69D8576DB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8D0E513C-E884-4378-83F0-0392E00DC752_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2012-08-24 17:44:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3228.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3227.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2012, at 5:17 PM, George Bosilca wrote:
<br>
<p><span class="quotelev2">&gt;&gt; hwloc_obj_t already has a &quot;void *userdata&quot; for this. But we cannot store
</span><br>
<span class="quotelev2">&gt;&gt; it in XML unless we know what it contains.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Contiguous binary structures with a known size can be stored in a XML file. Instead of forcing the upper level to store their meaningful information as arrays of one of a few predefined types, let them deal with the content of the binary object, and focus on preserving the binary objects in the XML structure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Exporting to XML is strictly required here since people want to add
</span><br>
<span class="quotelev2">&gt;&gt; values to the XML topology in a preliminary benchmarking programs, and
</span><br>
<span class="quotelev2">&gt;&gt; later read it back in their actual application (a charm++ scheduler).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; XDR exists for ensuring consistency. Let them store what they want not just arrays.
</span><br>
<p>These are good points.  Perhaps userdata is enough, and if they want the userdata to be in the XML, they can provide a callback to return an XML blob (which may be a set of new attributes, or perhaps just one big binary blob).  If they don't provide a callback, then the user data is not included in the blob.
<br>
<p>(perhaps 2 callbacks are needed: one for writing XML, one for reading XML)
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
<li><strong>Next message:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3228.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3227.php">George Bosilca: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
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
