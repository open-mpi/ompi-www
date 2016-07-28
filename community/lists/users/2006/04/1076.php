<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 16 14:21:24 2006" -->
<!-- isoreceived="20060416182124" -->
<!-- sent="Sun, 16 Apr 2006 11:21:16 -0700" -->
<!-- isosent="20060416182116" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster" -->
<!-- id="F694077C-E4F4-4011-93FA-7EC9CC3ABCE5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D6A117CD-34F6-4E82-BE0D-8BD54322547D_at_Colorado.EDU" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-16 14:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1077.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Previous message:</strong> <a href="1075.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>In reply to:</strong> <a href="1065.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1081.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1081.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2006, at 9:33 AM, Lee D. Peterson wrote:
<br>
<p><span class="quotelev1">&gt; This problem went away yesterday. There was no intervening reboot of
</span><br>
<span class="quotelev1">&gt; my cluster or a recompile of the code. So all I can surmise is
</span><br>
<span class="quotelev1">&gt; something got cleaned up in a cron script. Wierd.
</span><br>
<p>Very strange.  Could there have been a networking issue (switch  
<br>
restart or something)?
<br>
<p><span class="quotelev1">&gt; Anyways, now I've benchmarked the HPL using OpenMPI vs LAM-MPI. The
</span><br>
<span class="quotelev1">&gt; OpenMPI runs about 13% to sometimes 50% slower than the LAM-MPI. I'm
</span><br>
<span class="quotelev1">&gt; running over TCP and using SSH.
</span><br>
<p>Our TCP performance on Open MPI is not as good as it is in LAM/MPI,  
<br>
so it's not totally surprising.  50% is, however, much more than we  
<br>
expected.  There are some pathalogically bad cases that can occur  
<br>
with multi-NIC (especially our unoptimized multi-NIC support).  It  
<br>
would be interesting to see what the performance would be if you only  
<br>
use one NIC.  You can specify the NIC to use with the  
<br>
btl_tcp_if_include MCA parameter:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np X -mca btl_tcp_if_include en0 &lt;app&gt;
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1077.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Previous message:</strong> <a href="1075.php">Sang Chul Choi: "Re: [OMPI users] General Installation Question"</a>
<li><strong>In reply to:</strong> <a href="1065.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1081.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1081.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
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
