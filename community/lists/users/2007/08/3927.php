<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 20:46:26 2007" -->
<!-- isoreceived="20070828004626" -->
<!-- sent="Mon, 27 Aug 2007 17:46:20 -0700" -->
<!-- isosent="20070828004620" -->
<!-- name="Prasun Ratn" -->
<!-- email="prasun.r_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Type_* calls in ompi_coll_tuned_alltoall_intra_bruck" -->
<!-- id="46D3705C.1040503_at_ncsu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.62.0708272039110.29874_at_reliant.cs.utk.edu" -->
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
<strong>From:</strong> Prasun Ratn (<em>prasun.r_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 20:46:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3928.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Previous message:</strong> <a href="3926.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Type_* calls in	ompi_coll_tuned_alltoall_intra_bruck"</a>
<li><strong>In reply to:</strong> <a href="3926.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Type_* calls in	ompi_coll_tuned_alltoall_intra_bruck"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using ver 1.2.3 which I believe is the latest stable release
<br>
<p>Jelena Pjesivac-Grbovic wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which version are you using?  This is an old code.
</span><br>
<span class="quotelev1">&gt; The trunk version has new code which does not use any MPI_* functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jelena
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 27 Aug 2007, Prasun Ratn wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason why ompi_coll_tuned_alltoall_intra_bruck calls
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Type_* functions and not PMPI_Type_* ? My code traces MPI
</span><br>
<span class="quotelev2">&gt;&gt; calls and I would rather not trace calls made by openmpi itself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Prasun
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jelena Pjesivac-Grbovic, Pjesa
</span><br>
<span class="quotelev1">&gt; Graduate Research Assistant
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; Computer Science Department, UTK
</span><br>
<span class="quotelev1">&gt; Claxton Complex 350
</span><br>
<span class="quotelev1">&gt; (865) 974 - 6722 
</span><br>
<span class="quotelev1">&gt; (865) 974 - 6321
</span><br>
<span class="quotelev1">&gt; jpjesiva_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;The only difference between a problem and a solution is that
</span><br>
<span class="quotelev1">&gt;   people understand the solution.&quot;
</span><br>
<span class="quotelev1">&gt;                                        -- Charles Kettering
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
<p><pre>
-- 
Prasun Ratn
Graduate Student, Computer Science, NCSU
Summer Student, ISCR, LLNL
prasun.r_at_[hidden] , prasun_at_[hidden]
Phone: 925-424-3913 (O), 919-995-0534 (cell)
<a href="http://www4.ncsu.edu/~pratn">http://www4.ncsu.edu/~pratn</a> , <a href="http://www.llnl.gov/comp/bio.php/ratn1">http://www.llnl.gov/comp/bio.php/ratn1</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3928.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Previous message:</strong> <a href="3926.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Type_* calls in	ompi_coll_tuned_alltoall_intra_bruck"</a>
<li><strong>In reply to:</strong> <a href="3926.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] MPI_Type_* calls in	ompi_coll_tuned_alltoall_intra_bruck"</a>
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
