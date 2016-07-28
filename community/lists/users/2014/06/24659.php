<?
$subject_val = "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 00:02:16 2014" -->
<!-- isoreceived="20140617040216" -->
<!-- sent="Mon, 16 Jun 2014 21:02:12 -0700" -->
<!-- isosent="20140617040212" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores" -->
<!-- id="0900B09D-218F-46E5-A666-A6C6FB605AA8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALr9+a5eWRuy8sGLt3njtD5Zr_HPNChk36BicnLzTX3805bzwA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-17 00:02:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24660.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24658.php">Zehan Cui: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>In reply to:</strong> <a href="24658.php">Zehan Cui: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, yes and no. Besides the real question would be if this app, which this person didn't write, was written as a threaded application.
<br>
<p>On Jun 16, 2014, at 8:32 PM, Zehan Cui &lt;zehan.cui_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Yuping,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe using multi-threads inside a socket, and MPI among sockets is better choice for such NUMA platform. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Multi-threads can exploit the benefit of share memory, and MPI can alleviate the cost of non-uniform memory access.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Zehan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 17, 2014 at 6:19 AM, Yuping Sun &lt;yupingpaulasun_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear All:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I bought a 64 core workstation and installed NASA fun3d with open mpi 1.6.5. Then I started to test run fun3d using 16, 32, 48 cores. However the performance of the fun3d run is bad. I got data below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the run command is (it is for 32 core as an example)
</span><br>
<span class="quotelev1">&gt; mpiexec -np 32 --bysocket --bind-to-socket ~ysun/Codes/NASA/fun3d-12.3-66687/Mpi/FUN3D_90/nodet_mpi --time_timestep_loop --animation_freq -1 &gt; screen.dump_bs30
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CPUs     times    iterations    time/it
</span><br>
<span class="quotelev1">&gt; 60    678s    30it        22.61s
</span><br>
<span class="quotelev1">&gt; 48    702s    30it        23.40s
</span><br>
<span class="quotelev1">&gt; 32    734s    30it        24.50s
</span><br>
<span class="quotelev1">&gt; 16    894s    30it        29.80s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can see using 60 cores, to run 30 iteration, FUN3D will complete in 678 seconds, roughly 22.61 second per iteration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using 16 cores, to run 30 iteration, FUN3D will complete in 894 seconds, roughly 29.8 seconds per iteration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the data above shows FUN3D run using mpirun does not scale at all! I used to run fun3d with mpirun on a 8 core WS, and it scales well.
</span><br>
<span class="quotelev1">&gt; The same job to run on a linux cluster scales well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would you all give me some advice to improve the performance loss when I increase the use of more cores, or how to run mpirun with proper options to get a linear scaling when using 16 to 32 to 48 cores?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yuping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24654.php">http://www.open-mpi.org/community/lists/users/2014/06/24654.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24658.php">http://www.open-mpi.org/community/lists/users/2014/06/24658.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24659/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24660.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24658.php">Zehan Cui: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>In reply to:</strong> <a href="24658.php">Zehan Cui: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
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
