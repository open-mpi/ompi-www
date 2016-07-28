<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 11:56:28 2012" -->
<!-- isoreceived="20120309165628" -->
<!-- sent="Fri, 9 Mar 2012 11:56:23 -0500" -->
<!-- isosent="20120309165623" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106" -->
<!-- id="7B4FA3AC-21D4-4639-9B0C-292CFB1B1F9A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="413A26C7-9F3B-4EE1-9D4A-6928FB9169ED_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 11:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10697.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10695.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10686.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10697.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10697.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>I believe that this is the subject of a few long-standing tickets (i.e., what to do when running out of registered memory -- right now, we hang, for a few reasons).  I think that this is Mellanox's attempt to at least warn the user that we have run out of registered memory, and will therefore hang.
<br>
<p>Once the hangs have been fixed, I'm assuming this message can be removed.
<br>
<p>Note, too, that this is in the BTL registration code (openib_reg_mr), not in the directly-invoked-by-the-PML code.  So it's the mpool's fault -- not the PML's fault.
<br>
<p><p><p>On Mar 6, 2012, at 10:05 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I din't check thoroughly the code, but OMPI_ERR_OUT_OF_RESOURCES is not an error. If the registration returns out of resources, the BTL will returns OUT_OF_RESOURCE (as an example via the mca_btl_openib_prepare_src). At the upper level, the PML (in the mca_pml_ob1_send_request_start function) intercept it and insert the request into a pending list. Later on this pending list will be examined and the request for resource re-issued.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why do we need to trigger a BTL_ERROR for OUT_OF_RESOURCES?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2012, at 09:48 , Jeffrey Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Mike --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would make this a bit better of an error.  I.e., use orte_show_help(), so you can explain the issue more, and also remove all duplicates (i.e., if it fails to register multiple times).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 6, 2012, at 8:25 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Author: miked
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: 2012-03-06 09:25:56 EST (Tue, 06 Mar 2012)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; New Revision: 26106
</span><br>
<span class="quotelev3">&gt; &gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26106">https://svn.open-mpi.org/trac/ompi/changeset/26106</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; print error which is ignored on upper layer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  trunk/ompi/mca/btl/openib/btl_openib_component.c |     2 ++                                     
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  1 files changed, 2 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c (original)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c 2012-03-06 09:25:56 EST (Tue, 06 Mar 2012)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -569,6 +569,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    openib_reg-&gt;mr = ibv_reg_mr(device-&gt;ib_pd, base, size, access_flag);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    if (NULL == openib_reg-&gt;mr) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        BTL_ERROR((&quot;%s: error pinning openib memory errno says %s&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +                       __func__, strerror(errno)));
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="10697.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10695.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10686.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10697.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10697.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
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
