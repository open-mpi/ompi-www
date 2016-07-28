<?
$subject_val = "Re: [OMPI users] jobs with more that 2, 500 processes will not even start";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 12:33:11 2010" -->
<!-- isoreceived="20101214173311" -->
<!-- sent="Tue, 14 Dec 2010 17:32:54 +0000 (GMT)" -->
<!-- isosent="20101214173254" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="Re: [OMPI users] jobs with more that 2, 500 processes will not even start" -->
<!-- id="alpine.LRH.2.00.1012141727120.21413_at_dubris.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.3388.1292345465.6752.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] jobs with more that 2, 500 processes will not even start<br>
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 12:32:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15131.php">John Hearns: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15129.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Maybe in reply to:</strong> <a href="15124.php">Lydia Heck: "[OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15131.php">John Hearns: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Reply:</strong> <a href="15131.php">John Hearns: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have experimented a bit more and found that if I set
<br>
<p>OMPI_MCA_plm_rsh_num_concurrent=1024
<br>
<p>a job with more than 2,500 processes will start and run.
<br>
<p>However when I searched the open-mpi web site for the the variable I could not 
<br>
find any indication.
<br>
<p>Best wishes,
<br>
Lydia Heck
<br>
<p><p><p><span class="quotelev1">&gt;  15. jobs with more that 2,	500 processes will not even start
</span><br>
<span class="quotelev1">&gt;      (Lydia Heck)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 15
</span><br>
<span class="quotelev1">&gt; Date: Tue, 14 Dec 2010 16:10:01 +0000 (GMT)
</span><br>
<span class="quotelev1">&gt; From: Lydia Heck &lt;lydia.heck_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] jobs with more that 2,	500 processes will not
</span><br>
<span class="quotelev1">&gt; 	even start
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;alpine.LRH.2.00.1012141549220.20537_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: TEXT/PLAIN; format=flowed; charset=US-ASCII
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About 9 months ago we had a new installation with a system of 1800 cores and at
</span><br>
<span class="quotelev1">&gt; the time we found that jobs with more than 1028 cores would not start. At the
</span><br>
<span class="quotelev1">&gt; time a colleague found that setting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_plm_rsh_num_concurrent=256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; help with the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have now increased our processor count to more than 2700 cores and a job with
</span><br>
<span class="quotelev1">&gt; 2,500 jobs does not start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any advice?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lydia Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15131.php">John Hearns: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15129.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Maybe in reply to:</strong> <a href="15124.php">Lydia Heck: "[OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15131.php">John Hearns: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Reply:</strong> <a href="15131.php">John Hearns: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
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
