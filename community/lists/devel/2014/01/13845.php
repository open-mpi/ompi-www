<?
$subject_val = "Re: [OMPI devel] 1.7.4 status update";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 16:07:26 2014" -->
<!-- isoreceived="20140122210726" -->
<!-- sent="Wed, 22 Jan 2014 13:06:44 -0800" -->
<!-- isosent="20140122210644" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4 status update" -->
<!-- id="506493C9-E483-4B5A-9B9D-78DE7E3F2DAC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3601993E686_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4 status update<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 16:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13846.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13844.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13846.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 22, 2014, at 12:57 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph:
</span><br>
<span class="quotelev1">&gt; In my opinion, we still try to get to a stable 1.7.4.  I think we can just keep the bar high (as you said in the meeting) about what types of fixes need to get into 1.7.4.  I have been telling folks 1.7.4 would be ready &quot;really soon&quot; so the idea of folding in 1.7.5 CMRs and delaying it is less desirable to me.
</span><br>
<p>I generally agree, providing 1.7.4 can finally make it out someday :-(
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you remind me again about why the 1.8.0 by mid-March is a requirement?
</span><br>
<p>We committed to Fedora and other OS packagers that we would provide a stable 1.8.0 by end of Q1 so they can include it in their next major release series
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev2">&gt;&gt; Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, January 21, 2014 6:41 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] 1.7.4 status update
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think it is safe to say that we are not going to get a release candidate out
</span><br>
<span class="quotelev2">&gt;&gt; tonight - more Fortran problems have surfaced, along with the need to
</span><br>
<span class="quotelev2">&gt;&gt; complete the ROMIO review. I have therefore concluded we cannot release
</span><br>
<span class="quotelev2">&gt;&gt; 1.7.4 this week. This leaves us with a couple of options:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. continue down this path, hopefully releasing 1.7.4 sometime next week,
</span><br>
<span class="quotelev2">&gt;&gt; followed by 1.7.5 in the latter half of Feb. The risk here is that any further
</span><br>
<span class="quotelev2">&gt;&gt; slippage in 1.7.4/5 means that we will not release it as we must roll 1.8.0 by
</span><br>
<span class="quotelev2">&gt;&gt; mid-March. I'm not too concerned about most of those cmr's as they could be
</span><br>
<span class="quotelev2">&gt;&gt; considered minor bug fixes and pushed to the 1.8 series, but it leaves
</span><br>
<span class="quotelev2">&gt;&gt; oshmem potentially pushed into 1.9.0.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. &quot;promote&quot; all the 1.7.5 cmr's into 1.7.4 and just do a single release before
</span><br>
<span class="quotelev2">&gt;&gt; ending the series. This eases the immediate schedule crunch, but means we
</span><br>
<span class="quotelev2">&gt;&gt; will have to deal with all the bugs that surface when we destabilize the 1.7
</span><br>
<span class="quotelev2">&gt;&gt; branch again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm open to suggestions. Please be prepared to discuss at next Tues telecon.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="13846.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13844.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13846.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
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
