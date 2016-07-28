<?
$subject_val = "Re: [OMPI users] OpenMPI locking up only on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 20:49:36 2008" -->
<!-- isoreceived="20080703004936" -->
<!-- sent="Wed, 2 Jul 2008 20:48:27 -0400" -->
<!-- isosent="20080703004827" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI locking up only on IB" -->
<!-- id="764E76DD-A8F0-4D94-ACF0-1436D82BEE92_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="486B93E0.5010506_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-02 20:48:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6018.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6016.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<li><strong>In reply to:</strong> <a href="6013.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6018.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6018.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In trying to build 1.2.6 with the pgi compilers it makes an MPI  
<br>
library that works with tcp, sm.  But it segfaults on openib.
<br>
<p>Both our intel compiler version and pgi version of 1.2.6 blow up like  
<br>
this when we force IB.  So this is a new issue.
<br>
<p>Is there a way to shut off early completion in 1.2.3?  Or the the  
<br>
above a known issues and i should use 1.2.7-pre  or grab a 1.3 snap  
<br>
shot?
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jul 2, 2008, at 10:42 AM, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; May be this FAQ will help : <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? 
</span><br>
<span class="quotelev1">&gt; category=openfabrics#v1.2-use-early-completion
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We have a code (arts)  that locks up only when running on IB.   
</span><br>
<span class="quotelev2">&gt;&gt; Works fine on tcp and sm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When we ran it in a debugger.  It locked up on a MPI_Comm_split()   
</span><br>
<span class="quotelev2">&gt;&gt; That as far as I could tell was valid.
</span><br>
<span class="quotelev2">&gt;&gt; Because the split was a hack they did to use MPI_File_open() on a  
</span><br>
<span class="quotelev2">&gt;&gt; single cpu,  we reworked it to remove the split.  The code then  
</span><br>
<span class="quotelev2">&gt;&gt; locks up again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This time its locked up on an MPI_Allreduce()  Which was really  
</span><br>
<span class="quotelev2">&gt;&gt; strange.  When running on 8 cpus only rank 4 would get sucks.  The  
</span><br>
<span class="quotelev2">&gt;&gt; rest of the ranks are fine and get the right value.  (we are using  
</span><br>
<span class="quotelev2">&gt;&gt; ddt as our debugger).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Its very strange.  Do you have any idea what could cause this to  
</span><br>
<span class="quotelev2">&gt;&gt; happen?  We are using openmpi-1.2.3/1.2.6  with PGI compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6018.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Previous message:</strong> <a href="6016.php">Ralph H Castain: "Re: [OMPI users] mpirun w/ enable-mpi-threads spinning up cputime when app path is invalid"</a>
<li><strong>In reply to:</strong> <a href="6013.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6018.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6018.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
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
