<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17951";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 09:44:12 2008" -->
<!-- isoreceived="20080325134412" -->
<!-- sent="Tue, 25 Mar 2008 09:44:03 -0400" -->
<!-- isosent="20080325134403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17951" -->
<!-- id="C5B925D6-239F-41B7-AED8-905E96C0D69F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200803251341.m2PDfAdR005059_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17951<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 09:44:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3518.php">Jeff Squyres: "[OMPI devel] Coverity results"</a>
<li><strong>Previous message:</strong> <a href="3516.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note: you do *not* need to re-autogen for this commit.
<br>
<p>On Mar 25, 2008, at 9:41 AM, gshipman_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: gshipman
</span><br>
<span class="quotelev1">&gt; Date: 2008-03-25 09:41:09 EDT (Tue, 25 Mar 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 17951
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17951">https://svn.open-mpi.org/trac/ompi/changeset/17951</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; need orted_LDFLAGS as a placeholder
</span><br>
<span class="quotelev1">&gt;  you will need to re autogen.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orted/Makefile.am |     9 ++++++++-
</span><br>
<span class="quotelev1">&gt;   1 files changed, 8 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/tools/orted/Makefile.am
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; =
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orted/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orted/Makefile.am	2008-03-25 09:41:09 EDT (Tue,  
</span><br>
<span class="quotelev1">&gt; 25 Mar 2008)
</span><br>
<span class="quotelev1">&gt; @@ -25,5 +25,12 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; endif # OMPI_INSTALL_BINARIES
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -orted_SOURCES = orted.c
</span><br>
<span class="quotelev1">&gt; +orted_SOURCES = orted.c
</span><br>
<span class="quotelev1">&gt; +# the following empty orted_LDFLAGS is used
</span><br>
<span class="quotelev1">&gt; +#  so that the orted can be compiled statically
</span><br>
<span class="quotelev1">&gt; +#  by simply changing the value of this from
</span><br>
<span class="quotelev1">&gt; +#  nothing to -all-static in the Makefile.in
</span><br>
<span class="quotelev1">&gt; +#  nice for systems that don't have all the shared
</span><br>
<span class="quotelev1">&gt; +#  libraries on the computes
</span><br>
<span class="quotelev1">&gt; +orted_LDFLAGS =
</span><br>
<span class="quotelev1">&gt; orted_LDADD = $(top_builddir)/orte/libopen-rte.la
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3518.php">Jeff Squyres: "[OMPI devel] Coverity results"</a>
<li><strong>Previous message:</strong> <a href="3516.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
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
