<?
$subject_val = "Re: [OMPI devel] Signals";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 16 17:13:15 2010" -->
<!-- isoreceived="20100316211315" -->
<!-- sent="Tue, 16 Mar 2010 15:12:23 -0600" -->
<!-- isosent="20100316211223" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Signals" -->
<!-- id="488B5BAF-0CC9-4BC5-A4A9-8B5766572778_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5BA2058A-1B2D-4962-ACE0-C3EE9F0F7B9A_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Signals<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-16 17:12:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7599.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="7597.php">Leonardo Fialho: "[OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="7597.php">Leonardo Fialho: "[OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7599.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="7599.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid not - you can signal a job, but not a specific process. We used to have such an API, but nobody ever used it. Easy to restore if someone has a need.
<br>
<p>On Mar 16, 2010, at 2:45 PM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any function in Open MPI's frameworks to send a signal to other ORTE proc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, the ORTE process [[1234,1],1] want to  send a signal to process [[1234,1,4] locate in other node. I'm looking for this kind of functions but I just found functions to send signal to all procs in a node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Leonardo
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
<li><strong>Next message:</strong> <a href="7599.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="7597.php">Leonardo Fialho: "[OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="7597.php">Leonardo Fialho: "[OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7599.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="7599.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
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
