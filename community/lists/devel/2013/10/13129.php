<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29519 - trunk/oshmem/mca/atomic/mxm";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 25 10:55:04 2013" -->
<!-- isoreceived="20131025145504" -->
<!-- sent="Fri, 25 Oct 2013 14:55:03 +0000" -->
<!-- isosent="20131025145503" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29519 - trunk/oshmem/mca/atomic/mxm" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9909C9_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131025143938.4B7301610F1_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29519 - trunk/oshmem/mca/atomic/mxm<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-25 10:55:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13130.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem vs. oshmem"</a>
<li><strong>Previous message:</strong> <a href="13128.php">George Bosilca: "Re: [OMPI devel] Developer's guide to OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>Don't forget the close the bug (#3845).
<br>
<p><p>On Oct 25, 2013, at 10:39 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-10-25 10:39:37 EDT (Fri, 25 Oct 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29519
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29519">https://svn.open-mpi.org/trac/ompi/changeset/29519</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fix autogen warn, fixed by Roman, reviewed by miked
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/oshmem/mca/atomic/mxm/configure.m4 |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/oshmem/mca/atomic/mxm/configure.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/oshmem/mca/atomic/mxm/configure.m4	Fri Oct 25 01:25:41 2013	(r29518)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/mca/atomic/mxm/configure.m4	2013-10-25 10:39:37 EDT (Fri, 25 Oct 2013)	(r29519)
</span><br>
<span class="quotelev1">&gt; @@ -21,7 +21,7 @@
</span><br>
<span class="quotelev1">&gt;                    CPPFLAGS=&quot;$CPPFLAGS -I$ompi_check_mxm_dir/include&quot;
</span><br>
<span class="quotelev1">&gt;                    LDFLAGS=&quot;$LDFLAGS -L$ompi_check_mxm_dir/lib&quot;
</span><br>
<span class="quotelev1">&gt;                    LIBS=&quot;$LIBS -lmxm&quot;
</span><br>
<span class="quotelev1">&gt; -                   AC_COMPILE_IFELSE([
</span><br>
<span class="quotelev1">&gt; +                   AC_COMPILE_IFELSE([AC_LANG_SOURCE([[
</span><br>
<span class="quotelev1">&gt;                                 #include &lt;mxm/api/mxm_api.h&gt;
</span><br>
<span class="quotelev1">&gt;                                 int main() {
</span><br>
<span class="quotelev1">&gt;                                 if (mxm_get_version() &lt; MXM_VERSION(1,5) )
</span><br>
<span class="quotelev1">&gt; @@ -31,7 +31,7 @@
</span><br>
<span class="quotelev1">&gt;                                 int add_index = MXM_REQ_OP_ATOMIC_ADD;
</span><br>
<span class="quotelev1">&gt;                                 int swap_index = MXM_REQ_OP_ATOMIC_SWAP;
</span><br>
<span class="quotelev1">&gt;                                 return 0;
</span><br>
<span class="quotelev1">&gt; -                                }],
</span><br>
<span class="quotelev1">&gt; +                                }]])],
</span><br>
<span class="quotelev1">&gt;                     [AC_DEFINE([OSHMEM_HAS_ATOMIC_MXM], [1], [mxm support is available]) atomic_mxm_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;                    [atomic_mxm_happy=&quot;no&quot;],
</span><br>
<span class="quotelev1">&gt;                    [atomic_mxm_happy=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="13130.php">Jeff Squyres (jsquyres): "[OMPI devel] shmem vs. oshmem"</a>
<li><strong>Previous message:</strong> <a href="13128.php">George Bosilca: "Re: [OMPI devel] Developer's guide to OpenMPI"</a>
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
