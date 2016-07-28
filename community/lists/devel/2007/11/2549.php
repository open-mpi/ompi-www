<?
$subject_val = "[OMPI devel] Environment forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 16:45:59 2007" -->
<!-- isoreceived="20071105214559" -->
<!-- sent="Mon, 5 Nov 2007 17:45:21 -0400" -->
<!-- isosent="20071105214521" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] Environment forwarding" -->
<!-- id="200711051645.22572.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 16:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2548.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>After talking with Torsten today I found something weird. When using the SLURM 
<br>
pls we seem to forward a user's environment, but when using the rsh pls we do 
<br>
not.
<br>
<p>I.e.:
<br>
[tprins_at_odin ~]$ mpirun -np 1 printenv |grep foo
<br>
[tprins_at_odin ~]$ export foo=bar
<br>
[tprins_at_odin ~]$ mpirun -np 1 printenv |grep foo
<br>
foo=bar
<br>
[tprins_at_odin ~]$ mpirun -np 1 -mca pls rsh printenv |grep foo
<br>
<p>So my question is which is the expected behavior? 
<br>
<p>I don't think we can do anything about SLURM automatically forwarding the 
<br>
environment, but I think there should be a way to make rsh forward the 
<br>
environment. Perhaps add a flag to mpirun to do this?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2548.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16644"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
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
