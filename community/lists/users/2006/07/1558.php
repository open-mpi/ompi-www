<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 21:16:20 2006" -->
<!-- isoreceived="20060706011620" -->
<!-- sent="Wed, 5 Jul 2006 21:16:17 -0400 (EDT)" -->
<!-- isosent="20060706011617" -->
<!-- name="Andrew J Caird" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg" -->
<!-- id="Pine.LNX.4.63.0607052107390.13896_at_lancaster.engin.umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFA43640_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Andrew J Caird (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 21:16:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1559.php">Eric Thibodeau: "Re: [OMPI users] OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:0), si_code:1(BUS_ADRALN) (Terry D., Dontje)"</a>
<li><strong>Previous message:</strong> <a href="1557.php">Eric Thibodeau: "[OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1441.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1565.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This took a long time for me to get to, but once I did, what I found was 
<br>
that the closest thing to working for the PGI compilers with OpenMPI is 
<br>
this command:
<br>
&nbsp;&nbsp;&nbsp;mpirun --debugger &quot;pgdbg @mpirun@ @mpirun_args@&quot; --debug -np 2 ./cpi
<br>
<p>It appears to work, that is, you can select a process with the &quot;proc&quot; 
<br>
command in pgdbg and set break points and all, but pgdbg prints a lot of 
<br>
error messages that are all the same:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;db_set_code_brk : DiBreakpointSet fails
<br>
which is sort of annoying, but didn't impede my debugging of my 100-line 
<br>
MPI test program.
<br>
<p>I posted this to the PGI Debugger Forum:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.pgroup.com/userforum/viewtopic.php?p=1969">http://www.pgroup.com/userforum/viewtopic.php?p=1969</a>
<br>
and got a response saying (hopefully Mat doesn't mind me quoting him)::
<br>
<p><span class="quotelev1">&gt;  Hi Andy,
</span><br>
<span class="quotelev1">&gt;  Actually I'm pleasantly surprised that PGDBG works at all with OpenMPI
</span><br>
<span class="quotelev1">&gt;  since PGDBG currently only supports MPICH. While we're planning on
</span><br>
<span class="quotelev1">&gt;  adding OpenMPI and MPICH-2 support later this year, in the immediate
</span><br>
<span class="quotelev1">&gt;  future, there isn't a work around this problem, other than to use
</span><br>
<span class="quotelev1">&gt;  MPICH.
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;  Mat
</span><br>
<p>So I guess the short answer is that is might sort of work if you really 
<br>
need it, otherwise it's best to wait a little while.
<br>
<p>--andy
<br>
<p>On Fri, 16 Jun 2006, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid that I'm not familiar with the PG debugger, so I don't know
</span><br>
<span class="quotelev1">&gt; how it is supposed to be launched.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The intent with --debugger / --debug is that you could do a single
</span><br>
<span class="quotelev1">&gt; invocation of some command and it launches both the parallel debugger
</span><br>
<span class="quotelev1">&gt; and tells that debugger to launch your parallel MPI process (assumedly
</span><br>
<span class="quotelev1">&gt; allowing the parallel debugger to attach to your parallel MPI process).
</span><br>
<span class="quotelev1">&gt; This is what fx2 and Totalview allow, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As such, the &quot;--debug&quot; option is simply syntactic sugar for invoking
</span><br>
<span class="quotelev1">&gt; another [perhaps non-obvious] command.  We figured it was simpler for
</span><br>
<span class="quotelev1">&gt; users to add &quot;--debug&quot; to the already-familiar mpirun command line than
</span><br>
<span class="quotelev1">&gt; to learn a new syntax for invoking a debugger (although both would
</span><br>
<span class="quotelev1">&gt; certainly work equally well).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As such, when OMPI's mpirun sees &quot;--debug&quot;, it ends up exec'ing
</span><br>
<span class="quotelev1">&gt; something else -- the parallel debugger command.  In the example that I
</span><br>
<span class="quotelev1">&gt; gave in <a href="http://www.open-mpi.org/community/lists/users/2005/11/0370.php">http://www.open-mpi.org/community/lists/users/2005/11/0370.php</a>,
</span><br>
<span class="quotelev1">&gt; mpirun looked for two things in your path: totalview and fx2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, if you did this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpirun --debug -np 4 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it found totalview, it would end up exec'ing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	totalview @mpirun@ -a @mpirun_args@
</span><br>
<span class="quotelev1">&gt; which would get substituted to
</span><br>
<span class="quotelev1">&gt; 	totalview mpirun -a -np 4 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note the additional &quot;-a&quot;) Which is the totalview command line syntax to
</span><br>
<span class="quotelev1">&gt; launch their debugger and tell it to launch your parallel process.  If
</span><br>
<span class="quotelev1">&gt; totalview is not found in your path, it'll look for fx2.  If fx2 is
</span><br>
<span class="quotelev1">&gt; found, it'll invoke:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	fx2 @mpirun@ -a @mpirun_args@
</span><br>
<span class="quotelev1">&gt; which would get substitued to
</span><br>
<span class="quotelev1">&gt; 	fx2 mpirun -a -np 4 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can see that fx2's syntax was probably influenced by totalview's.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So what you need is the command line that tells pgdbg to do the same
</span><br>
<span class="quotelev1">&gt; thing -- launch your app and attach to it.  You can then substitute that
</span><br>
<span class="quotelev1">&gt; into the &quot;--debugger&quot; option (using the @mpirun@ and @mpirun_args@
</span><br>
<span class="quotelev1">&gt; tokens), or set the MCA parameter &quot;orte_base_user_debugger&quot;, and then
</span><br>
<span class="quotelev1">&gt; use --debug.  For example, if the pgdbg syntax is similar to that of
</span><br>
<span class="quotelev1">&gt; totalview and fx2, then you could do the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpirun --debugger pgdbg @mpirun@ -a @mpirun_args@ --debug -np 4
</span><br>
<span class="quotelev1">&gt; a.out
</span><br>
<span class="quotelev1">&gt; or (assuming tcsh)
</span><br>
<span class="quotelev1">&gt; 	shell% setenv OMPI_MCA_orte_base_user_debugger &quot;pgdbg @mpirun@
</span><br>
<span class="quotelev1">&gt; -a @mpirun_args@&quot;
</span><br>
<span class="quotelev1">&gt; 	shell% mpirun --debug -np 4 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you find a fixed format for pgdb, we'd be happy to add it to the 
</span><br>
<span class="quotelev1">&gt; default value of the orte_base_user_debugger MCA parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that OMPI currently only supports the Totalview API for attaching 
</span><br>
<span class="quotelev1">&gt; to MPI processes -- I don't know if pgdbg requires something else.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1559.php">Eric Thibodeau: "Re: [OMPI users] OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:0), si_code:1(BUS_ADRALN) (Terry D., Dontje)"</a>
<li><strong>Previous message:</strong> <a href="1557.php">Eric Thibodeau: "[OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1441.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1565.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
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
