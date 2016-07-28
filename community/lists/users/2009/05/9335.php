<?
$subject_val = "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 09:24:13 2009" -->
<!-- isoreceived="20090514132413" -->
<!-- sent="Thu, 14 May 2009 09:24:08 -0400" -->
<!-- isosent="20090514132408" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with &amp;quot;error polling LP CQ with status RNR&amp;quot;" -->
<!-- id="96996BAC-04F8-4460-A7BB-F51EEAE75259_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 09:24:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9336.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9334.php">Jeff Squyres: "[OMPI users] build problem"</a>
<li><strong>In reply to:</strong> <a href="9329.php">&#197;ke Sandgren: "[OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9337.php">흆e Sandgren: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status	RNR&quot;"</a>
<li><strong>Reply:</strong> <a href="9337.php">흆e Sandgren: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status	RNR&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 13, 2009, at 4:55 PM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; I'm having problem with getting the &quot;error polling LP CQ with status
</span><br>
<span class="quotelev1">&gt; RNR...&quot; on an otherwise completely empty system.
</span><br>
<span class="quotelev1">&gt; There are no errors visible in the error counters in any of the HCAs  
</span><br>
<span class="quotelev1">&gt; or
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
<p>Interesting.  I have only done very limited testing with ofud; are you  
<br>
saying that you get these errors if you &quot;--mca btl openib,sm,self&quot;?
<br>
<p><span class="quotelev1">&gt; It usually only shows up on runs with nodes=16:ppn=8 or higher, i.e.  
</span><br>
<span class="quotelev1">&gt; 8x8
</span><br>
<span class="quotelev1">&gt; works ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might very well be a pathscale problem since when running with  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; debug version of ompi 1.3.2 the problem goes away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Complete error is:
</span><br>
<span class="quotelev1">&gt; error polling LP CQ with status RECEIVER NOT READY RETRY EXCEEDED  
</span><br>
<span class="quotelev1">&gt; ERROR
</span><br>
<span class="quotelev1">&gt; status number 13 for wr_id 465284992 opcode -1  vendor error 135  
</span><br>
<span class="quotelev1">&gt; qp_idx
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas to where in the ompi code i should start reducing  
</span><br>
<span class="quotelev1">&gt; optimization
</span><br>
<span class="quotelev1">&gt; levels to pinpoint this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Do you have a simple reproducer test case, perchance?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9336.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9334.php">Jeff Squyres: "[OMPI users] build problem"</a>
<li><strong>In reply to:</strong> <a href="9329.php">&#197;ke Sandgren: "[OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9337.php">흆e Sandgren: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status	RNR&quot;"</a>
<li><strong>Reply:</strong> <a href="9337.php">흆e Sandgren: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status	RNR&quot;"</a>
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
