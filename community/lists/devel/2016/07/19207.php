<?
$subject_val = "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 20:07:46 2016" -->
<!-- isoreceived="20160714000746" -->
<!-- sent="Thu, 14 Jul 2016 09:07:43 +0900" -->
<!-- isosent="20160714000743" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SHMEM, &amp;quot;mpp/shmem.fh&amp;quot;, CMake and infinite loops" -->
<!-- id="c7b31e12-22ce-3659-7a27-d80024c8c601_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="006e0538c1894f2fafa184f190b09e01_at_rwthex-w1-a.rwth-ad.de" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 20:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19208.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19206.php">Gilles Gouaillardet: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19196.php">Paul Kapinos: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p><p>thanks for testing the workaround
<br>
<p>/* i was on a trip and could not do it myself */
<br>
<p><p>At first glance, i agree with Jeff and the root cause seems to be a 
<br>
CMake bug.
<br>
<p>/* i cannot find any rationale for automatically including some 
<br>
directories that were not requested by the user */
<br>
<p><p>note that even if you could limit the recursion depth with an 
<br>
appropriate CMake option, that would some the infinite loop,
<br>
<p>but dependencies would be incorrect (e.g. shmem.fh from the upper 
<br>
directory would be missing)
<br>
<p><p>That being said, i am more pragmatic that dogmatic, so i am fine 
<br>
updating OpenMPI so it avoids a CMake bug,
<br>
<p>let's follow up at <a href="https://github.com/open-mpi/ompi/issues/1868">https://github.com/open-mpi/ompi/issues/1868</a>
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 7/13/2016 8:30 PM, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 07/13/16 01:10, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The two header files in include/mpp simply include the file with the 
</span><br>
<span class="quotelev2">&gt;&gt; same name
</span><br>
<span class="quotelev2">&gt;&gt; in the upper directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yessir!
</span><br>
<span class="quotelev1">&gt; (and CMake do not care about the upper directory and build infinite loop)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A simple workaround is to replace these two files in include/mpp with 
</span><br>
<span class="quotelev2">&gt;&gt; symbolic
</span><br>
<span class="quotelev2">&gt;&gt; links to files with the same name in the upper directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would you mind giving this a try ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It work very well, at least for the one test case provided. So yes, 
</span><br>
<span class="quotelev1">&gt; patching any installation of Open MPI could be a workaround. However 
</span><br>
<span class="quotelev1">&gt; we would really love to avoid this need to patch any Open MPI 
</span><br>
<span class="quotelev1">&gt; installation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe OpenMPI's developer could think about how-to minimize the 
</span><br>
<span class="quotelev1">&gt; probability of such loops? Symlink is one alternative, another one 
</span><br>
<span class="quotelev1">&gt; would be renaming one of the headers..
</span><br>
<span class="quotelev1">&gt; we fully trust to Open MPI's developers expertise in this :-)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pk224850_at_linuxc2:/opt/MPI/openmpi-1.8.1/linux/intel/include[519]$ ls 
</span><br>
<span class="quotelev1">&gt; -la mpp/shmem.fh
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx 1 pk224850 pk224850 11 Jul 13 13:20 mpp/shmem.fh -&gt; 
</span><br>
<span class="quotelev1">&gt; ../shmem.fh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wednesday, July 13, 2016, Paul Kapinos &lt;kapinos_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:kapinos_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Dear OpenMPI developer,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     we have some troubles when using OpenMPI and CMake on codes using 
</span><br>
<span class="quotelev2">&gt;&gt; 'SHMEM'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Cf. 'man shmem_swap',
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;       Fortran:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;       INCLUDE &quot;mpp/shmem.fh&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Yes here is one such header file:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; openmpi-1.X.Y/oshmem/include/mpp/shmem.fh
</span><br>
<span class="quotelev2">&gt;&gt;     ... since version 1.7. at least.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The significnat content is this line:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;      include 'shmem.fh'
</span><br>
<span class="quotelev2">&gt;&gt;     whereby OpenMPI mean to include not the same file by itself (= 
</span><br>
<span class="quotelev2">&gt;&gt; infinite
</span><br>
<span class="quotelev2">&gt;&gt;     loop!) but I believe these one file:
</span><br>
<span class="quotelev3">&gt;&gt;      &gt; openmpi-1.X.Y/oshmem/include/shmem.fh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     (The above paths are in the source code distributions; in the 
</span><br>
<span class="quotelev2">&gt;&gt; installation
</span><br>
<span class="quotelev2">&gt;&gt;     the files are located here:  include/shmem.fh include/mpp/shmem.fh)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     This works. Unless you start using CMake. Because CMake is 
</span><br>
<span class="quotelev2">&gt;&gt; 'intelligent' and
</span><br>
<span class="quotelev2">&gt;&gt;     try to add the search paths recursively, (I believe,) gloriously 
</span><br>
<span class="quotelev2">&gt;&gt; enabling
</span><br>
<span class="quotelev2">&gt;&gt;     the infinite loop by including the 'shmem.fh' file from the 
</span><br>
<span class="quotelev2">&gt;&gt; 'shmem.fh' file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Steps to repriduce:
</span><br>
<span class="quotelev2">&gt;&gt;     $ mkdir build; cd build; cmake ..
</span><br>
<span class="quotelev2">&gt;&gt;     $ make
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The second one command need some minute(s), sticking by the 
</span><br>
<span class="quotelev2">&gt;&gt; 'Scanning
</span><br>
<span class="quotelev2">&gt;&gt;     dependencies of target mpihelloworld' step.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     If connecting by 'strace -p &lt;PID&gt;' to the 'cmake' process you 
</span><br>
<span class="quotelev2">&gt;&gt; will see lines
</span><br>
<span class="quotelev2">&gt;&gt;     like below, again and again. So I think CMake just include the 
</span><br>
<span class="quotelev2">&gt;&gt; 'shmem.fh'
</span><br>
<span class="quotelev2">&gt;&gt;     file from itself unless the stack is full / a limit is reached / 
</span><br>
<span class="quotelev2">&gt;&gt; the moon
</span><br>
<span class="quotelev2">&gt;&gt;     shines, and thus hangs for a while (seconds/minutes) in the 
</span><br>
<span class="quotelev2">&gt;&gt; 'Scanning
</span><br>
<span class="quotelev2">&gt;&gt;     dependencies...' state.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     *Well, maybe having a file including the same file is not that 
</span><br>
<span class="quotelev2">&gt;&gt; good?*
</span><br>
<span class="quotelev2">&gt;&gt;     If the file 'include/mpp/shmem.fh' would include not 'shmem.fh' but
</span><br>
<span class="quotelev2">&gt;&gt;     'somethingelse.fh' located in 'include/...' these infinite loop 
</span><br>
<span class="quotelev2">&gt;&gt; would be
</span><br>
<span class="quotelev2">&gt;&gt;     impossible at all...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     And by the way: is here a way to limit the maximum include depths 
</span><br>
<span class="quotelev2">&gt;&gt; in CMake
</span><br>
<span class="quotelev2">&gt;&gt;     for header files? This would workaround this one 'infinite 
</span><br>
<span class="quotelev2">&gt;&gt; include loop'
</span><br>
<span class="quotelev2">&gt;&gt;     issue...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Have a nice day,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Paul Kapinos
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ..............
</span><br>
<span class="quotelev2">&gt;&gt; access(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; R_OK)
</span><br>
<span class="quotelev2">&gt;&gt;     = 0
</span><br>
<span class="quotelev2">&gt;&gt; stat(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;     {st_mode=S_IFREG|0644, st_size=205, ...}) = 0
</span><br>
<span class="quotelev2">&gt;&gt; open(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;     O_RDONLY) = 5271
</span><br>
<span class="quotelev2">&gt;&gt;     fstat(5271, {st_mode=S_IFREG|0644, st_size=205, ...}) = 0
</span><br>
<span class="quotelev2">&gt;&gt;     mmap(NULL, 32768, PROT_READ|PROT_WRITE, 
</span><br>
<span class="quotelev2">&gt;&gt; MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) =
</span><br>
<span class="quotelev2">&gt;&gt;     0x7f08457d2000
</span><br>
<span class="quotelev2">&gt;&gt;     read(5271, &quot;!\n!   Copyright (c) 2013      Me&quot;..., 32768) = 205
</span><br>
<span class="quotelev2">&gt;&gt;     read(5271, &quot;&quot;, 32768)                   = 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; access(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; R_OK)
</span><br>
<span class="quotelev2">&gt;&gt;     = 0
</span><br>
<span class="quotelev2">&gt;&gt; stat(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;     {st_mode=S_IFREG|0644, st_size=205, ...}) = 0
</span><br>
<span class="quotelev2">&gt;&gt; open(&quot;/opt/MPI/openmpi-1.10.2/linux/intel_16.0.2.181/include/mpp/shmem.fh&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;     O_RDONLY) = 5272
</span><br>
<span class="quotelev2">&gt;&gt;     fstat(5272, {st_mode=S_IFREG|0644, st_size=205, ...}) = 0
</span><br>
<span class="quotelev2">&gt;&gt;     mmap(NULL, 32768, PROT_READ|PROT_WRITE, 
</span><br>
<span class="quotelev2">&gt;&gt; MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) =
</span><br>
<span class="quotelev2">&gt;&gt;     0x7f08457ca000
</span><br>
<span class="quotelev2">&gt;&gt;     read(5272, &quot;!\n!   Copyright (c) 2013      Me&quot;..., 32768) = 205
</span><br>
<span class="quotelev2">&gt;&gt;     read(5272, &quot;&quot;, 32768)                   = 0
</span><br>
<span class="quotelev2">&gt;&gt;     ..............
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;     Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt;     RWTH Aachen University, IT Center
</span><br>
<span class="quotelev2">&gt;&gt;     Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt;     Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19195.php">http://www.open-mpi.org/community/lists/devel/2016/07/19195.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19196.php">http://www.open-mpi.org/community/lists/devel/2016/07/19196.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19207/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19208.php">Ralph Castain: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>Previous message:</strong> <a href="19206.php">Gilles Gouaillardet: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19196.php">Paul Kapinos: "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
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
