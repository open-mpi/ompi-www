<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 15:56:44 2006" -->
<!-- isoreceived="20060302205644" -->
<!-- sent="Thu, 02 Mar 2006 13:56:42 -0700" -->
<!-- isosent="20060302205642" -->
<!-- name="Xiaoning (David) Yang" -->
<!-- email="xyang_at_[hidden]" -->
<!-- subject="[OMPI users] Problem running open mpi across nodes." -->
<!-- id="C02CAA1A.8F45%xyang_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Xiaoning (David) Yang (<em>xyang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 15:56:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0764.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Previous message:</strong> <a href="0762.php">Bjoern Nachtwey: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90 ==&gt; Problem solved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0764.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Reply:</strong> <a href="0764.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I installed Open MPI on two Mac G5s, one with 2 cpus and the other with 4
<br>
cpus. I can run jobs on either of the machines fine. But when I ran a job on
<br>
machine one across the two nodes, the all processes I requested would start,
<br>
but they then seemed to hang and I got the error message:
<br>
<p>[0,1,1][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed with
<br>
errno=60[0,1,0][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect
<br>
] connect() failed with errno=60
<br>
<p>When I ran the job on machine two across the nodes, only processes on this
<br>
machine would start and then hung. No processes would start on machine one
<br>
and I didn't get any messages. In both cases, I have to Ctrl+C to kill the
<br>
jobs. Any idea what was wrong? Thanks a lot!
<br>
<p>David
<br>
<p>***** Correspondence *****
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0764.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Previous message:</strong> <a href="0762.php">Bjoern Nachtwey: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90 ==&gt; Problem solved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0764.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Reply:</strong> <a href="0764.php">Brian Barrett: "Re: [OMPI users] Problem running open mpi across nodes."</a>
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
