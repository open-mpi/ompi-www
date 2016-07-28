<?
$subject_val = "Re: [OMPI users] mpirun over infiniband.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 14 18:58:53 2010" -->
<!-- isoreceived="20100314225853" -->
<!-- sent="Sun, 14 Mar 2010 16:58:39 -0600" -->
<!-- isosent="20100314225839" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun over infiniband." -->
<!-- id="069FA260-6616-430F-9D32-A366AE029005_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT113-W9E7C64FD6800F71E9E06BC62F0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun over infiniband.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-14 18:58:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12353.php">Dr. David Kirkby: "[OMPI users] make check failure on Solaris 10 (SPARC)"</a>
<li><strong>Previous message:</strong> <a href="12351.php">Ralph Castain: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>In reply to:</strong> <a href="12350.php">nad labassi: "[OMPI users] mpirun over infiniband."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12383.php">nad labassi: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>Reply:</strong> <a href="12383.php">nad labassi: "Re: [OMPI users] mpirun over infiniband."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I'm confused by your question, so please clarify: the hostnames that have ethernet interfaces do NOT have infiniband interfaces on them? If so, why would you expect OMPI to use infiniband when you execute on those hosts? Or do they contain an infiniband interface in addition to the ethernet interface?
<br>
<p><p>On Mar 14, 2010, at 4:47 PM, nad labassi wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My problem is: I installed openmpi 1.2.9, with mvapi support, but the
</span><br>
<span class="quotelev1">&gt; execution is done on ethernet, unless I use ipoib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I built openmpi with the command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CC=/home/pgi/linux86-64/6.2/bin/pgcc
</span><br>
<span class="quotelev1">&gt; CXX=/home/pgi/linux86-64/6.2/bin/pgCC 
</span><br>
<span class="quotelev1">&gt; FC=/home/pgi/linux86-64/6.2/bin/pgf90 
</span><br>
<span class="quotelev1">&gt; --without-tm --without-gm --without-mx --with-sge --without-openib 
</span><br>
<span class="quotelev1">&gt; --with-mvapi=/usr/mellanox --with-mvapi-libdir=/usr/lib64 
</span><br>
<span class="quotelev1">&gt; --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --prefix=/home/openmpi-1.2.9_mvapi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run the program with the commande:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/openmpi-1.2.9_mvapi/bin/mpirun --mca btl mvapi,self -n 8
</span><br>
<span class="quotelev1">&gt; -machinefile /home/myaccount/machines
</span><br>
<span class="quotelev1">&gt; /home/myaccount/mpihello_openmpi-1.2.9.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the machines file contains hostnames for ethernet interfaces,
</span><br>
<span class="quotelev1">&gt; the execution is never done on infiniband
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the machines file contains hostnames for ib interfaces (ipoib),
</span><br>
<span class="quotelev1">&gt; then the execution is done on infiniband.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want the execution to be done on infiniband, while the machines
</span><br>
<span class="quotelev1">&gt; file contains hostnames for ethernet interfaces.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ompi_info --param btl mvapi outputs are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If btl_base_debug is 1 standard debug is
</span><br>
<span class="quotelev1">&gt; output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; btl framework (&lt;none&gt; means &quot;use all
</span><br>
<span class="quotelev1">&gt;  components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the btl framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_max_btls&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           maximum number of HCAs/ports to use
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_free_list_num&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           initial size of free lists
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_free_list_max&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           maximum size of free lists
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_free_list_inc&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                           increment size of free lists
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_mpool&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;rdma&quot;)
</span><br>
<span class="quotelev1">&gt;                           name of the memory pool to be used
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_reg_mru_len&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           length of the registration cache most
</span><br>
<span class="quotelev1">&gt; recently used list
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_use_srq&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           if 1 use the IB shared receive queue to
</span><br>
<span class="quotelev1">&gt; post receive descriptors
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_cq_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;10000&quot;)
</span><br>
<span class="quotelev1">&gt;                           size of the IB completion queue
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_sg_list_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           size of IB segment list
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_pkey_ix&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB pkey index
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_psn&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB Packet sequence starting number
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_qp_ous_rd_atom&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB outstanding atomic reads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_mtu&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB MTU, in bytes.  Valid values are: 1=256
</span><br>
<span class="quotelev1">&gt; bytes, 2=512 bytes, 3=1024 bytes, 4=2
</span><br>
<span class="quotelev1">&gt; 048 bytes, 5=4096 bytes.
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_min_rnr_timer&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;5&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB min rnr timer
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_timeout&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB transmit timeout
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_retry_count&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;7&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB transmit retry count
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_rnr_retry&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;7&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB rnr retry
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_max_rdma_dst_ops&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB max rdma destination operations
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_service_level&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB service level
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_static_rate&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB static rate
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_ib_src_path_bits&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           IB source path bits
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_rd_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           number of receive descriptors to post to a
</span><br>
<span class="quotelev1">&gt; QP
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_rd_low&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;6&quot;)
</span><br>
<span class="quotelev1">&gt;                           low water mark before reposting occurs
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_rd_win&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           window size at which generate explicity
</span><br>
<span class="quotelev1">&gt; credit message
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_srq_rd_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1000&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of receive descriptors
</span><br>
<span class="quotelev1">&gt; posted per SRQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_srq_rd_per_peer&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           receive descriptors posted per peer, SRQ
</span><br>
<span class="quotelev1">&gt; mode only
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_srq_sd_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of send descriptors posted
</span><br>
<span class="quotelev1">&gt; per process
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_use_eager_rdma&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           user RDMA for eager messages
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_eager_rdma_threshold&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Open rdma channel for eager messages after
</span><br>
<span class="quotelev1">&gt; this number of messages received from
</span><br>
<span class="quotelev1">&gt;  peer (zero to disable)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_max_eager_rdma&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of eager RDMA connections
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_eager_rdma_num&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of RDMA buffers for eager messages
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_exclusivity&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;                           BTL exclusivity
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_eager_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;12288&quot;)
</span><br>
<span class="quotelev1">&gt;                           eager send limit
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_min_send_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                           minimum send size
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_max_send_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                           maximum send size
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_min_rdma_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1048576&quot;)
</span><br>
<span class="quotelev1">&gt;                           minimum rdma size
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_max_rdma_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1048576&quot;)
</span><br>
<span class="quotelev1">&gt;                           maximium rdma size
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_flags&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;6&quot;)
</span><br>
<span class="quotelev1">&gt;                           BTL flags, SEND=1, PUT=2, GET=4
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_bandwidth&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;800&quot;)
</span><br>
<span class="quotelev1">&gt;                           Approximate maximum bandwidth of
</span><br>
<span class="quotelev1">&gt; interconnect
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_mvapi_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           This parameter is used to turn on warning
</span><br>
<span class="quotelev1">&gt; messages when certain NICs are not use
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nadjet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hotmail : une messagerie fiable avec une protection anti-spam performante Inscrivez-vous_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12352/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12353.php">Dr. David Kirkby: "[OMPI users] make check failure on Solaris 10 (SPARC)"</a>
<li><strong>Previous message:</strong> <a href="12351.php">Ralph Castain: "Re: [OMPI users] OMPI looking for PBS file?"</a>
<li><strong>In reply to:</strong> <a href="12350.php">nad labassi: "[OMPI users] mpirun over infiniband."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12383.php">nad labassi: "Re: [OMPI users] mpirun over infiniband."</a>
<li><strong>Reply:</strong> <a href="12383.php">nad labassi: "Re: [OMPI users] mpirun over infiniband."</a>
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
