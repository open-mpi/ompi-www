<?
$subject_val = "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 18:34:11 2010" -->
<!-- isoreceived="20100610223411" -->
<!-- sent="Thu, 10 Jun 2010 18:34:07 -0400" -->
<!-- isosent="20100610223407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..." -->
<!-- id="879CDE8F-8D5C-43AF-8969-52FADF7D6079_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E9838FE224683419F586D9DF46A0E258E50D3E8EF_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Address not mapped segmentation fault with1.4.2	...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 18:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13306.php">Richard Walsh: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Previous message:</strong> <a href="13304.php">Richard Walsh: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>In reply to:</strong> <a href="13304.php">Richard Walsh: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13306.php">Richard Walsh: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Reply:</strong> <a href="13306.php">Richard Walsh: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 10, 2010, at 5:49 PM, Richard Walsh wrote:
<br>
<p><span class="quotelev1">&gt; OK ... so if I follow your lead and build a version without PBS --tm= integration
</span><br>
<span class="quotelev1">&gt; and it works, I should be able to report this as an incompatibility bug between
</span><br>
<span class="quotelev1">&gt; the latest version of PBS Pro (10.2.0.93147) and the latest version of OpenMPI
</span><br>
<span class="quotelev1">&gt; (1.4.2). right?  Do I report that you to my friends at OpenMPI or my friends at
</span><br>
<span class="quotelev1">&gt; PBS Pro (Altair), or both?
</span><br>
<p>I'd say both.
<br>
<p>But it would be quite surprising if tm_init() it wholly broken -- it's the very first function that has to be invoked.
<br>
<p>I'm not a PBS user, so I don't know/remember the PBS commands offhand, but I have a dim recollection of a few PBS-provided TM-using tools (pbsdsh or somesuch?).  You might want to try those, too, and see if they work/fail.
<br>
<p>If it really is a problem, I'm guessing it'll be a compiler/linker issue somehow... (e.g., how we're compiling/linking is not matching the compilation/linker style of the TM library)  That's a SWAG.  :-)
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
<li><strong>Next message:</strong> <a href="13306.php">Richard Walsh: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Previous message:</strong> <a href="13304.php">Richard Walsh: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>In reply to:</strong> <a href="13304.php">Richard Walsh: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13306.php">Richard Walsh: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
<li><strong>Reply:</strong> <a href="13306.php">Richard Walsh: "Re: [OMPI users] Address not mapped segmentation fault with1.4.2	..."</a>
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
