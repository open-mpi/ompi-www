<?
$subject_val = "Re: [OMPI devel] Lots and lots of warnings on master";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 10:23:02 2015" -->
<!-- isoreceived="20151111152302" -->
<!-- sent="Wed, 11 Nov 2015 07:22:56 -0800" -->
<!-- isosent="20151111152256" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Lots and lots of warnings on master" -->
<!-- id="14B55A69-2FC9-4437-BB85-37BFA6AC2ABE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7EA0205E-F0BB-496E-A809-552C377EB8CE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Lots and lots of warnings on master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-11 10:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18362.php">Mark Santcroos: "[OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<li><strong>Previous message:</strong> <a href="18360.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>In reply to:</strong> <a href="18360.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m not saying it&#226;&#128;&#153;s a bad suggestion - just pointing out that it likely wasn&#226;&#128;&#153;t caused by carelessness.
<br>
<p>Setting something up on odin would be tricky, but someone could look at that environment to see why it&#226;&#128;&#153;s generating all these when we don&#226;&#128;&#153;t see them elsewhere - maybe it would be simple to setup something elsewhere that gets the same result.
<br>
<p><p><span class="quotelev1">&gt; On Nov 11, 2015, at 7:15 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 11, 2015, at 10:09 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I don&#226;&#128;&#153;t think that&#226;&#128;&#153;s the issue here. I don&#226;&#128;&#153;t see these warnings on my CentOS7 box, for example. I think this is driven by the fact that odin has some very old compilers and a very different environment, and so it has historically generated more warnings.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The warnings often are valid - they just don&#226;&#128;&#153;t get issued by other compilers, or configure activates other code paths.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure, but the automation could be set up to do builds on both Odin and newer systems.  I think it's easier to tend to this sort of warning cruft as it happens, rather than big stomps later on, but that's just personal preference.  It would also hopefully reduce the amount of cherry picking that needs to happen to release branches.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *shrug* just a suggestion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18360.php">http://www.open-mpi.org/community/lists/devel/2015/11/18360.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18362.php">Mark Santcroos: "[OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<li><strong>Previous message:</strong> <a href="18360.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
<li><strong>In reply to:</strong> <a href="18360.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Lots and lots of warnings on master"</a>
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
