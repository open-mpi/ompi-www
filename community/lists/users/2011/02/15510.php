<?
$subject_val = "[OMPI users] Centos Open MPI with nfs problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  4 17:47:09 2011" -->
<!-- isoreceived="20110204224709" -->
<!-- sent="Fri, 4 Feb 2011 17:47:05 -0500" -->
<!-- isosent="20110204224705" -->
<!-- name="Kristian Medri" -->
<!-- email="kmedri_at_[hidden]" -->
<!-- subject="[OMPI users] Centos Open MPI with nfs problem" -->
<!-- id="000601cbc4bd$7246d9a0$56d48ce0$_at_carleton.ca" -->
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
<strong>Subject:</strong> [OMPI users] Centos Open MPI with nfs problem<br>
<strong>From:</strong> Kristian Medri (<em>kmedri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-04 17:47:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15511.php">Massimo Cafaro: "[OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>Previous message:</strong> <a href="15509.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As long as the processes are on a single workstation I am having success.
<br>
Running processes across several workstation works as long as there is no
<br>
output to a file. When there is output to a file the CPUs seem to stall at
<br>
100% and provide the error:
<br>
<p>[machine.1.com][[37707,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_com
<br>
plete_connect] connect() to 192.168.122.1 failed: Connection
<br>
refused (111)
<br>
<p>With exact machine configuration details, commands, and output at:
<br>
<p><a href="http://www.doe.carleton.ca/~kmedri/research/centosmeepinstall.html">http://www.doe.carleton.ca/~kmedri/research/centosmeepinstall.html</a> 
<br>
<p>Any hints on what to look for to get the secondary machines to behave?
<br>
<p>I can provide additional details such as responses to 'rpcinfo -p', 'service
<br>
___ status' should the above link not be clear enough.
<br>
<p>Sincere thanks!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15511.php">Massimo Cafaro: "[OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>Previous message:</strong> <a href="15509.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
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
