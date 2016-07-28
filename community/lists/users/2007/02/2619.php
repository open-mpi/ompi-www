<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 09:52:33 2007" -->
<!-- isoreceived="20070206145233" -->
<!-- sent="Tue, 06 Feb 2007 09:52:26 -0500" -->
<!-- isosent="20070206145226" -->
<!-- name="Avishay Traeger" -->
<!-- email="atraeger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_create_subarray fails!" -->
<!-- id="1170773546.3427.13.camel_at_localhost" -->
<!-- inreplyto="77a596ab0702051236u60d0ece6xf022e845ad043a13_at_mail.gmail.com" -->
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
<strong>From:</strong> Avishay Traeger (<em>atraeger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-06 09:52:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2620.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2618.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2612.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2622.php">George Bosilca: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Reply:</strong> <a href="2622.php">George Bosilca: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Surely there is a better way to get this code running without disabling
<br>
checks.  Any suggestions?
<br>
<p>Thanks,
<br>
Avishay
<br>
<p>On Mon, 2007-02-05 at 15:36 -0500, Ivan de Jesus Deras Tabora wrote:
<br>
<span class="quotelev1">&gt; I managed to make it run by disabling the parameter checking.
</span><br>
<span class="quotelev1">&gt; I added --mca mpi_param_check 0 to mpirun and it works ok, so maybe
</span><br>
<span class="quotelev1">&gt; the problem is with the parameter checking code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/2/07, Ivan de Jesus Deras Tabora &lt;ideras_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I've been checking the OpenMPI code, trying to find something, but
</span><br>
<span class="quotelev2">&gt; &gt; still no luck.  I'll continue checking the code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2/2/07, Robert Latham &lt;robl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, Jan 30, 2007 at 04:55:09PM -0500, Ivan de Jesus Deras Tabora wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Then I find all the references to the MPI_Type_create_subarray and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; create a little program just to test that part of the code, the code I
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; created is:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; After running this little program using mpirun, it raises the same error.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This small program runs fine under MPICH2.  Either you have found a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; bug in OpenMPI (passing it a datatype it should be able to handle), or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a bug in MPICH2 (passing it a datatype it handled, but should have
</span><br>
<span class="quotelev3">&gt; &gt; &gt; complained about).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ==rob
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Rob Latham
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
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
<li><strong>Next message:</strong> <a href="2620.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2618.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2612.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2622.php">George Bosilca: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Reply:</strong> <a href="2622.php">George Bosilca: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
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
