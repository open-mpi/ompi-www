<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 12:59:25 2012" -->
<!-- isoreceived="20120309175925" -->
<!-- sent="Fri, 9 Mar 2012 10:59:20 -0700 (MST)" -->
<!-- isosent="20120309175920" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106" -->
<!-- id="alpine.OSX.2.00.1203091048190.711_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B4FA3AC-21D4-4639-9B0C-292CFB1B1F9A_at_cisco.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 12:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10698.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10696.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10696.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10698.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10698.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not exactly, the PML invokes the mpool which invokes the registration function. If registration fails the mpool will deregister from its lru (if possible) and try again. So, it is not an error if ibv_reg_mr fails unless it fails because the process is starved of registered memory (or truely run out).
<br>
<p>The hang occurs because there is nothing on the lru to deregister and ibv_reg_mr (or GNI_MemRegister in the uGNI case) fails. The PML then puts the request on its rdma pending list and continues. If any message comes in the rdma pending list is progressed. If not it hangs indefinitely!
<br>
<p>In general I have found the underlying cause of the hang is due to an imbalance of registrations between processes on a node. i.e the hung process has an empty lru but other processes could deregister. I am working on a new mpool (grdma) to handle the imbalance. The new mpool will allow a process to request that one of its peers deregisters from it lru if possible. I have a working proof of concept implementation that uses a posix shmem segment and a progress function to handle signaling and dereferencing. With it I no longer see hangs with IMB Alltoall/Alltoallv on uGNI (without putting an artificial limit on the number of registrations). I will test the mpool on infiniband later today.
<br>
<p>-Nathan
<br>
<p>On Fri, 9 Mar 2012, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that this is the subject of a few long-standing tickets (i.e., what to do when running out of registered memory -- right now, we hang, for a few reasons).  I think that this is Mellanox's attempt to at least warn the user that we have run out of registered memory, and will therefore hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once the hangs have been fixed, I'm assuming this message can be removed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note, too, that this is in the BTL registration code (openib_reg_mr), not in the directly-invoked-by-the-PML code.  So it's the mpool's fault -- not the PML's fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2012, at 10:05 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I din't check thoroughly the code, but OMPI_ERR_OUT_OF_RESOURCES is not an error. If the registration returns out of resources, the BTL will returns OUT_OF_RESOURCE (as an example via the mca_btl_openib_prepare_src). At the upper level, the PML (in the mca_pml_ob1_send_request_start function) intercept it and insert the request into a pending list. Later on this pending list will be examined and the request for resource re-issued.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why do we need to trigger a BTL_ERROR for OUT_OF_RESOURCES?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 6, 2012, at 09:48 , Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mike --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would make this a bit better of an error.  I.e., use orte_show_help(), so you can explain the issue more, and also remove all duplicates (i.e., if it fails to register multiple times).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 6, 2012, at 8:25 AM, miked_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: miked
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2012-03-06 09:25:56 EST (Tue, 06 Mar 2012)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 26106
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26106">https://svn.open-mpi.org/trac/ompi/changeset/26106</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; print error which is ignored on upper layer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/btl/openib/btl_openib_component.c |     2 ++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  1 files changed, 2 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/mca/btl/openib/btl_openib_component.c (original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/btl/openib/btl_openib_component.c 2012-03-06 09:25:56 EST (Tue, 06 Mar 2012)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -569,6 +569,8 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    openib_reg-&gt;mr = ibv_reg_mr(device-&gt;ib_pd, base, size, access_flag);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if (NULL == openib_reg-&gt;mr) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        BTL_ERROR((&quot;%s: error pinning openib memory errno says %s&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                       __func__, strerror(errno)));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10698.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10696.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10696.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10698.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Reply:</strong> <a href="10698.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
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
