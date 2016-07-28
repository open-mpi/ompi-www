<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 16:02:18 2007" -->
<!-- isoreceived="20070711200218" -->
<!-- sent="Wed, 11 Jul 2007 14:02:10 -0600" -->
<!-- isosent="20070711200210" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Recursive use of &amp;quot;orterun&amp;quot; (Ralph H Castain)" -->
<!-- id="C2BA9362.9E73%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.61.0707111434410.25340_at_globe.wustl.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 16:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3650.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Previous message:</strong> <a href="3648.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>In reply to:</strong> <a href="3648.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3650.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Reply:</strong> <a href="3650.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, what that indicates is that your application program is losing
<br>
the connection to orterun, but that orterun is still alive and kicking (it
<br>
is alive enough to send the [0,0,1] daemon a message ordering it to exit).
<br>
So the question is: why is your application program dropping the connection?
<br>
<p>I haven't tried doing embedded orterun commands, so there could be a
<br>
conflict there that causes the OOB connection to drop. Best guess is that
<br>
there is confusion over which orterun it is supposed to connect to. I can
<br>
give it a try and see - this may not be a mode we can support.
<br>
<p>Alternatively, you could start a persistent daemon and then just allow both
<br>
orterun instances to report to it. Our method for doing that isn't as
<br>
convenient as we want it to be, and hope to soon have it, but it does work.
<br>
What you have to do is:
<br>
<p>1. to start the persistent daemon, type:
<br>
<p>&quot;orted --seed --persistent --scope public --universe foo&quot;
<br>
<p>where foo can be whatever name you like.
<br>
<p>2. when you execute your application, use:
<br>
<p>orterun -np 1 --universe foo python ./test.py
<br>
<p>where the &quot;foo&quot; matches the name given above.
<br>
<p>3. in your os.system command, you'll need that same &quot;--universe foo&quot; option
<br>
<p>That may solve the problem (let me know if it does). Meantime, I'll take a
<br>
look at the embedded approach without the persistent daemon...may take me
<br>
awhile as I'm in the middle of something, but I will try to get to it
<br>
shortly.
<br>
<p>Ralph
<br>
<p><p>On 7/11/07 1:40 PM, &quot;Lev Gelb&quot; &lt;gelb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, I've added the debug flags - when I add them to the
</span><br>
<span class="quotelev1">&gt; os.system instance of orterun, there is no additional input,
</span><br>
<span class="quotelev1">&gt; but when I add them to the orterun instance controlling the
</span><br>
<span class="quotelev1">&gt; python program, I get the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; orterun -np 1 --debug-daemons -mca odls_base_verbose 1 python ./test.py
</span><br>
<span class="quotelev1">&gt; Daemon [0,0,1] checking in as pid 18054 on host druid.wustl.edu
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] [0,0,1] orted: received launch callback
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] odls: setting up launch for job 1
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] odls: overriding oversubscription
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] odls: oversubscribed set to false want_processor
</span><br>
<span class="quotelev1">&gt; set to true
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] odls: preparing to launch child [0, 1, 0]
</span><br>
<span class="quotelev1">&gt; Pypar (version 1.9.3) initialised MPI OK with 1 processors
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18057] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] odls: child process terminated
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] odls: child process [0,1,0] terminated normally
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] [0,0,1] orted_recv_pls: received message from
</span><br>
<span class="quotelev1">&gt; [0,0,0]
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] [0,0,1] odls_kill_local_proc: working on job -1
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] [0,0,1] odls_kill_local_proc: checking child
</span><br>
<span class="quotelev1">&gt; process [0,1,0]
</span><br>
<span class="quotelev1">&gt; [druid.wustl.edu:18054] [0,0,1] odls_kill_local_proc: child is not alive
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (the Pypar output is from loading that module; the next thing in
</span><br>
<span class="quotelev1">&gt; the code is the os.system call to start orterun with 2 processors.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, there is absolutely no output from the second orterun-launched
</span><br>
<span class="quotelev1">&gt; program (even the first line does not execute.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lev
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 5
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 11 Jul 2007 13:26:22 -0600
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph H Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Recursive use of &quot;orterun&quot;
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;C2BA8AFE.9E64%rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;US-ASCII&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm unaware of any issues that would cause it to fail just because it is
</span><br>
<span class="quotelev2">&gt;&gt; being run via that interface.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The error message is telling us that the procs got launched, but then
</span><br>
<span class="quotelev2">&gt;&gt; orterun went away unexpectedly. Are you seeing your procs complete? We do
</span><br>
<span class="quotelev2">&gt;&gt; sometimes see that message due to a race condition between the daemons
</span><br>
<span class="quotelev2">&gt;&gt; spawned to support the application procs and orterun itself (see other
</span><br>
<span class="quotelev2">&gt;&gt; recent notes in this forum).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If your procs are not completing, then it would mean that either the
</span><br>
<span class="quotelev2">&gt;&gt; connecting fabric is failing for some reason, or orterun is terminating
</span><br>
<span class="quotelev2">&gt;&gt; early. If you could add --debug-daemons -mca odls_base_verbose 1 to the
</span><br>
<span class="quotelev2">&gt;&gt; os.system command, the output from that might help us understand why it is
</span><br>
<span class="quotelev2">&gt;&gt; failing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/11/07 10:49 AM, &quot;Lev Gelb&quot; &lt;gelb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to port an application to use OpenMPI, and running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into a problem.  The program (written in Python, parallelized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using either of &quot;pypar&quot; or &quot;pyMPI&quot;) itself invokes &quot;mpirun&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in order to manage external, parallel processes, via something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     orterun -np 2 python myapp.py
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where myapp.py contains:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     os.system('orterun -np 2 nwchem.x nwchem.inp &gt; nwchem.out')
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have this working under both LAM-MPI and MPICH on a variety
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of different machines.  However, with OpenMPI,  all I get is an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; immediate return from the system call and the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;OOB: Connection to HNP lost&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have verified that the command passed to os.system is correct,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and even that it runs correctly if &quot;myapp.py&quot; doesn't invoke any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI calls of its own.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm testing openMPI on a single box, so there's no machinefile-stuff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; active.  The system is running Fedora Core 6 x86-64, I'm using the latest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.2.3-1.src.rpm rebuilt on the machine in question,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can provide additional configuration details if necessary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, in advance, for any help or advice,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lev
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lev Gelb Associate Professor Department of Chemistry, Washington University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; St. Louis, St. Louis, MO 63130  USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: gelb_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phone: (314)935-5026 fax:   (314)935-4481
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.chemistry.wustl.edu/~gelb">http://www.chemistry.wustl.edu/~gelb</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3650.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Previous message:</strong> <a href="3648.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>In reply to:</strong> <a href="3648.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3650.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Reply:</strong> <a href="3650.php">Lev Gelb: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
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
