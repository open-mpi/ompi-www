<?
$subject_val = "Re: [OMPI devel] hang with launch including remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 23:12:06 2012" -->
<!-- isoreceived="20120620031206" -->
<!-- sent="Tue, 19 Jun 2012 21:11:59 -0600" -->
<!-- isosent="20120620031159" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hang with launch including remote nodes" -->
<!-- id="B6FE533C-DF5C-49B5-A53B-20AA5289B193_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71B3A036-E677-4A33-8892-5B2AE9720CE4_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-06-19 23:11:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11128.php">Barrett, Brian W: "[OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11126.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>In reply to:</strong> <a href="11126.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11133.php">Eugene Loh: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Reply:</strong> <a href="11133.php">Eugene Loh: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, how did you configure this version? If you had --disable-static, then there was a bug that would indeed cause a hang. Just committing that fix now.
<br>
<p><p>On Jun 19, 2012, at 9:01 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; See if it works with -mca orte_use_common_port 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2012, at 8:31 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm having bad luck with the trunk starting with r26609.  Basically, things hang if I run
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun -H remote1,remote2 -n 2 hostname
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; where remote1 and remote2 are remote nodes.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11128.php">Barrett, Brian W: "[OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11126.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>In reply to:</strong> <a href="11126.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11133.php">Eugene Loh: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Reply:</strong> <a href="11133.php">Eugene Loh: "Re: [OMPI devel] hang with launch including remote nodes"</a>
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
