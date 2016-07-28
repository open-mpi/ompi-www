<?
$subject_val = "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 20:00:31 2009" -->
<!-- isoreceived="20090723000031" -->
<!-- sent="Wed, 22 Jul 2009 18:00:16 -0600" -->
<!-- isosent="20090723000016" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?" -->
<!-- id="2F1F9A54-3C09-496A-B4BD-0088733CEE4F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f11824327cbd.4a65e25e_at_lbl.gov" -->
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
<strong>Date:</strong> 2009-07-22 20:00:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10045.php">Gus Correa: "[OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10043.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10026.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10069.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Reply:</strong> <a href="10069.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpirun --display-allocation --display-map
<br>
<p>Run a batch job that just prints out $PBS_NODEFILE. I'll bet that it  
<br>
isn't what we are expecting, and that the problem comes from it.
<br>
<p>In a Torque environment, we read that file to get the list of nodes  
<br>
and #slots/node that are allocated to your job. We then filter that  
<br>
through any hostfile you provide. So all the nodes have to be in the  
<br>
$PBS_NODEFILE, which has to be in the expected format.
<br>
<p>I'm a little suspicious, though, because of your reported error. It  
<br>
sounds like we are indeed trying to launch a daemon on a known node. I  
<br>
can only surmise a couple of possible reasons for the failure:
<br>
<p>1. this is a node that is not allocated for your use. Was node0006 in  
<br>
your allocation?? If not, then the launch would fail. This would  
<br>
indicate we are not parsing the nodefile correctly.
<br>
<p>2. if the node is in your allocation, then I would wonder if you have  
<br>
a TCP connection between that node and the one where mpirun exists. Is  
<br>
there a firewall in the way? Or something that would preclude a  
<br>
connection? Frankly, I doubt this possibility because it works when  
<br>
run manually.
<br>
<p>My money is on option #1. :-)
<br>
<p>If it is #1 and you send me a copy of a sample $PBS_NODEFILE on your  
<br>
system, I can create a way to parse it so we can provide support for  
<br>
that older version.
<br>
<p>Ralph
<br>
<p><p>On Jul 21, 2009, at 4:44 PM, Song, Kai Song wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for the fast response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you give me more instructions on which command do I put &quot;-- 
</span><br>
<span class="quotelev1">&gt; display-allocation&quot; and &quot;--display-map&quot; with? mpirun? ./configure?...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also,we have tested that in our PBS script, if we put node=1, the  
</span><br>
<span class="quotelev1">&gt; helloworld works. But, when I put node=2 or more, it will hang until  
</span><br>
<span class="quotelev1">&gt; timeout . And the error message will be something like:
</span><br>
<span class="quotelev1">&gt; node0006 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if we don't go through the scheduler and run mpi manually,  
</span><br>
<span class="quotelev1">&gt; everything works fine too.
</span><br>
<span class="quotelev1">&gt; /home/software/ompi/1.3.2-pgi/bin/mpirun -machinefile ./nodes -np  
</span><br>
<span class="quotelev1">&gt; 16 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you think the problem would be? It's not the network issue,  
</span><br>
<span class="quotelev1">&gt; because manually running MPI works. That is why we question about  
</span><br>
<span class="quotelev1">&gt; torque compatibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kai
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, July 21, 2009 12:12 pm
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open-MPI-1.3.2 compatibility with old  
</span><br>
<span class="quotelev1">&gt; torque?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid I have no idea - I've never seen a Torque version that  
</span><br>
<span class="quotelev2">&gt;&gt; old,
</span><br>
<span class="quotelev2">&gt;&gt; however, so it is quite possible that we don't work with it. It
</span><br>
<span class="quotelev2">&gt;&gt; also looks
</span><br>
<span class="quotelev2">&gt;&gt; like it may have been modified (given the p2-aspen3 on the end), so
</span><br>
<span class="quotelev2">&gt;&gt; I have
</span><br>
<span class="quotelev2">&gt;&gt; no idea how the system would behave.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First thing you could do is verify that the allocation is being read
</span><br>
<span class="quotelev2">&gt;&gt; correctly. Add a --display-allocation to the cmd line and see what
</span><br>
<span class="quotelev2">&gt;&gt; we think
</span><br>
<span class="quotelev2">&gt;&gt; Torque gave us. Then add --display-map to see where it plans to
</span><br>
<span class="quotelev2">&gt;&gt; place the
</span><br>
<span class="quotelev2">&gt;&gt; processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If all that looks okay, and if you allow ssh, then try -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt; on the
</span><br>
<span class="quotelev2">&gt;&gt; cmd line and see if that works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 21, 2009 at 12:57 PM, Song, Kai Song &lt;KSong_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am building open-mpi-1.3.2 on centos-3.4, with torque-1.1.0p2-
</span><br>
<span class="quotelev2">&gt;&gt; aspen3 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myrinet. I compiled it just fine with this configuration:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/home/software/ompi/1.3.2-pgi --with-
</span><br>
<span class="quotelev2">&gt;&gt; gm=/usr/local/&gt; --with-gm-libdir=/usr/local/lib64/ --enable-static -
</span><br>
<span class="quotelev2">&gt;&gt; -disable-shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-tm=/usr/ --without-threads CC=pgcc CXX=pgCC FC=pgf90
</span><br>
<span class="quotelev2">&gt;&gt; F77=pgf77&gt; LDFLAGS=-L/usr/lib64/torque/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when I submit jobs for 2 or more nodes through the torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt; schedular, the jobs just hang here. It shows the RUN state, but no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication between the nodes, then jobs will die with timeout.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have comfirmed that the myrinet is working because our lam-mpi-
</span><br>
<span class="quotelev2">&gt;&gt; 7.1 works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just fine. We are having a really hard time determining what are
</span><br>
<span class="quotelev2">&gt;&gt; the causes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for this problem. So, we suspect it's because our torque is too old.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the lowest version requirement of torque for open-mpi-
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.2? The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; README file didn't specify this detail. Does anyone know more
</span><br>
<span class="quotelev2">&gt;&gt; about it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kai
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kai Song
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ksong_at_[hidden]&gt; 1.510.486.4894
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High Performance Computing Services (HPCS) Intern
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory - <a href="http://scs.lbl.gov">http://scs.lbl.gov</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10045.php">Gus Correa: "[OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10043.php">Jeff Squyres: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10026.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10069.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Reply:</strong> <a href="10069.php">Song, Kai Song: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
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
