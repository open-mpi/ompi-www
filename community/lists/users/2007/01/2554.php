<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 15:24:20 2007" -->
<!-- isoreceived="20070129202420" -->
<!-- sent="Mon, 29 Jan 2007 15:24:16 -0500" -->
<!-- isosent="20070129202416" -->
<!-- name="Avishay Traeger" -->
<!-- email="atraeger_at_[hidden]" -->
<!-- subject="[OMPI users] ompi_info segmentation fault" -->
<!-- id="1170102256.3028.16.camel_at_rockstar.fsl.cs.sunysb.edu" -->
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
<strong>From:</strong> Avishay Traeger (<em>atraeger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-29 15:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2555.php">Heywood, Todd: "[OMPI users] SGE and OpenMPI integration"</a>
<li><strong>Previous message:</strong> <a href="2553.php">Jeff Squyres: "Re: [OMPI users] expected behavior of end statement before MPI_Finalise()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2560.php">Jeff Squyres: "Re: [OMPI users] ompi_info segmentation fault"</a>
<li><strong>Reply:</strong> <a href="2560.php">Jeff Squyres: "Re: [OMPI users] ompi_info segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have just installed Open MPI 1.1 on a 64-bit FC6 machine using yum.
<br>
The packages that were installed are:
<br>
openmpi-devel-1.1-7.fc6
<br>
openmpi-libs-1.1-7.fc6
<br>
openmpi-1.1-7.fc6
<br>
<p>I tried running ompi_info, but it results in a segmentation fault.
<br>
Running strace shows this at the end:
<br>
<p>mmap(NULL, 4294967296, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS,
<br>
-1, 0) = -1 ENOMEM (Cannot allocate memory)
<br>
--- SIGSEGV (Segmentation fault) @ 0 (0) ---
<br>
+++ killed by SIGSEGV +++
<br>
<p>The full output of ompi_info is:
<br>
# ompi_info 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.1
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r10477
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.1
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r10477
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r10477
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr
<br>
&nbsp;Configured architecture: x86_64-redhat-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: brewbuilder
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Fri Oct 13 14:34:07 EDT 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: hs20-bc1-7.build.redhat.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: brewbuilder
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Fri Oct 13 14:44:39 EDT 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: hs20-bc1-7.build.redhat.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (single underscore)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
Segmentation fault
<br>
<p>It seems that at this point in the program, it tries to map 4GB of
<br>
memory, which results in ENOMEM.  I'm guessing that the return value of
<br>
mmap isn't checked, which results in this segmentation fault.  
<br>
<p>Also, I tried running &quot;mpirun&quot;, and the output was:
<br>
# mpirun 
<br>
*** buffer overflow detected ***: mpirun terminated
<br>
======= Backtrace: =========
<br>
/lib64/libc.so.6(__chk_fail+0x2f)[0x3f59ce0dff]
<br>
/lib64/libc.so.6[0x3f59ce065b]
<br>
/lib64/libc.so.6(__snprintf_chk+0x7b)[0x3f59ce052b]
<br>
/usr/lib64/openmpi/libopal.so.0(opal_cmd_line_get_usage_msg
<br>
+0x20a)[0x304901963a]
<br>
mpirun[0x403c7c]
<br>
mpirun(orterun+0xa4)[0x40260c]
<br>
mpirun(main+0x1b)[0x402563]
<br>
/lib64/libc.so.6(__libc_start_main+0xf4)[0x3f59c1da44]
<br>
mpirun[0x4024b9]
<br>
<p>It also included a &quot;Memory map&quot;, which I left out.
<br>
<p>Any suggestions?
<br>
<p>Thanks in advance,
<br>
Avishay
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2555.php">Heywood, Todd: "[OMPI users] SGE and OpenMPI integration"</a>
<li><strong>Previous message:</strong> <a href="2553.php">Jeff Squyres: "Re: [OMPI users] expected behavior of end statement before MPI_Finalise()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2560.php">Jeff Squyres: "Re: [OMPI users] ompi_info segmentation fault"</a>
<li><strong>Reply:</strong> <a href="2560.php">Jeff Squyres: "Re: [OMPI users] ompi_info segmentation fault"</a>
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
