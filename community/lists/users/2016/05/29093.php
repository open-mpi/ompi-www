<?
$subject_val = "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 05:15:52 2016" -->
<!-- isoreceived="20160505091552" -->
<!-- sent="Thu, 5 May 2016 11:15:10 +0200" -->
<!-- isosent="20160505091510" -->
<!-- name="Giacomo Rossi" -->
<!-- email="giacombum_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v" -->
<!-- id="CAMP0BNapFC=p5YGEH=0NuagK+0QTjnXjD8N2usxCy9_v8fYvYQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMP0BNYK67EgJ3WrfcXSi3=aMNYw5F=VnvJLR3XaQMs+qP+pPA_at_mail.gmail.com" -->
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
<strong>From:</strong> Giacomo Rossi (<em>giacombum_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 05:15:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29094.php">Andy Riebs: "[OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Previous message:</strong> <a href="29092.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>In reply to:</strong> <a href="29089.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29098.php">Gus Correa: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29098.php">Gus Correa: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;gdb /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90
<br>
GNU gdb (GDB) 7.11
<br>
Copyright (C) 2016 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>
<br>
<span class="quotelev1">&gt;
</span><br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-pc-linux-gnu&quot;.
<br>
Type &quot;show configuration&quot; for configuration details.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;.
<br>
Find the GDB manual and other documentation resources online at:
<br>
&lt;<a href="http://www.gnu.org/software/gdb/documentation/">http://www.gnu.org/software/gdb/documentation/</a>&gt;.
<br>
For help, type &quot;help&quot;.
<br>
Type &quot;apropos word&quot; to search for commands related to &quot;word&quot;...
<br>
Reading symbols from /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90...(no
<br>
debugging symbols found)...done.
<br>
(gdb) r -v
<br>
Starting program: /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90 -v
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0x00007ffff6858f38 in ?? ()
<br>
(gdb) bt
<br>
#0  0x00007ffff6858f38 in ?? ()
<br>
#1  0x00007ffff7de5828 in _dl_relocate_object () from
<br>
/lib64/ld-linux-x86-64.so.2
<br>
#2  0x00007ffff7ddcfa3 in dl_main () from /lib64/ld-linux-x86-64.so.2
<br>
#3  0x00007ffff7df029c in _dl_sysdep_start () from
<br>
/lib64/ld-linux-x86-64.so.2
<br>
#4  0x00007ffff7dddd4a in _dl_start () from /lib64/ld-linux-x86-64.so.2
<br>
#5  0x00007ffff7dd9d98 in _start () from /lib64/ld-linux-x86-64.so.2
<br>
#6  0x0000000000000002 in ?? ()
<br>
#7  0x00007fffffffaa8a in ?? ()
<br>
#8  0x00007fffffffaab6 in ?? ()
<br>
#9  0x0000000000000000 in ?? ()
<br>
<p>Giacomo Rossi Ph.D., Space Engineer
<br>
<p>Research Fellow at Dept. of Mechanical and Aerospace Engineering, &quot;Sapienza&quot;
<br>
University of Rome
<br>
*p: *(+39) 0692927207 | *m**: *(+39) 3408816643 | *e: *giacombum_at_[hidden]
<br>
&lt;giacomo.rossi_at_[hidden]&gt;
<br>
Member of Fortran-FOSS-programmers
<br>
&lt;<a href="https://github.com/Fortran-FOSS-Programmers">https://github.com/Fortran-FOSS-Programmers</a>&gt;
<br>
<p><p>2016-05-05 10:44 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Here the result of ldd command:
</span><br>
<span class="quotelev1">&gt; 'ldd /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90
</span><br>
<span class="quotelev1">&gt; linux-vdso.so.1 (0x00007ffcacbbe000)
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.13 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.10.2/intel/16.0.3/lib/libopen-pal.so.13 (0x00007fa9597a9000)
</span><br>
<span class="quotelev1">&gt; libm.so.6 =&gt; /usr/lib/libm.so.6 (0x00007fa9594a4000)
</span><br>
<span class="quotelev1">&gt; libpciaccess.so.0 =&gt; /usr/lib/libpciaccess.so.0 (0x00007fa95929a000)
</span><br>
<span class="quotelev1">&gt; libdl.so.2 =&gt; /usr/lib/libdl.so.2 (0x00007fa959096000)
</span><br>
<span class="quotelev1">&gt; librt.so.1 =&gt; /usr/lib/librt.so.1 (0x00007fa958e8e000)
</span><br>
<span class="quotelev1">&gt; libutil.so.1 =&gt; /usr/lib/libutil.so.1 (0x00007fa958c8b000)
</span><br>
<span class="quotelev1">&gt; libgcc_s.so.1 =&gt; /usr/lib/libgcc_s.so.1 (0x00007fa958a75000)
</span><br>
<span class="quotelev1">&gt; libpthread.so.0 =&gt; /usr/lib/libpthread.so.0 (0x00007fa958858000)
</span><br>
<span class="quotelev1">&gt; libc.so.6 =&gt; /usr/lib/libc.so.6 (0x00007fa9584b7000)
</span><br>
<span class="quotelev1">&gt; libimf.so =&gt;
</span><br>
<span class="quotelev1">&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libimf.so
</span><br>
<span class="quotelev1">&gt; (0x00007fa957fb9000)
</span><br>
<span class="quotelev1">&gt; libsvml.so =&gt;
</span><br>
<span class="quotelev1">&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libsvml.so
</span><br>
<span class="quotelev1">&gt; (0x00007fa9570ad000)
</span><br>
<span class="quotelev1">&gt; libirng.so =&gt;
</span><br>
<span class="quotelev1">&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libirng.so
</span><br>
<span class="quotelev1">&gt; (0x00007fa956d3b000)
</span><br>
<span class="quotelev1">&gt; libintlc.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libintlc.so.5
</span><br>
<span class="quotelev1">&gt; (0x00007fa956acf000)
</span><br>
<span class="quotelev1">&gt; /lib64/ld-linux-x86-64.so.2 (0x00007fa959ab9000)'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't provide a core file, because I can't compile or launch any program
</span><br>
<span class="quotelev1">&gt; with mpifort... I've always the error 'core dumped' also when I try to
</span><br>
<span class="quotelev1">&gt; compile a program with mpifort, and of course there isn't any core file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Research Fellow at Dept. of Mechanical and Aerospace Engineering, &quot;Sapienza&quot;
</span><br>
<span class="quotelev1">&gt; University of Rome
</span><br>
<span class="quotelev1">&gt; *p: *(+39) 0692927207 | *m**: *(+39) 3408816643 | *e: *giacombum_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;giacomo.rossi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://github.com/Fortran-FOSS-Programmers">https://github.com/Fortran-FOSS-Programmers</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-05-05 8:50 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;ve installed the latest version of Intel Parallel Studio (16.0.3), then
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;ve downloaded the latest version of openmpi (1.10.2) and I&#226;&#128;&#153;ve compiled it
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; `./configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/openmpi/1.10.2/intel/16.0.3`
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then I've installed and everything seems ok, but when I try the simple
</span><br>
<span class="quotelev2">&gt;&gt; command
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ' /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90 -v'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I receive the following error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 'Segmentation fault (core dumped)'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm on ArchLinux, with kernel 4.5.1-1-ARCH; I've attache to this email
</span><br>
<span class="quotelev2">&gt;&gt; the config.log file compressed with bzip2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help will be appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Research Fellow at Dept. of Mechanical and Aerospace Engineering, &quot;Sapienza&quot;
</span><br>
<span class="quotelev2">&gt;&gt; University of Rome
</span><br>
<span class="quotelev2">&gt;&gt; *p: *(+39) 0692927207 | *m**: *(+39) 3408816643 | *e: *
</span><br>
<span class="quotelev2">&gt;&gt; giacombum_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;giacomo.rossi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="https://github.com/Fortran-FOSS-Programmers">https://github.com/Fortran-FOSS-Programmers</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29093/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29094.php">Andy Riebs: "[OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Previous message:</strong> <a href="29092.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>In reply to:</strong> <a href="29089.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29098.php">Gus Correa: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29098.php">Gus Correa: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
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
