<?
$subject_val = "Re: [OMPI users] Problems with &quot;error polling LP CQ with status	RNR&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 09:37:53 2009" -->
<!-- isoreceived="20090514133753" -->
<!-- sent="Thu, 14 May 2009 15:37:45 +0200" -->
<!-- isosent="20090514133745" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with &amp;quot;error polling LP CQ with status	RNR&amp;quot;" -->
<!-- id="1242308265.8118.88.camel_at_skalman.hpc2n.umu.se" -->
<!-- charset="utf-8" -->
<!-- inreplyto="96996BAC-04F8-4460-A7BB-F51EEAE75259_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with &quot;error polling LP CQ with status	RNR&quot;<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 09:37:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9338.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9336.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>In reply to:</strong> <a href="9335.php">Jeff Squyres: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9339.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-05-14 at 09:24 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 13, 2009, at 4:55 PM, &#195;&#133;ke Sandgren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm having problem with getting the &quot;error polling LP CQ with status
</span><br>
<span class="quotelev2">&gt; &gt; RNR...&quot; on an otherwise completely empty system.
</span><br>
<span class="quotelev2">&gt; &gt; There are no errors visible in the error counters in any of the HCAs  
</span><br>
<span class="quotelev2">&gt; &gt; or
</span><br>
<span class="quotelev2">&gt; &gt; switches or anywhere else.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm running OMPI 1.3.2 built with pathscale 3.2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If i add -mca btl 'ofud,self,sm' the same code works ok.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting.  I have only done very limited testing with ofud; are you  
</span><br>
<span class="quotelev1">&gt; saying that you get these errors if you &quot;--mca btl openib,sm,self&quot;?
</span><br>
<p>I think i have tested it but at the moment i'm not sure. I will do more
<br>
tests later.
<br>
(Busy doing firmware upgrades...)
<br>
<p><span class="quotelev2">&gt; &gt; It usually only shows up on runs with nodes=16:ppn=8 or higher, i.e.  
</span><br>
<span class="quotelev2">&gt; &gt; 8x8
</span><br>
<span class="quotelev2">&gt; &gt; works ok.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This might very well be a pathscale problem since when running with  
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; debug version of ompi 1.3.2 the problem goes away.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Complete error is:
</span><br>
<span class="quotelev2">&gt; &gt; error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED  
</span><br>
<span class="quotelev2">&gt; &gt; ERROR
</span><br>
<span class="quotelev2">&gt; &gt; status number 13 for wr_id 465284992 opcode -1  vendor error 135  
</span><br>
<span class="quotelev2">&gt; &gt; qp_idx
</span><br>
<span class="quotelev2">&gt; &gt; 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas to where in the ompi code i should start reducing  
</span><br>
<span class="quotelev2">&gt; &gt; optimization
</span><br>
<span class="quotelev2">&gt; &gt; levels to pinpoint this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have a simple reproducer test case, perchance?
</span><br>
<p>Unfortunately no. Have only seen this reproducibly on large jobs.
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
<li><strong>Next message:</strong> <a href="9338.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9336.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>In reply to:</strong> <a href="9335.php">Jeff Squyres: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9339.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
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
