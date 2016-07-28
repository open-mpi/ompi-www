<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 09:08:20 2005" -->
<!-- isoreceived="20051021140820" -->
<!-- sent="Fri, 21 Oct 2005 09:08:14 -0500" -->
<!-- isosent="20051021140814" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI debugging support" -->
<!-- id="1129903694.16079.23.camel_at_doolie.osl.iu.edu" -->
<!-- inreplyto="Pine.LNX.4.44.0510211049530.16976-100000_at_ispserv.ispras.ru" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 09:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0218.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0216.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0218.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0218.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2005-10-21 at 12:41 +0400, Konstantin Karganov wrote:
<br>
<p><span class="quotelev2">&gt; &gt; You and Chris G. raise a good point -- another parallel debugger vendor
</span><br>
<span class="quotelev2">&gt; &gt; has contacted me about the same issue (their debugger does not have an
</span><br>
<span class="quotelev2">&gt; &gt; executable named &quot;totalview&quot;). 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;...&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Comments?
</span><br>
<span class="quotelev1">&gt; Actually, the point is deeper than just a debugger naming question. 
</span><br>
<p>Understood.  My points here were that for at least some debuggers, a
<br>
naming scheme is all they need, and we should be able to accommodate
<br>
that.
<br>
<p><span class="quotelev1">&gt; High-quality MPI implementation should provide more flexibility to the 
</span><br>
<span class="quotelev1">&gt; user. 
</span><br>
<p>Heh.  Are you calling us a low-quality implementation?  ;-)
<br>
<p><span class="quotelev1">&gt; The debuggers may differ by startup algorithms: MPICH (the same 
</span><br>
<span class="quotelev1">&gt; example) allows to write arbitrary script for starting the custom 
</span><br>
<span class="quotelev1">&gt; debugger. And it works fine launching this script in run-time (there is a 
</span><br>
<span class="quotelev1">&gt; naming convention), w/o need to rebuild and reinstall the library.
</span><br>
<p>Understood.  However, our startup philosophy is quite different than
<br>
MPICH's; having a compiled executable as the starter has many more
<br>
benefits than problems (IMHO).  You have concretely identified a problem
<br>
-- that there is no flexibility in different debugger bootstrap
<br>
mechanisms -- and a) I agree, b) I think we can fix it easily, and c) I
<br>
would prefer not to revert to scripts as the only solution.
<br>
<p>This was the intent of my comments about making a component framework
<br>
for debugger bootstrapping -- the TotalView (and TotalView-like)
<br>
debugger support can go in one component and &quot;something else&quot; can go in
<br>
other components.  
<br>
<p><span class="quotelev1">&gt; Actually all I need is the same, that orte already does:
</span><br>
<span class="quotelev1">&gt; 1. Launch the processes on all nodes
</span><br>
<span class="quotelev1">&gt; 2. Make sure they are successfully launched.
</span><br>
<span class="quotelev1">&gt; 3. Get the array of handles to read/write to each process
</span><br>
<span class="quotelev1">&gt; 4. Be able to stop the processes
</span><br>
<span class="quotelev1">&gt; 5. Probably send signals to processes (gdb uses SIGINT to interrupt 
</span><br>
<span class="quotelev1">&gt; execution)
</span><br>
<span class="quotelev1">&gt; 6. Probably have the info about node names and PIDs to display it and to 
</span><br>
<span class="quotelev1">&gt; implement pp.4-5
</span><br>
<span class="quotelev1">&gt; Looks just the same as for usual run, but the devil is surely in the 
</span><br>
<span class="quotelev1">&gt; details.
</span><br>
<p>Yes, it is quite similar -- there are a few minor differences, though.
<br>
We don't currently support sending arbitrary signals (it certainly can
<br>
be done -- at least in some environments -- we just haven't had a need
<br>
for that yet), and IMHO, it would be nice if ORTE could handle &quot;launch
<br>
this job alongside that other job&quot; bookkeeping for you, so that you
<br>
don't need to specify all the location/process placement stuff.
<br>
<p><span class="quotelev2">&gt; &gt; I think the two main things you want are:
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; 1. the information about the MPI processes in the ORTE job of interest
</span><br>
<span class="quotelev2">&gt; &gt; (are you interested in handling MPI-2 dynamic situations?).
</span><br>
<span class="quotelev1">&gt; Not yet. It is planned to support only MPI 1.2 for the first release.
</span><br>
<p>Gotcha.  Let us know when you're interested; there's a lot of unanswered
<br>
questions in that arena.
<br>
<p><span class="quotelev2">&gt; &gt; 2. &lt;..&gt;
</span><br>
<span class="quotelev1">&gt; I also might want 3. Get the knowlwdge &quot;how it works&quot; to be able to play 
</span><br>
<span class="quotelev1">&gt; with the code myself :)
</span><br>
<p>Excellent.  :-)
<br>
<p><span class="quotelev2">&gt; &gt; TV's view of the world is to ave &quot;one&quot; master debugger that controls all 
</span><br>
<span class="quotelev2">&gt; &gt; the processes, so having a separate &quot;starter&quot; process in addition to the 
</span><br>
<span class="quotelev2">&gt; &gt; MPI processes was no big deal.
</span><br>
<span class="quotelev1">&gt; I'm trying to do the same way - attach gdb to each process as a node 
</span><br>
<span class="quotelev1">&gt; debugger and connect all this to the main debugger process, that has GUI 
</span><br>
<span class="quotelev1">&gt; and implements all &quot;parallel&quot; logic.
</span><br>
<span class="quotelev1">&gt; The question was merely how to do it: call &quot;gdb orterun&quot; and catch it 
</span><br>
<span class="quotelev1">&gt; somewhere on breakpoint or attach to orterun later or smth else.
</span><br>
<p>Yes -- per your other mail:
<br>
<p><span class="quotelev1">&gt; Reply to myself:
</span><br>
<span class="quotelev1">&gt; # gdb orterun
</span><br>
<span class="quotelev1">&gt; (gdb) br MPIR_Breakpoint
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; (gdb) &lt;get the table&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) detach
</span><br>
<span class="quotelev1">&gt; (gdb) exit
</span><br>
<p><span class="quotelev1">&gt; Am I right?
</span><br>
<p>Essentially, yes.  We also need to set an MCA param that gets propagated
<br>
out to all the MPI processes telling them to block in MPI_INIT until the
<br>
debugger attaches and changes a value (see
<br>
ompi/debuggers/ompi_totalview.c -- it's called at the very end of
<br>
MPI_INIT, in ompi/runtime/ompi_mpi_init.c).
<br>
<p><span class="quotelev2">&gt; &gt; if you're actually integrated in as a component, then you could get the 
</span><br>
<span class="quotelev2">&gt; &gt; information directly (i.e., via API)...?  The possibilities here are 
</span><br>
<span class="quotelev2">&gt; &gt; open. 
</span><br>
<span class="quotelev1">&gt; This also sounds interesting.
</span><br>
<p>This is the primary route that I'd like to follow.  We had always
<br>
envisioned doing this; you've giving us a concrete reason to do so.  :-)
<br>
Our general rule of implementation in Open MPI is &quot;if we ever want to
<br>
implement something multiple different ways, make it a framework and
<br>
write components).
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0218.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0216.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0218.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0218.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
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
