<?
$subject_val = "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 10:03:06 2008" -->
<!-- isoreceived="20080213150306" -->
<!-- sent="Wed, 13 Feb 2008 10:02:45 -0500" -->
<!-- isosent="20080213150245" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1." -->
<!-- id="DEBA25BE-0898-4CFA-A656-606D71E69670_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080213082418.GL10354_at_minantech.com" -->
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
<strong>Date:</strong> 2008-02-13 10:02:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3244.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3242.php">Gleb Natapov: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>In reply to:</strong> <a href="3232.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good enough for me.  I'd also say that the comments should be  
<br>
fixed.  :-)
<br>
<p>On Feb 13, 2008, at 3:24 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Feb 12, 2008 at 05:57:22PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Were these supposed to cover the time required for pinning and
</span><br>
<span class="quotelev2">&gt;&gt; unpinning?
</span><br>
<span class="quotelev1">&gt; That what the comment says, but CPU executes code and not comments :)
</span><br>
<span class="quotelev1">&gt; Memory pinning happens inside prepare_dst() after prepare_dst()  
</span><br>
<span class="quotelev1">&gt; returns
</span><br>
<span class="quotelev1">&gt; the memory is already pinned. If you want to call progress after each
</span><br>
<span class="quotelev1">&gt; call to prepare_dst() you still can do it by setting  
</span><br>
<span class="quotelev1">&gt; recv_pipeline_depth
</span><br>
<span class="quotelev1">&gt; to 1. And unpinning happens in entirely different place after RDMA
</span><br>
<span class="quotelev1">&gt; completion is acknowledged.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you explain why you think they're unnecessary?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The much better question is &quot;Why they are necessary?&quot;, because if  
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev1">&gt; is not good answer to this question then they should be removed, since
</span><br>
<span class="quotelev1">&gt; they are harmful as they cause uncontrollable recursion calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 12, 2008, at 5:27 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am planning to commit the following patch. Those two progress()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are responsible for most of our deep recursion troubles. And I also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think they are completely unnecessary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_recvreq.c b/ompi/mca/pml/ob1/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pml_ob1_recvreq.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 5899243..641176e 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -704,9 +704,6 @@ int mca_pml_ob1_recv_request_schedule_once(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            mca_bml_base_free(bml_btl,dst);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        /* run progress as the prepare (pinning) can take some time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        mca_bml.bml_progress();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_sendreq.c b/ompi/mca/pml/ob1/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pml_ob1_sendreq.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 0998a05..9d7f3f9 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -968,7 +968,6 @@ cannot_pack:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            mca_bml_base_free(bml_btl,des);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        mca_bml.bml_progress();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return OMPI_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			Gleb.
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3244.php">Doug Tody: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3242.php">Gleb Natapov: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>In reply to:</strong> <a href="3232.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<!-- nextthread="start" -->
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
