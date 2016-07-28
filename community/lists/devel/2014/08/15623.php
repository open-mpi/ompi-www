<?
$subject_val = "[OMPI devel] trunk hang when nodes have similar but private network";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 01:41:32 2014" -->
<!-- isoreceived="20140813054132" -->
<!-- sent="Wed, 13 Aug 2014 14:41:31 +0900" -->
<!-- isosent="20140813054131" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk hang when nodes have similar but private network" -->
<!-- id="53EAFA8B.7080603_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] trunk hang when nodes have similar but private network<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 01:41:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15624.php">Christopher Samuel: "[OMPI devel] Grammar error in git master: 'You job will now abort'"</a>
<li><strong>Previous message:</strong> <a href="15622.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15628.php">Ralph Castain: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Reply:</strong> <a href="15628.php">Ralph Castain: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Reply:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>i noticed mpirun (trunk) hangs when running any mpi program on two nodes
<br>
*and* each node has a private network with the same ip
<br>
(in my case, each node has a private network to a MIC)
<br>
<p>in order to reproduce the problem, you can simply run (as root) on the
<br>
two compute nodes
<br>
brctl addbr br0
<br>
ifconfig br0 192.168.255.1 netmask 255.255.255.0
<br>
<p>mpirun will hang
<br>
<p>a workaroung is to add --mca btl_tcp_if_include eth0
<br>
<p>v1.8 does not hang in this case
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15624.php">Christopher Samuel: "[OMPI devel] Grammar error in git master: 'You job will now abort'"</a>
<li><strong>Previous message:</strong> <a href="15622.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15628.php">Ralph Castain: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Reply:</strong> <a href="15628.php">Ralph Castain: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Reply:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
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
