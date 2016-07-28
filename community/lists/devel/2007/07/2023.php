<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 18:26:02 2007" -->
<!-- isoreceived="20070726222602" -->
<!-- sent="Thu, 26 Jul 2007 18:22:07 -0400" -->
<!-- isosent="20070726222207" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfiles - yet again" -->
<!-- id="46A91E8F.8040409_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C2CE4979.A377%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-26 18:22:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2024.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15661"</a>
<li><strong>Previous message:</strong> <a href="2022.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2026.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2026.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; mpirun -hostfile big_pool -n 10 -host 1,2,3,4 application : -n 2 -host
</span><br>
<span class="quotelev1">&gt; 99,100 ft_server
</span><br>
<p>This will not work: this is a way to launch MIMD jobs, that share the 
<br>
same COMM_WORLD. Not the way to launch two different applications that 
<br>
interact trough Accept/Connect.
<br>
<p>Direct consequence on simple NAS benchmarks are:
<br>
* if the second command does not use MPI-Init, then the first 
<br>
application locks forever in MPI-Init
<br>
* if both use MPI init, the MPI_Comm_size of the jobs are incorrect.
<br>
<p><p>****
<br>
bouteill_at_dancer:~$ ompi-build/debug/bin/mpirun -prefix 
<br>
/home/bouteill/ompi-build/debug/ -np 4 -host node01,node02,node03,node04 
<br>
NPB3.2-MPI/bin/lu.A.4 : -np 1 -host node01 NPB3.2-MPI/bin/mg.A.1
<br>
<p><p>&nbsp;NAS Parallel Benchmarks 3.2 -- LU Benchmark
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warning: program is running on  5 processors
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but was compiled for   4
<br>
&nbsp;Size:  64x 64x 64
<br>
&nbsp;Iterations: 250
<br>
&nbsp;Number of processes:     5
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2024.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15661"</a>
<li><strong>Previous message:</strong> <a href="2022.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2026.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2026.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
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
