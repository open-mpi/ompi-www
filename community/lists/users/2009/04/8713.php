<?
$subject_val = "Re: [OMPI users] Strange Net problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 09:57:54 2009" -->
<!-- isoreceived="20090401135754" -->
<!-- sent="Wed, 1 Apr 2009 15:57:49 +0200" -->
<!-- isosent="20090401135749" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange Net problem" -->
<!-- id="3a37617f0904010657i6c090087p4a601a787049cb7c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C98ADAC4-CBE8-4556-8643-0A485662FFEE_at_lanl.gov" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 09:57:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8714.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8712.php">Ralph Castain: "Re: [OMPI users] Strange Net problem"</a>
<li><strong>In reply to:</strong> <a href="8712.php">Ralph Castain: "Re: [OMPI users] Strange Net problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
unfortunately, in this machine i can't upgrade OpenMPI at the moment.
<br>
Is there a way to limit or to reduce the probability of this error?
<br>
<p>2009/4/1 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi Gabriele
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think this is a timeout issue. OMPI 1.2.x doesn't scale very well to
</span><br>
<span class="quotelev1">&gt; that size due to a requirement that the underlying out-of-band system fully
</span><br>
<span class="quotelev1">&gt; connect at the TCP level. Thus, every process in your job will be opening
</span><br>
<span class="quotelev1">&gt; 2002 sockets (one to every other process, one to the local orted, and one
</span><br>
<span class="quotelev1">&gt; back to mpirun). More than likely, you are simply running out of sockets on
</span><br>
<span class="quotelev1">&gt; your nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a job this size, I would recommend upgrading to OMPI 1.3.1. This uses a
</span><br>
<span class="quotelev1">&gt; routing scheme for the out-of-band system, so each process only opens 1
</span><br>
<span class="quotelev1">&gt; socket to its local daemon. Much more scalable, and I think it would solve
</span><br>
<span class="quotelev1">&gt; this problem. It will also start much faster, as a bonus.
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
<span class="quotelev1">&gt; On Apr 1, 2009, at 3:58 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI developers, m
</span><br>
<span class="quotelev2">&gt;&gt; i have a strange problem during running my application ( 2000
</span><br>
<span class="quotelev2">&gt;&gt; processors). I'm using openmpi 1.2.22 over Infiniband. The follow is
</span><br>
<span class="quotelev2">&gt;&gt; the mca-params.conf:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl = ^tcp
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_if_exclude = eth0,ib0,ib1
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_include = eth1,lo,eth0
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_warn_default_gid_prefix = 0
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_ib_timeout &#160; = 20
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At certain point of my run, the application died with this message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [node265:05593] [0,1,1679]-[0,1,1680] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev2">&gt;&gt; connect to 10.161.12.14:36645 failed: Software caused connection abort
</span><br>
<span class="quotelev2">&gt;&gt; (103)
</span><br>
<span class="quotelev2">&gt;&gt; [node484:06545] [0,1,1617]-[0,1,1681] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev2">&gt;&gt; connect to 10.161.12.14:36647 failed: Software caused connection abort
</span><br>
<span class="quotelev2">&gt;&gt; (103)
</span><br>
<span class="quotelev2">&gt;&gt; [node295:05394] [0,1,1649]-[0,1,1681] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev2">&gt;&gt; connect to 10.161.12.14:36647 failed: Software caused connection abort
</span><br>
<span class="quotelev2">&gt;&gt; (103)
</span><br>
<span class="quotelev2">&gt;&gt; [node182:05579] [0,1,1673]-[0,1,1681] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev2">&gt;&gt; connect to 10.161.12.14:36647 failed: Software caused connection abort
</span><br>
<span class="quotelev2">&gt;&gt; (103)
</span><br>
<span class="quotelev2">&gt;&gt; [node182:05579] [0,1,1673]-[0,1,1681] mca_oob_tcp_peer_try_connect:
</span><br>
<span class="quotelev2">&gt;&gt; connect to 10.161.12.14:36647 failed, connecting over all interfaces
</span><br>
<span class="quotelev2">&gt;&gt; failed!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My question is: This error depends by some timeout? How can i solve?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Than
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Tel: &#160; +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8714.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8712.php">Ralph Castain: "Re: [OMPI users] Strange Net problem"</a>
<li><strong>In reply to:</strong> <a href="8712.php">Ralph Castain: "Re: [OMPI users] Strange Net problem"</a>
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
