<?
$subject_val = "[OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 20:56:36 2014" -->
<!-- isoreceived="20140930005636" -->
<!-- sent="Tue, 30 Sep 2014 00:56:29 +0000" -->
<!-- isosent="20140930005629" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules" -->
<!-- id="20140930095630.0a94b2b585c116d5c2b2b601_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 20:56:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15940.php">Kawashima, Takahiro: "[OMPI devel] [patch] libnbc intercommunicator iallgather bug"</a>
<li><strong>Previous message:</strong> <a href="15938.php">Devendar Bureddy: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16374.php">George Bosilca: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16374.php">George Bosilca: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>Thank you for attending the meeting at Kyoto. As we talked
<br>
at the meeting, my colleague suffers from a datatype problem.
<br>
<p>See attached create_resized.c. It creates a datatype with an
<br>
LB marker using MPI_Type_create_struct and MPI_Type_create_resized.
<br>
<p>Expected contents of the output file (received_data) is:
<br>
--------------------------------
<br>
0: t1 = 0.1, t2 = 0.2
<br>
1: t1 = 1.1, t2 = 1.2
<br>
2: t1 = 2.1, t2 = 2.2
<br>
3: t1 = 3.1, t2 = 3.2
<br>
4: t1 = 4.1, t2 = 4.2
<br>
... snip ...
<br>
1995: t1 = 1995.1, t2 = 1995.2
<br>
1996: t1 = 1996.1, t2 = 1996.2
<br>
1997: t1 = 1997.1, t2 = 1997.2
<br>
1998: t1 = 1998.1, t2 = 1998.2
<br>
1999: t1 = 1999.1, t2 = 1999.2
<br>
--------------------------------
<br>
<p>But if you run the program many times with multiple BTL modules
<br>
and with their small eager_limit and small max_send_size,
<br>
you'll see on some run:
<br>
--------------------------------
<br>
0: t1 = 0.1, t2 = 0.2
<br>
1: t1 = 1.1, t2 = 1.2
<br>
2: t1 = 2.1, t2 = 2.2
<br>
3: t1 = 3.1, t2 = 3.2
<br>
4: t1 = 4.1, t2 = 4.2
<br>
... snip ...
<br>
470: t1 = 470.1, t2 = 470.2
<br>
471: t1 = 471.1, t2 = 471.2
<br>
472: t1 = 472.1, t2 = 472.2
<br>
473: t1 = 473.1, t2 = 473.2
<br>
474: t1 = 474.1, t2 = 0        &lt;-- broken!
<br>
475: t1 = 0, t2 = 475.1
<br>
476: t1 = 0, t2 = 476.1
<br>
477: t1 = 0, t2 = 477.1
<br>
... snip ...
<br>
1995: t1 = 0, t2 = 1995.1
<br>
1996: t1 = 0, t2 = 1996.1
<br>
1997: t1 = 0, t2 = 1997.1
<br>
1998: t1 = 0, t2 = 1998.1
<br>
1999: t1 = 0, t2 = 1999.1
<br>
--------------------------------
<br>
<p>The index of the array at which data start to break (474 in the
<br>
above case) may change on every run.
<br>
Same result appears on both trunk and v1.8.3.
<br>
<p>You can reproduce this with the following options if you have
<br>
multiple IB HCAs.
<br>
<p>&nbsp;&nbsp;-n 2
<br>
&nbsp;&nbsp;--mca btl self,openib
<br>
&nbsp;&nbsp;--mca btl_openib_eager_limit 256
<br>
&nbsp;&nbsp;--mca btl_openib_max_send_size 384
<br>
<p>Or if you don't have multiple NICs, with the following options.
<br>
<p>&nbsp;&nbsp;-n 2
<br>
&nbsp;&nbsp;--host localhost
<br>
&nbsp;&nbsp;--mca btl self,sm,vader
<br>
&nbsp;&nbsp;--mca btl_vader_exclusivity 65536
<br>
&nbsp;&nbsp;--mca btl_vader_eager_limit 256
<br>
&nbsp;&nbsp;--mca btl_vader_max_send_size 384
<br>
&nbsp;&nbsp;--mca btl_sm_exclusivity 65536
<br>
&nbsp;&nbsp;--mca btl_sm_eager_limit 256
<br>
&nbsp;&nbsp;--mca btl_sm_max_send_size 384
<br>
<p>My colleague found that OPAL convertor on the receiving process
<br>
seems to add the LB value twice for out-of-order arrival of
<br>
fragments when computing the receive buffer write-offset.
<br>
<p>He created the patch bellow. Our program works fine with
<br>
this patch but we don't know this is a correct fix.
<br>
Could you see this issue?
<br>
<p>Index: opal/datatype/opal_convertor.c
<br>
===================================================================
<br>
--- opal/datatype/opal_convertor.c      (revision 32807)
<br>
+++ opal/datatype/opal_convertor.c      (working copy)
<br>
@@ -362,11 +362,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( OPAL_LIKELY(0 == count) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pStack[1].type     = pElems-&gt;elem.common.type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pStack[1].count    = pElems-&gt;elem.count;
<br>
-        pStack[1].disp     = pElems-&gt;elem.disp;
<br>
+        pStack[1].disp     = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pStack[1].type  = OPAL_DATATYPE_UINT1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pStack[1].count = pData-&gt;size - count;
<br>
-        pStack[1].disp  = pData-&gt;true_lb + count;
<br>
+        pStack[1].disp  = count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pStack[1].index    = 0;  /* useless */
<br>
&nbsp;
<br>
<p>Best regards,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15939/create_resized.c">create_resized.c</a>
</ul>
<!-- attachment="create_resized.c" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15939/create_resized.patch">create_resized.patch</a>
</ul>
<!-- attachment="create_resized.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15940.php">Kawashima, Takahiro: "[OMPI devel] [patch] libnbc intercommunicator iallgather bug"</a>
<li><strong>Previous message:</strong> <a href="15938.php">Devendar Bureddy: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16374.php">George Bosilca: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16374.php">George Bosilca: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
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
