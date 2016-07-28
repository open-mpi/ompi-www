<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 09:23:56 2007" -->
<!-- isoreceived="20070814132356" -->
<!-- sent="Tue, 14 Aug 2007 09:23:43 -0400" -->
<!-- isosent="20070814132343" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848" -->
<!-- id="46C1ACDF.30506_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200708132151.l7DLp6dO029777_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-14 09:23:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2146.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Previous message:</strong> <a href="2144.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2146.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Reply:</strong> <a href="2146.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This might be breaking things on odin. All our 64 bit openib mtt tests 
<br>
have the following output:
<br>
<p>[odin003.cs.indiana.edu:30971] Wrong QP specification (QP 0 
<br>
&quot;P,128,256,128,16:S,1024,256,128,32:S,4096,256,128,32:S,65536,256,128,32&quot;). 
<br>
Point-to-point QP get 1-5 parameters
<br>
<p>However, on my debug build I do not get any errors. Is anyone else 
<br>
seeing this?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p><p>jsquyres_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2007-08-13 17:51:05 EDT (Mon, 13 Aug 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 15848
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/15848">https://svn.open-mpi.org/trac/ompi/changeset/15848</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Change the default receive_queues value per
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2100.php">http://www.open-mpi.org/community/lists/devel/2007/08/2100.php</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/btl/openib/btl_openib_mca.c |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/btl/openib/btl_openib_mca.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_mca.c	2007-08-13 17:51:05 EDT (Mon, 13 Aug 2007)
</span><br>
<span class="quotelev1">&gt; @@ -477,7 +477,7 @@
</span><br>
<span class="quotelev1">&gt;      char *str;
</span><br>
<span class="quotelev1">&gt;      char **queues, **params = NULL;
</span><br>
<span class="quotelev1">&gt;      int num_pp_qps = 0, num_srq_qps = 0, qp = 0, ret = OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt; -    char *default_qps = &quot;P,128,16,4;S,1024,256,128,32;S,4096,256,128,32;S,65536,256,128,32&quot;;
</span><br>
<span class="quotelev1">&gt; +    char *default_qps = &quot;P,128,256,128,16:S,1024,256,128,32:S,4096,256,128,32:S,65536,256,128,32&quot;;
</span><br>
<span class="quotelev1">&gt;      uint32_t max_qp_size, max_size_needed;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      reg_string(&quot;receive_queues&quot;,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2146.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Previous message:</strong> <a href="2144.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2146.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Reply:</strong> <a href="2146.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
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
