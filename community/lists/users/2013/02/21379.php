<?
$subject_val = "Re: [OMPI users] Building 1.6.3 on OS X 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 15:41:25 2013" -->
<!-- isoreceived="20130211204125" -->
<!-- sent="Mon, 11 Feb 2013 12:41:16 -0800" -->
<!-- isosent="20130211204116" -->
<!-- name="Beatty, Daniel D CIV NAVAIR, 474300D" -->
<!-- email="daniel.beatty_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.6.3 on OS X 10.8" -->
<!-- id="CD3E976C.C285%daniel.beatty_at_navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CF4135_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-02-11 15:41:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21380.php">Daniel Fetchinson: "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Previous message:</strong> <a href="21378.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
The Intel+PPC is one issue.  However, even on Intel, there tends to be a
<br>
distinction between Intel environments going from Xeon to Core iX
<br>
environments. While Objective-C/C/C++ handle this well, the Fortran
<br>
compilers have given me a different story over the years.  It tends to be
<br>
the case that not all of the 64 bit compilations are not the same,
<br>
especially with the Fortran compilers.  The LLVM compiler for Objective C
<br>
with C based MPI constructs tends to be more consistent.  However, if I have
<br>
to reference legacy Fortran code, then I could be in trouble.   I am hoping
<br>
that in my next development cycle to make an architecture that insulates
<br>
this effect, regardless of language.
<br>
<p>The second issue of the host files has to do with a defunct capability for
<br>
example Xgrid.  It used to be that various Xgrid sites were reasonable
<br>
sources of information with regards to MPI and one could get the recipes to
<br>
equip either a cluster or grid environment.  Examples included TenGrid
<br>
(http:/tengrid.com) , MacResearch ( <a href="http://www.macresearch.org">http://www.macresearch.org</a>), etc.  I
<br>
hope that the new amount of data being collected at the open MPI site will
<br>
facilitate both the mobile and data center variety of MPI alike.  The beauty
<br>
of mobility is the feature that the Mac, Windows, and potentially iOS, and
<br>
Andriod platforms bring to the concept of MPI.  The cost is keeping track of
<br>
when such devices come and go from such grids.
<br>
<p>I may had a misarticulated question with regards to the marshaling
<br>
capabilities of MPI.  It may have improved since I last used MPI.  I know
<br>
that there are standards bodies for MPI itself.  Therefore, I will need to
<br>
check to see what changes have occurred.
<br>
<p><p>Daniel Beatty, Ph.D.
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
<p><p><p><p>On 2/11/13 10:37 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 11, 2013, at 1:11 PM, &quot;Beatty, Daniel D CIV NAVAIR, 474300D&quot;
</span><br>
<span class="quotelev1">&gt; &lt;daniel.beatty_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There are two issues that have concerned me.  One is universal capabilities,
</span><br>
<span class="quotelev2">&gt;&gt; namely ensuring that the library allows the same results for binaries in both
</span><br>
<span class="quotelev2">&gt;&gt; any of their universal compiled forms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure what you mean here -- are you referring to Intel+PPC &quot;universal&quot; OS X
</span><br>
<span class="quotelev1">&gt; binaries?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, the linking of the MPI host files and marshaling capabilities.  I am
</span><br>
<span class="quotelev2">&gt;&gt; hoping to address these issues in design before I get to implementation.
</span><br>
<span class="quotelev2">&gt;&gt; Naturally, there is a matter of tinkering that goes back and forth.  So I
</span><br>
<span class="quotelev2">&gt;&gt; will need some help here.  Is there a standard for MPI currently in existence
</span><br>
<span class="quotelev2">&gt;&gt; that enables such a thing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Er... I'm also not sure what you mean here, either.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What exactly do you mean by &quot;linking of MPI host files&quot;?  Host files are just
</span><br>
<span class="quotelev1">&gt; text files; they're not involved with the (run-time or compile-time) linker at
</span><br>
<span class="quotelev1">&gt; all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What marshaling capabilities are you referring to, MPI datatypes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If there is a standard, is there a way to accredit such a standard for OSX if
</span><br>
<span class="quotelev2">&gt;&gt; it gets built for universal capabilities?   What is the standards body for
</span><br>
<span class="quotelev2">&gt;&gt; MPI to facilitate this?   If such a thing is built, how do we contribute back
</span><br>
<span class="quotelev2">&gt;&gt; in a standards consistent way?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; V/R,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Daniel Beatty, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Computer Scientist, Detonation Sciences Branch
</span><br>
<span class="quotelev2">&gt;&gt; Code 474300D
</span><br>
<span class="quotelev2">&gt;&gt; 1 Administration Circle M/S 1109
</span><br>
<span class="quotelev2">&gt;&gt; China Lake, CA 93555
</span><br>
<span class="quotelev2">&gt;&gt; daniel.beatty_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (LandLine) (760)939-7097
</span><br>
<span class="quotelev2">&gt;&gt; (iPhone) (806)438-6620
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2/11/13 8:09 AM, &quot;Mark Bolstad&quot; &lt;the.render.dude_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's not just one plugin, it was about 6 of them. I just deleted the error
</span><br>
<span class="quotelev2">&gt;&gt; message from the others as I believed that opal_init was the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, I have done a full build multiple times and have blown away all the
</span><br>
<span class="quotelev2">&gt;&gt; plugins and other remnants of the build and install and get the same results
</span><br>
<span class="quotelev2">&gt;&gt; every time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's the output from running ompi_info (same result with or w/o OPAL_PREFIX
</span><br>
<span class="quotelev2">&gt;&gt; are the same; LD_LIBRARY_PATH set; path points to both bin and lib directory
</span><br>
<span class="quotelev2">&gt;&gt; ):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:~/papillon/build/src] bolstadm% ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; Package: Open MPI bolstadm_at_bolstadm-lm3 Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.6.3
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r27472
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI release date: Oct 24, 2012
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.6.3
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r27472
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE release date: Oct 24, 2012
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.6.3
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r27472
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL release date: Oct 24, 2012
</span><br>
<span class="quotelev2">&gt;&gt;                  MPI API: 2.1
</span><br>
<span class="quotelev2">&gt;&gt;             Ident string: 1.6.3
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix:
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: x86_64-apple-darwin12.2.1
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: bolstadm-lm3
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: bolstadm
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Sun Feb 10 19:09:36 EST 2013
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: bolstadm-lm3
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: bolstadm
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Sun Feb 10 19:16:52 EST 2013
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: bolstadm-lm3
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;   C compiler family name: GNU
</span><br>
<span class="quotelev2">&gt;&gt;       C compiler version: 4.2.1
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;           Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;            Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;   MPI interface warnings: no
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt;&gt;      Symbol vis. support: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Host topology support: yes
</span><br>
<span class="quotelev2">&gt;&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev2">&gt;&gt;    FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt;&gt;      VampirTrace support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_paffinity_hwloc: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_carto_auto_detect: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_carto_file: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_shmem_mmap: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_shmem_posix: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_shmem_sysv: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_maffinity_first_use: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_maffinity_hwloc: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_sysinfo_darwin: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_errmgr_default: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_grpcomm_bad: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_grpcomm_basic: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_ess_env: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_ess_hnp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_ess_singleton: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_ess_slave: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_ess_slurm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_ess_slurmd: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_ess_tool: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_notifier_command: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_notifier_syslog: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_oob_tcp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_odls_default: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_iof_hnp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_iof_orted: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_iof_tool: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_ras_cm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_ras_slurm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_rmaps_load_balance: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_rmaps_rank_file: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_rmaps_resilient: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_rmaps_round_robin: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_rmaps_seq: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_rmaps_topo: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_rml_oob: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_routed_binomial: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_routed_cm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_routed_direct: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_routed_linear: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_routed_radix: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_routed_slave: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_plm_rsh: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_plm_slurm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_filem_rsh: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_allocator_basic: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_allocator_bucket: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_coll_basic: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_coll_hierarch: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_coll_inter: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_coll_self: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_coll_sm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_coll_sync: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_coll_tuned: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_io_romio: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_rcache_vma: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_mpool_fake: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_mpool_rdma: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_mpool_sm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_pml_bfo: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_pml_cm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_pml_csum: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_pml_ob1: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_pml_v: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_osc_pt2pt: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_osc_rdma: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_btl_self: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_btl_sm: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_btl_tcp: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_topo_unity: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_pubsub_orte: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:86426] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_dpm_orte: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: darwin (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.3)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And here's an example of a plugin reported as an error:
</span><br>
<span class="quotelev2">&gt;&gt; [bolstadm-lm3:~/papillon/build/src] bolstadm% l
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_paffinity_hwloc*
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_paffinity_hwloc.a
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openmp
</span><br>
<span class="quotelev2">&gt;&gt; i/mca_paffinity_hwloc.la &lt;<a href="http://mca_paffinity_hwloc.la">http://mca_paffinity_hwloc.la</a>&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Feb 11, 2013 at 8:27 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
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
<span class="quotelev3">&gt;&gt;&gt; I having some difficulties with building/running 1.6.3 on Mountain Lion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (10.8.2). I build with no errors and install into a prefix directory. I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bolstadm-lm3:38486] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3/lib/openm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pi/mca_shmem_sysv: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime/orte_init.c at line 79
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [bolstadm-lm3:38486] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun.c at line 694
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've fiddled with LD_LIBRARY_PATH, DYLD_LIBRARY_PATH, OPAL_PREFIX, in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; combination and separately, and none of these seem to have much effect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I decided to try a straight build. The only option was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-mpi-f77. It installed into /usr/local. There is no other mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version installed on the system, and I still get the same errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I did install the version from MacPorts (also 1.6.3), and it works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correctly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would appreciate if anyone had some insight into building on OS X 10.8.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mark
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p>
<br><p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21379/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21380.php">Daniel Fetchinson: "Re: [OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Previous message:</strong> <a href="21378.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21374.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
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
