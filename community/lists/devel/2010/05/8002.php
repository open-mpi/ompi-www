<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 09:50:04 2010" -->
<!-- isoreceived="20100528135004" -->
<!-- sent="Fri, 28 May 2010 09:49:59 -0400" -->
<!-- isosent="20100528134959" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="ED83F3D9-3FDF-45B4-B2AE-326EABA87F93_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D56CD99-F4EB-4238-A6CF-16C81BE4471F_at_cisco.com" -->
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
<strong>Date:</strong> 2010-05-28 09:49:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8003.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8001.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8001.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8003.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8003.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2010, at 9:32 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So please, fix the bug first, then if you want that &quot;automatic failover to
</span><br>
<span class="quotelev2">&gt;&gt; TCP&quot; feature, develop it. Put a parameter for an eventual notification, or
</span><br>
<span class="quotelev2">&gt;&gt; abort, or whatever you want. But it doesn't exist today. It just doesn't
</span><br>
<span class="quotelev2">&gt;&gt; work, with any BTL. Errors reported by BTLs are all fatal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Understood, and I agreed that the bug should be fixed.  Patches would be welcome.  :-)
</span><br>
<p>I should clarify rather than being flip:
<br>
<p>1. I agree: the bug should be fixed.  Clearly, we should never crash.
<br>
<p>2. After the bug is fixed, there is clearly a choice: some people may want to use a different transport if a given BTL is unavailable.  Others may want to abort.  Once the bug is fixed, this seems like a pretty straightforward thing to add.
<br>
<p>3. Ralph's point of using the notifier to indicate that an error occurred is a good one -- the notifier should be used to send an alert if IB is borked (for example) regardless of whether the job will simply select another BTL or abort.  This is also pretty straightforward to add.
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
<li><strong>Next message:</strong> <a href="8003.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8001.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8001.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8003.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8003.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
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
