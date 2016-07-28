<?
$subject_val = "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 18:45:10 2009" -->
<!-- isoreceived="20090721224510" -->
<!-- sent="Tue, 21 Jul 2009 15:44:30 -0700" -->
<!-- isosent="20090721224430" -->
<!-- name="Song, Kai Song" -->
<!-- email="KSong_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?" -->
<!-- id="f11824327cbd.4a65e25e_at_lbl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71d2d8cc0907211209t5ac7c27ar1bf59e5353a3bd70_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?<br>
<strong>From:</strong> Song, Kai Song (<em>KSong_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 18:44:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10027.php">Lee Amy: "[OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Previous message:</strong> <a href="10025.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>In reply to:</strong> <a href="10025.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10044.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Reply:</strong> <a href="10044.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks a lot for the fast response.
<br>
<p>Could you give me more instructions on which command do I put &quot;--display-allocation&quot; and &quot;--display-map&quot; with? mpirun? ./configure?...
<br>
<p>Also,we have tested that in our PBS script, if we put node=1, the helloworld works. But, when I put node=2 or more, it will hang until timeout . And the error message will be something like:
<br>
&nbsp;node0006 - daemon did not report back when launched
<br>
<p>However, if we don't go through the scheduler and run mpi manually, everything works fine too.
<br>
/home/software/ompi/1.3.2-pgi/bin/mpirun -machinefile ./nodes -np 16 ./a.out
<br>
<p>What do you think the problem would be? It's not the network issue, because manually running MPI works. That is why we question about torque compatibility.
<br>
<p>Thanks again,
<br>
<p>Kai
<br>
<p>--------------------
<br>
Kai Song
<br>
&lt;ksong_at_[hidden]&gt; 1.510.486.4894
<br>
High Performance Computing Services (HPCS) Intern
<br>
Lawrence Berkeley National Laboratory - <a href="http://scs.lbl.gov">http://scs.lbl.gov</a>
<br>
<p><p>----- Original Message -----
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Date: Tuesday, July 21, 2009 12:12 pm
<br>
Subject: Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I'm afraid I have no idea - I've never seen a Torque version that old,
</span><br>
<span class="quotelev1">&gt; however, so it is quite possible that we don't work with it. It 
</span><br>
<span class="quotelev1">&gt; also looks
</span><br>
<span class="quotelev1">&gt; like it may have been modified (given the p2-aspen3 on the end), so 
</span><br>
<span class="quotelev1">&gt; I have
</span><br>
<span class="quotelev1">&gt; no idea how the system would behave.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First thing you could do is verify that the allocation is being read
</span><br>
<span class="quotelev1">&gt; correctly. Add a --display-allocation to the cmd line and see what 
</span><br>
<span class="quotelev1">&gt; we think
</span><br>
<span class="quotelev1">&gt; Torque gave us. Then add --display-map to see where it plans to 
</span><br>
<span class="quotelev1">&gt; place the
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If all that looks okay, and if you allow ssh, then try -mca plm rsh 
</span><br>
<span class="quotelev1">&gt; on the
</span><br>
<span class="quotelev1">&gt; cmd line and see if that works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 21, 2009 at 12:57 PM, Song, Kai Song &lt;KSong_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am building open-mpi-1.3.2 on centos-3.4, with torque-1.1.0p2-
</span><br>
<span class="quotelev1">&gt; aspen3 and
</span><br>
<span class="quotelev2">&gt; &gt; myrinet. I compiled it just fine with this configuration:
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/home/software/ompi/1.3.2-pgi --with-
</span><br>
<span class="quotelev1">&gt; gm=/usr/local/&gt; --with-gm-libdir=/usr/local/lib64/ --enable-static -
</span><br>
<span class="quotelev1">&gt; -disable-shared
</span><br>
<span class="quotelev2">&gt; &gt; --with-tm=/usr/ --without-threads CC=pgcc CXX=pgCC FC=pgf90 
</span><br>
<span class="quotelev1">&gt; F77=pgf77&gt; LDFLAGS=-L/usr/lib64/torque/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, when I submit jobs for 2 or more nodes through the torque
</span><br>
<span class="quotelev2">&gt; &gt; schedular, the jobs just hang here. It shows the RUN state, but no
</span><br>
<span class="quotelev2">&gt; &gt; communication between the nodes, then jobs will die with timeout.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have comfirmed that the myrinet is working because our lam-mpi-
</span><br>
<span class="quotelev1">&gt; 7.1 works
</span><br>
<span class="quotelev2">&gt; &gt; just fine. We are having a really hard time determining what are 
</span><br>
<span class="quotelev1">&gt; the causes
</span><br>
<span class="quotelev2">&gt; &gt; for this problem. So, we suspect it's because our torque is too old.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is the lowest version requirement of torque for open-mpi-
</span><br>
<span class="quotelev1">&gt; 1.3.2? The
</span><br>
<span class="quotelev2">&gt; &gt; README file didn't specify this detail. Does anyone know more 
</span><br>
<span class="quotelev1">&gt; about it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kai
</span><br>
<span class="quotelev2">&gt; &gt; --------------------
</span><br>
<span class="quotelev2">&gt; &gt; Kai Song
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ksong_at_[hidden]&gt; 1.510.486.4894
</span><br>
<span class="quotelev2">&gt; &gt; High Performance Computing Services (HPCS) Intern
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory - <a href="http://scs.lbl.gov">http://scs.lbl.gov</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10027.php">Lee Amy: "[OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Previous message:</strong> <a href="10025.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>In reply to:</strong> <a href="10025.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10044.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Reply:</strong> <a href="10044.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
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
