<?
$subject_val = "[OMPI users] Strange Net problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 05:58:25 2009" -->
<!-- isoreceived="20090401095825" -->
<!-- sent="Wed, 1 Apr 2009 11:58:20 +0200" -->
<!-- isosent="20090401095820" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Strange Net problem" -->
<!-- id="3a37617f0904010258g740fc51bjbcbdf265f9fc1e89_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Strange Net problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 05:58:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8706.php">Jerome BENOIT: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Previous message:</strong> <a href="8704.php">Guanyinzhu: "[OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8712.php">Ralph Castain: "Re: [OMPI users] Strange Net problem"</a>
<li><strong>Reply:</strong> <a href="8712.php">Ralph Castain: "Re: [OMPI users] Strange Net problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers, m
<br>
i have a strange problem during running my application ( 2000
<br>
processors). I'm using openmpi 1.2.22 over Infiniband. The follow is
<br>
the mca-params.conf:
<br>
<p><p>btl = ^tcp
<br>
btl_tcp_if_exclude = eth0,ib0,ib1
<br>
oob_tcp_include = eth1,lo,eth0
<br>
btl_openib_warn_default_gid_prefix = 0
<br>
btl_openib_ib_timeout   = 20
<br>
<p>At certain point of my run, the application died with this message:
<br>
<p>[node265:05593] [0,1,1679]-[0,1,1680] mca_oob_tcp_peer_try_connect:
<br>
connect to 10.161.12.14:36645 failed: Software caused connection abort
<br>
(103)
<br>
[node484:06545] [0,1,1617]-[0,1,1681] mca_oob_tcp_peer_try_connect:
<br>
connect to 10.161.12.14:36647 failed: Software caused connection abort
<br>
(103)
<br>
[node295:05394] [0,1,1649]-[0,1,1681] mca_oob_tcp_peer_try_connect:
<br>
connect to 10.161.12.14:36647 failed: Software caused connection abort
<br>
(103)
<br>
[node182:05579] [0,1,1673]-[0,1,1681] mca_oob_tcp_peer_try_connect:
<br>
connect to 10.161.12.14:36647 failed: Software caused connection abort
<br>
(103)
<br>
[node182:05579] [0,1,1673]-[0,1,1681] mca_oob_tcp_peer_try_connect:
<br>
connect to 10.161.12.14:36647 failed, connecting over all interfaces
<br>
failed!
<br>
<p>My question is: This error depends by some timeout? How can i solve?
<br>
Thanks in advance.
<br>
<p>Than
<br>
<p><p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="8706.php">Jerome BENOIT: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Previous message:</strong> <a href="8704.php">Guanyinzhu: "[OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8712.php">Ralph Castain: "Re: [OMPI users] Strange Net problem"</a>
<li><strong>Reply:</strong> <a href="8712.php">Ralph Castain: "Re: [OMPI users] Strange Net problem"</a>
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
