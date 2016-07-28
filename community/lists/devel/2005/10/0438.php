<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 11 17:07:07 2005" -->
<!-- isoreceived="20051011220707" -->
<!-- sent="Tue, 11 Oct 2005 16:06:59 -0600" -->
<!-- isosent="20051011220659" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="NPB- FT errors" -->
<!-- id="9FFFE59A-3D49-4740-9C81-E7CAA9B73F56_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-11 17:06:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0439.php">Jeff Squyres: "Re:  NPB- FT errors"</a>
<li><strong>Previous message:</strong> <a href="0437.php">Brian Barrett: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0439.php">Jeff Squyres: "Re:  NPB- FT errors"</a>
<li><strong>Reply:</strong> <a href="0439.php">Jeff Squyres: "Re:  NPB- FT errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When running the NPB - FT using 128 nodes problem size C, I get the  
<br>
following error with both btl_tcp and btl_mvapi:
<br>
<p>-bash-3.00$ mpirun -np 128 -machinefile ~/dqlist -mca btl self,tcp - 
<br>
mca mpi_leave_pinned 0  ./bin/ft.C.128
<br>
<p><p>NAS Parallel Benchmarks 2.3 -- FT Benchmark
<br>
<p>No input file inputft.data. Using compiled defaults
<br>
Size                : 512x512x512
<br>
Iterations          :          20
<br>
Number of processes :         128
<br>
Processor array     :       1x128
<br>
Layout type         :          1D
<br>
[dq049:27360] *** An error occurred in MPI_Reduce
<br>
[dq049:27360] *** on communicator MPI_COMM_WORLD
<br>
[dq049:27360] *** MPI_ERR_OP: invalid reduce operation
<br>
[dq049:27360] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[dq048:27568] *** An error occurred in MPI_Reduce
<br>
[dq048:27568] *** on communicator MPI_COMM_WORLD
<br>
[dq048:27568] *** MPI_ERR_OP: invalid reduce operation
<br>
[dq048:27568] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[dq088:24879] *** An error occurred in MPI_Reduce
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0439.php">Jeff Squyres: "Re:  NPB- FT errors"</a>
<li><strong>Previous message:</strong> <a href="0437.php">Brian Barrett: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0439.php">Jeff Squyres: "Re:  NPB- FT errors"</a>
<li><strong>Reply:</strong> <a href="0439.php">Jeff Squyres: "Re:  NPB- FT errors"</a>
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
