<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  2 14:34:56 2013" -->
<!-- isoreceived="20131102183456" -->
<!-- sent="Sat, 2 Nov 2013 11:34:19 -0700" -->
<!-- isosent="20131102183419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="F4C04B97-C2E0-4B28-A67D-5203944BCCE5_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAC2jn-T9UKfsLFR6W_jyDFs-GHmx99gyd2AAfd+-FEnei_23+Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-02 14:34:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22898.php">basma a.azeem: "[OMPI users] running an open mpi application on  hadoop  ??"</a>
<li><strong>Previous message:</strong> <a href="22896.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="22896.php">San B: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I said, the degree of impact depends on the messaging pattern. If rank A typically sends/recvs with rank A+!, then you won't see much difference. However, if rank A typically sends/recvs with rank N-A, where N=#ranks in job, then you'll see a very large difference.
<br>
<p>You might try simply changing the mapping pattern - e.g., add -bynode to your cmd line. This would make it run faster if it followed the latter example.
<br>
<p><p>On Nov 2, 2013, at 12:40 AM, San B &lt;forum.san_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes MM...  But here a single node has 16cores not 64 cores. 
</span><br>
<span class="quotelev1">&gt; The 1st two jobs were with OMPI-1.4.5.
</span><br>
<span class="quotelev1">&gt;       16 cores of single node - 3692.403
</span><br>
<span class="quotelev1">&gt;       16 cores on two nodes (8 cores per node) - 12338.809
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 1st two jobs were with OMPI-1.6.5.
</span><br>
<span class="quotelev1">&gt;       16 cores of single node - 3547.879
</span><br>
<span class="quotelev1">&gt;       16 cores on two nodes (8 cores per node) - 5527.320 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       As others said, due to shared memory communication the single node job is running faster, but I was expecting a slight difference between 1 &amp; 2 nodes - which is taking 60% more time here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 31, 2013 at 8:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yes, though the degree of impact obviously depends on the messaging pattern of the app. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2013, at 2:50 AM, MM &lt;finjulhich_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Of course, by this you mean, with the same total number of nodes, for e.g. 64 process on 1 node using shared mem, vs 64 processes spread over 2 nodes (32 each for e.g.)?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 29 October 2013 14:37, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; As someone previously noted, apps will always run slower on multiple nodes vs everything on a single node due to the shared memory vs IB differences. Nothing you can do about that one.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22897/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22898.php">basma a.azeem: "[OMPI users] running an open mpi application on  hadoop  ??"</a>
<li><strong>Previous message:</strong> <a href="22896.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="22896.php">San B: "Re: [OMPI users] (no subject)"</a>
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
