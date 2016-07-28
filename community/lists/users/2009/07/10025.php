<?
$subject_val = "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 15:09:37 2009" -->
<!-- isoreceived="20090721190937" -->
<!-- sent="Tue, 21 Jul 2009 13:09:31 -0600" -->
<!-- isosent="20090721190931" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?" -->
<!-- id="71d2d8cc0907211209t5ac7c27ar1bf59e5353a3bd70_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f101b204110e.4a65ad1e_at_lbl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 15:09:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10026.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10024.php">Song, Kai Song: "[OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>In reply to:</strong> <a href="10024.php">Song, Kai Song: "[OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10026.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Reply:</strong> <a href="10026.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I have no idea - I've never seen a Torque version that old,
<br>
however, so it is quite possible that we don't work with it. It also looks
<br>
like it may have been modified (given the p2-aspen3 on the end), so I have
<br>
no idea how the system would behave.
<br>
<p>First thing you could do is verify that the allocation is being read
<br>
correctly. Add a --display-allocation to the cmd line and see what we think
<br>
Torque gave us. Then add --display-map to see where it plans to place the
<br>
processes.
<br>
<p>If all that looks okay, and if you allow ssh, then try -mca plm rsh on the
<br>
cmd line and see if that works.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Tue, Jul 21, 2009 at 12:57 PM, Song, Kai Song &lt;KSong_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am building open-mpi-1.3.2 on centos-3.4, with torque-1.1.0p2-aspen3 and
</span><br>
<span class="quotelev1">&gt; myrinet. I compiled it just fine with this configuration:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/software/ompi/1.3.2-pgi --with-gm=/usr/local/
</span><br>
<span class="quotelev1">&gt; --with-gm-libdir=/usr/local/lib64/ --enable-static --disable-shared
</span><br>
<span class="quotelev1">&gt; --with-tm=/usr/ --without-threads CC=pgcc CXX=pgCC FC=pgf90 F77=pgf77
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-L/usr/lib64/torque/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I submit jobs for 2 or more nodes through the torque
</span><br>
<span class="quotelev1">&gt; schedular, the jobs just hang here. It shows the RUN state, but no
</span><br>
<span class="quotelev1">&gt; communication between the nodes, then jobs will die with timeout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have comfirmed that the myrinet is working because our lam-mpi-7.1 works
</span><br>
<span class="quotelev1">&gt; just fine. We are having a really hard time determining what are the causes
</span><br>
<span class="quotelev1">&gt; for this problem. So, we suspect it's because our torque is too old.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the lowest version requirement of torque for open-mpi-1.3.2? The
</span><br>
<span class="quotelev1">&gt; README file didn't specify this detail. Does anyone know more about it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kai
</span><br>
<span class="quotelev1">&gt; --------------------
</span><br>
<span class="quotelev1">&gt; Kai Song
</span><br>
<span class="quotelev1">&gt; &lt;ksong_at_[hidden]&gt; 1.510.486.4894
</span><br>
<span class="quotelev1">&gt; High Performance Computing Services (HPCS) Intern
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory - <a href="http://scs.lbl.gov">http://scs.lbl.gov</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10025/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10026.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10024.php">Song, Kai Song: "[OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>In reply to:</strong> <a href="10024.php">Song, Kai Song: "[OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10026.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Reply:</strong> <a href="10026.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
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
