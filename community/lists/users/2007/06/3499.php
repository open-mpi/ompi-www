<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun 17 05:27:28 2007" -->
<!-- isoreceived="20070617092728" -->
<!-- sent="Sun, 17 Jun 2007 21:27:24 +1200" -->
<!-- isosent="20070617092724" -->
<!-- name="Code Master" -->
<!-- email="cpp.codemaster_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun in openmpi-1.2.3-rc1 hangs at the end when nproc &amp;gt;=16 (was Re: mpirun in openmpi-1.2.2 fails to exit after client program finishes)" -->
<!-- id="1626092b0706170227r582b89e1if1453ac8ac82e87c_at_mail.gmail.com" -->
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
<strong>From:</strong> Code Master (<em>cpp.codemaster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-17 05:27:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3500.php">Chris Reeves: "[OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3498.php">Francesco Pietra: "[OMPI users] openmpi/numa"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I've just tried out openmpi-1.2.3-rc1.  I ran my client programs
<br>
successfully when nproc &lt; 16.  However when the number of nodes &gt;=16,
<br>
mpirun hangs (in master only) at the end of the execution after all
<br>
processes (includes the client program itself and orted*) exits.
<br>
<p>Then I performed ps x on the master node and found mpirun is the only
<br>
entry.  Apparently it is in the sleeping mode (S+).
<br>
<p>So does this give more hint about what went wrong?
<br>
<p>Thanks!
<br>
<p><p><p>On 6/12/07, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi there
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delayed response - I was tied up this weekend and almost
</span><br>
<span class="quotelev1">&gt; completely away from the computer. Doesn't happen very often (probably not
</span><br>
<span class="quotelev1">&gt; often enough! ;-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can only think of one think you could try with 1.2.2. I note that you have
</span><br>
<span class="quotelev1">&gt; enabled mpi threads and progress threads. Do you really need the threading
</span><br>
<span class="quotelev1">&gt; capabilities?? If you can possibly live without them, at least for a trial,
</span><br>
<span class="quotelev1">&gt; then I would re-configure with --without-threads --disable-mpi-threads
</span><br>
<span class="quotelev1">&gt; --disable-progress-threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our threading support is really not that great just yet, so it is entirely
</span><br>
<span class="quotelev1">&gt; possible that you are hitting some kind of thread locked condition.
</span><br>
<span class="quotelev1">&gt; Unfortunately, it is impossible to tell at this point, though we hopefully
</span><br>
<span class="quotelev1">&gt; will have some new diagnostics shortly that will help us developers to debug
</span><br>
<span class="quotelev1">&gt; such situations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did recently introduce some major changes to the system that *might*
</span><br>
<span class="quotelev1">&gt; affect this behavior. However, those are only in our subversion trunk and
</span><br>
<span class="quotelev1">&gt; will never be moved to the 1.2 code series - they will be released with the
</span><br>
<span class="quotelev1">&gt; 1.3 series sometime late this year/early next year. If you would like, you
</span><br>
<span class="quotelev1">&gt; can checkout the trunk and try your code with that version to see if you get
</span><br>
<span class="quotelev1">&gt; some improved behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that is of some help. Let me know what you see and I'll try to help you
</span><br>
<span class="quotelev1">&gt; out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/11/07 4:02 AM, &quot;Code Master&quot; &lt;cpp.codemaster_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm using openmpi-1.2.2 to compile and run my client app.  After my
</span><br>
<span class="quotelev2">&gt; &gt; app and orted processes exit successfully in all master and slave
</span><br>
<span class="quotelev2">&gt; &gt; nodes, mpirun hangs in the master node (mpirun has also exited
</span><br>
<span class="quotelev2">&gt; &gt; successfully in all slave node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This only happens in openmpi-1.2.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you see why this is happening? (I've included the ./configure
</span><br>
<span class="quotelev2">&gt; &gt; script in the records below) Also would you please help me out?  I
</span><br>
<span class="quotelev2">&gt; &gt; really need to get mpirun working in order to benchmark my parallel
</span><br>
<span class="quotelev2">&gt; &gt; programs for my dissertation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt; &gt; From: Code Master &lt;cpp.codemaster_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Jun 9, 2007 9:44 AM
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after
</span><br>
<span class="quotelev2">&gt; &gt; client program finishes
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 6/9/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 8, 2007, at 9:29 AM, Code Master wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I compiled openmpi-1.2.2 with:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./configure CFLAGS=-g -pg -O3 --prefix=/home/foo/490_research/490/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; src/mpi.optimized_profiling/  \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --enable-mpi-threads --enable-progress-threads --enable-static --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; disable-shared --without-memory-manager  \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --without-libnuma --disable-mpi-f77 --disable-mpi-f90 --disable-mpi-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cxx --disable-mpi-cxx-seek --disable-dlopen
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (Thanks Jeff, now I know that I have to add --without-memory-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; manager and --without-libnuma for static linking)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Good.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make all
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make install
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; then I run my client app with:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /home/foo/490_research/490/src/mpi.optimized_profiling/bin/mpirun --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hostfile ../hostfile -n 32 raytrace -finputs/car.env
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The program runs well and each process completes succssfully (I can
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tell because all processes have now generated gmon.out successfully
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and a &quot;ps aux&quot; on other slave nodes (except the originating node)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; show that my program in slave nodes have already exited (not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; existant).  Therefore I think this may have something to do with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun,which hangs forever.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Be aware that you may have problems with multiple processes writing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to the same gmon.out, unless you're running each instance in a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; different directory (your command line doesn't indicate that you are,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but that doesn't necessarily prove anything).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am sure this is not happening, because  in my program, after the MPI
</span><br>
<span class="quotelev2">&gt; &gt; initialization, the main() invokes chdir() which immediately change
</span><br>
<span class="quotelev2">&gt; &gt; the directory to the process's own directory (named after the
</span><br>
<span class="quotelev2">&gt; &gt; proc_id).  Therefore they all have their own directory to write to.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can you see anything wrong in my ./configure command which explains
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the mpirun hang at the end of the run?  How can I fix it?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No, everything looks fine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So you confirm that all raytrace instances have exited and all orteds
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have exited, leaving *only* mpirun runnning?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, I am sure that all raytrace instances as well as all mpi-related
</span><br>
<span class="quotelev2">&gt; &gt; processes (including mpirun and orteds etc.) have exited in all slave
</span><br>
<span class="quotelev2">&gt; &gt; nodes.  In the *master* node, all raytrace instances and all orteds
</span><br>
<span class="quotelev2">&gt; &gt; have exited as well, leaving *only* mpirun running in the *master*
</span><br>
<span class="quotelev2">&gt; &gt; node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 14818 pts/0    S+     0:00
</span><br>
<span class="quotelev2">&gt; &gt; /home/foo/490_research/490/src/mpi.optimized_profiling/bin/mpirun
</span><br>
<span class="quotelev2">&gt; &gt; --hostfile ../hostfile -n 32 raytrace -finputs/car.env -s
</span><br>
<span class="quotelev2">&gt; &gt; 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There was a race condition about this at one point; Ralph -- can you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; comment further?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3500.php">Chris Reeves: "[OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3498.php">Francesco Pietra: "[OMPI users] openmpi/numa"</a>
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
