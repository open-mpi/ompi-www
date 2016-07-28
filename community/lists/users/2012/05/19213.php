<?
$subject_val = "Re: [OMPI users] Regarding the execution time calculation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  7 20:40:07 2012" -->
<!-- isoreceived="20120508004007" -->
<!-- sent="Tue, 8 May 2012 00:40:02 +0000" -->
<!-- isosent="20120508004002" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time calculation" -->
<!-- id="F1CE15F3-7818-4E15-8229-1CEDB836C37C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOf_+-W1vxtUNCOyBoOwY_HsyXDvj-h_v6tyoTqFsPu2S98LNg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding the execution time calculation<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-07 20:40:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19214.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>Previous message:</strong> <a href="19212.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19212.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19217.php">TERRY DONTJE: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19217.php">TERRY DONTJE: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2012, at 8:31 PM, Jingcha Joba wrote:
<br>
<p><span class="quotelev1">&gt; So in the above stated example, end-start will be: &lt;whatever the solver took&gt; + 20ms ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; (time slice of P2 + P3 = 20ms)
</span><br>
<p>More or less (there's nonzero amount of time required for the kernel scheduler, and the time quantum for each of P2 and P3 is likely not *exactly* 10ms).  But you're over thinking this.  
<br>
<p>The elapsed wall-clock time is simply (end-start).
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
<li><strong>Next message:</strong> <a href="19214.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>Previous message:</strong> <a href="19212.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19212.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19217.php">TERRY DONTJE: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Reply:</strong> <a href="19217.php">TERRY DONTJE: "Re: [OMPI users] Regarding the execution time calculation"</a>
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
