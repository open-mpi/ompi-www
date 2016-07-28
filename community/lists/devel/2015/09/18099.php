<?
$subject_val = "Re: [OMPI devel] problems compiling ompi master";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 12:29:10 2015" -->
<!-- isoreceived="20150922162910" -->
<!-- sent="Tue, 22 Sep 2015 10:29:09 -0600" -->
<!-- isosent="20150922162909" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problems compiling ompi master" -->
<!-- id="20150922162909.GB2859_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj6S-kEBXfNp=PX65kO2pyqCYvaUFn9NoktTYbuQxssEXg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problems compiling ompi master<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-22 12:29:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18100.php">Ralph Castain: "[OMPI devel] Debugging core files on Mac"</a>
<li><strong>Previous message:</strong> <a href="18098.php">Howard Pritchard: "[OMPI devel] problems compiling ompi master"</a>
<li><strong>In reply to:</strong> <a href="18098.php">Howard Pritchard: "[OMPI devel] problems compiling ompi master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hah, opps. Typo in the coverity fixes. Fixing now.
<br>
<p>-Nathan
<br>
<p>On Tue, Sep 22, 2015 at 10:24:29AM -0600, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt;    Hi Folks,
</span><br>
<span class="quotelev1">&gt;    Is anyone seeing a problem compiling ompi today?
</span><br>
<span class="quotelev1">&gt;    This is what I'm getting
</span><br>
<span class="quotelev1">&gt;      CC       osc_pt2pt_passive_target.lo
</span><br>
<span class="quotelev1">&gt;    In file included from ../../../../opal/include/opal_config.h:2802:0,
</span><br>
<span class="quotelev1">&gt;                     from ../../../../ompi/include/ompi_config.h:29,
</span><br>
<span class="quotelev1">&gt;                     from osc_pt2pt_active_target.c:24:
</span><br>
<span class="quotelev1">&gt;    osc_pt2pt_active_target.c: In function 'ompi_osc_pt2pt_get_peers':
</span><br>
<span class="quotelev1">&gt;    osc_pt2pt_active_target.c:84:35: error: 'ompi_osc_rdma_peer_t' undeclared
</span><br>
<span class="quotelev1">&gt;    (first use in this function)
</span><br>
<span class="quotelev1">&gt;         peers = calloc (size, sizeof (ompi_osc_rdma_peer_t *));
</span><br>
<span class="quotelev1">&gt;                                       ^
</span><br>
<span class="quotelev1">&gt;    ../../../../opal/include/opal_config_bottom.h:323:61: note: in definition
</span><br>
<span class="quotelev1">&gt;    of macro 'calloc'
</span><br>
<span class="quotelev1">&gt;     #    define calloc(nmembers, size) opal_calloc((nmembers), (size),
</span><br>
<span class="quotelev1">&gt;    __FILE__, __LINE__)
</span><br>
<span class="quotelev1">&gt;                                                                 ^
</span><br>
<span class="quotelev1">&gt;    osc_pt2pt_active_target.c:84:35: note: each undeclared identifier is
</span><br>
<span class="quotelev1">&gt;    reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt;         peers = calloc (size, sizeof (ompi_osc_rdma_peer_t *));
</span><br>
<span class="quotelev1">&gt;                                       ^
</span><br>
<span class="quotelev1">&gt;    ../../../../opal/include/opal_config_bottom.h:323:61: note: in definition
</span><br>
<span class="quotelev1">&gt;    of macro 'calloc'
</span><br>
<span class="quotelev1">&gt;     #    define calloc(nmembers, size) opal_calloc((nmembers), (size),
</span><br>
<span class="quotelev1">&gt;    __FILE__, __LINE__)
</span><br>
<span class="quotelev1">&gt;                                                                 ^
</span><br>
<span class="quotelev1">&gt;    osc_pt2pt_active_target.c:84:57: error: expected expression before ')'
</span><br>
<span class="quotelev1">&gt;    token
</span><br>
<span class="quotelev1">&gt;         peers = calloc (size, sizeof (ompi_osc_rdma_peer_t *));
</span><br>
<span class="quotelev1">&gt;                                                             ^
</span><br>
<span class="quotelev1">&gt;    ../../../../opal/include/opal_config_bottom.h:323:61: note: in definition
</span><br>
<span class="quotelev1">&gt;    of macro 'calloc'
</span><br>
<span class="quotelev1">&gt;     #    define calloc(nmembers, size) opal_calloc((nmembers), (size),
</span><br>
<span class="quotelev1">&gt;    __FILE__, __LINE__)
</span><br>
<span class="quotelev1">&gt;                                                                 ^
</span><br>
<span class="quotelev1">&gt;    Howard
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18098.php">http://www.open-mpi.org/community/lists/devel/2015/09/18098.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18099/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18100.php">Ralph Castain: "[OMPI devel] Debugging core files on Mac"</a>
<li><strong>Previous message:</strong> <a href="18098.php">Howard Pritchard: "[OMPI devel] problems compiling ompi master"</a>
<li><strong>In reply to:</strong> <a href="18098.php">Howard Pritchard: "[OMPI devel] problems compiling ompi master"</a>
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
