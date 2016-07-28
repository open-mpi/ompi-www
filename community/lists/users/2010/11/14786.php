<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 12:26:04 2010" -->
<!-- isoreceived="20101116172604" -->
<!-- sent="Tue, 16 Nov 2010 12:25:15 -0500" -->
<!-- isosent="20101116172515" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="4CE2BE7B.3000008_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B73F8C9D-D779-43CF-8B42-0533400778C6_at_warwick.ac.uk" -->
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
<strong>Date:</strong> 2010-11-16 12:25:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14787.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14785.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14785.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14789.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14789.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/16/2010 12:13 PM, Chris Jewell wrote:
<br>
<span class="quotelev1">&gt; On 16 Nov 2010, at 14:26, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; In the original case of 7 nodes and processes if we do -binding pe linear:2, and add the -bind-to-core to mpirun  I'd actually expect 6 of the nodes processes bind to one core and the 7th node with 2 processes to have each of those processes bound to different cores on the same machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can we get a full output of such a run with -report-bindings turned on.  I think we should find out that things actually are happening correctly except for the fact that the 6 of the nodes have 2 cores allocated but only one is being bound to by a process.
</span><br>
<span class="quotelev1">&gt; Sure.   Here's the stderr of a job submitted to my cluster with 'qsub -pe mpi 8 -binding linear:2 myScript.com'  where myScript.com runs 'mpirun -mca ras_gridengine_verbose 100 --report-bindings ./unterm':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [exec4:17384] System has detected external process binding to cores 0022
</span><br>
<span class="quotelev1">&gt; [exec4:17384] ras:gridengine: JOB_ID: 59352
</span><br>
<span class="quotelev1">&gt; [exec4:17384] ras:gridengine: PE_HOSTFILE: /usr/sge/default/spool/exec4/active_jobs/59352.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; [exec4:17384] ras:gridengine: exec4.cluster.stats.local: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; [exec4:17384] ras:gridengine: exec2.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec4:17384] ras:gridengine: exec7.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec4:17384] ras:gridengine: exec3.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec4:17384] ras:gridengine: exec6.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec4:17384] ras:gridengine: exec1.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [exec4:17384] ras:gridengine: exec5.cluster.stats.local: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Is that all that came out?  I would have expected a some output from 
<br>
each process after the orted forked the processes but before the exec of 
<br>
unterm.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr Chris Jewell
</span><br>
<span class="quotelev1">&gt; Department of Statistics
</span><br>
<span class="quotelev1">&gt; University of Warwick
</span><br>
<span class="quotelev1">&gt; Coventry
</span><br>
<span class="quotelev1">&gt; CV4 7AL
</span><br>
<span class="quotelev1">&gt; UK
</span><br>
<span class="quotelev1">&gt; Tel: +44 (0)24 7615 0778
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14786/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14786/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14787.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14785.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14785.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14789.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14789.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
