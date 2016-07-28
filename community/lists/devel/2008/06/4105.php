<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 04:17:29 2008" -->
<!-- isoreceived="20080609081729" -->
<!-- sent="Mon, 9 Jun 2008 10:17:04 +0200" -->
<!-- isosent="20080609081704" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607" -->
<!-- id="200806091017.04769.keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DC4C5246-0D3A-4E47-A124-0AE11DE860FF_at_eecs.utk.edu" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 04:17:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4106.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>In reply to:</strong> <a href="4104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4106.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Reply:</strong> <a href="4106.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
that's one of the mysteries of the MPI-1 standard.
<br>
<p>Nevertheless, we should be std. conforming. Therefore, I included the comment 
<br>
and omitted the setting of .MPI_ERROR.
<br>
<p>MPIch2 does not for the same reasons. Therefore I would say the tests are 
<br>
wrong.
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p>PS: e.g. from mpich2-1.0.7:
<br>
include/mpiimpl.h:2112
<br>
/* Do not set MPI_ERROR (only set if ERR_IN_STATUS is returned */
<br>
#define MPIR_Status_set_empty(status_)                  \
<br>
{                                                       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ((status_) != MPI_STATUS_IGNORE)                 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{                                                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(status_)-&gt;MPI_SOURCE = MPI_ANY_SOURCE;         \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(status_)-&gt;MPI_TAG = MPI_ANY_TAG;               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(status_)-&gt;count = 0;                           \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(status_)-&gt;cancelled = FALSE;                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}                                                   \
<br>
}
<br>
<p><p><p><p>On Sonntag, 8. Juni 2008, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Here is what the MPI standard state:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;In general, message passing calls do not modify the value of the
</span><br>
<span class="quotelev1">&gt; error code field of status variables. This field may be updated only
</span><br>
<span class="quotelev1">&gt; by the functions in Section 3.7.5 which return multiple statuses. The
</span><br>
<span class="quotelev1">&gt; field is updated if and only if such function returns with an error
</span><br>
<span class="quotelev1">&gt; code of MPI ERR IN STATUS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rationale. The error field in status is not needed for calls that
</span><br>
<span class="quotelev1">&gt; return only one status, such as MPI WAIT, since that would only
</span><br>
<span class="quotelev1">&gt; duplicate the information returned by the function itself. The current
</span><br>
<span class="quotelev1">&gt; design avoids the additional overhead of setting it, in such cases.
</span><br>
<span class="quotelev1">&gt; The field is needed for calls that return multiple statuses, since
</span><br>
<span class="quotelev1">&gt; each request may have had a different failure. (End of rationale.)&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, the sentence start with &quot;In general&quot; which is not a limiting
</span><br>
<span class="quotelev1">&gt; statement, it absolutely doesn't state that the field doesn't have to
</span><br>
<span class="quotelev1">&gt; be set. Second, the reason cited in the rationale is completely fake.
</span><br>
<span class="quotelev1">&gt; We're talking about one store instruction, while the simple usage of
</span><br>
<span class="quotelev1">&gt; the status will generate a cache miss.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other side, a simple grep in the ompi-tests shows that hundreds
</span><br>
<span class="quotelev1">&gt; of tests use this MPI_ERROR over the return value. If test writers
</span><br>
<span class="quotelev1">&gt; (which are supposed to know the standard quite well), do such things,
</span><br>
<span class="quotelev1">&gt; I wonder how can we expect that the users will never do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2008, at 12:04 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Since this is not the first or second time we've had the discussion in
</span><br>
<span class="quotelev2">&gt; &gt; the group, perhaps a comment in the code would be a good idea :).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 6, 2008, at 9:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; George --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is not correct.  Note the comment that says to see MPI-1.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; section 3.2.5 page 22 (I think it means MPI-1.1).  It says:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;In general, message passing calls do not modify the value of the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; error code field of status variables.  This field may be updated only
</span><br>
<span class="quotelev3">&gt; &gt;&gt; by the functions in Section 3.7.5 which return multiple statuses.&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So we should not be setting status.MPI_ERROR here; you should check
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the return value from MPI_WAIT to get the error code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 6, 2008, at 11:53 AM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Date: 2008-06-06 11:53:17 EDT (Fri, 06 Jun 2008)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; New Revision: 18607
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18607">https://svn.open-mpi.org/trac/ompi/changeset/18607</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Update the MPI_ERROR field as well.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; trunk/ompi/request/req_wait.c |     1 +
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1 files changed, 1 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Modified: trunk/ompi/request/req_wait.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --- trunk/ompi/request/req_wait.c	(original)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +++ trunk/ompi/request/req_wait.c	2008-06-06 11:53:17 EDT (Fri, 06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jun 2008)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; @@ -50,6 +50,7 @@
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       /* See MPI-1.2, sec 3.2.5, p.22 */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       status-&gt;MPI_TAG    = req-&gt;req_status.MPI_TAG;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       status-&gt;MPI_SOURCE = req-&gt;req_status.MPI_SOURCE;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +        status-&gt;MPI_ERROR  = req-&gt;req_status.MPI_ERROR;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       status-&gt;_count     = req-&gt;req_status._count;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       status-&gt;_cancelled = req-&gt;req_status._cancelled;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;   Brian Barrett
</span><br>
<span class="quotelev2">&gt; &gt;   Open MPI developer
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4106.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Previous message:</strong> <a href="4104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>In reply to:</strong> <a href="4104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4106.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
<li><strong>Reply:</strong> <a href="4106.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r18607"</a>
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
