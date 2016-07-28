<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 21:11:45 2010" -->
<!-- isoreceived="20100812011145" -->
<!-- sent="Wed, 11 Aug 2010 18:11:41 -0700 (PDT)" -->
<!-- isosent="20100812011141" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="881854.40906.qm_at_web50802.mail.re2.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DA8BDFE7-1BF2-41B1-A11C-7E8E3140331E_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast issue<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 21:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13980.php">lyb: "[OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Previous message:</strong> <a href="13978.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13973.php">Ashley Pittman: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13969.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting point.
<br>
<p>--- On Thu, 12/8/10, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
<br>
<p>From: Ashley Pittman &lt;ashley_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI_Bcast issue
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Thursday, 12 August, 2010, 12:22 AM
<br>
<p><p>On 11 Aug 2010, at 05:10, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; Sure, but broadcasts are faster - less reliable apparently, but much faster for large clusters.
</span><br>
<p>Going off-topic here but I think it's worth saying:
<br>
<p>If you have a dataset that requires collective communication then use the function call that best matches what you are trying to do, far to many people try and re-implement the collectives in their own code and it nearly always goes badly, as someone who's spent many years implementing collectives I've lost count of the number of times I've made someones code go faster by replacing 500+ lines of code with a single call to MPI_Gather().
<br>
<p>In the rare case that you find that some collectives are slower than they should be for your specific network and message size then the best thing to do is to work with the Open-MPI developers to tweak the thresholds so a better algorithm gets picked by the library.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13979/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13980.php">lyb: "[OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>Previous message:</strong> <a href="13978.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13973.php">Ashley Pittman: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13969.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
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
