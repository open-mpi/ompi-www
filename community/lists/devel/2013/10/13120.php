<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29475 - trunk/ompi/proc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 22 17:48:08 2013" -->
<!-- isoreceived="20131022214808" -->
<!-- sent="Tue, 22 Oct 2013 14:48:06 -0700" -->
<!-- isosent="20131022214806" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29475 - trunk/ompi/proc" -->
<!-- id="CAMD57of4apoc6KWSitJ+t9gLHPV1Nz6amj6NPOC-F5Dr6ZFS4A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20131022190703.5852E160B43_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29475 - trunk/ompi/proc<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-22 17:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13121.php">Kenneth A. Lloyd: "Re: [OMPI devel] Open MPI shirts and more"</a>
<li><strong>Previous message:</strong> <a href="13119.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29465 - trunk/ompi/communicator"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't have an issue with this change, but I confess I'm struggling to
<br>
understand what it did. Can you please explain how this change actually
<br>
changed something?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On Tue, Oct 22, 2013 at 12:07 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2013-10-22 15:07:03 EDT (Tue, 22 Oct 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29475
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29475">https://svn.open-mpi.org/trac/ompi/changeset/29475</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix locality when in the case where the OMPI_RTE_HOST_ID is not found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.4:ticket=3847
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/proc/proc.c |     3 +--
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/proc/proc.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/proc/proc.c      Tue Oct 22 14:48:07 2013        (r29474)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/proc/proc.c      2013-10-22 15:07:03 EDT (Tue, 22 Oct 2013)
</span><br>
<span class="quotelev1">&gt;      (r29475)
</span><br>
<span class="quotelev1">&gt; @@ -150,6 +150,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      /* if we are on different nodes, then we are probably non-local */
</span><br>
<span class="quotelev1">&gt;      if (vpid != OMPI_RTE_MY_NODEID) {
</span><br>
<span class="quotelev1">&gt; +        locality = OPAL_PROC_NON_LOCAL;
</span><br>
<span class="quotelev1">&gt;  #ifdef OMPI_RTE_HOST_ID
</span><br>
<span class="quotelev1">&gt;          /* see if coprocessors were detected - if the hostid isn't
</span><br>
<span class="quotelev1">&gt;           * present, then no coprocessors were detected and we can
</span><br>
<span class="quotelev1">&gt; @@ -167,8 +168,6 @@
</span><br>
<span class="quotelev1">&gt;                  locality = OPAL_PROC_NON_LOCAL;
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt; -#else
</span><br>
<span class="quotelev1">&gt; -        locality = OPAL_PROC_NON_LOCAL;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;  #if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13120/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13121.php">Kenneth A. Lloyd: "Re: [OMPI devel] Open MPI shirts and more"</a>
<li><strong>Previous message:</strong> <a href="13119.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29465 - trunk/ompi/communicator"</a>
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
