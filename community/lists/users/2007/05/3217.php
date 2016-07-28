<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 05:15:38 2007" -->
<!-- isoreceived="20070509091538" -->
<!-- sent="Wed, 09 May 2007 10:15:28 +0100" -->
<!-- isosent="20070509091528" -->
<!-- name="Kevin Radican" -->
<!-- email="radicak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question. Please help." -->
<!-- id="1178702128.29140.14.camel_at_phy068095" -->
<!-- charset="utf-8" -->
<!-- inreplyto="28bb77d30705081918u6acdb98fn133122c7fbb07736_at_mail.gmail.com" -->
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
<strong>From:</strong> Kevin Radican (<em>radicak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 05:15:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3218.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3216.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3214.php">Steven Truong: "[OMPI users] Newbie question. Please help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3223.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Reply:</strong> <a href="3223.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We use VASP 4.6 in parallel with opemmpi 1.1.2 without any problems on
<br>
x86_64 with opensuse and compiled with gcc and Intel fortran and use
<br>
torque PBS.
<br>
<p>I used standard configure to build openmpi something like 
<br>
<p>./configure --prefix=/usr/local --enable-static --with-threads
<br>
--with-tm=/usr/local --with-libnuma
<br>
<p>I used the ACLM math lapack libs and built Blacs and Scalapack with them
<br>
too.  
<br>
<p>I attached my vasp makefile, I might of added 
<br>
<p>mpi.o : mpi.F
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(CPP)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(FC) -FR -lowercase -O0 -c $*$(SUFFIX)
<br>
<p>to the end of the make file, It doesn't look like it is in the example
<br>
makefiles they give, but I compiled this a while ago.
<br>
<p>Hope this helps. 
<br>
<p>Cheers,
<br>
Kevin 
<br>
<p><p><p><p><p>On Tue, 2007-05-08 at 19:18 -0700, Steven Truong wrote:
<br>
<span class="quotelev1">&gt; Hi, all.  I am new to OpenMPI and after initial setup I tried to run
</span><br>
<span class="quotelev1">&gt; my app but got the followign errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16673] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16673] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16673] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16673] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16674] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16674] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16674] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16674] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16675] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16675] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16675] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16675] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16676] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16676] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16676] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [node07.my.com:16676] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that job rank 2 with PID 16675 on node node07 exited
</span><br>
<span class="quotelev1">&gt; on signal 60 (Real-time signal 26).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /usr/local/openmpi-1.2.1/bin/ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.1
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r14481
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.1
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r14481
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.1
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r14481
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/local/openmpi-1.2.1
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon May  7 18:32:56 PDT 2007
</span><br>
<span class="quotelev1">&gt;           Configure host: neptune.nanostellar.com
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Mon May  7 18:40:28 PDT 2007
</span><br>
<span class="quotelev1">&gt;               Built host: neptune.my.com
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
<span class="quotelev1">&gt;       Fortran77 compiler: /opt/intel/fce/9.1.043/bin/ifort
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /opt/intel/fce/9.1.043/bin/ifort
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: /opt/intel/fce/9.1.043/bin/ifort
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /opt/intel/fce/9.1.043/bin/ifort
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
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, I used Gnu gcc and g++ with Intel Fortran Compiler to
</span><br>
<span class="quotelev1">&gt; compile Open MPI and I am not sure if there are any special flags that
</span><br>
<span class="quotelev1">&gt; I need to have.
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi-1.2.1 --disable-ipv6
</span><br>
<span class="quotelev1">&gt; --with-tm=/usr/local/pbs  --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After getting mpif90, I compiled my application (VASP) with this new
</span><br>
<span class="quotelev1">&gt; parellel compiler but then I could not run it through PBS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #PBS -N Pt.CO.bridge.25ML
</span><br>
<span class="quotelev1">&gt; ### Set the number of nodes that will be used. Ensure
</span><br>
<span class="quotelev1">&gt; ### that the number &quot;nodes&quot; matches with the need of your job
</span><br>
<span class="quotelev1">&gt; ### DO NOT MODIFY THE FOLLOWING LINE FOR SINGLE-PROCESSOR JOBS!
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=node07:ppn=4
</span><br>
<span class="quotelev1">&gt; #PBS -l walltime=96:00:00
</span><br>
<span class="quotelev1">&gt; ##PBS -M asit_at_[hidden]
</span><br>
<span class="quotelev1">&gt; #PBS -m abe
</span><br>
<span class="quotelev1">&gt; export NPROCS=`wc -l $PBS_NODEFILE |gawk '//{print $1}'`
</span><br>
<span class="quotelev1">&gt; echo $NPROCS
</span><br>
<span class="quotelev1">&gt; echo The master node of this job is `hostname`
</span><br>
<span class="quotelev1">&gt; echo The working directory is `echo $PBS_O_WORKDIR`
</span><br>
<span class="quotelev1">&gt; echo The node file is $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; echo This job runs on the following $NPROCS nodes:
</span><br>
<span class="quotelev1">&gt; echo `cat $PBS_NODEFILE`
</span><br>
<span class="quotelev1">&gt; echo &quot;=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-&quot;
</span><br>
<span class="quotelev1">&gt; echo
</span><br>
<span class="quotelev1">&gt; echo command to EXE:
</span><br>
<span class="quotelev1">&gt; echo
</span><br>
<span class="quotelev1">&gt; echo
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo &quot;cachesize=4000 mpiblock=500 npar=4 procgroup=4 mkl ompi&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; date
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.1/bin/mpiexec -mca mpi_paffinity_alone 1 -np
</span><br>
<span class="quotelev1">&gt; $NPROCS /hom e/struong/bin/vaspmpi_mkl_ompi &gt;&quot;$PBS_JOBID&quot;.out
</span><br>
<span class="quotelev1">&gt; date
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My environment is CentOS 4.4 x86_64, Intel Xeon, Torque, Maui.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could somebody here tell me what I missed or did incorrectly?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much.
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
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-makefile attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3217/makefile__charset_utf-8">makefile__charset_utf-8</a>
</ul>
<!-- attachment="makefile__charset_utf-8" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3218.php">Andrew Friedley: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3216.php">Boris Bierbaum: "Re: [OMPI users] [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3214.php">Steven Truong: "[OMPI users] Newbie question. Please help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3223.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Reply:</strong> <a href="3223.php">Steven Truong: "Re: [OMPI users] Newbie question. Please help."</a>
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
