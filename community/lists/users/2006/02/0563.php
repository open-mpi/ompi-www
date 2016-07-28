<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 14:58:34 2006" -->
<!-- isoreceived="20060202195834" -->
<!-- sent="Thu, 2 Feb 2006 14:58:35 -0500 (EST)" -->
<!-- isosent="20060202195835" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] A few benchmarks" -->
<!-- id="Pine.LNX.4.58.0602021314460.5978_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43E20F68.9000201_at_cert.ucr.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 14:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0564.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0562.php">Brian Granger: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Glen Kaukola: "[O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0589.php">Glen Kaukola: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0589.php">Glen Kaukola: "Re: [O-MPI users] A few benchmarks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Glen,
<br>
<p>Thanks for the spending time benchmarking OpenMPI and for sending us the
<br>
feedback. We know we have some issues on the 1.0.2 version, more precisely
<br>
with the collective communications. We just look inside the CMAQ code, and
<br>
there are a lot of reduce and Allreduce. As it look like the collective
<br>
are intensively used it's normal that the 1.0.2a4 is slower than MPICH (I
<br>
expect the same behaviour for both MPICH1 and MPICH2). The collective are
<br>
now fixed in the nightly build, we are working toward moving them on the
<br>
next stable release. Until then, if you can redo the benchmark with one of
<br>
the nightly build that will be very usefull. I'm confident that the
<br>
results will improve considerably.
<br>
<p>For the second problem, Brian is taking a look. He identify the problem,
<br>
we just have to figure out how to solve it correctly. It will go in the
<br>
trunk shorthly.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Thu, 2 Feb 2006, Glen Kaukola wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently took Open MPI (1.0.2a4) for a spin and thought you all might
</span><br>
<span class="quotelev1">&gt; like to see how it's currently stacking up against MPICH (1.2.7p1).  The
</span><br>
<span class="quotelev1">&gt; benchmark I used was the EPA's CMAQ (Community Multiscale Air Quality)
</span><br>
<span class="quotelev1">&gt; model.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now bear in mind my results aren't completely scientific.  For one thing
</span><br>
<span class="quotelev1">&gt; I'd need to run a series of jobs and take the averages.  Forgive me if
</span><br>
<span class="quotelev1">&gt; I'm too lazy to do that.  I also didn't go through the trouble of
</span><br>
<span class="quotelev1">&gt; completely isolating my jobs while they were running.  However, I did
</span><br>
<span class="quotelev1">&gt; monitor them pretty closely and I'm fairly certain no jobs from other
</span><br>
<span class="quotelev1">&gt; users crept in on the machines I was using.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, without further ado, here are my results (in h:mm):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI
</span><br>
<span class="quotelev1">&gt; 1 cpu job: 2:38
</span><br>
<span class="quotelev1">&gt; 2 cpu job: 1:26
</span><br>
<span class="quotelev1">&gt; 4 cpu job: 1:38
</span><br>
<span class="quotelev1">&gt; 8 cpu job: 1:08
</span><br>
<span class="quotelev1">&gt; 36 cpu job: 3:09
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPICH
</span><br>
<span class="quotelev1">&gt; 1 cpu job: 2:38
</span><br>
<span class="quotelev1">&gt; 2 cpu job: 1:27
</span><br>
<span class="quotelev1">&gt; 4 cpu job: 0:48
</span><br>
<span class="quotelev1">&gt; 8 cpu job: 0:32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And while Open MPI does seem a bit slower, one real nice thing I can say
</span><br>
<span class="quotelev1">&gt; is that a 16+ cpu job runs without a hitch.  I could never get away with
</span><br>
<span class="quotelev1">&gt; that while using MPICH, as the jobs would just crash.  Whether MPICH is
</span><br>
<span class="quotelev1">&gt; at fault, or the CMAQ code is buggy, or gigabit ethernet just isn't good
</span><br>
<span class="quotelev1">&gt; enough, I really couldn't say.  But Open MPI sure doesn't seem to have
</span><br>
<span class="quotelev1">&gt; that problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's also rather odd how the 4 cpu Open MPI job takes longer than the 2
</span><br>
<span class="quotelev1">&gt; cpu Open MPI job.  In fact that's slightly faster compared to the first
</span><br>
<span class="quotelev1">&gt; time I ran a 4 cpu Open MPI job (I couldn't believe it the first time so
</span><br>
<span class="quotelev1">&gt; I reran that one).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And on a totally unrelated note, after swapping out MPICH for Open MPI,
</span><br>
<span class="quotelev1">&gt; I can't seem to background my scripts.  When I do my shell (bash) tells
</span><br>
<span class="quotelev1">&gt; me the job has stopped.  Somewhat annoying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, keep up the good work.  I'll be paying close attention, and
</span><br>
<span class="quotelev1">&gt; hopefully see some speedups in the not too distant future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Glen
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
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0564.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0562.php">Brian Granger: "Re: [O-MPI users] Configuring process startup on OS X"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Glen Kaukola: "[O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0589.php">Glen Kaukola: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0589.php">Glen Kaukola: "Re: [O-MPI users] A few benchmarks"</a>
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
