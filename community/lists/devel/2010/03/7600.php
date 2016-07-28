<?
$subject_val = "Re: [OMPI devel] Signals";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 16 18:59:33 2010" -->
<!-- isoreceived="20100316225933" -->
<!-- sent="Tue, 16 Mar 2010 16:59:23 -0600" -->
<!-- isosent="20100316225923" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Signals" -->
<!-- id="B8C26059-7C1E-448C-B624-5F57C39F12BA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="67D97C28-9EE7-417F-A7DD-0845CAE537AD_at_caos.uab.es" -->
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
<strong>Date:</strong> 2010-03-16 18:59:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7601.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="7599.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="7599.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7601.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="7601.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's just the orte_process_name_t jobid field. So if you have an orte_process_name_t *pname, then it would just be
<br>
<p>orte_plm.signal_job(pname-&gt;jobid, sig)
<br>
<p><p>On Mar 16, 2010, at 3:23 PM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Hum.... and to signal a job probably the function is orte_plm.signal_job(jobid, signal); right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now my dummy question is how to obtain the jobid part from an orte_proc_name_t variable? Is there any magical function in the names_fns.h?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2010, at 10:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Afraid not - you can signal a job, but not a specific process. We used to have such an API, but nobody ever used it. Easy to restore if someone has a need.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 16, 2010, at 2:45 PM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any function in Open MPI's frameworks to send a signal to other ORTE proc?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, the ORTE process [[1234,1],1] want to  send a signal to process [[1234,1,4] locate in other node. I'm looking for this kind of functions but I just found functions to send signal to all procs in a node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7600/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7601.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="7599.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="7599.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7601.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="7601.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
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
