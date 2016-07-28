<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 10 16:17:19 2006" -->
<!-- isoreceived="20060510201719" -->
<!-- sent="Wed, 10 May 2006 16:17:17 -0400" -->
<!-- isosent="20060510201717" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Non-threaded test fails with thread-safe library" -->
<!-- id="44624A4D.80300_at_Sun.COM" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-10 16:17:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0873.php">Brian Barrett: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>Previous message:</strong> <a href="0871.php">Rolf Vandevaart: "[OMPI devel] Repost: MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0873.php">Brian Barrett: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>Reply:</strong> <a href="0873.php">Brian Barrett: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have built a library with &quot;--enable-mpi-threads --with-threads=posix&quot; 
<br>
(using
<br>
the trunk) and tried running a simple non-threaded program linked 
<br>
against it. 
<br>
The program just calls to MPI_Send and MPI_Recv so every process sends an
<br>
MPI_INT to one another.
<br>
<p>When I run it I see the following:
<br>
<p>&nbsp;burl-ct-v440-4 86 =&gt;mpirun -np 4 connectivity -v
<br>
burl-ct-v440-4: checking connection    0 &lt;-&gt; 1
<br>
burl-ct-v440-4: checking connection    1 &lt;-&gt; 2
<br>
burl-ct-v440-4: checking connection    0 &lt;-&gt; 2
<br>
opal_mutex_lock(): Deadlock situation detected/avoided
<br>
Signal:6 info.si_errno:0(Error 0) si_code:-1()
<br>
*** End of error message ***
<br>
&nbsp;burl-ct-v440-4 87 =&gt;
<br>
<p>Since I had the debug enabled, I get to see that one of the processes
<br>
was trying to grab a lock that it already head.    (Nice feature having
<br>
that error printed out!) 
<br>
<p>Has anyone else seen this?  As I said, this is a non-threaded program
<br>
so there is only one thread per process.   I am wondering if I am missing
<br>
something basic in the building of my library.  This test works fine against
<br>
a library configured without &quot;--enable-mpi-threads --with-threads=posix&quot;.
<br>
<p>Rolf
<br>
<p><p><p><p><p><p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0873.php">Brian Barrett: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>Previous message:</strong> <a href="0871.php">Rolf Vandevaart: "[OMPI devel] Repost: MPI_Comm_spawn_multiple() and MPI_ERRORCODES_IGNORE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0873.php">Brian Barrett: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<li><strong>Reply:</strong> <a href="0873.php">Brian Barrett: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
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
