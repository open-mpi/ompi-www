<?
$subject_val = "Re: [OMPI devel] mpirun fails with the latest git pull";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 16:53:58 2016" -->
<!-- isoreceived="20160526205358" -->
<!-- sent="Thu, 26 May 2016 13:53:55 -0700" -->
<!-- isosent="20160526205355" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun fails with the latest git pull" -->
<!-- id="CFCD0F10-7077-4556-A708-91A31E1249AB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDhyjSF7zOZkHN6rpV5G2Og5jFuAEJ7-SNnhA5WoCatn_w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun fails with the latest git pull<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-26 16:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19040.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Previous message:</strong> <a href="19038.php">dpchoudh .: "[OMPI devel] mpirun fails with the latest git pull"</a>
<li><strong>In reply to:</strong> <a href="19038.php">dpchoudh .: "[OMPI devel] mpirun fails with the latest git pull"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If a .m4 changes, then you always must re-run autogen.pl
<br>
<p><p><span class="quotelev1">&gt; On May 26, 2016, at 1:48 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With a git pull of roughly 4 PM EDT (US), that had a .m4 file (something to do with MXM) in the change set, mpirun does not work anymore. The failure is like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [durga_at_b-2 ~]$ sudo /usr/local/bin/mpirun --allow-run-as-root -np 2 -hostfile ~/hostfile -mca btl lf,self -mca btl_base_verbose 100 ./mpitest
</span><br>
<span class="quotelev1">&gt; [b-2:16666] [[2440,0],0] ORTE_ERROR_LOG: Not found in file ess_hnp_module.c at line 619
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_pmix_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doing a make clean &amp;&amp; make &amp;&amp; sudo make install did not help. Should I re-run the autogen.pl &lt;<a href="http://autogen.pl/">http://autogen.pl/</a>&gt; script and start from scratch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19038.php">http://www.open-mpi.org/community/lists/devel/2016/05/19038.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19039/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19040.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<li><strong>Previous message:</strong> <a href="19038.php">dpchoudh .: "[OMPI devel] mpirun fails with the latest git pull"</a>
<li><strong>In reply to:</strong> <a href="19038.php">dpchoudh .: "[OMPI devel] mpirun fails with the latest git pull"</a>
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
