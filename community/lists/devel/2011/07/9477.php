<?
$subject_val = "Re: [OMPI devel] Trunk broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 03:14:46 2011" -->
<!-- isoreceived="20110706071446" -->
<!-- sent="Wed, 06 Jul 2011 10:14:37 +0300" -->
<!-- isosent="20110706071437" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken?" -->
<!-- id="4E140B5D.4000908_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="82231ECC-2C71-40EC-9BBA-ED2D63F720F5_at_open-mpi.org" -->
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
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-06 03:14:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9478.php">Jeff Squyres: "Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<li><strong>Previous message:</strong> <a href="9476.php">Ralph Castain: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>In reply to:</strong> <a href="9476.php">Ralph Castain: "Re: [OMPI devel] Trunk broken?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06-Jul-11 2:21 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Never mind - this seems to have been another svn-related artifact. I started fresh and it didn't show up.
</span><br>
<p>I did some changes in m4 file, so I think that autogen + configure + make
<br>
should have fixed the problem. But never mind, if it works with fresh
<br>
checkout then I guess we're OK.
<br>
<p>-- YK
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 5, 2011, at 12:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting this when trying to build the trunk on a system with openib:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In file included from btl_openib_ini.h:16,
</span><br>
<span class="quotelev2">&gt;&gt;                 from btl_openib.c:47:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from btl_openib_component.c:80:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from btl_openib_endpoint.h:32,
</span><br>
<span class="quotelev2">&gt;&gt;                 from btl_openib_endpoint.c:46:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from btl_openib_frag.c:22:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from btl_openib_proc.c:27:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from btl_openib_mca.c:33:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_mca.c:401:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from btl_openib_ini.c:35:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from btl_openib_async.c:26:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from btl_openib_xrc.h:14,
</span><br>
<span class="quotelev2">&gt;&gt;                 from btl_openib_xrc.c:23:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from btl_openib_endpoint.h:32,
</span><br>
<span class="quotelev2">&gt;&gt;                 from btl_openib_ip.c:30:
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from connect/btl_openib_connect_base.c:13:
</span><br>
<span class="quotelev2">&gt;&gt; ./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from connect/btl_openib_connect_oob.c:41:
</span><br>
<span class="quotelev2">&gt;&gt; ./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; connect/btl_openib_connect_oob.c:47:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; connect/btl_openib_connect_oob.c:65:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; connect/btl_openib_connect_oob.c:115:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; connect/btl_openib_connect_oob.c:271:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; connect/btl_openib_connect_oob.c:307:7: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; connect/btl_openib_connect_oob.c:396:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; connect/btl_openib_connect_oob.c:1011:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from connect/btl_openib_connect_empty.c:13:
</span><br>
<span class="quotelev2">&gt;&gt; ./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt; In file included from ./btl_openib_proc.h:26,
</span><br>
<span class="quotelev2">&gt;&gt;                 from connect/btl_openib_connect_rdmacm.c:53:
</span><br>
<span class="quotelev2">&gt;&gt; ./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can't build at all...can someone please fix this?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9478.php">Jeff Squyres: "Re: [OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<li><strong>Previous message:</strong> <a href="9476.php">Ralph Castain: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>In reply to:</strong> <a href="9476.php">Ralph Castain: "Re: [OMPI devel] Trunk broken?"</a>
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
