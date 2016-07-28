<?
$subject_val = "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 12:17:11 2009" -->
<!-- isoreceived="20090407161711" -->
<!-- sent="Tue, 7 Apr 2009 18:17:03 +0200" -->
<!-- isosent="20090407161703" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Factor of 10 loss in performance with 1.3.x" -->
<!-- id="200904071817.07025.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="49DB73A8.3060400_at_sun.com" -->
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
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 12:17:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8818.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8816.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8815.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8820.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 07 April 2009, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Iain Bason wrote:
</span><br>
<span class="quotelev2">&gt; &gt; But maybe Steve should try 1.3.2 instead?  Does that have your
</span><br>
<span class="quotelev2">&gt; &gt; improvements in it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.3.2 has the single-queue implementation and automatic sizing of the sm
</span><br>
<span class="quotelev1">&gt; mmap file, both intended to fix problems at large np.  At np=2, you
</span><br>
<span class="quotelev1">&gt; shouldn't expect to see much difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And the slowdown doesn't seem to be observed by anyone other than
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Steve and his colleague?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It would be useful to know who else has compared these two revisions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just ran Netpipe and found that it gave a comparable sm latency as
</span><br>
<span class="quotelev1">&gt; other pingpong tests.  So, in my mind, the question is why Steve sees
</span><br>
<span class="quotelev1">&gt; latencies that are about 10 usec on a platform that can give 1 usec.
</span><br>
<span class="quotelev1">&gt; There seems to be something tricky about reproducing that 10-usec
</span><br>
<span class="quotelev1">&gt; slowdown.  I have trouble buying that it's just, &quot;sm latency degraded
</span><br>
<span class="quotelev1">&gt; from 1 usec to 10 usec when we went from 1.2 to 1.3&quot;.  If it were as
</span><br>
<span class="quotelev1">&gt; simple as that, we would all have been aware of the performance
</span><br>
<span class="quotelev1">&gt; regression.  There is some other special ingredient here (other than
</span><br>
<span class="quotelev1">&gt; OMPI rev) that we're missing.
</span><br>
<p>&lt;wild guess&gt;
<br>
Maybe it's not btl layer related at all. Could be something completely 
<br>
different like maybe messed up processor affinity.
<br>
&lt;/wild guess&gt;
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8817/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8818.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8816.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8815.php">Eugene Loh: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8820.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
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
