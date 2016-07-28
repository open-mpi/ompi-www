<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 12:05:10 2008" -->
<!-- isoreceived="20080606160510" -->
<!-- sent="Fri, 6 Jun 2008 10:04:57 -0600" -->
<!-- isosent="20080606160457" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607" -->
<!-- id="A87F5D23-CB56-4C18-9B2C-5047665E746A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B6AB0FB2-E728-4ADB-BEF8-9F0246159969_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 12:04:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4102.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>In reply to:</strong> <a href="4102.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Reply:</strong> <a href="4104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since this is not the first or second time we've had the discussion in  
<br>
the group, perhaps a comment in the code would be a good idea :).
<br>
<p>Brian
<br>
<p>On Jun 6, 2008, at 9:58 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not correct.  Note the comment that says to see MPI-1.2
</span><br>
<span class="quotelev1">&gt; section 3.2.5 page 22 (I think it means MPI-1.1).  It says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;In general, message passing calls do not modify the value of the
</span><br>
<span class="quotelev1">&gt; error code field of status variables.  This field may be updated only
</span><br>
<span class="quotelev1">&gt; by the functions in Section 3.7.5 which return multiple statuses.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we should not be setting status.MPI_ERROR here; you should check
</span><br>
<span class="quotelev1">&gt; the return value from MPI_WAIT to get the error code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2008, at 11:53 AM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-06-06 11:53:17 EDT (Fri, 06 Jun 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 18607
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18607">https://svn.open-mpi.org/trac/ompi/changeset/18607</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Update the MPI_ERROR field as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/request/req_wait.c |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 1 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/request/req_wait.c
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
<span class="quotelev2">&gt;&gt; --- trunk/ompi/request/req_wait.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/request/req_wait.c	2008-06-06 11:53:17 EDT (Fri, 06
</span><br>
<span class="quotelev2">&gt;&gt; Jun 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -50,6 +50,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        /* See MPI-1.2, sec 3.2.5, p.22 */
</span><br>
<span class="quotelev2">&gt;&gt;        status-&gt;MPI_TAG    = req-&gt;req_status.MPI_TAG;
</span><br>
<span class="quotelev2">&gt;&gt;        status-&gt;MPI_SOURCE = req-&gt;req_status.MPI_SOURCE;
</span><br>
<span class="quotelev2">&gt;&gt; +        status-&gt;MPI_ERROR  = req-&gt;req_status.MPI_ERROR;
</span><br>
<span class="quotelev2">&gt;&gt;        status-&gt;_count     = req-&gt;req_status._count;
</span><br>
<span class="quotelev2">&gt;&gt;        status-&gt;_cancelled = req-&gt;req_status._cancelled;
</span><br>
<span class="quotelev2">&gt;&gt;    }
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4102.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>In reply to:</strong> <a href="4102.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Reply:</strong> <a href="4104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
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
