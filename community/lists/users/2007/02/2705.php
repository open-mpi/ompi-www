<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 18:03:23 2007" -->
<!-- isoreceived="20070215230323" -->
<!-- sent="Thu, 15 Feb 2007 16:02:05 -0700" -->
<!-- isosent="20070215230205" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3" -->
<!-- id="EDE211D3-D702-424E-A53B-FDBED9D9AA93_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 18:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2706.php">Jeff Squyres: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Previous message:</strong> <a href="2704.php">Jeff Squyres: "Re: [OMPI users] where do the openmpi profile.d scripts get created?"</a>
<li><strong>In reply to:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2706.php">Jeff Squyres: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What platform / operating system was this with?
<br>
<p>Brian
<br>
<p>On Feb 15, 2007, at 3:43 PM, Steven A. DuChene wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do get the following compile time warnings when I build the  
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2706.php">Jeff Squyres: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Previous message:</strong> <a href="2704.php">Jeff Squyres: "Re: [OMPI users] where do the openmpi profile.d scripts get created?"</a>
<li><strong>In reply to:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2706.php">Jeff Squyres: "Re: [OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
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
