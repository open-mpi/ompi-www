<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 22:18:55 2007" -->
<!-- isoreceived="20070509021855" -->
<!-- sent="Tue, 8 May 2007 19:18:51 -0700" -->
<!-- isosent="20070509021851" -->
<!-- name="Steven Truong" -->
<!-- email="midair77_at_[hidden]" -->
<!-- subject="[OMPI users] Newbie question. Please help." -->
<!-- id="28bb77d30705081918u6acdb98fn133122c7fbb07736_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Date:</strong> 2007-05-08 22:18:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3215.php">Brock Palen: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Previous message:</strong> <a href="3213.php">Jeff Squyres: "[OMPI users] Fwd: [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3215.php">Brock Palen: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Reply:</strong> <a href="3215.php">Brock Palen: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Reply:</strong> <a href="3217.php">Kevin Radican: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Maybe reply:</strong> <a href="3233.php">Terry Frankcombe: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all.  I am new to OpenMPI and after initial setup I tried to run
<br>
my app but got the followign errors:
<br>
<p>[node07.my.com:16673] *** An error occurred in MPI_Comm_rank
<br>
[node07.my.com:16673] *** on communicator MPI_COMM_WORLD
<br>
[node07.my.com:16673] *** MPI_ERR_COMM: invalid communicator
<br>
[node07.my.com:16673] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node07.my.com:16674] *** An error occurred in MPI_Comm_rank
<br>
[node07.my.com:16674] *** on communicator MPI_COMM_WORLD
<br>
[node07.my.com:16674] *** MPI_ERR_COMM: invalid communicator
<br>
[node07.my.com:16674] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node07.my.com:16675] *** An error occurred in MPI_Comm_rank
<br>
[node07.my.com:16675] *** on communicator MPI_COMM_WORLD
<br>
[node07.my.com:16675] *** MPI_ERR_COMM: invalid communicator
<br>
[node07.my.com:16675] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[node07.my.com:16676] *** An error occurred in MPI_Comm_rank
<br>
[node07.my.com:16676] *** on communicator MPI_COMM_WORLD
<br>
[node07.my.com:16676] *** MPI_ERR_COMM: invalid communicator
<br>
[node07.my.com:16676] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpiexec noticed that job rank 2 with PID 16675 on node node07 exited
<br>
on signal 60 (Real-time signal 26).
<br>
<p>&nbsp;/usr/local/openmpi-1.2.1/bin/ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.2.1
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r14481
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.2.1
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r14481
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.2.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r14481
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local/openmpi-1.2.1
<br>
&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Mon May  7 18:32:56 PDT 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: neptune.nanostellar.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Mon May  7 18:40:28 PDT 2007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: neptune.my.com
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: /opt/intel/fce/9.1.043/bin/ifort
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /opt/intel/fce/9.1.043/bin/ifort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: /opt/intel/fce/9.1.043/bin/ifort
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /opt/intel/fce/9.1.043/bin/ifort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
&nbsp;mpirun default --prefix: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.1)
<br>
<p>As you can see, I used Gnu gcc and g++ with Intel Fortran Compiler to
<br>
compile Open MPI and I am not sure if there are any special flags that
<br>
I need to have.
<br>
./configure --prefix=/usr/local/openmpi-1.2.1 --disable-ipv6
<br>
--with-tm=/usr/local/pbs  --enable-mpirun-prefix-by-default
<br>
--enable-mpi-f90
<br>
<p>After getting mpif90, I compiled my application (VASP) with this new
<br>
parellel compiler but then I could not run it through PBS.
<br>
<p>#PBS -N Pt.CO.bridge.25ML
<br>
### Set the number of nodes that will be used. Ensure
<br>
### that the number &quot;nodes&quot; matches with the need of your job
<br>
### DO NOT MODIFY THE FOLLOWING LINE FOR SINGLE-PROCESSOR JOBS!
<br>
#PBS -l nodes=node07:ppn=4
<br>
#PBS -l walltime=96:00:00
<br>
##PBS -M asit_at_[hidden]
<br>
#PBS -m abe
<br>
export NPROCS=`wc -l $PBS_NODEFILE |gawk '//{print $1}'`
<br>
echo $NPROCS
<br>
echo The master node of this job is `hostname`
<br>
echo The working directory is `echo $PBS_O_WORKDIR`
<br>
echo The node file is $PBS_NODEFILE
<br>
echo This job runs on the following $NPROCS nodes:
<br>
echo `cat $PBS_NODEFILE`
<br>
echo &quot;=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-&quot;
<br>
echo
<br>
echo command to EXE:
<br>
echo
<br>
echo
<br>
cd $PBS_O_WORKDIR
<br>
<p>echo &quot;cachesize=4000 mpiblock=500 npar=4 procgroup=4 mkl ompi&quot;
<br>
<p>date
<br>
/usr/local/openmpi-1.2.1/bin/mpiexec -mca mpi_paffinity_alone 1 -np
<br>
$NPROCS /hom e/struong/bin/vaspmpi_mkl_ompi &gt;&quot;$PBS_JOBID&quot;.out
<br>
date
<br>
------------
<br>
<p>My environment is CentOS 4.4 x86_64, Intel Xeon, Torque, Maui.
<br>
<p>Could somebody here tell me what I missed or did incorrectly?
<br>
<p>Thank you very much.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3215.php">Brock Palen: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Previous message:</strong> <a href="3213.php">Jeff Squyres: "[OMPI users] Fwd: [ofa-general] Re: openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3215.php">Brock Palen: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Reply:</strong> <a href="3215.php">Brock Palen: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Reply:</strong> <a href="3217.php">Kevin Radican: "Re: [OMPI users] Newbie question. Please help."</a>
<li><strong>Maybe reply:</strong> <a href="3233.php">Terry Frankcombe: "Re: [OMPI users] Newbie question. Please help."</a>
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
