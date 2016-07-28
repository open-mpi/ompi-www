<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 20:59:49 2007" -->
<!-- isoreceived="20070130015949" -->
<!-- sent="Mon, 29 Jan 2007 20:59:42 -0500" -->
<!-- isosent="20070130015942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_info segmentation fault" -->
<!-- id="2A2D0640-1DA2-41DE-8BC0-952846EA4225_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1170102256.3028.16.camel_at_rockstar.fsl.cs.sunysb.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-29 20:59:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2561.php">Pak Lui: "Re: [OMPI users] SGE and OpenMPI integration"</a>
<li><strong>Previous message:</strong> <a href="2559.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="2554.php">Avishay Traeger: "[OMPI users] ompi_info segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2572.php">Avishay Traeger: "Re: [OMPI users] ompi_info segmentation fault"</a>
<li><strong>Reply:</strong> <a href="2572.php">Avishay Traeger: "Re: [OMPI users] ompi_info segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm quite sure that we have since fixed the command line parsing  
<br>
problem, and I *think* we fixed the mmap problem.
<br>
<p>Is there any way that you can upgrade to v1.1.3?
<br>
<p><p>On Jan 29, 2007, at 3:24 PM, Avishay Traeger wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have just installed Open MPI 1.1 on a 64-bit FC6 machine using yum.
</span><br>
<span class="quotelev1">&gt; The packages that were installed are:
</span><br>
<span class="quotelev1">&gt; openmpi-devel-1.1-7.fc6
</span><br>
<span class="quotelev1">&gt; openmpi-libs-1.1-7.fc6
</span><br>
<span class="quotelev1">&gt; openmpi-1.1-7.fc6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried running ompi_info, but it results in a segmentation fault.
</span><br>
<span class="quotelev1">&gt; Running strace shows this at the end:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 4294967296, PROT_READ|PROT_WRITE, MAP_PRIVATE| 
</span><br>
<span class="quotelev1">&gt; MAP_ANONYMOUS,
</span><br>
<span class="quotelev1">&gt; -1, 0) = -1 ENOMEM (Cannot allocate memory)
</span><br>
<span class="quotelev1">&gt; --- SIGSEGV (Segmentation fault) @ 0 (0) ---
</span><br>
<span class="quotelev1">&gt; +++ killed by SIGSEGV +++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The full output of ompi_info is:
</span><br>
<span class="quotelev1">&gt; # ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: brewbuilder
</span><br>
<span class="quotelev1">&gt;            Configured on: Fri Oct 13 14:34:07 EDT 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: hs20-bc1-7.build.redhat.com
</span><br>
<span class="quotelev1">&gt;                 Built by: brewbuilder
</span><br>
<span class="quotelev1">&gt;                 Built on: Fri Oct 13 14:44:39 EDT 2006
</span><br>
<span class="quotelev1">&gt;               Built host: hs20-bc1-7.build.redhat.com
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (single underscore)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that at this point in the program, it tries to map 4GB of
</span><br>
<span class="quotelev1">&gt; memory, which results in ENOMEM.  I'm guessing that the return  
</span><br>
<span class="quotelev1">&gt; value of
</span><br>
<span class="quotelev1">&gt; mmap isn't checked, which results in this segmentation fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I tried running &quot;mpirun&quot;, and the output was:
</span><br>
<span class="quotelev1">&gt; # mpirun
</span><br>
<span class="quotelev1">&gt; *** buffer overflow detected ***: mpirun terminated
</span><br>
<span class="quotelev1">&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__chk_fail+0x2f)[0x3f59ce0dff]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6[0x3f59ce065b]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__snprintf_chk+0x7b)[0x3f59ce052b]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/libopal.so.0(opal_cmd_line_get_usage_msg
</span><br>
<span class="quotelev1">&gt; +0x20a)[0x304901963a]
</span><br>
<span class="quotelev1">&gt; mpirun[0x403c7c]
</span><br>
<span class="quotelev1">&gt; mpirun(orterun+0xa4)[0x40260c]
</span><br>
<span class="quotelev1">&gt; mpirun(main+0x1b)[0x402563]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xf4)[0x3f59c1da44]
</span><br>
<span class="quotelev1">&gt; mpirun[0x4024b9]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It also included a &quot;Memory map&quot;, which I left out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Avishay
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2561.php">Pak Lui: "Re: [OMPI users] SGE and OpenMPI integration"</a>
<li><strong>Previous message:</strong> <a href="2559.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="2554.php">Avishay Traeger: "[OMPI users] ompi_info segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2572.php">Avishay Traeger: "Re: [OMPI users] ompi_info segmentation fault"</a>
<li><strong>Reply:</strong> <a href="2572.php">Avishay Traeger: "Re: [OMPI users] ompi_info segmentation fault"</a>
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
