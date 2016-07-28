<?
$subject_val = "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 21 03:43:29 2013" -->
<!-- isoreceived="20131221084329" -->
<!-- sent="Sat, 21 Dec 2013 10:43:28 +0200" -->
<!-- isosent="20131221084328" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)" -->
<!-- id="CAAO1KyaKxdbUqTPpBVMrYYuP0eZQwTuSEXsqNgk8WBzfJ+jaMQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D4FC1E63-E7E8-45C3-B165-93125F3B1C6F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 - trunk/config)<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-21 03:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13554.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13552.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>In reply to:</strong> <a href="13526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 -	trunk/config)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13560.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 -	trunk/config)"</a>
<li><strong>Reply:</strong> <a href="13560.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 -	trunk/config)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yet, it does.
<br>
<p><p>On Fri, Dec 20, 2013 at 8:12 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Cool; thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does libmxm have a .a (static) version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2013, at 11:42 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
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
<span class="quotelev2">&gt; &gt; On Fri, Dec 20, 2013 at 3:54 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This commit doesn't seem right.  You can't just assign -Wl,-rpath to
</span><br>
<span class="quotelev1">&gt; rpath something -- those flags are dependent on the actual back-end linker
</span><br>
<span class="quotelev1">&gt; (which may not be gnu ld).  We have a bunch of logic in configure that was
</span><br>
<span class="quotelev1">&gt; just recently revamped to figure out what the rpath linker flags should be.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I see the scenario you're describing: you basically want to override
</span><br>
<span class="quotelev1">&gt; /etc/ld.so.conf with your own personal installation.  In this situation,
</span><br>
<span class="quotelev1">&gt; you must be doing &quot;./configure --with-mxm=$HOME/mxm&quot;, right?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. For your .m4 code, I think you should just pass
</span><br>
<span class="quotelev1">&gt; &quot;-L$ompi_check_mxm_libdir&quot; as $5 to OMPI_CHECK_PACKAGE.  Shouldn't an
</span><br>
<span class="quotelev1">&gt; explicit -L always override an implicit ld.so.conf setting?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. Is your configure.m4 for mxm adding -L$HOME/mxm/lib to the wrapper
</span><br>
<span class="quotelev1">&gt; LDFLAGS?  Because if so, then the new rpath stuff should be picking this up
</span><br>
<span class="quotelev1">&gt; automatically and adding the right rpath flags (and runpath, if it's
</span><br>
<span class="quotelev1">&gt; supported) for $HOME/mxm/lib into the wrapper compiler.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you verify if this is correct?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (note: these changes to the wrapper compiler only happened within the
</span><br>
<span class="quotelev1">&gt; last week or so)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 20, 2013, at 6:15 AM, &lt;svn-commit-mailer_at_[hidden]&gt; &lt;
</span><br>
<span class="quotelev1">&gt; svn-commit-mailer_at_[hidden]&gt; wrote:
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
<span class="quotelev3">&gt; &gt; &gt; add rpath on mca_mtl_mxm.so to point to /path/to/mxm/lib/libmxm.so
</span><br>
<span class="quotelev1">&gt; which was detected at configure time
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This *should* fix following situation:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1 mxm.rpm puts /etc/ld.so.conf.d/mxm.conf file during rpm install with
</span><br>
<span class="quotelev1">&gt; libpath to /opt/mellanox/mxm/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2 some1 can extract mxm.rpm into $HOME/mxm and compile OMPI with new
</span><br>
<span class="quotelev1">&gt; mxm location
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3 during runtime, OMPI from prev step will pick MXM from step (1)
</span><br>
<span class="quotelev1">&gt; instead of from step (2)
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
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- trunk/config/ompi_check_mxm.m4    Fri Dec 20 06:03:09 2013
</span><br>
<span class="quotelev1">&gt;  (r30004)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ trunk/config/ompi_check_mxm.m4    2013-12-20 06:15:41 EST (Fri, 20
</span><br>
<span class="quotelev1">&gt; Dec 2013)      (r30005)
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
<span class="quotelev3">&gt; &gt; &gt;            AS_IF([test ! -z &quot;$with_mxm_libdir&quot; -a &quot;$with_mxm_libdir&quot;
</span><br>
<span class="quotelev1">&gt; != &quot;yes&quot;],
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
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13553/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13554.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13552.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>In reply to:</strong> <a href="13526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 -	trunk/config)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13560.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 -	trunk/config)"</a>
<li><strong>Reply:</strong> <a href="13560.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] rpath issues (re: svn:open-mpi r30005 -	trunk/config)"</a>
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
