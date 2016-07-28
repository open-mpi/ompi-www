<?
$subject_val = "Re: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 23 12:09:50 2010" -->
<!-- isoreceived="20100723160950" -->
<!-- sent="Fri, 23 Jul 2010 09:10:26 -0700" -->
<!-- isosent="20100723161026" -->
<!-- name="Avneesh Pant" -->
<!-- email="avneesh.pant_at_[hidden]" -->
<!-- subject="Re: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2" -->
<!-- id="A138796A861C994C87C7E4572BB0B53484A63D2A62_at_AVEXMB2.qlogic.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="512AB107-C6C2-41A9-8731-A43059799022_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2<br>
<strong>From:</strong> Avneesh Pant (<em>avneesh.pant_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-23 12:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13765.php">James: "[OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13763.php">Alexandru Blidaru: "Re: [OMPI users] Communication between objects on different nodes"</a>
<li><strong>In reply to:</strong> <a href="13726.php">Brock Palen: "[OMPI users] psm mtl not appearing in ompi_info in 1.4.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock,
<br>
On the node you are running ompi_info is there a Truescale card present? i.e. is /dev/ipath created and the ib_qib driver loaded?  If not can you rerun ompi_info on a node that does have it loaded (compute nodes?) and see if it shows up. This is expected in the above scenario as the PSM module will unload itself if it does not detect a valid Truescale environment I believe.
<br>
<p>Avneesh
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Brock Palen
<br>
Sent: Wednesday, July 21, 2010 8:41 AM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2
<br>
<p>I just built openmpi/1.4.2  with the pgi compilers against psm and verbs (we have both sets of gear)
<br>
<p>I noticed that after building, that psm nor any other mtl (psm is the only one we expect) appears in ompi_info  
<br>
<p>Our configure:
<br>
./configure --prefix=/home/software/rhel5/openmpi-1.4.2/pgi-9.0 --mandir=/home/software/rhel5/openmpi-1.4.2/pgi-9.0/man --with-tm=/usr/local/torque/ --with-openib=/usr/ --with-psm CC=pgcc CXX=pgCC FC=pgf90 F77=pgf90
<br>
<p>Note that in 1.3.2 psm does show up.
<br>
<p>Also config.log says it found everything to build psm support, and we have:
<br>
mca_mtl_psm.la  mca_mtl_psm.so
<br>
<p>In lib/openmpi/   after install.  
<br>
Also psm does work, it just does not appear in ompi_info
<br>
<p>Sorry if this has already been filed. 
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13765.php">James: "[OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13763.php">Alexandru Blidaru: "Re: [OMPI users] Communication between objects on different nodes"</a>
<li><strong>In reply to:</strong> <a href="13726.php">Brock Palen: "[OMPI users] psm mtl not appearing in ompi_info in 1.4.2"</a>
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
