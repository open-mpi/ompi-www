<?
$subject_val = "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 08:11:12 2016" -->
<!-- isoreceived="20160506121112" -->
<!-- sent="Fri, 6 May 2016 12:10:58 +0000" -->
<!-- isosent="20160506121058" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v" -->
<!-- id="A2F1E900-22DB-499E-81B6-D94D9781FC8A_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMP0BNa0szn_6e8x-igHm7wEATnw8LRrzyVa+6xGSPqO9Wy1PQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 08:10:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>In reply to:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29137.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, good.
<br>

<br>
I asked that question because typically when we see errors like this, it is usually either a busted compiler installation or inadvertently mixing the run-times of multiple different compilers in some kind of incompatible way.  Specifically, the mpifort (aka mpif90) application is a fairly simple program -- there's no reason it should segv, especially with a stack trace that you sent that implies that it's dying early in startup, potentially even before it has hit any Open MPI code (i.e., it could even be pre-main).
<br>

<br>
BTW, you might be able to get a more complete stack trace from the debugger that comes with the Intel compiler (idb?  I don't remember offhand).
<br>

<br>
Since you are able to run simple programs compiled by this compiler, it sounds like the compiler is working fine.  Good!
<br>

<br>
The next thing to check is to see if somehow the compiler and/or run-time environments are getting mixed up.  E.g., the apps were compiled for one compiler/run-time but are being used with another.  Also ensure that any compiler/linker flags that you are passing to Open MPI's configure script are native and correct for the platform for which you're compiling (e.g., don't pass in flags that optimize for a different platform; that may result in generating machine code instructions that are invalid for your platform).
<br>

<br>
Try recompiling/re-installing Open MPI from scratch, and if it still doesn't work, then send all the information listed here:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a>
<br>

<br>

<br>
<span class="quotelev1">&gt; On May 6, 2016, at 3:45 AM, Giacomo Rossi &lt;giacombum_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I've tried three simple &quot;Hello world&quot; programs in fortan, C and C++ and the compile and run with intel 16.0.3. The problem is with the openmpi compiled from source.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research Fellow at Dept. of Mechanical and Aerospace Engineering, &quot;Sapienza&quot; University of Rome
</span><br>
<span class="quotelev1">&gt; p: (+39) 0692927207 | m: (+39) 3408816643 | e: giacombum_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-05-05 11:15 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;  gdb /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.11
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2016 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-pc-linux-gnu&quot;.
</span><br>
<span class="quotelev1">&gt; Type &quot;show configuration&quot; for configuration details.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;.
</span><br>
<span class="quotelev1">&gt; Find the GDB manual and other documentation resources online at:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/gdb/documentation/">http://www.gnu.org/software/gdb/documentation/</a>&gt;.
</span><br>
<span class="quotelev1">&gt; For help, type &quot;help&quot;.
</span><br>
<span class="quotelev1">&gt; Type &quot;apropos word&quot; to search for commands related to &quot;word&quot;...
</span><br>
<span class="quotelev1">&gt; Reading symbols from /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90...(no debugging symbols found)...done.
</span><br>
<span class="quotelev1">&gt; (gdb) r -v
</span><br>
<span class="quotelev1">&gt; Starting program: /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90 -v
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x00007ffff6858f38 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007ffff6858f38 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x00007ffff7de5828 in _dl_relocate_object () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #2  0x00007ffff7ddcfa3 in dl_main () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #3  0x00007ffff7df029c in _dl_sysdep_start () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #4  0x00007ffff7dddd4a in _dl_start () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #5  0x00007ffff7dd9d98 in _start () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000000002 in ?? ()
</span><br>
<span class="quotelev1">&gt; #7  0x00007fffffffaa8a in ?? ()
</span><br>
<span class="quotelev1">&gt; #8  0x00007fffffffaab6 in ?? ()
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research Fellow at Dept. of Mechanical and Aerospace Engineering, &quot;Sapienza&quot; University of Rome
</span><br>
<span class="quotelev1">&gt; p: (+39) 0692927207 | m: (+39) 3408816643 | e: giacombum_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-05-05 10:44 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Here the result of ldd command:
</span><br>
<span class="quotelev1">&gt; 'ldd /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90
</span><br>
<span class="quotelev1">&gt; 	linux-vdso.so.1 (0x00007ffcacbbe000)
</span><br>
<span class="quotelev1">&gt; 	libopen-pal.so.13 =&gt; /opt/openmpi/1.10.2/intel/16.0.3/lib/libopen-pal.so.13 (0x00007fa9597a9000)
</span><br>
<span class="quotelev1">&gt; 	libm.so.6 =&gt; /usr/lib/libm.so.6 (0x00007fa9594a4000)
</span><br>
<span class="quotelev1">&gt; 	libpciaccess.so.0 =&gt; /usr/lib/libpciaccess.so.0 (0x00007fa95929a000)
</span><br>
<span class="quotelev1">&gt; 	libdl.so.2 =&gt; /usr/lib/libdl.so.2 (0x00007fa959096000)
</span><br>
<span class="quotelev1">&gt; 	librt.so.1 =&gt; /usr/lib/librt.so.1 (0x00007fa958e8e000)
</span><br>
<span class="quotelev1">&gt; 	libutil.so.1 =&gt; /usr/lib/libutil.so.1 (0x00007fa958c8b000)
</span><br>
<span class="quotelev1">&gt; 	libgcc_s.so.1 =&gt; /usr/lib/libgcc_s.so.1 (0x00007fa958a75000)
</span><br>
<span class="quotelev1">&gt; 	libpthread.so.0 =&gt; /usr/lib/libpthread.so.0 (0x00007fa958858000)
</span><br>
<span class="quotelev1">&gt; 	libc.so.6 =&gt; /usr/lib/libc.so.6 (0x00007fa9584b7000)
</span><br>
<span class="quotelev1">&gt; 	libimf.so =&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libimf.so (0x00007fa957fb9000)
</span><br>
<span class="quotelev1">&gt; 	libsvml.so =&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libsvml.so (0x00007fa9570ad000)
</span><br>
<span class="quotelev1">&gt; 	libirng.so =&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libirng.so (0x00007fa956d3b000)
</span><br>
<span class="quotelev1">&gt; 	libintlc.so.5 =&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libintlc.so.5 (0x00007fa956acf000)
</span><br>
<span class="quotelev1">&gt; 	/lib64/ld-linux-x86-64.so.2 (0x00007fa959ab9000)'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't provide a core file, because I can't compile or launch any program with mpifort... I've always the error 'core dumped' also when I try to compile a program with mpifort, and of course there isn't any core file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research Fellow at Dept. of Mechanical and Aerospace Engineering, &quot;Sapienza&quot; University of Rome
</span><br>
<span class="quotelev1">&gt; p: (+39) 0692927207 | m: (+39) 3408816643 | e: giacombum_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-05-05 8:50 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve installed the latest version of Intel Parallel Studio (16.0.3), then I&#226;&#128;&#153;ve downloaded the latest version of openmpi (1.10.2) and I&#226;&#128;&#153;ve compiled it with 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; `./configure CC=icc CXX=icpc F77=ifort FC=ifort --prefix=/opt/openmpi/1.10.2/intel/16.0.3`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then I've installed and everything seems ok, but when I try the simple command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ' /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90 -v'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I receive the following error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 'Segmentation fault (core dumped)'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm on ArchLinux, with kernel 4.5.1-1-ARCH; I've attache to this email the config.log file compressed with bzip2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help will be appreciated!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research Fellow at Dept. of Mechanical and Aerospace Engineering, &quot;Sapienza&quot; University of Rome
</span><br>
<span class="quotelev1">&gt; p: (+39) 0692927207 | m: (+39) 3408816643 | e: giacombum_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29108.php">http://www.open-mpi.org/community/lists/users/2016/05/29108.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>In reply to:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29137.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
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
