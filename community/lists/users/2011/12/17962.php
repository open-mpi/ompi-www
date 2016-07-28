<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 12:43:28 2011" -->
<!-- isoreceived="20111214174328" -->
<!-- sent="Wed, 14 Dec 2011 12:43:24 -0500" -->
<!-- isosent="20111214174324" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="5166C275-AC37-4CC3-822E-2913CBC843B0_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKRSGb_HD9R55tXrNQzhx2-YbhrgfWyraoRnjMZTr=p8BEQAWw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi - gfortran and ifort conflict<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 12:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17961.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17961.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about the output of this?
<br>
<p>/opt/openmpi/intel/bin/mpif90 -showme
<br>
<p>Anyway, something seems to be wrong with your OpenMPI installation.
<br>
Just read the output of your ompi_info in your email below.
<br>
You will see that the OpenMPI version is 1.4.4.
<br>
However, most components are version 1.4.2.
<br>
Do you agree?
<br>
<p>I would download the OpenMPI 1.4.4 tarball again and start fresh.
<br>
Untar the tarball in a brand new directory, don't overwrite old stuff.
<br>
Also, every time your OpenMPI build fails, or if you want to change compilers 
<br>
[say from gfortran to ifort],
<br>
do a 'make distclean' to cleanup any leftovers of previous builds,
<br>
and change the destination directory in --prefix= , to install in a different location.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On Dec 14, 2011, at 12:21 PM, Micah Sklut wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gustav, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did read Price's email: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I do &quot;which mpif90&quot;, i get: 
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/intel/bin/mpif90
</span><br>
<span class="quotelev1">&gt; which is the desired directory/binary
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I mentioned, the config log file indicated it was using ifort, and had no mention of gfortran. 
</span><br>
<span class="quotelev1">&gt; Below is the output from ompi_info. It shows reference to the correct ifort compiler. But, yet the mpif90 compiler, still yeilds a gfortran compiler.
</span><br>
<span class="quotelev1">&gt; --&gt;
</span><br>
<span class="quotelev1">&gt; barells_at_ip-10-17-153-123:~&gt; ompi_info
</span><br>
<span class="quotelev1">&gt;                  Package: Open MPI barells_at_ip-10-17-148-204 Distribution
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.4.4
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r25188
</span><br>
<span class="quotelev1">&gt;    Open MPI release date: Sep 27, 2011
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.4.4
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r25188
</span><br>
<span class="quotelev1">&gt;    Open RTE release date: Sep 27, 2011
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.4.4
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r25188
</span><br>
<span class="quotelev1">&gt;        OPAL release date: Sep 27, 2011
</span><br>
<span class="quotelev1">&gt;             Ident string: 1.4.4
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/lib64/mpi/gcc/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;           Configure host: ip-10-17-148-204
</span><br>
<span class="quotelev1">&gt;            Configured by: barells
</span><br>
<span class="quotelev1">&gt;            Configured on: Wed Dec 14 14:22:43 UTC 2011
</span><br>
<span class="quotelev1">&gt;           Configure host: ip-10-17-148-204
</span><br>
<span class="quotelev1">&gt;                 Built by: barells
</span><br>
<span class="quotelev1">&gt;                 Built on: Wed Dec 14 14:27:56 UTC 2011
</span><br>
<span class="quotelev1">&gt;               Built host: ip-10-17-148-204
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/intel/fce/9.1.040/bin/ifort
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: ifort
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/intel/fce/9.1.040/bin/ifort
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA carto: file (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: inter (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sync (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: csum (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: v (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: udapl (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: orted (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: tool (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                 MCA odls: default (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA routed: binomial (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA routed: direct (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA routed: linear (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: env (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: singleton (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ess: tool (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;              MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 14, 2011 at 12:11 PM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Micah
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you read Tim Prince's email to you?  Check it out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best thing is to set your environment variables [PATH, LD_LIBRARY_PATH, intel setup]
</span><br>
<span class="quotelev1">&gt; in your initialization file, .profile/.bashrc or .[t]cshrc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the output of 'ompi_info'? [From your ifort-built OpenMPI.]
</span><br>
<span class="quotelev1">&gt; Does it show ifort or gfortran?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 14, 2011, at 11:21 AM, Micah Sklut wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your thoughts,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It would certainly appear that it is a PATH issue, but I still haven't figured it out.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I type the ifort command, ifort does run.
</span><br>
<span class="quotelev2">&gt; &gt; The intel path is in my PATH and is the first directory listed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Looking at the configure.log, there is nothing indicating use or mentioning of &quot;gfortran&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; gfortran is in the /usr/bin directory, which is in the PATH as well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any other suggestions of things to look for?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Dec 14, 2011 at 11:05 AM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Micah
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is  ifort in your PATH?
</span><br>
<span class="quotelev2">&gt; &gt; If not, the OpenMPI configure script will use any fortran compiler it finds first, which may be gfortran.
</span><br>
<span class="quotelev2">&gt; &gt; You need to run the Intel compiler startup script before you run the OpenMPI configure.
</span><br>
<span class="quotelev2">&gt; &gt; The easy thing to do is to source the Intel script inside your .profile/.bashrc or .[t]cshrc file.
</span><br>
<span class="quotelev2">&gt; &gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 14, 2011, at 9:49 AM, Micah Sklut wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi All,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have installed openmpi for gfortran, but am now attempting to install openmpi as ifort.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have run the following configuration:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./configure --prefix=/opt/openmpi/intel CC=gcc CXX=g++ F77=ifort FC=ifort
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The install works successfully, but when I run /opt/openmpi/intel/bin/mpif90, it runs as gfortran.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Oddly, when I am user: root, the same mpif90 runs as ifort.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Can someone please alleviate my confusion as to why I mpif90 is not running as ifort?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you for your suggestions,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Micah
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Micah Sklut
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Micah Sklut
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17961.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17961.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
