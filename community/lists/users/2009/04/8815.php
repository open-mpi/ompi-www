<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 11:39:39 2009" -->
<!-- isoreceived="20090407153939" -->
<!-- sent="Tue, 07 Apr 2009 08:39:20 -0700" -->
<!-- isosent="20090407153920" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="49DB73A8.3060400_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="608A5B67-731E-44B0-A656-02162B658F7B_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Factor of 10 loss in performance with 1.3.x<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 11:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8816.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8814.php">Peter Kjellstrom: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>In reply to:</strong> <a href="8813.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8817.php">Peter Kjellstrom: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8817.php">Peter Kjellstrom: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8820.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Iain Bason wrote:
<br>
<p><span class="quotelev1">&gt; But maybe Steve should try 1.3.2 instead?  Does that have your  
</span><br>
<span class="quotelev1">&gt; improvements in it?
</span><br>
<p>1.3.2 has the single-queue implementation and automatic sizing of the sm 
<br>
mmap file, both intended to fix problems at large np.  At np=2, you 
<br>
shouldn't expect to see much difference.
<br>
<p><span class="quotelev2">&gt;&gt; And the slowdown doesn't seem to be observed by anyone other than  
</span><br>
<span class="quotelev2">&gt;&gt; Steve and his colleague?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be useful to know who else has compared these two revisions.
</span><br>
<p>I just ran Netpipe and found that it gave a comparable sm latency as 
<br>
other pingpong tests.  So, in my mind, the question is why Steve sees 
<br>
latencies that are about 10 usec on a platform that can give 1 usec.  
<br>
There seems to be something tricky about reproducing that 10-usec 
<br>
slowdown.  I have trouble buying that it's just, &quot;sm latency degraded 
<br>
from 1 usec to 10 usec when we went from 1.2 to 1.3&quot;.  If it were as 
<br>
simple as that, we would all have been aware of the performance 
<br>
regression.  There is some other special ingredient here (other than 
<br>
OMPI rev) that we're missing.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8816.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8814.php">Peter Kjellstrom: "Re: [OMPI users] MPI can not open file?"</a>
<li><strong>In reply to:</strong> <a href="8813.php">Iain Bason: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8817.php">Peter Kjellstrom: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8817.php">Peter Kjellstrom: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Reply:</strong> <a href="8820.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
