<?
$subject_val = "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 16 06:32:30 2011" -->
<!-- isoreceived="20111116113230" -->
<!-- sent="Wed, 16 Nov 2011 06:32:07 -0500" -->
<!-- isosent="20111116113207" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5" -->
<!-- id="4EC39F37.4010004_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F837E00A-6564-46F8-8818-FF751ABE741E_at_cisco.com" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-16 06:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9977.php">Eugene Loh: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Previous message:</strong> <a href="9975.php">Ralph Castain: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>In reply to:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9977.php">Eugene Loh: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Reply:</strong> <a href="9977.php">Eugene Loh: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/15/2011 10:16 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 14, 2011, at 10:17 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried building v1.5.  r25469 builds for me, r25470 does not.  This is Friday's hwloc putback of CMR 2866.  I'm on Solaris11/x86.  The problem is basically:
</span><br>
<span class="quotelev1">&gt; Doh!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;   CC     ompi_info.o
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 173: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; Have these warnings always been there for you?  r25470 should not have changed any of the assembly stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes.  You can ignore these warnings they aren't the droids you are 
<br>
looking for.
<br>
<span class="quotelev2">&gt;&gt;   CCLD   ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; Undefined                       first referenced
</span><br>
<span class="quotelev2">&gt;&gt; symbol                             in file
</span><br>
<span class="quotelev2">&gt;&gt; opal_hwloc122_hwloc_bitmap_dup      components.o
</span><br>
<span class="quotelev2">&gt;&gt; opal_hwloc122_hwloc_bitmap_weight   components.o
</span><br>
<span class="quotelev2">&gt;&gt; ld: fatal: symbol referencing errors. No output written to .libs/ompi_info
</span><br>
<span class="quotelev1">&gt; I do notice some minor differences between ompi-trunk/ompi-1.5 in the opal/mca/hwloc/hwloc122ompi/hwloc trees.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry: did you add some stuff to the trunk in topology-solaris-chiptype.c, for example?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, but they have nothing to do with the undefined symbols above.
<br>
<span class="quotelev1">&gt; If so, the right solution might just be to copy from trunk/opal/mca/hwloc/hwloc122ompi/hwloc/* to ompi-1.5/opal/mca/hwloc/hwloc122ompi/hwloc/.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-9976/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9977.php">Eugene Loh: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Previous message:</strong> <a href="9975.php">Ralph Castain: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>In reply to:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9977.php">Eugene Loh: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Reply:</strong> <a href="9977.php">Eugene Loh: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
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
