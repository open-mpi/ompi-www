<?
$subject_val = "Re: [OMPI devel] jenkins errors in origin/v1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 07:50:59 2014" -->
<!-- isoreceived="20140809115059" -->
<!-- sent="Sat, 9 Aug 2014 14:50:57 +0300" -->
<!-- isosent="20140809115057" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] jenkins errors in origin/v1.8" -->
<!-- id="CAAO1KybGZ-h3LBbiaF=5gVMkbdqbD5ZuimCV11aJ+C_kagWVSw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B20FEB56-7986-43B0-81DA-F1A8E23FA04B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] jenkins errors in origin/v1.8<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 07:50:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15586.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v1.8] illegal commas after last item in enum"</a>
<li><strong>Previous message:</strong> <a href="15584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>In reply to:</strong> <a href="15584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yep, missed &quot;green&quot; report.
<br>
Thanks
<br>
<p><p>On Sat, Aug 9, 2014 at 1:24 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Fixed with Ralph's commit last night (r32480).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 9, 2014, at 1:33 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt;   CC       base/odls_base_default_fns.lo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; base/odls_base_default_fns.c: In function
</span><br>
<span class="quotelev1">&gt; 'odls_base_default_wait_local_proc':
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; base/odls_base_default_fns.c:2001: warning: implicit declaration of
</span><br>
<span class="quotelev1">&gt; function 'ORTE_FLAG_SET'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; base/odls_base_default_fns.c:2001: error: 'ORTE_PROC_FLAG_WAITPID'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; base/odls_base_default_fns.c:2001: error: (Each undeclared identifier is
</span><br>
<span class="quotelev1">&gt; reported only once
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; base/odls_base_default_fns.c:2001: error: for each function it appears
</span><br>
<span class="quotelev1">&gt; in.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; base/odls_base_default_fns.c:2004: warning: implicit declaration of
</span><br>
<span class="quotelev1">&gt; function 'ORTE_FLAG_TEST'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; base/odls_base_default_fns.c:2004: error: 'ORTE_PROC_FLAG_IOF_COMPLETE'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; base/odls_base_default_fns.c:2005: warning: implicit declaration of
</span><br>
<span class="quotelev1">&gt; function 'ORTE_FLAG_UNSET'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; base/odls_base_default_fns.c:2005: error: 'ORTE_PROC_FLAG_ALIVE'
</span><br>
<span class="quotelev1">&gt; undeclared (first use in this function)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [base/odls_base_default_fns.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/orte/mca/odls'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/orte'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 02:36:30
</span><br>
<span class="quotelev2">&gt; &gt; Build step 'Execute shell' marked build as failure
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15580.php">http://www.open-mpi.org/community/lists/devel/2014/08/15580.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15584.php">http://www.open-mpi.org/community/lists/devel/2014/08/15584.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15585/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15586.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [v1.8] illegal commas after last item in enum"</a>
<li><strong>Previous message:</strong> <a href="15584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>In reply to:</strong> <a href="15584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
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
