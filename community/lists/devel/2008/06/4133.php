<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 11:09:49 2008" -->
<!-- isoreceived="20080616150949" -->
<!-- sent="Mon, 16 Jun 2008 11:09:34 -0400" -->
<!-- isosent="20080616150934" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607" -->
<!-- id="C6C43EC0-C0B4-4086-A156-46CB2D9D1153_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3F3232AE-5621-4623-9F71-F8BFEB802410_at_cisco.com" -->
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
<strong>Date:</strong> 2008-06-16 11:09:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4132.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>In reply to:</strong> <a href="4132.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Reply:</strong> <a href="4134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 16, 2008, at 10:58 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I completely agree that we should follow the standard to the  
</span><br>
<span class="quotelev2">&gt;&gt; greatest possible extend, but then at least we should have our test  
</span><br>
<span class="quotelev2">&gt;&gt; codes following the same guidelines. It doesn't means I volunteer  
</span><br>
<span class="quotelev2">&gt;&gt; for anything ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what you mean by that...?
</span><br>
<p>I simply emphasized that most of the tests we're using expect  
<br>
MPI_ERROR to be set even after MPI_Wait and MPI_Test. I was amazed  
<br>
that we use tests that are not standard compliant.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; The spec clearly states that the singular MPI_TEST* and MPI_WAIT*  
</span><br>
<span class="quotelev1">&gt; functions should not edit the MPI_ERROR field in the status.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 9, 2008, at 10:44 AM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rainer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The snippet from the MPICH2 is irrelevant to the current  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; discussion.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It only concern set empty status. A quick grep in the MPICH2 source
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code (find . -name &quot;*.[ch]&quot; -exec grep -Hn MPI_ERROR {} \;) shows
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that they ALWAYS set the MPI_ERROR field in the status if they
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; detect something wrong.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 9, 2008, at 4:17 AM, Rainer Keller wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that's one of the mysteries of the MPI-1 standard.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nevertheless, we should be std. conforming. Therefore, I included
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the comment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and omitted the setting of .MPI_ERROR.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPIch2 does not for the same reasons. Therefore I would say the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tests are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrong.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rainer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PS: e.g. from mpich2-1.0.7:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; include/mpiimpl.h:2112
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* Do not set MPI_ERROR (only set if ERR_IN_STATUS is returned */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #define MPIR_Status_set_empty(status_)                  \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {                                                       \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if ((status_) != MPI_STATUS_IGNORE)                 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {                                                   \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    (status_)-&gt;MPI_SOURCE = MPI_ANY_SOURCE;         \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    (status_)-&gt;MPI_TAG = MPI_ANY_TAG;               \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    (status_)-&gt;count = 0;                           \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    (status_)-&gt;cancelled = FALSE;                   \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }                                                   \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sonntag, 8. Juni 2008, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here is what the MPI standard state:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;In general, message passing calls do not modify the value of the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; error code field of status variables. This field may be updated  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; only
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; by the functions in Section 3.7.5 which return multiple statuses.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; field is updated if and only if such function returns with an  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; error
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; code of MPI ERR IN STATUS.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Rationale. The error field in status is not needed for calls that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; return only one status, such as MPI WAIT, since that would only
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; duplicate the information returned by the function itself. The
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; current
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; design avoids the additional overhead of setting it, in such  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cases.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The field is needed for calls that return multiple statuses,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; since
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; each request may have had a different failure. (End of  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rationale.)&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; First, the sentence start with &quot;In general&quot; which is not a  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; limiting
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; statement, it absolutely doesn't state that the field doesn't  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be set. Second, the reason cited in the rationale is completely
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fake.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We're talking about one store instruction, while the simple  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; usage of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the status will generate a cache miss.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On the other side, a simple grep in the ompi-tests shows that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hundreds
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of tests use this MPI_ERROR over the return value. If test  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; writers
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (which are supposed to know the standard quite well), do such
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; things,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I wonder how can we expect that the users will never do it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jun 6, 2008, at 12:04 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Since this is not the first or second time we've had the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; discussion in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the group, perhaps a comment in the code would be a good  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; idea :).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 6, 2008, at 9:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; George --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is not correct.  Note the comment that says to see MPI-1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; section 3.2.5 page 22 (I think it means MPI-1.1).  It says:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;In general, message passing calls do not modify the value of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error code field of status variables.  This field may be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; updated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; by the functions in Section 3.7.5 which return multiple  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; statuses.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So we should not be setting status.MPI_ERROR here; you should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; check
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the return value from MPI_WAIT to get the error code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 6, 2008, at 11:53 AM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: 2008-06-06 11:53:17 EDT (Fri, 06 Jun 2008)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; New Revision: 18607
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18607">https://svn.open-mpi.org/trac/ompi/changeset/18607</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Update the MPI_ERROR field as well.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/request/req_wait.c |     1 +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1 files changed, 1 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Modified: trunk/ompi/request/req_wait.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==============================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --- trunk/ompi/request/req_wait.c	(original)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; +++ trunk/ompi/request/req_wait.c	2008-06-06 11:53:17 EDT  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (Fri,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 06
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jun 2008)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; @@ -50,6 +50,7 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  /* See MPI-1.2, sec 3.2.5, p.22 */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  status-&gt;MPI_TAG    = req-&gt;req_status.MPI_TAG;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  status-&gt;MPI_SOURCE = req-&gt;req_status.MPI_SOURCE;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; +        status-&gt;MPI_ERROR  = req-&gt;req_status.MPI_ERROR;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  status-&gt;_count     = req-&gt;req_status._count;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  status-&gt;_cancelled = req-&gt;req_status._cancelled;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brian Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI developer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HLRS                          Tel: ++49 (0)711-685 6 5858
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 70550 Stuttgart                    email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Germany                             AIM/Skype:rusraink
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4133/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4132.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>In reply to:</strong> <a href="4132.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Reply:</strong> <a href="4134.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
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
