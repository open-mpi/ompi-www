<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 12:53:22 2007" -->
<!-- isoreceived="20070306175322" -->
<!-- sent="Tue, 06 Mar 2007 10:53:15 -0700" -->
<!-- isosent="20070306175315" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_Spawn" -->
<!-- id="C212F89B.1E11%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA2340EB86378E43976ECBA4001310CA01941416_at_atlantis.clb.tcfr.thales" -->
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
<strong>Date:</strong> 2007-03-06 12:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2768.php">Michael: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Previous message:</strong> <a href="2766.php">Christian Simon: "Re: [OMPI users] configure is too smart !"</a>
<li><strong>In reply to:</strong> <a href="2763.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2792.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2792.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe I know what is happening here. My availability in the next week is
<br>
pretty limited due to a family emergency, but I'll take a look when I get
<br>
back. In brief, this is a resource starvation issue where the system thinks
<br>
your node is unable to support any further processes and so it blocks.
<br>
<p>On a separate note, I never use threaded configurations due to the lack of
<br>
any real thread-safety review or testing on Open MPI to-date (per Tim's
<br>
earlier comment). My &quot;standard&quot; configuration for development and testing is
<br>
with --disable-progress-threads --without-threads.
<br>
<p>I'll post something back to the list when I get it resolved.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 3/6/07 9:00 AM, &quot;Rozzen.VINCONT_at_[hidden]&quot;
<br>
&lt;Rozzen.VINCONT_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Tim, I get back to you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;What kind of system is it?&quot;
</span><br>
<span class="quotelev1">&gt; =&gt;The system is a &quot;Debian Sarge&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;How many nodes are you running on?&quot;
</span><br>
<span class="quotelev1">&gt; =&gt; There is no cluster configured, so I guess I work with no node
</span><br>
<span class="quotelev1">&gt; environnement.
</span><br>
<span class="quotelev1">&gt; &quot;Have you been able to try a more recent version of Open MPI?&quot;
</span><br>
<span class="quotelev1">&gt; =&gt;Today, I tried with version 1.1.4, but the results are not better.
</span><br>
<span class="quotelev1">&gt; I tested 2 cases :
</span><br>
<span class="quotelev1">&gt; Test 1 : with the sames configuration options (./configure
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads --enable-progress-threads --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-smp-locks)
</span><br>
<span class="quotelev1">&gt; The program stopped on MPI_Init_thread in __lll_mutex_lock_wait () from
</span><br>
<span class="quotelev1">&gt; /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Test 2 : with the default configuration options (./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/local/Mpi/openmpi-1.1.4-noBproc-noThread)
</span><br>
<span class="quotelev1">&gt; The program stoped on the &quot;node allocation&quot; after the spawn n&#176;31.
</span><br>
<span class="quotelev1">&gt; Maybe the problem comes from the lack of node definition?
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here below, the different log files of the 2 tests
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /******************************TEST 1*******************************/
</span><br>
<span class="quotelev1">&gt; GNU gdb 6.3-debian
</span><br>
<span class="quotelev1">&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; GDB is free software, covered by the GNU General Public License, and you are
</span><br>
<span class="quotelev1">&gt; welcome to change it and/or distribute copies of it under certain conditions.
</span><br>
<span class="quotelev1">&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev1">&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;i386-linux&quot;...Using host libthread_db library
</span><br>
<span class="quotelev1">&gt; &quot;/lib/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Starting program: /home/workspace/test_spaw1/src/spawn
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1076646560 (LWP 5178)]
</span><br>
<span class="quotelev1">&gt; main*******************************
</span><br>
<span class="quotelev1">&gt; main : Lancement MPI*
</span><br>
<span class="quotelev1">&gt; [New Thread 1085225904 (LWP 5181)]
</span><br>
<span class="quotelev1">&gt; [New Thread 1094495152 (LWP 5182)]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 1076646560 (LWP 5178)]
</span><br>
<span class="quotelev1">&gt; 0x4018a436 in __lll_mutex_lock_wait () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x4018a436 in __lll_mutex_lock_wait () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x40187893 in _L_mutex_lock_26 () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #2  0xbffff508 in ?? ()
</span><br>
<span class="quotelev1">&gt; #3  0x4000bcd0 in _dl_map_object_deps () from /lib/ld-linux.so.2
</span><br>
<span class="quotelev1">&gt; #4  0x40b9f8cb in mca_btl_tcp_component_create_listen () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev1">&gt; #5  0x40b9f8cb in mca_btl_tcp_component_create_listen () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev1">&gt; #6  0x40b9eef4 in mca_btl_tcp_component_init () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev1">&gt; #7  0x4008c652 in mca_btl_base_select () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x40b8dd28 in mca_bml_r2_component_init () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev1">&gt; #9  0x4008bf54 in mca_bml_base_init () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #10 0x40b7e5c9 in mca_pml_ob1_component_init () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #11 0x40094192 in mca_pml_base_select () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #12 0x4005742c in ompi_mpi_init () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #13 0x4007c182 in PMPI_Init_thread () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #14 0x080489f3 in main (argc=1, argv=0xbffff8a4) at spawn6.c:33
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /******************************TEST 2*******************************/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GNU gdb 6.3-debian
</span><br>
<span class="quotelev1">&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; GDB is free software, covered by the GNU General Public License, and you are
</span><br>
<span class="quotelev1">&gt; welcome to change it and/or distribute copies of it under certain conditions.
</span><br>
<span class="quotelev1">&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev1">&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;i386-linux&quot;...Using host libthread_db library
</span><br>
<span class="quotelev1">&gt; &quot;/lib/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 1 --host myhost spawn6
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/bin/mpirun -np
</span><br>
<span class="quotelev1">&gt; 1 --host myhost spawn6
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1076121728 (LWP 4022)]
</span><br>
<span class="quotelev1">&gt; main*******************************
</span><br>
<span class="quotelev1">&gt; main : Lancement MPI*
</span><br>
<span class="quotelev1">&gt; Exe : Lance
</span><br>
<span class="quotelev1">&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev1">&gt; 1 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev1">&gt; 1 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev1">&gt; Exe : Lance
</span><br>
<span class="quotelev1">&gt; Exe: Fin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev1">&gt; 2 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev1">&gt; 2 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev1">&gt; Exe : Lance
</span><br>
<span class="quotelev1">&gt; Exe: Fin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev1">&gt; 30 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev1">&gt; 30 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev1">&gt; Exe : Lance
</span><br>
<span class="quotelev1">&gt; Exe: Fin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev1">&gt; 31 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev1">&gt; 31 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 1076121728 (LWP 4022)]
</span><br>
<span class="quotelev1">&gt; 0x4018833b in strlen () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x4018833b in strlen () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x40297c5e in orte_gpr_replica_create_itag () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_gpr_replica.so
</span><br>
<span class="quotelev1">&gt; #2  0x4029d2df in orte_gpr_replica_put_fn () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_gpr_replica.so
</span><br>
<span class="quotelev1">&gt; #3  0x40297281 in orte_gpr_replica_put () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_gpr_replica.so
</span><br>
<span class="quotelev1">&gt; #4  0x40048287 in orte_ras_base_node_assign () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/liborte.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x400463e1 in orte_ras_base_allocate_nodes () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/liborte.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x402c2bb8 in orte_ras_hostfile_allocate () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_ras_hostfile.so
</span><br>
<span class="quotelev1">&gt; #7  0x400464e0 in orte_ras_base_allocate () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/liborte.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x402b063f in orte_rmgr_urm_allocate () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev1">&gt; #9  0x4004f277 in orte_rmgr_base_cmd_dispatch () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/liborte.so.0
</span><br>
<span class="quotelev1">&gt; #10 0x402b10ae in orte_rmgr_urm_recv () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev1">&gt; #11 0x4004301e in mca_oob_recv_callback () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/liborte.so.0
</span><br>
<span class="quotelev1">&gt; #12 0x4027a748 in mca_oob_tcp_msg_data () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt; #13 0x4027bb12 in mca_oob_tcp_peer_recv_handler () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt; #14 0x400703f9 in opal_event_loop () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #15 0x4006adfa in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; #16 0x0804c7a1 in opal_condition_wait (c=0x804fbcc, m=0x804fba8) at
</span><br>
<span class="quotelev1">&gt; condition.h:81
</span><br>
<span class="quotelev1">&gt; #17 0x0804a4c8 in orterun (argc=6, argv=0xbffff854) at orterun.c:427
</span><br>
<span class="quotelev1">&gt; #18 0x08049dd6 in main (argc=6, argv=0xbffff854) at main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt; -----Message d'origine-----
</span><br>
<span class="quotelev1">&gt; De : users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]De la
</span><br>
<span class="quotelev1">&gt; part de Tim Prins
</span><br>
<span class="quotelev1">&gt; Envoy&#233; : lundi 5 mars 2007 22:34
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Users
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI users] MPI_Comm_Spawn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Never mind, I was just able to replicate it. I'll look into it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2007, at 4:26 PM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is possible. Threading support is VERY lightly tested, but I
</span><br>
<span class="quotelev2">&gt;&gt; doubt it is the problem since it always fails after 31 spawns.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Again, I have tried with these configure options and the same version
</span><br>
<span class="quotelev2">&gt;&gt; of Open MPI and have still have been able to replicate this (after
</span><br>
<span class="quotelev2">&gt;&gt; letting it spawn over 500 times). Have you been able to try a more
</span><br>
<span class="quotelev2">&gt;&gt; recent version of Open MPI? What kind of system is it? How many nodes
</span><br>
<span class="quotelev2">&gt;&gt; are you running on?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 5, 2007, at 1:21 PM, Rozzen.VINCONT_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe the problem comes from the configuration options.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The configuration options used are :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure  --enable-mpi-threads --enable-progress-threads --with-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads=posix --enable-smp-locks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you give me your point of view about that please ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Message d'origine-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; De : users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; De la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; part de Ralph H Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Envoy&#233; : mardi 27 f&#233;vrier 2007 16:26
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#192; : Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Objet : Re: [OMPI users] MPI_Comm_Spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now that's interesting! There shouldn't be a limit, but to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; honest, I've
</span><br>
<span class="quotelev3">&gt;&gt;&gt; never tested that mode of operation - let me look into it and see.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It sounds
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like there is some counter that is overflowing, but I'll look.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/27/07 8:15 AM, &quot;Rozzen.VINCONT_at_[hidden]&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Rozzen.VINCONT_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you know if there is a limit to the number of MPI_Comm_spawn we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can use in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; order to launch a program?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I want to start and stop a program several times (with the function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm_spawn) but every time after  31 MPI_Comm_spawn, I get a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;segmentation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fault&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you give me your point of you to solve this problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /*file .c : spawned  the file Exe*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;signal.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define     EXE_TEST             &quot;/home/workspace/test_spaw1/src/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     long *lpBufferMpi;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm lIntercom;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int lErrcode;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm lCommunicateur;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int lRangMain,lRangExe,lMessageEnvoi,lIter,NiveauThreadVoulu,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NiveauThreadObtenu,lTailleBuffer;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int *lpMessageEnvoi=&amp;lMessageEnvoi;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Status lStatus;             /*status de reception*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      lIter=0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /* MPI environnement */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     printf(&quot;main*******************************\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     printf(&quot;main : Lancement MPI*\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp;NiveauThreadObtenu );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     lpBufferMpi = calloc( 10000, sizeof(long));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Buffer_attach( (void*)lpBufferMpi, 10000 * sizeof(long) );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     while (lIter&lt;1000){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         lIter ++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         lIntercom=(MPI_Comm)-1 ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Comm_spawn( EXE_TEST, NULL, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                       0, MPI_COMM_WORLD, &amp;lIntercom, &amp;lErrcode );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         printf( &quot;%i main***MPI_Comm_spawn return : %d\n&quot;,lIter,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lErrcode );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         if(lIntercom == (MPI_Comm)-1 ){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             printf(&quot;%i Intercom null\n&quot;,lIter);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Intercomm_merge(lIntercom, 0,&amp;lCommunicateur );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Comm_rank( lCommunicateur, &amp;lRangMain);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         lRangExe=1-lRangMain;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         printf(&quot;%i main***Rang main : %i   Rang exe : %i
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; \n&quot;,lIter,(int)lRangMain,(int)lRangExe);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         sleep(2);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /* Arret de l'environnement MPI */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     lTailleBuffer=10000* sizeof(long);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lTailleBuffer );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_free( &amp;lCommunicateur );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     free( lpBufferMpi );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     printf( &quot;Main = End .\n&quot; );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ********
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *******************/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;unistd.h&gt;     /* pour sleep() */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;semaphore.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /*1)pour communiaction MPI*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm lCommunicateur;        /*communicateur du process*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm CommParent;            /*Communiacteur parent &#224;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; r&#233;cup&#233;rer*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int lRank;                      /*rang du communicateur du
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int lRangMain;            /*rang du s&#233;quenceur si lanc&#233; en
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mode normal*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int lTailleCommunicateur;       /*taille du communicateur;*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     long *lpBufferMpi;              /*buffer pour message*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int lBufferSize;                /*taille du buffer*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /*2) pour les thread*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int NiveauThreadVoulu, NiveauThreadObtenu;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     lCommunicateur   = (MPI_Comm)-1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int erreur = MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp;NiveauThreadObtenu );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if (erreur!=0){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         printf(&quot;erreur\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         free( lpBufferMpi );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         return -1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /*2) Attachement &#224; un buffer pour le message*/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     lBufferSize=10000 * sizeof(long);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     lpBufferMpi = calloc( 10000, sizeof(long));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     erreur = MPI_Buffer_attach( (void*)lpBufferMpi, lBufferSize );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if (erreur!=0){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         printf(&quot;erreur\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         free( lpBufferMpi );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         return -1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     printf( &quot;Exe : Lance \n&quot; );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_get_parent(&amp;CommParent);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Intercomm_merge( CommParent, 1, &amp;lCommunicateur );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_rank( lCommunicateur, &amp;lRank );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_size( lCommunicateur, &amp;lTailleCommunicateur );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     lRangMain   =1-lRank;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     printf( &quot;Exe: lRankExe  = %d   lRankMain  = %d\n&quot;, lRank ,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lRangMain,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lTailleCommunicateur);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     sleep(1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lBufferSize );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_free( &amp;lCommunicateur );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     free( lpBufferMpi );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     printf( &quot;Exe: Fin.\n\n\n&quot; );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ********************************************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ********
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *******************/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; result :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; main*******************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; main : Lancement MPI*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 30 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 30 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 31 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 31 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Erreur de segmentation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="2768.php">Michael: "Re: [OMPI users] MPI_PACK very slow?"</a>
<li><strong>Previous message:</strong> <a href="2766.php">Christian Simon: "Re: [OMPI users] configure is too smart !"</a>
<li><strong>In reply to:</strong> <a href="2763.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2792.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2792.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
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
