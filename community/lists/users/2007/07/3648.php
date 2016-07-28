<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 15:40:30 2007" -->
<!-- isoreceived="20070711194030" -->
<!-- sent="Wed, 11 Jul 2007 14:40:26 -0500 (CDT)" -->
<!-- isosent="20070711194026" -->
<!-- name="Lev Gelb" -->
<!-- email="gelb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Recursive use of &amp;quot;orterun&amp;quot; (Ralph H Castain)" -->
<!-- id="Pine.LNX.4.61.0707111434410.25340_at_globe.wustl.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.2247.1184182091.6844.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-07-11 15:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3649.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Previous message:</strong> <a href="3647.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3649.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Reply:</strong> <a href="3649.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I've added the debug flags - when I add them to the
<br>
os.system instance of orterun, there is no additional input,
<br>
but when I add them to the orterun instance controlling the
<br>
python program, I get the following:
<br>
<p><span class="quotelev1">&gt;orterun -np 1 --debug-daemons -mca odls_base_verbose 1 python ./test.py
</span><br>
Daemon [0,0,1] checking in as pid 18054 on host druid.wustl.edu
<br>
[druid.wustl.edu:18054] [0,0,1] orted: received launch callback
<br>
[druid.wustl.edu:18054] odls: setting up launch for job 1
<br>
[druid.wustl.edu:18054] odls: overriding oversubscription
<br>
[druid.wustl.edu:18054] odls: oversubscribed set to false want_processor 
<br>
set to true
<br>
[druid.wustl.edu:18054] odls: preparing to launch child [0, 1, 0]
<br>
Pypar (version 1.9.3) initialised MPI OK with 1 processors
<br>
[druid.wustl.edu:18057] OOB: Connection to HNP lost
<br>
[druid.wustl.edu:18054] odls: child process terminated
<br>
[druid.wustl.edu:18054] odls: child process [0,1,0] terminated normally
<br>
[druid.wustl.edu:18054] [0,0,1] orted_recv_pls: received message from 
<br>
[0,0,0]
<br>
[druid.wustl.edu:18054] [0,0,1] orted_recv_pls: received exit
<br>
[druid.wustl.edu:18054] [0,0,1] odls_kill_local_proc: working on job -1
<br>
[druid.wustl.edu:18054] [0,0,1] odls_kill_local_proc: checking child 
<br>
process [0,1,0]
<br>
[druid.wustl.edu:18054] [0,0,1] odls_kill_local_proc: child is not alive
<br>
<p>(the Pypar output is from loading that module; the next thing in
<br>
the code is the os.system call to start orterun with 2 processors.)
<br>
<p>Also, there is absolutely no output from the second orterun-launched
<br>
program (even the first line does not execute.)
<br>
<p>Cheers,
<br>
<p>Lev
<br>
<p><p><p><span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Wed, 11 Jul 2007 13:26:22 -0600
</span><br>
<span class="quotelev1">&gt; From: Ralph H Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Recursive use of &quot;orterun&quot;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;C2BA8AFE.9E64%rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain;	charset=&quot;US-ASCII&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm unaware of any issues that would cause it to fail just because it is
</span><br>
<span class="quotelev1">&gt; being run via that interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error message is telling us that the procs got launched, but then
</span><br>
<span class="quotelev1">&gt; orterun went away unexpectedly. Are you seeing your procs complete? We do
</span><br>
<span class="quotelev1">&gt; sometimes see that message due to a race condition between the daemons
</span><br>
<span class="quotelev1">&gt; spawned to support the application procs and orterun itself (see other
</span><br>
<span class="quotelev1">&gt; recent notes in this forum).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your procs are not completing, then it would mean that either the
</span><br>
<span class="quotelev1">&gt; connecting fabric is failing for some reason, or orterun is terminating
</span><br>
<span class="quotelev1">&gt; early. If you could add --debug-daemons -mca odls_base_verbose 1 to the
</span><br>
<span class="quotelev1">&gt; os.system command, the output from that might help us understand why it is
</span><br>
<span class="quotelev1">&gt; failing.
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
<span class="quotelev1">&gt; On 7/11/07 10:49 AM, &quot;Lev Gelb&quot; &lt;gelb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to port an application to use OpenMPI, and running
</span><br>
<span class="quotelev2">&gt;&gt; into a problem.  The program (written in Python, parallelized
</span><br>
<span class="quotelev2">&gt;&gt; using either of &quot;pypar&quot; or &quot;pyMPI&quot;) itself invokes &quot;mpirun&quot;
</span><br>
<span class="quotelev2">&gt;&gt; in order to manage external, parallel processes, via something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     orterun -np 2 python myapp.py
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where myapp.py contains:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     os.system('orterun -np 2 nwchem.x nwchem.inp &gt; nwchem.out')
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have this working under both LAM-MPI and MPICH on a variety
</span><br>
<span class="quotelev2">&gt;&gt; of different machines.  However, with OpenMPI,  all I get is an
</span><br>
<span class="quotelev2">&gt;&gt; immediate return from the system call and the error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;OOB: Connection to HNP lost&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have verified that the command passed to os.system is correct,
</span><br>
<span class="quotelev2">&gt;&gt; and even that it runs correctly if &quot;myapp.py&quot; doesn't invoke any
</span><br>
<span class="quotelev2">&gt;&gt; MPI calls of its own.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm testing openMPI on a single box, so there's no machinefile-stuff currently
</span><br>
<span class="quotelev2">&gt;&gt; active.  The system is running Fedora Core 6 x86-64, I'm using the latest
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2.3-1.src.rpm rebuilt on the machine in question,
</span><br>
<span class="quotelev2">&gt;&gt; I can provide additional configuration details if necessary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, in advance, for any help or advice,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lev
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Lev Gelb Associate Professor Department of Chemistry, Washington University in
</span><br>
<span class="quotelev2">&gt;&gt; St. Louis, St. Louis, MO 63130  USA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; email: gelb_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; phone: (314)935-5026 fax:   (314)935-4481
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3649.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Previous message:</strong> <a href="3647.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3649.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
<li><strong>Reply:</strong> <a href="3649.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot; (Ralph H Castain)"</a>
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
