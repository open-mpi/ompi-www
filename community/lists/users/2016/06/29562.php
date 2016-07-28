<?
$subject_val = "Re: [OMPI users] MPI Spawn functionality and core allocation questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 13:46:55 2016" -->
<!-- isoreceived="20160629174655" -->
<!-- sent="Wed, 29 Jun 2016 13:46:44 -0400" -->
<!-- isosent="20160629174644" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Spawn functionality and core allocation questions" -->
<!-- id="91F3AAC5-5187-4390-9069-BA0EDEEDAAC0_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+LevYJ9xVipnYd648f49pGdrg83=WZQdiBYTyN_9_91cYuHGQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Spawn functionality and core allocation questions<br>
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-29 13:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29563.php">Saliya Ekanayake: "[OMPI users] How to know if SM collective is being used?"</a>
<li><strong>Previous message:</strong> <a href="29561.php">Jason Maldonis: "[OMPI users] MPI Spawn functionality and core allocation questions"</a>
<li><strong>In reply to:</strong> <a href="29561.php">Jason Maldonis: "[OMPI users] MPI Spawn functionality and core allocation questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may want to look at the &#226;&#128;&#148;oversubscribe mpirun option. 
<br>
<p>If you want more control, you can consider making a rankfile where you place explicitly processes. 
<br>
<p>Aur&#195;&#169;lien 
<br>
<p><span class="quotelev1">&gt; Le 29 juin 2016 &#195;&#160; 11:50, Jason Maldonis &lt;maldonis_at_[hidden]&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having trouble developing a complicated parallelization algorithm with MPI and I'm hoping for some tips (I am using OpenMPI 1.10.2). I posted the latest problem I ran into on Stack Overflow and got a response from someone saying they don't think it is possible to do the spawn allocation that I want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You have all been very helpful in the past, so I am hoping to get your opinions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Briefly, I am trying to oversubscribe cores to run spawned processes while the main program's processes sit and wait in a barrier.  Because the syntax highlighting is better, it might be easiest to look at my post on Stack Overflow than me trying to paste it in an email. Please see this link:  <a href="http://stackoverflow.com/questions/38087327/mpi-spawn-not-enough-slots-available-all-which-nodes-are-allocated-for-this-j">http://stackoverflow.com/questions/38087327/mpi-spawn-not-enough-slots-available-all-which-nodes-are-allocated-for-this-j</a> &lt;<a href="http://stackoverflow.com/questions/38087327/mpi-spawn-not-enough-slots-available-all-which-nodes-are-allocated-for-this-j">http://stackoverflow.com/questions/38087327/mpi-spawn-not-enough-slots-available-all-which-nodes-are-allocated-for-this-j</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Jason
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29561.php">http://www.open-mpi.org/community/lists/users/2016/06/29561.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29562/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29562/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29563.php">Saliya Ekanayake: "[OMPI users] How to know if SM collective is being used?"</a>
<li><strong>Previous message:</strong> <a href="29561.php">Jason Maldonis: "[OMPI users] MPI Spawn functionality and core allocation questions"</a>
<li><strong>In reply to:</strong> <a href="29561.php">Jason Maldonis: "[OMPI users] MPI Spawn functionality and core allocation questions"</a>
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
