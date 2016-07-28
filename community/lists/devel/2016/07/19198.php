<?
$subject_val = "Re: [OMPI devel] MCA_SPML_CALL call in compiled objects";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 08:52:03 2016" -->
<!-- isoreceived="20160713125203" -->
<!-- sent="Wed, 13 Jul 2016 12:52:01 +0000" -->
<!-- isosent="20160713125201" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA_SPML_CALL call in compiled objects" -->
<!-- id="34AF4785-D04C-4130-B810-31AECEFFA58D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="008701d1dbf3$140d3200$3c279600$_at_nci.org.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA_SPML_CALL call in compiled objects<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 08:52:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19199.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Previous message:</strong> <a href="19197.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19177.php">Ben Menadue: "[OMPI devel] MCA_SPML_CALL call in compiled objects"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ben.  Rainer Keller just filed a PR for this -- we'll get it in v2.0.1:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/pull/1867">https://github.com/open-mpi/ompi/pull/1867</a>
<br>
<p><p><span class="quotelev1">&gt; On Jul 12, 2016, at 12:08 AM, Ben Menadue &lt;ben.menadue_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like there's a #include missing from
</span><br>
<span class="quotelev1">&gt; oshmem/shmem/fortran/shmem_put_nb_f.c. It's causing MCA_SPML_CALL to show up
</span><br>
<span class="quotelev1">&gt; as an undefined symbol, even though it's a macro (among other things). The
</span><br>
<span class="quotelev1">&gt; #include is in shmem_get_nb_f.c but not ..._put_...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patch against master (0e433ea):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ git diff
</span><br>
<span class="quotelev1">&gt; diff --git a/oshmem/shmem/fortran/shmem_put_nb_f.c
</span><br>
<span class="quotelev1">&gt; b/oshmem/shmem/fortran/shmem_put_nb_f.c
</span><br>
<span class="quotelev1">&gt; index 3acff9c..acfb22d 100644
</span><br>
<span class="quotelev1">&gt; --- a/oshmem/shmem/fortran/shmem_put_nb_f.c
</span><br>
<span class="quotelev1">&gt; +++ b/oshmem/shmem/fortran/shmem_put_nb_f.c
</span><br>
<span class="quotelev1">&gt; @@ -13,6 +13,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;oshmem/include/shmem.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;oshmem/shmem/shmem_api_logger.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;oshmem/runtime/runtime.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;oshmem/mca/spml/spml.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/datatype/ompi_datatype.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;stdio.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19177.php">http://www.open-mpi.org/community/lists/devel/2016/07/19177.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19199.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Previous message:</strong> <a href="19197.php">Howard Pritchard: "Re: [OMPI devel] 2.0.0rc4 Crash in MPI_File_write_all_end"</a>
<li><strong>In reply to:</strong> <a href="19177.php">Ben Menadue: "[OMPI devel] MCA_SPML_CALL call in compiled objects"</a>
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
