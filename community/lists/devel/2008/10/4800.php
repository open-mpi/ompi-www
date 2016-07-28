<?
$subject_val = "Re: [OMPI devel] Restarting processes on different node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 20:06:28 2008" -->
<!-- isoreceived="20081023000628" -->
<!-- sent="Wed, 22 Oct 2008 17:06:20 -0700" -->
<!-- isosent="20081023000620" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Restarting processes on different node" -->
<!-- id="48FFBFFC.3020008_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48FF6370.2000804_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Restarting processes on different node<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 20:06:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4801.php">Brad Benton: "Re: [OMPI devel] 1.3 release date?"</a>
<li><strong>Previous message:</strong> <a href="4799.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4783.php">Leonardo Fialho: "[OMPI devel] Restarting processes on different node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4803.php">Leonardo Fialho: "Re: [OMPI devel] Restarting processes on different node"</a>
<li><strong>Reply:</strong> <a href="4803.php">Leonardo Fialho: "Re: [OMPI devel] Restarting processes on different node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Leonardo,
<br>
<p>&nbsp;&nbsp;As you say, there is the possiblity that moving from one node to 
<br>
another has caused problems due to different shared libraries.  The 
<br>
result from this could be a segmentation fault, an illegal instruction 
<br>
or even a bus error.  In all three cases, however, this failure 
<br>
generates a signal (SIGSEGV, SIGILL or SIGBUG).  So, it is possible that 
<br>
you are seeing the failure mode that you were expecting.
<br>
&nbsp;&nbsp;There are at least 2 ways you can deal with heterogenous libaries.  
<br>
The first is that if the libs are only different due to preloading, you 
<br>
can undo the preloading as described in the BLCR FAQ 
<br>
(<a href="http://mantis.lbl.gov/blcr/doc/html/FAQ.html#prelink">http://mantis.lbl.gov/blcr/doc/html/FAQ.html#prelink</a>)
<br>
&nbsp;&nbsp;The second would be to include the shared libaries in the checpoint 
<br>
itself.  While this is very costly in terms of storage, you may find it 
<br>
lets you restart in cases where you might not otherwise be able to.  The 
<br>
trick is to add --save-private or --save-all to the checkpoint command 
<br>
that OpenMPI uses to checkpoint the application processes.
<br>
<p>-Paul
<br>
<p>Leonardo Fialho wrote:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#180;m trying to implement my FT architecture in Open MPI. Just now I 
</span><br>
<span class="quotelev1">&gt; need to restart a faulty process from a checkpoint. I saw that Josh 
</span><br>
<span class="quotelev1">&gt; uses orte-restart which call opal-restart through an ordinary mpirun 
</span><br>
<span class="quotelev1">&gt; call. It&#180;s now good for me because in this case the restarted process 
</span><br>
<span class="quotelev1">&gt; becomes in a new job. I need to restart the process checkpoint in the 
</span><br>
<span class="quotelev1">&gt; same job and in another node under an existing orted. The checkpoints 
</span><br>
<span class="quotelev1">&gt; are taken without the &quot;--term&quot; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My modified orted receive a &quot;restart request&quot; from my modified 
</span><br>
<span class="quotelev1">&gt; heartbeat mechanism. I have tried to restart using the BLCR cr_restart 
</span><br>
<span class="quotelev1">&gt; command. It does not work, I think because the stderr/stdin/stdout was 
</span><br>
<span class="quotelev1">&gt; not handled by the opal environment. So, I tried to restart the 
</span><br>
<span class="quotelev1">&gt; checkpoint forking the orted and doing an execvp to the opal-restart. 
</span><br>
<span class="quotelev1">&gt; It recovers the checkpoint, but after the &quot;opal_cr_init&quot;, it dies (*** 
</span><br>
<span class="quotelev1">&gt; Process received signal ***).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As follows is the job structure (from ompi-ps) after a fault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process Name |    ORTE Name | Local Rank |    PID |   Node |   State 
</span><br>
<span class="quotelev1">&gt; |     HB Dest. |
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     orterun | [[8002,0],0] |      65535 |  30434 | aoclsb | Running 
</span><br>
<span class="quotelev1">&gt; |             |
</span><br>
<span class="quotelev1">&gt;       orted | [[8002,0],1] |      65535 |  30435 |  nodo1 | Running | 
</span><br>
<span class="quotelev1">&gt; [[8002,0],3] |
</span><br>
<span class="quotelev1">&gt;       orted | [[8002,0],2] |      65535 |  30438 |  nodo2 |  Faulty | 
</span><br>
<span class="quotelev1">&gt; [[8002,0],3] |
</span><br>
<span class="quotelev1">&gt;       orted | [[8002,0],3] |      65535 |  30441 |  nodo3 | Running | 
</span><br>
<span class="quotelev1">&gt; [[8002,0],4] |
</span><br>
<span class="quotelev1">&gt;       orted | [[8002,0],4] |      65535 |  30444 |  nodo4 | Running | 
</span><br>
<span class="quotelev1">&gt; [[8002,0],1] |
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process Name |    ORTE Name | Local Rank |    PID |  Node |     State 
</span><br>
<span class="quotelev1">&gt; | Ckpt State |     Ckpt Loc |    Protector |
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./ping/wait | [[8002,1],0] |          0 |   9069 | nodo1 |   Running 
</span><br>
<span class="quotelev1">&gt; |   Finished | /tmp/radic/0 | [[8002,0],2] |
</span><br>
<span class="quotelev1">&gt; ./ping/wait | [[8002,1],1] |          0 |   6086 | nodo2 | Restoring 
</span><br>
<span class="quotelev1">&gt; |   Finished | /tmp/radic/1 | [[8002,0],3] |
</span><br>
<span class="quotelev1">&gt; ./ping/wait | [[8002,1],2] |          0 |   5864 | nodo3 |   Running 
</span><br>
<span class="quotelev1">&gt; |   Finished | /tmp/radic/2 | [[8002,0],4] |
</span><br>
<span class="quotelev1">&gt; ./ping/wait | [[8002,1],3] |          0 |   7405 | nodo4 |   Running 
</span><br>
<span class="quotelev1">&gt; |   Finished | /tmp/radic/3 | [[8002,0],1] |
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The orted running on &quot;nodo2&quot; dies. It was detected by the orted 
</span><br>
<span class="quotelev1">&gt; [[8002,0],1] running on &quot;nodo1&quot; and informed to the HNP. The HNP 
</span><br>
<span class="quotelev1">&gt; update the procs structure and look for processes running on the 
</span><br>
<span class="quotelev1">&gt; faulty node, so it sends a restart request for the orted which holds 
</span><br>
<span class="quotelev1">&gt; the checkpoint of the faulty processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below is the log generated:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [aoclsb:30434] [[8002,0],0] orted_recv: update state request from 
</span><br>
<span class="quotelev1">&gt; [[8002,0],3]
</span><br>
<span class="quotelev1">&gt; [aoclsb:30434] [[8002,0],0] orted_update_state: updating state (17) 
</span><br>
<span class="quotelev1">&gt; for orted process (vpid=2)
</span><br>
<span class="quotelev1">&gt; [aoclsb:30434] [[8002,0],0] orted_update_state: found process 
</span><br>
<span class="quotelev1">&gt; [[8002,1],1] on node nodo2, requesting recovery task for that
</span><br>
<span class="quotelev1">&gt; [aoclsb:30434] [[8002,0],0] orted_update_state: sending restore 
</span><br>
<span class="quotelev1">&gt; ([[8002,1],1] process) request to [[8002,0],3]
</span><br>
<span class="quotelev1">&gt; [nodo3:05841] [[8002,0],3] orted_recv: restore checkpoint request from 
</span><br>
<span class="quotelev1">&gt; [[8002,0],0]
</span><br>
<span class="quotelev1">&gt; [nodo3:05841] [[8002,0],3] orted_restore_checkpoint: restarting 
</span><br>
<span class="quotelev1">&gt; process from checkpoint file (/tmp/radic/1/ompi_blcr_context.6086)
</span><br>
<span class="quotelev1">&gt; [nodo3:05841] [[8002,0],3] orted_restore_checkpoint: executing restart 
</span><br>
<span class="quotelev1">&gt; (opal-restart -mca crs_base_snapshot_dir /tmp/radic/1 .)
</span><br>
<span class="quotelev1">&gt; [nodo3:05924] opal_cr: init: Verbose Level: 1024
</span><br>
<span class="quotelev1">&gt; [nodo3:05924] opal_cr: init: FT Enabled: 1
</span><br>
<span class="quotelev1">&gt; [nodo3:05924] opal_cr: init: Is a tool program: 1
</span><br>
<span class="quotelev1">&gt; [nodo3:05924] opal_cr: init: Checkpoint Signal: 10
</span><br>
<span class="quotelev1">&gt; [nodo3:05924] opal_cr: init: Debug SIGPIPE: 0 (False)
</span><br>
<span class="quotelev1">&gt; [nodo3:05924] opal_cr: init: Temp Directory: /tmp
</span><br>
<span class="quotelev1">&gt; [nodo2:05965] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The orted which receives the restart request forks and the call an 
</span><br>
<span class="quotelev1">&gt; execvp for the opal-restart, and then, unfortunately, it dies. I know 
</span><br>
<span class="quotelev1">&gt; that the restarted process should generate errors because the URI of 
</span><br>
<span class="quotelev1">&gt; it daemon is incorrect like all other enviroment variables, but it 
</span><br>
<span class="quotelev1">&gt; would generate a communication error, or any kind of error other than 
</span><br>
<span class="quotelev1">&gt; a process kill. My question is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Why this process dies? I suspect that the checkpoint have pointers 
</span><br>
<span class="quotelev1">&gt; which points to libraries which are not loaded, or are loaded on 
</span><br>
<span class="quotelev1">&gt; different memory position (because this checkpoint becomes from 
</span><br>
<span class="quotelev1">&gt; another node). In this case the error should be &quot;segmentation fault&quot; 
</span><br>
<span class="quotelev1">&gt; or something like this, no?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If somebody have some information or can give me some help about this 
</span><br>
<span class="quotelev1">&gt; error I&#180;ll be grateful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks--
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev1">&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev1">&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev1">&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev1">&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev1">&gt; Fax: +34-93-581-2478
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
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4801.php">Brad Benton: "Re: [OMPI devel] 1.3 release date?"</a>
<li><strong>Previous message:</strong> <a href="4799.php">Eugene Loh: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4783.php">Leonardo Fialho: "[OMPI devel] Restarting processes on different node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4803.php">Leonardo Fialho: "Re: [OMPI devel] Restarting processes on different node"</a>
<li><strong>Reply:</strong> <a href="4803.php">Leonardo Fialho: "Re: [OMPI devel] Restarting processes on different node"</a>
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
