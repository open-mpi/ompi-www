<?
$subject_val = "Re: [OMPI users] &quot;make check&quot; hangs with openmpi-1.7.3a1r29220 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 23 17:37:51 2013" -->
<!-- isoreceived="20130923213751" -->
<!-- sent="Mon, 23 Sep 2013 21:37:50 +0000" -->
<!-- isosent="20130923213750" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;make check&amp;quot; hangs with openmpi-1.7.3a1r29220 on Linux" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8C312A_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201309211706.r8LH6Wgs006350_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;make check&quot; hangs with openmpi-1.7.3a1r29220 on Linux<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-23 17:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22716.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="22714.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="22712.php">Siegmar Gross: "[OMPI users] &quot;make check&quot; hangs with openmpi-1.7.3a1r29220 on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2013, at 1:06 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Failure : Mismatch: input &quot;/home/fd1026&quot;, expected:1 got:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Failure : Mismatch: input &quot;/home/fdai2368&quot;, expected:1 got:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-1.7.3a1r29220-Linux.x86_64.32_gcc 112 
</span><br>
<p><p>I've usually see this error when there's a fault in the NFS system -- e.g., if you have a bad NFS mount.
<br>
<p>Can you confirm that /home/fd1026 and /home/fdai2368 both exist and are mounted properly?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22716.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="22714.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="22712.php">Siegmar Gross: "[OMPI users] &quot;make check&quot; hangs with openmpi-1.7.3a1r29220 on Linux"</a>
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
