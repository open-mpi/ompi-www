<?
$subject_val = "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 19:10:26 2016" -->
<!-- isoreceived="20160712231026" -->
<!-- sent="Wed, 13 Jul 2016 08:10:24 +0900" -->
<!-- isosent="20160712231024" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SHMEM, &amp;quot;mpp/shmem.fh&amp;quot;, CMake and infinite loops" -->
<!-- id="CAAkFZ5u2g5P28pS1MeU5eX2ucWoYAxM2HkwMi7H6ux_Jt9TmwQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="28b80f1269984e45aaa898a9599aa017_at_rwthex-w1-a.rwth-ad.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 19:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19196.php">Paul Kapinos: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Previous message:</strong> <a href="19194.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19184.php">Paul Kapinos: "[OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19196.php">Paul Kapinos: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Reply:</strong> <a href="19196.php">Paul Kapinos: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>The two header files in include/mpp simply include the file with the same
<br>
name in the upper directory.
<br>
A simple workaround is to replace these two files in include/mpp with
<br>
symbolic links to files with the same name in the upper directory.
<br>
<p>Would you mind giving this a try ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, July 13, 2016, Paul Kapinos &lt;kapinos_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developer,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we have some troubles when using OpenMPI and CMake on codes using 'SHMEM'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cf. 'man shmem_swap',
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran:
</span><br>
<span class="quotelev2">&gt; &gt;       INCLUDE &quot;mpp/shmem.fh&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes here is one such header file:
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.X.Y/oshmem/include/mpp/shmem.fh
</span><br>
<span class="quotelev1">&gt; ... since version 1.7. at least.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The significnat content is this line:
</span><br>
<span class="quotelev2">&gt; &gt;      include 'shmem.fh'
</span><br>
<span class="quotelev1">&gt; whereby OpenMPI mean to include not the same file by itself (= infinite
</span><br>
<span class="quotelev1">&gt; loop!) but I believe these one file:
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.X.Y/oshmem/include/shmem.fh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (The above paths are in the source code distributions; in the installation
</span><br>
<span class="quotelev1">&gt; the files are located here:  include/shmem.fh      include/mpp/shmem.fh)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This works. Unless you start using CMake. Because CMake is 'intelligent'
</span><br>
<span class="quotelev1">&gt; and try to add the search paths recursively, (I believe,) gloriously
</span><br>
<span class="quotelev1">&gt; enabling the infinite loop by including the 'shmem.fh' file from the
</span><br>
<span class="quotelev1">&gt; 'shmem.fh' file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steps to repriduce:
</span><br>
<span class="quotelev1">&gt; $ mkdir build; cd build; cmake ..
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The second one command need some minute(s), sticking by the 'Scanning
</span><br>
<span class="quotelev1">&gt; dependencies of target mpihelloworld' step.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If connecting by 'strace -p &lt;PID&gt;' to the 'cmake' process you will see
</span><br>
<span class="quotelev1">&gt; lines like below, again and again. So I think CMake just include the
</span><br>
<span class="quotelev1">&gt; 'shmem.fh' file from itself unless the stack is full / a limit is reached /
</span><br>
<span class="quotelev1">&gt; the moon shines, and thus hangs for a while (seconds/minutes) in the
</span><br>
<span class="quotelev1">&gt; 'Scanning dependencies...' state.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Well, maybe having a file including the same file is not that good?*
</span><br>
<span class="quotelev1">&gt; If the file 'include/mpp/shmem.fh' would include not 'shmem.fh' but
</span><br>
<span class="quotelev1">&gt; 'somethingelse.fh' located in 'include/...' these infinite loop would be
</span><br>
<span class="quotelev1">&gt; impossible at all...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And by the way: is here a way to limit the maximum include depths in CMake
</span><br>
<span class="quotelev1">&gt; for header files? This would workaround this one 'infinite include loop'
</span><br>
<span class="quotelev1">&gt; issue...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have a nice day,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ..............
</span><br>
<span class="quotelev1">&gt; access(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;,
</span><br>
<span class="quotelev1">&gt; R_OK) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;,
</span><br>
<span class="quotelev1">&gt; {st_mode=S_IFREG|0644, st_size=205, ...}) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5271
</span><br>
<span class="quotelev1">&gt; fstat(5271, {st_mode=S_IFREG|0644, st_size=205, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 32768, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0)
</span><br>
<span class="quotelev1">&gt; = 0x7f08457d2000
</span><br>
<span class="quotelev1">&gt; read(5271, &quot;!\n!   Copyright (c) 2013      Me&quot;..., 32768) = 205
</span><br>
<span class="quotelev1">&gt; read(5271, &quot;&quot;, 32768)                   = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; access(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;,
</span><br>
<span class="quotelev1">&gt; R_OK) = 0
</span><br>
<span class="quotelev1">&gt; stat(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;,
</span><br>
<span class="quotelev1">&gt; {st_mode=S_IFREG|0644, st_size=205, ...}) = 0
</span><br>
<span class="quotelev1">&gt; open(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;,
</span><br>
<span class="quotelev1">&gt; O_RDONLY) = 5272
</span><br>
<span class="quotelev1">&gt; fstat(5272, {st_mode=S_IFREG|0644, st_size=205, ...}) = 0
</span><br>
<span class="quotelev1">&gt; mmap(NULL, 32768, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0)
</span><br>
<span class="quotelev1">&gt; = 0x7f08457ca000
</span><br>
<span class="quotelev1">&gt; read(5272, &quot;!\n!   Copyright (c) 2013      Me&quot;..., 32768) = 205
</span><br>
<span class="quotelev1">&gt; read(5272, &quot;&quot;, 32768)                   = 0
</span><br>
<span class="quotelev1">&gt; ..............
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19195/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19196.php">Paul Kapinos: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Previous message:</strong> <a href="19194.php">Edgar Gabriel: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19184.php">Paul Kapinos: "[OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19196.php">Paul Kapinos: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Reply:</strong> <a href="19196.php">Paul Kapinos: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
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
