<?
$subject_val = "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 09:41:13 2012" -->
<!-- isoreceived="20120615134113" -->
<!-- sent="Fri, 15 Jun 2012 09:41:07 -0400" -->
<!-- isosent="20120615134107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6" -->
<!-- id="5FB73073-4F59-4A0E-AAEF-30B779BF0C9A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADEJBEWQMP9CngikKhGtwApStw_r4EPdO7KtjY7MkKhvjTt1kA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 09:41:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19590.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Previous message:</strong> <a href="19588.php">Jeff Squyres: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>In reply to:</strong> <a href="19501.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19699.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19699.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2012, at 7:48 PM, Yong Qin wrote:
<br>
<p><span class="quotelev1">&gt; ah, I guess my original understanding of PML was wrong. Adding &quot;-mca
</span><br>
<span class="quotelev1">&gt; pml ob1&quot; does help to ease the problem.
</span><br>
<p>See the README for a little more discussion about this issue.  There can only be 1 PML in use by a given MPI job -- using &quot;--mca pml ob1&quot; forces the use of the &quot;ob1&quot; PML (i.e., the BTLs), as opposed to the &quot;cm&quot; MTL (i.e., the MTLs).
<br>
<p><span class="quotelev1">&gt; But the question still
</span><br>
<span class="quotelev1">&gt; remains. Why ompi decided to use the mx BTL in the first place, given
</span><br>
<span class="quotelev1">&gt; there's no physical device onboard at all? This behavior is completely
</span><br>
<span class="quotelev1">&gt; different than the original gm BTL.
</span><br>
<p>That's not what is actually happening.
<br>
<p>Open MPI *built* with MX support, and it therefore assumes that you will likely want to use it.  So it *warns* you when there is no MX device available.
<br>
<p>That being said, I have recently run into the issue you are seeing: if OMPI 1.6 warns you that there is no high-speed device available (openib in my case), it then segv's (which it obviously shouldn't -- it should warn and then die gracefully).  I'll open a ticket on this behavior.  It's not a common scenario, but we still shouldn't segv.
<br>
<p>My first guess is that this has something to do with the memory manager... but that's a guess.
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
<li><strong>Next message:</strong> <a href="19590.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Previous message:</strong> <a href="19588.php">Jeff Squyres: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>In reply to:</strong> <a href="19501.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19699.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19699.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
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
