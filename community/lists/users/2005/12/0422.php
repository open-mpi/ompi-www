<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec  6 12:46:43 2005" -->
<!-- isoreceived="20051206174643" -->
<!-- sent="Tue, 6 Dec 2005 10:46:40 -0700" -->
<!-- isosent="20051206174640" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="[O-MPI users] error creating high priority cq for mthca0" -->
<!-- id="20051206174640.GA17042_at_lanl.gov" -->
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
<strong>From:</strong> Daryl W. Grunau (<em>dwg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-06 12:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">Daryl W. Grunau: "[O-MPI users] MCA paffinity_linux warning"</a>
<li><strong>Previous message:</strong> <a href="0421.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0425.php">Tim S. Woodall: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0425.php">Tim S. Woodall: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0426.php">Galen M. Shipman: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Maybe reply:</strong> <a href="0433.php">Daryl W. Grunau: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I'm running OMPI 1.1a1r8378 on 2.6.14 + recent OpenIB stack and getting
<br>
the following runtime error:
<br>
<p>[0,1,0][btl_openib.c:803:mca_btl_openib_module_init] error creating high priority cq for mthca0 errno says Cannot allocate memory
<br>
[0,1,3][btl_openib.c:803:mca_btl_openib_module_init] error creating high priority cq for mthca0 errno says Cannot allocate memory
<br>
[0,1,1][btl_openib.c:803:mca_btl_openib_module_init] error creating high priority cq for mthca0 errno says Cannot allocate memory
<br>
[0,1,2][btl_openib.c:803:mca_btl_openib_module_init] error creating high priority cq for mthca0 errno says Cannot allocate memory
<br>
<p><p>Strange thing is that it works properly when I run as root.  A permissions
<br>
problem on my part?  My devices look like:
<br>
<p>&nbsp;&nbsp;&nbsp;# ls -l /dev/infiniband/*
<br>
&nbsp;&nbsp;&nbsp;crw-------  1 root root 231,  64 Dec  5 17:16 /dev/infiniband/issm0
<br>
&nbsp;&nbsp;&nbsp;crw-------  1 root root 231,  65 Dec  5 17:16 /dev/infiniband/issm1
<br>
&nbsp;&nbsp;&nbsp;crw-------  1 root root 231,   0 Dec  5 17:16 /dev/infiniband/umad0
<br>
&nbsp;&nbsp;&nbsp;crw-------  1 root root 231,   1 Dec  5 17:16 /dev/infiniband/umad1
<br>
&nbsp;&nbsp;&nbsp;crw-rw-rw-  1 root root 231, 192 Dec  5 17:16 /dev/infiniband/uverbs0
<br>
<p>Daryl
<br>
<p><pre>
-- 
			***** Correspondence *****
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0423.php">Daryl W. Grunau: "[O-MPI users] MCA paffinity_linux warning"</a>
<li><strong>Previous message:</strong> <a href="0421.php">Brian Barrett: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0425.php">Tim S. Woodall: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0425.php">Tim S. Woodall: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Reply:</strong> <a href="0426.php">Galen M. Shipman: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>Maybe reply:</strong> <a href="0433.php">Daryl W. Grunau: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
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
