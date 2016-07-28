<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 09:26:43 2010" -->
<!-- isoreceived="20101116142643" -->
<!-- sent="Tue, 16 Nov 2010 09:26:34 -0500" -->
<!-- isosent="20101116142634" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="4CE2949A.6050404_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FD63572B-0523-4F08-9F74-52C9D8F517B1_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2010-11-16 09:26:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14781.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14779.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14779.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14782.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14782.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14785.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/16/2010 09:08 AM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 16.11.2010 um 14:07 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps I'm missing it, but it seems to me that the real problem lies in the interaction between SGE and OMPI during OMPI's two-phase launch. The verbose output shows that SGE dutifully allocated the requested number of cores on each node. However, OMPI launches only one process on each node (the ORTE daemon), which SGE &quot;binds&quot; to a single core since that is what it was told to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since SGE never sees the local MPI procs spawned by ORTE, it can't assign bindings to them. The ORTE daemon senses its local binding (i.e., to a single core in the allocation), and subsequently binds all its local procs to that core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe all you need to do is tell SGE to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. allocate a specified number of cores on each node to your job
</span><br>
<span class="quotelev1">&gt; this is currently the bug in the &quot;slot&lt;=&gt;  core&quot; relation in SGE, which has to be removed, updated or clarified. For now slot and core count are out of sync AFAICS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Technically this isn't a bug but a gap in the allocation rule.  I think 
<br>
the solution is a new allocation rule.
<br>
<span class="quotelev2">&gt;&gt; 2. have SGE bind procs it launches to -all- of those cores. I believe SGE does this automatically to constrain the procs to running on only those cores.
</span><br>
<span class="quotelev1">&gt; This is another &quot;bug/feature&quot; in SGE: it's a matter of discussion, whether the shepherd should get exactly one core (in case you use more than one `qrsh`per node) for each call, or *all* cores assigned (which we need right now, as the processes in Open MPI will be forks of orte daemon). About such a situtation I filled an issue a long time ago and &quot;limit_to_one_qrsh_per_host yes/no&quot; in the PE definition would do (this setting should then also change the core allocation of the master process):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254">http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254</a>
</span><br>
Isn't it almost required to have the shepherd bind to all the cores so 
<br>
that the orted inherits that binding?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. tell OMPI to --bind-to-core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In other words, tell SGE to allocate a certain number of cores on each node, but to bind each proc to all of them (i.e., don't bind a proc to a specific core). I'm pretty sure that is a standard SGE option today (at least, I know it used to be). I don't believe any patch or devel work is required (to either SGE or OMPI).
</span><br>
<span class="quotelev1">&gt; When you use a fixed allocation_rule and a matching -binding request it will work today. But any other case won't be distributed in the correct way.
</span><br>
Ok, so what is the &quot;correct&quot; way and we sure it isn't distributed correctly?
<br>
<p>In the original case of 7 nodes and processes if we do -binding pe 
<br>
linear:2, and add the -bind-to-core to mpirun  I'd actually expect 6 of 
<br>
the nodes processes bind to one core and the 7th node with 2 processes 
<br>
to have each of those processes bound to different cores on the same 
<br>
machine.
<br>
<p>Can we get a full output of such a run with -report-bindings turned on.  
<br>
I think we should find out that things actually are happening correctly 
<br>
except for the fact that the 6 of the nodes have 2 cores allocated but 
<br>
only one is being bound to by a process.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Nov 16, 2010 at 4:07 AM, Reuti&lt;reuti_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 16.11.2010 um 10:26 schrieb Chris Jewell:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 11/15/2010 02:11 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just to give my understanding of the problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry, I am still trying to grok all your email as what the problem you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are trying to solve. So is the issue is trying to have two jobs having
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes on the same node be able to bind there processes on different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; resources. Like core 1 for the first job and core 2 and 3 for the 2nd job?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can't get 2 slots on a machine, as it's limited by the core count to one here, so such a slot allocation shouldn't occur at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So to clarify, the current -binding&lt;binding_strategy&gt;:&lt;binding_amount&gt;  allocates binding_amount cores to each sge_shepherd process associated with a job_id.  There appears to be only one sge_shepherd process per job_id per execution node, so all child processes run on these allocated cores.  This is irrespective of the number of slots allocated to the node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree with Reuti that the binding_amount parameter should be a maximum number of bound cores per node, with the actual number determined by the number of slots allocated per node.  FWIW, an alternative approach might be to have another binding_type ('slot', say) that automatically allocated one core per slot.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course, a complex situation might arise if a user submits a combined MPI/multithreaded job, but then I guess we're into the realm of setting allocation_rule.
</span><br>
<span class="quotelev2">&gt;&gt; IIRC there was a discussion on the [GE users] list about it, to get an uniform distribution on all slave nodes for such jobs, as also e.g. $OMP_NUM_THREADS will be set to the same value for all slave nodes for hybrid jobs. Otherwise it would be necessary to adjust SGE to set this value in the &quot;-builtin-&quot; startup method automatically on all nodes to the local granted slots value. For now a fixed allocation rule of 1,2,4 or whatever must be used and you have to submit by reqeusting a wildcard PE to get any of these defined PEs for an even distribution and you don't care whether it's two times two slots, one time four slots, or four times one slot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my understanding, any type of parallel job should always request and get the total number of slots equal to the cores it needs to execute. Independent whether these are threads, forks or any hybrid type of jobs. Otherwise any resource planing and reservation will most likely fail. Nevertheless, there might exist rare cases where you submit an exclusive serial job but create threads/forks in the end. But such a setup should be an exception, not the default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it going to be worth looking at creating a patch for this?
</span><br>
<span class="quotelev2">&gt;&gt; Absolute.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I don't know much of the internals of SGE -- would it be hard work to do?  I've not that much time to dedicate towards it, but I could put some effort in if necessary...
</span><br>
<span class="quotelev2">&gt;&gt; I don't know about the exact coding for it, but when it's for now a plain &quot;copy&quot; of the binding list, then it should become a loop to create a list of cores from the original specification until all granted slots got a core allocated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr Chris Jewell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Statistics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Warwick
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Coventry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CV4 7AL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; UK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +44 (0)24 7615 0778
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14780/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14781.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14779.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14779.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14782.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14782.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14785.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
