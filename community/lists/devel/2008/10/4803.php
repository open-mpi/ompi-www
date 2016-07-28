<?
$subject_val = "Re: [OMPI devel] Restarting processes on different node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 08:05:21 2008" -->
<!-- isoreceived="20081023120521" -->
<!-- sent="Thu, 23 Oct 2008 14:08:17 +0200" -->
<!-- isosent="20081023120817" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Restarting processes on different node" -->
<!-- id="49006931.9050906_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48FFBFFC.3020008_at_lbl.gov" -->
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
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-23 08:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4804.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4802.php">Greg Watson: "Re: [OMPI devel] 1.3 release date?"</a>
<li><strong>In reply to:</strong> <a href="4800.php">Paul H. Hargrove: "Re: [OMPI devel] Restarting processes on different node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul,
<br>
<p>It&#180;s working fine with PRELINK=NO.
<br>
<p>Leonardo
<br>
<p>Paul H. Hargrove escribi&#243;:
<br>
<span class="quotelev1">&gt; Leonardo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  As you say, there is the possiblity that moving from one node to 
</span><br>
<span class="quotelev1">&gt; another has caused problems due to different shared libraries.  The 
</span><br>
<span class="quotelev1">&gt; result from this could be a segmentation fault, an illegal instruction 
</span><br>
<span class="quotelev1">&gt; or even a bus error.  In all three cases, however, this failure 
</span><br>
<span class="quotelev1">&gt; generates a signal (SIGSEGV, SIGILL or SIGBUG).  So, it is possible 
</span><br>
<span class="quotelev1">&gt; that you are seeing the failure mode that you were expecting.
</span><br>
<span class="quotelev1">&gt;  There are at least 2 ways you can deal with heterogenous libaries.  
</span><br>
<span class="quotelev1">&gt; The first is that if the libs are only different due to preloading, 
</span><br>
<span class="quotelev1">&gt; you can undo the preloading as described in the BLCR FAQ 
</span><br>
<span class="quotelev1">&gt; (<a href="http://mantis.lbl.gov/blcr/doc/html/FAQ.html#prelink">http://mantis.lbl.gov/blcr/doc/html/FAQ.html#prelink</a>)
</span><br>
<span class="quotelev1">&gt;  The second would be to include the shared libaries in the checpoint 
</span><br>
<span class="quotelev1">&gt; itself.  While this is very costly in terms of storage, you may find 
</span><br>
<span class="quotelev1">&gt; it lets you restart in cases where you might not otherwise be able 
</span><br>
<span class="quotelev1">&gt; to.  The trick is to add --save-private or --save-all to the 
</span><br>
<span class="quotelev1">&gt; checkpoint command that OpenMPI uses to checkpoint the application 
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#180;m trying to implement my FT architecture in Open MPI. Just now I 
</span><br>
<span class="quotelev2">&gt;&gt; need to restart a faulty process from a checkpoint. I saw that Josh 
</span><br>
<span class="quotelev2">&gt;&gt; uses orte-restart which call opal-restart through an ordinary mpirun 
</span><br>
<span class="quotelev2">&gt;&gt; call. It&#180;s now good for me because in this case the restarted process 
</span><br>
<span class="quotelev2">&gt;&gt; becomes in a new job. I need to restart the process checkpoint in the 
</span><br>
<span class="quotelev2">&gt;&gt; same job and in another node under an existing orted. The checkpoints 
</span><br>
<span class="quotelev2">&gt;&gt; are taken without the &quot;--term&quot; option.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My modified orted receive a &quot;restart request&quot; from my modified 
</span><br>
<span class="quotelev2">&gt;&gt; heartbeat mechanism. I have tried to restart using the BLCR 
</span><br>
<span class="quotelev2">&gt;&gt; cr_restart command. It does not work, I think because the 
</span><br>
<span class="quotelev2">&gt;&gt; stderr/stdin/stdout was not handled by the opal environment. So, I 
</span><br>
<span class="quotelev2">&gt;&gt; tried to restart the checkpoint forking the orted and doing an execvp 
</span><br>
<span class="quotelev2">&gt;&gt; to the opal-restart. It recovers the checkpoint, but after the 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;opal_cr_init&quot;, it dies (*** Process received signal ***).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As follows is the job structure (from ompi-ps) after a fault:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process Name |    ORTE Name | Local Rank |    PID |   Node |   State 
</span><br>
<span class="quotelev2">&gt;&gt; |     HB Dest. |
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     orterun | [[8002,0],0] |      65535 |  30434 | aoclsb | Running 
</span><br>
<span class="quotelev2">&gt;&gt; |             |
</span><br>
<span class="quotelev2">&gt;&gt;       orted | [[8002,0],1] |      65535 |  30435 |  nodo1 | Running | 
</span><br>
<span class="quotelev2">&gt;&gt; [[8002,0],3] |
</span><br>
<span class="quotelev2">&gt;&gt;       orted | [[8002,0],2] |      65535 |  30438 |  nodo2 |  Faulty | 
</span><br>
<span class="quotelev2">&gt;&gt; [[8002,0],3] |
</span><br>
<span class="quotelev2">&gt;&gt;       orted | [[8002,0],3] |      65535 |  30441 |  nodo3 | Running | 
</span><br>
<span class="quotelev2">&gt;&gt; [[8002,0],4] |
</span><br>
<span class="quotelev2">&gt;&gt;       orted | [[8002,0],4] |      65535 |  30444 |  nodo4 | Running | 
</span><br>
<span class="quotelev2">&gt;&gt; [[8002,0],1] |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process Name |    ORTE Name | Local Rank |    PID |  Node |     State 
</span><br>
<span class="quotelev2">&gt;&gt; | Ckpt State |     Ckpt Loc |    Protector |
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------------------------------------------------ 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./ping/wait | [[8002,1],0] |          0 |   9069 | nodo1 |   Running 
</span><br>
<span class="quotelev2">&gt;&gt; |   Finished | /tmp/radic/0 | [[8002,0],2] |
</span><br>
<span class="quotelev2">&gt;&gt; ./ping/wait | [[8002,1],1] |          0 |   6086 | nodo2 | Restoring 
</span><br>
<span class="quotelev2">&gt;&gt; |   Finished | /tmp/radic/1 | [[8002,0],3] |
</span><br>
<span class="quotelev2">&gt;&gt; ./ping/wait | [[8002,1],2] |          0 |   5864 | nodo3 |   Running 
</span><br>
<span class="quotelev2">&gt;&gt; |   Finished | /tmp/radic/2 | [[8002,0],4] |
</span><br>
<span class="quotelev2">&gt;&gt; ./ping/wait | [[8002,1],3] |          0 |   7405 | nodo4 |   Running 
</span><br>
<span class="quotelev2">&gt;&gt; |   Finished | /tmp/radic/3 | [[8002,0],1] |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The orted running on &quot;nodo2&quot; dies. It was detected by the orted 
</span><br>
<span class="quotelev2">&gt;&gt; [[8002,0],1] running on &quot;nodo1&quot; and informed to the HNP. The HNP 
</span><br>
<span class="quotelev2">&gt;&gt; update the procs structure and look for processes running on the 
</span><br>
<span class="quotelev2">&gt;&gt; faulty node, so it sends a restart request for the orted which holds 
</span><br>
<span class="quotelev2">&gt;&gt; the checkpoint of the faulty processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below is the log generated:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [aoclsb:30434] [[8002,0],0] orted_recv: update state request from 
</span><br>
<span class="quotelev2">&gt;&gt; [[8002,0],3]
</span><br>
<span class="quotelev2">&gt;&gt; [aoclsb:30434] [[8002,0],0] orted_update_state: updating state (17) 
</span><br>
<span class="quotelev2">&gt;&gt; for orted process (vpid=2)
</span><br>
<span class="quotelev2">&gt;&gt; [aoclsb:30434] [[8002,0],0] orted_update_state: found process 
</span><br>
<span class="quotelev2">&gt;&gt; [[8002,1],1] on node nodo2, requesting recovery task for that
</span><br>
<span class="quotelev2">&gt;&gt; [aoclsb:30434] [[8002,0],0] orted_update_state: sending restore 
</span><br>
<span class="quotelev2">&gt;&gt; ([[8002,1],1] process) request to [[8002,0],3]
</span><br>
<span class="quotelev2">&gt;&gt; [nodo3:05841] [[8002,0],3] orted_recv: restore checkpoint request 
</span><br>
<span class="quotelev2">&gt;&gt; from [[8002,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; [nodo3:05841] [[8002,0],3] orted_restore_checkpoint: restarting 
</span><br>
<span class="quotelev2">&gt;&gt; process from checkpoint file (/tmp/radic/1/ompi_blcr_context.6086)
</span><br>
<span class="quotelev2">&gt;&gt; [nodo3:05841] [[8002,0],3] orted_restore_checkpoint: executing 
</span><br>
<span class="quotelev2">&gt;&gt; restart (opal-restart -mca crs_base_snapshot_dir /tmp/radic/1 .)
</span><br>
<span class="quotelev2">&gt;&gt; [nodo3:05924] opal_cr: init: Verbose Level: 1024
</span><br>
<span class="quotelev2">&gt;&gt; [nodo3:05924] opal_cr: init: FT Enabled: 1
</span><br>
<span class="quotelev2">&gt;&gt; [nodo3:05924] opal_cr: init: Is a tool program: 1
</span><br>
<span class="quotelev2">&gt;&gt; [nodo3:05924] opal_cr: init: Checkpoint Signal: 10
</span><br>
<span class="quotelev2">&gt;&gt; [nodo3:05924] opal_cr: init: Debug SIGPIPE: 0 (False)
</span><br>
<span class="quotelev2">&gt;&gt; [nodo3:05924] opal_cr: init: Temp Directory: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [nodo2:05965] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The orted which receives the restart request forks and the call an 
</span><br>
<span class="quotelev2">&gt;&gt; execvp for the opal-restart, and then, unfortunately, it dies. I know 
</span><br>
<span class="quotelev2">&gt;&gt; that the restarted process should generate errors because the URI of 
</span><br>
<span class="quotelev2">&gt;&gt; it daemon is incorrect like all other enviroment variables, but it 
</span><br>
<span class="quotelev2">&gt;&gt; would generate a communication error, or any kind of error other than 
</span><br>
<span class="quotelev2">&gt;&gt; a process kill. My question is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) Why this process dies? I suspect that the checkpoint have pointers 
</span><br>
<span class="quotelev2">&gt;&gt; which points to libraries which are not loaded, or are loaded on 
</span><br>
<span class="quotelev2">&gt;&gt; different memory position (because this checkpoint becomes from 
</span><br>
<span class="quotelev2">&gt;&gt; another node). In this case the error should be &quot;segmentation fault&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; or something like this, no?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If somebody have some information or can give me some help about this 
</span><br>
<span class="quotelev2">&gt;&gt; error I&#180;ll be grateful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks--
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev2">&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev2">&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4804.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>Previous message:</strong> <a href="4802.php">Greg Watson: "Re: [OMPI devel] 1.3 release date?"</a>
<li><strong>In reply to:</strong> <a href="4800.php">Paul H. Hargrove: "Re: [OMPI devel] Restarting processes on different node"</a>
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
