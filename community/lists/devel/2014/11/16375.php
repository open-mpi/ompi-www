<?
$subject_val = "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 30 19:23:20 2014" -->
<!-- isoreceived="20141201002320" -->
<!-- sent="Mon, 1 Dec 2014 00:23:15 +0000" -->
<!-- isosent="20141201002315" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules" -->
<!-- id="20141201092315.5f97fa3ea2fd8d0774ce9b47_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="CAMJJpkVe6+HpOG2hfRLKS--qy5A2MwXwSM5iMVDKNjBzVOj1gQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-30 19:23:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16376.php">marc.hoeppner_at_[hidden]: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16374.php">George Bosilca: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>In reply to:</strong> <a href="16374.php">George Bosilca: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p><span class="quotelev1">&gt; Takahiro,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in answering. Thanks for the bug report and the patch.
</span><br>
<span class="quotelev1">&gt; I applied you patch, and added some tougher tests to make sure we catch
</span><br>
<span class="quotelev1">&gt; similar issues in the future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Sep 29, 2014 at 8:56 PM, Kawashima, Takahiro &lt;
</span><br>
<span class="quotelev1">&gt; t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi George,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for attending the meeting at Kyoto. As we talked
</span><br>
<span class="quotelev2">&gt; &gt; at the meeting, my colleague suffers from a datatype problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See attached create_resized.c. It creates a datatype with an
</span><br>
<span class="quotelev2">&gt; &gt; LB marker using MPI_Type_create_struct and MPI_Type_create_resized.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Expected contents of the output file (received_data) is:
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 0: t1 = 0.1, t2 = 0.2
</span><br>
<span class="quotelev2">&gt; &gt; 1: t1 = 1.1, t2 = 1.2
</span><br>
<span class="quotelev2">&gt; &gt; 2: t1 = 2.1, t2 = 2.2
</span><br>
<span class="quotelev2">&gt; &gt; 3: t1 = 3.1, t2 = 3.2
</span><br>
<span class="quotelev2">&gt; &gt; 4: t1 = 4.1, t2 = 4.2
</span><br>
<span class="quotelev2">&gt; &gt; ... snip ...
</span><br>
<span class="quotelev2">&gt; &gt; 1995: t1 = 1995.1, t2 = 1995.2
</span><br>
<span class="quotelev2">&gt; &gt; 1996: t1 = 1996.1, t2 = 1996.2
</span><br>
<span class="quotelev2">&gt; &gt; 1997: t1 = 1997.1, t2 = 1997.2
</span><br>
<span class="quotelev2">&gt; &gt; 1998: t1 = 1998.1, t2 = 1998.2
</span><br>
<span class="quotelev2">&gt; &gt; 1999: t1 = 1999.1, t2 = 1999.2
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But if you run the program many times with multiple BTL modules
</span><br>
<span class="quotelev2">&gt; &gt; and with their small eager_limit and small max_send_size,
</span><br>
<span class="quotelev2">&gt; &gt; you'll see on some run:
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 0: t1 = 0.1, t2 = 0.2
</span><br>
<span class="quotelev2">&gt; &gt; 1: t1 = 1.1, t2 = 1.2
</span><br>
<span class="quotelev2">&gt; &gt; 2: t1 = 2.1, t2 = 2.2
</span><br>
<span class="quotelev2">&gt; &gt; 3: t1 = 3.1, t2 = 3.2
</span><br>
<span class="quotelev2">&gt; &gt; 4: t1 = 4.1, t2 = 4.2
</span><br>
<span class="quotelev2">&gt; &gt; ... snip ...
</span><br>
<span class="quotelev2">&gt; &gt; 470: t1 = 470.1, t2 = 470.2
</span><br>
<span class="quotelev2">&gt; &gt; 471: t1 = 471.1, t2 = 471.2
</span><br>
<span class="quotelev2">&gt; &gt; 472: t1 = 472.1, t2 = 472.2
</span><br>
<span class="quotelev2">&gt; &gt; 473: t1 = 473.1, t2 = 473.2
</span><br>
<span class="quotelev2">&gt; &gt; 474: t1 = 474.1, t2 = 0        &lt;-- broken!
</span><br>
<span class="quotelev2">&gt; &gt; 475: t1 = 0, t2 = 475.1
</span><br>
<span class="quotelev2">&gt; &gt; 476: t1 = 0, t2 = 476.1
</span><br>
<span class="quotelev2">&gt; &gt; 477: t1 = 0, t2 = 477.1
</span><br>
<span class="quotelev2">&gt; &gt; ... snip ...
</span><br>
<span class="quotelev2">&gt; &gt; 1995: t1 = 0, t2 = 1995.1
</span><br>
<span class="quotelev2">&gt; &gt; 1996: t1 = 0, t2 = 1996.1
</span><br>
<span class="quotelev2">&gt; &gt; 1997: t1 = 0, t2 = 1997.1
</span><br>
<span class="quotelev2">&gt; &gt; 1998: t1 = 0, t2 = 1998.1
</span><br>
<span class="quotelev2">&gt; &gt; 1999: t1 = 0, t2 = 1999.1
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The index of the array at which data start to break (474 in the
</span><br>
<span class="quotelev2">&gt; &gt; above case) may change on every run.
</span><br>
<span class="quotelev2">&gt; &gt; Same result appears on both trunk and v1.8.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can reproduce this with the following options if you have
</span><br>
<span class="quotelev2">&gt; &gt; multiple IB HCAs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   -n 2
</span><br>
<span class="quotelev2">&gt; &gt;   --mca btl self,openib
</span><br>
<span class="quotelev2">&gt; &gt;   --mca btl_openib_eager_limit 256
</span><br>
<span class="quotelev2">&gt; &gt;   --mca btl_openib_max_send_size 384
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Or if you don't have multiple NICs, with the following options.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   -n 2
</span><br>
<span class="quotelev2">&gt; &gt;   --host localhost
</span><br>
<span class="quotelev2">&gt; &gt;   --mca btl self,sm,vader
</span><br>
<span class="quotelev2">&gt; &gt;   --mca btl_vader_exclusivity 65536
</span><br>
<span class="quotelev2">&gt; &gt;   --mca btl_vader_eager_limit 256
</span><br>
<span class="quotelev2">&gt; &gt;   --mca btl_vader_max_send_size 384
</span><br>
<span class="quotelev2">&gt; &gt;   --mca btl_sm_exclusivity 65536
</span><br>
<span class="quotelev2">&gt; &gt;   --mca btl_sm_eager_limit 256
</span><br>
<span class="quotelev2">&gt; &gt;   --mca btl_sm_max_send_size 384
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My colleague found that OPAL convertor on the receiving process
</span><br>
<span class="quotelev2">&gt; &gt; seems to add the LB value twice for out-of-order arrival of
</span><br>
<span class="quotelev2">&gt; &gt; fragments when computing the receive buffer write-offset.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; He created the patch bellow. Our program works fine with
</span><br>
<span class="quotelev2">&gt; &gt; this patch but we don't know this is a correct fix.
</span><br>
<span class="quotelev2">&gt; &gt; Could you see this issue?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Index: opal/datatype/opal_convertor.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- opal/datatype/opal_convertor.c      (revision 32807)
</span><br>
<span class="quotelev2">&gt; &gt; +++ opal/datatype/opal_convertor.c      (working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -362,11 +362,11 @@
</span><br>
<span class="quotelev2">&gt; &gt;      if( OPAL_LIKELY(0 == count) ) {
</span><br>
<span class="quotelev2">&gt; &gt;          pStack[1].type     = pElems-&gt;elem.common.type;
</span><br>
<span class="quotelev2">&gt; &gt;          pStack[1].count    = pElems-&gt;elem.count;
</span><br>
<span class="quotelev2">&gt; &gt; -        pStack[1].disp     = pElems-&gt;elem.disp;
</span><br>
<span class="quotelev2">&gt; &gt; +        pStack[1].disp     = 0;
</span><br>
<span class="quotelev2">&gt; &gt;      } else {
</span><br>
<span class="quotelev2">&gt; &gt;          pStack[1].type  = OPAL_DATATYPE_UINT1;
</span><br>
<span class="quotelev2">&gt; &gt;          pStack[1].count = pData-&gt;size - count;
</span><br>
<span class="quotelev2">&gt; &gt; -        pStack[1].disp  = pData-&gt;true_lb + count;
</span><br>
<span class="quotelev2">&gt; &gt; +        pStack[1].disp  = count;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;      pStack[1].index    = 0;  /* useless */
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16376.php">marc.hoeppner_at_[hidden]: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16374.php">George Bosilca: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>In reply to:</strong> <a href="16374.php">George Bosilca: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
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
