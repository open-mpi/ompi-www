<?
$subject_val = "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 15 22:16:17 2011" -->
<!-- isoreceived="20111116031617" -->
<!-- sent="Tue, 15 Nov 2011 19:16:13 -0800" -->
<!-- isosent="20111116031613" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5" -->
<!-- id="F837E00A-6564-46F8-8818-FF751ABE741E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EC203FE.4010806_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-15 22:16:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9975.php">Ralph Castain: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Previous message:</strong> <a href="9973.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>In reply to:</strong> <a href="9969.php">Eugene Loh: "[OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9975.php">Ralph Castain: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Reply:</strong> <a href="9975.php">Ralph Castain: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Reply:</strong> <a href="9976.php">TERRY DONTJE: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2011, at 10:17 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I tried building v1.5.  r25469 builds for me, r25470 does not.  This is Friday's hwloc putback of CMR 2866.  I'm on Solaris11/x86.  The problem is basically:
</span><br>
<p>Doh!
<br>
<p><span class="quotelev1">&gt; Making all in tools/ompi_info
</span><br>
<span class="quotelev1">&gt;  CC     ompi_info.o
</span><br>
<span class="quotelev1">&gt; &quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 173: warning: parameter in inline asm statement unused: %2
</span><br>
<p>Have these warnings always been there for you?  r25470 should not have changed any of the assembly stuff.
<br>
<p><span class="quotelev1">&gt;  CCLD   ompi_info
</span><br>
<span class="quotelev1">&gt; Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt; symbol                             in file
</span><br>
<span class="quotelev1">&gt; opal_hwloc122_hwloc_bitmap_dup      components.o
</span><br>
<span class="quotelev1">&gt; opal_hwloc122_hwloc_bitmap_weight   components.o
</span><br>
<span class="quotelev1">&gt; ld: fatal: symbol referencing errors. No output written to .libs/ompi_info
</span><br>
<p>I do notice some minor differences between ompi-trunk/ompi-1.5 in the opal/mca/hwloc/hwloc122ompi/hwloc trees.  
<br>
<p>Terry: did you add some stuff to the trunk in topology-solaris-chiptype.c, for example?
<br>
<p>If so, the right solution might just be to copy from trunk/opal/mca/hwloc/hwloc122ompi/hwloc/* to ompi-1.5/opal/mca/hwloc/hwloc122ompi/hwloc/.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="9975.php">Ralph Castain: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Previous message:</strong> <a href="9973.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<li><strong>In reply to:</strong> <a href="9969.php">Eugene Loh: "[OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9975.php">Ralph Castain: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Reply:</strong> <a href="9975.php">Ralph Castain: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Reply:</strong> <a href="9976.php">TERRY DONTJE: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
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
