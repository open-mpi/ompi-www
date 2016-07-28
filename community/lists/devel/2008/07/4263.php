<?
$subject_val = "Re: [OMPI devel] open ib dependency question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 05:52:12 2008" -->
<!-- isoreceived="20080703095212" -->
<!-- sent="Thu, 03 Jul 2008 05:52:07 -0400" -->
<!-- isosent="20080703095207" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib dependency question" -->
<!-- id="486CA147.7070301_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="35B579E9-5083-4851-9DC3-5E4FC773D198_at_cisco.com" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 05:52:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4264.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4262.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4262.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4264.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4264.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did not think it was required but it hung me up when I built ompi on 
<br>
one system which had the ibcm libraries and then ran on a system without 
<br>
the ibcm libs. I had another issue on the system without ibcm libs which 
<br>
prevented my building there but I will go down that path again. Thanks.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; That is the IBCM library for the IBCM CPC -- IB connection manager stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not *necessary*; you could use the OOB CPC if you want to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, OMPI currently builds support for it (and links it 
</span><br>
<span class="quotelev1">&gt; in) if it finds the right headers and library files. We don't 
</span><br>
<span class="quotelev1">&gt; currently have configury to disable this behavior (and *not* build 
</span><br>
<span class="quotelev1">&gt; RDMACM and/or IBCM support).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have a problem / need to disable building support for IBCM?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 2, 2008, at 12:02 PM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It appears that the mca_btl_openib.so has a dependency on libibcm.so. 
</span><br>
<span class="quotelev2">&gt;&gt; Is this necessary?
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4264.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4262.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4262.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4264.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4264.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
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
