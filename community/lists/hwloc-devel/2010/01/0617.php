<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 14:45:38 2010" -->
<!-- isoreceived="20100119194538" -->
<!-- sent="Tue, 19 Jan 2010 07:24:05 -0500" -->
<!-- isosent="20100119122405" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="73C32673-0B3E-4C3C-8AB9-083569A469E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B556B62.4040106_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] memory size attributes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 07:24:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0618.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0616.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0615.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0619.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0619.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 19, 2010, at 3:20 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I propose the following changes to the object attributes. struct
</span><br>
<span class="quotelev1">&gt; hwloc_obj now contains a struct hwloc_memory pointer:
</span><br>
<p>Is there any reason not to make this a sub-struct included in hwloc_obj (vs. a pointer that requires an additional malloc)?  I'm not saying that malloc performance and/or the cost of dereferencing the pointer is a big deal -- it just feels &quot;un-tidy&quot; to have another malloc for something that will be used in many situations.
<br>
<p><span class="quotelev1">&gt; struct hwloc_memory {
</span><br>
<span class="quotelev1">&gt;   unsigned long total_kB; /* Total memory in this object and its children */
</span><br>
<span class="quotelev1">&gt;   unsigned long local_kB; /* Local memory in this object */
</span><br>
<p>FWIW, I'm not wild about the capitol &quot;B&quot; at the end, but that's mainly because I'm lazy.  ;-)  How about total_mem and local_mem, and we specify that they are in units of bytes?
<br>
<p>I say &quot;bytes&quot; instead of &quot;kilobytes&quot; because it might be easier to avoid getting into the &quot;what does kilo mean -- 1000 or 1024?&quot; arguments.  
<br>
<p>Also, do we want to make them uint64_t's?  A system's total memory could get pretty large -- more than 4B bytes on 32 bit systems...?  Hmm.  I'm indecisive on this one -- I can think of reasons for and against...  I guess I just prefer future-proofing as much as possible.
<br>
<p><span class="quotelev1">&gt;   struct hwloc_memory_pages {
</span><br>
<span class="quotelev1">&gt;     unsigned long size;
</span><br>
<span class="quotelev1">&gt;     unsigned long count;
</span><br>
<span class="quotelev1">&gt;   } * local_pages; /* 0-terminated array of pages or hugepages sizes and counts */
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>In the worst case, we've added 2*sizeof(long)+sizeof(struct*) to the size of the hwloc_obj struct for objects that don't have memory.  But I don't think that's a big deal, right?
<br>
<p><span class="quotelev1">&gt; This obj-&gt;memory could be NULL except for Node, Machine and maybe
</span><br>
<span class="quotelev1">&gt; System.
</span><br>
<p>Or maybe just total and local memory set to 0?
<br>
<p><span class="quotelev2">&gt; &gt; I'd say it can be valuable to support key=value pairs on any object so
</span><br>
<span class="quotelev2">&gt; &gt; that future object types can be extensible (e.g., vendor pci devices).
</span><br>
<span class="quotelev2">&gt; &gt; But common stuff should be accessible as struct members so that
</span><br>
<span class="quotelev2">&gt; &gt; there's no string parsing needed (I'm no doubt just voicing what we
</span><br>
<span class="quotelev2">&gt; &gt; all already think). I.e., esoteric stuff can start as a key=value
</span><br>
<span class="quotelev2">&gt; &gt; strings but as they get mature / popular, they can &quot;graduate&quot; to
</span><br>
<span class="quotelev2">&gt; &gt; become a struct member.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we do the above, Node and System won't have any specific attribute
</span><br>
<span class="quotelev1">&gt; anymore. Machine will still have DMI infos. But I am not sure they are
</span><br>
<span class="quotelev1">&gt; common enough and deserve an actual struct field, they could stay in the
</span><br>
<span class="quotelev1">&gt; array of stringified info.
</span><br>
<p>I'm not sure I understand what you mean here -- are you thinking of moving the DMI fields to the general key=value arrays?  What is &quot;DMI&quot;?
<br>
<p><span class="quotelev1">&gt; Actually, maybe obj-&gt;name should go there as well before it mixes to
</span><br>
<span class="quotelev1">&gt; many meanings. It's mostly unused in trunk, except to store &quot;Kerrighed&quot;
</span><br>
<span class="quotelev1">&gt; since very recently. We talked about using it to store the hostname of
</span><br>
<span class="quotelev1">&gt; Machine objects. And the libpci branch uses it to store the PCI
</span><br>
<span class="quotelev1">&gt; vendor/model string and OS device names. Maybe all these shouldn't be in
</span><br>
<span class="quotelev1">&gt; obj-&gt;name and rather in the array of strings as OSName=Kerrighed,
</span><br>
<span class="quotelev1">&gt; Hostname=foobar, PCIVendor=foo, PCIModel=bar, OSDevice=eth2, ...
</span><br>
<p>How about both?  It can be useful to have a simple/common field to print a human-readable text field (even if it's only a summary and the real details are in key=value pairs).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0618.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0616.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0615.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0619.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0619.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
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
