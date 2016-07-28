<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 17:43:29 2007" -->
<!-- isoreceived="20070215224329" -->
<!-- sent="Thu, 15 Feb 2007 15:43:25 -0700 (GMT-07:00)" -->
<!-- isosent="20070215224325" -->
<!-- name="Steven A. DuChene" -->
<!-- email="linux-clusters_at_[hidden]" -->
<!-- subject="[OMPI users] ORTE errors on simple fortran program with 1.2b3" -->
<!-- id="16900484.1171579405546.JavaMail.root_at_mswamui-swiss.atl.sa.earthlink.net" -->
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
<strong>From:</strong> Steven A. DuChene (<em>linux-clusters_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 17:43:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2704.php">Jeff Squyres: "Re: [OMPI users] where do the openmpi profile.d scripts get created?"</a>
<li><strong>Previous message:</strong> <a href="2702.php">Eric Thibodeau: "[OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2705.php">Brian Barrett: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Reply:</strong> <a href="2705.php">Brian Barrett: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Reply:</strong> <a href="2706.php">Jeff Squyres: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Maybe reply:</strong> <a href="2710.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Maybe reply:</strong> <a href="2711.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to do some simple fortran MPI examples to verify I have a good installation
<br>
of OpenMPI and I have a distributed program that calculates PI. It seems to compile
<br>
and work fine with 1.1.4 but whan I compile and run the same program with 1.2b3
<br>
I get a bunch of the same ORTE errors and then my shell is locked up:
<br>
<p>[node001:30268] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space in file dss/dss_unpack.c at line 90
<br>
[node001:30268] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361
<br>
<p>I then do a Ctrl-C and it tells me &quot;mpirun: killing job...&quot; but my shell never comes back.
<br>
<p><p>I do get the following compile time warnings when I build the simple app with either 1.1.4 or 1.2b3:
<br>
<p>mpif90  -c -I/opt/openmpi/1.1.4/include    pi.f
<br>
In file pi.f:73
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_reduce(times(1), total, 1, mpi_real,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
In file pi.f:67
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_reduce(piece, pi, 1, mpi_double_precision,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Warning (155): Inconsistent types (REAL(4)/REAL(8)) in actual argument lists at (1) and (2)
<br>
mpif90 -o pi pi.o f.o -L /opt/openmpi/1.1.4/lib -lmpi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2704.php">Jeff Squyres: "Re: [OMPI users] where do the openmpi profile.d scripts get created?"</a>
<li><strong>Previous message:</strong> <a href="2702.php">Eric Thibodeau: "[OMPI users] compiling mpptest using OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2705.php">Brian Barrett: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Reply:</strong> <a href="2705.php">Brian Barrett: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Reply:</strong> <a href="2706.php">Jeff Squyres: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Maybe reply:</strong> <a href="2710.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Maybe reply:</strong> <a href="2711.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
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
