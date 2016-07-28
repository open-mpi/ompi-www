<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 16:27:54 2007" -->
<!-- isoreceived="20070919202754" -->
<!-- sent="Wed, 19 Sep 2007 16:27:49 -0400" -->
<!-- isosent="20070919202749" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Message Queue debugging support for1.2.4" -->
<!-- id="537C6C0940C6C143AA46A88946B8541708CAA3E3_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] Message Queue debugging support for1.2.4" -->
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
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-19 16:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2337.php">Pak Lui: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Previous message:</strong> <a href="2335.php">Jeff Squyres: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="2332.php">Nikolay Piskun: "[OMPI devel] Message Queue debugging support for1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2337.php">Pak Lui: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Reply:</strong> <a href="2337.php">Pak Lui: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
&nbsp;&nbsp;&nbsp;Are the performance numbers still with debugging turned on ?  The sm latency (trunk and tmp) is about 2.5 x higher than I typically see.  BTW, if the tmp branch is running coming in essentially the same, looks like there is no performance problem with the changes.
<br>
<p>Rich
<br>
<p><p>----- Original Message -----
<br>
From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Wed Sep 19 15:59:38 2007
<br>
Subject: Re: [OMPI devel] Message Queue debugging support for1.2.4
<br>
<p>Nikolay and Community,
<br>
<p>Sorry to be so late in responding to your email but I've been working 
<br>
with Pak to determine whether my hasty decision as RM yesterday was 
<br>
hasty or not.  To answer your question, we are still trying to determine 
<br>
if the message queue support can go in or not and the below is my 
<br>
perspective on whether we should.
<br>
<p>Community,
<br>
<p>A couple things have transpired in the last 24 hours from when we had 
<br>
our concall.  As Jeff surmised earlier this morning Pak did accidentally 
<br>
have debugging enabled which did skew the numbers quite a bit.  After 
<br>
making sure debugging was disabled for both builds (v1.2 and the tmp 
<br>
branch with the message queue fixes) we then fretted over the numbers.  
<br>
It looks to me that there is quite a bit of variance in the numbers that 
<br>
the OSU latency, IMB latency and mpi_ping  all produce. 
<br>
<p>For example in using the OSU latency tests we say the MX MTL have a .01 
<br>
us difference between v1.2 and the tmp branch (in favor of v1.2).  
<br>
However the mean, trimmed mean and median have about .02-07us difference 
<br>
(in favor of the tmp branch).  To me the data looks pretty much the same 
<br>
and the fact that we are measuring the averages (ie none of the tests 
<br>
pick out the minimum value) makes these numbers even more hard to really 
<br>
nail down IMHO.  I've essentially seen this affect for the other tests 
<br>
(IMB and mpi_ping).
<br>
&nbsp;
<br>
For the SM timings  using the mpi_ping tests we have seen a range of 
<br>
average latencies from 1.47-1.5 us for both the tmp and v1.2 so they 
<br>
seem like moral equivalents to me.  Rich Graham has led me to believe 
<br>
that he might get more consistent numbers but we are not able to and so 
<br>
I can only deduce that the numbers are essentially the same.
<br>
<p>In conclusion I believe both the CM PML (MX MTL) and the SM BTL 
<br>
performance is about the same between the tmp branch and v1.2.  Because 
<br>
of this I would like to request that the 1097 cmr be put into 1.2.4.  If 
<br>
others disagree with my assessment above I think a discussion will need 
<br>
to ensue and I would welcome further testing by others that may show 
<br>
that the changes have regressed performance (or not).  I would like to 
<br>
set a timeout of 12 noon ET for others to comment whether these new 
<br>
findings puts our fears at ease.  At that time if not descenting 
<br>
comments have been received I would like to ask Tim to pull in these 
<br>
changes and rebuild 1.2.4.
<br>
<p>thanks,
<br>
<p>--td
<br>
<p><p><p>Nikolay Piskun wrote:
<br>
<span class="quotelev1">&gt;   Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Just to verify, before I'll start testing this, there will be no 
</span><br>
<span class="quotelev1">&gt; message queue debugging support in this version, correct? This all 
</span><br>
<span class="quotelev1">&gt; goes to 1.3 release.
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. It looks like it is time for us to be more formally involved in 
</span><br>
<span class="quotelev1">&gt; this work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nikolay Piskun
</span><br>
<span class="quotelev1">&gt; Director of Continuing Engineering, TotalView Technologies
</span><br>
<span class="quotelev1">&gt; 24 Prime Parkway, Natick, MA 01760
</span><br>
<span class="quotelev1">&gt; <a href="http://www.totalviewtech.com">http://www.totalviewtech.com</a>
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2337.php">Pak Lui: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Previous message:</strong> <a href="2335.php">Jeff Squyres: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="2332.php">Nikolay Piskun: "[OMPI devel] Message Queue debugging support for1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2337.php">Pak Lui: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Reply:</strong> <a href="2337.php">Pak Lui: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
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
