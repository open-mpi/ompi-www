<?
$subject_val = "Re: [OMPI devel] oshmem Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 18 10:17:18 2013" -->
<!-- isoreceived="20131018141718" -->
<!-- sent="Fri, 18 Oct 2013 07:17:14 -0700" -->
<!-- isosent="20131018141714" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem Fortran" -->
<!-- id="26CE5DD5-04F0-4EAC-8AB7-5AE4ECAD428F_at_open-mpi.org" -->
<!-- charset="windows-1251" -->
<!-- inreplyto="526135A1.2030004_at_itseez.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem Fortran<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-18 10:17:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Previous message:</strong> <a href="13105.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>In reply to:</strong> <a href="13105.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Reply:</strong> <a href="13107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Then I would suggest you stick with &quot;oshmem&quot; to be clear you mean OpenSHMEM
<br>
<p>On Oct 18, 2013, at 6:20 AM, Igor Ivanov &lt;igor.ivanov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As I know OpenSHMEM is an effort to create a standardized SHMEM library for C and Fortran. SGI&#146;s SHMEM API is the baseline for OpenSHMEM Specification 1.0.
</span><br>
<span class="quotelev1">&gt; Most of OpenSHMEM API functions can be found in different SHMEM API implementations but there are functions that are specific for SGI`s, Cray`s etc products.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SIte www.shmem.org says that &quot;The SHMEM&#153; Application Programming Interface (API) definition and the SHMEM trademark are the property of SGI. &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Igor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 18.10.2013 16:33, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 18, 2013, at 1:18 AM, Igor Ivanov &lt;igor.ivanov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there naming convention related configure options in OMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you see any objections about --enable-oshmem-xxx or they must be replaced with --enable-shmem-xxx?
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  Good question.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know enough about shmem vs. open shmem to say.  Is the API the same?  If the API is the same, then you make a good point -- perhaps we should replace all --with-oshmem-xxx and --enable-oshmem-xxx with --with-shmem-xxx and --enable-shmem-xxx, respectively.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Supporting this view, we have several --with-mpi-xxx switches (i.e., we don't have --with-ompi-xxx switches).  But this works because Open MPI is just an implementation of MPI.  Forgive my shmem ignorance: is the oshmem/ layer an implementation of Shmem?  Or an implementation of Open Shmem?  (is there a difference between the two?)
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="13107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Previous message:</strong> <a href="13105.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>In reply to:</strong> <a href="13105.php">Igor Ivanov: "Re: [OMPI devel] oshmem Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>Reply:</strong> <a href="13107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem Fortran"</a>
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
