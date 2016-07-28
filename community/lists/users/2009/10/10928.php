<?
$subject_val = "[OMPI users] OMPI-1.2.0 is not getting installed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 08:48:26 2009" -->
<!-- isoreceived="20091020124826" -->
<!-- sent="Tue, 20 Oct 2009 18:18:22 +0530" -->
<!-- isosent="20091020124822" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI-1.2.0 is not getting installed" -->
<!-- id="cb60cbc40910200548h22740be2qb4a134036a3f4e29_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OMPI-1.2.0 is not getting installed<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 08:48:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10929.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Previous message:</strong> <a href="10927.php">Jeff Squyres: "Re: [OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10929.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Reply:</strong> <a href="10929.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Its required here to install Open MPI 1.2 on a HPC cluster with - Cent
<br>
OS 5.2 Linux, Mellanox IB card, switch and OFED-1.4.
<br>
But the configure is failing with:
<br>
<p>[root_at_master openmpi-1.2]# ./configure --prefix=/opt/mpi/openmpi/1.2/intel
<br>
--with-openib=/usr
<br>
..
<br>
...
<br>
<p>--- MCA component btl:openib (m4 configuration macro)
<br>
checking for MCA component btl:openib compile mode... dso
<br>
checking for sysfs_open_class in -lsysfs... no
<br>
configure: error: OpenIB support requested but required sysfs not found.
<br>
Aborting
<br>
<p>even though the required rpms are available:
<br>
<p># rpm -qa | grep sysfs
<br>
sysfsutils-2.0.0-6
<br>
libsysfs-2.0.0-6
<br>
libsysfs-2.0.0-6
<br>
<p><p>What to do get install OMPI-1.2 specifically?
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10928/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10929.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Previous message:</strong> <a href="10927.php">Jeff Squyres: "Re: [OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10929.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Reply:</strong> <a href="10929.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
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
