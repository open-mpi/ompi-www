<?
$subject_val = "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 12:22:57 2009" -->
<!-- isoreceived="20090312162257" -->
<!-- sent="Thu, 12 Mar 2009 12:22:28 -0500" -->
<!-- isosent="20090312172228" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?" -->
<!-- id="C5DEAF04.30B11%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="94FCBBC3-0FF7-4822-8176-53492355E96E_at_cisco.com" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 13:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5636.php">Brad Benton: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5634.php">Jeff Squyres: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor	is it a floor wax?"</a>
<li><strong>In reply to:</strong> <a href="5634.php">Jeff Squyres: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor	is it a floor wax?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5638.php">Brian W. Barrett: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?"</a>
<li><strong>Reply:</strong> <a href="5638.php">Brian W. Barrett: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am assuming that by distributed OS you are referring to the changes that
<br>
we (not just ORNL) are trying to do.  If this is the case, this is a
<br>
mischaracterization of the of out intentions.  We have two goals
<br>
<p>&nbsp;&nbsp;- To be able to use a different run-time than ORTE to drive Open MPI
<br>
&nbsp;&nbsp;- To use the communication primitives outside the context of MPI (with or
<br>
without ORTE)
<br>
<p>High performance is critical, and at NO time have we ever said anything
<br>
about sacrificing performance - these have been concerns that others
<br>
(rightfully) have expressed.
<br>
<p>Rich
<br>
<p><p>On 3/12/09 8:24 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think I have to agree with Terry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I love to inspire and see new, original, and unintended uses for Open
</span><br>
<span class="quotelev1">&gt; MPI.  But our primary focus must remain to create, maintain, and
</span><br>
<span class="quotelev1">&gt; continue to deliver a high performance MPI implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a long history of adding &quot;small&quot; things to Open MPI that are
</span><br>
<span class="quotelev1">&gt; useful to 3rd parties because it helps them, helps further Open MPI
</span><br>
<span class="quotelev1">&gt; adoption/usefulness, and wasn't difficult for us to do (&quot;small&quot; can
</span><br>
<span class="quotelev1">&gt; have varying definitions).  I'm in favor of such things, as long as we
</span><br>
<span class="quotelev1">&gt; maintain a policy of &quot;in cases of conflict, OMPI/high performance MPI
</span><br>
<span class="quotelev1">&gt; wins&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2009, at 9:01 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sun's participation in this community was to obtain a stable and
</span><br>
<span class="quotelev2">&gt;&gt; performant MPI implementation that had some research work done on the
</span><br>
<span class="quotelev2">&gt;&gt; side to improve those goals and the introduction of new features.   We
</span><br>
<span class="quotelev2">&gt;&gt; don't have problems with others using and improving on the OMPI code
</span><br>
<span class="quotelev2">&gt;&gt; base but we need to make sure such usage doesn't detract from our
</span><br>
<span class="quotelev2">&gt;&gt; primary goal of performant MPI implementation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, changes to the OMPI code base to allow it to morph or even
</span><br>
<span class="quotelev2">&gt;&gt; support a distributed OS does cause for some concern.  That is are we
</span><br>
<span class="quotelev2">&gt;&gt; opening the door to having more interfaces to support?  If so is this
</span><br>
<span class="quotelev2">&gt;&gt; wise in the fact that it seems to me we have a hard enough time trying
</span><br>
<span class="quotelev2">&gt;&gt; to focus on the MPI items?  Not to mention this definitely starts
</span><br>
<span class="quotelev2">&gt;&gt; detracting from the original goals.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Andrew Lumsdaine wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -- There is a meta question that I think is underlying some
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the discussion about what to do with BTLs etc.  Namely, is Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI implementation with a portable run time system -- or is it a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distributed OS with an MPI interface?  It seems like some of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes being asked for (e.g., with the BTLs) reflect the latter --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but perhaps not everyone shares that view and hence the impedance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mismatch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I doubt this is the last time that tensions will come up because of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; differing views on this question.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suggest that we come to some kind of common understanding of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; question (and answer) and structure development and administration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accordingly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andrew Lumsdaine
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5636.php">Brad Benton: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5634.php">Jeff Squyres: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor	is it a floor wax?"</a>
<li><strong>In reply to:</strong> <a href="5634.php">Jeff Squyres: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor	is it a floor wax?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5638.php">Brian W. Barrett: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?"</a>
<li><strong>Reply:</strong> <a href="5638.php">Brian W. Barrett: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert toppingor is it a floor wax?"</a>
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
