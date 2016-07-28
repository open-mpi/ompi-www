<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 09:47:42 2014" -->
<!-- isoreceived="20141120144742" -->
<!-- sent="Thu, 20 Nov 2014 14:47:23 +0000" -->
<!-- isosent="20141120144723" -->
<!-- name="Grant, Ryan Eric (-EXP)" -->
<!-- email="regrant_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0" -->
<!-- id="1416494855019.15189_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7AA40768-52CB-46E8-8305-6AA4FE1F4F40_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0<br>
<strong>From:</strong> Grant, Ryan Eric (-EXP) (<em>regrant_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-20 09:47:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16325.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI SC'14 BOF slides"</a>
<li><strong>Previous message:</strong> <a href="16323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>In reply to:</strong> <a href="16323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We will be updating the Portals4 BTL.

--Ryan
________________________________________
From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
Sent: Thursday, November 20, 2014 6:26 AM
To: Open MPI Developers List
Subject: [EXTERNAL] Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master       updated. dev-327-gccaecf0

Nathan and I talked last night.

He reverted the BTL updates until after SC and the US Thanksgiving holiday next week.

I will update the usNIC BTL during the week of Dec 1.

Who will be updating the other BTLs that need updating?



On Nov 19, 2014, at 4:45 PM, Hjelm, Nathan Thomas &lt;hjelmn_at_[hidden]&gt; wrote:

&gt; Yes. Usnic, yoda, and smcuda need to be updated for the new interface. The warnings in opening I will fix.
&gt;
&gt;
&gt; ________________________________________
&gt; From: devel on behalf of Ralph Castain
&gt; Sent: Wednesday, November 19, 2014 3:15:07 PM
&gt; To: Open MPI Developers
&gt; Subject: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master      updated. dev-327-gccaecf0
&gt;
&gt; Was this commit intended to happen? It broke the trunk:
&gt;
&gt; btl_openib.c:119:9: warning: initialization from incompatible pointer type [enabled by default]
&gt;         .btl_atomic_fop = mca_btl_openib_atomic_fop,
&gt;         ^
&gt; btl_openib.c:119:9: warning: (near initialization for 'mca_btl_openib_module.super.btl_atomic_fop') [enabled by default]
&gt; btl_openib.c:120:9: warning: initialization from incompatible pointer type [enabled by default]
&gt;         .btl_atomic_cswap = mca_btl_openib_atomic_cswap,
&gt;         ^
&gt; btl_openib.c:120:9: warning: (near initialization for 'mca_btl_openib_module.super.btl_atomic_cswap') [enabled by default]
&gt; btl_openib.c: In function 'mca_btl_openib_prepare_src':
&gt; btl_openib.c:1456:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
&gt;     int rc;
&gt;         ^
&gt; btl_openib.c:1450:30: warning: variable 'openib_btl' set but not used [-Wunused-but-set-variable]
&gt;     mca_btl_openib_module_t *openib_btl;
&gt;                              ^
&gt; btl_openib_component.c: In function 'init_one_device':
&gt; btl_openib_component.c:2047:54: warning: comparison between 'enum &lt;anonymous&gt;' and 'mca_base_var_source_t' [-Wenum-compare]
&gt;             else if (BTL_OPENIB_RQ_SOURCE_DEVICE_INI ==
&gt;                                                      ^
&gt; btl_usnic_frag.c: In function 'recv_seg_constructor':
&gt; btl_usnic_frag.c:144:17: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote'
&gt;     seg-&gt;rs_desc.des_remote = NULL;
&gt;                 ^
&gt; btl_usnic_frag.c:145:17: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote_count'
&gt;     seg-&gt;rs_desc.des_remote_count = 0;
&gt;                 ^
&gt; btl_usnic_frag.c: In function 'send_frag_constructor':
&gt; btl_usnic_frag.c:168:9: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote'
&gt;     desc-&gt;des_remote = frag-&gt;sf_base.uf_remote_seg;
&gt;         ^
&gt; btl_usnic_frag.c:169:9: error: 'mca_btl_base_descriptor_t' has no member named 'des_remote_count'
&gt;     desc-&gt;des_remote_count = 0;
&gt;         ^
&gt; make[2]: *** [btl_usnic_frag.lo] Error 1
&gt; make[2]: *** Waiting for unfinished jobs....
&gt; btl_usnic_module.c: In function 'usnic_put':
&gt; btl_usnic_module.c:1107:56: error: 'struct mca_btl_base_descriptor_t' has no member named 'des_remote'
&gt;     frag-&gt;sf_base.uf_remote_seg[0].seg_addr.pval = desc-&gt;des_remote-&gt;seg_addr.pval;
&gt;                                                        ^
&gt; btl_usnic_module.c: At top level:
&gt; btl_usnic_module.c:2325:9: error: unknown field 'btl_seg_size' specified in initializer
&gt;         .btl_seg_size = sizeof(mca_btl_base_segment_t), /* seg size */
&gt;         ^
&gt; btl_usnic_module.c:2332:9: warning: initialization from incompatible pointer type [enabled by default]
&gt;         .btl_prepare_src = usnic_prepare_src,
&gt;         ^
&gt; btl_usnic_module.c:2332:9: warning: (near initialization for 'opal_btl_usnic_module_template.super.btl_prepare_src') [enabled by default]
&gt; btl_usnic_module.c:2333:9: error: unknown field 'btl_prepare_dst' specified in initializer
&gt;         .btl_prepare_dst = usnic_prepare_dst,
&gt;         ^
&gt; btl_usnic_module.c:2333:9: warning: initialization from incompatible pointer type [enabled by default]
&gt; btl_usnic_module.c:2333:9: warning: (near initialization for 'opal_btl_usnic_module_template.super.btl_send') [enabled by default]
&gt; btl_usnic_module.c:2335:9: warning: initialization from incompatible pointer type [enabled by default]
&gt;         .btl_put = usnic_put,
&gt;         ^
&gt; btl_usnic_module.c:2335:9: warning: (near initialization for 'opal_btl_usnic_module_template.super.btl_put') [enabled by default]
&gt; make[2]: *** [btl_usnic_module.lo] Error 1
&gt; make[1]: *** [all-recursive] Error 1
&gt; make: *** [all-recursive] Error 1
&gt;
&gt;
&gt;
&gt; Begin forwarded message:
&gt;
&gt; To: ompi-commits_at_[hidden]&lt;mailto:ompi-commits_at_[hidden]&gt;
&gt; Date: November 19, 2014 at 2:01:45 PM PST
&gt; From: gitdub_at_[hidden]&lt;mailto:gitdub_at_[hidden]&gt;
&gt; Subject: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-327-gccaecf0
&gt; Reply-To: devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&gt;
&gt; This is an automated email from the git hooks/post-receive script. It was
&gt; generated because a ref change was pushed to the repository containing
&gt; the project &quot;open-mpi/ompi&quot;.
&gt;
&gt; The branch, master has been updated
&gt;      via  ccaecf0fd6c862877e6a1e2643f95fa956c87769 (commit)
&gt;      via  5a0a48c3c45a9ce7033684958d7ba8d2a4712ab9 (commit)
&gt;      via  2b579610f2d7e5bf9e0defb6871c5b0e1b9cc778 (commit)
&gt;      via  2a382c2ec1747ae6bab66fccd27a42b2193b058f (commit)
&gt;      via  1a5349ec790d9d36039206eea08dad84390f380c (commit)
&gt;      via  8f1a44e60e0d06d43222a4b805a770b6f5e88f45 (commit)
&gt;      via  bf7daac3882e37f005fbd169802da9e8a0ef5645 (commit)
&gt;      via  22625b005b055fe708b4112156d0961176797d50 (commit)
&gt;      via  60648e42315c10e58701012ef1ed16b0e26d659d (commit)
&gt;      via  01106037824de9d2963bdc015a358bc6b1b36c19 (commit)
&gt;      via  45d1fac8af1a6bfe3300df9328e3cbbfa969b309 (commit)
&gt;      via  29e4e1c90a0defcc12dfbb077913e1a232271bba (commit)
&gt;      via  24427639b6c8a3f18f04f02870fde0af0fbb85a5 (commit)
&gt;      via  5e7c77c57689e41cdb61c81878dcbbb9c4644bba (commit)
&gt;      via  90554d0f957c6723f1d0ae4e94a797453fba2b31 (commit)
&gt;      via  41220672368a3006e19c442bde8f093847b101b9 (commit)
&gt;      via  38e961193074d382983d000e68adb721aaf3df7d (commit)
&gt;      via  7c43b566d223f6f56c460f45312fab304dfb1c65 (commit)
&gt;      via  3ea10476a4e0b8c45a6a95aefb3aec6a6b273970 (commit)
&gt;      via  4ccb20b09744342e86c16d08e2b4db20baab773c (commit)
&gt;      via  271818f887f728ff472fef30912c21986ef591a6 (commit)
&gt;      via  2a70238f4d964c2a8e4d194286ec29c36b52fad0 (commit)
&gt;      via  249e5e009ff1ef82e5d6391f43edcf4adabd6d11 (commit)
&gt;      via  ee2b1110119a2b037c3f866a4c83a01d3b6bddb7 (commit)
&gt;      via  49ff5a79d092c7008817f41446df66bae705a169 (commit)
&gt;      via  e03956e0999071504c5b8d7941d53e79b8a3649f (commit)
&gt;      via  c61e0171779e835c4583b1f5ff50ea6e1d38accc (commit)
&gt;      via  ec33374339d5ed1849eb3979803a24cece0d6bf1 (commit)
&gt;      via  5936411a07644332af96672a73c00137875f82b1 (commit)
&gt;      via  b75bb8aea711db28d4446aded5be1618bc4fe3cb (commit)
&gt;      via  66bd698eaf6b6bfac342a90e42a9e0942559ea97 (commit)
&gt;      via  2d381f800f2ef997ce0e2022ea63be957d0860ef (commit)
&gt;     from  6a19bf85dde5306f559f09952cf3919d97f52502 (commit)
&gt;
&gt; Those revisions listed above that are new to this repository have
&gt; not appeared on any other notification email; so we list those
&gt; revisions in full, below.
&gt;
&gt;
&gt; hooks/post-receive
&gt; --
&gt; open-mpi/ompi
&gt; _______________________________________________
&gt; ompi-commits mailing list
&gt; ompi-commits_at_[hidden]&lt;mailto:ompi-commits_at_[hidden]&gt;
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16322.php">http://www.open-mpi.org/community/lists/devel/2014/11/16322.php</a>


--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16323.php">http://www.open-mpi.org/community/lists/devel/2014/11/16323.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16325.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI SC'14 BOF slides"</a>
<li><strong>Previous message:</strong> <a href="16323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
<li><strong>In reply to:</strong> <a href="16323.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-327-gccaecf0"</a>
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
