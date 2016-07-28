<?
$subject_val = "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 21:59:05 2014" -->
<!-- isoreceived="20140617015905" -->
<!-- sent="Mon, 16 Jun 2014 18:59:01 -0700" -->
<!-- isosent="20140617015901" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores" -->
<!-- id="584950C7-4BDD-42FF-8CA2-E433F438302D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1402957148.27378.YahooMailNeo_at_web184804.mail.gq1.yahoo.com" -->
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
<strong>Date:</strong> 2014-06-16 21:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24656.php">jcabello_at_[hidden]: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>Previous message:</strong> <a href="24654.php">Yuping Sun: "[OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>In reply to:</strong> <a href="24654.php">Yuping Sun: "[OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24657.php">Yuping Sun: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Reply:</strong> <a href="24657.php">Yuping Sun: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, for one, there is never any guarantee of linear scaling with the number of procs - that is very application dependent. You can actually see performance decrease with number of procs if the application doesn't know how to exploit them.
<br>
<p>One thing that stands out is your mapping and binding options. Mapping bysocket means that you are putting neighboring ranks (i.e., ranks that differ by 1) on different sockets, which usually means different NUMA regions. This make shared memory between those procs run poorly. IF the application does a lot of messaging between ranks that differ by 1, then you would see poor scaling.
<br>
<p>So one thing you could do is change --bysocket to --bycore. Then, if your application isn't threaded, you could --bind-to-core for better performance.
<br>
<p><p>On Jun 16, 2014, at 3:19 PM, Yuping Sun &lt;yupingpaulasun_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All:
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24655/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24656.php">jcabello_at_[hidden]: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>Previous message:</strong> <a href="24654.php">Yuping Sun: "[OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>In reply to:</strong> <a href="24654.php">Yuping Sun: "[OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24657.php">Yuping Sun: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Reply:</strong> <a href="24657.php">Yuping Sun: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
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
