<?
$subject_val = "Re: [OMPI users] loading processes per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 25 12:38:51 2016" -->
<!-- isoreceived="20160325163851" -->
<!-- sent="Fri, 25 Mar 2016 09:38:48 -0700" -->
<!-- isosent="20160325163848" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] loading processes per node" -->
<!-- id="0D406316-7780-4EB6-886F-443FCE95C34C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAEcVHtMLGfaDz+_TGg9xm+szLVTr0ZtcGnr6S_4vpuYt9WdGkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] loading processes per node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-25 12:38:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28830.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28828.php">Ronald Cohen: "[OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28828.php">Ronald Cohen: "[OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28830.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28830.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Add -rank-by node to your cmd line. You&#226;&#128;&#153;ll still get 4 procs/node, but they will be ranked by node instead of consecutively within a node.
<br>
<p><p><p><span class="quotelev1">&gt; On Mar 25, 2016, at 9:30 AM, Ronald Cohen &lt;recohen3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun  --map-by ppr:4:node -n 16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and this loads the processes in round robin fashion. This seems to be
</span><br>
<span class="quotelev1">&gt; twice as slow for my code as loading them node by node, 4 processes
</span><br>
<span class="quotelev1">&gt; per node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I not load them round robin, but node by node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ron
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Ron Cohen
</span><br>
<span class="quotelev1">&gt; recohen3_at_[hidden]
</span><br>
<span class="quotelev1">&gt; skypename: ronaldcohen
</span><br>
<span class="quotelev1">&gt; twitter: @recohen3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Ronald Cohen
</span><br>
<span class="quotelev1">&gt; Geophysical Laboratory
</span><br>
<span class="quotelev1">&gt; Carnegie Institution
</span><br>
<span class="quotelev1">&gt; 5251 Broad Branch Rd., N.W.
</span><br>
<span class="quotelev1">&gt; Washington, D.C. 20015
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28828.php">http://www.open-mpi.org/community/lists/users/2016/03/28828.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28830.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28828.php">Ronald Cohen: "[OMPI users] loading processes per node"</a>
<li><strong>In reply to:</strong> <a href="28828.php">Ronald Cohen: "[OMPI users] loading processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28830.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
<li><strong>Reply:</strong> <a href="28830.php">Ronald Cohen: "Re: [OMPI users] loading processes per node"</a>
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
