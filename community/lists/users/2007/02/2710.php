<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 19:52:44 2007" -->
<!-- isoreceived="20070216005244" -->
<!-- sent="Thu, 15 Feb 2007 17:52:40 -0700 (GMT-07:00)" -->
<!-- isosent="20070216005240" -->
<!-- name="Steven A. DuChene" -->
<!-- email="linux-clusters_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3" -->
<!-- id="1930585.1171587160674.JavaMail.root_at_mswamui-blood.atl.sa.earthlink.net" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] ORTE errors on simple fortran program with 1.2b3" -->
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
<strong>Date:</strong> 2007-02-15 19:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2711.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Previous message:</strong> <a href="2709.php">Anthony Chan: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2711.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian:
<br>
These are dual proc AMD Opteron systems running RHEL4u2
<br>
<p>-----Original Message-----
<br>
<span class="quotelev1">&gt;From: Brian Barrett &lt;bbarrett_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Sent: Feb 15, 2007 4:02 PM
</span><br>
<span class="quotelev1">&gt;To: &quot;Steven A. DuChene&quot; &lt;linux-clusters_at_[hidden]&gt;, Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What platform / operating system was this with?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Feb 15, 2007, at 3:43 PM, Steven A. DuChene wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to do some simple fortran MPI examples to verify I have  
</span><br>
<span class="quotelev2">&gt;&gt; a good installation
</span><br>
<span class="quotelev2">&gt;&gt; of OpenMPI and I have a distributed program that calculates PI. It  
</span><br>
<span class="quotelev2">&gt;&gt; seems to compile
</span><br>
<span class="quotelev2">&gt;&gt; and work fine with 1.1.4 but whan I compile and run the same  
</span><br>
<span class="quotelev2">&gt;&gt; program with 1.2b3
</span><br>
<span class="quotelev2">&gt;&gt; I get a bunch of the same ORTE errors and then my shell is locked up:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [node001:30268] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate  
</span><br>
<span class="quotelev2">&gt;&gt; space in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev2">&gt;&gt; [node001:30268] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate  
</span><br>
<span class="quotelev2">&gt;&gt; space in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I then do a Ctrl-C and it tells me &quot;mpirun: killing job...&quot; but my  
</span><br>
<span class="quotelev2">&gt;&gt; shell never comes back.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do get the following compile time warnings when I build the  
</span><br>
<span class="quotelev2">&gt;&gt; simple app with either 1.1.4 or 1.2b3:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpif90  -c -I/opt/openmpi/1.1.4/include    pi.f
</span><br>
<span class="quotelev2">&gt;&gt; In file pi.f:73
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_reduce(times(1), total, 1, mpi_real,
</span><br>
<span class="quotelev2">&gt;&gt;                       1
</span><br>
<span class="quotelev2">&gt;&gt; In file pi.f:67
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_reduce(piece, pi, 1, mpi_double_precision,
</span><br>
<span class="quotelev2">&gt;&gt;                       2
</span><br>
<span class="quotelev2">&gt;&gt; Warning (155): Inconsistent types (REAL(4)/REAL(8)) in actual  
</span><br>
<span class="quotelev2">&gt;&gt; argument lists at (1) and (2)
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -o pi pi.o f.o -L /opt/openmpi/1.1.4/lib -lmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2711.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Previous message:</strong> <a href="2709.php">Anthony Chan: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2711.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
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
