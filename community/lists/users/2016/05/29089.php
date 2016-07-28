<?
$subject_val = "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 04:45:04 2016" -->
<!-- isoreceived="20160505084504" -->
<!-- sent="Thu, 5 May 2016 10:44:22 +0200" -->
<!-- isosent="20160505084422" -->
<!-- name="Giacomo Rossi" -->
<!-- email="giacombum_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v" -->
<!-- id="CAMP0BNYK67EgJ3WrfcXSi3=aMNYw5F=VnvJLR3XaQMs+qP+pPA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMP0BNaGS3P7M=d1OUpdS22afGEp=G19qFC05oybSNH_LYTcgQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-05-05 04:44:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29090.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Previous message:</strong> <a href="29088.php">Gilles Gouaillardet: "[OMPI users]  Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>In reply to:</strong> <a href="29087.php">Giacomo Rossi: "[OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29091.php">Gilles Gouaillardet: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29091.php">Gilles Gouaillardet: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29093.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here the result of ldd command:
<br>
'ldd /opt/openmpi/1.10.2/intel/16.0.3/bin/mpif90
<br>
linux-vdso.so.1 (0x00007ffcacbbe000)
<br>
libopen-pal.so.13 =&gt; /opt/openmpi/1.10.2/intel/16.0.3/lib/libopen-pal.so.13
<br>
(0x00007fa9597a9000)
<br>
libm.so.6 =&gt; /usr/lib/libm.so.6 (0x00007fa9594a4000)
<br>
libpciaccess.so.0 =&gt; /usr/lib/libpciaccess.so.0 (0x00007fa95929a000)
<br>
libdl.so.2 =&gt; /usr/lib/libdl.so.2 (0x00007fa959096000)
<br>
librt.so.1 =&gt; /usr/lib/librt.so.1 (0x00007fa958e8e000)
<br>
libutil.so.1 =&gt; /usr/lib/libutil.so.1 (0x00007fa958c8b000)
<br>
libgcc_s.so.1 =&gt; /usr/lib/libgcc_s.so.1 (0x00007fa958a75000)
<br>
libpthread.so.0 =&gt; /usr/lib/libpthread.so.0 (0x00007fa958858000)
<br>
libc.so.6 =&gt; /usr/lib/libc.so.6 (0x00007fa9584b7000)
<br>
libimf.so =&gt;
<br>
/home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libimf.so
<br>
(0x00007fa957fb9000)
<br>
libsvml.so =&gt;
<br>
/home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libsvml.so
<br>
(0x00007fa9570ad000)
<br>
libirng.so =&gt;
<br>
/home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libirng.so
<br>
(0x00007fa956d3b000)
<br>
libintlc.so.5 =&gt;
<br>
/home/giacomo/intel/compilers_and_libraries_2016.3.210/linux/compiler/lib/intel64/libintlc.so.5
<br>
(0x00007fa956acf000)
<br>
/lib64/ld-linux-x86-64.so.2 (0x00007fa959ab9000)'
<br>
<p>I can't provide a core file, because I can't compile or launch any program
<br>
with mpifort... I've always the error 'core dumped' also when I try to
<br>
compile a program with mpifort, and of course there isn't any core file.
<br>
<p><p>Giacomo Rossi Ph.D., Space Engineer
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
<p><p>2016-05-05 8:50 GMT+02:00 Giacomo Rossi &lt;giacombum_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;ve installed the latest version of Intel Parallel Studio (16.0.3), then
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ve downloaded the latest version of openmpi (1.10.2) and I&#226;&#128;&#153;ve compiled it
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; `./configure CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi/1.10.2/intel/16.0.3`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then I've installed and everything seems ok, but when I try the simple
</span><br>
<span class="quotelev1">&gt; command
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
<span class="quotelev1">&gt; I'm on ArchLinux, with kernel 4.5.1-1-ARCH; I've attache to this email the
</span><br>
<span class="quotelev1">&gt; config.log file compressed with bzip2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help will be appreciated!
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
<span class="quotelev1">&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29089/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29090.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Previous message:</strong> <a href="29088.php">Gilles Gouaillardet: "[OMPI users]  Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>In reply to:</strong> <a href="29087.php">Giacomo Rossi: "[OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29091.php">Gilles Gouaillardet: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29091.php">Gilles Gouaillardet: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Reply:</strong> <a href="29093.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
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
