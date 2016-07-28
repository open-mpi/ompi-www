<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 13 09:21:51 2007" -->
<!-- isoreceived="20070713132151" -->
<!-- sent="Fri, 13 Jul 2007 15:22:08 +0200" -->
<!-- isosent="20070713132208" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte update" -->
<!-- id="200707131522.09095.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C2BB8E96.9EA2%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Sven Stork (<em>stork_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-13 09:22:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1878.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1876.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>In reply to:</strong> <a href="1855.php">Ralph H Castain: "[OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1878.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Reply:</strong> <a href="1878.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>On Thursday 12 July 2007 15:53, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Yo all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a fairly significant change coming to the orte part of the code base
</span><br>
<span class="quotelev1">&gt; that will require an autogen (sorry). I'll check it in late this afternoon
</span><br>
<span class="quotelev1">&gt; (can't do it at night as it is on my office desktop).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The commit will fix the singleton operations, including singleton
</span><br>
<span class="quotelev1">&gt; comm_spawn. It also takes the first step towards removing event-driven
</span><br>
<span class="quotelev1">&gt; operations, replacing them with more serial code (to be explained
</span><br>
<span class="quotelev1">&gt; separately). As part of all this, I had to modify the various pls
</span><br>
<span class="quotelev1">&gt; components. For those I could not compile, I made a first cut at them that
</span><br>
<span class="quotelev1">&gt; should (hopefully) allow them to continue to operate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any of you using TM: we discovered that the trunk is not working currently
</span><br>
<span class="quotelev1">&gt; on that environment. We are investigating - it has nothing to do with this
</span><br>
<span class="quotelev1">&gt; commit, but predates it.
</span><br>
<p>what you mean with broken ?
<br>
I tried r15394 on out cluster and TM looks working for me. The only issue I 
<br>
currently know about is the problem with iof (see ticket #1071, can be tmp. 
<br>
fixed by using -mca iof ^null)
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Sven 
<br>
<p><span class="quotelev1">&gt; Just wanted to give you a heads-up. Please refrain from making changes to
</span><br>
<span class="quotelev1">&gt; the orte codebase today, if you could - it would simplify the commit and
</span><br>
<span class="quotelev1">&gt; ensure we don't lose your changes.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1878.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1876.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>In reply to:</strong> <a href="1855.php">Ralph H Castain: "[OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1878.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Reply:</strong> <a href="1878.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
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
