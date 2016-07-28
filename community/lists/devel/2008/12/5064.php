<?
$subject_val = "Re: [OMPI devel] shared-memory allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 13 16:35:52 2008" -->
<!-- isoreceived="20081213213552" -->
<!-- sent="Sat, 13 Dec 2008 16:35:42 -0500" -->
<!-- isosent="20081213213542" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shared-memory allocations" -->
<!-- id="49442AAE.9060607_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5697BD1.2C582%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-13 16:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5065.php">Paul H. Hargrove: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="5060.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5065.php">Paul H. Hargrove: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5065.php">Paul H. Hargrove: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Richard Graham wrote:
<br>
<span class="quotelev1">&gt; Yes - it is polling volatile memory, so has to load from memory on every 
</span><br>
<span class="quotelev1">&gt; read.
</span><br>
<p>Actually, it will poll in cache, and only load from memory when the 
<br>
cache coherency protocol invalidates the cache line. Volatile semantic 
<br>
only prevents compiler optimizations.
<br>
<p>It does not matter much where the pages are (closer to reader or 
<br>
receiver) on NUMAs, as long as they are equally distributed among all 
<br>
sockets (ie the choice is consistent). Cache prefetching is slightly 
<br>
more efficient on local socket, so closer to reader may be a bit better.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5065.php">Paul H. Hargrove: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5063.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="5060.php">Richard Graham: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5065.php">Paul H. Hargrove: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5065.php">Paul H. Hargrove: "Re: [OMPI devel] shared-memory allocations"</a>
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
