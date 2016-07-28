<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 14:34:02 2010" -->
<!-- isoreceived="20101025183402" -->
<!-- sent="Mon, 25 Oct 2010 14:33:57 -0400" -->
<!-- isosent="20101025183357" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936" -->
<!-- id="BA1CFD80-A372-4D67-8C2F-89583D5ED359_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201010251829.o9PITqlK017184_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 14:33:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8618.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8616.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8618.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Reply:</strong> <a href="8618.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was literally just about to commit that (i.e., when I ran &quot;svn up&quot; before committing 23937 and 23938, it merged your change exactly on top of mine).  :-)
<br>
<p>With the changes from 936, 937, and 938, I am able to &quot;make distcheck&quot; successfully (and therefore also VPATH build properly).
<br>
<p><p><p>On Oct 25, 2010, at 2:29 PM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2010-10-25 14:29:52 EDT (Mon, 25 Oct 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23936
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23936">https://svn.open-mpi.org/trac/ompi/changeset/23936</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; event-config.h only exists in the builddir, so we need to explicitly
</span><br>
<span class="quotelev1">&gt; include it while building.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/event/libevent207/Makefile.am |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/event/libevent207/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/event/libevent207/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/event/libevent207/Makefile.am	2010-10-25 14:29:52 EDT (Mon, 25 Oct 2010)
</span><br>
<span class="quotelev1">&gt; @@ -7,7 +7,7 @@
</span><br>
<span class="quotelev1">&gt; # $HEADER$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -AM_CPPFLAGS = -I$(srcdir)/libevent -I$(srcdir)/libevent/include
</span><br>
<span class="quotelev1">&gt; +AM_CPPFLAGS = -I$(srcdir)/libevent -I$(srcdir)/libevent/include -I$(builddir)/libevent/include
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SUBDIRS = libevent
</span><br>
<span class="quotelev1">&gt; 
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8618.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Previous message:</strong> <a href="8616.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8618.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>Reply:</strong> <a href="8618.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
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
