<?
$subject_val = "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 23 17:10:20 2010" -->
<!-- isoreceived="20100823211020" -->
<!-- sent="Mon, 23 Aug 2010 16:09:56 -0500" -->
<!-- isosent="20100823210956" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?" -->
<!-- id="AANLkTimUYpkfobMUd_JFRXxxfO4UevfiVKvhazmStrhC_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="772866.51641.qm_at_web50803.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-23 17:09:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14090.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14088.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="14085.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14090.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14090.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Aug 22, 2010 at 9:57 PM, Randolph Pullen &lt;
<br>
randolph_pullen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Its a long shot but could it be related to the total data volume ?
</span><br>
<span class="quotelev1">&gt; ie  524288 * 80 = 41943040 bytes active in the cluster
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you exceed this 41943040 data volume with a smaller message repeated
</span><br>
<span class="quotelev1">&gt; more often or a larger one less often?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Not so far, so your diagnosis could be right. The failures have been at the
<br>
following data volumes:
<br>
<p>41.9E6
<br>
4.1E6
<br>
8.2E6
<br>
<p>Unfortunately, I'm not sure I can change the repeat rate with the OFED/MPI
<br>
tests. Can I do that? Didn't see a suitable flag.
<br>
<p>In any case, assuming it is related to the total data volume what could be
<br>
causing such a failure?
<br>
<p><pre>
-- 
Rahul
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14089/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14090.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14088.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="14085.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14090.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Reply:</strong> <a href="14090.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
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
