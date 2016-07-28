<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 04:39:18 2007" -->
<!-- isoreceived="20071001083918" -->
<!-- sent="Mon, 01 Oct 2007 10:39:12 +0200" -->
<!-- isosent="20071001083912" -->
<!-- name="Olivier DUBUISSON" -->
<!-- email="olivier.dubuisson_at_[hidden]" -->
<!-- subject="[OMPI users] Multiple threads" -->
<!-- id="1191227952.6091.12.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Olivier DUBUISSON (<em>olivier.dubuisson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 04:39:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4110.php">Neeraj Chourasia: "[OMPI users] libnbc compilation"</a>
<li><strong>Previous message:</strong> <a href="4108.php">jody: "Re: [OMPI users] Rank to host mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4111.php">Gleb Natapov: "Re: [OMPI users] Multiple threads"</a>
<li><strong>Reply:</strong> <a href="4111.php">Gleb Natapov: "Re: [OMPI users] Multiple threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I compile openmpi 1.2.3 with options ./configure  --with-threads=posix
<br>
--enable-mpi-thread --enable-progress-threads --enable-smp-locks.
<br>
<p>My program has 2 threads (main thread and an other). When i run it, i
<br>
can see 4 threads. I think that two threads are the progress threads, is
<br>
it right ?
<br>
<p>Is it possible to disable these progress threads ?
<br>
<p>I tried to compile openmpi with options ./configure
<br>
--with-threads=posix --enable-mpi-thread --disable-progress-threads
<br>
--enable-smp-locks, but when i run my program, i get the message :
<br>
Error! Cannot set MPI thread support to the desired value (asked for
<br>
MPI_THREAD_SERIALIZED and got MPI_THREAD_SINGLE).
<br>
<p><p>Thanks,
<br>
<p>Olivier.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4110.php">Neeraj Chourasia: "[OMPI users] libnbc compilation"</a>
<li><strong>Previous message:</strong> <a href="4108.php">jody: "Re: [OMPI users] Rank to host mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4111.php">Gleb Natapov: "Re: [OMPI users] Multiple threads"</a>
<li><strong>Reply:</strong> <a href="4111.php">Gleb Natapov: "Re: [OMPI users] Multiple threads"</a>
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
