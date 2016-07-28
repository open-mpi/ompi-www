<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 20 02:12:03 2006" -->
<!-- isoreceived="20060320071203" -->
<!-- sent="Mon, 20 Mar 2006 08:11:32 +0100" -->
<!-- isosent="20060320071132" -->
<!-- name="Frank" -->
<!-- email="openmpi-user_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1" -->
<!-- id="441E55A4.6090700_at_fraka-mp.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5E43A7B8-2111-4D93-B8F0-B4F25B453982_at_open-mpi.org" -->
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
<strong>From:</strong> Frank (<em>openmpi-user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-20 02:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0887.php">Michael Kluskens: "[OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Previous message:</strong> <a href="0885.php">Frank: "[OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="0883.php">Frank: "[OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>this is the full -d option output I've got mpi-running vhone on the 
<br>
xgrid. The truncation is due to the reported &quot;hang&quot;.
<br>
<p>[powerbook:/usr/local/MVH-1] admin% mpirun -d -np 4 ./vhone
<br>
[powerbook:03138] procdir: (null)
<br>
[powerbook:03138] jobdir: (null)
<br>
[powerbook:03138] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe
<br>
[powerbook:03138] top: openmpi-sessions-admin_at_powerbook_0
<br>
[powerbook:03138] tmp: /tmp
<br>
[powerbook:03138] connect_uni: contact info read
<br>
[powerbook:03138] connect_uni: connection not allowed
<br>
[powerbook:03138] [0,0,0] setting up session dir with
<br>
[powerbook:03138]       tmpdir /tmp
<br>
[powerbook:03138]       universe default-universe-3138
<br>
[powerbook:03138]       user admin
<br>
[powerbook:03138]       host powerbook
<br>
[powerbook:03138]       jobid 0
<br>
[powerbook:03138]       procid 0
<br>
[powerbook:03138] procdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-3138/0/0
<br>
[powerbook:03138] jobdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-3138/0
<br>
[powerbook:03138] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-3138
<br>
[powerbook:03138] top: openmpi-sessions-admin_at_powerbook_0
<br>
[powerbook:03138] tmp: /tmp
<br>
[powerbook:03138] [0,0,0] contact_file 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-3138/universe-setup.txt
<br>
[powerbook:03138] [0,0,0] wrote setup file
<br>
[powerbook:03138] spawn: in job_state_callback(jobid = 1, state = 0x1)
<br>
[ibi:00717] [0,1,2] setting up session dir with
<br>
[ibi:00717]     universe default-universe
<br>
[ibi:00717]     user nobody
<br>
[ibi:00717]     host xgrid-node-2
<br>
[ibi:00717]     jobid 1
<br>
[ibi:00717]     procid 2
<br>
[ibi:00717] procdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-2_0/default-universe/1/2
<br>
[ibi:00717] jobdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-2_0/default-universe/1
<br>
[ibi:00717] unidir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-2_0/default-universe
<br>
[ibi:00717] top: openmpi-sessions-nobody_at_xgrid-node-2_0
<br>
[ibi:00717] tmp: /tmp
<br>
[powerbook:03147] [0,1,0] setting up session dir with
<br>
[powerbook:03147]       universe default-universe
<br>
[powerbook:03147]       user nobody
<br>
[powerbook:03147]       host xgrid-node-0
<br>
[powerbook:03147]       jobid 1
<br>
[powerbook:03147]       procid 0
<br>
[powerbook:03147] procdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe/1/0
<br>
[powerbook:03147] jobdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe/1
<br>
[powerbook:03147] unidir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe
<br>
[powerbook:03147] top: openmpi-sessions-nobody_at_xgrid-node-0_0
<br>
[powerbook:03147] tmp: /tmp
<br>
^Z
<br>
Suspended
<br>
[powerbook:/usr/local/MVH-1] admin%
<br>
<p>I've been waiting quite a while before canceling the jobs, so this is 
<br>
not due to poor priority of the jobs supplied to the xgrid (i.e. xgrid 
<br>
is told to always accept jobs and run them). Comparing this with the 
<br>
output I get from a non-xgrid-mpirun (ssh submitting jobs) the next line 
<br>
of -d output I've been waiting on is another spawn and thereafter the 
<br>
message, that the open_mpi_init has been completed. While &quot;hanging&quot; 
<br>
adding another xgrid-node or removing a node is still recognized, though 
<br>
initializing does not finish.
<br>
<p>Just to compare with, here's the -d output I get from submitting the 
<br>
same job via ssh:
<br>
<p>[powerbook:/usr/local/MVH-1] admin% mpirun -d -hostfile machinefile -np 
<br>
4 ./vhone
<br>
[powerbook:03270] procdir: (null)
<br>
[powerbook:03270] jobdir: (null)
<br>
[powerbook:03270] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe
<br>
[powerbook:03270] top: openmpi-sessions-admin_at_powerbook_0
<br>
[powerbook:03270] tmp: /tmp
<br>
[powerbook:03270] connect_uni: contact info read
<br>
[powerbook:03270] connect_uni: connection not allowed
<br>
[powerbook:03270] [0,0,0] setting up session dir with
<br>
[powerbook:03270]       tmpdir /tmp
<br>
[powerbook:03270]       universe default-universe-3270
<br>
[powerbook:03270]       user admin
<br>
[powerbook:03270]       host powerbook
<br>
[powerbook:03270]       jobid 0
<br>
[powerbook:03270]       procid 0
<br>
[powerbook:03270] procdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-3270/0/0
<br>
[powerbook:03270] jobdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-3270/0
<br>
[powerbook:03270] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-3270
<br>
[powerbook:03270] top: openmpi-sessions-admin_at_powerbook_0
<br>
[powerbook:03270] tmp: /tmp
<br>
[powerbook:03270] [0,0,0] contact_file 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-3270/universe-setup.txt
<br>
[powerbook:03270] [0,0,0] wrote setup file
<br>
[powerbook:03270] spawn: in job_state_callback(jobid = 1, state = 0x1)
<br>
[powerbook:03270] pls:rsh: local csh: 1, local bash: 0
<br>
[powerbook:03270] pls:rsh: assuming same remote shell as local shell
<br>
[powerbook:03270] pls:rsh: remote csh: 1, remote bash: 0
<br>
[powerbook:03270] pls:rsh: final template argv:
<br>
[powerbook:03270] pls:rsh:     ssh &lt;template&gt; orted --debug --bootproxy 
<br>
1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename &lt;template&gt; 
<br>
--universe admin_at_powerbook:default-universe-3270 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.178.23:50205&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.178.23:50205&quot; --mpi-call-yield 0
<br>
[powerbook:03270] pls:rsh: launching on node powerbook.local
<br>
[powerbook:03270] pls:rsh: oversubscribed -- setting mpi_yield_when_idle 
<br>
to 1 (1 2)
<br>
[powerbook:03270] pls:rsh: powerbook.local is a LOCAL node
<br>
[powerbook:03270] pls:rsh: executing: orted --debug --bootproxy 1 --name 
<br>
0.0.1 --num_procs 3 --vpid_start 0 --nodename powerbook.local --universe 
<br>
admin_at_powerbook:default-universe-3270 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.178.23:50205&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.178.23:50205&quot; --mpi-call-yield 1
<br>
[powerbook:03271] [0,0,1] setting up session dir with
<br>
[powerbook:03271]       universe default-universe-3270
<br>
[powerbook:03271]       user admin
<br>
[powerbook:03271]       host powerbook.local
<br>
[powerbook:03271]       jobid 0
<br>
[powerbook:03271]       procid 1
<br>
[powerbook:03271] procdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.local_0/default-universe-3270/0/1
<br>
[powerbook:03271] jobdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.local_0/default-universe-3270/0
<br>
[powerbook:03271] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.local_0/default-universe-3270
<br>
[powerbook:03271] top: openmpi-sessions-admin_at_powerbook.local_0
<br>
[powerbook:03271] tmp: /tmp
<br>
[powerbook:03270] pls:rsh: launching on node ibi.local
<br>
[powerbook:03270] pls:rsh: oversubscribed -- setting mpi_yield_when_idle 
<br>
to 1 (1 2)
<br>
[powerbook:03270] pls:rsh: ibi.local is a REMOTE node
<br>
[powerbook:03270] pls:rsh: executing: ssh ibi.local orted --debug 
<br>
--bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --nodename 
<br>
ibi.local --universe admin_at_powerbook:default-universe-3270 --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.178.23:50205&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.178.23:50205&quot; --mpi-call-yield 1
<br>
[ibi:00734] [0,0,2] setting up session dir with
<br>
[ibi:00734]     universe default-universe-3270
<br>
[ibi:00734]     user admin
<br>
[ibi:00734]     host ibi.local
<br>
[ibi:00734]     jobid 0
<br>
[ibi:00734]     procid 2
<br>
[ibi:00734] procdir: 
<br>
/tmp/openmpi-sessions-admin_at_ibi.local_0/default-universe-3270/0/2
<br>
[ibi:00734] jobdir: 
<br>
/tmp/openmpi-sessions-admin_at_ibi.local_0/default-universe-3270/0
<br>
[ibi:00734] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_ibi.local_0/default-universe-3270
<br>
[ibi:00734] top: openmpi-sessions-admin_at_ibi.local_0
<br>
[ibi:00734] tmp: /tmp
<br>
[powerbook:03279] [0,1,0] setting up session dir with
<br>
[powerbook:03279]       universe default-universe-3270
<br>
[powerbook:03279]       user admin
<br>
[powerbook:03279]       host powerbook.local
<br>
[powerbook:03279]       jobid 1
<br>
[powerbook:03279]       procid 0
<br>
[powerbook:03279] procdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.local_0/default-universe-3270/1/0
<br>
[powerbook:03279] jobdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.local_0/default-universe-3270/1
<br>
[powerbook:03279] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.local_0/default-universe-3270
<br>
[powerbook:03279] top: openmpi-sessions-admin_at_powerbook.local_0
<br>
[powerbook:03279] tmp: /tmp
<br>
[powerbook:03276] [0,1,2] setting up session dir with
<br>
[powerbook:03276]       universe default-universe-3270
<br>
[powerbook:03276]       user admin
<br>
[powerbook:03276]       host powerbook.local
<br>
[powerbook:03276]       jobid 1
<br>
[powerbook:03276]       procid 2
<br>
[powerbook:03276] procdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.local_0/default-universe-3270/1/2
<br>
[powerbook:03276] jobdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.local_0/default-universe-3270/1
<br>
[powerbook:03276] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook.local_0/default-universe-3270
<br>
[powerbook:03276] top: openmpi-sessions-admin_at_powerbook.local_0
<br>
[powerbook:03276] tmp: /tmp
<br>
[ibi:00740] [0,1,1] setting up session dir with
<br>
[ibi:00740]     universe default-universe-3270
<br>
[ibi:00740]     user admin
<br>
[ibi:00740]     host ibi.local
<br>
[ibi:00740]     jobid 1
<br>
[ibi:00740]     procid 1
<br>
[ibi:00740] procdir: 
<br>
/tmp/openmpi-sessions-admin_at_ibi.local_0/default-universe-3270/1/1
<br>
[ibi:00740] jobdir: 
<br>
/tmp/openmpi-sessions-admin_at_ibi.local_0/default-universe-3270/1
<br>
[ibi:00740] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_ibi.local_0/default-universe-3270
<br>
[ibi:00740] top: openmpi-sessions-admin_at_ibi.local_0
<br>
[ibi:00740] tmp: /tmp
<br>
[ibi:00737] [0,1,3] setting up session dir with
<br>
[ibi:00737]     universe default-universe-3270
<br>
[ibi:00737]     user admin
<br>
[ibi:00737]     host ibi.local
<br>
[ibi:00737]     jobid 1
<br>
[ibi:00737]     procid 3
<br>
[ibi:00737] procdir: 
<br>
/tmp/openmpi-sessions-admin_at_ibi.local_0/default-universe-3270/1/3
<br>
[ibi:00737] jobdir: 
<br>
/tmp/openmpi-sessions-admin_at_ibi.local_0/default-universe-3270/1
<br>
[ibi:00737] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_ibi.local_0/default-universe-3270
<br>
[ibi:00737] top: openmpi-sessions-admin_at_ibi.local_0
<br>
[ibi:00737] tmp: /tmp
<br>
[powerbook:03270] spawn: in job_state_callback(jobid = 1, state = 0x3)
<br>
[powerbook:03270] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 4
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, ibi.local, ./vhone, 737)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, powerbook.local, ./vhone, 3276)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, ibi.local, ./vhone, 740)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, powerbook.local, ./vhone, 3279)
<br>
[powerbook:03270] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[powerbook:03276] [0,1,2] ompi_mpi_init completed
<br>
[powerbook:03279] [0,1,0] ompi_mpi_init completed
<br>
[ibi:00737] [0,1,3] ompi_mpi_init completed
<br>
[ibi:00740] [0,1,1] ompi_mpi_init completed
<br>
[powerbook:03270] spawn: in job_state_callback(jobid = 1, state = 0x7)
<br>
[powerbook:03270] spawn: in job_state_callback(jobid = 1, state = 0x8)
<br>
[powerbook:03276] sess_dir_finalize: found proc session dir empty - deleting
<br>
[powerbook:03276] sess_dir_finalize: job session dir not empty - leaving
<br>
[ibi:00740] sess_dir_finalize: found proc session dir empty - deleting
<br>
[ibi:00740] sess_dir_finalize: job session dir not empty - leaving
<br>
[powerbook:03271] sess_dir_finalize: proc session dir not empty - leaving
<br>
[ibi:00734] sess_dir_finalize: proc session dir not empty - leaving
<br>
[powerbook:03271] sess_dir_finalize: proc session dir not empty - leaving
<br>
[powerbook:03271] orted: job_state_callback(jobid = 1, state = 
<br>
ORTE_PROC_STATE_TERMINATED)
<br>
[powerbook:03271] sess_dir_finalize: found proc session dir empty - deleting
<br>
[powerbook:03271] sess_dir_finalize: found job session dir empty - deleting
<br>
[powerbook:03271] sess_dir_finalize: found univ session dir empty - deleting
<br>
[powerbook:03271] sess_dir_finalize: top session dir not empty - leaving
<br>
[ibi:00734] sess_dir_finalize: proc session dir not empty - leaving
<br>
[ibi:00734] orted: job_state_callback(jobid = 1, state = 
<br>
ORTE_PROC_STATE_TERMINATED)
<br>
[ibi:00734] sess_dir_finalize: found proc session dir empty - deleting
<br>
[ibi:00734] sess_dir_finalize: found job session dir empty - deleting
<br>
[ibi:00734] sess_dir_finalize: found univ session dir empty - deleting
<br>
[ibi:00734] sess_dir_finalize: found top session dir empty - deleting
<br>
[powerbook:/usr/local/MVH-1] admin%
<br>
<p>Thanks,
<br>
Frank
<br>
<p><p>Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; It doesn't look like you included the full output (for example, you 
</span><br>
<span class="quotelev1">&gt; didn't include the mpirun command itself, and it looks like some of 
</span><br>
<span class="quotelev1">&gt; the later output was truncated).  Can you include this information?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, it looks like you are trying to run at least 33 processes - it 
</span><br>
<span class="quotelev1">&gt; might be easier to initially test with a small number of processes and 
</span><br>
<span class="quotelev1">&gt; work your way up as problems are fixed.  But without seeing the mpirun 
</span><br>
<span class="quotelev1">&gt; command, I can't know for sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 19, 2006, at 7:10 AM, Frank wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that's all I get when submitting the job with the -d option to mpirun:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] procdir: (null)
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] jobdir: (null)
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] unidir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-admin_at_powerbook_0/default-universe
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] top: openmpi-sessions-admin_at_powerbook_0
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] connect_uni: contact info read
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682]       tmpdir /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682]       universe default-universe-682
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682]       user admin
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682]       host powerbook
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682]       jobid 0
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682]       procid 0
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] procdir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-682/0/0
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] jobdir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-682/0
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] unidir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-682
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] top: openmpi-sessions-admin_at_powerbook_0
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] [0,0,0] contact_file
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-682/universe-setup.txt 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] [0,0,0] wrote setup file
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00682] spawn: in job_state_callback(jobid = 1, state = 0x1)
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19326] [0,1,26] setting up session dir with
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19327] [0,1,33] setting up session dir with
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19326]    universe default-universe
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19327]    universe default-universe
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00690] [0,1,17] setting up session dir with
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19326]    user nobody
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19327]    user nobody
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00690]       universe default-universe
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19326]    host xgrid-node-26
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19327]    host xgrid-node-33
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00690]       user nobody
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19326]    jobid 1
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19327]    jobid 1
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00690]       host xgrid-node-17
</span><br>
<span class="quotelev2">&gt;&gt; [ibook-g4:14666] [0,1,7] setting up session dir with
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19326]    procid 26
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19327]    procid 33
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00690]       jobid 1
</span><br>
<span class="quotelev2">&gt;&gt; [ibook-g4:14666]        universe default-universe
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19326] procdir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-26_0/default-universe/1/26
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19327] procdir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-33_0/default-universe/1/33
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00690]       procid 17
</span><br>
<span class="quotelev2">&gt;&gt; [ibook-g4:14666]        user nobody
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19326] jobdir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-26_0/default-universe/1
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19327] jobdir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-33_0/default-universe/1
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00690] procdir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-17_0/default-universe/1/17
</span><br>
<span class="quotelev2">&gt;&gt; [ibook-g4:14666]        host xgrid-node-7
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19326] unidir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-26_0/default-universe
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19327] unidir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-33_0/default-universe
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00690] jobdir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-17_0/default-universe/1
</span><br>
<span class="quotelev2">&gt;&gt; [ibook-g4:14666]        jobid 1
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19326] top: openmpi-sessions-nobody_at_xgrid-node-26_0
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19327] top: openmpi-sessions-nobody_at_xgrid-node-33_0
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00690] unidir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-17_0/default-universe
</span><br>
<span class="quotelev2">&gt;&gt; [ibook-g4:14666]        procid 7
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19326] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [g4d003.local:19327] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00690] top: openmpi-sessions-nobody_at_xgrid-node-17_0
</span><br>
<span class="quotelev2">&gt;&gt; [ibook-g4:14666] procdir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-7_0/default-universe/1/7
</span><br>
<span class="quotelev2">&gt;&gt; [powerbook:00690] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [ibook-g4:14666] jobdir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-7_0/default-universe/1
</span><br>
<span class="quotelev2">&gt;&gt; [ibook-g4:14666] unidir:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-7_0/default-universe
</span><br>
<span class="quotelev2">&gt;&gt; [ibook-g4:14666] top: openmpi-sessions-nobody_at_xgrid-node-7_0
</span><br>
<span class="quotelev2">&gt;&gt; [ibook-g4:14666] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does this is of any help to you?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Frank
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 18, 2006, at 5:40 AM, Frank wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XGRID_CONTROLLER_HOSTNAME and XGRID_CONTROLLER_PASSWORD are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; properly set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; up, Open-MPI 1.0.1 is installed on all machines (with the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options). When configured with --prefix=/usr/local/openmpi my app is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supplied to the xgrid controller and I can see that copy's of my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;supplied&quot; to the other machines, too - but the jobs hang, nothing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happens (user nobody has full access to the folder /usr/local/myapp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where my app is run). /usr/local/openmpi/bin and /usr/local/openmpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are added to the variables PATH and DYLD_LIBRARY_PATH on every
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; too. I'm running into this situation no matter from which machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my app
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ist started. To the guys with openmpi and xgrid performing correct:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which configure options did you use? The firewall is told not block
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal traffic on the subnet. When not using the xgrid my app
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone any idea concerning this matter?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My first guess was going to be the firewall issue, but if you can run
</span><br>
<span class="quotelev2">&gt;&gt; without XGrid, that probably isn't the case. Could you try an XGrid
</span><br>
<span class="quotelev2">&gt;&gt; run with the -d option to mpirun? That will enable some debugging
</span><br>
<span class="quotelev2">&gt;&gt; output that should help determine what is going wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0887.php">Michael Kluskens: "[OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Previous message:</strong> <a href="0885.php">Frank: "[OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="0883.php">Frank: "[OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
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
