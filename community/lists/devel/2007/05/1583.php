<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 27 12:32:37 2007" -->
<!-- isoreceived="20070527163237" -->
<!-- sent="Sun, 27 May 2007 10:32:26 -0600" -->
<!-- isosent="20070527163226" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14780" -->
<!-- id="500B3A0A-60A2-4E6E-8610-3FC9E7B6211F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200705270829.l4R8Td1j006251_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-27 12:32:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1584.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<li><strong>Previous message:</strong> <a href="1582.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1587.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14780"</a>
<li><strong>Reply:</strong> <a href="1587.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14780"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can we get rid of mca_pml_ob1_send_fin_btl and just have  
<br>
mca_pml_ob1_send_fin? It seems we should just always send the fin  
<br>
over the same btl and this would clean up the code a bit.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><p><p>On May 27, 2007, at 2:29 AM, gleb_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: gleb
</span><br>
<span class="quotelev1">&gt; Date: 2007-05-27 04:29:38 EDT (Sun, 27 May 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 14780
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/14780">https://svn.open-mpi.org/trac/ompi/changeset/14780</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix out of resource handling for FIN packets broken by r14768.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/ob1/pml_ob1.c |     7 +++----
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mca/pml/ob1/pml_ob1.h |    14 ++++++++++++--
</span><br>
<span class="quotelev1">&gt;    2 files changed, 15 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1.c
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1.c	2007-05-27 04:29:38 EDT (Sun,  
</span><br>
<span class="quotelev1">&gt; 27 May 2007)
</span><br>
<span class="quotelev1">&gt; @@ -249,7 +249,7 @@
</span><br>
<span class="quotelev1">&gt;      MCA_PML_OB1_PROGRESS_PENDING(bml_btl);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -int mca_pml_ob1_send_fin(
</span><br>
<span class="quotelev1">&gt; +int mca_pml_ob1_send_fin_btl(
</span><br>
<span class="quotelev1">&gt;          ompi_proc_t* proc,
</span><br>
<span class="quotelev1">&gt;          mca_bml_base_btl_t* bml_btl,
</span><br>
<span class="quotelev1">&gt;          void *hdr_des,
</span><br>
<span class="quotelev1">&gt; @@ -260,9 +260,8 @@
</span><br>
<span class="quotelev1">&gt;      mca_pml_ob1_fin_hdr_t* hdr;
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -    MCA_PML_OB1_DES_ALLOC(bml_btl, fin, order,  sizeof 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_fin_hdr_t));
</span><br>
<span class="quotelev1">&gt; +    MCA_PML_OB1_DES_ALLOC(bml_btl, fin, order, sizeof 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_fin_hdr_t));
</span><br>
<span class="quotelev1">&gt;      if(NULL == fin) {
</span><br>
<span class="quotelev1">&gt; -        MCA_PML_OB1_ADD_FIN_TO_PENDING(proc, hdr_des, bml_btl,  
</span><br>
<span class="quotelev1">&gt; order);
</span><br>
<span class="quotelev1">&gt;          return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      fin-&gt;des_flags |= MCA_BTL_DES_FLAGS_PRIORITY;
</span><br>
<span class="quotelev1">&gt; @@ -349,7 +348,7 @@
</span><br>
<span class="quotelev1">&gt;                  }
</span><br>
<span class="quotelev1">&gt;                  break;
</span><br>
<span class="quotelev1">&gt;              case MCA_PML_OB1_HDR_TYPE_FIN:
</span><br>
<span class="quotelev1">&gt; -                rc = mca_pml_ob1_send_fin(pckt-&gt;proc, send_dst,
</span><br>
<span class="quotelev1">&gt; +                rc = mca_pml_ob1_send_fin_btl(pckt-&gt;proc, send_dst,
</span><br>
<span class="quotelev1">&gt;                                            pckt- 
</span><br>
<span class="quotelev2">&gt; &gt;hdr.hdr_fin.hdr_des.pval,
</span><br>
<span class="quotelev1">&gt;                                            pckt-&gt;order);
</span><br>
<span class="quotelev1">&gt;                  MCA_PML_OB1_PCKT_PENDING_RETURN(pckt);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1.h	2007-05-27 04:29:38 EDT (Sun,  
</span><br>
<span class="quotelev1">&gt; 27 May 2007)
</span><br>
<span class="quotelev1">&gt; @@ -283,9 +283,19 @@
</span><br>
<span class="quotelev1">&gt;      } while(0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -int mca_pml_ob1_send_fin(ompi_proc_t* proc, mca_bml_base_btl_t*  
</span><br>
<span class="quotelev1">&gt; bml_btl,
</span><br>
<span class="quotelev1">&gt; -                         void *hdr_des, uint8_t order);
</span><br>
<span class="quotelev1">&gt; +int mca_pml_ob1_send_fin_btl(ompi_proc_t* proc,  
</span><br>
<span class="quotelev1">&gt; mca_bml_base_btl_t* bml_btl,
</span><br>
<span class="quotelev1">&gt; +        void *hdr_des, uint8_t order);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +static inline int mca_pml_ob1_send_fin(ompi_proc_t* proc, void  
</span><br>
<span class="quotelev1">&gt; *hdr_des,
</span><br>
<span class="quotelev1">&gt; +        mca_bml_base_btl_t* bml_btl, uint8_t order)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +     if(mca_pml_ob1_send_fin_btl(proc, bml_btl, hdr_des, order) ==  
</span><br>
<span class="quotelev1">&gt; OMPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt; +         return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    MCA_PML_OB1_ADD_FIN_TO_PENDING(proc, hdr_des, bml_btl, order);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return OMPI_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* This function tries to resend FIN/ACK packets from pckt_pending  
</span><br>
<span class="quotelev1">&gt; queue.
</span><br>
<span class="quotelev1">&gt;   * Packets are added to the queue when sending of FIN or ACK is  
</span><br>
<span class="quotelev1">&gt; failed due to
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1584.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14782"</a>
<li><strong>Previous message:</strong> <a href="1582.php">Galen Shipman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14768"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1587.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14780"</a>
<li><strong>Reply:</strong> <a href="1587.php">Gleb Natapov: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14780"</a>
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
