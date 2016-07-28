<?
$subject_val = "Re: [OMPI users] Collective component priorities and sm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 08:31:45 2010" -->
<!-- isoreceived="20100609123145" -->
<!-- sent="Wed, 9 Jun 2010 08:31:40 -0400" -->
<!-- isosent="20100609123140" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective component priorities and sm" -->
<!-- id="8821D649-626F-4B1C-8208-DBB1F22BA9DE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C0F1BFF.4060405_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Collective component priorities and sm<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 08:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13271.php">Jeff Squyres: "Re: [OMPI users] Threading models with openib"</a>
<li><strong>Previous message:</strong> <a href="13269.php">Chamila Janath: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
<li><strong>In reply to:</strong> <a href="13263.php">Gus Correa: "[OMPI users] Collective component priorities and sm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 9, 2010, at 12:43 AM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; btl_self_priority=0 (default value)
</span><br>
<span class="quotelev1">&gt; btl_sm_priority=0 (default value)
</span><br>
<p>These are ok.  BTL selection is a combination of priority and reachability.  The self BTL can *only* reach its own process.  So process A will use the &quot;self&quot; BTL to talk to process A.  The sm BTL can only reach *other* processes on the same host.  So process A will use the sm BTL to talk to process B, providing A != B and both A and B are on the same host.
<br>
<p><span class="quotelev1">&gt; coll_basic_priority=10 (default value)
</span><br>
<span class="quotelev1">&gt; coll_hierarch_priority=0 (default value)
</span><br>
<span class="quotelev1">&gt; coll_inter_priority=40 (default value)
</span><br>
<span class="quotelev1">&gt; coll_self_priority=75 (default value)
</span><br>
<span class="quotelev1">&gt; coll_sm_priority=0 (default value)
</span><br>
<span class="quotelev1">&gt; coll_sync_priority=50 (default value)
</span><br>
<span class="quotelev1">&gt; coll_tuned_priority=30 (default value)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Note that 'coll' priorities are *not* tied,
</span><br>
<span class="quotelev1">&gt; 'self' is maximum (75), and 'sm' is minimum (0).]
</span><br>
<p>Right.  Coll selection, in essence, is the same as BTL selection, but the mechanics are a little different.  Coll modules are selected on a per-communicator basis, and will only allow themselves to be selected if they can reach all members of a given communicator.  For example, the self coll will only allow itself to be selected for MPI_COMM_SELF (and duplicates thereof).  sm will only allow itself to be selected when all procs in the communicator are on the same host.  And so on.
<br>
<p><span class="quotelev1">&gt; coll:sm:comm_query (0/MPI_COMM_WORLD): priority too low; disqualifying
</span><br>
<span class="quotelev1">&gt; myself
</span><br>
<span class="quotelev1">&gt; coll:sm:comm_query (3/MPI_COMMUNICATOR 3): priority too low;
</span><br>
<span class="quotelev1">&gt; disqualifying myself
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Therefore, 'sm' seems to give up working in collectives ... :( ]
</span><br>
<p>Correct.
<br>
<p>I believe that we simply have the priority low for the sm collectives; you might want to try to raise it.
<br>
<p>We are actually working on the shared memory collectives for future releases; the current sm coll module that is shipped only has 4 algorithms implemented: barrier, bcast, reduce, allreduce for intracommunicators.  :-(
<br>
<p><span class="quotelev1">&gt; coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: self
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: sm
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component available: sync, priority: 50
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component available: tuned, priority: 30
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: Checking all available modules
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component available: basic, priority: 10
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: hierarch
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component not available: inter
</span><br>
<span class="quotelev1">&gt; coll:base:comm_select: component available: self, priority: 75
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Eventually 'sm', 'inter', and 'hierarch' seem to go out of business,
</span><br>
<span class="quotelev1">&gt; whereas 'basic', 'sync' and 'tuned' hang in there.
</span><br>
<span class="quotelev1">&gt; It is awkward that 'self' claims both to
</span><br>
<span class="quotelev1">&gt; be available and not available!]
</span><br>
<p>This must be selection for 2 different communicators.  Right before the &quot;checking all available modules&quot; message, there should be another one identifying which communicator this selection is for.  The tags on the left of the message should identify which process the selection is occurring in, so at least for MPI_THREAD_SINGLE MPI applications, the ordering should be deterministic and follow-able (even though the output from multiple processes may be interleaved -- the tags on the left should allow you to distinguish who is who).
<br>
<p><span class="quotelev1">&gt; 1) Are the &quot;coll&quot; priorities above (default values) the best choices
</span><br>
<span class="quotelev1">&gt; when I run in a single node, or were they chosen for a general
</span><br>
<span class="quotelev1">&gt; situation when the job runs across node boundaries?
</span><br>
<p>They're generally good.  We're probably too conservative for the sm coll because there was a time when it was buggy.  They should all be fixed now, though.
<br>
<p><span class="quotelev1">&gt; 2) Why does &quot;self&quot; have the largest value (75)?
</span><br>
<p>It will for MPI_COMM_SELF (and dups).
<br>
<p>The coll priorities might be a bit confusing because they can adjust themselves during selection.  It's also a bit more complicated because coll's are chosen on a per-communicator basis, and the priority is not necessarily uniform for every communicator.
<br>
<p>Hence, you should probably look at those priorities as the *max* priority a given coll will present itself as.  Hence, self's max will be 75.  But for communicators where it doesn't allow itself to be selected, it's effectively 0.
<br>
<p><span class="quotelev1">&gt; 3) Does it mean that all collectives will use the
</span><br>
<span class="quotelev1">&gt; self/loopback mechanism for communication?
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt; How about 'basic' and the rest of the gang with smaller priorities?
</span><br>
<p>The priorities are assessed on a per-communicator basis, and the modules can adjust their priorities accordingly (to either 0 or their respective max value).
<br>
<p>It's even *more* complicated because colls are allowed to mix and match on a single communicator.  For example, I cited above that the sm coll only has bcast, barrier, reduce, and allreduce.  So sm coll will &quot;win&quot; for communicator X, but only for those 4.  The next highest coll will be used to fill in the others.  If there's still more left after that one, then the next coll will be used, etc.  The process is repeated until all MPI collective operations have a plugin to use.
<br>
<p><span class="quotelev1">&gt; 4) Is it a good idea to set the 'sm' priority to a value
</span><br>
<span class="quotelev1">&gt; larger than 75 (to beat &quot;self&quot; and take over the collective functions)?
</span><br>
<p>It'll always beat self because self won't allow itself to be selected for communicators containing more than 1 process.
<br>
<p><span class="quotelev1">&gt; 5) In this case, will the collectives only use &quot;sm&quot;?
</span><br>
<p>If you set the sm priority large than basic and tuned, yes.
<br>
<p><span class="quotelev1">&gt; 6) Will this improve or degrade performance ?
</span><br>
<p>Depends on your app.  :-)  The idea is that it will improve performance if you're using those 4 operations.  The others will generally fall back to tuned.
<br>
<p><span class="quotelev1">&gt; 7) Is there any literature where I can learn
</span><br>
<span class="quotelev1">&gt; more about these OpenMPI collective priorities?
</span><br>
<p>Unfortunately not...  :-(
<br>
<p><span class="quotelev1">&gt; (I couldn't find anything about it on the FAQs.
</span><br>
<span class="quotelev1">&gt; Actually, a group of FAQ about collectives would be very helpful.)
</span><br>
<p>Agreed.  You wouldn't have a few cycles to write this stuff up, would you?  
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries">https://svn.open-mpi.org/trac/ompi/wiki/OMPIFAQEntries</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13271.php">Jeff Squyres: "Re: [OMPI users] Threading models with openib"</a>
<li><strong>Previous message:</strong> <a href="13269.php">Chamila Janath: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
<li><strong>In reply to:</strong> <a href="13263.php">Gus Correa: "[OMPI users] Collective component priorities and sm"</a>
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
