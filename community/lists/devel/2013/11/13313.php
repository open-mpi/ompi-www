<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 23 23:03:48 2013" -->
<!-- isoreceived="20131124040348" -->
<!-- sent="Sun, 24 Nov 2013 04:03:37 +0000" -->
<!-- isosent="20131124040337" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD471B7A8D_at_EXMB01.srn.sandia.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-23 23:03:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13314.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Previous message:</strong> <a href="13312.php">Dmitry N. Mikushin: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13314.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Reply:</strong> <a href="13314.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm pretty sure I was clear it's a hack. But removing from subdirs is how we disable a project, not by adding a big fixed around a makefile (see ORTE).
<br>

<br>
Brian
<br>

<br>

<br>

<br>
Sent with Good (www.good.com)
<br>

<br>

<br>
-----Original Message-----
<br>
From: Mike Dubman [miked_at_[hidden]&lt;mailto:miked_at_[hidden]&gt;]
<br>
Sent: Saturday, November 23, 2013 07:49 PM Mountain Standard Time
<br>
To: Open MPI Developers
<br>
Subject: [EXTERNAL] Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem
<br>

<br>

<br>
Hi
<br>
Looking into Brian's fix it seems more hack then fix.
<br>
Could please explain what is wrong in one we committed?
<br>

<br>
Thanks
<br>

<br>
On Nov 22, 2013 10:44 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Hey Mike
<br>

<br>
This fix is incorrect - Brian already committed the correct way to disable oshmem. Please revert this.
<br>

<br>
Thanks
<br>
Ralph
<br>

<br>

<br>
On Nov 22, 2013, at 5:51 AM, svn-commit-mailer_at_[hidden]&lt;mailto:svn-commit-mailer_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-11-22 08:51:46 EST (Fri, 22 Nov 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29733
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29733">https://svn.open-mpi.org/trac/ompi/changeset/29733</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; add support for --without-oshmem in configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/config/oshmem_configure_options.m4 |    16 ++++++++++++++++
</span><br>
<span class="quotelev1">&gt;   trunk/oshmem/Makefile.am                 |     5 +++++
</span><br>
<span class="quotelev1">&gt;   2 files changed, 21 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/oshmem_configure_options.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/oshmem_configure_options.m4  Fri Nov 22 07:37:31 2013        (r29732)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/oshmem_configure_options.m4  2013-11-22 08:51:46 EST (Fri, 22 Nov 2013)      (r29733)
</span><br>
<span class="quotelev1">&gt; @@ -25,6 +25,22 @@
</span><br>
<span class="quotelev1">&gt;      [Disable building the OpenSHMEM interface])])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; +# OSHMEM support
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +AC_MSG_CHECKING([if want OSHMEM support])
</span><br>
<span class="quotelev1">&gt; +AC_ARG_WITH([oshmem],
</span><br>
<span class="quotelev1">&gt; +    [AC_HELP_STRING([--with-oshmem],
</span><br>
<span class="quotelev1">&gt; +                    [Build with OSHMEM support (default=yes)])])
</span><br>
<span class="quotelev1">&gt; +if test &quot;$with_oshmem&quot; != &quot;no&quot;; then
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt; +    oshmem_with_support=1
</span><br>
<span class="quotelev1">&gt; +else
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt; +    oshmem_with_support=0
</span><br>
<span class="quotelev1">&gt; +fi
</span><br>
<span class="quotelev1">&gt; +AM_CONDITIONAL(OSHMEM_SUPPORT, test &quot;$oshmem_with_support&quot; = 1)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; # Enable compatibility mode
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; AC_MSG_CHECKING([if want SGI/Quadrix compatibility mode])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/oshmem/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/oshmem/Makefile.am  Fri Nov 22 07:37:31 2013        (r29732)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/Makefile.am  2013-11-22 08:51:46 EST (Fri, 22 Nov 2013)      (r29733)
</span><br>
<span class="quotelev1">&gt; @@ -9,6 +9,9 @@
</span><br>
<span class="quotelev1">&gt; # $HEADER$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +# Do we need to build OSHMEM?
</span><br>
<span class="quotelev1">&gt; +if OSHMEM_SUPPORT
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; # Do we have profiling?
</span><br>
<span class="quotelev1">&gt; if OSHMEM_PROFILING
</span><br>
<span class="quotelev1">&gt; c_pshmem_lib = shmem/c/profile/libshmem_c_pshmem.la&lt;<a href="http://libshmem_c_pshmem.la">http://libshmem_c_pshmem.la</a>&gt;
</span><br>
<span class="quotelev1">&gt; @@ -99,3 +102,5 @@
</span><br>
<span class="quotelev1">&gt; # Remove the generated man pages
</span><br>
<span class="quotelev1">&gt; distclean-local:
</span><br>
<span class="quotelev1">&gt;       rm -f $(nodist_man_MANS) $(dir_stamp)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +endif # OSHMEM_SUPPORT
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]&lt;mailto:svn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13314.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Previous message:</strong> <a href="13312.php">Dmitry N. Mikushin: "Re: [OMPI devel] CUDA support not working?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13314.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Reply:</strong> <a href="13314.php">Mike Dubman: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
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
