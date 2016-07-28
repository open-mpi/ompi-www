<?
$subject_val = "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 20:41:04 2015" -->
<!-- isoreceived="20151210014104" -->
<!-- sent="Wed, 9 Dec 2015 20:41:00 -0500" -->
<!-- isosent="20151210014100" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance" -->
<!-- id="CA+ssbKV9D1i_bEW_z0qYYUU1xRhBcCKO4TqQJp1qxBkcOCbd1Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5668CFE3.8060208_at_rist.or.jp" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-09 20:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28158.php">Palmer, Bruce J: "[OMPI users] FW: Win_flush_all"</a>
<li><strong>Previous message:</strong> <a href="28156.php">Gilles Gouaillardet: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>In reply to:</strong> <a href="28156.php">Gilles Gouaillardet: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Gilles for the pointer. I see what operations supported in SM
<br>
now.
<br>
<p>On Wed, Dec 9, 2015 at 8:05 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Saliya,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from ompi/mca/coll/sm/coll_sm_module.c in mca_coll_sm_comm_query()
</span><br>
<span class="quotelev1">&gt; sm_module-&gt;super.coll_allgatherv = NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that means the coll sm module does *not* implement allgatherv, so openmpi
</span><br>
<span class="quotelev1">&gt; will use the next module
</span><br>
<span class="quotelev1">&gt; (which is very likely the default module, that is why there is no
</span><br>
<span class="quotelev1">&gt; performance improvement in your specific benchmark)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/10/2015 2:53 AM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a previous email, I wanted to know how to enable shared memory
</span><br>
<span class="quotelev1">&gt; collectives and I was told setting the coll_sm_priority to anything over 30
</span><br>
<span class="quotelev1">&gt; should do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested this for a microbenchmark on allgatherv, but it didn't improve
</span><br>
<span class="quotelev1">&gt; performance over the default setting. See below, where I tested for
</span><br>
<span class="quotelev1">&gt; different number of processes per node on 48 nodes. The total message size
</span><br>
<span class="quotelev1">&gt; is kept constant at 2400000 bytes (or 2.28MB).
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
<span class="quotelev1">&gt; [image: Inline image 1]
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28153.php">http://www.open-mpi.org/community/lists/users/2015/12/28153.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28156.php">http://www.open-mpi.org/community/lists/users/2015/12/28156.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28157/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28158.php">Palmer, Bruce J: "[OMPI users] FW: Win_flush_all"</a>
<li><strong>Previous message:</strong> <a href="28156.php">Gilles Gouaillardet: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>In reply to:</strong> <a href="28156.php">Gilles Gouaillardet: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
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
