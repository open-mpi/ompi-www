<?
$subject_val = "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 14:41:41 2009" -->
<!-- isoreceived="20090311184141" -->
<!-- sent="Wed, 11 Mar 2009 14:41:37 -0400 (EDT)" -->
<!-- isosent="20090311184137" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?" -->
<!-- id="alpine.DEB.1.10.0903111427220.20862_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F7CD2098-0AB6-4205-ACF0-40DAFE372DAF_at_cs.indiana.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 14:41:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5628.php">Ralph Castain: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<li><strong>Previous message:</strong> <a href="5626.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5623.php">Andrew Lumsdaine: "[OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5628.php">Ralph Castain: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<li><strong>Reply:</strong> <a href="5628.php">Ralph Castain: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 11 Mar 2009, Andrew Lumsdaine wrote:
<br>
<p><span class="quotelev1">&gt; Hi all -- There is a meta question that I think is underlying some of the 
</span><br>
<span class="quotelev1">&gt; discussion about what to do with BTLs etc.  Namely, is Open MPI an MPI 
</span><br>
<span class="quotelev1">&gt; implementation with a portable run time system -- or is it a distributed OS 
</span><br>
<span class="quotelev1">&gt; with an MPI interface?  It seems like some of the changes being asked for 
</span><br>
<span class="quotelev1">&gt; (e.g., with the BTLs) reflect the latter -- but perhaps not everyone shares 
</span><br>
<span class="quotelev1">&gt; that view and hence the impedance mismatch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I doubt this is the last time that tensions will come up because of differing 
</span><br>
<span class="quotelev1">&gt; views on this question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suggest that we come to some kind of common understanding of the question 
</span><br>
<span class="quotelev1">&gt; (and answer) and structure development and administration accordingly.
</span><br>
<p>My personal (and I believe, Sandia's) view is that Open MPI should seek to 
<br>
be the best MPI implementation it can be and to leave the distributed OS 
<br>
part to a distributed OS project.  This can be seen by my work with Ralph 
<br>
over the past few years to reduce the amount of run-time that exists when 
<br>
running on Red Storm.  My vision of the (ideal, possibly impractical) Open 
<br>
MPI would be one with a DPM framework (the interface between OMPI and the 
<br>
run-time) and nothing else in the run-time category.
<br>
<p>That being said, I understand the fact that we need a run-time for 
<br>
platforms which are not as robust as Red Storm.  I also understand the 
<br>
desire to build a variety of programming paradigms on top of Open MPI's 
<br>
strong infrastructure.  Given the number of broken interfaces out there, 
<br>
only having to fix them once with more software is attractive.
<br>
<p>In the end, I don't want to give up the high quality MPI implementation 
<br>
part of the project to achieve the goal of wider applicability.  Five 
<br>
years ago, we set out to build the best MPI implementation we could, and 
<br>
we're not done yet.  We should not give up that goal to support other 
<br>
programming paradigms or projects.  However, changes to better support 
<br>
other projects and which do not detract from the primary goal of a high 
<br>
quality MPI implementation should be pursued.
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5628.php">Ralph Castain: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<li><strong>Previous message:</strong> <a href="5626.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>In reply to:</strong> <a href="5623.php">Andrew Lumsdaine: "[OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5628.php">Ralph Castain: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<li><strong>Reply:</strong> <a href="5628.php">Ralph Castain: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
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
