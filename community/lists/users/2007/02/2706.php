<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 18:09:24 2007" -->
<!-- isoreceived="20070215230924" -->
<!-- sent="Thu, 15 Feb 2007 18:09:09 -0500" -->
<!-- isosent="20070215230909" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3" -->
<!-- id="FCED6145-4B23-4003-9FAB-FE19C00C03B1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="16900484.1171579405546.JavaMail.root_at_mswamui-swiss.atl.sa.earthlink.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 18:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2707.php">Jeff Squyres: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2705.php">Brian Barrett: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>In reply to:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2710.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 15, 2007, at 5:43 PM, Steven A. DuChene wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to do some simple fortran MPI examples to verify I have  
</span><br>
<span class="quotelev1">&gt; a good installation
</span><br>
<span class="quotelev1">&gt; of OpenMPI and I have a distributed program that calculates PI. It  
</span><br>
<span class="quotelev1">&gt; seems to compile
</span><br>
<span class="quotelev1">&gt; and work fine with 1.1.4 but whan I compile and run the same  
</span><br>
<span class="quotelev1">&gt; program with 1.2b3
</span><br>
<span class="quotelev1">&gt; I get a bunch of the same ORTE errors and then my shell is locked up:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node001:30268] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate  
</span><br>
<span class="quotelev1">&gt; space in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [node001:30268] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate  
</span><br>
<span class="quotelev1">&gt; space in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then do a Ctrl-C and it tells me &quot;mpirun: killing job...&quot; but my  
</span><br>
<span class="quotelev1">&gt; shell never comes back.
</span><br>
<p>We had some problems with this in 1.2b3.  I honestly don't remember  
<br>
if we fixed them by 1.2b4 or not -- could you try a recent 1.2  
<br>
nightly snapshot?  they should be fixed there:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.2/">http://www.open-mpi.org/nightly/v1.2/</a>
<br>
<p><span class="quotelev1">&gt; I do get the following compile time warnings when I build the  
</span><br>
<span class="quotelev1">&gt; simple app with either 1.1.4 or 1.2b3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90  -c -I/opt/openmpi/1.1.4/include    pi.f
</span><br>
<span class="quotelev1">&gt; In file pi.f:73
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       call mpi_reduce(times(1), total, 1, mpi_real,
</span><br>
<span class="quotelev1">&gt;                       1
</span><br>
<span class="quotelev1">&gt; In file pi.f:67
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       call mpi_reduce(piece, pi, 1, mpi_double_precision,
</span><br>
<span class="quotelev1">&gt;                       2
</span><br>
<span class="quotelev1">&gt; Warning (155): Inconsistent types (REAL(4)/REAL(8)) in actual  
</span><br>
<span class="quotelev1">&gt; argument lists at (1) and (2)
</span><br>
<span class="quotelev1">&gt; mpif90 -o pi pi.o f.o -L /opt/openmpi/1.1.4/lib -lmpi
</span><br>
<p>I'm not a Fortran expert, but I think that this is the f90 compiling  
<br>
telling you that you have inconsistent types for the first argument  
<br>
of MPI_REDUCE.  This is mainly because there is no equivalent in  
<br>
Fortran to C's (void*) type -- it's the compiler trying to be helpful  
<br>
saying, &quot;Hey, I noticed you have inconsistent types in successive  
<br>
calls to the same function.  Did you really mean to do that?&quot;
<br>
<p>For MPI apps using choice buffers (like the first argument in  
<br>
MPI_REDUCE), yes, you did mean to do that -- it's ok.  This is not  
<br>
really an OMPI issue, but rather a Fortran compiler issue.  What you  
<br>
might try is:
<br>
<p>- use mpif77 instead (although, depending on your compiler, the  
<br>
result may be exactly the same)
<br>
- poke through your fortran compiler's docs and see if there's a flag  
<br>
that disables this warning
<br>
<p>Hope that helps.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2707.php">Jeff Squyres: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2705.php">Brian Barrett: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>In reply to:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2710.php">Steven A. DuChene: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
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
