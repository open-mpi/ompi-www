<?
$subject_val = "Re: [OMPI devel] 1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 13:27:40 2008" -->
<!-- isoreceived="20080724172740" -->
<!-- sent="Thu, 24 Jul 2008 13:27:28 -0400" -->
<!-- isosent="20080724172728" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 branch" -->
<!-- id="0CD3A979-8682-498F-BAAC-18813F4D9103_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="500D0F1F-FE28-4CF5-8AB5-84FEB45BD1C5_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-24 13:27:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4430.php">Terry Dontje: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4428.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4427.php">George Bosilca: "Re: [OMPI devel] 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4430.php">Terry Dontje: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4430.php">Terry Dontje: "Re: [OMPI devel] 1.3 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that this is exactly the problem -- when a developer puts  
<br>
something back to the trunk, they (including me!) almost always commit  
<br>
what they think is the fix to the problem.  But hindsight is 20/20.   
<br>
Case in point: it took Ralph and me and others over a week to fully  
<br>
fix the SM/paffinity issue, even though we thought at each commit,  
<br>
&quot;yep, that's it.  This commit will fix the problem.&quot;  Looking back, we  
<br>
obviously missed some things during that process, but we didn't  
<br>
realize that at the time, even though we were being as careful as we  
<br>
could.
<br>
<p>If I could be so bold -- I think that's what Terry was asking: how are  
<br>
we supposed to know?
<br>
<p>My $0.02: how to know &quot;it really solves the problem without  
<br>
introducing new ones&quot; is a really, really hard determination.  Even  
<br>
for very small code changes.  :-)
<br>
<p><p><p>On Jul 24, 2008, at 10:44 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did not and I will not enforce any policy at this point. I'm  
</span><br>
<span class="quotelev1">&gt; confident developers in this community can take such decisions by  
</span><br>
<span class="quotelev1">&gt; themselves, without restrictions from the RM. As a hint, the most  
</span><br>
<span class="quotelev1">&gt; basic common sense (make sure it compile and it really solve the  
</span><br>
<span class="quotelev1">&gt; problem it is supposed to solve without introducing new ones) is a  
</span><br>
<span class="quotelev1">&gt; good decision metric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2008, at 3:55 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It might be worthwhile to spell out the conditions of when someone  
</span><br>
<span class="quotelev2">&gt;&gt; should let changes soak or not.  Considering your changeset 19011  
</span><br>
<span class="quotelev2">&gt;&gt; was putback without much soak time.  I am not saying 19011 needed  
</span><br>
<span class="quotelev2">&gt;&gt; more soak time just that I think it adds potential confusion as to  
</span><br>
<span class="quotelev2">&gt;&gt; what one really needs to do versus amount of code a change.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately over the last couple of days I realize that the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patches from the trunk are moved to the 1.3 too rapidly and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usually without much testing. I would like to remember to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everybody that the 1.3, while opened for community commits, is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supposed to become stable at one point and that we should do the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; best efforts to keep it that way as long as possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please allows few days of testing time before moving your patches  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the trunk to the 1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4430.php">Terry Dontje: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4428.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>In reply to:</strong> <a href="4427.php">George Bosilca: "Re: [OMPI devel] 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4430.php">Terry Dontje: "Re: [OMPI devel] 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4430.php">Terry Dontje: "Re: [OMPI devel] 1.3 branch"</a>
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
