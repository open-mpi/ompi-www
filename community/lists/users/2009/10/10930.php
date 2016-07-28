<?
$subject_val = "[OMPI users] having trouble expanding our cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 09:33:36 2009" -->
<!-- isoreceived="20091020133336" -->
<!-- sent="Tue, 20 Oct 2009 21:33:32 +0800" -->
<!-- isosent="20091020133332" -->
<!-- name="yewyong" -->
<!-- email="uyong81_at_[hidden]" -->
<!-- subject="[OMPI users] having trouble expanding our cluster" -->
<!-- id="5d94b8ee0910200633y44143234nc3dc525c14d2f57d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] having trouble expanding our cluster<br>
<strong>From:</strong> yewyong (<em>uyong81_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 09:33:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10931.php">Sangamesh B: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Previous message:</strong> <a href="10929.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>am new to cluster computing, so please bear with me.
<br>
currently trying to utilize the available desktops found in labs.
<br>
<p>Started trying out 2 labs, (namely Lab A which have 192.168.0.xx IPs
<br>
and Lab B which have public IPs 202.185.77.xx series)
<br>
<p>Have been running Paraview in Lab A without any problem so far.
<br>
(mpirun -np 18 -machinefile quad_lan pvserver)
<br>
<p>As i tried to extend the cluster to Lab B's desktops, by specifying their
<br>
IPs in
<br>
my machinefile like:
<br>
<p>202.185.77.110 slots=4 max-slots=4 *#(eth1 = 202.185.77.110; eth0 =
<br>
192.168.0.10)*
<br>
202.185.77.219 slots=2 max-slots=2        *&lt;-- this is &quot;pc226*&quot;
<br>
192.168.0.227 slots=2 max-slots=2
<br>
<p>my programs hangs while my client tries to connect to the pvserver.
<br>
if i wait long  enough, it will show the error
<br>
<p>yewyong_at_vrc1:~/installer/mpi_test&gt; mpirun -np 8 -machinefile quad_hama
<br>
pvserver --use-offscreen-rendering
<br>
Listen on port: 11111
<br>
Waiting for client...
<br>
Client connected.
<br>
[pc226][[8636,1],6][btl_tcp_endpoint.c:631:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() failed: Connection timed out (110)
<br>
<p>note that when running &quot;hello_world&quot;, it shows that the makeshift cluster
<br>
are able to communicate which each other.
<br>
after trying out different sequence in the machinefile, i found out that
<br>
whenever a cross IPs mpirun server is started, the system pauses
<br>
when the client tries to connect.
<br>
<p>Would it be related to the problem raised in &quot;
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2009/07/6385.php">http://www.open-mpi.org/community/lists/devel/2009/07/6385.php</a>&quot;?
<br>
<p>i'm not too sure if i've fully described the situation, please let me know
<br>
if you guys need any extra information.
<br>
<p>thank you in advance.
<br>
<p>yewyong.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10930/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10931.php">Sangamesh B: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
<li><strong>Previous message:</strong> <a href="10929.php">jody: "Re: [OMPI users] OMPI-1.2.0 is not getting installed"</a>
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
