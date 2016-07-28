<?
$subject_val = "Re: [OMPI users] OpenMPI locking up only on IB";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 02:51:46 2008" -->
<!-- isoreceived="20080703065146" -->
<!-- sent="Thu, 03 Jul 2008 09:51:35 +0300" -->
<!-- isosent="20080703065135" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI locking up only on IB" -->
<!-- id="486C76F7.4030603_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="764E76DD-A8F0-4D94-ACF0-1436D82BEE92_at_umich.edu" -->
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
<strong>Date:</strong> 2008-07-03 02:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6019.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Previous message:</strong> <a href="6017.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>In reply to:</strong> <a href="6017.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; In trying to build 1.2.6 with the pgi compilers it makes an MPI 
</span><br>
<span class="quotelev1">&gt; library that works with tcp, sm.  But it segfaults on openib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both our intel compiler version and pgi version of 1.2.6 blow up like 
</span><br>
<span class="quotelev1">&gt; this when we force IB.  So this is a new issue.
</span><br>
I have ompi 1.2.6 installed on my machines with Intel compiler (version 
<br>
10.1) and Pgi compiler (version 7.1-5), both of them works
<br>
with IB without any problem. BTW Mellanox provides Mellanox OFED binary 
<br>
distribution that include Intel and Pgi Open MPI 1.2.6 build.
<br>
You can download it from here <a href="http://www.mellanox.com/products/ofed.php">http://www.mellanox.com/products/ofed.php</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to shut off early completion in 1.2.3?
</span><br>
Sure, just add &quot;--mca |pml_ob1_use_early_completion 0&quot; to your command 
<br>
line.| ||
<br>
<span class="quotelev1">&gt; Or the the above a known issues and i should use 1.2.7-pre  or grab a 
</span><br>
<span class="quotelev1">&gt; 1.3 snap shot?
</span><br>
1.2.6 should be ok.
<br>
<p>Regards,
<br>
Pasha
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 2, 2008, at 10:42 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; May be this FAQ will help : 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a> 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a code (arts)  that locks up only when running on IB.  Works 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine on tcp and sm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When we ran it in a debugger.  It locked up on a MPI_Comm_split()  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That as far as I could tell was valid.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because the split was a hack they did to use MPI_File_open() on a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; single cpu,  we reworked it to remove the split.  The code then 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locks up again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This time its locked up on an MPI_Allreduce()  Which was really 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strange.  When running on 8 cpus only rank 4 would get sucks.  The 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rest of the ranks are fine and get the right value.  (we are using 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ddt as our debugger).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Its very strange.  Do you have any idea what could cause this to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happen?  We are using openmpi-1.2.3/1.2.6  with PGI compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6019.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>Previous message:</strong> <a href="6017.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>In reply to:</strong> <a href="6017.php">Brock Palen: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<li><strong>Reply:</strong> <a href="6021.php">Jeff Squyres: "Re: [OMPI users] OpenMPI locking up only on IB"</a>
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
