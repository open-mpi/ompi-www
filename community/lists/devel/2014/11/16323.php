<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 08:26:27 2014" -->
<!-- isoreceived="20141120132627" -->
<!-- sent="Thu, 20 Nov 2014 13:26:26 +0000" -->
<!-- isosent="20141120132626" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0" -->
<!-- id="7AA40768-52CB-46E8-8305-6AA4FE1F4F40_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A9BFC4D_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-20 08:26:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16324.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Re: Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>Previous message:</strong> <a href="16322.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>In reply to:</strong> <a href="16322.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16324.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Re: Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>Reply:</strong> <a href="16324.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Re: Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan and I talked last night.
<br>
<p>He reverted the BTL updates until after SC and the US Thanksgiving holiday next week.
<br>
<p>I will update the usNIC BTL during the week of Dec 1.
<br>
<p>Who will be updating the other BTLs that need updating?
<br>
<p><p><p>On Nov 19, 2014, at 4:45 PM, Hjelm, Nathan Thomas &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes. Usnic, yoda, and smcuda need to be updated for the new interface. The warnings in opening I will fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel on behalf of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, November 19, 2014 3:15:07 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master      updated. dev-327-gccaecf0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Was this commit intended to happen? It broke the trunk:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl_openib.c:119:9: warning: initialization from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt;         .btl_atomic_fop = mca_btl_openib_atomic_fop,
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; btl_openib.c:119:9: warning: (near initialization for 'mca_btl_openib_module.super.btl_atomic_fop') [enabled by default]
</span><br>
<span class="quotelev1">&gt; btl_openib.c:120:9: warning: initialization from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt;         .btl_atomic_cswap = mca_btl_openib_atomic_cswap,
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; btl_openib.c:120:9: warning: (near initialization for 'mca_btl_openib_module.super.btl_atomic_cswap') [enabled by default]
</span><br>
<span class="quotelev1">&gt; btl_openib.c: In function 'mca_btl_openib_prepare_src':
</span><br>
<span class="quotelev1">&gt; btl_openib.c:1456:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
</span><br>
<span class="quotelev1">&gt;     int rc;
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; btl_openib.c:1450:30: warning: variable 'openib_btl' set but not used [-Wunused-but-set-variable]
</span><br>
<span class="quotelev1">&gt;     mca_btl_openib_module_t *openib_btl;
</span><br>
<span class="quotelev1">&gt;                              ^
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c: In function 'init_one_device':
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c:2047:54: warning: comparison between 'enum &lt;anonymous&gt;' and 'mca_base_var_source_t' [-Wenum-compare]
</span><br>
<span class="quotelev1">&gt;             else if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
</span><br>
<span class="quotelev1">&gt;                                                      ^
</span><br>
<span class="quotelev1">&gt; btl_usnic_frag.c: In function 'recv_seg_constructor':
</span><br>
<span class="quotelev1">&gt; btl_usnic_frag.c:144:17: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote'
</span><br>
<span class="quotelev1">&gt;     seg-&gt;rs_desc.des_remote = NULL;
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt; btl_usnic_frag.c:145:17: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote_count'
</span><br>
<span class="quotelev1">&gt;     seg-&gt;rs_desc.des_remote_count = 0;
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt; btl_usnic_frag.c: In function 'send_frag_constructor':
</span><br>
<span class="quotelev1">&gt; btl_usnic_frag.c:168:9: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote'
</span><br>
<span class="quotelev1">&gt;     desc-&gt;des_remote = frag-&gt;sf_base.uf_remote_seg;
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; btl_usnic_frag.c:169:9: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote_count'
</span><br>
<span class="quotelev1">&gt;     desc-&gt;des_remote_count = 0;
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [btl_usnic_frag.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c: In function 'usnic_put':
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c:1107:56: error: 'struct mca_btl_base_descriptor_t' has no member named 'des_remote'
</span><br>
<span class="quotelev1">&gt;     frag-&gt;sf_base.uf_remote_seg[0].seg_addr.pval = desc-&gt;des_remote-&gt;seg_addr.pval;
</span><br>
<span class="quotelev1">&gt;                                                        ^
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c: At top level:
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c:2325:9: error: unknown field 'btl_seg_size' specified in initializer
</span><br>
<span class="quotelev1">&gt;         .btl_seg_size = sizeof(mca_btl_base_segment_t), /* seg size */
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c:2332:9: warning: initialization from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt;         .btl_prepare_src = usnic_prepare_src,
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c:2332:9: warning: (near initialization for 'opal_btl_usnic_module_template.super.btl_prepare_src') [enabled by default]
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c:2333:9: error: unknown field 'btl_prepare_dst' specified in initializer
</span><br>
<span class="quotelev1">&gt;         .btl_prepare_dst = usnic_prepare_dst,
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c:2333:9: warning: initialization from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c:2333:9: warning: (near initialization for 'opal_btl_usnic_module_template.super.btl_send') [enabled by default]
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c:2335:9: warning: initialization from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt;         .btl_put = usnic_put,
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; btl_usnic_module.c:2335:9: warning: (near initialization for 'opal_btl_usnic_module_template.super.btl_put') [enabled by default]
</span><br>
<span class="quotelev1">&gt; make[2]: *** [btl_usnic_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To: ompi-commits_at_[hidden]&lt;mailto:ompi-commits_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: November 19, 2014 at 2:01:45 PM PST
</span><br>
<span class="quotelev1">&gt; From: gitdub_at_[hidden]&lt;mailto:gitdub_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-327-gccaecf0
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;      via  ccaecf0fd6c862877e6a1e2643f95fa956c87769 (commit)
</span><br>
<span class="quotelev1">&gt;      via  5a0a48c3c45a9ce7033684958d7ba8d2a4712ab9 (commit)
</span><br>
<span class="quotelev1">&gt;      via  2b579610f2d7e5bf9e0defb6871c5b0e1b9cc778 (commit)
</span><br>
<span class="quotelev1">&gt;      via  2a382c2ec1747ae6bab66fccd27a42b2193b058f (commit)
</span><br>
<span class="quotelev1">&gt;      via  1a5349ec790d9d36039206eea08dad84390f380c (commit)
</span><br>
<span class="quotelev1">&gt;      via  8f1a44e60e0d06d43222a4b805a770b6f5e88f45 (commit)
</span><br>
<span class="quotelev1">&gt;      via  bf7daac3882e37f005fbd169802da9e8a0ef5645 (commit)
</span><br>
<span class="quotelev1">&gt;      via  22625b005b055fe708b4112156d0961176797d50 (commit)
</span><br>
<span class="quotelev1">&gt;      via  60648e42315c10e58701012ef1ed16b0e26d659d (commit)
</span><br>
<span class="quotelev1">&gt;      via  01106037824de9d2963bdc015a358bc6b1b36c19 (commit)
</span><br>
<span class="quotelev1">&gt;      via  45d1fac8af1a6bfe3300df9328e3cbbfa969b309 (commit)
</span><br>
<span class="quotelev1">&gt;      via  29e4e1c90a0defcc12dfbb077913e1a232271bba (commit)
</span><br>
<span class="quotelev1">&gt;      via  24427639b6c8a3f18f04f02870fde0af0fbb85a5 (commit)
</span><br>
<span class="quotelev1">&gt;      via  5e7c77c57689e41cdb61c81878dcbbb9c4644bba (commit)
</span><br>
<span class="quotelev1">&gt;      via  90554d0f957c6723f1d0ae4e94a797453fba2b31 (commit)
</span><br>
<span class="quotelev1">&gt;      via  41220672368a3006e19c442bde8f093847b101b9 (commit)
</span><br>
<span class="quotelev1">&gt;      via  38e961193074d382983d000e68adb721aaf3df7d (commit)
</span><br>
<span class="quotelev1">&gt;      via  7c43b566d223f6f56c460f45312fab304dfb1c65 (commit)
</span><br>
<span class="quotelev1">&gt;      via  3ea10476a4e0b8c45a6a95aefb3aec6a6b273970 (commit)
</span><br>
<span class="quotelev1">&gt;      via  4ccb20b09744342e86c16d08e2b4db20baab773c (commit)
</span><br>
<span class="quotelev1">&gt;      via  271818f887f728ff472fef30912c21986ef591a6 (commit)
</span><br>
<span class="quotelev1">&gt;      via  2a70238f4d964c2a8e4d194286ec29c36b52fad0 (commit)
</span><br>
<span class="quotelev1">&gt;      via  249e5e009ff1ef82e5d6391f43edcf4adabd6d11 (commit)
</span><br>
<span class="quotelev1">&gt;      via  ee2b1110119a2b037c3f866a4c83a01d3b6bddb7 (commit)
</span><br>
<span class="quotelev1">&gt;      via  49ff5a79d092c7008817f41446df66bae705a169 (commit)
</span><br>
<span class="quotelev1">&gt;      via  e03956e0999071504c5b8d7941d53e79b8a3649f (commit)
</span><br>
<span class="quotelev1">&gt;      via  c61e0171779e835c4583b1f5ff50ea6e1d38accc (commit)
</span><br>
<span class="quotelev1">&gt;      via  ec33374339d5ed1849eb3979803a24cece0d6bf1 (commit)
</span><br>
<span class="quotelev1">&gt;      via  5936411a07644332af96672a73c00137875f82b1 (commit)
</span><br>
<span class="quotelev1">&gt;      via  b75bb8aea711db28d4446aded5be1618bc4fe3cb (commit)
</span><br>
<span class="quotelev1">&gt;      via  66bd698eaf6b6bfac342a90e42a9e0942559ea97 (commit)
</span><br>
<span class="quotelev1">&gt;      via  2d381f800f2ef997ce0e2022ea63be957d0860ef (commit)
</span><br>
<span class="quotelev1">&gt;     from  6a19bf85dde5306f559f09952cf3919d97f52502 (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ompi-commits mailing list
</span><br>
<span class="quotelev1">&gt; ompi-commits_at_[hidden]&lt;mailto:ompi-commits_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16322.php">http://www.open-mpi.org/community/lists/devel/2014/11/16322.php</a>
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
<li><strong>Next message:</strong> <a href="16324.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Re: Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>Previous message:</strong> <a href="16322.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>In reply to:</strong> <a href="16322.php">Hjelm, Nathan Thomas: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16324.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Re: Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>Reply:</strong> <a href="16324.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Re: Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
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
