<?
$subject_val = "[OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 16:17:39 2010" -->
<!-- isoreceived="20100307211739" -->
<!-- sent="Sun, 7 Mar 2010 15:17:33 -0600" -->
<!-- isosent="20100307211733" -->
<!-- name="Jonathan Wesley Stone" -->
<!-- email="stonejw_at_[hidden]" -->
<!-- subject="[OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?" -->
<!-- id="f15054621003071317h20c19aa2jae069342f8cf5de7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f15054621003030506tf001f2aq58fbfed4b6e6a04c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?<br>
<strong>From:</strong> Jonathan Wesley Stone (<em>stonejw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 16:17:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12275.php">Terry Dontje: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12273.php">Ralph Castain: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12276.php">Rainer Keller: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<li><strong>Reply:</strong> <a href="12276.php">Rainer Keller: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>My supercomputer has OpenMPI 1.4. I am running into a frustrating
<br>
problem with my MPI program. I am using only the following calls,
<br>
which I expect to be blocking:
<br>
MPI_Wtime
<br>
MPI_Error_string
<br>
MPI_Abort
<br>
MPI_Send
<br>
MPI_Get_count
<br>
MPI_Recv
<br>
MPI_Probe
<br>
MPI_Init
<br>
MPI_Comm_rank
<br>
MPI_Comm_size
<br>
MPI_Finalize
<br>
<p>Somehow I am getting this error when I do a large number of sequential
<br>
communications: &quot;c002:2.0.Exhausted 1048576 MQ irecv request
<br>
descriptors, which usually indicates a user program error or
<br>
insufficient request descriptors (PSM_MQ_RECVREQS_MAX=1048576)&quot;
<br>
<p>This seems counter-intuitive to me because I don't think I should be
<br>
using irecvs since I am wanting specifically to rely on the documented
<br>
blocking behavior of MPI_Recv (not MPI_Irecv, which I am not using).
<br>
<p>My main program is quite large, however I have managed to replicate
<br>
the irritating behavior in this much smaller program, which executes a
<br>
number of MPI_Send or MPI_Recv calls in a loop. The program's default
<br>
behaviour is to run 2,000,000 iterations. When I turn it up to
<br>
20,000,000, after a short time it generates the PSM_MQ_RECVREQS_MAX
<br>
exception.
<br>
<p>I would appreciate if anyone could advise why it might be happening in
<br>
this &quot;test&quot; case -- basically what is going on that causes my
<br>
presumably blocking MPI_Recv calls to &quot;accumulate&quot; such a large number
<br>
of &quot;irecv request descriptors&quot;, when I expect they should be blocking
<br>
and get immediately resolved and the count should go down when the
<br>
matching MPI_Send is posted.
<br>
<p>I appreciate your assistance. Thank you!
<br>
<p>Jonathan Stone
<br>
Research Assistant, U. Oklahoma
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12274/crash.c">crash.c</a>
</ul>
<!-- attachment="crash.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12275.php">Terry Dontje: "Re: [OMPI users] Segmentation fault when Send/Recv, onheterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12273.php">Ralph Castain: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12276.php">Rainer Keller: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
<li><strong>Reply:</strong> <a href="12276.php">Rainer Keller: "Re: [OMPI users] Why might MPI_Recv trip PSM_MQ_RECVREQS_MAX ?"</a>
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
