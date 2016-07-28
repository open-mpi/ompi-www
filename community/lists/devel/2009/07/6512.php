<?
$subject_val = "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 12:06:33 2009" -->
<!-- isoreceived="20090723160633" -->
<!-- sent="Thu, 23 Jul 2009 12:06:29 -0400 (EDT)" -->
<!-- isosent="20090723160629" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: meaning of &amp;quot;btl_XXX_eager_limit&amp;quot;" -->
<!-- id="alpine.DEB.1.10.0907231157040.12286_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8576B80D-B201-43F5-8F55-95E0AB1FD394_at_cisco.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 12:06:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6513.php">Eugene Loh: "[OMPI devel] rankfile syntax"</a>
<li><strong>Previous message:</strong> <a href="6511.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>In reply to:</strong> <a href="6510.php">Jeff Squyres: "[OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6516.php">George Bosilca: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<li><strong>Reply:</strong> <a href="6516.php">George Bosilca: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 23 Jul 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;   There are two solutions I can think of.  Which should we do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   a. Pass the (max?) PML header size down into the BTL during
</span><br>
<span class="quotelev1">&gt;      initialization such that the the btl_XXX_eager_limit can
</span><br>
<span class="quotelev1">&gt;      represent the max MPI data payload size (i.e., the BTL can size
</span><br>
<span class="quotelev1">&gt;      its buffers to accommodate its desired max eager payload size,
</span><br>
<span class="quotelev1">&gt;      its header size, and the PML header size).  Thus, the
</span><br>
<span class="quotelev1">&gt;      eager_limit can truly be the MPI data payload size -- and easy
</span><br>
<span class="quotelev1">&gt;      to explain to users.
</span><br>
<p>This will not work.  Remember, the PML IS NOT THE ONLY USER OF THE BTLS. 
<br>
I'm really getting sick of saying this, but it's true.  There can be no 
<br>
PML knowledge in the BTL, even if it's something simple like a header 
<br>
size.  And since PML headers change depending on the size and type of 
<br>
message, this seems like a really stupid parameter to publish to the user.
<br>
<p><span class="quotelev1">&gt;   b. Stay with the current btl_XXX_eager_limit implementation (which
</span><br>
<span class="quotelev1">&gt;      OMPI has had for a long, long time) and add the code to check
</span><br>
<span class="quotelev1">&gt;      for btl_eager_limit less than the pml header size (per this past
</span><br>
<span class="quotelev1">&gt;      Tuesday's discussion).  This is the minimal distance change.
</span><br>
<p>Since there's already code in Terry's hands to do this, I vote for b.
<br>
<p><span class="quotelev1">&gt; 2. OMPI currently does not publish enough information for a user to
</span><br>
<span class="quotelev1">&gt;   set eager_limit to be able to do BTL traffic shaping.  That is, one
</span><br>
<span class="quotelev1">&gt;   really needs to know the (max) BTL header length and the (max) PML
</span><br>
<span class="quotelev1">&gt;   header length values to be able to calculate the correct
</span><br>
<span class="quotelev1">&gt;   eager_limit force a specific (max) BTL wire fragment size.  Our
</span><br>
<span class="quotelev1">&gt;   proposed solution is to have ompi_info print out the (max) PML and
</span><br>
<span class="quotelev1">&gt;   BTL header sizes.  Regardless of whether 1a) or 1b) is chosen, with
</span><br>
<span class="quotelev1">&gt;   these two pieces of information, a determined network administrator
</span><br>
<span class="quotelev1">&gt;   could calculate the max wire fragment size used by OMPI, and
</span><br>
<span class="quotelev1">&gt;   therefore be able to do at least some of traffic shaping.
</span><br>
<p>Actually, there's no need to know the PML header size to shape traffic. 
<br>
There's only need to know the BTL header, and I wouldn't be opposed to 
<br>
changing the behavior so that the BTL eager limit parameter included the 
<br>
btl header size (because the PML header is not a factor in determining 
<br>
size of individual eager packets).  It seems idiotic, but whatever - you 
<br>
should more care about what the data size the user is sending than the MTU 
<br>
size.  Sending multiple MTUs should have little performance on a network 
<br>
that doesn't suck and we shouldn't be doing all kinds of hacks to support 
<br>
networks who's designers can't figure out which way is up.
<br>
<p>Again, since there are multiple consumers of the BTLs, allowing network 
<br>
designers to screw around with defaults to try and get what they want 
<br>
(even when it isn't what they actually want) seems stupid.  But as long as 
<br>
you don't do 1a, I won't object to uselessness contained in ompi_info.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6513.php">Eugene Loh: "[OMPI devel] rankfile syntax"</a>
<li><strong>Previous message:</strong> <a href="6511.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
<li><strong>In reply to:</strong> <a href="6510.php">Jeff Squyres: "[OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6516.php">George Bosilca: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
<li><strong>Reply:</strong> <a href="6516.php">George Bosilca: "Re: [OMPI devel] RFC: meaning of &quot;btl_XXX_eager_limit&quot;"</a>
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
