<?
$subject_val = "[OMPI devel] IB warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 12:28:07 2010" -->
<!-- isoreceived="20100717162807" -->
<!-- sent="Sat, 17 Jul 2010 10:27:59 -0600" -->
<!-- isosent="20100717162759" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] IB warnings" -->
<!-- id="BA73EF2E-1FE3-4B60-BCB9-75A96E951546_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] IB warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 12:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8190.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8188.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8190.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Reply:</strong> <a href="8190.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo IB-folks
<br>
<p>Are we ever going to get these warnings corrected? This is from current trunk, built on a Linux system --with-openib. It has been this way for quite some time...
<br>
<p>In file included from btl_openib_proc.h:27,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib.c:50:
<br>
btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
In file included from btl_openib_component.c:82:
<br>
btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
In file included from btl_openib_endpoint.c:46:
<br>
btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
In file included from btl_openib_proc.h:27,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib_proc.c:28:
<br>
btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
In file included from btl_openib_async.h:14,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib_async.c:28:
<br>
btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
In file included from btl_openib_xrc.h:15,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib_xrc.c:23:
<br>
btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
In file included from btl_openib_ip.c:29:
<br>
btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
In file included from ./btl_openib_proc.h:27,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from connect/btl_openib_connect_base.c:14:
<br>
./btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
./btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
In file included from connect/btl_openib_connect_oob.c:42:
<br>
./btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
./btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
In file included from connect/btl_openib_connect_empty.c:14:
<br>
./btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
./btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
In file included from connect/btl_openib_connect_xoob.c:28:
<br>
./btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
./btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
In file included from ./btl_openib_proc.h:27,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from connect/btl_openib_connect_rdmacm.c:53:
<br>
./btl_openib_endpoint.h: In function &#145;post_send&#146;:
<br>
./btl_openib_endpoint.h:506: warning: pointer targets in passing argument 1 of &#145;opal_atomic_cmpset_32&#146; differ in signedness
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8190.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Previous message:</strong> <a href="8188.php">Jeff Squyres: "Re: [OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8190.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
<li><strong>Reply:</strong> <a href="8190.php">Jeff Squyres: "Re: [OMPI devel] IB warnings"</a>
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
