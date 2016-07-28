<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 22:27:20 2010" -->
<!-- isoreceived="20101124032720" -->
<!-- sent="Tue, 23 Nov 2010 19:25:50 -0800" -->
<!-- isosent="20101124032550" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="4CEC85BE.4070105_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6AF87FA0-C4BE-40C4-8D1C-8BEE62B2D97D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 22:25:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8715.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8713.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8712.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8715.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8715.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt;Ya, it sounds like we should fix this eager limit help text so that others aren't misled. We did say &quot;attempt&quot;, but that's probably a bit too subtle. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Eugene - iirc: this is in the btl base (or some other central location) because it's shared between all btls. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
The cited text was from the OMPI FAQ (&quot;Tuning&quot; / &quot;sm&quot; section, item 6).  
<br>
I made the change in r1309.
<br>
<p>In ompi/mca/btl/base/btl_base_mca.c, I added the phrase &quot;including 
<br>
header&quot; to both
<br>
<p>&quot;rndv_eager_limit&quot;
<br>
&quot;Size (in bytes, including header) of \&quot;phase 1\&quot; fragment sent for all 
<br>
large messages (must be &gt;= 0 and &lt;= eager_limit)&quot;
<br>
module-&gt;btl_rndv_eager_limit
<br>
<p>and
<br>
<p>&quot;eager_limit&quot;
<br>
&quot;Maximum size (in bytes, including header) of \&quot;short\&quot; messages (must 
<br>
be &gt;= 1).&quot;
<br>
module-&gt;btl_eager_limit
<br>
<p>but I left
<br>
<p>&quot;max_send_size&quot;
<br>
&quot;Maximum size (in bytes) of a single \&quot;phase 2\&quot; fragment of a long 
<br>
message when using the pipeline protocol (must be &gt;= 1)&quot;
<br>
module-&gt;btl_max_send_size
<br>
<p>alone (for some combination of lukewarm reasons).  Changes are in r24085.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8715.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8713.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>In reply to:</strong> <a href="8712.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8715.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Reply:</strong> <a href="8715.php">Sébastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
