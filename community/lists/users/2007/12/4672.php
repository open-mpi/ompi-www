<?
$subject_val = "[OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 19:31:22 2007" -->
<!-- isoreceived="20071214003122" -->
<!-- sent="Thu, 13 Dec 2007 18:31:08 -0600" -->
<!-- isosent="20071214003108" -->
<!-- name="Qiang Xu" -->
<!-- email="Qiang.Xu_at_[hidden]" -->
<!-- subject="[OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361" -->
<!-- id="009f01c83de8$9ed20490$76f80781_at_workstation" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361<br>
<strong>From:</strong> Qiang Xu (<em>Qiang.Xu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-13 19:31:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4673.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4671.php">Moreland, Kenneth: "[OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4675.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<li><strong>Reply:</strong> <a href="4675.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<li><strong>Maybe reply:</strong> <a href="4678.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I installed OpenMPI-1.2.4 on our cluster.
<br>
Here is the compute node infor
<br>
<p>[qiang_at_compute-0-1 ~]$ uname -a
<br>
Linux compute-0-1.local 2.6.9-42.0.2.ELsmp #1 SMP Wed Aug 23 00:17:26 CDT 2006 i686 i686 i386 GNU/Linux
<br>
[qiang_at_compute-0-1 bin]$ gcc -v
<br>
Reading specs from /usr/lib/gcc/i386-redhat-linux/3.4.6/specs
<br>
Configured with: ../configure --prefix=/usr --mandir=/usr/share/man --infodir=/usr/share/info --enable-shared --enable-threads=posix --disable-checking --with-system-zlib --enable-__cxa_atexit --disable-libunwind-exceptions --enable-java-awt=gtk --host=i386-redhat-linux
<br>
Thread model: posix
<br>
gcc version 3.4.6 20060404 (Red Hat 3.4.6-8)
<br>
<p>Then I compiled NAS bechmarks, got some warning but went through.
<br>
[qiang_at_compute-0-1 NPB2.3-MPI]$ make suite
<br>
make[1]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI'
<br>
&nbsp;&nbsp;&nbsp;=========================================
<br>
&nbsp;&nbsp;&nbsp;=      NAS Parallel Benchmarks 2.3      =
<br>
&nbsp;&nbsp;&nbsp;=      MPI/F77/C                        =
<br>
&nbsp;&nbsp;&nbsp;=========================================
<br>
<p>cd MG; make NPROCS=16 CLASS=B
<br>
make[2]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI/MG'
<br>
make[3]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI/sys'
<br>
cc -g  -o setparams setparams.c
<br>
make[3]: Leaving directory `/home/qiang/NPB2.3/NPB2.3-MPI/sys'
<br>
../sys/setparams mg 16 B
<br>
make.def modified. Rebuilding npbparams.h just in case
<br>
rm -f npbparams.h
<br>
../sys/setparams mg 16 B
<br>
mpif77 -c -I~/MyMPI/include  mg.f
<br>
mg.f: In subroutine `zran3':
<br>
mg.f:1001: warning:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(rnmu,ss,1,dp_type,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
mg.f:2115: (continued):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(jg(0,i,1), jg_temp,4,MPI_INTEGER,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Argument #1 of `mpi_allreduce' is one type at (2) but is some other type at (1) [info -f g77 M GLOBALS]
<br>
mg.f:1001: warning:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(rnmu,ss,1,dp_type,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
mg.f:2115: (continued):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(jg(0,i,1), jg_temp,4,MPI_INTEGER,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Argument #2 of `mpi_allreduce' is one type at (2) but is some other type at (1) [info -f g77 M GLOBALS]
<br>
mg.f:1001: warning:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(rnmu,ss,1,dp_type,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
mg.f:2139: (continued):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(jg(0,i,0), jg_temp,4,MPI_INTEGER,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Argument #1 of `mpi_allreduce' is one type at (2) but is some other type at (1) [info -f g77 M GLOBALS]
<br>
mg.f:1001: warning:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(rnmu,ss,1,dp_type,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
mg.f:2139: (continued):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(jg(0,i,0), jg_temp,4,MPI_INTEGER,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Argument #2 of `mpi_allreduce' is one type at (2) but is some other type at (1) [info -f g77 M GLOBALS]
<br>
cd ../common; mpif77 -c -I~/MyMPI/include  print_results.f
<br>
cd ../common; mpif77 -c -I~/MyMPI/include  randdp.f
<br>
cd ../common; mpif77 -c -I~/MyMPI/include  timers.f
<br>
mpif77  -o ../bin/mg.B.16 mg.o ../common/print_results.o ../common/randdp.o ../common/timers.o -L~/MyMPI/lib -lmpi_f77
<br>
make[2]: Leaving directory `/home/qiang/NPB2.3/NPB2.3-MPI/MG'
<br>
make[1]: Leaving directory `/home/qiang/NPB2.3/NPB2.3-MPI'
<br>
make[1]: Entering directory `/home/qiang/NPB2.3/NPB2.3-MPI'
<br>
<p>But when I tried to run it, I got the following error messages:
<br>
[qiang_at_compute-0-1 bin]$ mpirun -machinefile m8 -n 16 mg.C.16
<br>
[compute-0-1.local:11144] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space in file dss/dss_unpack.c at line 90
<br>
[compute-0-1.local:11144] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361
<br>
<p>I found some info on the mailling list, but it doesn't help for my case.
<br>
Could anyone give me some advice? Or I have to upgrade the GNU compiler?
<br>
<p>Thanks.
<br>
<p>Qiang
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4672/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4673.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4671.php">Moreland, Kenneth: "[OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4675.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<li><strong>Reply:</strong> <a href="4675.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<li><strong>Maybe reply:</strong> <a href="4678.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
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
