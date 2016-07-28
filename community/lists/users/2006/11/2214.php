<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 22 15:46:16 2006" -->
<!-- isoreceived="20061122204616" -->
<!-- sent="Wed, 22 Nov 2006 20:45:52 +0000 (GMT)" -->
<!-- isosent="20061122204552" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi, mx" -->
<!-- id="Pine.GSO.4.53.0611222041520.20476_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-22 15:45:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2215.php">Rolf Vandevaart: "Re: [OMPI users] openmpi, mx"</a>
<li><strong>Previous message:</strong> <a href="2213.php">Adam Moody: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2215.php">Rolf Vandevaart: "Re: [OMPI users] openmpi, mx"</a>
<li><strong>Reply:</strong> <a href="2215.php">Rolf Vandevaart: "Re: [OMPI users] openmpi, mx"</a>
<li><strong>Reply:</strong> <a href="2220.php">Mostyn Lewis: "Re: [OMPI users] openmpi, mx"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have - again - successfully built and installed
<br>
mx and openmpi and I can run 64 and 128 cpus jobs on a 256 CPU cluster
<br>
version of openmpi is 1.2b1
<br>
<p>compiler used: studio11
<br>
<p>The code is a benchmark b_eff which runs usually fine - I have used extensively
<br>
it for benchmarking
<br>
<p>When I try 192 CPUs I get
<br>
m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
[m2001:16147] mca_oob_tcp_accept: accept() failed with errno 24.
<br>
&nbsp;...........
<br>
..............
<br>
..............
<br>
<p>The myrinet ports have been opened and the job is running
<br>
as one of the nodes shows ....
<br>
<p>&nbsp;ps -eaf | grep dph0elh
<br>
&nbsp;dph0elh  1068     1   0 20:40:00 ??          0:00 /opt/ompi/bin/orted
<br>
--bootproxy 1 --name 0.0.64 --num_procs 65 --vpid_start 0 -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;root  1110  1106   0 20:43:46 pts/4       0:00 grep dph0elh
<br>
&nbsp;dph0elh  1070  1068   0 20:40:02 ??          0:00 ../b_eff
<br>
&nbsp;dph0elh  1074  1068   0 20:40:02 ??          0:00 ../b_eff
<br>
&nbsp;dph0elh  1072  1068   0 20:40:02 ??          0:00 ../b_eff
<br>
<p>any idea ?
<br>
<p>Lydia
<br>
<p><p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2215.php">Rolf Vandevaart: "Re: [OMPI users] openmpi, mx"</a>
<li><strong>Previous message:</strong> <a href="2213.php">Adam Moody: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2215.php">Rolf Vandevaart: "Re: [OMPI users] openmpi, mx"</a>
<li><strong>Reply:</strong> <a href="2215.php">Rolf Vandevaart: "Re: [OMPI users] openmpi, mx"</a>
<li><strong>Reply:</strong> <a href="2220.php">Mostyn Lewis: "Re: [OMPI users] openmpi, mx"</a>
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
