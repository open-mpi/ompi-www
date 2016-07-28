<?
$subject_val = "Re: [OMPI users] btl_openib_cpc_include rdmacm questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 16:15:51 2011" -->
<!-- isoreceived="20110505201551" -->
<!-- sent="Thu, 5 May 2011 16:15:45 -0400" -->
<!-- isosent="20110505201545" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_cpc_include rdmacm questions" -->
<!-- id="923D8019-7C74-462C-85CD-3D1D4B23EDBE_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8762pr293y.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_cpc_include rdmacm questions<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-05 16:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16455.php">Paul Monday (Parallel Scientific): "[OMPI users] SpMV Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="16453.php">Ralph Castain: "Re: [OMPI users] All processes have id 0 of 1"</a>
<li><strong>In reply to:</strong> <a href="16425.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16490.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16490.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah we have ran into more issues, with rdmacm not being avialable on all of our hosts.  So it would be nice to know what we can do to test that a host would support rdmacm,
<br>
<p>Example:
<br>
<p>--------------------------------------------------------------------------
<br>
No OpenFabrics connection schemes reported that they were able to be
<br>
used on a specific port.  As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>
<p>&nbsp;&nbsp;Local host:           nyx5067.engin.umich.edu
<br>
&nbsp;&nbsp;Local device:         mlx4_0
<br>
&nbsp;&nbsp;Local port:           1
<br>
&nbsp;&nbsp;CPCs attempted:       rdmacm
<br>
--------------------------------------------------------------------------
<br>
<p>This is one of our QDR hosts that rdmacm generally works on. Which this code (CRASH) requires to avoid a collective hang in MPI_Allreduce() 
<br>
<p>I look on this hosts and I find:
<br>
[root_at_nyx5067 ~]# rpm -qa | grep rdma
<br>
librdmacm-1.0.11-1
<br>
librdmacm-1.0.11-1
<br>
librdmacm-devel-1.0.11-1
<br>
librdmacm-devel-1.0.11-1
<br>
librdmacm-utils-1.0.11-1
<br>
<p>So all the libraries are installed (I think) is there a way to verify this?  Or to have OpenMPI be more verbose what caused rdmacm to fail as an oob option?
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On May 3, 2011, at 9:42 AM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; Brock Palen &lt;brockp_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We managed to have another user hit the bug that causes collectives (this time MPI_Bcast() ) to hang on IB that was fixed by setting:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could someone explain this?  We also have problems with collective hangs
</span><br>
<span class="quotelev1">&gt; with openib/mlx4 (specifically in IMB), but not with psm, and I couldn't
</span><br>
<span class="quotelev1">&gt; see any relevant issues filed.  However, rdmacm isn't an available value
</span><br>
<span class="quotelev1">&gt; for that parameter with our 1.4.3 or 1.5.3 installations, only oob (not
</span><br>
<span class="quotelev1">&gt; that I understand what these things are...).
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
<li><strong>Next message:</strong> <a href="16455.php">Paul Monday (Parallel Scientific): "[OMPI users] SpMV Benchmarks"</a>
<li><strong>Previous message:</strong> <a href="16453.php">Ralph Castain: "Re: [OMPI users] All processes have id 0 of 1"</a>
<li><strong>In reply to:</strong> <a href="16425.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16490.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16490.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
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
