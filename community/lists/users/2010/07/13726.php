<?
$subject_val = "[OMPI users] psm mtl not appearing in ompi_info in 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 11:40:54 2010" -->
<!-- isoreceived="20100721154054" -->
<!-- sent="Wed, 21 Jul 2010 11:40:48 -0400" -->
<!-- isosent="20100721154048" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] psm mtl not appearing in ompi_info in 1.4.2" -->
<!-- id="512AB107-C6C2-41A9-8731-A43059799022_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] psm mtl not appearing in ompi_info in 1.4.2<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 11:40:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13727.php">Jeff Squyres: "Re: [OMPI users] openmpi v1.5?"</a>
<li><strong>Previous message:</strong> <a href="13725.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13764.php">Avneesh Pant: "Re: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13764.php">Avneesh Pant: "Re: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just built openmpi/1.4.2  with the pgi compilers against psm and verbs (we have both sets of gear)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13727.php">Jeff Squyres: "Re: [OMPI users] openmpi v1.5?"</a>
<li><strong>Previous message:</strong> <a href="13725.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13764.php">Avneesh Pant: "Re: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13764.php">Avneesh Pant: "Re: [OMPI users] psm mtl not appearing in ompi_info in 1.4.2"</a>
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
