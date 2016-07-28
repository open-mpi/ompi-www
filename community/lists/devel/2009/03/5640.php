<?
$subject_val = "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 04:53:36 2009" -->
<!-- isoreceived="20090313085336" -->
<!-- sent="Fri, 13 Mar 2009 10:53:27 +0200" -->
<!-- isosent="20090313085327" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?" -->
<!-- id="49BA1F07.3050004_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0903121408230.17395_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 04:53:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5641.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 blocker"</a>
<li><strong>Previous message:</strong> <a href="5639.php">Jeff Squyres: "[OMPI devel] 1.3.1 blocker"</a>
<li><strong>In reply to:</strong> <a href="5638.php">Brian W. Barrett: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would like to add my 0.02 to this discussion.
<br>
The &quot;code stability&quot; it is not something that should stop project from
<br>
development and progress. During MPI Project live we already saw some
<br>
pretty critical changes (pml/btl/etc...) and as result after all we have
<br>
more stable and more optimized MPI. OMPI already have defined
<br>
workflow that allow to us handle big code changes without loosing  code
<br>
stability for a long period of time.  As I understand the btl movement
<br>
will make the code more modular and will open window for new features
<br>
and optimizations.
<br>
So if the BTL movement will not effect negatively on MPI performance and
<br>
code stability (for a long period of time, temporary unstability may be
<br>
reasonable) I do not see any constructive reason to block this
<br>
modification. If I understand correct the code will go to the
<br>
feature_oriented branch and we will have enough time to run QA cycles
<br>
before it will be moved to super_stable mode.
<br>
And after all I hope that we will get more stable,modular and feature
<br>
rich MPI implementation.
<br>
<p>Thanks,
<br>
Pasha
<br>
<p><p>Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; I'm going to stay out of the debate about whether Andy correctly 
</span><br>
<span class="quotelev1">&gt; characterized the two points you brought up as a distributed OS or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sandia's position on these two points remains the same as I previously 
</span><br>
<span class="quotelev1">&gt; stated when the question was distributed OS or not.  The primary goal 
</span><br>
<span class="quotelev1">&gt; of the Open MPI project was and should remain to be the best MPI 
</span><br>
<span class="quotelev1">&gt; project available.  Low-cost items to support different run-times or 
</span><br>
<span class="quotelev1">&gt; different non-MPI communication contexts are worth the work.  But 
</span><br>
<span class="quotelev1">&gt; high-cost items should be avoided, as they degrade our ability to 
</span><br>
<span class="quotelev1">&gt; provide the best MPI project available (of course, others, including 
</span><br>
<span class="quotelev1">&gt; OMPI developers, can take the source and do what they wish outside the 
</span><br>
<span class="quotelev1">&gt; primary development tree).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; High performance is a concern, but so is code maintainability.  If it 
</span><br>
<span class="quotelev1">&gt; takes twices as long to implement feature A because I have to worry 
</span><br>
<span class="quotelev1">&gt; about it's impact not only on MPI, but also on projects X, Y, Z, as an 
</span><br>
<span class="quotelev1">&gt; MPI developer, I've lost something important.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 12 Mar 2009, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am assuming that by distributed OS you are referring to the changes 
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; we (not just ORNL) are trying to do.  If this is the case, this is a
</span><br>
<span class="quotelev2">&gt;&gt; mischaracterization of the of out intentions.  We have two goals
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  - To be able to use a different run-time than ORTE to drive Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;  - To use the communication primitives outside the context of MPI 
</span><br>
<span class="quotelev2">&gt;&gt; (with or
</span><br>
<span class="quotelev2">&gt;&gt; without ORTE)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; High performance is critical, and at NO time have we ever said anything
</span><br>
<span class="quotelev2">&gt;&gt; about sacrificing performance - these have been concerns that others
</span><br>
<span class="quotelev2">&gt;&gt; (rightfully) have expressed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/12/09 8:24 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I have to agree with Terry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I love to inspire and see new, original, and unintended uses for Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI.  But our primary focus must remain to create, maintain, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; continue to deliver a high performance MPI implementation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a long history of adding &quot;small&quot; things to Open MPI that are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; useful to 3rd parties because it helps them, helps further Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adoption/usefulness, and wasn't difficult for us to do (&quot;small&quot; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have varying definitions).  I'm in favor of such things, as long as we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maintain a policy of &quot;in cases of conflict, OMPI/high performance MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wins&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 12, 2009, at 9:01 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun's participation in this community was to obtain a stable and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performant MPI implementation that had some research work done on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; side to improve those goals and the introduction of new features.   We
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't have problems with others using and improving on the OMPI code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; base but we need to make sure such usage doesn't detract from our
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; primary goal of performant MPI implementation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, changes to the OMPI code base to allow it to morph or even
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support a distributed OS does cause for some concern.  That is are we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opening the door to having more interfaces to support?  If so is this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wise in the fact that it seems to me we have a hard enough time trying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to focus on the MPI items?  Not to mention this definitely starts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; detracting from the original goals.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Andrew Lumsdaine wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all -- There is a meta question that I think is underlying some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the discussion about what to do with BTLs etc.  Namely, is Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI implementation with a portable run time system -- or is it a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; distributed OS with an MPI interface?  It seems like some of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; changes being asked for (e.g., with the BTLs) reflect the latter --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but perhaps not everyone shares that view and hence the impedance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mismatch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I doubt this is the last time that tensions will come up because of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; differing views on this question.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I suggest that we come to some kind of common understanding of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; question (and answer) and structure development and administration
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; accordingly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Andrew Lumsdaine
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
<li><strong>Next message:</strong> <a href="5641.php">Ralph Castain: "Re: [OMPI devel] 1.3.1 blocker"</a>
<li><strong>Previous message:</strong> <a href="5639.php">Jeff Squyres: "[OMPI devel] 1.3.1 blocker"</a>
<li><strong>In reply to:</strong> <a href="5638.php">Brian W. Barrett: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?"</a>
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
