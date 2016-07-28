<?
$subject_val = "[OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 08:54:37 2013" -->
<!-- isoreceived="20131220135437" -->
<!-- sent="Fri, 20 Dec 2013 13:54:35 +0000" -->
<!-- isosent="20131220135435" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)" -->
<!-- id="74775AE7-DEC3-4FC7-9169-11F51CB68503_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131220111542.3681016042F_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 08:54:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13525.php">Mike Dubman: "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<li><strong>Reply:</strong> <a href="13525.php">Mike Dubman: "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit doesn't seem right.  You can't just assign -Wl,-rpath to rpath something -- those flags are dependent on the actual back-end linker (which may not be gnu ld).  We have a bunch of logic in configure that was just recently revamped to figure out what the rpath linker flags should be.
<br>
<p>I see the scenario you're describing: you basically want to override /etc/ld.so.conf with your own personal installation.  In this situation, you must be doing &quot;./configure --with-mxm=$HOME/mxm&quot;, right?  
<br>
<p>1. For your .m4 code, I think you should just pass &quot;-L$ompi_check_mxm_libdir&quot; as $5 to OMPI_CHECK_PACKAGE.  Shouldn't an explicit -L always override an implicit ld.so.conf setting?
<br>
<p>2. Is your configure.m4 for mxm adding -L$HOME/mxm/lib to the wrapper LDFLAGS?  Because if so, then the new rpath stuff should be picking this up automatically and adding the right rpath flags (and runpath, if it's supported) for $HOME/mxm/lib into the wrapper compiler.
<br>
<p>Can you verify if this is correct?  
<br>
<p>(note: these changes to the wrapper compiler only happened within the last week or so)
<br>
<p><p><p>On Dec 20, 2013, at 6:15 AM, &lt;svn-commit-mailer_at_[hidden]&gt; &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-12-20 06:15:41 EST (Fri, 20 Dec 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 30005
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30005">https://svn.open-mpi.org/trac/ompi/changeset/30005</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; add rpath on mca_mtl_mxm.so to point to /path/to/mxm/lib/libmxm.so which was detected at configure time
</span><br>
<span class="quotelev1">&gt; This *should* fix following situation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 mxm.rpm puts /etc/ld.so.conf.d/mxm.conf file during rpm install with libpath to /opt/mellanox/mxm/lib
</span><br>
<span class="quotelev1">&gt; 2 some1 can extract mxm.rpm into $HOME/mxm and compile OMPI with new mxm location
</span><br>
<span class="quotelev1">&gt; 3 during runtime, OMPI from prev step will pick MXM from step (1) instead of from step (2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.4:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/config/ompi_check_mxm.m4 |     9 +++++++--                               
</span><br>
<span class="quotelev1">&gt;   1 files changed, 7 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/ompi_check_mxm.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/ompi_check_mxm.m4	Fri Dec 20 06:03:09 2013	(r30004)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/ompi_check_mxm.m4	2013-12-20 06:15:41 EST (Fri, 20 Dec 2013)	(r30005)
</span><br>
<span class="quotelev1">&gt; @@ -29,15 +29,20 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     AS_IF([test &quot;$with_mxm&quot; != &quot;no&quot;],
</span><br>
<span class="quotelev1">&gt;           [AS_IF([test ! -z &quot;$with_mxm&quot; -a &quot;$with_mxm&quot; != &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt; -                 [ompi_check_mxm_dir=&quot;$with_mxm&quot;])
</span><br>
<span class="quotelev1">&gt; +                 [
</span><br>
<span class="quotelev1">&gt; +                    ompi_check_mxm_dir=&quot;$with_mxm&quot;
</span><br>
<span class="quotelev1">&gt; +                    ompi_check_mxm_libdir=&quot;$with_mxm/lib&quot;
</span><br>
<span class="quotelev1">&gt; +                 ])
</span><br>
<span class="quotelev1">&gt;            AS_IF([test ! -z &quot;$with_mxm_libdir&quot; -a &quot;$with_mxm_libdir&quot; != &quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;                  [ompi_check_mxm_libdir=&quot;$with_mxm_libdir&quot;])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +           ompi_check_mxm_rpath=&quot;-Wl,-rpath=$ompi_check_mxm_libdir&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;            OMPI_CHECK_PACKAGE([$1],
</span><br>
<span class="quotelev1">&gt;                               [mxm/api/mxm_api.h],
</span><br>
<span class="quotelev1">&gt;                               [mxm],
</span><br>
<span class="quotelev1">&gt;                               [mxm_cleanup],
</span><br>
<span class="quotelev1">&gt; -			      [],
</span><br>
<span class="quotelev1">&gt; +                              [$ompi_check_mxm_rpath],
</span><br>
<span class="quotelev1">&gt;                               [$ompi_check_mxm_dir],
</span><br>
<span class="quotelev1">&gt;                               [$ompi_check_mxm_libdir],
</span><br>
<span class="quotelev1">&gt;                               [ompi_check_mxm_happy=&quot;yes&quot;],
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
<li><strong>Next message:</strong> <a href="13524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13522.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: another OpenBSD-5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13525.php">Mike Dubman: "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<li><strong>Reply:</strong> <a href="13525.php">Mike Dubman: "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
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
