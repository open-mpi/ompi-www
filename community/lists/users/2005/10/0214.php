<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 20 15:26:33 2005" -->
<!-- isoreceived="20051020202633" -->
<!-- sent="Thu, 20 Oct 2005 15:26:25 -0500" -->
<!-- isosent="20051020202625" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI debugging support" -->
<!-- id="1129839985.10636.42.camel_at_doolie.osl.iu.edu" -->
<!-- inreplyto="Pine.LNX.4.44.0510202107410.5234-100000_at_ispserv.ispras.ru" -->
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
<strong>Date:</strong> 2005-10-20 15:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0213.php">Chris Gottbrath: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0370.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2005-10-20 at 22:03 +0400, Konstantin Karganov wrote:
<br>
<span class="quotelev2">&gt; &gt; However, we're quite open to other approaches.  Because of the nature of
</span><br>
<span class="quotelev2">&gt; &gt; our integration with a variety of different run-time environments, our
</span><br>
<span class="quotelev2">&gt; &gt; startup is not a shell script -- mpirun (&quot;orterun&quot; is its real name;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;mpirun&quot; is a sym link to orterun) is a compiled executable.
</span><br>
<span class="quotelev1">&gt; Surely, I saw that mpirun is the orterun executable :)
</span><br>
<span class="quotelev1">&gt; And this means that to add some features I need to rebuild it (and some 
</span><br>
<span class="quotelev1">&gt; run-time libs probably) each time. 
</span><br>
<p>Correct.
<br>
<p><span class="quotelev2">&gt; &gt; What are the requirements of your debugger?  Do you attempt to launch
</span><br>
<span class="quotelev2">&gt; &gt; the MPI processes yourself, or do you attach to them after they are
</span><br>
<span class="quotelev2">&gt; &gt; launched (which is what TotalView does)?
</span><br>
<span class="quotelev1">&gt; It is supposed to attach GDB to each process after it has launched, so the 
</span><br>
<span class="quotelev1">&gt; TotalView interface goes well, except that its details are hardcoded in 
</span><br>
<span class="quotelev1">&gt; the source of orte/tools/orterun (as you may guess I don't have the 
</span><br>
<span class="quotelev1">&gt; executable named &quot;totalview&quot;, etc.). 
</span><br>
<p>You and Chris G. raise a good point -- another parallel debugger vendor
<br>
has contacted me about the same issue (their debugger does not have an
<br>
executable named &quot;totalview&quot;).  In off-list iterations with him, we
<br>
decided on some kind of format like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun [--debugger &lt;name&gt;] --debug ..
<br>
<p>The intent here is to make the common case easy for the user, but also
<br>
allow flexibility in which back-end debugger is invoked.
<br>
<p>First -- the common case:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --debug -np 4 a.out
<br>
<p>Will invoke whatever back-end debugger the user has with the proper argv
<br>
to get mpirun and &quot;-np -4 a.out&quot; passed back to it.
<br>
<p>--debugger is a synonym for an MCA parameter, so it can be set in a
<br>
variety of ways (e.g., command line, environment variable, or in a
<br>
file).  The string parameter for --debugger can specify multiple
<br>
different debuggers (and associated command lines -- with string
<br>
substitution -- to invoke those debuggers); OMPI's mpirun will search
<br>
for the first debugger that it can find in the current PATH and invoke
<br>
it.  For example, we'll probably have a default value for --debugger
<br>
something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;totalview mpirun -a @mpirun_args@ : fx2 mpirun -a @mpirun_args&quot;
<br>
and assume that the user invoked
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --debug -np 4 a.out
<br>
<p><p>This would tell OMPI's mpirun to first search for &quot;totalview&quot; in the
<br>
current $PATH.  If it doesn't find it, then search for &quot;fx2&quot; in the
<br>
$PATH.  If it is found, mpirun will exec &quot;fx2 mpirun -a -np 4 a.out&quot;.
<br>
<p>And, of course, anyone can override that default value (and we're open
<br>
to adding more -- TV and FX2 are the only ones that I'm aware of at the
<br>
moment).
<br>
<p>Also, this only works well for cases where we want to exec a new
<br>
application to invoke the debugger.  Specifically, using &quot;--debug&quot; to
<br>
start under TV and FX2 is simply syntactic sugar for invoking it
<br>
yourself, but we've found that users tend to like this.
<br>
<p>This is the current plan (I haven't gotten around to implementing it yet
<br>
-- it's probably only 2-3 hours worth of work, but it hasn't been a high
<br>
priority yet).  Comments?
<br>
<p><span class="quotelev1">&gt; I'd like to know when and where do 
</span><br>
<span class="quotelev1">&gt; the functions from orterun/totalview.{h,c} get called, do I need to write 
</span><br>
<span class="quotelev1">&gt; my own file like this, etc. In other words, &quot;the debugger adder reference 
</span><br>
<span class="quotelev1">&gt; manual&quot; :)
</span><br>
<p>Right now, there is no such manual -- we had only added the TV stuff
<br>
according to what TV (and FX2 and DDT) require.  These functions are
<br>
always invoked inside mpirun -- one is just before we actually launch
<br>
the processes and the other is right after we have confirmation that
<br>
they're all blocking inside MPI_INIT waiting for the debugger to attach.
<br>
<p>Read the TV specifications about how they attach -- if you have a
<br>
different scheme, let's talk...  As you probably know, OMPI is
<br>
fundamentally based upon a component architecture.  We could open this
<br>
up to making the parallel debugging stuff be a component, and, as such,
<br>
do something totally different for different debuggers.
<br>
<p><span class="quotelev1">&gt; Currently I launch gdb's on remote processes via ssh (as MPICH does), but 
</span><br>
<span class="quotelev1">&gt; probably it will be better to use orte framework capabilities for this. 
</span><br>
<span class="quotelev1">&gt; Don't know yet how.
</span><br>
<p>Gotcha; not a bad idea.  Might fit nicely into having support for your
<br>
debugger be a component...?
<br>
<p>When making a new kind of component for OMPI, we always ask ourselves:
<br>
what, abstractly, does this thing need to do?  Assume that we already
<br>
have controls that tell the MPI processes that they're being debugged
<br>
(or not).  If they are, they'll need to wait upon some kind of
<br>
notification from the debugger indicating that it has attached before
<br>
continuing (right now, this is at the very, very end of MPI_INIT; they
<br>
wait for the value of a variable to change).  Additionally, the debugger
<br>
needs to be able to discover the nodename/PID's of the MPI processes of
<br>
interest.
<br>
<p>For basic attaching purposes, I think that these are the main points.
<br>
Any other ideas?
<br>
<p><span class="quotelev1">&gt; In general, are there an ompi/orte architecture description docs, other 
</span><br>
<span class="quotelev1">&gt; than short schemes in your publications? It's too general there and too 
</span><br>
<span class="quotelev1">&gt; detailed in sources and doxygen docs. Some intermediate &quot;how all this 
</span><br>
<span class="quotelev1">&gt; works together&quot; doc is needed to assemble the whole picture...
</span><br>
<span class="quotelev1">&gt; For me, I do not understand it completely.
</span><br>
<p>The Open Run-Time Environment (ORTE) layer in OMPI is responsible for
<br>
all this kind of stuff -- it's all the things that happen before
<br>
MPI_INIT is ever reached (hence, &quot;orterun&quot;).  There's a fairly
<br>
complicated dance that occurs to spawn a &quot;job&quot; (a collection of
<br>
individual processes).
<br>
<p>I think the two main things you want are:
<br>
<p>1. the information about the MPI processes in the ORTE job of interest
<br>
(are you interested in handling MPI-2 dynamic situations?).  Right now,
<br>
this is only available in the totalview.c code in orterun (per the TV
<br>
specs).  But as I mentioned, we could do something else.
<br>
<p>2. how to launch your debugger agents out alongside the MPI processes of
<br>
interest.  Since we have little/no documentation about the internals at
<br>
this point, I'm admittedly waving my hands here, but essentially you'll
<br>
call orte_rmgr.spawn(), very similar to the invocation in orterun.c.
<br>
75% of orterun.c is setting up the arguments to spawn() (not because the
<br>
arguments are complicated, but rather because we allow quite complex
<br>
command line argument forms to orterun); the remaining 25% is waiting
<br>
for the various notifications of completion from ORTE that the job is
<br>
dead.  We might need a little extra logic here to ensure that your job
<br>
is literally launched alongside the processes of interest, but this is
<br>
certainly do-able.
<br>
<p><span class="quotelev2">&gt; &gt; Open MPI uses orterun as its launcher, not the first MPI process.
</span><br>
<span class="quotelev2">&gt; &gt; Hence, it is the one that TotalView gets it information from (in that
</span><br>
<span class="quotelev2">&gt; &gt; sense, it's similar to the MPICH model -- there is one coordinator; it's
</span><br>
<span class="quotelev2">&gt; &gt; just that it's orterun, not the first MPI process).  Once orterun
</span><br>
<span class="quotelev2">&gt; &gt; receives notification that all the MPI processes have started, it gives
</span><br>
<span class="quotelev2">&gt; &gt; the nodename/PID information of each process to TotalView who then
</span><br>
<span class="quotelev2">&gt; &gt; launches its own debugger processes on those nodes and attaches to the
</span><br>
<span class="quotelev2">&gt; &gt; processes.  
</span><br>
<span class="quotelev1">&gt; Hm.. with MPICH I use the first gdb copy to get the info from the 0-th 
</span><br>
<span class="quotelev1">&gt; process and then continue to use it as a node debugger, here I'll have to 
</span><br>
<span class="quotelev1">&gt; use one more gdb to get the process table out of orterun process? And how 
</span><br>
<span class="quotelev1">&gt; to do this in a safe way?
</span><br>
<p>In the current implementation, yes, you'll need another gdb (you have to
<br>
remember where this stuff came from -- TV's view of the world is to ave
<br>
&quot;one&quot; master debugger that controls all the processes, so having a
<br>
separate &quot;starter&quot; process in addition to the MPI processes was no big
<br>
deal).  We could do something different, though, such as dump out the
<br>
information to a file, or if you're actually integrated in as a
<br>
component, then you could get the information directly (i.e., via
<br>
API)...?  The possibilities here are open.
<br>
<p><span class="quotelev2">&gt; &gt; You probably get a &quot;stopped&quot; message when you try to bg orterun because
</span><br>
<span class="quotelev2">&gt; &gt; the shell thinks that it is waiting for input from stdin, because we
</span><br>
<span class="quotelev2">&gt; &gt; didn't close it.
</span><br>
<span class="quotelev1">&gt; Actually this shouldn't matter. Many programs don't close stdin but 
</span><br>
<span class="quotelev1">&gt; nothing prevents them from running in background until they try to 
</span><br>
<span class="quotelev1">&gt; read input. The same &quot;Hello world&quot; application runs well with MPICH 
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -np 3 a.out &amp;&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Konstantin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0213.php">Chris Gottbrath: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0212.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0215.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/11/0370.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
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
