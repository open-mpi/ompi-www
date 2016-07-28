<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  2 16:30:42 2006" -->
<!-- isoreceived="20060202213042" -->
<!-- sent="Thu, 02 Feb 2006 13:30:15 -0800" -->
<!-- isosent="20060202213015" -->
<!-- name="Matt Leininger" -->
<!-- email="mlleinin_at_[hidden]" -->
<!-- subject="MPQC and thread safety" -->
<!-- id="1138915815.7824.1031.camel_at_localhost" -->
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
<strong>From:</strong> Matt Leininger (<em>mlleinin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-02 16:30:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0713.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0711.php">David Daniel: "LLNL OpenMP + MPI benchmarks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;As discussed today here are the configure flags for MPQC that we
<br>
typically use to enable MPI+threads.  Curt and I can point folks to
<br>
input decks that either require mpi thread level to be funneled or
<br>
multiple.
<br>
<p>&nbsp;You can download mpqc at www.mpqc.org.
<br>
<p><p>&nbsp;&nbsp;'--prefix=/install/dir'  '--with-build-id=provide-some-buildid-label'
<br>
'--with-cc=/mpicc' '--with-cxx=mpicxx' '--with-f77=mpif77'
<br>
'--enable-debug=opt' '--with-launch=mpirun -np %NPROC% -machinefile %
<br>
NODEFILE% %MPQC% [-o %OUTPUT%] %INPUT%' '--with-default-parallel=mpi'
<br>
'--enable-always-use-mpi'\&quot;  --enable-threads
<br>
<p>&nbsp;The &quot;--enable-debug=opt&quot; provides more debug info if the job dies.
<br>
<p>&nbsp;&quot;--with-launch&quot; provides the default launch command that the mpqcrun
<br>
script can use.  mpqcrun helps set up the environmental variables mpqc
<br>
requires just in case you are running the job through a batch system
<br>
(PBS, Torque, Slurm, etc.)
<br>
<p>&nbsp;&quot;--with-default-parallel=mpi&quot;  sets the default parallelism model to
<br>
mpi.
<br>
<p>&nbsp;&quot;--enable-always-use-mpi&quot; configure mpqc to always use mpi.
<br>
<p>&nbsp;thanks,
<br>
<p>&nbsp;&nbsp;- Matt
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0713.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0711.php">David Daniel: "LLNL OpenMP + MPI benchmarks"</a>
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
