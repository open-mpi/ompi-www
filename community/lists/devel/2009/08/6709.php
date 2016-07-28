<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 14:26:53 2009" -->
<!-- isoreceived="20090824182653" -->
<!-- sent="Mon, 24 Aug 2009 14:26:43 -0400" -->
<!-- isosent="20090824182643" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="CD0096DA-C6FE-4CF5-8D12-508EDE1E26B4_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4DA6369B-AD56-49D2-89A3-5FC624BFDAB4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: convert send to ssend<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 14:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6710.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6708.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6705.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6710.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6710.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6714.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2009, at 13:25 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 24, 2009, at 11:35 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a side note, a very similar effect can be obtained by decreasing
</span><br>
<span class="quotelev2">&gt;&gt; the eager size of the BTLs to be equal to the size of the match
</span><br>
<span class="quotelev2">&gt;&gt; header, which is about 24 bytes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I disagree with this statement.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We currently don't export the BTL or PML header size, so you can't  
</span><br>
<span class="quotelev1">&gt; possibly know what value to set the eager limit to.  And even if we  
</span><br>
<span class="quotelev1">&gt; did, as the conversation between you, me, and Brian from the last  
</span><br>
<span class="quotelev1">&gt; Chicago Forum meeting proved, the exact definition of &quot;eager_limit&quot;  
</span><br>
<span class="quotelev1">&gt; is a fairly nebulous thing.
</span><br>
<p>It's enough to ask somebody who knows. While I agree that we don't  
<br>
have a simple definition of the eager_limit, for this particular topic  
<br>
it's enough to set it as low as possible.
<br>
<p><span class="quotelev1">&gt; My point is that this is a fairly trivial-to-implement feature.  It  
</span><br>
<span class="quotelev1">&gt; can even be done in a way that doesn't impact performance at all  
</span><br>
<span class="quotelev1">&gt; (default to compile out).
</span><br>
<p>It is more trivial than this: mpirun -np 2 --mca  
<br>
btl_tcp_rndv_eager_limit 0 --mca btl_tcp_eager_limit 72  --bynode ./ 
<br>
NPmpi ?
<br>
<p><span class="quotelev1">&gt; We all know that there are many MPI correctness tools that are  
</span><br>
<span class="quotelev1">&gt; available, but it can be difficult to get users to actually use  
</span><br>
<span class="quotelev1">&gt; them.  If they can flip a switch a mpirun time to turn on some  
</span><br>
<span class="quotelev1">&gt; semantic checking, that's a Good Thing.
</span><br>
<p>I know the approach &quot;because we can&quot;. We develop an MPI library, and  
<br>
we should keep it that way. Our main focus should not diverge to  
<br>
provide features for a hand of users, features that will barely be  
<br>
maintained and that might hit us back in the future. There are way to  
<br>
many critical features that we need now, to focus on something as  
<br>
trivial as transforming sends in ssends.
<br>
<p>Anyway, we are a community based project and the vote of the community  
<br>
will decide the fate of this RFC.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6710.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6708.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6705.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6710.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6710.php">Jeff Squyres: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6714.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
