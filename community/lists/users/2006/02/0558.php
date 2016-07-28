<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 08:55:54 2006" -->
<!-- isoreceived="20060202135554" -->
<!-- sent="Thu, 02 Feb 2006 05:55:52 -0800" -->
<!-- isosent="20060202135552" -->
<!-- name="Glen Kaukola" -->
<!-- email="glen_at_[hidden]" -->
<!-- subject="[O-MPI users] A few benchmarks" -->
<!-- id="43E20F68.9000201_at_cert.ucr.edu" -->
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
<strong>From:</strong> Glen Kaukola (<em>glen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 08:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0559.php">David Gunter: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0557.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">David Gunter: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0559.php">David Gunter: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0560.php">Carsten Kutzner: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0563.php">George Bosilca: "Re: [O-MPI users] A few benchmarks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I recently took Open MPI (1.0.2a4) for a spin and thought you all might 
<br>
like to see how it's currently stacking up against MPICH (1.2.7p1).  The 
<br>
benchmark I used was the EPA's CMAQ (Community Multiscale Air Quality) 
<br>
model.
<br>
<p>Now bear in mind my results aren't completely scientific.  For one thing 
<br>
I'd need to run a series of jobs and take the averages.  Forgive me if 
<br>
I'm too lazy to do that.  I also didn't go through the trouble of 
<br>
completely isolating my jobs while they were running.  However, I did 
<br>
monitor them pretty closely and I'm fairly certain no jobs from other 
<br>
users crept in on the machines I was using.
<br>
<p>Anyway, without further ado, here are my results (in h:mm):
<br>
<p>Open MPI
<br>
1 cpu job: 2:38
<br>
2 cpu job: 1:26
<br>
4 cpu job: 1:38
<br>
8 cpu job: 1:08
<br>
36 cpu job: 3:09
<br>
<p>MPICH
<br>
1 cpu job: 2:38
<br>
2 cpu job: 1:27
<br>
4 cpu job: 0:48
<br>
8 cpu job: 0:32
<br>
<p>And while Open MPI does seem a bit slower, one real nice thing I can say 
<br>
is that a 16+ cpu job runs without a hitch.  I could never get away with 
<br>
that while using MPICH, as the jobs would just crash.  Whether MPICH is 
<br>
at fault, or the CMAQ code is buggy, or gigabit ethernet just isn't good 
<br>
enough, I really couldn't say.  But Open MPI sure doesn't seem to have 
<br>
that problem.
<br>
<p>It's also rather odd how the 4 cpu Open MPI job takes longer than the 2 
<br>
cpu Open MPI job.  In fact that's slightly faster compared to the first 
<br>
time I ran a 4 cpu Open MPI job (I couldn't believe it the first time so 
<br>
I reran that one).
<br>
<p>And on a totally unrelated note, after swapping out MPICH for Open MPI, 
<br>
I can't seem to background my scripts.  When I do my shell (bash) tells 
<br>
me the job has stopped.  Somewhat annoying.
<br>
<p>Anyway, keep up the good work.  I'll be paying close attention, and 
<br>
hopefully see some speedups in the not too distant future.
<br>
<p><p>Glen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0559.php">David Gunter: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0557.php">Glenn Morris: "Re: [O-MPI users] mpirun tcsh LD_LIBRARY_PATH problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0559.php">David Gunter: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0559.php">David Gunter: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0560.php">Carsten Kutzner: "Re: [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0563.php">George Bosilca: "Re: [O-MPI users] A few benchmarks"</a>
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
