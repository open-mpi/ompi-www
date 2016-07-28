<?
$subject_val = "[OMPI users] sending/receiving large buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  8 23:40:28 2009" -->
<!-- isoreceived="20091109044028" -->
<!-- sent="Sun, 8 Nov 2009 20:40:23 -0800" -->
<!-- isosent="20091109044023" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="[OMPI users] sending/receiving large buffers" -->
<!-- id="20091109044023.GA28891_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] sending/receiving large buffers<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-08 23:40:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11105.php">Vincent Loechner: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Previous message:</strong> <a href="11103.php">Jeff Squyres: "Re: [OMPI users] an environment variable with same meaning than the-x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11105.php">Vincent Loechner: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Reply:</strong> <a href="11105.php">Vincent Loechner: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Reply:</strong> <a href="11106.php">Ashley Pittman: "Re: [OMPI users] sending/receiving large buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am running into a problem with mpi_allreduce when large buffers
<br>
are used. But does not appear to be unique for mpi_allreduce; it
<br>
occurs with mpi_send/mpi_recv as well; program is attached.
<br>
1) run this using MPI_Allreduce:
<br>
<p># mpiexec -machinefile mfile -n 2 ./allreduce
<br>
choose algorithm: enter 1 for MPI_Allreduce
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enter 2 for MPI_Send/Recv and MPI_Bcast
<br>
1
<br>
enter array size (integer; negative to stop):
<br>
40000000
<br>
allreduce completed 0.661867
<br>
enter array size (integer; negative to stop):
<br>
80000000
<br>
allreduce completed 1.356263
<br>
enter array size (integer; negative to stop):
<br>
160000000
<br>
allreduce completed 2.700941
<br>
enter array size (integer; negative to stop):
<br>
320000000
<br>
<p>At this point the program just hangs forever.
<br>
<p>2) running the MPI_Send/MPI_Recv/MPI_Bcast version:
<br>
<p># mpiexec -machinefile mfile -n 2 ./allreduce
<br>
choose algorithm: enter 1 for MPI_Allreduce
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enter 2 for MPI_Send/Recv and MPI_Bcast
<br>
2
<br>
enter array size (integer; negative to stop):
<br>
40000000
<br>
id=0 received data from id=1 in 0.263818
<br>
bcast completed in 0.652631
<br>
allreduce completed in 1.102356
<br>
enter array size (integer; negative to stop):
<br>
80000000
<br>
id=0 received data from id=1 in 0.671201
<br>
bcast completed in 1.298208
<br>
allreduce completed in 2.341906
<br>
enter array size (integer; negative to stop):
<br>
160000000
<br>
[[43618,1],0][btl_openib_component.c:2951:handle_wc] from b2 to: b1 error polling LP CQ with status LOCAL LENGTH ERROR status number 1 for wr_id 102347120 opcode 1  vendor error 105 qp_idx 3
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 0 with PID 26254 on
<br>
node b2 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>All programs/libraries are 64bit, interconnect is IB.
<br>
I expect problems with sizes larger than 2^31-1, but these array sizes
<br>
are still much smaller.
<br>
<p>What is the problem here?
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6

</pre>
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11104/allreduce_test.c">allreduce_test.c</a>
</ul>
<!-- attachment="allreduce_test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11105.php">Vincent Loechner: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Previous message:</strong> <a href="11103.php">Jeff Squyres: "Re: [OMPI users] an environment variable with same meaning than the-x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11105.php">Vincent Loechner: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Reply:</strong> <a href="11105.php">Vincent Loechner: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Reply:</strong> <a href="11106.php">Ashley Pittman: "Re: [OMPI users] sending/receiving large buffers"</a>
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
