<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 17:45:29 2014" -->
<!-- isoreceived="20141119224529" -->
<!-- sent="Wed, 19 Nov 2014 22:45:26 +0000" -->
<!-- isosent="20141119224526" -->
<!-- name="Hjelm, Nathan Thomas" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A9BFC4D_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D052BA63-B616-4EF2-83FD-0DACCE82A50C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0<br>
<strong>From:</strong> Hjelm, Nathan Thomas (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-19 17:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>Previous message:</strong> <a href="16321.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-327-gccaecf0"</a>
<li><strong>In reply to:</strong> <a href="16321.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-327-gccaecf0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>Reply:</strong> <a href="16323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes. Usnic, yoda, and smcuda need to be updated for the new interface. The warnings in opening I will fix.
<br>
<p><p>________________________________________
<br>
From: devel on behalf of Ralph Castain
<br>
Sent: Wednesday, November 19, 2014 3:15:07 PM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master      updated. dev-327-gccaecf0
<br>
<p>Was this commit intended to happen? It broke the trunk:
<br>
<p>btl_openib.c:119:9: warning: initialization from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.btl_atomic_fop = mca_btl_openib_atomic_fop,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_openib.c:119:9: warning: (near initialization for 'mca_btl_openib_module.super.btl_atomic_fop') [enabled by default]
<br>
btl_openib.c:120:9: warning: initialization from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.btl_atomic_cswap = mca_btl_openib_atomic_cswap,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_openib.c:120:9: warning: (near initialization for 'mca_btl_openib_module.super.btl_atomic_cswap') [enabled by default]
<br>
btl_openib.c: In function 'mca_btl_openib_prepare_src':
<br>
btl_openib.c:1456:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_openib.c:1450:30: warning: variable 'openib_btl' set but not used [-Wunused-but-set-variable]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_module_t *openib_btl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_openib_component.c: In function 'init_one_device':
<br>
btl_openib_component.c:2047:54: warning: comparison between 'enum &lt;anonymous&gt;' and 'mca_base_var_source_t' [-Wenum-compare]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_usnic_frag.c: In function 'recv_seg_constructor':
<br>
btl_usnic_frag.c:144:17: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg-&gt;rs_desc.des_remote = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_usnic_frag.c:145:17: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote_count'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg-&gt;rs_desc.des_remote_count = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_usnic_frag.c: In function 'send_frag_constructor':
<br>
btl_usnic_frag.c:168:9: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;desc-&gt;des_remote = frag-&gt;sf_base.uf_remote_seg;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_usnic_frag.c:169:9: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote_count'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;desc-&gt;des_remote_count = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [btl_usnic_frag.lo] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
btl_usnic_module.c: In function 'usnic_put':
<br>
btl_usnic_module.c:1107:56: error: 'struct mca_btl_base_descriptor_t' has no member named 'des_remote'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sf_base.uf_remote_seg[0].seg_addr.pval = desc-&gt;des_remote-&gt;seg_addr.pval;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_usnic_module.c: At top level:
<br>
btl_usnic_module.c:2325:9: error: unknown field 'btl_seg_size' specified in initializer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.btl_seg_size = sizeof(mca_btl_base_segment_t), /* seg size */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_usnic_module.c:2332:9: warning: initialization from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.btl_prepare_src = usnic_prepare_src,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_usnic_module.c:2332:9: warning: (near initialization for 'opal_btl_usnic_module_template.super.btl_prepare_src') [enabled by default]
<br>
btl_usnic_module.c:2333:9: error: unknown field 'btl_prepare_dst' specified in initializer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.btl_prepare_dst = usnic_prepare_dst,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_usnic_module.c:2333:9: warning: initialization from incompatible pointer type [enabled by default]
<br>
btl_usnic_module.c:2333:9: warning: (near initialization for 'opal_btl_usnic_module_template.super.btl_send') [enabled by default]
<br>
btl_usnic_module.c:2335:9: warning: initialization from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.btl_put = usnic_put,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
btl_usnic_module.c:2335:9: warning: (near initialization for 'opal_btl_usnic_module_template.super.btl_put') [enabled by default]
<br>
make[2]: *** [btl_usnic_module.lo] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p>Begin forwarded message:
<br>
<p>To: ompi-commits_at_[hidden]&lt;mailto:ompi-commits_at_[hidden]&gt;
<br>
Date: November 19, 2014 at 2:01:45 PM PST
<br>
From: gitdub_at_[hidden]&lt;mailto:gitdub_at_[hidden]&gt;
<br>
Subject: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-327-gccaecf0
<br>
Reply-To: devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<p>This is an automated email from the git hooks/post-receive script. It was
<br>
generated because a ref change was pushed to the repository containing
<br>
the project &quot;open-mpi/ompi&quot;.
<br>
<p>The branch, master has been updated
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  ccaecf0fd6c862877e6a1e2643f95fa956c87769 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  5a0a48c3c45a9ce7033684958d7ba8d2a4712ab9 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  2b579610f2d7e5bf9e0defb6871c5b0e1b9cc778 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  2a382c2ec1747ae6bab66fccd27a42b2193b058f (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  1a5349ec790d9d36039206eea08dad84390f380c (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  8f1a44e60e0d06d43222a4b805a770b6f5e88f45 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  bf7daac3882e37f005fbd169802da9e8a0ef5645 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  22625b005b055fe708b4112156d0961176797d50 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  60648e42315c10e58701012ef1ed16b0e26d659d (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  01106037824de9d2963bdc015a358bc6b1b36c19 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  45d1fac8af1a6bfe3300df9328e3cbbfa969b309 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  29e4e1c90a0defcc12dfbb077913e1a232271bba (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  24427639b6c8a3f18f04f02870fde0af0fbb85a5 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  5e7c77c57689e41cdb61c81878dcbbb9c4644bba (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  90554d0f957c6723f1d0ae4e94a797453fba2b31 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  41220672368a3006e19c442bde8f093847b101b9 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  38e961193074d382983d000e68adb721aaf3df7d (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  7c43b566d223f6f56c460f45312fab304dfb1c65 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  3ea10476a4e0b8c45a6a95aefb3aec6a6b273970 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  4ccb20b09744342e86c16d08e2b4db20baab773c (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  271818f887f728ff472fef30912c21986ef591a6 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  2a70238f4d964c2a8e4d194286ec29c36b52fad0 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  249e5e009ff1ef82e5d6391f43edcf4adabd6d11 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  ee2b1110119a2b037c3f866a4c83a01d3b6bddb7 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  49ff5a79d092c7008817f41446df66bae705a169 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  e03956e0999071504c5b8d7941d53e79b8a3649f (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  c61e0171779e835c4583b1f5ff50ea6e1d38accc (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  ec33374339d5ed1849eb3979803a24cece0d6bf1 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  5936411a07644332af96672a73c00137875f82b1 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  b75bb8aea711db28d4446aded5be1618bc4fe3cb (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  66bd698eaf6b6bfac342a90e42a9e0942559ea97 (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;via  2d381f800f2ef997ce0e2022ea63be957d0860ef (commit)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from  6a19bf85dde5306f559f09952cf3919d97f52502 (commit)
<br>
<p>Those revisions listed above that are new to this repository have
<br>
not appeared on any other notification email; so we list those
<br>
revisions in full, below.
<br>
<p><p>hooks/post-receive
<br>
<pre>
--
open-mpi/ompi
_______________________________________________
ompi-commits mailing list
ompi-commits_at_[hidden]&lt;mailto:ompi-commits_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>Previous message:</strong> <a href="16321.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-327-gccaecf0"</a>
<li><strong>In reply to:</strong> <a href="16321.php">Ralph Castain: "[OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-327-gccaecf0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>Reply:</strong> <a href="16323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
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
