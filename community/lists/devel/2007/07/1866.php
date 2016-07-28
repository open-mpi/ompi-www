<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 16:02:36 2007" -->
<!-- isoreceived="20070712200236" -->
<!-- sent="Thu, 12 Jul 2007 14:02:28 -0600" -->
<!-- isosent="20070712200228" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte update" -->
<!-- id="C2BBE4F4.9EE7%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2BBE113.9EE1%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 16:02:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1867.php">George Bosilca: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<li><strong>Previous message:</strong> <a href="1865.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>In reply to:</strong> <a href="1865.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1867.php">George Bosilca: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<li><strong>Reply:</strong> <a href="1867.php">George Bosilca: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The commit has been made - it is r15390.
<br>
<p>This commit restored the ability to execute singletons and singleton
<br>
comm_spawn, both in single node and multi-node environments. It also
<br>
includes a first step in our plan to reduce the ORTE system to the minimum
<br>
functionality required to support Open MPI (more on that separately).
<br>
<p>Short description of major changes:
<br>
<p>1. singletons now fork/exec a local daemon to manage their operations. This
<br>
was required not only to resolve the current problem, but also to deal with
<br>
threading issues in the progress engine down the road.
<br>
<p>2. the orte daemon code now resides in libopen-rte. This was needed so that
<br>
mpirun could fully provide all daemon services since we no longer allow
<br>
multiple daemons to share a node (so an orted could not co-reside with
<br>
mpirun).
<br>
<p>3. daemons no longer use the orte triggering system during startup. Instead,
<br>
they directly call back to their parent pls component to report ready to
<br>
operate.
<br>
<p>I have modified all the pls components except xcpu and poe (don't understand
<br>
either well enough to do it). Full functionality has been verified for rsh,
<br>
SLURM, and TM systems. Compile has been verified for xgrid and gridengine,
<br>
and hopefully those environments will work - though I could not verify that
<br>
was true.
<br>
<p>Note that singletons will *not* operate in Windows environments at this
<br>
time. The ability to fork/exec the local daemon would need to be added
<br>
first, assuming Windows can support singletons (I honestly don't know).
<br>
<p>Please let me know of any problems.
<br>
Ralph
<br>
<p><p>On 7/12/07 1:45 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yo folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Several of us are stuck waiting for this commit to hit. Rather than wasting
</span><br>
<span class="quotelev1">&gt; the next several hours, I'm going to make the commit now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So please be advised: if you do an update after this commit hits, you will
</span><br>
<span class="quotelev1">&gt; need to autogen. You may want to wait until a convenient time before doing
</span><br>
<span class="quotelev1">&gt; the update.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/12/07 7:53 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yo all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a fairly significant change coming to the orte part of the code base
</span><br>
<span class="quotelev2">&gt;&gt; that will require an autogen (sorry). I'll check it in late this afternoon
</span><br>
<span class="quotelev2">&gt;&gt; (can't do it at night as it is on my office desktop).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The commit will fix the singleton operations, including singleton
</span><br>
<span class="quotelev2">&gt;&gt; comm_spawn. It also takes the first step towards removing event-driven
</span><br>
<span class="quotelev2">&gt;&gt; operations, replacing them with more serial code (to be explained
</span><br>
<span class="quotelev2">&gt;&gt; separately). As part of all this, I had to modify the various pls
</span><br>
<span class="quotelev2">&gt;&gt; components. For those I could not compile, I made a first cut at them that
</span><br>
<span class="quotelev2">&gt;&gt; should (hopefully) allow them to continue to operate.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any of you using TM: we discovered that the trunk is not working currently
</span><br>
<span class="quotelev2">&gt;&gt; on that environment. We are investigating - it has nothing to do with this
</span><br>
<span class="quotelev2">&gt;&gt; commit, but predates it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just wanted to give you a heads-up. Please refrain from making changes to
</span><br>
<span class="quotelev2">&gt;&gt; the orte codebase today, if you could - it would simplify the commit and
</span><br>
<span class="quotelev2">&gt;&gt; ensure we don't lose your changes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1867.php">George Bosilca: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<li><strong>Previous message:</strong> <a href="1865.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>In reply to:</strong> <a href="1865.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1867.php">George Bosilca: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<li><strong>Reply:</strong> <a href="1867.php">George Bosilca: "Re: [OMPI devel] [devel-core]  Orte update"</a>
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
