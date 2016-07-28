<?
$subject_val = "Re: [OMPI devel] jenkins errors in origin/v1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 06:24:46 2014" -->
<!-- isoreceived="20140809102446" -->
<!-- sent="Sat, 9 Aug 2014 10:24:40 +0000" -->
<!-- isosent="20140809102440" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] jenkins errors in origin/v1.8" -->
<!-- id="B20FEB56-7986-43B0-81DA-F1A8E23FA04B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KybRYi6MCc+VfsBjNntDD7vZUUBwxdi88O4EEDiiqKR=JA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 06:24:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15585.php">Mike Dubman: "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>Previous message:</strong> <a href="15583.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>In reply to:</strong> <a href="15580.php">Mike Dubman: "[OMPI devel] jenkins errors in origin/v1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15585.php">Mike Dubman: "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>Reply:</strong> <a href="15585.php">Mike Dubman: "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed with Ralph's commit last night (r32480).
<br>
<p><p>On Aug 9, 2014, at 1:33 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt;   CC       base/odls_base_default_fns.lo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c: In function 'odls_base_default_wait_local_proc':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c:2001: warning: implicit declaration of function 'ORTE_FLAG_SET'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c:2001: error: 'ORTE_PROC_FLAG_WAITPID' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c:2001: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c:2001: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c:2004: warning: implicit declaration of function 'ORTE_FLAG_TEST'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c:2004: error: 'ORTE_PROC_FLAG_IOF_COMPLETE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c:2005: warning: implicit declaration of function 'ORTE_FLAG_UNSET'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; base/odls_base_default_fns.c:2005: error: 'ORTE_PROC_FLAG_ALIVE' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; make[2]: *** [base/odls_base_default_fns.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/orte/mca/odls'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/orte'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 02:36:30 
</span><br>
<span class="quotelev1">&gt; Build step 'Execute shell' marked build as failure
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15580.php">http://www.open-mpi.org/community/lists/devel/2014/08/15580.php</a>
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
<li><strong>Next message:</strong> <a href="15585.php">Mike Dubman: "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>Previous message:</strong> <a href="15583.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.2 still held up..."</a>
<li><strong>In reply to:</strong> <a href="15580.php">Mike Dubman: "[OMPI devel] jenkins errors in origin/v1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15585.php">Mike Dubman: "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>Reply:</strong> <a href="15585.php">Mike Dubman: "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
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
