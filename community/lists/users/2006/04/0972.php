<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr  6 18:07:28 2006" -->
<!-- isoreceived="20060406220728" -->
<!-- sent="Thu, 06 Apr 2006 15:07:00 -0700" -->
<!-- isosent="20060406220700" -->
<!-- name="john casu" -->
<!-- email="john_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1" -->
<!-- id="1144361222.3845.17.camel_at_localhost.localdomain" -->
<!-- inreplyto="EE2B2014-7CE5-4C06-A821-099CFA3EE518_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-04-06 18:07:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0973.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Previous message:</strong> <a href="0971.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>In reply to:</strong> <a href="0971.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0978.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2006-04-06 at 15:48 -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The error state that your trying to use an invalid operation. MPI  
</span><br>
<span class="quotelev1">&gt; define which operation can be applied on which predefined data-types.  
</span><br>
<span class="quotelev1">&gt; Do you know which operation is used there ? And which predefined data- 
</span><br>
<span class="quotelev1">&gt; type ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>please forgive for not including the relevant offending Fortran code,
<br>
which is as follows:
<br>
<p><p>#include &quot;mpif.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real*8 data2(10), data(10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer msg_comm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer n, ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Allreduce( data, data2, n, MPI_DOUBLE_PRECISION,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                    MPI_SUM, msg_comm, ierr )
<br>
<p><p>Further investigation shows that the error only seems to show itself on
<br>
an x86_64 box, and the code works fine on an ia32 box.
<br>
<p><span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2006, at 2:41 PM, john casu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to work with the sppm code form LLNL:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.llnl.gov/asci_benchmarks/asci/limited/ppm/asci_sppm.html">http://www.llnl.gov/asci_benchmarks/asci/limited/ppm/asci_sppm.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I built openmpi and sppm on an 8-way shared memory Linux box.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error I get is:
</span><br>
<span class="quotelev2">&gt; &gt; [ty20:07732] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev2">&gt; &gt; [ty20:07732] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [ty20:07732] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev2">&gt; &gt; [ty20:07732] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; it happens in both 1.0.1 and 1.0.2rc1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; john.
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
<li><strong>Next message:</strong> <a href="0973.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Previous message:</strong> <a href="0971.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>In reply to:</strong> <a href="0971.php">George Bosilca: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0978.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
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
