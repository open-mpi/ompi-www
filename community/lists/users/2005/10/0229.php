<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 14:12:03 2005" -->
<!-- isoreceived="20051024191203" -->
<!-- sent="Mon, 24 Oct 2005 15:11:57 -0400 (EDT)" -->
<!-- isosent="20051024191157" -->
<!-- name="Hugh Merz" -->
<!-- email="merz_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] thread support" -->
<!-- id="Pine.LNX.4.63.0510241433430.14461_at_porcupine.cita.utoronto.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="435D2637.1060703_at_open-mpi.org" -->
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
<strong>From:</strong> Hugh Merz (<em>merz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-24 14:11:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0230.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<li><strong>Previous message:</strong> <a href="0228.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<li><strong>In reply to:</strong> <a href="0228.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0230.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<li><strong>Reply:</strong> <a href="0230.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; It's still only lightly tested.  I'm surprised that it totally hangs for
</span><br>
<span class="quotelev1">&gt; you, though -- what is your simple test program doing?
</span><br>
<p>It just initializes mpi (tried both mpi_init and mpi_init_thread), prints 
<br>
a string and exits.  It works fine without thread support compiled into 
<br>
ompi.
<br>
<p>It happens with any mpi program I try.
<br>
<p>Attaching gdb to each thread of the executable gives:
<br>
<p>(original process)
<br>
#0  0x420293d5 in sigsuspend () from /lib/i686/libc.so.6
<br>
#1  0x401e8609 in __pthread_wait_for_restart_signal () from /lib/i686/libpthread.so.0
<br>
#2  0x401e4eec in pthread_cond_wait () from /lib/i686/libpthread.so.0
<br>
#3  0x40bda418 in mca_oob_tcp_msg_wait () from /opt/openmpi-1.0rc2_asynch/lib/openmpi/mca_oob_tcp.so
<br>
<p>(thread 1)
<br>
#0  0x420e01a7 in poll () from /lib/i686/libc.so.6
<br>
#1  0x401e5c30 in __pthread_manager () from /lib/i686/libpthread.so.0
<br>
<p>(thread 2)
<br>
#0  0x420e01a7 in poll () from /lib/i686/libc.so.6
<br>
#1  0x4013268b in poll_dispatch () from /opt/openmpi-1.0rc2_asynch/lib/libopal.so.0
<br>
Cannot access memory at address 0x3e8
<br>
<p>(thread 3)
<br>
#0  0x420dae14 in read () from /lib/i686/libc.so.6
<br>
#1  0x401f3b18 in __DTOR_END__ () from /lib/i686/libpthread.so.0
<br>
#2  0x40c8dfe3 in mca_btl_sm_component_event_thread ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from /opt/openmpi-1.0rc2_asynch/lib/openmpi/mca_btl_sm.so
<br>
<p>And there are also 2 additional threads spawned by each of mpirun and 
<br>
orted.
<br>
<p>Any clues or hints on how to debug this would be appreciated, but I 
<br>
understand that it is probably not high priority right now.
<br>
<p>Thanks,
<br>
<p>Hugh
<br>
<p><span class="quotelev1">&gt; Hugh Merz wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Howdy,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I tried installing the release candidate with thread support
</span><br>
<span class="quotelev2">&gt;&gt; enabled ( --enable-mpi-threads and --enable-progress-threads ) using an
</span><br>
<span class="quotelev2">&gt;&gt; old rh7.3 install and a recent fc4 install (Intel compilers). When I try
</span><br>
<span class="quotelev2">&gt;&gt; to run a simple test program, the executable, mpirun and orted all sleep
</span><br>
<span class="quotelev2">&gt;&gt; in what appears to be a deadlock.  If I compile ompi without threads
</span><br>
<span class="quotelev2">&gt;&gt; everything works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    The faq states that thread support has only been lightly tested, and
</span><br>
<span class="quotelev2">&gt;&gt; there was only brief discussion about it in the maillist 8 months ago -
</span><br>
<span class="quotelev2">&gt;&gt; have there been any developments, and should I expect it to work properly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hugh
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="0230.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<li><strong>Previous message:</strong> <a href="0228.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<li><strong>In reply to:</strong> <a href="0228.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0230.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<li><strong>Reply:</strong> <a href="0230.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
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
