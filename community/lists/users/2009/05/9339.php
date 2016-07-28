<?
$subject_val = "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 10:40:00 2009" -->
<!-- isoreceived="20090514144000" -->
<!-- sent="Thu, 14 May 2009 17:39:54 +0300" -->
<!-- isosent="20090514143954" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with &amp;quot;error polling LP CQ with status RNR&amp;quot;" -->
<!-- id="4A0C2D3A.8060100_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1242248118.7934.13.camel_at_skutt.ydc.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 10:39:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9340.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9338.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>In reply to:</strong> <a href="9329.php">&#197;ke Sandgren: "[OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
RNR , receive is not ready - It means that on recv side MPI don't have 
<br>
buffers to get the data.
<br>
It may point to some broken configuration in MPI/ofud or credit leak in 
<br>
OFUD code.
<br>
<p><p>&#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having problem with getting the &quot;error polling LP CQ with status
</span><br>
<span class="quotelev1">&gt; RNR...&quot; on an otherwise completely empty system.
</span><br>
<span class="quotelev1">&gt; There are no errors visible in the error counters in any of the HCAs or
</span><br>
<span class="quotelev1">&gt; switches or anywhere else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running OMPI 1.3.2 built with pathscale 3.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i add -mca btl 'ofud,self,sm' the same code works ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It usually only shows up on runs with nodes=16:ppn=8 or higher, i.e. 8x8
</span><br>
<span class="quotelev1">&gt; works ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might very well be a pathscale problem since when running with the
</span><br>
<span class="quotelev1">&gt; debug version of ompi 1.3.2 the problem goes away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Complete error is:
</span><br>
<span class="quotelev1">&gt; error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED ERROR
</span><br>
<span class="quotelev1">&gt; status number 13 for wr_id 465284992 opcode -1  vendor error 135 qp_idx
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas to where in the ompi code i should start reducing optimization
</span><br>
<span class="quotelev1">&gt; levels to pinpoint this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try some more tests tomorrow with a hopefully fresh mind...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9340.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9338.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>In reply to:</strong> <a href="9329.php">&#197;ke Sandgren: "[OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<!-- nextthread="start" -->
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
