<?
$subject_val = "Re: [OMPI users] Backward Compatibility of MPI Java Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 03:22:10 2013" -->
<!-- isoreceived="20130108082210" -->
<!-- sent="Tue, 8 Jan 2013 17:23:48 +0900" -->
<!-- isosent="20130108082348" -->
<!-- name="Yoshiki SATO" -->
<!-- email="yoshiki_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Backward Compatibility of MPI Java Binding" -->
<!-- id="14551023-C514-4021-A7D0-B64D41487622_at_ci.i.u-tokyo.ac.jp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC3808A912_at_xmb-aln-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Backward Compatibility of MPI Java Binding<br>
<strong>From:</strong> Yoshiki SATO (<em>yoshiki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-08 03:23:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21088.php">Matthias Jurenz: "Re: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="21086.php">Lee Eric: "[OMPI users] ARM Compilation Issue"</a>
<li><strong>In reply to:</strong> <a href="21084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Reply:</strong> <a href="21093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your comment.
<br>
<p><span class="quotelev1">&gt; Someone could do the work manually, but also know that we have updated the build system between Open MPI 1.6 and 1.7 such that you'd probably need to integrate it differently in 1.6 than it is in 1.7.
</span><br>
<p>Could you let me know the details of that?  
<br>
<p><span class="quotelev1">&gt; Also, be aware that we're considering wholly revamping those Java bindings.  
</span><br>
I see.
<br>
<p><span class="quotelev1">&gt;  One option that has been lightly discussed is revamping these Java APIs to be much closer in spirit to the MPI C bindings.  So we'll see where this goes.
</span><br>
Sounds great.
<br>
<p>Regards,
<br>
--yoshiki
<br>
<p>On 2013/01/08, at 2:05, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 7, 2013, at 4:28 AM, Yoshiki SATO &lt;yoshiki_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The MPI Java binding being developed on the 1.7 pre-release.  Is it possible to merge it with 1.5 or 1.6 releases?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, no.  1.6 is a &quot;stable&quot; series, meaning that no new features are added.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Someone could do the work manually, but also know that we have updated the build system between Open MPI 1.6 and 1.7 such that you'd probably need to integrate it differently in 1.6 than it is in 1.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, be aware that we're considering wholly revamping those Java bindings.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm just returning to work today from the winter vacation, so there's probably some mails about this I haven't seen yet, but there are some wonky bugs that have been found with respect to these Java bindings.  My $0.02 is that these current bindings are actually trying to be more of a class library than more-or-less 1:1 bindings to the official MPI C bindings.  One option that has been lightly discussed is revamping these Java APIs to be much closer in spirit to the MPI C bindings.  So we'll see where this goes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21088.php">Matthias Jurenz: "Re: [OMPI users] problem building openmpi-1.9a1r27751 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="21086.php">Lee Eric: "[OMPI users] ARM Compilation Issue"</a>
<li><strong>In reply to:</strong> <a href="21084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Reply:</strong> <a href="21093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
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
