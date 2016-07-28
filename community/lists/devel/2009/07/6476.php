<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 18:32:06 2009" -->
<!-- isoreceived="20090721223206" -->
<!-- sent="Tue, 21 Jul 2009 16:31:52 -0600" -->
<!-- isosent="20090721223152" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723" -->
<!-- id="046441A1-0131-4326-826B-7F894C17DD80_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200907212019.n6LKJcHO027761_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 18:31:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6477.php">Jeff Squyres: "[OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6475.php">Jeff Squyres: "[OMPI devel] lotsa errors in new autodetect component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6478.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Reply:</strong> <a href="6478.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit appears to have broken the build system for Mac OSX. Could  
<br>
you please fix it - since it only supports Solaris and Linux, how  
<br>
about setting it so it continues to work in other environments??
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Jul 21, 2009, at 2:19 PM, igb_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: igb
</span><br>
<span class="quotelev1">&gt; Date: 2009-07-21 16:19:38 EDT (Tue, 21 Jul 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21723
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21723">https://svn.open-mpi.org/trac/ompi/changeset/21723</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Added autodetect installdirs component.  Currently supports Solaris  
</span><br>
<span class="quotelev1">&gt; and Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Installation directories will be inferred from the actual location
</span><br>
<span class="quotelev1">&gt;  of the shared library that contains the component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * OPAL_PREFIX and other environment variables allow users to override
</span><br>
<span class="quotelev1">&gt;  the inferred directories.  They should no longer be necessary in
</span><br>
<span class="quotelev1">&gt;  most cases, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Any directories that cannot be inferred will fall back to whatever
</span><br>
<span class="quotelev1">&gt;  is provided by the config installdirs component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/installdirs/autodetect/
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/installdirs/autodetect/Makefile.am
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/installdirs/autodetect/configure.m4
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/installdirs/autodetect/configure.params
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/installdirs/autodetect/ 
</span><br>
<span class="quotelev1">&gt; opal_installdirs_autodetect_component.c
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/installdirs/autodetect/opal_installdirs_backtrace.c
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/installdirs/autodetect/opal_installdirs_linux.c
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/installdirs/autodetect/opal_installdirs_solaris.c
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/installdirs/autodetect/opal_installdirs_walkcontext.c
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/AUTHORS                                                  
</span><br>
<span class="quotelev1">&gt; |     1
</span><br>
<span class="quotelev1">&gt;   trunk/NEWS                                                     
</span><br>
<span class="quotelev1">&gt; |     7
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/installdirs/base/installdirs_base_components.c |    
</span><br>
<span class="quotelev1">&gt; 112 +++++++++-----
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/installdirs/base/installdirs_base_expand.c     |    
</span><br>
<span class="quotelev1">&gt; 306 ++++++++++++++++++++++++++++++++-------
</span><br>
<span class="quotelev1">&gt;   4 files changed, 328 insertions(+), 98 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (39001 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 21722:21723 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6477.php">Jeff Squyres: "[OMPI devel] autodetect broken"</a>
<li><strong>Previous message:</strong> <a href="6475.php">Jeff Squyres: "[OMPI devel] lotsa errors in new autodetect component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6478.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Reply:</strong> <a href="6478.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
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
