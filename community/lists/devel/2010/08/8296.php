<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 19 14:33:34 2010" -->
<!-- isoreceived="20100819183334" -->
<!-- sent="Thu, 19 Aug 2010 12:33:32 -0600" -->
<!-- isosent="20100819183332" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628" -->
<!-- id="AANLkTinJBZQS8D9CEZyBxiA+h0sk7VQzPY4dQYKHnASg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimAx=i5b1w3mSX6GYPZ6a3bDihRoyZ9P81KV+--_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-19 14:33:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8297.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8295.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
<li><strong>In reply to:</strong> <a href="8295.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes - the selection logic now only picks ONE module to run.
<br>
<p>On Thu, Aug 19, 2010 at 12:01 PM, Wesley Bland &lt;wbland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So just to clarify, this means that we don't need to worry about having
</span><br>
<span class="quotelev1">&gt; more than one errmgr module handling a single failure and therefore don't
</span><br>
<span class="quotelev1">&gt; have to set the stack_state (which is now gone anyway).  Am I reading this
</span><br>
<span class="quotelev1">&gt; correctly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Wesley
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 19, 2010 at 9:09 AM, &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2010-08-19 09:09:20 EDT (Thu, 19 Aug 2010)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 23628
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23628">https://svn.open-mpi.org/trac/ompi/changeset/23628</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Simplification of the ErrMgr framework by removing the 'stack'/composite
</span><br>
<span class="quotelev2">&gt;&gt; functionality.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The composite functionality was becoming difficult to maintain, so we
</span><br>
<span class="quotelev2">&gt;&gt; removed it for now which simplifies the framework design considerably.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since the 'crmig' and 'autor' components were -very- similar to the 'hnp'
</span><br>
<span class="quotelev2">&gt;&gt; component, this commit also merges them together. By moving the 'crmig' and
</span><br>
<span class="quotelev2">&gt;&gt; 'autor' to a separate file under the 'hnp' component we are able to isolate
</span><br>
<span class="quotelev2">&gt;&gt; the C/R logic to a large extent, thus being only minimally hooked into the
</span><br>
<span class="quotelev2">&gt;&gt; previous 'hnp' component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So other than some name changes, the functionality is all still in place.
</span><br>
<span class="quotelev2">&gt;&gt; I will update the C/R documentation later this morning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp_autor.c
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp_crmig.c
</span><br>
<span class="quotelev2">&gt;&gt; Removed:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/autor/
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/crmig/
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/example/
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/contrib/amca-param-sets/ft-enable-cr-recovery |     9
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/app/errmgr_app.c              |    11
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/base/base.h                   |    16
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/base/errmgr_base_close.c      |    25 -
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/base/errmgr_base_fns.c        |   133 ------------
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/base/errmgr_base_open.c       |    18
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/base/errmgr_base_select.c     |   149
</span><br>
<span class="quotelev2">&gt;&gt; +------------
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/base/errmgr_base_tool.c       |     2
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/base/errmgr_private.h         |    19 -
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/errmgr.h                      |   180
</span><br>
<span class="quotelev2">&gt;&gt; +++++-----------
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/hnp/Makefile.am               |     4
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp.c              |   426
</span><br>
<span class="quotelev2">&gt;&gt; +++++++++++++++++++++++++++++----------
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp.h              |   102 +++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/hnp/errmgr_hnp_component.c    |   200
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++++++++---
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/hnp/help-orte-errmgr-hnp.txt  |    29 ++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/errmgr/orted/errmgr_orted.c          |    34 +-
</span><br>
<span class="quotelev2">&gt;&gt;   16 files changed, 738 insertions(+), 619 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diff not shown due to size (166344 bytes).
</span><br>
<span class="quotelev2">&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        svn diff -r 23627:23628 --no-diff-deleted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8296/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8297.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8295.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
<li><strong>In reply to:</strong> <a href="8295.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
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
