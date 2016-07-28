<?
$subject_val = "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 12:10:30 2009" -->
<!-- isoreceived="20090320161030" -->
<!-- sent="Fri, 20 Mar 2009 12:10:10 -0400" -->
<!-- isosent="20090320161010" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX" -->
<!-- id="C3370204-4EA2-48E2-A8DE-92EE7C2BBC4A_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ebd2bd0b0903200833j140417a5m63ee327b96dc7487_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 12:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8534.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="8532.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>In reply to:</strong> <a href="8532.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8534.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="8534.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2009, at 11:33 AM, Ricardo Fern&#225;ndez-Perea wrote:
<br>
<p><span class="quotelev1">&gt; This are the results initially
</span><br>
<span class="quotelev1">&gt; Running 1000 iterations.
</span><br>
<span class="quotelev1">&gt;    Length   Latency(us)    Bandwidth(MB/s)
</span><br>
<span class="quotelev1">&gt;         0       2.738          0.000
</span><br>
<span class="quotelev1">&gt;         1       2.718          0.368
</span><br>
<span class="quotelev1">&gt;         2       2.707          0.739
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;   1048576    4392.217        238.735
</span><br>
<span class="quotelev1">&gt;   2097152    8705.028        240.913
</span><br>
<span class="quotelev1">&gt;   4194304   17359.166        241.619
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with  export MX_RCACHE=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running 1000 iterations.
</span><br>
<span class="quotelev1">&gt;    Length   Latency(us)    Bandwidth(MB/s)
</span><br>
<span class="quotelev1">&gt;         0       2.731          0.000
</span><br>
<span class="quotelev1">&gt;         1       2.705          0.370
</span><br>
<span class="quotelev1">&gt;         2       2.719          0.736
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;   1048576    4265.846        245.807
</span><br>
<span class="quotelev1">&gt;   2097152    8491.122        246.982
</span><br>
<span class="quotelev1">&gt;   4194304   16953.997        247.393
</span><br>
<p>Ricardo,
<br>
<p>I am assuming that these are PCI-X NICs. Given the latency and  
<br>
bandwidth, are these &quot;D&quot; model NICs (see the top of the mx_info  
<br>
output)? If so, that looks about as good as you can expect.
<br>
<p>Have you run Intel MPI Benchmark (IMB) or another MPI pingpong type  
<br>
benchmark?
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8534.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="8532.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>In reply to:</strong> <a href="8532.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8534.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Reply:</strong> <a href="8534.php">Ricardo Fernández-Perea: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
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
