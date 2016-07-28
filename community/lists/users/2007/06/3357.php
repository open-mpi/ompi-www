<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun  3 05:42:27 2007" -->
<!-- isoreceived="20070603094227" -->
<!-- sent="Sun, 3 Jun 2007 15:12:23 +0530" -->
<!-- isosent="20070603094223" -->
<!-- name="Jayanta Roy" -->
<!-- email="jay.roys_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.2.2 installation" -->
<!-- id="f6a174940706030242j18adb71dk27e84d816a3cc121_at_mail.gmail.com" -->
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
<strong>From:</strong> Jayanta Roy (<em>jay.roys_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-03 05:42:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3358.php">Prakash Velayutham: "[OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3356.php">Tim Prins: "Re: [OMPI users] Compilation bug in libtool"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was trying to install openmpi-1.2.2 under 2.4.32 kernel.
<br>
<p>./configure --prefix=/mnt/shared/jroy/openmpi-1.2.2/ CC=icc CXX=icpc
<br>
F77=ifort FC=ifort
<br>
make all install
<br>
<p>It installed successfully, but during mpirun I got...
<br>
<p>mpirun --mca btl_tcp_if_include eth0 -n 4 -bynode -hostfile test_nodes
<br>
./a.out 1 16000000
<br>
[node1:31916] mca: base: component_find: unable to open paffinity linux:
<br>
file not found (ignored)
<br>
[node2:09324] mca: base: component_find: unable to open paffinity linux:
<br>
file not found (ignored)
<br>
[node3:09264] mca: base: component_find: unable to open paffinity linux:
<br>
file not found (ignored)
<br>
[node4:09264] mca: base: component_find: unable to open paffinity linux:
<br>
file not found (ignored)
<br>
[node1:31922] mca: base: component_find: unable to open paffinity linux:
<br>
file not found (ignored)
<br>
<p>I ran ompi_info command to look for &quot;MCA paffinity&quot;, but couldn't find this
<br>
components...
<br>
<p>Is the configuration required some extra  features?
<br>
<p>Regards,
<br>
Jayanta
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3358.php">Prakash Velayutham: "[OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3356.php">Tim Prins: "Re: [OMPI users] Compilation bug in libtool"</a>
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
