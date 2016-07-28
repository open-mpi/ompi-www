<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 27 15:55:38 2005" -->
<!-- isoreceived="20051027205538" -->
<!-- sent="Fri, 28 Oct 2005 04:57:54 -0700" -->
<!-- isosent="20051028115754" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re:  [OMPI svn] svn:open-mpi-tests r422" -->
<!-- id="43621242.6050709_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="436211CF.3040606_at_cs.uh.edu" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-28 06:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0501.php">Brian Barrett: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<li><strong>In reply to:</strong> <a href="0499.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would like to appologize for this email, I obviously mixed up to email 
<br>
compose windows :-)
<br>
<p>Edgar
<br>
<p><p>Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; Hi Hatem,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am very probably gone today by 5.30, can we maybe reschedule our 
</span><br>
<span class="quotelev1">&gt; meeting for tomorrow, maybe 11am?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; brbarret_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Author: brbarret
</span><br>
<span class="quotelev2">&gt;&gt;Date: 2005-10-27 14:45:14 -0500 (Thu, 27 Oct 2005)
</span><br>
<span class="quotelev2">&gt;&gt;New Revision: 422
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Added:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ibm/onesided/c_create_no_free.c
</span><br>
<span class="quotelev2">&gt;&gt;Modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ibm/onesided/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt;Log:
</span><br>
<span class="quotelev2">&gt;&gt;* add test to make sure something somewhat interesting happens if we forget to
</span><br>
<span class="quotelev2">&gt;&gt;  free a window
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Modified: trunk/ibm/onesided/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt;===================================================================
</span><br>
<span class="quotelev2">&gt;&gt;--- trunk/ibm/onesided/Makefile.am	2005-10-27 15:53:14 UTC (rev 421)
</span><br>
<span class="quotelev2">&gt;&gt;+++ trunk/ibm/onesided/Makefile.am	2005-10-27 19:45:14 UTC (rev 422)
</span><br>
<span class="quotelev2">&gt;&gt;@@ -13,6 +13,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; c_programs	= \
</span><br>
<span class="quotelev2">&gt;&gt; 		c_create \
</span><br>
<span class="quotelev2">&gt;&gt; 		c_create_info \
</span><br>
<span class="quotelev2">&gt;&gt;+		c_create_no_free \
</span><br>
<span class="quotelev2">&gt;&gt; 		c_win_attr \
</span><br>
<span class="quotelev2">&gt;&gt; 		c_win_errhandler \
</span><br>
<span class="quotelev2">&gt;&gt; 		c_fence_simple \
</span><br>
<span class="quotelev2">&gt;&gt;@@ -48,6 +49,10 @@
</span><br>
<span class="quotelev2">&gt;&gt; c_create_info_LDADD	= $(libs)
</span><br>
<span class="quotelev2">&gt;&gt; c_create_info_DEPENDENCIES = $(deps)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;+c_create_no_free_SOURCES	= c_create_no_free.c
</span><br>
<span class="quotelev2">&gt;&gt;+c_create_no_free_LDADD	= $(libs)
</span><br>
<span class="quotelev2">&gt;&gt;+c_create_no_free_DEPENDENCIES = $(deps)
</span><br>
<span class="quotelev2">&gt;&gt;+
</span><br>
<span class="quotelev2">&gt;&gt; c_win_attr_SOURCES	= c_win_attr.c
</span><br>
<span class="quotelev2">&gt;&gt; c_win_attr_LDADD	= $(libs)
</span><br>
<span class="quotelev2">&gt;&gt; c_win_attr_DEPENDENCIES = $(deps)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Added: trunk/ibm/onesided/c_create_no_free.c
</span><br>
<span class="quotelev2">&gt;&gt;===================================================================
</span><br>
<span class="quotelev2">&gt;&gt;--- trunk/ibm/onesided/c_create_no_free.c	2005-10-27 15:53:14 UTC (rev 421)
</span><br>
<span class="quotelev2">&gt;&gt;+++ trunk/ibm/onesided/c_create_no_free.c	2005-10-27 19:45:14 UTC (rev 422)
</span><br>
<span class="quotelev2">&gt;&gt;@@ -0,0 +1,31 @@
</span><br>
<span class="quotelev2">&gt;&gt;+/*
</span><br>
<span class="quotelev2">&gt;&gt;+ * $HEADER$
</span><br>
<span class="quotelev2">&gt;&gt;+ *
</span><br>
<span class="quotelev2">&gt;&gt;+ * Purpose of test:
</span><br>
<span class="quotelev2">&gt;&gt;+ *   - check that simple window create / destroy works properly
</span><br>
<span class="quotelev2">&gt;&gt;+ */
</span><br>
<span class="quotelev2">&gt;&gt;+
</span><br>
<span class="quotelev2">&gt;&gt;+#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;+
</span><br>
<span class="quotelev2">&gt;&gt;+#include &quot;ompitest_error.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;+
</span><br>
<span class="quotelev2">&gt;&gt;+int 
</span><br>
<span class="quotelev2">&gt;&gt;+main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt;+{
</span><br>
<span class="quotelev2">&gt;&gt;+    int buffer, rank, size;
</span><br>
<span class="quotelev2">&gt;&gt;+    MPI_Win Win;
</span><br>
<span class="quotelev2">&gt;&gt;+    MPI_Aint sizeOfInt;
</span><br>
<span class="quotelev2">&gt;&gt;+
</span><br>
<span class="quotelev2">&gt;&gt;+    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;+
</span><br>
<span class="quotelev2">&gt;&gt;+    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;+    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;+
</span><br>
<span class="quotelev2">&gt;&gt;+    MPI_Type_extent(MPI_INT, &amp;sizeOfInt);
</span><br>
<span class="quotelev2">&gt;&gt;+
</span><br>
<span class="quotelev2">&gt;&gt;+    MPI_Win_create(&amp;buffer, sizeOfInt, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev2">&gt;&gt;+                   MPI_COMM_WORLD, &amp;Win);
</span><br>
<span class="quotelev2">&gt;&gt;+
</span><br>
<span class="quotelev2">&gt;&gt;+    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;+    return 0;
</span><br>
<span class="quotelev2">&gt;&gt;+}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt;svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Department of Computer Science          email:gabriel_at_[hidden]
University of Houston                   <a href="http://www.cs.uh.edu/~gabriel">http://www.cs.uh.edu/~gabriel</a>
Philip G. Hoffman Hall, Room 524        Tel: +1 (713) 743-3857
Houston, TX-77204, USA                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0501.php">Brian Barrett: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<li><strong>In reply to:</strong> <a href="0499.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
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
