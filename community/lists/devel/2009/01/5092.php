<?
$subject_val = "Re: [OMPI devel] RFC: Component-izing MPI_Op";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 10:09:42 2009" -->
<!-- isoreceived="20090105150942" -->
<!-- sent="Mon, 5 Jan 2009 10:09:38 -0500 (EST)" -->
<!-- isosent="20090105150938" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Component-izing MPI_Op" -->
<!-- id="alpine.DEB.1.10.0901051006140.28240_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4CEC64CB-B497-469A-ACCB-3966A0934341_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Component-izing MPI_Op<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 10:09:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5093.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Previous message:</strong> <a href="5091.php">Jeff Squyres: "[OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>In reply to:</strong> <a href="5091.php">Jeff Squyres: "[OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5093.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Reply:</strong> <a href="5093.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this sounds reasonable, if (and only if) MPI_Accumulate is 
<br>
properly handled.  The interface for calling the op functions was broken 
<br>
in some fairly obvious way for accumulate when I was writing the one-sided 
<br>
code.  I think I had to call some supposedly internal bits of the 
<br>
interface to make accumulate work.  I can't remember what they are now, 
<br>
but I do remember it being a problem.
<br>
<p>Of course, unless it makes mpi_allreduce on one double-sized floating 
<br>
point number using sum go faster, I'm not entirely sure a change is 
<br>
helpful ;).
<br>
<p>Brian
<br>
<p>On Mon, 5 Jan 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Converting the back-end of MPI_Op's to use components instead of 
</span><br>
<span class="quotelev1">&gt; hard-coded C functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: To support specialized hardware (such as GPUs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: Changes most of the MPI_Op code, adds a new ompi/mca/op framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: Work has started in an hg branch 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/cuda/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/cuda/</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Next Tuesday's teleconference, Jan 13 2008.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: I don't plan to finish the work by Jan 13; I just want to get a yea/nay 
</span><br>
<span class="quotelev1">&gt; from the community on the concept.  Final review of the code before coming 
</span><br>
<span class="quotelev1">&gt; into the trunk can come later when I have more work to show / review.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Background: Today, the back-end MPI_Op functionality of (MPI_Op, 
</span><br>
<span class="quotelev1">&gt; MPI_Datatype) tuples are implemented as function pointers to a series of 
</span><br>
<span class="quotelev1">&gt; hard-coded C functions in the ompi/op/ directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** NOTE: Since we already implement MPI_Op functionality via function 
</span><br>
<span class="quotelev1">&gt; pointer, this proposed extension is not expected to cause any performance 
</span><br>
<span class="quotelev1">&gt; difference in terms of OMPI's infrastructure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Proposal: Extend the current implementation by creating a new framework 
</span><br>
<span class="quotelev1">&gt; (&quot;op&quot;) that allows components to provide back-end MPI_Op functions instead 
</span><br>
<span class="quotelev1">&gt; of/in addition to the hard-coded C functions (we've talked about this idea 
</span><br>
<span class="quotelev1">&gt; before, but never done it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;op&quot; framework will be similar to the MPI coll framework in that 
</span><br>
<span class="quotelev1">&gt; individual function pointers from multiple different modules can be 
</span><br>
<span class="quotelev1">&gt; mixed-n-matched.  For example, if you want to write a new coll component that 
</span><br>
<span class="quotelev1">&gt; implements *only* a new MPI_BCAST algorithm, that coll component can be 
</span><br>
<span class="quotelev1">&gt; mixed-n-matched with other coll components at run time to get a full set of 
</span><br>
<span class="quotelev1">&gt; collective implementations on a communicator.  A similar concept will be 
</span><br>
<span class="quotelev1">&gt; applied to the &quot;op&quot; framework.  Case in point: some specialized hardware is 
</span><br>
<span class="quotelev1">&gt; only good at *some* operations on *some* datatypes; we'll need to fall back 
</span><br>
<span class="quotelev1">&gt; to the hard-coded C versions for all other tuples.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is likely that the the &quot;op&quot; framework base will have all the hard-coded C 
</span><br>
<span class="quotelev1">&gt; &quot;basic&quot; MPI_Op functions that will always be available for fallback if a 
</span><br>
<span class="quotelev1">&gt; component is not used at run-time for a specialized implementation. 
</span><br>
<span class="quotelev1">&gt; Specifically: the intent is that components will be for specialized 
</span><br>
<span class="quotelev1">&gt; implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5093.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Previous message:</strong> <a href="5091.php">Jeff Squyres: "[OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>In reply to:</strong> <a href="5091.php">Jeff Squyres: "[OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5093.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Reply:</strong> <a href="5093.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
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
