<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 12:44:55 2014" -->
<!-- isoreceived="20140430164455" -->
<!-- sent="Wed, 30 Apr 2014 12:44:54 -0400" -->
<!-- isosent="20140430164454" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="CAG4F6z8LOG+rVLAB4S7f7p7bdm6ADy7jmzgaXTywRMcFzCNcaQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140428180009.GC80196_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove heterogeneous support<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-30 12:44:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14660.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4582: Move r31564 to v1.8 branch (OSHMEM: Added missing API for)"</a>
<li><strong>Previous message:</strong> <a href="14658.php">Gilles Gouaillardet: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>In reply to:</strong> <a href="14639.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, OMPI Community
<br>
<p>On the call yesterday, Ralph and Jeff posed the question to the Community
<br>
at large and to NVIDIA in particular if they/we/us have a vested interest
<br>
in heterogeneous support. Mellanox and NVIDIA are partnering on systems
<br>
that, on today's roadmap, could require heterogeneous support from the
<br>
underlying MPI. At the moment, it's not known if this will remain an issue.
<br>
Today it appears it is, but tomorrow it may not be. So, anyhow, to answer
<br>
the question: Yes, there are core OMPI developers and industrial partners
<br>
for whom this support appears to be important given the current state of
<br>
the art.
<br>
<p>Best regards,
<br>
<p>Josh
<br>
<p>Joshua S. Ladd, PhD
<br>
Staff Engineer, HPC Software
<br>
Mellanox Technologies
<br>
<p>Email: joshual_at_[hidden]
<br>
<p><p><p>On Mon, Apr 28, 2014 at 2:00 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Apr 28, 2014 at 01:58:13PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; My concern was more about the &#226;&#128;&#156;what&quot; factor: what do you write on remote
</span><br>
<span class="quotelev1">&gt; memory in a heterogeneous case. I imagine you can either write the
</span><br>
<span class="quotelev1">&gt; converted data or you can convert remotely after writing. Anyway, on both
</span><br>
<span class="quotelev1">&gt; cases you need intermediary buffers to do the conversion (especially if we
</span><br>
<span class="quotelev1">&gt; are looking a size mismatch), so the interest of RMA is quickly vanishing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For now, I would just not support heterogeneous environments for RMA. We
</span><br>
<span class="quotelev1">&gt; might want to add a check at windows creation time, so at least the users
</span><br>
<span class="quotelev1">&gt; are warned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good point. I will look at adding a warning now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14639.php">http://www.open-mpi.org/community/lists/devel/2014/04/14639.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14659/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14660.php">Joshua Ladd: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4582: Move r31564 to v1.8 branch (OSHMEM: Added missing API for)"</a>
<li><strong>Previous message:</strong> <a href="14658.php">Gilles Gouaillardet: "Re: [OMPI devel] memory leaks upon dup/split/create of	communicators?"</a>
<li><strong>In reply to:</strong> <a href="14639.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
