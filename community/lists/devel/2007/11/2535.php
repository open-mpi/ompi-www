<?
$subject_val = "Re: [OMPI devel] openib currently broken";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 12:31:30 2007" -->
<!-- isoreceived="20071102163130" -->
<!-- sent="Fri, 02 Nov 2007 12:31:15 -0400" -->
<!-- isosent="20071102163115" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib currently broken" -->
<!-- id="C350C913.1040C%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A979B02C-03C9-4247-8429-97B98406D525_at_cisco.com" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-02 12:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2536.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2534.php">Jeff Squyres: "[OMPI devel] openib currently broken"</a>
<li><strong>In reply to:</strong> <a href="2534.php">Jeff Squyres: "[OMPI devel] openib currently broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2536.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Reply:</strong> <a href="2536.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/2/07 12:21 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The freelist changes from yesterday appear to have broken the openib
</span><br>
<span class="quotelev1">&gt; btl.  We didn't get lots of test failures in MTT last night only
</span><br>
<span class="quotelev1">&gt; because there was a separate (unrelated) typo in the ofud BTL that
</span><br>
<span class="quotelev1">&gt; prevented the nightly tarball from building on any IB-capable
</span><br>
<span class="quotelev1">&gt; machines.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich hopes to look into fixing the openib BTL problem today; he
</span><br>
<span class="quotelev1">&gt; thinks it's a case of a simple oversight: the openib BTL is not using
</span><br>
<span class="quotelev1">&gt; the new freelist init functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich: are there other places that are not using the new init
</span><br>
<span class="quotelev1">&gt; functions that need to?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; the ompi free list has two init functions, I changed just one.  The IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl uses the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; one I have not yet changed, but the pml uses the one I did change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2535/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2536.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2534.php">Jeff Squyres: "[OMPI devel] openib currently broken"</a>
<li><strong>In reply to:</strong> <a href="2534.php">Jeff Squyres: "[OMPI devel] openib currently broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2536.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Reply:</strong> <a href="2536.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
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
