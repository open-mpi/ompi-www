<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 20 10:59:20 2006" -->
<!-- isoreceived="20060920145920" -->
<!-- sent="Wed, 20 Sep 2006 16:59:15 +0200" -->
<!-- isosent="20060920145915" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI bugs] [Open MPI] #183: DR deadlock" -->
<!-- id="C13723E3.27C04%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="060.c4ed3cdc08f272943621457888e1add5_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-20 10:59:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1073.php">Nysal Jan: "[OMPI devel] btl_openib_max_btls"</a>
<li><strong>Previous message:</strong> <a href="1071.php">Brian Barrett: "Re: [OMPI devel] portability problem in ompi_info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you attach the patch to the bug (vs. Pasting it in)?  That'll make it
<br>
easier to apply.
<br>
<p>Thanks!
<br>
<p><p>On 9/20/06 4:57 PM, &quot;Open MPI&quot; &lt;bugs_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; #183: DR deadlock
</span><br>
<span class="quotelev1">&gt; ---------------------+------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  afriedle  |        Owner:  afriedle
</span><br>
<span class="quotelev1">&gt;     Type:  defect    |       Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  critical  |    Milestone:  Open MPI 1.2
</span><br>
<span class="quotelev1">&gt;  Version:  trunk     |   Resolution:
</span><br>
<span class="quotelev1">&gt; Keywords:            |
</span><br>
<span class="quotelev1">&gt; ---------------------+------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Comment (by afriedle):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Lets clear some of these DR tickets up.. here's a diff that solves the
</span><br>
<span class="quotelev1">&gt;  problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  {{{
</span><br>
<span class="quotelev1">&gt;  Index: pml_dr_sendreq.h
</span><br>
<span class="quotelev1">&gt;  ===================================================================
</span><br>
<span class="quotelev1">&gt;  --- pml_dr_sendreq.h    (revision 11719)
</span><br>
<span class="quotelev1">&gt;  +++ pml_dr_sendreq.h    (working copy)
</span><br>
<span class="quotelev1">&gt;  @@ -248,7 +248,6 @@
</span><br>
<span class="quotelev1">&gt;           mca_pml_base_bsend_request_fini((ompi_request_t*)sendreq);
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;  -    OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;       if( false == sendreq-&gt;req_send.req_base.req_ompi.req_complete ) {
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;           /* Should only be called for long messages (maybe synchronous) */
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;           MCA_PML_DR_SEND_REQUEST_MPI_COMPLETE(sendreq);
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;  @@ -265,7 +264,6 @@
</span><br>
<span class="quotelev1">&gt;               ompi_convertor_set_position(&amp;sendreq-&gt;req_send.req_convertor,
</span><br>
<span class="quotelev1">&gt;  &amp;offset); \
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;  -    OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;   } while (0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   /*
</span><br>
<span class="quotelev1">&gt;  Index: pml_dr_recvreq.h
</span><br>
<span class="quotelev1">&gt;  ===================================================================
</span><br>
<span class="quotelev1">&gt;  --- pml_dr_recvreq.h    (revision 11719)
</span><br>
<span class="quotelev1">&gt;  +++ pml_dr_recvreq.h    (working copy)
</span><br>
<span class="quotelev1">&gt;  @@ -123,7 +123,6 @@
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;       OPAL_THREAD_UNLOCK((recvreq)-&gt;req_mutex);
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;  -    OPAL_THREAD_LOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;       opal_list_remove_item(&amp;(recvreq)-&gt;req_proc-&gt;matched_receives,
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;                             (opal_list_item_t*)(recvreq));
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;  @@ -143,7 +142,6 @@
</span><br>
<span class="quotelev1">&gt;       if( true == recvreq-&gt;req_recv.req_base.req_free_called ) {
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;           MCA_PML_DR_RECV_REQUEST_RETURN( recvreq );
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;  -    OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
</span><br>
<span class="quotelev1">&gt;  \
</span><br>
<span class="quotelev1">&gt;   } while(0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  }}}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  This is against trunk r11719, I've had this fix on my UD branch for
</span><br>
<span class="quotelev1">&gt;  several months now and has not caused problems.
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1073.php">Nysal Jan: "[OMPI devel] btl_openib_max_btls"</a>
<li><strong>Previous message:</strong> <a href="1071.php">Brian Barrett: "Re: [OMPI devel] portability problem in ompi_info"</a>
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
