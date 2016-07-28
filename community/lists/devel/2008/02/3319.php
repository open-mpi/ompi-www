<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 14:32:44 2008" -->
<!-- isoreceived="20080228193244" -->
<!-- sent="Thu, 28 Feb 2008 14:32:37 -0500" -->
<!-- isosent="20080228193237" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635" -->
<!-- id="15FFC921-5B10-4469-B589-0542F89651B3_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3EC088A.C692%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 14:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3320.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>Previous message:</strong> <a href="3318.php">Terry Dontje: "Re: [OMPI devel] vt configuration issues"</a>
<li><strong>In reply to:</strong> <a href="3311.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3320.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>Reply:</strong> <a href="3320.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do not caution this kind of support. Subversion is the official  
<br>
version control system for Open MPI. If one decide to use another  
<br>
version control system, then he/she should add this file in their own  
<br>
repository.
<br>
<p>If the community need this file, then someone should devote and commit  
<br>
it back. Eventually, the same person should consider submitting a  
<br>
patch to ROMIO developers ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 28, 2008, at 8:43 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We inserted this file because (a) it does no harm, and (b) Hg will  
</span><br>
<span class="quotelev1">&gt; not clone
</span><br>
<span class="quotelev1">&gt; the confdb directory because it is otherwise empty - it only gets  
</span><br>
<span class="quotelev1">&gt; &quot;filled&quot;
</span><br>
<span class="quotelev1">&gt; during the build process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please restore the file, otherwise anyone using Hg will not be able  
</span><br>
<span class="quotelev1">&gt; to build
</span><br>
<span class="quotelev1">&gt; their repository without finding the missing directory and hand- 
</span><br>
<span class="quotelev1">&gt; creating it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/27/08 10:18 PM, &quot;bosilca_at_[hidden]&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-02-28 00:18:06 EST (Thu, 28 Feb 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 17635
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17635">https://svn.open-mpi.org/trac/ompi/changeset/17635</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; This is a Mercurial file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Removed:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/io/romio/romio/confdb/.hgfoo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Deleted: trunk/ompi/mca/io/romio/romio/confdb/.hgfoo
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3319/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3320.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>Previous message:</strong> <a href="3318.php">Terry Dontje: "Re: [OMPI devel] vt configuration issues"</a>
<li><strong>In reply to:</strong> <a href="3311.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3320.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>Reply:</strong> <a href="3320.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
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
