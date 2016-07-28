<?
$subject_val = "Re: [OMPI devel] 1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 14:00:47 2008" -->
<!-- isoreceived="20080724180047" -->
<!-- sent="Thu, 24 Jul 2008 14:00:09 -0400" -->
<!-- isosent="20080724180009" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 branch" -->
<!-- id="4888C329.1090405_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0CD3A979-8682-498F-BAAC-18813F4D9103_at_cisco.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-24 14:00:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4431.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4429.php">Jeff Squyres: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4429.php">Jeff Squyres: "Re: [OMPI devel] 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4431.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4431.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I think that this is exactly the problem -- when a developer puts 
</span><br>
<span class="quotelev1">&gt; something back to the trunk, they (including me!) almost always commit 
</span><br>
<span class="quotelev1">&gt; what they think is the fix to the problem.  But hindsight is 20/20.  
</span><br>
<span class="quotelev1">&gt; Case in point: it took Ralph and me and others over a week to fully 
</span><br>
<span class="quotelev1">&gt; fix the SM/paffinity issue, even though we thought at each commit, 
</span><br>
<span class="quotelev1">&gt; &quot;yep, that's it.  This commit will fix the problem.&quot;  Looking back, we 
</span><br>
<span class="quotelev1">&gt; obviously missed some things during that process, but we didn't 
</span><br>
<span class="quotelev1">&gt; realize that at the time, even though we were being as careful as we 
</span><br>
<span class="quotelev1">&gt; could.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I could be so bold -- I think that's what Terry was asking: how are 
</span><br>
<span class="quotelev1">&gt; we supposed to know?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $0.02: how to know &quot;it really solves the problem without 
</span><br>
<span class="quotelev1">&gt; introducing new ones&quot; is a really, really hard determination.  Even 
</span><br>
<span class="quotelev1">&gt; for very small code changes.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
To beat this horse into the ground.  A good example is the latest 
<br>
performance regression due to the paffinity changes.  If you were 
<br>
testing on RH 5.1 you would not have found the problem.  And I think 
<br>
that is true with a lot of our changes in that we test on a limited set 
<br>
of platforms locally so there is definitely a risk here.
<br>
<p>So you can stand by the &quot;Do the right thing&quot; mantra but at the same time 
<br>
we need to realize problems will happen and the only way to reduce them 
<br>
is by shrinking the window of ambiguity.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2008, at 10:44 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did not and I will not enforce any policy at this point. I'm 
</span><br>
<span class="quotelev2">&gt;&gt; confident developers in this community can take such decisions by 
</span><br>
<span class="quotelev2">&gt;&gt; themselves, without restrictions from the RM. As a hint, the most 
</span><br>
<span class="quotelev2">&gt;&gt; basic common sense (make sure it compile and it really solve the 
</span><br>
<span class="quotelev2">&gt;&gt; problem it is supposed to solve without introducing new ones) is a 
</span><br>
<span class="quotelev2">&gt;&gt; good decision metric.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 24, 2008, at 3:55 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It might be worthwhile to spell out the conditions of when someone 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should let changes soak or not.  Considering your changeset 19011 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was putback without much soak time.  I am not saying 19011 needed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more soak time just that I think it adds potential confusion as to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what one really needs to do versus amount of code a change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately over the last couple of days I realize that the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; patches from the trunk are moved to the 1.3 too rapidly and usually 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without much testing. I would like to remember to everybody that 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the 1.3, while opened for community commits, is supposed to become 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stable at one point and that we should do the best efforts to keep 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it that way as long as possible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please allows few days of testing time before moving your patches 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from the trunk to the 1.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4431.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4429.php">Jeff Squyres: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>In reply to:</strong> <a href="4429.php">Jeff Squyres: "Re: [OMPI devel] 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4431.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4431.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch"</a>
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
