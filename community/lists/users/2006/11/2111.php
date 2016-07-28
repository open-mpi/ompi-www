<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 07:52:35 2006" -->
<!-- isoreceived="20061102125235" -->
<!-- sent="Thu,  2 Nov 2006 12:52:25 +0000" -->
<!-- isosent="20061102125225" -->
<!-- name="Kevin Radican" -->
<!-- email="radicak_at_[hidden]" -->
<!-- subject="[OMPI users] Scalapack testing fails with openmpi" -->
<!-- id="1162471945.4549ea09b29a3_at_mymail.tcd.ie" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2006-11-02 07:52:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2112.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re: Re: Re: Re:MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2110.php">calin pal: "[OMPI users] openmpi problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a SEGV problem with Scalapack.  The same configuration works fine with
<br>
MPICH, but I seem to get much better performance with Openmpi on this machine.
<br>
I have attached the log and slmake.inc I am using.  I have a the same problem
<br>
with programs that call this routine that xcdblu uses.  It seems to occur when
<br>
the number of processors doesn't match the number of diagonals for the case of
<br>
bwl = 15.  If i choose -np 15 it just seems to seems to hang, however if i use 
<br>
mpirun --mca mpi_paffinity_alone 1 -np 15 xcdblu it crashes too.
<br>
<p>Any help would be appreciated.
<br>
<p>Regards,
<br>
Kevin
<br>
<p><p><span class="quotelev1">&gt; mpirun -np 6 xcdblu
</span><br>
SCALAPACK banded linear systems.
<br>
'MPI machine'
<br>
<p>Tests of the parallel complex single precision band matrix solve
<br>
The following scaled residual checks will be computed:
<br>
&nbsp;Solve residual         = ||Ax - b|| / (||x|| * ||A|| * eps * N)
<br>
&nbsp;Factorization residual = ||A - LU|| / (||A|| * eps * N)
<br>
The matrix A is randomly generated for each test.
<br>
<p>An explanation of the input/output parameters follows:
<br>
TIME    : Indicates whether WALL or CPU time was used.
<br>
N       : The number of rows and columns in the matrix A.
<br>
bwl, bwu      : The number of diagonals in the matrix A.
<br>
NB      : The size of the column panels the matrix A is split into. [-1 for
<br>
default]
<br>
NRHS    : The total number of RHS to solve for.
<br>
NBRHS   : The number of RHS to be put on a column of processes before going
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;on to the next column of processes.
<br>
P       : The number of process rows.
<br>
Q       : The number of process columns.
<br>
THRESH  : If a residual value is less than THRESH, CHECK is flagged as PASSED
<br>
Fact time: Time in seconds to factor the matrix
<br>
Sol Time: Time in seconds to solve the system.
<br>
MFLOPS  : Rate of execution for factor and solve using sequential operation
<br>
count.
<br>
MFLOP2  : Rough estimate of speed using actual op count (accurate big P,N).
<br>
<p>The following parameter values will be used:
<br>
&nbsp;&nbsp;N    :             3     5    17
<br>
&nbsp;&nbsp;bwl  :             1     3    15
<br>
&nbsp;&nbsp;bwu  :             1     1     4
<br>
&nbsp;&nbsp;NB   :            -1
<br>
&nbsp;&nbsp;NRHS :             4
<br>
&nbsp;&nbsp;NBRHS:             1
<br>
&nbsp;&nbsp;P    :             1     1     1     1
<br>
&nbsp;&nbsp;Q    :             1     2     3     4
<br>
<p>Relative machine precision (eps) is taken to be       0.596046E-07
<br>
Routines pass computational tests if scaled residual is less than   3.0000
<br>
<p>TIME TR      N  BWL BWU    NB  NRHS    P    Q L*U Time Slv Time   MFLOPS
<br>
MFLOP2  CHECK
<br>
---- -- ------  --- ---  ---- ----- ---- ---- -------- -------- --------
<br>
-------- ------
<br>
<p>WALL N       3   1   1    3     4    1    1     0.000   0.0000     0.00     0.00
<br>
PASSED
<br>
WALL N       5   1   1    5     4    1    1     0.000   0.0000     0.00     0.00
<br>
PASSED
<br>
WALL N       5   3   1    5     4    1    1     0.000   0.0000     0.00     0.00
<br>
PASSED
<br>
WALL N      17   1   1   17     4    1    1     0.000   0.0000     0.00     0.00
<br>
PASSED
<br>
WALL N      17   3   1   17     4    1    1     0.000   0.0000     0.00     0.00
<br>
PASSED
<br>
WALL N      17  15   4   17     4    1    1     0.000   0.0000     0.00     0.00
<br>
PASSED
<br>
WALL N       3   1   1    2     4    1    2     0.000   0.0000     0.00     0.00
<br>
PASSED
<br>
WALL N       5   1   1    3     4    1    2     0.000   0.0000     0.00     0.00
<br>
PASSED
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x10
<br>
[0] func:/usr/local/lib/libopal.so.0 [0x2b0fdb4ee1c0]
<br>
[1] func:/lib64/libpthread.so.0 [0x2b0fdbe0d140]
<br>
[2]
<br>
func:/usr/local/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_frag_match+0x2ff)
<br>
[0x2b0fde2a4d9f]
<br>
[3]
<br>
func:/usr/local/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv_frag_callback+0xaf)
<br>
[0x2b0fde2a5d8f]
<br>
[4]
<br>
func:/usr/local/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0x8c9)
<br>
[0x2b0fde5b9e39]
<br>
[5] func:/usr/local/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x21)
<br>
[0x2b0fde3aeff1]
<br>
[6] func:/usr/local/lib/libopal.so.0(opal_progress+0x4a) [0x2b0fdb4d9bfa]
<br>
[7] func:/usr/local/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv+0x265)
<br>
[0x2b0fde2a2c75]
<br>
[8]
<br>
func:/usr/local/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_reduce_intra_basic_linear+0x10b)
<br>
[0x2b0fdebe544b]
<br>
[9]
<br>
func:/usr/local/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_nonoverlapping+0x4d)
<br>
[0x2b0fdebe25bd]
<br>
[10] func:/usr/local/lib/libmpi.so.0(ompi_comm_nextcid+0x209) [0x2b0fdb207c59]
<br>
[11] func:/usr/local/lib/libmpi.so.0(ompi_comm_create+0x8c) [0x2b0fdb206bcc]
<br>
[12] func:/usr/local/lib/libmpi.so.0(MPI_Comm_create+0x90) [0x2b0fdb22d890]
<br>
[13] func:/usr/local/lib/libmpi.so.0(pmpi_comm_create__+0x42) [0x2b0fdb2491b2]
<br>
[14] func:xcdblu(BI_TransUserComm+0xef) [0x46797f]
<br>
[15] func:xcdblu(Cblacs_gridmap+0x13a) [0x463e3a]
<br>
[16] func:xcdblu(Creshape+0x17c) [0x42365c]
<br>
[17] func:xcdblu(pcdbtrf_+0x5d9) [0x42df35]
<br>
[18] func:xcdblu(MAIN__+0x190c) [0x417a0c]
<br>
[19] func:xcdblu(main+0x32) [0x4160ea]
<br>
[20] func:/lib64/libc.so.6(__libc_start_main+0xf4) [0x2b0fdbf34154]
<br>
[21] func:xcdblu [0x416029]
<br>
*** End of error message ***
<br>
1 additional process aborted (not shown)
<br>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2111/config.log.tar.gz">config.log.tar.gz</a>
</ul>
<!-- attachment="config.log.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2112.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re: Re: Re: Re:MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2110.php">calin pal: "[OMPI users] openmpi problem"</a>
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
