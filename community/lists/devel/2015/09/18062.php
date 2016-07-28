<?
$subject_val = "Re: [OMPI devel] --enable-spare-groups build broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 11:09:28 2015" -->
<!-- isoreceived="20150917150928" -->
<!-- sent="Thu, 17 Sep 2015 09:09:04 -0600" -->
<!-- isosent="20150917150904" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --enable-spare-groups build broken" -->
<!-- id="20150917150904.GA77233_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57oco_s3hsgfPFk9AxEVZ3eS32FQvVpORvWuyMf=qRfdYSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] --enable-spare-groups build broken<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 11:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18063.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18061.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>In reply to:</strong> <a href="18057.php">Ralph Castain: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, it was not. Will fix.
<br>
<p>-Nathan
<br>
<p>On Wed, Sep 16, 2015 at 07:26:58PM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    Yes - Nathan made some changes related to the add_procs code. I doubt that
</span><br>
<span class="quotelev1">&gt;    configure option was checked...
</span><br>
<span class="quotelev1">&gt;    On Wed, Sep 16, 2015 at 7:13 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;    &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Did something change in the group structure in the last 24-48 hours?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      --enable-spare-groups groups are currently broken:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ----
</span><br>
<span class="quotelev1">&gt;      make[2]: Entering directory `/home/jsquyres/git/ompi/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt;        CC       libdebuggers_la-ompi_debuggers.lo
</span><br>
<span class="quotelev1">&gt;      In file included from ../../ompi/communicator/communicator.h:38:0,
</span><br>
<span class="quotelev1">&gt;                       from ../../ompi/mca/pml/base/pml_base_request.h:32,
</span><br>
<span class="quotelev1">&gt;                       from ompi_debuggers.c:67:
</span><br>
<span class="quotelev1">&gt;      ../../ompi/group/group.h: In function `ompi_group_get_proc_ptr':
</span><br>
<span class="quotelev1">&gt;      ../../ompi/group/group.h:366:52: error: `peer_id' undeclared (first use
</span><br>
<span class="quotelev1">&gt;      in this function)
</span><br>
<span class="quotelev1">&gt;                   return ompi_group_dense_lookup (group, peer_id, allocate);
</span><br>
<span class="quotelev1">&gt;                                                          ^
</span><br>
<span class="quotelev1">&gt;      ../../ompi/group/group.h:366:52: note: each undeclared identifier is
</span><br>
<span class="quotelev1">&gt;      reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt;      -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Can someone have a look?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Thanks.
</span><br>
<span class="quotelev1">&gt;      --
</span><br>
<span class="quotelev1">&gt;      Jeff Squyres
</span><br>
<span class="quotelev1">&gt;      jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18056.php">http://www.open-mpi.org/community/lists/devel/2015/09/18056.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18057.php">http://www.open-mpi.org/community/lists/devel/2015/09/18057.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18062/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18063.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18061.php">&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>In reply to:</strong> <a href="18057.php">Ralph Castain: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
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
