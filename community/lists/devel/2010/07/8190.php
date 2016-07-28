<?
$subject_val = "Re: [OMPI devel] IB warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 19 11:57:57 2010" -->
<!-- isoreceived="20100719155757" -->
<!-- sent="Mon, 19 Jul 2010 11:58:31 -0400" -->
<!-- isosent="20100719155831" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IB warnings" -->
<!-- id="F2689554-8AC9-4756-9F25-69A8DB4A11F2_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BA73EF2E-1FE3-4B60-BCB9-75A96E951546_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IB warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-19 11:58:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8191.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8189.php">Ralph Castain: "[OMPI devel] IB warnings"</a>
<li><strong>In reply to:</strong> <a href="8189.php">Ralph Castain: "[OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8191.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Reply:</strong> <a href="8191.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chris Yeoh --
<br>
<p>SVN blame says that this is your line of code.  Can you fix?
<br>
<p><p>On Jul 17, 2010, at 12:27 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo IB-folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are we ever going to get these warnings corrected? This is from current trunk, built on a Linux system --with-openib. It has been this way for quite some time...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_proc.h:27,
</span><br>
<span class="quotelev1">&gt;                 from btl_openib.c:50:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_component.c:82:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_endpoint.c:46:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_proc.h:27,
</span><br>
<span class="quotelev1">&gt;                 from btl_openib_proc.c:28:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_async.h:14,
</span><br>
<span class="quotelev1">&gt;                 from btl_openib_async.c:28:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_xrc.h:15,
</span><br>
<span class="quotelev1">&gt;                 from btl_openib_xrc.c:23:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_ip.c:29:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; In file included from ./btl_openib_proc.h:27,
</span><br>
<span class="quotelev1">&gt;                 from connect/btl_openib_connect_base.c:14:
</span><br>
<span class="quotelev1">&gt; ./btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; ./btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; In file included from connect/btl_openib_connect_oob.c:42:
</span><br>
<span class="quotelev1">&gt; ./btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; ./btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; In file included from connect/btl_openib_connect_empty.c:14:
</span><br>
<span class="quotelev1">&gt; ./btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; ./btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; In file included from connect/btl_openib_connect_xoob.c:28:
</span><br>
<span class="quotelev1">&gt; ./btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; ./btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; In file included from ./btl_openib_proc.h:27,
</span><br>
<span class="quotelev1">&gt;                 from connect/btl_openib_connect_rdmacm.c:53:
</span><br>
<span class="quotelev1">&gt; ./btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev1">&gt; ./btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8191.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8189.php">Ralph Castain: "[OMPI devel] IB warnings"</a>
<li><strong>In reply to:</strong> <a href="8189.php">Ralph Castain: "[OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8191.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Reply:</strong> <a href="8191.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
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
