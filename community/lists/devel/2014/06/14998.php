<?
$subject_val = "Re: [OMPI devel] v1.8 cannot compile since r31979";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 12:04:32 2014" -->
<!-- isoreceived="20140610160432" -->
<!-- sent="Tue, 10 Jun 2014 09:04:30 -0700" -->
<!-- isosent="20140610160430" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 cannot compile since r31979" -->
<!-- id="BFB32F51-1403-4A1C-887A-3E01B4CBB4B1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5s-CUMLL6ahN5LgTraVxjf5NmgwZNmGvZkYanEQdF4K2Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8 cannot compile since r31979<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-10 12:04:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14999.php">Greg Thomsen: "[OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Previous message:</strong> <a href="14997.php">Gilles Gouaillardet: "[OMPI devel] v1.8 cannot compile since r31979"</a>
<li><strong>In reply to:</strong> <a href="14997.php">Gilles Gouaillardet: "[OMPI devel] v1.8 cannot compile since r31979"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just saw this note - already fixed it, but thanks, and sorry for the problem
<br>
<p>On Jun 9, 2014, at 11:33 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in mca_oob_tcp_component_hop_unknown, the local variable bpr is not defined, which prevents v1.8 compilation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* there was a local variable called pr, it seems it was removed instead of being renamed into bpr */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the attached patch fixes this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; &lt;oob.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14997.php">http://www.open-mpi.org/community/lists/devel/2014/06/14997.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14999.php">Greg Thomsen: "[OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Previous message:</strong> <a href="14997.php">Gilles Gouaillardet: "[OMPI devel] v1.8 cannot compile since r31979"</a>
<li><strong>In reply to:</strong> <a href="14997.php">Gilles Gouaillardet: "[OMPI devel] v1.8 cannot compile since r31979"</a>
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
