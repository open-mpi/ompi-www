<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 22:50:11 2007" -->
<!-- isoreceived="20070718025011" -->
<!-- sent="Tue, 17 Jul 2007 22:49:45 -0400" -->
<!-- isosent="20070718024945" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474" -->
<!-- id="0DC24D06-4B14-4855-8838-C35B724E2590_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200707180116.l6I1G1SK030796_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 22:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1920.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1918.php">Ralph Castain: "[OMPI devel] FW:  Major reduction in ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1921.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<li><strong>Reply:</strong> <a href="1921.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you really want to have a fully featured barrier why not using the  
<br>
collective barrier ? This double ring barrier have really bad  
<br>
performance, and it will became a real scalability issue.
<br>
<p>Or do we really need to force this particular connection shape (left  
<br>
&amp; right) ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>Modified: trunk/ompi/runtime/ompi_mpi_preconnect.c
<br>
======================================================================== 
<br>
======
<br>
--- trunk/ompi/runtime/ompi_mpi_preconnect.c	(original)
<br>
+++ trunk/ompi/runtime/ompi_mpi_preconnect.c	2007-07-17 21:15:59 EDT  
<br>
(Tue, 17 Jul 2007)
<br>
@@ -78,6 +78,22 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = ompi_request_wait_all(2, requests, MPI_STATUSES_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != ret) return ret;
<br>
+
<br>
+        ret = MCA_PML_CALL(isend(outbuf, 1, MPI_CHAR,
<br>
+                                 next, 1,
<br>
+                                 MCA_PML_BASE_SEND_COMPLETE,
<br>
+                                 MPI_COMM_WORLD,
<br>
+                                 &amp;requests[1]));
<br>
+        if (OMPI_SUCCESS != ret) return ret;
<br>
+
<br>
+        ret = MCA_PML_CALL(irecv(inbuf, 1, MPI_CHAR,
<br>
+                                 prev, 1,
<br>
+                                 MPI_COMM_WORLD,
<br>
+                                 &amp;requests[0]));
<br>
+        if(OMPI_SUCCESS != ret) return ret;
<br>
+
<br>
+        ret = ompi_request_wait_all(2, requests, MPI_STATUSES_IGNORE);
<br>
+        if (OMPI_SUCCESS != ret) return ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
<p><p>On Jul 17, 2007, at 9:16 PM, jsquyres_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2007-07-17 21:15:59 EDT (Tue, 17 Jul 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15474
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15474">https://svn.open-mpi.org/trac/ompi/changeset/15474</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1920.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1918.php">Ralph Castain: "[OMPI devel] FW:  Major reduction in ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1921.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<li><strong>Reply:</strong> <a href="1921.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
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
