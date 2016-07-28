<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 28 10:25:06 2007" -->
<!-- isoreceived="20070328142506" -->
<!-- sent="Wed, 28 Mar 2007 16:25:01 +0200" -->
<!-- isosent="20070328142501" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Odd behavior with slots=4" -->
<!-- id="5711d990703280725h5e075332p44d618c91c5af1ba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5B182E8E-70DE-4F84-A275-FFAA8876458E_at_apple.com" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-28 10:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2940.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2938.php">stephen mulcahy: "[OMPI users] Measuring MPI message size used by application"</a>
<li><strong>In reply to:</strong> <a href="2937.php">Warner Yuen: "[OMPI users] Odd behavior with slots=4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2941.php">George Bosilca: "Re: [OMPI users] Odd behavior with slots=4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/28/07, Warner Yuen &lt;wyuen_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; variation 1: hostname
</span><br>
<span class="quotelev1">&gt; real    0m35.391s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; variation 2: hostname slots=4
</span><br>
<span class="quotelev1">&gt; real    0m45.698s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; variation 3: hostname slots=2
</span><br>
<span class="quotelev1">&gt; real    0m38.761s
</span><br>
<p>Hi Warner,
<br>
<p>how many nodes does your cluster have? I assume it is using only one
<br>
process per node by default. With slots=4 you might hit the Xeon
<br>
bottle neck.
<br>
<p>Regards, G&#246;tz Waschk
<br>
<p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2940.php">George Bosilca: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2938.php">stephen mulcahy: "[OMPI users] Measuring MPI message size used by application"</a>
<li><strong>In reply to:</strong> <a href="2937.php">Warner Yuen: "[OMPI users] Odd behavior with slots=4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2941.php">George Bosilca: "Re: [OMPI users] Odd behavior with slots=4"</a>
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
