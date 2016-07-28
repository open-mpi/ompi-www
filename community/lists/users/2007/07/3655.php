<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 20:32:17 2007" -->
<!-- isoreceived="20070712003217" -->
<!-- sent="Wed, 11 Jul 2007 19:32:13 -0500 (CDT)" -->
<!-- isosent="20070712003213" -->
<!-- name="Lev Gelb" -->
<!-- email="gelb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Recursive use of &amp;quot;orterun&amp;quot; (Ralph H Castain)" -->
<!-- id="Pine.LNX.4.61.0707111911570.25340_at_globe.wustl.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2BAB180.3433%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Lev Gelb (<em>gelb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 20:32:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3656.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Previous message:</strong> <a href="3654.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Reduce problem"</a>
<li><strong>In reply to:</strong> <a href="3652.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3656.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Reply:</strong> <a href="3656.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well done, that was exactly the problem -
<br>
<p>Python's os.environ passes the complete collection of shell variables.
<br>
<p>I tried a different os method (os.execve) , where I could specify the 
<br>
environment (I took out all the OMPI_* variables) and the second orterun 
<br>
call worked!
<br>
<p>Now I just need a cleaner way to reset the environment within the
<br>
spawned process.  (Or,  a way to tell orterun to ignore/overwrite the 
<br>
existing OMPI_* variables...?)
<br>
<p>Thanks for your help,
<br>
<p>Lev
<br>
<p><p><p>On Wed, 11 Jul 2007, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...interesting. As a cross-check on something - if you os.system, does
</span><br>
<span class="quotelev1">&gt; your environment by any chance get copied across? Reason I ask: we set a
</span><br>
<span class="quotelev1">&gt; number of environmental variables when orterun spawns a process. If you call
</span><br>
<span class="quotelev1">&gt; orterun from within that process - and the new orterun sees the enviro
</span><br>
<span class="quotelev1">&gt; variables from the parent process - then I can guarantee it won't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What you need is for os.system to start its child with a clean environment.
</span><br>
<span class="quotelev1">&gt; I would imagine if you just os.system'd something that output'd the
</span><br>
<span class="quotelev1">&gt; environment, that would suffice to identify the problem. If you see anything
</span><br>
<span class="quotelev1">&gt; that starts with OMPI_MCA_..., then we are indeed doomed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which would definitely explain why the persistent orted wouldn't help solve
</span><br>
<span class="quotelev1">&gt; the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/11/07 3:05 PM, &quot;Lev Gelb&quot; &lt;gelb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the suggestions.  The separate 'orted' scheme (below) did
</span><br>
<span class="quotelev2">&gt;&gt; not work, unfortunately;  same behavior as before.  I have conducted
</span><br>
<span class="quotelev2">&gt;&gt; a few other simple tests, and found:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.  The problem only occurs if the first process is &quot;in&quot; MPI;
</span><br>
<span class="quotelev2">&gt;&gt; if it doesn't call MPI_Init or calls MPI_Finalize before it executes
</span><br>
<span class="quotelev2">&gt;&gt; the second orterun, everything works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2.  Whether or not the second process actually uses MPI doesn't matter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3.  Using the standalone orted in &quot;debug&quot; mode with &quot;universe&quot;
</span><br>
<span class="quotelev2">&gt;&gt; specified throughout, there does not appear to be any communication to
</span><br>
<span class="quotelev2">&gt;&gt; orted upon the second invocation of orterun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Also, I've been able to get working nested orteruns using simple shell
</span><br>
<span class="quotelev2">&gt;&gt; scripts, but these don't call MPI_Init.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lev
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 11 Jul 2007, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...well, what that indicates is that your application program is losing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the connection to orterun, but that orterun is still alive and kicking (it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is alive enough to send the [0,0,1] daemon a message ordering it to exit).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the question is: why is your application program dropping the connection?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I haven't tried doing embedded orterun commands, so there could be a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflict there that causes the OOB connection to drop. Best guess is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is confusion over which orterun it is supposed to connect to. I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; give it a try and see - this may not be a mode we can support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alternatively, you could start a persistent daemon and then just allow both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun instances to report to it. Our method for doing that isn't as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; convenient as we want it to be, and hope to soon have it, but it does work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What you have to do is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. to start the persistent daemon, type:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;orted --seed --persistent --scope public --universe foo&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where foo can be whatever name you like.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. when you execute your application, use:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orterun -np 1 --universe foo python ./test.py
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where the &quot;foo&quot; matches the name given above.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. in your os.system command, you'll need that same &quot;--universe foo&quot; option
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That may solve the problem (let me know if it does). Meantime, I'll take a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; look at the embedded approach without the persistent daemon...may take me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; awhile as I'm in the middle of something, but I will try to get to it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shortly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/11/07 1:40 PM, &quot;Lev Gelb&quot; &lt;gelb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OK, I've added the debug flags - when I add them to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; os.system instance of orterun, there is no additional input,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but when I add them to the orterun instance controlling the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; python program, I get the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orterun -np 1 --debug-daemons -mca odls_base_verbose 1 python ./test.py
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Daemon [0,0,1] checking in as pid 18054 on host druid.wustl.edu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] [0,0,1] orted: received launch callback
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] odls: setting up launch for job 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] odls: overriding oversubscription
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] odls: oversubscribed set to false want_processor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set to true
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] odls: preparing to launch child [0, 1, 0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pypar (version 1.9.3) initialised MPI OK with 1 processors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18057] OOB: Connection to HNP lost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] odls: child process terminated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] odls: child process [0,1,0] terminated normally
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] [0,0,1] orted_recv_pls: received message from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0,0,0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] [0,0,1] odls_kill_local_proc: working on job -1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] [0,0,1] odls_kill_local_proc: checking child
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process [0,1,0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [druid.wustl.edu:18054] [0,0,1] odls_kill_local_proc: child is not alive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (the Pypar output is from loading that module; the next thing in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the code is the os.system call to start orterun with 2 processors.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, there is absolutely no output from the second orterun-launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program (even the first line does not execute.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lev
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Message: 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: Wed, 11 Jul 2007 13:26:22 -0600
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: Ralph H Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Recursive use of &quot;orterun&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Message-ID: &lt;C2BA8AFE.9E64%rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;US-ASCII&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm unaware of any issues that would cause it to fail just because it is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; being run via that interface.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The error message is telling us that the procs got launched, but then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orterun went away unexpectedly. Are you seeing your procs complete? We do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sometimes see that message due to a race condition between the daemons
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; spawned to support the application procs and orterun itself (see other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; recent notes in this forum).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If your procs are not completing, then it would mean that either the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connecting fabric is failing for some reason, or orterun is terminating
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; early. If you could add --debug-daemons -mca odls_base_verbose 1 to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; os.system command, the output from that might help us understand why it is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; failing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 7/11/07 10:49 AM, &quot;Lev Gelb&quot; &lt;gelb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm trying to port an application to use OpenMPI, and running
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; into a problem.  The program (written in Python, parallelized
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; using either of &quot;pypar&quot; or &quot;pyMPI&quot;) itself invokes &quot;mpirun&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in order to manage external, parallel processes, via something like:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     orterun -np 2 python myapp.py
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; where myapp.py contains:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     os.system('orterun -np 2 nwchem.x nwchem.inp &gt; nwchem.out')
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have this working under both LAM-MPI and MPICH on a variety
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of different machines.  However, with OpenMPI,  all I get is an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; immediate return from the system call and the error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;OOB: Connection to HNP lost&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have verified that the command passed to os.system is correct,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and even that it runs correctly if &quot;myapp.py&quot; doesn't invoke any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI calls of its own.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm testing openMPI on a single box, so there's no machinefile-stuff
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; currently
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; active.  The system is running Fedora Core 6 x86-64, I'm using the latest
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.2.3-1.src.rpm rebuilt on the machine in question,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can provide additional configuration details if necessary.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks, in advance, for any help or advice,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Lev
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Lev Gelb Associate Professor Department of Chemistry, Washington
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; University
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; St. Louis, St. Louis, MO 63130  USA
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; email: gelb_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; phone: (314)935-5026 fax:   (314)935-4481
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.chemistry.wustl.edu/~gelb">http://www.chemistry.wustl.edu/~gelb</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Lev Gelb
</span><br>
<span class="quotelev2">&gt;&gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;&gt; Department of Chemistry,
</span><br>
<span class="quotelev2">&gt;&gt; Washington University in St. Louis,
</span><br>
<span class="quotelev2">&gt;&gt; St. Louis, MO 63130  USA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; email: gelb_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; phone: (314)935-5026
</span><br>
<span class="quotelev2">&gt;&gt; fax:   (314)935-4481
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.chemistry.wustl.edu/~gelb">http://www.chemistry.wustl.edu/~gelb</a>
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p>------------------------------------------------------------------
<br>
Lev Gelb 
<br>
Associate Professor 
<br>
Department of Chemistry, 
<br>
Washington University in St. Louis, 
<br>
St. Louis, MO 63130  USA
<br>
<p>email: gelb_at_[hidden]
<br>
phone: (314)935-5026 
<br>
fax:   (314)935-4481
<br>
<p><a href="http://www.chemistry.wustl.edu/~gelb">http://www.chemistry.wustl.edu/~gelb</a> 
<br>
------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3656.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Previous message:</strong> <a href="3654.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Reduce problem"</a>
<li><strong>In reply to:</strong> <a href="3652.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3656.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Reply:</strong> <a href="3656.php">Ralph Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
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
