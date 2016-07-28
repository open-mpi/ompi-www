<?
$subject_val = "Re: [OMPI devel] Fortran issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 10:01:03 2015" -->
<!-- isoreceived="20150220150103" -->
<!-- sent="Fri, 20 Feb 2015 10:01:00 -0500" -->
<!-- isosent="20150220150100" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran issue" -->
<!-- id="CAMJJpkVzYnRb+_ZpYhx4xE40hKQgDC9oH5GdaxqB1RZ2ELbEsA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FED7356F-59FA-4C97-93ED-939F7D78D495_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-20 10:01:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17008.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17008.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17008.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great. Using grep I couldn't find how this is handled anywhere in the
<br>
source directory. But it seems to me that the Fortran layer is now way more
<br>
complicated than I initially thought.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, Feb 20, 2015 at 8:27 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Gilles is correct.  The same kind of increment happens in all the
</span><br>
<span class="quotelev1">&gt; test/wait Fortran code that returns indexes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Mr. Fortran&quot;?  Ouch.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 20, 2015, at 6:09 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; George,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; this is correctly handled in ompi_testany_f :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         /* Increment index by one for fortran conventions.  Note that
</span><br>
<span class="quotelev2">&gt; &gt;            all Fortran compilers have FALSE==0; we just need to check
</span><br>
<span class="quotelev2">&gt; &gt;            for any nonzero value (because TRUE is not always 1) */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2015/02/20 1:15, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; While looking the MPI_Testany issue, I came across a very unsettling
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sentence in the MPI standard (3.0 page 58 line 36).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The array is indexed from zero in C, and from one in Fortran.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This sentence seems to indicate that the index returned by the TestAny
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; TestSome (as well as the corresponding Wait functions) should be indexed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; starting from 1 in Fortran, but from 0 in C. Our C code returns all
</span><br>
<span class="quotelev1">&gt; indexes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; starting from 0 (C), but I failed to find where we handle this case in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fortran? Or maybe I am interpreting too much the MPI standard?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16994.php">http://www.open-mpi.org/community/lists/devel/2015/02/16994.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17005.php">http://www.open-mpi.org/community/lists/devel/2015/02/17005.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17006.php">http://www.open-mpi.org/community/lists/devel/2015/02/17006.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17008.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Previous message:</strong> <a href="17006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>In reply to:</strong> <a href="17006.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17008.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<li><strong>Reply:</strong> <a href="17008.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
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
