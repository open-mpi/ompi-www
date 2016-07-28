<?
$subject_val = "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 15 23:12:28 2011" -->
<!-- isoreceived="20111116041228" -->
<!-- sent="Tue, 15 Nov 2011 21:12:20 -0700" -->
<!-- isosent="20111116041220" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5" -->
<!-- id="44A3C5D4-5ACF-4374-98AE-B55181259A14_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-15 23:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9976.php">TERRY DONTJE: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Previous message:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>In reply to:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9976.php">TERRY DONTJE: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 15, 2011, at 8:16 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 14, 2011, at 10:17 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried building v1.5.  r25469 builds for me, r25470 does not.  This is Friday's hwloc putback of CMR 2866.  I'm on Solaris11/x86.  The problem is basically:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doh!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; CC     ompi_info.o
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../opal/include/opal/sys/ia32/atomic.h&quot;, line 173: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have these warnings always been there for you?  r25470 should not have changed any of the assembly stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; CCLD   ompi_info
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do notice some minor differences between ompi-trunk/ompi-1.5 in the opal/mca/hwloc/hwloc122ompi/hwloc trees.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Terry: did you add some stuff to the trunk in topology-solaris-chiptype.c, for example?
</span><br>
<p>Yes - there are two new files, but they only have to do with detecting cpu model and type.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, the right solution might just be to copy from trunk/opal/mca/hwloc/hwloc122ompi/hwloc/* to ompi-1.5/opal/mca/hwloc/hwloc122ompi/hwloc/.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9976.php">TERRY DONTJE: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>Previous message:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<li><strong>In reply to:</strong> <a href="9974.php">Jeff Squyres: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9976.php">TERRY DONTJE: "Re: [OMPI devel] r25470 (hwloc CMR) breaks v1.5"</a>
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
