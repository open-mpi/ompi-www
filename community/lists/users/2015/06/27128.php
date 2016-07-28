<?
$subject_val = "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 11:47:15 2015" -->
<!-- isoreceived="20150612154715" -->
<!-- sent="Fri, 12 Jun 2015 17:47:12 +0200" -->
<!-- isosent="20150612154712" -->
<!-- name="borno_borno_at_[hidden]" -->
<!-- email="borno_borno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI (1.8.3) and environment variable export" -->
<!-- id="trinity-8b5e1ef9-dbf7-44b9-b63b-7283f499a820-1434124032761_at_3capp-gmx-bs50" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0293CAC2-44A5-4461-90A2-C5955DDEC07E_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI (1.8.3) and environment variable export<br>
<strong>From:</strong> <a href="mailto:borno_borno_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenMPI%20(1.8.3)%20and%20environment%20variable%20export"><em>borno_borno_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-06-12 11:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27129.php">Filippo Spiga: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>Previous message:</strong> <a href="27127.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>In reply to:</strong> <a href="27126.php">Noam Bernstein: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perfect, thanks a lot!
<br>
<p><span class="quotelev1">&gt; Gesendet: Freitag, 12. Juni 2015 um 17:13 Uhr
</span><br>
<span class="quotelev1">&gt; Von: &quot;Noam Bernstein&quot; &lt;noam.bernstein_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; An: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] OpenMPI (1.8.3) and environment variable export
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 12, 2015, at 11:08 AM, borno_borno_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hey there, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I know that variable export in general can be done with the -x option of mpirun, but I guess that won't help me.
</span><br>
<span class="quotelev2">&gt; &gt; More precisely I have a heterogeneous cluster (number of cores per cpu) and one process for each node. The application I need to launch uses hybrid MPI+OpenMP parallelization an I have to set the OMP_NUM_THREADS variable such that it fits the number of cores on each node. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have no access to the application to get the number of cores from within the process. I just can launch it.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is there any chance to do this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could wrap the executable in a shell script that gets the number of cores (from /proc/cpuinfo?), setenv OMP_NUM_THREADS, and execs the executable passing $* command line arguments.  Then you mpirun the script you created.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 														Noam_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27126.php">http://www.open-mpi.org/community/lists/users/2015/06/27126.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27129.php">Filippo Spiga: "Re: [OMPI users] Missing file &quot;openmpi/ompi/mpi/f77/constants.h&quot;"</a>
<li><strong>Previous message:</strong> <a href="27127.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>In reply to:</strong> <a href="27126.php">Noam Bernstein: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
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
