<?
$subject_val = "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 11:27:22 2015" -->
<!-- isoreceived="20150629152722" -->
<!-- sent="Mon, 29 Jun 2015 09:27:21 -0600" -->
<!-- isosent="20150629152721" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?" -->
<!-- id="20150629152721.GE1384_at_pn1246003.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="55912BCB.10803_at_hpc2n.umu.se" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 11:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27213.php">흆e Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Previous message:</strong> <a href="27211.php">&#195;&#133;ke Sandgren: "[OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27208.php">&#195;&#133;ke Sandgren: "[OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27213.php">흆e Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Reply:</strong> <a href="27213.php">흆e Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see a typo. You are checking errno instead of errnum.
<br>
<p>-Nathan
<br>
<p>On Mon, Jun 29, 2015 at 01:28:11PM +0200, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static inline int ompi_mpi_errnum_is_class ( int errnum )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     ompi_mpi_errcode_t *err;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (errno &lt; 0) {
</span><br>
<span class="quotelev1">&gt;         return false;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume it should be errnum &lt; 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27208.php">http://www.open-mpi.org/community/lists/users/2015/06/27208.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27212/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27213.php">흆e Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Previous message:</strong> <a href="27211.php">&#195;&#133;ke Sandgren: "[OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<li><strong>In reply to:</strong> <a href="27208.php">&#195;&#133;ke Sandgren: "[OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27213.php">흆e Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Reply:</strong> <a href="27213.php">흆e Sandgren: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
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
