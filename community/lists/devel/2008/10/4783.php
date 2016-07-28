<?
$subject_val = "[OMPI devel] Restarting processes on different node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 13:28:43 2008" -->
<!-- isoreceived="20081022172843" -->
<!-- sent="Wed, 22 Oct 2008 19:31:28 +0200" -->
<!-- isosent="20081022173128" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI devel] Restarting processes on different node" -->
<!-- id="48FF6370.2000804_at_aomail.uab.es" -->
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
<strong>Subject:</strong> [OMPI devel] Restarting processes on different node<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 13:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4784.php">Ralph Castain: "[OMPI devel] Component open"</a>
<li><strong>Previous message:</strong> <a href="4782.php">Ralph Castain: "[OMPI devel] Direct routed module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4800.php">Paul H. Hargrove: "Re: [OMPI devel] Restarting processes on different node"</a>
<li><strong>Reply:</strong> <a href="4800.php">Paul H. Hargrove: "Re: [OMPI devel] Restarting processes on different node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I&#180;m trying to implement my FT architecture in Open MPI. Just now I need 
<br>
to restart a faulty process from a checkpoint. I saw that Josh uses 
<br>
orte-restart which call opal-restart through an ordinary mpirun call. 
<br>
It&#180;s now good for me because in this case the restarted process becomes 
<br>
in a new job. I need to restart the process checkpoint in the same job 
<br>
and in another node under an existing orted. The checkpoints are taken 
<br>
without the &quot;--term&quot; option.
<br>
<p>My modified orted receive a &quot;restart request&quot; from my modified heartbeat 
<br>
mechanism. I have tried to restart using the BLCR cr_restart command. It 
<br>
does not work, I think because the stderr/stdin/stdout was not handled 
<br>
by the opal environment. So, I tried to restart the checkpoint forking 
<br>
the orted and doing an execvp to the opal-restart. It recovers the 
<br>
checkpoint, but after the &quot;opal_cr_init&quot;, it dies (*** Process received 
<br>
signal ***).
<br>
<p>As follows is the job structure (from ompi-ps) after a fault:
<br>
<p>Process Name |    ORTE Name | Local Rank |    PID |   Node |   State 
<br>
|     HB Dest. |
<br>
-------------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orterun | [[8002,0],0] |      65535 |  30434 | aoclsb | Running |   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orted | [[8002,0],1] |      65535 |  30435 |  nodo1 | Running | 
<br>
[[8002,0],3] |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orted | [[8002,0],2] |      65535 |  30438 |  nodo2 |  Faulty | 
<br>
[[8002,0],3] |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orted | [[8002,0],3] |      65535 |  30441 |  nodo3 | Running | 
<br>
[[8002,0],4] |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orted | [[8002,0],4] |      65535 |  30444 |  nodo4 | Running | 
<br>
[[8002,0],1] |
<br>
<p><p>Process Name |    ORTE Name | Local Rank |    PID |  Node |     State | 
<br>
Ckpt State |     Ckpt Loc |    Protector |
<br>
------------------------------------------------------------------------------------------------------------------
<br>
&nbsp;./ping/wait | [[8002,1],0] |          0 |   9069 | nodo1 |   Running 
<br>
|   Finished | /tmp/radic/0 | [[8002,0],2] |
<br>
&nbsp;./ping/wait | [[8002,1],1] |          0 |   6086 | nodo2 | Restoring 
<br>
|   Finished | /tmp/radic/1 | [[8002,0],3] |
<br>
&nbsp;./ping/wait | [[8002,1],2] |          0 |   5864 | nodo3 |   Running 
<br>
|   Finished | /tmp/radic/2 | [[8002,0],4] |
<br>
&nbsp;./ping/wait | [[8002,1],3] |          0 |   7405 | nodo4 |   Running 
<br>
|   Finished | /tmp/radic/3 | [[8002,0],1] |
<br>
<p><p>The orted running on &quot;nodo2&quot; dies. It was detected by the orted 
<br>
[[8002,0],1] running on &quot;nodo1&quot; and informed to the HNP. The HNP update 
<br>
the procs structure and look for processes running on the faulty node, 
<br>
so it sends a restart request for the orted which holds the checkpoint 
<br>
of the faulty processes.
<br>
<p>Below is the log generated:
<br>
<p>[aoclsb:30434] [[8002,0],0] orted_recv: update state request from 
<br>
[[8002,0],3]
<br>
[aoclsb:30434] [[8002,0],0] orted_update_state: updating state (17) for 
<br>
orted process (vpid=2)
<br>
[aoclsb:30434] [[8002,0],0] orted_update_state: found process 
<br>
[[8002,1],1] on node nodo2, requesting recovery task for that
<br>
[aoclsb:30434] [[8002,0],0] orted_update_state: sending restore 
<br>
([[8002,1],1] process) request to [[8002,0],3]
<br>
[nodo3:05841] [[8002,0],3] orted_recv: restore checkpoint request from 
<br>
[[8002,0],0]
<br>
[nodo3:05841] [[8002,0],3] orted_restore_checkpoint: restarting process 
<br>
from checkpoint file (/tmp/radic/1/ompi_blcr_context.6086)
<br>
[nodo3:05841] [[8002,0],3] orted_restore_checkpoint: executing restart 
<br>
(opal-restart -mca crs_base_snapshot_dir /tmp/radic/1 .)
<br>
[nodo3:05924] opal_cr: init: Verbose Level: 1024
<br>
[nodo3:05924] opal_cr: init: FT Enabled: 1
<br>
[nodo3:05924] opal_cr: init: Is a tool program: 1
<br>
[nodo3:05924] opal_cr: init: Checkpoint Signal: 10
<br>
[nodo3:05924] opal_cr: init: Debug SIGPIPE: 0 (False)
<br>
[nodo3:05924] opal_cr: init: Temp Directory: /tmp
<br>
[nodo2:05965] *** Process received signal ***
<br>
<p>The orted which receives the restart request forks and the call an 
<br>
execvp for the opal-restart, and then, unfortunately, it dies. I know 
<br>
that the restarted process should generate errors because the URI of it 
<br>
daemon is incorrect like all other enviroment variables, but it would 
<br>
generate a communication error, or any kind of error other than a 
<br>
process kill. My question is:
<br>
<p>1) Why this process dies? I suspect that the checkpoint have pointers 
<br>
which points to libraries which are not loaded, or are loaded on 
<br>
different memory position (because this checkpoint becomes from another 
<br>
node). In this case the error should be &quot;segmentation fault&quot; or 
<br>
something like this, no?
<br>
<p><p>If somebody have some information or can give me some help about this 
<br>
error I&#180;ll be grateful.
<br>
<p>Thanks--
<br>
<p>Leonardo Fialho
<br>
Computer Architecture and Operating Systems Department - CAOS
<br>
Universidad Autonoma de Barcelona - UAB
<br>
ETSE, Edifcio Q, QC/3088
<br>
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
<br>
Phone: +34-93-581-2888
<br>
Fax: +34-93-581-2478
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4784.php">Ralph Castain: "[OMPI devel] Component open"</a>
<li><strong>Previous message:</strong> <a href="4782.php">Ralph Castain: "[OMPI devel] Direct routed module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4800.php">Paul H. Hargrove: "Re: [OMPI devel] Restarting processes on different node"</a>
<li><strong>Reply:</strong> <a href="4800.php">Paul H. Hargrove: "Re: [OMPI devel] Restarting processes on different node"</a>
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
