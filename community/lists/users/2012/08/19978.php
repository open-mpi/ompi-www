<?
$subject_val = "Re: [OMPI users] Measuring latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 17:43:44 2012" -->
<!-- isoreceived="20120821214344" -->
<!-- sent="Tue, 21 Aug 2012 15:43:24 -0600" -->
<!-- isosent="20120821214324" -->
<!-- name="Lloyd Brown" -->
<!-- email="lloyd_brown_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Measuring latency" -->
<!-- id="503400FC.9050604_at_byu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+HOVZigEHT3kYGu93-fExVnQghsEFfe2s3ZUGKYLJ4wJcOifw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Measuring latency<br>
<strong>From:</strong> Lloyd Brown (<em>lloyd_brown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-21 17:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19979.php">Iliev, Hristo: "Re: [OMPI users] Measuring latency"</a>
<li><strong>Previous message:</strong> <a href="19977.php">Maginot Junior: "Re: [OMPI users] Measuring latency"</a>
<li><strong>In reply to:</strong> <a href="19977.php">Maginot Junior: "Re: [OMPI users] Measuring latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19979.php">Iliev, Hristo: "Re: [OMPI users] Measuring latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's fine.  In that case, you just compile it with your MPI
<br>
implementation and do something like this:
<br>
<p>mpiexec -np 2 -H masterhostname,slavehostname ./osu_latency
<br>
<p>There may be some all-to-all latency tools too.  I don't really remember.
<br>
<p>Lloyd Brown
<br>
Systems Administrator
<br>
Fulton Supercomputing Lab
<br>
Brigham Young University
<br>
<a href="http://marylou.byu.edu">http://marylou.byu.edu</a>
<br>
<p>On 08/21/2012 03:41 PM, Maginot Junior wrote:
<br>
<span class="quotelev1">&gt; Sorry for the type, what I meant was &quot;and&quot; not &quot;em&quot;.
</span><br>
<span class="quotelev1">&gt; Thank you for the quick response, I will take a look at your suggestion
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19979.php">Iliev, Hristo: "Re: [OMPI users] Measuring latency"</a>
<li><strong>Previous message:</strong> <a href="19977.php">Maginot Junior: "Re: [OMPI users] Measuring latency"</a>
<li><strong>In reply to:</strong> <a href="19977.php">Maginot Junior: "Re: [OMPI users] Measuring latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19979.php">Iliev, Hristo: "Re: [OMPI users] Measuring latency"</a>
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
