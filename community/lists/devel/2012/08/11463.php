<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 11:15:38 2012" -->
<!-- isoreceived="20120830151538" -->
<!-- sent="Thu, 30 Aug 2012 08:15:30 -0700" -->
<!-- isosent="20120830151530" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base" -->
<!-- id="57866435-BAF6-48C1-BE60-3C07CA2D74E5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47C91ABD-D496-4454-8BEC-E610BE677E8C_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 11:15:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11464.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>Previous message:</strong> <a href="11462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>In reply to:</strong> <a href="11462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11464.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>Reply:</strong> <a href="11464.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 30, 2012, at 8:10 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A strange race condition happening for undisclosed reasons, and only fixable by replication is jeopardizing our reference count system. That sounds definitively almost scary (!) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that the proposed solution is just a band-aid. It somehow fixes this particular instance of the issue but leave all the others unpatched, asking for troubles later on. This problem has been lingering around for years, but we failed to address it correctly up to now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Based on my understanding of the code the problem is not with the ref count but with the way opal_buffer_t is handled. We have no way to retrieve the pointer where the data in the opal_buffer_t is stored without a destructive operation. This means every time we need to have the pointer of the opal_buffer_t (like in the send operation to build the iovecs), we have to do a load followed by an unload, leaving the opal_buffer_t uninitialized for a short amount of time. As a result it is completely unsafe to use the same opal_buffer_t concurrently for multiple operations, as some callbacks can find the buffer uninitialized when they fire.
</span><br>
<p>That is correct - and yes, it is a bandaid. Fixing the opal_buffer_t situation is a much bigger issue that will require more time and effort than we had at the moment.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now regarding the patch itself, I have to congratulate the Open MPI community for its unbelievable response time. A solution proposed, then tested on the faulty platforms, then the code carefully reviewed and finally pushed in a stable branch all in a mere 43 minutes (!). It shows that all the protection mechanism we put in place around our stable branches are entirely functional and their role is completely fulfilled. I doubt any other open source project can claim such a feat. Congratulations!
</span><br>
<p>As always, George - thanks for your positive, inspirational attitude. I'm sure we all truly appreciate your input.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit in the trunk @ Timestamp: 08/28/12 13:17:34 (6 hours ago)
</span><br>
<span class="quotelev1">&gt; commit in the 1.7   @ Timestamp: 08/28/12 14:00:10 (5 hours ago)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2012, at 19:17 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-08-28 13:17:34 EDT (Tue, 28 Aug 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 27161
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27161">https://svn.open-mpi.org/trac/ompi/changeset/27161</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fix a strange race condition by creating a separate buffer for each send - apparently, just a retain isn't enough protection on some systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11464.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>Previous message:</strong> <a href="11462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>In reply to:</strong> <a href="11462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11464.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>Reply:</strong> <a href="11464.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
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
