<?
$subject_val = "Re: [OMPI users] Finalize() does not return";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 20 13:08:21 2013" -->
<!-- isoreceived="20130820170821" -->
<!-- sent="Tue, 20 Aug 2013 17:08:21 +0000" -->
<!-- isosent="20130820170821" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Finalize() does not return" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F822217_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F0E6578D-1566-49D6-84EA-5A2CDA3FFBC5_at_mimectl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Finalize() does not return<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-20 13:08:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22521.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's	bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22519.php">Hugo Gagnon: "[OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>In reply to:</strong> <a href="22491.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22534.php">Eloi Gaudry: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Reply:</strong> <a href="22534.php">Eloi Gaudry: "Re: [OMPI users] Finalize() does not return"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 14, 2013, at 9:23 AM, &quot;Hazelrig, Chris CTR (US)&quot; &lt;christopher.c.hazelrig.ctr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your suggestions.  I had already tested for which threads were reaching the Finalize() call and all of them are.  Also, the Finalize() call is not inside a conditional.  This seems to suggest there may be a prior communication left unfinished, but based on the documentation I have read I would think the Finalize() routine would error/exception out in that situation.  
</span><br>
<p>Sorry for the delayed reply -- I was on vacation last week.
<br>
<p>Not necessarily -- you can definitely deadlock in Finalize if you've done a send that isn't matched with a receive, for example.
<br>
<p><span class="quotelev1">&gt; It seems significant that the software was performing as expected under the previous OS and OpenMPI versions (although, the older OpenMPI version is only slightly older than what is being used now), but I don't know yet what the differences are.
</span><br>
<p>Possibly, but not definitely.  Just because an application runs properly under an MPI implementation does not mean that that application is correct (that sounds snobby, but I don't mean it that way).  Buffer allocations and blocking patterns change from release to release of a given MPI implementation, such that if you have an erroneous MPI application, it may work fine under version A of that MPI implementation but fail under version B of that same MPI implementation.
<br>
<p><span class="quotelev1">&gt; Is there any other information I could provide that might be useful?
</span><br>
<p>You might want to audit the code and ensure that you have no pending communications that haven't finished -- check all your sends and receives, not just in the code, but at run-time (e.g., use an MPI profiling tool to match up the sends and receives, and see what's left at Finalize time).
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
<li><strong>Next message:</strong> <a href="22521.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's	bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22519.php">Hugo Gagnon: "[OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>In reply to:</strong> <a href="22491.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22534.php">Eloi Gaudry: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Reply:</strong> <a href="22534.php">Eloi Gaudry: "Re: [OMPI users] Finalize() does not return"</a>
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
