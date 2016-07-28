<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 27 15:53:44 2005" -->
<!-- isoreceived="20051027205344" -->
<!-- sent="Fri, 28 Oct 2005 04:55:59 -0700" -->
<!-- isosent="20051028115559" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re:  [OMPI svn] svn:open-mpi-tests r422" -->
<!-- id="436211CF.3040606_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200510271945.j9RJjF5R025961_at_magrathea.osl.iu.edu" -->
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
<strong>Date:</strong> 2005-10-28 06:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0500.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<li><strong>Previous message:</strong> <a href="0498.php">Tim S. Woodall: "Re:  [PATCH] openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0500.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<li><strong>Reply:</strong> <a href="0500.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hatem,
<br>
<p>I am very probably gone today by 5.30, can we maybe reschedule our 
<br>
meeting for tomorrow, maybe 11am?
<br>
<p>Best regards
<br>
Edgar
<br>
<p>brbarret_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: brbarret
</span><br>
<span class="quotelev1">&gt; Date: 2005-10-27 14:45:14 -0500 (Thu, 27 Oct 2005)
</span><br>
<span class="quotelev1">&gt; New Revision: 422
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/ibm/onesided/c_create_no_free.c
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ibm/onesided/Makefile.am
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; * add test to make sure something somewhat interesting happens if we forget to
</span><br>
<span class="quotelev1">&gt;   free a window
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ibm/onesided/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ibm/onesided/Makefile.am	2005-10-27 15:53:14 UTC (rev 421)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ibm/onesided/Makefile.am	2005-10-27 19:45:14 UTC (rev 422)
</span><br>
<span class="quotelev1">&gt; @@ -13,6 +13,7 @@
</span><br>
<span class="quotelev1">&gt;  c_programs	= \
</span><br>
<span class="quotelev1">&gt;  		c_create \
</span><br>
<span class="quotelev1">&gt;  		c_create_info \
</span><br>
<span class="quotelev1">&gt; +		c_create_no_free \
</span><br>
<span class="quotelev1">&gt;  		c_win_attr \
</span><br>
<span class="quotelev1">&gt;  		c_win_errhandler \
</span><br>
<span class="quotelev1">&gt;  		c_fence_simple \
</span><br>
<span class="quotelev1">&gt; @@ -48,6 +49,10 @@
</span><br>
<span class="quotelev1">&gt;  c_create_info_LDADD	= $(libs)
</span><br>
<span class="quotelev1">&gt;  c_create_info_DEPENDENCIES = $(deps)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +c_create_no_free_SOURCES	= c_create_no_free.c
</span><br>
<span class="quotelev1">&gt; +c_create_no_free_LDADD	= $(libs)
</span><br>
<span class="quotelev1">&gt; +c_create_no_free_DEPENDENCIES = $(deps)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  c_win_attr_SOURCES	= c_win_attr.c
</span><br>
<span class="quotelev1">&gt;  c_win_attr_LDADD	= $(libs)
</span><br>
<span class="quotelev1">&gt;  c_win_attr_DEPENDENCIES = $(deps)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/ibm/onesided/c_create_no_free.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ibm/onesided/c_create_no_free.c	2005-10-27 15:53:14 UTC (rev 421)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ibm/onesided/c_create_no_free.c	2005-10-27 19:45:14 UTC (rev 422)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,31 @@
</span><br>
<span class="quotelev1">&gt; +/*
</span><br>
<span class="quotelev1">&gt; + * $HEADER$
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Purpose of test:
</span><br>
<span class="quotelev1">&gt; + *   - check that simple window create / destroy works properly
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompitest_error.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +int 
</span><br>
<span class="quotelev1">&gt; +main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    int buffer, rank, size;
</span><br>
<span class="quotelev1">&gt; +    MPI_Win Win;
</span><br>
<span class="quotelev1">&gt; +    MPI_Aint sizeOfInt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; +    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    MPI_Type_extent(MPI_INT, &amp;sizeOfInt);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    MPI_Win_create(&amp;buffer, sizeOfInt, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev1">&gt; +                   MPI_COMM_WORLD, &amp;Win);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; +    return 0;
</span><br>
<span class="quotelev1">&gt; +}
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
<li><strong>Next message:</strong> <a href="0500.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<li><strong>Previous message:</strong> <a href="0498.php">Tim S. Woodall: "Re:  [PATCH] openib btl."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0500.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
<li><strong>Reply:</strong> <a href="0500.php">Edgar Gabriel: "Re:  [OMPI svn] svn:open-mpi-tests r422"</a>
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
