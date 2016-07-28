<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 12 13:34:38 2005" -->
<!-- isoreceived="20050912183438" -->
<!-- sent="Mon, 12 Sep 2005 13:34:37 -0500" -->
<!-- isosent="20050912183437" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux" -->
<!-- id="B1CDAC23-810E-4B93-8E1D-38888F723EF8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1126548339.17629.41.camel_at_polylepis.inforead.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-12 13:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0332.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0330.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0329.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0332.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0332.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0345.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I see what's happening, although I'm not sure the two problems  
<br>
are actually related.  The first is that the component to provide  
<br>
high resolution timer support on Linux is disabling itself because:
<br>
<p>&nbsp;&nbsp;&nbsp;1) it doesn't know how to figure out the clock rate of the CPU
<br>
&nbsp;&nbsp;&nbsp;2) there's no assembly for reading a CPU counter on SPARC chips
<br>
<p>The only reliable way to get CPU frequency is reading /proc/cpuinfo,  
<br>
and for Linux, each architecture seems to have a different format.   
<br>
So that part's covered with the information provided below.  Now I  
<br>
just need to figure out how to get cycle counts out of a SPARC.  So  
<br>
much easier on Solaris ;).
<br>
<p>Brian
<br>
<p>On Sep 12, 2005, at 1:05 PM, Ferris McCormick wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2005-09-12 at 11:14 -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the heads up.  We are not seeing this on other platforms,
</span><br>
<span class="quotelev2">&gt;&gt; so it might be a Sparc-specific issue.  Any chance you could compile
</span><br>
<span class="quotelev2">&gt;&gt; with debugging symbols and generate a backtrace?  Also, could you
</span><br>
<span class="quotelev2">&gt;&gt; send the contents of /proc/cpuinfo (long story...)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Here's /proc/cpuinfo from the SB1000:
</span><br>
<span class="quotelev1">&gt; =====================================
</span><br>
<span class="quotelev1">&gt; fmccor_at_polylepis AGT [93]% cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; cpu             : TI UltraSparc III (Cheetah)
</span><br>
<span class="quotelev1">&gt; fpu             : UltraSparc III integrated FPU
</span><br>
<span class="quotelev1">&gt; promlib         : Version 3 Revision 13
</span><br>
<span class="quotelev1">&gt; prom            : 4.13.0
</span><br>
<span class="quotelev1">&gt; type            : sun4u
</span><br>
<span class="quotelev1">&gt; ncpus probed    : 2
</span><br>
<span class="quotelev1">&gt; ncpus active    : 2
</span><br>
<span class="quotelev1">&gt; Cpu0Bogo        : 598.01
</span><br>
<span class="quotelev1">&gt; Cpu0ClkTck      : 0000000035a4e900
</span><br>
<span class="quotelev1">&gt; Cpu1Bogo        : 598.01
</span><br>
<span class="quotelev1">&gt; Cpu1ClkTck      : 0000000035a4e900
</span><br>
<span class="quotelev1">&gt; MMU Type        : Cheetah
</span><br>
<span class="quotelev1">&gt; State:
</span><br>
<span class="quotelev1">&gt; CPU0:           online
</span><br>
<span class="quotelev1">&gt; CPU1:           online
</span><br>
<span class="quotelev1">&gt; ========================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And here's a back-trace from ompi_info:
</span><br>
<span class="quotelev1">&gt; ==========================================
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; opal_output_close (output_id=1880710872) at opal_object.h:409
</span><br>
<span class="quotelev1">&gt; 409         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
</span><br>
<span class="quotelev1">&gt; Current language:  auto; currently c
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  opal_output_close (output_id=1880710872) at opal_object.h:4
</span><br>
<span class="quotelev1">&gt; #1  0x700d8e00 in mca_topo_base_close () at topo_base_close.c:46
</span><br>
<span class="quotelev1">&gt; #2  0x00016aa4 in close_components () at components.cc:254
</span><br>
<span class="quotelev1">&gt; #3  0x00018bbc in main (argc=1, argv=0xefa253f4) at ompi_info.cc:251
</span><br>
<span class="quotelev1">&gt; =============================================
</span><br>
<span class="quotelev1">&gt; HOWEVER:  If I configure with --enable-debug, two things happen:
</span><br>
<span class="quotelev1">&gt; 1.  I have to build ompi/mca/rcache/rb by hand because of incorrect
</span><br>
<span class="quotelev1">&gt; CFLAGS;
</span><br>
<span class="quotelev1">&gt; 2.  The SegFault disappears.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (The line# in #0 above is incorrect; by accident I edited the email  
</span><br>
<span class="quotelev1">&gt; as I
</span><br>
<span class="quotelev1">&gt; was writing it and erased too much.  I can rebuild with '-g' but not
</span><br>
<span class="quotelev1">&gt; with --enable-debug if necessary.)
</span><br>
<span class="quotelev1">&gt; ====================================
</span><br>
<span class="quotelev1">&gt; Other failing system:
</span><br>
<span class="quotelev1">&gt; fmccor_at_lacewing openmpi-1.0a1r7305 [96]% cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; cpu             : TI UltraSparc II  (BlackBird)
</span><br>
<span class="quotelev1">&gt; fpu             : UltraSparc II integrated FPU
</span><br>
<span class="quotelev1">&gt; promlib         : Version 3 Revision 19
</span><br>
<span class="quotelev1">&gt; prom            : 3.19.0
</span><br>
<span class="quotelev1">&gt; type            : sun4u
</span><br>
<span class="quotelev1">&gt; ncpus probed    : 2
</span><br>
<span class="quotelev1">&gt; ncpus active    : 2
</span><br>
<span class="quotelev1">&gt; Cpu0Bogo        : 799.53
</span><br>
<span class="quotelev1">&gt; Cpu0ClkTck      : 0000000017d746a8
</span><br>
<span class="quotelev1">&gt; Cpu1Bogo        : 799.53
</span><br>
<span class="quotelev1">&gt; Cpu1ClkTck      : 0000000017d746a8
</span><br>
<span class="quotelev1">&gt; MMU Type        : Spitfire
</span><br>
<span class="quotelev1">&gt; State:
</span><br>
<span class="quotelev1">&gt; CPU0:           online
</span><br>
<span class="quotelev1">&gt; CPU1:           online
</span><br>
<span class="quotelev1">&gt; ===========================
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Developer, Gentoo Linux (Sparc, Devrel)
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
<li><strong>Next message:</strong> <a href="0332.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0330.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0329.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0332.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0332.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0345.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
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
