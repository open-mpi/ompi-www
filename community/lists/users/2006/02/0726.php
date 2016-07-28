<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 15:36:57 2006" -->
<!-- isoreceived="20060228203657" -->
<!-- sent="Tue, 28 Feb 2006 12:36:35 -0800" -->
<!-- isosent="20060228203635" -->
<!-- name="Scott Weitzenkamp \(sweitzen\)" -->
<!-- email="sweitzen_at_[hidden]" -->
<!-- subject="[OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?" -->
<!-- id="A15335FBE9BD2449AF2C9EF3D1EB8EA3015E92A9_at_xmb-sjc-216.amer.cisco.com" -->
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
<strong>From:</strong> Scott Weitzenkamp \(sweitzen\) (<em>sweitzen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-28 15:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0727.php">Michael Kluskens: "[OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0725.php">Brian Barrett: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0737.php">Galen Shipman: "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0737.php">Galen Shipman: "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0741.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying OpenMPI with the 2.6.9-27.ELsmp kernel and Red Hat OpenIB
<br>
RPMs included with the beta.
<br>
&nbsp;
<br>
I ran configure with only the --prefix option.
<br>
&nbsp;
<br>
OpenMPI 1.0.1 mpirun just hangs with no output.
<br>
&nbsp;
<br>
A 1.1 snapshot gets this:
<br>
&nbsp;
<br>
/data/software/qa/MPI/openmpi-1.1a1r9094.rhel4-amd64-openib/bin/mpirun
<br>
--prefix
<br>
/data/software/qa/MPI/openmpi-1.1a1r9094.rhel4-amd64-openib -np 2 -host
<br>
192.168.0.197,192.168.0.199
<br>
/data/home/releng/tmp/rhel4/openib/mpi_latency.amd64 100 1
<br>
[0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data
<br>
&nbsp;
<br>
[0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data[
<br>
0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data
<br>
[0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data
<br>
[0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data
<br>
[0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data
<br>
[0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data
<br>
[0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data
<br>
<p>Do I need to use a newer OpenIB?
<br>
&nbsp;
<br>
Scott
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0726/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0727.php">Michael Kluskens: "[OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0725.php">Brian Barrett: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0737.php">Galen Shipman: "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0737.php">Galen Shipman: "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0741.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
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
