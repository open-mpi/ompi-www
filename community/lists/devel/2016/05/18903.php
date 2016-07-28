<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca	undefined)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 10:48:12 2016" -->
<!-- isoreceived="20160503144812" -->
<!-- sent="Tue, 3 May 2016 14:48:09 +0000" -->
<!-- isosent="20160503144809" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca	undefined)" -->
<!-- id="AFEAA299-E6EE-4C18-B610-32B6CE22A80A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15F66FkGC0fhq=0CrumoUJeG0Nq2w6oakyK+NEgdkZ8uQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca	undefined)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 10:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18904.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18902.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18873.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca undefined)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed on master and PR'ed for v2.0.0.  Thanks.
<br>
<p><span class="quotelev1">&gt; On May 2, 2016, at 4:45 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears that 2.0.0rc2 contains the same sort of alloca()-related error I reported against 1.10.2rc1 in <a href="https://www.open-mpi.org/community/lists/devel/2015/12/18440.php">https://www.open-mpi.org/community/lists/devel/2015/12/18440.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This time the problem is in osc_rdma_peer.c, which *does* attempt the appropriate conditional include of alloca.h, but incorrectly does so before (indirect) inclusion of ompi_config.h (to define HAVE_ALLOCA_H).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The simple patch below reorders the includes to resolve the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/osc/rdma/osc_rdma_peer.c~  Mon May  2 13:37:30 2016
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/osc/rdma/osc_rdma_peer.c   Mon May  2 13:37:41 2016
</span><br>
<span class="quotelev1">&gt; @@ -11,14 +11,14 @@
</span><br>
<span class="quotelev1">&gt;   * $HEADER$
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#ifdef HAVE_ALLOCA_H
</span><br>
<span class="quotelev1">&gt; -#include &lt;alloca.h&gt;
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  #include &quot;osc_rdma_comm.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #include &quot;ompi/mca/bml/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#ifdef HAVE_ALLOCA_H
</span><br>
<span class="quotelev1">&gt; +#include &lt;alloca.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #define NODE_ID_TO_RANK(module, node_id) ((node_id) * ((ompi_comm_size ((module)-&gt;comm) + (module)-&gt;node_count - 1) / (module)-&gt;node_count))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18873.php">http://www.open-mpi.org/community/lists/devel/2016/05/18873.php</a>
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
<li><strong>Next message:</strong> <a href="18904.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18902.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18873.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] build failure on Solaris-11.2 (alloca undefined)"</a>
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
