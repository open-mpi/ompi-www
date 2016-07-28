<?
$subject_val = "Re: [OMPI devel] Quick fix for MPI_Publish_name";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  5 12:15:01 2011" -->
<!-- isoreceived="20110305171501" -->
<!-- sent="Sat, 5 Mar 2011 10:14:51 -0700" -->
<!-- isosent="20110305171451" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Quick fix for MPI_Publish_name" -->
<!-- id="ACEB9463-B908-42ED-AE89-A115E0A444AB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D711519.5090704_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Quick fix for MPI_Publish_name<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-05 12:14:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9026.php">Jeff Squyres: "[OMPI devel] 1.5.2rc4 is posted"</a>
<li><strong>Previous message:</strong> <a href="9024.php">Suraj Prabhakaran: "[OMPI devel]  Quick fix for MPI_Publish_name"</a>
<li><strong>In reply to:</strong> <a href="9024.php">Suraj Prabhakaran: "[OMPI devel]  Quick fix for MPI_Publish_name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9037.php">Christopher Samuel: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, it isn't quite that simple, but I do appreciate the suggestion - and the prod to get this fixed!
<br>
<p>The change was required to help tools properly connect in some scenarios. Unfortunately, the logic was too simple and broke the ompi-server case. I've fixed it in the trunk, and will port the fix to 1.4 and 1.5 series.
<br>
<p>Thanks again!
<br>
Ralph
<br>
<p>On Mar 4, 2011, at 9:36 AM, Suraj Prabhakaran wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Referring to the following bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2681">https://svn.open-mpi.org/trac/ompi/ticket/2681</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that MPI_Publish_name was hanging, in fact, any call that contacted the ompi-server was hanging. By looking at all communication between the application and ompi-server, it seemed that the ompi-server was getting the wrong/bad route to reach the application in order to send back the answer of publish/lookup/unpublish. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In orte/mca/routed/binomial/routed_binomial.c, I found the following loc in the get_route() function,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (ORTE_PROC_IS_TOOL) {
</span><br>
<span class="quotelev1">&gt;         ret = target;
</span><br>
<span class="quotelev1">&gt;         goto found;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which, I believe, returned the target directly as the route to any tool. Comparing with 1.4.3, I could not understand the change that brought in the above case. So I simply commented it out and ompi-server worked perfect with all the calls doing their job.
</span><br>
<span class="quotelev1">&gt; What I do not know if this affects any other tool. 
</span><br>
<span class="quotelev1">&gt; Hope this is useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Suraj Prabhakaran
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9025/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9026.php">Jeff Squyres: "[OMPI devel] 1.5.2rc4 is posted"</a>
<li><strong>Previous message:</strong> <a href="9024.php">Suraj Prabhakaran: "[OMPI devel]  Quick fix for MPI_Publish_name"</a>
<li><strong>In reply to:</strong> <a href="9024.php">Suraj Prabhakaran: "[OMPI devel]  Quick fix for MPI_Publish_name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9037.php">Christopher Samuel: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
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
