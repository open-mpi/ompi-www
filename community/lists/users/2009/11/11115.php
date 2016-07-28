<?
$subject_val = "[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 08:45:09 2009" -->
<!-- isoreceived="20091110134509" -->
<!-- sent="Tue, 10 Nov 2009 15:44:59 +0200" -->
<!-- isosent="20091110134459" -->
<!-- name="vasilis gkanis" -->
<!-- email="gkanis_at_[hidden]" -->
<!-- subject="[OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so" -->
<!-- id="200911101544.59664.gkanis_at_ipta.demokritos.gr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8F008AAB-358B-4E6A-83A0-9ECE60FD5218_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] ipo: warning #11009: file format not recognized for /Libraries_intel/openmpi/lib/libmpi.so<br>
<strong>From:</strong> vasilis gkanis (<em>gkanis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 08:44:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11116.php">Simone Pellegrini: "[OMPI users] mpi_yield_when_idle effects"</a>
<li><strong>Previous message:</strong> <a href="11114.php">Jeff Squyres: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="11114.php">Jeff Squyres: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11127.php">Nifty Tom Mitchell: "Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Reply:</strong> <a href="11127.php">Nifty Tom Mitchell: "Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am trying to compile openmpi-1.3.3 with intel Fortran and gcc compiler.
<br>
<p>In order to compile openmpi I run configure with the following options:
<br>
<p>./configure --prefix=/Libraries/openmpi FC=ifort --enable-mpi-f90
<br>
<p>OpenMpi compiled just fine, but when I am trying to compile and link my program 
<br>
against mpi, I get the following error:
<br>
<p>ipo: warning #11009: file format not recognized for 
<br>
/Libraries_intel/openmpi/lib/libmpi.so
<br>
ld: skipping incompatible /Libraries_intel/openmpi/lib/libmpi.so when 
<br>
searching for -lmpi
<br>
ld: cannot find -lmpi
<br>
<p>I have updated the LD_LIBRARY_PATH file.
<br>
<p>Does anybody know what this error mean?
<br>
<p>Thank you,
<br>
Vasilis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11116.php">Simone Pellegrini: "[OMPI users] mpi_yield_when_idle effects"</a>
<li><strong>Previous message:</strong> <a href="11114.php">Jeff Squyres: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="11114.php">Jeff Squyres: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11127.php">Nifty Tom Mitchell: "Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>Reply:</strong> <a href="11127.php">Nifty Tom Mitchell: "Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
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
