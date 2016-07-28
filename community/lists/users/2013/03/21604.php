<?
$subject_val = "Re: [OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 21:35:08 2013" -->
<!-- isoreceived="20130323013508" -->
<!-- sent="Fri, 22 Mar 2013 18:35:00 -0700" -->
<!-- isosent="20130323013500" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201" -->
<!-- id="B9BD3C8F-4952-4969-BC45-7C1E0D187F09_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 21:35:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21605.php">Baptiste Robert: "[OMPI users] mpirun trouble through ssh"</a>
<li><strong>Previous message:</strong> <a href="21603.php">Ralph Castain: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>In reply to:</strong> <a href="21600.php">Siegmar Gross: "[OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21621.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and 32-/64-bit mismatch in	openmpi-1.7rc8r28201"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 22, 2013, at 5:06 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `.../ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `.../ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p><p>For this one, just configure --disable-vt
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21605.php">Baptiste Robert: "[OMPI users] mpirun trouble through ssh"</a>
<li><strong>Previous message:</strong> <a href="21603.php">Ralph Castain: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>In reply to:</strong> <a href="21600.php">Siegmar Gross: "[OMPI users] seg fault and 32-/64-bit mismatch in openmpi-1.7rc8r28201"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21621.php">Jeff Squyres (jsquyres): "Re: [OMPI users] seg fault and 32-/64-bit mismatch in	openmpi-1.7rc8r28201"</a>
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
