<?
$subject_val = "Re: [OMPI users] mpi problems/many cpus per node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 17:01:33 2012" -->
<!-- isoreceived="20121219220133" -->
<!-- sent="Wed, 19 Dec 2012 16:01:19 -0600" -->
<!-- isosent="20121219220119" -->
<!-- name="Daniel Davidson" -->
<!-- email="danield_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems/many cpus per node" -->
<!-- id="50D2392F.5060100_at_igb.uiuc.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50CF98D9.5080806_at_igb.uiuc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi problems/many cpus per node<br>
<strong>From:</strong> Daniel Davidson (<em>danield_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-19 17:01:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21017.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="21015.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20980.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21017.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="21017.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I figured this out.
<br>
<p>ssh was working, but scp was not due to an mtu mismatch between the 
<br>
systems.  Adding MTU=1500 to my 
<br>
/etc/sysconfig/network-scripts/ifcfg-eth2 fixed the problem.
<br>
<p>Dan
<br>
<p>On 12/17/2012 04:12 PM, Daniel Davidson wrote:
<br>
<span class="quotelev1">&gt; Yes, it does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_compute-2-1 ~]# ssh compute-2-0
</span><br>
<span class="quotelev1">&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not 
</span><br>
<span class="quotelev1">&gt; generated
</span><br>
<span class="quotelev1">&gt; Warning: No xauth data; using fake authentication data for X11 
</span><br>
<span class="quotelev1">&gt; forwarding.
</span><br>
<span class="quotelev1">&gt; Last login: Mon Dec 17 16:13:00 2012 from compute-2-1.local
</span><br>
<span class="quotelev1">&gt; [root_at_compute-2-0 ~]# ssh compute-2-1
</span><br>
<span class="quotelev1">&gt; Warning: untrusted X11 forwarding setup failed: xauth key data not 
</span><br>
<span class="quotelev1">&gt; generated
</span><br>
<span class="quotelev1">&gt; Warning: No xauth data; using fake authentication data for X11 
</span><br>
<span class="quotelev1">&gt; forwarding.
</span><br>
<span class="quotelev1">&gt; Last login: Mon Dec 17 16:12:32 2012 from biocluster.local
</span><br>
<span class="quotelev1">&gt; [root_at_compute-2-1 ~]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/17/2012 03:39 PM, Doug Reeder wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Daniel,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does passwordless ssh work. You need to make sure that it is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 17, 2012, at 2:24 PM, Daniel Davidson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would also add that scp seems to be creating the file in the /tmp 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory of compute-2-0, and that /var/log secure is showing ssh 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connections being accepted.  Is there anything in ssh that can limit 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connections that I need to look out for?  My guess is that it is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; part of the client prefs and not the server prefs since I can 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initiate the mpi command from another machine and it works fine, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; even when it uses compute-2-0 and 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-2-1 /]# date
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mon Dec 17 15:11:50 CST 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-2-1 /]# /home/apps/openmpi-1.7rc5/bin/mpirun -host 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-0,compute-2-1 -v  -np 10 --leave-session-attached -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_base_verbose 5 -mca plm_base_verbose 5 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:70237] mca:base:select:(  plm) Querying component 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-1.local:70237] [[INVALID],INVALID] plm:rsh_lookup on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; agent ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-2-0 tmp]# ls -ltr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; total 24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-------.  1 root    root       0 Nov 28 08:42 yum.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-------.  1 root    root    5962 Nov 29 10:50 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yum_save_tx-2012-11-29-10-50SRba9s.yumtx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drwx------.  3 danield danield 4096 Dec 12 14:56 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-sessions-danield_at_compute-2-0_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drwx------.  3 root    root    4096 Dec 13 15:38 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-sessions-root_at_compute-2-0_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drwx------  18 danield danield 4096 Dec 14 09:48 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-sessions-danield_at_compute-2-0.local_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drwx------  44 root    root    4096 Dec 17 15:14 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-sessions-root_at_compute-2-0.local_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-2-0 tmp]# tail -10 /var/log/secure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dec 17 15:13:40 compute-2-0 sshd[24834]: Accepted publickey for root 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from 10.1.255.226 port 49483 ssh2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dec 17 15:13:40 compute-2-0 sshd[24834]: pam_unix(sshd:session): 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session opened for user root by (uid=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dec 17 15:13:42 compute-2-0 sshd[24834]: Received disconnect from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10.1.255.226: 11: disconnected by user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dec 17 15:13:42 compute-2-0 sshd[24834]: pam_unix(sshd:session): 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session closed for user root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dec 17 15:13:50 compute-2-0 sshd[24851]: Accepted publickey for root 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from 10.1.255.226 port 49484 ssh2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dec 17 15:13:50 compute-2-0 sshd[24851]: pam_unix(sshd:session): 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session opened for user root by (uid=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dec 17 15:13:55 compute-2-0 sshd[24851]: Received disconnect from 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10.1.255.226: 11: disconnected by user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dec 17 15:13:55 compute-2-0 sshd[24851]: pam_unix(sshd:session): 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session closed for user root
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dec 17 15:14:01 compute-2-0 sshd[24868]: Accepted publickey for root 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from 10.1.255.226 port 49485 ssh2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dec 17 15:14:01 compute-2-0 sshd[24868]: pam_unix(sshd:session): 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; session opened for user root by (uid=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/17/2012 11:16 AM, Daniel Davidson wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A very long time (15 mintues or so) I finally received the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following in addition to what I just sent earlier:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-2-0.local:24659] [[32341,0],1] odls:kill_local_proc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; working on WILDCARD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-2-0.local:24659] [[32341,0],1] odls:kill_local_proc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; working on WILDCARD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-2-0.local:24659] [[32341,0],1] odls:kill_local_proc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; working on WILDCARD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] daemon 1 failed with status 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:base:orted_cmd sending 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orted_exit commands
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] odls:kill_local_proc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; working on WILDCARD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] odls:kill_local_proc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; working on WILDCARD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Firewalls are down:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_compute-2-1 /]# iptables -L
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chain INPUT (policy ACCEPT)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; target     prot opt source               destination
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chain FORWARD (policy ACCEPT)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; target     prot opt source               destination
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chain OUTPUT (policy ACCEPT)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; target     prot opt source               destination
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [root_at_compute-2-0 ~]# iptables -L
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chain INPUT (policy ACCEPT)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; target     prot opt source               destination
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chain FORWARD (policy ACCEPT)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; target     prot opt source               destination
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chain OUTPUT (policy ACCEPT)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; target     prot opt source               destination
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 12/17/2012 11:09 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hmmm...and that is ALL the output? If so, then it never succeeded 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in sending a message back, which leads one to suspect some kind of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; firewall in the way.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looking at the ssh line, we are going to attempt to send a message 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from tnode 2-0 to node 2-1 on the 10.1.255.226 address. Is that 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; going to work? Anything preventing it?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Dec 17, 2012, at 8:56 AM, Daniel Davidson 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;danield_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; These nodes have not been locked down yet so that jobs cannot be 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; launched from the backend, at least on purpose anyway.  The added 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; logging returns the information below:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 /]# /home/apps/openmpi-1.7rc5/bin/mpirun -host 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compute-2-0,compute-2-1 -v  -np 10 --leave-session-attached -mca 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; odls_base_verbose 5 -mca plm_base_verbose 5 hostname
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] mca:base:select:(  plm) Querying 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[INVALID],INVALID] plm:rsh_lookup on 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; agent ssh : rsh path NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] mca:base:select:(  plm) Query of 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [rsh] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] mca:base:select:(  plm) Querying 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] mca:base:select:(  plm) Skipping 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] mca:base:select:(  plm) Querying 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [tm]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] mca:base:select:(  plm) Skipping 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [tm]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] mca:base:select:(  plm) Selected 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] plm:base:set_hnp_name: initial bias 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 69655 nodename hash 3634869988
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] plm:base:set_hnp_name: final jobfam 32341
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:rsh_setup on agent 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ssh : rsh path NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] mca:base:select:( odls) Querying 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] mca:base:select:( odls) Query of 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] mca:base:select:( odls) Selected 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:base:setup_job
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:base:setup_vm 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; creating map
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] setup:vm: working 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; unmanaged allocation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] using dash_host
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] checking node compute-2-0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] adding compute-2-0 to list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] checking node 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:base:setup_vm add new 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; daemon [[32341,0],1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:base:setup_vm 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; assigning new daemon [[32341,0],1] to node compute-2-0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:rsh: launching vm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:rsh: local shell: 0 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (bash)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:rsh: assuming same 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; remote shell as local shell
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:rsh: remote shell: 0 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (bash)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:rsh: final template 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; argv:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         /usr/bin/ssh &lt;template&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PATH=/home/apps/openmpi-1.7rc5/bin:$PATH ; export PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/home/apps/openmpi-1.7rc5/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; DYLD_LIBRARY_PATH=/home/apps/openmpi-1.7rc5/lib:$DYLD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export DYLD_LIBRARY_PATH ; /home/apps/openmpi-1.7rc5/bin/orted 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mca ess env -mca orte_ess_jobid 2119499776 -mca orte_ess_vpid 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;template&gt; -mca orte_ess_num_procs 2 -mca orte_hnp_uri 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;2119499776.0;tcp://10.1.255.226:46314;tcp://172.16.28.94:46314&quot; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mca orte_use_common_port 0 --tree-spawn -mca oob tcp -mca 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; odls_base_verbose 5 -mca plm_base_verbose 5 -mca plm rsh -mca 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_leave_session_attached 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:rsh:launch daemon 0 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not a child of mine
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:rsh: adding node 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compute-2-0 to launch list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:rsh: activating 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; launch event
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:rsh: recording launch 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of daemon [[32341,0],1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69655] [[32341,0],0] plm:rsh: executing: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (//usr/bin/ssh) [/usr/bin/ssh compute-2-0 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PATH=/home/apps/openmpi-1.7rc5/bin:$PATH ; export PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/home/apps/openmpi-1.7rc5/lib:$LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; DYLD_LIBRARY_PATH=/home/apps/openmpi-1.7rc5/lib:$DYLD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; export DYLD_LIBRARY_PATH ; /home/apps/openmpi-1.7rc5/bin/orted 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mca ess env -mca orte_ess_jobid 2119499776 -mca orte_ess_vpid 1 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mca orte_ess_num_procs 2 -mca orte_hnp_uri 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;2119499776.0;tcp://10.1.255.226:46314;tcp://172.16.28.94:46314&quot; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mca orte_use_common_port 0 --tree-spawn -mca oob tcp -mca 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; odls_base_verbose 5 -mca plm_base_verbose 5 -mca plm rsh -mca 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orte_leave_session_attached 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Warning: untrusted X11 forwarding setup failed: xauth key data 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not generated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Warning: No xauth data; using fake authentication data for X11 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; forwarding.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24659] mca:base:select:(  plm) Querying 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24659] [[32341,0],1] plm:rsh_lookup on agent 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ssh : rsh path NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24659] mca:base:select:(  plm) Query of 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [rsh] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24659] mca:base:select:(  plm) Selected 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24659] mca:base:select:( odls) Querying 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24659] mca:base:select:( odls) Query of 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [default] set priority to 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24659] mca:base:select:( odls) Selected 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24659] [[32341,0],1] plm:rsh_setup on agent 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ssh : rsh path NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24659] [[32341,0],1] plm:base:receive start comm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 12/17/2012 10:37 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ?? That was all the output? If so, then something is indeed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; quite wrong as it didn't even attempt to launch the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Try adding -mca plm_base_verbose 5 to the cmd line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I was assuming you were using ssh as the launcher, but I wonder 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; if you are in some managed environment? If so, then it could be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that launch from a backend node isn't allowed (e.g., on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; gridengine).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 17, 2012, at 8:28 AM, Daniel Davidson 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;danield_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This looks to be having issues as well, and I cannot get any 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; number of processors to give me a different result with the new 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 /]# /home/apps/openmpi-1.7rc5/bin/mpirun 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -host compute-2-0,compute-2-1 -v  -np 50 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --leave-session-attached -mca odls_base_verbose 5 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69417] mca:base:select:( odls) Querying 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69417] mca:base:select:( odls) Query of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default] set priority to 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69417] mca:base:select:( odls) Selected 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24486] mca:base:select:( odls) Querying 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24486] mca:base:select:( odls) Query of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default] set priority to 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24486] mca:base:select:( odls) Selected 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24486] [[24939,0],1] odls:kill_local_proc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; working on WILDCARD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24486] [[24939,0],1] odls:kill_local_proc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; working on WILDCARD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:24486] [[24939,0],1] odls:kill_local_proc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; working on WILDCARD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69417] [[24939,0],0] odls:kill_local_proc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; working on WILDCARD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:69417] [[24939,0],0] odls:kill_local_proc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; working on WILDCARD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However from the head node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_biocluster openmpi-1.7rc5]# 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/apps/openmpi-1.7rc5/bin/mpirun -host 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-0,compute-2-1 -v  -np 50  hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Displays 25 hostnames from each system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you again for the help so far,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 12/17/2012 08:31 AM, Daniel Davidson wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I will give this a try, but wouldn't that be an issue as well 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; if the process was run on the head node or another node?  So 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; long as the mpi job is not started on either of these two 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodes, it works fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 12/14/2012 11:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It must be making contact or ORTE wouldn't be attempting to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; launch your application's procs. Looks more like it never 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; received the launch command. Looking at the code, I suspect 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you're getting caught in a race condition that causes the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; message to get &quot;stuck&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Just to see if that's the case, you might try running this 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with the 1.7 release candidate, or even the developer's 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nightly build. Both use a different timing mechanism intended 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to resolve such situations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 14, 2012, at 2:49 PM, Daniel Davidson 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;danield_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you for the help so far.  Here is the information that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the debugging gives me.  Looks like the daemon on on the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; non-local node never makes contact.  If I step NP back two 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; though, it does.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 etc]# /home/apps/openmpi-1.6.3/bin/mpirun 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -host compute-2-0,compute-2-1 -v  -np 34 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --leave-session-attached -mca odls_base_verbose 5 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] mca:base:select:( odls) Querying 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] mca:base:select:( odls) Query of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default] set priority to 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] mca:base:select:( odls) Selected 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:29282] mca:base:select:( odls) Querying 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:29282] mca:base:select:( odls) Query of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default] set priority to 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:29282] mca:base:select:( odls) Selected 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:update:daemon:info updating nidmap
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:construct_child_list unpacking data to launch job 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [49524,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:construct_child_list adding new jobdat for job [49524,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:construct_child_list unpacking 1 app_contexts
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],0] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],1] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],1] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],1] (1) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],2] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],3] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],3] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],3] (3) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],4] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],5] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],5] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],5] (5) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],6] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],7] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],7] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],7] (7) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],8] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],9] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],9] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],9] (9) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],10] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],11] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],11] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],11] (11) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],12] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],13] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],13] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],13] (13) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],14] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],15] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],15] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],15] (15) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],16] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],17] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],17] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],17] (17) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],18] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],19] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],19] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],19] (19) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],20] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],21] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],21] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],21] (21) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],22] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],23] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],23] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],23] (23) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],24] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],25] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],25] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],25] (25) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],26] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],27] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],27] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],27] (27) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],28] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],29] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],29] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],29] (29) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],30] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],31] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],31] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],31] (31) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],32] on daemon 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - checking proc [[49524,1],33] on daemon 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:constructing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child list - found proc [[49524,1],33] for me!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] adding proc [[49524,1],33] (33) to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; my local list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch found 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 384 processors for 17 children and locally set 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; oversubscribed to false
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],15]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],17]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],19]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],21]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],23]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],25]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],27]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],29]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],31]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child [[49524,1],33]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; reporting job [49524,1] launch status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch flagging 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; launch report to myself
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:launch setting 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; waitpids
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44857 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44858 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44859 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44860 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44861 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44862 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44863 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44865 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44866 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44867 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44869 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44870 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44871 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44872 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44873 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44874 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:wait_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process 44875 terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/33/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],33] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/31/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],31] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/29/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],29] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/27/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],27] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/25/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],25] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/23/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],23] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/21/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],21] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/19/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],19] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/17/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],17] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/15/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],15] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/13/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],13] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/11/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],11] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/9/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],9] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/7/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],7] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/5/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],5] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/3/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],3] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking abort file 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /tmp/openmpi-sessions-root_at_compute-2-1.local_0/3245604865/1/abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:waitpid_fired 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; child process [[49524,1],1] terminated normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],25]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],15]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],13]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],19]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],17]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],31]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],21]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],33]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],23]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],29]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],27]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odls:notify_iof_complete for child [[49524,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:proc_complete 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; reporting all procs in [49524,1] terminated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Killed by signal 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44855] [[49524,0],0] odls:kill_local_proc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; working on WILDCARD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 12/14/2012 04:11 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry - I forgot that you built from a tarball, and so 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; debug isn't enabled by default. You need to configure 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --enable-debug.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 14, 2012, at 1:52 PM, Daniel Davidson 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;danield_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Oddly enough, adding this debugging info, lowered the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; number of processes that can be used down to 42 from 46.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I run the MPI, it fails giving only the information 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 ssh]# 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/apps/openmpi-1.6.3/bin/mpirun -host 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-0,compute-2-1 -v  -np 44 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --leave-session-attached -mca odls_base_verbose 5 hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44374] mca:base:select:( odls) Querying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44374] mca:base:select:( odls) Query of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default] set priority to 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-1.local:44374] mca:base:select:( odls) Selected 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:28950] mca:base:select:( odls) Querying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:28950] mca:base:select:( odls) Query of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default] set priority to 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-2-0.local:28950] mca:base:select:( odls) Selected 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component [default]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 12/14/2012 03:18 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It wouldn't be ssh - in both cases, only one ssh is being 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; done to each node (to start the local daemon). The only 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; difference is the number of fork/exec's being done on 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; each node, and the number of file descriptors being 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opened to support those fork/exec's.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It certainly looks like your limits are high enough. When 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; you say it &quot;fails&quot;, what do you mean - what error does it 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; report? Try adding:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --leave-session-attached -mca odls_base_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to your cmd line - this will report all the local proc 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; launch debug and hopefully show you a more detailed error 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; report.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 14, 2012, at 12:29 PM, Daniel Davidson 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;danield_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have had to cobble together two machines in our rocks 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cluster without using the standard installation, they 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have efi only bios on them and rocks doesnt like that, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; so it is the only workaround.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Everything works great now, except for one thing.  MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; jobs (openmpi or mpich) fail when started from one of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; these nodes (via qsub or by logging in and running the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; command) if 24 or more processors are needed on another 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; system.  However if the originator of the MPI job is the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; headnode or any of the preexisting compute nodes, it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; works fine.  Right now I am guessing ssh client or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ulimit problems, but I cannot find any difference.  Any 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; help would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-1 and compute-2-0 are the new nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Examples:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This works, prints 23 hostnames from each machine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/apps/openmpi-1.6.3/bin/mpirun -host 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-0,compute-2-1 -np 46 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This does not work, prints 24 hostnames for compute-2-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/apps/openmpi-1.6.3/bin/mpirun -host 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-0,compute-2-1 -np 48 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; These both work, print 64 hostnames from each node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_biocluster ~]# /home/apps/openmpi-1.6.3/bin/mpirun 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -host compute-2-0,compute-2-1 -np 128 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-0-2 ~]# 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/apps/openmpi-1.6.3/bin/mpirun -host 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute-2-0,compute-2-1 -np 128 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# ulimit -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pending signals                 (-i) 16410016
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; open files                      (-n) 4096
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-2-1 ~]# more /etc/ssh/ssh_config
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Host *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         CheckHostIP             no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         ForwardX11              yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         ForwardAgent            yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         StrictHostKeyChecking   no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         UsePrivilegedPort       no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;         Protocol                2,1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21017.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="21015.php">marco atzeri: "Re: [OMPI users] openmpi-1.9a1r27674 on Cygwin-1.7.17"</a>
<li><strong>In reply to:</strong> <a href="20980.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21017.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="21017.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
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
