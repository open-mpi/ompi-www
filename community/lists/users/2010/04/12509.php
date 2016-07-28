<?
$subject_val = "[OMPI users] mpiblast only run in one node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 02:07:12 2010" -->
<!-- isoreceived="20100401060712" -->
<!-- sent="Thu, 1 Apr 2010 14:07:08 +0800" -->
<!-- isosent="20100401060708" -->
<!-- name="longbow leo" -->
<!-- email="longbow0_at_[hidden]" -->
<!-- subject="[OMPI users] mpiblast only run in one node" -->
<!-- id="r2j148acf931003312307kd1e000bewfb3642a0eb8a3dfd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpiblast only run in one node<br>
<strong>From:</strong> longbow leo (<em>longbow0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-01 02:07:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12510.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12508.php">Jeff Squyres: "Re: [OMPI users] openmpi.ld.conf file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>Maybe reply:</strong> <a href="12511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpiblast only run in one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've installed Torque/Maui, Open MPI 1.4.1 and mpiBlast 1.6.0-beta1 in a
<br>
linux Beowulf culster with 15 nodes (node1~15).
<br>
<p>Open MPI, mpiBlast were installed and my home directory lies in a directory
<br>
&quot;/data&quot; which was shared by all nodes.
<br>
<p>Open Mpi was compiled with &quot;--with-tm&quot; to support Torque, and mpiBlast was
<br>
compiled with &quot;--with-mpi&quot; to the directory where Open MPI installed.
<br>
<p>When I run mpiBlast by mpirun in command line, like
<br>
<p>node1 $ /data/open-mpi/bin/mpirun -np 34 /data/mpiblast/bin/mpiblast -p
<br>
blastp -d nr -i test.faa -o test.out
<br>
<p>I noticed all 34 mpiBlast processes run on node1 only.
<br>
<p>This would not change if I submit job to Torque.
<br>
<p>I've searched the mailing list archives but it seems won't help.
<br>
<p>How to resolve this problem?
<br>
<p>Any suggestion will be appreciated!
<br>
<p><p>HZ Liu
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12509/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12510.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12508.php">Jeff Squyres: "Re: [OMPI users] openmpi.ld.conf file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>Maybe reply:</strong> <a href="12511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpiblast only run in one node"</a>
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
