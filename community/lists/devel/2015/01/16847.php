<?
$subject_val = "Re: [OMPI devel] For discussion tomorrow: MTL issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 16:25:44 2015" -->
<!-- isoreceived="20150129212544" -->
<!-- sent="Thu, 29 Jan 2015 21:25:42 +0000" -->
<!-- isosent="20150129212542" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] For discussion tomorrow: MTL issues" -->
<!-- id="E47DA95A-66B7-46F6-9123-83DD280E8872_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-29 16:25:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16848.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16846.php">Jeff Squyres (jsquyres): "[OMPI devel] Great meeting!"</a>
<li><strong>In reply to:</strong> <a href="16836.php">Jeff Squyres (jsquyres): "[OMPI devel] For discussion tomorrow: MTL issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks to all of you who joined the webex for the discussion.
<br>
<p>Short version of the results:
<br>
<p>- PSM and OFI MTL maintainers said that they will look into &quot;promoting&quot; themselves to be a PML.  They didn't think it would be too hard (but aren't promising anything yet).
<br>
<p>- Portals MTL maintainers said they need to investigate some more.  Their concern was that CM was providing a nice neutral abstraction layer that shielded them from main OMPI core data structures; it would be a shame to lose that shielding.  That being said, if portals is the only MTL left, the portals MTL maintainers would likely become the CM maintainers, too, and therefore the shielding would effectively be gone.  Fair point.  Portals MTL maintainers need to investigate more.
<br>
<p>- PSM and OFI MTL maintainers said that they would investigate writing OSC components (but are promising nothing).  I suggested that they talk with/work with Nathan; he said he might be able to abstract out some common functionality/code (perhaps into osc/base?) that OSC components could jointly utilize.  TBD.
<br>
<p>- MXM has no current plans to implement an OSC component.
<br>
<p>- Portals already has an OSC component.
<br>
<p>Conclusions:
<br>
<p>1. Not clear yet on whether CM will survive in the long term.
<br>
2. There is no need for one-sided extensions to the MTL interface.
<br>
<p><p><p><span class="quotelev1">&gt; On Jan 28, 2015, at 6:25 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MTL authors --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We had *some* discussion of MTL issues this afternoon in the room, but need your input (since most of you are not here).  Here's what we'd like to talk about tomorrow (and we realize you might not have answers for this tomorrow).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short version: based on Mellanox's experience, why not ditch the CM PML and have all current MTLs move up to be PMLs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More detail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We all know that Mellanox moved their MXM MTL up to be a PML.  The short version of &quot;why did they do this?&quot; is because CM really added no value for MXM.  Literally, all it did was add overhead:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. translate some OMPI data structures to a neutral/CM data structure
</span><br>
<span class="quotelev1">&gt; 2. which was then translated into the MXM data structures
</span><br>
<span class="quotelev1">&gt; 3. then call MXM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So why not chop out one of those layers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. translate OMPI data structures into MXM data structures
</span><br>
<span class="quotelev1">&gt; 2. then call MXM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Taking a crass look at the existing MTLs, we wonder if it would be worthwhile to do the same thing for all of them.  It doesn't seem (to us) that it would be a lot of work -- the PML and MTL interfaces are quite similar.  And there could be message rate improvements for those MTLs-turned-PMLs, just like it did for MXM/yalla.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *If* this is a good assumption -- that MTLs should all become PMLs -- then MPI one-sided operations become the next logical question.  I.e., what happens when you call MPI_PUT / MPI_GET / etc.?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now, you'll end up using the osc/pt2pt component, which will use PML calls to effect MPI RMA functionality over the PML interface.  Which is fine, and will work correctly in all cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, MTL-turned-PML authors will then have the option of writing an osc/YOUR_COMPONENT for doing optimized MPI-one-sided operations on your network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is what we would like to discuss with you tomorrow.  Tell us that this idea is crazy, or that it's ok, or that you need to think about it, ...etc. Let's chat.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16836.php">http://www.open-mpi.org/community/lists/devel/2015/01/16836.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16848.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16846.php">Jeff Squyres (jsquyres): "[OMPI devel] Great meeting!"</a>
<li><strong>In reply to:</strong> <a href="16836.php">Jeff Squyres (jsquyres): "[OMPI devel] For discussion tomorrow: MTL issues"</a>
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
