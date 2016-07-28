<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 13 09:36:01 2007" -->
<!-- isoreceived="20070713133601" -->
<!-- sent="Fri, 13 Jul 2007 07:35:52 -0600" -->
<!-- isosent="20070713133552" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte update" -->
<!-- id="C2BCDBD8.9F1E%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200707131522.09095.stork_at_hlrs.de" -->
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
<strong>Date:</strong> 2007-07-13 09:35:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1879.php">Jeff Squyres: "[OMPI devel] iof / oob issues"</a>
<li><strong>Previous message:</strong> <a href="1877.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<li><strong>In reply to:</strong> <a href="1877.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1901.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<li><strong>Reply:</strong> <a href="1901.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/13/07 7:22 AM, &quot;Sven Stork&quot; &lt;stork_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday 12 July 2007 15:53, Ralph H Castain wrote:
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what you mean with broken ?
</span><br>
<span class="quotelev1">&gt; I tried r15394 on out cluster and TM looks working for me. The only issue I
</span><br>
<span class="quotelev1">&gt; currently know about is the problem with iof (see ticket #1071, can be tmp.
</span><br>
<span class="quotelev1">&gt; fixed by using -mca iof ^null)
</span><br>
<p>That is correct - the null component was being incorrectly selected because
<br>
of an error in its selection logic. We fixed it in the r15390 commit - it
<br>
was a trivial fix - so now everything works fine.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   Sven 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1879.php">Jeff Squyres: "[OMPI devel] iof / oob issues"</a>
<li><strong>Previous message:</strong> <a href="1877.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<li><strong>In reply to:</strong> <a href="1877.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1901.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<li><strong>Reply:</strong> <a href="1901.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
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
