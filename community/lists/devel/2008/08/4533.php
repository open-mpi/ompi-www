<?
$subject_val = "Re: [OMPI devel] OMPI 1.3 problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 15:33:14 2008" -->
<!-- isoreceived="20080804193314" -->
<!-- sent="Mon, 4 Aug 2008 15:33:07 -0400" -->
<!-- isosent="20080804193307" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.3 problems" -->
<!-- id="B86D19A2-C5D6-4358-BE4E-9858F29F528D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F270EF0D-707B-4020-B939-421D745D936C_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 15:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4534.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4534.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4534.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I take that back -- none of the man page changes that just  
<br>
occurred on the trunk are over in v1.3 yet.  There was one man page  
<br>
change that went in a few days ago that you must be referring to.
<br>
<p>I'm unaware of a problem with it -- can you be more specific?
<br>
<p>I did neglect to test vpath builds with that patch as well (oops; I'm  
<br>
testing that now); is that where you're having a problem?
<br>
<p><p>On Aug 4, 2008, at 3:04 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I'll port over that man page stuff now instead of waiting a day or  
</span><br>
<span class="quotelev1">&gt; three.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2008, at 2:25 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, I unfortunately cannot test this right now Greg - the 1.3  
</span><br>
<span class="quotelev2">&gt;&gt; branch won't build due to a problem with the man page installation  
</span><br>
<span class="quotelev2">&gt;&gt; script. The fix is in the trunk, but hasn't migrated across yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :-//
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that you are caught on some stage where the hanging  
</span><br>
<span class="quotelev2">&gt;&gt; bugs hadn't been fixed, but you cannot update to the current head  
</span><br>
<span class="quotelev2">&gt;&gt; of the 1.3 branch as it won't compile. All I can suggest is  
</span><br>
<span class="quotelev2">&gt;&gt; shifting to the trunk (which definitely works) for now as the man  
</span><br>
<span class="quotelev2">&gt;&gt; page fix should migrate soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 4, 2008, at 12:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Depending upon the r-level, there was a problem for awhile with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the system hanging that was caused by a couple of completely  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unrelated issues. I believe these have been fixed now - at least,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is fixed on the trunk for me under that same system. I'll check  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.3 now - it could be that some commits are missing over there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 4, 2008, at 12:06 PM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a fairly simple test program that runs fine under 1.2 on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MacOS X 10.5 . When I recompile and run it under 1.3 (head of 1.3  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; branch) it just hangs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; They are both built using --with-platform=contrib/platform/lanl/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; macosx-dynamic. For 1.3, I've added --disable-io-romio.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4534.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Previous message:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>In reply to:</strong> <a href="4532.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4534.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
<li><strong>Reply:</strong> <a href="4534.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.3 problems"</a>
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
