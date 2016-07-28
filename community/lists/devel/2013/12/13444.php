<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 15 16:12:17 2013" -->
<!-- isoreceived="20131215211217" -->
<!-- sent="Sun, 15 Dec 2013 16:11:51 -0500" -->
<!-- isosent="20131215211151" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte" -->
<!-- id="1AD6281A-0BE6-4CC4-A2D6-5C915389C97D_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C754C787-81A1-43EA-A1DF-D86885B7184B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-15 16:11:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13445.php">Adrian Reber: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13443.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>In reply to:</strong> <a href="13443.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2013, at 15:40 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Not true, George - look more closely at the code. We only retrieve the hostname if the number of procs is low. Otherwise, we do *not* retrieve it until we do a modex_recv, and thus the debug is now broken at scale. This was required for scalable launch, which is something I know is important to you as well.
</span><br>
<p>Sure, if you trust the comment in the file. Unfortunately the comment is wrong, nobody is setting the hostnam of prods we&#146;re talking about.
<br>
<p>Moreover the real meaning of the cutoff parameters is clearly defined in the snippet below:
<br>
<p><span class="quotelev1">&gt; r29052 [[BR]]
</span><br>
<span class="quotelev1">&gt; As per the email discussion, revise the sparse handling of hostnames so
</span><br>
<span class="quotelev1">&gt; that we avoid potential infinite loops while allowing large-scale users to
</span><br>
<span class="quotelev1">&gt; improve their startup time:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * add a new MCA param orte_hostname_cutoff to specify the number of nodes
</span><br>
<span class="quotelev1">&gt; at which we stop including hostnames. This defaults to INT_MAX =&gt; always
</span><br>
<span class="quotelev1">&gt; include hostnames. If a value is given, then we will include hostnames for
</span><br>
<span class="quotelev1">&gt; any allocation smaller than the given limit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * remove ompi_proc_get_hostname. Replace all occurrences with a direct
</span><br>
<span class="quotelev1">&gt; link to ompi_proc_t&#146;s proc_hostname, protected by appropriate &quot;if NULL&quot;
</span><br>
<p>The comment above is about scalability.
<br>
<p><span class="quotelev1">&gt; Modifying the API isn't a big deal, so why the fuss? Let's just change it and get the debug working again.
</span><br>
<p><p>Here is how I see the thing. I made a change to remove a deadlock and maintain the scalability of the codebase, a change that does not affect the normal use of the OMPI debug facility for most of the users. From here on, feel free to improve on the existing code as much as you feel necessary as long as you maintain the above properties. Enough has been said about this topic, I will now pursue my other interests.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;George.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13445.php">Adrian Reber: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<li><strong>Previous message:</strong> <a href="13443.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>In reply to:</strong> <a href="13443.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
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
