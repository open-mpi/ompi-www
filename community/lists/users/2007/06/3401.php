<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 15:22:19 2007" -->
<!-- isoreceived="20070607192219" -->
<!-- sent="Thu, 7 Jun 2007 14:22:06 -0500" -->
<!-- isosent="20070607192206" -->
<!-- name="Guillaume THOMAS-COLLIGNON" -->
<!-- email="guillaume.thomas-collignon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault in orted (home directory problem)" -->
<!-- id="1E635EC3-914F-4535-8105-A62DE25F5FAE_at_cggveritas.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C28DA337.2F7F%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Guillaume THOMAS-COLLIGNON (<em>guillaume.thomas-collignon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 15:22:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3402.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Previous message:</strong> <a href="3400.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>In reply to:</strong> <a href="3400.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3402.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Reply:</strong> <a href="3402.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're right, the --wdir option works fine !
<br>
Thanks !
<br>
<p>I just tried an older version we had compiled (1.2b3), and the error  
<br>
was more explicit than the seg fault we get with 1.2.2 :
<br>
<p>Could not chdir to home directory /rdu/thomasco: No such file or  
<br>
directory
<br>
------------------------------------------------------------------------ 
<br>
<pre>
--
Failed to change to the working directory:
&lt;...&gt;
	-Guillaume
On Jun 7, 2007, at 12:57 PM, Ralph Castain wrote:
&gt; Have you tried the --wdir option yet? It should let you set your  
&gt; working
&gt; directory to anywhere. I don't believe it will require you to have  
&gt; a home
&gt; directory on the backend nodes, though I can't sweathat ssh will be  
&gt; happy
&gt; if you don't.
&gt;
&gt; Just do &quot;mpirun -h&quot; for a full list of options - it will describe  
&gt; the exact
&gt; format of the wdir one plusthers you might find useful.
&gt;
&gt; Ralph
&gt;
&gt;
&gt;
&gt; On 6/7/07 11:12 AM, &quot;Guillaume THOMAS-COLLIGNON&lt;guillaume.thomas- 
&gt; collignon_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; I am trying to switch to OpenI, and I ran into a problem : my home
&gt;&gt; directory must exist on all the nodes, or ted will crash.
&gt;&gt;
&gt;&gt; I have a &quot;master&quot; machine where I initiate the mpirun command&gt;  
&gt;&gt; Then I have a bunch of slave machines, which will ao execute the
&gt;&gt; MPI job.
&gt;&gt; My user exists on all the machines, but the home directory is not
&gt;&gt; mounted on the slaves,o it's only visible on the master node. I can
&gt;&gt; log on a slave node, but don't have a home there. Of course the
&gt;&gt; binary I'm running exists on all the machines (not in my home !). And
&gt;&gt; the problem can be reproduced by running a shell command too, to make
&gt;&gt; things simpler.
&gt;&gt;
&gt;&gt; We have thousands of slave nodes and we don't want to mount the
&gt;&gt; user's homedirs on all the slaves, so a fix would be really really  
&gt;&gt; nice.
&gt;&gt;
&gt;&gt; Example :
&gt;&gt;
&gt;&gt; I have 3 hosts, master, slave1, slave2. My home directory exists only
&gt;&gt; on master.
&gt;&gt;
&gt;&gt; If I log on master and run &quot;mpirun -host master,slave1uname -a&quot; I get
&gt;&gt; a segfault.
&gt;&gt; If I log on slave1 and run &quot;mpirun -host slave1,slave2 uname -a&quot;, it
&gt;&gt; runs fine. My home directory does not exist on either slave1 or  
&gt;&gt; slave2.
&gt;&gt; If I log on master and run &quot;mpirun -host master uname -a&quot; it runs
&gt;&gt; fine. I can run across several master nodes, it's fine too.
&gt;&gt;
&gt;&gt; So it runs fine if my home directory exists everywhere, or if it does
&gt;&gt; not exist at all. If it exists only on some nodes and not others,
&gt;&gt; orted crashes.
&gt;&gt; I thought it could be related to my environment but I created a new
&gt;&gt; user with an empty home and it does the same thing. As soon as I
&gt;&gt; create the homedir on slave1 and slave2 it works fine.
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; I'm using OpenMPI 1.2.2, here is the error message and the result of
&gt;&gt; ompi_info.
&gt;&gt;
&gt;&gt; Short version (rnd04 is the master, r137n001 is a slave node).
&gt;&gt;
&gt;&gt; -bash-3.00$ /usr/local/openmpi-1.2.2/bin/mpirun -host rnd04,r137n001
&gt;&gt; uname -a
&gt;&gt; Linux rnd04 2.6.9-55.ELsmp #1 SMP Fri Apr 20 16:36:54 EDT 2007 x86_64
&gt;&gt; x86_64 x86_64 GNU/Linux
&gt;&gt; [r137n001:31533] *** Process received signal ***
&gt;&gt; [r137n001:31533] Signal: Segmentation fault (11)
&gt;&gt; [r137n001:31533] Signal code: Address not mapped (1)
&gt;&gt; [r137n001:31533] Failing at address: 0x1
&gt;&gt; [r137n001:31533] [ 0] [0xffffe600]
&gt;&gt; [r137n001:31533] [ 1] /lib/tls/libc.so.6 [0xbf3bfc]
&gt;&gt; [r137n001:31533] [ 2] /lib/tls/libc.so.6(_IO_vfprintf+0xcb)  
&gt;&gt; [0xbf3e3b]
&gt;&gt; [r137n001:31533] [ 3] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
&gt;&gt; (opal_show_help+0x263) [0xf7f78de3]
&gt;&gt; [r137n001:31533] [ 4] /usr/local/openmpi-1.2.2/lib/libopen-rte.so.0
&gt;&gt; (orte_rmgr_base_check_context_cwd+0xff) [0xf7fea7ef]
&gt;&gt; [r137n001:31533] [ 5] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_odls_default.so(orte_odls_default_launch_local_procs+0xe7f)
&gt;&gt; [0xf7ea041f]
&gt;&gt; [r137n001:31533] [ 6] /usr/local/openmpi-1.2.2/bin/orted [0x804a1ea]
&gt;&gt; [r137n001:31533] [ 7] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_gpr_proxy.so(orte_gpr_proxy_deliver_notify_msg+0x136)  
&gt;&gt; [0xf7ef65c6]
&gt;&gt; [r137n001:31533] [ 8] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_gpr_proxy.so(orte_gpr_proxy_notify_recv+0x108) [0xf7ef4f68]
&gt;&gt; [r137n001:31533] [ 9] /usr/local/openmpi-1.2.2/lib/libopen-rte.so.0
&gt;&gt; [0xf7fd9a18]
&gt;&gt; [r137n001:31533] [10] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x24c) [0xf7f05fdc]
&gt;&gt; [r137n001:31533] [11] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_oob_tcp.so [0xf7f07f61]
&gt;&gt; [r137n001:31533] [12] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
&gt;&gt; (opal_event_base_loop+0x388) [0xf7f67dd8]
&gt;&gt; [r137n001:31533] [13] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
&gt;&gt; (opal_event_loop+0x29) [0xf7f67fb9]
&gt;&gt; [r137n001:31533] [14] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_oob_tcp.so(mca_oob_tcp_msg_wait+0x37) [0xf7f053c7]
&gt;&gt; [r137n001:31533] [15] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_oob_tcp.so(mca_oob_tcp_recv+0x374) [0xf7f09a04]
&gt;&gt; [r137n001:31533] [16] /usr/local/openmpi-1.2.2/lib/libopen-rte.so.0
&gt;&gt; (mca_oob_recv_packed+0x4d) [0xf7fd980d]
&gt;&gt; [r137n001:31533] [17] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_gpr_proxy.so(orte_gpr_proxy_exec_compound_cmd+0x137) [0xf7ef55e7]
&gt;&gt; [r137n001:31533] [18] /usr/local/openmpi-1.2.2/bin/orted(main+0x99d)
&gt;&gt; [0x8049d0d]
&gt;&gt; [r137n001:31533] [19] /lib/tls/libc.so.6(__libc_start_main+0xd3)
&gt;&gt; [0xbcee23]
&gt;&gt; [r137n001:31533] [20] /usr/local/openmpi-1.2.2/bin/orted [0x80492e1]
&gt;&gt; [r137n001:31533] *** End of error message ***
&gt;&gt; mpirun noticed that job rank 1 with PID 31533 on node r137n001 exited
&gt;&gt; on signal 11 (Segmentation fault).
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; If I create /home/toto on r137n001, it works fine :
&gt;&gt; (as root on r137n001: &quot;mkdir /home/toto &amp;&amp; chown toto:users /home/ 
&gt;&gt; toto&quot;)
&gt;&gt;
&gt;&gt; -bash-3.00$ /usr/local/openmpi-1.2.2/bin/mpirun -host rnd04,r137n001
&gt;&gt; uname -a
&gt;&gt; Linux rnd04 2.6.9-55.ELsmp #1 SMP Fri Apr 20 16:36:54 EDT 2007 x86_64
&gt;&gt; x86_64 x86_64 GNU/Linux
&gt;&gt; Linux r137n001 2.6.9-34.ELsmp #1 SMP Fri Feb 24 16:56:28 EST 2006
&gt;&gt; x86_64 x86_64 x86_64 GNU/Linux
&gt;&gt;
&gt;&gt;
&gt;&gt; I tried to use ssh instead of rsh, it crashes too.
&gt;&gt;
&gt;&gt; If anyone knows a way to run OpenMPI jobs in this configuration where
&gt;&gt; the home directory does not exist on all the nodes, it woud really
&gt;&gt; help !
&gt;&gt;
&gt;&gt; Or is there a way to fix orted so that it won't crash ?
&gt;&gt;
&gt;&gt;
&gt;&gt; Here is the crash with -d option :
&gt;&gt;
&gt;&gt; -bash-3.00$ /usr/local/openmpi-1.2.2/bin/mpirun -d -host
&gt;&gt; rnd04,r137n001  uname -a
&gt;&gt; [rnd04:10736] connect_uni: connection not allowed
&gt;&gt; [rnd04:10736] [0,0,0] setting up session dir with
&gt;&gt; [rnd04:10736]   universe default-universe-10736
&gt;&gt; [rnd04:10736]   user toto
&gt;&gt; [rnd04:10736]   host rnd04
&gt;&gt; [rnd04:10736]   jobid 0
&gt;&gt; [rnd04:10736]   procid 0
&gt;&gt; [rnd04:10736] procdir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
&gt;&gt; universe-10736/0/0
&gt;&gt; [rnd04:10736] jobdir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
&gt;&gt; universe-10736/0
&gt;&gt; [rnd04:10736] unidir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
&gt;&gt; universe-10736
&gt;&gt; [rnd04:10736] top: openmpi-sessions-toto_at_rnd04_0
&gt;&gt; [rnd04:10736] tmp: /tmp
&gt;&gt; [rnd04:10736] [0,0,0] contact_file /tmp/openmpi-sessions- 
&gt;&gt; toto_at_rnd04_0/
&gt;&gt; default-universe-10736/universe-setup.txt
&gt;&gt; [rnd04:10736] [0,0,0] wrote setup file
&gt;&gt; [rnd04:10736] pls:rsh: local csh: 0, local sh: 1
&gt;&gt; [rnd04:10736] pls:rsh: assuming same remote shell as local shell
&gt;&gt; [rnd04:10736] pls:rsh: remote csh: 0, remote sh: 1
&gt;&gt; [rnd04:10736] pls:rsh: final template argv:
&gt;&gt; [rnd04:10736] pls:rsh:     /usr/bin/rsh &lt;template&gt; orted --debug --
&gt;&gt; bootproxy 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename
&gt;&gt; &lt;template&gt; --universe toto_at_rnd04:default-universe-10736 --nsreplica
&gt;&gt; &quot;0.0.0;tcp://172.28.20.143:33029;tcp://10.3.254.105:33029&quot; --
&gt;&gt; gprreplica &quot;0.0.0;tcp://172.28.20.143:33029;tcp://10.3.254.105:33029&quot;
&gt;&gt; [rnd04:10736] pls:rsh: launching on node rnd04
&gt;&gt; [rnd04:10736] pls:rsh: rnd04 is a LOCAL node
&gt;&gt; [rnd04:10736] pls:rsh: reset PATH: /usr/local/openmpi-1.2.2/bin:/usr/
&gt;&gt; local/bin:/bin:/usr/bin:/usr/X11R6/bin:/usr/kerberos/bin
&gt;&gt; [rnd04:10736] pls:rsh: reset LD_LIBRARY_PATH: /usr/local/
&gt;&gt; openmpi-1.2.2/lib:/usr/local/openmpi-1.2.2/lib:/usr/local/
&gt;&gt; openmpi-1.2.2/lib64
&gt;&gt; [rnd04:10736] pls:rsh: changing to directory /home/toto
&gt;&gt; [rnd04:10736] pls:rsh: executing: (/usr/local/openmpi-1.2.2/bin/
&gt;&gt; orted) orted --debug --bootproxy 1 --name 0.0.1 --num_procs 3 --
&gt;&gt; vpid_start 0 --nodename rnd04 --universe toto_at_rnd04:default-
&gt;&gt; universe-10736 --nsreplica &quot;0.0.0;tcp://172.28.20.143:33029;tcp://
&gt;&gt; 10.3.254.105:33029&quot; --gprreplica &quot;0.0.0;tcp://
&gt;&gt; 172.28.20.143:33029;tcp://10.3.254.105:33029&quot; --set-sid
&gt;&gt; [HOSTNAME=rnd04 SHELL=/bin/bash TERM=xterm-color HISTSIZE=1000
&gt;&gt; USER=toto LD_LIBRARY_PATH=/usr/local/openmpi-1.2.2/lib:/usr/local/
&gt;&gt; openmpi-1.2.2/lib:/usr/local/openmpi-1.2.2/lib64
&gt;&gt; LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01 
&gt;&gt; :cd
&gt;&gt; =40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01 
&gt;&gt; ;32
&gt;&gt; :*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01; 
&gt;&gt; 31:
&gt;&gt; *.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31 
&gt;&gt; :*.
&gt;&gt; Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cp 
&gt;&gt; io=
&gt;&gt; 01;31:*.jpg=01;35:*.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.p 
&gt;&gt; ng=
&gt;&gt; 01;35:*.tif=01;35: KDEDIR=/usr MAIL=/var/spool/mail/toto PATH=/usr/
&gt;&gt; local/openmpi-1.2.2/bin:/usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:/
&gt;&gt; usr/kerberos/bin INPUTRC=/etc/inputrc PWD=/home/toto LANG=en_US.UTF-8
&gt;&gt; SSH_ASKPASS=/usr/libexec/openssh/gnome-ssh-askpass SHLVL=1 HOME=/ 
&gt;&gt; home/
&gt;&gt; toto LOGNAME=toto LESSOPEN=|/usr/bin/lesspipe.sh %s
&gt;&gt; G_BROKEN_FILENAMES=1 _=/usr/local/openmpi-1.2.2/bin/mpirun
&gt;&gt; OMPI_MCA_orte_debug=1 OMPI_MCA_seed=0]
&gt;&gt; [rnd04:10736] pls:rsh: launching on node r137n001
&gt;&gt; [rnd04:10736] pls:rsh: r137n001 is a REMOTE node
&gt;&gt; [rnd04:10736] pls:rsh: executing: (//usr/bin/rsh) /usr/bin/rsh
&gt;&gt; r137n001  PATH=/usr/local/openmpi-1.2.2/bin:$PATH ; export PATH ;
&gt;&gt; LD_LIBRARY_PATH=/usr/local/openmpi-1.2.2/lib:$LD_LIBRARY_PATH ;
&gt;&gt; export LD_LIBRARY_PATH ; /usr/local/openmpi-1.2.2/bin/orted -- 
&gt;&gt; debug --
&gt;&gt; bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --nodename
&gt;&gt; r137n001 --universe toto_at_rnd04:default-universe-10736 --nsreplica
&gt;&gt; &quot;0.0.0;tcp://172.28.20.143:33029;tcp://10.3.254.105:33029&quot; --
&gt;&gt; gprreplica &quot;0.0.0;tcp://172.28.20.143:33029;tcp://
&gt;&gt; 10.3.254.105:33029&quot; [HOSTNAME=rnd04 SHELL=/bin/bash TERM=xterm-color
&gt;&gt; HISTSIZE=1000 USER=toto LD_LIBRARY_PATH=/usr/local/openmpi-1.2.2/ 
&gt;&gt; lib:/
&gt;&gt; usr/local/openmpi-1.2.2/lib64
&gt;&gt; LS_COLORS=no=00:fi=00:di=01;34:ln=01;36:pi=40;33:so=01;35:bd=40;33;01 
&gt;&gt; :cd
&gt;&gt; =40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=01;32:*.cmd=01;32:*.exe=01 
&gt;&gt; ;32
&gt;&gt; :*.com=01;32:*.btm=01;32:*.bat=01;32:*.sh=01;32:*.csh=01;32:*.tar=01; 
&gt;&gt; 31:
&gt;&gt; *.tgz=01;31:*.arj=01;31:*.taz=01;31:*.lzh=01;31:*.zip=01;31:*.z=01;31 
&gt;&gt; :*.
&gt;&gt; Z=01;31:*.gz=01;31:*.bz2=01;31:*.bz=01;31:*.tz=01;31:*.rpm=01;31:*.cp 
&gt;&gt; io=
&gt;&gt; 01;31:*.jpg=01;35:*.gif=01;35:*.bmp=01;35:*.xbm=01;35:*.xpm=01;35:*.p 
&gt;&gt; ng=
&gt;&gt; 01;35:*.tif=01;35: KDEDIR=/usr MAIL=/var/spool/mail/toto PATH=/usr/
&gt;&gt; local/bin:/bin:/usr/bin:/usr/X11R6/bin:/usr/kerberos/bin INPUTRC=/ 
&gt;&gt; etc/
&gt;&gt; inputrc PWD=/home/toto LANG=en_US.UTF-8 SSH_ASKPASS=/usr/libexec/
&gt;&gt; openssh/gnome-ssh-askpass SHLVL=1 HOME=/home/toto LOGNAME=toto
&gt;&gt; LESSOPEN=|/usr/bin/lesspipe.sh %s G_BROKEN_FILENAMES=1 _=/usr/local/
&gt;&gt; openmpi-1.2.2/bin/mpirun OMPI_MCA_orte_debug=1 OMPI_MCA_seed=0]
&gt;&gt; [rnd04:10737] [0,0,1] setting up session dir with
&gt;&gt; [rnd04:10737]   universe default-universe-10736
&gt;&gt; [rnd04:10737]   user toto
&gt;&gt; [rnd04:10737]   host rnd04
&gt;&gt; [rnd04:10737]   jobid 0
&gt;&gt; [rnd04:10737]   procid 1
&gt;&gt; [rnd04:10737] procdir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
&gt;&gt; universe-10736/0/1
&gt;&gt; [rnd04:10737] jobdir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
&gt;&gt; universe-10736/0
&gt;&gt; [rnd04:10737] unidir: /tmp/openmpi-sessions-toto_at_rnd04_0/default-
&gt;&gt; universe-10736
&gt;&gt; [rnd04:10737] top: openmpi-sessions-toto_at_rnd04_0
&gt;&gt; [rnd04:10737] tmp: /tmp
&gt;&gt; [r137n001:31527] [0,0,2] setting up session dir with
&gt;&gt; [r137n001:31527]        universe default-universe-10736
&gt;&gt; [r137n001:31527]        user toto
&gt;&gt; [r137n001:31527]        host r137n001
&gt;&gt; [r137n001:31527]        jobid 0
&gt;&gt; [r137n001:31527]        procid 2
&gt;&gt; [r137n001:31527] procdir: /tmp/openmpi-sessions-toto_at_r137n001_0/
&gt;&gt; default-universe-10736/0/2
&gt;&gt; [r137n001:31527] jobdir: /tmp/openmpi-sessions-toto_at_r137n001_0/
&gt;&gt; default-universe-10736/0
&gt;&gt; [r137n001:31527] unidir: /tmp/openmpi-sessions-toto_at_r137n001_0/
&gt;&gt; default-universe-10736
&gt;&gt; [r137n001:31527] top: openmpi-sessions-toto_at_r137n001_0
&gt;&gt; [r137n001:31527] tmp: /tmp
&gt;&gt; Linux rnd04 2.6.9-55.ELsmp #1 SMP Fri Apr 20 16:36:54 EDT 2007 x86_64
&gt;&gt; x86_64 x86_64 GNU/Linux
&gt;&gt; [rnd04:10737] sess_dir_finalize: proc session dir not empty - leaving
&gt;&gt; [r137n001:31528] *** Process received signal ***
&gt;&gt; [r137n001:31528] Signal: Segmentation fault (11)
&gt;&gt; [r137n001:31528] Signal code: Address not mapped (1)
&gt;&gt; [r137n001:31528] Failing at address: 0x1
&gt;&gt; [r137n001:31528] [ 0] [0xffffe600]
&gt;&gt; [r137n001:31528] [ 1] /lib/tls/libc.so.6 [0xbf3bfc]
&gt;&gt; [r137n001:31528] [ 2] /lib/tls/libc.so.6(_IO_vfprintf+0xcb)  
&gt;&gt; [0xbf3e3b]
&gt;&gt; [r137n001:31528] [ 3] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
&gt;&gt; (opal_show_help+0x263) [0xf7f78de3]
&gt;&gt; [r137n001:31528] [ 4] /usr/local/openmpi-1.2.2/lib/libopen-rte.so.0
&gt;&gt; (orte_rmgr_base_check_context_cwd+0xff) [0xf7fea7ef]
&gt;&gt; [r137n001:31528] [ 5] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_odls_default.so(orte_odls_default_launch_local_procs+0xe7f)
&gt;&gt; [0xf7ea041f]
&gt;&gt; [r137n001:31528] [ 6] /usr/local/openmpi-1.2.2/bin/orted [0x804a1ea]
&gt;&gt; [r137n001:31528] [ 7] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_gpr_proxy.so(orte_gpr_proxy_deliver_notify_msg+0x136)  
&gt;&gt; [0xf7ef65c6]
&gt;&gt; [r137n001:31528] [ 8] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_gpr_proxy.so(orte_gpr_proxy_notify_recv+0x108) [0xf7ef4f68]
&gt;&gt; [r137n001:31528] [ 9] /usr/local/openmpi-1.2.2/lib/libopen-rte.so.0
&gt;&gt; [0xf7fd9a18]
&gt;&gt; [r137n001:31528] [10] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x24c) [0xf7f05fdc]
&gt;&gt; [r137n001:31528] [11] /usr/local/openmpi-1.2.2/lib/openmpi/
&gt;&gt; mca_oob_tcp.so [0xf7f07f61]
&gt;&gt; [r137n001:31528] [12] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
&gt;&gt; (opal_event_base_loop+0x388) [0xf7f67dd8]
&gt;&gt; [r137n001:31528] [13] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
&gt;&gt; (opal_event_loop+0x29) [0xf7f67fb9]
&gt;&gt; [r137n001:31528] [14] /usr/local/openmpi-1.2.2/lib/libopen-pal.so.0
&gt;&gt; (opal_progress+0xbe) [0xf7f6123e]
&gt;&gt; [r137n001:31528] [15] /usr/local/openmpi-1.2.2/bin/orted(main+0xd74)
&gt;&gt; [0x804a0e4]
&gt;&gt; [r137n001:31528] [16] /lib/tls/libc.so.6(__libc_start_main+0xd3)
&gt;&gt; [0xbcee23]
&gt;&gt; [r137n001:31528] [17] /usr/local/openmpi-1.2.2/bin/orted [0x80492e1]
&gt;&gt; [r137n001:31528] *** End of error message ***
&gt;&gt; [r137n001:31527] sess_dir_finalize: proc session dir not empty -  
&gt;&gt; leaving
&gt;&gt; [rnd04:10736] spawn: in job_state_callback(jobid = 1, state = 0x80)
&gt;&gt; mpirun noticed that job rank 1 with PID 31528 on node r137n001 exited
&gt;&gt; on signal 11 (Segmentation fault).
&gt;&gt; [rnd04:10737] sess_dir_finalize: job session dir not empty - leaving
&gt;&gt; [r137n001:31527] sess_dir_finalize: job session dir not empty -  
&gt;&gt; leaving
&gt;&gt; [rnd04:10737] sess_dir_finalize: proc session dir not empty - leaving
&gt;&gt; [rnd04:10736] sess_dir_finalize: proc session dir not empty - leaving
&gt;&gt; -bash-3.00$ [r137n001:31527] sess_dir_finalize: proc session dir not
&gt;&gt; empty - leaving
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; -bash-3.00$ /usr/local/openmpi-1.2.2/bin/ompi_info --all
&gt;&gt;                  Open MPI: 1.2.2
&gt;&gt;     Open MPI SVN revision: r14613
&gt;&gt;                  Open RTE: 1.2.2
&gt;&gt;     Open RTE SVN revision: r14613
&gt;&gt;                      OPAL: 1.2.2
&gt;&gt;         OPAL SVN revision: r14613
&gt;&gt;             MCA backtrace: execinfo (MCA v1.0, API v1.0, Component
&gt;&gt; v1.2.2)
&gt;&gt;                MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component
&gt;&gt; v1.2.2)
&gt;&gt;             MCA paffinity: linux (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component
&gt;&gt; v1.2.2)
&gt;&gt;                 MCA timer: linux (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;           MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.2)
&gt;&gt;           MCA installdirs: config (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
&gt;&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.0)
&gt;&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.2)
&gt;&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                 MCA mpool: rdma (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.2)
&gt;&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.2)
&gt;&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.2)
&gt;&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.2)
&gt;&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.2)
&gt;&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
&gt;&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.2)
&gt;&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.2)
&gt;&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
&gt;&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3, Component
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA ras: slurm (MCA v1.0, API v1.3, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component
&gt;&gt; v1.2.2)
&gt;&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3, Component
&gt;&gt; v1.2.2)
&gt;&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.2)
&gt;&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.2)
&gt;&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3, Component
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.2)
&gt;&gt;                   MCA pls: slurm (MCA v1.0, API v1.3, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2.2)
&gt;&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component
&gt;&gt; v1.2.2)
&gt;&gt;                   MCA sds: slurm (MCA v1.0, API v1.0, Component  
&gt;&gt; v1.2.2)
&gt;&gt;                    Prefix: /usr/local/openmpi-1.2.2
&gt;&gt;                    Bindir: /usr/local/openmpi-1.2.2/bin
&gt;&gt;                    Libdir: /usr/local/openmpi-1.2.2/lib
&gt;&gt;                    Incdir: /usr/local/openmpi-1.2.2/include
&gt;&gt;                 Pkglibdir: /usr/local/openmpi-1.2.2/lib/openmpi
&gt;&gt;                Sysconfdir: /usr/local/openmpi-1.2.2/etc
&gt;&gt; Configured architecture: x86_64-unknown-linux-gnu
&gt;&gt;             Configured by: root
&gt;&gt;             Configured on: Tue Jun  5 14:32:20 CDT 2007
&gt;&gt;            Configure host: qpac171
&gt;&gt;                  Built by: root
&gt;&gt;                  Built on: Tue Jun  5 14:39:38 CDT 2007
&gt;&gt;                Built host: qpac171
&gt;&gt;                C bindings: yes
&gt;&gt;              C++ bindings: yes
&gt;&gt;        Fortran77 bindings: yes (all)
&gt;&gt;        Fortran90 bindings: no
&gt;&gt; Fortran90 bindings size: na
&gt;&gt;                C compiler: gcc
&gt;&gt;       C compiler absolute: /usr/bin/gcc
&gt;&gt;               C char size: 1
&gt;&gt;               C bool size: 1
&gt;&gt;              C short size: 2
&gt;&gt;                C int size: 4
&gt;&gt;               C long size: 4
&gt;&gt;              C float size: 4
&gt;&gt;             C double size: 8
&gt;&gt;            C pointer size: 4
&gt;&gt;              C char align: 1
&gt;&gt;              C bool align: 1
&gt;&gt;               C int align: 4
&gt;&gt;             C float align: 4
&gt;&gt;            C double align: 4
&gt;&gt;              C++ compiler: g++
&gt;&gt;     C++ compiler absolute: /usr/bin/g++
&gt;&gt;        Fortran77 compiler: g77
&gt;&gt;    Fortran77 compiler abs: /usr/bin/g77
&gt;&gt;        Fortran90 compiler: none
&gt;&gt;    Fortran90 compiler abs: none
&gt;&gt;         Fort integer size: 4
&gt;&gt;         Fort logical size: 4
&gt;&gt; Fort logical value true: 1
&gt;&gt;        Fort have integer1: yes
&gt;&gt;        Fort have integer2: yes
&gt;&gt;        Fort have integer4: yes
&gt;&gt;        Fort have integer8: yes
&gt;&gt;       Fort have integer16: no
&gt;&gt;           Fort have real4: yes
&gt;&gt;           Fort have real8: yes
&gt;&gt;          Fort have real16: no
&gt;&gt;        Fort have complex8: yes
&gt;&gt;       Fort have complex16: yes
&gt;&gt;       Fort have complex32: no
&gt;&gt;        Fort integer1 size: 1
&gt;&gt;        Fort integer2 size: 2
&gt;&gt;        Fort integer4 size: 4
&gt;&gt;        Fort integer8 size: 8
&gt;&gt;       Fort integer16 size: -1
&gt;&gt;            Fort real size: 4
&gt;&gt;           Fort real4 size: 4
&gt;&gt;           Fort real8 size: 8
&gt;&gt;          Fort real16 size: -1
&gt;&gt;        Fort dbl prec size: 4
&gt;&gt;            Fort cplx size: 4
&gt;&gt;        Fort dbl cplx size: 4
&gt;&gt;           Fort cplx8 size: 8
&gt;&gt;          Fort cplx16 size: 16
&gt;&gt;          Fort cplx32 size: -1
&gt;&gt;        Fort integer align: 4
&gt;&gt;       Fort integer1 align: 1
&gt;&gt;       Fort integer2 align: 2
&gt;&gt;       Fort integer4 align: 4
&gt;&gt;       Fort integer8 align: 8
&gt;&gt;      Fort integer16 align: -1
&gt;&gt;           Fort real align: 4
&gt;&gt;          Fort real4 align: 4
&gt;&gt;          Fort real8 align: 8
&gt;&gt;         Fort real16 align: -1
&gt;&gt;       Fort dbl prec align: 4
&gt;&gt;           Fort cplx align: 4
&gt;&gt;       Fort dbl cplx align: 4
&gt;&gt;          Fort cplx8 align: 4
&gt;&gt;         Fort cplx16 align: 8
&gt;&gt;         Fort cplx32 align: -1
&gt;&gt;               C profiling: yes
&gt;&gt;             C++ profiling: yes
&gt;&gt;       Fortran77 profiling: yes
&gt;&gt;       Fortran90 profiling: no
&gt;&gt;            C++ exceptions: no
&gt;&gt;            Thread support: posix (mpi: no, progress: no)
&gt;&gt;              Build CFLAGS: -O3 -DNDEBUG -m32 -finline-functions -fno-
&gt;&gt; strict-aliasing -pthread
&gt;&gt;            Build CXXFLAGS: -O3 -DNDEBUG -m32 -finline-functions - 
&gt;&gt; pthread
&gt;&gt;              Build FFLAGS: -m32
&gt;&gt;             Build FCFLAGS: -m32
&gt;&gt;             Build LDFLAGS: -export-dynamic
&gt;&gt;                Build LIBS: -lnsl -lutil  -lm
&gt;&gt;      Wrapper extra CFLAGS: -pthread -m32
&gt;&gt;    Wrapper extra CXXFLAGS: -pthread -m32
&gt;&gt;      Wrapper extra FFLAGS: -pthread -m32
&gt;&gt;     Wrapper extra FCFLAGS: -pthread -m32
&gt;&gt;     Wrapper extra LDFLAGS:
&gt;&gt;        Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl -lutil
&gt;&gt; -lm -ldl
&gt;&gt;    Internal debug support: no
&gt;&gt;       MPI parameter check: runtime
&gt;&gt; Memory profiling support: no
&gt;&gt; Memory debugging support: no
&gt;&gt;           libltdl support: yes
&gt;&gt;     Heterogeneous support: yes
&gt;&gt; mpirun default --prefix: no
&gt;&gt;                   MCA mca: parameter &quot;mca_param_files&quot; (current
&gt;&gt; value: &quot;/home/toto/.openmpi/mca-params.conf:/usr/local/openmpi-1.2.2/
&gt;&gt; etc/openmpi-mca-params.conf&quot;)
&gt;&gt;                            Path for MCA configuration files
&gt;&gt; containing default parameter values
&gt;&gt;                   MCA mca: parameter &quot;mca_component_path&quot; (current
&gt;&gt; value: &quot;/usr/local/openmpi-1.2.2/lib/openmpi:/home/toto/.openmpi/
&gt;&gt; components&quot;)
&gt;&gt;                            Path where to look for Open MPI and ORTE
&gt;&gt; components
&gt;&gt;                   MCA mca: parameter &quot;mca_verbose&quot; (current value:
&gt;&gt; &lt;none&gt;)
&gt;&gt;                            Top-level verbosity parameter
&gt;&gt;                   MCA mca: parameter
&gt;&gt; &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;)
&gt;&gt;                            Whether to show errors for components that
&gt;&gt; failed to load or not
&gt;&gt;                   MCA mca: parameter
&gt;&gt; &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;)
&gt;&gt;                            Whether to attempt to disable opening
&gt;&gt; dynamic components or not
&gt;&gt;                   MCA mpi: parameter &quot;mpi_param_check&quot; (current
&gt;&gt; value: &quot;1&quot;)
&gt;&gt;                            Whether you want MPI API parameters
&gt;&gt; checked at run-time or not.  Possible values are 0 (no checking) and
&gt;&gt; 1 (perform checking at run-time)
&gt;&gt;                   MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Yield the processor when waiting for MPI
&gt;&gt; communication (for MPI processes, will default to 1 when
&gt;&gt; oversubscribing nodes)
&gt;&gt;                   MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current
&gt;&gt; value: &quot;-1&quot;)
&gt;&gt;                            How often to progress TCP communications
&gt;&gt; (0 = never, otherwise specified in microseconds)
&gt;&gt;                   MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Whether MPI_FINALIZE shows all MPI handles
&gt;&gt; that were not freed or not
&gt;&gt;                   MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Whether to actually free MPI objects when
&gt;&gt; their handles are freed
&gt;&gt;                   MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Whether to show all MCA parameter value
&gt;&gt; during MPI_INIT or not (good for reproducability of MPI jobs)
&gt;&gt;                   MCA mpi: parameter
&gt;&gt; &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;)
&gt;&gt;                            If mpi_show_mca_params is true, setting
&gt;&gt; this string to a valid filename tells Open MPI to dump all the MCA
&gt;&gt; parameter values into a file suitable for reading via the
&gt;&gt; mca_param_files parameter (good for reproducability of MPI jobs)
&gt;&gt;                   MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            If nonzero, assume that this job is the
&gt;&gt; only (set of) process(es) running on each node and bind processes to
&gt;&gt; processors, starting with processor ID 0
&gt;&gt;                   MCA mpi: parameter
&gt;&gt; &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;)
&gt;&gt;                            If nonzero, save the string hostnames of
&gt;&gt; all MPI peer processes (mostly for error / debugging output
&gt;&gt; messages).  This can add quite a bit of memory usage to each MPI
&gt;&gt; process.
&gt;&gt;                   MCA mpi: parameter &quot;mpi_abort_delay&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            If nonzero, print out an identifying
&gt;&gt; message when MPI_ABORT is invoked (hostname, PID of the process that
&gt;&gt; called MPI_ABORT) and delay for that many seconds before exiting (a
&gt;&gt; negative delay value means to never abort).  This allows
&gt;&gt;                            attaching of a debugger before quitting
&gt;&gt; the job.
&gt;&gt;                   MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            If nonzero, print out a stack trace when
&gt;&gt; MPI_ABORT is invoked
&gt;&gt;                   MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Whether to force MPI processes to create
&gt;&gt; connections / warmup with *all* peers during MPI_INIT (vs. making
&gt;&gt; connections lazily -- upon the first MPI traffic between each process
&gt;&gt; peer pair)
&gt;&gt;                   MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Whether to force MPI processes to fully
&gt;&gt; wire-up the OOB system between MPI processes.
&gt;&gt;                   MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Whether to use the &quot;leave pinned&quot; protocol
&gt;&gt; or not.  Enabling this setting can help bandwidth performance when
&gt;&gt; repeatedly sending and receiving large messages with the same buffers
&gt;&gt; over RDMA-based networks.
&gt;&gt;                   MCA mpi: parameter
&gt;&gt; &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;)
&gt;&gt;                            Whether to use the &quot;leave pinned pipeline&quot;
&gt;&gt; protocol or not.
&gt;&gt;                  MCA orte: parameter &quot;orte_debug&quot; (current value:  
&gt;&gt; &quot;0&quot;)
&gt;&gt;                            Top-level ORTE debug switch
&gt;&gt;                  MCA orte: parameter &quot;orte_no_daemonize&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Whether to properly daemonize the ORTE
&gt;&gt; daemons or not
&gt;&gt;                  MCA orte: parameter
&gt;&gt; &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a
&gt;&gt; @mpirun_args@ : fxp @mpirun@ -a @mpirun_args@&quot;)
&gt;&gt;                            Sequence of user-level debuggers to search
&gt;&gt; for in orterun
&gt;&gt;                  MCA orte: parameter &quot;orte_abort_timeout&quot; (current
&gt;&gt; value: &quot;10&quot;)
&gt;&gt;                            Time to wait [in seconds] before giving up
&gt;&gt; on aborting an ORTE operation
&gt;&gt;                  MCA orte: parameter &quot;orte_timing&quot; (current value:  
&gt;&gt; &quot;0&quot;)
&gt;&gt;                            Request that critical timing loops be
&gt;&gt; measured
&gt;&gt;                  MCA opal: parameter &quot;opal_signal&quot; (current value:
&gt;&gt; &quot;6,7,8,11&quot;)
&gt;&gt;                            If a signal is received, display the stack
&gt;&gt; trace frame
&gt;&gt;             MCA backtrace: parameter &quot;backtrace&quot; (current value:  
&gt;&gt; &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the backtrace framework (&lt;none&gt; means &quot;use all components that can be
&gt;&gt; found&quot;)
&gt;&gt;             MCA backtrace: parameter
&gt;&gt; &quot;backtrace_base_verbose&quot; (current value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the backtrace
&gt;&gt; framework (0 = no verbosity)
&gt;&gt;             MCA backtrace: parameter
&gt;&gt; &quot;backtrace_execinfo_priority&quot; (current value: &quot;0&quot;)
&gt;&gt;                MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the memory framework (&lt;none&gt; means &quot;use all components that can be
&gt;&gt; found&quot;)
&gt;&gt;                MCA memory: parameter &quot;memory_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the memory framework
&gt;&gt; (0 = no verbosity)
&gt;&gt;                MCA memory: parameter
&gt;&gt; &quot;memory_ptmalloc2_priority&quot; (current value: &quot;0&quot;)
&gt;&gt;             MCA paffinity: parameter &quot;paffinity&quot; (current value:  
&gt;&gt; &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the paffinity framework (&lt;none&gt; means &quot;use all components that can be
&gt;&gt; found&quot;)
&gt;&gt;             MCA paffinity: parameter
&gt;&gt; &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;)
&gt;&gt;                            Priority of the linux paffinity component
&gt;&gt;             MCA paffinity: information
&gt;&gt; &quot;paffinity_linux_have_cpu_set_t&quot; (value: &quot;1&quot;)
&gt;&gt;                            Whether this component was compiled on a
&gt;&gt; system with the type cpu_set_t or not (1 = yes, 0 = no)
&gt;&gt;             MCA paffinity: information
&gt;&gt; &quot;paffinity_linux_CPU_ZERO_ok&quot; (value: &quot;1&quot;)
&gt;&gt;                            Whether this component was compiled on a
&gt;&gt; system where CPU_ZERO() is functional or broken (1 = functional, 0 =
&gt;&gt; broken/not available)
&gt;&gt;             MCA paffinity: information
&gt;&gt; &quot;paffinity_linux_sched_setaffinity_num_params&quot; (value: &quot;3&quot;)
&gt;&gt;                            The number of parameters that
&gt;&gt; sched_set_affinity() takes on the machine where this component was
&gt;&gt; compiled
&gt;&gt;             MCA maffinity: parameter &quot;maffinity&quot; (current value:  
&gt;&gt; &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the maffinity framework (&lt;none&gt; means &quot;use all components that can be
&gt;&gt; found&quot;)
&gt;&gt;             MCA maffinity: parameter
&gt;&gt; &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;)
&gt;&gt;                            Priority of the first_use maffinity  
&gt;&gt; component
&gt;&gt;                 MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the timer framework (&lt;none&gt; means &quot;use all components that can be
&gt;&gt; found&quot;)
&gt;&gt;                 MCA timer: parameter &quot;timer_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the timer framework (0
&gt;&gt; = no verbosity)
&gt;&gt;                 MCA timer: parameter &quot;timer_linux_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;             MCA allocator: parameter &quot;allocator&quot; (current value:  
&gt;&gt; &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the allocator framework (&lt;none&gt; means &quot;use all components that can be
&gt;&gt; found&quot;)
&gt;&gt;             MCA allocator: parameter
&gt;&gt; &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the allocator
&gt;&gt; framework (0 = no verbosity)
&gt;&gt;             MCA allocator: parameter
&gt;&gt; &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;)
&gt;&gt;             MCA allocator: parameter
&gt;&gt; &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;)
&gt;&gt;             MCA allocator: parameter
&gt;&gt; &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;)
&gt;&gt;                  MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the coll framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                  MCA coll: parameter &quot;coll_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the coll framework (0
&gt;&gt; = no verbosity)
&gt;&gt;                  MCA coll: parameter &quot;coll_basic_priority&quot; (current
&gt;&gt; value: &quot;10&quot;)
&gt;&gt;                            Priority of the basic coll component
&gt;&gt;                  MCA coll: parameter &quot;coll_basic_crossover&quot; (current
&gt;&gt; value: &quot;4&quot;)
&gt;&gt;                            Minimum number of processes in a
&gt;&gt; communicator before using the logarithmic algorithms
&gt;&gt;                  MCA coll: parameter &quot;coll_self_priority&quot; (current
&gt;&gt; value: &quot;75&quot;)
&gt;&gt;                  MCA coll: parameter &quot;coll_sm_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Priority of the sm coll component
&gt;&gt;                  MCA coll: parameter &quot;coll_sm_control_size&quot; (current
&gt;&gt; value: &quot;4096&quot;)
&gt;&gt;                            Length of the control data -- should
&gt;&gt; usually be either the length of a cache line on most SMPs, or the
&gt;&gt; size of a page on machines that support direct memory affinity page
&gt;&gt; placement (in bytes)
&gt;&gt;                  MCA coll: parameter
&gt;&gt; &quot;coll_sm_bootstrap_filename&quot; (current value:  
&gt;&gt; &quot;shared_mem_sm_bootstrap&quot;)
&gt;&gt;                            Filename (in the Open MPI session
&gt;&gt; directory) of the coll sm component bootstrap rendezvous mmap file
&gt;&gt;                  MCA coll: parameter
&gt;&gt; &quot;coll_sm_bootstrap_num_segments&quot; (current value: &quot;8&quot;)
&gt;&gt;                            Number of segments in the bootstrap file
&gt;&gt;                  MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current
&gt;&gt; value: &quot;8192&quot;)
&gt;&gt;                            Fragment size (in bytes) used for passing
&gt;&gt; data through shared memory (will be rounded up to the nearest
&gt;&gt; control_size size)
&gt;&gt;                  MCA coll: parameter &quot;coll_sm_mpool&quot; (current value:
&gt;&gt; &quot;sm&quot;)
&gt;&gt;                            Name of the mpool component to use
&gt;&gt;                  MCA coll: parameter
&gt;&gt; &quot;coll_sm_comm_in_use_flags&quot; (current value: &quot;2&quot;)
&gt;&gt;                            Number of &quot;in use&quot; flags, used to mark a
&gt;&gt; message passing area segment as currently being used or not (must be
&gt;&gt;&gt; = 2 and &lt;= comm_num_segments)
&gt;&gt;                  MCA coll: parameter
&gt;&gt; &quot;coll_sm_comm_num_segments&quot; (current value: &quot;8&quot;)
&gt;&gt;                            Number of segments in each communicator's
&gt;&gt; shared memory message passing area (must be &gt;= 2, and must be a
&gt;&gt; multiple of comm_in_use_flags)
&gt;&gt;                  MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current
&gt;&gt; value: &quot;4&quot;)
&gt;&gt;                            Degree of the tree for tree-based
&gt;&gt; operations (must be =&gt; 1 and &lt;= min(control_size, 255))
&gt;&gt;                  MCA coll: information
&gt;&gt; &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;160&quot;)
&gt;&gt;                            Amount of shared memory used in the shared
&gt;&gt; memory bootstrap area (in bytes)
&gt;&gt;                  MCA coll: parameter
&gt;&gt; &quot;coll_sm_info_num_procs&quot; (current value: &quot;4&quot;)
&gt;&gt;                            Number of processes to use for the
&gt;&gt; calculation of the shared_mem_size MCA information parameter (must be
&gt;&gt; =&gt; 2)
&gt;&gt;                  MCA coll: information
&gt;&gt; &quot;coll_sm_shared_mem_used_data&quot; (value: &quot;548864&quot;)
&gt;&gt;                            Amount of shared memory used in the shared
&gt;&gt; memory data area for info_num_procs processes (in bytes)
&gt;&gt;                  MCA coll: parameter &quot;coll_tuned_priority&quot; (current
&gt;&gt; value: &quot;30&quot;)
&gt;&gt;                            Priority of the tuned coll component
&gt;&gt;                  MCA coll: parameter
&gt;&gt; &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value:
&gt;&gt; &quot;32768&quot;)
&gt;&gt;                            Size of communicator were we stop pre-
&gt;&gt; allocating memory for the fixed internal buffer used for message
&gt;&gt; requests etc that is hung off the communicator data segment. I.e. if
&gt;&gt; you have a 100'000 nodes you might not want to pre-allocate
&gt;&gt;                            200'000 request handle slots per
&gt;&gt; communicator instance!
&gt;&gt;                  MCA coll: parameter
&gt;&gt; &quot;coll_tuned_init_tree_fanout&quot; (current value: &quot;4&quot;)
&gt;&gt;                            Inital fanout used in the tree topologies
&gt;&gt; for each communicator. This is only an initial guess, if a tuned
&gt;&gt; collective needs a different fanout for an operation, it build it
&gt;&gt; dynamically. This parameter is only for the first guess and might
&gt;&gt;                            save a little time
&gt;&gt;                  MCA coll: parameter
&gt;&gt; &quot;coll_tuned_init_chain_fanout&quot; (current value: &quot;4&quot;)
&gt;&gt;                            Inital fanout used in the chain (fanout
&gt;&gt; followed by pipeline) topologies for each communicator. This is only
&gt;&gt; an initial guess, if a tuned collective needs a different fanout for
&gt;&gt; an operation, it build it dynamically. This parameter is
&gt;&gt;                            only for the first guess and might save a
&gt;&gt; little time
&gt;&gt;                  MCA coll: parameter
&gt;&gt; &quot;coll_tuned_use_dynamic_rules&quot; (current value: &quot;0&quot;)
&gt;&gt;                            Switch used to decide if we use static
&gt;&gt; (compiled/if statements) or dynamic (built at runtime) decision
&gt;&gt; function rules
&gt;&gt;                    MCA io: parameter
&gt;&gt; &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;)
&gt;&gt;                            Initial MPI-2 IO request freelist size
&gt;&gt;                    MCA io: parameter
&gt;&gt; &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;)
&gt;&gt;                            Max size of the MPI-2 IO request freelist
&gt;&gt;                    MCA io: parameter
&gt;&gt; &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;)
&gt;&gt;                            Increment size of the MPI-2 IO request
&gt;&gt; freelist
&gt;&gt;                    MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the io framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                    MCA io: parameter &quot;io_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the io framework (0 =
&gt;&gt; no verbosity)
&gt;&gt;                    MCA io: parameter &quot;io_romio_priority&quot; (current
&gt;&gt; value: &quot;10&quot;)
&gt;&gt;                            Priority of the io romio component
&gt;&gt;                    MCA io: parameter
&gt;&gt; &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;)
&gt;&gt;                            Delete priority of the io romio component
&gt;&gt;                    MCA io: parameter
&gt;&gt; &quot;io_romio_enable_parallel_optimizations&quot; (current value: &quot;0&quot;)
&gt;&gt;                            Enable set of Open MPI-added options to
&gt;&gt; improve collective file i/o performance
&gt;&gt;                 MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the mpool framework (&lt;none&gt; means &quot;use all components that can be
&gt;&gt; found&quot;)
&gt;&gt;                 MCA mpool: parameter &quot;mpool_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the mpool framework (0
&gt;&gt; = no verbosity)
&gt;&gt;                 MCA mpool: parameter
&gt;&gt; &quot;mpool_rdma_rcache_name&quot; (current value: &quot;vma&quot;)
&gt;&gt;                            The name of the registration cache the
&gt;&gt; mpool should use
&gt;&gt;                 MCA mpool: parameter
&gt;&gt; &quot;mpool_rdma_rcache_size_limit&quot; (current value: &quot;0&quot;)
&gt;&gt;                            the maximum size of registration cache in
&gt;&gt; bytes. 0 is unlimited (default 0)
&gt;&gt;                 MCA mpool: parameter
&gt;&gt; &quot;mpool_rdma_print_stats&quot; (current value: &quot;0&quot;)
&gt;&gt;                            print pool usage statistics at the end of
&gt;&gt; the run
&gt;&gt;                 MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                 MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current
&gt;&gt; value: &quot;bucket&quot;)
&gt;&gt;                            Name of allocator component to use with sm
&gt;&gt; mpool
&gt;&gt;                 MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current
&gt;&gt; value: &quot;536870912&quot;)
&gt;&gt;                            Maximum size of the sm mpool shared memory
&gt;&gt; file
&gt;&gt;                 MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current
&gt;&gt; value: &quot;134217728&quot;)
&gt;&gt;                            Minimum size of the sm mpool shared memory
&gt;&gt; file
&gt;&gt;                 MCA mpool: parameter
&gt;&gt; &quot;mpool_sm_per_peer_size&quot; (current value: &quot;33554432&quot;)
&gt;&gt;                            Size (in bytes) to allocate per local peer
&gt;&gt; in the sm mpool shared memory file, bounded by min_size and max_size
&gt;&gt;                 MCA mpool: parameter &quot;mpool_sm_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                 MCA mpool: parameter
&gt;&gt; &quot;mpool_base_use_mem_hooks&quot; (current value: &quot;0&quot;)
&gt;&gt;                            use memory hooks for deregistering freed
&gt;&gt; memory
&gt;&gt;                 MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            (deprecated, use mpool_base_use_mem_hooks)
&gt;&gt;                 MCA mpool: parameter
&gt;&gt; &quot;mpool_base_disable_sbrk&quot; (current value: &quot;0&quot;)
&gt;&gt;                            use mallopt to override calling sbrk
&gt;&gt; (doesn't return memory to OS!)
&gt;&gt;                 MCA mpool: parameter &quot;mpool_disable_sbrk&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            (deprecated, use  
&gt;&gt; mca_mpool_base_disable_sbrk)
&gt;&gt;                   MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the pml framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                   MCA pml: parameter &quot;pml_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the pml framework (0 =
&gt;&gt; no verbosity)
&gt;&gt;                   MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current
&gt;&gt; value: &quot;4&quot;)
&gt;&gt;                            Initial size of request free lists
&gt;&gt;                   MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current
&gt;&gt; value: &quot;-1&quot;)
&gt;&gt;                            Maximum size of request free lists
&gt;&gt;                   MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current
&gt;&gt; value: &quot;64&quot;)
&gt;&gt;                            Number of elements to add when growing
&gt;&gt; request free lists
&gt;&gt;                   MCA pml: parameter &quot;pml_cm_priority&quot; (current
&gt;&gt; value: &quot;30&quot;)
&gt;&gt;                            CM PML selection priority
&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current
&gt;&gt; value: &quot;4&quot;)
&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current
&gt;&gt; value: &quot;-1&quot;)
&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current
&gt;&gt; value: &quot;64&quot;)
&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_priority&quot; (current
&gt;&gt; value: &quot;20&quot;)
&gt;&gt;                   MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current
&gt;&gt; value: &quot;131072&quot;)
&gt;&gt;                   MCA pml: parameter
&gt;&gt; &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;)
&gt;&gt;                   MCA pml: parameter
&gt;&gt; &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;)
&gt;&gt;                   MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the bml framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                   MCA bml: parameter &quot;bml_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the bml framework (0 =
&gt;&gt; no verbosity)
&gt;&gt;                   MCA bml: parameter
&gt;&gt; &quot;bml_r2_show_unreach_errors&quot; (current value: &quot;1&quot;)
&gt;&gt;                            Show error message when procs are  
&gt;&gt; unreachable
&gt;&gt;                   MCA bml: parameter &quot;bml_r2_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the rcache framework (&lt;none&gt; means &quot;use all components that can be
&gt;&gt; found&quot;)
&gt;&gt;                MCA rcache: parameter &quot;rcache_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the rcache framework
&gt;&gt; (0 = no verbosity)
&gt;&gt;                MCA rcache: parameter &quot;rcache_vma_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_base_debug&quot; (current value:
&gt;&gt; &quot;0&quot;)
&gt;&gt;                            If btl_base_debug is 1 standard debug is
&gt;&gt; output, if &gt; 1 verbose debug is output
&gt;&gt;                   MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the btl framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the btl framework (0 =
&gt;&gt; no verbosity)
&gt;&gt;                   MCA btl: parameter
&gt;&gt; &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;)
&gt;&gt;                            Number of fragments by default
&gt;&gt;                   MCA btl: parameter
&gt;&gt; &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
&gt;&gt;                            Maximum number of fragments
&gt;&gt;                   MCA btl: parameter
&gt;&gt; &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;)
&gt;&gt;                            Increment by this number of fragments
&gt;&gt;                   MCA btl: parameter &quot;btl_self_eager_limit&quot; (current
&gt;&gt; value: &quot;131072&quot;)
&gt;&gt;                            Eager size fragmeng (before the rendez-
&gt;&gt; vous ptotocol)
&gt;&gt;                   MCA btl: parameter
&gt;&gt; &quot;btl_self_min_send_size&quot; (current value: &quot;262144&quot;)
&gt;&gt;                            Minimum fragment size after the rendez- 
&gt;&gt; vous
&gt;&gt;                   MCA btl: parameter
&gt;&gt; &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
&gt;&gt;                            Maximum fragment size after the rendez- 
&gt;&gt; vous
&gt;&gt;                   MCA btl: parameter
&gt;&gt; &quot;btl_self_min_rdma_size&quot; (current value: &quot;2147483647&quot;)
&gt;&gt;                            Maximum fragment size for the RDMA  
&gt;&gt; transfer
&gt;&gt;                   MCA btl: parameter
&gt;&gt; &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
&gt;&gt;                            Maximum fragment size for the RDMA  
&gt;&gt; transfer
&gt;&gt;                   MCA btl: parameter &quot;btl_self_exclusivity&quot; (current
&gt;&gt; value: &quot;65536&quot;)
&gt;&gt;                            Device exclusivity
&gt;&gt;                   MCA btl: parameter &quot;btl_self_flags&quot; (current value:
&gt;&gt; &quot;10&quot;)
&gt;&gt;                            Active behavior flags
&gt;&gt;                   MCA btl: parameter &quot;btl_self_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current
&gt;&gt; value: &quot;8&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current
&gt;&gt; value: &quot;-1&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current
&gt;&gt; value: &quot;64&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current
&gt;&gt; value: &quot;65535&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_sm_latency&quot; (current value:
&gt;&gt; &quot;100&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_sm_max_procs&quot; (current
&gt;&gt; value: &quot;-1&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current
&gt;&gt; value: &quot;2&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_sm_mpool&quot; (current value:
&gt;&gt; &quot;sm&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current
&gt;&gt; value: &quot;4096&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current
&gt;&gt; value: &quot;32768&quot;)
&gt;&gt;                   MCA btl: parameter
&gt;&gt; &quot;btl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
&gt;&gt;                   MCA btl: parameter
&gt;&gt; &quot;btl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_sm_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_if_include&quot; (current
&gt;&gt; value: &lt;none&gt;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current
&gt;&gt; value: &quot;lo&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current
&gt;&gt; value: &quot;8&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current
&gt;&gt; value: &quot;-1&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current
&gt;&gt; value: &quot;32&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
&gt;&gt; &quot;131072&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
&gt;&gt; &quot;131072&quot;)
&gt;&gt;                   MCA btl: parameter
&gt;&gt; &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current
&gt;&gt; value: &quot;65536&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current
&gt;&gt; value: &quot;65536&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current
&gt;&gt; value: &quot;131072&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current
&gt;&gt; value: &quot;131072&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current
&gt;&gt; value: &quot;2147483647&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:
&gt;&gt; &quot;122&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_tcp_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA btl: parameter &quot;btl_base_include&quot; (current
&gt;&gt; value: &lt;none&gt;)
&gt;&gt;                   MCA btl: parameter &quot;btl_base_exclude&quot; (current
&gt;&gt; value: &lt;none&gt;)
&gt;&gt;                   MCA btl: parameter
&gt;&gt; &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
&gt;&gt;                            This parameter is used to turn on warning
&gt;&gt; messages when certain NICs are not used
&gt;&gt;                   MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the mtl framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                   MCA mtl: parameter &quot;mtl_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the mtl framework (0 =
&gt;&gt; no verbosity)
&gt;&gt;                  MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the topo framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                  MCA topo: parameter &quot;topo_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the topo framework (0
&gt;&gt; = no verbosity)
&gt;&gt;                   MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the osc framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                   MCA osc: parameter &quot;osc_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the osc framework (0 =
&gt;&gt; no verbosity)
&gt;&gt;                   MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Enable optimizations available only if
&gt;&gt; MPI_LOCK is not used.
&gt;&gt;                   MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current
&gt;&gt; value: &quot;16384&quot;)
&gt;&gt;                            Max size of eagerly sent data
&gt;&gt;                   MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the errmgr framework (&lt;none&gt; means &quot;use all components that can be
&gt;&gt; found&quot;)
&gt;&gt;                MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                MCA errmgr: parameter &quot;errmgr_orted_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                MCA errmgr: parameter &quot;errmgr_proxy_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current
&gt;&gt; value: &quot;2147483647&quot;)
&gt;&gt;                   MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current
&gt;&gt; value: &quot;512&quot;)
&gt;&gt;                   MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the gpr framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                   MCA gpr: parameter &quot;gpr_null_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA gpr: parameter &quot;gpr_replica_debug&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA gpr: parameter &quot;gpr_replica_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA iof: parameter &quot;iof_base_window_size&quot; (current
&gt;&gt; value: &quot;4096&quot;)
&gt;&gt;                   MCA iof: parameter &quot;iof_base_service&quot; (current
&gt;&gt; value: &quot;0.0.0&quot;)
&gt;&gt;                   MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the iof framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                   MCA iof: parameter &quot;iof_proxy_debug&quot; (current
&gt;&gt; value: &quot;1&quot;)
&gt;&gt;                   MCA iof: parameter &quot;iof_proxy_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA iof: parameter &quot;iof_svc_debug&quot; (current value:
&gt;&gt; &quot;1&quot;)
&gt;&gt;                   MCA iof: parameter &quot;iof_svc_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                    MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the ns framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                    MCA ns: parameter &quot;ns_proxy_debug&quot; (current value:
&gt;&gt; &quot;0&quot;)
&gt;&gt;                    MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current
&gt;&gt; value: &quot;2147483647&quot;)
&gt;&gt;                    MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current
&gt;&gt; value: &quot;512&quot;)
&gt;&gt;                    MCA ns: parameter &quot;ns_proxy_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                    MCA ns: parameter &quot;ns_replica_debug&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                    MCA ns: parameter &quot;ns_replica_isolate&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                    MCA ns: parameter &quot;ns_replica_maxsize&quot; (current
&gt;&gt; value: &quot;2147483647&quot;)
&gt;&gt;                    MCA ns: parameter &quot;ns_replica_blocksize&quot; (current
&gt;&gt; value: &quot;512&quot;)
&gt;&gt;                    MCA ns: parameter &quot;ns_replica_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the oob framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                   MCA oob: parameter &quot;oob_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the oob framework (0 =
&gt;&gt; no verbosity)
&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current
&gt;&gt; value: &quot;-1&quot;)
&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current
&gt;&gt; value: &quot;60&quot;)
&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_debug&quot; (current value:
&gt;&gt; &quot;0&quot;)
&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_include&quot; (current
&gt;&gt; value: &lt;none&gt;)
&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_exclude&quot; (current
&gt;&gt; value: &lt;none&gt;)
&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value:
&gt;&gt; &quot;131072&quot;)
&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value:
&gt;&gt; &quot;131072&quot;)
&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current
&gt;&gt; value: &quot;1&quot;)
&gt;&gt;                            Enable (1) /Disable (0)  random sleep for
&gt;&gt; connection wireup
&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current
&gt;&gt; value: &quot;event&quot;)
&gt;&gt;                            Mode for HNP to accept incoming
&gt;&gt; connections: event, listen_thread
&gt;&gt;                   MCA oob: parameter
&gt;&gt; &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;)
&gt;&gt;                            High water mark for queued accepted socket
&gt;&gt; list size
&gt;&gt;                   MCA oob: parameter
&gt;&gt; &quot;oob_tcp_listen_thread_max_time&quot; (current value: &quot;10&quot;)
&gt;&gt;                            Maximum amount of time (in milliseconds)
&gt;&gt; to wait between processing accepted socket list
&gt;&gt;                   MCA oob: parameter
&gt;&gt; &quot;oob_tcp_accept_spin_count&quot; (current value: &quot;10&quot;)
&gt;&gt;                            Number of times to let accept return
&gt;&gt; EWOULDBLOCK before updating accepted socket list
&gt;&gt;                   MCA oob: parameter &quot;oob_tcp_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
&gt;&gt;                   MCA ras: parameter
&gt;&gt; &quot;ras_dash_host_priority&quot; (current value: &quot;5&quot;)
&gt;&gt;                            Selection priority for the dash_host RAS
&gt;&gt; component
&gt;&gt;                   MCA ras: parameter &quot;ras_gridengine_debug&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Enable debugging output for the gridengine
&gt;&gt; ras component
&gt;&gt;                   MCA ras: parameter
&gt;&gt; &quot;ras_gridengine_priority&quot; (current value: &quot;100&quot;)
&gt;&gt;                            Priority of the gridengine ras component
&gt;&gt;                   MCA ras: parameter
&gt;&gt; &quot;ras_gridengine_verbose&quot; (current value: &quot;0&quot;)
&gt;&gt;                            Enable verbose output for the gridengine
&gt;&gt; ras component
&gt;&gt;                   MCA ras: parameter
&gt;&gt; &quot;ras_gridengine_show_jobid&quot; (current value: &quot;0&quot;)
&gt;&gt;                            Show the JOB_ID of the Grid Engine job
&gt;&gt;                   MCA ras: parameter
&gt;&gt; &quot;ras_localhost_priority&quot; (current value: &quot;0&quot;)
&gt;&gt;                            Selection priority for the localhost RAS
&gt;&gt; component
&gt;&gt;                   MCA ras: parameter &quot;ras_slurm_priority&quot; (current
&gt;&gt; value: &quot;75&quot;)
&gt;&gt;                            Priority of the slurm ras component
&gt;&gt;                   MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
&gt;&gt;                   MCA rds: parameter &quot;rds_hostfile_debug&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Toggle debug output for hostfile RDS
&gt;&gt; component
&gt;&gt;                   MCA rds: parameter &quot;rds_hostfile_path&quot; (current
&gt;&gt; value: &quot;/usr/local/openmpi-1.2.2/etc/openmpi-default-hostfile&quot;)
&gt;&gt;                            ORTE Host filename
&gt;&gt;                   MCA rds: parameter &quot;rds_hostfile_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA rds: parameter &quot;rds_proxy_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA rds: parameter &quot;rds_resfile_debug&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Toggle debug output for resfile RDS  
&gt;&gt; component
&gt;&gt;                   MCA rds: parameter &quot;rds_resfile_name&quot; (current
&gt;&gt; value: &lt;none&gt;)
&gt;&gt;                            ORTE Resource filename
&gt;&gt;                   MCA rds: parameter &quot;rds_resfile_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                 MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the rmaps framework
&gt;&gt;                 MCA rmaps: parameter
&gt;&gt; &quot;rmaps_base_schedule_policy&quot; (current value: &quot;unspec&quot;)
&gt;&gt;                            Scheduling Policy for RMAPS. [slot | node]
&gt;&gt;                 MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Launch one ppn as directed
&gt;&gt;                 MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current
&gt;&gt; value: &quot;-1&quot;)
&gt;&gt;                            Launch n procs/node
&gt;&gt;                 MCA rmaps: parameter
&gt;&gt; &quot;rmaps_base_no_schedule_local&quot; (current value: &quot;0&quot;)
&gt;&gt;                            If false, allow scheduling MPI
&gt;&gt; applications on the same node as mpirun (default).  If true, do not
&gt;&gt; schedule any MPI applications on the same node as mpirun
&gt;&gt;                 MCA rmaps: parameter
&gt;&gt; &quot;rmaps_base_no_oversubscribe&quot; (current value: &quot;0&quot;)
&gt;&gt;                            If true, then do not allow
&gt;&gt; oversubscription of nodes - mpirun will return an error if there
&gt;&gt; aren't enough nodes to launch all processes without oversubscribing
&gt;&gt;                 MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the rmaps framework (&lt;none&gt; means &quot;use all components that can be
&gt;&gt; found&quot;)
&gt;&gt;                 MCA rmaps: parameter
&gt;&gt; &quot;rmaps_round_robin_debug&quot; (current value: &quot;1&quot;)
&gt;&gt;                            Toggle debug output for Round Robin RMAPS
&gt;&gt; component
&gt;&gt;                 MCA rmaps: parameter
&gt;&gt; &quot;rmaps_round_robin_priority&quot; (current value: &quot;1&quot;)
&gt;&gt;                            Selection priority for Round Robin RMAPS
&gt;&gt; component
&gt;&gt;                  MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the rmgr framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                  MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                  MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the rml framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                   MCA rml: parameter &quot;rml_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the rml framework (0 =
&gt;&gt; no verbosity)
&gt;&gt;                   MCA rml: parameter &quot;rml_oob_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA pls: parameter
&gt;&gt; &quot;pls_base_reuse_daemons&quot; (current value: &quot;0&quot;)
&gt;&gt;                            If nonzero, reuse daemons to launch
&gt;&gt; dynamically spawned processes.  If zero, do not reuse daemons  
&gt;&gt; (default)
&gt;&gt;                   MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the pls framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                   MCA pls: parameter &quot;pls_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the pls framework (0 =
&gt;&gt; no verbosity)
&gt;&gt;                   MCA pls: parameter &quot;pls_gridengine_debug&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Enable debugging of gridengine pls  
&gt;&gt; component
&gt;&gt;                   MCA pls: parameter
&gt;&gt; &quot;pls_gridengine_verbose&quot; (current value: &quot;0&quot;)
&gt;&gt;                            Enable verbose output of the gridengine
&gt;&gt; qrsh -inherit command
&gt;&gt;                   MCA pls: parameter
&gt;&gt; &quot;pls_gridengine_priority&quot; (current value: &quot;100&quot;)
&gt;&gt;                            Priority of the gridengine pls component
&gt;&gt;                   MCA pls: parameter &quot;pls_gridengine_orted&quot; (current
&gt;&gt; value: &quot;orted&quot;)
&gt;&gt;                            The command name that the gridengine pls
&gt;&gt; component will invoke for the ORTE daemon
&gt;&gt;                   MCA pls: parameter &quot;pls_proxy_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_debug&quot; (current value:
&gt;&gt; &quot;0&quot;)
&gt;&gt;                            Whether or not to enable debugging output
&gt;&gt; for the rsh pls component (0 or 1)
&gt;&gt;                   MCA pls: parameter
&gt;&gt; &quot;pls_rsh_num_concurrent&quot; (current value: &quot;128&quot;)
&gt;&gt;                            How many pls_rsh_agent instances to invoke
&gt;&gt; concurrently (must be &gt; 0)
&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Force the launcher to always use rsh, even
&gt;&gt; for local daemons
&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_orted&quot; (current value:
&gt;&gt; &quot;orted&quot;)
&gt;&gt;                            The command name that the rsh pls
&gt;&gt; component will invoke for the ORTE daemon
&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_priority&quot; (current
&gt;&gt; value: &quot;10&quot;)
&gt;&gt;                            Priority of the rsh pls component
&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_delay&quot; (current value:
&gt;&gt; &quot;1&quot;)
&gt;&gt;                            Delay (in seconds) between invocations of
&gt;&gt; the remote agent, but only used when the &quot;debug&quot; MCA parameter is
&gt;&gt; true, or the top-level MCA debugging is enabled (otherwise this value
&gt;&gt; is ignored)
&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_reap&quot; (current  
&gt;&gt; value: &quot;1&quot;)
&gt;&gt;                            If set to 1, wait for all the processes to
&gt;&gt; complete before exiting.  Otherwise, quit immediately -- without
&gt;&gt; waiting for confirmation that all other processes in the job have
&gt;&gt; completed.
&gt;&gt;                   MCA pls: parameter
&gt;&gt; &quot;pls_rsh_assume_same_shell&quot; (current value: &quot;1&quot;)
&gt;&gt;                            If set to 1, assume that the shell on the
&gt;&gt; remote node is the same as the shell on the local node.  Otherwise,
&gt;&gt; probe for what the remote shell.
&gt;&gt;                   MCA pls: parameter &quot;pls_rsh_agent&quot; (current value:
&gt;&gt; &quot;rsh&quot;)
&gt;&gt;                            The command used to launch executables on
&gt;&gt; remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
&gt;&gt;                   MCA pls: parameter &quot;pls_slurm_debug&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Enable debugging of slurm pls
&gt;&gt;                   MCA pls: parameter &quot;pls_slurm_priority&quot; (current
&gt;&gt; value: &quot;75&quot;)
&gt;&gt;                            Default selection priority
&gt;&gt;                   MCA pls: parameter &quot;pls_slurm_orted&quot; (current
&gt;&gt; value: &quot;orted&quot;)
&gt;&gt;                            Command to use to start proxy orted
&gt;&gt;                   MCA pls: parameter &quot;pls_slurm_args&quot; (current value:
&gt;&gt; &lt;none&gt;)
&gt;&gt;                            Custom arguments to srun
&gt;&gt;                   MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
&gt;&gt;                            Default selection set of components for
&gt;&gt; the sds framework (&lt;none&gt; means &quot;use all components that can be  
&gt;&gt; found&quot;)
&gt;&gt;                   MCA sds: parameter &quot;sds_base_verbose&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                            Verbosity level for the sds framework (0 =
&gt;&gt; no verbosity)
&gt;&gt;                   MCA sds: parameter &quot;sds_env_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA sds: parameter &quot;sds_pipe_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA sds: parameter &quot;sds_seed_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt;                   MCA sds: parameter
&gt;&gt; &quot;sds_singleton_priority&quot; (current value: &quot;0&quot;)
&gt;&gt;                   MCA sds: parameter &quot;sds_slurm_priority&quot; (current
&gt;&gt; value: &quot;0&quot;)
&gt;&gt; -bash-3.00$
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3402.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Previous message:</strong> <a href="3400.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>In reply to:</strong> <a href="3400.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3402.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
<li><strong>Reply:</strong> <a href="3402.php">Ralph Castain: "Re: [OMPI users] Segfault in orted (home directory problem)"</a>
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
