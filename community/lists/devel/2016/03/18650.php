<?
$subject_val = "Re: [OMPI devel] component progress function optional?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 21:38:22 2016" -->
<!-- isoreceived="20160302023822" -->
<!-- sent="Tue, 1 Mar 2016 21:38:21 -0500" -->
<!-- isosent="20160302023821" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] component progress function optional?" -->
<!-- id="CAMJJpkU4SBkm6YYymY81bwo0tXJKJadcR_PTkn68n6BO+zfpWg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDiPQ=-NbJBPsBGLCgENJN0dKQ=g1KQTy=LhqkoCJG3baw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] component progress function optional?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 21:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18651.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18649.php">Gilles Gouaillardet: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18648.php">dpchoudh .: "[OMPI devel] component progress function optional?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Durga,
<br>
<p>You need a progress function if your BTL require explicit progress to drain
<br>
the network events. As you noticed, the TCP BTL lacks a progress function
<br>
because it has it's fd registered in the main eventbase and does not
<br>
require a specific progress call to send/recv data. Moreover, if your BTL
<br>
has the possibility to make asynchronous progress you will also not need a
<br>
progress function.
<br>
<p>If your BTL provides such a progress function, it will be called once per
<br>
opal_progress call. Otherwise, your BTL is responsible for its own progress.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, Mar 1, 2016 at 6:27 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (As you might know), I am working on implementing a new BTL for a
</span><br>
<span class="quotelev1">&gt; proprietary fabric, and, taking the path of least effort, copying and
</span><br>
<span class="quotelev1">&gt; pasting code from various pre-implemented BTL as is appropriate for our
</span><br>
<span class="quotelev1">&gt; hardware. My question is: are there any guidance on which of the functions
</span><br>
<span class="quotelev1">&gt; must be implemented and which are optional (i.e. depends on the underlying
</span><br>
<span class="quotelev1">&gt; hardware)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a specific example, I see that mca_btl_tcp_component_progress() is
</span><br>
<span class="quotelev1">&gt; never implemented although similar functions in other BTLs are.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18648.php">http://www.open-mpi.org/community/lists/devel/2016/03/18648.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18650/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18651.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18649.php">Gilles Gouaillardet: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18648.php">dpchoudh .: "[OMPI devel] component progress function optional?"</a>
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
