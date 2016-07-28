<?
$subject_val = "Re: [OMPI devel] 1.7.4 status update";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 16:18:36 2014" -->
<!-- isoreceived="20140122211836" -->
<!-- sent="Wed, 22 Jan 2014 13:18:34 -0800" -->
<!-- isosent="20140122211834" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4 status update" -->
<!-- id="CAAvDA1501vjkXMezhmDVbMQPc=DvGhZthCw85uWetORZRursvQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 16:18:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13847.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13845.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>In reply to:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13847.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Reply:</strong> <a href="13847.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My $0.02USD:
<br>
<p>I agree that &quot;just keep the bar high&quot; for 1.7.4 is the right approach.
<br>
In other words: just because I found all these issues doesn't mean they
<br>
should delay 1.7.4.
<br>
Considering most (possibly all) were in 1.7.3 and nobody noticed, what harm
<br>
in leaving the issue unresolved in 1.7.4?
<br>
If my help is needed to determine if a given issue was in 1.7.3 then just
<br>
ask.
<br>
<p>For those who don't know me, or have forgotten:
<br>
<p>I am not an MPI applications programmer or user, nor do I admin systems for
<br>
people who are.
<br>
If every single issue I reported were to be ignored and never fixed, it
<br>
would not harm me in any way.
<br>
I will push back if I ever think the core developers are making poor
<br>
choices, but have no reason to &quot;fight&quot; for any particular issue to be fixed.
<br>
<p>I am a middleware developer who happens to have access to an exceptionally
<br>
wide range of systems and compilers.
<br>
I use those resources to work hard to ensure portability of my own s/w.
<br>
Having known Jeff and Brian since the LAM/MPI days I occasionally apply my
<br>
resources and knowledge to testing of Open MPI release candidates.
<br>
<p>-Paul
<br>
<p><p>On Wed, Jan 22, 2014 at 12:57 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph:
</span><br>
<span class="quotelev1">&gt; In my opinion, we still try to get to a stable 1.7.4.  I think we can just
</span><br>
<span class="quotelev1">&gt; keep the bar high (as you said in the meeting) about what types of fixes
</span><br>
<span class="quotelev1">&gt; need to get into 1.7.4.  I have been telling folks 1.7.4 would be ready
</span><br>
<span class="quotelev1">&gt; &quot;really soon&quot; so the idea of folding in 1.7.5 CMRs and delaying it is less
</span><br>
<span class="quotelev1">&gt; desirable to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you remind me again about why the 1.8.0 by mid-March is a requirement?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev2">&gt; &gt;Castain
</span><br>
<span class="quotelev2">&gt; &gt;Sent: Tuesday, January 21, 2014 6:41 PM
</span><br>
<span class="quotelev2">&gt; &gt;To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt; &gt;Subject: [OMPI devel] 1.7.4 status update
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Hi folks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I think it is safe to say that we are not going to get a release
</span><br>
<span class="quotelev1">&gt; candidate out
</span><br>
<span class="quotelev2">&gt; &gt;tonight - more Fortran problems have surfaced, along with the need to
</span><br>
<span class="quotelev2">&gt; &gt;complete the ROMIO review. I have therefore concluded we cannot release
</span><br>
<span class="quotelev2">&gt; &gt;1.7.4 this week. This leaves us with a couple of options:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;1. continue down this path, hopefully releasing 1.7.4 sometime next week,
</span><br>
<span class="quotelev2">&gt; &gt;followed by 1.7.5 in the latter half of Feb. The risk here is that any
</span><br>
<span class="quotelev1">&gt; further
</span><br>
<span class="quotelev2">&gt; &gt;slippage in 1.7.4/5 means that we will not release it as we must roll
</span><br>
<span class="quotelev1">&gt; 1.8.0 by
</span><br>
<span class="quotelev2">&gt; &gt;mid-March. I'm not too concerned about most of those cmr's as they could
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev2">&gt; &gt;considered minor bug fixes and pushed to the 1.8 series, but it leaves
</span><br>
<span class="quotelev2">&gt; &gt;oshmem potentially pushed into 1.9.0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;2. &quot;promote&quot; all the 1.7.5 cmr's into 1.7.4 and just do a single release
</span><br>
<span class="quotelev1">&gt; before
</span><br>
<span class="quotelev2">&gt; &gt;ending the series. This eases the immediate schedule crunch, but means we
</span><br>
<span class="quotelev2">&gt; &gt;will have to deal with all the bugs that surface when we destabilize the
</span><br>
<span class="quotelev1">&gt; 1.7
</span><br>
<span class="quotelev2">&gt; &gt;branch again.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'm open to suggestions. Please be prepared to discuss at next Tues
</span><br>
<span class="quotelev1">&gt; telecon.
</span><br>
<span class="quotelev2">&gt; &gt;Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev1">&gt; distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the
</span><br>
<span class="quotelev1">&gt; sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13846/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13847.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13845.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>In reply to:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13847.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Reply:</strong> <a href="13847.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
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
