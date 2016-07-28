<?
$subject_val = "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 11:41:25 2015" -->
<!-- isoreceived="20150629154125" -->
<!-- sent="Mon, 29 Jun 2015 17:41:22 +0200" -->
<!-- isosent="20150629154122" -->
<!-- name="&#195;&#133;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?" -->
<!-- id="55916722.8000808_at_hpc2n.umu.se" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1E1E20F1-FBE1-4E7B-BD86-447989955520_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?<br>
<strong>From:</strong> &#195;&#133;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 11:41:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27218.php">Åke Sandgren: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Previous message:</strong> <a href="27216.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27215.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27468.php">Ã…ke Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The interesting thing is that gcc/intel/portland all failed to detect 
<br>
this. Pathscale found it, and clang probably would.
<br>
<p>On 06/29/2015 05:37 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Good catch; fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 29, 2015, at 7:28 AM, &#195;&#133;ke Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static inline int ompi_mpi_errnum_is_class ( int errnum )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_mpi_errcode_t *err;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if (errno &lt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt;         return false;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume it should be errnum &lt; 0.
</span><br>
<p><p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27218.php">Åke Sandgren: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>Previous message:</strong> <a href="27216.php">Nathan Hjelm: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27215.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27468.php">Ã…ke Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
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
