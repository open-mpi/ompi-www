<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 11 21:41:57 2005" -->
<!-- isoreceived="20051012024157" -->
<!-- sent="Tue, 11 Oct 2005 22:41:45 -0400" -->
<!-- isosent="20051012024145" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  NPB- FT errors" -->
<!-- id="6ae942a6c7abae5a8a751f127f331ca0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9FFFE59A-3D49-4740-9C81-E7CAA9B73F56_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-11 21:41:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0440.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0438.php">Galen M. Shipman: "NPB- FT errors"</a>
<li><strong>In reply to:</strong> <a href="0438.php">Galen M. Shipman: "NPB- FT errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now fixed in SVN.  Thanks!
<br>
<p><p>On Oct 11, 2005, at 6:06 PM, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt; When running the NPB - FT using 128 nodes problem size C, I get the
</span><br>
<span class="quotelev1">&gt; following error with both btl_tcp and btl_mvapi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.00$ mpirun -np 128 -machinefile ~/dqlist -mca btl self,tcp -
</span><br>
<span class="quotelev1">&gt; mca mpi_leave_pinned 0  ./bin/ft.C.128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NAS Parallel Benchmarks 2.3 -- FT Benchmark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No input file inputft.data. Using compiled defaults
</span><br>
<span class="quotelev1">&gt; Size                : 512x512x512
</span><br>
<span class="quotelev1">&gt; Iterations          :          20
</span><br>
<span class="quotelev1">&gt; Number of processes :         128
</span><br>
<span class="quotelev1">&gt; Processor array     :       1x128
</span><br>
<span class="quotelev1">&gt; Layout type         :          1D
</span><br>
<span class="quotelev1">&gt; [dq049:27360] *** An error occurred in MPI_Reduce
</span><br>
<span class="quotelev1">&gt; [dq049:27360] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [dq049:27360] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt; [dq049:27360] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [dq048:27568] *** An error occurred in MPI_Reduce
</span><br>
<span class="quotelev1">&gt; [dq048:27568] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [dq048:27568] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt; [dq048:27568] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [dq088:24879] *** An error occurred in MPI_Reduce
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0440.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0438.php">Galen M. Shipman: "NPB- FT errors"</a>
<li><strong>In reply to:</strong> <a href="0438.php">Galen M. Shipman: "NPB- FT errors"</a>
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
