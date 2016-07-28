<?
$subject_val = "Re: [OMPI devel] OMPI 1.3 problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 16:12:26 2008" -->
<!-- isoreceived="20080804201226" -->
<!-- sent="Mon, 4 Aug 2008 16:12:21 -0400" -->
<!-- isosent="20080804201221" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.3 problems" -->
<!-- id="376E829A-77D7-4360-B7B1-51C58787FEAC_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DD7C0D31-111F-4087-A6AD-74D15D8A902B_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.3 problems<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 16:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4536.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4534.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4527.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4536.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4536.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4538.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm seeing the same behavior on trunk as 1.3. The program just hangs.
<br>
<p>Greg
<br>
<p>On Aug 4, 2008, at 2:25 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Well, I unfortunately cannot test this right now Greg - the 1.3  
</span><br>
<span class="quotelev1">&gt; branch won't build due to a problem with the man page installation  
</span><br>
<span class="quotelev1">&gt; script. The fix is in the trunk, but hasn't migrated across yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-//
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My guess is that you are caught on some stage where the hanging bugs  
</span><br>
<span class="quotelev1">&gt; hadn't been fixed, but you cannot update to the current head of the  
</span><br>
<span class="quotelev1">&gt; 1.3 branch as it won't compile. All I can suggest is shifting to the  
</span><br>
<span class="quotelev1">&gt; trunk (which definitely works) for now as the man page fix should  
</span><br>
<span class="quotelev1">&gt; migrate soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2008, at 12:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Depending upon the r-level, there was a problem for awhile with the  
</span><br>
<span class="quotelev2">&gt;&gt; system hanging that was caused by a couple of completely unrelated  
</span><br>
<span class="quotelev2">&gt;&gt; issues. I believe these have been fixed now - at least, it is fixed  
</span><br>
<span class="quotelev2">&gt;&gt; on the trunk for me under that same system. I'll check 1.3 now - it  
</span><br>
<span class="quotelev2">&gt;&gt; could be that some commits are missing over there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 4, 2008, at 12:06 PM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a fairly simple test program that runs fine under 1.2 on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MacOS X 10.5 . When I recompile and run it under 1.3 (head of 1.3  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch) it just hangs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They are both built using --with-platform=contrib/platform/lanl/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; macosx-dynamic. For 1.3, I've added --disable-io-romio.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4536.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4534.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4527.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4536.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4536.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4538.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 problems"</a>
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
