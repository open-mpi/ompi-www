<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 10:59:47 2010" -->
<!-- isoreceived="20101116155947" -->
<!-- sent="Tue, 16 Nov 2010 16:59:33 +0100" -->
<!-- isosent="20101116155933" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="6A39AE3D-C415-4B25-B572-9FA2160E3A13_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CE2949A.6050404_at_oracle.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 10:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14783.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14781.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14780.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14783.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14783.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 16.11.2010 um 15:26 schrieb Terry Dontje:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. allocate a specified number of cores on each node to your job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; this is currently the bug in the &quot;slot &lt;=&gt; core&quot; relation in SGE, which has to be removed, updated or clarified. For now slot and core count are out of sync AFAICS.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Technically this isn't a bug but a gap in the allocation rule.  I think the solution is a new allocation rule.
</span><br>
<p>Yes, you can phrase it this way. But what do you mean by &quot;new allocation rule&quot;? The slot allocation should follow the specified cores? 
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; 2. have SGE bind procs it launches to -all- of those cores. I believe SGE does this automatically to constrain the procs to running on only those cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is another &quot;bug/feature&quot; in SGE: it's a matter of discussion, whether the shepherd should get exactly one core (in case you use more than one `qrsh`per node) for each call, or *all* cores assigned (which we need right now, as the processes in Open MPI will be forks of orte daemon). About such a situtation I filled an issue a long time ago and &quot;limit_to_one_qrsh_per_host yes/no&quot; in the PE definition would do (this setting should then also change the core allocation of the master process):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254">http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254</a>
</span><br>
<span class="quotelev1">&gt; Isn't it almost required to have the shepherd bind to all the cores so that the orted inherits that binding?
</span><br>
<p>Yes, for orted. But if you want to have any other (legacy) application which using N times `qrsh` to an exechost when you got N slots thereon, then only one core should be bound to each of the started shepherds.
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; 3. tell OMPI to --bind-to-core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In other words, tell SGE to allocate a certain number of cores on each node, but to bind each proc to all of them (i.e., don't bind a proc to a specific core). I'm pretty sure that is a standard SGE option today (at least, I know it used to be). I don't believe any patch or devel work is required (to either SGE or OMPI).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When you use a fixed allocation_rule and a matching -binding request it will work today. But any other case won't be distributed in the correct way.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, so what is the &quot;correct&quot; way and we sure it isn't distributed correctly?
</span><br>
<p>You posted the two cases yesterday. Do we agree that both cases aren't correct, or do you think it's a correct allocation for both cases? Even if it could be &quot;repaired&quot; in Open MPI, it would be better to fix the generated 'pe' PE hostfile and 'set' allocation, i.e. the &quot;slot &lt;=&gt; cores&quot; relation.
<br>
<p><p><span class="quotelev1">&gt; In the original case of 7 nodes and processes if we do -binding pe linear:2, and add the -bind-to-core to mpirun  I'd actually expect 6 of the nodes processes bind to one core and the 7th node with 2 processes to have each of those processes bound to different cores on the same machine.
</span><br>
<p>Yes, possibly it could be repaired this way (for now I have no free machines to play with). But then the &quot;reserved&quot; cores by the &quot;-binding pe linear:2&quot; are lost for other processes on these 6 nodes, and the slot count gets out of sync with slots.
<br>
<p><p><span class="quotelev1">&gt; Can we get a full output of such a run with -report-bindings turned on.  I think we should find out that things actually are happening correctly except for the fact that the 6 of the nodes have 2 cores allocated but only one is being bound to by a process.
</span><br>
<p>You mean, to accept the current behavior as being the intended one, as finally for having only one job running on these machines we get what we asked for - despite the fact that cores are lost for other processes?
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14783.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14781.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14780.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14783.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14783.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
