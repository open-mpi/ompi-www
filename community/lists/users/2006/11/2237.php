<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 17:27:14 2006" -->
<!-- isoreceived="20061128222714" -->
<!-- sent="Tue, 28 Nov 2006 15:27:05 -0700" -->
<!-- isosent="20061128222705" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="C19205C9.96C%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="347180497203A942A6AA82C85846CBC9034F60CB_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-28 17:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2238.php">Brian W Barrett: "Re: [OMPI users] 1.2b1 make failed on Mac 10.4"</a>
<li><strong>Previous message:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2242.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We already have --pernode, which spawns one process per node. You can also
<br>
launch one process/slot across all available slots by simply not specifying
<br>
the number of processes.
<br>
<p>I gather this option would say &quot;spawn N procs/node across all nodes&quot; - I can
<br>
understand the possible usefulness, but I'm not sure when we would get to
<br>
it. Also, it isn't clear from the discussion how it differs from our &quot;spawn
<br>
one proc/slot&quot; option - unless you either (a) don't want to use all the
<br>
available processors, or (b) want to oversubscribe the nodes. Are either of
<br>
those something people really would want to do on a frequent enough basis to
<br>
justify another command line option?
<br>
<p>Just asking for clarity - I don't have any a priori opposition to the
<br>
notion.
<br>
Ralph
<br>
<p><p><p>On 11/28/06 3:04 PM, &quot;Maestas, Christopher Daniel&quot; &lt;cdmaest_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I recently saw this on the mpiexec mailing list and pondered that this
</span><br>
<span class="quotelev1">&gt; would be a useful feature for Open MPI as well. :-)
</span><br>
<span class="quotelev1">&gt; I can't seem to enter a trac ticket and seem to be having issues w/ my
</span><br>
<span class="quotelev1">&gt; browser at the moment, but wanted to get this out there.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) mpiexec already has &quot;-pernode&quot; but thinking of n-way nodes with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dual-core CPUs, a switch like &quot;-Npernode &lt;n&gt;&quot; might be very useful
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (and probably easy to implement, i.e. in get_hosts.c one probably
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only would have to set nodes[i].availcpu to the correct n)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This sounds like a good suggestion, and pretty easy to implement in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; constrain_nodes() along with how -pernode is implemented.  I'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stick it in the tree if you code it up (with manpage entry too).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; please find attached a patch with my implementation of the feature;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-npernode &lt;nprocs&gt;&quot; is added as new command line feature;
</span><br>
<span class="quotelev2">&gt;&gt; constrain_nodes tries to be smart if different numbers of CPUs are
</span><br>
<span class="quotelev2">&gt;&gt; available on the nodes and takes the minimum of available CPUs and
</span><br>
<span class="quotelev2">&gt;&gt; requested number of processes per node ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!  I checked it in and tested it lightly.  With the extra
</span><br>
<span class="quotelev1">&gt; infrastructure for tracking individual node ids that was added earlier
</span><br>
<span class="quotelev1">&gt; today, the bit that does the constraining wiggled around some.
</span><br>
<span class="quotelev1">&gt; Hopefully it's clearer this way, since we have to use a loop now anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.osc.edu/browse/mpiexec/trunk/get_hosts.c?r1=390&amp;r2=392&amp;view=p">http://svn.osc.edu/browse/mpiexec/trunk/get_hosts.c?r1=390&amp;r2=392&amp;view=p</a>
</span><br>
<span class="quotelev1">&gt; atch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And then -pernode would default to -npernode 1 :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -cdm
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2238.php">Brian W Barrett: "Re: [OMPI users] 1.2b1 make failed on Mac 10.4"</a>
<li><strong>Previous message:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2242.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
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
