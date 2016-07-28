<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 12 13:05:53 2005" -->
<!-- isoreceived="20050912180553" -->
<!-- sent="Mon, 12 Sep 2005 18:05:39 +0000" -->
<!-- isosent="20050912180539" -->
<!-- name="Ferris McCormick" -->
<!-- email="fmccor_at_[hidden]" -->
<!-- subject="Re:  ompi_info Seg Fault, missing component -- linux" -->
<!-- id="1126548339.17629.41.camel_at_polylepis.inforead.com" -->
<!-- inreplyto="A148A0F0-4C8C-4DF6-9347-47911C3E1C08_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-12 13:05:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0330.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0328.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0328.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0330.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0330.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0331.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2005-09-12 at 11:14 -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Thanks for the heads up.  We are not seeing this on other platforms,  
</span><br>
<span class="quotelev1">&gt; so it might be a Sparc-specific issue.  Any chance you could compile  
</span><br>
<span class="quotelev1">&gt; with debugging symbols and generate a backtrace?  Also, could you  
</span><br>
<span class="quotelev1">&gt; send the contents of /proc/cpuinfo (long story...)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Here's /proc/cpuinfo from the SB1000:
<br>
=====================================
<br>
fmccor_at_polylepis AGT [93]% cat /proc/cpuinfo
<br>
cpu             : TI UltraSparc III (Cheetah)
<br>
fpu             : UltraSparc III integrated FPU
<br>
promlib         : Version 3 Revision 13
<br>
prom            : 4.13.0
<br>
type            : sun4u
<br>
ncpus probed    : 2
<br>
ncpus active    : 2
<br>
Cpu0Bogo        : 598.01
<br>
Cpu0ClkTck      : 0000000035a4e900
<br>
Cpu1Bogo        : 598.01
<br>
Cpu1ClkTck      : 0000000035a4e900
<br>
MMU Type        : Cheetah
<br>
State:
<br>
CPU0:           online
<br>
CPU1:           online
<br>
========================================
<br>
<p>And here's a back-trace from ompi_info:
<br>
==========================================
<br>
Program received signal SIGSEGV, Segmentation fault.
<br>
opal_output_close (output_id=1880710872) at opal_object.h:409
<br>
409         for (i = 0; i &lt; cls-&gt;cls_depth; i++) {
<br>
Current language:  auto; currently c
<br>
(gdb) bt
<br>
#0  opal_output_close (output_id=1880710872) at opal_object.h:4
<br>
#1  0x700d8e00 in mca_topo_base_close () at topo_base_close.c:46
<br>
#2  0x00016aa4 in close_components () at components.cc:254
<br>
#3  0x00018bbc in main (argc=1, argv=0xefa253f4) at ompi_info.cc:251
<br>
=============================================
<br>
HOWEVER:  If I configure with --enable-debug, two things happen:
<br>
1.  I have to build ompi/mca/rcache/rb by hand because of incorrect
<br>
CFLAGS;
<br>
2.  The SegFault disappears.
<br>
<p>(The line# in #0 above is incorrect; by accident I edited the email as I
<br>
was writing it and erased too much.  I can rebuild with '-g' but not
<br>
with --enable-debug if necessary.)
<br>
====================================
<br>
Other failing system:
<br>
fmccor_at_lacewing openmpi-1.0a1r7305 [96]% cat /proc/cpuinfo
<br>
cpu             : TI UltraSparc II  (BlackBird)
<br>
fpu             : UltraSparc II integrated FPU
<br>
promlib         : Version 3 Revision 19
<br>
prom            : 3.19.0
<br>
type            : sun4u
<br>
ncpus probed    : 2
<br>
ncpus active    : 2
<br>
Cpu0Bogo        : 799.53
<br>
Cpu0ClkTck      : 0000000017d746a8
<br>
Cpu1Bogo        : 799.53
<br>
Cpu1ClkTck      : 0000000017d746a8
<br>
MMU Type        : Spitfire
<br>
State:
<br>
CPU0:           online
<br>
CPU1:           online
<br>
===========================
<br>
Regards,
<br>
<p><p><pre>
-- 
Ferris McCormick (P44646, MI) &lt;fmccor_at_[hidden]&gt;
Developer, Gentoo Linux (Sparc, Devrel)

</pre>
<p>
<p><p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0329/signature.asc">This is a digitally signed message part</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0330.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0328.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0328.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0330.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0330.php">Jeff Squyres: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Reply:</strong> <a href="0331.php">Brian Barrett: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
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
