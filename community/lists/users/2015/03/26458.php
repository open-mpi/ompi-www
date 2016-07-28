<?
$subject_val = "Re: [OMPI users] Process Binding Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 19:17:46 2015" -->
<!-- isoreceived="20150312231746" -->
<!-- sent="Thu, 12 Mar 2015 16:17:41 -0700" -->
<!-- isosent="20150312231741" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process Binding Warning" -->
<!-- id="7E065AF0-6CB3-44B3-B0B3-30737F6299FF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+ssbKXHNWtSezHQu8ucw0VDhZT4v=2MgM9JYr4QoyGae-0iRQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process Binding Warning<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-12 19:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26457.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>In reply to:</strong> <a href="26454.php">Saliya Ekanayake: "[OMPI users] Process Binding Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26465.php">Saliya Ekanayake: "Re: [OMPI users] Process Binding Warning"</a>
<li><strong>Reply:</strong> <a href="26465.php">Saliya Ekanayake: "Re: [OMPI users] Process Binding Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are missing the numactl and numactl-devel packages on that compute node, and so we cannot bind the memory to the same location as your proc. As the warning indicates, it can impact performance but won't stop you from running
<br>
<p><p><span class="quotelev1">&gt; On Mar 12, 2015, at 12:51 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting the following binding warning and wonder if I am missing some library or so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Node:  cn19ib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [cn19:09179] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], socket 0[core 3[hwt 0]], socket 0[core 4[hwt 0]], socket 0[core 5[hwt 0]]: [B/B/B/B/B/B][./././././.][./././././.][./././././.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a> &lt;<a href="http://saliya.org/">http://saliya.org/</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26454.php">http://www.open-mpi.org/community/lists/users/2015/03/26454.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26458/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26457.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>In reply to:</strong> <a href="26454.php">Saliya Ekanayake: "[OMPI users] Process Binding Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26465.php">Saliya Ekanayake: "Re: [OMPI users] Process Binding Warning"</a>
<li><strong>Reply:</strong> <a href="26465.php">Saliya Ekanayake: "Re: [OMPI users] Process Binding Warning"</a>
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
