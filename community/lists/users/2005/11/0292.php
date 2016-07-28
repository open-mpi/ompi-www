<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  8 15:03:03 2005" -->
<!-- isoreceived="20051108200303" -->
<!-- sent="Tue, 8 Nov 2005 15:02:50 -0500" -->
<!-- isosent="20051108200250" -->
<!-- name="Marty Humphrey" -->
<!-- email="humphrey_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines" -->
<!-- id="057c01c5e49f$66089a60$aa01a8c0_at_Roger2" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="010a9f3d227816833d08aaeda7c2ed90_at_open-mpi.org" -->
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
<strong>From:</strong> Marty Humphrey (<em>humphrey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-08 15:02:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0293.php">Jeff Squyres: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Previous message:</strong> <a href="0291.php">George Bosilca: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>In reply to:</strong> <a href="0272.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0300.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<li><strong>Reply:</strong> <a href="0300.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's taken me a while, but I've simplified the experiment...
<br>
<p>In a nutshell, I'm seeing strange behavior in my multi-NIC box when I
<br>
attempt to execute &quot; mpiexec -d --mca btl_tcp_if_include eth0  -np 2 a.out&quot;.
<br>
I have three different observed behaviors:
<br>
<p>[1] mpi worker rank 0 displays the banner and then just hangs (apparently
<br>
trying to exchange MPI messages, which don't get delivered)
<br>
<p>2 PE'S AS A  2 BY  1 GRID
<br>
<p>[2] it starts progressing (spitting out domain-specific msgs):
<br>
<p>2 PE'S AS A  2 BY  1 GRID
<br>
<p>&nbsp;&nbsp;HALO2A  NPES,N =  2    2  TIME =  0.000007 SECONDS
<br>
&nbsp;&nbsp;HALO2A  NPES,N =  2    4  TIME =  0.000007 SECONDS
<br>
&nbsp;&nbsp;HALO2A  NPES,N =  2    8  TIME =  0.000007 SECONDS
<br>
&nbsp;&nbsp;HALO2A  NPES,N =  2   16  TIME =  0.000008 SECONDS
<br>
&nbsp;&nbsp;HALO2A  NPES,N =  2   32  TIME =  0.000009 SECONDS
<br>
<p>[3] I get failure pretty quickly, with the line &quot; mpiexec noticed that job
<br>
rank 1 with PID 20425 on node &quot;localhost&quot; exited on signal 11.&quot; 
<br>
<p>Here's the output of &quot;ifconfig&quot;:
<br>
<p>[humphrey_at_zelda01 humphrey]$ /sbin/ifconfig
<br>
eth0      Link encap:Ethernet  HWaddr 00:11:43:DC:EA:EE  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:130.207.252.131  Bcast:130.207.252.255
<br>
Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:2441905 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:112786 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:197322445 (188.1 Mb)  TX bytes:32906750 (31.3 Mb)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base address:0xecc0 Memory:dfae0000-dfb00000 
<br>
<p>eth2      Link encap:Ethernet  HWaddr 00:11:95:C7:28:82  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.0.0.11  Bcast:10.0.0.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:11598757 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:7224590 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:3491651158 (3329.8 Mb)  TX bytes:1916674000 (1827.8 Mb)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:77 Base address:0xcc00 
<br>
<p>ipsec0    Link encap:Ethernet  HWaddr 00:11:43:DC:EA:EE  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:130.207.252.131  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP RUNNING NOARP  MTU:16260  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:40113 errors:0 dropped:40113 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:10 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
<br>
<p>lo        Link encap:Local Loopback  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:4742 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:4742 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:2369841 (2.2 Mb)  TX bytes:2369841 (2.2 Mb)
<br>
<p>This is with openmpi-1.1a1r8038 .
<br>
<p>Here is the output of a hanging invocation....
<br>
<p>----- begin hanging invocation ----
<br>
[humphrey_at_zelda01 humphrey]$ mpiexec -d --mca btl_tcp_if_include eth0  -np 2
<br>
a.out
<br>
[zelda01.localdomain:20455] procdir: (null)
<br>
[zelda01.localdomain:20455] jobdir: (null)
<br>
[zelda01.localdomain:20455] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
<br>
[zelda01.localdomain:20455] top:
<br>
openmpi-sessions-humphrey_at_zelda01.localdomain_0
<br>
[zelda01.localdomain:20455] tmp: /tmp
<br>
[zelda01.localdomain:20455] connect_uni: contact info read
<br>
[zelda01.localdomain:20455] connect_uni: connection not allowed
<br>
[zelda01.localdomain:20455] [0,0,0] setting up session dir with
<br>
[zelda01.localdomain:20455]     tmpdir /tmp
<br>
[zelda01.localdomain:20455]     universe default-universe-20455
<br>
[zelda01.localdomain:20455]     user humphrey
<br>
[zelda01.localdomain:20455]     host zelda01.localdomain
<br>
[zelda01.localdomain:20455]     jobid 0
<br>
[zelda01.localdomain:20455]     procid 0
<br>
[zelda01.localdomain:20455] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe-20455/
<br>
0/0
<br>
[zelda01.localdomain:20455] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe-20455/
<br>
0
<br>
[zelda01.localdomain:20455] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe-20455
<br>
[zelda01.localdomain:20455] top:
<br>
openmpi-sessions-humphrey_at_zelda01.localdomain_0
<br>
[zelda01.localdomain:20455] tmp: /tmp
<br>
[zelda01.localdomain:20455] [0,0,0] contact_file
<br>
/tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe-20455/
<br>
universe-setup.txt
<br>
[zelda01.localdomain:20455] [0,0,0] wrote setup file
<br>
[zelda01.localdomain:20455] pls:rsh: local csh: 0, local bash: 1
<br>
[zelda01.localdomain:20455] pls:rsh: assuming same remote shell as local
<br>
shell
<br>
[zelda01.localdomain:20455] pls:rsh: remote csh: 0, remote bash: 1
<br>
[zelda01.localdomain:20455] pls:rsh: final template argv:
<br>
[zelda01.localdomain:20455] pls:rsh:     ssh &lt;template&gt; orted --debug
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
<br>
&lt;template&gt; --universe humphrey_at_zelda01.localdomain:default-universe-20455
<br>
--nsreplica
<br>
&quot;0.0.0;tcp://130.207.252.131:35465;tcp://10.0.0.11:35465;tcp://130.207.252.1
<br>
31:35465&quot; --gprreplica
<br>
&quot;0.0.0;tcp://130.207.252.131:35465;tcp://10.0.0.11:35465;tcp://130.207.252.1
<br>
31:35465&quot; --mpi-call-yield 0
<br>
[zelda01.localdomain:20455] pls:rsh: launching on node localhost
<br>
[zelda01.localdomain:20455] pls:rsh: oversubscribed -- setting
<br>
mpi_yield_when_idle to 1 (1 2)
<br>
[zelda01.localdomain:20455] pls:rsh: localhost is a LOCAL node
<br>
[zelda01.localdomain:20455] pls:rsh: executing: orted --debug --bootproxy 1
<br>
--name 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost --universe
<br>
humphrey_at_zelda01.localdomain:default-universe-20455 --nsreplica
<br>
&quot;0.0.0;tcp://130.207.252.131:35465;tcp://10.0.0.11:35465;tcp://130.207.252.1
<br>
31:35465&quot; --gprreplica
<br>
&quot;0.0.0;tcp://130.207.252.131:35465;tcp://10.0.0.11:35465;tcp://130.207.252.1
<br>
31:35465&quot; --mpi-call-yield 1
<br>
[zelda01.localdomain:20456] [0,0,1] setting up session dir with
<br>
[zelda01.localdomain:20456]     universe default-universe-20455
<br>
[zelda01.localdomain:20456]     user humphrey
<br>
[zelda01.localdomain:20456]     host localhost
<br>
[zelda01.localdomain:20456]     jobid 0
<br>
[zelda01.localdomain:20456]     procid 1
<br>
[zelda01.localdomain:20456] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/0/1
<br>
[zelda01.localdomain:20456] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/0
<br>
[zelda01.localdomain:20456] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455
<br>
[zelda01.localdomain:20456] top: openmpi-sessions-humphrey_at_localhost_0
<br>
[zelda01.localdomain:20456] tmp: /tmp
<br>
[zelda01.localdomain:20457] [0,1,1] setting up session dir with
<br>
[zelda01.localdomain:20457]     universe default-universe-20455
<br>
[zelda01.localdomain:20457]     user humphrey
<br>
[zelda01.localdomain:20457]     host localhost
<br>
[zelda01.localdomain:20457]     jobid 1
<br>
[zelda01.localdomain:20457]     procid 1
<br>
[zelda01.localdomain:20457] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/1/1
<br>
[zelda01.localdomain:20457] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/1
<br>
[zelda01.localdomain:20457] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455
<br>
[zelda01.localdomain:20457] top: openmpi-sessions-humphrey_at_localhost_0
<br>
[zelda01.localdomain:20457] tmp: /tmp
<br>
[zelda01.localdomain:20458] [0,1,0] setting up session dir with
<br>
[zelda01.localdomain:20458]     universe default-universe-20455
<br>
[zelda01.localdomain:20458]     user humphrey
<br>
[zelda01.localdomain:20458]     host localhost
<br>
[zelda01.localdomain:20458]     jobid 1
<br>
[zelda01.localdomain:20458]     procid 0
<br>
[zelda01.localdomain:20458] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/1/0
<br>
[zelda01.localdomain:20458] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/1
<br>
[zelda01.localdomain:20458] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455
<br>
[zelda01.localdomain:20458] top: openmpi-sessions-humphrey_at_localhost_0
<br>
[zelda01.localdomain:20458] tmp: /tmp
<br>
[zelda01.localdomain:20455] spawn: in job_state_callback(jobid = 1, state =
<br>
0x3)
<br>
[zelda01.localdomain:20455] Info: Setting up debugger process table for
<br>
applications
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
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, localhost, /home/humphrey/a.out, 20457)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, localhost, /home/humphrey/a.out, 20458)
<br>
[zelda01.localdomain:20455] spawn: in job_state_callback(jobid = 1, state =
<br>
0x4)
<br>
[zelda01.localdomain:20458] [0,1,0] ompi_mpi_init completed
<br>
[zelda01.localdomain:20457] [0,1,1] ompi_mpi_init completed
<br>
<p>&nbsp;2 PE'S AS A  2 BY  1 GRID
<br>
------ end hanging invocation  -----
<br>
<p>Here's the 1-in-approximately-20 that started working...
<br>
<p>------- begin non-hanging invocation -----
<br>
[humphrey_at_zelda01 humphrey]$ mpiexec -d --mca btl_tcp_if_include eth0  -np 2
<br>
a.out
<br>
[zelda01.localdomain:20659] procdir: (null)
<br>
[zelda01.localdomain:20659] jobdir: (null)
<br>
[zelda01.localdomain:20659] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
<br>
[zelda01.localdomain:20659] top:
<br>
openmpi-sessions-humphrey_at_zelda01.localdomain_0
<br>
[zelda01.localdomain:20659] tmp: /tmp
<br>
[zelda01.localdomain:20659] connect_uni: contact info read
<br>
[zelda01.localdomain:20659] connect_uni: connection not allowed
<br>
[zelda01.localdomain:20659] [0,0,0] setting up session dir with
<br>
[zelda01.localdomain:20659]     tmpdir /tmp
<br>
[zelda01.localdomain:20659]     universe default-universe-20659
<br>
[zelda01.localdomain:20659]     user humphrey
<br>
[zelda01.localdomain:20659]     host zelda01.localdomain
<br>
[zelda01.localdomain:20659]     jobid 0
<br>
[zelda01.localdomain:20659]     procid 0
<br>
[zelda01.localdomain:20659] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe-20659/
<br>
0/0
<br>
[zelda01.localdomain:20659] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe-20659/
<br>
0
<br>
[zelda01.localdomain:20659] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe-20659
<br>
[zelda01.localdomain:20659] top:
<br>
openmpi-sessions-humphrey_at_zelda01.localdomain_0
<br>
[zelda01.localdomain:20659] tmp: /tmp
<br>
[zelda01.localdomain:20659] [0,0,0] contact_file
<br>
/tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe-20659/
<br>
universe-setup.txt
<br>
[zelda01.localdomain:20659] [0,0,0] wrote setup file
<br>
[zelda01.localdomain:20659] pls:rsh: local csh: 0, local bash: 1
<br>
[zelda01.localdomain:20659] pls:rsh: assuming same remote shell as local
<br>
shell
<br>
[zelda01.localdomain:20659] pls:rsh: remote csh: 0, remote bash: 1
<br>
[zelda01.localdomain:20659] pls:rsh: final template argv:
<br>
[zelda01.localdomain:20659] pls:rsh:     ssh &lt;template&gt; orted --debug
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
<br>
&lt;template&gt; --universe humphrey_at_zelda01.localdomain:default-universe-20659
<br>
--nsreplica
<br>
&quot;0.0.0;tcp://130.207.252.131:35654;tcp://10.0.0.11:35654;tcp://130.207.252.1
<br>
31:35654&quot; --gprreplica
<br>
&quot;0.0.0;tcp://130.207.252.131:35654;tcp://10.0.0.11:35654;tcp://130.207.252.1
<br>
31:35654&quot; --mpi-call-yield 0
<br>
[zelda01.localdomain:20659] pls:rsh: launching on node localhost
<br>
[zelda01.localdomain:20659] pls:rsh: oversubscribed -- setting
<br>
mpi_yield_when_idle to 1 (1 2)
<br>
[zelda01.localdomain:20659] pls:rsh: localhost is a LOCAL node
<br>
[zelda01.localdomain:20659] pls:rsh: executing: orted --debug --bootproxy 1
<br>
--name 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost --universe
<br>
humphrey_at_zelda01.localdomain:default-universe-20659 --nsreplica
<br>
&quot;0.0.0;tcp://130.207.252.131:35654;tcp://10.0.0.11:35654;tcp://130.207.252.1
<br>
31:35654&quot; --gprreplica
<br>
&quot;0.0.0;tcp://130.207.252.131:35654;tcp://10.0.0.11:35654;tcp://130.207.252.1
<br>
31:35654&quot; --mpi-call-yield 1
<br>
[zelda01.localdomain:20660] [0,0,1] setting up session dir with
<br>
[zelda01.localdomain:20660]     universe default-universe-20659
<br>
[zelda01.localdomain:20660]     user humphrey
<br>
[zelda01.localdomain:20660]     host localhost
<br>
[zelda01.localdomain:20660]     jobid 0
<br>
[zelda01.localdomain:20660]     procid 1
<br>
[zelda01.localdomain:20660] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/0/1
<br>
[zelda01.localdomain:20660] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/0
<br>
[zelda01.localdomain:20660] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659
<br>
[zelda01.localdomain:20660] top: openmpi-sessions-humphrey_at_localhost_0
<br>
[zelda01.localdomain:20660] tmp: /tmp
<br>
[zelda01.localdomain:20661] [0,1,1] setting up session dir with
<br>
[zelda01.localdomain:20661]     universe default-universe-20659
<br>
[zelda01.localdomain:20661]     user humphrey
<br>
[zelda01.localdomain:20661]     host localhost
<br>
[zelda01.localdomain:20661]     jobid 1
<br>
[zelda01.localdomain:20661]     procid 1
<br>
[zelda01.localdomain:20661] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/1/1
<br>
[zelda01.localdomain:20661] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/1
<br>
[zelda01.localdomain:20661] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659
<br>
[zelda01.localdomain:20661] top: openmpi-sessions-humphrey_at_localhost_0
<br>
[zelda01.localdomain:20661] tmp: /tmp
<br>
[zelda01.localdomain:20662] [0,1,0] setting up session dir with
<br>
[zelda01.localdomain:20662]     universe default-universe-20659
<br>
[zelda01.localdomain:20662]     user humphrey
<br>
[zelda01.localdomain:20662]     host localhost
<br>
[zelda01.localdomain:20662]     jobid 1
<br>
[zelda01.localdomain:20662]     procid 0
<br>
[zelda01.localdomain:20662] procdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/1/0
<br>
[zelda01.localdomain:20662] jobdir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/1
<br>
[zelda01.localdomain:20662] unidir:
<br>
/tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659
<br>
[zelda01.localdomain:20662] top: openmpi-sessions-humphrey_at_localhost_0
<br>
[zelda01.localdomain:20662] tmp: /tmp
<br>
[zelda01.localdomain:20659] spawn: in job_state_callback(jobid = 1, state =
<br>
0x3)
<br>
[zelda01.localdomain:20659] Info: Setting up debugger process table for
<br>
applications
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
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, localhost, /home/humphrey/a.out, 20661)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, localhost, /home/humphrey/a.out, 20662)
<br>
[zelda01.localdomain:20659] spawn: in job_state_callback(jobid = 1, state =
<br>
0x4)
<br>
[zelda01.localdomain:20662] [0,1,0] ompi_mpi_init completed
<br>
[zelda01.localdomain:20661] [0,1,1] ompi_mpi_init completed
<br>
<p>&nbsp;2 PE'S AS A  2 BY  1 GRID
<br>
<p>&nbsp;&nbsp;HALO2A  NPES,N =  2    2  TIME =  0.000007 SECONDS
<br>
&nbsp;&nbsp;HALO2A  NPES,N =  2    4  TIME =  0.000007 SECONDS
<br>
&nbsp;&nbsp;HALO2A  NPES,N =  2    8  TIME =  0.000007 SECONDS
<br>
&nbsp;&nbsp;HALO2A  NPES,N =  2   16  TIME =  0.000008 SECONDS
<br>
&nbsp;&nbsp;HALO2A  NPES,N =  2   32  TIME =  0.000009 SECONDS
<br>
&nbsp;&nbsp;HALO2A  NPES,N =  2   64  TIME =  0.000011 SECONDS
<br>
mpiexec: killing job...
<br>
Interrupt
<br>
Interrupt
<br>
[zelda01.localdomain:20660] sess_dir_finalize: found proc session dir empty
<br>
- deleting
<br>
[zelda01.localdomain:20660] sess_dir_finalize: job session dir not empty -
<br>
leaving
<br>
[zelda01.localdomain:20660] sess_dir_finalize: found proc session dir empty
<br>
- deleting
<br>
[zelda01.localdomain:20660] sess_dir_finalize: found job session dir empty -
<br>
deleting
<br>
[zelda01.localdomain:20660] sess_dir_finalize: univ session dir not empty -
<br>
leaving
<br>
[zelda01.localdomain:20659] spawn: in job_state_callback(jobid = 1, state =
<br>
0xa)
<br>
[zelda01.localdomain:20660] orted: job_state_callback(jobid = 1, state =
<br>
ORTE_PROC_STATE_ABORTED)
<br>
[zelda01.localdomain:20659] spawn: in job_state_callback(jobid = 1, state =
<br>
0x9)
<br>
2 processes killed (possibly by Open MPI)
<br>
[zelda01.localdomain:20660] orted: job_state_callback(jobid = 1, state =
<br>
ORTE_PROC_STATE_TERMINATED)
<br>
[zelda01.localdomain:20660] sess_dir_finalize: found proc session dir empty
<br>
- deleting
<br>
[zelda01.localdomain:20660] sess_dir_finalize: found job session dir empty -
<br>
deleting
<br>
[zelda01.localdomain:20660] sess_dir_finalize: found univ session dir empty
<br>
- deleting
<br>
[zelda01.localdomain:20660] sess_dir_finalize: found top session dir empty -
<br>
deleting
<br>
[zelda01.localdomain:20659] sess_dir_finalize: found proc session dir empty
<br>
- deleting
<br>
[zelda01.localdomain:20659] sess_dir_finalize: found job session dir empty -
<br>
deleting
<br>
[zelda01.localdomain:20659] sess_dir_finalize: found univ session dir empty
<br>
- deleting
<br>
[zelda01.localdomain:20659] sess_dir_finalize: top session dir not empty -
<br>
leaving
<br>
[humphrey_at_zelda01 humphrey]$
<br>
-------- end non-hanging invocation ------
<br>
<p>Any thoughts?
<br>
<p>-- Marty
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 01, 2005 2:17 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] can't get openmpi to run across two multi-
</span><br>
<span class="quotelev1">&gt; NICmachines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 1, 2005, at 12:02 PM, Marty Humphrey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; wukong: eth0 (152.48.249.102, no MPI traffic), eth1 (128.109.34.20,yes
</span><br>
<span class="quotelev2">&gt; &gt; MPI
</span><br>
<span class="quotelev2">&gt; &gt; traffic)
</span><br>
<span class="quotelev2">&gt; &gt; zelda01: eth0 (130.207.252.131, yes MPI traffic), eth2 (10.0.0.12, no
</span><br>
<span class="quotelev2">&gt; &gt; MPI
</span><br>
<span class="quotelev2">&gt; &gt; traffic)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; on wukong, I have :
</span><br>
<span class="quotelev2">&gt; &gt; [humphrey_at_wukong ~]$ more ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev2">&gt; &gt; btl_tcp_if_include=eth1
</span><br>
<span class="quotelev2">&gt; &gt; on zelda01, I have :
</span><br>
<span class="quotelev2">&gt; &gt; [humphrey_at_zelda01 humphrey]$ more ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev2">&gt; &gt; btl_tcp_if_include=eth0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to make sure I'm reading this right -- 128.109.34.20 is supposed
</span><br>
<span class="quotelev1">&gt; to be routable to 130.207.252.131, right?  Can you ssh directly from
</span><br>
<span class="quotelev1">&gt; one machine to the other?  (I'm guessing that you can because OMPI was
</span><br>
<span class="quotelev1">&gt; able to start processes)  Can you ping one machine from the other?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most importantly -- can you open arbitrary TCP ports between the two
</span><br>
<span class="quotelev1">&gt; machines?  (i.e., not just well-known ports like 22 [ssh], etc.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="0293.php">Jeff Squyres: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Previous message:</strong> <a href="0291.php">George Bosilca: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>In reply to:</strong> <a href="0272.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NIC machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0300.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<li><strong>Reply:</strong> <a href="0300.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
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
