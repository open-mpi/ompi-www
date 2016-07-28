<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 11:10:29 2012" -->
<!-- isoreceived="20120830151029" -->
<!-- sent="Thu, 30 Aug 2012 17:10:22 +0200" -->
<!-- isosent="20120830151022" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base" -->
<!-- id="47C91ABD-D496-4454-8BEC-E610BE677E8C_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120828171735.1A41D15FD63_at_tiger.crest.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 11:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11463.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>Previous message:</strong> <a href="11461.php">Ralph Castain: "Re: [OMPI devel] trunk broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11463.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>Reply:</strong> <a href="11463.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A strange race condition happening for undisclosed reasons, and only fixable by replication is jeopardizing our reference count system. That sounds definitively almost scary (!) 
<br>
<p>I think that the proposed solution is just a band-aid. It somehow fixes this particular instance of the issue but leave all the others unpatched, asking for troubles later on. This problem has been lingering around for years, but we failed to address it correctly up to now.
<br>
<p>Based on my understanding of the code the problem is not with the ref count but with the way opal_buffer_t is handled. We have no way to retrieve the pointer where the data in the opal_buffer_t is stored without a destructive operation. This means every time we need to have the pointer of the opal_buffer_t (like in the send operation to build the iovecs), we have to do a load followed by an unload, leaving the opal_buffer_t uninitialized for a short amount of time. As a result it is completely unsafe to use the same opal_buffer_t concurrently for multiple operations, as some callbacks can find the buffer uninitialized when they fire.
<br>
<p><p>Now regarding the patch itself, I have to congratulate the Open MPI community for its unbelievable response time. A solution proposed, then tested on the faulty platforms, then the code carefully reviewed and finally pushed in a stable branch all in a mere 43 minutes (!). It shows that all the protection mechanism we put in place around our stable branches are entirely functional and their role is completely fulfilled. I doubt any other open source project can claim such a feat. Congratulations!
<br>
<p>commit in the trunk @ Timestamp: 08/28/12 13:17:34 (6 hours ago)
<br>
commit in the 1.7   @ Timestamp: 08/28/12 14:00:10 (5 hours ago)
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Aug 28, 2012, at 19:17 , svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2012-08-28 13:17:34 EDT (Tue, 28 Aug 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 27161
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27161">https://svn.open-mpi.org/trac/ompi/changeset/27161</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix a strange race condition by creating a separate buffer for each send - apparently, just a retain isn't enough protection on some systems
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11463.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>Previous message:</strong> <a href="11461.php">Ralph Castain: "Re: [OMPI devel] trunk broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11463.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>Reply:</strong> <a href="11463.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
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
