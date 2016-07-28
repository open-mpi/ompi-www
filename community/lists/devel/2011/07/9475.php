<?
$subject_val = "[OMPI devel] Trunk broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 14:46:48 2011" -->
<!-- isoreceived="20110705184648" -->
<!-- sent="Tue, 5 Jul 2011 12:46:40 -0600" -->
<!-- isosent="20110705184640" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk broken?" -->
<!-- id="2CF7361C-475F-4D2F-A91C-C35B595275DD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk broken?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 14:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9476.php">Ralph Castain: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>Previous message:</strong> <a href="9474.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9476.php">Ralph Castain: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>Reply:</strong> <a href="9476.php">Ralph Castain: "Re: [OMPI devel] Trunk broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting this when trying to build the trunk on a system with openib:
<br>
<p>In file included from btl_openib_ini.h:16,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib.c:47:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from btl_openib_component.c:80:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from btl_openib_endpoint.h:32,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib_endpoint.c:46:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from btl_openib_frag.c:22:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from btl_openib_proc.c:27:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from btl_openib_mca.c:33:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
btl_openib_mca.c:401:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from btl_openib_ini.c:35:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from btl_openib_async.c:26:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from btl_openib_xrc.h:14,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib_xrc.c:23:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from btl_openib_endpoint.h:32,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from btl_openib_ip.c:30:
<br>
btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from connect/btl_openib_connect_base.c:13:
<br>
./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from connect/btl_openib_connect_oob.c:41:
<br>
./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c:47:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c:65:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c:115:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c:271:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c:307:7: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c:396:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
connect/btl_openib_connect_oob.c:1011:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from connect/btl_openib_connect_empty.c:13:
<br>
./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
In file included from ./btl_openib_proc.h:26,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from connect/btl_openib_connect_rdmacm.c:53:
<br>
./btl_openib.h:219:6: warning: &quot;OMPI_ENABLE_DYNAMIC_SL&quot; is not defined
<br>
<p><p>Can't build at all...can someone please fix this?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9476.php">Ralph Castain: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>Previous message:</strong> <a href="9474.php">Ralph Castain: "Re: [OMPI devel] Question about hanging mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9476.php">Ralph Castain: "Re: [OMPI devel] Trunk broken?"</a>
<li><strong>Reply:</strong> <a href="9476.php">Ralph Castain: "Re: [OMPI devel] Trunk broken?"</a>
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
