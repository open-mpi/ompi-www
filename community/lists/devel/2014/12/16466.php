<?
$subject_val = "Re: [OMPI devel] openmpi and XRC API from ofed-3.12";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 03:56:47 2014" -->
<!-- isoreceived="20141209085647" -->
<!-- sent="Tue, 9 Dec 2014 08:56:45 +0000" -->
<!-- isosent="20141209085645" -->
<!-- name="Piotr Lesnicki" -->
<!-- email="piotr.lesnicki_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi and XRC API from ofed-3.12" -->
<!-- id="4126619285568F4B951A3FFA1C084F62010F665978_at_BUMSG2WM.fr.ad.bull.net" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="54850C95.907_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi and XRC API from ofed-3.12<br>
<strong>From:</strong> Piotr Lesnicki (<em>piotr.lesnicki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 03:56:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16467.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Previous message:</strong> <a href="16465.php">Gilles Gouaillardet: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>In reply to:</strong> <a href="16445.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

We indeed have a fix for XRC support on our branch at Bull and sorry I
neglected to contribute it, my bad&#133;

I join here the patch on top of current v1.6.6 (should I rather
submit it as a pull request ?).

For v1.8+, a merge of the v1.6 code is not enough as openib connect
changed from xoob to udcm. I made a version on a pre-git state, so I
will update it and make a pull request.

Piotr




________________________________________
De : devel [devel-bounces_at_[hidden]] de la part de Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
Envoy&#233; : lundi 8 d&#233;cembre 2014 03:27
&#192; : Open MPI Developers
Objet : Re: [OMPI devel] openmpi and XRC API from ofed-3.12

Hi Piotr,

this  is quite an old thread now, but i did not see any support for XRC
with ofed 3.12 yet
(nor in trunk nor in v1.8)

my understanding is that Bull already did something similar for the v1.6
series,
so let me put this the other way around :

does Bull have any plan to contribute this work ?
(for example, publish a patch for the v1.6 series, or submit pull
request(s) for master and v1.8 branch)

Cheers,

Gilles

On 2014/04/23 21:58, Piotr Lesnicki wrote:
&gt; Hi,
&gt;
&gt; In OFED-3.12 the API for XRC has changed. I did not find
&gt; corresponding changes in Open MPI: for example the function
&gt; 'ibv_create_xrc_rcv_qp()' queried in openmpi configure script no
&gt; longer exists in ofed-3.12-rc1.
&gt;
&gt; Are there any plans to support the new XRC API ?
&gt;
&gt;
&gt; --
&gt; Piotr
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14583.php">http://www.open-mpi.org/community/lists/devel/2014/04/14583.php</a>

_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16445.php">http://www.open-mpi.org/community/lists/devel/2014/12/16445.php</a>

<br>

<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16466/xrc-v1.6.6.patch">xrc-v1.6.6.patch</a>
</ul>
<!-- attachment="xrc-v1.6.6.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16467.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Previous message:</strong> <a href="16465.php">Gilles Gouaillardet: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>In reply to:</strong> <a href="16445.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi and XRC API from ofed-3.12"</a>
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
