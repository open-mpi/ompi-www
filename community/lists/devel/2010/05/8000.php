<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 07:18:47 2010" -->
<!-- isoreceived="20100528111847" -->
<!-- sent="Fri, 28 May 2010 13:19:16 +0200 (CEST)" -->
<!-- isosent="20100528111916" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="alpine.DEB.2.00.1005281305030.3698_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9583B6DC-B4EB-4657-B397-6CD907310EAA_at_cisco.com" -->
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
<strong>Date:</strong> 2010-05-28 07:19:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8001.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7999.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7999.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8001.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8001.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 28 May 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Herein lies the quandary: we don't/can't know the user or sysadmin 
</span><br>
<span class="quotelev1">&gt; intent.  They may not care if the IB is borked -- they might just want 
</span><br>
<span class="quotelev1">&gt; the job to fall over to TCP and continue.  But they may care a lot if IB 
</span><br>
<span class="quotelev1">&gt; is borked -- they might want the job to abort (because it would be too 
</span><br>
<span class="quotelev1">&gt; slow over TCP).
</span><br>
There is no intent nor choice : Open MPI today always crashes on such an 
<br>
error. The thing is, we crash at the wrong place, which is why I'd like it 
<br>
to stop on the real error rather than trying to continue and hide the real 
<br>
problem within a ton of error traces.
<br>
<p>Frankly, I don't know how to be clearer. The discussion started on a bug 
<br>
and you moved it to a nice-feature-we-would-like-to-have.
<br>
<p>So please, fix the bug first, then if you want that &quot;automatic failover to 
<br>
TCP&quot; feature, develop it. Put a parameter for an eventual notification, or 
<br>
abort, or whatever you want. But it doesn't exist today. It just doesn't 
<br>
work, with any BTL. Errors reported by BTLs are all fatal.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8001.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7999.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7999.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8001.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8001.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
