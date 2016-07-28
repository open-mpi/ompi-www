<?
$subject_val = "[OMPI users] OpenMPI 1.6.4, MPI I/O on Lustre, 32bit: bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 25 08:46:31 2013" -->
<!-- isoreceived="20130325124631" -->
<!-- sent="Mon, 25 Mar 2013 13:46:20 +0100" -->
<!-- isosent="20130325124620" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.6.4, MPI I/O on Lustre, 32bit: bug?" -->
<!-- id="57912717-4e77-4ae1-a712-3cd10b444a4b_at_HUB1.rwth-ad.de" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.6.4, MPI I/O on Lustre, 32bit: bug?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-25 08:46:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21610.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Previous message:</strong> <a href="21608.php">Baptiste Robert: "Re: [OMPI users] mpirun trouble through ssh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
we observe the following divide-by-zero error:
<br>
<p>[linuxscc005:31416] *** Process received signal ***
<br>
[linuxscc005:31416] Signal: Floating point exception (8)
<br>
[linuxscc005:31416] Signal code: Integer divide-by-zero (1)
<br>
[linuxscc005:31416] Failing at address: 0x2282db
<br>
[linuxscc005:31416] [ 0] [0x3a9410]
<br>
[linuxscc005:31416] [ 1] /lib/libgcc_s.so.1(__divdi3+0x8b) [0x2282db]
<br>
[linuxscc005:31416] [ 2] 
<br>
/opt/MPI/openmpi-1.6.4/linux/intel/lib/lib32/libmpi.so.1(ADIOI_LUSTRE_WriteStrided+0x1c36) 
<br>
[0x8c8206]
<br>
[linuxscc005:31416] [ 3] 
<br>
/opt/MPI/openmpi-1.6.4/linux/intel/lib/lib32/libmpi.so.1(MPIOI_File_write+0x1f2) 
<br>
[0x8ed752]
<br>
[linuxscc005:31416] [ 4] 
<br>
/opt/MPI/openmpi-1.6.4/linux/intel/lib/lib32/libmpi.so.1(mca_io_romio_dist_MPI_File_write+0x33) 
<br>
[0x8ed553]
<br>
[linuxscc005:31416] [ 5] 
<br>
/opt/MPI/openmpi-1.6.4/linux/intel/lib/lib32/libmpi.so.1(mca_io_romio_file_write+0x2e) 
<br>
[0x8a46fe]
<br>
[linuxscc005:31416] [ 6] 
<br>
/opt/MPI/openmpi-1.6.4/linux/intel/lib/lib32/libmpi.so.1(MPI_File_write+0x45) 
<br>
[0x846c25]
<br>
[linuxscc005:31416] [ 7] 
<br>
/rwthfs/rz/cluster/home/pk224850/SVN/rz_cluster_utils/test_suite/trunk/tests/mpi/mpiIO/mpiIOC32.exe() 
<br>
[0x804a1ac]
<br>
[linuxscc005:31416] [ 8] /lib/libc.so.6(__libc_start_main+0xe6) [0x6fccce6]
<br>
[linuxscc005:31416] [ 9] 
<br>
/rwthfs/rz/cluster/home/pk224850/SVN/rz_cluster_utils/test_suite/trunk/tests/mpi/mpiIO/mpiIOC32.exe() 
<br>
[0x8049d91]
<br>
[linuxscc005:31416] *** End of error message ***
<br>
<p>... if we're using Open MPI 1.6.4 for compiling a 'C' test program(*) 
<br>
(attached), which perform some MPI I/O on Lustre.
<br>
<p>0.) The error only came if the binary is compiled in 32bit
<br>
1.) the error did not corellate with a compiler used to build the MPI library 
<br>
(all 4 we have - GCC, Su/Oralce Studio; Intel, PGI - result in the same behaviour)
<br>
2.) The error did not came in our version Open MPI / 1.6.1 (however I'm not 
<br>
really sure the configure options used are the same)
<br>
3.) The error did only came if the file to be written is located on the Lustre 
<br>
file system (no error on local disc or on NFS share).
<br>
4.) The Fortran version (also attached) did not have the issue.
<br>
5.) The error only occur when using 2 or more processes
<br>
<p>On the basis of the error message I believe the error could be located somewhere 
<br>
indeepth of the OpenMPI/ROMIO implementation...
<br>
Well, is somebody interested in further investigation of this issue? If yes we 
<br>
can feed you with informations. Otherwise we will ignore it, probably...
<br>
<p>Best
<br>
Paul Kapinos
<br>
<p>(*) we've kinda internal test suite in order to check our MPIs...
<br>
<p>P.S. $ mpicc -O0 -m32 -o ./mpiIOC32.exe ctest.c -lm
<br>
<p>P.S.2 an example cofnigure line:
<br>
<p>./configure --with-openib --with-lsf --with-devel-headers 
<br>
--enable-contrib-no-build=vt --enable-heterogeneous --enable-cxx-exceptions 
<br>
--enable-orterun-prefix-by-default --disable-dlopen --disable-mca-dso 
<br>
--with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' 
<br>
--enable-mpi-ext CFLAGS=&quot;$FLAGS_FAST $FLAGS_ARCH32 &quot; CXXFLAGS=&quot;$FLAGS_FAST 
<br>
$FLAGS_ARCH32 &quot; FFLAGS=&quot;$FLAGS_FAST $FLAGS_ARCH32 &quot; FCFLAGS=&quot;$FLAGS_FAST 
<br>
$FLAGS_ARCH32 &quot; LDFLAGS=&quot;$FLAGS_FAST $FLAGS_ARCH32 
<br>
-L/opt/lsf/8.0/linux2.6-glibc2.3-x86/lib&quot; 
<br>
--prefix=/opt/MPI/openmpi-1.6.4/linux/gcc 
<br>
--mandir=/opt/MPI/openmpi-1.6.4/linux/gcc/man 
<br>
--bindir=/opt/MPI/openmpi-1.6.4/linux/gcc/bin/32 
<br>
--libdir=/opt/MPI/openmpi-1.6.4/linux/gcc/lib/lib32 
<br>
--includedir=/opt/MPI/openmpi-1.6.4/linux/gcc/include/32 
<br>
--datarootdir=/opt/MPI/openmpi-1.6.4/linux/gcc/share/32 2&gt;&amp;1 | tee log_01_conf.txt
<br>
<p>I _believe_ the part
<br>
--with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre'
<br>
is new in our 1.6.4 installation compared with 1.6.1. Could this be the root of 
<br>
evil?
<br>
<p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915



</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21609/mpi_test.f90">mpi_test.f90</a>
</ul>
<!-- attachment="mpi_test.f90" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21609/ctest.c">ctest.c</a>
</ul>
<!-- attachment="ctest.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21609/ompi_info-a.txt">ompi_info-a.txt</a>
</ul>
<!-- attachment="ompi_info-a.txt" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21609/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21610.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Previous message:</strong> <a href="21608.php">Baptiste Robert: "Re: [OMPI users] mpirun trouble through ssh"</a>
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
