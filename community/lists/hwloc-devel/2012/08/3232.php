<?
$subject_val = "Re: [hwloc-devel] merging the valarray branch (with a better name)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 25 07:05:33 2012" -->
<!-- isoreceived="20120825110533" -->
<!-- sent="Sat, 25 Aug 2012 07:05:28 -0400" -->
<!-- isosent="20120825110528" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging the valarray branch (with a better name)" -->
<!-- id="2AE9724E-CDBC-452C-A36E-B2A09B23F436_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="503805C6.6060103_at_inria.fr" -->
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
<strong>Date:</strong> 2012-08-25 07:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3233.php">Brice Goglin: "[hwloc-devel] userdata import/export"</a>
<li><strong>Previous message:</strong> <a href="3231.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3233.php">Brice Goglin: "[hwloc-devel] userdata import/export"</a>
<li><strong>Reply:</strong> <a href="3233.php">Brice Goglin: "[hwloc-devel] userdata import/export"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2012, at 6:52 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; * hwloc_set_topology_userdata_blob_callbacks(topology, exportcb, importcb)
</span><br>
<span class="quotelev1">&gt; * On XML export, hwloc calls export(obj, &amp;buffer, &amp;len), the application
</span><br>
<span class="quotelev1">&gt; callback allocates a contigous buffer if needed, put stuff in there,
</span><br>
<span class="quotelev1">&gt; returns it, and we store buffer/len in XML, and we free the buffer if
</span><br>
<span class="quotelev1">&gt; needed (force the application to always allocate? or add a callback flag
</span><br>
<span class="quotelev1">&gt; to know whether we have to free or not?)
</span><br>
<p>That sounds generally reasonable to me.  I think it would be fine to have the exportcb do the allocation and return it.  I assume you're asking about allocating vs., say, having something like &quot;static char my_xml_export[1024]&quot;, or something like that, right?
<br>
<p>If so, I say: keep it simply.  Just always allocate/free.
<br>
<p><span class="quotelev1">&gt; * On XML import, we read the XML stuff and call import(obj, buffer,
</span><br>
<span class="quotelev1">&gt; len). The application would usually read the blob and store it back in
</span><br>
<span class="quotelev1">&gt; the object. We'll have to document that the topology isn't ready for
</span><br>
<span class="quotelev1">&gt; consulting there yet (or queue callbacks to the end of the XML parsing).
</span><br>
<p>Sounds right.
<br>
<p><span class="quotelev1">&gt; We'd likely use something like base64 to encode these blobs so that the
</span><br>
<span class="quotelev1">&gt; minimalistic parser doesn't get lost (it doesn't like unusual characters).
</span><br>
<p>I think we should leave it up to the callback to decide -- they could hand us back plain ASCII XML, after all (it doesn't have to be a binary blob).  I think we just document the range of characters that we allow to come back in the buffer during the export/allow during the import.
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
<li><strong>Next message:</strong> <a href="3233.php">Brice Goglin: "[hwloc-devel] userdata import/export"</a>
<li><strong>Previous message:</strong> <a href="3231.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3230.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3233.php">Brice Goglin: "[hwloc-devel] userdata import/export"</a>
<li><strong>Reply:</strong> <a href="3233.php">Brice Goglin: "[hwloc-devel] userdata import/export"</a>
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
