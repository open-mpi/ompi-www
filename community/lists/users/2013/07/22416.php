<?
$subject_val = "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 31 11:00:11 2013" -->
<!-- isoreceived="20130731150011" -->
<!-- sent="Wed, 31 Jul 2013 17:59:55 +0300" -->
<!-- isosent="20130731145955" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed" -->
<!-- id="CAAO1KyZWO4wV4O661quBm1Zj2EQGGGdhuzFXJ7JQxsk+cRxkFA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51F7FB04.6080101_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-31 10:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22417.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Previous message:</strong> <a href="22415.php">Paul Kapinos: "[OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>In reply to:</strong> <a href="22415.php">Paul Kapinos: "[OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22420.php">Paul Kapinos: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22420.php">Paul Kapinos: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
What OFED vendor and version do you use?
<br>
Regards
<br>
M
<br>
<p><p>On Tue, Jul 30, 2013 at 8:42 PM, Paul Kapinos &lt;kapinos_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI experts,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An user at our cluster has a problem running a kinda of big job:
</span><br>
<span class="quotelev1">&gt; (- the job using 3024 processes (12 per node, 252 nodes) runs fine)
</span><br>
<span class="quotelev1">&gt; - the job using 4032 processes (12 per node, 336 nodes) produce the error
</span><br>
<span class="quotelev1">&gt; attached below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, the <a href="http://www.open-mpi.org/faq/?**category=openfabrics#ib">http://www.open-mpi.org/faq/?**category=openfabrics#ib</a>-**
</span><br>
<span class="quotelev1">&gt; locked-pages&lt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>&gt;is well-known one; both recommended tweakables (user limits and registered
</span><br>
<span class="quotelev1">&gt; memory size) are at MAX now, nevertheless someone queue pair could not be
</span><br>
<span class="quotelev1">&gt; created.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our blind guess is the number of completion queues is exhausted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What happen' when raising the value from standard to max?
</span><br>
<span class="quotelev1">&gt; What max size of Open MPI jobs have been seen at all?
</span><br>
<span class="quotelev1">&gt; What max size of Open MPI jobs *using MPI_Alltoallv* have been seen at all?
</span><br>
<span class="quotelev1">&gt; Is there a way to manage the size/the number of queue pairs? (XRC not
</span><br>
<span class="quotelev1">&gt; availabe)
</span><br>
<span class="quotelev1">&gt; Is there a way to tell MPI_Alltoallv to use less queue pairs, even when
</span><br>
<span class="quotelev1">&gt; this could lead to slow-down?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a suspicious parameter in the mlx4_core module:
</span><br>
<span class="quotelev1">&gt; $ modinfo mlx4_core | grep log_num_cq
</span><br>
<span class="quotelev1">&gt; parm:           log_num_cq:log maximum number of CQs per HCA  (int)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this the tweakable parameter?
</span><br>
<span class="quotelev1">&gt; What is the default, and max value?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be welcome...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. There should be no connection problen somewhere between the nodes; a
</span><br>
<span class="quotelev1">&gt; test job with 1x process on each node has been ran sucessfully just before
</span><br>
<span class="quotelev1">&gt; starting the actual job, which also ran OK for a while - until calling
</span><br>
<span class="quotelev1">&gt; MPI_Alltoallv.
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
<span class="quotelev1">&gt; ------------------------------**------------------------------**
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; A process failed to create a queue pair. This usually means either
</span><br>
<span class="quotelev1">&gt; the device has run out of queue pairs (too many connections) or
</span><br>
<span class="quotelev1">&gt; there are insufficient resources available to allocate a queue pair
</span><br>
<span class="quotelev1">&gt; (out of memory). The latter can happen if either 1) insufficient
</span><br>
<span class="quotelev1">&gt; memory is available, or 2) no more physical memory can be registered
</span><br>
<span class="quotelev1">&gt; with the device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For more information on memory registration see the Open MPI FAQs at:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?**category=openfabrics#ib-**locked-pages<http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?**category=openfabrics#ib-**locked-pages<http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Local host:             linuxbmc1156.rz.RWTH-Aachen.DE
</span><br>
<span class="quotelev1">&gt; Local device:           mlx4_0
</span><br>
<span class="quotelev1">&gt; Queue pair type:        Reliable connected (RC)
</span><br>
<span class="quotelev1">&gt; ------------------------------**------------------------------**
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; [linuxbmc1156.rz.RWTH-Aachen.**DE &lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE">http://linuxbmc1156.rz.RWTH-Aachen.DE</a>&gt;
</span><br>
<span class="quotelev1">&gt; ][[3703,1],4021][connect/**btl_openib_connect_oob.c:867:**rml_recv_cb]
</span><br>
<span class="quotelev1">&gt; error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt; [linuxbmc1156.rz.RWTH-Aachen.**DE:9632&lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE:9632">http://linuxbmc1156.rz.RWTH-Aachen.DE:9632</a>&gt;]
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Alltoallv
</span><br>
<span class="quotelev1">&gt; [linuxbmc1156.rz.RWTH-Aachen.**DE:9632&lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE:9632">http://linuxbmc1156.rz.RWTH-Aachen.DE:9632</a>&gt;]
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [linuxbmc1156.rz.RWTH-Aachen.**DE:9632&lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE:9632">http://linuxbmc1156.rz.RWTH-Aachen.DE:9632</a>&gt;]
</span><br>
<span class="quotelev1">&gt; *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [linuxbmc1156.rz.RWTH-Aachen.**DE:9632&lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE:9632">http://linuxbmc1156.rz.RWTH-Aachen.DE:9632</a>&gt;]
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; [linuxbmc1156.rz.RWTH-Aachen.**DE &lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE">http://linuxbmc1156.rz.RWTH-Aachen.DE</a>&gt;
</span><br>
<span class="quotelev1">&gt; ][[3703,1],4024][connect/**btl_openib_connect_oob.c:867:**rml_recv_cb]
</span><br>
<span class="quotelev1">&gt; error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt; [linuxbmc1156.rz.RWTH-Aachen.**DE &lt;<a href="http://linuxbmc1156.rz.RWTH-Aachen.DE">http://linuxbmc1156.rz.RWTH-Aachen.DE</a>&gt;
</span><br>
<span class="quotelev1">&gt; ][[3703,1],4027][connect/**btl_openib_connect_oob.c:867:**rml_recv_cb]
</span><br>
<span class="quotelev1">&gt; error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt; [linuxbmc0840.rz.RWTH-Aachen.**DE &lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE">http://linuxbmc0840.rz.RWTH-Aachen.DE</a>&gt;
</span><br>
<span class="quotelev1">&gt; ][[3703,1],10][connect/btl_**openib_connect_oob.c:867:rml_**recv_cb]
</span><br>
<span class="quotelev1">&gt; error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt; [linuxbmc0840.rz.RWTH-Aachen.**DE &lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE">http://linuxbmc0840.rz.RWTH-Aachen.DE</a>&gt;
</span><br>
<span class="quotelev1">&gt; ][[3703,1],1][connect/btl_**openib_connect_oob.c:867:rml_**recv_cb] error
</span><br>
<span class="quotelev1">&gt; in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt; [linuxbmc0840.rz.RWTH-Aachen.**DE:17696&lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[3703,0],0]-[[3703,1],10] mca_oob_tcp_msg_recv: readv failed: Connection
</span><br>
<span class="quotelev1">&gt; reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [linuxbmc0840.rz.RWTH-Aachen.**DE:17696&lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[3703,0],0]-[[3703,1],8] mca_oob_tcp_msg_recv: readv failed: Connection
</span><br>
<span class="quotelev1">&gt; reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [linuxbmc0840.rz.RWTH-Aachen.**DE:17696&lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[3703,0],0]-[[3703,1],9] mca_oob_tcp_msg_recv: readv failed: Connection
</span><br>
<span class="quotelev1">&gt; reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [linuxbmc0840.rz.RWTH-Aachen.**DE:17696&lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;]
</span><br>
<span class="quotelev1">&gt; [[3703,0],0]-[[3703,1],1] mca_oob_tcp_msg_recv: readv failed: Connection
</span><br>
<span class="quotelev1">&gt; reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [linuxbmc0840.rz.RWTH-Aachen.**DE:17696&lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;]
</span><br>
<span class="quotelev1">&gt; 9 more processes have sent help message help-mpi-btl-openib-cpc-base.**txt
</span><br>
<span class="quotelev1">&gt; / ibv_create_qp failed
</span><br>
<span class="quotelev1">&gt; [linuxbmc0840.rz.RWTH-Aachen.**DE:17696&lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;]
</span><br>
<span class="quotelev1">&gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev1">&gt; [linuxbmc0840.rz.RWTH-Aachen.**DE:17696&lt;<a href="http://linuxbmc0840.rz.RWTH-Aachen.DE:17696">http://linuxbmc0840.rz.RWTH-Aachen.DE:17696</a>&gt;]
</span><br>
<span class="quotelev1">&gt; 3 more processes have sent help message help-mpi-errors.txt /
</span><br>
<span class="quotelev1">&gt; mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22417.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Previous message:</strong> <a href="22415.php">Paul Kapinos: "[OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>In reply to:</strong> <a href="22415.php">Paul Kapinos: "[OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22420.php">Paul Kapinos: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22420.php">Paul Kapinos: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
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
