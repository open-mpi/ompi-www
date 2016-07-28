<?
$subject_val = "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 18:13:12 2013" -->
<!-- isoreceived="20130131231312" -->
<!-- sent="Thu, 31 Jan 2013 15:13:04 -0800" -->
<!-- isosent="20130131231304" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;pml_ob1_sendreq.c:188 FATAL&amp;quot; errors" -->
<!-- id="B0609454-8103-400C-AAA7-521EE154FCA2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC079D_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-31 18:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="12092.php">Jeff Squyres (jsquyres): "[OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>In reply to:</strong> <a href="12092.php">Jeff Squyres (jsquyres): "[OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>Reply:</strong> <a href="12094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fixed it so that &quot;abort&quot; really aborts the job - see r28004
<br>
<p>On Jan 31, 2013, at 2:02 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm seeing a LOT of these on errors on the trunk:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    pml_ob1_sendreq.c:188 FATAL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The job then hangs.  I see this starting at np=6 across 2 nodes, using only the TCP and SM BTLs.  This is not happening on v1.6 or v1.7.  Line 188 in pml_ob1_sendreq.c is when someone calls mca_pml_ob1_match_completion_free() with a non-OMPI_SUCCESS status.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Is anyone else seeing this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My configure is very straightforward:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ./configure --prefix=/home/jsquyres/bogus --disable-dlopen --disable-vt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I notice that this is only happening in optimized builds; it is not happening when I do a normal developer / debug build.
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="12092.php">Jeff Squyres (jsquyres): "[OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>In reply to:</strong> <a href="12092.php">Jeff Squyres (jsquyres): "[OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>Reply:</strong> <a href="12094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
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
