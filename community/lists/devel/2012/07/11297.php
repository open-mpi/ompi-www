<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 16 17:28:38 2012" -->
<!-- isoreceived="20120716212838" -->
<!-- sent="Mon, 16 Jul 2012 14:28:38 -0700" -->
<!-- isosent="20120716212838" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment" -->
<!-- id="50048786.1010009_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD239286AA_at_EXMB01.srn.sandia.gov" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-16 17:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11298.php">Ralph Castain: "Re: [OMPI devel] elan?"</a>
<li><strong>Previous message:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>In reply to:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11302.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/16/2012 1:45 PM, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; It's unlikely that I will have time to fix this in the short term.  The
</span><br>
<span class="quotelev1">&gt; scheduling code is fairly localized in nbc.c if Oracle has some time to
</span><br>
<span class="quotelev1">&gt; spend looking at these issues.  If not, it might be best to remove the
</span><br>
<span class="quotelev1">&gt; libnbc code from 1.7, as it's unfortunately clear that it's not as ready
</span><br>
<span class="quotelev1">&gt; for integration as we believed
</span><br>
Or both!  That is, I agree the code looks manageable and I'm inclined to 
<br>
take a whack at it.  Nevertheless, the NBC stuff in v1.7 is in a painful 
<br>
state.  Without CMRs, it does perhaps more harm than good.
<br>
<span class="quotelev1">&gt;   and I don't have time to fix the code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/16/12 2:50 PM, &quot;Eugene Loh&quot;&lt;eugene.loh_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The NBC functionality doesn't fare very well on SPARC.  One of the
</span><br>
<span class="quotelev2">&gt;&gt; problems is with data alignment.  An NBC schedule is a number of
</span><br>
<span class="quotelev2">&gt;&gt; variously sized fields laid out contiguously in linear memory  (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt; see nbc_internal.h or nbc.c) and words don't have much natural
</span><br>
<span class="quotelev2">&gt;&gt; alignment.  On SPARC, the &quot;default&quot; (for some definition of that word)
</span><br>
<span class="quotelev2">&gt;&gt; is to sigbus when a word is not properly aligned.  In any case (even
</span><br>
<span class="quotelev2">&gt;&gt; non-SPARC), one might argue misalignment and subsequent exception
</span><br>
<span class="quotelev2">&gt;&gt; handling is nice to avoid.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are two specific issues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *)  Schedule layout uses single-char delimiters between &quot;round
</span><br>
<span class="quotelev2">&gt;&gt; schedules&quot;.  So, even if the first &quot;round schedule&quot; has nice alignment,
</span><br>
<span class="quotelev2">&gt;&gt; the second will have single-byte offsets for its components.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *)  8-byte pointers can fall on 4-byte boundaries.  E.g., say a schedule
</span><br>
<span class="quotelev2">&gt;&gt; starts on some &quot;nice&quot; alignment.  The first words of the schedule will be:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      int            total size of the schedule
</span><br>
<span class="quotelev2">&gt;&gt;      int            number of elements in the first round schedule
</span><br>
<span class="quotelev2">&gt;&gt;      enum           type of function
</span><br>
<span class="quotelev2">&gt;&gt;      void *         pointer to some buffer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, with -m64, that 8-byte pointer is on a 12-byte boundary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any input/comments on how to proceed?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11298.php">Ralph Castain: "Re: [OMPI devel] elan?"</a>
<li><strong>Previous message:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<li><strong>In reply to:</strong> <a href="11296.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11302.php">Eugene Loh: "Re: [OMPI devel] [EXTERNAL]  non-blocking collectives, SPARC, and alignment"</a>
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
