<?
$subject_val = "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  2 05:26:51 2014" -->
<!-- isoreceived="20140102102651" -->
<!-- sent="Thu, 02 Jan 2014 11:26:48 +0100" -->
<!-- isosent="20140102102648" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred" -->
<!-- id="52C53EE8.9070902_at_hpc2n.umu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGP6POJyDG=dLPdCjh6ieS2rEPpxgTf5urqACqRRmTs2CQmp_w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-02 05:26:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23310.php">Siegmar Gross: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="23308.php">Hongyi Zhao: "[OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>In reply to:</strong> <a href="23308.php">Hongyi Zhao: "[OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23313.php">Hongyi Zhao: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Reply:</strong> <a href="23313.php">Hongyi Zhao: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/02/2014 11:08 AM, Hongyi Zhao wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled openmpi-1.6.5 with ifort-14.0.0, then I use the mpif90
</span><br>
<span class="quotelev1">&gt; wrapper of  openmpi to compile the siesta package - a DFT package,
</span><br>
<span class="quotelev1">&gt; obtain from here:<a href="http://departments.icmab.es/leem/siesta/">http://departments.icmab.es/leem/siesta/</a>  .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After I successfully compile the   siesta package, then I use it to do
</span><br>
<span class="quotelev1">&gt; some compuations like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 transiesta &lt; INPUT.fdf &gt; OUTPUT.fdf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this phase, I meet the followig error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****************
</span><br>
<span class="quotelev1">&gt; forrtl: severe (174): SIGSEGV, segmentation fault occurred
</span><br>
<span class="quotelev1">&gt; Image              PC                Routine            Line
</span><br>
<span class="quotelev1">&gt; Source
</span><br>
<span class="quotelev1">&gt; transiesta         00000000019A8A59  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt; transiesta         00000000019A73D0  Unknown               Unknown  Unknown
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cann't figure out the reason for this issue,  any hints will be
</span><br>
<span class="quotelev1">&gt; highly appreciated.
</span><br>
<p>Can you give me the INPUT.fdf and i can try running it with our build 
<br>
(which contains a bunch of bugfixes for siesta/transiesta)
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23310.php">Siegmar Gross: "Re: [OMPI users] Solaris sigbus error in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="23308.php">Hongyi Zhao: "[OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>In reply to:</strong> <a href="23308.php">Hongyi Zhao: "[OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23313.php">Hongyi Zhao: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Reply:</strong> <a href="23313.php">Hongyi Zhao: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
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
