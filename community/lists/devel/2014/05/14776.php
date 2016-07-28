<?
$subject_val = "Re: [OMPI devel] scif btl side effects";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 18:06:39 2014" -->
<!-- isoreceived="20140512220639" -->
<!-- sent="Mon, 12 May 2014 16:06:38 -0600" -->
<!-- isosent="20140512220638" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] scif btl side effects" -->
<!-- id="20140512220638.GC93343_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AB666F57-5EF4-485D-9B3E-483D4F3BAB14_at_cisco.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-12 18:06:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14777.php">Joshua Ladd: "Re: [OMPI devel] OMPI v1.8.x git tags?"</a>
<li><strong>Previous message:</strong> <a href="14775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI v1.8.x git tags?"</a>
<li><strong>In reply to:</strong> <a href="14773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] scif btl side effects"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, thats good to know. I have no problem with Gilles committing these
<br>
sorts of fixes to my components. I went ahead and committed this one
<br>
myself though.
<br>
<p>-Nathan
<br>
<p>On Mon, May 12, 2014 at 01:29:50PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; FWIW, Gilles has singed the OMPI IP agreement, has demonstrated care and knowledge of the OMPI code base, and is an OMPI SVN committer now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just be aware that Gilles is about 12 hours off from North America.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 12, 2014, at 9:13 AM, &quot;Hjelm, Nathan T&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hah. Thanks for catching that. I will commit your patch later today.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; ________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; From: devel [devel-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Monday, May 12, 2014 4:42 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] scif btl side effects
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; i wrote this too early ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; the attached program produces incorrect results when ran with
</span><br>
<span class="quotelev2">&gt; &gt; --mca btl scif,vader,self
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; once the most up-to-date patch of #4610 has been applied, (at least) one
</span><br>
<span class="quotelev2">&gt; &gt; bug remain, and it is in the scif btl
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; the attached patch fixes it.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 2014/05/12 16:17, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nathan,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 2014/05/08 4:21, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; c) that being said, that should work so there is a bug
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; d) there is a regression in v1.8 and a bug that might have been always here
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This is probably not a regression. The SCIF btl has been part of the 1.7 series for some time. The nightly MTTs are probably missing one of the cases that causes this problem. Hopefully we can get this fixed before 1.8.2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; as explained in #4610 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/4610">https://svn.open-mpi.org/trac/ompi/ticket/4610</a>)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the root cause is in the way data are unpacked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The scif btl is ok :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; when using --mca btl scif,self fragments can be received out of order,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and that can trigger a bug introduced by r31496
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that being said, --mca btl scif,vader,self does not work with r31496
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reverted.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the root cause is an other bug in the way data are unpacked, it happen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; also when fragments are received out of order
</span><br>
<span class="quotelev3">&gt; &gt;&gt; *and* fragments contain a subpart of a predefined datatype.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in this case, the vader btl received a fragment of size 1325 *and* out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of order and that caused the bug.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14772.php">http://www.open-mpi.org/community/lists/devel/2014/05/14772.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14773.php">http://www.open-mpi.org/community/lists/devel/2014/05/14773.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14776/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14777.php">Joshua Ladd: "Re: [OMPI devel] OMPI v1.8.x git tags?"</a>
<li><strong>Previous message:</strong> <a href="14775.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI v1.8.x git tags?"</a>
<li><strong>In reply to:</strong> <a href="14773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] scif btl side effects"</a>
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
