<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 12:50:43 2007" -->
<!-- isoreceived="20070404165043" -->
<!-- sent="Wed,  4 Apr 2007 18:50:38 +0200" -->
<!-- isosent="20070404165038" -->
<!-- name="hpetit_at_[hidden]" -->
<!-- email="hpetit_at_[hidden]" -->
<!-- subject="[OMPI users] MPI 1.2 stuck in pthread_condition_wait" -->
<!-- id="JFZG4E$41584250C17E66D5AFE2EAFA16558974_at_aliceadsl.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> <a href="mailto:hpetit_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI%201.2%20stuck%20in%20pthread_condition_wait"><em>hpetit_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-04-04 12:50:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3020.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>Previous message:</strong> <a href="3018.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>

<br>
I have a problem of MPI 1.2.0rc being locked in a &quot;pthread_condition_wait&quot; call.
<br>
This happen whatever the application when openmpi has been compiled with multi-thread support.
<br>

<br>
The full &quot;configure&quot; options are
<br>
&quot;./configure --prefix=/usr/local/Mpi/openmpi-1.2 --enable-mpi-threads
<br>
--enable-progress-threads --with-threads=posix --enable-smp-lock&quot;
<br>

<br>
An example of GDB session is provided here below:
<br>

<br>
-------------------------------------------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt;GNU gdb 6.3-debian
</span><br>
<span class="quotelev1">&gt;Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;GDB is free software, covered by the GNU General Public License, and
</span><br>
<span class="quotelev1">&gt;you are welcome to change it and/or distribute copies of it under certain
</span><br>
<span class="quotelev1">&gt;conditions.
</span><br>
<span class="quotelev1">&gt;Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev1">&gt;There is absolutely no warranty for GDB. Type &quot;show warranty&quot; for
</span><br>
<span class="quotelev1">&gt;details.
</span><br>
<span class="quotelev1">&gt;This GDB was configured as &quot;i386-linux&quot;...Using host libthread_db
</span><br>
<span class="quotelev1">&gt;library &quot;/lib/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) run -np 1 spawn6
</span><br>
<span class="quotelev1">&gt;Starting program: /usr/local/openmpi-1.2.0/bin/mpirun -np 1 spawn6
</span><br>
<span class="quotelev1">&gt;[Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt;[New Thread 1076191360 (LWP 29006)]
</span><br>
<span class="quotelev1">&gt;[New Thread 1084808112 (LWP 29009)]
</span><br>
<span class="quotelev1">&gt;main*******************************
</span><br>
<span class="quotelev1">&gt;main : Lancement MPI*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Program received signal SIGINT, Interrupt.
</span><br>
<span class="quotelev1">&gt;[Switching to Thread 1084808112 (LWP 29009)]
</span><br>
<span class="quotelev1">&gt;0x401f0523 in poll () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt;(gdb) where
</span><br>
<span class="quotelev1">&gt;#0 0x401f0523 in poll () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt;#1 0x40081c7c in opal_poll_dispatch () from
</span><br>
<span class="quotelev1">&gt;/usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#2 0x4007e4f1 in opal_event_base_loop () from
</span><br>
<span class="quotelev1">&gt;/usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#3 0x4007e36b in opal_event_loop () from
</span><br>
<span class="quotelev1">&gt;/usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#4 0x4007f423 in opal_event_run () from
</span><br>
<span class="quotelev1">&gt;/usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#5 0x40115b63 in start_thread () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;#6 0x401f918a in clone () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt;(gdb) bt
</span><br>
<span class="quotelev1">&gt;#0 0x401f0523 in poll () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt;#1 0x40081c7c in opal_poll_dispatch () from
</span><br>
<span class="quotelev1">&gt;/usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#2 0x4007e4f1 in opal_event_base_loop () from
</span><br>
<span class="quotelev1">&gt;/usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#3 0x4007e36b in opal_event_loop () from
</span><br>
<span class="quotelev1">&gt;/usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#4 0x4007f423 in opal_event_run () from
</span><br>
<span class="quotelev1">&gt;/usr/local/openmpi-1.2.0/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#5 0x40115b63 in start_thread () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;#6 0x401f918a in clone () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt;(gdb) info threads
</span><br>
<span class="quotelev1">&gt;* 2 Thread 1084808112 (LWP 29009) 0x401f0523 in poll () from
</span><br>
<span class="quotelev1">&gt;/lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; 1 Thread 1076191360 (LWP 29006) 0x40118295 in
</span><br>
<span class="quotelev1">&gt;pthread_cond_wait@@GLIBC_2.3.2 () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;(gdb) thread 1
</span><br>
<span class="quotelev1">&gt;[Switching to thread 1 (Thread 1076191360 (LWP 29006))]#0 0x40118295
</span><br>
<span class="quotelev1">&gt;in pthread_cond_wait@@GLIBC_2.3.2 () from /lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;(gdb) bt
</span><br>
<span class="quotelev1">&gt;#0 0x40118295 in pthread_cond_wait@@GLIBC_2.3.2 () from
</span><br>
<span class="quotelev1">&gt;/lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;#1 0x0804cb68 in opal_condition_wait (c=0x8050e4c, m=0x8050e28) at
</span><br>
<span class="quotelev1">&gt;condition.h:64
</span><br>
<span class="quotelev1">&gt;#2 0x0804a4fe in orterun (argc=4, argv=0xbffff844) at orterun.c:436
</span><br>
<span class="quotelev1">&gt;#3 0x0804a046 in main (argc=4, argv=0xbffff844) at main.c:13
</span><br>
<span class="quotelev1">&gt;(gdb) where
</span><br>
<span class="quotelev1">&gt;#0 0x40118295 in pthread_cond_wait@@GLIBC_2.3.2 () from
</span><br>
<span class="quotelev1">&gt;/lib/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt;#1 0x0804cb68 in opal_condition_wait (c=0x8050e4c, m=0x8050e28) at
</span><br>
<span class="quotelev1">&gt;condition.h:64
</span><br>
<span class="quotelev1">&gt;#2 0x0804a4fe in orterun (argc=4, argv=0xbffff844) at orterun.c:436
</span><br>
<span class="quotelev1">&gt;#3 0x0804a046 in main (argc=4, argv=0xbffff844) at main.c:13
</span><br>

<br>
-------------------------------------------------------------------------------------------------------------
<br>

<br>
I have read the other threads related to multi-threads support. I have understood that multi-thread support will not be a priority before the end of the year.
<br>

<br>
The thing is this locking stuff problem appeared only since 1.1.2 openmpi release and as it is a locking problem, I was wondering if you could do an exception and try to analyse this one before the end of the year.
<br>

<br>
Thanks,
<br>

<br>
Herve
<br>

<br>
P.S.: my OS is a debian sarge
<br>

<br>
<p><p>------------------------ ALICE C'EST ENCORE MIEUX AVEC CANAL+ LE BOUQUET ! ---------------
<br>
D&#233;couvrez vite l'offre exclusive ALICEBOX et CANAL+ LE BOUQUET, en cliquant ici <a href="http://alicebox.fr">http://alicebox.fr</a>
<br>
Soumis &#224; conditions.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3020.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>Previous message:</strong> <a href="3018.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
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
