<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 15:37:00 2007" -->
<!-- isoreceived="20070205203700" -->
<!-- sent="Mon, 5 Feb 2007 15:36:54 -0500" -->
<!-- isosent="20070205203654" -->
<!-- name="Ivan de Jesus Deras Tabora" -->
<!-- email="ideras_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_create_subarray fails!" -->
<!-- id="77a596ab0702051236u60d0ece6xf022e845ad043a13_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="77a596ab0702021209x5eb730cfpca163fb39cb0978d_at_mail.gmail.com" -->
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
<strong>From:</strong> Ivan de Jesus Deras Tabora (<em>ideras_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-05 15:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2613.php">Brian Barrett: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>Previous message:</strong> <a href="2611.php">Jason Martin: "[OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>In reply to:</strong> <a href="2592.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2619.php">Avishay Traeger: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Reply:</strong> <a href="2619.php">Avishay Traeger: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I managed to make it run by disabling the parameter checking.
<br>
I added --mca mpi_param_check 0 to mpirun and it works ok, so maybe
<br>
the problem is with the parameter checking code.
<br>
<p>On 2/2/07, Ivan de Jesus Deras Tabora &lt;ideras_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I've been checking the OpenMPI code, trying to find something, but
</span><br>
<span class="quotelev1">&gt; still no luck.  I'll continue checking the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/2/07, Robert Latham &lt;robl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jan 30, 2007 at 04:55:09PM -0500, Ivan de Jesus Deras Tabora wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Then I find all the references to the MPI_Type_create_subarray and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; create a little program just to test that part of the code, the code I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; created is:
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; After running this little program using mpirun, it raises the same error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This small program runs fine under MPICH2.  Either you have found a
</span><br>
<span class="quotelev2">&gt; &gt; bug in OpenMPI (passing it a datatype it should be able to handle), or
</span><br>
<span class="quotelev2">&gt; &gt; a bug in MPICH2 (passing it a datatype it handled, but should have
</span><br>
<span class="quotelev2">&gt; &gt; complained about).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ==rob
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Rob Latham
</span><br>
<span class="quotelev2">&gt; &gt; Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
</span><br>
<span class="quotelev2">&gt; &gt; Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2613.php">Brian Barrett: "Re: [OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>Previous message:</strong> <a href="2611.php">Jason Martin: "[OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>In reply to:</strong> <a href="2592.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2619.php">Avishay Traeger: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Reply:</strong> <a href="2619.php">Avishay Traeger: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
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
