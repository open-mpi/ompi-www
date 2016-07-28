<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 16 16:45:49 2012" -->
<!-- isoreceived="20120716204549" -->
<!-- sent="Mon, 16 Jul 2012 20:45:17 +0000" -->
<!-- isosent="20120716204517" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD239286AA_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50047078.4080008_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-16 16:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11297.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Previous message:</strong> <a href="11295.php">Eugene Loh: "[OMPI devel] non-blocking collectives, SPARC, and alignment"</a>
<li><strong>In reply to:</strong> <a href="11295.php">Eugene Loh: "[OMPI devel] non-blocking collectives, SPARC, and alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11297.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Reply:</strong> <a href="11297.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Reply:</strong> <a href="11302.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene -
<br>
<p>It's unlikely that I will have time to fix this in the short term.  The
<br>
scheduling code is fairly localized in nbc.c if Oracle has some time to
<br>
spend looking at these issues.  If not, it might be best to remove the
<br>
libnbc code from 1.7, as it's unfortunately clear that it's not as ready
<br>
for integration as we believed and I don't have time to fix the code base.
<br>
<p>Brian
<br>
<p>On 7/16/12 2:50 PM, &quot;Eugene Loh&quot; &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;The NBC functionality doesn't fare very well on SPARC.  One of the
</span><br>
<span class="quotelev1">&gt;problems is with data alignment.  An NBC schedule is a number of
</span><br>
<span class="quotelev1">&gt;variously sized fields laid out contiguously in linear memory  (e.g.,
</span><br>
<span class="quotelev1">&gt;see nbc_internal.h or nbc.c) and words don't have much natural
</span><br>
<span class="quotelev1">&gt;alignment.  On SPARC, the &quot;default&quot; (for some definition of that word)
</span><br>
<span class="quotelev1">&gt;is to sigbus when a word is not properly aligned.  In any case (even
</span><br>
<span class="quotelev1">&gt;non-SPARC), one might argue misalignment and subsequent exception
</span><br>
<span class="quotelev1">&gt;handling is nice to avoid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here are two specific issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;*)  Schedule layout uses single-char delimiters between &quot;round
</span><br>
<span class="quotelev1">&gt;schedules&quot;.  So, even if the first &quot;round schedule&quot; has nice alignment,
</span><br>
<span class="quotelev1">&gt;the second will have single-byte offsets for its components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;*)  8-byte pointers can fall on 4-byte boundaries.  E.g., say a schedule
</span><br>
<span class="quotelev1">&gt;starts on some &quot;nice&quot; alignment.  The first words of the schedule will be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int            total size of the schedule
</span><br>
<span class="quotelev1">&gt;     int            number of elements in the first round schedule
</span><br>
<span class="quotelev1">&gt;     enum           type of function
</span><br>
<span class="quotelev1">&gt;     void *         pointer to some buffer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So, with -m64, that 8-byte pointer is on a 12-byte boundary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any input/comments on how to proceed?
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11297.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Previous message:</strong> <a href="11295.php">Eugene Loh: "[OMPI devel] non-blocking collectives, SPARC, and alignment"</a>
<li><strong>In reply to:</strong> <a href="11295.php">Eugene Loh: "[OMPI devel] non-blocking collectives, SPARC, and alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11297.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Reply:</strong> <a href="11297.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>Reply:</strong> <a href="11302.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
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
