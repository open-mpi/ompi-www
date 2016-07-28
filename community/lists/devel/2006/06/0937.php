<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 13 13:10:47 2006" -->
<!-- isoreceived="20060613171047" -->
<!-- sent="Tue, 13 Jun 2006 13:10:40 -0400" -->
<!-- isosent="20060613171040" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r10331" -->
<!-- id="15F37D37-D857-49CA-B5F0-382F1B8B31D7_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200606131657.k5DGvnD3024383_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-13 13:10:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0938.php">Matthijs Richard Koot: "[OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
<li><strong>Previous message:</strong> <a href="0936.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi r10316"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How can we deliver more bytes that we are supposed to ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 13, 2006, at 12:57 PM, gshipman_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ========
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_sendreq.h	2006-06-13 12:57:41  
</span><br>
<span class="quotelev1">&gt; EDT (Tue, 13 Jun 2006)
</span><br>
<span class="quotelev1">&gt; @@ -318,7 +318,7 @@
</span><br>
<span class="quotelev1">&gt;  do  
</span><br>
<span class="quotelev1">&gt; {                                                                      
</span><br>
<span class="quotelev1">&gt;          \
</span><br>
<span class="quotelev1">&gt;      /* has an acknowledgment been received  
</span><br>
<span class="quotelev1">&gt; */                                     \
</span><br>
<span class="quotelev1">&gt;      if(OPAL_THREAD_ADD32(&amp;sendreq-&gt;req_state, 1) == 2)  
</span><br>
<span class="quotelev1">&gt; {                          \
</span><br>
<span class="quotelev1">&gt; -        if(sendreq-&gt;req_bytes_delivered == sendreq- 
</span><br>
<span class="quotelev2">&gt; &gt;req_send.req_bytes_packed) {  \
</span><br>
<span class="quotelev1">&gt; +        if(sendreq-&gt;req_bytes_delivered &gt;= sendreq- 
</span><br>
<span class="quotelev2">&gt; &gt;req_send.req_bytes_packed) {  \
</span><br>
<span class="quotelev1">&gt;              MCA_PML_OB1_SEND_REQUEST_PML_COMPLETE 
</span><br>
<span class="quotelev1">&gt; (sendreq);                       \
</span><br>
<span class="quotelev1">&gt;          } else  
</span><br>
<span class="quotelev1">&gt; {                                                                  \
</span><br>
<span class="quotelev1">&gt;              /* additional data to schedule  
</span><br>
<span class="quotelev1">&gt; */                                     \
</span><br>
<span class="quotelev1">&gt; @@ -327,6 +327,19 @@
</span><br>
<span class="quotelev1">&gt;      }                                                                 
</span><br>
<span class="quotelev1">&gt;              \
</span><br>
<span class="quotelev1">&gt;  } while (0)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0938.php">Matthijs Richard Koot: "[OMPI devel] Q: Job scheduling of MPI applications? (in general)"</a>
<li><strong>Previous message:</strong> <a href="0936.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-docs] svn:open-mpi r10316"</a>
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
