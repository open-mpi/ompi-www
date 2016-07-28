<?
$subject_val = "[OMPI users] Mixed Mellanox and Qlogic problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 17:03:51 2011" -->
<!-- isoreceived="20110630210351" -->
<!-- sent="Thu, 30 Jun 2011 14:03:43 -0700" -->
<!-- isosent="20110630210343" -->
<!-- name="David Warren" -->
<!-- email="warren_at_[hidden]" -->
<!-- subject="[OMPI users] Mixed Mellanox and Qlogic problems" -->
<!-- id="4E0CE4AF.6090900_at_atmos.washington.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Mixed Mellanox and Qlogic problems<br>
<strong>From:</strong> David Warren (<em>warren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-30 17:03:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16796.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Previous message:</strong> <a href="16794.php">Joe Griffin: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16849.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16849.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a cluster with mostly Mellanox ConnectX hardware and a few with 
<br>
Qlogic QLE7340's. After looking through the web, FAQs etc. I built 
<br>
openmpi-1.5.3 with psm and openib. If I run within the same hardware it 
<br>
is fast and works fine. If I run between without specifying an MTL (e.g. 
<br>
mpirun -np 24 -machinefile dwhosts --byslot --bind-to-core --mca btl 
<br>
^tcp ...) it dies with
<br>
*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
<span class="quotelev1">&gt;  *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt;  *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt;  [n16:9438] Abort before MPI_INIT completed successfully; not able to 
</span><br>
guarantee that all other processes were killed!
<br>
<span class="quotelev1">&gt;  *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt;  *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt;  *** Your MPI job will now abort.
</span><br>
...
<br>
I can make it run but giving a bad mtl e.g. -mca mtl psm,none. All the 
<br>
processes run after complaining that mtl none does not exist. However, 
<br>
they run just as slow (about 10% slower than either set alone)
<br>
<p>Pertinent info:
<br>
On the Qlogic Nodes:
<br>
OFED: QLogic-OFED.SLES11-x86_64.1.5.3.0.22
<br>
On the Mellanox Nodes:
<br>
OFED-1.5.2.1-20101105-0600
<br>
<p>All:
<br>
debian lenny kernel 2.6.32.41
<br>
OpenSM
<br>
limit | grep memorylocked gives unlimited on all nodes.
<br>
<p>Configure line:
<br>
./configure --with-libnuma --with-openib 
<br>
--prefix=/usr/local/openmpi-1.5.3 --with-psm=/usr 
<br>
--enable-btl-openib-failover --enable-openib-connectx-xrc 
<br>
--enable-openib-rdmacm
<br>
<p>I thought that with 1.5.3 I am supposed to be able to do this. Am I just 
<br>
wrong? Does anyone see what I am doing wrong?
<br>
<p>Thanks
<br>
<p>





<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16795/mellanox_devinfo.gz">mellanox_devinfo.gz</a>
</ul>
<!-- attachment="mellanox_devinfo.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16795/mellanox_ifconfig.gz">mellanox_ifconfig.gz</a>
</ul>
<!-- attachment="mellanox_ifconfig.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16795/ompi_info_output.gz">ompi_info_output.gz</a>
</ul>
<!-- attachment="ompi_info_output.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16795/qlogic_devinfo.gz">qlogic_devinfo.gz</a>
</ul>
<!-- attachment="qlogic_devinfo.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16795/qlogic_ifconfig.gz">qlogic_ifconfig.gz</a>
</ul>
<!-- attachment="qlogic_ifconfig.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16796.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<li><strong>Previous message:</strong> <a href="16794.php">Joe Griffin: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16849.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16849.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
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
