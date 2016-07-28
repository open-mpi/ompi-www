<?
$subject_val = "Re: [OMPI devel] configure check for Fortran and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 11:19:26 2012" -->
<!-- isoreceived="20120423151926" -->
<!-- sent="Mon, 23 Apr 2012 11:19:21 -0400" -->
<!-- isosent="20120423151921" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure check for Fortran and threads" -->
<!-- id="CB827913-CDD7-4414-BF1E-009F9CD2BD79_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F92C5DA.7060006_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configure check for Fortran and threads<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 11:19:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10905.php">Jeffrey Squyres: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Previous message:</strong> <a href="10903.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>In reply to:</strong> <a href="10899.php">Eugene Loh: "[OMPI devel] configure check for Fortran and threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 21, 2012, at 10:36 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Another probably-Fortran-merge problem.  Three issues in this e-mail.
</span><br>
<p>Thanks for digging in to these!
<br>
<p><span class="quotelev1">&gt; #1)  Isn't there supposed to be some diplomatic message about trying to use openib without threads?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Woke up on the wrong side of bed, did we?  Checking config.log:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;conftest.c&quot;, line 30: void function cannot return value
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; void pthreadtest(void)
</span><br>
<span class="quotelev1">&gt; { return pthreadtest_f(); }
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; void pthreadtest_(void)
</span><br>
<span class="quotelev1">&gt; { return pthreadtest_f(); }
</span><br>
<span class="quotelev1">&gt; [...etc...]
</span><br>
<p>Oops; ya, definitely my fault (when converting some Fortran configury...).  Fix coming in the immediate future.
<br>
<p><span class="quotelev1">&gt; #2)  Okay, yes, we shouldn't be trying to return values from void functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Same for the other checks (-pthread, -pthreads, -mt, etc.).  But, something else strikes me as funny about those other checks.  Here is more from config.log:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:58698: checking if Fortran compiler and POSIX threads work with -Kthread
</span><br>
<span class="quotelev1">&gt; configure:58768: cc -DNDEBUG -m32 -xO5  -mt -I. -c conftest.c
</span><br>
<p>Yoinks -- where's the flag to test with (-Kthread and friends)?  Looks like that got lost, too.  :-(
<br>
<p>Terry did some basic testing of the Fortran tree for me, but nothing comprehensive like this -- sorry for missing these.  :-(
<br>
<p>I see the issue and have a fix.  Might need to iterate with you/Terry once or twice to catch everything, though.  Commit coming shortly.
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
<li><strong>Next message:</strong> <a href="10905.php">Jeffrey Squyres: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Previous message:</strong> <a href="10903.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>In reply to:</strong> <a href="10899.php">Eugene Loh: "[OMPI devel] configure check for Fortran and threads"</a>
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
