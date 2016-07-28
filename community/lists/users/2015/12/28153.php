<?
$subject_val = "[OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 12:53:45 2015" -->
<!-- isoreceived="20151209175345" -->
<!-- sent="Wed, 9 Dec 2015 12:53:41 -0500" -->
<!-- isosent="20151209175341" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance" -->
<!-- id="CA+ssbKVom5HabX+e2KVxrFt_g+r08D5RzEHEKQC1WiYKwyfxcg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-09 12:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28154.php">Aurélien Bouteiller: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Previous message:</strong> <a href="28152.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28154.php">Aurélien Bouteiller: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Reply:</strong> <a href="28154.php">Aurélien Bouteiller: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Reply:</strong> <a href="28156.php">Gilles Gouaillardet: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In a previous email, I wanted to know how to enable shared memory
<br>
collectives and I was told setting the coll_sm_priority to anything over 30
<br>
should do it.
<br>
<p>I tested this for a microbenchmark on allgatherv, but it didn't improve
<br>
performance over the default setting. See below, where I tested for
<br>
different number of processes per node on 48 nodes. The total message size
<br>
is kept constant at 2400000 bytes (or 2.28MB).
<br>
<p>Am I doing something wrong here?
<br>
<p>Thank you,
<br>
saliya
<br>
<p>[image: Inline image 1]
<br>
<p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28153/image.png" alt="image.png">
<!-- attachment="image.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28154.php">Aurélien Bouteiller: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Previous message:</strong> <a href="28152.php">Edgar Gabriel: "Re: [OMPI users] OMPIO correctnes issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28154.php">Aurélien Bouteiller: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Reply:</strong> <a href="28154.php">Aurélien Bouteiller: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
<li><strong>Reply:</strong> <a href="28156.php">Gilles Gouaillardet: "Re: [OMPI users] Setting coll_sm_priority = 35 didn't improve communication performance"</a>
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
