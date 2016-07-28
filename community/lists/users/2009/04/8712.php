<?
$subject_val = "Re: [OMPI users] Strange Net problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 09:48:55 2009" -->
<!-- isoreceived="20090401134855" -->
<!-- sent="Wed, 1 Apr 2009 07:48:44 -0600" -->
<!-- isosent="20090401134844" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange Net problem" -->
<!-- id="C98ADAC4-CBE8-4556-8643-0A485662FFEE_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0904010258g740fc51bjbcbdf265f9fc1e89_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange Net problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 09:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8713.php">Gabriele Fatigati: "Re: [OMPI users] Strange Net problem"</a>
<li><strong>Previous message:</strong> <a href="8711.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8705.php">Gabriele Fatigati: "[OMPI users] Strange Net problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8713.php">Gabriele Fatigati: "Re: [OMPI users] Strange Net problem"</a>
<li><strong>Reply:</strong> <a href="8713.php">Gabriele Fatigati: "Re: [OMPI users] Strange Net problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gabriele
<br>
<p>I don't think this is a timeout issue. OMPI 1.2.x doesn't scale very  
<br>
well to that size due to a requirement that the underlying out-of-band  
<br>
system fully connect at the TCP level. Thus, every process in your job  
<br>
will be opening 2002 sockets (one to every other process, one to the  
<br>
local orted, and one back to mpirun). More than likely, you are simply  
<br>
running out of sockets on your nodes.
<br>
<p>For a job this size, I would recommend upgrading to OMPI 1.3.1. This  
<br>
uses a routing scheme for the out-of-band system, so each process only  
<br>
opens 1 socket to its local daemon. Much more scalable, and I think it  
<br>
would solve this problem. It will also start much faster, as a bonus.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Apr 1, 2009, at 3:58 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developers, m
</span><br>
<span class="quotelev1">&gt; i have a strange problem during running my application ( 2000
</span><br>
<span class="quotelev1">&gt; processors). I'm using openmpi 1.2.22 over Infiniband. The follow is
</span><br>
<span class="quotelev1">&gt; the mca-params.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl = ^tcp
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude = eth0,ib0,ib1
</span><br>
<span class="quotelev1">&gt; oob_tcp_include = eth1,lo,eth0
</span><br>
<span class="quotelev1">&gt; btl_openib_warn_default_gid_prefix = 0
</span><br>
<span class="quotelev1">&gt; btl_openib_ib_timeout   = 20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At certain point of my run, the application died with this message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node265:05593] [0,1,1679]-[0,1,1680] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev1">&gt; connect to 10.161.12.14:36645 failed: Software caused connection abort
</span><br>
<span class="quotelev1">&gt; (103)
</span><br>
<span class="quotelev1">&gt; [node484:06545] [0,1,1617]-[0,1,1681] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev1">&gt; connect to 10.161.12.14:36647 failed: Software caused connection abort
</span><br>
<span class="quotelev1">&gt; (103)
</span><br>
<span class="quotelev1">&gt; [node295:05394] [0,1,1649]-[0,1,1681] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev1">&gt; connect to 10.161.12.14:36647 failed: Software caused connection abort
</span><br>
<span class="quotelev1">&gt; (103)
</span><br>
<span class="quotelev1">&gt; [node182:05579] [0,1,1673]-[0,1,1681] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev1">&gt; connect to 10.161.12.14:36647 failed: Software caused connection abort
</span><br>
<span class="quotelev1">&gt; (103)
</span><br>
<span class="quotelev1">&gt; [node182:05579] [0,1,1673]-[0,1,1681] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev1">&gt; connect to 10.161.12.14:36647 failed, connecting over all interfaces
</span><br>
<span class="quotelev1">&gt; failed!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is: This error depends by some timeout? How can i solve?
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Than
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
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
<li><strong>Next message:</strong> <a href="8713.php">Gabriele Fatigati: "Re: [OMPI users] Strange Net problem"</a>
<li><strong>Previous message:</strong> <a href="8711.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="8705.php">Gabriele Fatigati: "[OMPI users] Strange Net problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8713.php">Gabriele Fatigati: "Re: [OMPI users] Strange Net problem"</a>
<li><strong>Reply:</strong> <a href="8713.php">Gabriele Fatigati: "Re: [OMPI users] Strange Net problem"</a>
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
