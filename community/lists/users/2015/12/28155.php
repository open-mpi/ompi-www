<?
$subject_val = "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 17:42:45 2015" -->
<!-- isoreceived="20151209224245" -->
<!-- sent="Wed, 9 Dec 2015 17:42:41 -0500" -->
<!-- isosent="20151209224241" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance" -->
<!-- id="CA+ssbKUiLRdT+hrZCXNo16ooVRcZ1qgF2B7VxXf7ukgQqhsDGA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5398E092-27BE-49C3-BBD6-949B3996E651_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2015-12-09 17:42:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28156.php">Gilles Gouaillardet: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Previous message:</strong> <a href="28154.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>In reply to:</strong> <a href="28154.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28156.php">Gilles Gouaillardet: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did this, but output is a bit unclear to me. For example it has lines like
<br>
<p>[j-053:221827] mca: base: components_register: found loaded component sm
<br>
<p>and in the same node, same process reports,
<br>
<p>[j-053:221827] coll:find_available: coll component sm is not available
<br>
<p>Does this mean SM is not available? If so, how can I build this component
<br>
and make it available?
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p><p>On Wed, Dec 9, 2015 at 4:08 PM, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Try to run with coll_base_verbose 1000, just to see what collective module
</span><br>
<span class="quotelev1">&gt; got effectively loaded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aur&#195;&#169;lien
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Aur&#195;&#169;lien Bouteiller, Ph.D. ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 9 d&#195;&#169;c. 2015 &#195;&#160; 09:53, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; a &#195;&#169;crit :
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
<span class="quotelev1">&gt; &lt;image.png&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28153.php">http://www.open-mpi.org/community/lists/users/2015/12/28153.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28154.php">http://www.open-mpi.org/community/lists/users/2015/12/28154.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28156.php">Gilles Gouaillardet: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Previous message:</strong> <a href="28154.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>In reply to:</strong> <a href="28154.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28156.php">Gilles Gouaillardet: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
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
