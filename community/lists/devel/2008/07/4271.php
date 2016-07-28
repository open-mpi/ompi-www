<?
$subject_val = "Re: [OMPI devel] open ib dependency question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 14:59:48 2008" -->
<!-- isoreceived="20080703185948" -->
<!-- sent="Thu, 3 Jul 2008 11:59:42 -0700" -->
<!-- isosent="20080703185942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib dependency question" -->
<!-- id="0D9E4C85-B825-4C45-821C-63E82DE6C9F4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="486CD203.3050905_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-07-03 14:59:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4272.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>Previous message:</strong> <a href="4270.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>In reply to:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4273.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4273.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4275.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4278.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1375">https://svn.open-mpi.org/trac/ompi/ticket/1375</a>
<br>
<p>I think any of us could do this -- it's pretty straightforward.  No  
<br>
guarantees on when I can get to it; my 1.3 list is already pretty  
<br>
long...
<br>
<p><p>On Jul 3, 2008, at 6:20 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Do you need configury to disable building ibcm / rdmacm support?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The more I think about it, the more I think that these would be  
</span><br>
<span class="quotelev2">&gt;&gt; good features to have for v1.3...
</span><br>
<span class="quotelev1">&gt; I had similar issue recently. It will be nice to have option to  
</span><br>
<span class="quotelev1">&gt; disable/enable *CM via config flags.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 3, 2008, at 2:52 AM, Don Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did not think it was required but it hung me up when I built  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi on one system which had the ibcm libraries and then ran on a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system without the ibcm libs. I had another issue on the system  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without ibcm libs which prevented my building there but I will go  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; down that path again. Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That is the IBCM library for the IBCM CPC -- IB connection  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; manager stuff.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's not *necessary*; you could use the OOB CPC if you want to.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That being said, OMPI currently builds support for it (and links  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it in) if it finds the right headers and library files. We don't  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; currently have configury to disable this behavior (and *not*  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build RDMACM and/or IBCM support).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you have a problem / need to disable building support for IBCM?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 2, 2008, at 12:02 PM, Don Kerr wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It appears that the mca_btl_openib.so has a dependency on  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibcm.so. Is this necessary?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4272.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>Previous message:</strong> <a href="4270.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>In reply to:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4273.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4273.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4275.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4278.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
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
