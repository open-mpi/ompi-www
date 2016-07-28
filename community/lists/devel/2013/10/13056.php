<?
$subject_val = "Re: [OMPI devel] oshmem 32 bit compile failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  4 13:58:45 2013" -->
<!-- isoreceived="20131004175845" -->
<!-- sent="Fri, 4 Oct 2013 17:58:44 +0000" -->
<!-- isosent="20131004175844" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem 32 bit compile failures" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F91F052_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KybQazPnvTCyUQWeT3hiSSmNUzmt88hP8JCckxBKPGTsLQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem 32 bit compile failures<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-04 13:58:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13057.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Previous message:</strong> <a href="13055.php">Mike Dubman: "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>In reply to:</strong> <a href="13055.php">Mike Dubman: "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 4, 2013, at 1:51 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; the code passes compilation with gcc/icc 32bit toolkits.
</span><br>
<span class="quotelev1">&gt; We don`t have absoft fortran compiler in the lab, is there any way we can have it to try?
</span><br>
<p>No -- Absoft themselves run the test and simply upload to our MTT (i.e., I don't have an Absoft license).
<br>
<p>However, note that this problem is not in the Fortran code (Absoft is a Fortran-only compiler; it uses gcc/g++ for C/C++).  It says that it is using gcc 4.1.2.  Can you try a 32 bit build with gcc 4.1.x?
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
<li><strong>Next message:</strong> <a href="13057.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.x support statement"</a>
<li><strong>Previous message:</strong> <a href="13055.php">Mike Dubman: "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
<li><strong>In reply to:</strong> <a href="13055.php">Mike Dubman: "Re: [OMPI devel] oshmem 32 bit compile failures"</a>
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
