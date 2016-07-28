<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 11 07:10:52 2010" -->
<!-- isoreceived="20100611111052" -->
<!-- sent="Fri, 11 Jun 2010 07:10:48 -0400" -->
<!-- isosent="20100611111048" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing" -->
<!-- id="5E93A42C-FF21-4F8F-89C8-0A9E76CD6038_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C12052C.2050106_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-11 07:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8099.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8097.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8097.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8099.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8099.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8101.php">Barrett, Brian W: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2010, at 5:43 AM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Interesting. Do you think this behavior of the linux kernel would
</span><br>
<span class="quotelev2">&gt; &gt; change if the file was unlink()ed after attach ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Jeff pointed out, the file IS unlinked by Open MPI, presumably to
</span><br>
<span class="quotelev1">&gt; ensure it is not left behind in case of abnormal termination.
</span><br>
<p>I have to admit that I lied.  :-(
<br>
<p>Sam and I were talking on the phone yesterday about the shm_open() stuff and to my chagrin, I discovered that the mmap'ed files are *not* unlinked in OMPI until MPI_FINALIZE.  I'm not actually sure why; I could have sworn that we unlinked them after everyone mmap'ed them...
<br>
<p>Regardless, Sam and I made good progress on the shm_open() stuff yesterday.  We should have something for Sylvain to test soon.  I believe that Sam is looking for the right place to put the shm_unlink() step so that we *don't* leave it around like we do with the mmap files.  I have a few more steps to do to add in the right silent-failover stuff, but we'll probably have something for Sylvain to test soon (final polish may be delayed a little because I'm on travel to the MPI Forum next week).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8099.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8097.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8097.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8099.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8099.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8101.php">Barrett, Brian W: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
