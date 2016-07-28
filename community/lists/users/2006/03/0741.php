<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 13:26:17 2006" -->
<!-- isoreceived="20060301182617" -->
<!-- sent="Wed, 1 Mar 2006 10:26:09 -0800" -->
<!-- isosent="20060301182609" -->
<!-- name="Scott Weitzenkamp \(sweitzen\)" -->
<!-- email="sweitzen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?" -->
<!-- id="A15335FBE9BD2449AF2C9EF3D1EB8EA3015E966B_at_xmb-sjc-216.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?" -->
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
<strong>Date:</strong> 2006-03-01 13:26:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0742.php">Bjoern Nachtwey: "[OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0740.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0726.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the info.  I'm going to try upgrading my OpenIB bits.
<br>
&nbsp;
<br>
Scott
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: Galen Shipman [mailto:gshipman_at_[hidden]] 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Wednesday, March 01, 2006 7:53 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cc: Scott Weitzenkamp (sweitzen); Roland Dreier (rdreier)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] anyone have OpenMPI working with
<br>
OpenIB on RHEL4 U3 beta?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi Scott, 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is happening is that on creation of the Queue Pair the max
<br>
inline data is reported as 0. Open MPI 1.0.1 did not check this and
<br>
assumed that data smaller than some threshold could be sent inline :-(.
<br>
The Open MPI trunk does check the max inline data QP attribute prior to
<br>
using inline data for sending, but if it sees that the inline data is 0
<br>
it will report a warning although the application should still run to
<br>
completion. Is your application completing with the trunk snapshot, if
<br>
so you can effectively ignore these warnings? 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We saw this problem (0 max inline data) on one of our clusters,
<br>
upgrading the OpenIB stack corrected the issue. You are running a 2.6.9
<br>
kernel however so to upgrade to the latest OpenIB stack you will need to
<br>
get a backport which is in the OpenIB SVN under
<br>
gen2/branches/backport-to-2.6.9. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So to distill, the hang on 0 max inline data was corrected in
<br>
Open MPI in the trunk and the 1.0.2 branch. Upgrading the OpenIB stack
<br>
resulted in a positive max inline data, although I cannot explain why,
<br>
there may have been other changes to the cluster I am not aware of,
<br>
Roland could probably explain this better. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Galen 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Feb 28, 2006, at 1:36 PM, Scott Weitzenkamp ((sweitzen))
<br>
wrote: 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm trying OpenMPI with the 2.6.9-27.ELsmp kernel and
<br>
Red Hat OpenIB RPMs included with the beta. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I ran configure with only the --prefix option. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI 1.0.1 mpirun just hangs with no output. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A 1.1 snapshot gets this: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
/data/software/qa/MPI/openmpi-1.1a1r9094.rhel4-amd64-openib/bin/mpirun
<br>
--prefix 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
/data/software/qa/MPI/openmpi-1.1a1r9094.rhel4-amd64-openib -np 2 -host
<br>
192.168.0.197,192.168.0.199
<br>
/data/home/releng/tmp/rhel4/openib/mpi_latency.amd64 100 1 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data[ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[0,1,0][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[0,1,1][btl_openib_endpoint.c:889:mca_btl_openib_endpoint_create_qp]
<br>
ibv_create_qp: returned 0 byte(s) for max inline data 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do I need to use a newer OpenIB? 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scott 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden] 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0741/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0742.php">Bjoern Nachtwey: "[OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0740.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0726.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
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
