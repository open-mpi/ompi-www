<?
$subject_val = "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 15:46:55 2016" -->
<!-- isoreceived="20160519194655" -->
<!-- sent="Thu, 19 May 2016 12:46:51 -0700" -->
<!-- isosent="20160519194651" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by" -->
<!-- id="CB23AA97-D73A-4E6B-A099-6ED2D768DD65_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+ssbKV1HkaaBR=QC-3dNDdwNWH9=pSTifj0dfboBxf6PBx-_w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 15:46:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29245.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Previous message:</strong> <a href="29243.php">Saliya Ekanayake: "[OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>In reply to:</strong> <a href="29243.php">Saliya Ekanayake: "[OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29245.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Reply:</strong> <a href="29245.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps we should error out, but at the moment, PE=4 forces bind-to-core and so the bind-to socket is being ignored
<br>
<p><span class="quotelev1">&gt; On May 19, 2016, at 12:06 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand --map-by will determine the process placement whereas --bind-to will keep the processes pinned to the given resource. If this understanding is correct, then I've got a doubt with the following.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a node with 2 sockets and 12 cores each, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --map-by ppr:3:socket,PE=4  --bind-to socket
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My understanding is that this will give each process 4 cores. Now, with bind to socket, does that mean it's possible that within a socket the assgined 4 cores for a process may change? Or will they stay in the same 4 cores always?
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29243.php">http://www.open-mpi.org/community/lists/users/2016/05/29243.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29244/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29245.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Previous message:</strong> <a href="29243.php">Saliya Ekanayake: "[OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>In reply to:</strong> <a href="29243.php">Saliya Ekanayake: "[OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29245.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Reply:</strong> <a href="29245.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
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
