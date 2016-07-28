<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 16:22:00 2007" -->
<!-- isoreceived="20070712202200" -->
<!-- sent="Thu, 12 Jul 2007 14:21:52 -0600" -->
<!-- isosent="20070712202152" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core]  Orte update" -->
<!-- id="C2BBE980.9EF2%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2BBE868.9EEF%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-12 16:21:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1870.php">Galen Shipman: "[OMPI devel] OMPI_FREE_LIST improvements"</a>
<li><strong>Previous message:</strong> <a href="1868.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<li><strong>In reply to:</strong> <a href="1868.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1877.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should have expounded further...
<br>
<p>We actually looked at using the ODLS, and at creating a new opal_fork
<br>
capability that could perhaps be shared between the ODLS and this point in
<br>
the code. Unfortunately, neither option worked very well.
<br>
<p>In the ODLS case, we had to pepper it with if statements to reflect the
<br>
differences in available services and information.
<br>
<p>In the case of opal_fork, we encountered a similar problem - the info
<br>
available, what had to be passed to the fork'd child, etc. were all so
<br>
different that we wound up just writing a big &quot;if&quot; at the top and having
<br>
totally separate code paths.
<br>
<p>That's why we wound up where we are. Remember, the ODLS fork/exec's
<br>
application procs, so it includes all kinds of stuff for that purpose. In
<br>
this case, we are fork/exec'ing an orted - totally different informational
<br>
requirements.
<br>
<p><p>On 7/12/07 2:17 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't think so - the decision to fork must come earlier, before that
</span><br>
<span class="quotelev1">&gt; framework can be selected. At the time of the fork, we don't have access to
</span><br>
<span class="quotelev1">&gt; very much in terms of services.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are welcome to look and see if you can find a way to do it. The
</span><br>
<span class="quotelev1">&gt; fork/exec occurs in orte/mca/sds/base/sds_base_universe.c, which is called
</span><br>
<span class="quotelev1">&gt; just before we define our name during orte_init_stage1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/12/07 2:12 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have the ODLS framework which is supposed to launch local
</span><br>
<span class="quotelev2">&gt;&gt; processes. Can we use it in order to spawn the local daemons ? This
</span><br>
<span class="quotelev2">&gt;&gt; will solve the Windows problem, and will give us a more consistent
</span><br>
<span class="quotelev2">&gt;&gt; environment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 12, 2007, at 4:02 PM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The commit has been made - it is r15390.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This commit restored the ability to execute singletons and singleton
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm_spawn, both in single node and multi-node environments. It also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; includes a first step in our plan to reduce the ORTE system to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; minimum
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality required to support Open MPI (more on that separately).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Short description of major changes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. singletons now fork/exec a local daemon to manage their
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operations. This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was required not only to resolve the current problem, but also to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deal with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threading issues in the progress engine down the road.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. the orte daemon code now resides in libopen-rte. This was needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun could fully provide all daemon services since we no longer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple daemons to share a node (so an orted could not co-reside with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. daemons no longer use the orte triggering system during startup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Instead,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they directly call back to their parent pls component to report
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ready to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have modified all the pls components except xcpu and poe (don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand
</span><br>
<span class="quotelev3">&gt;&gt;&gt; either well enough to do it). Full functionality has been verified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for rsh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM, and TM systems. Compile has been verified for xgrid and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gridengine,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and hopefully those environments will work - though I could not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; verify that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was true.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that singletons will *not* operate in Windows environments at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time. The ability to fork/exec the local daemon would need to be added
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first, assuming Windows can support singletons (I honestly don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please let me know of any problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/12/07 1:45 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yo folks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Several of us are stuck waiting for this commit to hit. Rather
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than wasting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the next several hours, I'm going to make the commit now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So please be advised: if you do an update after this commit hits,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need to autogen. You may want to wait until a convenient time
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before doing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the update.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7/12/07 7:53 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yo all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a fairly significant change coming to the orte part of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code base
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that will require an autogen (sorry). I'll check it in late this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; afternoon
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (can't do it at night as it is on my office desktop).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The commit will fix the singleton operations, including singleton
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comm_spawn. It also takes the first step towards removing event-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; driven
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; operations, replacing them with more serial code (to be explained
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; separately). As part of all this, I had to modify the various pls
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; components. For those I could not compile, I made a first cut at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; them that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should (hopefully) allow them to continue to operate.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any of you using TM: we discovered that the trunk is not working
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; currently
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on that environment. We are investigating - it has nothing to do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commit, but predates it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Just wanted to give you a heads-up. Please refrain from making
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; changes to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the orte codebase today, if you could - it would simplify the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commit and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ensure we don't lose your changes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
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
<li><strong>Next message:</strong> <a href="1870.php">Galen Shipman: "[OMPI devel] OMPI_FREE_LIST improvements"</a>
<li><strong>Previous message:</strong> <a href="1868.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<li><strong>In reply to:</strong> <a href="1868.php">Ralph H Castain: "Re: [OMPI devel] [devel-core]  Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1877.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
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
