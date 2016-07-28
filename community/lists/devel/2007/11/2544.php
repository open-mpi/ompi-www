<?
$subject_val = "Re: [OMPI devel] openib currently broken";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  4 12:04:42 2007" -->
<!-- isoreceived="20071104170442" -->
<!-- sent="Sun, 04 Nov 2007 12:04:27 -0400" -->
<!-- isosent="20071104160427" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib currently broken" -->
<!-- id="C35365CB.10479%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF010D2F56_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2007-11-04 11:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2545.php">Terry Dontje: "[OMPI devel] accessors to context id and message id's"</a>
<li><strong>Previous message:</strong> <a href="2543.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<li><strong>In reply to:</strong> <a href="2542.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2543.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Much higher (23), but in way over-subscribed mode ...
<br>
<p><p>On 11/2/07 8:07 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Did you run with a higher number of procs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From:   Richard Graham [mailto:rlgraham_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent:   Friday, November 02, 2007 04:05 PM Eastern Standard Time
</span><br>
<span class="quotelev1">&gt; To:     Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject:        Re: [OMPI devel] openib currently broken
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does.  I was able to run the point-to-point intel tests with 3 procs
</span><br>
<span class="quotelev1">&gt; using sm and self, ob1 and dr.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/2/07 3:57 PM, &quot;Don Kerr&quot; &lt;Don.Kerr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Rich,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Do the ompi_free_list changes impact the sm btl?   Solaris SPARC sm btl
</span><br>
<span class="quotelev3">&gt;&gt; &gt; seems to have an issue starting with last nights put back but I have not
</span><br>
<span class="quotelev3">&gt;&gt; &gt; looked into it yet.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -DON
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; R16641 should have fixed the regression.  Anyone using
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ompi_free_list_t_ex() and providing
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;  a memory allocator would have been bitten by this, since I did not
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; update this function
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;  (which will be deprecated in favor of a version parallel to
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ompi_free_list_t_new) to initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;  the new fields defined.  From looking through the btls, this seems to
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; be only the openib btl.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Rich
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On 11/2/07 12:31 PM, &quot;Richard Graham&quot; &lt;rlgraham_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;     On 11/2/07 12:21 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         The freelist changes from yesterday appear to have broken the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         openib
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         btl.  We didn't get lots of test failures in MTT last night only
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         because there was a separate (unrelated) typo in the ofud BTL
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         that
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         prevented the nightly tarball from building on any IB-capable
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         machines.  :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         Rich hopes to look into fixing the openib BTL problem today; he
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         thinks it's a case of a simple oversight: the openib BTL is
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         not using
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         the new freelist init functions.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         Rich: are there other places that are not using the new init
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         functions that need to?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; the ompi free list has two init functions, I changed just
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         one.  The IB btl uses the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; one I have not yet changed, but the pml uses the one I did
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         change.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; rich
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         --
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2544/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2545.php">Terry Dontje: "[OMPI devel] accessors to context id and message id's"</a>
<li><strong>Previous message:</strong> <a href="2543.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<li><strong>In reply to:</strong> <a href="2542.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2543.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
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
