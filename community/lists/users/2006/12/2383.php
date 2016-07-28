<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 19 15:53:44 2006" -->
<!-- isoreceived="20061219205344" -->
<!-- sent="Tue, 19 Dec 2006 14:53:37 -0600" -->
<!-- isosent="20061219205337" -->
<!-- name="Michael John Hanby" -->
<!-- email="mhanby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure openmpi with support for Sun gridengine(SGE)?" -->
<!-- id="1783B976DF8DCD49B4463FB606CADB222E047D_at_UABEXMB2.ad.uab.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] configure openmpi with support for Sun gridengine(SGE)?" -->
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
<strong>From:</strong> Michael John Hanby (<em>mhanby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-19 15:53:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2384.php">Andreas Schäfer: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<li><strong>Previous message:</strong> <a href="2382.php">Harakiri: "[OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Never mind, I found it in the FAQ, need version 1.2 of OpenMPI. I'll
<br>
give that a go.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Michael John Hanby
<br>
Sent: Tuesday, December 19, 2006 2:28 PM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] configure openmpi with support for Sun
<br>
gridengine(SGE)?
<br>
<p>Howdy,
<br>
<p>I'm compiling OpenMPI 1.1.2 on a Rocks Cluster 4.2.1. The cluster has
<br>
sge installed which is what the users will use to submit their MPI jobs
<br>
(i.e. using qsub).
<br>
<p>I'm not having any luck finding the correct parameters to provide
<br>
./configure in order to include support for SGE.
<br>
<p>Here's the configure line that I've tried (I'm including support for
<br>
TopSpin Infiniband and using Intel compilers):
<br>
<p>./configure CC='icc' CXX='icpc' FC='ifort' F77='ifort'
<br>
CPPFLAGS=&quot;-I/share/apps/intel/cce/include&quot;
<br>
LDFLAGS=&quot;-L/share/apps/intel/cce/lib&quot; --with-mvapi=/usr/local/topspin
<br>
--with-mvapi-libdir=/usr/local/topspin/lib64 --enable-static
<br>
--prefix=/share/apps/openmpi-1.1.2
<br>
<p>Any suggestions on what I should add to ./configure to enable SGE
<br>
support?
<br>
<p>If I run ompi_info and grep for grid, I don't see any results.
<br>
<p>Thanks, Mike
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2384.php">Andreas Schäfer: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<li><strong>Previous message:</strong> <a href="2382.php">Harakiri: "[OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
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
