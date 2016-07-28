<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 12:28:10 2006" -->
<!-- isoreceived="20060202172810" -->
<!-- sent="Thu, 2 Feb 2006 18:28:05 +0100 (MET)" -->
<!-- isosent="20060202172805" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] A few benchmarks" -->
<!-- id="Pine.OSF.4.58.0602021818210.504786_at_gwdu70.gwdg.de" -->
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
<strong>From:</strong> Carsten Kutzner (<em>ckutzne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 12:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0561.php">Brian Granger: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="0559.php">David Gunter: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Glen Kaukola: "[O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0563.php">George Bosilca: "Re: [O-MPI users] A few benchmarks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Glen,
<br>
<p>what setup have you used for doing the benchmarks? I mean,
<br>
what type of Ethernet switch, which network cards, which
<br>
linux kernel. I am asking because it looks weird to me that
<br>
the 4 CPU OpenMPI job is taking longer than the 2 CPU job,
<br>
and that the 8 CPU job is faster again. Maybe the network
<br>
settings can be optimized?
<br>
<p>Regards,
<br>
&nbsp;&nbsp;Carsten
<br>
<p><p>On Thu, 2 Feb 2006, Glen Kaukola wrote:
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0561.php">Brian Granger: "Re: [O-MPI users] Bug in C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="0559.php">David Gunter: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Glen Kaukola: "[O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0563.php">George Bosilca: "Re: [O-MPI users] A few benchmarks"</a>
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
