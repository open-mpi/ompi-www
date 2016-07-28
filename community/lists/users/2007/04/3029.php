<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr  5 16:47:54 2007" -->
<!-- isoreceived="20070405204754" -->
<!-- sent="Thu, 05 Apr 2007 22:47:16 +0200" -->
<!-- isosent="20070405204716" -->
<!-- name="herve PETIT Perso" -->
<!-- email="hpetit_at_[hidden]" -->
<!-- subject="[OMPI users] MPI 1.2 stuck in pthread_condition_wait" -->
<!-- id="46156054.6050500_at_infonie.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> herve PETIT Perso (<em>hpetit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-05 16:47:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3030.php">Ralph Castain: "Re: [OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="3028.php">Bas van der Vlies: "[OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3030.php">Ralph Castain: "Re: [OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>Reply:</strong> <a href="3030.php">Ralph Castain: "Re: [OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some precision about this thread,
<br>
<p>I have read the answer you provided for thread &quot;MPI_Comm_Spawn&quot; posted by rozzen.vincent
<br>
I have actually reproduced the same behavior on my debian sarge installation
<br>
i.e
<br>
1) mpi_com_spawn failure after 31 spawns (&quot;--disable-threads&quot; is set)
<br>
2) MPI applications lock when &quot;--enable-threads&quot; is set
<br>
<p>* For issue 1)
<br>
MPI 1.2 release solves the problem, so it does not seem to be a system limitation but anyway, now, it is behind us
<br>
<p>* For issue 2)
<br>
I have been in contact with Rozenn. After a little talk with her, I have done a new test with a &quot;--enable-debug&quot; setting of OpenMpi 1.2 (stable version).
<br>
<p>The gdb log is a little bit explicit on the deadlock situation.
<br>
-----------------------------------------------------
<br>
main*******************************
<br>
main : Start MPI*
<br>
opal_mutex_lock(): Resource deadlock avoided
<br>
[host10:20607] *** Process received signal ***
<br>
[host10:20607] Signal: Aborted (6)
<br>
[host10:20607] Signal code:  (-6)
<br>
[host10:20607] [ 0] [0xffffe440]
<br>
[host10:20607] [ 1] /lib/tls/libc.so.6(abort+0x1d2) [0x4029cfa2]
<br>
[host10:20607] [ 2] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x40061d25]
<br>
[host10:20607] [ 3] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x4006030e]
<br>
[host10:20607] [ 4] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x40061e23]
<br>
[host10:20607] [ 5] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x40060175]
<br>
[host10:20607] [ 6] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x40061da3]
<br>
[host10:20607] [ 7] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x40062315]
<br>
[host10:20607] [ 8] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0(ompi_proc_unpack+0x15a) [0x40061392]
<br>
[host10:20607] [ 9] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0(ompi_comm_connect_accept+0x45c) [0x4004dd62]
<br>
[host10:20607] [10] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0(PMPI_Comm_spawn+0x346) [0x400949a8]
<br>
[host10:20607] [11] spawn(main+0xe2) [0x80489a6]
<br>
[host10:20607] [12] /lib/tls/libc.so.6(__libc_start_main+0xf4) [0x40288974]
<br>
[host10:20607] [13] spawn [0x8048821]
<br>
[host10:20607] *** End of error message ***
<br>
[host10:20602] [0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
------------------------------------------------------------------------------------
<br>
<p><p>So, it seems that the lock is in the spawn code.
<br>
I have also discovered that the spawned program is also locked in the spawn mechanism.
<br>
Here after, a gdb log from the spawned program.
<br>
<p><p>------------------------------------------------------------------------------------------
<br>
#0  0x4019c436 in __lll_mutex_lock_wait () from /lib/tls/libpthread.so.0
<br>
#1  0x40199893 in _L_mutex_lock_26 () from /lib/tls/libpthread.so.0
<br>
#2  0xbffff4b8 in ?? ()
<br>
#3  0xbffff4b8 in ?? ()
<br>
#4  0x00000000 in ?? ()
<br>
#5  0x400a663c in __JCR_LIST__ () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#6  0x400a663c in __JCR_LIST__ () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#7  0x401347a4 in opal_condition_t_class () from /usr/local/Mpi/CURRENT_MPI/lib/libopen-pal.so.0
<br>
#8  0xbffff4e8 in ?? ()
<br>
#9  0x400554a8 in ompi_proc_construct () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#10 0x400554a8 in ompi_proc_construct () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#11 0x40056946 in ompi_proc_find_and_add () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#12 0x4005609e in ompi_proc_unpack () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#13 0x400481cd in ompi_comm_connect_accept () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#14 0x40049b2a in ompi_comm_dyn_init () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#15 0x40058e6d in ompi_mpi_init () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#16 0x4007e122 in PMPI_Init_thread () from /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
<br>
#17 0x08048a3b in main (argc=1, argv=0xbffff844) at ExeToSpawned6.c:31
<br>
-----------------------------------------------------------------------------------------------
<br>
<p>Hopefully, it can help you to investigate.
<br>
<p><p><p>Herve
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3030.php">Ralph Castain: "Re: [OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="3028.php">Bas van der Vlies: "[OMPI users] openmpi and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3030.php">Ralph Castain: "Re: [OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>Reply:</strong> <a href="3030.php">Ralph Castain: "Re: [OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
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
