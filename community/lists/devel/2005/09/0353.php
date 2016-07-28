<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 17:13:31 2005" -->
<!-- isoreceived="20050914221331" -->
<!-- sent="Wed, 14 Sep 2005 17:13:24 -0500" -->
<!-- isosent="20050914221324" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux" -->
<!-- id="8BD97360-504E-4554-8BD1-6B3EEEB2D0EC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1126551896.17629.54.camel_at_polylepis.inforead.com" -->
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
<strong>Date:</strong> 2005-09-14 17:13:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0354.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0352.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0332.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0354.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0354.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I committed some code that should fix the timer problems on SPARC  
<br>
linux.  Can you either svn up and try again (or, if you are using  
<br>
nightly builds) try tomorrow's tarball and see if it works?  The test  
<br>
tests/util/opal_timer.c should give an indication as to whether  
<br>
everything is working ok or not.
<br>
<p>Thanks!
<br>
<p>Brian
<br>
<p>On Sep 12, 2005, at 2:04 PM, Ferris McCormick wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2005-09-12 at 13:34 -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, I see what's happening, although I'm not sure the two problems
</span><br>
<span class="quotelev2">&gt;&gt; are actually related.  The first is that the component to provide
</span><br>
<span class="quotelev2">&gt;&gt; high resolution timer support on Linux is disabling itself because:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    1) it doesn't know how to figure out the clock rate of the CPU
</span><br>
<span class="quotelev2">&gt;&gt;    2) there's no assembly for reading a CPU counter on SPARC chips
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only reliable way to get CPU frequency is reading /proc/cpuinfo,
</span><br>
<span class="quotelev2">&gt;&gt; and for Linux, each architecture seems to have a different format.
</span><br>
<span class="quotelev2">&gt;&gt; So that part's covered with the information provided below.  Now I
</span><br>
<span class="quotelev2">&gt;&gt; just need to figure out how to get cycle counts out of a SPARC.  So
</span><br>
<span class="quotelev2">&gt;&gt; much easier on Solaris ;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Some information that might help:
</span><br>
<span class="quotelev1">&gt; The SB1000 is a (2x900MHz) Ultrasparc III, the second system is a
</span><br>
<span class="quotelev1">&gt; (2x400MHz) Ultrasparc II.  The SB1000 is well over twice as fast as  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; U2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a (2x450MHz) Ultrasparc II (U60 system):
</span><br>
<span class="quotelev1">&gt; ====================================================
</span><br>
<span class="quotelev1">&gt; fmccor_at_antaresia openmpi-1.0a1r7305 [33]% cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; cpu             : TI UltraSparc II  (BlackBird)
</span><br>
<span class="quotelev1">&gt; fpu             : UltraSparc II integrated FPU
</span><br>
<span class="quotelev1">&gt; promlib         : Version 3 Revision 29
</span><br>
<span class="quotelev1">&gt; prom            : 3.29.0
</span><br>
<span class="quotelev1">&gt; type            : sun4u
</span><br>
<span class="quotelev1">&gt; ncpus probed    : 2
</span><br>
<span class="quotelev1">&gt; ncpus active    : 2
</span><br>
<span class="quotelev1">&gt; Cpu0Bogo        : 897.84
</span><br>
<span class="quotelev1">&gt; Cpu0ClkTck      : 000000001ad2f5d5
</span><br>
<span class="quotelev1">&gt; Cpu2Bogo        : 897.84
</span><br>
<span class="quotelev1">&gt; Cpu2ClkTck      : 000000001ad2f5d5
</span><br>
<span class="quotelev1">&gt; MMU Type        : Spitfire
</span><br>
<span class="quotelev1">&gt; State:
</span><br>
<span class="quotelev1">&gt; CPU0:           online
</span><br>
<span class="quotelev1">&gt; CPU2:           online
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think what you need to look at is the 'Cpu?ClkTck' values, if
</span><br>
<span class="quotelev1">&gt; 900 --&gt; 0000000035a4e900
</span><br>
<span class="quotelev1">&gt; 450 --&gt; 000000001ad2f5d5
</span><br>
<span class="quotelev1">&gt; 400 --&gt; 0000000017d746a8
</span><br>
<span class="quotelev1">&gt; is useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you need more, you can try joining #gentoo-sparc on IRC freenode  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; explaining exactly what you need; there are people there who probably
</span><br>
<span class="quotelev1">&gt; can help.  At this point, though, I am giving you more than I know,
</span><br>
<span class="quotelev1">&gt; which can always be misleading.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's /proc/cpuinfo from the SB1000:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fmccor_at_polylepis AGT [93]% cat /proc/cpuinfo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu             : TI UltraSparc III (Cheetah)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu             : UltraSparc III integrated FPU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; promlib         : Version 3 Revision 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prom            : 4.13.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type            : sun4u
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ncpus probed    : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ncpus active    : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpu0Bogo        : 598.01
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpu0ClkTck      : 0000000035a4e900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpu1Bogo        : 598.01
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpu1ClkTck      : 0000000035a4e900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MMU Type        : Cheetah
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU0:           online
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU1:           online
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Other failing system:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fmccor_at_lacewing openmpi-1.0a1r7305 [96]% cat /proc/cpuinfo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu             : TI UltraSparc II  (BlackBird)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu             : UltraSparc II integrated FPU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; promlib         : Version 3 Revision 19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prom            : 3.19.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type            : sun4u
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ncpus probed    : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ncpus active    : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpu0Bogo        : 799.53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpu0ClkTck      : 0000000017d746a8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpu1Bogo        : 799.53
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpu1ClkTck      : 0000000017d746a8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MMU Type        : Spitfire
</span><br>
<span class="quotelev3">&gt;&gt;&gt; State:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU0:           online
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPU1:           online
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
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
<li><strong>Next message:</strong> <a href="0354.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0352.php">Tim S. Woodall: "Re:  error message on make"</a>
<li><strong>In reply to:</strong> <a href="0332.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0354.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0354.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
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
