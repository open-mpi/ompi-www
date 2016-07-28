<?
$subject_val = "[OMPI users] OpenMPI 1.6 with Intel 11 Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 10:11:52 2013" -->
<!-- isoreceived="20130204151152" -->
<!-- sent="Mon, 04 Feb 2013 16:11:37 +0100" -->
<!-- isosent="20130204151137" -->
<!-- name="Clarinet" -->
<!-- email="clarinet_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.6 with Intel 11 Compiler" -->
<!-- id="510FCFA9.10002_at_atlas.cz" -->
<!-- charset="windows-1250" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.6 with Intel 11 Compiler<br>
<strong>From:</strong> Clarinet (<em>clarinet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 10:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21291.php">Bharath Ramesh: "[OMPI users] Simple MPI hello world hangs over IB"</a>
<li><strong>Previous message:</strong> <a href="21289.php">George Bosilca: "Re: [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21293.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Reply:</strong> <a href="21293.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Maybe reply:</strong> <a href="21299.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users,
<br>
<p><p>I am trying to compile OpenMPI 1.6 (1.6.3) with Intel 11.0.081 set of 
<br>
compilers. The compilation fails with
<br>
<p>&nbsp;&nbsp;&nbsp;CXXLD  otfprofile
<br>
otfprofile-create_latex.o: In function 
<br>
`std::locale::_Impl::_M_remove_reference()':
<br>
./create_latex.cpp:(.gnu.linkonce.t._ZNSt6locale5_Impl19_M_remove_referenceEv[.gnu.linkonce.t._ZNSt6locale5_Impl19_M_remove_referenceEv]+0x38): 
<br>
undefined reference to `__sync_fetch_and_add_4'
<br>
make[10]: *** [otfprofile] Error 1
<br>
make[10]: Leaving directory 
<br>
`/usr/local/programs/openmpi/openmpi-1.6.3/src/openmpi-1.6.3-amd64-intel_11.0.081/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile'
<br>
<p>Although I found some hints on the Internet I have not been able to 
<br>
resolve the problem. The gcc version is 'gcc (Debian 4.3.2-1.1) 4.3.2'. 
<br>
I cannot install newer Intel compiler version. Any ideas, please?
<br>
<p>My 'configure' is
<br>
<p>CC=icc CXX=icpc F77=ifort FC=ifort ./configure 
<br>
--prefix=../../arch/${ARCH} --enable-shared --enable-static 
<br>
--enable-mpirun-prefix-by-default --enable-mpi-threads --with-sge 
<br>
--with-libnuma --with-hwloc
<br>
<p>Best regards,
<br>
<p>Jiri Polach
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21291.php">Bharath Ramesh: "[OMPI users] Simple MPI hello world hangs over IB"</a>
<li><strong>Previous message:</strong> <a href="21289.php">George Bosilca: "Re: [OMPI users] Asynchronous parallel I/O concerning MPI_File_write_all_begin() and MPI_File_write_all_end()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21293.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Reply:</strong> <a href="21293.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Maybe reply:</strong> <a href="21299.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
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
