<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 27 20:21:23 2007" -->
<!-- isoreceived="20070628002123" -->
<!-- sent="Wed, 27 Jun 2007 20:20:52 -0400 (EDT)" -->
<!-- isosent="20070628002052" -->
<!-- name="Brian Dobbins" -->
<!-- email="brian.dobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: MPI question/problem] including code attachments" -->
<!-- id="1600.76.214.45.231.1182990052.squirrel_at_combustion.eng.yale.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] [Fwd: MPI question/problem] including code attachments" -->
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
<strong>From:</strong> Brian Dobbins (<em>brian.dobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-27 20:20:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3556.php">Glenn Carver: "[OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>Previous message:</strong> <a href="3554.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] initial setup"</a>
<li><strong>Maybe in reply to:</strong> <a href="3522.php">Jeffrey L. Tilson: "[OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>&nbsp;&nbsp;I just came across this thread while googling when I faced a similar
<br>
problem with a certain code - after scratching my head for a bit, it
<br>
turns out the solution is pretty simple. My guess is that Jeff's code
<br>
has it's own copy of 'mpif.h' in its source directory, and in all
<br>
likelihood, it's an MPICH version of mpif.h.  Delete it, recompile,
<br>
(OpenMPI by default will look for mpif.h in the $(install)/include
<br>
directory), and you should be able to run fine.
<br>
<p>&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><p>Yale Engineering HPC
<br>
<p><p>&nbsp;&nbsp;&nbsp;-- original message follows --
<br>
<p>Hello All,
<br>
This will probably turn out to be my fault as I haven't used MPI in a
<br>
few years.
<br>
<p>I am attempting to use an MPI implementation of a &quot;nxtval&quot; (see the MPI
<br>
book). I am using the client-server scenario. The MPI book specifies the
<br>
three functions required. Two are collective and one is not. Only the
<br>
two collectives are tested in the supplied code. All three of the MPI
<br>
functions are reproduced in the attached code, however. I wrote a tiny
<br>
application to create and free a counter object and it fails.
<br>
<p>I need to know if this is a bug in the MPI book and a misunderstanding
<br>
on my part.
<br>
<p>The complete code is attached. I was using openMPI/intel to compile and
<br>
run.
<br>
<p>The error I get is:
<br>
<p><span class="quotelev1">&gt; [compute-0-1.local:22637] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:22637] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:22637] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:22637] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 22635 on node
</span><br>
<span class="quotelev1">&gt; &quot;compute-0-1.local&quot; exited on signal 15.
</span><br>
<p>I've attempted to google my way to understanding but with little
<br>
success. If someone could point me to
<br>
a sample application that actually uses these functions, I would
<br>
appreciate it.
<br>
<p>Sorry if this is the wrong list, it is not an MPICH question and I
<br>
wasn't sure where to turn.
<br>
Thanks,
<br>
--jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3556.php">Glenn Carver: "[OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>Previous message:</strong> <a href="3554.php">Adams, Samuel D Contr AFRL/HEDR: "[OMPI users] initial setup"</a>
<li><strong>Maybe in reply to:</strong> <a href="3522.php">Jeffrey L. Tilson: "[OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
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
