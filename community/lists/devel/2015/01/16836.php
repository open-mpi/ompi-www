<?
$subject_val = "[OMPI devel] For discussion tomorrow: MTL issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 19:25:39 2015" -->
<!-- isoreceived="20150129002539" -->
<!-- sent="Thu, 29 Jan 2015 00:25:37 +0000" -->
<!-- isosent="20150129002537" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] For discussion tomorrow: MTL issues" -->
<!-- id="8F766D3D-5305-4AE7-B4DD-DEC9101A79AE_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] For discussion tomorrow: MTL issues<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-28 19:25:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16837.php">Dave Turner: "[OMPI devel] mlx4 QP operation err"</a>
<li><strong>Previous message:</strong> <a href="16835.php">Jeff Squyres (jsquyres): "[OMPI devel] Git tip of the week: &quot;hub&quot; script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16841.php">Friedley, Andrew: "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
<li><strong>Reply:</strong> <a href="16841.php">Friedley, Andrew: "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
<li><strong>Reply:</strong> <a href="16847.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MTL authors --
<br>
<p>We had *some* discussion of MTL issues this afternoon in the room, but need your input (since most of you are not here).  Here's what we'd like to talk about tomorrow (and we realize you might not have answers for this tomorrow).
<br>
<p>Short version: based on Mellanox's experience, why not ditch the CM PML and have all current MTLs move up to be PMLs?
<br>
<p>More detail:
<br>
<p>We all know that Mellanox moved their MXM MTL up to be a PML.  The short version of &quot;why did they do this?&quot; is because CM really added no value for MXM.  Literally, all it did was add overhead:
<br>
<p>1. translate some OMPI data structures to a neutral/CM data structure
<br>
2. which was then translated into the MXM data structures
<br>
3. then call MXM
<br>
<p>So why not chop out one of those layers:
<br>
<p>1. translate OMPI data structures into MXM data structures
<br>
2. then call MXM
<br>
<p>Taking a crass look at the existing MTLs, we wonder if it would be worthwhile to do the same thing for all of them.  It doesn't seem (to us) that it would be a lot of work -- the PML and MTL interfaces are quite similar.  And there could be message rate improvements for those MTLs-turned-PMLs, just like it did for MXM/yalla.
<br>
<p>*If* this is a good assumption -- that MTLs should all become PMLs -- then MPI one-sided operations become the next logical question.  I.e., what happens when you call MPI_PUT / MPI_GET / etc.?
<br>
<p>Right now, you'll end up using the osc/pt2pt component, which will use PML calls to effect MPI RMA functionality over the PML interface.  Which is fine, and will work correctly in all cases.
<br>
<p>However, MTL-turned-PML authors will then have the option of writing an osc/YOUR_COMPONENT for doing optimized MPI-one-sided operations on your network.
<br>
<p>This is what we would like to discuss with you tomorrow.  Tell us that this idea is crazy, or that it's ok, or that you need to think about it, ...etc. Let's chat.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16837.php">Dave Turner: "[OMPI devel] mlx4 QP operation err"</a>
<li><strong>Previous message:</strong> <a href="16835.php">Jeff Squyres (jsquyres): "[OMPI devel] Git tip of the week: &quot;hub&quot; script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16841.php">Friedley, Andrew: "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
<li><strong>Reply:</strong> <a href="16841.php">Friedley, Andrew: "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
<li><strong>Reply:</strong> <a href="16847.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] For discussion tomorrow: MTL issues"</a>
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
