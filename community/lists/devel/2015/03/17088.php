<?
$subject_val = "Re: [OMPI devel] psm and process affinity in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 11:35:35 2015" -->
<!-- isoreceived="20150303163535" -->
<!-- sent="Tue, 3 Mar 2015 08:35:31 -0800" -->
<!-- isosent="20150303163531" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] psm and process affinity in open mpi" -->
<!-- id="75F66755-88D2-4C8E-9296-70F0393F0F56_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj67_Mexk=AS_3fAAUm_qYE-Gf5qVjw6HDb5r=WwTyn2-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] psm and process affinity in open mpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-03 11:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17089.php">Friedley, Andrew: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Previous message:</strong> <a href="17087.php">Howard Pritchard: "[OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>In reply to:</strong> <a href="17087.php">Howard Pritchard: "[OMPI devel] psm and process affinity in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17089.php">Friedley, Andrew: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our PSM component always has that param set as OMPI handles affinity for it
<br>
<p><p><span class="quotelev1">&gt; On Mar 3, 2015, at 8:20 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First initial disclaimer - I've looked through the open mpi faq and have been unable
</span><br>
<span class="quotelev1">&gt; so far an answer to my question below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been having a discussion with one of the other trilab folks about some issues with
</span><br>
<span class="quotelev1">&gt; using PSM within mvpaich where the default cpu affinity behavior of PSM can cause problems.
</span><br>
<span class="quotelev1">&gt; It turns out that the default behavior of PSM appears to be to set cpu affinity for a process
</span><br>
<span class="quotelev1">&gt; which calls psm_ep_open if process affinity has not already been set.  We're finding that
</span><br>
<span class="quotelev1">&gt; it is necesary to use the PSM_EP_OPEN_AFFINITY_SKIP setting in the affinity field
</span><br>
<span class="quotelev1">&gt; of the psm_opts struct that is passed to psm_ep_open in order to work around the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem has to do with singleton processes.  If mvapich is using psm and multiple
</span><br>
<span class="quotelev1">&gt; singleton jobs are scheduled on a node, they all by default end up binding to core 0.
</span><br>
<span class="quotelev1">&gt; Setting the above option eliminates this problem.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could Open MPI also potentially have this same problem?  If so, I'd want to add an mca param
</span><br>
<span class="quotelev1">&gt; to set this option before calling psm_ep_open within psm mtl.  Hmm.. maybe the ofi mtl
</span><br>
<span class="quotelev1">&gt; supporter should talk with the libfabric psm provider folks about this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17087.php">http://www.open-mpi.org/community/lists/devel/2015/03/17087.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17089.php">Friedley, Andrew: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>Previous message:</strong> <a href="17087.php">Howard Pritchard: "[OMPI devel] psm and process affinity in open mpi"</a>
<li><strong>In reply to:</strong> <a href="17087.php">Howard Pritchard: "[OMPI devel] psm and process affinity in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17089.php">Friedley, Andrew: "Re: [OMPI devel] psm and process affinity in open mpi"</a>
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
