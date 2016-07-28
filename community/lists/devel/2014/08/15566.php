<?
$subject_val = "Re: [OMPI devel] circular library dependence prevents static link	on Solaris-10/SPARC";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 14:39:12 2014" -->
<!-- isoreceived="20140808183912" -->
<!-- sent="Fri, 8 Aug 2014 18:39:10 +0000" -->
<!-- isosent="20140808183910" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] circular library dependence prevents static link	on Solaris-10/SPARC" -->
<!-- id="C54E34D4-0F72-4BE5-83C7-B8D1075695DF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkXPtFTYZH6qzgzYXv9S=Ku37KaxUF-rn6TWcp9OfcnhFw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] circular library dependence prevents static link	on Solaris-10/SPARC<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 14:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15567.php">Paul Hargrove: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="15565.php">George Bosilca: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="15565.php">George Bosilca: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15567.php">Paul Hargrove: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15567.php">Paul Hargrove: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>On Aug 8, 2014, at 2:30 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; r32467 should fix the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 8, 2014 at 1:20 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; That'll do it...
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
<span class="quotelev2">&gt; &gt; On Aug 8, 2014, at 5:33 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Weirdness; I don't see any name like that in the SM BTL.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I see it used in the OMPI layer... not sure how it's being using down in the btl SM component file...?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 7, 2014, at 11:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Testing r32448 on trunk for trac issue #4834, I encounter the following which appears unrelated to #4834:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  CCLD     orte-info
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Undefined                       first referenced
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; symbol                             in file
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_proc_local_proc                /sandbox/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u3-v9-static/BLD/opal/.libs/libopen-pal.a(libmca_btl_sm_la-btl_sm_component.o)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ld: fatal: Symbol referencing errors. No output written to orte-info
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Note that this is *static* linking.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; This appears to indicate a call from OPAL to OMPI, and I am guessing this is a side-effect of the BTL move.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Since OMPI contains (many) calls to OPAL this is a circular library dependence.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Unfortunately, some linkers process their argument strictly left-to-right.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thus if this dependence is not eliminated one may need &quot;-lmpi -lopen-pal -lmpi&quot; (or similar) to resolve it.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15565.php">http://www.open-mpi.org/community/lists/devel/2014/08/15565.php</a>
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
<li><strong>Next message:</strong> <a href="15567.php">Paul Hargrove: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="15565.php">George Bosilca: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<li><strong>In reply to:</strong> <a href="15565.php">George Bosilca: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15567.php">Paul Hargrove: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15567.php">Paul Hargrove: "Re: [OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
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
