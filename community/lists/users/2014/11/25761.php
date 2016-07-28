<?
$subject_val = "[OMPI users] mpirun fails across nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 04:57:59 2014" -->
<!-- isoreceived="20141112095759" -->
<!-- sent="Wed, 12 Nov 2014 14:57:58 +0500" -->
<!-- isosent="20141112095758" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun fails across nodes" -->
<!-- id="CAMvdAs+-Fxn3wKasjpjYQ=2YAOOgd0BJ+NJLjoigONR_N_appw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun fails across nodes<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 04:57:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25762.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25760.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] Call for Papers: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25763.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Reply:</strong> <a href="25763.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun fails across nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All
<br>
<p>I need your advice. While trying to run mpirun job across nodes I get
<br>
following error. It seems that the two nodes i.e, compute-01-01 and
<br>
compute-01-06 are not able to communicate with each other. While nodes
<br>
see each other on ping.
<br>
<p>[pmdtest_at_pmd ERA_CLM45]$ mpirun -np 16 -hostfile hostlist --mca btl
<br>
^openib ../bin/regcmMPICLM45 regcm.in
<br>
<p>[compute-01-06.private.dns.zone][[48897,1],7][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.14 failed: No route to host (113)
<br>
[compute-01-06.private.dns.zone][[48897,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.14 failed: No route to host (113)
<br>
[compute-01-06.private.dns.zone][[48897,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.14 failed: No route to host (113)
<br>
[compute-01-01.private.dns.zone][[48897,1],10][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
[compute-01-01.private.dns.zone][[48897,1],12][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.10 failed: No route to host (113)
<br>
[compute-01-01.private.dns.zone][[48897,1],14][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.108.10 failed: No route to host (113)
<br>
connect() to 192.168.108.10 failed: No route to host (113)
<br>
<p>mpirun: killing job...
<br>
<p>[pmdtest_at_pmd ERA_CLM45]$ ssh compute-01-01
<br>
Last login: Wed Nov 12 09:48:53 2014 from pmd-eth0.private.dns.zone
<br>
[pmdtest_at_compute-01-01 ~]$ ping compute-01-06
<br>
PING compute-01-06.private.dns.zone (10.0.0.8) 56(84) bytes of data.
<br>
64 bytes from compute-01-06.private.dns.zone (10.0.0.8): icmp_seq=1
<br>
ttl=64 time=0.108 ms
<br>
64 bytes from compute-01-06.private.dns.zone (10.0.0.8): icmp_seq=2
<br>
ttl=64 time=0.088 ms
<br>
<p>--- compute-01-06.private.dns.zone ping statistics ---
<br>
2 packets transmitted, 2 received, 0% packet loss, time 999ms
<br>
rtt min/avg/max/mdev = 0.088/0.098/0.108/0.010 ms
<br>
[pmdtest_at_compute-01-01 ~]$
<br>
<p>Thanks in advance.
<br>
<p>Ahsan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25762.php">Reuti: "Re: [OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25760.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] Call for Papers: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25763.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun fails across nodes"</a>
<li><strong>Reply:</strong> <a href="25763.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun fails across nodes"</a>
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
