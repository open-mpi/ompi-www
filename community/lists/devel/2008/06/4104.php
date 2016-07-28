<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  8 14:32:50 2008" -->
<!-- isoreceived="20080608183250" -->
<!-- sent="Sun, 8 Jun 2008 14:32:36 -0400" -->
<!-- isosent="20080608183236" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607" -->
<!-- id="DC4C5246-0D3A-4E47-A124-0AE11DE860FF_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A87F5D23-CB56-4C18-9B2C-5047665E746A_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-08 14:32:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4105.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>In reply to:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4105.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Reply:</strong> <a href="4105.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is what the MPI standard state:
<br>
<p>&quot;In general, message passing calls do not modify the value of the  
<br>
error code field of status variables. This field may be updated only  
<br>
by the functions in Section 3.7.5 which return multiple statuses. The  
<br>
field is updated if and only if such function returns with an error  
<br>
code of MPI ERR IN STATUS.
<br>
<p>Rationale. The error field in status is not needed for calls that  
<br>
return only one status, such as MPI WAIT, since that would only  
<br>
duplicate the information returned by the function itself. The current  
<br>
design avoids the additional overhead of setting it, in such cases.  
<br>
The field is needed for calls that return multiple statuses, since  
<br>
each request may have had a different failure. (End of rationale.)&quot;
<br>
<p>First, the sentence start with &quot;In general&quot; which is not a limiting  
<br>
statement, it absolutely doesn't state that the field doesn't have to  
<br>
be set. Second, the reason cited in the rationale is completely fake.  
<br>
We're talking about one store instruction, while the simple usage of  
<br>
the status will generate a cache miss.
<br>
<p>On the other side, a simple grep in the ompi-tests shows that hundreds  
<br>
of tests use this MPI_ERROR over the return value. If test writers  
<br>
(which are supposed to know the standard quite well), do such things,  
<br>
I wonder how can we expect that the users will never do it.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 6, 2008, at 12:04 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Since this is not the first or second time we've had the discussion in
</span><br>
<span class="quotelev1">&gt; the group, perhaps a comment in the code would be a good idea :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2008, at 9:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is not correct.  Note the comment that says to see MPI-1.2
</span><br>
<span class="quotelev2">&gt;&gt; section 3.2.5 page 22 (I think it means MPI-1.1).  It says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;In general, message passing calls do not modify the value of the
</span><br>
<span class="quotelev2">&gt;&gt; error code field of status variables.  This field may be updated only
</span><br>
<span class="quotelev2">&gt;&gt; by the functions in Section 3.7.5 which return multiple statuses.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So we should not be setting status.MPI_ERROR here; you should check
</span><br>
<span class="quotelev2">&gt;&gt; the return value from MPI_WAIT to get the error code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 6, 2008, at 11:53 AM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2008-06-06 11:53:17 EDT (Fri, 06 Jun 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 18607
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18607">https://svn.open-mpi.org/trac/ompi/changeset/18607</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Update the MPI_ERROR field as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/request/req_wait.c |     1 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 files changed, 1 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/request/req_wait.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/request/req_wait.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/request/req_wait.c	2008-06-06 11:53:17 EDT (Fri, 06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jun 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -50,6 +50,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       /* See MPI-1.2, sec 3.2.5, p.22 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       status-&gt;MPI_TAG    = req-&gt;req_status.MPI_TAG;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       status-&gt;MPI_SOURCE = req-&gt;req_status.MPI_SOURCE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        status-&gt;MPI_ERROR  = req-&gt;req_status.MPI_ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       status-&gt;_count     = req-&gt;req_status._count;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       status-&gt;_cancelled = req-&gt;req_status._cancelled;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   Brian Barrett
</span><br>
<span class="quotelev1">&gt;   Open MPI developer
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4104/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4105.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>In reply to:</strong> <a href="4103.php">Brian Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4105.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Reply:</strong> <a href="4105.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
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
