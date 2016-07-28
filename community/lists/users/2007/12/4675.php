<?
$subject_val = "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 08:34:24 2007" -->
<!-- isoreceived="20071214133424" -->
<!-- sent="Fri, 14 Dec 2007 06:34:09 -0700" -->
<!-- isosent="20071214133409" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361" -->
<!-- id="C387D461.B973%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="009f01c83de8$9ed20490$76f80781_at_workstation" -->
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
<strong>Date:</strong> 2007-12-14 08:34:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4676.php">Jeff Squyres: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4674.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4672.php">Qiang Xu: "[OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4678.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Qiang
<br>
<p>This error message usually indicates that you have more than one Open MPI
<br>
installation around, and that the backend nodes are picking up a different
<br>
version than mpirun is using. Check to make sure that you have a consistent
<br>
version across all the nodes.
<br>
<p>I also noted you were building with --enable-threads. As you've probably
<br>
seen on our discussion lists, remember that Open MPI isn't really thread
<br>
safe yet. I don't think that is the problem here, but wanted to be sure you
<br>
were aware of the potential for problems.
<br>
<p>Ralph
<br>
<p><p><p>On 12/13/07 5:31 PM, &quot;Qiang Xu&quot; &lt;Qiang.Xu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I installed OpenMPI-1.2.4 on our cluster.
</span><br>
<span class="quotelev1">&gt; Here is the compute node infor
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [qiang_at_compute-0-1 ~]$ uname -a
</span><br>
<span class="quotelev1">&gt; Linux compute-0-1.local 2.6.9-42.0.2.ELsmp #1 SMP Wed Aug 23 00:17:26 CDT 2006
</span><br>
<span class="quotelev1">&gt; i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev1">&gt; [qiang_at_compute-0-1 bin]$ gcc -v
</span><br>
<span class="quotelev1">&gt; Reading specs from /usr/lib/gcc/i386-redhat-linux/3.4.6/specs
</span><br>
<span class="quotelev1">&gt; Configured with: ../configure --prefix=/usr --mandir=/usr/share/man
</span><br>
<span class="quotelev1">&gt; --infodir=/usr/share/info --enable-shared --enable-threads=posix
</span><br>
<span class="quotelev1">&gt; --disable-checking --with-system-zlib --enable-__cxa_atexit
</span><br>
<span class="quotelev1">&gt; --disable-libunwind-exceptions --enable-java-awt=gtk --host=i386-redhat-linux
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 3.4.6 20060404 (Red Hat 3.4.6-8)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Then I compiled NAS bechmarks, got some warning but went through.
</span><br>
<span class="quotelev1">&gt; [qiang_at_compute-0-1 NPB2.3-MPI]$ make suite
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI'
</span><br>
<span class="quotelev1">&gt;    =========================================
</span><br>
<span class="quotelev1">&gt;    =      NAS Parallel Benchmarks 2.3      =
</span><br>
<span class="quotelev1">&gt;    =      MPI/F77/C                        =
</span><br>
<span class="quotelev1">&gt;    =========================================
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; cd MG; make NPROCS=16 CLASS=B
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI/MG'
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI/sys'
</span><br>
<span class="quotelev1">&gt; cc -g  -o setparams setparams.c
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/qiang/NPB2.3/NPB2.3-MPI/sys'
</span><br>
<span class="quotelev1">&gt; ../sys/setparams mg 16 B
</span><br>
<span class="quotelev1">&gt; make.def modified. Rebuilding npbparams.h just in case
</span><br>
<span class="quotelev1">&gt; rm -f npbparams.h
</span><br>
<span class="quotelev1">&gt; ../sys/setparams mg 16 B
</span><br>
<span class="quotelev1">&gt; mpif77 -c -I~/MyMPI/include  mg.f
</span><br>
<span class="quotelev1">&gt; mg.f: In subroutine `zran3':
</span><br>
<span class="quotelev1">&gt; mg.f:1001: warning:
</span><br>
<span class="quotelev1">&gt;          call mpi_allreduce(rnmu,ss,1,dp_type,
</span><br>
<span class="quotelev1">&gt;               1
</span><br>
<span class="quotelev1">&gt; mg.f:2115: (continued):
</span><br>
<span class="quotelev1">&gt;             call mpi_allreduce(jg(0,i,1), jg_temp,4,MPI_INTEGER,
</span><br>
<span class="quotelev1">&gt;                  2
</span><br>
<span class="quotelev1">&gt; Argument #1 of `mpi_allreduce' is one type at (2) but is some other type at
</span><br>
<span class="quotelev1">&gt; (1) [info -f g77 M GLOBALS]
</span><br>
<span class="quotelev1">&gt; mg.f:1001: warning:
</span><br>
<span class="quotelev1">&gt;          call mpi_allreduce(rnmu,ss,1,dp_type,
</span><br>
<span class="quotelev1">&gt;               1
</span><br>
<span class="quotelev1">&gt; mg.f:2115: (continued):
</span><br>
<span class="quotelev1">&gt;             call mpi_allreduce(jg(0,i,1), jg_temp,4,MPI_INTEGER,
</span><br>
<span class="quotelev1">&gt;                  2
</span><br>
<span class="quotelev1">&gt; Argument #2 of `mpi_allreduce' is one type at (2) but is some other type at
</span><br>
<span class="quotelev1">&gt; (1) [info -f g77 M GLOBALS]
</span><br>
<span class="quotelev1">&gt; mg.f:1001: warning:
</span><br>
<span class="quotelev1">&gt;          call mpi_allreduce(rnmu,ss,1,dp_type,
</span><br>
<span class="quotelev1">&gt;               1
</span><br>
<span class="quotelev1">&gt; mg.f:2139: (continued):
</span><br>
<span class="quotelev1">&gt;             call mpi_allreduce(jg(0,i,0), jg_temp,4,MPI_INTEGER,
</span><br>
<span class="quotelev1">&gt;                  2
</span><br>
<span class="quotelev1">&gt; Argument #1 of `mpi_allreduce' is one type at (2) but is some other type at
</span><br>
<span class="quotelev1">&gt; (1) [info -f g77 M GLOBALS]
</span><br>
<span class="quotelev1">&gt; mg.f:1001: warning:
</span><br>
<span class="quotelev1">&gt;          call mpi_allreduce(rnmu,ss,1,dp_type,
</span><br>
<span class="quotelev1">&gt;               1
</span><br>
<span class="quotelev1">&gt; mg.f:2139: (continued):
</span><br>
<span class="quotelev1">&gt;             call mpi_allreduce(jg(0,i,0), jg_temp,4,MPI_INTEGER,
</span><br>
<span class="quotelev1">&gt;                  2
</span><br>
<span class="quotelev1">&gt; Argument #2 of `mpi_allreduce' is one type at (2) but is some other type at
</span><br>
<span class="quotelev1">&gt; (1) [info -f g77 M GLOBALS]
</span><br>
<span class="quotelev1">&gt; cd ../common; mpif77 -c -I~/MyMPI/include  print_results.f
</span><br>
<span class="quotelev1">&gt; cd ../common; mpif77 -c -I~/MyMPI/include  randdp.f
</span><br>
<span class="quotelev1">&gt; cd ../common; mpif77 -c -I~/MyMPI/include  timers.f
</span><br>
<span class="quotelev1">&gt; mpif77  -o ../bin/mg.B.16 mg.o ../common/print_results.o ../common/randdp.o
</span><br>
<span class="quotelev1">&gt; ../common/timers.o -L~/MyMPI/lib -lmpi_f77
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/qiang/NPB2.3/NPB2.3-MPI/MG'
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/qiang/NPB2.3/NPB2.3-MPI'
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI'
</span><br>
<span class="quotelev1">&gt; But when I tried to run it, I got the following error messages:
</span><br>
<span class="quotelev1">&gt; [qiang_at_compute-0-1 bin]$ mpirun -machinefile m8 -n 16 mg.C.16
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:11144] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate
</span><br>
<span class="quotelev1">&gt; space in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:11144] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate
</span><br>
<span class="quotelev1">&gt; space in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt; I found some info on the mailling list, but it doesn't help for my case.
</span><br>
<span class="quotelev1">&gt; Could anyone give me some advice? Or I have to upgrade the GNU compiler?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Qiang
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4676.php">Jeff Squyres: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4674.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4672.php">Qiang Xu: "[OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4678.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
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
