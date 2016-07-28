<?
$subject_val = "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 14:57:42 2009" -->
<!-- isoreceived="20090311185742" -->
<!-- sent="Wed, 11 Mar 2009 12:57:30 -0600" -->
<!-- isosent="20090311185730" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?" -->
<!-- id="CAF49DA5-A294-4359-9B38-C40298FE0FA7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0903111427220.20862_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 14:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5629.php">Timothy Hayes: "[OMPI devel] Manipulating OPAL event system"</a>
<li><strong>Previous message:</strong> <a href="5627.php">Brian W. Barrett: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<li><strong>In reply to:</strong> <a href="5627.php">Brian W. Barrett: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5633.php">Terry Dontje: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or	is it a floor wax?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would agree with Brian - in fact, it was my understanding from the  
<br>
beginning of the project that we were Andrew's first vision: an MPI  
<br>
implementation with whatever run time support that is required, and no  
<br>
more.
<br>
<p>I would only expand on the statement about &quot;...do not detract from the  
<br>
primary goal...&quot; to add that anything that complicates the code base,  
<br>
makes it harder to maintain, etc. IMHO violates this principle. OMPI  
<br>
is an MPI implementation. If people want to reuse the code for other  
<br>
purposes, they are welcome to do so.
<br>
<p>I myself currently assist several such groups, and just became  
<br>
involved in yet another, in doing just this. Our approach has been to  
<br>
respect OMPI's inherent nature by not intruding upon it with requests  
<br>
to modify the code solely for our benefit. Instead, we work on  
<br>
branches of OMPI's code, reusing what we want (maintaining copyright,  
<br>
of course), removing/replacing what we don't want. Where it would help  
<br>
OMPI, we contribute code back as a gesture of appreciation for what  
<br>
others have done and are doing. It isn't hard to do at all, and  
<br>
maintains the integrity of both the OMPI objective and the (at times,  
<br>
conflicting with OMPI) objectives of the projects working on other  
<br>
uses for the code.
<br>
<p>I think Andrew raised a good point that is the crux of the argument  
<br>
that has been running for some time now. Thanks for raising it to a  
<br>
more visible position!
<br>
<p>Ralph
<br>
<p>On Mar 11, 2009, at 12:41 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 11 Mar 2009, Andrew Lumsdaine wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -- There is a meta question that I think is underlying some  
</span><br>
<span class="quotelev2">&gt;&gt; of the discussion about what to do with BTLs etc.  Namely, is Open  
</span><br>
<span class="quotelev2">&gt;&gt; MPI an MPI implementation with a portable run time system -- or is  
</span><br>
<span class="quotelev2">&gt;&gt; it a distributed OS with an MPI interface?  It seems like some of  
</span><br>
<span class="quotelev2">&gt;&gt; the changes being asked for (e.g., with the BTLs) reflect the  
</span><br>
<span class="quotelev2">&gt;&gt; latter -- but perhaps not everyone shares that view and hence the  
</span><br>
<span class="quotelev2">&gt;&gt; impedance mismatch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I doubt this is the last time that tensions will come up because of  
</span><br>
<span class="quotelev2">&gt;&gt; differing views on this question.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suggest that we come to some kind of common understanding of the  
</span><br>
<span class="quotelev2">&gt;&gt; question (and answer) and structure development and administration  
</span><br>
<span class="quotelev2">&gt;&gt; accordingly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My personal (and I believe, Sandia's) view is that Open MPI should  
</span><br>
<span class="quotelev1">&gt; seek to be the best MPI implementation it can be and to leave the  
</span><br>
<span class="quotelev1">&gt; distributed OS part to a distributed OS project.  This can be seen  
</span><br>
<span class="quotelev1">&gt; by my work with Ralph over the past few years to reduce the amount  
</span><br>
<span class="quotelev1">&gt; of run-time that exists when running on Red Storm.  My vision of the  
</span><br>
<span class="quotelev1">&gt; (ideal, possibly impractical) Open MPI would be one with a DPM  
</span><br>
<span class="quotelev1">&gt; framework (the interface between OMPI and the run-time) and nothing  
</span><br>
<span class="quotelev1">&gt; else in the run-time category.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, I understand the fact that we need a run-time for  
</span><br>
<span class="quotelev1">&gt; platforms which are not as robust as Red Storm.  I also understand  
</span><br>
<span class="quotelev1">&gt; the desire to build a variety of programming paradigms on top of  
</span><br>
<span class="quotelev1">&gt; Open MPI's strong infrastructure.  Given the number of broken  
</span><br>
<span class="quotelev1">&gt; interfaces out there, only having to fix them once with more  
</span><br>
<span class="quotelev1">&gt; software is attractive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the end, I don't want to give up the high quality MPI  
</span><br>
<span class="quotelev1">&gt; implementation part of the project to achieve the goal of wider  
</span><br>
<span class="quotelev1">&gt; applicability.  Five years ago, we set out to build the best MPI  
</span><br>
<span class="quotelev1">&gt; implementation we could, and we're not done yet.  We should not give  
</span><br>
<span class="quotelev1">&gt; up that goal to support other programming paradigms or projects.   
</span><br>
<span class="quotelev1">&gt; However, changes to better support other projects and which do not  
</span><br>
<span class="quotelev1">&gt; detract from the primary goal of a high quality MPI implementation  
</span><br>
<span class="quotelev1">&gt; should be pursued.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="5629.php">Timothy Hayes: "[OMPI devel] Manipulating OPAL event system"</a>
<li><strong>Previous message:</strong> <a href="5627.php">Brian W. Barrett: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<li><strong>In reply to:</strong> <a href="5627.php">Brian W. Barrett: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5633.php">Terry Dontje: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or	is it a floor wax?"</a>
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
