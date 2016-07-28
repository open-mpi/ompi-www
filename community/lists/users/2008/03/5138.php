<?
$subject_val = "Re: [OMPI users] slurm and all-srun orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 11:16:21 2008" -->
<!-- isoreceived="20080305161621" -->
<!-- sent="Wed, 5 Mar 2008 11:16:11 -0500" -->
<!-- isosent="20080305161611" -->
<!-- name="Sacerdoti, Federico" -->
<!-- email="Federico.Sacerdoti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slurm and all-srun orterun" -->
<!-- id="A14F91CBBBA3014385A806944C9BEF1BAE7D83_at_maildrd1.nyc.deshaw.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C3F1F182.488A%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] slurm and all-srun orterun<br>
<strong>From:</strong> Sacerdoti, Federico (<em>Federico.Sacerdoti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 11:16:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5139.php">Samir Faci: "[OMPI users] General Design Question"</a>
<li><strong>Previous message:</strong> <a href="5137.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>In reply to:</strong> <a href="5123.php">Ralph Castain: "Re: [OMPI users] slurm and all-srun orterun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
<p>First, we would be happy to test the slurm direct launch capability.
<br>
Regarding the failure case, I realize that the IB errors do not directly
<br>
affect the orted daemons. This is what we observed:
<br>
<p>1. Parallel job started
<br>
2. IB errors caused some processes to fail (but not all)
<br>
3. slurm tears down entire job, attempting to kill all orted and their
<br>
children
<br>
<p>We want this behavior: if any process of a parallel job dies, all
<br>
processes should be stopped. The orted daemons in charge of processes
<br>
that did not fail are the problem, as slurm was not able to kill them.
<br>
Sounds like this is a known issue in openmpi 1.2.x.
<br>
<p>In any case, the new direct launching methods sound promising. I am
<br>
surprised there are licensing issues with Slurm, is this a GPL-and-BSD
<br>
issue? I am CC'ing slurm author Moe; he may be able to help.
<br>
<p>Thanks again and I look forward to testing the direct launch,
<br>
Federico
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Monday, March 03, 2008 8:19 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Cc: Ralph Castain
<br>
Subject: Re: [OMPI users] slurm and all-srun orterun
<br>
<p>Hello
<br>
<p>I don't monitor the user list any more, but a friendly elf sent this
<br>
along
<br>
to me.
<br>
<p>I'm not entirely sure what problem might be causing the behavior you are
<br>
seeing. Neither mpirun nor any orted should be impacted by IB problems
<br>
as
<br>
they aren't MPI processes and thus never interact with IB. Only
<br>
application
<br>
procs touch the IB subsystem - if an application proc fails, the orted
<br>
should see that and correctly order the shutdown of the job. So if you
<br>
are
<br>
having IB problems, that wouldn't explain daemons failing.
<br>
<p>If a daemon is aborting, that will cause problems in 1.2.x. We have
<br>
noted
<br>
that SLURM (even though the daemons are launched via srun) doesn't
<br>
always
<br>
tell us when this happens, leaving Open MPI vulnerable to &quot;hangs&quot; as it
<br>
attempts to cleanup and finds it can't do it. I'm not sure why you would
<br>
see
<br>
a daemon die, though - the fact that an application process failed
<br>
shouldn't
<br>
cause that to happen. Likewise, it would seem strange that the
<br>
application
<br>
process would fail and the daemon not notice - this has nothing to do
<br>
with
<br>
slurm, but is just a standard Linux &quot;waitpid&quot; method.
<br>
<p>The most likely reason for the behavior you describe is that an
<br>
application
<br>
process encounters an IB problem which blocks communication - but the
<br>
process doesn't actually abort or terminate, it just hangs there. In
<br>
this
<br>
case, the orted doesn't see the process exit, so the system doesn't know
<br>
it
<br>
should take any action.
<br>
<p>That said, we know that 1.2.x has problems with clean shutdown in
<br>
abnormal
<br>
situations. Release 1.3 (when it comes out) addresses these issues and
<br>
appears (from our testing, at least) to be much more reliable about
<br>
cleanup.
<br>
You should see a definite improvement in the detection of process
<br>
failures
<br>
and subsequent cleanup.
<br>
<p>As for your question, I am working as we speak on two new launch modes
<br>
for
<br>
Open MPI:
<br>
<p>1. &quot;direct&quot; - this uses mpirun to directly launch the application
<br>
processes
<br>
without use of the intermediate daemons.
<br>
<p>2. &quot;standalone&quot; - this uses the native launch command to simply launch
<br>
the
<br>
application processes, without use of mpirun or the intermediate
<br>
daemons.
<br>
<p>The initial target environments for these capabilities are TM and SLURM.
<br>
The
<br>
latter poses a bit of a challenge as we cannot use their API due to
<br>
licensing issues, so it will come a little later. We have a design for
<br>
getting around the problem - the ordering is more driven by priorities
<br>
then
<br>
anything technical.
<br>
<p>The direct launch capability -may- be included in 1.3 assuming it can be
<br>
completed in time for the release. If not, it will almost certainly be
<br>
in
<br>
1.3.1. I'm expecting to complete the TM version in the next few days,
<br>
and
<br>
perhaps get the SLURM version working sometime this month - but they
<br>
will
<br>
need validation before being included in an official release.
<br>
<p>I can keep you posted if you like - once this gets into our repository,
<br>
you
<br>
are certainly welcome to try it out. I would welcome feedback on it.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p><span class="quotelev2">&gt;&gt; From: &quot;Sacerdoti, Federico&quot; &lt;Federico.Sacerdoti_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: March 3, 2008 12:44:39 PM EST
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] slurm and all-srun orterun
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are migrating to openmpi on our large (~1000 node) cluster, and
</span><br>
<span class="quotelev2">&gt;&gt; plan
</span><br>
<span class="quotelev2">&gt;&gt; to use it exclusively on a multi-thousand core infiniband cluster in
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; near future. We had extensive problems with parallel processes not
</span><br>
<span class="quotelev2">&gt;&gt; dying
</span><br>
<span class="quotelev2">&gt;&gt; after a job crash, which was largely solved by switching to the slurm
</span><br>
<span class="quotelev2">&gt;&gt; resource manager.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; While orterun supports slurm, it only uses the srun facility to
</span><br>
launch
<br>
<span class="quotelev2">&gt;&gt; the &quot;orted&quot; daemons, which then start the actual user process
</span><br>
<span class="quotelev2">&gt;&gt; themselves. In our recent migration to openmpi, we have noticed
</span><br>
<span class="quotelev2">&gt;&gt; occasions where orted did not correctly clean up after a parallel job
</span><br>
<span class="quotelev2">&gt;&gt; crash. In most cases the crash was due to an infiniband error. Most
</span><br>
<span class="quotelev2">&gt;&gt; worryingly slurm was not able to cleanup the orted, and it along with
</span><br>
<span class="quotelev2">&gt;&gt; user processes were left running.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At SC07 I was told that there is some talk of using srun to launch
</span><br>
<span class="quotelev2">&gt;&gt; both
</span><br>
<span class="quotelev2">&gt;&gt; orted and user processes, or alternatively use srun only. Either
</span><br>
would
<br>
<span class="quotelev2">&gt;&gt; solve the cleanup problem, in our experience. Is Rolf Castain on this
</span><br>
<span class="quotelev2">&gt;&gt; list?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Federico
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.S.
</span><br>
<span class="quotelev2">&gt;&gt; We use proctrack/linuxproc slurm process tracking plugin. As noted in
</span><br>
<span class="quotelev2">&gt;&gt; the config man page, this may fail to find certain processes and
</span><br>
<span class="quotelev2">&gt;&gt; explain
</span><br>
<span class="quotelev2">&gt;&gt; why slurm could not clean up orted effectively.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; man slurm.conf(5), version 1.2.22:
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: &quot;proctrack/linuxproc&quot; and &quot;proctrack/pgid&quot; can fail to identify
</span><br>
<span class="quotelev2">&gt;&gt; all processes associated with a job since processes can become a
</span><br>
child
<br>
<span class="quotelev2">&gt;&gt; of the init process (when the parent process terminates) or change
</span><br>
<span class="quotelev2">&gt;&gt; their
</span><br>
<span class="quotelev2">&gt;&gt; process group. To reliably track all processes, one of the other
</span><br>
<span class="quotelev2">&gt;&gt; mechanisms utilizing kernel modifications is preferable.
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5139.php">Samir Faci: "[OMPI users] General Design Question"</a>
<li><strong>Previous message:</strong> <a href="5137.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>In reply to:</strong> <a href="5123.php">Ralph Castain: "Re: [OMPI users] slurm and all-srun orterun"</a>
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
