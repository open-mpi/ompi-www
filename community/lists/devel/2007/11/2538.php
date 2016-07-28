<?
$subject_val = "Re: [OMPI devel] openib currently broken";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 15:27:06 2007" -->
<!-- isoreceived="20071102192706" -->
<!-- sent="Fri, 2 Nov 2007 15:26:49 -0400" -->
<!-- isosent="20071102192649" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib currently broken" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF010D2F52_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] openib currently broken" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-02 15:26:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2539.php">Don Kerr: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2537.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2534.php">Jeff Squyres: "[OMPI devel] openib currently broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2541.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Reply:</strong> <a href="2541.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rich -
<br>
<p>I'm not 100% sure its fixed - I'm still seeing &quot;out of memory&quot; errors when running about 40 prob imb over openib.  But I ran out of time to investigate deeply...
<br>
<p>Could you try running a nontrivial omb to check?
<br>
<p>-jms
<br>
Sent from my PDA
<br>
<p>&nbsp;-----Original Message-----
<br>
From: 	Richard Graham [mailto:rlgraham_at_[hidden]]
<br>
Sent:	Friday, November 02, 2007 02:07 PM Eastern Standard Time
<br>
To:	Open MPI Developers
<br>
Subject:	Re: [OMPI devel] openib currently broken
<br>
<p>R16641 should have fixed the regression.  Anyone using ompi_free_list_t_ex()
<br>
and providing
<br>
&nbsp;a memory allocator would have been bitten by this, since I did not update
<br>
this function
<br>
&nbsp;(which will be deprecated in favor of a version parallel to
<br>
ompi_free_list_t_new) to initialize
<br>
&nbsp;the new fields defined.  From looking through the btls, this seems to be
<br>
only the openib btl.
<br>
<p>Rich
<br>
<p><p>On 11/2/07 12:31 PM, &quot;Richard Graham&quot; &lt;rlgraham_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/2/07 12:21 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The freelist changes from yesterday appear to have broken the openib
</span><br>
<span class="quotelev2">&gt;&gt; btl.  We didn't get lots of test failures in MTT last night only
</span><br>
<span class="quotelev2">&gt;&gt; because there was a separate (unrelated) typo in the ofud BTL that
</span><br>
<span class="quotelev2">&gt;&gt; prevented the nightly tarball from building on any IB-capable
</span><br>
<span class="quotelev2">&gt;&gt; machines.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rich hopes to look into fixing the openib BTL problem today; he
</span><br>
<span class="quotelev2">&gt;&gt; thinks it's a case of a simple oversight: the openib BTL is not using
</span><br>
<span class="quotelev2">&gt;&gt; the new freelist init functions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rich: are there other places that are not using the new init
</span><br>
<span class="quotelev2">&gt;&gt; functions that need to?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; the ompi free list has two init functions, I changed just one.  The IB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl uses the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; one I have not yet changed, but the pml uses the one I did change.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; rich
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2538/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2539.php">Don Kerr: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2537.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2534.php">Jeff Squyres: "[OMPI devel] openib currently broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2541.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Reply:</strong> <a href="2541.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
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
