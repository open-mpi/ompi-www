<?
$subject_val = "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 16:08:04 2009" -->
<!-- isoreceived="20090723200804" -->
<!-- sent="Thu, 23 Jul 2009 16:07:54 -0400" -->
<!-- isosent="20090723200754" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: meaning of &amp;quot;btl_XXX_eager_limit&amp;quot;" -->
<!-- id="6FB9BA28-2A1B-4DF1-BDCE-3E9A0FD3EFA6_at_EECS.UTK.EDU" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0907231157040.12286_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 16:07:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6517.php">Jeff Squyres: "[OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6515.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<li><strong>In reply to:</strong> <a href="6512.php">Brian W. Barrett: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2009, at 12:06 , Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 23 Jul 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are two solutions I can think of.  Which should we do?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a. Pass the (max?) PML header size down into the BTL during
</span><br>
<span class="quotelev2">&gt;&gt; initialization such that the the btl_XXX_eager_limit can
</span><br>
<span class="quotelev2">&gt;&gt; represent the max MPI data payload size (i.e., the BTL can size
</span><br>
<span class="quotelev2">&gt;&gt; its buffers to accommodate its desired max eager payload size,
</span><br>
<span class="quotelev2">&gt;&gt; its header size, and the PML header size).  Thus, the
</span><br>
<span class="quotelev2">&gt;&gt; eager_limit can truly be the MPI data payload size -- and easy
</span><br>
<span class="quotelev2">&gt;&gt; to explain to users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will not work.  Remember, the PML IS NOT THE ONLY USER OF THE  
</span><br>
<span class="quotelev1">&gt; BTLS. I'm really getting sick of saying this, but it's true.  There  
</span><br>
<span class="quotelev1">&gt; can be no PML knowledge in the BTL, even if it's something simple  
</span><br>
<span class="quotelev1">&gt; like a header size.  And since PML headers change depending on the  
</span><br>
<span class="quotelev1">&gt; size and type of message, this seems like a really stupid parameter  
</span><br>
<span class="quotelev1">&gt; to publish to the user.
</span><br>
<p>Without talking about the fact that each PML have it's own headers  
<br>
(and corresponding sizes). Do we really expect the BTLs (or something  
<br>
else) to compute the maximum as a convenience for the user? Without  
<br>
forcing the user to select the desired PML, we will not be able to  
<br>
provide an accurate length for the eager.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; b. Stay with the current btl_XXX_eager_limit implementation (which
</span><br>
<span class="quotelev2">&gt;&gt; OMPI has had for a long, long time) and add the code to check
</span><br>
<span class="quotelev2">&gt;&gt; for btl_eager_limit less than the pml header size (per this past
</span><br>
<span class="quotelev2">&gt;&gt; Tuesday's discussion).  This is the minimal distance change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since there's already code in Terry's hands to do this, I vote for b.
</span><br>
<p>Or prevent the users to play with something they are not really  
<br>
supposed to play with. My point is that the eager is not related to  
<br>
MPI, it is a BTL property based on the hardware, and should only be  
<br>
tweaked by someone who understand what's he/she's playing with.
<br>
<p>The only interest I can see in this RFC is to allow developer/users to  
<br>
play with real ZERO bytes eager messages. While this is not  
<br>
performance thing (at least I don't think that in a normal/correct MPI  
<br>
application this can improve the performance) such an option can be a  
<br>
life-saver for applications generating a lot of unexpected messages.
<br>
<p>Otherwise, I totally agree with Brian's comments.
<br>
<p>george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. OMPI currently does not publish enough information for a user to
</span><br>
<span class="quotelev2">&gt;&gt; set eager_limit to be able to do BTL traffic shaping.  That is, one
</span><br>
<span class="quotelev2">&gt;&gt; really needs to know the (max) BTL header length and the (max) PML
</span><br>
<span class="quotelev2">&gt;&gt; header length values to be able to calculate the correct
</span><br>
<span class="quotelev2">&gt;&gt; eager_limit force a specific (max) BTL wire fragment size.  Our
</span><br>
<span class="quotelev2">&gt;&gt; proposed solution is to have ompi_info print out the (max) PML and
</span><br>
<span class="quotelev2">&gt;&gt; BTL header sizes.  Regardless of whether 1a) or 1b) is chosen, with
</span><br>
<span class="quotelev2">&gt;&gt; these two pieces of information, a determined network administrator
</span><br>
<span class="quotelev2">&gt;&gt; could calculate the max wire fragment size used by OMPI, and
</span><br>
<span class="quotelev2">&gt;&gt; therefore be able to do at least some of traffic shaping.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, there's no need to know the PML header size to shape  
</span><br>
<span class="quotelev1">&gt; traffic. There's only need to know the BTL header, and I wouldn't be  
</span><br>
<span class="quotelev1">&gt; opposed to changing the behavior so that the BTL eager limit  
</span><br>
<span class="quotelev1">&gt; parameter included the btl header size (because the PML header is  
</span><br>
<span class="quotelev1">&gt; not a factor in determining size of individual eager packets).  It  
</span><br>
<span class="quotelev1">&gt; seems idiotic, but whatever - you should more care about what the  
</span><br>
<span class="quotelev1">&gt; data size the user is sending than the MTU size.  Sending multiple  
</span><br>
<span class="quotelev1">&gt; MTUs should have little performance on a network that doesn't suck  
</span><br>
<span class="quotelev1">&gt; and we shouldn't be doing all kinds of hacks to support networks  
</span><br>
<span class="quotelev1">&gt; who's designers can't figure out which way is up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, since there are multiple consumers of the BTLs, allowing  
</span><br>
<span class="quotelev1">&gt; network designers to screw around with defaults to try and get what  
</span><br>
<span class="quotelev1">&gt; they want (even when it isn't what they actually want) seems  
</span><br>
<span class="quotelev1">&gt; stupid.  But as long as you don't do 1a, I won't object to  
</span><br>
<span class="quotelev1">&gt; uselessness contained in ompi_info.
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
<li><strong>Next message:</strong> <a href="6517.php">Jeff Squyres: "[OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6515.php">Ralph Castain: "Re: [OMPI devel] rankfile syntax"</a>
<li><strong>In reply to:</strong> <a href="6512.php">Brian W. Barrett: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
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
