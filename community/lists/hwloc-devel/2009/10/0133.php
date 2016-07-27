<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 13:53:54 2009" -->
<!-- isoreceived="20091002175354" -->
<!-- sent="Fri, 2 Oct 2009 13:53:48 -0400" -->
<!-- isosent="20091002175348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="F6B7E385-8418-45E4-816C-74EF0C8CB8DC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091002173927.GA5414_at_const" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] release status<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-02 13:53:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0134.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0132.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0132.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0134.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0134.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 2, 2009, at 1:39 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; I also think inlining doesn't bring much performance compared to the
</span><br>
<span class="quotelev1">&gt; cost of parsing a cpuset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; You'll get warnings from the linker about how the struct changed  
</span><br>
<span class="quotelev1">&gt; size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, in the static case, yes.  But in our case cpusets would always be
</span><br>
<span class="quotelev1">&gt; dynamically allocated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>It's not the size of the array in the cpuset struct that matters --  
<br>
it's the size of the struct.
<br>
<p>Are there any global constants akin to MPI_COMM_WORLD? (e.g., an empty  
<br>
cpuset, or a full cpuset)  I *think* that we only run into problems if  
<br>
we use global constants provided by the library.  But it might be  
<br>
worth testing the example I sent before, even with dynamically  
<br>
allocated handles.  Linkers are deep, dark voodoo with unexpected  
<br>
corner cases in round rooms.  :-)
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
<li><strong>Next message:</strong> <a href="0134.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0132.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0132.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0134.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0134.php">Samuel Thibault: "Re: [hwloc-devel] release status"</a>
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
