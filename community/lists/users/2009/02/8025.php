<?
$subject_val = "Re: [OMPI users] openmpi/ib noob question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 19:58:11 2009" -->
<!-- isoreceived="20090212005811" -->
<!-- sent="Wed, 11 Feb 2009 17:54:45 -0700" -->
<!-- isosent="20090212005445" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/ib noob question" -->
<!-- id="F29DA001-06B2-4E19-B1EF-32D31D89EF9C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49933C9B.5090609_at_calvin.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/ib noob question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 19:54:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8026.php">Robertson Burgess: "Re: [OMPI users] users Digest, Vol 1142, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="8024.php">Gary Draving: "[OMPI users] openmpi/ib noob question"</a>
<li><strong>In reply to:</strong> <a href="8024.php">Gary Draving: "[OMPI users] openmpi/ib noob question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8035.php">Gary Draving: "Re: [OMPI users] openmpi/ib noob question"</a>
<li><strong>Reply:</strong> <a href="8035.php">Gary Draving: "Re: [OMPI users] openmpi/ib noob question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The ^ applies to everything that follows, so you just turned off all  
<br>
of the tcp, self, and openib comm paths. :-)
<br>
<p>If you just wanted to drop tcp from that list, you should just use - 
<br>
mca btl self,openib.
<br>
<p>Ralph
<br>
<p>On Feb 11, 2009, at 2:01 PM, Gary Draving wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When running the followng program on 4 of my nodes I get the  
</span><br>
<span class="quotelev1">&gt; expected response:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;/usr/local/bin/mpirun --mca btl tcp,self,openib --hostfile ibnodes - 
</span><br>
<span class="quotelev1">&gt; np 4 hello_c&quot;
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 2 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 3 of 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I run it with ^TCP &quot;/usr/local/bin/mpirun --mca btl  
</span><br>
<span class="quotelev1">&gt; ^tcp,self,openib --hostfile ibnodes -np 4 hello_c&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following:.  Does this mean my mpi (openmpi 1.3) is not  
</span><br>
<span class="quotelev1">&gt; configured properly w/ ib support?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help you can give me.
</span><br>
<span class="quotelev1">&gt; Gary
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 1 ([[7579,1],1]) is on host: compute-0-1.local
</span><br>
<span class="quotelev1">&gt; Process 2 ([[7579,1],0]) is on host: 11
</span><br>
<span class="quotelev1">&gt; BTLs attempted: sm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PML add procs failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:1763] Abort before MPI_INIT completed  
</span><br>
<span class="quotelev1">&gt; successfully; not able to guarantee that all other processes were  
</span><br>
<span class="quotelev1">&gt; killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:12308] Abort before MPI_INIT completed  
</span><br>
<span class="quotelev1">&gt; successfully; not able to guarantee that all other processes were  
</span><br>
<span class="quotelev1">&gt; killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [compute-0-3.local:14123] Abort before MPI_INIT completed  
</span><br>
<span class="quotelev1">&gt; successfully; not able to guarantee that all other processes were  
</span><br>
<span class="quotelev1">&gt; killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [compute-0-2.local:19185] Abort before MPI_INIT completed  
</span><br>
<span class="quotelev1">&gt; successfully; not able to guarantee that all other processes were  
</span><br>
<span class="quotelev1">&gt; killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 1763 on
</span><br>
<span class="quotelev1">&gt; node 11.2.0.1 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [dahl.calvin.edu:21712] 3 more processes have sent help message help- 
</span><br>
<span class="quotelev1">&gt; mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev1">&gt; [dahl.calvin.edu:21712] Set MCA parameter &quot;orte_base_help_aggregate&quot;  
</span><br>
<span class="quotelev1">&gt; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [dahl.calvin.edu:21712] 3 more processes have sent help message help- 
</span><br>
<span class="quotelev1">&gt; mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8026.php">Robertson Burgess: "Re: [OMPI users] users Digest, Vol 1142, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="8024.php">Gary Draving: "[OMPI users] openmpi/ib noob question"</a>
<li><strong>In reply to:</strong> <a href="8024.php">Gary Draving: "[OMPI users] openmpi/ib noob question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8035.php">Gary Draving: "Re: [OMPI users] openmpi/ib noob question"</a>
<li><strong>Reply:</strong> <a href="8035.php">Gary Draving: "Re: [OMPI users] openmpi/ib noob question"</a>
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
