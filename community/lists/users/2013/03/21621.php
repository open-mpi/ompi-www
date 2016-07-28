<?
$subject_val = "Re: [OMPI users] seg fault and 32-/64-bit mismatch in	openmpi-1.7rc8r28201";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 18:06:45 2013" -->
<!-- isoreceived="20130326220645" -->
<!-- sent="Tue, 26 Mar 2013 22:06:40 +0000" -->
<!-- isosent="20130326220640" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault and 32-/64-bit mismatch in	openmpi-1.7rc8r28201" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC8072_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201303221206.r2MC6bmK000475_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] seg fault and 32-/64-bit mismatch in	openmpi-1.7rc8r28201<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 18:06:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21622.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>Previous message:</strong> <a href="21620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>In reply to:</strong> <a href="21600.php">Siegmar Gross: "[OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 22, 2013, at 8:06 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; openSuSE Linux 12.1, x86_64, SunC 5.12, 32-bit
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.7-Linux.x86_64.32_cc 547 tail log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; Making all in mpi/fortran/use-mpi-f08
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `.../ompi/mpi/fortran/use-mpi-f08'
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08-sizeof.lo
</span><br>
<span class="quotelev1">&gt;  PPFC     mpi-f08.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.7rc8r28201/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;,
</span><br>
<span class="quotelev1">&gt;  Line = 1, Column = 1: INTERNAL: Interrupt: Segmentation fault
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi-f08.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../ompi/mpi/fortran/use-mpi-f08'
</span><br>
<p>For this one, it looks like your Fortran compiler is borked (i.e., it's seg faulting!).  You might want to --disable-mpi-fortran.  This will make your build faster, too.  :-)
<br>
<p><span class="quotelev1">&gt; Solaris 10, x86_64 and sparc, SunC 5.12, 64-bit
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.7-SunOS.x86_64.64_cc 565 tail -15 log.make.SunOS.x86_64.64_cc
</span><br>
<span class="quotelev1">&gt;  F77      libvt_fmpi_la-vt_fmpiconst_2.lo
</span><br>
<span class="quotelev1">&gt;  F77LD    libvt-fmpi.la
</span><br>
<span class="quotelev1">&gt; ld: fatal: file .libs/libvt_fmpi_la-vt_fmpiconst_1.o: wrong ELF class: 
</span><br>
<span class="quotelev1">&gt; ELFCLASS32
</span><br>
<span class="quotelev1">&gt; ld: fatal: file processing errors. No output written to 
</span><br>
<span class="quotelev1">&gt; .libs/libvt-fmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; make[5]: *** [libvt-fmpi.la] Error 2
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `.../ompi/contrib/vt/vt/vtlib'
</span><br>
<p>I pinged the VT guys about your other post -- they don't always keep a close watch in the OMPI users list, and sometimes rely on an out-of-band nudge to get a reply.  But when they're nudged (which they just were), they're pretty good about replying.
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
<li><strong>Next message:</strong> <a href="21622.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and undefined symbol in openmpi-1.9r28203"</a>
<li><strong>Previous message:</strong> <a href="21620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>In reply to:</strong> <a href="21600.php">Siegmar Gross: "[OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
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
