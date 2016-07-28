<?
$subject_val = "Re: [OMPI devel] opal components still #including OMPI header files";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 10:28:33 2014" -->
<!-- isoreceived="20140923142833" -->
<!-- sent="Tue, 23 Sep 2014 07:28:16 -0700" -->
<!-- isosent="20140923142816" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal components still #including OMPI header files" -->
<!-- id="3794AD11-E63F-4890-9F72-86193E0931C3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2237BD2B-70F0-46FB-B82B-E75A9E090E4B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal components still #including OMPI header files<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 10:28:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>Previous message:</strong> <a href="15901.php">Jeff Squyres (jsquyres): "[OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>In reply to:</strong> <a href="15901.php">Jeff Squyres (jsquyres): "[OMPI devel] opal components still #including OMPI header files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>Reply:</strong> <a href="15903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ofacm needs to be updated to remove xoob and oob modules as those cannot be used from the opal layer
<br>
<p><p>On Sep 23, 2014, at 7:22 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From SVN trunk HEAD (r32772):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; mca/btl/ugni/btl_ugni_component.c
</span><br>
<span class="quotelev1">&gt; 20:#include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca/btl/usnic/btl_usnic_compat.h
</span><br>
<span class="quotelev1">&gt; 43:#  include &quot;ompi/mca/rte/rte.h&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; This is ok; it is protected in a #if (just to make diffs to v1.8 easier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca/common/ofacm/common_ofacm_xoob.c
</span><br>
<span class="quotelev1">&gt; 26:#include &quot;ompi/mca/rte/rte.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca/common/ofacm/common_ofacm_oob.c
</span><br>
<span class="quotelev1">&gt; 37:#include &quot;ompi/mca/rte/rte.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev1">&gt; 36:#include &quot;ompi/runtime/ompi_cr.h&quot; /* TODO */
</span><br>
<span class="quotelev1">&gt; -----
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15901.php">http://www.open-mpi.org/community/lists/devel/2014/09/15901.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>Previous message:</strong> <a href="15901.php">Jeff Squyres (jsquyres): "[OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>In reply to:</strong> <a href="15901.php">Jeff Squyres (jsquyres): "[OMPI devel] opal components still #including OMPI header files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>Reply:</strong> <a href="15903.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] opal components still #including OMPI header files"</a>
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
