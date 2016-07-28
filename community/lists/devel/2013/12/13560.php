<?
$subject_val = "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 -	trunk/config)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 23 09:23:33 2013" -->
<!-- isoreceived="20131223142333" -->
<!-- sent="Mon, 23 Dec 2013 14:23:31 +0000" -->
<!-- isosent="20131223142331" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 -	trunk/config)" -->
<!-- id="A7846496-5115-4F74-90A6-9942C45F094B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyaKxdbUqTPpBVMrYYuP0eZQwTuSEXsqNgk8WBzfJ+jaMQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 -	trunk/config)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-23 09:23:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13561.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<li><strong>Previous message:</strong> <a href="13559.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13553.php">Mike Dubman: "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forget offhand if you need to specify additional flags for static linking to the wrappers.  I'm on vacation and can't easily check.
<br>
<p>You might want to experiment with
<br>
<p>&nbsp;&nbsp;./configure --disable-shared --enable-static
<br>
<p>and see if mpicc still passes the right list of -l flags for libmxm or not.  If not, you might need to add something into your mxm configury to get the Right list of libraries passed down to mpicc -- I'm afraid I don't remember offhand, sorry!
<br>
<p><p>On Dec 21, 2013, at 3:43 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; yet, it does.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 20, 2013 at 8:12 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Cool; thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does libmxm have a .a (static) version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2013, at 11:42 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for comments.
</span><br>
<span class="quotelev2">&gt; &gt; I checked #1 and it does the trick, will fix and commit it.
</span><br>
<span class="quotelev2">&gt; &gt; as for #2 - we do not modify LDFLAGS in mca/mtl/mxm/configure.m4.
</span><br>
<span class="quotelev2">&gt; &gt; M
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Dec 20, 2013 at 3:54 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This commit doesn't seem right.  You can't just assign -Wl,-rpath to rpath something -- those flags are dependent on the actual back-end linker (which may not be gnu ld).  We have a bunch of logic in configure that was just recently revamped to figure out what the rpath linker flags should be.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I see the scenario you're describing: you basically want to override /etc/ld.so.conf with your own personal installation.  In this situation, you must be doing &quot;./configure --with-mxm=$HOME/mxm&quot;, right?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. For your .m4 code, I think you should just pass &quot;-L$ompi_check_mxm_libdir&quot; as $5 to OMPI_CHECK_PACKAGE.  Shouldn't an explicit -L always override an implicit ld.so.conf setting?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. Is your configure.m4 for mxm adding -L$HOME/mxm/lib to the wrapper LDFLAGS?  Because if so, then the new rpath stuff should be picking this up automatically and adding the right rpath flags (and runpath, if it's supported) for $HOME/mxm/lib into the wrapper compiler.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you verify if this is correct?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (note: these changes to the wrapper compiler only happened within the last week or so)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 20, 2013, at 6:15 AM, &lt;svn-commit-mailer_at_[hidden]&gt; &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: 2013-12-20 06:15:41 EST (Fri, 20 Dec 2013)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; New Revision: 30005
</span><br>
<span class="quotelev3">&gt; &gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30005">https://svn.open-mpi.org/trac/ompi/changeset/30005</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; add rpath on mca_mtl_mxm.so to point to /path/to/mxm/lib/libmxm.so which was detected at configure time
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This *should* fix following situation:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1 mxm.rpm puts /etc/ld.so.conf.d/mxm.conf file during rpm install with libpath to /opt/mellanox/mxm/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2 some1 can extract mxm.rpm into $HOME/mxm and compile OMPI with new mxm location
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3 during runtime, OMPI from prev step will pick MXM from step (1) instead of from step (2)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cmr=v1.7.4:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Text files modified:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   trunk/config/ompi_check_mxm.m4 |     9 +++++++--
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   1 files changed, 7 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Modified: trunk/config/ompi_check_mxm.m4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- trunk/config/ompi_check_mxm.m4    Fri Dec 20 06:03:09 2013        (r30004)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ trunk/config/ompi_check_mxm.m4    2013-12-20 06:15:41 EST (Fri, 20 Dec 2013)      (r30005)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -29,15 +29,20 @@
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     AS_IF([test &quot;$with_mxm&quot; != &quot;no&quot;],
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           [AS_IF([test ! -z &quot;$with_mxm&quot; -a &quot;$with_mxm&quot; != &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -                 [ompi_check_mxm_dir=&quot;$with_mxm&quot;])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +                 [
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +                    ompi_check_mxm_dir=&quot;$with_mxm&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +                    ompi_check_mxm_libdir=&quot;$with_mxm/lib&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +                 ])
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            AS_IF([test ! -z &quot;$with_mxm_libdir&quot; -a &quot;$with_mxm_libdir&quot; != &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                  [ompi_check_mxm_libdir=&quot;$with_mxm_libdir&quot;])
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +           ompi_check_mxm_rpath=&quot;-Wl,-rpath=$ompi_check_mxm_libdir&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            OMPI_CHECK_PACKAGE([$1],
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                               [mxm/api/mxm_api.h],
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                               [mxm],
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                               [mxm_cleanup],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -                           [],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +                              [$ompi_check_mxm_rpath],
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                               [$ompi_check_mxm_dir],
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                               [$ompi_check_mxm_libdir],
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                               [ompi_check_mxm_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13561.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30076 Missing Mellanox vendor ID"</a>
<li><strong>Previous message:</strong> <a href="13559.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13553.php">Mike Dubman: "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)"</a>
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
