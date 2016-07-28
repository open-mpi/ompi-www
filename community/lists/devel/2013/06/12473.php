<?
$subject_val = "Re: [OMPI devel] two questions about 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 11:56:36 2013" -->
<!-- isoreceived="20130619155636" -->
<!-- sent="Wed, 19 Jun 2013 15:56:26 +0000" -->
<!-- isosent="20130619155626" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] two questions about 1.7.1" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F690DC4_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F690545_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] two questions about 1.7.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 11:56:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12474.php">George Bosilca: "Re: [OMPI devel] BTL sendi"</a>
<li><strong>Previous message:</strong> <a href="12472.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="12472.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 19, 2013, at 9:26 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; How did you configure/compile Open MPI?
</span><br>
<p><p>Paul replied with his configure line off-list; I see the issue.  
<br>
<p>The printf is in an example MPI extension that is not meant to be compiled into a production build of Open MPI.  The solution is to ignore that extension via a trivial .ompi_ignore file.
<br>
<p>I'll add it to the trunk and CMR it over to v1.7.  Thanks Paul!
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
<li><strong>Next message:</strong> <a href="12474.php">George Bosilca: "Re: [OMPI devel] BTL sendi"</a>
<li><strong>Previous message:</strong> <a href="12472.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="12472.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
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
