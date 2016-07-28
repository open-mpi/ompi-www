<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 12:46:59 2007" -->
<!-- isoreceived="20070509164659" -->
<!-- sent="Wed, 9 May 2007 09:46:53 -0700" -->
<!-- isosent="20070509164653" -->
<!-- name="Steven Truong" -->
<!-- email="midair77_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question. Please help." -->
<!-- id="28bb77d30705090946m70237007r6db6a0dc1b2d8345_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1178702128.29140.14.camel_at_phy068095" -->
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
<strong>From:</strong> Steven Truong (<em>midair77_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 12:46:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3224.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Previous message:</strong> <a href="3222.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3217.php">Kevin Radican: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3224.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Reply:</strong> <a href="3224.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank Kevin and Brook for replying to my question.  I am going to try
<br>
out what Kevin suggested.
<br>
<p>Steven.
<br>
<p>On 5/9/07, Kevin Radican &lt;radicak_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use VASP 4.6 in parallel with opemmpi 1.1.2 without any problems on
</span><br>
<span class="quotelev1">&gt; x86_64 with opensuse and compiled with gcc and Intel fortran and use
</span><br>
<span class="quotelev1">&gt; torque PBS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used standard configure to build openmpi something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local --enable-static --with-threads
</span><br>
<span class="quotelev1">&gt; --with-tm=/usr/local --with-libnuma
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the ACLM math lapack libs and built Blacs and Scalapack with them
</span><br>
<span class="quotelev1">&gt; too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attached my vasp makefile, I might of added
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi.o : mpi.F
</span><br>
<span class="quotelev1">&gt;         $(CPP)
</span><br>
<span class="quotelev1">&gt;         $(FC) -FR -lowercase -O0 -c $*$(SUFFIX)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to the end of the make file, It doesn't look like it is in the example
</span><br>
<span class="quotelev1">&gt; makefiles they give, but I compiled this a while ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Kevin
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
<span class="quotelev1">&gt; On Tue, 2007-05-08 at 19:18 -0700, Steven Truong wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi, all.  I am new to OpenMPI and after initial setup I tried to run
</span><br>
<span class="quotelev2">&gt; &gt; my app but got the followign errors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16673] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16673] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16673] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16673] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16674] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16674] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16674] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16674] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16675] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16675] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16675] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16675] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16676] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16676] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16676] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; [node07.my.com:16676] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec noticed that job rank 2 with PID 16675 on node node07 exited
</span><br>
<span class="quotelev2">&gt; &gt; on signal 60 (Real-time signal 26).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  /usr/local/openmpi-1.2.1/bin/ompi_info
</span><br>
<span class="quotelev2">&gt; &gt;                 Open MPI: 1.2.1
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI SVN revision: r14481
</span><br>
<span class="quotelev2">&gt; &gt;                 Open RTE: 1.2.1
</span><br>
<span class="quotelev2">&gt; &gt;    Open RTE SVN revision: r14481
</span><br>
<span class="quotelev2">&gt; &gt;                     OPAL: 1.2.1
</span><br>
<span class="quotelev2">&gt; &gt;        OPAL SVN revision: r14481
</span><br>
<span class="quotelev2">&gt; &gt;                   Prefix: /usr/local/openmpi-1.2.1
</span><br>
<span class="quotelev2">&gt; &gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt; &gt;            Configured by: root
</span><br>
<span class="quotelev2">&gt; &gt;            Configured on: Mon May  7 18:32:56 PDT 2007
</span><br>
<span class="quotelev2">&gt; &gt;           Configure host: neptune.nanostellar.com
</span><br>
<span class="quotelev2">&gt; &gt;                 Built by: root
</span><br>
<span class="quotelev2">&gt; &gt;                 Built on: Mon May  7 18:40:28 PDT 2007
</span><br>
<span class="quotelev2">&gt; &gt;               Built host: neptune.my.com
</span><br>
<span class="quotelev2">&gt; &gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt; &gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt; &gt;               C compiler: gcc
</span><br>
<span class="quotelev2">&gt; &gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt; &gt;             C++ compiler: g++
</span><br>
<span class="quotelev2">&gt; &gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran77 compiler: /opt/intel/fce/9.1.043/bin/ifort
</span><br>
<span class="quotelev2">&gt; &gt;   Fortran77 compiler abs: /opt/intel/fce/9.1.043/bin/ifort
</span><br>
<span class="quotelev2">&gt; &gt;       Fortran90 compiler: /opt/intel/fce/9.1.043/bin/ifort
</span><br>
<span class="quotelev2">&gt; &gt;   Fortran90 compiler abs: /opt/intel/fce/9.1.043/bin/ifort
</span><br>
<span class="quotelev2">&gt; &gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt; &gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt; &gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt; &gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt; &gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt; &gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt; &gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt; &gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt; &gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev2">&gt; &gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As you can see, I used Gnu gcc and g++ with Intel Fortran Compiler to
</span><br>
<span class="quotelev2">&gt; &gt; compile Open MPI and I am not sure if there are any special flags that
</span><br>
<span class="quotelev2">&gt; &gt; I need to have.
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/usr/local/openmpi-1.2.1 --disable-ipv6
</span><br>
<span class="quotelev2">&gt; &gt; --with-tm=/usr/local/pbs  --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpi-f90
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; After getting mpif90, I compiled my application (VASP) with this new
</span><br>
<span class="quotelev2">&gt; &gt; parellel compiler but then I could not run it through PBS.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -N Pt.CO.bridge.25ML
</span><br>
<span class="quotelev2">&gt; &gt; ### Set the number of nodes that will be used. Ensure
</span><br>
<span class="quotelev2">&gt; &gt; ### that the number &quot;nodes&quot; matches with the need of your job
</span><br>
<span class="quotelev2">&gt; &gt; ### DO NOT MODIFY THE FOLLOWING LINE FOR SINGLE-PROCESSOR JOBS!
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -l nodes=node07:ppn=4
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -l walltime=96:00:00
</span><br>
<span class="quotelev2">&gt; &gt; ##PBS -M asit_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; #PBS -m abe
</span><br>
<span class="quotelev2">&gt; &gt; export NPROCS=`wc -l $PBS_NODEFILE |gawk '//{print $1}'`
</span><br>
<span class="quotelev2">&gt; &gt; echo $NPROCS
</span><br>
<span class="quotelev2">&gt; &gt; echo The master node of this job is `hostname`
</span><br>
<span class="quotelev2">&gt; &gt; echo The working directory is `echo $PBS_O_WORKDIR`
</span><br>
<span class="quotelev2">&gt; &gt; echo The node file is $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt; &gt; echo This job runs on the following $NPROCS nodes:
</span><br>
<span class="quotelev2">&gt; &gt; echo `cat $PBS_NODEFILE`
</span><br>
<span class="quotelev2">&gt; &gt; echo &quot;=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-&quot;
</span><br>
<span class="quotelev2">&gt; &gt; echo
</span><br>
<span class="quotelev2">&gt; &gt; echo command to EXE:
</span><br>
<span class="quotelev2">&gt; &gt; echo
</span><br>
<span class="quotelev2">&gt; &gt; echo
</span><br>
<span class="quotelev2">&gt; &gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; echo &quot;cachesize=4000 mpiblock=500 npar=4 procgroup=4 mkl ompi&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; date
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.2.1/bin/mpiexec -mca mpi_paffinity_alone 1 -np
</span><br>
<span class="quotelev2">&gt; &gt; $NPROCS /hom e/struong/bin/vaspmpi_mkl_ompi &gt;&quot;$PBS_JOBID&quot;.out
</span><br>
<span class="quotelev2">&gt; &gt; date
</span><br>
<span class="quotelev2">&gt; &gt; ------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My environment is CentOS 4.4 x86_64, Intel Xeon, Torque, Maui.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could somebody here tell me what I missed or did incorrectly?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3224.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Previous message:</strong> <a href="3222.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3217.php">Kevin Radican: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3224.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Reply:</strong> <a href="3224.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
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
