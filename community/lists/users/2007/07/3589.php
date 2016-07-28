<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 20:16:42 2007" -->
<!-- isoreceived="20070706001642" -->
<!-- sent="Thu, 5 Jul 2007 20:16:38 -0400" -->
<!-- isosent="20070706001638" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.3 spec file" -->
<!-- id="2453e2900707051716j26d09ed1wd22755cf2eb51817_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2453e2900707051645t2a5a7fdchcb8abbff989b9f51_at_mail.gmail.com" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-05 20:16:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3590.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3588.php">Alex Tumanov: "[OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>In reply to:</strong> <a href="3588.php">Alex Tumanov: "[OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3595.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Reply:</strong> <a href="3595.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, tried compiling the RPM again, and at the very top, noticed
<br>
that the ./configure is called with --sysconfdir set to /opt/openmpi
<br>
instead of the new name provided. All other parameters are correct!
<br>
Any ideas?
<br>
<p>./configure --build=x86_64-redhat-linux-gnu
<br>
--host=x86_64-redhat-linux-gnu --target=x86_64-redhat-linux-gnu
<br>
--program-prefix= --prefix=/opt/openmpi_mine/1.2.3
<br>
--exec-prefix=/opt/openmpi_mine/1.2.3
<br>
--bindir=/opt/openmpi_mine/1.2.3/bin
<br>
--sbindir=/opt/openmpi_mine/1.2.3/sbin
<br>
--sysconfdir=/opt/openmpi/1.2.3/etc
<br>
--datadir=/opt/openmpi_mine/1.2.3/share
<br>
--includedir=/opt/openmpi_mine/1.2.3/include
<br>
--libdir=/opt/openmpi_mine/1.2.3/lib
<br>
--libexecdir=/opt/openmpi_mine/1.2.3/libexec --localstatedir=/var
<br>
--sharedstatedir=/opt/openmpi_mine/1.2.3/com
<br>
--mandir=/opt/openmpi_mine/1.2.3/man --infodir=/usr/share/info
<br>
--prefix=/opt/openmpi_mine/1.2.3 --with-openib=/usr/include/infiniband
<br>
--with-openib-libdir=/usr/lib64
<br>
<p>Thanks,
<br>
Alex.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3590.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3588.php">Alex Tumanov: "[OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>In reply to:</strong> <a href="3588.php">Alex Tumanov: "[OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3595.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Reply:</strong> <a href="3595.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
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
