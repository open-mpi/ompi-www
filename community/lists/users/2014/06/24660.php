<?
$subject_val = "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 00:03:44 2014" -->
<!-- isoreceived="20140617040344" -->
<!-- sent="Mon, 16 Jun 2014 21:03:40 -0700" -->
<!-- isosent="20140617040340" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores" -->
<!-- id="C94FD9F6-6D5A-464B-B423-1F6A0F846BA9_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1402975388.97306.YahooMailBasic_at_web184805.mail.gq1.yahoo.com" -->
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
<strong>Date:</strong> 2014-06-17 00:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24661.php">Victor Vysotskiy: "[OMPI users] Question on licensing"</a>
<li><strong>Previous message:</strong> <a href="24659.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>In reply to:</strong> <a href="24657.php">Yuping Sun: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24658.php">Zehan Cui: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, that isn't correct. It should be:
<br>
<p><span class="quotelev1">&gt; mpirun -np 32 --bycore  --bind-to-core ~ysun/Codes/NASA/fun3d-12.3-66687/Mpi/FUN3D_90/nodet_mpi
</span><br>
<span class="quotelev1">&gt; --time_timestep_loop --animation_freq -1 
</span><br>
<p><p>Again, there is no guarantee this will improve performance - the options that affect performance for a given application are highly application-specific
<br>
<p><p>On Jun 16, 2014, at 8:23 PM, Yuping Sun &lt;yupingpaulasun_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the following correct command to you:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 32 --bysocket --bycore  ~ysun/Codes/NASA/fun3d-12.3-66687/Mpi/FUN3D_90/nodet_mpi
</span><br>
<span class="quotelev1">&gt; --time_timestep_loop --animation_freq -1 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run above command, still do not improve. Would you give me a detailed command with options?
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yuping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt; On Tue, 6/17/14, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores
</span><br>
<span class="quotelev1">&gt; To: &quot;Yuping Sun&quot; &lt;yupingpaulasun_at_[hidden]&gt;, &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, June 17, 2014, 1:59 AM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, for one, there
</span><br>
<span class="quotelev1">&gt; is never any guarantee of linear scaling with the number of
</span><br>
<span class="quotelev1">&gt; procs - that is very application dependent. You can actually
</span><br>
<span class="quotelev1">&gt; see performance decrease with number of procs if the
</span><br>
<span class="quotelev1">&gt; application doesn't know how to exploit them.
</span><br>
<span class="quotelev1">&gt; One thing that stands out is your mapping and
</span><br>
<span class="quotelev1">&gt; binding options. Mapping bysocket means that you are putting
</span><br>
<span class="quotelev1">&gt; neighboring ranks (i.e., ranks that differ by 1) on
</span><br>
<span class="quotelev1">&gt; different sockets, which usually means different NUMA
</span><br>
<span class="quotelev1">&gt; regions. This make shared memory between those procs run
</span><br>
<span class="quotelev1">&gt; poorly. IF the application does a lot of messaging between
</span><br>
<span class="quotelev1">&gt; ranks that differ by 1, then you would see poor
</span><br>
<span class="quotelev1">&gt; scaling.
</span><br>
<span class="quotelev1">&gt; So one thing you could do is change --bysocket to
</span><br>
<span class="quotelev1">&gt; --bycore. Then, if your application isn't threaded, you
</span><br>
<span class="quotelev1">&gt; could --bind-to-core for better performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 16, 2014, at 3:19 PM, Yuping Sun &lt;yupingpaulasun_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear All:
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; bought a 64 core workstation and installed NASA fun3d with
</span><br>
<span class="quotelev1">&gt; open mpi 1.6.5. Then I started to test run fun3d using 16,
</span><br>
<span class="quotelev1">&gt; 32, 48 cores. However the performance of the fun3d run is
</span><br>
<span class="quotelev1">&gt; bad. I got data below:
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; run command is (it is for 32 core as an example)
</span><br>
<span class="quotelev1">&gt; mpiexec
</span><br>
<span class="quotelev1">&gt; -np 32 --bysocket --bind-to-socket
</span><br>
<span class="quotelev1">&gt; ~ysun/Codes/NASA/fun3d-12.3-66687/Mpi/FUN3D_90/nodet_mpi
</span><br>
<span class="quotelev1">&gt; --time_timestep_loop --animation_freq -1 &gt;
</span><br>
<span class="quotelev1">&gt; screen.dump_bs30
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CPUs
</span><br>
<span class="quotelev1">&gt;     times   
</span><br>
<span class="quotelev1">&gt; iterations    time/it
</span><br>
<span class="quotelev1">&gt; 60   
</span><br>
<span class="quotelev1">&gt; 678s    30it       
</span><br>
<span class="quotelev1">&gt; 22.61s
</span><br>
<span class="quotelev1">&gt; 48   
</span><br>
<span class="quotelev1">&gt; 702s    30it       
</span><br>
<span class="quotelev1">&gt; 23.40s
</span><br>
<span class="quotelev1">&gt; 32   
</span><br>
<span class="quotelev1">&gt; 734s    30it       
</span><br>
<span class="quotelev1">&gt; 24.50s
</span><br>
<span class="quotelev1">&gt; 16   
</span><br>
<span class="quotelev1">&gt; 894s    30it       
</span><br>
<span class="quotelev1">&gt; 29.80s
</span><br>
<span class="quotelev1">&gt; You
</span><br>
<span class="quotelev1">&gt; can see using 60 cores, to run 30 iteration, FUN3D will
</span><br>
<span class="quotelev1">&gt; complete in 678 seconds, roughly 22.61 second per
</span><br>
<span class="quotelev1">&gt; iteration.
</span><br>
<span class="quotelev1">&gt; Using
</span><br>
<span class="quotelev1">&gt; 16 cores, to run 30 iteration, FUN3D will complete in 894
</span><br>
<span class="quotelev1">&gt; seconds, roughly 29.8 seconds per iteration.
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; data above shows FUN3D run using mpirun does not scale at
</span><br>
<span class="quotelev1">&gt; all! I used to run fun3d with mpirun on a 8 core WS, and it
</span><br>
<span class="quotelev1">&gt; scales well.The
</span><br>
<span class="quotelev1">&gt; same job to run on a linux cluster scales well.
</span><br>
<span class="quotelev1">&gt; Would
</span><br>
<span class="quotelev1">&gt; you all give me some advice to improve the performance loss
</span><br>
<span class="quotelev1">&gt; when I
</span><br>
<span class="quotelev1">&gt;  increase the use of more cores, or how to run mpirun with
</span><br>
<span class="quotelev1">&gt; proper options to get a linear scaling when using 16 to 32
</span><br>
<span class="quotelev1">&gt; to 48 cores?
</span><br>
<span class="quotelev1">&gt; Thank
</span><br>
<span class="quotelev1">&gt; you.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24654.php">http://www.open-mpi.org/community/lists/users/2014/06/24654.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24661.php">Victor Vysotskiy: "[OMPI users] Question on licensing"</a>
<li><strong>Previous message:</strong> <a href="24659.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>In reply to:</strong> <a href="24657.php">Yuping Sun: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24658.php">Zehan Cui: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
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
