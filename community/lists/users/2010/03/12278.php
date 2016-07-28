<?
$subject_val = "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  8 13:02:17 2010" -->
<!-- isoreceived="20100308180217" -->
<!-- sent="Mon, 8 Mar 2010 10:01:40 -0800" -->
<!-- isosent="20100308180140" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?" -->
<!-- id="OF0078455F.13FBB1DF-ON882576E0.006180A1-882576E0.006307A5_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="201003080922.10454.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-08 13:01:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12279.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr tocheckpoint"</a>
<li><strong>Previous message:</strong> <a href="12277.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12276.php">Rainer Keller: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The program Jonathan offers as an example is valid use of MPI standard
<br>
send.  With this message size it is fair to assume the implementation is
<br>
doing standard send with an eager send. The MPI standard is explicit about
<br>
how eager send, as a undercover option for standard send, must work.
<br>
<p>When the MPI_Recv side cannot keep up, the MPI implementation is required
<br>
to provide a flow control that throttles (blocks) the MPI_Send before there
<br>
is a failure due to resource exhaustion. In other words, it is the MPI
<br>
implementation's job to make  an occasional MPI_Send() calls act like an
<br>
MPI_Ssend(). The programmer should not need to guess how often to throw in
<br>
an MPI_Ssend().
<br>
<p><a href="http://www.mpi-forum.org/docs/mpi22-report/node54.htm#Node54">http://www.mpi-forum.org/docs/mpi22-report/node54.htm#Node54</a>
<br>
<p>says
<br>
<p>A buffered send operation that cannot complete because of a lack of buffer
<br>
space is erroneous. When such a situation is detected, an error is
<br>
signalled that may cause the program to terminate abnormally. On the other
<br>
hand, a standard send operation that cannot complete because of lack of
<br>
buffer space will merely block, waiting for buffer space to become
<br>
available or for a matching receive to be posted. This behavior is
<br>
preferable in many situations. Consider a situation where a producer
<br>
repeatedly produces new values and sends them to a consumer. Assume that
<br>
the producer produces new values faster than the consumer can consume them.
<br>
If buffered sends are used, then a buffer overflow will result. Additional
<br>
synchronization has to be added to the program so as to prevent this from
<br>
occurring. If standard sends are used, then the producer will be
<br>
automatically throttled, as its send operations will block when buffer
<br>
space is unavailable.
<br>
<p>There are good reasons for an MPI implementation to prefer to ignore this
<br>
requirement in the MPI standard but the requirement is there.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 03/08/2010 06:22:10 AM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rainer Keller
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 03/08/2010 06:24 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Jonathan,
</span><br>
<span class="quotelev1">&gt; Your are using Infinipath's PSM library and the corresponding MTL/psm and
</span><br>
<p><span class="quotelev1">&gt; therefore the  corresponding upper-layer PML/cm.
</span><br>
<span class="quotelev1">&gt; In fact, this _is_ calling into the psm's irecv() function, which
</span><br>
<span class="quotelev1">&gt; explains the
</span><br>
<span class="quotelev1">&gt; error triggered in the psm library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not knowing the degree of parallelism of Your application otherwise,
</span><br>
apart
<br>
<span class="quotelev1">&gt; from trying to increase the max. recv requests using the
</span><br>
environmentvariable,
<br>
<span class="quotelev1">&gt; You might want to change some of the master send to synchronous MPI_Ssend
</span><br>
().
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand, the example code You posted could be written
</span><br>
differently,
<br>
<span class="quotelev1">&gt; e.g. collect multiple random numbers into one communication, or using
</span><br>
<span class="quotelev1">&gt; collective communication, here with sub-communicators containing the
</span><br>
master
<br>
<span class="quotelev1">&gt; and sources and master and targets, all of which would reduce pressure on
</span><br>
the
<br>
<span class="quotelev1">&gt; master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sunday 07 March 2010 04:17:33 pm Jonathan Wesley Stone wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My supercomputer has OpenMPI 1.4. I am running into a frustrating
</span><br>
<span class="quotelev2">&gt; &gt; problem with my MPI program. I am using only the following calls,
</span><br>
<span class="quotelev2">&gt; &gt; which I expect to be blocking:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Wtime
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Error_string
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Abort
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Send
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Get_count
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Recv
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Probe
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Somehow I am getting this error when I do a large number of sequential
</span><br>
<span class="quotelev2">&gt; &gt; communications: &quot;c002:2.0.Exhausted 1048576 MQ irecv request
</span><br>
<span class="quotelev2">&gt; &gt; descriptors, which usually indicates a user program error or
</span><br>
<span class="quotelev2">&gt; &gt; insufficient request descriptors (PSM_MQ_RECVREQS_MAX=1048576)&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This seems counter-intuitive to me because I don't think I should be
</span><br>
<span class="quotelev2">&gt; &gt; using irecvs since I am wanting specifically to rely on the documented
</span><br>
<span class="quotelev2">&gt; &gt; blocking behavior of MPI_Recv (not MPI_Irecv, which I am not using).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My main program is quite large, however I have managed to replicate
</span><br>
<span class="quotelev2">&gt; &gt; the irritating behavior in this much smaller program, which executes a
</span><br>
<span class="quotelev2">&gt; &gt; number of MPI_Send or MPI_Recv calls in a loop. The program's default
</span><br>
<span class="quotelev2">&gt; &gt; behaviour is to run 2,000,000 iterations. When I turn it up to
</span><br>
<span class="quotelev2">&gt; &gt; 20,000,000, after a short time it generates the PSM_MQ_RECVREQS_MAX
</span><br>
<span class="quotelev2">&gt; &gt; exception.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would appreciate if anyone could advise why it might be happening in
</span><br>
<span class="quotelev2">&gt; &gt; this &quot;test&quot; case -- basically what is going on that causes my
</span><br>
<span class="quotelev2">&gt; &gt; presumably blocking MPI_Recv calls to &quot;accumulate&quot; such a large number
</span><br>
<span class="quotelev2">&gt; &gt; of &quot;irecv request descriptors&quot;, when I expect they should be blocking
</span><br>
<span class="quotelev2">&gt; &gt; and get immediately resolved and the count should go down when the
</span><br>
<span class="quotelev2">&gt; &gt; matching MPI_Send is posted.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I appreciate your assistance. Thank you!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jonathan Stone
</span><br>
<span class="quotelev2">&gt; &gt; Research Assistant, U. Oklahoma
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12278/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12279.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr tocheckpoint"</a>
<li><strong>Previous message:</strong> <a href="12277.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12276.php">Rainer Keller: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
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
