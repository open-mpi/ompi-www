<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 20 11:23:11 2005" -->
<!-- isoreceived="20051120162311" -->
<!-- sent="Sun, 20 Nov 2005 11:23:03 -0500" -->
<!-- isosent="20051120162303" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenMPI debugging support" -->
<!-- id="c090b8285c424faa5f6a509886a59644_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1129839985.10636.42.camel_at_doolie.osl.iu.edu" -->
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
<strong>Date:</strong> 2005-11-20 11:23:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0371.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>Previous message:</strong> <a href="0369.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0211.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To follow up on this thread --
<br>
<p>Now that 1.0 is out the door, I went back and implemented this prior 
<br>
suggestion (about making it easier to launch Open MPI under debuggers 
<br>
other than TotalView -- see original text below).  This is only 
<br>
implemented on the trunk, meaning that it will be in the 1.1 series; it 
<br>
will not be in any 1.0.x release.
<br>
<p>The MCA parameter that contains the list of debuggers to search is 
<br>
orte_base_user_debugger.  It currently defaults to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;totalview @mpirun@ -a @mpirun_args@ : fx2 @mpirun@ -a @mpirun_args@
<br>
<p>where @mpirun@ and @mpirun_args@ are substituted at run-time.  We can 
<br>
certainly add more debuggers to the default value, if desired.  Local 
<br>
users can, of course, override the default with any of the usual MCA 
<br>
parameter-setting mechanisms (files, environment variables, 
<br>
command-line parameters).
<br>
<p>The mpirun option -tv is hereby deprecated and is now simply a synonym 
<br>
for --debug (i.e., it won't go away because of the precedent set in the 
<br>
1.0.x series).
<br>
<p><p>On Oct 20, 2005, at 4:26 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; You and Chris G. raise a good point -- another parallel debugger vendor
</span><br>
<span class="quotelev1">&gt; has contacted me about the same issue (their debugger does not have an
</span><br>
<span class="quotelev1">&gt; executable named &quot;totalview&quot;).  In off-list iterations with him, we
</span><br>
<span class="quotelev1">&gt; decided on some kind of format like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpirun [--debugger &lt;name&gt;] --debug ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The intent here is to make the common case easy for the user, but also
</span><br>
<span class="quotelev1">&gt; allow flexibility in which back-end debugger is invoked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First -- the common case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpirun --debug -np 4 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will invoke whatever back-end debugger the user has with the proper 
</span><br>
<span class="quotelev1">&gt; argv
</span><br>
<span class="quotelev1">&gt; to get mpirun and &quot;-np -4 a.out&quot; passed back to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --debugger is a synonym for an MCA parameter, so it can be set in a
</span><br>
<span class="quotelev1">&gt; variety of ways (e.g., command line, environment variable, or in a
</span><br>
<span class="quotelev1">&gt; file).  The string parameter for --debugger can specify multiple
</span><br>
<span class="quotelev1">&gt; different debuggers (and associated command lines -- with string
</span><br>
<span class="quotelev1">&gt; substitution -- to invoke those debuggers); OMPI's mpirun will search
</span><br>
<span class="quotelev1">&gt; for the first debugger that it can find in the current PATH and invoke
</span><br>
<span class="quotelev1">&gt; it.  For example, we'll probably have a default value for --debugger
</span><br>
<span class="quotelev1">&gt; something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&quot;totalview mpirun -a @mpirun_args@ : fx2 mpirun -a @mpirun_args&quot;
</span><br>
<span class="quotelev1">&gt; and assume that the user invoked
</span><br>
<span class="quotelev1">&gt; 	mpirun --debug -np 4 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would tell OMPI's mpirun to first search for &quot;totalview&quot; in the
</span><br>
<span class="quotelev1">&gt; current $PATH.  If it doesn't find it, then search for &quot;fx2&quot; in the
</span><br>
<span class="quotelev1">&gt; $PATH.  If it is found, mpirun will exec &quot;fx2 mpirun -a -np 4 a.out&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And, of course, anyone can override that default value (and we're open
</span><br>
<span class="quotelev1">&gt; to adding more -- TV and FX2 are the only ones that I'm aware of at the
</span><br>
<span class="quotelev1">&gt; moment).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, this only works well for cases where we want to exec a new
</span><br>
<span class="quotelev1">&gt; application to invoke the debugger.  Specifically, using &quot;--debug&quot; to
</span><br>
<span class="quotelev1">&gt; start under TV and FX2 is simply syntactic sugar for invoking it
</span><br>
<span class="quotelev1">&gt; yourself, but we've found that users tend to like this.
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
<li><strong>Next message:</strong> <a href="0371.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>Previous message:</strong> <a href="0369.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0214.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0211.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
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
