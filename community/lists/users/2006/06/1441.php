<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 20:01:04 2006" -->
<!-- isoreceived="20060617000104" -->
<!-- sent="Fri, 16 Jun 2006 20:00:57 -0400" -->
<!-- isosent="20060617000057" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFA43640_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-16 20:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1442.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1440.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Maybe in reply to:</strong> <a href="1411.php">Caird, Andrew J: "[OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1558.php">Andrew J Caird: "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1558.php">Andrew J Caird: "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid that I'm not familiar with the PG debugger, so I don't know
<br>
how it is supposed to be launched.
<br>
<p>The intent with --debugger / --debug is that you could do a single
<br>
invocation of some command and it launches both the parallel debugger
<br>
and tells that debugger to launch your parallel MPI process (assumedly
<br>
allowing the parallel debugger to attach to your parallel MPI process).
<br>
This is what fx2 and Totalview allow, for example.  
<br>
<p>As such, the &quot;--debug&quot; option is simply syntactic sugar for invoking
<br>
another [perhaps non-obvious] command.  We figured it was simpler for
<br>
users to add &quot;--debug&quot; to the already-familiar mpirun command line than
<br>
to learn a new syntax for invoking a debugger (although both would
<br>
certainly work equally well).
<br>
<p>As such, when OMPI's mpirun sees &quot;--debug&quot;, it ends up exec'ing
<br>
something else -- the parallel debugger command.  In the example that I
<br>
gave in <a href="http://www.open-mpi.org/community/lists/users/2005/11/0370.php">http://www.open-mpi.org/community/lists/users/2005/11/0370.php</a>,
<br>
mpirun looked for two things in your path: totalview and fx2.
<br>
<p>For example, if you did this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --debug -np 4 a.out
<br>
<p>If it found totalview, it would end up exec'ing:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;totalview @mpirun@ -a @mpirun_args@ 
<br>
which would get substituted to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;totalview mpirun -a -np 4 a.out
<br>
<p>(note the additional &quot;-a&quot;) Which is the totalview command line syntax to
<br>
launch their debugger and tell it to launch your parallel process.  If
<br>
totalview is not found in your path, it'll look for fx2.  If fx2 is
<br>
found, it'll invoke:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fx2 @mpirun@ -a @mpirun_args@ 
<br>
which would get substitued to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fx2 mpirun -a -np 4 a.out
<br>
<p>You can see that fx2's syntax was probably influenced by totalview's.  
<br>
<p>So what you need is the command line that tells pgdbg to do the same
<br>
thing -- launch your app and attach to it.  You can then substitute that
<br>
into the &quot;--debugger&quot; option (using the @mpirun@ and @mpirun_args@
<br>
tokens), or set the MCA parameter &quot;orte_base_user_debugger&quot;, and then
<br>
use --debug.  For example, if the pgdbg syntax is similar to that of
<br>
totalview and fx2, then you could do the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --debugger pgdbg @mpirun@ -a @mpirun_args@ --debug -np 4
<br>
a.out
<br>
or (assuming tcsh)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell% setenv OMPI_MCA_orte_base_user_debugger &quot;pgdbg @mpirun@
<br>
-a @mpirun_args@&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell% mpirun --debug -np 4 a.out
<br>
<p>Make sense?
<br>
<p>If you find a fixed format for pgdb, we'd be happy to add it to the
<br>
default value of the orte_base_user_debugger MCA parameter.
<br>
<p>Note that OMPI currently only supports the Totalview API for attaching
<br>
to MPI processes -- I don't know if pgdbg requires something else.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Caird, Andrew J
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 13, 2006 4:38 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've read the thread &quot;OpenMPI debugging support&quot;
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/community/lists/users/2005/11/0370.ph">http://www.open-mpi.org/community/lists/users/2005/11/0370.ph</a>
</span><br>
<span class="quotelev1">&gt; p) and it
</span><br>
<span class="quotelev1">&gt; looks like there is improved debugging support for debuggers 
</span><br>
<span class="quotelev1">&gt; other than
</span><br>
<span class="quotelev1">&gt; TV in the 1.1 series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to use Portland Groups pgdbg.  It's a parallel debugger,
</span><br>
<span class="quotelev1">&gt; there's more information at <a href="http://www.pgroup.com/resources/docs.htm">http://www.pgroup.com/resources/docs.htm</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;From the previous thread on this topic, it looks to me like 
</span><br>
<span class="quotelev1">&gt; the plan for
</span><br>
<span class="quotelev1">&gt; 1.1 and forward is to support the ability to launch the 
</span><br>
<span class="quotelev1">&gt; debugger &quot;along
</span><br>
<span class="quotelev1">&gt; side&quot; the application.  I don't know enough about either pgdbg or
</span><br>
<span class="quotelev1">&gt; OpenMPI to know if this is the best plan, but assuming that it is, is
</span><br>
<span class="quotelev1">&gt; there a way to see if it is happening?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried this two ways, the first way doesn't seem to attach to
</span><br>
<span class="quotelev1">&gt; anything:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [acaird_at_nyx-login ~]$ ompi_info | head -2
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1a9r10177
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r10177
</span><br>
<span class="quotelev1">&gt; [acaird_at_nyx-login ~]$ mpirun --debugger pgdbg --debug  -np 2 cpi
</span><br>
<span class="quotelev1">&gt; PGDBG 6.1-3 x86-64 (Cluster, 64 CPU)
</span><br>
<span class="quotelev1">&gt; Copyright 1989-2000, The Portland Group, Inc. All Rights Reserved.
</span><br>
<span class="quotelev1">&gt; Copyright 2000-2005, STMicroelectronics, Inc. All Rights Reserved.
</span><br>
<span class="quotelev1">&gt; PGDBG cannot open a window; check the DISPLAY environment variable.
</span><br>
<span class="quotelev1">&gt; Entering text mode.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pgdbg&gt; list
</span><br>
<span class="quotelev1">&gt; ERROR: No current thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pgdbg&gt; quit
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I've tried running the whole thing under pgdbg:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [acaird_at_nyx-login ~]$ pgdbg mpirun -np 2 cpi -s pgdbgscript
</span><br>
<span class="quotelev1">&gt;   { lots of mca_* loaded by ld-linux messages }
</span><br>
<span class="quotelev1">&gt; pgserv 8726: attach : attach 8720 fails
</span><br>
<span class="quotelev1">&gt; ERROR: New Process (PID 8720, HOST localhost) ATTACH FAILED.
</span><br>
<span class="quotelev1">&gt; ERROR: New Process (PID 8720, HOST localhost) IGNORED.
</span><br>
<span class="quotelev1">&gt; ERROR: cannot read value at address 0x59BFE8.
</span><br>
<span class="quotelev1">&gt; ERROR: cannot read value at address 0x59BFF0.
</span><br>
<span class="quotelev1">&gt; ERROR: cannot read value at address 0x59BFF8.
</span><br>
<span class="quotelev1">&gt; ERROR: New Process (PID 0, HOST unknown) IGNORED.
</span><br>
<span class="quotelev1">&gt; ERROR: cannot read value at address 0x2A959BBEC8.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; and it hangs right there until I kill it.  The two variables in this
</span><br>
<span class="quotelev1">&gt; scenario are:
</span><br>
<span class="quotelev1">&gt; PGRSH=ssh and the contents of pgdbgscript are:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; pgienv exe force
</span><br>
<span class="quotelev1">&gt; pgienv mode process
</span><br>
<span class="quotelev1">&gt; ignore 12
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the short list of questions are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Has anyone done this successfully before?
</span><br>
<span class="quotelev1">&gt; 2. Am I making the right assumptions about how the debugger 
</span><br>
<span class="quotelev1">&gt; attaches to
</span><br>
<span class="quotelev1">&gt; the processes?
</span><br>
<span class="quotelev1">&gt; 3. Is this the expected behavior for this set of options to mpirun?
</span><br>
<span class="quotelev1">&gt; 4. Does anyone have any suggestions for other things I might try?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; --andy
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1442.php">Eric Thibodeau: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1440.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Maybe in reply to:</strong> <a href="1411.php">Caird, Andrew J: "[OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1558.php">Andrew J Caird: "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1558.php">Andrew J Caird: "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
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
