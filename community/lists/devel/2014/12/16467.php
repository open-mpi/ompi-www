<?
$subject_val = "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 08:07:30 2014" -->
<!-- isoreceived="20141209130730" -->
<!-- sent="Tue, 09 Dec 2014 22:07:20 +0900" -->
<!-- isosent="20141209130720" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12" -->
<!-- id="ef7b4mmyhjnjtdr9nmt1mvkk.1418130312638_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 08:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16468.php">Jeff Squyres (jsquyres): "[OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Previous message:</strong> <a href="16466.php">Piotr Lesnicki: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16470.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Reply:</strong> <a href="16470.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Reply:</strong> <a href="16488.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Piotr,
<br>
<p>Based on the ompi community rules, a pr should be made vs the master, so code can be reviewed and shacked a bit.
<br>
I already prepared such a pr based on your patch and i will push it tomorrow.
<br>
<p>Then the changes will be backported to the v1.8 branch, assuming this is not considered as a new feature.
<br>
<p>Ralph, can you please comment on that ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>Piotr Lesnicki &lt;piotr.lesnicki_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
<br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We indeed have a fix for XRC support on our branch at Bull and sorry I
</span><br>
<span class="quotelev1">&gt;neglected to contribute it, my bad&#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I join here the patch on top of current v1.6.6 (should I rather
</span><br>
<span class="quotelev1">&gt;submit it as a pull request ?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For v1.8+, a merge of the v1.6 code is not enough as openib connect
</span><br>
<span class="quotelev1">&gt;changed from xoob to udcm. I made a version on a pre-git state, so I
</span><br>
<span class="quotelev1">&gt;will update it and make a pull request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Piotr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;________________________________________
</span><br>
<span class="quotelev1">&gt;De : devel [devel-bounces_at_[hidden]] de la part de Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;Envoy&#195;&#169; : lundi 8 d&#195;&#169;cembre 2014 03:27
</span><br>
<span class="quotelev1">&gt;&#195;&#128; : Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Objet : Re: [OMPI devel] openmpi and XRC API from ofed-3.12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi Piotr,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;this  is quite an old thread now, but i did not see any support for XRC
</span><br>
<span class="quotelev1">&gt;with ofed 3.12 yet
</span><br>
<span class="quotelev1">&gt;(nor in trunk nor in v1.8)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;my understanding is that Bull already did something similar for the v1.6
</span><br>
<span class="quotelev1">&gt;series,
</span><br>
<span class="quotelev1">&gt;so let me put this the other way around :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;does Bull have any plan to contribute this work ?
</span><br>
<span class="quotelev1">&gt;(for example, publish a patch for the v1.6 series, or submit pull
</span><br>
<span class="quotelev1">&gt;request(s) for master and v1.8 branch)
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
<span class="quotelev1">&gt;On 2014/04/23 21:58, Piotr Lesnicki wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In OFED-3.12 the API for XRC has changed. I did not find
</span><br>
<span class="quotelev2">&gt;&gt; corresponding changes in Open MPI: for example the function
</span><br>
<span class="quotelev2">&gt;&gt; 'ibv_create_xrc_rcv_qp()' queried in openmpi configure script no
</span><br>
<span class="quotelev2">&gt;&gt; longer exists in ofed-3.12-rc1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are there any plans to support the new XRC API ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Piotr
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14583.php">http://www.open-mpi.org/community/lists/devel/2014/04/14583.php</a>
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
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16445.php">http://www.open-mpi.org/community/lists/devel/2014/12/16445.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16468.php">Jeff Squyres (jsquyres): "[OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Previous message:</strong> <a href="16466.php">Piotr Lesnicki: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16470.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Reply:</strong> <a href="16470.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Reply:</strong> <a href="16488.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
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
