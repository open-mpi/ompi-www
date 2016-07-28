<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  2 03:31:55 2007" -->
<!-- isoreceived="20071002073155" -->
<!-- sent="Tue, 02 Oct 2007 09:29:34 +0200" -->
<!-- isosent="20071002072934" -->
<!-- name="Dino Rossegger" -->
<!-- email="dino.rossegger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255." -->
<!-- id="4701F35E.4000501_at_gmx.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200710012241.32166.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> Dino Rossegger (<em>dino.rossegger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-02 03:29:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4130.php">Sebastian Schulz: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4128.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>In reply to:</strong> <a href="4125.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4131.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Reply:</strong> <a href="4131.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>Tim Prins schrieb:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Monday 01 October 2007 03:56:16 pm Dino Rossegger wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi again,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes the error output is the same:
</span><br>
<span class="quotelev2">&gt;&gt; root_at_sun:~# mpirun --hostfile hostfile main
</span><br>
<span class="quotelev2">&gt;&gt; [sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt;&gt; [sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev2">&gt;&gt; line 1164
</span><br>
<span class="quotelev2">&gt;&gt; [sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
</span><br>
<span class="quotelev2">&gt;&gt; [sun:23748] ERROR: A daemon on node saturn failed to start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [sun:23748] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt; [sun:23748] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [sun:23748] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev2">&gt;&gt; [sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev2">&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev2">&gt;&gt; [sun:23748] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
</span><br>
<span class="quotelev2">&gt;&gt; line 1196
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev2">&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Can you try:
</span><br>
<span class="quotelev1">&gt; mpirun --debug-daemons --hostfile hostfile main
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Did it but it doesn't give me any special output (as far as I can see that)
<br>
Heres the output:
<br>
root_at_sun:~# mpirun --debug-daemons --hostfile hostfile ./main
<br>
Daemon [0,0,1] checking in as pid 27168 on host sun
<br>
[sun:27168] [0,0,1] orted_recv_pls: received message from [0,0
<br>
,0]
<br>
[sun:27168] [0,0,1] orted_recv_pls: received kill_local_procs
<br>
[sun:27167] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_b
<br>
ase_orted_cmds.c at line 275
<br>
[sun:27167] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_mo
<br>
dule.c at line 1164
<br>
[sun:27167] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp
<br>
.c at line 90
<br>
[sun:27167] ERROR: A daemon on node saturn failed to start as
<br>
expected.
<br>
[sun:27167] ERROR: There may be more information available fro
<br>
m
<br>
[sun:27167] ERROR: the remote shell (see above).
<br>
[sun:27167] ERROR: The daemon exited unexpectedly with status
<br>
255.
<br>
[sun:27168] [0,0,1] orted_recv_pls: received message from [0,0
<br>
,0]
<br>
[sun:27168] [0,0,1] orted_recv_pls: received exit
<br>
<p><p>[sun:27167] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_b
<br>
ase_orted_cmds.c at line 188
<br>
[sun:27167] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_mo
<br>
dule.c at line 1196
<br>
--------------------------------------------------------------
<br>
------------
<br>
mpirun was unable to cleanly terminate the daemons for this jo
<br>
b. Returned value Timeout instead of ORTE_SUCCESS.
<br>
<p>--------------------------------------------------------------
<br>
------------
<br>
<p><span class="quotelev1">&gt; This may give more output about the error. Also, try
</span><br>
<span class="quotelev1">&gt; mpirun -mca pls rsh -mca pls_rsh_debug 1 --hostfile hostfile main
</span><br>
<p>Heres the output, but I cant decipher it ^^
<br>
root_at_sun:~# mpirun -mca pls rsh -mca pls_rsh_debug 1 --hostfil
<br>
e hostfile main
<br>
[sun:27175] pls:rsh: local csh: 0, local sh: 1
<br>
[sun:27175] pls:rsh: assuming same remote shell as local shell
<br>
[sun:27175] pls:rsh: remote csh: 0, remote sh: 1
<br>
[sun:27175] pls:rsh: final template argv:
<br>
[sun:27175] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --bootp
<br>
roxy 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodena
<br>
me &lt;template&gt; --universe root_at_sun:default-universe-27175 --nsr
<br>
eplica &quot;0.0.0;tcp://192.168.1.254:4733;tcp://172.16.0.202:4733
<br>
&quot; --gprreplica &quot;0.0.0;tcp://192.168.1.254:4733;tcp://172.16.0.
<br>
202:4733&quot;
<br>
[sun:27175] pls:rsh: launching on node sun
<br>
[sun:27175] pls:rsh: sun is a LOCAL node
<br>
[sun:27175] pls:rsh: changing to directory /root
<br>
[sun:27175] pls:rsh: executing: (/usr/local/bin/orted) orted -
<br>
-bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 --noden
<br>
ame sun --universe root_at_sun:default-universe-27175 --nsreplica
<br>
&nbsp;&quot;0.0.0;tcp://192.168.1.254:4733;tcp://172.16.0.202:4733&quot; --gp
<br>
rreplica &quot;0.0.0;tcp://192.168.1.254:4733;tcp://172.16.0.202:47
<br>
33&quot; --set-sid [SSH_AGENT_PID=24793 TERM=xterm SHELL=/bin/bash
<br>
SSH_CLIENT=10.2.56.124 21001 22 SSH_TTY=/dev/pts/0 USER=root L
<br>
D_LIBRARY_PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/b
<br>
in:/sbin:/bin:/opt/c3-4/:/usr/lib:/usr/local/lib SSH_AUTH_SOCK
<br>
=/tmp/ssh-sxbbH24792/agent.24792 MAIL=/var/mail/root PATH=/usr
<br>
/local/bin:/usr/bin:/bin:/usr/games:/opt/c3-4/:/usr/local/lib
<br>
PWD=/root LANG=en_US.UTF-8 SHLVL=1 HOME=/root LOGNAME=root SSH
<br>
_CONNECTION=10.2.56.124 21001 172.16.0.202 22 _=/usr/local/bin
<br>
/mpirun OMPI_MCA_rds_hostfile_path=hostfile orte-job-globals O
<br>
MPI_MCA_pls_rsh_debug=1 OMPI_MCA_seed=0]
<br>
[sun:27175] pls:rsh: launching on node saturn
<br>
[sun:27175] pls:rsh: saturn is a REMOTE node
<br>
[sun:27175] pls:rsh: executing: (//usr/bin/ssh) /usr/bin/ssh s
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aturn orted --bootproxy 1 --name
<br>
0.0.2 --num_procs 3 --vpid_st
<br>
<p>&nbsp;&nbsp;&nbsp;art 0 --nodename saturn --universe root_at_sun:default-universe-2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7175 --nsreplica
<br>
&quot;0.0.0;tcp://192.168.1.254:4733;tcp://172.16.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.202:4733&quot; --gprreplica
<br>
&quot;0.0.0;tcp://192.168.1.254:4733;tcp:/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/172.16.0.202:4733&quot; [SSH_AGENT_PID=24793 TERM=xterm
<br>
SHELL=/bin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bash
<br>
SSH_CLIENT=10.2.56.124 21001 22 SSH_TTY=/dev/pts/0 USER=
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root
<br>
LD_LIBRARY_PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:
<br>
<p><p>/usr/bin:/sbin:/bin:/opt/c3-4/:/usr/lib:/usr/local/lib SSH_AUT
<br>
<p><p>H_SOCK=/tmp/ssh-sxbbH24792/agent.24792 MAIL=/var/mail/root PAT
<br>
<p><p>H=/usr/local/bin:/usr/bin:/bin:/usr/games:/opt/c3-4/:/usr/loca
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l/lib PWD=/root LANG=en_US.UTF-8
<br>
SHLVL=1 HOME=/root LOGNAME=ro
<br>
<p>&nbsp;&nbsp;&nbsp;ot SSH_CONNECTION=10.2.56.124 21001 172.16.0.202 22 _=/usr/loc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;al/bin/mpirun
<br>
OMPI_MCA_rds_hostfile_path=hostfile orte-job-glo
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bals OMPI_MCA_pls_rsh_debug=1 OMPI_MCA_seed=0]
<br>
[sun:27175] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[sun:27175] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
<br>
line 1164
<br>
[sun:27175] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
<br>
[sun:27175] ERROR: A daemon on node saturn failed to start as expected.
<br>
[sun:27175] ERROR: There may be more information available from
<br>
[sun:27175] ERROR: the remote shell (see above).
<br>
[sun:27175] ERROR: The daemon exited unexpectedly with status 255.
<br>
[sun:27175] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[sun:27175] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
<br>
line 1196
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job.
<br>
Returned value Timeout instead of ORTE_SUCCESS.
<br>
<p>--------------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt; This will print out the exact command that is used to launch the orted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I would highly recommend not running Open MPI as root. It is just a bad 
</span><br>
<span class="quotelev1">&gt; idea.
</span><br>
<p>Yes I know, I'm doing it just now for testing.
<br>
<span class="quotelev2">&gt;&gt; I wrote the following to my .ssh/environment (on all machines)
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bi
</span><br>
<span class="quotelev2">&gt;&gt; n:/opt/c3-4/:/usr/lib:/usr/local/lib;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATH=$PATH:/usr/local/lib;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH;
</span><br>
<span class="quotelev2">&gt;&gt; export PATH;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and added the statement you told me to the ssd_config (on all machines):
</span><br>
<span class="quotelev2">&gt;&gt; PermitUserEnvironment yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And it seems to me that the pathes are correct now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My shell is bash (/bin/bash)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When running locate orted (to find out where exactly my openmpi
</span><br>
<span class="quotelev2">&gt;&gt; installation is (compilation defaults) i saw that, on sun there was a
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/orted while there wasn't one on saturn.
</span><br>
<span class="quotelev2">&gt;&gt; I deleted /usr/bin/orted on sun and tried again with the option --prefix
</span><br>
<span class="quotelev2">&gt;&gt;  /usr/local/ (which seems to be  my installation directory) but it
</span><br>
<span class="quotelev2">&gt;&gt; didn't work (same error).
</span><br>
<span class="quotelev1">&gt; Is it possible that you are mixing 2 different installations of Open MPI? You 
</span><br>
<span class="quotelev1">&gt; may consider installing OpenMPI to a NFS drive to make these things a bit 
</span><br>
<span class="quotelev1">&gt; easier.
</span><br>
<span class="quotelev2">&gt;&gt; Is there a script or anything like that with which I can uninstall
</span><br>
<span class="quotelev2">&gt;&gt; openmpi, because i'll might try a new compilation to /opt/openmpi since
</span><br>
<span class="quotelev2">&gt;&gt; it doesn't look like I would be able to solve the problem.
</span><br>
<span class="quotelev1">&gt; If you still have the tree around that you used to 'make' Open MPI, you can 
</span><br>
<span class="quotelev1">&gt; just go into that tree and type 'make uninstall'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; jody schrieb:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now that the PATHs seem to be set correctly for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh i don't know what the problem could be.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the error message still the same on as in the first mail?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you do the envorpnment/sshd_config on both machines?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What shell are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On other test you could make is to start your application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the --prefix option:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $mpirun -np 2 --prefix /opt/openmpi -H sun,saturn ./main
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (assuming your Open MPI installation lies in /opt/openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on both machines)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/1/07, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Jodi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did the steps as you said, but it didn't work for me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I set LD_LIBRARY_PATH in /etc/environment and ~/.shh/environment and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; made the changes to sshd_config.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But this all didn't solve my problem, although the pahts seemed to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set correctly (judging what ssh saturn `printenv &gt;&gt; test` says). I also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; restarted the ssh server, the error is the same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hope you can help me out here and thanks for your help so far
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dino
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jody schrieb:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dino -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I had a similar problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I was only able to solve it by setting PATH and LS_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the file ~/ssh/environment on the client and setting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   PermitUserEnvironment yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in /etc/ssh/sshd_config on the server (for this you need root
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; prioviledge though)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To be on the safe side, i did both on all my nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 9/27/07, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Jody,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for your help, it really is the case that either in PATH nor in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH the path to the libs is set correctly. I'll try out,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hope it works.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; jody schrieb:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Dino
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  ssh saturn printenv | grep PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;from your host sun to see what your environment variables are when
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh is run without a shell.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 9/27/07, Dino Rossegger &lt;dino.rossegger_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have a problem running a simple programm mpihello.cpp.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is a excerp of the error and the command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; root_at_sun:~# mpirun -H sun,saturn main
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at line 1164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; line 90 [sun:25213] ERROR: A daemon on node saturn failed to start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; as expected. [sun:25213] ERROR: There may be more information
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; available from [sun:25213] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] ERROR: The daemon exited unexpectedly with status 255.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; base/pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at line 1196
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------ mpirun was unable to cleanly terminate the daemons for this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; job. Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The program is runable from each node alone (mpirun -np2 main)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My PathVariables:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/c3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -4/:/usr/lib:/usr/local/libecho $LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/c3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -4/:/usr/lib:/usr/local/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Passwordless ssh is up 'n running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I walked through the FAQ and Mailing Lists but couldn't find any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; solution for my problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dino R.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="4130.php">Sebastian Schulz: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4128.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>In reply to:</strong> <a href="4125.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4131.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Reply:</strong> <a href="4131.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
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
