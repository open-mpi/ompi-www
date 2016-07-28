<?
$subject_val = "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 17:57:38 2008" -->
<!-- isoreceived="20080212225738" -->
<!-- sent="Tue, 12 Feb 2008 17:57:22 -0500" -->
<!-- isosent="20080212225722" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1." -->
<!-- id="E0047DC0-9AAA-453C-B8CB-6881AF468FDD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080212102717.GJ10354_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 17:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3228.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3226.php">Jeff Squyres: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>In reply to:</strong> <a href="3194.php">Gleb Natapov: "[OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3232.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>Reply:</strong> <a href="3232.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Were these supposed to cover the time required for pinning and  
<br>
unpinning?
<br>
<p>Can you explain why you think they're unnecessary?
<br>
<p><p>On Feb 12, 2008, at 5:27 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am planning to commit the following patch. Those two progress()  
</span><br>
<span class="quotelev1">&gt; calls
</span><br>
<span class="quotelev1">&gt; are responsible for most of our deep recursion troubles. And I also
</span><br>
<span class="quotelev1">&gt; think they are completely unnecessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_recvreq.c b/ompi/mca/pml/ob1/ 
</span><br>
<span class="quotelev1">&gt; pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; index 5899243..641176e 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; @@ -704,9 +704,6 @@ int mca_pml_ob1_recv_request_schedule_once(
</span><br>
<span class="quotelev1">&gt;             mca_bml_base_free(bml_btl,dst);
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -        /* run progress as the prepare (pinning) can take some time  
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; -        mca_bml.bml_progress();
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_sendreq.c b/ompi/mca/pml/ob1/ 
</span><br>
<span class="quotelev1">&gt; pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; index 0998a05..9d7f3f9 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; @@ -968,7 +968,6 @@ cannot_pack:
</span><br>
<span class="quotelev1">&gt;             mca_bml_base_free(bml_btl,des);
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        mca_bml.bml_progress();
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="3228.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3226.php">Jeff Squyres: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>In reply to:</strong> <a href="3194.php">Gleb Natapov: "[OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3232.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>Reply:</strong> <a href="3232.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
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
