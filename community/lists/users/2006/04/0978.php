<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr  8 07:22:38 2006" -->
<!-- isoreceived="20060408112238" -->
<!-- sent="Sat, 8 Apr 2006 07:22:40 -0400" -->
<!-- isosent="20060408112240" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5FB01F_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-08 07:22:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0979.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Previous message:</strong> <a href="0977.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe in reply to:</strong> <a href="0970.php">john casu: "[OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0983.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Reply:</strong> <a href="0983.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John --
<br>
<p>I am unable to replicate your problem with Open MPI 1.0.2 with the
<br>
following simple program:
<br>
<p>-----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program ring_f77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer n, rank, size, ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real*8 data2(10), data(10)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_rank(MPI_COMM_WORLD, rank, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_size(MPI_COMM_WORLD, size, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n = 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Allreduce( data, data2, n, MPI_DOUBLE_PRECISION,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                    MPI_SUM, MPI_COMM_WORLD, ierr )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
-----
<br>
<p>Can you replicate the problem with this small program?
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of john casu
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 06, 2006 6:07 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 2006-04-06 at 15:48 -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The error state that your trying to use an invalid operation. MPI  
</span><br>
<span class="quotelev2">&gt; &gt; define which operation can be applied on which predefined 
</span><br>
<span class="quotelev1">&gt; data-types.  
</span><br>
<span class="quotelev2">&gt; &gt; Do you know which operation is used there ? And which 
</span><br>
<span class="quotelev1">&gt; predefined data- 
</span><br>
<span class="quotelev2">&gt; &gt; type ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; please forgive for not including the relevant offending Fortran code,
</span><br>
<span class="quotelev1">&gt; which is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt;        :
</span><br>
<span class="quotelev1">&gt;        :
</span><br>
<span class="quotelev1">&gt;       real*8 data2(10), data(10)
</span><br>
<span class="quotelev1">&gt;       integer msg_comm
</span><br>
<span class="quotelev1">&gt;       integer n, ierr
</span><br>
<span class="quotelev1">&gt;        :
</span><br>
<span class="quotelev1">&gt;        :
</span><br>
<span class="quotelev1">&gt;       call MPI_Allreduce( data, data2, n, MPI_DOUBLE_PRECISION,
</span><br>
<span class="quotelev1">&gt;      &amp;                    MPI_SUM, msg_comm, ierr )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Further investigation shows that the error only seems to show 
</span><br>
<span class="quotelev1">&gt; itself on
</span><br>
<span class="quotelev1">&gt; an x86_64 box, and the code works fine on an ia32 box.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;      george.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 6, 2006, at 2:41 PM, john casu wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm trying to work with the sppm code form LLNL:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.llnl.gov/asci_benchmarks/asci/limited/ppm/asci_sppm.html">http://www.llnl.gov/asci_benchmarks/asci/limited/ppm/asci_sppm.html</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I built openmpi and sppm on an 8-way shared memory Linux box.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The error I get is:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [ty20:07732] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [ty20:07732] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [ty20:07732] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [ty20:07732] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it happens in both 1.0.1 and 1.0.2rc1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; john.
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
<li><strong>Next message:</strong> <a href="0979.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] job running question"</a>
<li><strong>Previous message:</strong> <a href="0977.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe in reply to:</strong> <a href="0970.php">john casu: "[OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0983.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Reply:</strong> <a href="0983.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
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
