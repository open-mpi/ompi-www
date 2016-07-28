<?
$subject_val = "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 20:05:45 2015" -->
<!-- isoreceived="20151210010545" -->
<!-- sent="Thu, 10 Dec 2015 10:05:39 +0900" -->
<!-- isosent="20151210010539" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance" -->
<!-- id="5668CFE3.8060208_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+ssbKVom5HabX+e2KVxrFt_g+r08D5RzEHEKQC1WiYKwyfxcg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-09 20:05:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28157.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Previous message:</strong> <a href="28155.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>In reply to:</strong> <a href="28153.php">Saliya Ekanayake: "[OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28157.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Reply:</strong> <a href="28157.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Saliya,
<br>
<p>from ompi/mca/coll/sm/coll_sm_module.c in mca_coll_sm_comm_query()
<br>
sm_module-&gt;super.coll_allgatherv = NULL;
<br>
<p>that means the coll sm module does *not* implement allgatherv, so 
<br>
openmpi will use the next module
<br>
(which is very likely the default module, that is why there is no 
<br>
performance improvement in your specific benchmark)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 12/10/2015 2:53 AM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a previous email, I wanted to know how to enable shared memory 
</span><br>
<span class="quotelev1">&gt; collectives and I was told setting the coll_sm_priority to anything 
</span><br>
<span class="quotelev1">&gt; over 30 should do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested this for a microbenchmark on allgatherv, but it didn't 
</span><br>
<span class="quotelev1">&gt; improve performance over the default setting. See below, where I 
</span><br>
<span class="quotelev1">&gt; tested for different number of processes per node on 48 nodes. The 
</span><br>
<span class="quotelev1">&gt; total message size is kept constant at 2400000 bytes (or 2.28MB).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I doing something wrong here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Inline image 1
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
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28153.php">http://www.open-mpi.org/community/lists/users/2015/12/28153.php</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28156/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28157.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Previous message:</strong> <a href="28155.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>In reply to:</strong> <a href="28153.php">Saliya Ekanayake: "[OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28157.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Reply:</strong> <a href="28157.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
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
