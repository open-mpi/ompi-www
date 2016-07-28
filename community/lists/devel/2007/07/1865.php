<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 15:46:05 2007" -->
<!-- isoreceived="20070712194605" -->
<!-- sent="Thu, 12 Jul 2007 13:45:55 -0600" -->
<!-- isosent="20070712194555" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte update" -->
<!-- id="C2BBE113.9EE1%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 15:45:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1866.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1864.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>In reply to:</strong> <a href="1855.php">Ralph H Castain: "[OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1866.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Reply:</strong> <a href="1866.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>Several of us are stuck waiting for this commit to hit. Rather than wasting
<br>
the next several hours, I'm going to make the commit now.
<br>
<p>So please be advised: if you do an update after this commit hits, you will
<br>
need to autogen. You may want to wait until a convenient time before doing
<br>
the update.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 7/12/07 7:53 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yo all
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just wanted to give you a heads-up. Please refrain from making changes to
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1866.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1864.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>In reply to:</strong> <a href="1855.php">Ralph H Castain: "[OMPI devel] Orte update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1866.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Reply:</strong> <a href="1866.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
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
