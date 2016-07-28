<?
$subject_val = "Re: [OMPI devel] scif btl side effects";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 09:29:51 2014" -->
<!-- isoreceived="20140512132951" -->
<!-- sent="Mon, 12 May 2014 13:29:50 +0000" -->
<!-- isosent="20140512132950" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] scif btl side effects" -->
<!-- id="AB666F57-5EF4-485D-9B3E-483D4F3BAB14_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8AFF2B_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-12 09:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14774.php">Friedley, Andrew: "[OMPI devel] OMPI v1.8.x git tags?"</a>
<li><strong>Previous message:</strong> <a href="14772.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>In reply to:</strong> <a href="14772.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14776.php">Nathan Hjelm: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Reply:</strong> <a href="14776.php">Nathan Hjelm: "Re: [OMPI devel] scif btl side effects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, Gilles has singed the OMPI IP agreement, has demonstrated care and knowledge of the OMPI code base, and is an OMPI SVN committer now.
<br>
<p>Just be aware that Gilles is about 12 hours off from North America.
<br>
<p><p><p>On May 12, 2014, at 9:13 AM, &quot;Hjelm, Nathan T&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hah. Thanks for catching that. I will commit your patch later today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: devel [devel-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, May 12, 2014 4:42 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] scif btl side effects
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i wrote this too early ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the attached program produces incorrect results when ran with
</span><br>
<span class="quotelev1">&gt; --mca btl scif,vader,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; once the most up-to-date patch of #4610 has been applied, (at least) one
</span><br>
<span class="quotelev1">&gt; bug remain, and it is in the scif btl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the attached patch fixes it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/05/12 16:17, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Nathan,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/05/08 4:21, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c) that being said, that should work so there is a bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; d) there is a regression in v1.8 and a bug that might have been always here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is probably not a regression. The SCIF btl has been part of the 1.7 series for some time. The nightly MTTs are probably missing one of the cases that causes this problem. Hopefully we can get this fixed before 1.8.2.
</span><br>
<span class="quotelev2">&gt;&gt; as explained in #4610 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/4610">https://svn.open-mpi.org/trac/ompi/ticket/4610</a>)
</span><br>
<span class="quotelev2">&gt;&gt; the root cause is in the way data are unpacked.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The scif btl is ok :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; when using --mca btl scif,self fragments can be received out of order,
</span><br>
<span class="quotelev2">&gt;&gt; and that can trigger a bug introduced by r31496
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; that being said, --mca btl scif,vader,self does not work with r31496
</span><br>
<span class="quotelev2">&gt;&gt; reverted.
</span><br>
<span class="quotelev2">&gt;&gt; the root cause is an other bug in the way data are unpacked, it happen
</span><br>
<span class="quotelev2">&gt;&gt; also when fragments are received out of order
</span><br>
<span class="quotelev2">&gt;&gt; *and* fragments contain a subpart of a predefined datatype.
</span><br>
<span class="quotelev2">&gt;&gt; in this case, the vader btl received a fragment of size 1325 *and* out
</span><br>
<span class="quotelev2">&gt;&gt; of order and that caused the bug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14772.php">http://www.open-mpi.org/community/lists/devel/2014/05/14772.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14774.php">Friedley, Andrew: "[OMPI devel] OMPI v1.8.x git tags?"</a>
<li><strong>Previous message:</strong> <a href="14772.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>In reply to:</strong> <a href="14772.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14776.php">Nathan Hjelm: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Reply:</strong> <a href="14776.php">Nathan Hjelm: "Re: [OMPI devel] scif btl side effects"</a>
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
