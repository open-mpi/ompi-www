<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 16 08:40:08 2007" -->
<!-- isoreceived="20070716124008" -->
<!-- sent="Mon, 16 Jul 2007 06:39:56 -0600" -->
<!-- isosent="20070716123956" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte update" -->
<!-- id="C2C0C33C.9FB8%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200707161411.53242.stork_at_hlrs.de" -->
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
<strong>Date:</strong> 2007-07-16 08:39:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1904.php">Brian Barrett: "[OMPI devel] RML/OOB change heads up"</a>
<li><strong>Previous message:</strong> <a href="1902.php">Jeff Squyres: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>In reply to:</strong> <a href="1901.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sigh - somehow, the fix slid out of that commit. I have now fixed it in
<br>
r15437.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 7/16/07 6:11 AM, &quot;Sven Stork&quot; &lt;stork_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Friday 13 July 2007 15:35, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/13/07 7:22 AM, &quot;Sven Stork&quot; &lt;stork_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thursday 12 July 2007 15:53, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yo all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a fairly significant change coming to the orte part of the code
</span><br>
<span class="quotelev1">&gt; base
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that will require an autogen (sorry). I'll check it in late this
</span><br>
<span class="quotelev1">&gt; afternoon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (can't do it at night as it is on my office desktop).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The commit will fix the singleton operations, including singleton
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comm_spawn. It also takes the first step towards removing event-driven
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operations, replacing them with more serial code (to be explained
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; separately). As part of all this, I had to modify the various pls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; components. For those I could not compile, I made a first cut at them
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should (hopefully) allow them to continue to operate.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any of you using TM: we discovered that the trunk is not working
</span><br>
<span class="quotelev1">&gt; currently
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on that environment. We are investigating - it has nothing to do with
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; commit, but predates it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what you mean with broken ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried r15394 on out cluster and TM looks working for me. The only issue
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently know about is the problem with iof (see ticket #1071, can be
</span><br>
<span class="quotelev1">&gt; tmp.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixed by using -mca iof ^null)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is correct - the null component was being incorrectly selected because
</span><br>
<span class="quotelev2">&gt;&gt; of an error in its selection logic. We fixed it in the r15390 commit - it
</span><br>
<span class="quotelev2">&gt;&gt; was a trivial fix - so now everything works fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cannot see anything in r15390 that fixes this issue. I checked with the
</span><br>
<span class="quotelev1">&gt; latest version of the trunk and have still the same issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hpcstork_at_noco042:~/ &gt; ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.3a1r15427
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r15427
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; hpcstork_at_noco042:~/ &gt; mpiexec date
</span><br>
<span class="quotelev1">&gt; hpcstork_at_noco042:~/ &gt; mpiexec -mca iof ^null date
</span><br>
<span class="quotelev1">&gt; Mon Jul 16 14:00:57 CEST 2007
</span><br>
<span class="quotelev1">&gt; Mon Jul 16 14:00:57 CEST 2007
</span><br>
<span class="quotelev1">&gt; hpcstork_at_noco042:~/ &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   Sven
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Sven 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just wanted to give you a heads-up. Please refrain from making changes to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the orte codebase today, if you could - it would simplify the commit and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ensure we don't lose your changes.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1904.php">Brian Barrett: "[OMPI devel] RML/OOB change heads up"</a>
<li><strong>Previous message:</strong> <a href="1902.php">Jeff Squyres: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>In reply to:</strong> <a href="1901.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
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
