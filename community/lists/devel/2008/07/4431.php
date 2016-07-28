<?
$subject_val = "Re: [OMPI devel] 1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 15:12:49 2008" -->
<!-- isoreceived="20080724191249" -->
<!-- sent="Thu, 24 Jul 2008 13:12:38 -0600" -->
<!-- isosent="20080724191238" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 branch" -->
<!-- id="E7F8E0AA-8BC4-4A1F-A7F4-1A9888F4C575_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4888C329.1090405_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 branch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-24 15:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4432.php">Ralph Castain: "[OMPI devel] Large IMB test problems?"</a>
<li><strong>Previous message:</strong> <a href="4430.php">Terry Dontje: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4430.php">Terry Dontje: "Re: [OMPI devel] 1.3 branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is another hidden danger here that has bitten us before -  
<br>
namely, I challenge someone to remember that they fixed something last  
<br>
week that (a) really does need to go over to 1.3, (b) hasn't already  
<br>
done so, and (c) isn't now intertwined with someone else's interim fix  
<br>
that they don't think should go over to 1.3 yet, if at all!
<br>
<p>Good luck sorting it all out - I figure I'll just worry about making  
<br>
the trunk work and leave the 1.3 transition issues to you brighter  
<br>
minds. ;-)
<br>
<p><p>On Jul 24, 2008, at 12:00 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think that this is exactly the problem -- when a developer puts  
</span><br>
<span class="quotelev2">&gt;&gt; something back to the trunk, they (including me!) almost always  
</span><br>
<span class="quotelev2">&gt;&gt; commit what they think is the fix to the problem.  But hindsight is  
</span><br>
<span class="quotelev2">&gt;&gt; 20/20.  Case in point: it took Ralph and me and others over a week  
</span><br>
<span class="quotelev2">&gt;&gt; to fully fix the SM/paffinity issue, even though we thought at each  
</span><br>
<span class="quotelev2">&gt;&gt; commit, &quot;yep, that's it.  This commit will fix the problem.&quot;   
</span><br>
<span class="quotelev2">&gt;&gt; Looking back, we obviously missed some things during that process,  
</span><br>
<span class="quotelev2">&gt;&gt; but we didn't realize that at the time, even though we were being  
</span><br>
<span class="quotelev2">&gt;&gt; as careful as we could.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I could be so bold -- I think that's what Terry was asking: how  
</span><br>
<span class="quotelev2">&gt;&gt; are we supposed to know?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My $0.02: how to know &quot;it really solves the problem without  
</span><br>
<span class="quotelev2">&gt;&gt; introducing new ones&quot; is a really, really hard determination.  Even  
</span><br>
<span class="quotelev2">&gt;&gt; for very small code changes.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; To beat this horse into the ground.  A good example is the latest  
</span><br>
<span class="quotelev1">&gt; performance regression due to the paffinity changes.  If you were  
</span><br>
<span class="quotelev1">&gt; testing on RH 5.1 you would not have found the problem.  And I think  
</span><br>
<span class="quotelev1">&gt; that is true with a lot of our changes in that we test on a limited  
</span><br>
<span class="quotelev1">&gt; set of platforms locally so there is definitely a risk here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you can stand by the &quot;Do the right thing&quot; mantra but at the same  
</span><br>
<span class="quotelev1">&gt; time we need to realize problems will happen and the only way to  
</span><br>
<span class="quotelev1">&gt; reduce them is by shrinking the window of ambiguity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 24, 2008, at 10:44 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did not and I will not enforce any policy at this point. I'm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confident developers in this community can take such decisions by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; themselves, without restrictions from the RM. As a hint, the most  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basic common sense (make sure it compile and it really solve the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem it is supposed to solve without introducing new ones) is a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; good decision metric.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 24, 2008, at 3:55 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It might be worthwhile to spell out the conditions of when  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; someone should let changes soak or not.  Considering your  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; changeset 19011 was putback without much soak time.  I am not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; saying 19011 needed more soak time just that I think it adds  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; potential confusion as to what one really needs to do versus  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; amount of code a change.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Unfortunately over the last couple of days I realize that the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; patches from the trunk are moved to the 1.3 too rapidly and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; usually without much testing. I would like to remember to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; everybody that the 1.3, while opened for community commits, is  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; supposed to become stable at one point and that we should do the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; best efforts to keep it that way as long as possible.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please allows few days of testing time before moving your  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; patches from the trunk to the 1.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4432.php">Ralph Castain: "[OMPI devel] Large IMB test problems?"</a>
<li><strong>Previous message:</strong> <a href="4430.php">Terry Dontje: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4430.php">Terry Dontje: "Re: [OMPI devel] 1.3 branch"</a>
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
