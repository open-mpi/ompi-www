<?
$subject_val = "Re: [OMPI devel] For discussion tomorrow: MTL issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 09:52:46 2015" -->
<!-- isoreceived="20150129145246" -->
<!-- sent="Thu, 29 Jan 2015 14:52:43 +0000" -->
<!-- isosent="20150129145243" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] For discussion tomorrow: MTL issues" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518CA3D9C_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8F766D3D-5305-4AE7-B4DD-DEC9101A79AE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] For discussion tomorrow: MTL issues<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-29 09:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16842.php">Jeff Squyres (jsquyres): "[OMPI devel] Webex for this morning"</a>
<li><strong>Previous message:</strong> <a href="16840.php">Todd Kordenbrock: "Re: [OMPI devel] MTL interfaces"</a>
<li><strong>In reply to:</strong> <a href="16836.php">Jeff Squyres (jsquyres): "[OMPI devel] For discussion tomorrow: MTL issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16843.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
<li><strong>Reply:</strong> <a href="16843.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there anything written up about recent Open MPI one-sided work?  Looking for something beyond just the code that I can study up on.. papers, design docs, future plans, etc.
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev1">&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, January 28, 2015 4:26 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] For discussion tomorrow: MTL issues
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MTL authors --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We had *some* discussion of MTL issues this afternoon in the room, but
</span><br>
<span class="quotelev1">&gt; need your input (since most of you are not here).  Here's what we'd like to
</span><br>
<span class="quotelev1">&gt; talk about tomorrow (and we realize you might not have answers for this
</span><br>
<span class="quotelev1">&gt; tomorrow).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short version: based on Mellanox's experience, why not ditch the CM PML
</span><br>
<span class="quotelev1">&gt; and have all current MTLs move up to be PMLs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More detail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We all know that Mellanox moved their MXM MTL up to be a PML.  The short
</span><br>
<span class="quotelev1">&gt; version of &quot;why did they do this?&quot; is because CM really added no value for
</span><br>
<span class="quotelev1">&gt; MXM.  Literally, all it did was add overhead:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. translate some OMPI data structures to a neutral/CM data structure 2.
</span><br>
<span class="quotelev1">&gt; which was then translated into the MXM data structures 3. then call MXM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So why not chop out one of those layers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. translate OMPI data structures into MXM data structures 2. then call MXM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Taking a crass look at the existing MTLs, we wonder if it would be worthwhile
</span><br>
<span class="quotelev1">&gt; to do the same thing for all of them.  It doesn't seem (to us) that it would be
</span><br>
<span class="quotelev1">&gt; a lot of work -- the PML and MTL interfaces are quite similar.  And there could
</span><br>
<span class="quotelev1">&gt; be message rate improvements for those MTLs-turned-PMLs, just like it did
</span><br>
<span class="quotelev1">&gt; for MXM/yalla.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *If* this is a good assumption -- that MTLs should all become PMLs -- then
</span><br>
<span class="quotelev1">&gt; MPI one-sided operations become the next logical question.  I.e., what
</span><br>
<span class="quotelev1">&gt; happens when you call MPI_PUT / MPI_GET / etc.?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now, you'll end up using the osc/pt2pt component, which will use PML
</span><br>
<span class="quotelev1">&gt; calls to effect MPI RMA functionality over the PML interface.  Which is fine,
</span><br>
<span class="quotelev1">&gt; and will work correctly in all cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, MTL-turned-PML authors will then have the option of writing an
</span><br>
<span class="quotelev1">&gt; osc/YOUR_COMPONENT for doing optimized MPI-one-sided operations on
</span><br>
<span class="quotelev1">&gt; your network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is what we would like to discuss with you tomorrow.  Tell us that this idea
</span><br>
<span class="quotelev1">&gt; is crazy, or that it's ok, or that you need to think about it, ...etc. Let's chat.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt; mpi.org/community/lists/devel/2015/01/16836.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16842.php">Jeff Squyres (jsquyres): "[OMPI devel] Webex for this morning"</a>
<li><strong>Previous message:</strong> <a href="16840.php">Todd Kordenbrock: "Re: [OMPI devel] MTL interfaces"</a>
<li><strong>In reply to:</strong> <a href="16836.php">Jeff Squyres (jsquyres): "[OMPI devel] For discussion tomorrow: MTL issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16843.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
<li><strong>Reply:</strong> <a href="16843.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
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
