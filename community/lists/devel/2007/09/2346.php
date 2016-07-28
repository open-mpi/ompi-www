<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 12:18:55 2007" -->
<!-- isoreceived="20070920161855" -->
<!-- sent="Thu, 20 Sep 2007 12:18:31 -0400" -->
<!-- isosent="20070920161831" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Message Queue debugging support for1.2.4" -->
<!-- id="46F29D57.6030503_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46F17FAA.7020902_at_sun.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-20 12:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2347.php">Brian Barrett: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Previous message:</strong> <a href="2345.php">Aurelien Bouteiller: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>In reply to:</strong> <a href="2334.php">Terry Dontje: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2336.php">Graham, Richard L.: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've talked with both Brian and Rich about the measurements and they are 
<br>
ok with the new findings.  I also have not received any other comments 
<br>
to the negative on putting 1097 into the v1.2 branch.  So I would like 
<br>
to instruct Tim Mattox to bring over the 1097 change to v1.2 branch and 
<br>
make a new 1.2 RC.
<br>
<p>thanks,
<br>
<p>--td
<br>
Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Nikolay and Community,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to be so late in responding to your email but I've been working 
</span><br>
<span class="quotelev1">&gt; with Pak to determine whether my hasty decision as RM yesterday was 
</span><br>
<span class="quotelev1">&gt; hasty or not.  To answer your question, we are still trying to determine 
</span><br>
<span class="quotelev1">&gt; if the message queue support can go in or not and the below is my 
</span><br>
<span class="quotelev1">&gt; perspective on whether we should.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Community,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple things have transpired in the last 24 hours from when we had 
</span><br>
<span class="quotelev1">&gt; our concall.  As Jeff surmised earlier this morning Pak did accidentally 
</span><br>
<span class="quotelev1">&gt; have debugging enabled which did skew the numbers quite a bit.  After 
</span><br>
<span class="quotelev1">&gt; making sure debugging was disabled for both builds (v1.2 and the tmp 
</span><br>
<span class="quotelev1">&gt; branch with the message queue fixes) we then fretted over the numbers.  
</span><br>
<span class="quotelev1">&gt; It looks to me that there is quite a bit of variance in the numbers that 
</span><br>
<span class="quotelev1">&gt; the OSU latency, IMB latency and mpi_ping  all produce. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example in using the OSU latency tests we say the MX MTL have a .01 
</span><br>
<span class="quotelev1">&gt; us difference between v1.2 and the tmp branch (in favor of v1.2).  
</span><br>
<span class="quotelev1">&gt; However the mean, trimmed mean and median have about .02-07us difference 
</span><br>
<span class="quotelev1">&gt; (in favor of the tmp branch).  To me the data looks pretty much the same 
</span><br>
<span class="quotelev1">&gt; and the fact that we are measuring the averages (ie none of the tests 
</span><br>
<span class="quotelev1">&gt; pick out the minimum value) makes these numbers even more hard to really 
</span><br>
<span class="quotelev1">&gt; nail down IMHO.  I've essentially seen this affect for the other tests 
</span><br>
<span class="quotelev1">&gt; (IMB and mpi_ping).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For the SM timings  using the mpi_ping tests we have seen a range of 
</span><br>
<span class="quotelev1">&gt; average latencies from 1.47-1.5 us for both the tmp and v1.2 so they 
</span><br>
<span class="quotelev1">&gt; seem like moral equivalents to me.  Rich Graham has led me to believe 
</span><br>
<span class="quotelev1">&gt; that he might get more consistent numbers but we are not able to and so 
</span><br>
<span class="quotelev1">&gt; I can only deduce that the numbers are essentially the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In conclusion I believe both the CM PML (MX MTL) and the SM BTL 
</span><br>
<span class="quotelev1">&gt; performance is about the same between the tmp branch and v1.2.  Because 
</span><br>
<span class="quotelev1">&gt; of this I would like to request that the 1097 cmr be put into 1.2.4.  If 
</span><br>
<span class="quotelev1">&gt; others disagree with my assessment above I think a discussion will need 
</span><br>
<span class="quotelev1">&gt; to ensue and I would welcome further testing by others that may show 
</span><br>
<span class="quotelev1">&gt; that the changes have regressed performance (or not).  I would like to 
</span><br>
<span class="quotelev1">&gt; set a timeout of 12 noon ET for others to comment whether these new 
</span><br>
<span class="quotelev1">&gt; findings puts our fears at ease.  At that time if not descenting 
</span><br>
<span class="quotelev1">&gt; comments have been received I would like to ask Tim to pull in these 
</span><br>
<span class="quotelev1">&gt; changes and rebuild 1.2.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nikolay Piskun wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;   Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Just to verify, before I'll start testing this, there will be no 
</span><br>
<span class="quotelev2">&gt;&gt; message queue debugging support in this version, correct? This all 
</span><br>
<span class="quotelev2">&gt;&gt; goes to 1.3 release.
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S. It looks like it is time for us to be more formally involved in 
</span><br>
<span class="quotelev2">&gt;&gt; this work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nikolay Piskun
</span><br>
<span class="quotelev2">&gt;&gt; Director of Continuing Engineering, TotalView Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 24 Prime Parkway, Natick, MA 01760
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.totalviewtech.com">http://www.totalviewtech.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2347.php">Brian Barrett: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Previous message:</strong> <a href="2345.php">Aurelien Bouteiller: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>In reply to:</strong> <a href="2334.php">Terry Dontje: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2336.php">Graham, Richard L.: "Re: [OMPI devel] Message Queue debugging support for1.2.4"</a>
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
