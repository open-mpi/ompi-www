<?
$subject_val = "[OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 18:51:05 2010" -->
<!-- isoreceived="20100727225105" -->
<!-- sent="Tue, 27 Jul 2010 18:50:39 -0400" -->
<!-- isosent="20100727225039" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="[OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="AANLkTimVnOuU2GNm_VwwvQyBFFm1rMY=KhZz_JzV4Sav_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openMPI shared with NFS, but says different version<br>
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 18:50:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13810.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13808.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13810.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13810.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Even when executing a hello world openmpi, i get this error, which is then
<br>
ignored.
<br>
fcluster_at_fuego:~$ mpirun --hostfile myhostfile -np 5 testMPI/hola
<br>
[agua:02357] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:02354] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:02356] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:02358] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:02355] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_ofud: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:02358] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:02355] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:02354] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:02356] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
[agua:02357] mca: base: component_find: unable to open
<br>
/opt/openmpi-1.4.2/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or
<br>
compiled for a different version of Open MPI? (ignored)
<br>
Process 3 on agua out of 5
<br>
Process 4 on agua out of 5
<br>
Process 1 on agua out of 5
<br>
Process 2 on agua out of 5
<br>
Process 0 on agua out of 5
<br>
<p><p>/opt/openmpi-1.4.2/ is shared through NFS.
<br>
<p>master node did had an older openmpi version before installing 1.4.2, but i
<br>
removed them all with
<br>
sudo apt-get --purge remove libopenmpi1 libopenmpi-dev openmpi-bin
<br>
openmpi-dev openmpi-common
<br>
i checked for /usr/lib64/openmpi   and for  /usr/lib/openmpi   and deleted
<br>
them.
<br>
<p>however, when compiling again i keep getting this error,
<br>
something must be remaining from the older version of openmpi, but i really
<br>
dont know where that remaining could be.
<br>
any help, welcome
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13809/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13810.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13808.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13810.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13810.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
