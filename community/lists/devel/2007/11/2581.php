<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 04:03:15 2007" -->
<!-- isoreceived="20071108090315" -->
<!-- sent="Thu, 8 Nov 2007 11:03:07 +0200" -->
<!-- isosent="20071108090307" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="20071108090307.GC4397_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47328FC7.5020307_at_myri.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 04:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2582.php">Torje Henriksen: "[OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Previous message:</strong> <a href="2580.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2576.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2588.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2588.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2596.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 07, 2007 at 11:25:43PM -0500, Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The real problem, as you and others have pointed out is the lack of
</span><br>
<span class="quotelev2">&gt; &gt; predictable time slices for the progress engine to do its work, when relying
</span><br>
<span class="quotelev2">&gt; &gt; on the ULP to make calls into the library...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The real, real problem is that the BTL should handle progression at 
</span><br>
<span class="quotelev1">&gt; their level, specially when the buffering is due to BTL-level flow 
</span><br>
<span class="quotelev1">&gt; control. When I write something into a socket, TCP will take care of 
</span><br>
<span class="quotelev1">&gt; sending it eventually, for example.
</span><br>
In the case of TCP, kernel is kind enough to progress message for you,
<br>
but only if there was enough space in a kernel internal buffers. If there
<br>
was no place there, TCP BTL will also buffer messages in userspace and
<br>
will, eventually, have the same problem.
<br>
<p>To progress such outstanding messages additional thread is needed in
<br>
userspace. Is this what MX does?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2582.php">Torje Henriksen: "[OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Previous message:</strong> <a href="2580.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2576.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2588.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2588.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>Reply:</strong> <a href="2596.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
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
