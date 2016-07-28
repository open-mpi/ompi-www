<?
$subject_val = "Re: [OMPI devel] oshmem Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 18 01:18:39 2013" -->
<!-- isoreceived="20131018051839" -->
<!-- sent="Fri, 18 Oct 2013 09:18:31 +0400" -->
<!-- isosent="20131018051831" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem Fortran" -->
<!-- id="5260C4A7.9030308_at_itseez.com" -->
<!-- charset="windows-1251" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F978772_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem Fortran<br>
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-18 01:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Previous message:</strong> <a href="13102.php">David Goodell (dgoodell): "Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding"</a>
<li><strong>In reply to:</strong> <a href="13101.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Reply:</strong> <a href="13104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Is there naming convention related configure options in OMPI?
<br>
Do you see any objections about --enable-oshmem-xxx or they must be 
<br>
replaced with --enable-shmem-xxx?
<br>
<p>Regards,
<br>
Igor
<br>
<p>On 17.10.2013 14:20, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Mellanox --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In r29448, you deleted the comment without doing what it explicitly said to do.  For example, you can --disable-mpi-fortran --enable-oshmem-fortran and get a broken build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, the shmem example in examples/ has several problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Why all the #defines?  This is supposed to be a trivial &quot;hello world in shmem&quot; program, not a test case.  Please make it the equivalent of &quot;hello world&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The hello world shmem program does not follow the same naming conventions as the rest of the code in the examples/ directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. There's no Fortran shmem example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adding C/Fortran shmem test cases to a test suite for MTT runs would be a very good thing.  Can they be added so that others can run shmem tests in an automated fashion?  Indeed, we have no proof of any shmem correctness right now; that makes me quite nervous...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 17, 2013, at 1:42 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2013-10-17 01:42:43 EDT (Thu, 17 Oct 2013)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 29448
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29448">https://svn.open-mpi.org/trac/ompi/changeset/29448</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; add --enable-oshmem-fortran opt to configure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/config/ompi_configure_options.m4   |     1 -
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/config/oshmem_configure_options.m4 |    29 ++++++++++++-----------------
</span><br>
<span class="quotelev2">&gt;&gt;    2 files changed, 12 insertions(+), 18 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/config/ompi_configure_options.m4
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/config/ompi_configure_options.m4	Thu Oct 17 01:39:20 2013	(r29447)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/config/ompi_configure_options.m4	2013-10-17 01:42:43 EDT (Thu, 17 Oct 2013)	(r29448)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -114,7 +114,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;        [OMPI_WANT_FORTRAN_BINDINGS=1],
</span><br>
<span class="quotelev2">&gt;&gt;        [OMPI_WANT_FORTRAN_BINDINGS=0])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # MPI profiling
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/config/oshmem_configure_options.m4
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/config/oshmem_configure_options.m4	Thu Oct 17 01:39:20 2013	(r29447)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/config/oshmem_configure_options.m4	2013-10-17 01:42:43 EDT (Thu, 17 Oct 2013)	(r29448)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -79,26 +79,21 @@
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(OSHMEM_PROFILING, test &quot;$oshmem_profiling_support&quot; = 1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -# Whether to build the OpenShmem fortran support or not For the
</span><br>
<span class="quotelev2">&gt;&gt; -# moment, use the same value as was derived from --enable-mpi-fortra.
</span><br>
<span class="quotelev2">&gt;&gt; -# *This seems wrong*; someone should somehow unify these two
</span><br>
<span class="quotelev2">&gt;&gt; -# options... but the implications are complicated.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; -# Option 1: make --enable-fortran that governs both MPI and shmem.
</span><br>
<span class="quotelev2">&gt;&gt; -# This has 2 implications:
</span><br>
<span class="quotelev2">&gt;&gt; -# - --enable-mpi-fortran needs to be maintained for at least the
</span><br>
<span class="quotelev2">&gt;&gt; -#   1.7/1.8 series
</span><br>
<span class="quotelev2">&gt;&gt; -# - what to do with --enable-mpi-cxx?  It should be made consistent --
</span><br>
<span class="quotelev2">&gt;&gt; -#   so make it --enable-cxx?
</span><br>
<span class="quotelev2">&gt;&gt; -#
</span><br>
<span class="quotelev2">&gt;&gt; -# Option 2: make separate --enable-oshmem-fortran.  This seems sucky,
</span><br>
<span class="quotelev2">&gt;&gt; -# though, because oshmem Fortran depends on a lot of MPI Fortran
</span><br>
<span class="quotelev2">&gt;&gt; -# infrastructure.  If it isin't there, then oshmem Fortran can't
</span><br>
<span class="quotelev2">&gt;&gt; -# built.
</span><br>
<span class="quotelev2">&gt;&gt; +# Fortran bindings
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; -# Option 3: ...? (something better than option 1/2?)
</span><br>
<span class="quotelev2">&gt;&gt; +AC_ARG_ENABLE(oshmem-fortran,
</span><br>
<span class="quotelev2">&gt;&gt; +AC_HELP_STRING([--enable-oshmem-fortran],
</span><br>
<span class="quotelev2">&gt;&gt; +               [enable OSHMEM Fortran bindings (default: enabled if Fortran compiler found)]))
</span><br>
<span class="quotelev2">&gt;&gt; +if test &quot;$enable_oshmem_fortran&quot; != &quot;no&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt; +    AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev2">&gt;&gt; +    OSHMEM_WANT_FORTRAN_BINDINGS=1
</span><br>
<span class="quotelev2">&gt;&gt; +else
</span><br>
<span class="quotelev2">&gt;&gt; +    AC_MSG_RESULT([no])
</span><br>
<span class="quotelev2">&gt;&gt; +    OSHMEM_WANT_FORTRAN_BINDINGS=0
</span><br>
<span class="quotelev2">&gt;&gt; +fi
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; AC_MSG_CHECKING([if want to build SHMEM fortran bindings])
</span><br>
<span class="quotelev2">&gt;&gt; -OSHMEM_WANT_FORTRAN_BINDINGS=$OMPI_WANT_FORTRAN_BINDINGS
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONAL(OSHMEM_WANT_FORTRAN_BINDINGS,
</span><br>
<span class="quotelev2">&gt;&gt;      [test $OSHMEM_WANT_FORTRAN_BINDINGS -eq 1])
</span><br>
<span class="quotelev2">&gt;&gt; AS_IF([test $OSHMEM_WANT_FORTRAN_BINDINGS -eq 1],
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Previous message:</strong> <a href="13102.php">David Goodell (dgoodell): "Re: [OMPI devel] OMPI Git mirror history: incorrect history &amp; rewinding"</a>
<li><strong>In reply to:</strong> <a href="13101.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Reply:</strong> <a href="13104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
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
