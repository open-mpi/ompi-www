<?
$subject_val = "[OMPI devel] oshmem Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 17 06:21:00 2013" -->
<!-- isoreceived="20131017102100" -->
<!-- sent="Thu, 17 Oct 2013 10:20:58 +0000" -->
<!-- isosent="20131017102058" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem Fortran" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F978772_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131017054244.84D35160B3B_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem Fortran<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-17 06:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13102.php">David Goodell (dgoodell): "Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding"</a>
<li><strong>Previous message:</strong> <a href="13100.php">Ralph Castain: "Re: [OMPI devel] oshmem build failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13103.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Reply:</strong> <a href="13103.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox --
<br>
<p>In r29448, you deleted the comment without doing what it explicitly said to do.  For example, you can --disable-mpi-fortran --enable-oshmem-fortran and get a broken build.
<br>
<p>Additionally, the shmem example in examples/ has several problems:
<br>
<p>1. Why all the #defines?  This is supposed to be a trivial &quot;hello world in shmem&quot; program, not a test case.  Please make it the equivalent of &quot;hello world&quot;.
<br>
<p>2. The hello world shmem program does not follow the same naming conventions as the rest of the code in the examples/ directory.
<br>
<p>3. There's no Fortran shmem example.
<br>
<p>Adding C/Fortran shmem test cases to a test suite for MTT runs would be a very good thing.  Can they be added so that others can run shmem tests in an automated fashion?  Indeed, we have no proof of any shmem correctness right now; that makes me quite nervous...
<br>
<p><p>On Oct 17, 2013, at 1:42 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-10-17 01:42:43 EDT (Thu, 17 Oct 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29448
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29448">https://svn.open-mpi.org/trac/ompi/changeset/29448</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; add --enable-oshmem-fortran opt to configure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/config/ompi_configure_options.m4   |     1 -                                       
</span><br>
<span class="quotelev1">&gt;   trunk/config/oshmem_configure_options.m4 |    29 ++++++++++++-----------------           
</span><br>
<span class="quotelev1">&gt;   2 files changed, 12 insertions(+), 18 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/ompi_configure_options.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/ompi_configure_options.m4	Thu Oct 17 01:39:20 2013	(r29447)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/ompi_configure_options.m4	2013-10-17 01:42:43 EDT (Thu, 17 Oct 2013)	(r29448)
</span><br>
<span class="quotelev1">&gt; @@ -114,7 +114,6 @@
</span><br>
<span class="quotelev1">&gt;       [OMPI_WANT_FORTRAN_BINDINGS=1],
</span><br>
<span class="quotelev1">&gt;       [OMPI_WANT_FORTRAN_BINDINGS=0])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # MPI profiling
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/oshmem_configure_options.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/oshmem_configure_options.m4	Thu Oct 17 01:39:20 2013	(r29447)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/oshmem_configure_options.m4	2013-10-17 01:42:43 EDT (Thu, 17 Oct 2013)	(r29448)
</span><br>
<span class="quotelev1">&gt; @@ -79,26 +79,21 @@
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(OSHMEM_PROFILING, test &quot;$oshmem_profiling_support&quot; = 1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -# Whether to build the OpenShmem fortran support or not For the
</span><br>
<span class="quotelev1">&gt; -# moment, use the same value as was derived from --enable-mpi-fortra.
</span><br>
<span class="quotelev1">&gt; -# *This seems wrong*; someone should somehow unify these two
</span><br>
<span class="quotelev1">&gt; -# options... but the implications are complicated.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; -# Option 1: make --enable-fortran that governs both MPI and shmem.
</span><br>
<span class="quotelev1">&gt; -# This has 2 implications:
</span><br>
<span class="quotelev1">&gt; -# - --enable-mpi-fortran needs to be maintained for at least the
</span><br>
<span class="quotelev1">&gt; -#   1.7/1.8 series
</span><br>
<span class="quotelev1">&gt; -# - what to do with --enable-mpi-cxx?  It should be made consistent --
</span><br>
<span class="quotelev1">&gt; -#   so make it --enable-cxx?
</span><br>
<span class="quotelev1">&gt; -# 
</span><br>
<span class="quotelev1">&gt; -# Option 2: make separate --enable-oshmem-fortran.  This seems sucky,
</span><br>
<span class="quotelev1">&gt; -# though, because oshmem Fortran depends on a lot of MPI Fortran
</span><br>
<span class="quotelev1">&gt; -# infrastructure.  If it isin't there, then oshmem Fortran can't
</span><br>
<span class="quotelev1">&gt; -# built.
</span><br>
<span class="quotelev1">&gt; +# Fortran bindings
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; -# Option 3: ...? (something better than option 1/2?)
</span><br>
<span class="quotelev1">&gt; +AC_ARG_ENABLE(oshmem-fortran,
</span><br>
<span class="quotelev1">&gt; +AC_HELP_STRING([--enable-oshmem-fortran],
</span><br>
<span class="quotelev1">&gt; +               [enable OSHMEM Fortran bindings (default: enabled if Fortran compiler found)]))
</span><br>
<span class="quotelev1">&gt; +if test &quot;$enable_oshmem_fortran&quot; != &quot;no&quot;; then
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt; +    OSHMEM_WANT_FORTRAN_BINDINGS=1
</span><br>
<span class="quotelev1">&gt; +else
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; +    OSHMEM_WANT_FORTRAN_BINDINGS=0
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; AC_MSG_CHECKING([if want to build SHMEM fortran bindings])
</span><br>
<span class="quotelev1">&gt; -OSHMEM_WANT_FORTRAN_BINDINGS=$OMPI_WANT_FORTRAN_BINDINGS
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL(OSHMEM_WANT_FORTRAN_BINDINGS,
</span><br>
<span class="quotelev1">&gt;     [test $OSHMEM_WANT_FORTRAN_BINDINGS -eq 1])
</span><br>
<span class="quotelev1">&gt; AS_IF([test $OSHMEM_WANT_FORTRAN_BINDINGS -eq 1],
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
<li><strong>Next message:</strong> <a href="13102.php">David Goodell (dgoodell): "Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding"</a>
<li><strong>Previous message:</strong> <a href="13100.php">Ralph Castain: "Re: [OMPI devel] oshmem build failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13103.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Reply:</strong> <a href="13103.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
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
