<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr  6 15:49:02 2006" -->
<!-- isoreceived="20060406194902" -->
<!-- sent="Thu, 6 Apr 2006 15:48:57 -0400" -->
<!-- isosent="20060406194857" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1" -->
<!-- id="EE2B2014-7CE5-4C06-A821-099CFA3EE518_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1144348899.3845.6.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-06 15:48:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0972.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Previous message:</strong> <a href="0970.php">john casu: "[OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>In reply to:</strong> <a href="0970.php">john casu: "[OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0972.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Reply:</strong> <a href="0972.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The error state that your trying to use an invalid operation. MPI  
<br>
define which operation can be applied on which predefined data-types.  
<br>
Do you know which operation is used there ? And which predefined data- 
<br>
type ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 6, 2006, at 2:41 PM, john casu wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to work with the sppm code form LLNL:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.llnl.gov/asci_benchmarks/asci/limited/ppm/asci_sppm.html">http://www.llnl.gov/asci_benchmarks/asci/limited/ppm/asci_sppm.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I built openmpi and sppm on an 8-way shared memory Linux box.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error I get is:
</span><br>
<span class="quotelev1">&gt; [ty20:07732] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [ty20:07732] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [ty20:07732] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt; [ty20:07732] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it happens in both 1.0.1 and 1.0.2rc1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; john.
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
<li><strong>Next message:</strong> <a href="0972.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Previous message:</strong> <a href="0970.php">john casu: "[OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>In reply to:</strong> <a href="0970.php">john casu: "[OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0972.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Reply:</strong> <a href="0972.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
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
