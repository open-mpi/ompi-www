<?
$subject_val = "Re: [OMPI users] btl_openib_cpc_include rdmacm questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 09:29:16 2011" -->
<!-- isoreceived="20110509132916" -->
<!-- sent="Mon, 9 May 2011 06:29:06 -0700" -->
<!-- isosent="20110509132906" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_cpc_include rdmacm questions" -->
<!-- id="66473242-C3D8-4657-83D5-77D4EE5CC9FB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="923D8019-7C74-462C-85CD-3D1D4B23EDBE_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-09 09:29:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16491.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16489.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>In reply to:</strong> <a href="16454.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16491.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay on this -- it looks like the problem is caused by messages like this (from your first message):
<br>
<p>[nyx0665.engin.umich.edu:06399] openib BTL: rdmacm IP address not found on port
<br>
<p>RDMA CM requires IP addresses (i.e., IPoIB) to be enabled on every port/LID where you want to use it.
<br>
<p><p>On May 5, 2011, at 1:15 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Yeah we have ran into more issues, with rdmacm not being avialable on all of our hosts.  So it would be nice to know what we can do to test that a host would support rdmacm,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev1">&gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev1">&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:           nyx5067.engin.umich.edu
</span><br>
<span class="quotelev1">&gt;  Local device:         mlx4_0
</span><br>
<span class="quotelev1">&gt;  Local port:           1
</span><br>
<span class="quotelev1">&gt;  CPCs attempted:       rdmacm
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is one of our QDR hosts that rdmacm generally works on. Which this code (CRASH) requires to avoid a collective hang in MPI_Allreduce() 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I look on this hosts and I find:
</span><br>
<span class="quotelev1">&gt; [root_at_nyx5067 ~]# rpm -qa | grep rdma
</span><br>
<span class="quotelev1">&gt; librdmacm-1.0.11-1
</span><br>
<span class="quotelev1">&gt; librdmacm-1.0.11-1
</span><br>
<span class="quotelev1">&gt; librdmacm-devel-1.0.11-1
</span><br>
<span class="quotelev1">&gt; librdmacm-devel-1.0.11-1
</span><br>
<span class="quotelev1">&gt; librdmacm-utils-1.0.11-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So all the libraries are installed (I think) is there a way to verify this?  Or to have OpenMPI be more verbose what caused rdmacm to fail as an oob option?
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
<span class="quotelev1">&gt; On May 3, 2011, at 9:42 AM, Dave Love wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen &lt;brockp_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We managed to have another user hit the bug that causes collectives (this time MPI_Bcast() ) to hang on IB that was fixed by setting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could someone explain this?  We also have problems with collective hangs
</span><br>
<span class="quotelev2">&gt;&gt; with openib/mlx4 (specifically in IMB), but not with psm, and I couldn't
</span><br>
<span class="quotelev2">&gt;&gt; see any relevant issues filed.  However, rdmacm isn't an available value
</span><br>
<span class="quotelev2">&gt;&gt; for that parameter with our 1.4.3 or 1.5.3 installations, only oob (not
</span><br>
<span class="quotelev2">&gt;&gt; that I understand what these things are...).
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
<span class="quotelev2">&gt;&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16491.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16489.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>In reply to:</strong> <a href="16454.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16491.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
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
