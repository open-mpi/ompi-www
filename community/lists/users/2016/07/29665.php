<?
$subject_val = "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 10:17:40 2016" -->
<!-- isoreceived="20160714141740" -->
<!-- sent="Thu, 14 Jul 2016 16:17:38 +0200" -->
<!-- isosent="20160714141738" -->
<!-- name="&#195;&#133;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.10.2 and PGI 15.9" -->
<!-- id="57879F02.7040804_at_hpc2n.umu.se" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CABOsP2P1xHDEpk9E_q1tRgtskWKqdgQmbfhAaOU6KiDni5eBmw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.10.2 and PGI 15.9<br>
<strong>From:</strong> &#195;&#133;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-14 10:17:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29666.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29664.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29664.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29666.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, you have to manually edit those two .la files by hand after
<br>
installation. It's basically a libtool problem. It generates the .la
<br>
file with an option that PGI dsoesn't understand.
<br>
<p>On 07/14/2016 04:06 PM, Michael Di Domenico wrote:
<br>
<span class="quotelev1">&gt; On Mon, Jul 11, 2016 at 9:52 AM, &#195;&#133;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Looks like you are compiling with slurm support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, you need to remove the &quot;-pthread&quot; from libslurm.la and libpmi.la
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i don't see a configure option in slurm to disable pthreads, so i'm
</span><br>
<span class="quotelev1">&gt; not sure this is possible.
</span><br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29666.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>Previous message:</strong> <a href="29664.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<li><strong>In reply to:</strong> <a href="29664.php">Michael Di Domenico: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29666.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi 1.10.2 and PGI 15.9"</a>
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
