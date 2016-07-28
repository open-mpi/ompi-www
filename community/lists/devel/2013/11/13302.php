<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 10:44:50 2013" -->
<!-- isoreceived="20131122154450" -->
<!-- sent="Fri, 22 Nov 2013 07:44:45 -0800" -->
<!-- isosent="20131122154445" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem" -->
<!-- id="4D56CACD-7616-40CC-8E3E-5F0D0826ACF8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131122135146.46B5E1615C1_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 10:44:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13303.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Previous message:</strong> <a href="13301.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Change request for include/mpif-config.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13310.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Reply:</strong> <a href="13310.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Reply:</strong> <a href="13339.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Mike
<br>
<p>This fix is incorrect - Brian already committed the correct way to disable oshmem. Please revert this.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Nov 22, 2013, at 5:51 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-11-22 08:51:46 EST (Fri, 22 Nov 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29733
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29733">https://svn.open-mpi.org/trac/ompi/changeset/29733</a>
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
<span class="quotelev1">&gt; --- trunk/config/oshmem_configure_options.m4	Fri Nov 22 07:37:31 2013	(r29732)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/oshmem_configure_options.m4	2013-11-22 08:51:46 EST (Fri, 22 Nov 2013)	(r29733)
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
<span class="quotelev1">&gt; --- trunk/oshmem/Makefile.am	Fri Nov 22 07:37:31 2013	(r29732)
</span><br>
<span class="quotelev1">&gt; +++ trunk/oshmem/Makefile.am	2013-11-22 08:51:46 EST (Fri, 22 Nov 2013)	(r29733)
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
<span class="quotelev1">&gt; c_pshmem_lib = shmem/c/profile/libshmem_c_pshmem.la
</span><br>
<span class="quotelev1">&gt; @@ -99,3 +102,5 @@
</span><br>
<span class="quotelev1">&gt; # Remove the generated man pages
</span><br>
<span class="quotelev1">&gt; distclean-local:
</span><br>
<span class="quotelev1">&gt; 	rm -f $(nodist_man_MANS) $(dir_stamp)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +endif # OSHMEM_SUPPORT
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13303.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Previous message:</strong> <a href="13301.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Change request for include/mpif-config.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13310.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Reply:</strong> <a href="13310.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
<li><strong>Reply:</strong> <a href="13339.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29733 - in trunk: config oshmem"</a>
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
