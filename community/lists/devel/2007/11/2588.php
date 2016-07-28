<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 09:43:20 2007" -->
<!-- isoreceived="20071108144320" -->
<!-- sent="Thu, 08 Nov 2007 09:43:15 -0500" -->
<!-- isosent="20071108144315" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="C3588AB3.1068B%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071108090307.GC4397_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] collective problems<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 09:43:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2589.php">Tim Mattox: "Re: [OMPI devel] Release wiki pages"</a>
<li><strong>Previous message:</strong> <a href="2587.php">Jeff Squyres: "[OMPI devel] Release wiki pages"</a>
<li><strong>In reply to:</strong> <a href="2581.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2596.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/8/07 4:03 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Nov 07, 2007 at 11:25:43PM -0500, Patrick Geoffray wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The real problem, as you and others have pointed out is the lack of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; predictable time slices for the progress engine to do its work, when relying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the ULP to make calls into the library...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The real, real problem is that the BTL should handle progression at
</span><br>
<span class="quotelev2">&gt;&gt; their level, specially when the buffering is due to BTL-level flow
</span><br>
<span class="quotelev2">&gt;&gt; control. When I write something into a socket, TCP will take care of
</span><br>
<span class="quotelev2">&gt;&gt; sending it eventually, for example.
</span><br>
<span class="quotelev1">&gt; In the case of TCP, kernel is kind enough to progress message for you,
</span><br>
<span class="quotelev1">&gt; but only if there was enough space in a kernel internal buffers. If there
</span><br>
<span class="quotelev1">&gt; was no place there, TCP BTL will also buffer messages in userspace and
</span><br>
<span class="quotelev1">&gt; will, eventually, have the same problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To progress such outstanding messages additional thread is needed in
</span><br>
<span class="quotelev1">&gt; userspace. Is this what MX does?
</span><br>
<p>Yes - this is the bottom line, with the current problem the high cost of
<br>
scheduling such threads at some sort of reasonable frequency.
<br>
<p>Rich
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2589.php">Tim Mattox: "Re: [OMPI devel] Release wiki pages"</a>
<li><strong>Previous message:</strong> <a href="2587.php">Jeff Squyres: "[OMPI devel] Release wiki pages"</a>
<li><strong>In reply to:</strong> <a href="2581.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2596.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
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
