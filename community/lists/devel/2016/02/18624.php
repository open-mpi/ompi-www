<?
$subject_val = "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 16:52:50 2016" -->
<!-- isoreceived="20160225215250" -->
<!-- sent="Thu, 25 Feb 2016 21:52:49 +0000" -->
<!-- isosent="20160225215249" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)" -->
<!-- id="EBC063F2-318A-4EDC-8CB3-DA598903F3E3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17a2BSExmOijYMsd2nhoMhzuxOD5Su-4g9xz+QVgY2r_A_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 16:52:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18625.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="18623.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18623.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18647.php">Nathan Hjelm: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18647.php">Nathan Hjelm: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Feb 25, 2016, at 3:39 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A &quot;bare&quot; function name (without parens) is the address of the function, which can be converted to an int, long, etc.
</span><br>
<span class="quotelev1">&gt; So the &quot;rank&quot; identifier can validly refer to the function in this context.
</span><br>
<p>I understand that there's logic behind this.  But it's still crazy to me that:
<br>
<p>-----
<br>
int foo(void) {
<br>
&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;printf(&quot;Value: %d&quot;, rank);
<br>
}
<br>
-----
<br>
<p>is ambiguous.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18625.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="18623.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18623.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18647.php">Nathan Hjelm: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18647.php">Nathan Hjelm: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
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
