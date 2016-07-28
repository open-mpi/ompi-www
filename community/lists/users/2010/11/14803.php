<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 06:57:59 2010" -->
<!-- isoreceived="20101117115759" -->
<!-- sent="Wed, 17 Nov 2010 06:56:56 -0500" -->
<!-- isosent="20101117115656" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="4CE3C308.9080600_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikAw=Bn=femk1Nn_3ihaO4B83PSqSykkpoBfgPV_at_mail.gmail.com" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-17 06:56:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14804.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14802.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>In reply to:</strong> <a href="14796.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14805.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14805.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/16/2010 08:24 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 16, 2010 at 12:23 PM, Terry Dontje 
</span><br>
<span class="quotelev1">&gt; &lt;terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 11/16/2010 01:31 PM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Am 16.11.2010 um 15:40 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     2. have SGE bind procs it launches to -all- of those cores. I believe SGE does this automatically to constrain the procs to running on only those cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     This is another &quot;bug/feature&quot; in SGE: it's a matter of discussion, whether the shepherd should get exactly one core (in case you use more than one `qrsh`per node) for each call, or *all* cores assigned (which we need right now, as the processes in Open MPI will be forks of orte daemon). About such a situtation I filled an issue a long time ago and &quot;limit_to_one_qrsh_per_host yes/no&quot; in the PE definition would do (this setting should then also change the core allocation of the master process):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254">http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I believe this is indeed the crux of the issue
</span><br>
<span class="quotelev2">&gt;&gt;     fantastic to share the same view.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     FWIW, I think I agree too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     3. tell OMPI to --bind-to-core.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     In other words, tell SGE to allocate a certain number of cores on each node, but to bind each proc to all of them (i.e., don't bind a proc to a specific core). I'm pretty sure that is a standard SGE option today (at least, I know it used to be). I don't believe any patch or devel work is required (to either SGE or OMPI).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     When you use a fixed allocation_rule and a matching -binding request it will work today. But any other case won't be distributed in the correct way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Is it possible to not include the -binding request? If SGE is told to use a fixed allocation_rule, and to allocate (for example) 2 cores/node, then won't the orted see
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     itself bound to two specific cores on each node?
</span><br>
<span class="quotelev2">&gt;&gt;     When you leave out the -binding, all jobs are allowed to run on any core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     We would then be okay as the spawned children of orted would inherit its binding. Just don't tell mpirun to bind the processes and the threads of those MPI procs will be able to operate across the provided cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Or does SGE only allocate 2 cores/node in that case (i.e., allocate, but no -binding given), but doesn't bind the orted to any two specific cores? If so, then that would be a problem as the orted would think itself unconstrained. If I understand the thread correctly, you're saying that this is what happens today - true?
</span><br>
<span class="quotelev2">&gt;&gt;     Exactly. It won't apply any binding at all and orted would think of being unlimited. I.e. limited only by the number of slots it should use thereon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     So I guess the question I have for Ralph.  I thought, and this
</span><br>
<span class="quotelev1">&gt;     might be mixing some of the ideas Jeff and I've been talking
</span><br>
<span class="quotelev1">&gt;     about, that when a RM executes the orted with a bound set of
</span><br>
<span class="quotelev1">&gt;     resources (ie cores) that orted would bind the individual
</span><br>
<span class="quotelev1">&gt;     processes on a subset of the bounded resources.  Is this not
</span><br>
<span class="quotelev1">&gt;     really the case for 1.4.X branch?  I believe it is the case for
</span><br>
<span class="quotelev1">&gt;     the trunk based on Jeff's refactoring.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are absolutely correct, Terry, and the 1.4 release series does 
</span><br>
<span class="quotelev1">&gt; include the proper code. The point here, though, is that SGE binds the 
</span><br>
<span class="quotelev1">&gt; orted to a single core, even though other cores are also allocated. So 
</span><br>
<span class="quotelev1">&gt; the orted detects an external binding of one core, and binds all its 
</span><br>
<span class="quotelev1">&gt; children to that same core.
</span><br>
I do not think you are right here.  Chris sent the following which looks 
<br>
like OGE (fka SGE) actually did bind the hnp to multiple cores.  However 
<br>
that message I believe is not coming from the processes themselves and 
<br>
actually is only shown by the hnp.  I wonder if Chris adds a 
<br>
&quot;-bind-to-core&quot; option  we'll see more output from the a.out's before 
<br>
they exec unterm?
<br>
<p>Sure.   Here's the stderr of a job submitted to my cluster with 'qsub -pe mpi 8 -binding linear:2 myScript.com'  where myScript.com runs 'mpirun -mca ras_gridengine_verbose 100 --report-bindings ./unterm':
<br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  [exec4:17384] System has detected external process binding to cores 0022
</span><br>
<span class="quotelev2">&gt;&gt;  [exec4:17384] ras:gridengine: JOB_ID: 59352
</span><br>
<span class="quotelev2">&gt;&gt;  [exec4:17384] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec4/active_jobs/59352.1/pe_hostfile
</span><br>
<span class="quotelev2">&gt;&gt;  [exec4:17384] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev2">&gt;&gt;  [exec4:17384] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt;  [exec4:17384] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt;  [exec4:17384] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt;  [exec4:17384] ras:gridengine: exec6.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt;  [exec4:17384] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt;  [exec4:17384] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<p><p><p>--td
<br>
<span class="quotelev1">&gt; What I had suggested to Reuti was to not include the -binding flag to 
</span><br>
<span class="quotelev1">&gt; SGE in the hopes that SGE would then bind the orted to all the 
</span><br>
<span class="quotelev1">&gt; allocated cores. However, as I feared, SGE in that case doesn't bind 
</span><br>
<span class="quotelev1">&gt; the orted at all - and so we assume the entire node is available for 
</span><br>
<span class="quotelev1">&gt; our use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is an SGE issue. We need them to bind the orted to -all- the 
</span><br>
<span class="quotelev1">&gt; allocated cores (and only those cores) in order for us to operate 
</span><br>
<span class="quotelev1">&gt; correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Oracle
</span><br>
<span class="quotelev1">&gt;     Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt;     Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;     Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt;     95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt;     Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14803/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14803/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14804.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14802.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>In reply to:</strong> <a href="14796.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14805.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14805.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
