<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 13:57:48 2007" -->
<!-- isoreceived="20070607175748" -->
<!-- sent="Thu, 07 Jun 2007 11:57:43 -0600" -->
<!-- isosent="20070607175743" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault in orted (home directory problem)" -->
<!-- id="C28DA337.2F7F%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E51BCEB9-E530-4809-AB33-79B99B43EE2E_at_cggveritas.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 13:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3401.php">Guillaume THOMAS-COLLIGNON: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Previous message:</strong> <a href="3399.php">Michael Edwards: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>In reply to:</strong> <a href="3398.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Segfault in orted (home directory problem)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3401.php">Guillaume THOMAS-COLLIGNON: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Reply:</strong> <a href="3401.php">Guillaume THOMAS-COLLIGNON: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried the --wdir option yet? It should let you set your working
<br>
directory to anywhere. I don't believe it will require you to have a home
<br>
directory on the backend nodes, though I can't sweathat ssh will be happy
<br>
if you don't.
<br>
<p>Just do &quot;mpirun -h&quot; for a full list of options - it will describe the exact
<br>
format of the wdir one plusthers you might find useful.
<br>
<p>Ralph
<br>
<p><p><p>On 6/7/07 11:12 AM, &quot;Guillaume THOMAS-COLLIGNON&lt;guillaume.thomas-collignon_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to switch to OpenI, and I ran into a problem : my home
</span><br>
<span class="quotelev1">&gt; directory must exist on all the nodes, or ted will crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a &quot;master&quot; machine where I initiate the mpirun command&gt; Then I have a bunch of slave machines, which will ao execute the
</span><br>
<span class="quotelev1">&gt; MPI job.
</span><br>
<span class="quotelev1">&gt; My user exists on all the machines, but the home directory is not
</span><br>
<span class="quotelev1">&gt; mounted on the slaves,o it's only visible on the master node. I can
</span><br>
<span class="quotelev1">&gt; log on a slave node, but don't have a home there. Of course the
</span><br>
<span class="quotelev1">&gt; binary I'm running exists on all the machines (not in my home !). And
</span><br>
<span class="quotelev1">&gt; the problem can be reproduced by running a shell command too, to make
</span><br>
<span class="quotelev1">&gt; things simpler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have thousands of slave nodes and we don't want to mount the
</span><br>
<span class="quotelev1">&gt; user's homedirs on all the slaves, so a fix would be really really nice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have 3 hosts, master, slave1, slave2. My home directory exists only
</span><br>
<span class="quotelev1">&gt; on master.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I log on master and run &quot;mpirun -host master,slave1uname -a&quot; I get
</span><br>
<span class="quotelev1">&gt; a segfault.
</span><br>
<span class="quotelev1">&gt; If I log on slave1 and run &quot;mpirun -host slave1,slave2 uname -a&quot;, it
</span><br>
<span class="quotelev1">&gt; runs fine. My home directory does not exist on either slave1 or slave2.
</span><br>
<span class="quotelev1">&gt; If I log on master and run &quot;mpirun -host master uname -a&quot; it runs
</span><br>
<span class="quotelev1">&gt; fine. I can run across several master nodes, it's fine too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it runs fine if my home directory exists everywhere, or if it does
</span><br>
<span class="quotelev1">&gt; not exist at all. If it exists only on some nodes and not others,
</span><br>
<span class="quotelev1">&gt; orted crashes.
</span><br>
<span class="quotelev1">&gt; I thought it could be related to my environment but I created a new
</span><br>
<span class="quotelev1">&gt; user with an empty home and it does the same thing. As soon as I
</span><br>
<span class="quotelev1">&gt; create the homedir on slave1 and slave2 it works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.2.2, here is the error message and the result of
</span><br>
<span class="quotelev1">&gt; ompi_info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short version (rnd04 is the master, r137n001 is a slave node).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-3.00$ /usr/local/openmpi-1.2.2/bin/mpirun -host rnd04,r137n001
</span><br>
<span class="quotelev1">&gt; uname -a
</span><br>
<span class="quotelev1">&gt; Linux rnd04 2.6.9-55.ELsmp #1 SMP Fri Apr 20 16:36:54 EDT 2007 x86_64
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] Failing at address: 0x1
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [ 0] [0xffffe600]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [ 1] /lib/tls/libc.so.6 [0xbf3bfc]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [ 2] /lib/tls/libc.so.6(_IO_vfprintf+0xcb) [0xbf3e3b]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [ 3] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (opal_show_help+0x263) [0xf7f78de3]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [ 4] /usr/local/openmpi-1.2.2/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; (orte_rmgr_base_check_context_cwd+0xff) [0xf7fea7ef]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [ 5] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_odls_default.so(orte_odls_default_launch_local_procs+0xe7f)
</span><br>
<span class="quotelev1">&gt; [0xf7ea041f]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [ 6] /usr/local/openmpi-1.2.2/bin/orted [0x804a1ea]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [ 7] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_gpr_proxy.so(orte_gpr_proxy_deliver_notify_msg+0x136) [0xf7ef65c6]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [ 8] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_gpr_proxy.so(orte_gpr_proxy_notify_recv+0x108) [0xf7ef4f68]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [ 9] /usr/local/openmpi-1.2.2/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; [0xf7fd9a18]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [10] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x24c) [0xf7f05fdc]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [11] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp.so [0xf7f07f61]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [12] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (opal_event_base_loop+0x388) [0xf7f67dd8]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [13] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (opal_event_loop+0x29) [0xf7f67fb9]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [14] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x37) [0xf7f053c7]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [15] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp.so(mca_oob_tcp_recv+0x374) [0xf7f09a04]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [16] /usr/local/openmpi-1.2.2/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; (mca_oob_recv_packed+0x4d) [0xf7fd980d]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [17] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_gpr_proxy.so(orte_gpr_proxy_exec_compound_cmd+0x137) [0xf7ef55e7]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [18] /usr/local/openmpi-1.2.2/bin/orted(main+0x99d)
</span><br>
<span class="quotelev1">&gt; [0x8049d0d]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [19] /lib/tls/libc.so.6(__libc_start_main+0xd3)
</span><br>
<span class="quotelev1">&gt; [0xbcee23]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] [20] /usr/local/openmpi-1.2.2/bin/orted [0x80492e1]
</span><br>
<span class="quotelev1">&gt; [r137n001:31533] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 31533 on node r137n001 exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I create /home/toto on r137n001, it works fine :
</span><br>
<span class="quotelev1">&gt; (as root on r137n001: &quot;mkdir /home/toto &amp;&amp; chown toto:users /home/toto&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-3.00$ /usr/local/openmpi-1.2.2/bin/mpirun -host rnd04,r137n001
</span><br>
<span class="quotelev1">&gt; uname -a
</span><br>
<span class="quotelev1">&gt; Linux rnd04 2.6.9-55.ELsmp #1 SMP Fri Apr 20 16:36:54 EDT 2007 x86_64
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; Linux r137n001 2.6.9-34.ELsmp #1 SMP Fri Feb 24 16:56:28 EST 2006
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to use ssh instead of rsh, it crashes too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anyone knows a way to run OpenMPI jobs in this configuration where
</span><br>
<span class="quotelev1">&gt; the home directory does not exist on all the nodes, it woud really
</span><br>
<span class="quotelev1">&gt; help !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or is there a way to fix orted so that it won't crash ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the crash with -d option :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-3.00$ /usr/local/openmpi-1.2.2/bin/mpirun -d -host
</span><br>
<span class="quotelev1">&gt; rnd04,r137n001  uname -a
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [rnd04:10736]   universe default-universe-10736
</span><br>
<span class="quotelev1">&gt; [rnd04:10736]   user toto
</span><br>
<span class="quotelev1">&gt; [rnd04:10736]   host rnd04
</span><br>
<span class="quotelev1">&gt; [rnd04:10736]   jobid 0
</span><br>
<span class="quotelev1">&gt; [rnd04:10736]   procid 0
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] procdir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
</span><br>
<span class="quotelev1">&gt; universe-10736/0/0
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] jobdir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
</span><br>
<span class="quotelev1">&gt; universe-10736/0
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] unidir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
</span><br>
<span class="quotelev1">&gt; universe-10736
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] top: openmpi-sessions-toto_at_rnd04_0
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] [0,0,0] contact_file /tmp/openmpi-sessions-toto_at_rnd04_0/
</span><br>
<span class="quotelev1">&gt; default-universe-10736/universe-setup.txt
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: local csh: 0, local sh: 1
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: remote csh: 0, remote sh: 1
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh:     /usr/bin/rsh &lt;template&gt; orted --debug --
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename
</span><br>
<span class="quotelev1">&gt; &lt;template&gt; --universe toto_at_rnd04:default-universe-10736 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://172.28.20.143:33029;tcp://10.3.254.105:33029&quot; --
</span><br>
<span class="quotelev1">&gt; gprreplica &quot;0.0.0;tcp://172.28.20.143:33029;tcp://10.3.254.105:33029&quot;
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: launching on node rnd04
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: rnd04 is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: reset PATH: /usr/local/openmpi-1.2.2/bin:/usr/
</span><br>
<span class="quotelev1">&gt; local/bin:/bin:/usr/bin:/usr/X11R6/bin:/usr/kerberos/bin
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: reset LD_LIBRARY_PATH: /usr/local/
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.2/lib:/usr/local/openmpi-1.2.2/lib:/usr/local/
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.2/lib64
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: changing to directory /home/toto
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: executing: (/usr/local/openmpi-1.2.2/bin/
</span><br>
<span class="quotelev1">&gt; orted) orted --debug --bootproxy 1 --name 0.0.1 --num_procs 3 --
</span><br>
<span class="quotelev1">&gt; vpid_start 0 --nodename rnd04 --universe toto_at_rnd04:default-
</span><br>
<span class="quotelev1">&gt; universe-10736 --nsreplica &quot;0.0.0;tcp://172.28.20.143:33029;tcp://
</span><br>
<span class="quotelev1">&gt; 10.3.254.105:33029&quot; --gprreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev1">&gt; 172.28.20.143:33029;tcp://10.3.254.105:33029&quot; --set-sid
</span><br>
<span class="quotelev1">&gt; [HOSTNAME=rnd04 SHELL=/bin/bash TERM=xterm-color HISTSIZE=1000
</span><br>
<span class="quotelev1">&gt; USER=toto LD_LIBRARY_PATH=/usr/local/openmpi-1.2.2/lib:/usr/local/
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.2/lib:/usr/local/openmpi-1.2.2/lib64
</span><br>
<span class="quotelev1">&gt; LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01:cd
</span><br>
<span class="quotelev1">&gt; =40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01;32
</span><br>
<span class="quotelev1">&gt; :*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01;31:
</span><br>
<span class="quotelev1">&gt; *.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.
</span><br>
<span class="quotelev1">&gt; Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cpio=
</span><br>
<span class="quotelev1">&gt; 01;31:*.jpg=01;35:*.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.png=
</span><br>
<span class="quotelev1">&gt; 01;35:*.tif=01;35: KDEDIR=/usr MAIL=/var/spool/mail/toto PATH=/usr/
</span><br>
<span class="quotelev1">&gt; local/openmpi-1.2.2/bin:/usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:/
</span><br>
<span class="quotelev1">&gt; usr/kerberos/bin INPUTRC=/etc/inputrc PWD=/home/toto LANG=en_US.UTF-8
</span><br>
<span class="quotelev1">&gt; SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass SHLVL=1 HOME=/home/
</span><br>
<span class="quotelev1">&gt; toto LOGNAME=toto LESSOPEN=|/usr/bin/lesspipe.sh %s
</span><br>
<span class="quotelev1">&gt; G_BROKEN_FILENAMES=1 _=/usr/local/openmpi-1.2.2/bin/mpirun
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_debug=1 OMPI_MCA_seed=0]
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: launching on node r137n001
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: r137n001 is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] pls:rsh: executing: (//usr/bin/rsh) /usr/bin/rsh
</span><br>
<span class="quotelev1">&gt; r137n001  PATH=/usr/local/openmpi-1.2.2/bin:$PATH ; export PATH ;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.2.2/lib:$LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH ; /usr/local/openmpi-1.2.2/bin/orted --debug --
</span><br>
<span class="quotelev1">&gt; bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --nodename
</span><br>
<span class="quotelev1">&gt; r137n001 --universe toto_at_rnd04:default-universe-10736 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://172.28.20.143:33029;tcp://10.3.254.105:33029&quot; --
</span><br>
<span class="quotelev1">&gt; gprreplica &quot;0.0.0;tcp://172.28.20.143:33029;tcp://
</span><br>
<span class="quotelev1">&gt; 10.3.254.105:33029&quot; [HOSTNAME=rnd04 SHELL=/bin/bash TERM=xterm-color
</span><br>
<span class="quotelev1">&gt; HISTSIZE=1000 USER=toto LD_LIBRARY_PATH=/usr/local/openmpi-1.2.2/lib:/
</span><br>
<span class="quotelev1">&gt; usr/local/openmpi-1.2.2/lib64
</span><br>
<span class="quotelev1">&gt; LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01:cd
</span><br>
<span class="quotelev1">&gt; =40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01;32
</span><br>
<span class="quotelev1">&gt; :*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01;31:
</span><br>
<span class="quotelev1">&gt; *.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31:*.
</span><br>
<span class="quotelev1">&gt; Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cpio=
</span><br>
<span class="quotelev1">&gt; 01;31:*.jpg=01;35:*.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.png=
</span><br>
<span class="quotelev1">&gt; 01;35:*.tif=01;35: KDEDIR=/usr MAIL=/var/spool/mail/toto PATH=/usr/
</span><br>
<span class="quotelev1">&gt; local/bin:/bin:/usr/bin:/usr/X11R6/bin:/usr/kerberos/bin INPUTRC=/etc/
</span><br>
<span class="quotelev1">&gt; inputrc PWD=/home/toto LANG=en_US.UTF-8 SSH_ASKPASS=/usr/libexec/
</span><br>
<span class="quotelev1">&gt; openssh/gnome-ssh-askpass SHLVL=1 HOME=/home/toto LOGNAME=toto
</span><br>
<span class="quotelev1">&gt; LESSOPEN=|/usr/bin/lesspipe.sh %s G_BROKEN_FILENAMES=1 _=/usr/local/
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.2/bin/mpirun OMPI_MCA_orte_debug=1 OMPI_MCA_seed=0]
</span><br>
<span class="quotelev1">&gt; [rnd04:10737] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [rnd04:10737]   universe default-universe-10736
</span><br>
<span class="quotelev1">&gt; [rnd04:10737]   user toto
</span><br>
<span class="quotelev1">&gt; [rnd04:10737]   host rnd04
</span><br>
<span class="quotelev1">&gt; [rnd04:10737]   jobid 0
</span><br>
<span class="quotelev1">&gt; [rnd04:10737]   procid 1
</span><br>
<span class="quotelev1">&gt; [rnd04:10737] procdir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
</span><br>
<span class="quotelev1">&gt; universe-10736/0/1
</span><br>
<span class="quotelev1">&gt; [rnd04:10737] jobdir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
</span><br>
<span class="quotelev1">&gt; universe-10736/0
</span><br>
<span class="quotelev1">&gt; [rnd04:10737] unidir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
</span><br>
<span class="quotelev1">&gt; universe-10736
</span><br>
<span class="quotelev1">&gt; [rnd04:10737] top: openmpi-sessions-toto_at_rnd04_0
</span><br>
<span class="quotelev1">&gt; [rnd04:10737] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [r137n001:31527] [0,0,2] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [r137n001:31527]        universe default-universe-10736
</span><br>
<span class="quotelev1">&gt; [r137n001:31527]        user toto
</span><br>
<span class="quotelev1">&gt; [r137n001:31527]        host r137n001
</span><br>
<span class="quotelev1">&gt; [r137n001:31527]        jobid 0
</span><br>
<span class="quotelev1">&gt; [r137n001:31527]        procid 2
</span><br>
<span class="quotelev1">&gt; [r137n001:31527] procdir: /tmp/openmpi-sessions-toto_at_r137n001_0/
</span><br>
<span class="quotelev1">&gt; default-universe-10736/0/2
</span><br>
<span class="quotelev1">&gt; [r137n001:31527] jobdir: /tmp/openmpi-sessions-toto_at_r137n001_0/
</span><br>
<span class="quotelev1">&gt; default-universe-10736/0
</span><br>
<span class="quotelev1">&gt; [r137n001:31527] unidir: /tmp/openmpi-sessions-toto_at_r137n001_0/
</span><br>
<span class="quotelev1">&gt; default-universe-10736
</span><br>
<span class="quotelev1">&gt; [r137n001:31527] top: openmpi-sessions-toto_at_r137n001_0
</span><br>
<span class="quotelev1">&gt; [r137n001:31527] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; Linux rnd04 2.6.9-55.ELsmp #1 SMP Fri Apr 20 16:36:54 EDT 2007 x86_64
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; [rnd04:10737] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] Failing at address: 0x1
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [ 0] [0xffffe600]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [ 1] /lib/tls/libc.so.6 [0xbf3bfc]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [ 2] /lib/tls/libc.so.6(_IO_vfprintf+0xcb) [0xbf3e3b]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [ 3] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (opal_show_help+0x263) [0xf7f78de3]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [ 4] /usr/local/openmpi-1.2.2/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; (orte_rmgr_base_check_context_cwd+0xff) [0xf7fea7ef]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [ 5] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_odls_default.so(orte_odls_default_launch_local_procs+0xe7f)
</span><br>
<span class="quotelev1">&gt; [0xf7ea041f]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [ 6] /usr/local/openmpi-1.2.2/bin/orted [0x804a1ea]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [ 7] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_gpr_proxy.so(orte_gpr_proxy_deliver_notify_msg+0x136) [0xf7ef65c6]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [ 8] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_gpr_proxy.so(orte_gpr_proxy_notify_recv+0x108) [0xf7ef4f68]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [ 9] /usr/local/openmpi-1.2.2/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; [0xf7fd9a18]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [10] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x24c) [0xf7f05fdc]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [11] /usr/local/openmpi-1.2.2/lib/openmpi/
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp.so [0xf7f07f61]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [12] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (opal_event_base_loop+0x388) [0xf7f67dd8]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [13] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (opal_event_loop+0x29) [0xf7f67fb9]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [14] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (opal_progress+0xbe) [0xf7f6123e]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [15] /usr/local/openmpi-1.2.2/bin/orted(main+0xd74)
</span><br>
<span class="quotelev1">&gt; [0x804a0e4]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [16] /lib/tls/libc.so.6(__libc_start_main+0xd3)
</span><br>
<span class="quotelev1">&gt; [0xbcee23]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] [17] /usr/local/openmpi-1.2.2/bin/orted [0x80492e1]
</span><br>
<span class="quotelev1">&gt; [r137n001:31528] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [r137n001:31527] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] spawn: in job_state_callback(jobid = 1, state = 0x80)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 31528 on node r137n001 exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; [rnd04:10737] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [r137n001:31527] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [rnd04:10737] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [rnd04:10736] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; -bash-3.00$ [r137n001:31527] sess_dir_finalize: proc session dir not
</span><br>
<span class="quotelev1">&gt; empty - leaving
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-3.00$ /usr/local/openmpi-1.2.2/bin/ompi_info --all
</span><br>
<span class="quotelev1">&gt;                  Open MPI: 1.2.2
</span><br>
<span class="quotelev1">&gt;     Open MPI SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;                  Open RTE: 1.2.2
</span><br>
<span class="quotelev1">&gt;     Open RTE SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;                      OPAL: 1.2.2
</span><br>
<span class="quotelev1">&gt;         OPAL SVN revision: r14613
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: execinfo (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;           MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;           MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2.2)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.2)
</span><br>
<span class="quotelev1">&gt;                    Prefix: /usr/local/openmpi-1.2.2
</span><br>
<span class="quotelev1">&gt;                    Bindir: /usr/local/openmpi-1.2.2/bin
</span><br>
<span class="quotelev1">&gt;                    Libdir: /usr/local/openmpi-1.2.2/lib
</span><br>
<span class="quotelev1">&gt;                    Incdir: /usr/local/openmpi-1.2.2/include
</span><br>
<span class="quotelev1">&gt;                 Pkglibdir: /usr/local/openmpi-1.2.2/lib/openmpi
</span><br>
<span class="quotelev1">&gt;                Sysconfdir: /usr/local/openmpi-1.2.2/etc
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;             Configured by: root
</span><br>
<span class="quotelev1">&gt;             Configured on: Tue Jun  5 14:32:20 CDT 2007
</span><br>
<span class="quotelev1">&gt;            Configure host: qpac171
</span><br>
<span class="quotelev1">&gt;                  Built by: root
</span><br>
<span class="quotelev1">&gt;                  Built on: Tue Jun  5 14:39:38 CDT 2007
</span><br>
<span class="quotelev1">&gt;                Built host: qpac171
</span><br>
<span class="quotelev1">&gt;                C bindings: yes
</span><br>
<span class="quotelev1">&gt;              C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;        Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;                C compiler: gcc
</span><br>
<span class="quotelev1">&gt;       C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;               C char size: 1
</span><br>
<span class="quotelev1">&gt;               C bool size: 1
</span><br>
<span class="quotelev1">&gt;              C short size: 2
</span><br>
<span class="quotelev1">&gt;                C int size: 4
</span><br>
<span class="quotelev1">&gt;               C long size: 4
</span><br>
<span class="quotelev1">&gt;              C float size: 4
</span><br>
<span class="quotelev1">&gt;             C double size: 8
</span><br>
<span class="quotelev1">&gt;            C pointer size: 4
</span><br>
<span class="quotelev1">&gt;              C char align: 1
</span><br>
<span class="quotelev1">&gt;              C bool align: 1
</span><br>
<span class="quotelev1">&gt;               C int align: 4
</span><br>
<span class="quotelev1">&gt;             C float align: 4
</span><br>
<span class="quotelev1">&gt;            C double align: 4
</span><br>
<span class="quotelev1">&gt;              C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;     C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;        Fortran77 compiler: g77
</span><br>
<span class="quotelev1">&gt;    Fortran77 compiler abs: /usr/bin/g77
</span><br>
<span class="quotelev1">&gt;        Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;    Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;         Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;         Fort logical size: 4
</span><br>
<span class="quotelev1">&gt; Fort logical value true: 1
</span><br>
<span class="quotelev1">&gt;        Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;        Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;        Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;        Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;           Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;           Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;          Fort have real16: no
</span><br>
<span class="quotelev1">&gt;        Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;       Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;       Fort have complex32: no
</span><br>
<span class="quotelev1">&gt;        Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;        Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;        Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;        Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;       Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;            Fort real size: 4
</span><br>
<span class="quotelev1">&gt;           Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;           Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;          Fort real16 size: -1
</span><br>
<span class="quotelev1">&gt;        Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt;            Fort cplx size: 4
</span><br>
<span class="quotelev1">&gt;        Fort dbl cplx size: 4
</span><br>
<span class="quotelev1">&gt;           Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;          Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;          Fort cplx32 size: -1
</span><br>
<span class="quotelev1">&gt;        Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;       Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;       Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt;      Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;           Fort real align: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 align: -1
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec align: 4
</span><br>
<span class="quotelev1">&gt;           Fort cplx align: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx align: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 align: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 align: -1
</span><br>
<span class="quotelev1">&gt;               C profiling: yes
</span><br>
<span class="quotelev1">&gt;             C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;            C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;            Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;              Build CFLAGS: -O3 -DNDEBUG -m32 -finline-functions -fno-
</span><br>
<span class="quotelev1">&gt; strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt;            Build CXXFLAGS: -O3 -DNDEBUG -m32 -finline-functions -pthread
</span><br>
<span class="quotelev1">&gt;              Build FFLAGS: -m32
</span><br>
<span class="quotelev1">&gt;             Build FCFLAGS: -m32
</span><br>
<span class="quotelev1">&gt;             Build LDFLAGS: -export-dynamic
</span><br>
<span class="quotelev1">&gt;                Build LIBS: -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt;      Wrapper extra CFLAGS: -pthread -m32
</span><br>
<span class="quotelev1">&gt;    Wrapper extra CXXFLAGS: -pthread -m32
</span><br>
<span class="quotelev1">&gt;      Wrapper extra FFLAGS: -pthread -m32
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FCFLAGS: -pthread -m32
</span><br>
<span class="quotelev1">&gt;     Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev1">&gt;        Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; -lm -ldl
</span><br>
<span class="quotelev1">&gt;    Internal debug support: no
</span><br>
<span class="quotelev1">&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;           libltdl support: yes
</span><br>
<span class="quotelev1">&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_param_files&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;/home/toto/.openmpi/mca-params.conf:/usr/local/openmpi-1.2.2/
</span><br>
<span class="quotelev1">&gt; etc/openmpi-mca-params.conf&quot;)
</span><br>
<span class="quotelev1">&gt;                            Path for MCA configuration files
</span><br>
<span class="quotelev1">&gt; containing default parameter values
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_component_path&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;/usr/local/openmpi-1.2.2/lib/openmpi:/home/toto/.openmpi/
</span><br>
<span class="quotelev1">&gt; components&quot;)
</span><br>
<span class="quotelev1">&gt;                            Path where to look for Open MPI and ORTE
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter &quot;mca_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter
</span><br>
<span class="quotelev1">&gt; &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to show errors for components that
</span><br>
<span class="quotelev1">&gt; failed to load or not
</span><br>
<span class="quotelev1">&gt;                   MCA mca: parameter
</span><br>
<span class="quotelev1">&gt; &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to attempt to disable opening
</span><br>
<span class="quotelev1">&gt; dynamic components or not
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_param_check&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether you want MPI API parameters
</span><br>
<span class="quotelev1">&gt; checked at run-time or not.  Possible values are 0 (no checking) and
</span><br>
<span class="quotelev1">&gt; 1 (perform checking at run-time)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Yield the processor when waiting for MPI
</span><br>
<span class="quotelev1">&gt; communication (for MPI processes, will default to 1 when
</span><br>
<span class="quotelev1">&gt; oversubscribing nodes)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                            How often to progress TCP communications
</span><br>
<span class="quotelev1">&gt; (0 = never, otherwise specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether MPI_FINALIZE shows all MPI handles
</span><br>
<span class="quotelev1">&gt; that were not freed or not
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to actually free MPI objects when
</span><br>
<span class="quotelev1">&gt; their handles are freed
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to show all MCA parameter value
</span><br>
<span class="quotelev1">&gt; during MPI_INIT or not (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter
</span><br>
<span class="quotelev1">&gt; &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            If mpi_show_mca_params is true, setting
</span><br>
<span class="quotelev1">&gt; this string to a valid filename tells Open MPI to dump all the MCA
</span><br>
<span class="quotelev1">&gt; parameter values into a file suitable for reading via the
</span><br>
<span class="quotelev1">&gt; mca_param_files parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, assume that this job is the
</span><br>
<span class="quotelev1">&gt; only (set of) process(es) running on each node and bind processes to
</span><br>
<span class="quotelev1">&gt; processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter
</span><br>
<span class="quotelev1">&gt; &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, save the string hostnames of
</span><br>
<span class="quotelev1">&gt; all MPI peer processes (mostly for error / debugging output
</span><br>
<span class="quotelev1">&gt; messages).  This can add quite a bit of memory usage to each MPI
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_abort_delay&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, print out an identifying
</span><br>
<span class="quotelev1">&gt; message when MPI_ABORT is invoked (hostname, PID of the process that
</span><br>
<span class="quotelev1">&gt; called MPI_ABORT) and delay for that many seconds before exiting (a
</span><br>
<span class="quotelev1">&gt; negative delay value means to never abort).  This allows
</span><br>
<span class="quotelev1">&gt;                            attaching of a debugger before quitting
</span><br>
<span class="quotelev1">&gt; the job.
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, print out a stack trace when
</span><br>
<span class="quotelev1">&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to force MPI processes to create
</span><br>
<span class="quotelev1">&gt; connections / warmup with *all* peers during MPI_INIT (vs. making
</span><br>
<span class="quotelev1">&gt; connections lazily -- upon the first MPI traffic between each process
</span><br>
<span class="quotelev1">&gt; peer pair)
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to force MPI processes to fully
</span><br>
<span class="quotelev1">&gt; wire-up the OOB system between MPI processes.
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to use the &quot;leave pinned&quot; protocol
</span><br>
<span class="quotelev1">&gt; or not.  Enabling this setting can help bandwidth performance when
</span><br>
<span class="quotelev1">&gt; repeatedly sending and receiving large messages with the same buffers
</span><br>
<span class="quotelev1">&gt; over RDMA-based networks.
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter
</span><br>
<span class="quotelev1">&gt; &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to use the &quot;leave pinned pipeline&quot;
</span><br>
<span class="quotelev1">&gt; protocol or not.
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Top-level ORTE debug switch
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_no_daemonize&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether to properly daemonize the ORTE
</span><br>
<span class="quotelev1">&gt; daemons or not
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter
</span><br>
<span class="quotelev1">&gt; &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a
</span><br>
<span class="quotelev1">&gt; @mpirun_args@ : fxp @mpirun@ -a @mpirun_args@&quot;)
</span><br>
<span class="quotelev1">&gt;                            Sequence of user-level debuggers to search
</span><br>
<span class="quotelev1">&gt; for in orterun
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_abort_timeout&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Time to wait [in seconds] before giving up
</span><br>
<span class="quotelev1">&gt; on aborting an ORTE operation
</span><br>
<span class="quotelev1">&gt;                  MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Request that critical timing loops be
</span><br>
<span class="quotelev1">&gt; measured
</span><br>
<span class="quotelev1">&gt;                  MCA opal: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;6,7,8,11&quot;)
</span><br>
<span class="quotelev1">&gt;                            If a signal is received, display the stack
</span><br>
<span class="quotelev1">&gt; trace frame
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: parameter &quot;backtrace&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for
</span><br>
<span class="quotelev1">&gt; the backtrace framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: parameter
</span><br>
<span class="quotelev1">&gt; &quot;backtrace_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the backtrace
</span><br>
<span class="quotelev1">&gt; framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: parameter
</span><br>
<span class="quotelev1">&gt; &quot;backtrace_execinfo_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for
</span><br>
<span class="quotelev1">&gt; the memory framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA memory: parameter &quot;memory_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the memory framework
</span><br>
<span class="quotelev1">&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA memory: parameter
</span><br>
<span class="quotelev1">&gt; &quot;memory_ptmalloc2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for
</span><br>
<span class="quotelev1">&gt; the paffinity framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: parameter
</span><br>
<span class="quotelev1">&gt; &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the linux paffinity component
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: information
</span><br>
<span class="quotelev1">&gt; &quot;paffinity_linux_have_cpu_set_t&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether this component was compiled on a
</span><br>
<span class="quotelev1">&gt; system with the type cpu_set_t or not (1 = yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: information
</span><br>
<span class="quotelev1">&gt; &quot;paffinity_linux_CPU_ZERO_ok&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether this component was compiled on a
</span><br>
<span class="quotelev1">&gt; system where CPU_ZERO() is functional or broken (1 = functional, 0 =
</span><br>
<span class="quotelev1">&gt; broken/not available)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: information
</span><br>
<span class="quotelev1">&gt; &quot;paffinity_linux_sched_setaffinity_num_params&quot; (value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                            The number of parameters that
</span><br>
<span class="quotelev1">&gt; sched_set_affinity() takes on the machine where this component was
</span><br>
<span class="quotelev1">&gt; compiled
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for
</span><br>
<span class="quotelev1">&gt; the maffinity framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: parameter
</span><br>
<span class="quotelev1">&gt; &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the first_use maffinity component
</span><br>
<span class="quotelev1">&gt;                 MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for
</span><br>
<span class="quotelev1">&gt; the timer framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: parameter &quot;timer_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the timer framework (0
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: parameter &quot;timer_linux_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for
</span><br>
<span class="quotelev1">&gt; the allocator framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter
</span><br>
<span class="quotelev1">&gt; &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the allocator
</span><br>
<span class="quotelev1">&gt; framework (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter
</span><br>
<span class="quotelev1">&gt; &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter
</span><br>
<span class="quotelev1">&gt; &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: parameter
</span><br>
<span class="quotelev1">&gt; &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for
</span><br>
<span class="quotelev1">&gt; the coll framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the coll framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_basic_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the basic coll component
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_basic_crossover&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Minimum number of processes in a  
</span><br>
<span class="quotelev1">&gt; communicator before using the logarithmic algorithms
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_self_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the sm coll component
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_control_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                            Length of the control data -- should  
</span><br>
<span class="quotelev1">&gt; usually be either the length of a cache line on most SMPs, or the  
</span><br>
<span class="quotelev1">&gt; size of a page on machines that support direct memory affinity page  
</span><br>
<span class="quotelev1">&gt; placement (in bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_bootstrap_filename&quot; (current value: &quot;shared_mem_sm_bootstrap&quot;)
</span><br>
<span class="quotelev1">&gt;                            Filename (in the Open MPI session  
</span><br>
<span class="quotelev1">&gt; directory) of the coll sm component bootstrap rendezvous mmap file
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_bootstrap_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of segments in the bootstrap file
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;                            Fragment size (in bytes) used for passing  
</span><br>
<span class="quotelev1">&gt; data through shared memory (will be rounded up to the nearest  
</span><br>
<span class="quotelev1">&gt; control_size size)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_mpool&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                            Name of the mpool component to use
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_comm_in_use_flags&quot; (current value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of &quot;in use&quot; flags, used to mark a  
</span><br>
<span class="quotelev1">&gt; message passing area segment as currently being used or not (must be  
</span><br>
<span class="quotelev2">&gt;&gt; = 2 and &lt;= comm_num_segments)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_comm_num_segments&quot; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of segments in each communicator's  
</span><br>
<span class="quotelev1">&gt; shared memory message passing area (must be &gt;= 2, and must be a  
</span><br>
<span class="quotelev1">&gt; multiple of comm_in_use_flags)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Degree of the tree for tree-based  
</span><br>
<span class="quotelev1">&gt; operations (must be =&gt; 1 and &lt;= min(control_size, 255))
</span><br>
<span class="quotelev1">&gt;                  MCA coll: information  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;160&quot;)
</span><br>
<span class="quotelev1">&gt;                            Amount of shared memory used in the shared  
</span><br>
<span class="quotelev1">&gt; memory bootstrap area (in bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_info_num_procs&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of processes to use for the  
</span><br>
<span class="quotelev1">&gt; calculation of the shared_mem_size MCA information parameter (must be  
</span><br>
<span class="quotelev1">&gt; =&gt; 2)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: information  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sm_shared_mem_used_data&quot; (value: &quot;548864&quot;)
</span><br>
<span class="quotelev1">&gt;                            Amount of shared memory used in the shared  
</span><br>
<span class="quotelev1">&gt; memory data area for info_num_procs processes (in bytes)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter &quot;coll_tuned_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the tuned coll component
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                            Size of communicator were we stop pre- 
</span><br>
<span class="quotelev1">&gt; allocating memory for the fixed internal buffer used for message  
</span><br>
<span class="quotelev1">&gt; requests etc that is hung off the communicator data segment. I.e. if  
</span><br>
<span class="quotelev1">&gt; you have a 100'000 nodes you might not want to pre-allocate
</span><br>
<span class="quotelev1">&gt;                            200'000 request handle slots per  
</span><br>
<span class="quotelev1">&gt; communicator instance!
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_init_tree_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Inital fanout used in the tree topologies  
</span><br>
<span class="quotelev1">&gt; for each communicator. This is only an initial guess, if a tuned  
</span><br>
<span class="quotelev1">&gt; collective needs a different fanout for an operation, it build it  
</span><br>
<span class="quotelev1">&gt; dynamically. This parameter is only for the first guess and might
</span><br>
<span class="quotelev1">&gt;                            save a little time
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_init_chain_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Inital fanout used in the chain (fanout  
</span><br>
<span class="quotelev1">&gt; followed by pipeline) topologies for each communicator. This is only  
</span><br>
<span class="quotelev1">&gt; an initial guess, if a tuned collective needs a different fanout for  
</span><br>
<span class="quotelev1">&gt; an operation, it build it dynamically. This parameter is
</span><br>
<span class="quotelev1">&gt;                            only for the first guess and might save a  
</span><br>
<span class="quotelev1">&gt; little time
</span><br>
<span class="quotelev1">&gt;                  MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_use_dynamic_rules&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Switch used to decide if we use static  
</span><br>
<span class="quotelev1">&gt; (compiled/if statements) or dynamic (built at runtime) decision  
</span><br>
<span class="quotelev1">&gt; function rules
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                            Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                            Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                            Increment size of the MPI-2 IO request  
</span><br>
<span class="quotelev1">&gt; freelist
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the io framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the io framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter &quot;io_romio_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                    MCA io: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;io_romio_enable_parallel_optimizations&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable set of Open MPI-added options to  
</span><br>
<span class="quotelev1">&gt; improve collective file i/o performance
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the mpool framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the mpool framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_rdma_rcache_name&quot; (current value: &quot;vma&quot;)
</span><br>
<span class="quotelev1">&gt;                            The name of the registration cache the  
</span><br>
<span class="quotelev1">&gt; mpool should use
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_rdma_rcache_size_limit&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            the maximum size of registration cache in  
</span><br>
<span class="quotelev1">&gt; bytes. 0 is unlimited (default 0)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_rdma_print_stats&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            print pool usage statistics at the end of  
</span><br>
<span class="quotelev1">&gt; the run
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;bucket&quot;)
</span><br>
<span class="quotelev1">&gt;                            Name of allocator component to use with sm  
</span><br>
<span class="quotelev1">&gt; mpool
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;536870912&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum size of the sm mpool shared memory  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;134217728&quot;)
</span><br>
<span class="quotelev1">&gt;                            Minimum size of the sm mpool shared memory  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_sm_per_peer_size&quot; (current value: &quot;33554432&quot;)
</span><br>
<span class="quotelev1">&gt;                            Size (in bytes) to allocate per local peer  
</span><br>
<span class="quotelev1">&gt; in the sm mpool shared memory file, bounded by min_size and max_size
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_sm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_base_use_mem_hooks&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            use memory hooks for deregistering freed  
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            (deprecated, use mpool_base_use_mem_hooks)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;mpool_base_disable_sbrk&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            use mallopt to override calling sbrk  
</span><br>
<span class="quotelev1">&gt; (doesn't return memory to OS!)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: parameter &quot;mpool_disable_sbrk&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            (deprecated, use mca_mpool_base_disable_sbrk)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the pml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the pml framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                            Initial size of request free lists
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum size of request free lists
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of elements to add when growing  
</span><br>
<span class="quotelev1">&gt; request free lists
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_cm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                            CM PML selection priority
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;20&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the bml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter &quot;bml_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the bml framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;bml_r2_show_unreach_errors&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Show error message when procs are unreachable
</span><br>
<span class="quotelev1">&gt;                   MCA bml: parameter &quot;bml_r2_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the rcache framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the rcache framework  
</span><br>
<span class="quotelev1">&gt; (0 = no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: parameter &quot;rcache_vma_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If btl_base_debug is 1 standard debug is  
</span><br>
<span class="quotelev1">&gt; output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the btl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the btl framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of fragments by default
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum number of fragments
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                            Increment by this number of fragments
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                            Eager size fragmeng (before the rendez- 
</span><br>
<span class="quotelev1">&gt; vous ptotocol)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_min_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                            Minimum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_min_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_exclusivity&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                            Device exclusivity
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_flags&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Active behavior flags
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_self_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;65535&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_latency&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_max_procs&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_mpool&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_sm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_if_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;122&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_tcp_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter &quot;btl_base_exclude&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            This parameter is used to turn on warning  
</span><br>
<span class="quotelev1">&gt; messages when certain NICs are not used
</span><br>
<span class="quotelev1">&gt;                   MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the mtl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA mtl: parameter &quot;mtl_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the mtl framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the topo framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: parameter &quot;topo_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the topo framework (0  
</span><br>
<span class="quotelev1">&gt; = no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the osc framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the osc framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable optimizations available only if  
</span><br>
<span class="quotelev1">&gt; MPI_LOCK is not used.
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;16384&quot;)
</span><br>
<span class="quotelev1">&gt;                            Max size of eagerly sent data
</span><br>
<span class="quotelev1">&gt;                   MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the errmgr framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_orted_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: parameter &quot;errmgr_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the gpr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_null_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_replica_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: parameter &quot;gpr_replica_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_base_window_size&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_base_service&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0.0.0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the iof framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_proxy_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_svc_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: parameter &quot;iof_svc_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the ns framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_proxy_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_replica_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_replica_isolate&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_replica_maxsize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_replica_blocksize&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: parameter &quot;ns_replica_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the oob framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the oob framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;60&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_include&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_exclude&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable (1) /Disable (0)  random sleep for  
</span><br>
<span class="quotelev1">&gt; connection wireup
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;event&quot;)
</span><br>
<span class="quotelev1">&gt;                            Mode for HNP to accept incoming  
</span><br>
<span class="quotelev1">&gt; connections: event, listen_thread
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            High water mark for queued accepted socket  
</span><br>
<span class="quotelev1">&gt; list size
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;oob_tcp_listen_thread_max_time&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Maximum amount of time (in milliseconds)  
</span><br>
<span class="quotelev1">&gt; to wait between processing accepted socket list
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;oob_tcp_accept_spin_count&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Number of times to let accept return  
</span><br>
<span class="quotelev1">&gt; EWOULDBLOCK before updating accepted socket list
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ras_dash_host_priority&quot; (current value: &quot;5&quot;)
</span><br>
<span class="quotelev1">&gt;                            Selection priority for the dash_host RAS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_gridengine_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable debugging output for the gridengine  
</span><br>
<span class="quotelev1">&gt; ras component
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ras_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ras_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable verbose output for the gridengine  
</span><br>
<span class="quotelev1">&gt; ras component
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ras_gridengine_show_jobid&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Show the JOB_ID of the Grid Engine job
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;ras_localhost_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Selection priority for the localhost RAS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                   MCA ras: parameter &quot;ras_slurm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the slurm ras component
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_hostfile_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Toggle debug output for hostfile RDS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_hostfile_path&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;/usr/local/openmpi-1.2.2/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev1">&gt;                            ORTE Host filename
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_hostfile_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_resfile_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Toggle debug output for resfile RDS component
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_resfile_name&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            ORTE Resource filename
</span><br>
<span class="quotelev1">&gt;                   MCA rds: parameter &quot;rds_resfile_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the rmaps framework
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_base_schedule_policy&quot; (current value: &quot;unspec&quot;)
</span><br>
<span class="quotelev1">&gt;                            Scheduling Policy for RMAPS. [slot | node]
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_base_no_schedule_local&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If false, allow scheduling MPI  
</span><br>
<span class="quotelev1">&gt; applications on the same node as mpirun (default).  If true, do not  
</span><br>
<span class="quotelev1">&gt; schedule any MPI applications on the same node as mpirun
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_base_no_oversubscribe&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If true, then do not allow  
</span><br>
<span class="quotelev1">&gt; oversubscription of nodes - mpirun will return an error if there  
</span><br>
<span class="quotelev1">&gt; aren't enough nodes to launch all processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the rmaps framework (&lt;none&gt; means &quot;use all components that can be  
</span><br>
<span class="quotelev1">&gt; found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_round_robin_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Toggle debug output for Round Robin RMAPS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;rmaps_round_robin_priority&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Selection priority for Round Robin RMAPS  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the rmgr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the rml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: parameter &quot;rml_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the rml framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: parameter &quot;rml_oob_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_base_reuse_daemons&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, reuse daemons to launch  
</span><br>
<span class="quotelev1">&gt; dynamically spawned processes.  If zero, do not reuse daemons (default)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the pls framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the pls framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_gridengine_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable debugging of gridengine pls component
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_gridengine_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable verbose output of the gridengine  
</span><br>
<span class="quotelev1">&gt; qrsh -inherit command
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_gridengine_priority&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the gridengine pls component
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_gridengine_orted&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                            The command name that the gridengine pls  
</span><br>
<span class="quotelev1">&gt; component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_proxy_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_debug&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Whether or not to enable debugging output  
</span><br>
<span class="quotelev1">&gt; for the rsh pls component (0 or 1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_rsh_num_concurrent&quot; (current value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                            How many pls_rsh_agent instances to invoke  
</span><br>
<span class="quotelev1">&gt; concurrently (must be &gt; 0)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Force the launcher to always use rsh, even  
</span><br>
<span class="quotelev1">&gt; for local daemons
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_orted&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                            The command name that the rsh pls  
</span><br>
<span class="quotelev1">&gt; component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                            Priority of the rsh pls component
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_delay&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            Delay (in seconds) between invocations of  
</span><br>
<span class="quotelev1">&gt; the remote agent, but only used when the &quot;debug&quot; MCA parameter is  
</span><br>
<span class="quotelev1">&gt; true, or the top-level MCA debugging is enabled (otherwise this value  
</span><br>
<span class="quotelev1">&gt; is ignored)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_reap&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            If set to 1, wait for all the processes to  
</span><br>
<span class="quotelev1">&gt; complete before exiting.  Otherwise, quit immediately -- without  
</span><br>
<span class="quotelev1">&gt; waiting for confirmation that all other processes in the job have  
</span><br>
<span class="quotelev1">&gt; completed.
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;pls_rsh_assume_same_shell&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                            If set to 1, assume that the shell on the  
</span><br>
<span class="quotelev1">&gt; remote node is the same as the shell on the local node.  Otherwise,  
</span><br>
<span class="quotelev1">&gt; probe for what the remote shell.
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_rsh_agent&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                            The command used to launch executables on  
</span><br>
<span class="quotelev1">&gt; remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_slurm_debug&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Enable debugging of slurm pls
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_slurm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                            Default selection priority
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_slurm_orted&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                            Command to use to start proxy orted
</span><br>
<span class="quotelev1">&gt;                   MCA pls: parameter &quot;pls_slurm_args&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                            Default selection set of components for  
</span><br>
<span class="quotelev1">&gt; the sds framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Verbosity level for the sds framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds_env_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds_pipe_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds_seed_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;sds_singleton_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: parameter &quot;sds_slurm_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; -bash-3.00$
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
<li><strong>Next message:</strong> <a href="3401.php">Guillaume THOMAS-COLLIGNON: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Previous message:</strong> <a href="3399.php">Michael Edwards: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>In reply to:</strong> <a href="3398.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Segfault in orted (home directory problem)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3401.php">Guillaume THOMAS-COLLIGNON: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Reply:</strong> <a href="3401.php">Guillaume THOMAS-COLLIGNON: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
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
