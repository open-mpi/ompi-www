<?
$subject_val = "[OMPI users] WIEN2k compilation using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 16:53:00 2008" -->
<!-- isoreceived="20080805205300" -->
<!-- sent="Tue, 5 Aug 2008 15:52:54 -0500 (CDT)" -->
<!-- isosent="20080805205254" -->
<!-- name="Sergio Yanuen Rodriguez" -->
<!-- email="srodriguez_at_[hidden]" -->
<!-- subject="[OMPI users] WIEN2k compilation using openmpi" -->
<!-- id="53204.165.91.181.170.1217969574.squirrel_at_www.physics.tamu.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] WIEN2k compilation using openmpi<br>
<strong>From:</strong> Sergio Yanuen Rodriguez (<em>srodriguez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-05 16:52:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6270.php">Ashley Pittman: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6272.php">R.C.Pasianot: "Re: [OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>Reply:</strong> <a href="6272.php">R.C.Pasianot: "Re: [OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>Reply:</strong> <a href="6273.php">Jeff Squyres: "Re: [OMPI users] WIEN2k compilation using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openmpi users:
<br>
<p>I am trying to compile wien2k in parallel on a intel core quad processor
<br>
with fedora 8 and 8 GB in RAM but I am getting some errors. I am able to
<br>
install and run the serial version.
<br>
<p>My software is:
<br>
<p>Kernel version 2.6.25
<br>
gcc version 4.1.2
<br>
Intel Fortran compiler 10.1.015
<br>
Intel MKL 10.0.1.014
<br>
OpenMPI 1.2.4
<br>
WIEN2k_08.2
<br>
<p>The compilation options are:
<br>
Serial Current settings:
<br>
&nbsp;O   Compiler options:        -FR -mp1 -w -prec_div -pc80 -pad -ip
<br>
-DINTEL_VML -O3 -xW
<br>
&nbsp;L   Linker Flags:            $(FOPT) -L/opt/intel/mkl/10.0.1.014/lib/em64t
<br>
-lpthread
<br>
&nbsp;P   Preprocessor flags       '-DParallel'
<br>
&nbsp;R   R_LIB (LAPACK+BLAS):     -L/opt/intel/mkl/10.0.1.014/lib/em64t
<br>
-lmkl_intel_lp64 -lmkl_intel_thread -lmkl_core -lguide -lpthread
<br>
<p>Parallel Current settings:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RP  RP_LIB(SCALAPACK+PBLAS): -L /opt/intel/mkl/10.0.1.014/lib/em64t
<br>
-lmkl_intel_lp64 -lmkl_scalapack_lp64 -lmkl_blacs_openmpi_lp64
<br>
-lmkl_sequential -lmkl_core -L/usr/local/lib -lmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FP  FPOPT(par.comp.options): -FR -mp1 -w -prec_div -pc80 -pad -ip
<br>
-DINTEL_VML -traceback -I /opt/intel/linux86_64/include
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MP  MPIRUN commando        : mpirun -np _NP_ -machinefile _HOSTS_ _EXEC_
<br>
<p>The errors I am getting are in the zip file attached, together with the
<br>
openmpi compilation files.
<br>
<p>Any help is greatly appreciated
<br>
<p>Thank you
<br>
<p>Sergio Y. Rodriguez
<br>
Physics Department
<br>
Texas A&amp;M University
<br>
<p>
<br><p>
<p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6269/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6270.php">Ashley Pittman: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6272.php">R.C.Pasianot: "Re: [OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>Reply:</strong> <a href="6272.php">R.C.Pasianot: "Re: [OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>Reply:</strong> <a href="6273.php">Jeff Squyres: "Re: [OMPI users] WIEN2k compilation using openmpi"</a>
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
