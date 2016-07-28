<?
$subject_val = "Re: [OMPI devel] openib currently broken";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 15:57:18 2007" -->
<!-- isoreceived="20071102195718" -->
<!-- sent="Fri, 02 Nov 2007 15:57:11 -0400" -->
<!-- isosent="20071102195711" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib currently broken" -->
<!-- id="472B8117.4070507_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C350DF68.10429%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-02 15:57:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2540.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2538.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<li><strong>In reply to:</strong> <a href="2536.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2540.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Reply:</strong> <a href="2540.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rich,
<br>
<p>Do the ompi_free_list changes impact the sm btl?   Solaris SPARC sm btl 
<br>
seems to have an issue starting with last nights put back but I have not 
<br>
looked into it yet.
<br>
<p>-DON
<br>
<p>Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; R16641 should have fixed the regression.  Anyone using 
</span><br>
<span class="quotelev1">&gt; ompi_free_list_t_ex() and providing
</span><br>
<span class="quotelev1">&gt;  a memory allocator would have been bitten by this, since I did not 
</span><br>
<span class="quotelev1">&gt; update this function
</span><br>
<span class="quotelev1">&gt;  (which will be deprecated in favor of a version parallel to 
</span><br>
<span class="quotelev1">&gt; ompi_free_list_t_new) to initialize
</span><br>
<span class="quotelev1">&gt;  the new fields defined.  From looking through the btls, this seems to 
</span><br>
<span class="quotelev1">&gt; be only the openib btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/2/07 12:31 PM, &quot;Richard Graham&quot; &lt;rlgraham_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 11/2/07 12:21 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The freelist changes from yesterday appear to have broken the
</span><br>
<span class="quotelev1">&gt;         openib
</span><br>
<span class="quotelev1">&gt;         btl.  We didn't get lots of test failures in MTT last night only
</span><br>
<span class="quotelev1">&gt;         because there was a separate (unrelated) typo in the ofud BTL
</span><br>
<span class="quotelev1">&gt;         that  
</span><br>
<span class="quotelev1">&gt;         prevented the nightly tarball from building on any IB-capable
</span><br>
<span class="quotelev1">&gt;         machines.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Rich hopes to look into fixing the openib BTL problem today; he
</span><br>
<span class="quotelev1">&gt;         thinks it's a case of a simple oversight: the openib BTL is
</span><br>
<span class="quotelev1">&gt;         not using
</span><br>
<span class="quotelev1">&gt;         the new freelist init functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Rich: are there other places that are not using the new init
</span><br>
<span class="quotelev1">&gt;         functions that need to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the ompi free list has two init functions, I changed just
</span><br>
<span class="quotelev1">&gt;         one.  The IB btl uses the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one I have not yet changed, but the pml uses the one I did
</span><br>
<span class="quotelev1">&gt;         change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         --
</span><br>
<span class="quotelev1">&gt;         Jeff Squyres
</span><br>
<span class="quotelev1">&gt;         Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2540.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2538.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<li><strong>In reply to:</strong> <a href="2536.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2540.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Reply:</strong> <a href="2540.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
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
