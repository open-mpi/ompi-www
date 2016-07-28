<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr  5 17:24:27 2007" -->
<!-- isoreceived="20070405212427" -->
<!-- sent="Thu, 05 Apr 2007 15:24:20 -0600" -->
<!-- isosent="20070405212420" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI 1.2 stuck in pthread_condition_wait" -->
<!-- id="C23AC524.25C9%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46156054.6050500_at_infonie.fr" -->
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
<strong>Date:</strong> 2007-04-05 17:24:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="3029.php">herve PETIT Perso: "[OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="3029.php">herve PETIT Perso: "[OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Herve - and Rozenn too.
<br>
<p>I can't speak to the thread lock issue as it appears to be occurring in the
<br>
MPI side of the code.
<br>
<p>As to the spawn limit, I honestly never checked the 1.1.x code family as we
<br>
aren't planning any repairs to it anyway. My observations were based on the
<br>
1.2 family. We have done our own fairly extensive testing and found there
<br>
are system-imposed limits that do cause problems, but that the levels at
<br>
which these occur are *very* system dependent - i.e., they depend upon
<br>
kernel configuration parameters that vary across releases, how your system
<br>
admin configured things, etc. They are, therefore, impossible to predict.
<br>
<p>What we are going to do is modify the code so we can at least detect these
<br>
situations, alert you to them, and gracefully exit when we encounter them.
<br>
Hopefully, we'll have those fixes out soon.
<br>
<p>Thanks again
<br>
Ralph
<br>
<p><p>On 4/5/07 2:47 PM, &quot;herve PETIT Perso&quot; &lt;hpetit_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Some precision about this thread,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have read the answer you provided for thread &quot;MPI_Comm_Spawn&quot; posted by
</span><br>
<span class="quotelev1">&gt; rozzen.vincent
</span><br>
<span class="quotelev1">&gt; I have actually reproduced the same behavior on my debian sarge installation
</span><br>
<span class="quotelev1">&gt; i.e
</span><br>
<span class="quotelev1">&gt; 1) mpi_com_spawn failure after 31 spawns (&quot;--disable-threads&quot; is set)
</span><br>
<span class="quotelev1">&gt; 2) MPI applications lock when &quot;--enable-threads&quot; is set
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * For issue 1)
</span><br>
<span class="quotelev1">&gt; MPI 1.2 release solves the problem, so it does not seem to be a system
</span><br>
<span class="quotelev1">&gt; limitation but anyway, now, it is behind us
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * For issue 2)
</span><br>
<span class="quotelev1">&gt; I have been in contact with Rozenn. After a little talk with her, I have done
</span><br>
<span class="quotelev1">&gt; a new test with a &quot;--enable-debug&quot; setting of OpenMpi 1.2 (stable version).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The gdb log is a little bit explicit on the deadlock situation.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; main*******************************
</span><br>
<span class="quotelev1">&gt; main : Start MPI*
</span><br>
<span class="quotelev1">&gt; opal_mutex_lock(): Resource deadlock avoided
</span><br>
<span class="quotelev1">&gt; [host10:20607] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [host10:20607] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [host10:20607] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [host10:20607] [ 0] [0xffffe440]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [ 1] /lib/tls/libc.so.6(abort+0x1d2) [0x4029cfa2]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [ 2] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x40061d25]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [ 3] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x4006030e]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [ 4] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x40061e23]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [ 5] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x40060175]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [ 6] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x40061da3]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [ 7] /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0 [0x40062315]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [ 8]
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0(ompi_proc_unpack+0x15a)
</span><br>
<span class="quotelev1">&gt; [0x40061392]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [ 9]
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0(ompi_comm_connect_accept+0x45c)
</span><br>
<span class="quotelev1">&gt; [0x4004dd62]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [10]
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0(PMPI_Comm_spawn+0x346) [0x400949a8]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [11] spawn(main+0xe2) [0x80489a6]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [12] /lib/tls/libc.so.6(__libc_start_main+0xf4) [0x40288974]
</span><br>
<span class="quotelev1">&gt; [host10:20607] [13] spawn [0x8048821]
</span><br>
<span class="quotelev1">&gt; [host10:20607] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [host10:20602] [0,0,0]-[0,1,0] mca_oob_tcp_msg_recv: readv failed: Connection
</span><br>
<span class="quotelev1">&gt; reset by peer (104)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, it seems that the lock is in the spawn code.
</span><br>
<span class="quotelev1">&gt; I have also discovered that the spawned program is also locked in the spawn
</span><br>
<span class="quotelev1">&gt; mechanism.
</span><br>
<span class="quotelev1">&gt; Here after, a gdb log from the spawned program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; #0  0x4019c436 in __lll_mutex_lock_wait () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x40199893 in _L_mutex_lock_26 () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #2  0xbffff4b8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #3  0xbffff4b8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #4  0x00000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; #5  0x400a663c in __JCR_LIST__ () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x400a663c in __JCR_LIST__ () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #7  0x401347a4 in opal_condition_t_class () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #8  0xbffff4e8 in ?? ()
</span><br>
<span class="quotelev1">&gt; #9  0x400554a8 in ompi_proc_construct () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #10 0x400554a8 in ompi_proc_construct () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #11 0x40056946 in ompi_proc_find_and_add () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #12 0x4005609e in ompi_proc_unpack () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #13 0x400481cd in ompi_comm_connect_accept () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #14 0x40049b2a in ompi_comm_dyn_init () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #15 0x40058e6d in ompi_mpi_init () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #16 0x4007e122 in PMPI_Init_thread () from
</span><br>
<span class="quotelev1">&gt; /usr/local/Mpi/CURRENT_MPI/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #17 0x08048a3b in main (argc=1, argv=0xbffff844) at ExeToSpawned6.c:31
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully, it can help you to investigate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Herve
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
<li><strong>Next message:</strong> <a href="3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="3029.php">herve PETIT Perso: "[OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="3029.php">herve PETIT Perso: "[OMPI users] MPI 1.2 stuck in pthread_condition_wait"</a>
<!-- nextthread="start" -->
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
