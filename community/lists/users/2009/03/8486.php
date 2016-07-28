<?
$subject_val = "[OMPI users] mpirun hangs when launching job on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 15:16:57 2009" -->
<!-- isoreceived="20090317191657" -->
<!-- sent="Tue, 17 Mar 2009 15:16:53 -0400 (EDT)" -->
<!-- isosent="20090317191653" -->
<!-- name="Ron Babich" -->
<!-- email="rbabich_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hangs when launching job on remote node" -->
<!-- id="Pine.LNX.4.64.0903171514170.23901_at_buphy.bu.edu" -->
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
<strong>Subject:</strong> [OMPI users] mpirun hangs when launching job on remote node<br>
<strong>From:</strong> Ron Babich (<em>rbabich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 15:16:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8487.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8485.php">Ethan Mallove: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8487.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Reply:</strong> <a href="8487.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everyone,
<br>
<p>I'm having a very basic problem getting an MPI job to run on multiple nodes. 
<br>
My setup consists of two identically configured nodes, called node01 and 
<br>
node02, connected via ethernet and infiniband.  They are running CentOS 5.2 and 
<br>
the bundled OMPI, version 1.2.5.  I've attached the output of &quot;ompi_info 
<br>
--all&quot;, which is the same for both nodes.
<br>
<p>The problem is that if I run any of the following (on node01), mpirun simply 
<br>
hangs:
<br>
<p>mpirun -np 2 -host node01,node02 uname
<br>
mpirun -host node02 uname
<br>
mpirun -host node02 -mca btl tcp,self uname
<br>
mpirun -host node02 -mca btl tcp,self,^openib uname
<br>
<p>Of course, before running &quot;uname&quot; as a test, I had been trying out a simple MPI 
<br>
code with the same result.  At this point, to keep things simple, I'm not too 
<br>
worried about getting the infiniband working.  I even went so far as to unload 
<br>
the infiniband kernel modules (via &quot;/etc/init.d/openibd stop&quot; on both nodes) to 
<br>
make sure OMPI was using ethernet only.
<br>
<p>As a sanity check, each of the following works fine:
<br>
<p>node01:~ % mpirun uname
<br>
Linux
<br>
node01:~ % mpirun -np 2 uname
<br>
Linux
<br>
Linux
<br>
node01:~ % ssh node02 uname
<br>
Linux
<br>
node01:~ % ssh node02 mpirun -np 2 uname
<br>
Linux
<br>
Linux
<br>
node01:~ % ssh node02 echo \$PATH
<br>
/usr/lib64/openmpi/1.2.5-gcc/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/lib64/openmpi/1.2.5-gcc/bin:/home/rbabich/bin:.
<br>
node01:~ % ssh node02 echo \$LD_LIBRARY_PATH
<br>
/usr/lib64/openmpi/1.2.5-gcc/lib:/usr/local/cuda/lib
<br>
<p>Both $PATH and $LD_LIBRARY_PATH seem to be set correctly.  There is no firewall 
<br>
running on either of the nodes, and everything I've said holds true if I 
<br>
reverse the roles of node01 and node02.  In particular, I can ssh both ways. 
<br>
The local network is specified with a simple /etc/hosts:
<br>
<p>127.0.0.1	localhost.localdomain	localhost
<br>
: : 1	localhost6.localdomain6	localhost6
<br>
<p>192.168.0.1	frontend
<br>
192.168.0.101	node01
<br>
192.168.0.102	node02
<br>
<p>When I try any of the above mpirun commands, orted on node02 seems to start 
<br>
successfully, but nothing happens.  For example, if I run the following on 
<br>
node01:
<br>
<p>node01:~  % mpirun -host node02 uname
<br>
<p>it hangs, and on node02 I get:
<br>
<p>node02:~ % ps aux | grep orted
<br>
rbabich   7741  0.0  0.0  75656  1868 ?        Ss   14:53   0:00 
<br>
/usr/lib64/openmpi/1.2.5-gcc/bin/orted --bootproxy 1 --name 0.0.1 --num_procs 2 
<br>
--vpid_start 0 --nodename node02 --universe 
<br>
rbabich_at_node01:default-universe-8105 --nsreplica 
<br>
0.0.0;tcp://192.168.0.101:52342 --gprreplica 0.0.0;tcp://192.168.0.101:52342
<br>
<p>Any ideas?
<br>
<p>Thanks,
<br>
Ron
<br>

<br><hr>
<ul>
<li>APPLICATION/X-GZIP attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8486/ompi_info-all.gz">ompi_info-all.gz</a>
</ul>
<!-- attachment="ompi_info-all.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8487.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8485.php">Ethan Mallove: "Re: [OMPI users] compile crash with pathscale and openmpi-1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8487.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Reply:</strong> <a href="8487.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
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
