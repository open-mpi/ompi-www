<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 10:03:10 2010" -->
<!-- isoreceived="20100528140310" -->
<!-- sent="Fri, 28 May 2010 16:03:38 +0200 (CEST)" -->
<!-- isosent="20100528140338" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="alpine.DEB.2.00.1005281556080.3698_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ED83F3D9-3FDF-45B4-B2AE-326EABA87F93_at_cisco.com" -->
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
<strong>Date:</strong> 2010-05-28 10:03:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8004.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8002.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8002.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8004.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8004.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 28 May 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 28, 2010, at 9:32 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Understood, and I agreed that the bug should be fixed.  Patches would 
</span><br>
<span class="quotelev2">&gt;&gt; be welcome.  :-)
</span><br>
I sent a patch on the bml layer in my first e-mail. We will apply it on 
<br>
our tree, but as always we're trying to send patches back to open-source 
<br>
(that was not my intent to start such a debate).
<br>
<p><span class="quotelev1">&gt; I should clarify rather than being flip:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I agree: the bug should be fixed.  Clearly, we should never crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. After the bug is fixed, there is clearly a choice: some people may 
</span><br>
<span class="quotelev1">&gt; want to use a different transport if a given BTL is unavailable. 
</span><br>
<span class="quotelev1">&gt; Others may want to abort.  Once the bug is fixed, this seems like a 
</span><br>
<span class="quotelev1">&gt; pretty straightforward thing to add.
</span><br>
If you use my patch, you still have no choice. Errors on BTLs lead to an 
<br>
immediate stop instead of trying to continue (and crash).
<br>
<p>If someone wants to go further on this, then that's great. If nobody does, 
<br>
I think you should take my patch. Maybe it's not the best solution, but 
<br>
it's still better than the current state.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8004.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8002.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8002.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8004.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8004.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
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
