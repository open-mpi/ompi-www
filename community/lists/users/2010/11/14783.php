<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 11:37:19 2010" -->
<!-- isoreceived="20101116163719" -->
<!-- sent="Tue, 16 Nov 2010 11:35:51 -0500" -->
<!-- isosent="20101116163551" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="4CE2B2E7.4000900_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6A39AE3D-C415-4B25-B572-9FA2160E3A13_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2010-11-16 11:35:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14784.php">Hicham Mouline: "[OMPI users] architecture questions"</a>
<li><strong>Previous message:</strong> <a href="14782.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14782.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14788.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14788.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/16/2010 10:59 AM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 16.11.2010 um 15:26 schrieb Terry Dontje:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. allocate a specified number of cores on each node to your job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is currently the bug in the &quot;slot&lt;=&gt;  core&quot; relation in SGE, which has to be removed, updated or clarified. For now slot and core count are out of sync AFAICS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Technically this isn't a bug but a gap in the allocation rule.  I think the solution is a new allocation rule.
</span><br>
<span class="quotelev1">&gt; Yes, you can phrase it this way. But what do you mean by &quot;new allocation rule&quot;?
</span><br>
The proposal of have a slot allocation rule that forces the number of 
<br>
cores allocated on each node to equal the number of slots.
<br>
<span class="quotelev1">&gt; The slot allocation should follow the specified cores?
</span><br>
The other way around I think.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. have SGE bind procs it launches to -all- of those cores. I believe SGE does this automatically to constrain the procs to running on only those cores.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is another &quot;bug/feature&quot; in SGE: it's a matter of discussion, whether the shepherd should get exactly one core (in case you use more than one `qrsh`per node) for each call, or *all* cores assigned (which we need right now, as the processes in Open MPI will be forks of orte daemon). About such a situtation I filled an issue a long time ago and &quot;limit_to_one_qrsh_per_host yes/no&quot; in the PE definition would do (this setting should then also change the core allocation of the master process):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254">http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254</a>
</span><br>
<span class="quotelev2">&gt;&gt; Isn't it almost required to have the shepherd bind to all the cores so that the orted inherits that binding?
</span><br>
<span class="quotelev1">&gt; Yes, for orted. But if you want to have any other (legacy) application which using N times `qrsh` to an exechost when you got N slots thereon, then only one core should be bound to each of the started shepherds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Blech.  Not sure of the solution for that but I see what you are saying 
<br>
now :-).
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. tell OMPI to --bind-to-core.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In other words, tell SGE to allocate a certain number of cores on each node, but to bind each proc to all of them (i.e., don't bind a proc to a specific core). I'm pretty sure that is a standard SGE option today (at least, I know it used to be). I don't believe any patch or devel work is required (to either SGE or OMPI).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When you use a fixed allocation_rule and a matching -binding request it will work today. But any other case won't be distributed in the correct way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, so what is the &quot;correct&quot; way and we sure it isn't distributed correctly?
</span><br>
<span class="quotelev1">&gt; You posted the two cases yesterday. Do we agree that both cases aren't correct, or do you think it's a correct allocation for both cases? Even if it could be &quot;repaired&quot; in Open MPI, it would be better to fix the generated 'pe' PE hostfile and 'set' allocation, i.e. the &quot;slot&lt;=&gt;  cores&quot; relation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
So I am not a GE type of guy but from what I've been led to believe what 
<br>
happened is correct (in some form of correct).  That is in case one we 
<br>
asked for a core allocation of 1 core per node and a core allocation of 
<br>
2 cores in the other case.  That is what we were given.  The fact that 
<br>
we distributed the slots in a non-uniform manner I am not sure is GE's 
<br>
fault.  Note I can understand where it may seem non-intuitive and not 
<br>
nice for people wanting to do things like this.
<br>
<span class="quotelev2">&gt;&gt; In the original case of 7 nodes and processes if we do -binding pe linear:2, and add the -bind-to-core to mpirun  I'd actually expect 6 of the nodes processes bind to one core and the 7th node with 2 processes to have each of those processes bound to different cores on the same machine.
</span><br>
<span class="quotelev1">&gt; Yes, possibly it could be repaired this way (for now I have no free machines to play with). But then the &quot;reserved&quot; cores by the &quot;-binding pe linear:2&quot; are lost for other processes on these 6 nodes, and the slot count gets out of sync with slots.
</span><br>
Right, if you want to rightsize the amount of cores allocated to slots 
<br>
allocated on each node then we are stuck unless a new allocation rule is 
<br>
made.
<br>
<span class="quotelev2">&gt;&gt; Can we get a full output of such a run with -report-bindings turned on.  I think we should find out that things actually are happening correctly except for the fact that the 6 of the nodes have 2 cores allocated but only one is being bound to by a process.
</span><br>
<span class="quotelev1">&gt; You mean, to accept the current behavior as being the intended one, as finally for having only one job running on these machines we get what we asked for - despite the fact that cores are lost for other processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, that is what I mean.  I first would like to prove at least to 
<br>
myself things are working the way we think they are.  I believe the 
<br>
discussion of recovering the lost cores is the next step.  Either we 
<br>
redefine what -binding linear:X means in light of slots, we make a new 
<br>
allocation rule -binding slots:X or live with the lost cores.  Note, the 
<br>
&quot;we&quot; here is loosely used.  I am by no means the keeper of GE and just 
<br>
injected myself in this discussion because, like Ralph, I have dealt 
<br>
with binding and I work for Oracle which develops GE.  Just to be clear 
<br>
I do not work in the Grid Engine group but have talked with them about 
<br>
this thread which has, for good or bad, formed my opinion above.
<br>
<p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14783/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14784.php">Hicham Mouline: "[OMPI users] architecture questions"</a>
<li><strong>Previous message:</strong> <a href="14782.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14782.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14788.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14788.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
