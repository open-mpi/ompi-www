<?
$subject_val = "Re: [OMPI users] typo in opal/memoryhooks/memory.h (1.6.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 16 17:53:03 2013" -->
<!-- isoreceived="20131216225303" -->
<!-- sent="Mon, 16 Dec 2013 22:53:01 +0000" -->
<!-- isosent="20131216225301" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] typo in opal/memoryhooks/memory.h (1.6.5)" -->
<!-- id="303E84FD-93E9-4E43-AE19-5E5CFDE1BD1E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52AF5363.7070505_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] typo in opal/memoryhooks/memory.h (1.6.5)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-16 17:53:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>Previous message:</strong> <a href="23204.php">Noam Bernstein: "[OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23200.php">Gus Correa: "Re: [OMPI users] typo in opal/memoryhooks/memory.h (1.6.5)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 16, 2013, at 2:24 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A question, for the benefit of OMPI 1.6.5 users (stable-version die hards like us here).
</span><br>
<span class="quotelev1">&gt; When fixes like Ake's are applied to a stable version,
</span><br>
<span class="quotelev1">&gt; do they make it to the (1.6.5) tarball or to some other code base?
</span><br>
<p>They are currently going into the 1.6.x nightly tarballs.  For example, I just committed some minor fixes last week, and then Ake's fix today (and another long-standing trivial fix) to the 1.6 branch, which automatically triggers a nightly tarball build:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.6/">http://www.open-mpi.org/nightly/v1.6/</a>
<br>
<p><span class="quotelev1">&gt; How innocuous would it be not to apply the the typo fix
</span><br>
<span class="quotelev1">&gt; caught by Ake, and keep OMPI 1.6.5 programs running?
</span><br>
<span class="quotelev1">&gt; Would opal be lobotomized?
</span><br>
<p>Nah, that was a totally trivial fix.  It won't affect the correctness or performance of your Open MPI 1.6.x installation.
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
<li><strong>Next message:</strong> <a href="23206.php">tmishima_at_[hidden]: "[OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<li><strong>Previous message:</strong> <a href="23204.php">Noam Bernstein: "[OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23200.php">Gus Correa: "Re: [OMPI users] typo in opal/memoryhooks/memory.h (1.6.5)"</a>
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
