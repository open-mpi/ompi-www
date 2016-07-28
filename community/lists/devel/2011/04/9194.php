<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 14:34:34 2011" -->
<!-- isoreceived="20110414183434" -->
<!-- sent="Thu, 14 Apr 2011 14:34:28 -0400" -->
<!-- isosent="20110414183428" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly" -->
<!-- id="10CFA52D-0063-48D2-AA81-4CEA29098092_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DA723D7.3000500_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 14:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9195.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<li><strong>Previous message:</strong> <a href="9193.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9191.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9188.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2011, at 12:41 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; hwloc (since 1.1, on Linux) can already tell you which CPUs are close to a CUDA device, see <a href="https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cuda.h">https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cuda.h</a> and <a href="https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cudart.h">https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cudart.h</a>
</span><br>
<span class="quotelev1">&gt; Do you need anything else ?
</span><br>
<p>Nope.
<br>
<p>I think the inference was that *all* CUDA support should be under carto/hwloc.  I don't think that's quite possible, though, for some of the reasons Rolf mentioned (i.e., we need to do more than just know *where* the accelerators are).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9195.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA	device	memory directly"</a>
<li><strong>Previous message:</strong> <a href="9193.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9191.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9188.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
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
