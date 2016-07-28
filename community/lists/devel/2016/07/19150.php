<?
$subject_val = "[OMPI devel] BML/R2 error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  3 11:01:21 2016" -->
<!-- isoreceived="20160703150121" -->
<!-- sent="Sun, 3 Jul 2016 08:01:17 -0700" -->
<!-- isosent="20160703150117" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] BML/R2 error" -->
<!-- id="8E90FF92-F609-4D1A-94E3-71272363AE20_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] BML/R2 error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-03 11:01:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19151.php">Nathan Hjelm: "Re: [OMPI devel] BML/R2 error"</a>
<li><strong>Previous message:</strong> <a href="19149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19151.php">Nathan Hjelm: "Re: [OMPI devel] BML/R2 error"</a>
<li><strong>Reply:</strong> <a href="19151.php">Nathan Hjelm: "Re: [OMPI devel] BML/R2 error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree with the compiler - I can&#226;&#128;&#153;t figure out exactly what was meant here either:
<br>
<p>bml_r2.c: In function &#226;&#128;&#152;mca_bml_r2_endpoint_add_btl&#226;&#128;&#153;:
<br>
bml_r2.c:271:21: warning: suggest parentheses around &#226;&#128;&#152;&amp;&amp;&#226;&#128;&#153; within &#226;&#128;&#152;||&#226;&#128;&#153; [-Wparentheses]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((btl_in_use &amp;&amp; (btl_flags &amp; MCA_BTL_FLAGS_RDMA) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~~~~~~~~~~~^~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19151.php">Nathan Hjelm: "Re: [OMPI devel] BML/R2 error"</a>
<li><strong>Previous message:</strong> <a href="19149.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Additional bot:retest target for IBM Jenkins:	bot:ibm:retest"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19151.php">Nathan Hjelm: "Re: [OMPI devel] BML/R2 error"</a>
<li><strong>Reply:</strong> <a href="19151.php">Nathan Hjelm: "Re: [OMPI devel] BML/R2 error"</a>
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
