<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 12 14:05:06 2005" -->
<!-- isoreceived="20050912190506" -->
<!-- sent="Mon, 12 Sep 2005 19:04:56 +0000" -->
<!-- isosent="20050912190456" -->
<!-- name="Ferris McCormick" -->
<!-- email="fmccor_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux" -->
<!-- id="1126551896.17629.54.camel_at_polylepis.inforead.com" -->
<!-- inreplyto="B1CDAC23-810E-4B93-8E1D-38888F723EF8_at_open-mpi.org" -->
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
<strong>From:</strong> Ferris McCormick (<em>fmccor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-12 14:04:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0333.php">Jeff Squyres: "svn merge: lessons learned"</a>
<li><strong>Previous message:</strong> <a href="0331.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0331.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0353.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0353.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2005-09-12 at 13:34 -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Ok, I see what's happening, although I'm not sure the two problems  
</span><br>
<span class="quotelev1">&gt; are actually related.  The first is that the component to provide  
</span><br>
<span class="quotelev1">&gt; high resolution timer support on Linux is disabling itself because:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1) it doesn't know how to figure out the clock rate of the CPU
</span><br>
<span class="quotelev1">&gt;    2) there's no assembly for reading a CPU counter on SPARC chips
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only reliable way to get CPU frequency is reading /proc/cpuinfo,  
</span><br>
<span class="quotelev1">&gt; and for Linux, each architecture seems to have a different format.   
</span><br>
<span class="quotelev1">&gt; So that part's covered with the information provided below.  Now I  
</span><br>
<span class="quotelev1">&gt; just need to figure out how to get cycle counts out of a SPARC.  So  
</span><br>
<span class="quotelev1">&gt; much easier on Solaris ;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Some information that might help:
<br>
The SB1000 is a (2x900MHz) Ultrasparc III, the second system is a
<br>
(2x400MHz) Ultrasparc II.  The SB1000 is well over twice as fast as the
<br>
U2.
<br>
<p>Here is a (2x450MHz) Ultrasparc II (U60 system):
<br>
====================================================
<br>
fmccor_at_antaresia openmpi-1.0a1r7305 [33]% cat /proc/cpuinfo
<br>
cpu             : TI UltraSparc II  (BlackBird)
<br>
fpu             : UltraSparc II integrated FPU
<br>
promlib         : Version 3 Revision 29
<br>
prom            : 3.29.0
<br>
type            : sun4u
<br>
ncpus probed    : 2
<br>
ncpus active    : 2
<br>
Cpu0Bogo        : 897.84
<br>
Cpu0ClkTck      : 000000001ad2f5d5
<br>
Cpu2Bogo        : 897.84
<br>
Cpu2ClkTck      : 000000001ad2f5d5
<br>
MMU Type        : Spitfire
<br>
State:
<br>
CPU0:           online
<br>
CPU2:           online
<br>
========================================================
<br>
<p>I think what you need to look at is the 'Cpu?ClkTck' values, if
<br>
900 --&gt; 0000000035a4e900
<br>
450 --&gt; 000000001ad2f5d5
<br>
400 --&gt; 0000000017d746a8
<br>
is useful.
<br>
<p>If you need more, you can try joining #gentoo-sparc on IRC freenode and
<br>
explaining exactly what you need; there are people there who probably
<br>
can help.  At this point, though, I am giving you more than I know,
<br>
which can always be misleading.
<br>
<p><p><p><span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's /proc/cpuinfo from the SB1000:
</span><br>
<span class="quotelev2">&gt; &gt; =====================================
</span><br>
<span class="quotelev2">&gt; &gt; fmccor_at_polylepis AGT [93]% cat /proc/cpuinfo
</span><br>
<span class="quotelev2">&gt; &gt; cpu             : TI UltraSparc III (Cheetah)
</span><br>
<span class="quotelev2">&gt; &gt; fpu             : UltraSparc III integrated FPU
</span><br>
<span class="quotelev2">&gt; &gt; promlib         : Version 3 Revision 13
</span><br>
<span class="quotelev2">&gt; &gt; prom            : 4.13.0
</span><br>
<span class="quotelev2">&gt; &gt; type            : sun4u
</span><br>
<span class="quotelev2">&gt; &gt; ncpus probed    : 2
</span><br>
<span class="quotelev2">&gt; &gt; ncpus active    : 2
</span><br>
<span class="quotelev2">&gt; &gt; Cpu0Bogo        : 598.01
</span><br>
<span class="quotelev2">&gt; &gt; Cpu0ClkTck      : 0000000035a4e900
</span><br>
<span class="quotelev2">&gt; &gt; Cpu1Bogo        : 598.01
</span><br>
<span class="quotelev2">&gt; &gt; Cpu1ClkTck      : 0000000035a4e900
</span><br>
<span class="quotelev2">&gt; &gt; MMU Type        : Cheetah
</span><br>
<span class="quotelev2">&gt; &gt; State:
</span><br>
<span class="quotelev2">&gt; &gt; CPU0:           online
</span><br>
<span class="quotelev2">&gt; &gt; CPU1:           online
</span><br>
<span class="quotelev2">&gt; &gt; ========================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; ====================================
</span><br>
<span class="quotelev2">&gt; &gt; Other failing system:
</span><br>
<span class="quotelev2">&gt; &gt; fmccor_at_lacewing openmpi-1.0a1r7305 [96]% cat /proc/cpuinfo
</span><br>
<span class="quotelev2">&gt; &gt; cpu             : TI UltraSparc II  (BlackBird)
</span><br>
<span class="quotelev2">&gt; &gt; fpu             : UltraSparc II integrated FPU
</span><br>
<span class="quotelev2">&gt; &gt; promlib         : Version 3 Revision 19
</span><br>
<span class="quotelev2">&gt; &gt; prom            : 3.19.0
</span><br>
<span class="quotelev2">&gt; &gt; type            : sun4u
</span><br>
<span class="quotelev2">&gt; &gt; ncpus probed    : 2
</span><br>
<span class="quotelev2">&gt; &gt; ncpus active    : 2
</span><br>
<span class="quotelev2">&gt; &gt; Cpu0Bogo        : 799.53
</span><br>
<span class="quotelev2">&gt; &gt; Cpu0ClkTck      : 0000000017d746a8
</span><br>
<span class="quotelev2">&gt; &gt; Cpu1Bogo        : 799.53
</span><br>
<span class="quotelev2">&gt; &gt; Cpu1ClkTck      : 0000000017d746a8
</span><br>
<span class="quotelev2">&gt; &gt; MMU Type        : Spitfire
</span><br>
<span class="quotelev2">&gt; &gt; State:
</span><br>
<span class="quotelev2">&gt; &gt; CPU0:           online
</span><br>
<span class="quotelev2">&gt; &gt; CPU1:           online
</span><br>
<span class="quotelev2">&gt; &gt; ===========================
</span><br>
<p>Regards,
<br>
<pre>
-- 
Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
Developer, Gentoo Linux (Sparc, Devrel)

</pre>
<p>
<p><p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0332/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0333.php">Jeff Squyres: "svn merge: lessons learned"</a>
<li><strong>Previous message:</strong> <a href="0331.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0331.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0353.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0353.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
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
