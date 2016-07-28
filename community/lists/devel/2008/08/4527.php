<?
$subject_val = "Re: [OMPI devel] OMPI 1.3 problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 14:25:11 2008" -->
<!-- isoreceived="20080804182511" -->
<!-- sent="Mon, 4 Aug 2008 12:25:02 -0600" -->
<!-- isosent="20080804182502" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.3 problems" -->
<!-- id="DD7C0D31-111F-4087-A6AD-74D15D8A902B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C236FC82-DE37-40C9-A633-487FC055A6D8_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 14:25:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4528.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4526.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4526.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4528.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4528.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4535.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I unfortunately cannot test this right now Greg - the 1.3 branch  
<br>
won't build due to a problem with the man page installation script.  
<br>
The fix is in the trunk, but hasn't migrated across yet.
<br>
<p>:-//
<br>
<p>My guess is that you are caught on some stage where the hanging bugs  
<br>
hadn't been fixed, but you cannot update to the current head of the  
<br>
1.3 branch as it won't compile. All I can suggest is shifting to the  
<br>
trunk (which definitely works) for now as the man page fix should  
<br>
migrate soon.
<br>
<p>Ralph
<br>
<p>On Aug 4, 2008, at 12:12 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Depending upon the r-level, there was a problem for awhile with the  
</span><br>
<span class="quotelev1">&gt; system hanging that was caused by a couple of completely unrelated  
</span><br>
<span class="quotelev1">&gt; issues. I believe these have been fixed now - at least, it is fixed  
</span><br>
<span class="quotelev1">&gt; on the trunk for me under that same system. I'll check 1.3 now - it  
</span><br>
<span class="quotelev1">&gt; could be that some commits are missing over there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2008, at 12:06 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a fairly simple test program that runs fine under 1.2 on  
</span><br>
<span class="quotelev2">&gt;&gt; MacOS X 10.5 . When I recompile and run it under 1.3 (head of 1.3  
</span><br>
<span class="quotelev2">&gt;&gt; branch) it just hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; They are both built using --with-platform=contrib/platform/lanl/ 
</span><br>
<span class="quotelev2">&gt;&gt; macosx-dynamic. For 1.3, I've added --disable-io-romio.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4528.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4526.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4526.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4528.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4528.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4535.php">Greg Watson: "Re: [OMPI devel] OMPI 1.3 problems"</a>
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
