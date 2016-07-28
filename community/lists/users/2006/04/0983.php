<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr  9 04:33:35 2006" -->
<!-- isoreceived="20060409083335" -->
<!-- sent="Sun, 09 Apr 2006 01:33:26 -0700" -->
<!-- isosent="20060409083326" -->
<!-- name="john casu" -->
<!-- email="john_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1" -->
<!-- id="1144571606.3424.2.camel_at_localhost.localdomain" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF5FB01F_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> john casu (<em>john_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-09 04:33:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0984.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Previous message:</strong> <a href="0982.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>In reply to:</strong> <a href="0978.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 2006-04-08 at 07:22 -0400, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; John --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am unable to replicate your problem with Open MPI 1.0.2 with the
</span><br>
<span class="quotelev1">&gt; following simple program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;       program ring_f77
</span><br>
<span class="quotelev1">&gt;       include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;       integer n, rank, size, ierr
</span><br>
<span class="quotelev1">&gt;       real*8 data2(10), data(10)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       call mpi_comm_rank(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt;       call mpi_comm_size(MPI_COMM_WORLD, size, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       n = 10
</span><br>
<span class="quotelev1">&gt;       call MPI_Allreduce( data, data2, n, MPI_DOUBLE_PRECISION,
</span><br>
<span class="quotelev1">&gt;      &amp;                    MPI_SUM, MPI_COMM_WORLD, ierr )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt;       end
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you replicate the problem with this small program?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
.
<br>
<p><p>no.. this works fine any way I build it.
<br>
<p>ok, then. looks like an issue on my end.  apologies.
<br>
<p>-john.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of john casu
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Thursday, April 06, 2006 6:07 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2006-04-06 at 15:48 -0400, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The error state that your trying to use an invalid operation. MPI  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; define which operation can be applied on which predefined 
</span><br>
<span class="quotelev2">&gt; &gt; data-types.  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do you know which operation is used there ? And which 
</span><br>
<span class="quotelev2">&gt; &gt; predefined data- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; type ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; please forgive for not including the relevant offending Fortran code,
</span><br>
<span class="quotelev2">&gt; &gt; which is as follows:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpif.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        :
</span><br>
<span class="quotelev2">&gt; &gt;        :
</span><br>
<span class="quotelev2">&gt; &gt;       real*8 data2(10), data(10)
</span><br>
<span class="quotelev2">&gt; &gt;       integer msg_comm
</span><br>
<span class="quotelev2">&gt; &gt;       integer n, ierr
</span><br>
<span class="quotelev2">&gt; &gt;        :
</span><br>
<span class="quotelev2">&gt; &gt;        :
</span><br>
<span class="quotelev2">&gt; &gt;       call MPI_Allreduce( data, data2, n, MPI_DOUBLE_PRECISION,
</span><br>
<span class="quotelev2">&gt; &gt;      &amp;                    MPI_SUM, msg_comm, ierr )
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Further investigation shows that the error only seems to show 
</span><br>
<span class="quotelev2">&gt; &gt; itself on
</span><br>
<span class="quotelev2">&gt; &gt; an x86_64 box, and the code works fine on an ia32 box.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      george.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Apr 6, 2006, at 2:41 PM, john casu wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm trying to work with the sppm code form LLNL:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.llnl.gov/asci_benchmarks/asci/limited/ppm/asci_sppm.html">http://www.llnl.gov/asci_benchmarks/asci/limited/ppm/asci_sppm.html</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I built openmpi and sppm on an 8-way shared memory Linux box.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The error I get is:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ty20:07732] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ty20:07732] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ty20:07732] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [ty20:07732] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; it happens in both 1.0.1 and 1.0.2rc1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; john.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0984.php">Adams Samuel D Contr AFRL/HEDR: "Re: [OMPI users] job running question"</a>
<li><strong>Previous message:</strong> <a href="0982.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>In reply to:</strong> <a href="0978.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
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
