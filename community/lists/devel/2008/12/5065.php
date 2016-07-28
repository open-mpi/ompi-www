<?
$subject_val = "Re: [OMPI devel] shared-memory allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 13 17:46:08 2008" -->
<!-- isoreceived="20081213224608" -->
<!-- sent="Sat, 13 Dec 2008 14:46:01 -0800" -->
<!-- isosent="20081213224601" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shared-memory allocations" -->
<!-- id="49443B29.4080802_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49442AAE.9060607_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] shared-memory allocations<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-13 17:46:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5066.php">Ralph Castain: "[OMPI devel] All_Reduce scaling?"</a>
<li><strong>Previous message:</strong> <a href="5064.php">Patrick Geoffray: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>In reply to:</strong> <a href="5064.php">Patrick Geoffray: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5078.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To expand slightly on Patrick's last comment:
<br>
<p><span class="quotelev1"> &gt;  Cache prefetching is slightly
</span><br>
<span class="quotelev1"> &gt; more efficient on local socket, so closer to reader may be a bit better.
</span><br>
<p>Ideally one polls from cache, but in the event that the line is evicted the 
<br>
next poll after the eviction will pay a lower cost if the memory is near to 
<br>
the reader.
<br>
<p>-Paul
<br>
<p><p>Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes - it is polling volatile memory, so has to load from memory on 
</span><br>
<span class="quotelev2">&gt;&gt; every read.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, it will poll in cache, and only load from memory when the 
</span><br>
<span class="quotelev1">&gt; cache coherency protocol invalidates the cache line. Volatile semantic 
</span><br>
<span class="quotelev1">&gt; only prevents compiler optimizations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does not matter much where the pages are (closer to reader or 
</span><br>
<span class="quotelev1">&gt; receiver) on NUMAs, as long as they are equally distributed among all 
</span><br>
<span class="quotelev1">&gt; sockets (ie the choice is consistent). Cache prefetching is slightly 
</span><br>
<span class="quotelev1">&gt; more efficient on local socket, so closer to reader may be a bit better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5066.php">Ralph Castain: "[OMPI devel] All_Reduce scaling?"</a>
<li><strong>Previous message:</strong> <a href="5064.php">Patrick Geoffray: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>In reply to:</strong> <a href="5064.php">Patrick Geoffray: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5078.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
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
