<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 16 16:29:26 2006" -->
<!-- isoreceived="20060416202926" -->
<!-- sent="Sun, 16 Apr 2006 14:29:26 -0600" -->
<!-- isosent="20060416202926" -->
<!-- name="Lee D. Peterson" -->
<!-- email="Lee.Peterson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster" -->
<!-- id="8F9FCF3A-D54D-49AD-9FA7-0A2FA0DFDEB8_at_Colorado.EDU" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F694077C-E4F4-4011-93FA-7EC9CC3ABCE5_at_open-mpi.org" -->
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
<strong>From:</strong> Lee D. Peterson (<em>Lee.Peterson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-16 16:29:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1082.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1080.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1076.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1082.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1082.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Thanks for your help. The hanging problem came back again a day ago.  
<br>
However, I can now run only if I use either &quot;-mca btl_tcp_if_include  
<br>
en0&quot; or &quot;-mca btl_tcp_if_include en1&quot;. Using btl_tcp_if_exclude on  
<br>
either en0 or en1 doesn't work.
<br>
<p>Regarding the TCP performance, I ran the HPL benchmark again and see  
<br>
typically 85% to 90% of the LAM-MPI speed, provided the problem size  
<br>
isn't too small.
<br>
<p>Lee
<br>
<p>On Apr 16, 2006, at 12:21 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 14, 2006, at 9:33 AM, Lee D. Peterson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This problem went away yesterday. There was no intervening reboot of
</span><br>
<span class="quotelev2">&gt;&gt; my cluster or a recompile of the code. So all I can surmise is
</span><br>
<span class="quotelev2">&gt;&gt; something got cleaned up in a cron script. Wierd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Very strange.  Could there have been a networking issue (switch
</span><br>
<span class="quotelev1">&gt; restart or something)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyways, now I've benchmarked the HPL using OpenMPI vs LAM-MPI. The
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI runs about 13% to sometimes 50% slower than the LAM-MPI. I'm
</span><br>
<span class="quotelev2">&gt;&gt; running over TCP and using SSH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our TCP performance on Open MPI is not as good as it is in LAM/MPI,
</span><br>
<span class="quotelev1">&gt; so it's not totally surprising.  50% is, however, much more than we
</span><br>
<span class="quotelev1">&gt; expected.  There are some pathalogically bad cases that can occur
</span><br>
<span class="quotelev1">&gt; with multi-NIC (especially our unoptimized multi-NIC support).  It
</span><br>
<span class="quotelev1">&gt; would be interesting to see what the performance would be if you only
</span><br>
<span class="quotelev1">&gt; use one NIC.  You can specify the NIC to use with the
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include MCA parameter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun -np X -mca btl_tcp_if_include en0 &lt;app&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="1082.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Previous message:</strong> <a href="1080.php">Brian Barrett: "Re: [OMPI users] Compiling C++ program"</a>
<li><strong>In reply to:</strong> <a href="1076.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1082.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1082.php">Brian Barrett: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
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
