<?
$subject_val = "[OMPI users] test for sctp on FreeBSD too narrow";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 16:22:23 2012" -->
<!-- isoreceived="20120910202223" -->
<!-- sent="Mon, 10 Sep 2012 15:22:19 -0500" -->
<!-- isosent="20120910202219" -->
<!-- name="Brooks Davis" -->
<!-- email="brooks_at_[hidden]" -->
<!-- subject="[OMPI users] test for sctp on FreeBSD too narrow" -->
<!-- id="20120910202219.GB64920_at_lor.one-eyed-alien.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] test for sctp on FreeBSD too narrow<br>
<strong>From:</strong> Brooks Davis (<em>brooks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 16:22:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20186.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20184.php">Jeff Squyres: "Re: [OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20208.php">Jeff Squyres: "Re: [OMPI users] test for sctp on FreeBSD too narrow"</a>
<li><strong>Reply:</strong> <a href="20208.php">Jeff Squyres: "Re: [OMPI users] test for sctp on FreeBSD too narrow"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The test for SCTP support in libc on FreeBSD only allows it to work on
<br>
FreeBSD 7 (or I suppose 70 :). That attached patch expands the test to
<br>
7 though 19 which should be enough for a while.  Hopefully by the time
<br>
FreeBSD 19 is out everything will have sctp support in libc or have
<br>
dropped it. :)
<br>
<p>-- Brooks
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20185/patch-ompi_mca_btl_sctp_configure.m4">patch-ompi_mca_btl_sctp_configure.m4</a>
</ul>
<!-- attachment="patch-ompi_mca_btl_sctp_configure.m4" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20185/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20186.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20184.php">Jeff Squyres: "Re: [OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20208.php">Jeff Squyres: "Re: [OMPI users] test for sctp on FreeBSD too narrow"</a>
<li><strong>Reply:</strong> <a href="20208.php">Jeff Squyres: "Re: [OMPI users] test for sctp on FreeBSD too narrow"</a>
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
