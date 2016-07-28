<?
$subject_val = "Re: [OMPI devel] Checkpoint/Restart svn trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 19:28:29 2008" -->
<!-- isoreceived="20080811232829" -->
<!-- sent="Mon, 11 Aug 2008 19:28:22 -0400" -->
<!-- isosent="20080811232822" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Checkpoint/Restart svn trunk" -->
<!-- id="FF0C7BF5-1AE5-43D6-B1A0-0C0E966B257A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4226a8f0808111616u7b0a6848s9fb98f11bc932e18_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Checkpoint/Restart svn trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-11 19:28:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4568.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<li><strong>Previous message:</strong> <a href="4566.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<li><strong>In reply to:</strong> <a href="4566.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4568.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<li><strong>Reply:</strong> <a href="4568.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is likely to two things:
<br>
<p>- we just made some minor changes to the session directory stuff
<br>
- the checkpoint/restart guy (Josh) is off on vacation for about 3 weeks
<br>
<p>I'll file a ticket about this so that he's aware of it and can fix it  
<br>
when he returns.
<br>
<p>Thanks for the heads-up!
<br>
<p><p>On Aug 11, 2008, at 7:16 PM, Caciano Machado wrote:
<br>
<p><span class="quotelev1">&gt; I found that open mpi is looking for the file contact.txt in the wrong
</span><br>
<span class="quotelev1">&gt; directory. It always searches the file in the directory
</span><br>
<span class="quotelev1">&gt; &quot;/tmp/openmpi-sessions-root_at_debian_0/&lt;MPIRUN PID&gt;/&quot; but this file
</span><br>
<span class="quotelev1">&gt; exists only in &quot;/tmp/openmpi-sessions-root_at_debian_0/&lt;MPIRUN PID&gt;/0&quot;.
</span><br>
<span class="quotelev1">&gt; When I copy contact.txt to the directory where open mpi searches, then
</span><br>
<span class="quotelev1">&gt; &quot;ompi-ps&quot; and &quot;ompi-checkpoint&quot; works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 11, 2008 at 4:06 PM, Caciano Machado &lt;caciano_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run the last checkpoint/restart (rev 19235) but ompi is
</span><br>
<span class="quotelev2">&gt;&gt; showing the following error in &quot;ompi-checkpoint&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to be something in function &quot;orte_list_local_hnps&quot; of the
</span><br>
<span class="quotelev2">&gt;&gt; file orte/util/hnp_contact.c. I'm using BLCR 0.7.2 and it's working
</span><br>
<span class="quotelev2">&gt;&gt; correctly with the example applications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ################################################################
</span><br>
<span class="quotelev2">&gt;&gt; root_at_debian:~/pp# ompi-clean
</span><br>
<span class="quotelev2">&gt;&gt; root_at_debian:~/pp# mpirun -machinefile machinefile -np 2 -am
</span><br>
<span class="quotelev2">&gt;&gt; ft-enable-cr -v -d pp 1 2 1000000
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0/0
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] top: openmpi-sessions-root_at_debian_0
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] hostfile: checking hostfile  
</span><br>
<span class="quotelev2">&gt;&gt; machinefile for nodes
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] hostfile: filtering nodes through
</span><br>
<span class="quotelev2">&gt;&gt; hostfile machinefile
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] progressed_wait: base/plm_base_launch_support.c 436
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0/1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] top: openmpi-sessions-root_at_debian_0
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: base/ 
</span><br>
<span class="quotelev2">&gt;&gt; plm_base_launch_support.c 400
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: grpcomm_bad_module.c 183
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] progressed_wait: base/plm_base_launch_support.c 679
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] node[0].name debian daemon 0 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] node[1].name debian daemon 1 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: base/odls_base_default_fns.c  
</span><br>
<span class="quotelev2">&gt;&gt; 1060
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay sending relay msg
</span><br>
<span class="quotelev2">&gt;&gt; to [[31810,0],1]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] node[0].name debian daemon 0 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] node[1].name debian daemon 1 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay - recipient  
</span><br>
<span class="quotelev2">&gt;&gt; list is empty!
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: base/ 
</span><br>
<span class="quotelev2">&gt;&gt; plm_base_launch_support.c 635
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] Info: Setting up debugger process table for  
</span><br>
<span class="quotelev2">&gt;&gt; applications
</span><br>
<span class="quotelev2">&gt;&gt; MPIR_being_debugged = 0
</span><br>
<span class="quotelev2">&gt;&gt; MPIR_debug_state = 1
</span><br>
<span class="quotelev2">&gt;&gt; MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev2">&gt;&gt; MPIR_i_am_starter = 0
</span><br>
<span class="quotelev2">&gt;&gt; MPIR_proctable_size = 2
</span><br>
<span class="quotelev2">&gt;&gt; MPIR_proctable:
</span><br>
<span class="quotelev2">&gt;&gt;   (i, host, exe, pid) = (0, debian, /root/pp/pp, 27941)
</span><br>
<span class="quotelev2">&gt;&gt;   (i, host, exe, pid) = (1, debian, /root/pp/pp, 27942)
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27942] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1/1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27941] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1/0
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27941] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27941] top: openmpi-sessions-root_at_debian_0
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27941] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27942] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27942] top: openmpi-sessions-root_at_debian_0
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27942] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],0] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],1] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: base/routed_base_receive.c 153
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27941] progressed_wait: base/routed_base_register_sync.c 104
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27942] progressed_wait: base/routed_base_register_sync.c 104
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27941] [[31810,1],0] node[0].name debian daemon 0 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27941] [[31810,1],0] node[1].name debian daemon 1 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27942] [[31810,1],1] node[0].name debian daemon 0 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27942] [[31810,1],1] node[1].name debian daemon 1 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],0] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27941] progressed_wait: grpcomm_bad_module.c 394
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orted_recv_cmd: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],1]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],1] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: grpcomm_bad_module.c 183
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orted:comm:message_local_procs  
</span><br>
<span class="quotelev2">&gt;&gt; delivering
</span><br>
<span class="quotelev2">&gt;&gt; message to job [31810,1] tag 15
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay sending relay msg
</span><br>
<span class="quotelev2">&gt;&gt; to [[31810,0],1]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],1] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted:comm:message_local_procs  
</span><br>
<span class="quotelev2">&gt;&gt; delivering
</span><br>
<span class="quotelev2">&gt;&gt; message to job [31810,1] tag 15
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay - recipient  
</span><br>
<span class="quotelev2">&gt;&gt; list is empty!
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27942] progressed_wait: grpcomm_bad_module.c 394
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],1] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27942] progressed_wait: grpcomm_bad_module.c 270
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orted_recv_cmd: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],1]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],1] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: grpcomm_bad_module.c 183
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orted:comm:message_local_procs  
</span><br>
<span class="quotelev2">&gt;&gt; delivering
</span><br>
<span class="quotelev2">&gt;&gt; message to job [31810,1] tag 17
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27936] [[31810,0],0] orte:daemon:send_relay sending relay msg
</span><br>
<span class="quotelev2">&gt;&gt; to [[31810,0],1]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,1],0] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: received message from  
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 277
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
</span><br>
<span class="quotelev2">&gt;&gt; [[31810,0],0] for tag 1
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] defining message event: orted/orted_comm.c 382
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orted:comm:message_local_procs  
</span><br>
<span class="quotelev2">&gt;&gt; delivering
</span><br>
<span class="quotelev2">&gt;&gt; message to job [31810,1] tag 17
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
</span><br>
<span class="quotelev2">&gt;&gt; commands completed
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27940] [[31810,0],1] orte:daemon:send_relay - recipient  
</span><br>
<span class="quotelev2">&gt;&gt; list is empty!
</span><br>
<span class="quotelev2">&gt;&gt; [debian:27941] progressed_wait: grpcomm_bad_module.c 270
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ping-pong com MPI
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # msgs from 1 to 2 bytes
</span><br>
<span class="quotelev2">&gt;&gt; # results are the mean of 1000000 repetitions for each msg size
</span><br>
<span class="quotelev2">&gt;&gt; # Tue Aug 12 06:26:29 2008
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #   size       lat (us)      bw (MB/s)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ################################################################
</span><br>
<span class="quotelev2">&gt;&gt; 27936 pts/1    S+     0:00 mpirun -machinefile machinefile -np 2 -am
</span><br>
<span class="quotelev2">&gt;&gt; ft-enable-cr -v -d pp 1 2 1000000
</span><br>
<span class="quotelev2">&gt;&gt; 27937 pts/1    S+     0:00 /usr/bin/ssh -x debian  orted --debug
</span><br>
<span class="quotelev2">&gt;&gt; --heartbeat 0 -mca ess env -mca orte_ess_jobid 2084700160
</span><br>
<span class="quotelev2">&gt;&gt; 27938 ?        Ss     0:00 sshd: root_at_notty
</span><br>
<span class="quotelev2">&gt;&gt; 27940 ?        Ss     0:00 orted --debug --heartbeat 0 -mca ess env
</span><br>
<span class="quotelev2">&gt;&gt; -mca orte_ess_jobid 2084700160 -mca orte_ess_vpid 1 -mc
</span><br>
<span class="quotelev2">&gt;&gt; 27941 ?        Rl     0:21 pp 1 2 1000000
</span><br>
<span class="quotelev2">&gt;&gt; 27942 ?        Rl     0:21 pp 1 2 1000000
</span><br>
<span class="quotelev2">&gt;&gt; 28021 pts/0    R+     0:00 ps xa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root_at_debian:~/pp# ompi-checkpoint 27936 -v
</span><br>
<span class="quotelev2">&gt;&gt; [debian:28022] [[31764,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; orte-checkpoint.c at line 395
</span><br>
<span class="quotelev2">&gt;&gt; [debian:28022] HNP with PID 27936 Not found!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Caciano Machado
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Graduate Student/UFRGS
</span><br>
<span class="quotelev2">&gt;&gt;
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4568.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<li><strong>Previous message:</strong> <a href="4566.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<li><strong>In reply to:</strong> <a href="4566.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4568.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<li><strong>Reply:</strong> <a href="4568.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
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
