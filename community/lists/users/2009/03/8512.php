<?
$subject_val = "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 10:15:05 2009" -->
<!-- isoreceived="20090319141505" -->
<!-- sent="Thu, 19 Mar 2009 10:17:13 -0400" -->
<!-- isosent="20090319141713" -->
<!-- name="Gary Draving" -->
<!-- email="gbd2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1" -->
<!-- id="49C253E9.4040304_at_calvin.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1237450047.8377.22.camel_at_jnysal" -->
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
<strong>From:</strong> Gary Draving (<em>gbd2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 10:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8513.php">Ralph Castain: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="8511.php">Rolf Vandevaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8521.php">Gary Draving: "[OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow!, that seems to have worked.  fs1 has a Qlogic QLE7240.
<br>
<p>I got it to work from the command line first then added &quot;pml - ob1&quot; to 
<br>
/usr/local/etc/openmpi-mca-params.conf which works as well.
<br>
<p>Thanks for all your help!.
<br>
<p>Gary
<br>
<p><p>Nysal Jan wrote:
<br>
<span class="quotelev1">&gt; fs1 is selecting the &quot;cm&quot; PML whereas other nodes are selecting the
</span><br>
<span class="quotelev1">&gt; &quot;ob1&quot; PML component. You can force ob1 to be used via &quot;--mca pml ob1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What kind of hardware/NIC does fs1 have?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 2009-03-18 at 17:17 -0400, Gary Draving wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; anyone ever seen an error like this? Seems like I have some setting 
</span><br>
<span class="quotelev2">&gt;&gt; wrong in opemmpi.  I thought I had it setup like the other machines but 
</span><br>
<span class="quotelev2">&gt;&gt; seems as though I have missed something. I only get the error when 
</span><br>
<span class="quotelev2">&gt;&gt; adding machine &quot;fs1&quot; to the hostfile list.  The other 40+ machines seem 
</span><br>
<span class="quotelev2">&gt;&gt; fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [fs1.calvin.edu:01750] [[2469,1],6] selected pml cm, but peer 
</span><br>
<span class="quotelev2">&gt;&gt; [[2469,1],0] on compute-0-0 selected pml ob1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I use ompi_info the output looks like my other machines:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_fs1 openmpi-1.3]# ompi_info | grep btl
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: ofud (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The whole error is below, any help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gary
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [admin_at_dahl 00.greetings]$ /usr/local/bin/mpirun --mca btl ^tcp 
</span><br>
<span class="quotelev2">&gt;&gt; --hostfile machines -np 7 greetings
</span><br>
<span class="quotelev2">&gt;&gt; [fs1.calvin.edu:01959] [[2212,1],6] selected pml cm, but peer 
</span><br>
<span class="quotelev2">&gt;&gt; [[2212,1],0] on compute-0-0 selected pml ob1
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [fs1.calvin.edu:1959] Abort before MPI_INIT completed successfully; not 
</span><br>
<span class="quotelev2">&gt;&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[2212,1],3]) is on host: dahl.calvin.edu
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[2212,1],0]) is on host: compute-0-0
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: openib self sm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [dahl.calvin.edu:16884] Abort before MPI_INIT completed successfully; 
</span><br>
<span class="quotelev2">&gt;&gt; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-0.local:1591] Abort before MPI_INIT completed successfully; 
</span><br>
<span class="quotelev2">&gt;&gt; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; [fs2.calvin.edu:8826] Abort before MPI_INIT completed successfully; not 
</span><br>
<span class="quotelev2">&gt;&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 3 with PID 16884 on
</span><br>
<span class="quotelev2">&gt;&gt; node dahl.calvin.edu exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [dahl.calvin.edu:16879] 3 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev2">&gt;&gt; [dahl.calvin.edu:16879] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 
</span><br>
<span class="quotelev2">&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; [dahl.calvin.edu:16879] 2 more processes have sent help message 
</span><br>
<span class="quotelev2">&gt;&gt; help-mca-bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8513.php">Ralph Castain: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="8511.php">Rolf Vandevaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8521.php">Gary Draving: "[OMPI users] btl_openib_ib_max_inline_data warnings"</a>
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
