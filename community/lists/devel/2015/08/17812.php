<?
$subject_val = "[OMPI devel] reachable_netlink mca, libnl and libnl3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 07:36:21 2015" -->
<!-- isoreceived="20150824113621" -->
<!-- sent="Mon, 24 Aug 2015 20:36:20 +0900" -->
<!-- isosent="20150824113620" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] reachable_netlink mca, libnl and libnl3" -->
<!-- id="CAAkFZ5tKAvBjQjO2b2QCDWAi9TWxaw-QjRasG0tQxqRxiZCU4Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] reachable_netlink mca, libnl and libnl3<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 07:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17813.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Previous message:</strong> <a href="17811.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17813.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Reply:</strong> <a href="17813.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>I recently installed libnl3-devel rpm on my centos 7 box, reconfigured and
<br>
recompiled ompi, and ompi_info now crashes.
<br>
<p>it seems the root cause is an obscure conflict between libnl and libnl3.
<br>
libnl is indirectly required by the common_verbs mac (OFED libraries do
<br>
need it) and libnl3 is required by reachable_netlink mca when available.
<br>
<p>currently, there are two workarounds available
<br>
1. uninstall libln3-devel rpm, so reachable_netlink mca uses libnl
<br>
2. configure with --without-verbs so no mac requires libnl
<br>
<p>right now, my best bet would be not to use libnl3 when configure'd with
<br>
--verbs and OFED is available.
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17812/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17813.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Previous message:</strong> <a href="17811.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17813.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Reply:</strong> <a href="17813.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
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
