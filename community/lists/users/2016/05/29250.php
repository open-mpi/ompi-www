<?
$subject_val = "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in	--map-by";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 19:32:50 2016" -->
<!-- isoreceived="20160519233250" -->
<!-- sent="Thu, 19 May 2016 16:32:46 -0700" -->
<!-- isosent="20160519233246" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] The effect of --bind-to in the presence of PE=N in	--map-by" -->
<!-- id="364799C1-8194-41A5-8755-CAD84AF7A058_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="OF3D3B9CB9.1CE1D479-ON49257FB8.007FD565-49257FB8.0080C37F_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] The effect of --bind-to in the presence of PE=N in	--map-by<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-19 19:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29251.php">Ralph Castain: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Previous message:</strong> <a href="29249.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>In reply to:</strong> <a href="29248.php">tmishima_at_[hidden]: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in	--map-by"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not really. When you add PE=N, then you are asking us to assign each proc to N cpus. Thus, we have no other option but to bind you to cpu - otherwise we cannot honor that request. So in the absence of the &#226;&#128;&#148;use-hwthread-cpus, we are going to bind you to 4 cores.
<br>
<p>There is no &#226;&#128;&#156;bind-to slot&#226;&#128;&#157; as a slot is an artifice of scheduling - there is no physical &#226;&#128;&#156;slot&#226;&#128;&#157; we can bind someone to. We can &#226;&#128;&#156;map-by slot&#226;&#128;&#157; - just can&#226;&#128;&#153;t bind you to something that doesn&#226;&#128;&#153;t actually exist.
<br>
<p><p><p><span class="quotelev1">&gt; On May 19, 2016, at 4:26 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Saliya and Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess Ralph is confusing &quot;bind-to core&quot; with &quot;bind-to slot&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I remember, when you add &quot;PE=N&quot; option to the map-by directive,
</span><br>
<span class="quotelev1">&gt; you can only use &quot;bind to slot&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if you want to bind a process to specific slots(almost same as cores),
</span><br>
<span class="quotelev1">&gt; you should use &quot;bind-to slot&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016/05/20 5:03:27&#227;&#128;&#129;&quot;users&quot;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#175;&#227;&#128;&#140;Re: [OMPI users] The effect of --bind-to
</span><br>
<span class="quotelev1">&gt; in the presence of PE=N in	--map-by&#227;&#128;&#141;&#227;&#129;&#167;&#230;&#155;&#184;&#227;&#129;&#141;&#227;&#129;&#190;&#227;&#129;&#151;&#227;&#129;&#159;
</span><br>
<span class="quotelev2">&gt;&gt; So if bind-to-core is in effect, does that mean it'll run only on 1 core
</span><br>
<span class="quotelev1">&gt; even though I'd like it to be able to utilize 4 cores. For examples, I'll
</span><br>
<span class="quotelev1">&gt; be creating 4 threads within the process and would
</span><br>
<span class="quotelev2">&gt;&gt; like to pin them to each core the process has been bound to.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, May 19, 2016 at 3:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps we should error out, but at the moment, PE=4 forces bind-to-core
</span><br>
<span class="quotelev1">&gt; and so the bind-to socket is being ignored
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 19, 2016, at 12:06 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I understand --map-by will determine the process placement whereas
</span><br>
<span class="quotelev1">&gt; --bind-to will keep the processes pinned to the given resource. If this
</span><br>
<span class="quotelev1">&gt; understanding is correct, then I've got a doubt with the
</span><br>
<span class="quotelev2">&gt;&gt; following.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On a node with 2 sockets and 12 cores each,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --map-by ppr:3:socket,PE=4  --bind-to socket
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My understanding is that this will give each process 4 cores. Now, with
</span><br>
<span class="quotelev1">&gt; bind to socket, does that mean it's possible that within a socket the
</span><br>
<span class="quotelev1">&gt; assgined 4 cores for a process may change? Or will they
</span><br>
<span class="quotelev2">&gt;&gt; stay in the same 4 cores always?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29243.php">http://www.open-mpi.org/community/lists/users/2016/05/29243.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29244.php">http://www.open-mpi.org/community/lists/users/2016/05/29244.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/usersLink">https://www.open-mpi.org/mailman/listinfo.cgi/usersLink</a> to
</span><br>
<span class="quotelev1">&gt; this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29245.php">http://www.open-mpi.org/community/lists/users/2016/05/29245.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29248.php">http://www.open-mpi.org/community/lists/users/2016/05/29248.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29251.php">Ralph Castain: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>Previous message:</strong> <a href="29249.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<li><strong>In reply to:</strong> <a href="29248.php">tmishima_at_[hidden]: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in	--map-by"</a>
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
