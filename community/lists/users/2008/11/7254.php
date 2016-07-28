<?
$subject_val = "[OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 08:27:25 2008" -->
<!-- isoreceived="20081110132725" -->
<!-- sent="Mon, 10 Nov 2008 05:27:21 -0800 (PST)" -->
<!-- isosent="20081110132721" -->
<!-- name="Oleg V. Zhylin" -->
<!-- email="ovz_at_[hidden]" -->
<!-- subject="[OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?" -->
<!-- id="826747.92320.qm_at_web56604.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?<br>
<strong>From:</strong> Oleg V. Zhylin (<em>ovz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 08:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7255.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7253.php">Jed Brown: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7257.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7257.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7275.php">Sofia Aparicio Secanellas: "[OMPI users] Problems using mpi with cmake"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;I would like to to build OpenMPI from openmpi-1.2.8-1.src.rpm. I've tried plain rpmbuild  and rpmbuild ... --define 'build_all_in_one_rpm 1' but resulting rpm doesn't conain any *.a libraries. 
<br>
<p>&nbsp;&nbsp;I think this is a problem because I've straced mpif90 and discovered that ld invoked from gfortran only looks for libmpi_f90.a in response to -lmpi_f90 inroduced by mpif90.
<br>
<p>WBR Oleg V. Zhylin   ovz_at_[hidden]
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7255.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7253.php">Jed Brown: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7257.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7257.php">Jeff Squyres: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7275.php">Sofia Aparicio Secanellas: "[OMPI users] Problems using mpi with cmake"</a>
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
