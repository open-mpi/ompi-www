<?
$subject_val = "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 04:07:42 2009" -->
<!-- isoreceived="20090319080742" -->
<!-- sent="Thu, 19 Mar 2009 13:37:27 +0530" -->
<!-- isosent="20090319080727" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1" -->
<!-- id="1237450047.8377.22.camel_at_jnysal" -->
<!-- inreplyto="49C164E0.7050409_at_calvin.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1<br>
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 04:07:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8509.php">Ralph Castain: "[OMPI users] Open MPI v1.3.1 released"</a>
<li><strong>Previous message:</strong> <a href="8507.php">Gary Draving: "[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>In reply to:</strong> <a href="8507.php">Gary Draving: "[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8512.php">Gary Draving: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Reply:</strong> <a href="8512.php">Gary Draving: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Reply:</strong> <a href="8521.php">Gary Draving: "[OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
fs1 is selecting the &quot;cm&quot; PML whereas other nodes are selecting the
<br>
&quot;ob1&quot; PML component. You can force ob1 to be used via &quot;--mca pml ob1&quot;
<br>
<p>What kind of hardware/NIC does fs1 have?
<br>
<p>--Nysal
<br>
<p>On Wed, 2009-03-18 at 17:17 -0400, Gary Draving wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; anyone ever seen an error like this? Seems like I have some setting 
</span><br>
<span class="quotelev1">&gt; wrong in opemmpi.  I thought I had it setup like the other machines but 
</span><br>
<span class="quotelev1">&gt; seems as though I have missed something. I only get the error when 
</span><br>
<span class="quotelev1">&gt; adding machine &quot;fs1&quot; to the hostfile list.  The other 40+ machines seem 
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [fs1.calvin.edu:01750] [[2469,1],6] selected pml cm, but peer 
</span><br>
<span class="quotelev1">&gt; [[2469,1],0] on compute-0-0 selected pml ob1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I use ompi_info the output looks like my other machines:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_fs1 openmpi-1.3]# ompi_info | grep btl
</span><br>
<span class="quotelev1">&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The whole error is below, any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gary
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [admin_at_dahl 00.greetings]$ /usr/local/bin/mpirun --mca btl ^tcp 
</span><br>
<span class="quotelev1">&gt; --hostfile machines -np 7 greetings
</span><br>
<span class="quotelev1">&gt; [fs1.calvin.edu:01959] [[2212,1],6] selected pml cm, but peer 
</span><br>
<span class="quotelev1">&gt; [[2212,1],0] on compute-0-0 selected pml ob1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [fs1.calvin.edu:1959] Abort before MPI_INIT completed successfully; not 
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
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
<span class="quotelev1">&gt;   Process 1 ([[2212,1],3]) is on host: dahl.calvin.edu
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[2212,1],0]) is on host: compute-0-0
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: openib self sm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [dahl.calvin.edu:16884] Abort before MPI_INIT completed successfully; 
</span><br>
<span class="quotelev1">&gt; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:1591] Abort before MPI_INIT completed successfully; 
</span><br>
<span class="quotelev1">&gt; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [fs2.calvin.edu:8826] Abort before MPI_INIT completed successfully; not 
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 3 with PID 16884 on
</span><br>
<span class="quotelev1">&gt; node dahl.calvin.edu exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [dahl.calvin.edu:16879] 3 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; [dahl.calvin.edu:16879] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 
</span><br>
<span class="quotelev1">&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [dahl.calvin.edu:16879] 2 more processes have sent help message 
</span><br>
<span class="quotelev1">&gt; help-mca-bml-r2.txt / unreachable proc
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
<li><strong>Next message:</strong> <a href="8509.php">Ralph Castain: "[OMPI users] Open MPI v1.3.1 released"</a>
<li><strong>Previous message:</strong> <a href="8507.php">Gary Draving: "[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>In reply to:</strong> <a href="8507.php">Gary Draving: "[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8512.php">Gary Draving: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Reply:</strong> <a href="8512.php">Gary Draving: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Reply:</strong> <a href="8521.php">Gary Draving: "[OMPI users] btl_openib_ib_max_inline_data warnings"</a>
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
