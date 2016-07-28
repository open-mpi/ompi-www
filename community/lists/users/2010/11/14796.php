<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 20:24:32 2010" -->
<!-- isoreceived="20101117012432" -->
<!-- sent="Tue, 16 Nov 2010 18:24:24 -0700" -->
<!-- isosent="20101117012424" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="AANLkTikAw=Bn=femk1Nn_3ihaO4B83PSqSykkpoBfgPV_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE2DA19.2090600_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 20:24:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14797.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14795.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>In reply to:</strong> <a href="14791.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14799.php">Daniel Gruber: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14799.php">Daniel Gruber: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14803.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Nov 16, 2010 at 12:23 PM, Terry Dontje &lt;terry.dontje_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  On 11/16/2010 01:31 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 16.11.2010 um 15:40 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  2. have SGE bind procs it launches to -all- of those cores. I believe SGE does this automatically to constrain the procs to running on only those cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This is another &quot;bug/feature&quot; in SGE: it's a matter of discussion, whether the shepherd should get exactly one core (in case you use more than one `qrsh`per node) for each call, or *all* cores assigned (which we need right now, as the processes in Open MPI will be forks of orte daemon). About such a situtation I filled an issue a long time ago and &quot;limit_to_one_qrsh_per_host yes/no&quot; in the PE definition would do (this setting should then also change the core allocation of the master process):
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254">http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe this is indeed the crux of the issue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  fantastic to share the same view.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  FWIW, I think I agree too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   3. tell OMPI to --bind-to-core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words, tell SGE to allocate a certain number of cores on each node, but to bind each proc to all of them (i.e., don't bind a proc to a specific core). I'm pretty sure that is a standard SGE option today (at least, I know it used to be). I don't believe any patch or devel work is required (to either SGE or OMPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When you use a fixed allocation_rule and a matching -binding request it will work today. But any other case won't be distributed in the correct way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to not include the -binding request? If SGE is told to use a fixed allocation_rule, and to allocate (for example) 2 cores/node, then won't the orted see
</span><br>
<span class="quotelev1">&gt; itself bound to two specific cores on each node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When you leave out the -binding, all jobs are allowed to run on any core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  We would then be okay as the spawned children of orted would inherit its binding. Just don't tell mpirun to bind the processes and the threads of those MPI procs will be able to operate across the provided cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or does SGE only allocate 2 cores/node in that case (i.e., allocate, but no -binding given), but doesn't bind the orted to any two specific cores? If so, then that would be a problem as the orted would think itself unconstrained. If I understand the thread correctly, you're saying that this is what happens today - true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Exactly. It won't apply any binding at all and orted would think of being unlimited. I.e. limited only by the number of slots it should use thereon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So I guess the question I have for Ralph.  I thought, and this might be
</span><br>
<span class="quotelev1">&gt; mixing some of the ideas Jeff and I've been talking about, that when a RM
</span><br>
<span class="quotelev1">&gt; executes the orted with a bound set of resources (ie cores) that orted would
</span><br>
<span class="quotelev1">&gt; bind the individual processes on a subset of the bounded resources.  Is this
</span><br>
<span class="quotelev1">&gt; not really the case for 1.4.X branch?  I believe it is the case for the
</span><br>
<span class="quotelev1">&gt; trunk based on Jeff's refactoring.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You are absolutely correct, Terry, and the 1.4 release series does include
<br>
the proper code. The point here, though, is that SGE binds the orted to a
<br>
single core, even though other cores are also allocated. So the orted
<br>
detects an external binding of one core, and binds all its children to that
<br>
same core.
<br>
<p>What I had suggested to Reuti was to not include the -binding flag to SGE in
<br>
the hopes that SGE would then bind the orted to all the allocated cores.
<br>
However, as I feared, SGE in that case doesn't bind the orted at all - and
<br>
so we assume the entire node is available for our use.
<br>
<p>This is an SGE issue. We need them to bind the orted to -all- the allocated
<br>
cores (and only those cores) in order for us to operate correctly.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [image: Oracle]
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;  Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt;  95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14796/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14796/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14797.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14795.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>In reply to:</strong> <a href="14791.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14799.php">Daniel Gruber: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14799.php">Daniel Gruber: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14803.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
