<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 15:15:24 2010" -->
<!-- isoreceived="20100119201524" -->
<!-- sent="Tue, 19 Jan 2010 21:15:19 +0100" -->
<!-- isosent="20100119201519" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="4B5612D7.4030709_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="73C32673-0B3E-4C3C-8AB9-083569A469E1_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 15:15:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0620.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="0618.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0617.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0626.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0626.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0628.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0629.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 19, 2010, at 3:20 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I propose the following changes to the object attributes. struct
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_obj now contains a struct hwloc_memory pointer:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any reason not to make this a sub-struct included in hwloc_obj (vs. a pointer that requires an additional malloc)?  I'm not saying that malloc performance and/or the cost of dereferencing the pointer is a big deal -- it just feels &quot;un-tidy&quot; to have another malloc for something that will be used in many situations.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>IIRC, it was changed into a pointer before the first release to reduce
<br>
ABI changes inside the the main hwloc_obj struct when attributes are
<br>
changed. I don't think hwloc_obj and attributes will be stable before
<br>
hwloc 2.0 so I don't really care whether it's a pointer or not :)
<br>
<p><span class="quotelev2">&gt;&gt; struct hwloc_memory {
</span><br>
<span class="quotelev2">&gt;&gt;   unsigned long total_kB; /* Total memory in this object and its children */
</span><br>
<span class="quotelev2">&gt;&gt;   unsigned long local_kB; /* Local memory in this object */
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, I'm not wild about the capitol &quot;B&quot; at the end, but that's mainly because I'm lazy.  ;-)  How about total_mem and local_mem, and we specify that they are in units of bytes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I say &quot;bytes&quot; instead of &quot;kilobytes&quot; because it might be easier to avoid getting into the &quot;what does kilo mean -- 1000 or 1024?&quot; arguments.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>kilo mean 1000, otherwise it's called kibi :)
<br>
<p>But I am ok with changing all this into bytes or whatever.
<br>
<p><span class="quotelev1">&gt; Also, do we want to make them uint64_t's?  A system's total memory could get pretty large -- more than 4B bytes on 32 bit systems...?  Hmm.  I'm indecisive on this one -- I can think of reasons for and against...  I guess I just prefer future-proofing as much as possible.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I thought about that, but unsigned long was ok for 32bits system when
<br>
storing values as kilobytes. If switching to bytes, we should use uint64_t.
<br>
<p><span class="quotelev2">&gt;&gt;   struct hwloc_memory_pages {
</span><br>
<span class="quotelev2">&gt;&gt;     unsigned long size;
</span><br>
<span class="quotelev2">&gt;&gt;     unsigned long count;
</span><br>
<span class="quotelev2">&gt;&gt;   } * local_pages; /* 0-terminated array of pages or hugepages sizes and counts */
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the worst case, we've added 2*sizeof(long)+sizeof(struct*) to the size of the hwloc_obj struct for objects that don't have memory.  But I don't think that's a big deal, right?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>It's probably negligible against the size of cpusets since those are
<br>
statically allocated so far. By the way, (I may have some students
<br>
working on dynamic cpusets in the near future.
<br>
<p><span class="quotelev1">&gt; Or maybe just total and local memory set to 0?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Don't know. I thought having memory point to NULL when the object can
<br>
obviously contain no memory could help, but it's not a big deal.
<br>
<p><p><span class="quotelev1">&gt; I'm not sure I understand what you mean here -- are you thinking of moving the DMI fields to the general key=value arrays?  What is &quot;DMI&quot;?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes.
<br>
Try running dmidecode on a machine (as root) to see what DMI tells you,
<br>
and see <a href="http://en.wikipedia.org/wiki/Desktop_Management_Interface">http://en.wikipedia.org/wiki/Desktop_Management_Interface</a> for a
<br>
bit of doc. It's basically a way to recognize the exact machine model
<br>
and apply some hardware quirks. For instance hwloc could use that to
<br>
find out the hypertransport topology since the BIOS doesn't tell you how
<br>
opterons are connected (we did that in other software in the past).
<br>
<p><span class="quotelev2">&gt;&gt; Actually, maybe obj-&gt;name should go there as well before it mixes to
</span><br>
<span class="quotelev2">&gt;&gt; many meanings. It's mostly unused in trunk, except to store &quot;Kerrighed&quot;
</span><br>
<span class="quotelev2">&gt;&gt; since very recently. We talked about using it to store the hostname of
</span><br>
<span class="quotelev2">&gt;&gt; Machine objects. And the libpci branch uses it to store the PCI
</span><br>
<span class="quotelev2">&gt;&gt; vendor/model string and OS device names. Maybe all these shouldn't be in
</span><br>
<span class="quotelev2">&gt;&gt; obj-&gt;name and rather in the array of strings as OSName=Kerrighed,
</span><br>
<span class="quotelev2">&gt;&gt; Hostname=foobar, PCIVendor=foo, PCIModel=bar, OSDevice=eth2, ...
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about both?  It can be useful to have a simple/common field to print a human-readable text field (even if it's only a summary and the real details are in key=value pairs).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Sure.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0620.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="0618.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0617.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0626.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0626.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0628.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Reply:</strong> <a href="0629.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
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
