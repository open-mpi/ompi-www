<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 13:46:51 2007" -->
<!-- isoreceived="20070206184651" -->
<!-- sent="Tue, 6 Feb 2007 13:46:31 -0500" -->
<!-- isosent="20070206184631" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_create_subarray fails!" -->
<!-- id="E9FFC789-7FC4-46A4-ADE8-C84B21D50167_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4FFE9F89-FC2D-49A3-87BE-398C3E551C89_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-02-06 13:46:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2630.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2628.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="2622.php">George Bosilca: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, this has been committed on the 1.1 branch.  So if we ever do a  
<br>
1.1.5 release, it will be included.
<br>
<p><p>On Feb 6, 2007, at 10:46 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; A correction has been made to the MPI_Type_create_subarray. The
</span><br>
<span class="quotelev1">&gt; particular test that was failing for you has been replaced with a
</span><br>
<span class="quotelev1">&gt; better one. You can grab it either from the nightly build or in few
</span><br>
<span class="quotelev1">&gt; days from the next (1.2) release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 6, 2007, at 9:52 AM, Avishay Traeger wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Surely there is a better way to get this code running without
</span><br>
<span class="quotelev2">&gt;&gt; disabling
</span><br>
<span class="quotelev2">&gt;&gt; checks.  Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Avishay
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 2007-02-05 at 15:36 -0500, Ivan de Jesus Deras Tabora wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I managed to make it run by disabling the parameter checking.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I added --mca mpi_param_check 0 to mpirun and it works ok, so maybe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem is with the parameter checking code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/2/07, Ivan de Jesus Deras Tabora &lt;ideras_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've been checking the OpenMPI code, trying to find something, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; still no luck.  I'll continue checking the code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2/2/07, Robert Latham &lt;robl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Jan 30, 2007 at 04:55:09PM -0500, Ivan de Jesus Deras
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tabora wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Then I find all the references to the MPI_Type_create_subarray  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; create a little program just to test that part of the code, the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; code I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; created is:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; After running this little program using mpirun, it raises the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; same error.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This small program runs fine under MPICH2.  Either you have  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; found a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bug in OpenMPI (passing it a datatype it should be able to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; handle), or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a bug in MPICH2 (passing it a datatype it handled, but should have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; complained about).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==rob
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mathematics and Computer Science Division    A215 0178 EA2D B059
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 8CDF
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Argonne National Lab, IL USA                 B29D F333 664A 4280
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 315B
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2630.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2628.php">Jeff Squyres: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="2622.php">George Bosilca: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
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
