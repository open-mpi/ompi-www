<?
$subject_val = "Re: [hwloc-devel] merging the valarray branch (with a better name)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 24 18:53:01 2012" -->
<!-- isoreceived="20120824225301" -->
<!-- sent="Sat, 25 Aug 2012 00:52:54 +0200" -->
<!-- isosent="20120824225254" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging the valarray branch (with a better name)" -->
<!-- id="503805C6.6060103_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5DF1577C-3F4B-4214-821D-32C69D8576DB_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-24 18:52:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3231.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3229.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3229.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3231.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3231.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3232.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/08/2012 23:44, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Aug 24, 2012, at 5:17 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_obj_t already has a &quot;void *userdata&quot; for this. But we cannot store
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it in XML unless we know what it contains.
</span><br>
<span class="quotelev2">&gt;&gt; Contiguous binary structures with a known size can be stored in a XML file. Instead of forcing the upper level to store their meaningful information as arrays of one of a few predefined types, let them deal with the content of the binary object, and focus on preserving the binary objects in the XML structure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exporting to XML is strictly required here since people want to add
</span><br>
<span class="quotelev3">&gt;&gt;&gt; values to the XML topology in a preliminary benchmarking programs, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; later read it back in their actual application (a charm++ scheduler).
</span><br>
<span class="quotelev2">&gt;&gt; XDR exists for ensuring consistency. Let them store what they want not just arrays.
</span><br>
<span class="quotelev1">&gt; These are good points.  Perhaps userdata is enough, and if they want the userdata to be in the XML, they can provide a callback to return an XML blob (which may be a set of new attributes, or perhaps just one big binary blob).  If they don't provide a callback, then the user data is not included in the blob.
</span><br>
<p>This could be:
<br>
* hwloc_set_topology_userdata_blob_callbacks(topology, exportcb, importcb)
<br>
* On XML export, hwloc calls export(obj, &amp;buffer, &amp;len), the application
<br>
callback allocates a contigous buffer if needed, put stuff in there,
<br>
returns it, and we store buffer/len in XML, and we free the buffer if
<br>
needed (force the application to always allocate? or add a callback flag
<br>
to know whether we have to free or not?)
<br>
* On XML import, we read the XML stuff and call import(obj, buffer,
<br>
len). The application would usually read the blob and store it back in
<br>
the object. We'll have to document that the topology isn't ready for
<br>
consulting there yet (or queue callbacks to the end of the XML parsing).
<br>
<p>We'd likely use something like base64 to encode these blobs so that the
<br>
minimalistic parser doesn't get lost (it doesn't like unusual characters).
<br>
<p>Another thing I am not sure about is whether a single userdata pointer
<br>
is enough. Maybe allow multiple (name,data) key pairs exactly like we do
<br>
for string infos? If so, there's no need for topology-wide
<br>
hwloc_set_topology_userdata_blob_callback(), the application gives the
<br>
right callbacks when it adds the (key,data) pair.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3231.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Previous message:</strong> <a href="3229.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>In reply to:</strong> <a href="3229.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3231.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3231.php">Brice Goglin: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
<li><strong>Reply:</strong> <a href="3232.php">Jeff Squyres: "Re: [hwloc-devel] merging the valarray branch (with a better name)"</a>
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
