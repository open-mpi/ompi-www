<?
$subject_val = "Re: [OMPI users] Building 1.6.3 on OS X 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 13:12:11 2013" -->
<!-- isoreceived="20130211181211" -->
<!-- sent="Mon, 11 Feb 2013 10:11:45 -0800" -->
<!-- isosent="20130211181145" -->
<!-- name="Beatty, Daniel D CIV NAVAIR, 474300D" -->
<!-- email="daniel.beatty_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.6.3 on OS X 10.8" -->
<!-- id="CD3E7461.C25C%daniel.beatty_at_navy.mil" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPa_DODs0XgNEQVvBTygydEkWuDAFrEt-66pT1Dyou===mff=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building 1.6.3 on OS X 10.8<br>
<strong>From:</strong> Beatty, Daniel D CIV NAVAIR, 474300D (<em>daniel.beatty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 13:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21373.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21371.php">albatross_at_[hidden]: "Re: [OMPI users] error when running mpirun"</a>
<li><strong>In reply to:</strong> <a href="21368.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Fellow MPI users,
<br>
I may need to get involved here on this issue also.  I will need to do a
<br>
similar number for Mountain Lion/ and regular Lion.  I am still a little bit
<br>
in design phase at this time so I am paying close attention to this thread.
<br>
<p>There are two issues that have concerned me.  One is universal capabilities,
<br>
namely ensuring that the library allows the same results for binaries in
<br>
both any of their universal compiled forms.    Also, the linking of the MPI
<br>
host files and marshaling capabilities.  I am hoping to address these issues
<br>
in design before I get to implementation.  Naturally, there is a matter of
<br>
tinkering that goes back and forth.  So I will need some help here.  Is
<br>
there a standard for MPI currently in existence that enables such a thing?
<br>
If there is a standard, is there a way to accredit such a standard for OSX
<br>
if it gets built for universal capabilities?   What is the standards body
<br>
for MPI to facilitate this?   If such a thing is built, how do we contribute
<br>
back in a standards consistent way?
<br>
<p><p><p>V/R,
<br>
<p>Daniel Beatty, Ph.D.
<br>
Computer Scientist, Detonation Sciences Branch
<br>
Code 474300D
<br>
1 Administration Circle M/S 1109
<br>
China Lake, CA 93555
<br>
daniel.beatty_at_[hidden]
<br>
(LandLine) (760)939-7097
<br>
(iPhone) (806)438-6620
<br>
<p><p><p>On 2/11/13 8:09 AM, &quot;Mark Bolstad&quot; &lt;the.render.dude_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It's not just one plugin, it was about 6 of them. I just deleted the error
</span><br>
<span class="quotelev1">&gt; message from the others as I believed that opal_init was the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I have done a full build multiple times and have blown away all the
</span><br>
<span class="quotelev1">&gt; plugins and other&#160;remnants&#160;of the build and install and get the same results
</span><br>
<span class="quotelev1">&gt; every time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the output from running ompi_info (same result with or w/o OPAL_PREFIX
</span><br>
<span class="quotelev1">&gt; are the same; LD_LIBRARY_PATH set; path points to both bin and lib directory
</span><br>
<span class="quotelev1">&gt; ):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:~/papillon/build/src] bolstadm% ompi_info &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Package: Open MPI bolstadm_at_bolstadm-lm3 Distribution
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Open MPI: 1.6.3
</span><br>
<span class="quotelev1">&gt; &#160; &#160;Open MPI SVN revision: r27472
</span><br>
<span class="quotelev1">&gt; &#160; &#160;Open MPI release date: Oct 24, 2012
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Open RTE: 1.6.3
</span><br>
<span class="quotelev1">&gt; &#160; &#160;Open RTE SVN revision: r27472
</span><br>
<span class="quotelev1">&gt; &#160; &#160;Open RTE release date: Oct 24, 2012
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; OPAL: 1.6.3
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;OPAL SVN revision: r27472
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;OPAL release date: Oct 24, 2012
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MPI API: 2.1
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; Ident string: 1.6.3
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Prefix:
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3
</span><br>
<span class="quotelev1">&gt; &#160;Configured architecture: x86_64-apple-darwin12.2.1
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Configure host: bolstadm-lm3
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;Configured by: bolstadm
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;Configured on: Sun Feb 10 19:09:36 EST 2013
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Configure host: bolstadm-lm3
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Built by: bolstadm
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Built on: Sun Feb 10 19:16:52 EST 2013
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Built host: bolstadm-lm3
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; C bindings: yes
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; C++ bindings: yes
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt; &#160;Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; C compiler: gcc
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt; &#160; C compiler family name: GNU
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; C compiler version: 4.2.1
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; C++ compiler: g++
</span><br>
<span class="quotelev1">&gt; &#160; &#160;C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt; &#160; Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt; &#160; Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;C profiling: yes
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;C++ profiling: yes
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; C++ exceptions: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;Sparse Groups: no
</span><br>
<span class="quotelev1">&gt; &#160; Internal debug support: no
</span><br>
<span class="quotelev1">&gt; &#160; MPI interface warnings: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160;libltdl support: yes
</span><br>
<span class="quotelev1">&gt; &#160; &#160;Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; &#160;mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160;MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;Symbol vis. support: yes
</span><br>
<span class="quotelev1">&gt; &#160; &#160;Host topology support: yes
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt; &#160; &#160;FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;VampirTrace support: yes
</span><br>
<span class="quotelev1">&gt; &#160; MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev1">&gt; &#160; &#160; MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev1">&gt; &#160; MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_paffinity_hwloc: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_carto_auto_detect: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_carto_file: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_shmem_mmap: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_shmem_posix: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_shmem_sysv: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_maffinity_first_use: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_maffinity_hwloc: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_sysinfo_darwin: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_errmgr_default: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_grpcomm_bad: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_grpcomm_basic: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_ess_env: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_ess_hnp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_ess_singleton: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_ess_slave: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_ess_slurm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_ess_slurmd: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_ess_tool: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_notifier_command: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_notifier_syslog: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_oob_tcp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_odls_default: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_iof_hnp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_iof_orted: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_iof_tool: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_ras_cm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_ras_slurm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_rmaps_load_balance: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_rmaps_rank_file: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_rmaps_resilient: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_rmaps_round_robin: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_rmaps_seq: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_rmaps_topo: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_rml_oob: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_routed_binomial: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_routed_cm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_routed_direct: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_routed_linear: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_routed_radix: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_routed_slave: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_plm_rsh: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_plm_slurm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_filem_rsh: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_allocator_basic: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_allocator_bucket: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_coll_basic: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_coll_hierarch: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_coll_inter: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_coll_self: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_coll_sm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_coll_sync: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_coll_tuned: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_io_romio: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_rcache_vma: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_mpool_fake: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_mpool_rdma: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_mpool_sm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_pml_bfo: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_pml_cm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_pml_csum: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_pml_ob1: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_pml_v: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_osc_pt2pt: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_osc_rdma: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_btl_self: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_btl_sm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_btl_tcp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_topo_unity: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_pubsub_orte: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_dpm_orte: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA timer: darwin (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here's an example of a plugin reported as an error:
</span><br>
<span class="quotelev1">&gt; [bolstadm-lm3:~/papillon/build/src] bolstadm% l
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_paffinity_hwloc*
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_paffinity_hwloc.a
</span><br>
<span class="quotelev1">&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmpi
</span><br>
<span class="quotelev1">&gt; /mca_paffinity_hwloc.la &lt;<a href="http://mca_paffinity_hwloc.la">http://mca_paffinity_hwloc.la</a>&gt; *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 11, 2013 at 8:27 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That's very idd; I cant think of why that would happen offhand. I build and
</span><br>
<span class="quotelev2">&gt;&gt; run all the time on ML with no problems. Can you deleted that plugin and run
</span><br>
<span class="quotelev2">&gt;&gt; ok?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 10, 2013, at 10:22 PM, &quot;Mark Bolstad&quot; &lt;the.render.dude_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I having some difficulties with building/running 1.6.3 on Mountain Lion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (10.8.2). I build with no errors and install into a prefix directory. I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following errors:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [bolstadm-lm3:38486] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pi/mca_shmem_sysv: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; likely to abort. &#160;There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; environment problems. &#160;This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; opal_shmem_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &#160; --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime/orte_init.c at line 79
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun.c at line 694
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I've fiddled with LD_LIBRARY_PATH, DYLD_LIBRARY_PATH, OPAL_PREFIX, in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; combination and separately, and none of these seem to have much effect.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; So, I decided to try a straight build. The only option was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-mpi-f77. It installed into /usr/local. There is no other mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version installed on the system, and I still get the same errors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; However, I did install the version from MacPorts (also 1.6.3), and it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I would appreciate if anyone had some insight into building on OS X 10.8.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Mark
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21372/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21372/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21373.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21371.php">albatross_at_[hidden]: "Re: [OMPI users] error when running mpirun"</a>
<li><strong>In reply to:</strong> <a href="21368.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
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
