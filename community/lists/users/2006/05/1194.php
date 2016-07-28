<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 12:07:37 2006" -->
<!-- isoreceived="20060502160737" -->
<!-- sent="Tue, 2 May 2006 12:07:28 -0400" -->
<!-- isosent="20060502160728" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI TCP no-route-to-host error" -->
<!-- id="CB7B1E5E-F2AD-423A-9D62-5FBCAA7A2C28_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060502091953.GA11353_at_lira.ugcs.caltech.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-02 12:07:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1195.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1193.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>In reply to:</strong> <a href="1190.php">Ali Soleimani: "[OMPI users] OpenMPI TCP no-route-to-host error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1200.php">Ali Soleimani: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have a firewall on the node called darwin ? Look like fisher  
<br>
is unable to create a TCP connection to darwin, and the firewall  
<br>
seems to be one of the most common problems...
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 2, 2006, at 5:19 AM, Ali Soleimani wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	I recently got OpenMPI 1.0.2 (rev 9571) compiled and running on a
</span><br>
<span class="quotelev1">&gt; small EM64T-based cluster.  Everything works fine when running on a  
</span><br>
<span class="quotelev1">&gt; single
</span><br>
<span class="quotelev1">&gt; host, or when running simple commands or testscripts on multiple  
</span><br>
<span class="quotelev1">&gt; hosts.  But
</span><br>
<span class="quotelev1">&gt; when I try and run a major program (cosmomc), I get the following  
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [alis_at_darwin cosmomc_mpi]$ mpirun  -np 2 cosmomc params.ini
</span><br>
<span class="quotelev1">&gt; Number of MPI processes:           2
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 559:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=113
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	I do not have more than one network interface (just eth0 and lo)  
</span><br>
<span class="quotelev1">&gt; and I
</span><br>
<span class="quotelev1">&gt; tried the various options suggested in the FAQ for disabling  
</span><br>
<span class="quotelev1">&gt; interfaces.  My
</span><br>
<span class="quotelev1">&gt; machines have only one IP address each.  It does not seem to matter  
</span><br>
<span class="quotelev1">&gt; whether I
</span><br>
<span class="quotelev1">&gt; use single hostnames, fully-qualfied hostnames, or IP addresses in  
</span><br>
<span class="quotelev1">&gt; the host
</span><br>
<span class="quotelev1">&gt; list.
</span><br>
<span class="quotelev1">&gt; 	Curiously, even though it reports this error, the processes still  
</span><br>
<span class="quotelev1">&gt; seem
</span><br>
<span class="quotelev1">&gt; to start up on the remote machines, though they do not produce output
</span><br>
<span class="quotelev1">&gt; properly.  The relevant ps line on the non-host machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; alis      4393  0.0  0.0 37124 2896 ?        S    05:10   0:00  
</span><br>
<span class="quotelev1">&gt; sshd: alis_at_notty
</span><br>
<span class="quotelev1">&gt; alis      4394  0.1  0.0 36396 1964 ?        Ss   05:10   0:00  
</span><br>
<span class="quotelev1">&gt; orted --debug
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0
</span><br>
<span class="quotelev1">&gt; alis      4411 99.9  0.1 628872 5520 ?       R    05:10   0:14  
</span><br>
<span class="quotelev1">&gt; cosmomc params.ini
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Any suggestions?  A copy of the mpi_run output with --debug is
</span><br>
<span class="quotelev1">&gt; included below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [alis_at_darwin cosmomc_mpi]$ mpirun --debug -np 2 cosmomc params.ini
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] procdir: (null)
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] jobdir: (null)
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] unidir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_[hidden]_0/default-universe
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] top: openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] connect_uni: contact info read
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140]      tmpdir /tmp
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140]      universe default-universe-25140
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140]      user alis
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140]      host darwin.phsx.ku.edu
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140]      jobid 0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140]      procid 0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_[hidden]_0/default-universe-25140/0/0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_[hidden]_0/default-universe-25140/0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] unidir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_[hidden]_0/default-universe-25140
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] top: openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] [0,0,0] contact_file /tmp/openmpi- 
</span><br>
<span class="quotelev1">&gt; sessions-alis_at_[hidden]_0/default-universe-25140/universe- 
</span><br>
<span class="quotelev1">&gt; setup.txt
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] spawn: in job_state_callback(jobid = 1,  
</span><br>
<span class="quotelev1">&gt; state = 0x1)
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: assuming same remote shell as  
</span><br>
<span class="quotelev1">&gt; local shell
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh:     /usr/bin/ssh &lt;template&gt;  
</span><br>
<span class="quotelev1">&gt; orted --debug --bootproxy 1 --name &lt;template&gt; --num_procs 3 -- 
</span><br>
<span class="quotelev1">&gt; vpid_start 0 --nodename &lt;template&gt; --universe  
</span><br>
<span class="quotelev1">&gt; alis_at_[hidden]:default-universe-25140 --nsreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://129.237.98.242:37853&quot; --gprreplica &quot;0.0.0;tcp:// 
</span><br>
<span class="quotelev1">&gt; 129.237.98.242:37853&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: launching on node 129.237.98.242
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: not oversubscribed -- setting  
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: 129.237.98.242 is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: changing to directory /home/alis
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: executing: orted --debug -- 
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 --nodename  
</span><br>
<span class="quotelev1">&gt; 129.237.98.242 --universe alis_at_[hidden]:default- 
</span><br>
<span class="quotelev1">&gt; universe-25140 --nsreplica &quot;0.0.0;tcp://129.237.98.242:37853&quot; -- 
</span><br>
<span class="quotelev1">&gt; gprreplica &quot;0.0.0;tcp://129.237.98.242:37853&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141]      universe default-universe-25140
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141]      user alis
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141]      host 129.237.98.242
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141]      jobid 0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141]      procid 1
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.242_0/default-universe-25140/0/1
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.242_0/default-universe-25140/0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] unidir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.242_0/default-universe-25140
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] top: openmpi-sessions-alis_at_129.237.98.242_0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: launching on node 129.237.98.243
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: not oversubscribed -- setting  
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: 129.237.98.243 is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] pls:rsh: executing: /usr/bin/ssh  
</span><br>
<span class="quotelev1">&gt; 129.237.98.243 orted --debug --bootproxy 1 --name 0.0.2 --num_procs  
</span><br>
<span class="quotelev1">&gt; 3 --vpid_start 0 --nodename 129.237.98.243 --universe  
</span><br>
<span class="quotelev1">&gt; alis_at_[hidden]:default-universe-25140 --nsreplica  
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://129.237.98.242:37853&quot; --gprreplica &quot;0.0.0;tcp:// 
</span><br>
<span class="quotelev1">&gt; 129.237.98.242:37853&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445] [0,0,2] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445]      universe default-universe-25140
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445]      user alis
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445]      host 129.237.98.243
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445]      jobid 0
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445]      procid 2
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.243_0/default-universe-25140/0/2
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.243_0/default-universe-25140/0
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445] unidir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.243_0/default-universe-25140
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445] top: openmpi-sessions-alis_at_129.237.98.243_0
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143]      universe default-universe-25140
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143]      user alis
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143]      host 129.237.98.242
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143]      jobid 1
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143]      procid 0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.242_0/default-universe-25140/1/0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.242_0/default-universe-25140/1
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143] unidir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.242_0/default-universe-25140
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143] top: openmpi-sessions-alis_at_129.237.98.242_0
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462]      universe default-universe-25140
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462]      user alis
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462]      host 129.237.98.243
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462]      jobid 1
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462]      procid 1
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462] procdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.243_0/default-universe-25140/1/1
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462] jobdir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.243_0/default-universe-25140/1
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462] unidir: /tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; alis_at_129.237.98.243_0/default-universe-25140
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462] top: openmpi-sessions-alis_at_129.237.98.243_0
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] spawn: in job_state_callback(jobid = 1,  
</span><br>
<span class="quotelev1">&gt; state = 0x3)
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] Info: Setting up debugger process table  
</span><br>
<span class="quotelev1">&gt; for applications
</span><br>
<span class="quotelev1">&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_gate = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, 129.237.98.243, cosmomc, 4462)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, 129.237.98.242, cosmomc, 25143)
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] orted: job_state_callback(jobid = 1,  
</span><br>
<span class="quotelev1">&gt; state = 5453392)
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] spawn: in job_state_callback(jobid = 1,  
</span><br>
<span class="quotelev1">&gt; state = 0x4)
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] orted: job_state_callback(jobid = 1,  
</span><br>
<span class="quotelev1">&gt; state = 5389856)
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25143] [0,1,0] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04462] [0,1,1] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445] orted: job_state_callback(jobid = 1,  
</span><br>
<span class="quotelev1">&gt; state = 5449344)
</span><br>
<span class="quotelev1">&gt; [fisher.phsx.ku.edu:04445] orted: job_state_callback(jobid = 1,  
</span><br>
<span class="quotelev1">&gt; state = 5379136)
</span><br>
<span class="quotelev1">&gt;  Number of MPI processes:           2
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 559:mca_btl_tcp_endpoint_complete_connect] connect() failed with  
</span><br>
<span class="quotelev1">&gt; errno=113
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; At this point I have to kill the proc with Ctrl-C.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] sess_dir_finalize: found job session dir  
</span><br>
<span class="quotelev1">&gt; empty - deleting
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] sess_dir_finalize: univ session dir not  
</span><br>
<span class="quotelev1">&gt; empty - leaving
</span><br>
<span class="quotelev1">&gt; Killed by signal 2.
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] sess_dir_finalize: proc session dir not  
</span><br>
<span class="quotelev1">&gt; empty - leaving
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] orted: job_state_callback(jobid = 1,  
</span><br>
<span class="quotelev1">&gt; state = ORTE_PROC_STATE_ABORTED)
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] spawn: in job_state_callback(jobid = 1,  
</span><br>
<span class="quotelev1">&gt; state = 0xa)
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] ERROR: A daemon on node 129.237.98.243  
</span><br>
<span class="quotelev1">&gt; failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] ERROR: There may be more information  
</span><br>
<span class="quotelev1">&gt; available from
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] ERROR: The daemon exited unexpectedly  
</span><br>
<span class="quotelev1">&gt; with status 255.
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] [0,0,0]-[0,0,2]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_send_handler: writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25140] [0,0,0] ORTE_ERROR_LOG: Connection  
</span><br>
<span class="quotelev1">&gt; failed in file pls_base_proxy.c at line 140
</span><br>
<span class="quotelev1">&gt; forrtl: error (69): process interrupted (SIGINT)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host: darwin.phsx.ku.edu
</span><br>
<span class="quotelev1">&gt; PID:  25143
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host: darwin.phsx.ku.edu
</span><br>
<span class="quotelev1">&gt; PID:  25143
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host: darwin.phsx.ku.edu
</span><br>
<span class="quotelev1">&gt; PID:  25143
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] sess_dir_finalize: proc session dir not  
</span><br>
<span class="quotelev1">&gt; empty - leaving
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] orted: job_state_callback(jobid = 1,  
</span><br>
<span class="quotelev1">&gt; state = ORTE_PROC_STATE_TERMINATED)
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] sess_dir_finalize: found proc session  
</span><br>
<span class="quotelev1">&gt; dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] sess_dir_finalize: found job session dir  
</span><br>
<span class="quotelev1">&gt; empty - deleting
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] sess_dir_finalize: found univ session  
</span><br>
<span class="quotelev1">&gt; dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [darwin.phsx.ku.edu:25141] sess_dir_finalize: top session dir not  
</span><br>
<span class="quotelev1">&gt; empty - leaving
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
<li><strong>Next message:</strong> <a href="1195.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1193.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>In reply to:</strong> <a href="1190.php">Ali Soleimani: "[OMPI users] OpenMPI TCP no-route-to-host error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1200.php">Ali Soleimani: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
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
