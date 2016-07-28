<?
$subject_val = "Re: [OMPI devel] open ib dependency question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 08:11:58 2008" -->
<!-- isoreceived="20080703121158" -->
<!-- sent="Thu, 3 Jul 2008 05:11:50 -0700" -->
<!-- isosent="20080703121150" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib dependency question" -->
<!-- id="B474FBF1-6662-4EA5-A26E-083102394B21_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="486CA147.7070301_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] open ib dependency question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 08:11:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4265.php">Jeff Squyres: "[OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Previous message:</strong> <a href="4263.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4263.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you need configury to disable building ibcm / rdmacm support?
<br>
<p>The more I think about it, the more I think that these would be good  
<br>
features to have for v1.3...
<br>
<p><p>On Jul 3, 2008, at 2:52 AM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; I did not think it was required but it hung me up when I built ompi  
</span><br>
<span class="quotelev1">&gt; on one system which had the ibcm libraries and then ran on a system  
</span><br>
<span class="quotelev1">&gt; without the ibcm libs. I had another issue on the system without  
</span><br>
<span class="quotelev1">&gt; ibcm libs which prevented my building there but I will go down that  
</span><br>
<span class="quotelev1">&gt; path again. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That is the IBCM library for the IBCM CPC -- IB connection manager  
</span><br>
<span class="quotelev2">&gt;&gt; stuff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's not *necessary*; you could use the OOB CPC if you want to.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That being said, OMPI currently builds support for it (and links it  
</span><br>
<span class="quotelev2">&gt;&gt; in) if it finds the right headers and library files. We don't  
</span><br>
<span class="quotelev2">&gt;&gt; currently have configury to disable this behavior (and *not* build  
</span><br>
<span class="quotelev2">&gt;&gt; RDMACM and/or IBCM support).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have a problem / need to disable building support for IBCM?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 2, 2008, at 12:02 PM, Don Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It appears that the mca_btl_openib.so has a dependency on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibcm.so. Is this necessary?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4265.php">Jeff Squyres: "[OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Previous message:</strong> <a href="4263.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4263.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
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
