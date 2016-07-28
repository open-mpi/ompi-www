<?
$subject_val = "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 11:31:05 2015" -->
<!-- isoreceived="20150629153105" -->
<!-- sent="Mon, 29 Jun 2015 17:31:01 +0200" -->
<!-- isosent="20150629153101" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?" -->
<!-- id="559164B5.30407_at_hpc2n.umu.se" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150629152721.GE1384_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 11:31:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27214.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Previous message:</strong> <a href="27212.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>In reply to:</strong> <a href="27212.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27214.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Reply:</strong> <a href="27214.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's what i said. The code in openmpi checks errno and not errnum.
<br>
<p>On 06/29/2015 05:27 PM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see a typo. You are checking errno instead of errnum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 29, 2015 at 01:28:11PM +0200, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static inline int ompi_mpi_errnum_is_class ( int errnum )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;      ompi_mpi_errcode_t *err;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      if (errno &lt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt;          return false;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume it should be errnum &lt; 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev2">&gt;&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
</span><br>
<span class="quotelev2">&gt;&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27208.php">http://www.open-mpi.org/community/lists/users/2015/06/27208.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27212.php">http://www.open-mpi.org/community/lists/users/2015/06/27212.php</a>
</span><br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27214.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Previous message:</strong> <a href="27212.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>In reply to:</strong> <a href="27212.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27214.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>Reply:</strong> <a href="27214.php">Nathan Hjelm: "Re: [OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
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
