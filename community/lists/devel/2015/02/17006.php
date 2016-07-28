<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 08:27:15 2015" -->
<!-- isoreceived="20150220132715" -->
<!-- sent="Fri, 20 Feb 2015 13:27:14 +0000" -->
<!-- isosent="20150220132714" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="FED7356F-59FA-4C97-93ED-939F7D78D495_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54E715E7.5000207_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran issue<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 08:27:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17007.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17007.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17007.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles is correct.  The same kind of increment happens in all the test/wait Fortran code that returns indexes.
<br>
<p>&quot;Mr. Fortran&quot;?  Ouch.  :-)
<br>
<p><p><span class="quotelev1">&gt; On Feb 20, 2015, at 6:09 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is correctly handled in ompi_testany_f :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* Increment index by one for fortran conventions.  Note that
</span><br>
<span class="quotelev1">&gt;            all Fortran compilers have FALSE==0; we just need to check
</span><br>
<span class="quotelev1">&gt;            for any nonzero value (because TRUE is not always 1) */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2015/02/20 1:15, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; While looking the MPI_Testany issue, I came across a very unsettling
</span><br>
<span class="quotelev2">&gt;&gt; sentence in the MPI standard (3.0 page 58 line 36).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The array is indexed from zero in C, and from one in Fortran.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This sentence seems to indicate that the index returned by the TestAny and
</span><br>
<span class="quotelev2">&gt;&gt; TestSome (as well as the corresponding Wait functions) should be indexed
</span><br>
<span class="quotelev2">&gt;&gt; starting from 1 in Fortran, but from 0 in C. Our C code returns all indexes
</span><br>
<span class="quotelev2">&gt;&gt; starting from 0 (C), but I failed to find where we handle this case in
</span><br>
<span class="quotelev2">&gt;&gt; Fortran? Or maybe I am interpreting too much the MPI standard?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16994.php">http://www.open-mpi.org/community/lists/devel/2015/02/16994.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17005.php">http://www.open-mpi.org/community/lists/devel/2015/02/17005.php</a>
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
<li><strong>Next message:</strong> <a href="17007.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17005.php">Gilles Gouaillardet: "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17007.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17007.php">George Bosilca: "Re: [OMPI devel] Fortran issue"</a>
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
