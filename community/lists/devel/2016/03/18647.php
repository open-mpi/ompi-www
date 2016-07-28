<?
$subject_val = "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 11:02:09 2016" -->
<!-- isoreceived="20160301160209" -->
<!-- sent="Tue, 1 Mar 2016 09:02:02 -0700" -->
<!-- isosent="20160301160202" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)" -->
<!-- id="20160301160202.GD20615_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EBC063F2-318A-4EDC-8CB3-DA598903F3E3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 11:02:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18648.php">dpchoudh .: "[OMPI devel] component progress function optional?"</a>
<li><strong>Previous message:</strong> <a href="18646.php">Gilles Gouaillardet: "Re: [OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18624.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18649.php">Gilles Gouaillardet: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Reply:</strong> <a href="18649.php">Gilles Gouaillardet: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will add to how crazy this is. The C standard has been very careful
<br>
to not break existing code. For example the C99 boolean is _Bool not
<br>
bool because C reserves _[A-Z]* for its own use. This means a valid C89
<br>
program is a valid C99 and C11 program. It Look like this is not true in
<br>
C++.
<br>
<p>-Nathan
<br>
<p>On Thu, Feb 25, 2016 at 09:52:49PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev2">&gt; &gt; On Feb 25, 2016, at 3:39 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A &quot;bare&quot; function name (without parens) is the address of the function, which can be converted to an int, long, etc.
</span><br>
<span class="quotelev2">&gt; &gt; So the &quot;rank&quot; identifier can validly refer to the function in this context.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand that there's logic behind this.  But it's still crazy to me that:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; int foo(void) {
</span><br>
<span class="quotelev1">&gt;   int rank;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Value: %d&quot;, rank);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is ambiguous.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18624.php">http://www.open-mpi.org/community/lists/devel/2016/02/18624.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18647/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18648.php">dpchoudh .: "[OMPI devel] component progress function optional?"</a>
<li><strong>Previous message:</strong> <a href="18646.php">Gilles Gouaillardet: "Re: [OMPI devel] Segmentation fault in opal_fifo (MTT)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18624.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18649.php">Gilles Gouaillardet: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Reply:</strong> <a href="18649.php">Gilles Gouaillardet: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
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
