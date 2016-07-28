<?
$subject_val = "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 20:53:48 2013" -->
<!-- isoreceived="20130327005348" -->
<!-- sent="Wed, 27 Mar 2013 00:53:44 +0000" -->
<!-- isosent="20130327005344" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC8769_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201303221234.r2MCYkoe000551_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 20:53:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21623.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
<li><strong>Previous message:</strong> <a href="21621.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and 32-/64-bit mismatch in	openmpi-1.7rc8r28201"</a>
<li><strong>In reply to:</strong> <a href="21601.php">Siegmar Gross: "[OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 22, 2013, at 8:34 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; openSuSE Linux 12.1, x86_64, SunC 5.12, 32-bit
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-1.9-Linux.x86_64.32_cc 113 tail log.make.Linux.x86_64.32_cc 
</span><br>
<span class="quotelev1">&gt; Making all in mpi/fortran/use-mpi-f08
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `.../ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-sizeof.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9r28203/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;,
</span><br>
<span class="quotelev1">&gt;  Line = 1, Column = 1: INTERNAL: Interrupt: Segmentation fault
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi-f08.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p>Just to follow up on this thread for the web archives: I think we're talking about this error in a different thread (because we were too slow to answer this one -- sorry!).  It looks to me like a compiler error.
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
<span class="quotelev1">&gt;  CC       opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9r28203/opal/include/opal/sys/ia32/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt;  line 173: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../openmpi-1.9r28203/opal/include/opal/sys/ia32/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt;  line 193: warning: parameter in inline asm statement unused: %2
</span><br>
<span class="quotelev1">&gt;  CCLD     opal_wrapper
</span><br>
<span class="quotelev1">&gt; Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt; symbol                             in file
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
<p>This one was fixed today on the OMPI trunk at SVN r28215.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21623.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Persistent Communication using MPI_SEND_INIT, MPI_RECV_INIT etc."</a>
<li><strong>Previous message:</strong> <a href="21621.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and 32-/64-bit mismatch in	openmpi-1.7rc8r28201"</a>
<li><strong>In reply to:</strong> <a href="21601.php">Siegmar Gross: "[OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
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
