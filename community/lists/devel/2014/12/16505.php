<?
$subject_val = "Re: [OMPI devel] still supporting pgi?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 11:04:13 2014" -->
<!-- isoreceived="20141211160413" -->
<!-- sent="Thu, 11 Dec 2014 09:04:12 -0700" -->
<!-- isosent="20141211160412" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] still supporting pgi?" -->
<!-- id="20141211160412.GD31431_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj5Xz7fRuv-jK_YQNJXEPijT3pGDCh0iR8p9EH1=9cmDTw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] still supporting pgi?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 11:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16506.php">Howard Pritchard: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16504.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16502.php">Howard Pritchard: "[OMPI devel] still supporting pgi?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 11, 2014 at 07:37:17AM -0800, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt;    Hi Folks,
</span><br>
<span class="quotelev1">&gt;    I'm trying to use mtt on a cluster where it looks like the only functional
</span><br>
<span class="quotelev1">&gt;    compiler that
</span><br>
<span class="quotelev1">&gt;    1) can build open mpi master
</span><br>
<span class="quotelev1">&gt;    2) can also build the ibm test suite
</span><br>
<span class="quotelev1">&gt;    may be pgi.  Can't compile write now, so I'm trying to fix it.  But I'm
</span><br>
<span class="quotelev1">&gt;    now wondering
</span><br>
<span class="quotelev1">&gt;    whether we are still supporting building open mpi with pgi compilers?  I'm
</span><br>
<span class="quotelev1">&gt;    using pgi
</span><br>
<span class="quotelev1">&gt;    14.4.
</span><br>
<p>It *should* work but it really depends on if pgi fixed any of the
<br>
libnuma problems we complained about years ago. They have (had?) an
<br>
internal broken version of libnuma they use for their OpenMP stuff. We
<br>
had to build with -Mnoopenmp to get it to work at all. I got so fed up
<br>
with pgi that I dropped all support for using it with Open MPI on
<br>
Cielo. That said, now that pgi is part of nvidia things may be better
<br>
now.
<br>
<p>I would check with HPC-3 and see how they build with pgi on our other
<br>
systems.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16505/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16506.php">Howard Pritchard: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16504.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16502.php">Howard Pritchard: "[OMPI devel] still supporting pgi?"</a>
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
