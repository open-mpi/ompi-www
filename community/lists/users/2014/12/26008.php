<?
$subject_val = "Re: [OMPI users] disable library interposition?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 16 08:31:57 2014" -->
<!-- isoreceived="20141216133157" -->
<!-- sent="Tue, 16 Dec 2014 13:31:55 +0000" -->
<!-- isosent="20141216133155" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] disable library interposition?" -->
<!-- id="9E51EDFE-4178-46AF-9EC3-FF1AE6092A0F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20141216101549.A0A5B2D200A4_at_takeo" -->
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
<strong>Subject:</strong> Re: [OMPI users] disable library interposition?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-16 08:31:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26009.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Previous message:</strong> <a href="26007.php">tom fogal: "[OMPI users] disable library interposition?"</a>
<li><strong>In reply to:</strong> <a href="26007.php">tom fogal: "[OMPI users] disable library interposition?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can disable it a few different ways.  The easiest way is probably to set the &quot;OMPI_MCA_memory_linux_disable&quot; environment variable to &quot;yes&quot; before you launch mpirun.
<br>
<p><p><p>On Dec 16, 2014, at 5:15 AM, tom fogal &lt;tfogal_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I somewhat arbitrarily came across this bug:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://github.com/open-mpi/ompi/issues/299">https://github.com/open-mpi/ompi/issues/299</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an application which does `fun' things to a subprocess' memory
</span><br>
<span class="quotelev1">&gt; layout, and I worry that mucking with symbols (particularly malloc and
</span><br>
<span class="quotelev1">&gt; mmap) will break some assumptions I make.  Is there a way to disable
</span><br>
<span class="quotelev1">&gt; this interception?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be fine if disabling it broke/disabled some functionality: I'm
</span><br>
<span class="quotelev1">&gt; just running locally on a few cores and could use a TCP transport, for
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks much,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -tom
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26007.php">http://www.open-mpi.org/community/lists/users/2014/12/26007.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26009.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Previous message:</strong> <a href="26007.php">tom fogal: "[OMPI users] disable library interposition?"</a>
<li><strong>In reply to:</strong> <a href="26007.php">tom fogal: "[OMPI users] disable library interposition?"</a>
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
