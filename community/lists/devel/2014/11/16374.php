<?
$subject_val = "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 29 19:53:22 2014" -->
<!-- isoreceived="20141130005322" -->
<!-- sent="Sat, 29 Nov 2014 19:53:20 -0500" -->
<!-- isosent="20141130005320" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules" -->
<!-- id="CAMJJpkVe6+HpOG2hfRLKS--qy5A2MwXwSM5iMVDKNjBzVOj1gQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140930095630.0a94b2b585c116d5c2b2b601_at_jp.fujitsu.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-29 19:53:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16375.php">Kawashima, Takahiro: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>Previous message:</strong> <a href="16373.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15939.php">Kawashima, Takahiro: "[OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16375.php">Kawashima, Takahiro: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>Reply:</strong> <a href="16375.php">Kawashima, Takahiro: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Takahiro,
<br>
<p>Sorry for the delay in answering. Thanks for the bug report and the patch.
<br>
I applied you patch, and added some tougher tests to make sure we catch
<br>
similar issues in the future.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;George.
<br>
<p><p>On Mon, Sep 29, 2014 at 8:56 PM, Kawashima, Takahiro &lt;
<br>
t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for attending the meeting at Kyoto. As we talked
</span><br>
<span class="quotelev1">&gt; at the meeting, my colleague suffers from a datatype problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See attached create_resized.c. It creates a datatype with an
</span><br>
<span class="quotelev1">&gt; LB marker using MPI_Type_create_struct and MPI_Type_create_resized.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Expected contents of the output file (received_data) is:
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; 0: t1 = 0.1, t2 = 0.2
</span><br>
<span class="quotelev1">&gt; 1: t1 = 1.1, t2 = 1.2
</span><br>
<span class="quotelev1">&gt; 2: t1 = 2.1, t2 = 2.2
</span><br>
<span class="quotelev1">&gt; 3: t1 = 3.1, t2 = 3.2
</span><br>
<span class="quotelev1">&gt; 4: t1 = 4.1, t2 = 4.2
</span><br>
<span class="quotelev1">&gt; ... snip ...
</span><br>
<span class="quotelev1">&gt; 1995: t1 = 1995.1, t2 = 1995.2
</span><br>
<span class="quotelev1">&gt; 1996: t1 = 1996.1, t2 = 1996.2
</span><br>
<span class="quotelev1">&gt; 1997: t1 = 1997.1, t2 = 1997.2
</span><br>
<span class="quotelev1">&gt; 1998: t1 = 1998.1, t2 = 1998.2
</span><br>
<span class="quotelev1">&gt; 1999: t1 = 1999.1, t2 = 1999.2
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if you run the program many times with multiple BTL modules
</span><br>
<span class="quotelev1">&gt; and with their small eager_limit and small max_send_size,
</span><br>
<span class="quotelev1">&gt; you'll see on some run:
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; 0: t1 = 0.1, t2 = 0.2
</span><br>
<span class="quotelev1">&gt; 1: t1 = 1.1, t2 = 1.2
</span><br>
<span class="quotelev1">&gt; 2: t1 = 2.1, t2 = 2.2
</span><br>
<span class="quotelev1">&gt; 3: t1 = 3.1, t2 = 3.2
</span><br>
<span class="quotelev1">&gt; 4: t1 = 4.1, t2 = 4.2
</span><br>
<span class="quotelev1">&gt; ... snip ...
</span><br>
<span class="quotelev1">&gt; 470: t1 = 470.1, t2 = 470.2
</span><br>
<span class="quotelev1">&gt; 471: t1 = 471.1, t2 = 471.2
</span><br>
<span class="quotelev1">&gt; 472: t1 = 472.1, t2 = 472.2
</span><br>
<span class="quotelev1">&gt; 473: t1 = 473.1, t2 = 473.2
</span><br>
<span class="quotelev1">&gt; 474: t1 = 474.1, t2 = 0        &lt;-- broken!
</span><br>
<span class="quotelev1">&gt; 475: t1 = 0, t2 = 475.1
</span><br>
<span class="quotelev1">&gt; 476: t1 = 0, t2 = 476.1
</span><br>
<span class="quotelev1">&gt; 477: t1 = 0, t2 = 477.1
</span><br>
<span class="quotelev1">&gt; ... snip ...
</span><br>
<span class="quotelev1">&gt; 1995: t1 = 0, t2 = 1995.1
</span><br>
<span class="quotelev1">&gt; 1996: t1 = 0, t2 = 1996.1
</span><br>
<span class="quotelev1">&gt; 1997: t1 = 0, t2 = 1997.1
</span><br>
<span class="quotelev1">&gt; 1998: t1 = 0, t2 = 1998.1
</span><br>
<span class="quotelev1">&gt; 1999: t1 = 0, t2 = 1999.1
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The index of the array at which data start to break (474 in the
</span><br>
<span class="quotelev1">&gt; above case) may change on every run.
</span><br>
<span class="quotelev1">&gt; Same result appears on both trunk and v1.8.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reproduce this with the following options if you have
</span><br>
<span class="quotelev1">&gt; multiple IB HCAs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   -n 2
</span><br>
<span class="quotelev1">&gt;   --mca btl self,openib
</span><br>
<span class="quotelev1">&gt;   --mca btl_openib_eager_limit 256
</span><br>
<span class="quotelev1">&gt;   --mca btl_openib_max_send_size 384
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or if you don't have multiple NICs, with the following options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   -n 2
</span><br>
<span class="quotelev1">&gt;   --host localhost
</span><br>
<span class="quotelev1">&gt;   --mca btl self,sm,vader
</span><br>
<span class="quotelev1">&gt;   --mca btl_vader_exclusivity 65536
</span><br>
<span class="quotelev1">&gt;   --mca btl_vader_eager_limit 256
</span><br>
<span class="quotelev1">&gt;   --mca btl_vader_max_send_size 384
</span><br>
<span class="quotelev1">&gt;   --mca btl_sm_exclusivity 65536
</span><br>
<span class="quotelev1">&gt;   --mca btl_sm_eager_limit 256
</span><br>
<span class="quotelev1">&gt;   --mca btl_sm_max_send_size 384
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My colleague found that OPAL convertor on the receiving process
</span><br>
<span class="quotelev1">&gt; seems to add the LB value twice for out-of-order arrival of
</span><br>
<span class="quotelev1">&gt; fragments when computing the receive buffer write-offset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; He created the patch bellow. Our program works fine with
</span><br>
<span class="quotelev1">&gt; this patch but we don't know this is a correct fix.
</span><br>
<span class="quotelev1">&gt; Could you see this issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/datatype/opal_convertor.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/datatype/opal_convertor.c      (revision 32807)
</span><br>
<span class="quotelev1">&gt; +++ opal/datatype/opal_convertor.c      (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -362,11 +362,11 @@
</span><br>
<span class="quotelev1">&gt;      if( OPAL_LIKELY(0 == count) ) {
</span><br>
<span class="quotelev1">&gt;          pStack[1].type     = pElems-&gt;elem.common.type;
</span><br>
<span class="quotelev1">&gt;          pStack[1].count    = pElems-&gt;elem.count;
</span><br>
<span class="quotelev1">&gt; -        pStack[1].disp     = pElems-&gt;elem.disp;
</span><br>
<span class="quotelev1">&gt; +        pStack[1].disp     = 0;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          pStack[1].type  = OPAL_DATATYPE_UINT1;
</span><br>
<span class="quotelev1">&gt;          pStack[1].count = pData-&gt;size - count;
</span><br>
<span class="quotelev1">&gt; -        pStack[1].disp  = pData-&gt;true_lb + count;
</span><br>
<span class="quotelev1">&gt; +        pStack[1].disp  = count;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      pStack[1].index    = 0;  /* useless */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15939.php">http://www.open-mpi.org/community/lists/devel/2014/09/15939.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16374/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16375.php">Kawashima, Takahiro: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>Previous message:</strong> <a href="16373.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15939.php">Kawashima, Takahiro: "[OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16375.php">Kawashima, Takahiro: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>Reply:</strong> <a href="16375.php">Kawashima, Takahiro: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
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
