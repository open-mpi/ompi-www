<?
$subject_val = "Re: [hwloc-devel] release status";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 08:21:53 2009" -->
<!-- isoreceived="20091003122153" -->
<!-- sent="Sat, 3 Oct 2009 14:21:46 +0200" -->
<!-- isosent="20091003122146" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] release status" -->
<!-- id="97DC73BC-CB14-496B-9814-5FDBDA67F377_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E93D7E18-5295-45E8-9556-5DC99734EC05_at_cisco.com" -->
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
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-03 08:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0141.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0139.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1099)"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0141.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0141.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; , I think it might be worthwhile to keep
</span><br>
<span class="quotelev2">&gt;&gt; something size+pointer so that if the size is small say less than
</span><br>
<span class="quotelev2">&gt;&gt; size_t the cpuset is stored where otherwise there is the pointer...  
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; something like that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Indeed I would keep a minimal struct...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Especially with a large number of OS processor IDs, won't the size  
</span><br>
<span class="quotelev1">&gt; of the array dwarf that of the struct?  I think we're quibbling over  
</span><br>
<span class="quotelev1">&gt; just a few bytes here in an area where performance and space really  
</span><br>
<span class="quotelev1">&gt; aren't all that important...
</span><br>
<p>Ok you are right that storing in the struct might be overkill, and  
<br>
about performance I fully agree, space not so much, especially if you  
<br>
really want to cache all the cpuset for all objects, this still grows  
<br>
quadratically, and allocates a lot of objects. That was the reason I  
<br>
was advocating having a function returning the cpuset from an object  
<br>
(sparse cpuset would also be a solution).
<br>
<p>Anyway the real issue here is the API I think.
<br>
I would say that the best solution is
<br>
- keep cpuset a structure (not just void*), so it can be just a void*  
<br>
or something more complex in the future without API changes
<br>
- add functions to allocate/deallocate/copy it, and make it clear that  
<br>
these should be called on the cpusets returned by other functions  
<br>
(i.e. clarify ownership transfers).
<br>
- functions that are possibly inlined are ok (obviously changing them  
<br>
breaks the binary compatibility), but recompilation fixes them, and  
<br>
other languages can still use the non inline function that is part of  
<br>
the lib
<br>
- macros I don't like, they make binding to other languages more  
<br>
difficult, as one has to write either a thin glue layer, or duplicate  
<br>
the macro, which will not stay in sync with lib changes automatically  
<br>
(cpuset has some macros, but the structure is so simply that I just  
<br>
used another bit compatible type when binding to D).
<br>
<p>To make the release quickly I think that just adding the requested  
<br>
functions (alloc/dealloc would be noops at the moment) would be good.
<br>
Then in the future one can switch to dynamic or sparse cpuset without  
<br>
user visible changes (apart recompilation).
<br>
<p>Fawzi
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0140/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0141.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Previous message:</strong> <a href="0139.php">MPI Team: "[hwloc-devel] Create success (hwloc r0.9.1a1r1099)"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0141.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
<li><strong>Reply:</strong> <a href="0141.php">Jeff Squyres: "Re: [hwloc-devel] release status"</a>
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
