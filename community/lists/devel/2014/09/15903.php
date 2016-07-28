<?
$subject_val = "Re: [OMPI devel] opal components still #including OMPI header files";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 10:29:50 2014" -->
<!-- isoreceived="20140923142950" -->
<!-- sent="Tue, 23 Sep 2014 14:29:48 +0000" -->
<!-- isosent="20140923142948" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal components still #including OMPI header files" -->
<!-- id="FB91FB5A-C5D1-4D42-BF4A-4F2AA440D3D0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3794AD11-E63F-4890-9F72-86193E0931C3_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 10:29:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15904.php">Jeff Squyres (jsquyres): "[OMPI devel] Conversion to GitHub: tomorrow (Sep 24, 2014)"</a>
<li><strong>Previous message:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>In reply to:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf -- please add this to the agenda for today.
<br>
<p>On Sep 23, 2014, at 10:28 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ofacm needs to be updated to remove xoob and oob modules as those cannot be used from the opal layer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 23, 2014, at 7:22 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From SVN trunk HEAD (r32772):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; mca/btl/ugni/btl_ugni_component.c
</span><br>
<span class="quotelev2">&gt;&gt; 20:#include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca/btl/usnic/btl_usnic_compat.h
</span><br>
<span class="quotelev2">&gt;&gt; 43:#  include &quot;ompi/mca/rte/rte.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; This is ok; it is protected in a #if (just to make diffs to v1.8 easier)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca/common/ofacm/common_ofacm_xoob.c
</span><br>
<span class="quotelev2">&gt;&gt; 26:#include &quot;ompi/mca/rte/rte.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca/common/ofacm/common_ofacm_oob.c
</span><br>
<span class="quotelev2">&gt;&gt; 37:#include &quot;ompi/mca/rte/rte.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev2">&gt;&gt; 36:#include &quot;ompi/runtime/ompi_cr.h&quot; /* TODO */
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15901.php">http://www.open-mpi.org/community/lists/devel/2014/09/15901.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15902.php">http://www.open-mpi.org/community/lists/devel/2014/09/15902.php</a>
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
<li><strong>Next message:</strong> <a href="15904.php">Jeff Squyres (jsquyres): "[OMPI devel] Conversion to GitHub: tomorrow (Sep 24, 2014)"</a>
<li><strong>Previous message:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI devel] opal components still #including OMPI header files"</a>
<li><strong>In reply to:</strong> <a href="15902.php">Ralph Castain: "Re: [OMPI devel] opal components still #including OMPI header files"</a>
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
