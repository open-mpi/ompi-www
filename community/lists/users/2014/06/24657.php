<?
$subject_val = "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 23:23:09 2014" -->
<!-- isoreceived="20140617032309" -->
<!-- sent="Mon, 16 Jun 2014 20:23:08 -0700" -->
<!-- isosent="20140617032308" -->
<!-- name="Yuping Sun" -->
<!-- email="yupingpaulasun_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores" -->
<!-- id="1402975388.97306.YahooMailBasic_at_web184805.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="584950C7-4BDD-42FF-8CA2-E433F438302D_at_open-mpi.org" -->
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
<strong>From:</strong> Yuping Sun (<em>yupingpaulasun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-16 23:23:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24658.php">Zehan Cui: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24656.php">jcabello_at_[hidden]: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>In reply to:</strong> <a href="24655.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24660.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Reply:</strong> <a href="24660.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph:
<br>
<p>Is the following correct command to you:
<br>
<p>mpirun -np 32 --bysocket --bycore  ~ysun/Codes/NASA/fun3d-12.3-66687/Mpi/FUN3D_90/nodet_mpi
<br>
&nbsp;--time_timestep_loop --animation_freq -1 
<br>
<p>I run above command, still do not improve. Would you give me a detailed command with options?
<br>
Thank you.
<br>
<p>Best regards,
<br>
<p>Yuping
<br>
<p><p>--------------------------------------------
<br>
On Tue, 6/17/14, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>&nbsp;Subject: Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores
<br>
&nbsp;To: &quot;Yuping Sun&quot; &lt;yupingpaulasun_at_[hidden]&gt;, &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
&nbsp;Date: Tuesday, June 17, 2014, 1:59 AM
<br>
&nbsp;
<br>
&nbsp;Well, for one, there
<br>
&nbsp;is never any guarantee of linear scaling with the number of
<br>
&nbsp;procs - that is very application dependent. You can actually
<br>
&nbsp;see performance decrease with number of procs if the
<br>
&nbsp;application doesn't know how to exploit them.
<br>
&nbsp;One thing that stands out is your mapping and
<br>
&nbsp;binding options. Mapping bysocket means that you are putting
<br>
&nbsp;neighboring ranks (i.e., ranks that differ by 1) on
<br>
&nbsp;different sockets, which usually means different NUMA
<br>
&nbsp;regions. This make shared memory between those procs run
<br>
&nbsp;poorly. IF the application does a lot of messaging between
<br>
&nbsp;ranks that differ by 1, then you would see poor
<br>
&nbsp;scaling.
<br>
&nbsp;So one thing you could do is change --bysocket to
<br>
&nbsp;--bycore. Then, if your application isn't threaded, you
<br>
&nbsp;could --bind-to-core for better performance.
<br>
&nbsp;
<br>
&nbsp;On Jun 16, 2014, at 3:19 PM, Yuping Sun &lt;yupingpaulasun_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
&nbsp;Dear All:
<br>
&nbsp;I
<br>
&nbsp;bought a 64 core workstation and installed NASA fun3d with
<br>
&nbsp;open mpi 1.6.5. Then I started to test run fun3d using 16,
<br>
&nbsp;32, 48 cores. However the performance of the fun3d run is
<br>
&nbsp;bad. I got data below:
<br>
&nbsp;the
<br>
&nbsp;run command is (it is for 32 core as an example)
<br>
&nbsp;mpiexec
<br>
&nbsp;-np 32 --bysocket --bind-to-socket
<br>
&nbsp;~ysun/Codes/NASA/fun3d-12.3-66687/Mpi/FUN3D_90/nodet_mpi
<br>
&nbsp;--time_timestep_loop --animation_freq -1 &gt;
<br>
&nbsp;screen.dump_bs30
<br>
&nbsp;
<br>
&nbsp;CPUs
<br>
&nbsp;&#160;&#160;&#160; times&#160;&#160;&#160;
<br>
&nbsp;iterations&#160;&#160;&#160; time/it
<br>
&nbsp;60&#160;&#160;&#160;
<br>
&nbsp;678s&#160;&#160;&#160; 30it &#160;&#160; &#160;&#160;&#160;
<br>
&nbsp;22.61s
<br>
&nbsp;48&#160;&#160;&#160;
<br>
&nbsp;702s&#160;&#160;&#160; 30it &#160;&#160; &#160;&#160;&#160;
<br>
&nbsp;23.40s
<br>
&nbsp;32&#160;&#160;&#160;
<br>
&nbsp;734s&#160;&#160;&#160; 30it &#160;&#160; &#160;&#160;&#160;
<br>
&nbsp;24.50s
<br>
&nbsp;16&#160;&#160;&#160;
<br>
&nbsp;894s&#160;&#160;&#160; 30it &#160;&#160; &#160;&#160;&#160;
<br>
&nbsp;29.80s
<br>
&nbsp;You
<br>
&nbsp;can see using 60 cores, to run 30 iteration, FUN3D will
<br>
&nbsp;complete in 678 seconds, roughly 22.61 second per
<br>
&nbsp;iteration.
<br>
&nbsp;Using
<br>
&nbsp;16 cores, to run 30 iteration, FUN3D will complete in 894
<br>
&nbsp;seconds, roughly 29.8 seconds per iteration.
<br>
&nbsp;the
<br>
&nbsp;data above shows FUN3D run using mpirun does not scale at
<br>
&nbsp;all! I used to run fun3d with mpirun on a 8 core WS, and it
<br>
&nbsp;scales well.The
<br>
&nbsp;same job to run on a linux cluster scales well.
<br>
&nbsp;Would
<br>
&nbsp;you all give me some advice to improve the performance loss
<br>
&nbsp;when I
<br>
&nbsp;&nbsp;increase the use of more cores, or how to run mpirun with
<br>
&nbsp;proper options to get a linear scaling when using 16 to 32
<br>
&nbsp;to 48 cores?
<br>
&nbsp;Thank
<br>
&nbsp;you.
<br>
&nbsp;Yuping
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;_______________________________________________
<br>
&nbsp;users mailing list
<br>
&nbsp;users_at_[hidden]
<br>
&nbsp;Subscription:
<br>
&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;Link to this post:
<br>
&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2014/06/24654.php">http://www.open-mpi.org/community/lists/users/2014/06/24654.php</a>
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24658.php">Zehan Cui: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24656.php">jcabello_at_[hidden]: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>In reply to:</strong> <a href="24655.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24660.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Reply:</strong> <a href="24660.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
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
