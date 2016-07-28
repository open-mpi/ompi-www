<?
$subject_val = "Re: [OMPI users] Processor affinitiy";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 21:57:13 2008" -->
<!-- isoreceived="20080429015713" -->
<!-- sent="Mon, 28 Apr 2008 20:57:08 -0500" -->
<!-- isosent="20080429015708" -->
<!-- name="Brian Taylor" -->
<!-- email="spam.brian.taylor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processor affinitiy" -->
<!-- id="463f0b810804281857j4d886364y7d30b8be189b1b9b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FE6F4327-72FE-4856-957B-4A1946D482B1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Processor affinitiy<br>
<strong>From:</strong> Brian Taylor (<em>spam.brian.taylor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-28 21:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5561.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5559.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>In reply to:</strong> <a href="5557.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>The utilBindThreadToCPU(x) function is part of a private framework,
<br>
CHUD.framework, that is installed in
<br>
/System/Library/PrivateFrameworks.  Apple provides but does not
<br>
support this framework.  Any part of it could be changed or removed in
<br>
future releases of CHUD without any notice or deprecation period.
<br>
Also, this framework cannot be relied upon to exist on every system
<br>
because CHUD is not distributed as part of Mac OS X - it is an
<br>
optional part of the Developer Tools.
<br>
<p>The only reason I posted this was to point out that there **is** a way
<br>
to set CPU affinity on Mac OS X, just not through a supported API.
<br>
<p>Brian
<br>
<p><p>On Mon, Apr 28, 2008 at 7:36 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Just curious -- in regards to utilBindThreadToCPU(x), why does the
</span><br>
<span class="quotelev1">&gt;  text say:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      &quot;That function should never go in a shipping app, but it's useful
</span><br>
<span class="quotelev1">&gt;  for debugging.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Apr 28, 2008, at 4:30 PM, Brian Taylor wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Actually, there is an unofficial processor affinity API on Mac OS X,
</span><br>
<span class="quotelev2">&gt;  &gt; but it is supplied only with the CHUD framework.  I suppose as a
</span><br>
<span class="quotelev2">&gt;  &gt; further barrier to using this API in code outside of Apple, the header
</span><br>
<span class="quotelev2">&gt;  &gt; files for this API are only available with the standalone CHUD
</span><br>
<span class="quotelev2">&gt;  &gt; installer.  See:
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://lists.apple.com/archives/xcode-users/2005/May/msg00939.html">http://lists.apple.com/archives/xcode-users/2005/May/msg00939.html</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; There is a blog posting that describes how to use this API here:
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://ridiculousfish.com/blog/archives/2007/02/17/barrier/">http://ridiculousfish.com/blog/archives/2007/02/17/barrier/</a>
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Hope that helps,
</span><br>
<span class="quotelev2">&gt;  &gt; Brian
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  Jeff Squyres
</span><br>
<span class="quotelev1">&gt;  Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5561.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5559.php">Josh Hursey: "Re: [OMPI users] blcr_checkpoint_peer: execvp returned -1"</a>
<li><strong>In reply to:</strong> <a href="5557.php">Jeff Squyres: "Re: [OMPI users] Processor affinitiy"</a>
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
