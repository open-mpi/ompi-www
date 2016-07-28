<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 11:58:30 2008" -->
<!-- isoreceived="20080606155830" -->
<!-- sent="Fri, 6 Jun 2008 11:58:20 -0400" -->
<!-- isosent="20080606155820" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607" -->
<!-- id="B6AB0FB2-E728-4ADB-BEF8-9F0246159969_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200806061553.m56FrI0V003088_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 11:58:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4101.php">Ralf Wildenhues: "Re: [OMPI devel] some Makefile.am questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Reply:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>This is not correct.  Note the comment that says to see MPI-1.2  
<br>
section 3.2.5 page 22 (I think it means MPI-1.1).  It says:
<br>
<p>&quot;In general, message passing calls do not modify the value of the  
<br>
error code field of status variables.  This field may be updated only  
<br>
by the functions in Section 3.7.5 which return multiple statuses.&quot;
<br>
<p>So we should not be setting status.MPI_ERROR here; you should check  
<br>
the return value from MPI_WAIT to get the error code.
<br>
<p><p><p>On Jun 6, 2008, at 11:53 AM, bosilca_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2008-06-06 11:53:17 EDT (Fri, 06 Jun 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 18607
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18607">https://svn.open-mpi.org/trac/ompi/changeset/18607</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Update the MPI_ERROR field as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/request/req_wait.c |     1 +
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/request/req_wait.c
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
<span class="quotelev1">&gt; --- trunk/ompi/request/req_wait.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/request/req_wait.c	2008-06-06 11:53:17 EDT (Fri, 06  
</span><br>
<span class="quotelev1">&gt; Jun 2008)
</span><br>
<span class="quotelev1">&gt; @@ -50,6 +50,7 @@
</span><br>
<span class="quotelev1">&gt;         /* See MPI-1.2, sec 3.2.5, p.22 */
</span><br>
<span class="quotelev1">&gt;         status-&gt;MPI_TAG    = req-&gt;req_status.MPI_TAG;
</span><br>
<span class="quotelev1">&gt;         status-&gt;MPI_SOURCE = req-&gt;req_status.MPI_SOURCE;
</span><br>
<span class="quotelev1">&gt; +        status-&gt;MPI_ERROR  = req-&gt;req_status.MPI_ERROR;
</span><br>
<span class="quotelev1">&gt;         status-&gt;_count     = req-&gt;req_status._count;
</span><br>
<span class="quotelev1">&gt;         status-&gt;_cancelled = req-&gt;req_status._cancelled;
</span><br>
<span class="quotelev1">&gt;     }
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
<li><strong>Next message:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4101.php">Ralf Wildenhues: "Re: [OMPI devel] some Makefile.am questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Reply:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
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
