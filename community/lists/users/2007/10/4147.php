<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  3 19:16:34 2007" -->
<!-- isoreceived="20071003231634" -->
<!-- sent="Wed, 03 Oct 2007 19:16:39 -0400" -->
<!-- isosent="20071003231639" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255." -->
<!-- id="470422D7.4020608_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4702437D.1060005_at_gmx.at" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-03 19:16:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4148.php">Tim Prins: "Re: [OMPI users] MPI_Gatherv on One Process"</a>
<li><strong>Previous message:</strong> <a href="4146.php">Tim Prins: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>In reply to:</strong> <a href="4132.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4152.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Reply:</strong> <a href="4152.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, I am out of ideas on this one. It is very strange. Maybe 
<br>
someone else has an idea.
<br>
<p>I would recommend trying to install Open MPI again. First be sure to get 
<br>
rid of all of the old installs of Open MPI from all your nodes, then 
<br>
reinstall and try again.
<br>
<p>Tim
<br>
<p>Dino Rossegger wrote:
<br>
<span class="quotelev1">&gt; Here the Syntax &amp; Output of the Command:
</span><br>
<span class="quotelev1">&gt; root_at_sun:~# mpirun --hostfile hostfile saturn
</span><br>
<span class="quotelev1">&gt; [sun:28777] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [sun:28777] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev1">&gt; line 1164
</span><br>
<span class="quotelev1">&gt; [sun:28777] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; [sun:28777] ERROR: A daemon on node saturn failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [sun:28777] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [sun:28777] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [sun:28777] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev1">&gt; [sun:28777] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [sun:28777] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev1">&gt; line 1196
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using version 1.2.3, got it from openmpi.org. I'm using the same
</span><br>
<span class="quotelev1">&gt; version of openmpi on all nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; dino
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim Prins schrieb:
</span><br>
<span class="quotelev2">&gt;&gt; This is very odd. The daemon is being launched properly, but then things 
</span><br>
<span class="quotelev2">&gt;&gt; get strange. It looks like mpirun is sending a message to kill 
</span><br>
<span class="quotelev2">&gt;&gt; application processes on saturn.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What version of Open MPI are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure that the same version of Open MPI us being used everywhere?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you try:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --hostfile hostfile hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dino Rossegger wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Prins schrieb:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Monday 01 October 2007 03:56:16 pm Dino Rossegger wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yes the error output is the same:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; root_at_sun:~# mpirun --hostfile hostfile main
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line 1164
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sun:23748] ERROR: A daemon on node saturn failed to start as expected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sun:23748] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sun:23748] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sun:23748] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line 1196
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you try:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --debug-daemons --hostfile hostfile main
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did it but it doesn't give me any special output (as far as I can see that)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Heres the output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root_at_sun:~# mpirun --debug-daemons --hostfile hostfile ./main
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon [0,0,1] checking in as pid 27168 on host sun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27168] [0,0,1] orted_recv_pls: received message from [0,0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ,0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27168] [0,0,1] orted_recv_pls: received kill_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27167] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ase_orted_cmds.c at line 275
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27167] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_mo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dule.c at line 1164
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27167] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .c at line 90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27167] ERROR: A daemon on node saturn failed to start as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27167] ERROR: There may be more information available fro
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27167] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27167] ERROR: The daemon exited unexpectedly with status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 255.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27168] [0,0,1] orted_recv_pls: received message from [0,0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ,0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27168] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27167] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ase_orted_cmds.c at line 188
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27167] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_mo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dule.c at line 1196
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons for this jo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b. Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This may give more output about the error. Also, try
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -mca pls rsh -mca pls_rsh_debug 1 --hostfile hostfile main
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Heres the output, but I cant decipher it ^^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root_at_sun:~# mpirun -mca pls rsh -mca pls_rsh_debug 1 --hostfil
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e hostfile main
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh: local csh: 0, local sh: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh: remote csh: 0, remote sh: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh: final template argv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --bootp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; roxy 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodena
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me &lt;template&gt; --universe root_at_sun:default-universe-27175 --nsr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eplica &quot;0.0.0;tcp://192.168.1.254:4733;tcp://172.16.0.202:4733
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot; --gprreplica &quot;0.0.0;tcp://192.168.1.254:4733;tcp://172.16.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 202:4733&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh: launching on node sun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh: sun is a LOCAL node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh: changing to directory /root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh: executing: (/usr/local/bin/orted) orted -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 --noden
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ame sun --universe root_at_sun:default-universe-27175 --nsreplica
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &quot;0.0.0;tcp://192.168.1.254:4733;tcp://172.16.0.202:4733&quot; --gp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rreplica &quot;0.0.0;tcp://192.168.1.254:4733;tcp://172.16.0.202:47
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 33&quot; --set-sid [SSH_AGENT_PID=24793 TERM=xterm SHELL=/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SSH_CLIENT=10.2.56.124 21001 22 SSH_TTY=/dev/pts/0 USER=root L
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D_LIBRARY_PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in:/sbin:/bin:/opt/c3-4/:/usr/lib:/usr/local/lib SSH_AUTH_SOCK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =/tmp/ssh-sxbbH24792/agent.24792 MAIL=/var/mail/root PATH=/usr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /local/bin:/usr/bin:/bin:/usr/games:/opt/c3-4/:/usr/local/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PWD=/root LANG=en_US.UTF-8 SHLVL=1 HOME=/root LOGNAME=root SSH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _CONNECTION=10.2.56.124 21001 172.16.0.202 22 _=/usr/local/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /mpirun OMPI_MCA_rds_hostfile_path=hostfile orte-job-globals O
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_MCA_pls_rsh_debug=1 OMPI_MCA_seed=0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh: launching on node saturn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh: saturn is a REMOTE node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] pls:rsh: executing: (//usr/bin/ssh) /usr/bin/ssh s
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                     aturn orted --bootproxy 1 --name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0.0.2 --num_procs 3 --vpid_st
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    art 0 --nodename saturn --universe root_at_sun:default-universe-2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                        7175 --nsreplica
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;0.0.0;tcp://192.168.1.254:4733;tcp://172.16.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    0.202:4733&quot; --gprreplica
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;0.0.0;tcp://192.168.1.254:4733;tcp:/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /172.16.0.202:4733&quot; [SSH_AGENT_PID=24793 TERM=xterm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SHELL=/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                         /bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SSH_CLIENT=10.2.56.124 21001 22 SSH_TTY=/dev/pts/0 USER=
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin:/sbin:/bin:/opt/c3-4/:/usr/lib:/usr/local/lib SSH_AUT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; H_SOCK=/tmp/ssh-sxbbH24792/agent.24792 MAIL=/var/mail/root PAT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; H=/usr/local/bin:/usr/bin:/bin:/usr/games:/opt/c3-4/:/usr/loca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                     l/lib PWD=/root LANG=en_US.UTF-8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SHLVL=1 HOME=/root LOGNAME=ro
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ot SSH_CONNECTION=10.2.56.124 21001 172.16.0.202 22 _=/usr/loc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                        al/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_rds_hostfile_path=hostfile orte-job-glo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       bals OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_seed=0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 1164
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] ERROR: A daemon on node saturn failed to start as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sun:27175] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 1196
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This will print out the exact command that is used to launch the orted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, I would highly recommend not running Open MPI as root. It is just a bad 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; idea.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes I know, I'm doing it just now for testing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I wrote the following to my .ssh/environment (on all machines)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n:/opt/c3-4/:/usr/lib:/usr/local/lib;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PATH=$PATH:/usr/local/lib;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export LD_LIBRARY_PATH;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export PATH;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and added the statement you told me to the ssd_config (on all machines):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PermitUserEnvironment yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And it seems to me that the pathes are correct now.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My shell is bash (/bin/bash)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When running locate orted (to find out where exactly my openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; installation is (compilation defaults) i saw that, on sun there was a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/bin/orted while there wasn't one on saturn.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I deleted /usr/bin/orted on sun and tried again with the option --prefix
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  /usr/local/ (which seems to be  my installation directory) but it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; didn't work (same error).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it possible that you are mixing 2 different installations of Open MPI? You 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; may consider installing OpenMPI to a NFS drive to make these things a bit 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; easier.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a script or anything like that with which I can uninstall
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi, because i'll might try a new compilation to /opt/openmpi since
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it doesn't look like I would be able to solve the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you still have the tree around that you used to 'make' Open MPI, you can 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just go into that tree and type 'make uninstall'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hope this helps,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jody schrieb:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Now that the PATHs seem to be set correctly for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ssh i don't know what the problem could be.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is the error message still the same on as in the first mail?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Did you do the envorpnment/sshd_config on both machines?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What shell are you using?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On other test you could make is to start your application
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with the --prefix option:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $mpirun -np 2 --prefix /opt/openmpi -H sun,saturn ./main
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (assuming your Open MPI installation lies in /opt/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on both machines)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 10/1/07, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Jodi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; did the steps as you said, but it didn't work for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I set LD_LIBRARY_PATH in /etc/environment and ~/.shh/environment and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; made the changes to sshd_config.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But this all didn't solve my problem, although the pahts seemed to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; set correctly (judging what ssh saturn `printenv &gt;&gt; test` says). I also
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; restarted the ssh server, the error is the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hope you can help me out here and thanks for your help so far
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; dino
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; jody schrieb:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dino -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I had a similar problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I was only able to solve it by setting PATH and LS_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in the file ~/ssh/environment on the client and setting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   PermitUserEnvironment yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in /etc/ssh/sshd_config on the server (for this you need root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; prioviledge though)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To be on the safe side, i did both on all my nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 9/27/07, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help, it really is the case that either in PATH nor in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH the path to the libs is set correctly. I'll try out,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hope it works.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jody schrieb:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Dino
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Try
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  ssh saturn printenv | grep PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;from your host sun to see what your environment variables are when
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh is run without a shell.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 9/27/07, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have a problem running a simple programm mpihello.cpp.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is a excerp of the error and the command
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; root_at_sun:~# mpirun -H sun,saturn main
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at line 1164
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; line 90 [sun:25213] ERROR: A daemon on node saturn failed to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; as expected. [sun:25213] ERROR: There may be more information
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; available from [sun:25213] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at line 1196
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------ mpirun was unable to cleanly terminate the daemons for this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; job. Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The program is runable from each node alone (mpirun -np2 main)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My PathVariables:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/c3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -4/:/usr/lib:/usr/local/libecho $LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/c3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -4/:/usr/lib:/usr/local/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Passwordless ssh is up 'n running
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I walked through the FAQ and Mailing Lists but couldn't find any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; solution for my problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dino R.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4148.php">Tim Prins: "Re: [OMPI users] MPI_Gatherv on One Process"</a>
<li><strong>Previous message:</strong> <a href="4146.php">Tim Prins: "Re: [OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>In reply to:</strong> <a href="4132.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4152.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Reply:</strong> <a href="4152.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
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
