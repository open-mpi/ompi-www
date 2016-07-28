<?
$subject_val = "[OMPI users] ConnectX hang with 1.2.5, crash with 1.3, during gather";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 15:08:06 2008" -->
<!-- isoreceived="20080327190806" -->
<!-- sent="Thu, 27 Mar 2008 13:07:50 -0600" -->
<!-- isosent="20080327190750" -->
<!-- name="Matt Hughes" -->
<!-- email="matt.c.hughes+ompi_at_[hidden]" -->
<!-- subject="[OMPI users] ConnectX hang with 1.2.5, crash with 1.3, during gather" -->
<!-- id="d105ee120803271207i724b5c76x631163bf9bb1c8f0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d105ee120803271157q27509171kb8542b5dd002bc83_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ConnectX hang with 1.2.5, crash with 1.3, during gather<br>
<strong>From:</strong> Matt Hughes (<em>matt.c.hughes+ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-27 15:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5281.php">Joao Vicente Lima: "[OMPI users] Spawn problem"</a>
<li><strong>Previous message:</strong> <a href="5279.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;I have a cluster using Mellanox  (dual port) ConnectX hardware, and
<br>
&nbsp;I'm having some problems with MPI_Gather operations.  The vendor id is
<br>
&nbsp;0x2c9, and the part id is 26418.  I had to add the vendor part id to
<br>
&nbsp;mca-btl-openib-hca-params.ini, but the problems are the same for both
<br>
&nbsp;1.2.5 and 1.3, whether the part ID is in the ini file or not.
<br>
<p>&nbsp;The details of my hardware, the OpenMPI 1.3 configuration, and the
<br>
&nbsp;runtime environment are included in the attached tar.gz file.
<br>
<p>&nbsp;A similar problem was reported in this message, and a 1.3 nightly was
<br>
&nbsp;reported to work:
<br>
&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2008/01/4891.php">http://www.open-mpi.org/community/lists/users/2008/01/4891.php</a>
<br>
<p>&nbsp;I tested the code in that message, and it hangs (actually, runs very
<br>
&nbsp;slowly after a few iterations) with 1.2.5, but works find with 1.3.
<br>
<p>&nbsp;My own code starts worker processes with MPI::Comm::Spawn, and does a
<br>
&nbsp;series of Bcast's and Gather's from the parent process.  Large
<br>
&nbsp;messages are passed between the spawned processes using ISend / IRecv
<br>
&nbsp;/ Wait, and that works fine.  The crash or hang is always observed in
<br>
&nbsp;the parent process during the Gather operation.
<br>
<p>&nbsp;I suspect this may have something to do with eager rdma, so I ran some
<br>
&nbsp;tests with different values of btl_openib_use_eager_rdma.  On 1.2.5,
<br>
&nbsp;no difference was observed.  It always hung after about 20 Gathers.
<br>
&nbsp;On 1.3:
<br>
<p>&nbsp;&nbsp;* Not set: parent process crashes with a null pointer dereference on
<br>
&nbsp;the 10th Gather operation.
<br>
&nbsp;&nbsp;* Set to 0: parent process crashes with a null pointer dereference on
<br>
&nbsp;the 33rd Gather operation.
<br>
&nbsp;&nbsp;* Set to 1: parent process hangs on the 7th Gather operation.
<br>
<p>&nbsp;I built 1.3 in debug mode and attempted to narrow down where the crash
<br>
&nbsp;(segfault due to null pointer).
<br>
<p>&nbsp;Before the crash, the stack trace looks like this:
<br>
<p>&nbsp;#0  PMPI_Gather (sendbuf=0x7fbfffe494, sendcount=1, sendtype=0x2a958aab80,
<br>
&nbsp;&nbsp;&nbsp;recvbuf=0xda1a40, recvcount=1, recvtype=0x2a958aab80, root=0,
<br>
&nbsp;&nbsp;&nbsp;comm=0xd5bbd0) at pgather.c:138
<br>
&nbsp;#1  0x0000000000608ff4 in MPI::Comm::Gather (this=0xcdd890,
<br>
&nbsp;&nbsp;&nbsp;sendbuf=0x7fbfffe494, sendcount=1, sendtype=@0xa33950, recvbuf=0xda1a40,
<br>
&nbsp;&nbsp;&nbsp;recvcount=1, recvtype=@0xa33950, root=0)
<br>
&nbsp;&nbsp;&nbsp;at /home/matt/opt/openmpi/1.3/include/openmpi/ompi/mpi/cxx/comm_inln.h:325
<br>
<p>&nbsp;Stepping into comm-&gt;c_coll.coll_gather at pgather.c:138 results in an
<br>
&nbsp;immediate crash, but comm-&gt;c_coll.coll_gather itself is not null (it
<br>
&nbsp;is the same as for successful Gathers).
<br>
<p>&nbsp;Can anyone suggest where I can go from here?
<br>
<p>&nbsp;Thanks,
<br>
&nbsp;Matt Hughes
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5280/ompi-info.tar.gz">ompi-info.tar.gz</a>
</ul>
<!-- attachment="ompi-info.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5281.php">Joao Vicente Lima: "[OMPI users] Spawn problem"</a>
<li><strong>Previous message:</strong> <a href="5279.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
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
