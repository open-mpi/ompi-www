<?
$subject_val = "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 14:30:42 2014" -->
<!-- isoreceived="20140808183042" -->
<!-- sent="Fri, 8 Aug 2014 14:30:40 -0400" -->
<!-- isosent="20140808183040" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC" -->
<!-- id="CAMJJpkXPtFTYZH6qzgzYXv9S=Ku37KaxUF-rn6TWcp9OfcnhFw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="294632BF-F096-41A6-8A43-6E8CE9339E08_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 14:30:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15566.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link	on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="15564.php">George Bosilca: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="15563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link	on	Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15566.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link	on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15566.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link	on Solaris-10/SPARC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r32467 should fix the problem.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, Aug 8, 2014 at 1:20 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; That'll do it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George: can you fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 8, 2014, at 1:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think it might be getting pulled in from this include:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; opal/mca/common/sm/common_sm.h:37:#include &quot;ompi/group/group.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 8, 2014, at 5:33 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Weirdness; I don't see any name like that in the SM BTL.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I see it used in the OMPI layer... not sure how it's being using down
</span><br>
<span class="quotelev1">&gt; in the btl SM component file...?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 7, 2014, at 11:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Testing r32448 on trunk for trac issue #4834, I encounter the
</span><br>
<span class="quotelev1">&gt; following which appears unrelated to #4834:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  CCLD     orte-info
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Undefined                       first referenced
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; symbol                             in file
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_proc_local_proc
</span><br>
<span class="quotelev1">&gt;  /sandbox/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u3-v9-static/BLD/opal/.libs/libopen-pal.a(libmca_btl_sm_la-btl_sm_component.o)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ld: fatal: Symbol referencing errors. No output written to orte-info
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Note that this is *static* linking.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This appears to indicate a call from OPAL to OMPI, and I am guessing
</span><br>
<span class="quotelev1">&gt; this is a side-effect of the BTL move.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Since OMPI contains (many) calls to OPAL this is a circular library
</span><br>
<span class="quotelev1">&gt; dependence.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Unfortunately, some linkers process their argument strictly
</span><br>
<span class="quotelev1">&gt; left-to-right.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thus if this dependence is not eliminated one may need &quot;-lmpi
</span><br>
<span class="quotelev1">&gt; -lopen-pal -lmpi&quot; (or similar) to resolve it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15565/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15566.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link	on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="15564.php">George Bosilca: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="15563.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link	on	Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15566.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link	on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15566.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link	on Solaris-10/SPARC"</a>
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
