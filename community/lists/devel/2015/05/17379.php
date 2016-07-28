<?
$subject_val = "Re: [OMPI devel] is anyone seeing this on their intel/inifinipath	cluster?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 07:57:21 2015" -->
<!-- isoreceived="20150504115721" -->
<!-- sent="Mon, 4 May 2015 11:57:19 +0000" -->
<!-- isosent="20150504115719" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] is anyone seeing this on their intel/inifinipath	cluster?" -->
<!-- id="0c1122dca2af4bad844c2f87df4acc38_at_HQMAIL102.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj5xAWSQJcZ6=orC3iomM42-5Sn4LZ6RGeRxZKHp3RHtrA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] is anyone seeing this on their intel/inifinipath	cluster?<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-04 07:57:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] is anyone seeing this on their	intel/inifinipath	cluster?"</a>
<li><strong>Previous message:</strong> <a href="17378.php">Orion Poplawski: "Re: [OMPI devel] segfault in test"</a>
<li><strong>In reply to:</strong> <a href="17377.php">Howard Pritchard: "[OMPI devel] is anyone seeing this on their intel/inifinipath cluster?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] is anyone seeing this on their	intel/inifinipath	cluster?"</a>
<li><strong>Reply:</strong> <a href="17380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] is anyone seeing this on their	intel/inifinipath	cluster?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing it also on my cluster too.
<br>

<br>
[ivy4:27085] mca_base_component_repository_open: unable to open mca_btl_usnic: /ivylogin/home/rvandevaart/ompi-repos/ompi-master-uvm/64-dbg/lib/libmca_common_libfabric.so.0: undefined symbol: psmx_eq_open (ignored)
<br>
[ivy4:27085] mca_base_component_repository_open: unable to open mca_mtl_ofi: /ivylogin/home/rvandevaart/ompi-repos/ompi-master-uvm/64-dbg/lib/libmca_common_libfabric.so.0: undefined symbol: psmx_eq_open (ignored)
<br>

<br>
Rolf
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Howard Pritchard
<br>
Sent: Friday, May 01, 2015 6:08 PM
<br>
To: Open MPI Developers List
<br>
Subject: [OMPI devel] is anyone seeing this on their intel/inifinipath cluster?
<br>

<br>
Hi Folks,
<br>

<br>
I'm doing some work with master on a intel/infinipath system and there some odd undefined
<br>
symbols errors showing up:
<br>

<br>
/users/hpp/ompi_install/lib/libmca_common_libfabric.so.0: undefined symbol: psmx_eq_open
<br>

<br>
anyone else seeing this on their intel/infinipath system?
<br>

<br>
What's bizarre is that psmx_eq_open shouldn't be visible outside of the libfabric.so itself.  So
<br>
having libfabric internal symbols required in a ompi mca lib seems to be incorrect.
<br>

<br>
Howard
<br>

<br>

<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17379/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] is anyone seeing this on their	intel/inifinipath	cluster?"</a>
<li><strong>Previous message:</strong> <a href="17378.php">Orion Poplawski: "Re: [OMPI devel] segfault in test"</a>
<li><strong>In reply to:</strong> <a href="17377.php">Howard Pritchard: "[OMPI devel] is anyone seeing this on their intel/inifinipath cluster?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] is anyone seeing this on their	intel/inifinipath	cluster?"</a>
<li><strong>Reply:</strong> <a href="17380.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] is anyone seeing this on their	intel/inifinipath	cluster?"</a>
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
