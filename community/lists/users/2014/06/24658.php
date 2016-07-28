<?
$subject_val = "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 23:33:01 2014" -->
<!-- isoreceived="20140617033301" -->
<!-- sent="Tue, 17 Jun 2014 11:32:30 +0800" -->
<!-- isosent="20140617033230" -->
<!-- name="Zehan Cui" -->
<!-- email="zehan.cui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores" -->
<!-- id="CALr9+a5eWRuy8sGLt3njtD5Zr_HPNChk36BicnLzTX3805bzwA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Zehan Cui (<em>zehan.cui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-16 23:32:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24659.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24657.php">Yuping Sun: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>In reply to:</strong> <a href="24654.php">Yuping Sun: "[OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24659.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Reply:</strong> <a href="24659.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Yuping,
<br>
<p>Maybe using multi-threads inside a socket, and MPI among sockets is better
<br>
choice for such NUMA platform.
<br>
<p>Multi-threads can exploit the benefit of share memory, and MPI can
<br>
alleviate the cost of non-uniform memory access.
<br>
<p><p>regards,
<br>
Zehan
<br>
<p><p><p><p>On Tue, Jun 17, 2014 at 6:19 AM, Yuping Sun &lt;yupingpaulasun_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I bought a 64 core workstation and installed NASA fun3d with open mpi
</span><br>
<span class="quotelev1">&gt; 1.6.5. Then I started to test run fun3d using 16, 32, 48 cores. However the
</span><br>
<span class="quotelev1">&gt; performance of the fun3d run is bad. I got data below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the run command is (it is for 32 core as an example)
</span><br>
<span class="quotelev1">&gt; mpiexec -np 32 --bysocket --bind-to-socket
</span><br>
<span class="quotelev1">&gt; ~ysun/Codes/NASA/fun3d-12.3-66687/Mpi/FUN3D_90/nodet_mpi
</span><br>
<span class="quotelev1">&gt; --time_timestep_loop --animation_freq -1 &gt; screen.dump_bs30
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
<span class="quotelev1">&gt; You can see using 60 cores, to run 30 iteration, FUN3D will complete in
</span><br>
<span class="quotelev1">&gt; 678 seconds, roughly 22.61 second per iteration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using 16 cores, to run 30 iteration, FUN3D will complete in 894 seconds,
</span><br>
<span class="quotelev1">&gt; roughly 29.8 seconds per iteration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the data above shows FUN3D run using mpirun does not scale at all! I used
</span><br>
<span class="quotelev1">&gt; to run fun3d with mpirun on a 8 core WS, and it scales well.
</span><br>
<span class="quotelev1">&gt; The same job to run on a linux cluster scales well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you all give me some advice to improve the performance loss when I
</span><br>
<span class="quotelev1">&gt; increase the use of more cores, or how to run mpirun with proper options to
</span><br>
<span class="quotelev1">&gt; get a linear scaling when using 16 to 32 to 48 cores?
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24654.php">http://www.open-mpi.org/community/lists/users/2014/06/24654.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24659.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24657.php">Yuping Sun: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>In reply to:</strong> <a href="24654.php">Yuping Sun: "[OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24659.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Reply:</strong> <a href="24659.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
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
