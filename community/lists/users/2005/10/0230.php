<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 25 10:35:22 2005" -->
<!-- isoreceived="20051025153522" -->
<!-- sent="Tue, 25 Oct 2005 10:35:18 -0500" -->
<!-- isosent="20051025153518" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] thread support" -->
<!-- id="435E50B6.7040004_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.63.0510241433430.14461_at_porcupine.cita.utoronto.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-25 10:35:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0231.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Previous message:</strong> <a href="0229.php">Hugh Merz: "Re: [O-MPI users] thread support"</a>
<li><strong>In reply to:</strong> <a href="0229.php">Hugh Merz: "Re: [O-MPI users] thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0236.php">Arnstein Ressem: "Re: [O-MPI users] thread support"</a>
<li><strong>Reply:</strong> <a href="0236.php">Arnstein Ressem: "Re: [O-MPI users] thread support"</a>
<li><strong>Reply:</strong> <a href="0237.php">Hugh Merz: "Re: [O-MPI users] thread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hugh --
<br>
<p>We are actually unable to replicate the problem; we've run some 
<br>
single-threaded and multi-threaded apps with no problems.  This is 
<br>
unfortunately probably symptomatic of bugs that are still remaining in 
<br>
the code.  :-(
<br>
<p>Can you try disabling MPI progress threads (I believe that tcp may be 
<br>
the only BTL component that has async progress support implemented 
<br>
anyway; sm *may*, but I'd have to go back and check)?  Leave MPI threads 
<br>
enabled (i.e., MPI_THREAD_MULTIPLE) and see if that gets you further.
<br>
<p><p><p>Hugh Merz wrote:
<br>
<span class="quotelev2">&gt;&gt;It's still only lightly tested.  I'm surprised that it totally hangs for
</span><br>
<span class="quotelev2">&gt;&gt;you, though -- what is your simple test program doing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It just initializes mpi (tried both mpi_init and mpi_init_thread), prints 
</span><br>
<span class="quotelev1">&gt; a string and exits.  It works fine without thread support compiled into 
</span><br>
<span class="quotelev1">&gt; ompi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It happens with any mpi program I try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attaching gdb to each thread of the executable gives:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (original process)
</span><br>
<span class="quotelev1">&gt; #0  0x420293d5 in sigsuspend () from /lib/i686/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x401e8609 in __pthread_wait_for_restart_signal () from /lib/i686/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x401e4eec in pthread_cond_wait () from /lib/i686/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x40bda418 in mca_oob_tcp_msg_wait () from /opt/openmpi-1.0rc2_asynch/lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (thread 1)
</span><br>
<span class="quotelev1">&gt; #0  0x420e01a7 in poll () from /lib/i686/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x401e5c30 in __pthread_manager () from /lib/i686/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (thread 2)
</span><br>
<span class="quotelev1">&gt; #0  0x420e01a7 in poll () from /lib/i686/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x4013268b in poll_dispatch () from /opt/openmpi-1.0rc2_asynch/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; Cannot access memory at address 0x3e8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (thread 3)
</span><br>
<span class="quotelev1">&gt; #0  0x420dae14 in read () from /lib/i686/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x401f3b18 in __DTOR_END__ () from /lib/i686/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x40c8dfe3 in mca_btl_sm_component_event_thread ()
</span><br>
<span class="quotelev1">&gt;     from /opt/openmpi-1.0rc2_asynch/lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And there are also 2 additional threads spawned by each of mpirun and 
</span><br>
<span class="quotelev1">&gt; orted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any clues or hints on how to debug this would be appreciated, but I 
</span><br>
<span class="quotelev1">&gt; understand that it is probably not high priority right now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Hugh Merz wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Howdy,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I tried installing the release candidate with thread support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;enabled ( --enable-mpi-threads and --enable-progress-threads ) using an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;old rh7.3 install and a recent fc4 install (Intel compilers). When I try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;to run a simple test program, the executable, mpirun and orted all sleep
</span><br>
<span class="quotelev3">&gt;&gt;&gt;in what appears to be a deadlock.  If I compile ompi without threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt;everything works fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   The faq states that thread support has only been lightly tested, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;there was only brief discussion about it in the maillist 8 months ago -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;have there been any developments, and should I expect it to work properly?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hugh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- 
</span><br>
<span class="quotelev2">&gt;&gt;{+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;{+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt;{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0231.php">Galen M. Shipman: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Previous message:</strong> <a href="0229.php">Hugh Merz: "Re: [O-MPI users] thread support"</a>
<li><strong>In reply to:</strong> <a href="0229.php">Hugh Merz: "Re: [O-MPI users] thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0236.php">Arnstein Ressem: "Re: [O-MPI users] thread support"</a>
<li><strong>Reply:</strong> <a href="0236.php">Arnstein Ressem: "Re: [O-MPI users] thread support"</a>
<li><strong>Reply:</strong> <a href="0237.php">Hugh Merz: "Re: [O-MPI users] thread support"</a>
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
