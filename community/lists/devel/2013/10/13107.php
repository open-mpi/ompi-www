<?
$subject_val = "Re: [OMPI devel] oshmem Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 18 11:02:25 2013" -->
<!-- isoreceived="20131018150225" -->
<!-- sent="Fri, 18 Oct 2013 15:01:58 +0000" -->
<!-- isosent="20131018150158" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem Fortran" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F97C974_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="windows-1251" -->
<!-- inreplyto="26CE5DD5-04F0-4EAC-8AB7-5AE4ECAD428F_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-18 11:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13108.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI shirts and more"</a>
<li><strong>Previous message:</strong> <a href="13106.php">Ralph Castain: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>In reply to:</strong> <a href="13106.php">Ralph Castain: "Re: [OMPI devel] oshmem Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1.
<br>
<p>On Oct 18, 2013, at 10:17 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Then I would suggest you stick with &quot;oshmem&quot; to be clear you mean OpenSHMEM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 18, 2013, at 6:20 AM, Igor Ivanov &lt;igor.ivanov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I know OpenSHMEM is an effort to create a standardized SHMEM library for C and Fortran. SGI&#146;s SHMEM API is the baseline for OpenSHMEM Specification 1.0.
</span><br>
<span class="quotelev2">&gt;&gt; Most of OpenSHMEM API functions can be found in different SHMEM API implementations but there are functions that are specific for SGI`s, Cray`s etc products.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SIte www.shmem.org says that &quot;The SHMEM&#153; Application Programming Interface (API) definition and the SHMEM trademark are the property of SGI. &quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Igor
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 18.10.2013 16:33, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 18, 2013, at 1:18 AM, Igor Ivanov &lt;igor.ivanov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there naming convention related configure options in OMPI?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you see any objections about --enable-oshmem-xxx or they must be replaced with --enable-shmem-xxx?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmm.  Good question.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know enough about shmem vs. open shmem to say.  Is the API the same?  If the API is the same, then you make a good point -- perhaps we should replace all --with-oshmem-xxx and --enable-oshmem-xxx with --with-shmem-xxx and --enable-shmem-xxx, respectively.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supporting this view, we have several --with-mpi-xxx switches (i.e., we don't have --with-ompi-xxx switches).  But this works because Open MPI is just an implementation of MPI.  Forgive my shmem ignorance: is the oshmem/ layer an implementation of Shmem?  Or an implementation of Open Shmem?  (is there a difference between the two?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13108.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI shirts and more"</a>
<li><strong>Previous message:</strong> <a href="13106.php">Ralph Castain: "Re: [OMPI devel] oshmem Fortran"</a>
<li><strong>In reply to:</strong> <a href="13106.php">Ralph Castain: "Re: [OMPI devel] oshmem Fortran"</a>
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
