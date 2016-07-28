<?
$subject_val = "[OMPI users] FW:  slurm and all-srun orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 14:39:20 2008" -->
<!-- isoreceived="20080306193920" -->
<!-- sent="Thu, 6 Mar 2008 14:39:14 -0500" -->
<!-- isosent="20080306193914" -->
<!-- name="Sacerdoti, Federico" -->
<!-- email="Federico.Sacerdoti_at_[hidden]" -->
<!-- subject="[OMPI users] FW:  slurm and all-srun orterun" -->
<!-- id="A14F91CBBBA3014385A806944C9BEF1BAE7D93_at_maildrd1.nyc.deshaw.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] FW:  slurm and all-srun orterun<br>
<strong>From:</strong> Sacerdoti, Federico (<em>Federico.Sacerdoti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 14:39:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5149.php">Michael: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5147.php">Doug Reeder: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, here is Moe's response. The srun options he mentions look
<br>
promising: they can signal an otherwise happy orted daemon (sitting on a
<br>
waitpid) that something is amiss elsewhere in the job. Do orteds change
<br>
their session ID?
<br>
<p>Thanks Moe,
<br>
Federico
<br>
<p>-----Original Message-----
<br>
From: jette1_at_[hidden] [mailto:jette1_at_[hidden]] 
<br>
Sent: Wednesday, March 05, 2008 2:21 PM
<br>
To: Sacerdoti, Federico; Open MPI Users
<br>
Subject: RE: [OMPI users] slurm and all-srun orterun
<br>
<p>Slurm and its APIs are available under the GPL license.
<br>
Since Open MPI is not available under the GPL license it
<br>
can not link with the Slurm APIs, however virtually all
<br>
of that API functionality is available through existing
<br>
Slurm commands. The commands are clearly not as simple to
<br>
use as the APIs, but if you encounter any problems using
<br>
the commands we can certainly make changes to facilitate
<br>
their use. For example, Slurm communicates with the Maui
<br>
and Moab schedulers using an interface that loosely
<br>
resembles XML. We are also prepared to provide additional
<br>
functionality as needed by OpenMPI.
<br>
<p>Regarding premature termination of processes that Slurm
<br>
spawns, the srun command has a couple of option that may
<br>
prove useful:
<br>
<p>-K, --kill-on-bad-exit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terminate a job if any task exits with a non-zero exit code.
<br>
<p>-W, --wait=seconds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Specify how long to wait after the first task terminates before
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;terminating  all  remaining  tasks.  A  value of 0 indicates an
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unlimited wait (a warning will be issued after 60 seconds). The
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default  value  is  set  by the WaitTime parameter in the slurm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configuration file (see slurm.conf(5)). This option can be use-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ful  to  insure that a job is terminated in a timely fashion in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the event that one or more tasks terminate prematurely.
<br>
<p>Any tasks launched outside of Slurm's control (e.g. rsh) are not
<br>
purged on job termination. Slurm locates spawned tasks and any of
<br>
their children using the configured ProcTrack plugin, of which
<br>
several are available. If you use the SID (session ID) plugin
<br>
and spawned tasks change their SID, Slurm will no longer track
<br>
them. Several reliable process tracking mechanisms are available,
<br>
but some do require kernel changes. See &quot;man slurm.conf&quot; for more
<br>
information.
<br>
<p>Moe
<br>
<p><p><p>At 11:16 AM -0500 3/5/08, Sacerdoti, Federico wrote:
<br>
<span class="quotelev1">&gt;Thanks Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;First, we would be happy to test the slurm direct launch capability.
</span><br>
<span class="quotelev1">&gt;Regarding the failure case, I realize that the IB errors do not
</span><br>
directly
<br>
<span class="quotelev1">&gt;affect the orted daemons. This is what we observed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. Parallel job started
</span><br>
<span class="quotelev1">&gt;2. IB errors caused some processes to fail (but not all)
</span><br>
<span class="quotelev1">&gt;3. slurm tears down entire job, attempting to kill all orted and their
</span><br>
<span class="quotelev1">&gt;children
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We want this behavior: if any process of a parallel job dies, all
</span><br>
<span class="quotelev1">&gt;processes should be stopped. The orted daemons in charge of processes
</span><br>
<span class="quotelev1">&gt;that did not fail are the problem, as slurm was not able to kill them.
</span><br>
<span class="quotelev1">&gt;Sounds like this is a known issue in openmpi 1.2.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In any case, the new direct launching methods sound promising. I am
</span><br>
<span class="quotelev1">&gt;surprised there are licensing issues with Slurm, is this a GPL-and-BSD
</span><br>
<span class="quotelev1">&gt;issue? I am CC'ing slurm author Moe; he may be able to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks again and I look forward to testing the direct launch,
</span><br>
<span class="quotelev1">&gt;Federico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt;Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt;Sent: Monday, March 03, 2008 8:19 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Cc: Ralph Castain
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] slurm and all-srun orterun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't monitor the user list any more, but a friendly elf sent this
</span><br>
<span class="quotelev1">&gt;along
</span><br>
<span class="quotelev1">&gt;to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm not entirely sure what problem might be causing the behavior you
</span><br>
are
<br>
<span class="quotelev1">&gt;seeing. Neither mpirun nor any orted should be impacted by IB problems
</span><br>
<span class="quotelev1">&gt;as
</span><br>
<span class="quotelev1">&gt;they aren't MPI processes and thus never interact with IB. Only
</span><br>
<span class="quotelev1">&gt;application
</span><br>
<span class="quotelev1">&gt;procs touch the IB subsystem - if an application proc fails, the orted
</span><br>
<span class="quotelev1">&gt;should see that and correctly order the shutdown of the job. So if you
</span><br>
<span class="quotelev1">&gt;are
</span><br>
<span class="quotelev1">&gt;having IB problems, that wouldn't explain daemons failing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If a daemon is aborting, that will cause problems in 1.2.x. We have
</span><br>
<span class="quotelev1">&gt;noted
</span><br>
<span class="quotelev1">&gt;that SLURM (even though the daemons are launched via srun) doesn't
</span><br>
<span class="quotelev1">&gt;always
</span><br>
<span class="quotelev1">&gt;tell us when this happens, leaving Open MPI vulnerable to &quot;hangs&quot; as it
</span><br>
<span class="quotelev1">&gt;attempts to cleanup and finds it can't do it. I'm not sure why you
</span><br>
would
<br>
<span class="quotelev1">&gt;see
</span><br>
<span class="quotelev1">&gt;a daemon die, though - the fact that an application process failed
</span><br>
<span class="quotelev1">&gt;shouldn't
</span><br>
<span class="quotelev1">&gt;cause that to happen. Likewise, it would seem strange that the
</span><br>
<span class="quotelev1">&gt;application
</span><br>
<span class="quotelev1">&gt;process would fail and the daemon not notice - this has nothing to do
</span><br>
<span class="quotelev1">&gt;with
</span><br>
<span class="quotelev1">&gt;slurm, but is just a standard Linux &quot;waitpid&quot; method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The most likely reason for the behavior you describe is that an
</span><br>
<span class="quotelev1">&gt;application
</span><br>
<span class="quotelev1">&gt;process encounters an IB problem which blocks communication - but the
</span><br>
<span class="quotelev1">&gt;process doesn't actually abort or terminate, it just hangs there. In
</span><br>
<span class="quotelev1">&gt;this
</span><br>
<span class="quotelev1">&gt;case, the orted doesn't see the process exit, so the system doesn't
</span><br>
know
<br>
<span class="quotelev1">&gt;it
</span><br>
<span class="quotelev1">&gt;should take any action.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That said, we know that 1.2.x has problems with clean shutdown in
</span><br>
<span class="quotelev1">&gt;abnormal
</span><br>
<span class="quotelev1">&gt;situations. Release 1.3 (when it comes out) addresses these issues and
</span><br>
<span class="quotelev1">&gt;appears (from our testing, at least) to be much more reliable about
</span><br>
<span class="quotelev1">&gt;cleanup.
</span><br>
<span class="quotelev1">&gt;You should see a definite improvement in the detection of process
</span><br>
<span class="quotelev1">&gt;failures
</span><br>
<span class="quotelev1">&gt;and subsequent cleanup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As for your question, I am working as we speak on two new launch modes
</span><br>
<span class="quotelev1">&gt;for
</span><br>
<span class="quotelev1">&gt;Open MPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. &quot;direct&quot; - this uses mpirun to directly launch the application
</span><br>
<span class="quotelev1">&gt;processes
</span><br>
<span class="quotelev1">&gt;without use of the intermediate daemons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. &quot;standalone&quot; - this uses the native launch command to simply launch
</span><br>
<span class="quotelev1">&gt;the
</span><br>
<span class="quotelev1">&gt;application processes, without use of mpirun or the intermediate
</span><br>
<span class="quotelev1">&gt;daemons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The initial target environments for these capabilities are TM and
</span><br>
SLURM.
<br>
<span class="quotelev1">&gt;The
</span><br>
<span class="quotelev1">&gt;latter poses a bit of a challenge as we cannot use their API due to
</span><br>
<span class="quotelev1">&gt;licensing issues, so it will come a little later. We have a design for
</span><br>
<span class="quotelev1">&gt;getting around the problem - the ordering is more driven by priorities
</span><br>
<span class="quotelev1">&gt;then
</span><br>
<span class="quotelev1">&gt;anything technical.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The direct launch capability -may- be included in 1.3 assuming it can
</span><br>
be
<br>
<span class="quotelev1">&gt;completed in time for the release. If not, it will almost certainly be
</span><br>
<span class="quotelev1">&gt;in
</span><br>
<span class="quotelev1">&gt;1.3.1. I'm expecting to complete the TM version in the next few days,
</span><br>
<span class="quotelev1">&gt;and
</span><br>
<span class="quotelev1">&gt;perhaps get the SLURM version working sometime this month - but they
</span><br>
<span class="quotelev1">&gt;will
</span><br>
<span class="quotelev1">&gt;need validation before being included in an official release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I can keep you posted if you like - once this gets into our repository,
</span><br>
<span class="quotelev1">&gt;you
</span><br>
<span class="quotelev1">&gt;are certainly welcome to try it out. I would welcome feedback on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hope that helps
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  From: &quot;Sacerdoti, Federico&quot; &lt;Federico.Sacerdoti_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Date: March 3, 2008 12:44:39 PM EST
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Subject: [OMPI users] slurm and all-srun orterun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  We are migrating to openmpi on our large (~1000 node) cluster, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  plan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  to use it exclusively on a multi-thousand core infiniband cluster
</span><br>
in
<br>
<span class="quotelev3">&gt;&gt;&gt;  the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  near future. We had extensive problems with parallel processes not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  dying
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  after a job crash, which was largely solved by switching to the
</span><br>
slurm
<br>
<span class="quotelev3">&gt;&gt;&gt;  resource manager.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  While orterun supports slurm, it only uses the srun facility to
</span><br>
<span class="quotelev1">&gt;launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  the &quot;orted&quot; daemons, which then start the actual user process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  themselves. In our recent migration to openmpi, we have noticed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  occasions where orted did not correctly clean up after a parallel
</span><br>
job
<br>
<span class="quotelev3">&gt;&gt;&gt;  crash. In most cases the crash was due to an infiniband error. Most
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  worryingly slurm was not able to cleanup the orted, and it along
</span><br>
with
<br>
<span class="quotelev3">&gt;&gt;&gt;  user processes were left running.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  At SC07 I was told that there is some talk of using srun to launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  both
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orted and user processes, or alternatively use srun only. Either
</span><br>
<span class="quotelev1">&gt;would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  solve the cleanup problem, in our experience. Is Rolf Castain on
</span><br>
this
<br>
<span class="quotelev3">&gt;&gt;&gt;  list?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Federico
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  P.S.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  We use proctrack/linuxproc slurm process tracking plugin. As noted
</span><br>
in
<br>
<span class="quotelev3">&gt;&gt;&gt;  the config man page, this may fail to find certain processes and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  explain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  why slurm could not clean up orted effectively.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  man slurm.conf(5), version 1.2.22:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  NOTE: &quot;proctrack/linuxproc&quot; and &quot;proctrack/pgid&quot; can fail to
</span><br>
identify
<br>
<span class="quotelev3">&gt;&gt;&gt;  all processes associated with a job since processes can become a
</span><br>
<span class="quotelev1">&gt;child
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  of the init process (when the parent process terminates) or change
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  their
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  process group. To reliably track all processes, one of the other
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mechanisms utilizing kernel modifications is preferable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Morris &quot;Moe&quot; Jette       jette1_at_[hidden]                 925-423-4856
Integrated Computational Resource Management Group   fax 925-423-6961
Livermore Computing            Lawrence Livermore National Laboratory
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
&quot;The problem with the world is that we draw the circle of our family
  too small.&quot;  - Mother Teresa
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5149.php">Michael: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5147.php">Doug Reeder: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
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
