<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 12:42:05 2011" -->
<!-- isoreceived="20110414164205" -->
<!-- sent="Thu, 14 Apr 2011 18:41:59 +0200" -->
<!-- isosent="20110414164159" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly" -->
<!-- id="4DA723D7.3000500_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1302795893.20669.4.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 12:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9192.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Previous message:</strong> <a href="9190.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9187.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9194.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9194.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hwloc (since 1.1, on Linux) can already tell you which CPUs are close to
<br>
a CUDA device, see
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cuda.h">https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cuda.h</a>
<br>
and <a href="https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cudart.h">https://svn.open-mpi.org/trac/hwloc/browser/trunk/include/hwloc/cudart.h</a>
<br>
Do you need anything else ?
<br>
<p>Brice
<br>
<p><p><p>Le 14/04/2011 17:44, Ken Lloyd a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; I'd suggest supporting CUDA device queries in carto and hwloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 2011-04-14 at 11:25 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 13, 2011, at 12:47 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; By default, the code is disable and has to be configured into the library.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   --with-cuda(=DIR)       Build cuda support, optionally adding DIR/include,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                                              DIR/lib, and DIR/lib64
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   --with-cuda-libdir=DIR  Search for cuda libraries in DIR
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My $0.02: cuda shouldn't be disabled by default (and only enabled if you --with-cuda).  If configure finds all the Right cuda magic, then cuda support should be enabled by default.  Just like all other optional support libraries that OMPI uses.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More specifically: the cuda support code in OMPI should strive to be such that it can be enabled by default and not cause any performance penalties to codes that do not need/use any cuda stuff.  I'm not saying I know how to do that -- I'm just saying that that should be the goal.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9191/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9192.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Previous message:</strong> <a href="9190.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9187.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9194.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9194.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
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
