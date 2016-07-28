<?
$subject_val = "Re: [OMPI users] Multithreading applications with OMPI 1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 27 21:27:29 2012" -->
<!-- isoreceived="20120428012729" -->
<!-- sent="Fri, 27 Apr 2012 19:27:21 -0600" -->
<!-- isosent="20120428012721" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multithreading applications with OMPI 1.7" -->
<!-- id="33C9C70E-7375-4BBD-9F23-5D25976BD7BF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B4D9EADD-4FC5-4742-9218-A4F40A391E96_at_umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multithreading applications with OMPI 1.7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-27 21:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19153.php">seshendra seshu: "[OMPI users] Regarding mpi programming"</a>
<li><strong>Previous message:</strong> <a href="19151.php">Jens Glaser: "[OMPI users] Multithreading applications with OMPI 1.7"</a>
<li><strong>In reply to:</strong> <a href="19151.php">Jens Glaser: "[OMPI users] Multithreading applications with OMPI 1.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2012, at 5:20 PM, Jens Glaser wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we've tried to use a multithreaded application with a more recent trunk version (March 21) of OpenMPI. We need to use this version because of CUDA RDMA support. OpenMPI was binding all the threads to a single core, which is undesirable.
</span><br>
<span class="quotelev1">&gt; In OpenMPI 1.5. there was an option --cpus-per-rank, which should have helped in this case, or --bind-to-none.
</span><br>
<p>--cpus-per-rank is turned &quot;off&quot; at the moment - needs to be updated
<br>
<p>--bind-to none is the appropriate syntax - that should be the default setting, unless you are specifying a binding policy somewhere in an MCA param.
<br>
<p>see mpirun -h for the full list of options
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, these options are now gone and I couldn't figure out how to make it work with the newest version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone offer any hints on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jens.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19153.php">seshendra seshu: "[OMPI users] Regarding mpi programming"</a>
<li><strong>Previous message:</strong> <a href="19151.php">Jens Glaser: "[OMPI users] Multithreading applications with OMPI 1.7"</a>
<li><strong>In reply to:</strong> <a href="19151.php">Jens Glaser: "[OMPI users] Multithreading applications with OMPI 1.7"</a>
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
