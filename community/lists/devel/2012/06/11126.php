<?
$subject_val = "Re: [OMPI devel] hang with launch including remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 23:02:01 2012" -->
<!-- isoreceived="20120620030201" -->
<!-- sent="Tue, 19 Jun 2012 21:01:49 -0600" -->
<!-- isosent="20120620030149" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hang with launch including remote nodes" -->
<!-- id="71B3A036-E677-4A33-8892-5B2AE9720CE4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FE13616.4020104_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hang with launch including remote nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-19 23:01:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11127.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Previous message:</strong> <a href="11125.php">Eugene Loh: "[OMPI devel] hang with launch including remote nodes"</a>
<li><strong>In reply to:</strong> <a href="11125.php">Eugene Loh: "[OMPI devel] hang with launch including remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11127.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Reply:</strong> <a href="11127.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See if it works with -mca orte_use_common_port 0
<br>
<p>On Jun 19, 2012, at 8:31 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm having bad luck with the trunk starting with r26609.  Basically, things hang if I run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpirun -H remote1,remote2 -n 2 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where remote1 and remote2 are remote nodes.
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
<li><strong>Next message:</strong> <a href="11127.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Previous message:</strong> <a href="11125.php">Eugene Loh: "[OMPI devel] hang with launch including remote nodes"</a>
<li><strong>In reply to:</strong> <a href="11125.php">Eugene Loh: "[OMPI devel] hang with launch including remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11127.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Reply:</strong> <a href="11127.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
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
