<?
$subject_val = "Re: [OMPI devel] BML/R2 error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  3 13:55:45 2016" -->
<!-- isoreceived="20160703175545" -->
<!-- sent="Sun, 03 Jul 2016 11:55:40 -0600" -->
<!-- isosent="20160703175540" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BML/R2 error" -->
<!-- id="AF9772E8-EECE-4863-9541-E5DD7AD43E8A_at_me.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8E90FF92-F609-4D1A-94E3-71272363AE20_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BML/R2 error<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-03 13:55:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19152.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT: make hung threading tests be reported as failures"</a>
<li><strong>Previous message:</strong> <a href="19150.php">Ralph Castain: "[OMPI devel] BML/R2 error"</a>
<li><strong>In reply to:</strong> <a href="19150.php">Ralph Castain: "[OMPI devel] BML/R2 error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Its correct as written. the &amp;&amp; takes precidence over the || and the statement gets evaluated in the order i intended. i will add the parentheses to quiet the warning when i get a chance
<br>
<p><span class="quotelev1">&gt; On Jul 3, 2016, at 9:01 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with the compiler - I can&#226;&#128;&#153;t figure out exactly what was meant here either:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bml_r2.c: In function &#226;&#128;&#152;mca_bml_r2_endpoint_add_btl&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt; bml_r2.c:271:21: warning: suggest parentheses around &#226;&#128;&#152;&amp;&amp;&#226;&#128;&#153; within &#226;&#128;&#152;||&#226;&#128;&#153; [-Wparentheses]
</span><br>
<span class="quotelev1">&gt;     if ((btl_in_use &amp;&amp; (btl_flags &amp; MCA_BTL_FLAGS_RDMA) ||
</span><br>
<span class="quotelev1">&gt;          ~~~~~~~~~~~^~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19150.php">http://www.open-mpi.org/community/lists/devel/2016/07/19150.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19152.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT: make hung threading tests be reported as failures"</a>
<li><strong>Previous message:</strong> <a href="19150.php">Ralph Castain: "[OMPI devel] BML/R2 error"</a>
<li><strong>In reply to:</strong> <a href="19150.php">Ralph Castain: "[OMPI devel] BML/R2 error"</a>
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
