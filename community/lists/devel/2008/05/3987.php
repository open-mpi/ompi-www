<?
$subject_val = "Re: [OMPI devel] openib btl build question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 10:48:52 2008" -->
<!-- isoreceived="20080522144852" -->
<!-- sent="Thu, 22 May 2008 10:48:43 -0400 (EDT)" -->
<!-- isosent="20080522144843" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl build question" -->
<!-- id="Pine.LNX.4.64.0805221047350.3104_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="483572F0.2030907_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl build question<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 10:48:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3988.php">Jon Mason: "[OMPI devel] Documentation update"</a>
<li><strong>Previous message:</strong> <a href="3986.php">Don Kerr: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>In reply to:</strong> <a href="3986.php">Don Kerr: "Re: [OMPI devel] openib btl build question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah.  On Linux, --without-threads really doesn't gain you that much.  The 
<br>
default glibc is still thread safe, and there are only a couple small 
<br>
parts of the code that use locks (like the OOB TCP).  It's generally just 
<br>
easier to leave threads enabled on Linux.
<br>
<p>Brian
<br>
<p>On Thu, 22 May 2008, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Jeff. Thanks Brian.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran into this because I was specifically trying to configure with
</span><br>
<span class="quotelev1">&gt; &quot;--disable-progress-threads --disable-mpi-threads&quot; at which point I
</span><br>
<span class="quotelev1">&gt; figured, might as well turn off all threads so I added
</span><br>
<span class="quotelev1">&gt; &quot;--without-threads&quot; as well. But can't live without mpi_leave_pinned so
</span><br>
<span class="quotelev1">&gt; threads are back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 21, 2008, at 4:37 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ptmalloc2 is not *required* by the openib btl.  But it is required on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Linux if you want to use the mpi_leave_pinned functionality.  I see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one function call to __pthread_initialize in the ptmalloc2 code -- it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *looks* like it's a function of glibc, but I don't know for sure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There's actually more than that, it's just buried a bit.  There's a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whole
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bunch of thread-specific data stuff, which is wrapped so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thread packages can be used (although OMPI only supports pthreads).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrappers are in ptmalloc2/sysdeps/pthreads.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doh!  I didn't &quot;grep -r&quot;; my bad...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3988.php">Jon Mason: "[OMPI devel] Documentation update"</a>
<li><strong>Previous message:</strong> <a href="3986.php">Don Kerr: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>In reply to:</strong> <a href="3986.php">Don Kerr: "Re: [OMPI devel] openib btl build question"</a>
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
