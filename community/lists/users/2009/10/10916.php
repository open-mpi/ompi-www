<?
$subject_val = "[OMPI users] Compilation Failure on Franklin with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 13 19:54:22 2009" -->
<!-- isoreceived="20091013235422" -->
<!-- sent="Tue, 13 Oct 2009 16:54:15 -0700" -->
<!-- isosent="20091013235415" -->
<!-- name="Abhinav Vishnu" -->
<!-- email="abhinav.vishnu_at_[hidden]" -->
<!-- subject="[OMPI users] Compilation Failure on Franklin with OpenMPI" -->
<!-- id="4AD51327.5090503_at_pnl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Compilation Failure on Franklin with OpenMPI<br>
<strong>From:</strong> Abhinav Vishnu (<em>abhinav.vishnu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-13 19:54:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10917.php">George Bosilca: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Previous message:</strong> <a href="10915.php">Dorian Krause: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10921.php">Barrett, Brian W: "Re: [OMPI users] Compilation Failure on Franklin with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="10921.php">Barrett, Brian W: "Re: [OMPI users] Compilation Failure on Franklin with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks:
<br>
<p>I am trying to compile OpenMPI on Franklin, and after trying out a 
<br>
couple of options, I am still observing a compilation failure.
<br>
<p>I am using the following options:
<br>
<p>export CC=cc
<br>
./configure --with-portals-libs=/u0/v/vishnu/libportals.a --enable-shared=no
<br>
<p>The default version of libportals seems to provide error, and there were 
<br>
compilation errors using shared library, so I disabled these two options 
<br>
as well. The error is here:
<br>
<p>/opt/cray/xt-asyncpe/3.2/bin/cc: INFO: linux target is being used
<br>
pgcc-Error-Unknown switch: --export-dynamic
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[2]: Leaving directory 
<br>
`/u0/v/vishnu/src/mpi/ompi/openmpi-1.3.3/opal/tools/wrappers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/u0/v/vishnu/src/mpi/ompi/openmpi-1.3.3/opal'
<br>
make: *** [all-recursive] Error 1
<br>
franklin-nid00092[27] openmpi-1.3.3$ ./configure 
<br>
--with-portals-libs=/u0/v/vishnu/libportals.a --enable-shared=no
<br>
<p>A compilation script for Franklin (if there is one) would be greatly 
<br>
appreciated.
<br>
<p>thanks and best regards,
<br>
<p><pre>
-- 
Abhinav Vishnu, Ph.D.
Research Scientist
High Performance Computing
Pacific Northwest National Laboratory
902 Battelle Boulevard
P.O. Box 999, MSIN: K7-90
Richland, WA 99352 USA
Tel.: (509)372-4794
Fax: (509)375-2520
abhinav.vishnu_at_[hidden]
www.pnl.gov
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10917.php">George Bosilca: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Previous message:</strong> <a href="10915.php">Dorian Krause: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10921.php">Barrett, Brian W: "Re: [OMPI users] Compilation Failure on Franklin with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="10921.php">Barrett, Brian W: "Re: [OMPI users] Compilation Failure on Franklin with OpenMPI"</a>
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
