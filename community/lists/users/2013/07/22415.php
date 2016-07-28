<?
$subject_val = "[OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 30 13:42:43 2013" -->
<!-- isoreceived="20130730174243" -->
<!-- sent="Tue, 30 Jul 2013 19:42:28 +0200" -->
<!-- isosent="20130730174228" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed" -->
<!-- id="51F7FB04.6080101_at_rz.rwth-aachen.de" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-30 13:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22416.php">Mike Dubman: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>Previous message:</strong> <a href="22414.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22416.php">Mike Dubman: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>Reply:</strong> <a href="22416.php">Mike Dubman: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI experts,
<br>
<p>An user at our cluster has a problem running a kinda of big job:
<br>
(- the job using 3024 processes (12 per node, 252 nodes) runs fine)
<br>
- the job using 4032 processes (12 per node, 336 nodes) produce the error 
<br>
attached below.
<br>
<p>Well, the <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a> is 
<br>
well-known one; both recommended tweakables (user limits and registered memory 
<br>
size) are at MAX now, nevertheless someone queue pair could not be created.
<br>
<p>Our blind guess is the number of completion queues is exhausted.
<br>
<p>What happen' when raising the value from standard to max?
<br>
What max size of Open MPI jobs have been seen at all?
<br>
What max size of Open MPI jobs *using MPI_Alltoallv* have been seen at all?
<br>
Is there a way to manage the size/the number of queue pairs? (XRC not availabe)
<br>
Is there a way to tell MPI_Alltoallv to use less queue pairs, even when this 
<br>
could lead to slow-down?
<br>
<p>There is a suspicious parameter in the mlx4_core module:
<br>
$ modinfo mlx4_core | grep log_num_cq
<br>
parm:           log_num_cq:log maximum number of CQs per HCA  (int)
<br>
<p>Is this the tweakable parameter?
<br>
What is the default, and max value?
<br>
<p>Any help would be welcome...
<br>
<p>Best,
<br>
<p>Paul Kapinos
<br>
<p>P.S. There should be no connection problen somewhere between the nodes; a test 
<br>
job with 1x process on each node has been ran sucessfully just before starting 
<br>
the actual job, which also ran OK for a while - until calling MPI_Alltoallv.
<br>
<p><p><p><p><p><p>--------------------------------------------------------------------------
<br>
A process failed to create a queue pair. This usually means either
<br>
the device has run out of queue pairs (too many connections) or
<br>
there are insufficient resources available to allocate a queue pair
<br>
(out of memory). The latter can happen if either 1) insufficient
<br>
memory is available, or 2) no more physical memory can be registered
<br>
with the device.
<br>
<p>For more information on memory registration see the Open MPI FAQs at:
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>Local host:             linuxbmc1156.rz.RWTH-Aachen.DE
<br>
Local device:           mlx4_0
<br>
Queue pair type:        Reliable connected (RC)
<br>
--------------------------------------------------------------------------
<br>
[linuxbmc1156.rz.RWTH-Aachen.DE][[3703,1],4021][connect/btl_openib_connect_oob.c:867:rml_recv_cb] 
<br>
error in endpoint reply start connect
<br>
[linuxbmc1156.rz.RWTH-Aachen.DE:9632] *** An error occurred in MPI_Alltoallv
<br>
[linuxbmc1156.rz.RWTH-Aachen.DE:9632] *** on communicator MPI_COMM_WORLD
<br>
[linuxbmc1156.rz.RWTH-Aachen.DE:9632] *** MPI_ERR_OTHER: known error not in list
<br>
[linuxbmc1156.rz.RWTH-Aachen.DE:9632] *** MPI_ERRORS_ARE_FATAL: your MPI job 
<br>
will now abort
<br>
[linuxbmc1156.rz.RWTH-Aachen.DE][[3703,1],4024][connect/btl_openib_connect_oob.c:867:rml_recv_cb] 
<br>
error in endpoint reply start connect
<br>
[linuxbmc1156.rz.RWTH-Aachen.DE][[3703,1],4027][connect/btl_openib_connect_oob.c:867:rml_recv_cb] 
<br>
error in endpoint reply start connect
<br>
[linuxbmc0840.rz.RWTH-Aachen.DE][[3703,1],10][connect/btl_openib_connect_oob.c:867:rml_recv_cb] 
<br>
error in endpoint reply start connect
<br>
[linuxbmc0840.rz.RWTH-Aachen.DE][[3703,1],1][connect/btl_openib_connect_oob.c:867:rml_recv_cb] 
<br>
error in endpoint reply start connect
<br>
[linuxbmc0840.rz.RWTH-Aachen.DE:17696] [[3703,0],0]-[[3703,1],10] 
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[linuxbmc0840.rz.RWTH-Aachen.DE:17696] [[3703,0],0]-[[3703,1],8] 
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[linuxbmc0840.rz.RWTH-Aachen.DE:17696] [[3703,0],0]-[[3703,1],9] 
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[linuxbmc0840.rz.RWTH-Aachen.DE:17696] [[3703,0],0]-[[3703,1],1] 
<br>
mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[linuxbmc0840.rz.RWTH-Aachen.DE:17696] 9 more processes have sent help message 
<br>
help-mpi-btl-openib-cpc-base.txt / ibv_create_qp failed
<br>
[linuxbmc0840.rz.RWTH-Aachen.DE:17696] Set MCA parameter 
<br>
&quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[linuxbmc0840.rz.RWTH-Aachen.DE:17696] 3 more processes have sent help message 
<br>
help-mpi-errors.txt / mpi_errors_are_fatal
<br>
<p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22415/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22416.php">Mike Dubman: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>Previous message:</strong> <a href="22414.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22416.php">Mike Dubman: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>Reply:</strong> <a href="22416.php">Mike Dubman: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
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
