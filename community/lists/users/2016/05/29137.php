<?
$subject_val = "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 06:50:50 2016" -->
<!-- isoreceived="20160509105050" -->
<!-- sent="Mon, 9 May 2016 12:50:06 +0200" -->
<!-- isosent="20160509105006" -->
<!-- name="Giacomo Rossi" -->
<!-- email="giacombum_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v" -->
<!-- id="CAMP0BNboje9Ykr9yYRpHaKXdH_MrxD9xNPMHFkvtUVtr7y4-Pw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Giacomo Rossi (<em>giacombum_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 06:50:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29138.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've send you all the outputs from configure, make and make install
<br>
commands...
<br>
<p>Today I've compiled openmpi with the latest gcc version (6.1.1) shipped
<br>
with my archlinux distro and everything seems ok, so I think that the
<br>
problem is with intel compiler.
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
<p><p>2016-05-06 9:45 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Yes, I've tried three simple &quot;Hello world&quot; programs in fortan, C and C++
</span><br>
<span class="quotelev1">&gt; and the compile and run with intel 16.0.3. The problem is with the openmpi
</span><br>
<span class="quotelev1">&gt; compiled from source.
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
<span class="quotelev1">&gt; 2016-05-05 11:15 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  gdb /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt; GNU gdb (GDB) 7.11
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2016 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; License GPLv3+: GNU GPL version 3 or later &lt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev2">&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev2">&gt;&gt; This GDB was configured as &quot;x86_64-pc-linux-gnu&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Type &quot;show configuration&quot; for configuration details.
</span><br>
<span class="quotelev2">&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; Find the GDB manual and other documentation resources online at:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/documentation/">http://www.gnu.org/software/gdb/documentation/</a>&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; For help, type &quot;help&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; Type &quot;apropos word&quot; to search for commands related to &quot;word&quot;...
</span><br>
<span class="quotelev2">&gt;&gt; Reading symbols from /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90...(no
</span><br>
<span class="quotelev2">&gt;&gt; debugging symbols found)...done.
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) r -v
</span><br>
<span class="quotelev2">&gt;&gt; Starting program: /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90 -v
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; 0x00007ffff6858f38 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007ffff6858f38 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007ffff7de5828 in _dl_relocate_object () from
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007ffff7ddcfa3 in dl_main () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007ffff7df029c in _dl_sysdep_start () from
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007ffff7dddd4a in _dl_start () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007ffff7dd9d98 in _start () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x0000000000000002 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007fffffffaa8a in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007fffffffaab6 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x0000000000000000 in ?? ()
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-05-05 10:44 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here the result of ldd command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'ldd /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux-vdso.so.1 (0x00007ffcacbbe000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libopen-pal.so.13 =&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/1.10.2/intel/16.0.3/lib/libopen-pal.so.13 (0x00007fa9597a9000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libm.so.6 =&gt; /usr/lib/libm.so.6 (0x00007fa9594a4000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libpciaccess.so.0 =&gt; /usr/lib/libpciaccess.so.0 (0x00007fa95929a000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libdl.so.2 =&gt; /usr/lib/libdl.so.2 (0x00007fa959096000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; librt.so.1 =&gt; /usr/lib/librt.so.1 (0x00007fa958e8e000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libutil.so.1 =&gt; /usr/lib/libutil.so.1 (0x00007fa958c8b000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libgcc_s.so.1 =&gt; /usr/lib/libgcc_s.so.1 (0x00007fa958a75000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libpthread.so.0 =&gt; /usr/lib/libpthread.so.0 (0x00007fa958858000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libc.so.6 =&gt; /usr/lib/libc.so.6 (0x00007fa9584b7000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libimf.so =&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libimf.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0x00007fa957fb9000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libsvml.so =&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libsvml.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0x00007fa9570ad000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libirng.so =&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libirng.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0x00007fa956d3b000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libintlc.so.5 =&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libintlc.so.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (0x00007fa956acf000)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/ld-linux-x86-64.so.2 (0x00007fa959ab9000)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't provide a core file, because I can't compile or launch any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program with mpifort... I've always the error 'core dumped' also when I try
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to compile a program with mpifort, and of course there isn't any core file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research Fellow at Dept. of Mechanical and Aerospace Engineering, &quot;Sapienza&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Rome
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *p: *(+39) 0692927207 | *m**: *(+39) 3408816643 | *e: *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; giacombum_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;giacomo.rossi_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="https://github.com/Fortran-FOSS-Programmers">https://github.com/Fortran-FOSS-Programmers</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2016-05-05 8:50 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#226;&#128;&#153;ve installed the latest version of Intel Parallel Studio (16.0.3),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then I&#226;&#128;&#153;ve downloaded the latest version of openmpi (1.10.2) and I&#226;&#128;&#153;ve
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiled it with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `./configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --prefix=/opt/openmpi/1.10.2/intel/16.0.3`
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then I've installed and everything seems ok, but when I try the simple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ' /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90 -v'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I receive the following error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'Segmentation fault (core dumped)'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm on ArchLinux, with kernel 4.5.1-1-ARCH; I've attache to this email
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the config.log file compressed with bzip2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help will be appreciated!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Research Fellow at Dept. of Mechanical and Aerospace Engineering, &quot;Sapienza&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University of Rome
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *p: *(+39) 0692927207 | *m**: *(+39) 3408816643 | *e: *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; giacombum_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;giacomo.rossi_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="https://github.com/Fortran-FOSS-Programmers">https://github.com/Fortran-FOSS-Programmers</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29137/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29137/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29138.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
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
