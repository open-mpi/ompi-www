<?
$subject_val = "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 01:16:36 2014" -->
<!-- isoreceived="20140717051636" -->
<!-- sent="Thu, 17 Jul 2014 14:16:36 +0900" -->
<!-- isosent="20140717051636" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error" -->
<!-- id="53C75C34.8060909_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABwOO=dgWTUb2vBKzCgmwjanSzd7qwY_HpQbR=-HN0Dvbp8j=g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 01:16:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15189.php">Bert Wesarg: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>Previous message:</strong> <a href="15187.php">Kevin Buckley: "[OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>In reply to:</strong> <a href="15187.php">Kevin Buckley: "[OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15189.php">Bert Wesarg: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kevin,
<br>
<p>thanks for providing the patch.
<br>
<p>i pushed it into the trunk :
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/32253">https://svn.open-mpi.org/trac/ompi/changeset/32253</a>
<br>
and made a CMR so it can be available in v1.8.2 :
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/4793">https://svn.open-mpi.org/trac/ompi/ticket/4793</a>
<br>
<p>Thanks,
<br>
<p>Gilles
<br>
<p>On 2014/07/17 13:32, Kevin Buckley wrote:
<br>
<span class="quotelev1">&gt; I have been informed, by the PkgSrc build process, of the following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;------
</span><br>
<span class="quotelev1">&gt; =&gt; Checking for portability problems in extracted files
</span><br>
<span class="quotelev1">&gt; ERROR: [check-portability.awk] =&gt; Found test ... == ...:
</span><br>
<span class="quotelev1">&gt; ERROR: [check-portability.awk] configure:  if test &quot;$enable_oshmem&quot; ==
</span><br>
<span class="quotelev1">&gt; &quot;yes&quot; -a &quot;$ompi_fortran_happy&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Explanation:
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt; The &quot;test&quot; command, as well as the &quot;[&quot; command, are not required to know
</span><br>
<span class="quotelev1">&gt; the &quot;==&quot; operator. Only a few implementations like bash and some
</span><br>
<span class="quotelev1">&gt; versions of ksh support it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you run &quot;test foo == foo&quot; on a platform that does not support the
</span><br>
<span class="quotelev1">&gt; &quot;==&quot; operator, the result will be &quot;false&quot; instead of &quot;true&quot;. This can
</span><br>
<span class="quotelev1">&gt; lead to unexpected behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are two ways to fix this error message. If the file that contains
</span><br>
<span class="quotelev1">&gt; the &quot;test ==&quot; is needed for building the package, you should create a
</span><br>
<span class="quotelev1">&gt; patch for it, replacing the &quot;==&quot; operator with &quot;=&quot;. If the file is not
</span><br>
<span class="quotelev1">&gt; needed, add its name to the CHECK_PORTABILITY_SKIP variable in the
</span><br>
<span class="quotelev1">&gt; package Makefile.
</span><br>
<span class="quotelev1">&gt; ===========================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously, the file that needs to be patched is really
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure.ac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and not
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but anyroad, the place at which the oshmen stanza has used the &quot;non-portable&quot;
</span><br>
<span class="quotelev1">&gt; double-equals construct is shown in the following attempted patch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;------
</span><br>
<span class="quotelev1">&gt; --- configure.ac.orig   2014-04-22 14:51:44.000000000 +0000
</span><br>
<span class="quotelev1">&gt; +++ configure.ac
</span><br>
<span class="quotelev1">&gt; @@ -611,8 +611,8 @@ m4_ifdef([project_ompi], [OMPI_SETUP_MPI
</span><br>
<span class="quotelev1">&gt;  ])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  AM_CONDITIONAL(OSHMEM_BUILD_FORTRAN_BINDINGS,
</span><br>
<span class="quotelev1">&gt; -    [test &quot;$enable_oshmem&quot; == &quot;yes&quot; -a &quot;$ompi_fortran_happy&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev1">&gt; -          &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; == &quot;1&quot; -a \
</span><br>
<span class="quotelev1">&gt; +    [test &quot;$enable_oshmem&quot; = &quot;yes&quot; -a &quot;$ompi_fortran_happy&quot; = &quot;1&quot; -a \
</span><br>
<span class="quotelev1">&gt; +          &quot;$OMPI_WANT_FORTRAN_BINDINGS&quot; = &quot;1&quot; -a \
</span><br>
<span class="quotelev1">&gt;            &quot;$enable_oshmem_fortran&quot; != &quot;no&quot;])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # checkpoint results
</span><br>
<span class="quotelev1">&gt; ---8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;---------8&lt;------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15189.php">Bert Wesarg: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>Previous message:</strong> <a href="15187.php">Kevin Buckley: "[OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<li><strong>In reply to:</strong> <a href="15187.php">Kevin Buckley: "[OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15189.php">Bert Wesarg: "Re: [OMPI devel] PkgSrc build of 1.8.1 gives a portability error"</a>
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
