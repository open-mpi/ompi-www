<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 16:12:37 2007" -->
<!-- isoreceived="20070712201237" -->
<!-- sent="Thu, 12 Jul 2007 16:12:20 -0400" -->
<!-- isosent="20070712201220" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core]  Orte update" -->
<!-- id="CDBAD005-4CD3-4A2D-BBBB-6E4C927A4BA1_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2BBE4F4.9EE7%rhc_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 16:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1868.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<li><strong>Previous message:</strong> <a href="1866.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>In reply to:</strong> <a href="1866.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1868.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<li><strong>Reply:</strong> <a href="1868.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have the ODLS framework which is supposed to launch local  
<br>
processes. Can we use it in order to spawn the local daemons ? This  
<br>
will solve the Windows problem, and will give us a more consistent  
<br>
environment.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 12, 2007, at 4:02 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; The commit has been made - it is r15390.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This commit restored the ability to execute singletons and singleton
</span><br>
<span class="quotelev1">&gt; comm_spawn, both in single node and multi-node environments. It also
</span><br>
<span class="quotelev1">&gt; includes a first step in our plan to reduce the ORTE system to the  
</span><br>
<span class="quotelev1">&gt; minimum
</span><br>
<span class="quotelev1">&gt; functionality required to support Open MPI (more on that separately).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short description of major changes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. singletons now fork/exec a local daemon to manage their  
</span><br>
<span class="quotelev1">&gt; operations. This
</span><br>
<span class="quotelev1">&gt; was required not only to resolve the current problem, but also to  
</span><br>
<span class="quotelev1">&gt; deal with
</span><br>
<span class="quotelev1">&gt; threading issues in the progress engine down the road.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. the orte daemon code now resides in libopen-rte. This was needed  
</span><br>
<span class="quotelev1">&gt; so that
</span><br>
<span class="quotelev1">&gt; mpirun could fully provide all daemon services since we no longer  
</span><br>
<span class="quotelev1">&gt; allow
</span><br>
<span class="quotelev1">&gt; multiple daemons to share a node (so an orted could not co-reside with
</span><br>
<span class="quotelev1">&gt; mpirun).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. daemons no longer use the orte triggering system during startup.  
</span><br>
<span class="quotelev1">&gt; Instead,
</span><br>
<span class="quotelev1">&gt; they directly call back to their parent pls component to report  
</span><br>
<span class="quotelev1">&gt; ready to
</span><br>
<span class="quotelev1">&gt; operate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have modified all the pls components except xcpu and poe (don't  
</span><br>
<span class="quotelev1">&gt; understand
</span><br>
<span class="quotelev1">&gt; either well enough to do it). Full functionality has been verified  
</span><br>
<span class="quotelev1">&gt; for rsh,
</span><br>
<span class="quotelev1">&gt; SLURM, and TM systems. Compile has been verified for xgrid and  
</span><br>
<span class="quotelev1">&gt; gridengine,
</span><br>
<span class="quotelev1">&gt; and hopefully those environments will work - though I could not  
</span><br>
<span class="quotelev1">&gt; verify that
</span><br>
<span class="quotelev1">&gt; was true.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that singletons will *not* operate in Windows environments at  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; time. The ability to fork/exec the local daemon would need to be added
</span><br>
<span class="quotelev1">&gt; first, assuming Windows can support singletons (I honestly don't  
</span><br>
<span class="quotelev1">&gt; know).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know of any problems.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/12/07 1:45 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yo folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Several of us are stuck waiting for this commit to hit. Rather  
</span><br>
<span class="quotelev2">&gt;&gt; than wasting
</span><br>
<span class="quotelev2">&gt;&gt; the next several hours, I'm going to make the commit now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So please be advised: if you do an update after this commit hits,  
</span><br>
<span class="quotelev2">&gt;&gt; you will
</span><br>
<span class="quotelev2">&gt;&gt; need to autogen. You may want to wait until a convenient time  
</span><br>
<span class="quotelev2">&gt;&gt; before doing
</span><br>
<span class="quotelev2">&gt;&gt; the update.
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
<span class="quotelev2">&gt;&gt; On 7/12/07 7:53 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yo all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a fairly significant change coming to the orte part of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code base
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that will require an autogen (sorry). I'll check it in late this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; afternoon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (can't do it at night as it is on my office desktop).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The commit will fix the singleton operations, including singleton
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm_spawn. It also takes the first step towards removing event- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; driven
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operations, replacing them with more serial code (to be explained
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separately). As part of all this, I had to modify the various pls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components. For those I could not compile, I made a first cut at  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should (hopefully) allow them to continue to operate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any of you using TM: we discovered that the trunk is not working  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on that environment. We are investigating - it has nothing to do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commit, but predates it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just wanted to give you a heads-up. Please refrain from making  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the orte codebase today, if you could - it would simplify the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commit and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ensure we don't lose your changes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1868.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<li><strong>Previous message:</strong> <a href="1866.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>In reply to:</strong> <a href="1866.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1868.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<li><strong>Reply:</strong> <a href="1868.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
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
