<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: . config";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 10:13:01 2014" -->
<!-- isoreceived="20140303151301" -->
<!-- sent="Mon, 3 Mar 2014 15:13:00 +0000" -->
<!-- isosent="20140303151300" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: . config" -->
<!-- id="138F8FD9-7D06-4EA0-8D13-52D69D943554_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140303095811.B1FF2160CA3_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: . config<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 10:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14271.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: .	config"</a>
<li><strong>Previous message:</strong> <a href="14269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30905 - in trunk/ompi/mca/btl/openib:	. connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14271.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: .	config"</a>
<li><strong>Reply:</strong> <a href="14271.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: .	config"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit breaks building without MPI Fortran support.  Note that I did *NOT* specify --enable-oshmem-fortran:
<br>
<p>-----
<br>
*** OSHMEM Configuration options
<br>
checking if want SGI/Quadrix compatibility mode... yes
<br>
checking if want OSHMEM API parameter checking... always
<br>
checking if want pshmem_... yes
<br>
checking if want to build OSHMEM fortran bindings... bad value OMPI_WANT_FORTRAN_BINDINGS: (0)
<br>
configure: WARNING: Your request to --enable-oshmem-fortran can only be satisfied if fortran support is enabled in OMPI.
<br>
You see this message for one of two reasons:
<br>
1. OMPI fortran support has been explicitly disabled via --disable-mpi-fortran and OSHMEM fortran support was implicitly enabled by default.
<br>
2. OMPI fortran support has been explicitly disabled via --disable-mpi-fortran and OSHMEM fortran support was explicitly enabled with --enable-oshmem-fortran.
<br>
Configure will abort because you, a human, have asked for something that cannot be provided.
<br>
configure: error: Cannot continue
<br>
-----
<br>
<p>On Mar 3, 2014, at 1:58 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2014-03-03 04:58:11 EST (Mon, 03 Mar 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 30906
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30906">https://svn.open-mpi.org/trac/ompi/changeset/30906</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; OSHMEM: fix fortran binding
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; based on true story: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14262.php">http://www.open-mpi.org/community/lists/devel/2014/03/14262.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fixed by Roman, reviewed by Igor/Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.5:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/config/oshmem_configure_options.m4 |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/configure.ac                       |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   2 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/oshmem_configure_options.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/oshmem_configure_options.m4	Mon Mar  3 01:41:46 2014	(r30905)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/oshmem_configure_options.m4	2014-03-03 04:58:11 EST (Mon, 03 Mar 2014)	(r30906)
</span><br>
<span class="quotelev1">&gt; @@ -93,7 +93,7 @@
</span><br>
<span class="quotelev1">&gt; AC_ARG_ENABLE(oshmem-fortran,
</span><br>
<span class="quotelev1">&gt; AC_HELP_STRING([--enable-oshmem-fortran],
</span><br>
<span class="quotelev1">&gt;                [enable OSHMEM Fortran bindings (default: enabled if Fortran compiler found)]))
</span><br>
<span class="quotelev1">&gt; -if test &quot;$enable_oshmem_fortran&quot; != &quot;no&quot; -a &quot;$ompi_fortran_happy&quot; = 1; then
</span><br>
<span class="quotelev1">&gt; +if test &quot;$enable_oshmem_fortran&quot; != &quot;no&quot;; then
</span><br>
<span class="quotelev1">&gt; # If no OMPI FORTRAN, bail
</span><br>
<span class="quotelev1">&gt;    AS_IF([test $OMPI_WANT_FORTRAN_BINDINGS -eq 0 -a &quot;$enable_oshmem&quot; != &quot;no&quot;],
</span><br>
<span class="quotelev1">&gt;                [AC_MSG_RESULT([bad value OMPI_WANT_FORTRAN_BINDINGS: ($OMPI_WANT_FORTRAN_BINDINGS)])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/configure.ac	Mon Mar  3 01:41:46 2014	(r30905)
</span><br>
<span class="quotelev1">&gt; +++ trunk/configure.ac	2014-03-03 04:58:11 EST (Mon, 03 Mar 2014)	(r30906)
</span><br>
<span class="quotelev1">&gt; @@ -605,7 +605,7 @@
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(OSHMEM_BUILD_FORTRAN_BINDINGS,
</span><br>
<span class="quotelev1">&gt;     [test &quot;$ompi_fortran_happy&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev1">&gt;           &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev1">&gt; -          &quot;$oshmem_fortran_enable&quot; != &quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; +          &quot;$enable_oshmem_fortran&quot; != &quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # checkpoint results
</span><br>
<span class="quotelev1">&gt; AC_CACHE_SAVE
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
<li><strong>Next message:</strong> <a href="14271.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: .	config"</a>
<li><strong>Previous message:</strong> <a href="14269.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30905 - in trunk/ompi/mca/btl/openib:	. connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14271.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: .	config"</a>
<li><strong>Reply:</strong> <a href="14271.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: .	config"</a>
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
