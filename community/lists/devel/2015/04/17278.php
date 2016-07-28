<?
$subject_val = "Re: [OMPI devel] Master appears broken on the Mac";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 17:00:18 2015" -->
<!-- isoreceived="20150420210018" -->
<!-- sent="Mon, 20 Apr 2015 15:00:16 -0600" -->
<!-- isosent="20150420210016" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master appears broken on the Mac" -->
<!-- id="20150420210016.GI83009_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57ofMu=x-uqf7Ob1EdJeJz75JN7OjXmaZ7emH0-N7xB7E2w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master appears broken on the Mac<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 17:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17279.php">Howard Pritchard: "[OMPI devel] noticing odd message"</a>
<li><strong>Previous message:</strong> <a href="17277.php">Ralph Castain: "[OMPI devel] Master appears broken on the Mac"</a>
<li><strong>In reply to:</strong> <a href="17277.php">Ralph Castain: "[OMPI devel] Master appears broken on the Mac"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shoot. That would be my configure changes. Looks like I should rename
<br>
that temporary variable or push/pop it. Will get you a fix soon.
<br>
<p>-Nathan
<br>
<p>On Mon, Apr 20, 2015 at 01:57:45PM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;    Hit this error with current HEAD:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    checking if threads have different pids (pthreads on linux)... configure:
</span><br>
<span class="quotelev1">&gt;    WARNING: Found configure shell variable clash!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    configure: WARNING: OPAL_VAR_SCOPE_PUSH called on &quot;LDFLAGS_save&quot;,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    configure: WARNING: but it is already defined with value &quot;
</span><br>
<span class="quotelev1">&gt;    -Wl,-flat_namespace&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    configure: WARNING: This usually indicates an error in configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Any ideas?
</span><br>
<span class="quotelev1">&gt;    Ralph
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17277.php">http://www.open-mpi.org/community/lists/devel/2015/04/17277.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17278/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17279.php">Howard Pritchard: "[OMPI devel] noticing odd message"</a>
<li><strong>Previous message:</strong> <a href="17277.php">Ralph Castain: "[OMPI devel] Master appears broken on the Mac"</a>
<li><strong>In reply to:</strong> <a href="17277.php">Ralph Castain: "[OMPI devel] Master appears broken on the Mac"</a>
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
