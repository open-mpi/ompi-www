<?
$subject_val = "Re: [OMPI users] OpenMPI locking up only on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 10:42:47 2008" -->
<!-- isoreceived="20080702144247" -->
<!-- sent="Wed, 02 Jul 2008 17:42:40 +0300" -->
<!-- isosent="20080702144240" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI locking up only on IB" -->
<!-- id="486B93E0.5010506_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE546A1E-2E21-45E7-8CD9-098FE5ADFC12_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI locking up only on IB<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-02 10:42:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6014.php">Steve Johnson: "[OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<li><strong>Previous message:</strong> <a href="6012.php">Brock Palen: "[OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>In reply to:</strong> <a href="6012.php">Brock Palen: "[OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6017.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6017.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
May be this FAQ will help : 
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a>
<br>
<p>Brock Palen wrote:
<br>
<span class="quotelev1">&gt; We have a code (arts)  that locks up only when running on IB.  Works 
</span><br>
<span class="quotelev1">&gt; fine on tcp and sm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we ran it in a debugger.  It locked up on a MPI_Comm_split()  
</span><br>
<span class="quotelev1">&gt; That as far as I could tell was valid.
</span><br>
<span class="quotelev1">&gt; Because the split was a hack they did to use MPI_File_open() on a 
</span><br>
<span class="quotelev1">&gt; single cpu,  we reworked it to remove the split.  The code then locks 
</span><br>
<span class="quotelev1">&gt; up again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This time its locked up on an MPI_Allreduce()  Which was really 
</span><br>
<span class="quotelev1">&gt; strange.  When running on 8 cpus only rank 4 would get sucks.  The 
</span><br>
<span class="quotelev1">&gt; rest of the ranks are fine and get the right value.  (we are using ddt 
</span><br>
<span class="quotelev1">&gt; as our debugger).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Its very strange.  Do you have any idea what could cause this to 
</span><br>
<span class="quotelev1">&gt; happen?  We are using openmpi-1.2.3/1.2.6  with PGI compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6014.php">Steve Johnson: "[OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<li><strong>Previous message:</strong> <a href="6012.php">Brock Palen: "[OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>In reply to:</strong> <a href="6012.php">Brock Palen: "[OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6017.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6017.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
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
