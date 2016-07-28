<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 06:04:17 2010" -->
<!-- isoreceived="20100528100417" -->
<!-- sent="Fri, 28 May 2010 12:04:48 +0200 (CEST)" -->
<!-- isosent="20100528100448" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="alpine.DEB.2.00.1005280955580.3698_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E51AAC26-8694-40E4-8CDC-967658F9C43E_at_cisco.com" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-28 06:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7999.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7997.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (13),(14)"</a>
<li><strong>In reply to:</strong> <a href="7995.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7999.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7999.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 27 May 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 27, 2010, at 10:32 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's pretty much my first proposition : abort when an error arises,
</span><br>
<span class="quotelev2">&gt;&gt; because if we don't, we'll crash soon afterwards. That's my original
</span><br>
<span class="quotelev2">&gt;&gt; concern and this should really be fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, if you want to fix the openib BTL so that an error in IB results in
</span><br>
<span class="quotelev2">&gt;&gt; an elegant fallback on TCP (elegant = notified ;-)), then hooray.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're specifically referring to the point where the openib btl sets the 
</span><br>
<span class="quotelev1">&gt; reachable bit, but then later decides &quot;oops, an error occurred, so 
</span><br>
<span class="quotelev1">&gt; return !=OMPI_SUCCESS&quot; -- and assume that the openib btl is not called 
</span><br>
<span class="quotelev1">&gt; again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right?
</span><br>
Perfectly right.
<br>
<p><span class="quotelev1">&gt; If so, then yes, that's a bug.  The openib btl should be fixed to unset 
</span><br>
<span class="quotelev1">&gt; the reachable bit(s) that it just set before returning the error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or the BML could assume that !=OMPI_SUCCESS codes means that the 
</span><br>
<span class="quotelev1">&gt; reachable bits it got back were invalid and should be ignored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd lead towards the former.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you file and bug and submit a patch?
</span><br>
I'd like to (though I don't have an svn account), but some things
<br>
bother me.
<br>
<p>Having errors on add_procs stop the application seems a good thing in all 
<br>
cases, so why not do it ? That would solve my original problem which lead 
<br>
to this discussion.
<br>
<p>Yes, the openib BTL may be suboptimal (stopping the application instead of 
<br>
nicely returning), but I'm fine with that, so I'm not very inclined to 
<br>
spend time on this.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7999.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7997.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (13),(14)"</a>
<li><strong>In reply to:</strong> <a href="7995.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7999.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7999.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
