<?
$subject_val = "Re: [OMPI devel] --enable-spare-groups build broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 22:27:04 2015" -->
<!-- isoreceived="20150917022704" -->
<!-- sent="Wed, 16 Sep 2015 19:26:58 -0700" -->
<!-- isosent="20150917022658" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --enable-spare-groups build broken" -->
<!-- id="CAMD57oco_s3hsgfPFk9AxEVZ3eS32FQvVpORvWuyMf=qRfdYSQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7EDCC9A8-6378-4493-AE7E-D36C8439738F_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 22:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18058.php">Howard Pritchard: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Previous message:</strong> <a href="18056.php">Jeff Squyres (jsquyres): "[OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>In reply to:</strong> <a href="18056.php">Jeff Squyres (jsquyres): "[OMPI devel] --enable-spare-groups build broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18062.php">Nathan Hjelm: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>Reply:</strong> <a href="18062.php">Nathan Hjelm: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes - Nathan made some changes related to the add_procs code. I doubt that
<br>
configure option was checked...
<br>
<p>On Wed, Sep 16, 2015 at 7:13 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Did something change in the group structure in the last 24-48 hours?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-spare-groups groups are currently broken:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/jsquyres/git/ompi/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt;   CC       libdebuggers_la-ompi_debuggers.lo
</span><br>
<span class="quotelev1">&gt; In file included from ../../ompi/communicator/communicator.h:38:0,
</span><br>
<span class="quotelev1">&gt;                  from ../../ompi/mca/pml/base/pml_base_request.h:32,
</span><br>
<span class="quotelev1">&gt;                  from ompi_debuggers.c:67:
</span><br>
<span class="quotelev1">&gt; ../../ompi/group/group.h: In function &#226;&#128;&#152;ompi_group_get_proc_ptr&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt; ../../ompi/group/group.h:366:52: error: &#226;&#128;&#152;peer_id&#226;&#128;&#153; undeclared (first use in
</span><br>
<span class="quotelev1">&gt; this function)
</span><br>
<span class="quotelev1">&gt;              return ompi_group_dense_lookup (group, peer_id, allocate);
</span><br>
<span class="quotelev1">&gt;                                                     ^
</span><br>
<span class="quotelev1">&gt; ../../ompi/group/group.h:366:52: note: each undeclared identifier is
</span><br>
<span class="quotelev1">&gt; reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone have a look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18056.php">http://www.open-mpi.org/community/lists/devel/2015/09/18056.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18058.php">Howard Pritchard: "Re: [OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Previous message:</strong> <a href="18056.php">Jeff Squyres (jsquyres): "[OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>In reply to:</strong> <a href="18056.php">Jeff Squyres (jsquyres): "[OMPI devel] --enable-spare-groups build broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18062.php">Nathan Hjelm: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
<li><strong>Reply:</strong> <a href="18062.php">Nathan Hjelm: "Re: [OMPI devel] --enable-spare-groups build broken"</a>
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
