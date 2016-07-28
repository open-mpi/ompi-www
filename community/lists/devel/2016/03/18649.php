<?
$subject_val = "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 20:11:39 2016" -->
<!-- isoreceived="20160302011139" -->
<!-- sent="Wed, 2 Mar 2016 10:11:38 +0900" -->
<!-- isosent="20160302011138" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)" -->
<!-- id="56D63DCA.8070600_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20160301160202.GD20615_at_mordor.lanl.gov" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 20:11:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18650.php">George Bosilca: "Re: [OMPI devel] component progress function optional?"</a>
<li><strong>Previous message:</strong> <a href="18648.php">dpchoudh .: "[OMPI devel] component progress function optional?"</a>
<li><strong>In reply to:</strong> <a href="18647.php">Nathan Hjelm: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18621.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
fwiw
<br>
<p>in a previous thread, Jeff Hammond explained this is why mpich is 
<br>
relying on C89 instead of C99,
<br>
since C89 appears to be a subset of C++11.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/2/2016 1:02 AM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; I will add to how crazy this is. The C standard has been very careful
</span><br>
<span class="quotelev1">&gt; to not break existing code. For example the C99 boolean is _Bool not
</span><br>
<span class="quotelev1">&gt; bool because C reserves _[A-Z]* for its own use. This means a valid C89
</span><br>
<span class="quotelev1">&gt; program is a valid C99 and C11 program. It Look like this is not true in
</span><br>
<span class="quotelev1">&gt; C++.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 25, 2016 at 09:52:49PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 25, 2016, at 3:39 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A &quot;bare&quot; function name (without parens) is the address of the function, which can be converted to an int, long, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the &quot;rank&quot; identifier can validly refer to the function in this context.
</span><br>
<span class="quotelev2">&gt;&gt; I understand that there's logic behind this.  But it's still crazy to me that:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; int foo(void) {
</span><br>
<span class="quotelev2">&gt;&gt;    int rank;
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;Value: %d&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is ambiguous.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18624.php">http://www.open-mpi.org/community/lists/devel/2016/02/18624.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18647.php">http://www.open-mpi.org/community/lists/devel/2016/03/18647.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18650.php">George Bosilca: "Re: [OMPI devel] component progress function optional?"</a>
<li><strong>Previous message:</strong> <a href="18648.php">dpchoudh .: "[OMPI devel] component progress function optional?"</a>
<li><strong>In reply to:</strong> <a href="18647.php">Nathan Hjelm: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18621.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
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
