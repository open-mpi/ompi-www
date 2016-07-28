<?
$subject_val = "Re: [OMPI devel] IB warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 20 03:49:32 2010" -->
<!-- isoreceived="20100720074932" -->
<!-- sent="Tue, 20 Jul 2010 01:49:23 -0600" -->
<!-- isosent="20100720074923" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IB warnings" -->
<!-- id="687C7894-E1F6-46F7-AF71-5A9F58F3E746_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20100720165330.567017f8_at_lilo" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-20 03:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8193.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8191.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<li><strong>In reply to:</strong> <a href="8191.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8193.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Chris!
<br>
<p>On Jul 20, 2010, at 1:23 AM, Christopher Yeoh wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've committed a fix for this in r23441
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 19 Jul 2010 11:58:31 -0400
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Chris Yeoh --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SVN blame says that this is your line of code.  Can you fix?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 17, 2010, at 12:27 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yo IB-folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are we ever going to get these warnings corrected? This is from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current trunk, built on a Linux system --with-openib. It has been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this way for quite some time...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from btl_openib_proc.h:27,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                from btl_openib.c:50:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness In file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; included from btl_openib_component.c:82: btl_openib_endpoint.h: In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function &#145;post_send&#146;: btl_openib_endpoint.h:506: warning: pointer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signedness In file included from btl_openib_endpoint.c:46:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness In file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; included from btl_openib_proc.h:27, from btl_openib_proc.c:28:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness In file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; included from btl_openib_async.h:14, from btl_openib_async.c:28:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness In file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; included from btl_openib_xrc.h:15, from btl_openib_xrc.c:23:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_endpoint.h: In function &#145;post_send&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_endpoint.h:506: warning: pointer targets in passing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness In file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; included from btl_openib_ip.c:29: btl_openib_endpoint.h: In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function &#145;post_send&#146;: btl_openib_endpoint.h:506: warning: pointer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signedness In file included from ./btl_openib_proc.h:27, from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect/btl_openib_connect_base.c:14: ./btl_openib_endpoint.h: In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function &#145;post_send&#146;: ./btl_openib_endpoint.h:506: warning: pointer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signedness In file included from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect/btl_openib_connect_oob.c:42: ./btl_openib_endpoint.h: In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function &#145;post_send&#146;: ./btl_openib_endpoint.h:506: warning: pointer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signedness In file included from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect/btl_openib_connect_empty.c:14: ./btl_openib_endpoint.h: In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function &#145;post_send&#146;: ./btl_openib_endpoint.h:506: warning: pointer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signedness In file included from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect/btl_openib_connect_xoob.c:28: ./btl_openib_endpoint.h: In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function &#145;post_send&#146;: ./btl_openib_endpoint.h:506: warning: pointer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signedness In file included from ./btl_openib_proc.h:27, from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect/btl_openib_connect_rdmacm.c:53: ./btl_openib_endpoint.h: In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function &#145;post_send&#146;: ./btl_openib_endpoint.h:506: warning: pointer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signedness
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; cyeoh_at_[hidden]
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
<li><strong>Next message:</strong> <a href="8193.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8191.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<li><strong>In reply to:</strong> <a href="8191.php">Christopher Yeoh: "Re: [OMPI devel] IB warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8193.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
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
