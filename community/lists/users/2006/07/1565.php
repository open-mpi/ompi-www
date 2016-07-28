<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  6 09:08:53 2006" -->
<!-- isoreceived="20060706130853" -->
<!-- sent="Thu, 6 Jul 2006 09:08:40 -0400" -->
<!-- isosent="20060706130840" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFB248A9_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OpenMPI, debugging, and Portland Group's pgdbg" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-06 09:08:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1566.php">Jonathan Blocksom: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1564.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1411.php">Caird, Andrew J: "[OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for looking into this!
<br>
<p>I'm going to file a feature enhancement for OMPI to add this option once
<br>
the PGI debugger works with Open MPI (I don't want to add it before
<br>
then, because it may be misleading to users).
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Andrew J Caird
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, July 05, 2006 9:16 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI, debugging, and Portland 
</span><br>
<span class="quotelev1">&gt; Group's pgdbg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This took a long time for me to get to, but once I did, what 
</span><br>
<span class="quotelev1">&gt; I found was 
</span><br>
<span class="quotelev1">&gt; that the closest thing to working for the PGI compilers with 
</span><br>
<span class="quotelev1">&gt; OpenMPI is 
</span><br>
<span class="quotelev1">&gt; this command:
</span><br>
<span class="quotelev1">&gt;    mpirun --debugger &quot;pgdbg @mpirun@ @mpirun_args@&quot; --debug 
</span><br>
<span class="quotelev1">&gt; -np 2 ./cpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears to work, that is, you can select a process with the &quot;proc&quot; 
</span><br>
<span class="quotelev1">&gt; command in pgdbg and set break points and all, but pgdbg 
</span><br>
<span class="quotelev1">&gt; prints a lot of 
</span><br>
<span class="quotelev1">&gt; error messages that are all the same:
</span><br>
<span class="quotelev1">&gt;     db_set_code_brk : DiBreakpointSet fails
</span><br>
<span class="quotelev1">&gt; which is sort of annoying, but didn't impede my debugging of 
</span><br>
<span class="quotelev1">&gt; my 100-line 
</span><br>
<span class="quotelev1">&gt; MPI test program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I posted this to the PGI Debugger Forum:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.pgroup.com/userforum/viewtopic.php?p=1969">http://www.pgroup.com/userforum/viewtopic.php?p=1969</a>
</span><br>
<span class="quotelev1">&gt; and got a response saying (hopefully Mat doesn't mind me 
</span><br>
<span class="quotelev1">&gt; quoting him)::
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Hi Andy,
</span><br>
<span class="quotelev2">&gt; &gt;  Actually I'm pleasantly surprised that PGDBG works at all 
</span><br>
<span class="quotelev1">&gt; with OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt;  since PGDBG currently only supports MPICH. While we're planning on
</span><br>
<span class="quotelev2">&gt; &gt;  adding OpenMPI and MPICH-2 support later this year, in the 
</span><br>
<span class="quotelev1">&gt; immediate
</span><br>
<span class="quotelev2">&gt; &gt;  future, there isn't a work around this problem, other than to use
</span><br>
<span class="quotelev2">&gt; &gt;  MPICH.
</span><br>
<span class="quotelev2">&gt; &gt;  Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;  Mat
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I guess the short answer is that is might sort of work if 
</span><br>
<span class="quotelev1">&gt; you really 
</span><br>
<span class="quotelev1">&gt; need it, otherwise it's best to wait a little while.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --andy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, 16 Jun 2006, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm afraid that I'm not familiar with the PG debugger, so I 
</span><br>
<span class="quotelev1">&gt; don't know
</span><br>
<span class="quotelev2">&gt; &gt; how it is supposed to be launched.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The intent with --debugger / --debug is that you could do a single
</span><br>
<span class="quotelev2">&gt; &gt; invocation of some command and it launches both the 
</span><br>
<span class="quotelev1">&gt; parallel debugger
</span><br>
<span class="quotelev2">&gt; &gt; and tells that debugger to launch your parallel MPI process 
</span><br>
<span class="quotelev1">&gt; (assumedly
</span><br>
<span class="quotelev2">&gt; &gt; allowing the parallel debugger to attach to your parallel 
</span><br>
<span class="quotelev1">&gt; MPI process).
</span><br>
<span class="quotelev2">&gt; &gt; This is what fx2 and Totalview allow, for example.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As such, the &quot;--debug&quot; option is simply syntactic sugar for invoking
</span><br>
<span class="quotelev2">&gt; &gt; another [perhaps non-obvious] command.  We figured it was 
</span><br>
<span class="quotelev1">&gt; simpler for
</span><br>
<span class="quotelev2">&gt; &gt; users to add &quot;--debug&quot; to the already-familiar mpirun 
</span><br>
<span class="quotelev1">&gt; command line than
</span><br>
<span class="quotelev2">&gt; &gt; to learn a new syntax for invoking a debugger (although both would
</span><br>
<span class="quotelev2">&gt; &gt; certainly work equally well).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As such, when OMPI's mpirun sees &quot;--debug&quot;, it ends up exec'ing
</span><br>
<span class="quotelev2">&gt; &gt; something else -- the parallel debugger command.  In the 
</span><br>
<span class="quotelev1">&gt; example that I
</span><br>
<span class="quotelev2">&gt; &gt; gave in 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2005/11/0370.php">http://www.open-mpi.org/community/lists/users/2005/11/0370.php</a>,
</span><br>
<span class="quotelev2">&gt; &gt; mpirun looked for two things in your path: totalview and fx2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For example, if you did this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	mpirun --debug -np 4 a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If it found totalview, it would end up exec'ing:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	totalview @mpirun@ -a @mpirun_args@
</span><br>
<span class="quotelev2">&gt; &gt; which would get substituted to
</span><br>
<span class="quotelev2">&gt; &gt; 	totalview mpirun -a -np 4 a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (note the additional &quot;-a&quot;) Which is the totalview command 
</span><br>
<span class="quotelev1">&gt; line syntax to
</span><br>
<span class="quotelev2">&gt; &gt; launch their debugger and tell it to launch your parallel 
</span><br>
<span class="quotelev1">&gt; process.  If
</span><br>
<span class="quotelev2">&gt; &gt; totalview is not found in your path, it'll look for fx2.  If fx2 is
</span><br>
<span class="quotelev2">&gt; &gt; found, it'll invoke:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	fx2 @mpirun@ -a @mpirun_args@
</span><br>
<span class="quotelev2">&gt; &gt; which would get substitued to
</span><br>
<span class="quotelev2">&gt; &gt; 	fx2 mpirun -a -np 4 a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can see that fx2's syntax was probably influenced by 
</span><br>
<span class="quotelev1">&gt; totalview's.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So what you need is the command line that tells pgdbg to do the same
</span><br>
<span class="quotelev2">&gt; &gt; thing -- launch your app and attach to it.  You can then 
</span><br>
<span class="quotelev1">&gt; substitute that
</span><br>
<span class="quotelev2">&gt; &gt; into the &quot;--debugger&quot; option (using the @mpirun@ and @mpirun_args@
</span><br>
<span class="quotelev2">&gt; &gt; tokens), or set the MCA parameter 
</span><br>
<span class="quotelev1">&gt; &quot;orte_base_user_debugger&quot;, and then
</span><br>
<span class="quotelev2">&gt; &gt; use --debug.  For example, if the pgdbg syntax is similar to that of
</span><br>
<span class="quotelev2">&gt; &gt; totalview and fx2, then you could do the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	mpirun --debugger pgdbg @mpirun@ -a @mpirun_args@ --debug -np 4
</span><br>
<span class="quotelev2">&gt; &gt; a.out
</span><br>
<span class="quotelev2">&gt; &gt; or (assuming tcsh)
</span><br>
<span class="quotelev2">&gt; &gt; 	shell% setenv OMPI_MCA_orte_base_user_debugger &quot;pgdbg @mpirun@
</span><br>
<span class="quotelev2">&gt; &gt; -a @mpirun_args@&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 	shell% mpirun --debug -np 4 a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Make sense?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you find a fixed format for pgdb, we'd be happy to add it to the 
</span><br>
<span class="quotelev2">&gt; &gt; default value of the orte_base_user_debugger MCA parameter.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that OMPI currently only supports the Totalview API 
</span><br>
<span class="quotelev1">&gt; for attaching 
</span><br>
<span class="quotelev2">&gt; &gt; to MPI processes -- I don't know if pgdbg requires something else.
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
<li><strong>Next message:</strong> <a href="1566.php">Jonathan Blocksom: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1564.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] error in running openmpi on remote node"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1411.php">Caird, Andrew J: "[OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
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
