<?
$subject_val = "Re: [OMPI devel] [OMPI users] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 24 08:46:59 2012" -->
<!-- isoreceived="20121224134659" -->
<!-- sent="Mon, 24 Dec 2012 08:46:54 -0500" -->
<!-- isosent="20121224134654" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="E5E5D7B5-37B6-4174-8580-FA7C4A588227_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201212211932.qBLJWTbo009837_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] [Open MPI] #3351: JAVA scatter error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-24 08:46:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11884.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Previous message:</strong> <a href="11882.php">RC: "Re: [OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 21, 2012, at 2:32 PM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; Today I found something about the memory layout of 2D matrices in
</span><br>
<span class="quotelev1">&gt; Java (I'm not sure if the information is valid). Java has one 1D array
</span><br>
<span class="quotelev1">&gt; with pointers to every 1D row. All elements of a row are stored in
</span><br>
<span class="quotelev1">&gt; contiguous memory. Different rows can be stored in &quot;arbitrary&quot; places
</span><br>
<span class="quotelev1">&gt; so that a 2D matrix is normally not stored in a contiguous memory area.
</span><br>
<p>This makes it sound just like C -- in that if you want a contiguous chunk of memory for an N dimensional array, you need to write a wrapper method that allocates a contiguous chunk of memory and then sets all the pointers properly so that successive rows/columns/etc. point to the Right places in memory.
<br>
<p>This wrapper will likely need to be written in C.
<br>
<p><span class="quotelev1">&gt; In fact it would be better in that case if the extent of a new column
</span><br>
<span class="quotelev1">&gt; type is equal to the extent of the base type of the array.
</span><br>
<p>Yes, via a &quot;resized&quot; type.  The basic MPI bindings should do pretty much exactly what the MPI C bindings should do.
<br>
<p><span class="quotelev1">&gt; It would also
</span><br>
<span class="quotelev1">&gt; be necessary that a new column type is something like an array itself
</span><br>
<span class="quotelev1">&gt; pointing for example to the first element of each row (perhaps it is
</span><br>
<span class="quotelev1">&gt; even possible to use the Java pointer array of the 2D matrix). To make
</span><br>
<span class="quotelev1">&gt; things worse, Java allows non-rectangular matrices (but they could be
</span><br>
<span class="quotelev1">&gt; prohibited for MPI). Perhaps this is no news to you, but I wanted to
</span><br>
<span class="quotelev1">&gt; mention it in case you also didn't know (as I said I'm not sure if the
</span><br>
<span class="quotelev1">&gt; information about 2D Java matrices is true).
</span><br>
<p>Nope, I don't know very much about Java at all.  :-)
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
<li><strong>Next message:</strong> <a href="11884.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Previous message:</strong> <a href="11882.php">RC: "Re: [OMPI devel] Error compiling"</a>
<!-- nextthread="start" -->
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
