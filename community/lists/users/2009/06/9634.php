<?
$subject_val = "[OMPI users] mpirun fails on the host";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 17:49:36 2009" -->
<!-- isoreceived="20090618214936" -->
<!-- sent="Thu, 18 Jun 2009 23:49:27 +0200" -->
<!-- isosent="20090618214927" -->
<!-- name="Honest Guvnor" -->
<!-- email="honestguvnor_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun fails on the host" -->
<!-- id="c3fd201b0906181449u26c5ee13mf3821c3b6580c357_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun fails on the host<br>
<strong>From:</strong> Honest Guvnor (<em>honestguvnor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 17:49:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9635.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9633.php">Jeff Squyres: "Re: [OMPI users] Is there a interrupt-base receiving mode implementedin OPENMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9636.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Reply:</strong> <a href="9636.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI 1.2.7, ethernet, Centos 5.3 i386 fresh install on host and nodes.
<br>
<p>Despite ssh and pdsh working, mpirun hangs when launching a program
<br>
from the host to a node:
<br>
<p>[cluster_at_hankel ~]$ ssh n06 hostname
<br>
n06
<br>
[cluster_at_hankel ~]$ pdsh -w n06 hostname
<br>
n06: n06
<br>
[cluster_at_hankel ~]$ mpirun -np 1 --host n06 hostname
<br>
[HANGS]
<br>
<p>However, mpirun works fine in reverse:
<br>
<p>[cluster_at_n06 ~]$ mpirun -np 1 --host hankel date
<br>
Thu Jun 18 22:53:27 CEST 2009
<br>
<p>and from node to node. Paths to bin and lib seem OK:
<br>
<p>[cluster_at_hankel ~]$ printenv PATH
<br>
/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/lib/openmpi/1.2.7-gcc/bin:/home/cluster/bin
<br>
[cluster_at_hankel ~]$ printenv LD_LIBRARY_PATH
<br>
:/usr/lib/openmpi/1.2.7-gcc/lib
<br>
[cluster_at_hankel ~]$ ssh n06 printenv PATH
<br>
/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/lib/openmpi/1.2.7-gcc/bin
<br>
[cluster_at_hankel ~]$ ssh n06 printenv LD_LIBRARY_PATH
<br>
:/usr/lib/openmpi/1.2.7-gcc/lib
<br>
<p>We are new to openmpi but checked a few mca parameters and turned on a
<br>
diagnostic flag or two but without coming up with much. The nodes do
<br>
not have access to the hosts external network and we half convinced
<br>
ourselves this was the problem because of mentions in the output with
<br>
the -d flag but:
<br>
<p>[cluster_at_hankel ~]$ mpirun --mca btl tcp,self --mca btl_tcp_if_exclude
<br>
lo,eth0 --mca oob_tcp_if_exclude lo,eth0 -np 1 --host n06 hostname
<br>
[STILL HANGS]
<br>
<p>where eth0 is the external network.
<br>
<p>Suggestions gratefully received on how we can get openmpi to report
<br>
what has failed or where to poke and prod further?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9635.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>Previous message:</strong> <a href="9633.php">Jeff Squyres: "Re: [OMPI users] Is there a interrupt-base receiving mode implementedin OPENMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9636.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Reply:</strong> <a href="9636.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
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
