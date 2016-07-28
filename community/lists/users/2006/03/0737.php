<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 10:53:17 2006" -->
<!-- isoreceived="20060301155317" -->
<!-- sent="Wed, 1 Mar 2006 08:53:11 -0700" -->
<!-- isosent="20060301155311" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?" -->
<!-- id="080ca917fe4337e0ef08bb0aea141b80_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A15335FBE9BD2449AF2C9EF3D1EB8EA3015E92A9_at_xmb-sjc-216.amer.cisco.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-01 10:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0738.php">Benoit Semelin: "[OMPI users] mpif90 problem."</a>
<li><strong>Previous message:</strong> <a href="0736.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0726.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0741.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Scott,
<br>
<p>What is happening is that on creation of the Queue Pair the max inline 
<br>
data is reported as 0. Open MPI 1.0.1 did not check this and assumed 
<br>
that data smaller than some threshold could be sent inline :-(. The 
<br>
Open MPI trunk does check the max inline data QP attribute prior to 
<br>
using inline data for sending, but if it sees that the inline data is 0 
<br>
it will report a warning although the application should still run to 
<br>
completion. Is your application completing with the trunk snapshot, if 
<br>
so you can effectively ignore these warnings?
<br>
<p>We saw this problem (0 max inline data) on one of our clusters, 
<br>
upgrading the OpenIB stack corrected the issue. You are running a 2.6.9 
<br>
kernel however so to upgrade to the latest OpenIB stack you will need 
<br>
to get a backport which is in the OpenIB SVN under 
<br>
gen2/branches/backport-to-2.6.9.
<br>
<p>So to distill, the hang on 0 max inline data was corrected in Open MPI 
<br>
in the trunk and the 1.0.2 branch. Upgrading the OpenIB stack resulted 
<br>
in a positive max inline data, although I cannot explain why, there may 
<br>
have been other changes to the cluster I am not aware of, Roland could 
<br>
probably explain this better.
<br>
<p>- Galen
<br>
<p>On Feb 28, 2006, at 1:36 PM, Scott Weitzenkamp ((sweitzen)) wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying OpenMPI with the 2.6.9-27.ELsmp kernel and Red Hat OpenIB 
</span><br>
<span class="quotelev1">&gt; RPMs included with the beta.
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; I ran configure with only the --prefix option.
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.0.1 mpirun just hangs with no output.
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; A 1.1 snapshot gets this:
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; /data/software/qa/MPI/openmpi-1.1a1r9094.rhel4-amd64-openib/bin/mpirun 
</span><br>
<span class="quotelev1">&gt; --prefix
</span><br>
<span class="quotelev1">&gt; /data/software/qa/MPI/openmpi-1.1a1r9094.rhel4-amd64-openib -np 2 
</span><br>
<span class="quotelev1">&gt; -host 192.168.0.197,192.168.0.199 
</span><br>
<span class="quotelev1">&gt; /data/home/releng/tmp/rhel4/openib/mpi_latency.amd64 100 1
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp] 
</span><br>
<span class="quotelev1">&gt; ibv_create_qp: returned 0 byte(s) for max inline data
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp] 
</span><br>
<span class="quotelev1">&gt; ibv_create_qp: returned 0 byte(s) for max inline data[
</span><br>
<span class="quotelev1">&gt; 0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp] 
</span><br>
<span class="quotelev1">&gt; ibv_create_qp: returned 0 byte(s) for max inline data
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp] 
</span><br>
<span class="quotelev1">&gt; ibv_create_qp: returned 0 byte(s) for max inline data
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp] 
</span><br>
<span class="quotelev1">&gt; ibv_create_qp: returned 0 byte(s) for max inline data
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp] 
</span><br>
<span class="quotelev1">&gt; ibv_create_qp: returned 0 byte(s) for max inline data
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp] 
</span><br>
<span class="quotelev1">&gt; ibv_create_qp: returned 0 byte(s) for max inline data
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp] 
</span><br>
<span class="quotelev1">&gt; ibv_create_qp: returned 0 byte(s) for max inline data
</span><br>
<span class="quotelev1">&gt; Do I need to use a newer OpenIB?
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; Scott
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
<li>text/enriched attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0737/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0738.php">Benoit Semelin: "[OMPI users] mpif90 problem."</a>
<li><strong>Previous message:</strong> <a href="0736.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0726.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0741.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
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
