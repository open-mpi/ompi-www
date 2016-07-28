<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 16:15:34 2014" -->
<!-- isoreceived="20140430201534" -->
<!-- sent="Wed, 30 Apr 2014 20:15:22 +0000" -->
<!-- isosent="20140430201522" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="C4BBBB89-DDFA-4260-B385-BB8983D46C5B_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAG4F6z8LOG+rVLAB4S7f7p7bdm6ADy7jmzgaXTywRMcFzCNcaQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-30 16:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14663.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14661.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4582: Move r31564 to v1.8 branch (OSHMEM: Added missing API for)"</a>
<li><strong>In reply to:</strong> <a href="14659.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14628.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, fair enough; thanks.  That's a pretty good reason to not chop it any time soon (and it's not like there's any pressure to do/not do something immediately).
<br>
<p>Can you keep us informed -- e.g., if your requirement ever does disappear and it would be safe to delete this functionality from OMPI?  (I'm not saying we *would* delete it, but if a community member changes their stance from &quot;there's a nonzero chance we're going to need it&quot; to &quot;we're not going to use it&quot;, that would be a very helpful data point).
<br>
<p>Thanks.
<br>
<p><p><p>On Apr 30, 2014, at 12:44 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, OMPI Community
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the call yesterday, Ralph and Jeff posed the question to the Community at large and to NVIDIA in particular if they/we/us have a vested interest in heterogeneous support. Mellanox and NVIDIA are partnering on systems that, on today's roadmap, could require heterogeneous support from the underlying MPI. At the moment, it's not known if this will remain an issue. Today it appears it is, but tomorrow it may not be. So, anyhow, to answer the question: Yes, there are core OMPI developers and industrial partners for whom this support appears to be important given the current state of the art.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev1">&gt; Staff Engineer, HPC Software
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 28, 2014 at 2:00 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 28, 2014 at 01:58:13PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; My concern was more about the &#147;what&quot; factor: what do you write on remote memory in a heterogeneous case. I imagine you can either write the converted data or you can convert remotely after writing. Anyway, on both cases you need intermediary buffers to do the conversion (especially if we are looking a size mismatch), so the interest of RMA is quickly vanishing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For now, I would just not support heterogeneous environments for RMA. We might want to add a check at windows creation time, so at least the users are warned.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14639.php">http://www.open-mpi.org/community/lists/devel/2014/04/14639.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14659.php">http://www.open-mpi.org/community/lists/devel/2014/04/14659.php</a>
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
<li><strong>Next message:</strong> <a href="14663.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31577 - trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14661.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI bugs] [Open MPI] #4582: Move r31564 to v1.8 branch (OSHMEM: Added missing API for)"</a>
<li><strong>In reply to:</strong> <a href="14659.php">Joshua Ladd: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14628.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
