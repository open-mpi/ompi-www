<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 04:48:06 2007" -->
<!-- isoreceived="20071001084806" -->
<!-- sent="Mon, 1 Oct 2007 10:47:59 +0200" -->
<!-- isosent="20071001084759" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple threads" -->
<!-- id="20071001084759.GA10571_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1191227952.6091.12.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 04:47:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4112.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Previous message:</strong> <a href="4110.php">Neeraj Chourasia: "[OMPI users] libnbc compilation"</a>
<li><strong>In reply to:</strong> <a href="4109.php">Olivier DUBUISSON: "[OMPI users] Multiple threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 01, 2007 at 10:39:12AM +0200, Olivier DUBUISSON wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compile openmpi 1.2.3 with options ./configure  --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread --enable-progress-threads --enable-smp-locks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My program has 2 threads (main thread and an other). When i run it, i
</span><br>
<span class="quotelev1">&gt; can see 4 threads. I think that two threads are the progress threads, is
</span><br>
<span class="quotelev1">&gt; it right ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to disable these progress threads ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to compile openmpi with options ./configure
</span><br>
<span class="quotelev1">&gt; --with-threads=posix --enable-mpi-thread --disable-progress-threads
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^^^^^^^^^^^^^^^
<br>
It should be --enable-mpi-threads.
<br>
<p><span class="quotelev1">&gt; --enable-smp-locks, but when i run my program, i get the message :
</span><br>
<span class="quotelev1">&gt; Error! Cannot set MPI thread support to the desired value (asked for
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SERIALIZED and got MPI_THREAD_SINGLE).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4112.php">Torje Henriksen: "Re: [OMPI users] Rank to host mapping"</a>
<li><strong>Previous message:</strong> <a href="4110.php">Neeraj Chourasia: "[OMPI users] libnbc compilation"</a>
<li><strong>In reply to:</strong> <a href="4109.php">Olivier DUBUISSON: "[OMPI users] Multiple threads"</a>
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
