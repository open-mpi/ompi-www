<?
$subject_val = "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 25 04:20:18 2013" -->
<!-- isoreceived="20130325082018" -->
<!-- sent="Mon, 25 Mar 2013 09:12:43 +0100 (CET)" -->
<!-- isosent="20130325081243" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203" -->
<!-- id="201303250812.r2P8ChAh007580_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] seg fault and undefined symbol in openmpi-1.9r28203" -->
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
<strong>Subject:</strong> Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-25 04:12:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21608.php">Baptiste Robert: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Previous message:</strong> <a href="21606.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Maybe in reply to:</strong> <a href="21601.php">Siegmar Gross: "[OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21622.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I reported the following error for openmpi-1.9r28203 and did some research
<br>
in the meantime.
<br>
<p><span class="quotelev1">&gt; Solaris 10, x86_64 and sparc, SunC 5.12, 32-bit and 64-bit
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sunpc1 openmpi-1.9-SunOS.x86_64.32_cc 16 tail -15 log.make.SunOS.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `.../opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt;   CC       opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9r28203/opal/include/opal/sys/ia32/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt;   line 173: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9r28203/opal/include/opal/sys/ia32/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt;   line 193: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt;   CCLD     opal_wrapper
</span><br>
<span class="quotelev1">&gt; Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt;  symbol                             in file
</span><br>
<span class="quotelev1">&gt; opal_hwloc152_hwloc_solaris_get_chip_model ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; opal_hwloc152_hwloc_solaris_get_chip_type ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; ld: fatal: symbol referencing errors. No output written to .libs/opal_wrapper
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p><p>The symbols hwloc_solaris_get_chip_model and hwloc_solaris_get_chip_type
<br>
are available in file
<br>
.../openmpi-1.9r28206/opal/mca/hwloc/hwloc152/hwloc/src/topology-solaris-chiptype.c
<br>
<p><p>They are also known in the library, but the symbols with the prefix
<br>
opal_hwloc152_ are unknown.
<br>
<p>tyr openmpi-1.9-SunOS.sparc.64_cc 152 cd opal/mca/hwloc/hwloc152/hwloc/src/.libs/
<br>
tyr .libs 153 nm libhwloc_embedded.a | grep get_chip
<br>
[145] |    0|   0|FUNC |GLOB |0 |UNDEF |opal_hwloc152_hwloc_solaris_get_chip_model
<br>
[146] |    0|   0|FUNC |GLOB |0 |UNDEF |opal_hwloc152_hwloc_solaris_get_chip_type
<br>
[28]  |  512| 256|OBJT |GLOB |0 |6     
<br>
|$XBnghrBxhwTRnTP.hwloc_solaris_get_chip_type.chip_type
<br>
[22]  | 3152| 220|FUNC |GLOB |2 |2     |hwloc_solaris_get_chip_model
<br>
[29]  | 2768| 356|FUNC |GLOB |2 |2     |hwloc_solaris_get_chip_type
<br>
<p>Perhaps this information helps to track down the error.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21608.php">Baptiste Robert: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Previous message:</strong> <a href="21606.php">Ralph Castain: "Re: [OMPI users] mpirun trouble through ssh"</a>
<li><strong>Maybe in reply to:</strong> <a href="21601.php">Siegmar Gross: "[OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21622.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
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
