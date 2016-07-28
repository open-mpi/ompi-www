<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 13:45:57 2007" -->
<!-- isoreceived="20071214184557" -->
<!-- sent="Fri, 14 Dec 2007 11:43:43 -0700" -->
<!-- isosent="20071214184343" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361" -->
<!-- id="C3881CEF.B987%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="005701c83e72$a890b9b0$41a85a42_at_skeleton" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-14 13:43:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4679.php">Brian Barrett: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4677.php">Pignot Geoffroy: "[OMPI users] mpirun: specify multiple install prefixes"</a>
<li><strong>Maybe in reply to:</strong> <a href="4672.php">Qiang Xu: "[OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can always run locally as it doesn't startup a new daemon - hence, there
<br>
are no communications involved, which is what is causing the error message.
<br>
<p>Check the remote nodes (and your path on those nodes) to make sure that the
<br>
Open MPI version you would pickup is the same as the one on your head node.
<br>
I know you believe you are running with the same version, but you can be
<br>
surprised - people remove the other source, for example, but forget to
<br>
remove the libraries and binaries. Or their path when we ssh the daemons
<br>
points to a place where a different version is installed (remember, the path
<br>
is often different for a login vs ssh).
<br>
<p>What environment are you operating in - are you using rsh to launch on the
<br>
remote nodes? Are the remote nodes the same architecture as the head node?
<br>
<p>Ralph
<br>
<p><p><p>On 12/14/07 9:59 AM, &quot;Qiang Xu&quot; &lt;qxu2_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did first install OpenMPI-1.2.3 and got the same error message.
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Data unpack had inadequate space in file dss/dss_unpack.c at
</span><br>
<span class="quotelev1">&gt; line 90
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Data unpack had inadequate space in file
</span><br>
<span class="quotelev1">&gt; gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And after I reading the mailing list, I upgraded to OpenMPI-1.2.4.
</span><br>
<span class="quotelev1">&gt; I remove the OpenMPI-1.2.3, but still show the same error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I also upgraded to gcc4.1.1, so gfortran is the fortran compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/qiang/OpenMPI-1.2.4/ CC=gcc F77=gfortran
</span><br>
<span class="quotelev1">&gt; F90=gfortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [qiang_at_grid11 ~]$ gcc -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: i386-redhat-linux
</span><br>
<span class="quotelev1">&gt; Configured with: 
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=/usr --mandir=/usr/share/man --infodir=/usr/share/info
</span><br>
<span class="quotelev1">&gt;  --enable-shared --enable-threads=posix --enable-checking=release
</span><br>
<span class="quotelev1">&gt; --with-system-zlib
</span><br>
<span class="quotelev1">&gt;  --enable-__cxa_atexit --disable-libunwind-exceptions
</span><br>
<span class="quotelev1">&gt; --with-gxx-include-dir=/usr/include/c++/3.4.3
</span><br>
<span class="quotelev1">&gt;  --enable-libgcj-multifile --enable-languages=c,c++,java,f95
</span><br>
<span class="quotelev1">&gt; --enable-java-awt=gtk
</span><br>
<span class="quotelev1">&gt;  --disable-dssi --with-java-home=/usr/lib/jvm/java-1.4.2-gcj-1.4.2.0/jre
</span><br>
<span class="quotelev1">&gt; --with-cpu=generic
</span><br>
<span class="quotelev1">&gt;  --host=i386-redhat-linux
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.1.1 20070105 (Red Hat 4.1.1-53)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Still the problem is there. But I can run the NAS benchmark locally without
</span><br>
<span class="quotelev1">&gt; specifying the machinefile.
</span><br>
<span class="quotelev1">&gt;  [qiang_at_compute-0-1 bin]$ mpirun -n 4 mg.B.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  NAS Parallel Benchmarks 2.3 -- MG Benchmark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  No input file. Using compiled defaults
</span><br>
<span class="quotelev1">&gt;  Size: 256x256x256  (class B)
</span><br>
<span class="quotelev1">&gt;  Iterations:  20
</span><br>
<span class="quotelev1">&gt;  Number of processes:     4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Initialization time:           6.783 seconds
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Benchmark completed
</span><br>
<span class="quotelev1">&gt;  VERIFICATION SUCCESSFUL
</span><br>
<span class="quotelev1">&gt;  L2 Norm is   0.180056440136E-05
</span><br>
<span class="quotelev1">&gt;  Error is     0.351679609371E-16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MG Benchmark Completed.
</span><br>
<span class="quotelev1">&gt;  Class           =                        B
</span><br>
<span class="quotelev1">&gt;  Size            =              256x256x256
</span><br>
<span class="quotelev1">&gt;  Iterations      =                       20
</span><br>
<span class="quotelev1">&gt;  Time in seconds =                    47.19
</span><br>
<span class="quotelev1">&gt;  Total processes =                        4
</span><br>
<span class="quotelev1">&gt;  Compiled procs  =                        4
</span><br>
<span class="quotelev1">&gt;  Mop/s total     =                   412.43
</span><br>
<span class="quotelev1">&gt;  Mop/s/process   =                   103.11
</span><br>
<span class="quotelev1">&gt;  Operation type  =           floating point
</span><br>
<span class="quotelev1">&gt;  Verification    =               SUCCESSFUL
</span><br>
<span class="quotelev1">&gt;  Version         =                      2.3
</span><br>
<span class="quotelev1">&gt;  Compile date    =              13 Dec 2007
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Compile options:
</span><br>
<span class="quotelev1">&gt;     MPIF77       = mpif77
</span><br>
<span class="quotelev1">&gt;     FLINK        = mpif77
</span><br>
<span class="quotelev1">&gt;     FMPI_LIB     = -L~/MyMPI/lib -lmpi_f77
</span><br>
<span class="quotelev1">&gt;     FMPI_INC     = -I~/MyMPI/include
</span><br>
<span class="quotelev1">&gt;     FFLAGS       = -O3
</span><br>
<span class="quotelev1">&gt;     FLINKFLAGS   = (none)
</span><br>
<span class="quotelev1">&gt;     RAND         = (none)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Please send the results of this run to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  NPB Development Team
</span><br>
<span class="quotelev1">&gt;  Internet: npb_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  If email is not available, send this to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MS T27A-1
</span><br>
<span class="quotelev1">&gt;  NASA Ames Research Center
</span><br>
<span class="quotelev1">&gt;  Moffett Field, CA  94035-1000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Fax: 415-604-3957
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I try to use multiple nodes, I got the error messages:
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Data unpack had inadequate space in file dss/dss_unpack.c at
</span><br>
<span class="quotelev1">&gt; line 90
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Data unpack had inadequate space in file
</span><br>
<span class="quotelev1">&gt; gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  But only OpenMPI-1.2.4 was installed? Did I miss something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Qiang
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;; &quot;Qiang Xu&quot; &lt;Qiang.Xu_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, December 14, 2007 7:34 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Qiang
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This error message usually indicates that you have more than one Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; installation around, and that the backend nodes are picking up a different
</span><br>
<span class="quotelev2">&gt;&gt; version than mpirun is using. Check to make sure that you have a
</span><br>
<span class="quotelev2">&gt;&gt; consistent
</span><br>
<span class="quotelev2">&gt;&gt; version across all the nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also noted you were building with --enable-threads. As you've probably
</span><br>
<span class="quotelev2">&gt;&gt; seen on our discussion lists, remember that Open MPI isn't really thread
</span><br>
<span class="quotelev2">&gt;&gt; safe yet. I don't think that is the problem here, but wanted to be sure
</span><br>
<span class="quotelev2">&gt;&gt; you
</span><br>
<span class="quotelev2">&gt;&gt; were aware of the potential for problems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12/13/07 5:31 PM, &quot;Qiang Xu&quot; &lt;Qiang.Xu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed OpenMPI-1.2.4 on our cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the compute node infor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [qiang_at_compute-0-1 ~]$ uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux compute-0-1.local 2.6.9-42.0.2.ELsmp #1 SMP Wed Aug 23 00:17:26 CDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2006
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [qiang_at_compute-0-1 bin]$ gcc -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reading specs from /usr/lib/gcc/i386-redhat-linux/3.4.6/specs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --infodir=/usr/share/info --enable-shared --enable-threads=posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-checking --with-system-zlib --enable-__cxa_atexit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-libunwind-exceptions --enable-java-awt=gtk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --host=i386-redhat-linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc version 3.4.6 20060404 (Red Hat 3.4.6-8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then I compiled NAS bechmarks, got some warning but went through.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [qiang_at_compute-0-1 NPB2.3-MPI]$ make suite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    =========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    =      NAS Parallel Benchmarks 2.3      =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    =      MPI/F77/C                        =
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    =========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd MG; make NPROCS=16 CLASS=B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI/MG'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI/sys'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cc -g  -o setparams setparams.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory `/home/qiang/NPB2.3/NPB2.3-MPI/sys'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../sys/setparams mg 16 B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make.def modified. Rebuilding npbparams.h just in case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rm -f npbparams.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../sys/setparams mg 16 B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif77 -c -I~/MyMPI/include  mg.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mg.f: In subroutine `zran3':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mg.f:1001: warning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          call mpi_allreduce(rnmu,ss,1,dp_type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mg.f:2115: (continued):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             call mpi_allreduce(jg(0,i,1), jg_temp,4,MPI_INTEGER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Argument #1 of `mpi_allreduce' is one type at (2) but is some other type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1) [info -f g77 M GLOBALS]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mg.f:1001: warning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          call mpi_allreduce(rnmu,ss,1,dp_type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mg.f:2115: (continued):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             call mpi_allreduce(jg(0,i,1), jg_temp,4,MPI_INTEGER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Argument #2 of `mpi_allreduce' is one type at (2) but is some other type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1) [info -f g77 M GLOBALS]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mg.f:1001: warning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          call mpi_allreduce(rnmu,ss,1,dp_type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mg.f:2139: (continued):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             call mpi_allreduce(jg(0,i,0), jg_temp,4,MPI_INTEGER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Argument #1 of `mpi_allreduce' is one type at (2) but is some other type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1) [info -f g77 M GLOBALS]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mg.f:1001: warning:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          call mpi_allreduce(rnmu,ss,1,dp_type,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mg.f:2139: (continued):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             call mpi_allreduce(jg(0,i,0), jg_temp,4,MPI_INTEGER,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Argument #2 of `mpi_allreduce' is one type at (2) but is some other type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1) [info -f g77 M GLOBALS]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd ../common; mpif77 -c -I~/MyMPI/include  print_results.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd ../common; mpif77 -c -I~/MyMPI/include  randdp.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd ../common; mpif77 -c -I~/MyMPI/include  timers.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif77  -o ../bin/mg.B.16 mg.o ../common/print_results.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../common/randdp.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../common/timers.o -L~/MyMPI/lib -lmpi_f77
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/qiang/NPB2.3/NPB2.3-MPI/MG'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/home/qiang/NPB2.3/NPB2.3-MPI'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But when I tried to run it, I got the following error messages:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [qiang_at_compute-0-1 bin]$ mpirun -machinefile m8 -n 16 mg.C.16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local:11144] [0,0,0] ORTE_ERROR_LOG: Data unpack had
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inadequate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; space in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-0-1.local:11144] [0,0,0] ORTE_ERROR_LOG: Data unpack had
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inadequate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; space in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found some info on the mailling list, but it doesn't help for my case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could anyone give me some advice? Or I have to upgrade the GNU compiler?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Qiang
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4679.php">Brian Barrett: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4677.php">Pignot Geoffroy: "[OMPI users] mpirun: specify multiple install prefixes"</a>
<li><strong>Maybe in reply to:</strong> <a href="4672.php">Qiang Xu: "[OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
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
