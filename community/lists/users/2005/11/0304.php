<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 10 08:50:28 2005" -->
<!-- isoreceived="20051110135028" -->
<!-- sent="Thu, 10 Nov 2005 08:50:14 -0500" -->
<!-- isosent="20051110135014" -->
<!-- name="Marty Humphrey" -->
<!-- email="humphrey_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines" -->
<!-- id="009f01c5e5fd$adb6c490$3f898f80_at_Roger2" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="526fc36da0507a81f1a2ddcd5c996dc1_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-11-10 08:50:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0305.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
<li><strong>Previous message:</strong> <a href="0303.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<li><strong>In reply to:</strong> <a href="0300.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0305.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not seeing any cores -- I'll see if there's anything stopping them from
<br>
being produced.
<br>
<p>I've attached to one of the hanging &quot;a.out&quot;s (this is with the &quot;mpiexec&quot;
<br>
invocation that includes &quot;--mca oob_tcp_include eth0&quot;)
<br>
<p>(gdb) bt
<br>
#0  0x001e3007 in sched_yield () from /lib/tls/libc.so.6
<br>
#1  0x00512b55 in opal_progress () at runtime/opal_progress.c:306
<br>
#2  0x00298f57 in opal_condition_wait (c=0xbf5120, m=0xbf5180) at
<br>
../../../../opal/threads/condition.h:74
<br>
#3  0x00298877 in mca_pml_ob1_recv (addr=0x0, count=0, datatype=0xbe8ce0,
<br>
src=-1, tag=-16, comm=0xbf0440, status=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pml_ob1_irecv.c:102
<br>
#4  0x002b7ff2 in mca_coll_basic_barrier_intra_lin (comm=0xbf0440) at
<br>
coll_basic_barrier.c:70
<br>
#5  0x00b4dbfa in PMPI_Barrier (comm=0xbf0440) at pbarrier.c:52
<br>
#6  0x00b8d257 in mpi_barrier_f (comm=0x804b92c, ierr=0x8052580) at
<br>
pbarrier_f.c:66
<br>
#7  0x080494a8 in MAIN__ () at Halo.f:32
<br>
#8  0x0804b7e6 in main ()
<br>
(gdb) up
<br>
#1  0x00512b55 in opal_progress () at runtime/opal_progress.c:306
<br>
306             sched_yield();
<br>
(gdb) up
<br>
#2  0x00298f57 in opal_condition_wait (c=0xbf5120, m=0xbf5180) at
<br>
../../../../opal/threads/condition.h:74
<br>
74                  opal_progress();
<br>
(gdb) up
<br>
#3  0x00298877 in mca_pml_ob1_recv (addr=0x0, count=0, datatype=0xbe8ce0,
<br>
src=-1, tag=-16, comm=0xbf0440, status=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pml_ob1_irecv.c:102
<br>
102                     opal_condition_wait(&amp;ompi_request_cond,
<br>
&amp;ompi_request_lock);
<br>
(gdb) up
<br>
#4  0x002b7ff2 in mca_coll_basic_barrier_intra_lin (comm=0xbf0440) at
<br>
coll_basic_barrier.c:70
<br>
70                  err = MCA_PML_CALL(recv(NULL, 0, MPI_BYTE,
<br>
MPI_ANY_SOURCE,
<br>
(gdb) up
<br>
#5  0x00b4dbfa in PMPI_Barrier (comm=0xbf0440) at pbarrier.c:52
<br>
52            err = comm-&gt;c_coll.coll_barrier(comm);
<br>
(gdb) up
<br>
#6  0x00b8d257 in mpi_barrier_f (comm=0x804b92c, ierr=0x8052580) at
<br>
pbarrier_f.c:66
<br>
66          *ierr = OMPI_INT_2_FINT(MPI_Barrier(c_comm));
<br>
(gdb) up
<br>
#7  0x080494a8 in MAIN__ () at Halo.f:32
<br>
32            CALL MPI_BARRIER(MPI_COMM_WORLD,MPIERR)
<br>
Current language:  auto; currently fortran
<br>
(gdb)
<br>
<p><p>Does this help? (By the way, I've upgraded to &quot;openmpi-1.1a1r8084&quot; before
<br>
running this experiment).
<br>
<p>Thanks for your help,
<br>
Marty
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, November 09, 2005 10:41 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] can't get openmpi to run across twomulti-
</span><br>
<span class="quotelev1">&gt; NICmachines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in replying -- it's a crazy week here preparing for
</span><br>
<span class="quotelev1">&gt; SC next week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm double checking the code, and I don't see any obvious problems with
</span><br>
<span class="quotelev1">&gt; the btl tcp include stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you also specify that you want OMPI's &quot;out of band&quot; communication
</span><br>
<span class="quotelev1">&gt; to use a specific network?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -d --mca btl_tcp_if_include eth0 --mca oob_tcp_include eth0
</span><br>
<span class="quotelev2">&gt; &gt; -np 2 a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the segv's, do you get meaningful core dumps?  Can you send
</span><br>
<span class="quotelev1">&gt; backtraces?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2005, at 3:02 PM, Marty Humphrey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's taken me a while, but I've simplified the experiment...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In a nutshell, I'm seeing strange behavior in my multi-NIC box when I
</span><br>
<span class="quotelev2">&gt; &gt; attempt to execute &quot; mpiexec -d --mca btl_tcp_if_include eth0  -np 2
</span><br>
<span class="quotelev2">&gt; &gt; a.out&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; I have three different observed behaviors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [1] mpi worker rank 0 displays the banner and then just hangs
</span><br>
<span class="quotelev2">&gt; &gt; (apparently
</span><br>
<span class="quotelev2">&gt; &gt; trying to exchange MPI messages, which don't get delivered)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2 PE'S AS A  2 BY  1 GRID
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [2] it starts progressing (spitting out domain-specific msgs):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2 PE'S AS A  2 BY  1 GRID
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   HALO2A  NPES,N =  2    2  TIME =  0.000007 SECONDS
</span><br>
<span class="quotelev2">&gt; &gt;   HALO2A  NPES,N =  2    4  TIME =  0.000007 SECONDS
</span><br>
<span class="quotelev2">&gt; &gt;   HALO2A  NPES,N =  2    8  TIME =  0.000007 SECONDS
</span><br>
<span class="quotelev2">&gt; &gt;   HALO2A  NPES,N =  2   16  TIME =  0.000008 SECONDS
</span><br>
<span class="quotelev2">&gt; &gt;   HALO2A  NPES,N =  2   32  TIME =  0.000009 SECONDS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [3] I get failure pretty quickly, with the line &quot; mpiexec noticed that
</span><br>
<span class="quotelev2">&gt; &gt; job
</span><br>
<span class="quotelev2">&gt; &gt; rank 1 with PID 20425 on node &quot;localhost&quot; exited on signal 11.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's the output of &quot;ifconfig&quot;:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [humphrey_at_zelda01 humphrey]$ /sbin/ifconfig
</span><br>
<span class="quotelev2">&gt; &gt; eth0      Link encap:Ethernet  HWaddr 00:11:43:DC:EA:EE
</span><br>
<span class="quotelev2">&gt; &gt;           inet addr:130.207.252.131  Bcast:130.207.252.255
</span><br>
<span class="quotelev2">&gt; &gt; Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:2441905 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:112786 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:197322445 (188.1 Mb)  TX bytes:32906750 (31.3 Mb)
</span><br>
<span class="quotelev2">&gt; &gt;           Base address:0xecc0 Memory:dfae0000-dfb00000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; eth2      Link encap:Ethernet  HWaddr 00:11:95:C7:28:82
</span><br>
<span class="quotelev2">&gt; &gt;           inet addr:10.0.0.11  Bcast:10.0.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt; &gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:11598757 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:7224590 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:3491651158 (3329.8 Mb)  TX bytes:1916674000 (1827.8
</span><br>
<span class="quotelev2">&gt; &gt; Mb)
</span><br>
<span class="quotelev2">&gt; &gt;           Interrupt:77 Base address:0xcc00
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ipsec0    Link encap:Ethernet  HWaddr 00:11:43:DC:EA:EE
</span><br>
<span class="quotelev2">&gt; &gt;           inet addr:130.207.252.131  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt; &gt;           UP RUNNING NOARP  MTU:16260  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:40113 errors:0 dropped:40113 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:10
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt; &gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt; &gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt; &gt;           RX packets:4742 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt; &gt;           TX packets:4742 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt; &gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt; &gt;           RX bytes:2369841 (2.2 Mb)  TX bytes:2369841 (2.2 Mb)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is with openmpi-1.1a1r8038 .
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is the output of a hanging invocation....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- begin hanging invocation ----
</span><br>
<span class="quotelev2">&gt; &gt; [humphrey_at_zelda01 humphrey]$ mpiexec -d --mca btl_tcp_if_include eth0
</span><br>
<span class="quotelev2">&gt; &gt; -np 2
</span><br>
<span class="quotelev2">&gt; &gt; a.out
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] procdir: (null)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] jobdir: (null)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] top:
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-sessions-humphrey_at_zelda01.localdomain_0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] connect_uni: contact info read
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455]     tmpdir /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455]     universe default-universe-20455
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455]     user humphrey
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455]     host zelda01.localdomain
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455]     jobid 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455]     procid 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] procdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; -20455/
</span><br>
<span class="quotelev2">&gt; &gt; 0/0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] jobdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; -20455/
</span><br>
<span class="quotelev2">&gt; &gt; 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; -20455
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] top:
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-sessions-humphrey_at_zelda01.localdomain_0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] [0,0,0] contact_file
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; -20455/
</span><br>
<span class="quotelev2">&gt; &gt; universe-setup.txt
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] [0,0,0] wrote setup file
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] pls:rsh: assuming same remote shell as
</span><br>
<span class="quotelev2">&gt; &gt; local
</span><br>
<span class="quotelev2">&gt; &gt; shell
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] pls:rsh: final template argv:
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] pls:rsh:     ssh &lt;template&gt; orted --debug
</span><br>
<span class="quotelev2">&gt; &gt; --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev2">&gt; &gt; &lt;template&gt; --universe
</span><br>
<span class="quotelev2">&gt; &gt; humphrey_at_zelda01.localdomain:default-universe-20455
</span><br>
<span class="quotelev2">&gt; &gt; --nsreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://130.207.252.131:35465;tcp://10.0.0.11:35465;tcp://
</span><br>
<span class="quotelev2">&gt; &gt; 130.207.252.1
</span><br>
<span class="quotelev2">&gt; &gt; 31:35465&quot; --gprreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://130.207.252.131:35465;tcp://10.0.0.11:35465;tcp://
</span><br>
<span class="quotelev2">&gt; &gt; 130.207.252.1
</span><br>
<span class="quotelev2">&gt; &gt; 31:35465&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] pls:rsh: oversubscribed -- setting
</span><br>
<span class="quotelev2">&gt; &gt; mpi_yield_when_idle to 1 (1 2)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] pls:rsh: executing: orted --debug
</span><br>
<span class="quotelev2">&gt; &gt; --bootproxy 1
</span><br>
<span class="quotelev2">&gt; &gt; --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost
</span><br>
<span class="quotelev2">&gt; &gt; --universe
</span><br>
<span class="quotelev2">&gt; &gt; humphrey_at_zelda01.localdomain:default-universe-20455 --nsreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://130.207.252.131:35465;tcp://10.0.0.11:35465;tcp://
</span><br>
<span class="quotelev2">&gt; &gt; 130.207.252.1
</span><br>
<span class="quotelev2">&gt; &gt; 31:35465&quot; --gprreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://130.207.252.131:35465;tcp://10.0.0.11:35465;tcp://
</span><br>
<span class="quotelev2">&gt; &gt; 130.207.252.1
</span><br>
<span class="quotelev2">&gt; &gt; 31:35465&quot; --mpi-call-yield 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20456] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20456]     universe default-universe-20455
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20456]     user humphrey
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20456]     host localhost
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20456]     jobid 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20456]     procid 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20456] procdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/0/1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20456] jobdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20456] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20456] top: openmpi-sessions-humphrey_at_localhost_0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20456] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457]     universe default-universe-20455
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457]     user humphrey
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457]     host localhost
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457]     jobid 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457]     procid 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457] procdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/1/1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457] jobdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457] top: openmpi-sessions-humphrey_at_localhost_0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458]     universe default-universe-20455
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458]     user humphrey
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458]     host localhost
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458]     jobid 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458]     procid 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458] procdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/1/0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458] jobdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455/1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20455
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458] top: openmpi-sessions-humphrey_at_localhost_0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] spawn: in job_state_callback(jobid = 1,
</span><br>
<span class="quotelev2">&gt; &gt; state =
</span><br>
<span class="quotelev2">&gt; &gt; 0x3)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] Info: Setting up debugger process table for
</span><br>
<span class="quotelev2">&gt; &gt; applications
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_debug_gate = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_proctable:
</span><br>
<span class="quotelev2">&gt; &gt;     (i, host, exe, pid) = (0, localhost, /home/humphrey/a.out, 20457)
</span><br>
<span class="quotelev2">&gt; &gt;     (i, host, exe, pid) = (1, localhost, /home/humphrey/a.out, 20458)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20455] spawn: in job_state_callback(jobid = 1,
</span><br>
<span class="quotelev2">&gt; &gt; state =
</span><br>
<span class="quotelev2">&gt; &gt; 0x4)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20458] [0,1,0] ompi_mpi_init completed
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20457] [0,1,1] ompi_mpi_init completed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  2 PE'S AS A  2 BY  1 GRID
</span><br>
<span class="quotelev2">&gt; &gt; ------ end hanging invocation  -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's the 1-in-approximately-20 that started working...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------- begin non-hanging invocation -----
</span><br>
<span class="quotelev2">&gt; &gt; [humphrey_at_zelda01 humphrey]$ mpiexec -d --mca btl_tcp_if_include eth0
</span><br>
<span class="quotelev2">&gt; &gt; -np 2
</span><br>
<span class="quotelev2">&gt; &gt; a.out
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] procdir: (null)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] jobdir: (null)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] top:
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-sessions-humphrey_at_zelda01.localdomain_0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] connect_uni: contact info read
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] connect_uni: connection not allowed
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659]     tmpdir /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659]     universe default-universe-20659
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659]     user humphrey
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659]     host zelda01.localdomain
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659]     jobid 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659]     procid 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] procdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; -20659/
</span><br>
<span class="quotelev2">&gt; &gt; 0/0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] jobdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; -20659/
</span><br>
<span class="quotelev2">&gt; &gt; 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; -20659
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] top:
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-sessions-humphrey_at_zelda01.localdomain_0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] [0,0,0] contact_file
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_zelda01.localdomain_0/default-universe
</span><br>
<span class="quotelev2">&gt; &gt; -20659/
</span><br>
<span class="quotelev2">&gt; &gt; universe-setup.txt
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] [0,0,0] wrote setup file
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] pls:rsh: assuming same remote shell as
</span><br>
<span class="quotelev2">&gt; &gt; local
</span><br>
<span class="quotelev2">&gt; &gt; shell
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] pls:rsh: final template argv:
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] pls:rsh:     ssh &lt;template&gt; orted --debug
</span><br>
<span class="quotelev2">&gt; &gt; --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev2">&gt; &gt; &lt;template&gt; --universe
</span><br>
<span class="quotelev2">&gt; &gt; humphrey_at_zelda01.localdomain:default-universe-20659
</span><br>
<span class="quotelev2">&gt; &gt; --nsreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://130.207.252.131:35654;tcp://10.0.0.11:35654;tcp://
</span><br>
<span class="quotelev2">&gt; &gt; 130.207.252.1
</span><br>
<span class="quotelev2">&gt; &gt; 31:35654&quot; --gprreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://130.207.252.131:35654;tcp://10.0.0.11:35654;tcp://
</span><br>
<span class="quotelev2">&gt; &gt; 130.207.252.1
</span><br>
<span class="quotelev2">&gt; &gt; 31:35654&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] pls:rsh: oversubscribed -- setting
</span><br>
<span class="quotelev2">&gt; &gt; mpi_yield_when_idle to 1 (1 2)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] pls:rsh: executing: orted --debug
</span><br>
<span class="quotelev2">&gt; &gt; --bootproxy 1
</span><br>
<span class="quotelev2">&gt; &gt; --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost
</span><br>
<span class="quotelev2">&gt; &gt; --universe
</span><br>
<span class="quotelev2">&gt; &gt; humphrey_at_zelda01.localdomain:default-universe-20659 --nsreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://130.207.252.131:35654;tcp://10.0.0.11:35654;tcp://
</span><br>
<span class="quotelev2">&gt; &gt; 130.207.252.1
</span><br>
<span class="quotelev2">&gt; &gt; 31:35654&quot; --gprreplica
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0.0.0;tcp://130.207.252.131:35654;tcp://10.0.0.11:35654;tcp://
</span><br>
<span class="quotelev2">&gt; &gt; 130.207.252.1
</span><br>
<span class="quotelev2">&gt; &gt; 31:35654&quot; --mpi-call-yield 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660]     universe default-universe-20659
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660]     user humphrey
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660]     host localhost
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660]     jobid 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660]     procid 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] procdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/0/1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] jobdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] top: openmpi-sessions-humphrey_at_localhost_0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661]     universe default-universe-20659
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661]     user humphrey
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661]     host localhost
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661]     jobid 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661]     procid 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661] procdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/1/1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661] jobdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661] top: openmpi-sessions-humphrey_at_localhost_0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662]     universe default-universe-20659
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662]     user humphrey
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662]     host localhost
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662]     jobid 1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662]     procid 0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662] procdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/1/0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662] jobdir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659/1
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662] unidir:
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/openmpi-sessions-humphrey_at_localhost_0/default-universe-20659
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662] top: openmpi-sessions-humphrey_at_localhost_0
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662] tmp: /tmp
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] spawn: in job_state_callback(jobid = 1,
</span><br>
<span class="quotelev2">&gt; &gt; state =
</span><br>
<span class="quotelev2">&gt; &gt; 0x3)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] Info: Setting up debugger process table for
</span><br>
<span class="quotelev2">&gt; &gt; applications
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_debug_gate = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev2">&gt; &gt;   MPIR_proctable:
</span><br>
<span class="quotelev2">&gt; &gt;     (i, host, exe, pid) = (0, localhost, /home/humphrey/a.out, 20661)
</span><br>
<span class="quotelev2">&gt; &gt;     (i, host, exe, pid) = (1, localhost, /home/humphrey/a.out, 20662)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] spawn: in job_state_callback(jobid = 1,
</span><br>
<span class="quotelev2">&gt; &gt; state =
</span><br>
<span class="quotelev2">&gt; &gt; 0x4)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20662] [0,1,0] ompi_mpi_init completed
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20661] [0,1,1] ompi_mpi_init completed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  2 PE'S AS A  2 BY  1 GRID
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   HALO2A  NPES,N =  2    2  TIME =  0.000007 SECONDS
</span><br>
<span class="quotelev2">&gt; &gt;   HALO2A  NPES,N =  2    4  TIME =  0.000007 SECONDS
</span><br>
<span class="quotelev2">&gt; &gt;   HALO2A  NPES,N =  2    8  TIME =  0.000007 SECONDS
</span><br>
<span class="quotelev2">&gt; &gt;   HALO2A  NPES,N =  2   16  TIME =  0.000008 SECONDS
</span><br>
<span class="quotelev2">&gt; &gt;   HALO2A  NPES,N =  2   32  TIME =  0.000009 SECONDS
</span><br>
<span class="quotelev2">&gt; &gt;   HALO2A  NPES,N =  2   64  TIME =  0.000011 SECONDS
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec: killing job...
</span><br>
<span class="quotelev2">&gt; &gt; Interrupt
</span><br>
<span class="quotelev2">&gt; &gt; Interrupt
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] sess_dir_finalize: found proc session dir
</span><br>
<span class="quotelev2">&gt; &gt; empty
</span><br>
<span class="quotelev2">&gt; &gt; - deleting
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] sess_dir_finalize: job session dir not
</span><br>
<span class="quotelev2">&gt; &gt; empty -
</span><br>
<span class="quotelev2">&gt; &gt; leaving
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] sess_dir_finalize: found proc session dir
</span><br>
<span class="quotelev2">&gt; &gt; empty
</span><br>
<span class="quotelev2">&gt; &gt; - deleting
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] sess_dir_finalize: found job session dir
</span><br>
<span class="quotelev2">&gt; &gt; empty -
</span><br>
<span class="quotelev2">&gt; &gt; deleting
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] sess_dir_finalize: univ session dir not
</span><br>
<span class="quotelev2">&gt; &gt; empty -
</span><br>
<span class="quotelev2">&gt; &gt; leaving
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] spawn: in job_state_callback(jobid = 1,
</span><br>
<span class="quotelev2">&gt; &gt; state =
</span><br>
<span class="quotelev2">&gt; &gt; 0xa)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] orted: job_state_callback(jobid = 1, state
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_PROC_STATE_ABORTED)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] spawn: in job_state_callback(jobid = 1,
</span><br>
<span class="quotelev2">&gt; &gt; state =
</span><br>
<span class="quotelev2">&gt; &gt; 0x9)
</span><br>
<span class="quotelev2">&gt; &gt; 2 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] orted: job_state_callback(jobid = 1, state
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ORTE_PROC_STATE_TERMINATED)
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] sess_dir_finalize: found proc session dir
</span><br>
<span class="quotelev2">&gt; &gt; empty
</span><br>
<span class="quotelev2">&gt; &gt; - deleting
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] sess_dir_finalize: found job session dir
</span><br>
<span class="quotelev2">&gt; &gt; empty -
</span><br>
<span class="quotelev2">&gt; &gt; deleting
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] sess_dir_finalize: found univ session dir
</span><br>
<span class="quotelev2">&gt; &gt; empty
</span><br>
<span class="quotelev2">&gt; &gt; - deleting
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20660] sess_dir_finalize: found top session dir
</span><br>
<span class="quotelev2">&gt; &gt; empty -
</span><br>
<span class="quotelev2">&gt; &gt; deleting
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] sess_dir_finalize: found proc session dir
</span><br>
<span class="quotelev2">&gt; &gt; empty
</span><br>
<span class="quotelev2">&gt; &gt; - deleting
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] sess_dir_finalize: found job session dir
</span><br>
<span class="quotelev2">&gt; &gt; empty -
</span><br>
<span class="quotelev2">&gt; &gt; deleting
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] sess_dir_finalize: found univ session dir
</span><br>
<span class="quotelev2">&gt; &gt; empty
</span><br>
<span class="quotelev2">&gt; &gt; - deleting
</span><br>
<span class="quotelev2">&gt; &gt; [zelda01.localdomain:20659] sess_dir_finalize: top session dir not
</span><br>
<span class="quotelev2">&gt; &gt; empty -
</span><br>
<span class="quotelev2">&gt; &gt; leaving
</span><br>
<span class="quotelev2">&gt; &gt; [humphrey_at_zelda01 humphrey]$
</span><br>
<span class="quotelev2">&gt; &gt; -------- end non-hanging invocation ------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any thoughts?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Marty
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Tuesday, November 01, 2005 2:17 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [O-MPI users] can't get openmpi to run across two multi-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NICmachines
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Nov 1, 2005, at 12:02 PM, Marty Humphrey wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wukong: eth0 (152.48.249.102, no MPI traffic), eth1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (128.109.34.20,yes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; traffic)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; zelda01: eth0 (130.207.252.131, yes MPI traffic), eth2 (10.0.0.12, no
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; traffic)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; on wukong, I have :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [humphrey_at_wukong ~]$ more ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btl_tcp_if_include=eth1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; on zelda01, I have :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [humphrey_at_zelda01 humphrey]$ more ~/.openmpi/mca-params.conf
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; btl_tcp_if_include=eth0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Just to make sure I'm reading this right -- 128.109.34.20 is supposed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to be routable to 130.207.252.131, right?  Can you ssh directly from
</span><br>
<span class="quotelev3">&gt; &gt;&gt; one machine to the other?  (I'm guessing that you can because OMPI was
</span><br>
<span class="quotelev3">&gt; &gt;&gt; able to start processes)  Can you ping one machine from the other?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Most importantly -- can you open arbitrary TCP ports between the two
</span><br>
<span class="quotelev3">&gt; &gt;&gt; machines?  (i.e., not just well-known ports like 22 [ssh], etc.)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="0305.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
<li><strong>Previous message:</strong> <a href="0303.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<li><strong>In reply to:</strong> <a href="0300.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0305.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
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
