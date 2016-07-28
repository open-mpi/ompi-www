<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 30 14:23:48 2007" -->
<!-- isoreceived="20070130192348" -->
<!-- sent="Tue, 30 Jan 2007 14:23:22 -0500" -->
<!-- isosent="20070130192322" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_info segmentation fault" -->
<!-- id="ED47A35B-7D19-428F-A089-90ABA8EDCA2F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1170183831.9994.3.camel_at_rockstar.fsl.cs.sunysb.edu" -->
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
<strong>Date:</strong> 2007-01-30 14:23:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2574.php">Ivan de Jesus Deras Tabora: "[OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2572.php">Avishay Traeger: "Re: [OMPI users] ompi_info segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="2572.php">Avishay Traeger: "Re: [OMPI users] ompi_info segmentation fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please note that due to a mixup in the 1.1.3 release, we just  
<br>
released v1.1.4.  :-(
<br>
<p>See <a href="http://www.open-mpi.org/community/lists/announce/2007/01/0010.php">http://www.open-mpi.org/community/lists/announce/2007/01/0010.php</a>  
<br>
for the official announcement.
<br>
<p>The short version is that the wrong tarball was posted to the OMPI  
<br>
web site for the 1.1.3 release (doh!).  So we released today as  
<br>
v1.1.4 what should have been released a few days ago as v1.1.3.
<br>
<p><p><p>On Jan 30, 2007, at 2:03 PM, Avishay Traeger wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; Upgrading to 1.1.3 solved both issues - thank you very much!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Avishay
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2007-01-29 at 20:59 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm quite sure that we have since fixed the command line parsing
</span><br>
<span class="quotelev2">&gt;&gt; problem, and I *think* we fixed the mmap problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way that you can upgrade to v1.1.3?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 29, 2007, at 3:24 PM, Avishay Traeger wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have just installed Open MPI 1.1 on a 64-bit FC6 machine using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yum.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The packages that were installed are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-devel-1.1-7.fc6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-libs-1.1-7.fc6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.1-7.fc6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried running ompi_info, but it results in a segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Running strace shows this at the end:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mmap(NULL, 4294967296, PROT_READ|PROT_WRITE, MAP_PRIVATE|
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MAP_ANONYMOUS,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -1, 0) = -1 ENOMEM (Cannot allocate memory)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- SIGSEGV (Segmentation fault) @ 0 (0) ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ killed by SIGSEGV +++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The full output of ompi_info is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open MPI: 1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI SVN revision: r10477
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open RTE: 1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open RTE SVN revision: r10477
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     OPAL: 1.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL SVN revision: r10477
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Prefix: /usr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Configured architecture: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured by: brewbuilder
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Configured on: Fri Oct 13 14:34:07 EDT 2006
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Configure host: hs20-bc1-7.build.redhat.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built by: brewbuilder
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Built on: Fri Oct 13 14:44:39 EDT 2006
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Built host: hs20-bc1-7.build.redhat.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 bindings: yes (single underscore)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that at this point in the program, it tries to map 4GB of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory, which results in ENOMEM.  I'm guessing that the return
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mmap isn't checked, which results in this segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, I tried running &quot;mpirun&quot;, and the output was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** buffer overflow detected ***: mpirun terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__chk_fail+0x2f)[0x3f59ce0dff]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6[0x3f59ce065b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__snprintf_chk+0x7b)[0x3f59ce052b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/openmpi/libopal.so.0(opal_cmd_line_get_usage_msg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +0x20a)[0x304901963a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun[0x403c7c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun(orterun+0xa4)[0x40260c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun(main+0x1b)[0x402563]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xf4)[0x3f59c1da44]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun[0x4024b9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It also included a &quot;Memory map&quot;, which I left out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Avishay
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2574.php">Ivan de Jesus Deras Tabora: "[OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Previous message:</strong> <a href="2572.php">Avishay Traeger: "Re: [OMPI users] ompi_info segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="2572.php">Avishay Traeger: "Re: [OMPI users] ompi_info segmentation fault"</a>
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
