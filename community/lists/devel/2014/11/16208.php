<?
$subject_val = "Re: [OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 11:51:21 2014" -->
<!-- isoreceived="20141105165121" -->
<!-- sent="Wed, 5 Nov 2014 16:51:15 +0000" -->
<!-- isosent="20141105165115" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread-tests hang" -->
<!-- id="CCB61582-B240-4F73-94B2-55DE973A5F4B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KybGeqY=posXDOcZT72uKwMeBUEO2_Vj66A7SWvSf4wHLw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] thread-tests hang<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 11:51:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16209.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16207.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16207.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16209.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16209.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16210.php">Joshua Ladd: "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2014, at 11:43 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; sorry, 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&quot;now we use only this &quot;--enable-mpi-thread-multiple&quot; and it worked.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I meant it worked fine before the &quot;configure logic&quot; changes.
</span><br>
<p>It went back to the way it was in in the v1.6 series.
<br>
<p>The issue is that --enable-mpi-thread-multiple carries a performance penalty on the v1.8 branch.  On master, we need to sort these kinds of issues out so that there is no/minimal performance penalty.
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
<li><strong>Next message:</strong> <a href="16209.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16207.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16207.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16209.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16209.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16210.php">Joshua Ladd: "Re: [OMPI devel] thread-tests hang"</a>
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
