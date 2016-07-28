<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  6 20:32:56 2006" -->
<!-- isoreceived="20060207013256" -->
<!-- sent="Mon, 06 Feb 2006 17:32:55 -0800" -->
<!-- isosent="20060207013255" -->
<!-- name="Glen Kaukola" -->
<!-- email="glen_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] A few benchmarks" -->
<!-- id="43E7F8C7.6050600_at_cert.ucr.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.58.0602021314460.5978_at_localhost" -->
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
<strong>From:</strong> Glen Kaukola (<em>glen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-06 20:32:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0590.php">Andreas Fladischer: "[O-MPI users] mpirun with make"</a>
<li><strong>Previous message:</strong> <a href="0588.php">Warner Yuen: "[O-MPI users] OpenMPI and Xgrid"</a>
<li><strong>In reply to:</strong> <a href="0563.php">George Bosilca: "Re: [O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0638.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0638.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Glen,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the spending time benchmarking OpenMPI and for sending us the
</span><br>
<span class="quotelev1">&gt; feedback. We know we have some issues on the 1.0.2 version, more precisely
</span><br>
<span class="quotelev1">&gt; with the collective communications. We just look inside the CMAQ code, and
</span><br>
<span class="quotelev1">&gt; there are a lot of reduce and Allreduce. As it look like the collective
</span><br>
<span class="quotelev1">&gt; are intensively used it's normal that the 1.0.2a4 is slower than MPICH (I
</span><br>
<span class="quotelev1">&gt; expect the same behaviour for both MPICH1 and MPICH2). The collective are
</span><br>
<span class="quotelev1">&gt; now fixed in the nightly build, we are working toward moving them on the
</span><br>
<span class="quotelev1">&gt; next stable release. Until then, if you can redo the benchmark with one of
</span><br>
<span class="quotelev1">&gt; the nightly build that will be very usefull. I'm confident that the
</span><br>
<span class="quotelev1">&gt; results will improve considerably.
</span><br>
<p>Hi.  You're a brave guy even looking at CMAQ.  =)
<br>
<p>Anyway, here are the times on a few runs I did with Open MPI 1.1a1r887. 
<br>
&nbsp;&nbsp;Basically what I'm seeing, my jobs run ok when they're local to one 
<br>
machine, but as soon as they're split up between multiple machines 
<br>
performance can vary:
<br>
<p>4 cpu jobs:
<br>
2:16:27
<br>
2:01:35
<br>
1:24:20
<br>
1:03:55
<br>
1:22:43
<br>
1:31:53
<br>
<p>8 cpu jobs:
<br>
1:02:53
<br>
1:08:52
<br>
1:46:25
<br>
1:17:39
<br>
0:43:44
<br>
1:02:31
<br>
<p>And by the way.  I was doing some maintenance work on my machines this 
<br>
weekend, so absolutely everyone was kicked off.  I'm positive nothing 
<br>
else was interfering with these jobs.
<br>
<p>Also, someone had asked what my setup was, so here it is basically:
<br>
HP Procurve 2848 gigabit ethernet switch.
<br>
Tyan K8S boards, with dual opteron 246's, 2 gigs of ram, and built in 
<br>
broadcom gigabit ethernet adapters.
<br>
Rocks 4.0, with the latest updates from Red Hat, running a 
<br>
2.6.9-22.0.1.ELsmp kernel.
<br>
Network attached storage via NFS.
<br>
<p>I don't think my setup is the problem though anyway, as these jobs have 
<br>
been running file for a while now with MPICH.
<br>
<p><p>Glen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0590.php">Andreas Fladischer: "[O-MPI users] mpirun with make"</a>
<li><strong>Previous message:</strong> <a href="0588.php">Warner Yuen: "[O-MPI users] OpenMPI and Xgrid"</a>
<li><strong>In reply to:</strong> <a href="0563.php">George Bosilca: "Re: [O-MPI users] A few benchmarks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0638.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Reply:</strong> <a href="0638.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
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
