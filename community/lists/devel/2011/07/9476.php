<?
$subject_val = "Re: [OMPI devel] Trunk broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 19:21:13 2011" -->
<!-- isoreceived="20110705232113" -->
<!-- sent="Tue, 5 Jul 2011 17:21:05 -0600" -->
<!-- isosent="20110705232105" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken?" -->
<!-- id="82231ECC-2C71-40EC-9BBA-ED2D63F720F5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2CF7361C-475F-4D2F-A91C-C35B595275DD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk broken?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 19:21:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9477.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>Previous message:</strong> <a href="9475.php">Ralph Castain: "[OMPI devel] Trunk broken?"</a>
<li><strong>In reply to:</strong> <a href="9475.php">Ralph Castain: "[OMPI devel] Trunk broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9477.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>Reply:</strong> <a href="9477.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Never mind - this seems to have been another svn-related artifact. I started fresh and it didn't show up.
<br>
<p><p>On Jul 5, 2011, at 12:46 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm getting this when trying to build the trunk on a system with openib:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_ini.h:16,
</span><br>
<span class="quotelev1">&gt;                from btl_openib.c:47:
</span><br>
<span class="quotelev1">&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_component.c:80:
</span><br>
<span class="quotelev1">&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_endpoint.h:32,
</span><br>
<span class="quotelev1">&gt;                from btl_openib_endpoint.c:46:
</span><br>
<span class="quotelev1">&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_frag.c:22:
</span><br>
<span class="quotelev1">&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_proc.c:27:
</span><br>
<span class="quotelev1">&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_mca.c:33:
</span><br>
<span class="quotelev1">&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; btl_openib_mca.c:401:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_ini.c:35:
</span><br>
<span class="quotelev1">&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_async.c:26:
</span><br>
<span class="quotelev1">&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_xrc.h:14,
</span><br>
<span class="quotelev1">&gt;                from btl_openib_xrc.c:23:
</span><br>
<span class="quotelev1">&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from btl_openib_endpoint.h:32,
</span><br>
<span class="quotelev1">&gt;                from btl_openib_ip.c:30:
</span><br>
<span class="quotelev1">&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from connect/btl_openib_connect_base.c:13:
</span><br>
<span class="quotelev1">&gt; ./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from connect/btl_openib_connect_oob.c:41:
</span><br>
<span class="quotelev1">&gt; ./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; connect/btl_openib_connect_oob.c:47:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; connect/btl_openib_connect_oob.c:65:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; connect/btl_openib_connect_oob.c:115:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; connect/btl_openib_connect_oob.c:271:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; connect/btl_openib_connect_oob.c:307:7: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; connect/btl_openib_connect_oob.c:396:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; connect/btl_openib_connect_oob.c:1011:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from connect/btl_openib_connect_empty.c:13:
</span><br>
<span class="quotelev1">&gt; ./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; In file included from ./btl_openib_proc.h:26,
</span><br>
<span class="quotelev1">&gt;                from connect/btl_openib_connect_rdmacm.c:53:
</span><br>
<span class="quotelev1">&gt; ./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can't build at all...can someone please fix this?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9477.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>Previous message:</strong> <a href="9475.php">Ralph Castain: "[OMPI devel] Trunk broken?"</a>
<li><strong>In reply to:</strong> <a href="9475.php">Ralph Castain: "[OMPI devel] Trunk broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9477.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>Reply:</strong> <a href="9477.php">Yevgeny Kliteynik: "Re: [OMPI devel] Trunk broken?"</a>
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
