<?
$subject_val = "Re: [OMPI devel] OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 07:39:08 2014" -->
<!-- isoreceived="20141210123908" -->
<!-- sent="Wed, 10 Dec 2014 21:38:55 +0900" -->
<!-- isosent="20141210123855" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12" -->
<!-- id="u3lv2flc0l8vua0ou42gxyud.1418215135063_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-10 07:38:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16491.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Previous message:</strong> <a href="16489.php">Piotr Lesnicki: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I already figured this out and did the port :-)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Piotr Lesnicki &lt;piotr.lesnicki_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles, the patch I sent is vs v1.6, so I prepare a patch vs master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The patch on v1.6 can not apply on master because of changes in the
</span><br>
<span class="quotelev1">&gt;btl openib: connecting XRC queues has changed from XOOB to UDCM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Piotr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;________________________________________
</span><br>
<span class="quotelev1">&gt;De : devel [devel-bounces_at_[hidden]] de la part de Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;Envoy&#195;&#169; : mercredi 10 d&#195;&#169;cembre 2014 09:20
</span><br>
<span class="quotelev1">&gt;&#195;&#128; : Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Objet : Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Piotr and all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;i issued PR #313 (vs master) based on your patch:
</span><br>
<span class="quotelev1">&gt;<a href="https://github.com/open-mpi/ompi/pull/313">https://github.com/open-mpi/ompi/pull/313</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;could you please have a look at it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 2014/12/09 22:07, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Piotr,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Based on the ompi community rules, a pr should be made vs the master, so code can be reviewed and shacked a bit.
</span><br>
<span class="quotelev2">&gt;&gt; I already prepared such a pr based on your patch and i will push it tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then the changes will be backported to the v1.8 branch, assuming this is not considered as a new feature.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, can you please comment on that ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Piotr Lesnicki &lt;piotr.lesnicki_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We indeed have a fix for XRC support on our branch at Bull and sorry I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; neglected to contribute it, my bad&#226;&#128;&#166;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I join here the patch on top of current v1.6.6 (should I rather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; submit it as a pull request ?).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For v1.8+, a merge of the v1.6 code is not enough as openib connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changed from xoob to udcm. I made a version on a pre-git state, so I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will update it and make a pull request.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Piotr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; De : devel [devel-bounces_at_[hidden]] de la part de Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Envoy&#195;&#169; : lundi 8 d&#195;&#169;cembre 2014 03:27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#195;&#128; : Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Objet : Re: [OMPI devel] openmpi and XRC API from ofed-3.12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Piotr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this  is quite an old thread now, but i did not see any support for XRC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with ofed 3.12 yet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (nor in trunk nor in v1.8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my understanding is that Bull already did something similar for the v1.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; series,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so let me put this the other way around :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does Bull have any plan to contribute this work ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (for example, publish a patch for the v1.6 series, or submit pull
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request(s) for master and v1.8 branch)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/04/23 21:58, Piotr Lesnicki wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In OFED-3.12 the API for XRC has changed. I did not find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; corresponding changes in Open MPI: for example the function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'ibv_create_xrc_rcv_qp()' queried in openmpi configure script no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; longer exists in ofed-3.12-rc1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are there any plans to support the new XRC API ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Piotr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14583.php">http://www.open-mpi.org/community/lists/devel/2014/04/14583.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16445.php">http://www.open-mpi.org/community/lists/devel/2014/12/16445.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16467.php">http://www.open-mpi.org/community/lists/devel/2014/12/16467.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16488.php">http://www.open-mpi.org/community/lists/devel/2014/12/16488.php</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16489.php">http://www.open-mpi.org/community/lists/devel/2014/12/16489.php</a></span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16491.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Previous message:</strong> <a href="16489.php">Piotr Lesnicki: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
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
