<?
$subject_val = "[OMPI users] Problem running on multiple nodes with Java bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 10 12:24:53 2013" -->
<!-- isoreceived="20131110172453" -->
<!-- sent="Sun, 10 Nov 2013 18:24:32 +0100" -->
<!-- isosent="20131110172432" -->
<!-- name="Christoffer Hamberg" -->
<!-- email="christoffer.hamberg_at_[hidden]" -->
<!-- subject="[OMPI users] Problem running on multiple nodes with Java bindings" -->
<!-- id="CAK2RZyyOB56+4qszohh32eS9Sj-ELKswcgGL3amMiM_yGZWDoQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem running on multiple nodes with Java bindings<br>
<strong>From:</strong> Christoffer Hamberg (<em>christoffer.hamberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-10 12:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22936.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22934.php">Saliya Ekanayake: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22936.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Reply:</strong> <a href="22936.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm having some strange problems running Open MPI(1.9a1r29559) with Java
<br>
bindings on a Calxeda highbank ARM Server running Ubuntu 12.10 (GNU/Linux
<br>
3.5.0-43-highbank armv7l).
<br>
<p>The problem arises when I try to run a job on more than 3 nodes (I have a
<br>
total of 8).
<br>
Note: It's the same error for any of the node[0-7].
<br>
<p>ubuntu_at_node0:~$ mpirun -np 4 -host node0,node1,node2 hostname
<br>
Host key verification failed.
<br>
<p>ubuntu_at_node0:~$ mpirun -np 4 -host node0,node1,node2,node3 hostname
<br>
node0
<br>
node0
<br>
node1
<br>
node2
<br>
<p>and not running the job on the current node also gives Host key
<br>
verification failed for only 3 nodes.
<br>
<p>ubuntu_at_node0:~$ mpirun -np 4 -host node1,node3,node5 hostname
<br>
Host key verification failed.
<br>
<p>But not on 2 nodes:
<br>
ubuntu_at_node0:~$ mpirun -np 4 -host node1,node3 hostname
<br>
node1
<br>
node1
<br>
node3
<br>
node3
<br>
<p>I've configured it with the following:
<br>
./configure --prefix=/opt/openmpi-1.9-java --without-openib --enable-static
<br>
--with-threads=posix --enable-mpi-thread-multiple --enable-mpi-java
<br>
--with-jdk-bindir=/usr/lib/jvm/java-7-openjdk-armhf/bin
<br>
--with-jdk-headers=/usr/lib/jvm/java-7-openjdk-armhf/include
<br>
<p>I have Open MPI 1.6.5 (without Java-binding) installed and it runs without
<br>
any problems on all nodes, so there should be no problem with SSH that the
<br>
error points to.
<br>
<p>Any ideas?
<br>
<p>Regards,
<br>
Christoffer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22935/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22936.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22934.php">Saliya Ekanayake: "Re: [OMPI users] Reducing Varying Length Arrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22936.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Reply:</strong> <a href="22936.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
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
