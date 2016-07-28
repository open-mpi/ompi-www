<?
$subject_val = "Re: [OMPI devel] scif btl side effects";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 09:13:05 2014" -->
<!-- isoreceived="20140512131305" -->
<!-- sent="Mon, 12 May 2014 13:13:03 +0000" -->
<!-- isosent="20140512131303" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] scif btl side effects" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A8AFF2B_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5370A57B.6040206_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] scif btl side effects<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-12 09:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Previous message:</strong> <a href="14771.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>In reply to:</strong> <a href="14771.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Reply:</strong> <a href="14773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] scif btl side effects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hah. Thanks for catching that. I will commit your patch later today.
<br>
<p>-Nathan
<br>
________________________________________
<br>
From: devel [devel-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
<br>
Sent: Monday, May 12, 2014 4:42 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] scif btl side effects
<br>
<p>i wrote this too early ...
<br>
<p>the attached program produces incorrect results when ran with
<br>
--mca btl scif,vader,self
<br>
<p>once the most up-to-date patch of #4610 has been applied, (at least) one
<br>
bug remain, and it is in the scif btl
<br>
<p>the attached patch fixes it.
<br>
<p>Gilles
<br>
<p>On 2014/05/12 16:17, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/05/08 4:21, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev2">&gt;&gt; c) that being said, that should work so there is a bug
</span><br>
<span class="quotelev2">&gt;&gt; d) there is a regression in v1.8 and a bug that might have been always here
</span><br>
<span class="quotelev2">&gt;&gt; This is probably not a regression. The SCIF btl has been part of the 1.7 series for some time. The nightly MTTs are probably missing one of the cases that causes this problem. Hopefully we can get this fixed before 1.8.2.
</span><br>
<span class="quotelev1">&gt; as explained in #4610 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/4610">https://svn.open-mpi.org/trac/ompi/ticket/4610</a>)
</span><br>
<span class="quotelev1">&gt; the root cause is in the way data are unpacked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The scif btl is ok :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when using --mca btl scif,self fragments can be received out of order,
</span><br>
<span class="quotelev1">&gt; and that can trigger a bug introduced by r31496
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that being said, --mca btl scif,vader,self does not work with r31496
</span><br>
<span class="quotelev1">&gt; reverted.
</span><br>
<span class="quotelev1">&gt; the root cause is an other bug in the way data are unpacked, it happen
</span><br>
<span class="quotelev1">&gt; also when fragments are received out of order
</span><br>
<span class="quotelev1">&gt; *and* fragments contain a subpart of a predefined datatype.
</span><br>
<span class="quotelev1">&gt; in this case, the vader btl received a fragment of size 1325 *and* out
</span><br>
<span class="quotelev1">&gt; of order and that caused the bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Previous message:</strong> <a href="14771.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>In reply to:</strong> <a href="14771.php">Gilles Gouaillardet: "Re: [OMPI devel] scif btl side effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Reply:</strong> <a href="14773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] scif btl side effects"</a>
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
