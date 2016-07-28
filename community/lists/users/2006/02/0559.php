<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 10:32:45 2006" -->
<!-- isoreceived="20060202153245" -->
<!-- sent="Thu, 2 Feb 2006 08:32:42 -0700" -->
<!-- isosent="20060202153242" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] A few benchmarks" -->
<!-- id="35025073-FFC3-47DC-8906-9EE0E5397193_at_lanl.gov" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 10:32:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0560.php">Carsten Kutzner: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0558.php">Glen Kaukola: "[O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Glen Kaukola: "[O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0560.php">Carsten Kutzner: "Re: [O-MPI users] A few benchmarks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would like see more of such results.  In particular it would be  
<br>
nice to see a comparison of OpenMPI to the newer MPICH2.
<br>
<p>Thanks, Glen.
<br>
<p>-david
<br>
<p><pre>
--
David Gunter
CCN-8: HPC Environments - Parallel Tools
On Feb 2, 2006, at 6:55 AM, Glen Kaukola wrote:
&gt; Hi everyone,
&gt;
&gt; I recently took Open MPI (1.0.2a4) for a spin and thought you all  
&gt; might
&gt; like to see how it's currently stacking up against MPICH  
&gt; (1.2.7p1).  The
&gt; benchmark I used was the EPA's CMAQ (Community Multiscale Air Quality)
&gt; model.
&gt;
&gt; Now bear in mind my results aren't completely scientific.  For one  
&gt; thing
&gt; I'd need to run a series of jobs and take the averages.  Forgive me if
&gt; I'm too lazy to do that.  I also didn't go through the trouble of
&gt; completely isolating my jobs while they were running.  However, I did
&gt; monitor them pretty closely and I'm fairly certain no jobs from other
&gt; users crept in on the machines I was using.
&gt;
&gt; Anyway, without further ado, here are my results (in h:mm):
&gt;
&gt; Open MPI
&gt; 1 cpu job: 2:38
&gt; 2 cpu job: 1:26
&gt; 4 cpu job: 1:38
&gt; 8 cpu job: 1:08
&gt; 36 cpu job: 3:09
&gt;
&gt; MPICH
&gt; 1 cpu job: 2:38
&gt; 2 cpu job: 1:27
&gt; 4 cpu job: 0:48
&gt; 8 cpu job: 0:32
&gt;
&gt; And while Open MPI does seem a bit slower, one real nice thing I  
&gt; can say
&gt; is that a 16+ cpu job runs without a hitch.  I could never get away  
&gt; with
&gt; that while using MPICH, as the jobs would just crash.  Whether  
&gt; MPICH is
&gt; at fault, or the CMAQ code is buggy, or gigabit ethernet just isn't  
&gt; good
&gt; enough, I really couldn't say.  But Open MPI sure doesn't seem to have
&gt; that problem.
&gt;
&gt; It's also rather odd how the 4 cpu Open MPI job takes longer than  
&gt; the 2
&gt; cpu Open MPI job.  In fact that's slightly faster compared to the  
&gt; first
&gt; time I ran a 4 cpu Open MPI job (I couldn't believe it the first  
&gt; time so
&gt; I reran that one).
&gt;
&gt; And on a totally unrelated note, after swapping out MPICH for Open  
&gt; MPI,
&gt; I can't seem to background my scripts.  When I do my shell (bash)  
&gt; tells
&gt; me the job has stopped.  Somewhat annoying.
&gt;
&gt; Anyway, keep up the good work.  I'll be paying close attention, and
&gt; hopefully see some speedups in the not too distant future.
&gt;
&gt;
&gt; Glen
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0560.php">Carsten Kutzner: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0558.php">Glen Kaukola: "[O-MPI users] A few benchmarks"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Glen Kaukola: "[O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0560.php">Carsten Kutzner: "Re: [O-MPI users] A few benchmarks"</a>
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
