<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 12:36:32 2010" -->
<!-- isoreceived="20101116173632" -->
<!-- sent="Tue, 16 Nov 2010 18:36:11 +0100" -->
<!-- isosent="20101116173611" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="478CD494-44FE-4FD4-8164-E97D36F86285_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CE2B2E7.4000900_at_oracle.com" -->
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
<strong>Date:</strong> 2010-11-16 12:36:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14789.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14787.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14783.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14785.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 16.11.2010 um 17:35 schrieb Terry Dontje:
<br>
<p><span class="quotelev1">&gt; On 11/16/2010 10:59 AM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 16.11.2010 um 15:26 schrieb Terry Dontje:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. allocate a specified number of cores on each node to your job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is currently the bug in the &quot;slot &lt;=&gt; core&quot; relation in SGE, which has to be removed, updated or clarified. For now slot and core count are out of sync AFAICS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Technically this isn't a bug but a gap in the allocation rule.  I think the solution is a new allocation rule.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, you can phrase it this way. But what do you mean by &quot;new allocation rule&quot;? 
</span><br>
<span class="quotelev1">&gt; The proposal of have a slot allocation rule that forces the number of cores allocated on each node to equal the number of slots.
</span><br>
<p>Yep. But then you would end up with $round_robin_cores, $fill_up_cores, $pe_slots_cores and with a fixed value &quot;4 cores&quot;. Maybe an additional flag would be more suitable.
<br>
<p><p><span class="quotelev2">&gt;&gt; The slot allocation should follow the specified cores? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; The other way around I think.
</span><br>
<p>Yep, agreed.
<br>
<p><p><span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. have SGE bind procs it launches to -all- of those cores. I believe SGE does this automatically to constrain the procs to running on only those cores.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is another &quot;bug/feature&quot; in SGE: it's a matter of discussion, whether the shepherd should get exactly one core (in case you use more than one `qrsh`per node) for each call, or *all* cores assigned (which we need right now, as the processes in Open MPI will be forks of orte daemon). About such a situtation I filled an issue a long time ago and &quot;limit_to_one_qrsh_per_host yes/no&quot; in the PE definition would do (this setting should then also change the core allocation of the master process):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254">http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Isn't it almost required to have the shepherd bind to all the cores so that the orted inherits that binding?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, for orted. But if you want to have any other (legacy) application which using N times `qrsh` to an exechost when you got N slots thereon, then only one core should be bound to each of the started shepherds.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Blech.  Not sure of the solution for that but I see what you are saying now :-).
</span><br>
<p>:-)
<br>
<p><p><span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3. tell OMPI to --bind-to-core.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In other words, tell SGE to allocate a certain number of cores on each node, but to bind each proc to all of them (i.e., don't bind a proc to a specific core). I'm pretty sure that is a standard SGE option today (at least, I know it used to be). I don't believe any patch or devel work is required (to either SGE or OMPI).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When you use a fixed allocation_rule and a matching -binding request it will work today. But any other case won't be distributed in the correct way.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, so what is the &quot;correct&quot; way and we sure it isn't distributed correctly?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You posted the two cases yesterday. Do we agree that both cases aren't correct, or do you think it's a correct allocation for both cases? Even if it could be &quot;repaired&quot; in Open MPI, it would be better to fix the generated 'pe' PE hostfile and 'set' allocation, i.e. the &quot;slot &lt;=&gt; cores&quot; relation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; So I am not a GE type of guy but from what I've been led to believe what happened is correct (in some form of correct).  That is in case one we asked for a core allocation of 1 core per node and a core allocation of 2 cores in the other case.  That is what we were given.  The fact that we distributed the slots in a non-uniform manner I am not sure is GE's fault.  Note I can understand where it may seem non-intuitive and not nice for people wanting to do things like this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the original case of 7 nodes and processes if we do -binding pe linear:2, and add the -bind-to-core to mpirun  I'd actually expect 6 of the nodes processes bind to one core and the 7th node with 2 processes to have each of those processes bound to different cores on the same machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, possibly it could be repaired this way (for now I have no free machines to play with). But then the &quot;reserved&quot; cores by the &quot;-binding pe linear:2&quot; are lost for other processes on these 6 nodes, and the slot count gets out of sync with slots.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Right, if you want to rightsize the amount of cores allocated to slots allocated on each node then we are stuck unless a new allocation rule is made.  
</span><br>
<p>Great.
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; Can we get a full output of such a run with -report-bindings turned on.  I think we should find out that things actually are happening correctly except for the fact that the 6 of the nodes have 2 cores allocated but only one is being bound to by a process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You mean, to accept the current behavior as being the intended one, as finally for having only one job running on these machines we get what we asked for - despite the fact that cores are lost for other processes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, that is what I mean.  I first would like to prove at least to myself things are working the way we think they are.  I believe the discussion of recovering the lost cores is the next step.  Either we redefine what -binding linear:X means in light of slots, we make a new allocation rule -binding slots:X or live with the lost cores.      Note, the &quot;we&quot; here is loosely used.  I am by no means the keeper of GE and just injected myself in this discussion because, like Ralph, I have dealt with binding and I work for Oracle which develops GE.  Just to be clear I do not work in the Grid Engine group but have talked with them about this thread which has, for good or bad, formed my opinion above.
</span><br>
<p>Okay. But the discussion is archived here and we got some statements, which will be of use also for other developers.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14789.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14787.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14783.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14785.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
