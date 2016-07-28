<?
$subject_val = "Re: [OMPI devel] u_int8_t";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 10 20:23:19 2011" -->
<!-- isoreceived="20110111012319" -->
<!-- sent="Mon, 10 Jan 2011 20:23:14 -0500" -->
<!-- isosent="20110111012314" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] u_int8_t" -->
<!-- id="60C5F417-CA9A-4411-8D80-03CBBD2DE1AC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D2BA976.4080107_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] u_int8_t<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-10 20:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8852.php">Doron Shoham: "[OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Previous message:</strong> <a href="8850.php">Eugene Loh: "[OMPI devel] u_int8_t"</a>
<li><strong>In reply to:</strong> <a href="8850.php">Eugene Loh: "[OMPI devel] u_int8_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Reply:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI devel] u_int8_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shrug.  If they're not used anywhere, I'd whack them.
<br>
<p>Do we have configure tests for them, or just #define's?
<br>
<p>On Jan 10, 2011, at 7:51 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Why do
</span><br>
<span class="quotelev1">&gt;  u_int8_t
</span><br>
<span class="quotelev1">&gt;  u_int16_t
</span><br>
<span class="quotelev1">&gt;  u_int32_t
</span><br>
<span class="quotelev1">&gt;  u_int64_t
</span><br>
<span class="quotelev1">&gt; get defined in opal_config.h?  I don't see them used anywhere in the OMPI/OPAL/ORTE code base.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Okay, one exception, in opal/util/if.c:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if defined(__DragonFly__)
</span><br>
<span class="quotelev1">&gt; #define IN_LINKLOCAL(i)        (((u_int32_t)(i) &amp; 0xffff0000) == 0xa9fe0000)
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8852.php">Doron Shoham: "[OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Previous message:</strong> <a href="8850.php">Eugene Loh: "[OMPI devel] u_int8_t"</a>
<li><strong>In reply to:</strong> <a href="8850.php">Eugene Loh: "[OMPI devel] u_int8_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI devel] u_int8_t"</a>
<li><strong>Reply:</strong> <a href="8856.php">Eugene Loh: "Re: [OMPI devel] u_int8_t"</a>
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
