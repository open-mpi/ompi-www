<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 11:00:51 2007" -->
<!-- isoreceived="20070306160051" -->
<!-- sent="Tue, 6 Mar 2007 17:00:43 +0100 " -->
<!-- isosent="20070306160043" -->
<!-- name="Rozzen.VINCONT_at_[hidden]" -->
<!-- email="Rozzen.VINCONT_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_Spawn" -->
<!-- id="CA2340EB86378E43976ECBA4001310CA01941416_at_atlantis.clb.tcfr.thales" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] MPI_Comm_Spawn" -->
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
<strong>From:</strong> <a href="mailto:Rozzen.VINCONT_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_Comm_Spawn"><em>Rozzen.VINCONT_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-03-06 11:00:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2764.php">Michael: "[OMPI users] MPI_PACK very slow?"</a>
<li><strong>Previous message:</strong> <a href="2762.php">Brian Barrett: "Re: [OMPI users] configure is too smart !"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2735.php">Rozzen.VINCONT_at_[hidden]: "[OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2767.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2767.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3013.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim, I get back to you
<br>
<p>&quot;What kind of system is it?&quot;
<br>
=&gt;The system is a &quot;Debian Sarge&quot;.
<br>
&quot;How many nodes are you running on?&quot;
<br>
=&gt; There is no cluster configured, so I guess I work with no node environnement.
<br>
&quot;Have you been able to try a more recent version of Open MPI?&quot;
<br>
=&gt;Today, I tried with version 1.1.4, but the results are not better.
<br>
I tested 2 cases :
<br>
Test 1 : with the sames configuration options (./configure  --enable-mpi-threads --enable-progress-threads --with-threads=posix --enable-smp-locks)
<br>
The program stopped on MPI_Init_thread in __lll_mutex_lock_wait () from /lib/tls/libpthread.so.0
<br>
<p>Test 2 : with the default configuration options (./configure  --prefix=/usr/local/Mpi/openmpi-1.1.4-noBproc-noThread)
<br>
The program stoped on the &quot;node allocation&quot; after the spawn n&#176;31.
<br>
Maybe the problem comes from the lack of node definition?
<br>
Thanks for your help.
<br>
<p>Here below, the different log files of the 2 tests
<br>
<p>/******************************TEST 1*******************************/
<br>
GNU gdb 6.3-debian
<br>
Copyright 2004 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you are
<br>
welcome to change it and/or distribute copies of it under certain conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;i386-linux&quot;...Using host libthread_db library &quot;/lib/tls/libthread_db.so.1&quot;.
<br>
<p>(gdb) run
<br>
Starting program: /home/workspace/test_spaw1/src/spawn
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1076646560 (LWP 5178)]
<br>
main*******************************
<br>
main : Lancement MPI*
<br>
[New Thread 1085225904 (LWP 5181)]
<br>
[New Thread 1094495152 (LWP 5182)]
<br>
<p>Program received signal SIGINT, Interrupt.
<br>
[Switching to Thread 1076646560 (LWP 5178)]
<br>
0x4018a436 in __lll_mutex_lock_wait () from /lib/tls/libpthread.so.0
<br>
(gdb) where
<br>
#0  0x4018a436 in __lll_mutex_lock_wait () from /lib/tls/libpthread.so.0
<br>
#1  0x40187893 in _L_mutex_lock_26 () from /lib/tls/libpthread.so.0
<br>
#2  0xbffff508 in ?? ()
<br>
#3  0x4000bcd0 in _dl_map_object_deps () from /lib/ld-linux.so.2
<br>
#4  0x40b9f8cb in mca_btl_tcp_component_create_listen () from /usr/local/Mpi/openmpi-1.1.4-noBproc/lib/openmpi/mca_btl_tcp.so
<br>
#5  0x40b9f8cb in mca_btl_tcp_component_create_listen () from /usr/local/Mpi/openmpi-1.1.4-noBproc/lib/openmpi/mca_btl_tcp.so
<br>
#6  0x40b9eef4 in mca_btl_tcp_component_init () from /usr/local/Mpi/openmpi-1.1.4-noBproc/lib/openmpi/mca_btl_tcp.so
<br>
#7  0x4008c652 in mca_btl_base_select () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#8  0x40b8dd28 in mca_bml_r2_component_init () from /usr/local/Mpi/openmpi-1.1.4-noBproc/lib/openmpi/mca_bml_r2.so
<br>
#9  0x4008bf54 in mca_bml_base_init () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#10 0x40b7e5c9 in mca_pml_ob1_component_init () from /usr/local/Mpi/openmpi-1.1.4-noBproc/lib/openmpi/mca_pml_ob1.so
<br>
#11 0x40094192 in mca_pml_base_select () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#12 0x4005742c in ompi_mpi_init () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#13 0x4007c182 in PMPI_Init_thread () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#14 0x080489f3 in main (argc=1, argv=0xbffff8a4) at spawn6.c:33
<br>
<p><p><p>/******************************TEST 2*******************************/
<br>
<p>GNU gdb 6.3-debian
<br>
Copyright 2004 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you are
<br>
welcome to change it and/or distribute copies of it under certain conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;i386-linux&quot;...Using host libthread_db library &quot;/lib/tls/libthread_db.so.1&quot;.
<br>
<p>(gdb) run -np 1 --host myhost spawn6
<br>
Starting program: /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/bin/mpirun -np 1 --host myhost spawn6
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1076121728 (LWP 4022)]
<br>
main*******************************
<br>
main : Lancement MPI*
<br>
Exe : Lance
<br>
Exe: lRankExe  = 1   lRankMain  = 0
<br>
1 main***MPI_Comm_spawn return : 0
<br>
1 main***Rang main : 0   Rang exe : 1
<br>
Exe : Lance
<br>
Exe: Fin.
<br>
<p><p>Exe: lRankExe  = 1   lRankMain  = 0
<br>
2 main***MPI_Comm_spawn return : 0
<br>
2 main***Rang main : 0   Rang exe : 1
<br>
Exe : Lance
<br>
Exe: Fin.
<br>
<p>...
<br>
<p>Exe: lRankExe  = 1   lRankMain  = 0
<br>
30 main***MPI_Comm_spawn return : 0
<br>
30 main***Rang main : 0   Rang exe : 1
<br>
Exe : Lance
<br>
Exe: Fin.
<br>
<p>Exe: lRankExe  = 1   lRankMain  = 0
<br>
31 main***MPI_Comm_spawn return : 0
<br>
31 main***Rang main : 0   Rang exe : 1
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 1076121728 (LWP 4022)]
<br>
0x4018833b in strlen () from /lib/tls/libc.so.6
<br>
(gdb) where
<br>
#0  0x4018833b in strlen () from /lib/tls/libc.so.6
<br>
#1  0x40297c5e in orte_gpr_replica_create_itag () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_gpr_replica.so
<br>
#2  0x4029d2df in orte_gpr_replica_put_fn () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_gpr_replica.so
<br>
#3  0x40297281 in orte_gpr_replica_put () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_gpr_replica.so
<br>
#4  0x40048287 in orte_ras_base_node_assign () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/liborte.so.0
<br>
#5  0x400463e1 in orte_ras_base_allocate_nodes () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/liborte.so.0
<br>
#6  0x402c2bb8 in orte_ras_hostfile_allocate () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_ras_hostfile.so
<br>
#7  0x400464e0 in orte_ras_base_allocate () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/liborte.so.0
<br>
#8  0x402b063f in orte_rmgr_urm_allocate () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_rmgr_urm.so
<br>
#9  0x4004f277 in orte_rmgr_base_cmd_dispatch () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/liborte.so.0
<br>
#10 0x402b10ae in orte_rmgr_urm_recv () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_rmgr_urm.so
<br>
#11 0x4004301e in mca_oob_recv_callback () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/liborte.so.0
<br>
#12 0x4027a748 in mca_oob_tcp_msg_data () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_oob_tcp.so
<br>
#13 0x4027bb12 in mca_oob_tcp_peer_recv_handler () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/openmpi/mca_oob_tcp.so
<br>
#14 0x400703f9 in opal_event_loop () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/libopal.so.0
<br>
#15 0x4006adfa in opal_progress () from /usr/local/Mpi/openmpi-1.1.4-noBproc-noThread/lib/libopal.so.0
<br>
#16 0x0804c7a1 in opal_condition_wait (c=0x804fbcc, m=0x804fba8) at condition.h:81
<br>
#17 0x0804a4c8 in orterun (argc=6, argv=0xbffff854) at orterun.c:427
<br>
#18 0x08049dd6 in main (argc=6, argv=0xbffff854) at main.c:13
<br>
(gdb)
<br>
-----Message d'origine-----
<br>
De : users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]De la
<br>
part de Tim Prins
<br>
Envoy&#233; : lundi 5 mars 2007 22:34
<br>
&#192; : Open MPI Users
<br>
Objet : Re: [OMPI users] MPI_Comm_Spawn
<br>
<p><p>Never mind, I was just able to replicate it. I'll look into it.
<br>
<p>Tim
<br>
<p>On Mar 5, 2007, at 4:26 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; That is possible. Threading support is VERY lightly tested, but I
</span><br>
<span class="quotelev1">&gt; doubt it is the problem since it always fails after 31 spawns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, I have tried with these configure options and the same version
</span><br>
<span class="quotelev1">&gt; of Open MPI and have still have been able to replicate this (after
</span><br>
<span class="quotelev1">&gt; letting it spawn over 500 times). Have you been able to try a more
</span><br>
<span class="quotelev1">&gt; recent version of Open MPI? What kind of system is it? How many nodes
</span><br>
<span class="quotelev1">&gt; are you running on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2007, at 1:21 PM, Rozzen.VINCONT_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the problem comes from the configuration options.
</span><br>
<span class="quotelev2">&gt;&gt; The configuration options used are :
</span><br>
<span class="quotelev2">&gt;&gt; ./configure  --enable-mpi-threads --enable-progress-threads --with-
</span><br>
<span class="quotelev2">&gt;&gt; threads=posix --enable-smp-locks
</span><br>
<span class="quotelev2">&gt;&gt; Could you give me your point of view about that please ?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Message d'origine-----
</span><br>
<span class="quotelev2">&gt;&gt; De : users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; De la
</span><br>
<span class="quotelev2">&gt;&gt; part de Ralph H Castain
</span><br>
<span class="quotelev2">&gt;&gt; Envoy&#233; : mardi 27 f&#233;vrier 2007 16:26
</span><br>
<span class="quotelev2">&gt;&gt; &#192; : Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Objet : Re: [OMPI users] MPI_Comm_Spawn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now that's interesting! There shouldn't be a limit, but to be
</span><br>
<span class="quotelev2">&gt;&gt; honest, I've
</span><br>
<span class="quotelev2">&gt;&gt; never tested that mode of operation - let me look into it and see.
</span><br>
<span class="quotelev2">&gt;&gt; It sounds
</span><br>
<span class="quotelev2">&gt;&gt; like there is some counter that is overflowing, but I'll look.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/27/07 8:15 AM, &quot;Rozzen.VINCONT_at_[hidden]&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Rozzen.VINCONT_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you know if there is a limit to the number of MPI_Comm_spawn we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can use in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; order to launch a program?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to start and stop a program several times (with the function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_spawn) but every time after  31 MPI_Comm_spawn, I get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;segmentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fault&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you give me your point of you to solve this problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*file .c : spawned  the file Exe*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;signal.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define     EXE_TEST             &quot;/home/workspace/test_spaw1/src/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     long *lpBufferMpi;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm lIntercom;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lErrcode;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm lCommunicateur;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lRangMain,lRangExe,lMessageEnvoi,lIter,NiveauThreadVoulu,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NiveauThreadObtenu,lTailleBuffer;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int *lpMessageEnvoi=&amp;lMessageEnvoi;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status lStatus;             /*status de reception*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      lIter=0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* MPI environnement */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf(&quot;main*******************************\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf(&quot;main : Lancement MPI*\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;NiveauThreadObtenu );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lpBufferMpi = calloc( 10000, sizeof(long));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Buffer_attach( (void*)lpBufferMpi, 10000 * sizeof(long) );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     while (lIter&lt;1000){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         lIter ++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         lIntercom=(MPI_Comm)-1 ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm_spawn( EXE_TEST, NULL, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       0, MPI_COMM_WORLD, &amp;lIntercom, &amp;lErrcode );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf( &quot;%i main***MPI_Comm_spawn return : %d\n&quot;,lIter,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lErrcode );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if(lIntercom == (MPI_Comm)-1 ){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             printf(&quot;%i Intercom null\n&quot;,lIter);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Intercomm_merge(lIntercom, 0,&amp;lCommunicateur );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm_rank( lCommunicateur, &amp;lRangMain);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         lRangExe=1-lRangMain;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;%i main***Rang main : %i   Rang exe : %i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \n&quot;,lIter,(int)lRangMain,(int)lRangExe);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         sleep(2);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* Arret de l'environnement MPI */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lTailleBuffer=10000* sizeof(long);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lTailleBuffer );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_free( &amp;lCommunicateur );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     free( lpBufferMpi );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf( &quot;Main = End .\n&quot; );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ******************************************************************** 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ********
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;malloc.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;unistd.h&gt;     /* pour sleep() */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;pthread.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;semaphore.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*1)pour communiaction MPI*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm lCommunicateur;        /*communicateur du process*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm CommParent;            /*Communiacteur parent &#224;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r&#233;cup&#233;rer*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lRank;                      /*rang du communicateur du
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lRangMain;            /*rang du s&#233;quenceur si lanc&#233; en
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mode normal*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lTailleCommunicateur;       /*taille du communicateur;*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     long *lpBufferMpi;              /*buffer pour message*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int lBufferSize;                /*taille du buffer*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /*2) pour les thread*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int NiveauThreadVoulu, NiveauThreadObtenu;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lCommunicateur   = (MPI_Comm)-1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     NiveauThreadVoulu = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int erreur = MPI_Init_thread( &amp;argc, &amp;argv, NiveauThreadVoulu,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;NiveauThreadObtenu );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (erreur!=0){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;erreur\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         free( lpBufferMpi );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return -1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /*2) Attachement &#224; un buffer pour le message*/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lBufferSize=10000 * sizeof(long);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lpBufferMpi = calloc( 10000, sizeof(long));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     erreur = MPI_Buffer_attach( (void*)lpBufferMpi, lBufferSize );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (erreur!=0){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;erreur\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         free( lpBufferMpi );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return -1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf( &quot;Exe : Lance \n&quot; );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_get_parent(&amp;CommParent);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Intercomm_merge( CommParent, 1, &amp;lCommunicateur );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_rank( lCommunicateur, &amp;lRank );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_size( lCommunicateur, &amp;lTailleCommunicateur );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     lRangMain   =1-lRank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf( &quot;Exe: lRankExe  = %d   lRankMain  = %d\n&quot;, lRank ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lRangMain,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lTailleCommunicateur);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sleep(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Buffer_detach( (void*)lpBufferMpi, &amp;lBufferSize );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_free( &amp;lCommunicateur );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     free( lpBufferMpi );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     printf( &quot;Exe: Fin.\n\n\n&quot; );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ******************************************************************** 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ********
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *******************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; result :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main*******************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main : Lancement MPI*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 30 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 30 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: Fin.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31 main***MPI_Comm_spawn return : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe : Lance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 31 main***Rang main : 0   Rang exe : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exe: lRankExe  = 1   lRankMain  = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Erreur de segmentation
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
<span class="quotelev2">&gt;&gt;
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2764.php">Michael: "[OMPI users] MPI_PACK very slow?"</a>
<li><strong>Previous message:</strong> <a href="2762.php">Brian Barrett: "Re: [OMPI users] configure is too smart !"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2735.php">Rozzen.VINCONT_at_[hidden]: "[OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2767.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="2767.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3013.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
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
