<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 15:19:30 2010" -->
<!-- isoreceived="20100527191930" -->
<!-- sent="Thu, 27 May 2010 15:19:25 -0400" -->
<!-- isosent="20100527191925" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="E51AAC26-8694-40E4-8CDC-967658F9C43E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1005271624450.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 15:19:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7996.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (12)"</a>
<li><strong>Previous message:</strong> <a href="7994.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7994.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7998.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7998.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2010, at 10:32 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; That's pretty much my first proposition : abort when an error arises,
</span><br>
<span class="quotelev1">&gt; because if we don't, we'll crash soon afterwards. That's my original
</span><br>
<span class="quotelev1">&gt; concern and this should really be fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, if you want to fix the openib BTL so that an error in IB results in
</span><br>
<span class="quotelev1">&gt; an elegant fallback on TCP (elegant = notified ;-)), then hooray.
</span><br>
<p>You're specifically referring to the point where the openib btl sets the reachable bit, but then later decides &quot;oops, an error occurred, so return !=OMPI_SUCCESS&quot; -- and assume that the openib btl is not called again.
<br>
<p>Right?
<br>
<p>If so, then yes, that's a bug.  The openib btl should be fixed to unset the reachable bit(s) that it just set before returning the error.
<br>
<p>Or the BML could assume that !=OMPI_SUCCESS codes means that the reachable bits it got back were invalid and should be ignored.
<br>
<p>I'd lead towards the former.  
<br>
<p>Can you file and bug and submit a patch?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7996.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (12)"</a>
<li><strong>Previous message:</strong> <a href="7994.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7994.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7998.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7998.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
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
