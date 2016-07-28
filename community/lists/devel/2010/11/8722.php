<?
$subject_val = "[OMPI devel] Sending large messages over RDMA fails";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 03:51:18 2010" -->
<!-- isoreceived="20101129085118" -->
<!-- sent="Mon, 29 Nov 2010 10:51:10 +0200" -->
<!-- isosent="20101129085110" -->
<!-- name="Doron Shoham" -->
<!-- email="dorons_at_[hidden]" -->
<!-- subject="[OMPI devel] Sending large messages over RDMA fails" -->
<!-- id="6D1AA8ED7402FF49AFAB26F0C948ACF501F79D4B_at_exil.voltaire.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Sending large messages over RDMA fails<br>
<strong>From:</strong> Doron Shoham (<em>dorons_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 03:51:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8723.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8721.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8750.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Reply:</strong> <a href="8750.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>The maximum message size of ConnectX HCAs is 1GB (older cards have a
<br>
maximum of 2GB).
<br>
<p>Trying to send larger messages over RDMA direct protocol will fail.
<br>
<p>&nbsp;
<br>
<p>A reminder - RDMA direct will be used if RDMA writes or reads are
<br>
allowed by |btl_openib_flags| and the sender's message is already
<br>
registered (either by use of the |mpi_leave_pinned| MCA parameter
<br>
&lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-p">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-p</a>
<br>
inned&gt;
<br>
<p>or if the buffer was allocated via MPI_ALLOC_MEM).
<br>
<p>&nbsp;
<br>
<p>I've opened two tickets on this issue (for 1.4.4 and 1.5.2):
<br>
<p>1.4.4: <a href="https://svn.open-mpi.org/trac/ompi/ticket/2623">https://svn.open-mpi.org/trac/ompi/ticket/2623</a>
<br>
<p>1.5.2: <a href="https://svn.open-mpi.org/trac/ompi/ticket/2627">https://svn.open-mpi.org/trac/ompi/ticket/2627</a>
<br>
<p>&nbsp;
<br>
<p>In order to check what is the max message size supported by the HCA you
<br>
can run the command:
<br>
<p>&nbsp;
<br>
<p>ibv_devinfo -v |grep max_msg_sz
<br>
<p>max_msg_sz:             0x40000000
<br>
<p>&nbsp;
<br>
<p>Attached is a simple program which uses Isend and Irecv to send a larger
<br>
message (more than the max message size).
<br>
<p>The output of this program is:
<br>
<p>&nbsp;
<br>
<p>[[10761,1],1][../../../../../ompi/mca/btl/openib/btl_openib_component.c:
<br>
3330:handle_wc]
<br>
<p>from boo4 to: boo3 error polling LP CQ with status LOCAL LENGTH ERROR
<br>
status number 1 for wr_id 4d142e0 opcode 32767  vendor error 105 qp_idx
<br>
3
<br>
<p>&nbsp;
<br>
<p>When using RDMA direct protocol we need to distinguish between GET and
<br>
PUT protocols.
<br>
<p>If both flags (PUT and GET) are set in btl_openib_flags (which they are
<br>
in default), it will use the GET flow.
<br>
<p>&nbsp;
<br>
<p>If only the PUT flag is set and/or the btl supports only PUT method then
<br>
the sender will allocate a rendezvous header and will not eager send any
<br>
data. The receiver will schedule rdma PUT(s) of the entire message.
<br>
<p>It is done in mca_pml_ob1_recv_request_schedule_once()
<br>
<p>(ompi/mca/pml/ob1/pml_ob1_recvreq.c:683).
<br>
<p>We can limit the size passing to mca_bml_base_prepare_dst() to be
<br>
minimum between btl.max_message_size supported by the HCA and the actual
<br>
message size.
<br>
<p>The will result a fragmentation of the RDMA write messages.
<br>
<p>&nbsp;
<br>
<p>The bigger problem is when using the GET flow.
<br>
<p>In this flow the receiver allocate one big buffer to receive the message
<br>
with RDMA read in one chunk.
<br>
<p>There is no fragmentation mechanism in this flow which make it harder to
<br>
solve this issue
<br>
<p>&nbsp;
<br>
<p>Reading the max message size supported by the HCA can be done by using
<br>
verbs.
<br>
<p>&nbsp;
<br>
<p>The second approach is to use RDMA direct only if the message size is
<br>
smaller than the max message size supported by the HCA.
<br>
<p>&nbsp;
<br>
<p>Here is where the long message protocol is chosen:
<br>
<p>ompi/mca/pml/ob1/pml_ob1_sendreq.h line 382.
<br>
<p>&nbsp;
<br>
<p>We could use the second approach until a fragmentation mechanism will be
<br>
added to the RDMA direct GET flow.
<br>
<p>&nbsp;
<br>
<p>Any comments or suggestions?
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>Doron
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8722/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8723.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8721.php">S&#233;bastien Boisvert: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8750.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Reply:</strong> <a href="8750.php">Jeff Squyres: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
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
