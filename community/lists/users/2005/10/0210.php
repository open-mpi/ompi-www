<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 20 11:57:48 2005" -->
<!-- isoreceived="20051020165748" -->
<!-- sent="Thu, 20 Oct 2005 11:57:41 -0500" -->
<!-- isosent="20051020165741" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI debugging support" -->
<!-- id="1129827461.8968.16.camel_at_doolie.osl.iu.edu" -->
<!-- inreplyto="Pine.LNX.4.44.0510201258590.24726-100000_at_ispserv.ispras.ru" -->
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
<strong>Date:</strong> 2005-10-20 11:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0211.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0209.php">Konstantin Karganov: "[O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0209.php">Konstantin Karganov: "[O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0212.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0212.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2005-10-20 at 13:04 +0400, Konstantin Karganov wrote:
<br>
<p><span class="quotelev1">&gt; I'm working on an MPI-debugger project and have questions on OpenMPI
</span><br>
<span class="quotelev1">&gt; support for debugger tools. Any info or links to docs would be
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<p>At the moment, we're sadly lacking in documentation (particularly
<br>
developer documentation).  This list is probably your best bet
<br>
(actually, devel_at_[hidden] is probably better).
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; At the moment, I'm interested in debug session startup implementation.
</span><br>
<span class="quotelev1">&gt; Currently I have a code, that starts MPI program under debugger for
</span><br>
<span class="quotelev1">&gt; MPICH, and it seems that OpenMPI is much different.
</span><br>
<p>Correct.  Open MPI's startup is fully modularized -- we can start under
<br>
a variety of different launchers (e.g., rsh/ssh, SLURM, PBS, ...etc.).
<br>
See the FAQ on the web site for more details
<br>
(<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>).
<br>
<p><span class="quotelev1">&gt; 1. MPICH program startup is implemented as a set of shell-scripts and all
</span><br>
<span class="quotelev1">&gt; I need is to put a debugger-specific startup script, that would be
</span><br>
<span class="quotelev1">&gt; called from mpirun. What do I need to add a custom debugger support to
</span><br>
<span class="quotelev1">&gt; OpenMPI? Do you plan to support several debuggers and how it is to be
</span><br>
<span class="quotelev1">&gt; implemented?
</span><br>
<p>Right now, we only support the TotalView API for attaching debuggers.
<br>
However, we're quite open to other approaches.  Because of the nature of
<br>
our integration with a variety of different run-time environments, our
<br>
startup is not a shell script -- mpirun (&quot;orterun&quot; is its real name;
<br>
&quot;mpirun&quot; is a sym link to orterun) is a compiled executable.
<br>
<p>What are the requirements of your debugger?  Do you attempt to launch
<br>
the MPI processes yourself, or do you attach to them after they are
<br>
launched (which is what TotalView does)?
<br>
<p><span class="quotelev1">&gt; 2. MPICH (at least for ch_p4 device) launches one process from mpirun
</span><br>
<span class="quotelev1">&gt; and other processes are launched later inside MPI_Init. In
</span><br>
<span class="quotelev1">&gt; orte/tools/orterun/totalview.cpp it is said that the same model is
</span><br>
<span class="quotelev1">&gt; implemented, but in practice all processes start together long
</span><br>
<span class="quotelev1">&gt; before MPI_Init. (BTW: what is this - mpirun that is running as a
</span><br>
<span class="quotelev1">&gt; background process becomes &quot;stopped&quot; all the time I try to &quot;bg&quot; it?)
</span><br>
<span class="quotelev1">&gt; What is the &quot;correct&quot; way and how it is supposed to get a debugger
</span><br>
<span class="quotelev1">&gt; attached to all processes of the program?
</span><br>
<p>Open MPI uses orterun as its launcher, not the first MPI process.
<br>
Hence, it is the one that TotalView gets it information from (in that
<br>
sense, it's similar to the MPICH model -- there is one coordinator; it's
<br>
just that it's orterun, not the first MPI process).  Once orterun
<br>
receives notification that all the MPI processes have started, it gives
<br>
the nodename/PID information of each process to TotalView who then
<br>
launches its own debugger processes on those nodes and attaches to the
<br>
processes.  
<br>
<p>You probably get a &quot;stopped&quot; message when you try to bg orterun because
<br>
the shell thinks that it is waiting for input from stdin, because we
<br>
didn't close it.
<br>
<p>Does that help?
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
<li><strong>Next message:</strong> <a href="0211.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Previous message:</strong> <a href="0209.php">Konstantin Karganov: "[O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0209.php">Konstantin Karganov: "[O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0212.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>Reply:</strong> <a href="0212.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
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
