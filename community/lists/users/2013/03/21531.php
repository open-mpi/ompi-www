<?
$subject_val = "[OMPI users] Intel MKL PARDISO seg. faults wrapping it around MPI_INIT/MPI_FINALIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 13 06:59:12 2013" -->
<!-- isoreceived="20130313105912" -->
<!-- sent="Wed, 13 Mar 2013 11:58:58 +0100" -->
<!-- isosent="20130313105858" -->
<!-- name="Alberto F. Mart&#195;&#173;n-Huertas" -->
<!-- email="amartin_at_[hidden]" -->
<!-- subject="[OMPI users] Intel MKL PARDISO seg. faults wrapping it around MPI_INIT/MPI_FINALIZE" -->
<!-- id="9306bfd259b56454e6656ea6cf6d26e1_at_cimne.upc.edu" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Intel MKL PARDISO seg. faults wrapping it around MPI_INIT/MPI_FINALIZE<br>
<strong>From:</strong> Alberto F. Mart&#195;&#173;n-Huertas (<em>amartin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-13 06:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Previous message:</strong> <a href="21530.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Dear MPI users,
<br>
<p>&nbsp;I have a small serial program that reads a sparse matrix from a file 
<br>
&nbsp;and factorizes it
<br>
&nbsp;using the sparse direct solvers included in PARDISO MKL. When I execute 
<br>
&nbsp;the program with
<br>
&nbsp;the matrix of interest, PARDISO factorizes it succesfully. No SIGSEV is 
<br>
&nbsp;produced. However,
<br>
&nbsp;if I transform this small sequential program to a message-passing 
<br>
&nbsp;program (i.e., wrapping its codes
<br>
&nbsp;around MPI_INIT/MPI_FINALIZE and executing it using mpirun -np 1 
<br>
&nbsp;PROGRAM) then a SIGSEV appears. Therefore, the problem seems
<br>
&nbsp;to be related to the combination of PARDISO MKL and the message-passing 
<br>
&nbsp;environment (OpenMPI).
<br>
<p>&nbsp;Some of the characteritics of the environment are:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;- MPI: OpenMPI 1.5.4 (find attached the output from ompi_info --all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- fortran compiler: ifort version 13.0.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Linux Kernel: Linux version 3.0.13-0.27-default (geeko_at_buildhost)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(gcc version 4.3.4 [gcc-4_3-branch revision 152973] 
<br>
&nbsp;(SUSE Linux) ) #1 SMP Wed Feb 15 13:33:49 UTC 2012 (d73692b)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- MKL libraries: MKL/13.0.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- CPU: Intel(R) Xeon(R) CPU E5-2670 0 @ 2.60GHz
<br>
<p>&nbsp;I have also reported this issue on the Intel MKL forum,
<br>
&nbsp;and provided a reproducer of the issue on:
<br>
<p>&nbsp;<a href="http://software.intel.com/en-us/forums/topic/375486">http://software.intel.com/en-us/forums/topic/375486</a>
<br>
<p>&nbsp;The &quot;weird&quot; observation is that I could reproduce
<br>
&nbsp;the issue on three machines based on the Intel SandyBridge-based
<br>
&nbsp;multicore-CPUs, while I could not on a pair of non SandyBridge-based
<br>
&nbsp;Intel archictures, using exactly the same software
<br>
&nbsp;stack. I am afraid that Intel SandyBridge-based CPUs have any
<br>
&nbsp;particularity with respect to virtual memory handling that
<br>
&nbsp;cause PARDISO MKL to SIGSEV once MPI_INIT has been called.
<br>
<p>&nbsp;Could u please help me to find the root-cause of this issue?
<br>
<p>&nbsp;Thanks in advance.
<br>
&nbsp;Best regards,
<br>
&nbsp;&nbsp;Alberto.
<br>
&nbsp;
<br>
<p><p><p><pre>
-- 
 Alberto F. Mart&#195;&#173;n-Huertas
 Centre Internacional de M&#195;&#168;todes Num&#195;&#168;rics a l'Enginyeria (CIMNE)
 Parc Mediterrani de la Tecnologia, UPC
 Esteve Terradas 5, Building C3, Office 210,
 08860 Castelldefels (Barcelona, Spain)
 Tel.: (+34) 9341 34223
 e-mail: amartin_at_[hidden]
 ________________
 IMPORTANT NOTICE
 All personal data contained on this mail will be processed 
 confidentially and registered in a file property of CIMNE in
 order to manage corporate communications. You may exercise the rights 
 of access, rectification, erasure and object by
 letter sent to Ed. C1 Campus Norte UPC. Gran Capit&#195;&#161;n s/n Barcelona.

</pre>
<p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21531/ompi_info_all_mn3.tgz">ompi_info_all_mn3.tgz</a>
</ul>
<!-- attachment="ompi_info_all_mn3.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Previous message:</strong> <a href="21530.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
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
