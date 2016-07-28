<?
$subject_val = "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  1 03:30:51 2013" -->
<!-- isoreceived="20130801073051" -->
<!-- sent="Thu, 1 Aug 2013 09:30:32 +0200" -->
<!-- isosent="20130801073032" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed" -->
<!-- id="51FA0E98.105_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1KyZWO4wV4O661quBm1Zj2EQGGGdhuzFXJ7JQxsk+cRxkFA_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-01 03:30:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22409.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="../../2013/07/22407.php">Jeff Squyres (jsquyres): "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="../../2013/07/22404.php">Mike Dubman: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vanilla Linux ofed from RPM's for Scientific Linux release 6.4 (Carbon) (= RHEL 
<br>
6.4).
<br>
No ofed_info available :-(
<br>
<p>On 07/31/13 16:59, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; What OFED vendor and version do you use?
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 30, 2013 at 8:42 PM, Paul Kapinos &lt;kapinos_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:kapinos_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dear Open MPI experts,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     An user at our cluster has a problem running a kinda of big job:
</span><br>
<span class="quotelev1">&gt;     (- the job using 3024 processes (12 per node, 252 nodes) runs fine)
</span><br>
<span class="quotelev1">&gt;     - the job using 4032 processes (12 per node, 336 nodes) produce the error
</span><br>
<span class="quotelev1">&gt;     attached below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Well, the
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?__category=openfabrics#ib-__locked-pages">http://www.open-mpi.org/faq/?__category=openfabrics#ib-__locked-pages</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>&gt; is
</span><br>
<span class="quotelev1">&gt;     well-known one; both recommended tweakables (user limits and registered
</span><br>
<span class="quotelev1">&gt;     memory size) are at MAX now, nevertheless someone queue pair could not be
</span><br>
<span class="quotelev1">&gt;     created.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Our blind guess is the number of completion queues is exhausted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     What happen' when raising the value from standard to max?
</span><br>
<span class="quotelev1">&gt;     What max size of Open MPI jobs have been seen at all?
</span><br>
<span class="quotelev1">&gt;     What max size of Open MPI jobs *using MPI_Alltoallv* have been seen at all?
</span><br>
<span class="quotelev1">&gt;     Is there a way to manage the size/the number of queue pairs? (XRC not availabe)
</span><br>
<span class="quotelev1">&gt;     Is there a way to tell MPI_Alltoallv to use less queue pairs, even when this
</span><br>
<span class="quotelev1">&gt;     could lead to slow-down?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     There is a suspicious parameter in the mlx4_core module:
</span><br>
<span class="quotelev1">&gt;     $ modinfo mlx4_core | grep log_num_cq
</span><br>
<span class="quotelev1">&gt;     parm:           log_num_cq:log maximum number of CQs per HCA  (int)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Is this the tweakable parameter?
</span><br>
<span class="quotelev1">&gt;     What is the default, and max value?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Any help would be welcome...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Paul Kapinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     P.S. There should be no connection problen somewhere between the nodes; a
</span><br>
<span class="quotelev1">&gt;     test job with 1x process on each node has been ran sucessfully just before
</span><br>
<span class="quotelev1">&gt;     starting the actual job, which also ran OK for a while - until calling
</span><br>
<span class="quotelev1">&gt;     MPI_Alltoallv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ------------------------------__------------------------------__--------------
</span><br>
<span class="quotelev1">&gt;     A process failed to create a queue pair. This usually means either
</span><br>
<span class="quotelev1">&gt;     the device has run out of queue pairs (too many connections) or
</span><br>
<span class="quotelev1">&gt;     there are insufficient resources available to allocate a queue pair
</span><br>
<span class="quotelev1">&gt;     (out of memory). The latter can happen if either 1) insufficient
</span><br>
<span class="quotelev1">&gt;     memory is available, or 2) no more physical memory can be registered
</span><br>
<span class="quotelev1">&gt;     with the device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     For more information on memory registration see the Open MPI FAQs at:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?__category=openfabrics#ib-__locked-pages">http://www.open-mpi.org/faq/?__category=openfabrics#ib-__locked-pages</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Local host: linuxbmc1156.rz.RWTH-Aachen.DE
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE">http://linuxbmc1156.rz.RWTH-Aachen.DE</a>&gt;
</span><br>
<span class="quotelev1">&gt;     Local device:           mlx4_0
</span><br>
<span class="quotelev1">&gt;     Queue pair type:        Reliable connected (RC)
</span><br>
<span class="quotelev1">&gt;     ------------------------------__------------------------------__--------------
</span><br>
<span class="quotelev1">&gt;     [linuxbmc1156.rz.RWTH-Aachen.__DE
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE">http://linuxbmc1156.rz.RWTH-Aachen.DE</a>&gt;][[3703,1],4021][connect/__btl_openib_connect_oob.c:867:__rml_recv_cb]
</span><br>
<span class="quotelev1">&gt;     error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt;     [linuxbmc1156.rz.RWTH-Aachen.__DE:9632
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE:9632">http://linuxbmc1156.rz.RWTH-Aachen.DE:9632</a>&gt;] *** An error occurred in
</span><br>
<span class="quotelev1">&gt;     MPI_Alltoallv
</span><br>
<span class="quotelev1">&gt;     [linuxbmc1156.rz.RWTH-Aachen.__DE:9632
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE:9632">http://linuxbmc1156.rz.RWTH-Aachen.DE:9632</a>&gt;] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;     [linuxbmc1156.rz.RWTH-Aachen.__DE:9632
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE:9632">http://linuxbmc1156.rz.RWTH-Aachen.DE:9632</a>&gt;] *** MPI_ERR_OTHER: known error
</span><br>
<span class="quotelev1">&gt;     not in list
</span><br>
<span class="quotelev1">&gt;     [linuxbmc1156.rz.RWTH-Aachen.__DE:9632
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE:9632">http://linuxbmc1156.rz.RWTH-Aachen.DE:9632</a>&gt;] *** MPI_ERRORS_ARE_FATAL: your
</span><br>
<span class="quotelev1">&gt;     MPI job will now abort
</span><br>
<span class="quotelev1">&gt;     [linuxbmc1156.rz.RWTH-Aachen.__DE
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE">http://linuxbmc1156.rz.RWTH-Aachen.DE</a>&gt;][[3703,1],4024][connect/__btl_openib_connect_oob.c:867:__rml_recv_cb]
</span><br>
<span class="quotelev1">&gt;     error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt;     [linuxbmc1156.rz.RWTH-Aachen.__DE
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE">http://linuxbmc1156.rz.RWTH-Aachen.DE</a>&gt;][[3703,1],4027][connect/__btl_openib_connect_oob.c:867:__rml_recv_cb]
</span><br>
<span class="quotelev1">&gt;     error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt;     [linuxbmc0840.rz.RWTH-Aachen.__DE
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE">http://linuxbmc0840.rz.RWTH-Aachen.DE</a>&gt;][[3703,1],10][connect/btl___openib_connect_oob.c:867:rml___recv_cb]
</span><br>
<span class="quotelev1">&gt;     error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt;     [linuxbmc0840.rz.RWTH-Aachen.__DE
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE">http://linuxbmc0840.rz.RWTH-Aachen.DE</a>&gt;][[3703,1],1][connect/btl___openib_connect_oob.c:867:rml___recv_cb]
</span><br>
<span class="quotelev1">&gt;     error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt;     [linuxbmc0840.rz.RWTH-Aachen.__DE:17696
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;] [[3703,0],0]-[[3703,1],10]
</span><br>
<span class="quotelev1">&gt;     mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;     [linuxbmc0840.rz.RWTH-Aachen.__DE:17696
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;] [[3703,0],0]-[[3703,1],8]
</span><br>
<span class="quotelev1">&gt;     mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;     [linuxbmc0840.rz.RWTH-Aachen.__DE:17696
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;] [[3703,0],0]-[[3703,1],9]
</span><br>
<span class="quotelev1">&gt;     mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;     [linuxbmc0840.rz.RWTH-Aachen.__DE:17696
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;] [[3703,0],0]-[[3703,1],1]
</span><br>
<span class="quotelev1">&gt;     mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;     [linuxbmc0840.rz.RWTH-Aachen.__DE:17696
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;] 9 more processes have sent
</span><br>
<span class="quotelev1">&gt;     help message help-mpi-btl-openib-cpc-base.__txt / ibv_create_qp failed
</span><br>
<span class="quotelev1">&gt;     [linuxbmc0840.rz.RWTH-Aachen.__DE:17696
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;] Set MCA parameter
</span><br>
<span class="quotelev1">&gt;     &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;     [linuxbmc0840.rz.RWTH-Aachen.__DE:17696
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;] 3 more processes have sent
</span><br>
<span class="quotelev1">&gt;     help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt;     RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt;     Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt;     Tel: +49 241/80-24915 &lt;tel:%2B49%20241%2F80-24915&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="../../att-22408/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22409.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="../../2013/07/22407.php">Jeff Squyres (jsquyres): "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="../../2013/07/22404.php">Mike Dubman: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
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
