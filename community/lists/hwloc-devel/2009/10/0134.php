<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 16:16:48 2009" -->
<!-- isoreceived="20091002201648" -->
<!-- sent="Fri, 2 Oct 2009 22:16:39 +0200" -->
<!-- isosent="20091002201639" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="20091002201639.GB9354_at_const" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F6B7E385-8418-45E4-816C-74EF0C8CB8DC_at_cisco.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-02 16:16:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0133.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0133.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Fri 02 Oct 2009 13:53:48 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; On Oct 2, 2009, at 1:39 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I also think inlining doesn't bring much performance compared to the
</span><br>
<span class="quotelev2">&gt; &gt;cost of parsing a cpuset.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You'll get warnings from the linker about how the struct changed  
</span><br>
<span class="quotelev2">&gt; &gt;size.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Ah, in the static case, yes.  But in our case cpusets would always be
</span><br>
<span class="quotelev2">&gt; &gt;dynamically allocated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not the size of the array in the cpuset struct that matters --  
</span><br>
<span class="quotelev1">&gt; it's the size of the struct.
</span><br>
<p>Sure, I understood this.
<br>
<p><span class="quotelev1">&gt; Are there any global constants akin to MPI_COMM_WORLD? (e.g., an empty  
</span><br>
<span class="quotelev1">&gt; cpuset, or a full cpuset)
</span><br>
<p>No, that's why I'm saying in our case we don't have the problem.
<br>
<p><span class="quotelev1">&gt; I *think* that we only run into problems if we use global constants
</span><br>
<span class="quotelev1">&gt; provided by the library.
</span><br>
<p>Yes, and we don't.
<br>
<p><span class="quotelev1">&gt; But it might be worth testing the example I sent before, even with
</span><br>
<span class="quotelev1">&gt; dynamically allocated handles.
</span><br>
<p>Should work perfectly.
<br>
<p><span class="quotelev1">&gt; Linkers are deep, dark voodoo with unexpected corner cases in round
</span><br>
<span class="quotelev1">&gt; rooms. :-)
</span><br>
<p>Sure, but linkers don't have anything to do with malloc().
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0133.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>In reply to:</strong> <a href="0133.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0135.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
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
