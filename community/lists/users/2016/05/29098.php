<?
$subject_val = "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 12:02:55 2016" -->
<!-- isoreceived="20160505160255" -->
<!-- sent="Thu, 5 May 2016 12:02:47 -0400" -->
<!-- isosent="20160505160247" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v" -->
<!-- id="572B6EA7.4050106_at_ldeo.columbia.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMP0BNapFC=p5YGEH=0NuagK+0QTjnXjD8N2usxCy9_v8fYvYQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 12:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29097.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29093.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29116.php">Dave Love: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Giacomo
<br>
<p>Some programs fail with segmentation fault
<br>
because the stack size is too small.
<br>
[But others because of bugs in memory allocation/management, etc.]
<br>
<p>Have you tried
<br>
<p>ulimit -s unlimited
<br>
<p>before you run the program?
<br>
<p>Are you using a single machine or a cluster?
<br>
If you're using infiniband you may need also to make the locked memory 
<br>
unlimited:
<br>
<p>ulimit -l unlimited
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 05/05/2016 05:15 AM, Giacomo Rossi wrote:
<br>
<span class="quotelev1">&gt;   gdb /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.11
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2016 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
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
<span class="quotelev1">&gt; Reading symbols from /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90...(no
</span><br>
<span class="quotelev1">&gt; debugging symbols found)...done.
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
<span class="quotelev1">&gt; #1  0x00007ffff7de5828 in _dl_relocate_object () from
</span><br>
<span class="quotelev1">&gt; /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #2  0x00007ffff7ddcfa3 in dl_main () from /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; #3  0x00007ffff7df029c in _dl_sysdep_start () from
</span><br>
<span class="quotelev1">&gt; /lib64/ld-linux-x86-64.so.2
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
<span class="quotelev1">&gt;     Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Research Fellow at Dept. of Mechanical and Aerospace Engineering,
</span><br>
<span class="quotelev1">&gt;     &quot;Sapienza&quot; University of Rome
</span><br>
<span class="quotelev1">&gt;     *p: *(+39) 0692927207 | *m**: *(+39) 3408816643 | *e:
</span><br>
<span class="quotelev1">&gt;     *giacombum_at_[hidden] &lt;mailto:giacombum_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:giacomo.rossi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="https://github.com/Fortran-FOSS-Programmers">https://github.com/Fortran-FOSS-Programmers</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-05-05 10:44 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:giacombum_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Here the result of ldd command:
</span><br>
<span class="quotelev1">&gt;     'ldd /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90
</span><br>
<span class="quotelev1">&gt;     linux-vdso.so.1 (0x00007ffcacbbe000)
</span><br>
<span class="quotelev1">&gt;     libopen-pal.so.13 =&gt;
</span><br>
<span class="quotelev1">&gt;     /opt/openmpi/1.10.2/intel/16.0.3/lib/libopen-pal.so.13
</span><br>
<span class="quotelev1">&gt;     (0x00007fa9597a9000)
</span><br>
<span class="quotelev1">&gt;     libm.so.6 =&gt; /usr/lib/libm.so.6 (0x00007fa9594a4000)
</span><br>
<span class="quotelev1">&gt;     libpciaccess.so.0 =&gt; /usr/lib/libpciaccess.so.0 (0x00007fa95929a000)
</span><br>
<span class="quotelev1">&gt;     libdl.so.2 =&gt; /usr/lib/libdl.so.2 (0x00007fa959096000)
</span><br>
<span class="quotelev1">&gt;     librt.so.1 =&gt; /usr/lib/librt.so.1 (0x00007fa958e8e000)
</span><br>
<span class="quotelev1">&gt;     libutil.so.1 =&gt; /usr/lib/libutil.so.1 (0x00007fa958c8b000)
</span><br>
<span class="quotelev1">&gt;     libgcc_s.so.1 =&gt; /usr/lib/libgcc_s.so.1 (0x00007fa958a75000)
</span><br>
<span class="quotelev1">&gt;     libpthread.so.0 =&gt; /usr/lib/libpthread.so.0 (0x00007fa958858000)
</span><br>
<span class="quotelev1">&gt;     libc.so.6 =&gt; /usr/lib/libc.so.6 (0x00007fa9584b7000)
</span><br>
<span class="quotelev1">&gt;     libimf.so =&gt;
</span><br>
<span class="quotelev1">&gt;     /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libimf.so
</span><br>
<span class="quotelev1">&gt;     (0x00007fa957fb9000)
</span><br>
<span class="quotelev1">&gt;     libsvml.so =&gt;
</span><br>
<span class="quotelev1">&gt;     /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libsvml.so
</span><br>
<span class="quotelev1">&gt;     (0x00007fa9570ad000)
</span><br>
<span class="quotelev1">&gt;     libirng.so =&gt;
</span><br>
<span class="quotelev1">&gt;     /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libirng.so
</span><br>
<span class="quotelev1">&gt;     (0x00007fa956d3b000)
</span><br>
<span class="quotelev1">&gt;     libintlc.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt;     /home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libintlc.so.5
</span><br>
<span class="quotelev1">&gt;     (0x00007fa956acf000)
</span><br>
<span class="quotelev1">&gt;     /lib64/ld-linux-x86-64.so.2 (0x00007fa959ab9000)'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I can't provide a core file, because I can't compile or launch any
</span><br>
<span class="quotelev1">&gt;     program with mpifort... I've always the error 'core dumped' also
</span><br>
<span class="quotelev1">&gt;     when I try to compile a program with mpifort, and of course there
</span><br>
<span class="quotelev1">&gt;     isn't any core file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Research Fellow at Dept. of Mechanical and Aerospace
</span><br>
<span class="quotelev1">&gt;         Engineering, &quot;Sapienza&quot; University of Rome
</span><br>
<span class="quotelev1">&gt;         *p: *(+39) 0692927207 &lt;tel:%28%2B39%29%200692927207&gt; | *m**:
</span><br>
<span class="quotelev1">&gt;         *(+39) 3408816643 &lt;tel:%28%2B39%29%203408816643&gt; | *e:
</span><br>
<span class="quotelev1">&gt;         *giacombum_at_[hidden] &lt;mailto:giacombum_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:giacomo.rossi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="https://github.com/Fortran-FOSS-Programmers">https://github.com/Fortran-FOSS-Programmers</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2016-05-05 8:50 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:giacombum_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I&#226;&#128;&#153;ve installed the latest version of Intel Parallel Studio
</span><br>
<span class="quotelev1">&gt;         (16.0.3), then I&#226;&#128;&#153;ve downloaded the latest version of openmpi
</span><br>
<span class="quotelev1">&gt;         (1.10.2) and I&#226;&#128;&#153;ve compiled it with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         `./configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;         --prefix=/opt/openmpi/1.10.2/intel/16.0.3`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         then I've installed and everything seems ok, but when I try the
</span><br>
<span class="quotelev1">&gt;         simple command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ' /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90 -v'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I receive the following error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         'Segmentation fault (core dumped)'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I'm on ArchLinux, with kernel 4.5.1-1-ARCH; I've attache to this
</span><br>
<span class="quotelev1">&gt;         email the config.log file compressed with bzip2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Any help will be appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Giacomo Rossi Ph.D., Space Engineer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Research Fellow at Dept. of Mechanical and Aerospace
</span><br>
<span class="quotelev1">&gt;             Engineering, &quot;Sapienza&quot; University of Rome
</span><br>
<span class="quotelev1">&gt;             *p: *(+39) 0692927207 &lt;tel:%28%2B39%29%200692927207&gt; | *m**:
</span><br>
<span class="quotelev1">&gt;             *(+39) 3408816643 &lt;tel:%28%2B39%29%203408816643&gt; | *e:
</span><br>
<span class="quotelev1">&gt;             *giacombum_at_[hidden] &lt;mailto:giacombum_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:giacomo.rossi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             Member of Fortran-FOSS-programmers
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="https://github.com/Fortran-FOSS-Programmers">https://github.com/Fortran-FOSS-Programmers</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         &#226;&#128;&#139;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29093.php">http://www.open-mpi.org/community/lists/users/2016/05/29093.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29097.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29093.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29099.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29116.php">Dave Love: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
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
