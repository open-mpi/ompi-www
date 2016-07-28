<?
$subject_val = "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 16:08:42 2015" -->
<!-- isoreceived="20151209210842" -->
<!-- sent="Wed, 9 Dec 2015 13:08:35 -0800" -->
<!-- isosent="20151209210835" -->
<!-- name="Aur&#195;&#169;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance" -->
<!-- id="5398E092-27BE-49C3-BBD6-949B3996E651_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Aur&#195;&#169;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-09 16:08:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28155.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Previous message:</strong> <a href="28153.php">Saliya Ekanayake: "[OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>In reply to:</strong> <a href="28153.php">Saliya Ekanayake: "[OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28155.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Reply:</strong> <a href="28155.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try to run with coll_base_verbose 1000, just to see what collective module got effectively loaded.
<br>
<p>Aur&#195;&#169;lien
<br>
<pre>
--
Aur&#195;&#169;lien Bouteiller, Ph.D. ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a> &lt;<a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>&gt;
&gt; Le 9 d&#195;&#169;c. 2015 &#195;&#160; 09:53, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; a &#195;&#169;crit :
&gt; 
&gt; Hi,
&gt; 
&gt; In a previous email, I wanted to know how to enable shared memory collectives and I was told setting the coll_sm_priority to anything over 30 should do it.
&gt; 
&gt; I tested this for a microbenchmark on allgatherv, but it didn't improve performance over the default setting. See below, where I tested for different number of processes per node on 48 nodes. The total message size is kept constant at 2400000 bytes (or 2.28MB).
&gt; 
&gt; Am I doing something wrong here?
&gt; 
&gt; Thank you,
&gt; saliya
&gt; 
&gt; &lt;image.png&gt;
&gt; 
&gt; -- 
&gt; Saliya Ekanayake
&gt; Ph.D. Candidate | Research Assistant
&gt; School of Informatics and Computing | Digital Science Center
&gt; Indiana University, Bloomington
&gt; Cell 812-391-4914
&gt; <a href="http://saliya.org">http://saliya.org</a> &lt;<a href="http://saliya.org/">http://saliya.org/</a>&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28153.php">http://www.open-mpi.org/community/lists/users/2015/12/28153.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28154/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28155.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Previous message:</strong> <a href="28153.php">Saliya Ekanayake: "[OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>In reply to:</strong> <a href="28153.php">Saliya Ekanayake: "[OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28155.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Reply:</strong> <a href="28155.php">Saliya Ekanayake: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
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
