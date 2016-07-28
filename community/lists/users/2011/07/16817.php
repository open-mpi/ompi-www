<?
$subject_val = "Re: [OMPI users] File seeking with shared filepointer issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 11:07:36 2011" -->
<!-- isoreceived="20110705150736" -->
<!-- sent="Tue, 5 Jul 2011 10:07:30 -0500" -->
<!-- isosent="20110705150730" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File seeking with shared filepointer issues" -->
<!-- id="20110705150730.GC25388_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFB7AAD8B4.5F613C35-ONC12578BC.0047823C-C12578BC.00495634_at_fraz.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] File seeking with shared filepointer issues<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 11:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16818.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16816.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16770.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16828.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Reply:</strong> <a href="16828.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jun 27, 2011 at 03:20:36PM +0200, pascal.deveze_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Suppose you have N processes calling the first MPI_File_get_position_shared
</span><br>
<span class="quotelev1">&gt; ().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some of them are running faster and could execute the call to
</span><br>
<span class="quotelev1">&gt; MPI_File_seek_shared() before all the other have got their file position.
</span><br>
<span class="quotelev1">&gt; (Note that the &quot;collective&quot; primitive is not a synchronization. In that
</span><br>
<span class="quotelev1">&gt; case, all parameters are broadcast to the process 0 and checked by process
</span><br>
<span class="quotelev1">&gt; 0. All
</span><br>
<span class="quotelev1">&gt; the other processes are not blocked).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the slow processes can get the file position  that has just been
</span><br>
<span class="quotelev1">&gt; modified by the faster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is the reason why, in your program, It is necessary to synchronize all
</span><br>
<span class="quotelev1">&gt; processes just before the call to MPI_File_seek_shared().
</span><br>
<p>There's this tool &quot;Jumpshot&quot; that's fun to use but does have a bit of
<br>
a learning curve: it just presents so much data it can be hard to make
<br>
sense of it.  
<br>
<p>Still, I like use jumpshot and this seemed like a good chance to
<br>
demonstrate Pascal's point about timings:
<br>
<p>I've attached a jumpshot trace of an 8 processor run of  Christian's
<br>
test case.  
<br>
- I've built ROMIO to record not only the MPI-IO calls but the underlying posix i/o calls as well.  
<br>
- Then, I enabled display of just the shared file pointer operations
<br>
&nbsp;&nbsp;and the posix calls.    Sorry if anyone is color blind.
<br>
<p>&nbsp;&nbsp;color  / call
<br>
<p>&nbsp;&nbsp;purple / MPI_File_get_position_shared
<br>
&nbsp;&nbsp;pink  / MPI_File_seek_shared
<br>
&nbsp;&nbsp;orange / posix open
<br>
&nbsp;&nbsp;green / posix close
<br>
&nbsp;&nbsp;blue / posix write
<br>
<p>The attached trace shows 
<br>
- rank 0 exiting MPI_File_get_position_shared relatively quickly, 
<br>
- rank 0 enters MPI_File_seek_shared before anyone else.  
<br>
- The blue bar is where rank 0 writes the new value of the shared
<br>
file pointer, 
<br>
- Rank 0 did so before any other process read the value of the shared
<br>
&nbsp;&nbsp;file pointer (the green bar)
<br>
<p>Anyway, this is all known behavior.  collecting the traces seemed like
<br>
a fun way to spend the last hour on friday before the long (USA)
<br>
weekend :&gt;
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA

</pre>
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16817/shared_file_ptr_jumpshot.png" alt="shared_file_ptr_jumpshot.png">
<!-- attachment="shared_file_ptr_jumpshot.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16818.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16816.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16770.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16828.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Reply:</strong> <a href="16828.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
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
