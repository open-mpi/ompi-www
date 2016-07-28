<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 21:24:09 2007" -->
<!-- isoreceived="20070216022409" -->
<!-- sent="Thu, 15 Feb 2007 19:24:05 -0700 (GMT-07:00)" -->
<!-- isosent="20070216022405" -->
<!-- name="Steven A. DuChene" -->
<!-- email="linux-clusters_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3" -->
<!-- id="33176387.1171592645909.JavaMail.root_at_mswamui-blood.atl.sa.earthlink.net" -->
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
<strong>Date:</strong> 2007-02-15 21:24:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2712.php">Galen Shipman: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2710.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Maybe in reply to:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff:
<br>
I built openmpi-1.2b4r13658 and tried the test again and my example fortran program
<br>
did indeed work fine with that release.
<br>
Thanks
<br>
<p>-----Original Message-----
<br>
<span class="quotelev1">&gt;From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Sent: Feb 15, 2007 4:09 PM
</span><br>
<span class="quotelev1">&gt;To: &quot;Steven A. DuChene&quot; &lt;linux-clusters_at_[hidden]&gt;, Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Feb 15, 2007, at 5:43 PM, Steven A. DuChene wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We had some problems with this in 1.2b3.  I honestly don't remember  
</span><br>
<span class="quotelev1">&gt;if we fixed them by 1.2b4 or not -- could you try a recent 1.2  
</span><br>
<span class="quotelev1">&gt;nightly snapshot?  they should be fixed there:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/nightly/v1.2/">http://www.open-mpi.org/nightly/v1.2/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm not a Fortran expert, but I think that this is the f90 compiling  
</span><br>
<span class="quotelev1">&gt;telling you that you have inconsistent types for the first argument  
</span><br>
<span class="quotelev1">&gt;of MPI_REDUCE.  This is mainly because there is no equivalent in  
</span><br>
<span class="quotelev1">&gt;Fortran to C's (void*) type -- it's the compiler trying to be helpful  
</span><br>
<span class="quotelev1">&gt;saying, &quot;Hey, I noticed you have inconsistent types in successive  
</span><br>
<span class="quotelev1">&gt;calls to the same function.  Did you really mean to do that?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For MPI apps using choice buffers (like the first argument in  
</span><br>
<span class="quotelev1">&gt;MPI_REDUCE), yes, you did mean to do that -- it's ok.  This is not  
</span><br>
<span class="quotelev1">&gt;really an OMPI issue, but rather a Fortran compiler issue.  What you  
</span><br>
<span class="quotelev1">&gt;might try is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- use mpif77 instead (although, depending on your compiler, the  
</span><br>
<span class="quotelev1">&gt;result may be exactly the same)
</span><br>
<span class="quotelev1">&gt;- poke through your fortran compiler's docs and see if there's a flag  
</span><br>
<span class="quotelev1">&gt;that disables this warning
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt;Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2712.php">Galen Shipman: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2710.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Maybe in reply to:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
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
