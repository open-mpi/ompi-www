<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 19 14:01:55 2010" -->
<!-- isoreceived="20100819180155" -->
<!-- sent="Thu, 19 Aug 2010 14:01:28 -0400" -->
<!-- isosent="20100819180128" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628" -->
<!-- id="AANLkTimAx=i5b1w3mSX6GYPZ6a3bDihRoyZ9P81KV+--_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201008191309.o7JD9KOJ002813_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628<br>
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-19 14:01:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
<li><strong>Previous message:</strong> <a href="8294.php">Brice Goglin: "Re: [OMPI devel] knem_dma_min"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
<li><strong>Reply:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So just to clarify, this means that we don't need to worry about having more
<br>
than one errmgr module handling a single failure and therefore don't have to
<br>
set the stack_state (which is now gone anyway).  Am I reading this
<br>
correctly?
<br>
<p>Thanks,
<br>
Wesley
<br>
<p>On Thu, Aug 19, 2010 at 9:09 AM, &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: jjhursey
</span><br>
<span class="quotelev1">&gt; Date: 2010-08-19 09:09:20 EDT (Thu, 19 Aug 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23628
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23628">https://svn.open-mpi.org/trac/ompi/changeset/23628</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Simplification of the ErrMgr framework by removing the 'stack'/composite
</span><br>
<span class="quotelev1">&gt; functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The composite functionality was becoming difficult to maintain, so we
</span><br>
<span class="quotelev1">&gt; removed it for now which simplifies the framework design considerably.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the 'crmig' and 'autor' components were -very- similar to the 'hnp'
</span><br>
<span class="quotelev1">&gt; component, this commit also merges them together. By moving the 'crmig' and
</span><br>
<span class="quotelev1">&gt; 'autor' to a separate file under the 'hnp' component we are able to isolate
</span><br>
<span class="quotelev1">&gt; the C/R logic to a large extent, thus being only minimally hooked into the
</span><br>
<span class="quotelev1">&gt; previous 'hnp' component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So other than some name changes, the functionality is all still in place. I
</span><br>
<span class="quotelev1">&gt; will update the C/R documentation later this morning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp_autor.c
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp_crmig.c
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/autor/
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/crmig/
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/example/
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/contrib/amca-param-sets/ft-enable-cr-recovery |     9
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/app/errmgr_app.c              |    11
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/base/base.h                   |    16
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/base/errmgr_base_close.c      |    25 -
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/base/errmgr_base_fns.c        |   133 ------------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/base/errmgr_base_open.c       |    18
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/base/errmgr_base_select.c     |   149 +------------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/base/errmgr_base_tool.c       |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/base/errmgr_private.h         |    19 -
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/errmgr.h                      |   180
</span><br>
<span class="quotelev1">&gt; +++++-----------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/hnp/Makefile.am               |     4
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp.c              |   426
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++----------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp.h              |   102 +++++++++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp_component.c    |   200
</span><br>
<span class="quotelev1">&gt; ++++++++++++++---
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/hnp/help-orte-errmgr-hnp.txt  |    29 ++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/errmgr/orted/errmgr_orted.c          |    34 +-
</span><br>
<span class="quotelev1">&gt;   16 files changed, 738 insertions(+), 619 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (166344 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        svn diff -r 23627:23628 --no-diff-deleted
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8295/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
<li><strong>Previous message:</strong> <a href="8294.php">Brice Goglin: "Re: [OMPI devel] knem_dma_min"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
<li><strong>Reply:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
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
