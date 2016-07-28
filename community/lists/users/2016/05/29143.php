<?
$subject_val = "[OMPI users] mpirun command won't run unless the firewalld daemon is disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 14:31:17 2016" -->
<!-- isoreceived="20160509183117" -->
<!-- sent="Mon, 9 May 2016 14:31:03 -0400" -->
<!-- isosent="20160509183103" -->
<!-- name="Llolsten Kaonga" -->
<!-- email="llk_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun command won't run unless the firewalld daemon is disabled" -->
<!-- id="002001d1aa20$f17cac10$d4760430$_at_soft-forge.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] mpirun command won't run unless the firewalld daemon is disabled<br>
<strong>From:</strong> Llolsten Kaonga (<em>llk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 14:31:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29144.php">dpchoudh .: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29142.php">Ilias Miroslav: "[OMPI users] 'AINT' undeclared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29144.php">dpchoudh .: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29144.php">dpchoudh .: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29150.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;
<br>
<p>We've been running openmpi for a long time and up to version 1.8.2 and
<br>
CentOS 6.7 with commands such as the one below:
<br>
<p>&nbsp;
<br>
<p>usr/local/bin/mpirun --allow-run-as-root --mca btl openib,self,sm --mca pml
<br>
ob1 -np 2 -np 8 -hostfile /root/mpi-hosts /usr/local/bin/IMB-MPI1
<br>
<p>&nbsp;
<br>
<p>To be able to run the above command, we normally just disabled the IPv4
<br>
firewall and SELinux.
<br>
<p>&nbsp;
<br>
<p>We recently made the following updates:
<br>
<p>&nbsp;
<br>
<p>OS:         CentOS 7.2
<br>
<p>IMB:      4.1
<br>
<p>OpenMPI: 1.10.2
<br>
<p>&nbsp;
<br>
<p>When we tried to execute the above mpirun command, we got a TCP Broken Pipe
<br>
error. There was no IP assignment conflict and eventually, we narrowed down
<br>
the problem to the firewall. Disabling the firewalld daemon allows the
<br>
command to run to completion. We would prefer not to disable the daemon as
<br>
our servers may sometimes be connected to the rest of our subnet.
<br>
<p>&nbsp;
<br>
<p>Are there other options such as perhaps specifying a port (I am guessing, so
<br>
specific instructions will be greatly appreciated).
<br>
<p>&nbsp;
<br>
<p>I thank you.
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29144.php">dpchoudh .: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29142.php">Ilias Miroslav: "[OMPI users] 'AINT' undeclared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29144.php">dpchoudh .: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29144.php">dpchoudh .: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29150.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
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
