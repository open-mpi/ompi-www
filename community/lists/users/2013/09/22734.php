<?
$subject_val = "Re: [OMPI users] non-functional mpif90 compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 30 13:48:51 2013" -->
<!-- isoreceived="20130930174851" -->
<!-- sent="Mon, 30 Sep 2013 19:48:51 +0200" -->
<!-- isosent="20130930174851" -->
<!-- name="Damiano Natali" -->
<!-- email="damiano.natali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] non-functional mpif90 compiler" -->
<!-- id="CAMp0y1X5fqAKtYmaUtsQKOEU=K-1zFaBfmXYuJ+OuHDhhfd_qQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5249A3CB.2_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] non-functional mpif90 compiler<br>
<strong>From:</strong> Damiano Natali (<em>damiano.natali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-30 13:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22735.php">Jeff Squyres (jsquyres): "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Previous message:</strong> <a href="22733.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>In reply to:</strong> <a href="22733.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22737.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Reply:</strong> <a href="22737.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus, first of all thank you very much for you help. I really appreciate!
<br>
<p>Then you are right, I have OpenFOAM so 'which mpif90' addresses to another
<br>
installation that probably wasn't meant to have f90 bindings. However, when
<br>
I compile my f90 code I use absolute path.
<br>
<p>Even when I am in the /bin directory  of the ompi, ./ompi_info says that
<br>
f90 bindings are ok, but ./mpif90 complains about f90 supports.
<br>
<p>I suspect there must be another issue.
<br>
<p>Thanks again,
<br>
Damiano
<br>
<p><p>2013/9/30 Gus Correa &lt;gus_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi Damiano
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you setup your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; to point to your OMPI installation?
</span><br>
<span class="quotelev1">&gt; I.e. to:
</span><br>
<span class="quotelev1">&gt;  /home/damiano/fortran/openmpi-**1.6.5/installation/bin
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;  /home/damiano/fortran/openmpi-**1.6.5/installation/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some OS distributions, commercial compilers, and other software,
</span><br>
<span class="quotelev1">&gt; come with &quot;extra&quot; OMPI installations, which can be ahead of
</span><br>
<span class="quotelev1">&gt; your path.
</span><br>
<span class="quotelev1">&gt; &quot;which mpif90&quot; will tell you what you are actually using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For what it is worth, disabling shared libraries
</span><br>
<span class="quotelev1">&gt; at configure time may be challenging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/30/2013 11:58 AM, Damiano Natali wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to install openMPI on a Linux 64-bit OpenSuse machine with
</span><br>
<span class="quotelev2">&gt;&gt; the following lines
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/home/damiano/**fortran/openmpi-1.6.5/**installation/
</span><br>
<span class="quotelev2">&gt;&gt; --disable-shared --enable-static --with-mpi-f90-size=medium
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-f90 cflags=-m64 cxxflags=-m64 fflags=-m64 fcflags=-m64
</span><br>
<span class="quotelev2">&gt;&gt; make -j4 all
</span><br>
<span class="quotelev2">&gt;&gt; make install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; everything goes on nicely and I end up with an installation folder with
</span><br>
<span class="quotelev2">&gt;&gt; a bin subfolder. However, when I try to launch the mpif90 compiler the
</span><br>
<span class="quotelev2">&gt;&gt; error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------**------------------------------**
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------**------------------------------**
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is still there. The output of the ompi_info is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;            Configure host: caillou.dicat.unige.it
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://caillou.dicat.unige.it">http://caillou.dicat.unige.it</a>**&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Configured by: damiano
</span><br>
<span class="quotelev2">&gt;&gt;             Configured on: Mon Sep 30 17:17:39 CEST 2013
</span><br>
<span class="quotelev2">&gt;&gt;            Configure host: caillou.dicat.unige.it
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://caillou.dicat.unige.it">http://caillou.dicat.unige.it</a>**&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Built by: damiano
</span><br>
<span class="quotelev2">&gt;&gt;                  Built on: Mon Sep 30 17:26:12 CEST 2013
</span><br>
<span class="quotelev2">&gt;&gt;                Built host: caillou.dicat.unige.it
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://caillou.dicat.unige.it">http://caillou.dicat.unige.it</a>**&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;              C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 bindings size: medium
</span><br>
<span class="quotelev2">&gt;&gt;                C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;       C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;    C compiler family name: GNU
</span><br>
<span class="quotelev2">&gt;&gt;        C compiler version: 4.7.1
</span><br>
<span class="quotelev2">&gt;&gt;              C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;     C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran90 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;               C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;            Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;             Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt;    Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;    MPI interface warnings: no
</span><br>
<span class="quotelev2">&gt;&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;           libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;           MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt;&gt;       Symbol vis. support: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Host topology support: yes
</span><br>
<span class="quotelev2">&gt;&gt;            MPI extensions: affinity example
</span><br>
<span class="quotelev2">&gt;&gt;     FT Checkpoint support: no (checkpoint thread: no)
</span><br>
<span class="quotelev2">&gt;&gt;       VampirTrace support: yes
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_MAX_PROCESSOR_NAME: 256
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_MAX_ERROR_STRING: 256
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_MAX_OBJECT_NAME: 64
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_MAX_INFO_KEY: 36
</span><br>
<span class="quotelev2">&gt;&gt;          MPI_MAX_INFO_VAL: 256
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_MAX_PORT_NAME: 1024
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_MAX_DATAREP_STRING: 128
</span><br>
<span class="quotelev2">&gt;&gt;             MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA carto: auto_detect (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA carto: file (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA maffinity: first_use (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: romio (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: v (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: self (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA odls: default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: loadleveler (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: gridengine (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.6.3)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: load_balance (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: rank_file (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: resilient (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: round_robin (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ess: env (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ess: singleton (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; as far as I know, the f90 bindings seem to be configured properly. What
</span><br>
<span class="quotelev2">&gt;&gt; can be wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks you for your attention,
</span><br>
<span class="quotelev2">&gt;&gt; Damiano
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Damiano Natali
</span><br>
<span class="quotelev2">&gt;&gt; mail damiano.natali_at_[hidden] &lt;mailto:damiano.natali_at_gmail.**com&lt;damiano.natali_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; skype damiano.natali
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Damiano Natali
mail damiano.natali_at_[hidden]
skype damiano.natali
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22734/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22735.php">Jeff Squyres (jsquyres): "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Previous message:</strong> <a href="22733.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>In reply to:</strong> <a href="22733.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22737.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
<li><strong>Reply:</strong> <a href="22737.php">Gus Correa: "Re: [OMPI users] non-functional mpif90 compiler"</a>
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
