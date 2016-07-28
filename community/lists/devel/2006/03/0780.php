<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 30 21:37:08 2006" -->
<!-- isoreceived="20060331023708" -->
<!-- sent="Thu, 30 Mar 2006 19:37:05 -0700" -->
<!-- isosent="20060331023705" -->
<!-- name="Sushant Sharma" -->
<!-- email="sushant_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9489" -->
<!-- id="442C95D1.8070800_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C9F19771-EF0D-4B3D-A289-ECEFC9B19C18_at_cs.utk.edu" -->
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
<strong>From:</strong> Sushant Sharma (<em>sushant_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-30 21:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0781.php">Christian Kauhaus: "[OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0779.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9489"</a>
<li><strong>In reply to:</strong> <a href="0779.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9489"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I think that the config/ompi_check_xcpu.m4 somehow slipped out from  
</span><br>
<span class="quotelev1">&gt; the commit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Sorry about that. I just fixed it.
<br>
<p>-Sushant
<br>
<p><span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2006, at 8:28 PM, sushant_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: sushant
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2006-03-30 20:28:07 EST (Thu, 30 Mar 2006)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 9489
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/acinclude.m4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Added xcpu component in pls and soh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/acinclude.m4
</span><br>
<span class="quotelev2">&gt;&gt; ====================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; ========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/acinclude.m4	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/acinclude.m4	2006-03-30 20:28:07 EST (Thu, 30 Mar 2006)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -63,6 +63,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  m4_include(config/ompi_check_gm.m4)
</span><br>
<span class="quotelev2">&gt;&gt;  m4_include(config/ompi_check_mx.m4)
</span><br>
<span class="quotelev2">&gt;&gt;  m4_include(config/ompi_check_bproc.m4)
</span><br>
<span class="quotelev2">&gt;&gt; +m4_include(config/ompi_check_xcpu.m4)
</span><br>
<span class="quotelev2">&gt;&gt;  m4_include(config/ompi_check_mvapi.m4)
</span><br>
<span class="quotelev2">&gt;&gt;  m4_include(config/ompi_check_openib.m4)
</span><br>
<span class="quotelev2">&gt;&gt;  m4_include(config/ompi_check_udapl.m4)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="0781.php">Christian Kauhaus: "[OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0779.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9489"</a>
<li><strong>In reply to:</strong> <a href="0779.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9489"</a>
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
