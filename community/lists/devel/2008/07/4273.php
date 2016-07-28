<?
$subject_val = "Re: [OMPI devel] open ib dependency question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 16:40:58 2008" -->
<!-- isoreceived="20080703204058" -->
<!-- sent="Thu, 03 Jul 2008 23:40:51 +0300" -->
<!-- isosent="20080703204051" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib dependency question" -->
<!-- id="486D3953.2020404_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0D9E4C85-B825-4C45-821C-63E82DE6C9F4_at_cisco.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 16:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4274.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18804"</a>
<li><strong>Previous message:</strong> <a href="4272.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>In reply to:</strong> <a href="4271.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4275.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Ok:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/ompi/ticket/1375">https://svn.open-mpi.org/trac/ompi/ticket/1375</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think any of us could do this -- it's pretty straightforward.  No 
</span><br>
<span class="quotelev1">&gt; guarantees on when I can get to it; my 1.3 list is already pretty long...
</span><br>
No problem. I will take this one.
<br>
Pasha.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 3, 2008, at 6:20 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you need configury to disable building ibcm / rdmacm support?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The more I think about it, the more I think that these would be good 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; features to have for v1.3...
</span><br>
<span class="quotelev2">&gt;&gt; I had similar issue recently. It will be nice to have option to 
</span><br>
<span class="quotelev2">&gt;&gt; disable/enable *CM via config flags.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 3, 2008, at 2:52 AM, Don Kerr wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I did not think it was required but it hung me up when I built ompi 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on one system which had the ibcm libraries and then ran on a system 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without the ibcm libs. I had another issue on the system without 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ibcm libs which prevented my building there but I will go down that 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; path again. Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That is the IBCM library for the IBCM CPC -- IB connection manager 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stuff.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It's not *necessary*; you could use the OOB CPC if you want to.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That being said, OMPI currently builds support for it (and links 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it in) if it finds the right headers and library files. We don't 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; currently have configury to disable this behavior (and *not* build 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RDMACM and/or IBCM support).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do you have a problem / need to disable building support for IBCM?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 2, 2008, at 12:02 PM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It appears that the mca_btl_openib.so has a dependency on 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libibcm.so. Is this necessary?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4274.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18804"</a>
<li><strong>Previous message:</strong> <a href="4272.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>In reply to:</strong> <a href="4271.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4275.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
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
