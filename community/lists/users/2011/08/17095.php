<?
$subject_val = "Re: [OMPI users] Documentation of MPI Implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 24 09:58:24 2011" -->
<!-- isoreceived="20110824135824" -->
<!-- sent="Wed, 24 Aug 2011 09:58:19 -0400" -->
<!-- isosent="20110824135819" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Documentation of MPI Implementation" -->
<!-- id="B5ACF76D-5518-40C8-A92F-5D7294A5CBBB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGrabN7-9zL=6=D4vcRzJeFFY_VOjDPank1BM0ukoru87ukxxA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Documentation of MPI Implementation<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-24 09:58:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17096.php">Dmitry N. Mikushin: "[OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>Previous message:</strong> <a href="17094.php">Hoang-Vu Dang: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>In reply to:</strong> <a href="17094.php">Hoang-Vu Dang: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2011, at 9:14 AM, Hoang-Vu Dang wrote:
<br>
<p><span class="quotelev1">&gt; I know it depends and I want to know exactly what is the dependency and general complexity analysis.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it really no documentation at all ?
</span><br>
<p>No, there really isn't (other than the comments in the code).  Sorry.
<br>
<p>I think there may have been a paper or two about the general techniques of tuned plugin, but it's not going to give you the details of what you want.
<br>
<p><span class="quotelev1">&gt; For example you said &quot;to be replaced soon&quot;, then what is the algorithms that will be used to replace ? Is there any publication available ? In another words, how do you know they will be replaced by which algorithm, please teach me !
</span><br>
<p>Unfortunately, this is as-yet unpublished work, so I can't really talk about any details (I'm not the one doing the work, either).  It's not even in the OMPI SVN trunk yet.  This is a fairly common pattern for us; we do research-level work off in private branches before bringing the final results to the SVN trunk and eventually to an OMPI release branch.
<br>
<p>I only mentioned the new stuff because our tuned implementation is a little dated; it's fairly obvious that we'd be working on new stuff.  :-)
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
<li><strong>Next message:</strong> <a href="17096.php">Dmitry N. Mikushin: "[OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>Previous message:</strong> <a href="17094.php">Hoang-Vu Dang: "Re: [OMPI users] Documentation of MPI Implementation"</a>
<li><strong>In reply to:</strong> <a href="17094.php">Hoang-Vu Dang: "Re: [OMPI users] Documentation of MPI Implementation"</a>
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
