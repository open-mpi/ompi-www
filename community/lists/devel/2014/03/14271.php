<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: .	config";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 10:29:21 2014" -->
<!-- isoreceived="20140303152921" -->
<!-- sent="Mon, 3 Mar 2014 15:29:20 +0000" -->
<!-- isosent="20140303152920" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: .	config" -->
<!-- id="B265C84E-DEFE-4F9E-A830-CB3FBC82B904_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="138F8FD9-7D06-4EA0-8D13-52D69D943554_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: .	config<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 10:29:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14272.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14270.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: . config"</a>
<li><strong>In reply to:</strong> <a href="14270.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: . config"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More specifically, this goes back to the original question I asked long ago: if it is time to unify the fortran language CLI options (i.e., --disable-fortran instead of/in addition to --disable-mpi-fortran / --disable-oshmem-fortran).
<br>
<p>I say this because by the logic from #1 below, if you have to --disable-mpi-fortran --disable-oshmem-fortran, that seems somewhat annoying.
<br>
<p>...but then again, that might not even be right.  This requires someone to really re-think the options and come up with a good solution; what I said above is a gut reaction, and I haven't thought through the corner cases.
<br>
<p>Regardless, for 1.7.x, my $0.02 is that the --disable-mpi-fortran switch should also disable OSHMEM Fortran bindings (unless --enable-oshmem-fortran was specified, in which case that would be an error).  Something Better can be done for trunk/v1.9.
<br>
<p><p><p>On Mar 3, 2014, at 7:13 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This commit breaks building without MPI Fortran support.  Note that I did *NOT* specify --enable-oshmem-fortran:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; *** OSHMEM Configuration options
</span><br>
<span class="quotelev1">&gt; checking if want SGI/Quadrix compatibility mode... yes
</span><br>
<span class="quotelev1">&gt; checking if want OSHMEM API parameter checking... always
</span><br>
<span class="quotelev1">&gt; checking if want pshmem_... yes
</span><br>
<span class="quotelev1">&gt; checking if want to build OSHMEM fortran bindings... bad value OMPI_WANT_FORTRAN_BINDINGS: (0)
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Your request to --enable-oshmem-fortran can only be satisfied if fortran support is enabled in OMPI.
</span><br>
<span class="quotelev1">&gt; You see this message for one of two reasons:
</span><br>
<span class="quotelev1">&gt; 1. OMPI fortran support has been explicitly disabled via --disable-mpi-fortran and OSHMEM fortran support was implicitly enabled by default.
</span><br>
<span class="quotelev1">&gt; 2. OMPI fortran support has been explicitly disabled via --disable-mpi-fortran and OSHMEM fortran support was explicitly enabled with --enable-oshmem-fortran.
</span><br>
<span class="quotelev1">&gt; Configure will abort because you, a human, have asked for something that cannot be provided.
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 3, 2014, at 1:58 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2014-03-03 04:58:11 EST (Mon, 03 Mar 2014)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 30906
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30906">https://svn.open-mpi.org/trac/ompi/changeset/30906</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; OSHMEM: fix fortran binding
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; based on true story: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14262.php">http://www.open-mpi.org/community/lists/devel/2014/03/14262.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; fixed by Roman, reviewed by Igor/Mike
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.7.5:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/config/oshmem_configure_options.m4 |     2 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/configure.ac                       |     2 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  2 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/config/oshmem_configure_options.m4
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/config/oshmem_configure_options.m4	Mon Mar  3 01:41:46 2014	(r30905)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/config/oshmem_configure_options.m4	2014-03-03 04:58:11 EST (Mon, 03 Mar 2014)	(r30906)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -93,7 +93,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; AC_ARG_ENABLE(oshmem-fortran,
</span><br>
<span class="quotelev2">&gt;&gt; AC_HELP_STRING([--enable-oshmem-fortran],
</span><br>
<span class="quotelev2">&gt;&gt;               [enable OSHMEM Fortran bindings (default: enabled if Fortran compiler found)]))
</span><br>
<span class="quotelev2">&gt;&gt; -if test &quot;$enable_oshmem_fortran&quot; != &quot;no&quot; -a &quot;$ompi_fortran_happy&quot; = 1; then
</span><br>
<span class="quotelev2">&gt;&gt; +if test &quot;$enable_oshmem_fortran&quot; != &quot;no&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt; # If no OMPI FORTRAN, bail
</span><br>
<span class="quotelev2">&gt;&gt;   AS_IF([test $OMPI_WANT_FORTRAN_BINDINGS -eq 0 -a &quot;$enable_oshmem&quot; != &quot;no&quot;],
</span><br>
<span class="quotelev2">&gt;&gt;               [AC_MSG_RESULT([bad value OMPI_WANT_FORTRAN_BINDINGS: ($OMPI_WANT_FORTRAN_BINDINGS)])
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/configure.ac	Mon Mar  3 01:41:46 2014	(r30905)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/configure.ac	2014-03-03 04:58:11 EST (Mon, 03 Mar 2014)	(r30906)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -605,7 +605,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(OSHMEM_BUILD_FORTRAN_BINDINGS,
</span><br>
<span class="quotelev2">&gt;&gt;    [test &quot;$ompi_fortran_happy&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev2">&gt;&gt;          &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev2">&gt;&gt; -          &quot;$oshmem_fortran_enable&quot; != &quot;no&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; +          &quot;$enable_oshmem_fortran&quot; != &quot;no&quot;])
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # checkpoint results
</span><br>
<span class="quotelev2">&gt;&gt; AC_CACHE_SAVE
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="14272.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14270.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: . config"</a>
<li><strong>In reply to:</strong> <a href="14270.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30906 - in trunk: . config"</a>
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
