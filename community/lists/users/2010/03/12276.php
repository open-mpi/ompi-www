<?
$subject_val = "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  8 09:22:27 2010" -->
<!-- isoreceived="20100308142227" -->
<!-- sent="Mon, 08 Mar 2010 09:22:10 -0500" -->
<!-- isosent="20100308142210" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?" -->
<!-- id="201003080922.10454.keller_at_ornl.gov" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="f15054621003071317h20c19aa2jae069342f8cf5de7_at_mail.gmail.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-08 09:22:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12277.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12275.php">Terry Dontje: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12274.php">Jonathan Wesley Stone: "[OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12278.php">Richard Treumann: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<li><strong>Reply:</strong> <a href="12278.php">Richard Treumann: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jonathan,
<br>
Your are using Infinipath's PSM library and the corresponding MTL/psm and 
<br>
therefore the  corresponding upper-layer PML/cm.
<br>
In fact, this _is_ calling into the psm's irecv() function, which explains the 
<br>
error triggered in the psm library.
<br>
<p>Not knowing the degree of parallelism of Your application otherwise, apart 
<br>
from trying to increase the max. recv requests using the environment variable, 
<br>
You might want to change some of the master send to synchronous MPI_Ssend().
<br>
<p>On the other hand, the example code You posted could be written differently, 
<br>
e.g. collect multiple random numbers into one communication, or using 
<br>
collective communication, here with sub-communicators containing the master 
<br>
and sources and master and targets, all of which would reduce pressure on the 
<br>
master.
<br>
<p>Hope this helps.
<br>
<p>Best regards,
<br>
Rainer
<br>
<p><p>On Sunday 07 March 2010 04:17:33 pm Jonathan Wesley Stone wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My supercomputer has OpenMPI 1.4. I am running into a frustrating
</span><br>
<span class="quotelev1">&gt; problem with my MPI program. I am using only the following calls,
</span><br>
<span class="quotelev1">&gt; which I expect to be blocking:
</span><br>
<span class="quotelev1">&gt; MPI_Wtime
</span><br>
<span class="quotelev1">&gt; MPI_Error_string
</span><br>
<span class="quotelev1">&gt; MPI_Abort
</span><br>
<span class="quotelev1">&gt; MPI_Send
</span><br>
<span class="quotelev1">&gt; MPI_Get_count
</span><br>
<span class="quotelev1">&gt; MPI_Recv
</span><br>
<span class="quotelev1">&gt; MPI_Probe
</span><br>
<span class="quotelev1">&gt; MPI_Init
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size
</span><br>
<span class="quotelev1">&gt; MPI_Finalize
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Somehow I am getting this error when I do a large number of sequential
</span><br>
<span class="quotelev1">&gt; communications: &quot;c002:2.0.Exhausted 1048576 MQ irecv request
</span><br>
<span class="quotelev1">&gt; descriptors, which usually indicates a user program error or
</span><br>
<span class="quotelev1">&gt; insufficient request descriptors (PSM_MQ_RECVREQS_MAX=1048576)&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems counter-intuitive to me because I don't think I should be
</span><br>
<span class="quotelev1">&gt; using irecvs since I am wanting specifically to rely on the documented
</span><br>
<span class="quotelev1">&gt; blocking behavior of MPI_Recv (not MPI_Irecv, which I am not using).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My main program is quite large, however I have managed to replicate
</span><br>
<span class="quotelev1">&gt; the irritating behavior in this much smaller program, which executes a
</span><br>
<span class="quotelev1">&gt; number of MPI_Send or MPI_Recv calls in a loop. The program's default
</span><br>
<span class="quotelev1">&gt; behaviour is to run 2,000,000 iterations. When I turn it up to
</span><br>
<span class="quotelev1">&gt; 20,000,000, after a short time it generates the PSM_MQ_RECVREQS_MAX
</span><br>
<span class="quotelev1">&gt; exception.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would appreciate if anyone could advise why it might be happening in
</span><br>
<span class="quotelev1">&gt; this &quot;test&quot; case -- basically what is going on that causes my
</span><br>
<span class="quotelev1">&gt; presumably blocking MPI_Recv calls to &quot;accumulate&quot; such a large number
</span><br>
<span class="quotelev1">&gt; of &quot;irecv request descriptors&quot;, when I expect they should be blocking
</span><br>
<span class="quotelev1">&gt; and get immediately resolved and the count should go down when the
</span><br>
<span class="quotelev1">&gt; matching MPI_Send is posted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I appreciate your assistance. Thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jonathan Stone
</span><br>
<span class="quotelev1">&gt; Research Assistant, U. Oklahoma
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12277.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12275.php">Terry Dontje: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12274.php">Jonathan Wesley Stone: "[OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12278.php">Richard Treumann: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<li><strong>Reply:</strong> <a href="12278.php">Richard Treumann: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
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
