<?
$subject_val = "[OMPI users] pinning processes by default";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 09:19:11 2014" -->
<!-- isoreceived="20140523131911" -->
<!-- sent="Fri, 23 May 2014 14:19:08 +0100" -->
<!-- isosent="20140523131908" -->
<!-- name="Albert Solernou" -->
<!-- email="albert.solernou_at_[hidden]" -->
<!-- subject="[OMPI users] pinning processes by default" -->
<!-- id="537F4ACC.2040705_at_oerc.ox.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] pinning processes by default<br>
<strong>From:</strong> Albert Solernou (<em>albert.solernou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 09:19:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24458.php">Brock Palen: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Previous message:</strong> <a href="24456.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "[OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24458.php">Brock Palen: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Reply:</strong> <a href="24458.php">Brock Palen: "Re: [OMPI users] pinning processes by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
after compiling and installing OpenMPI 1.8.1, I find that OpenMPI is 
<br>
pinning processes onto cores. Although this may be
<br>
desirable on some cases, it is a complete disaster when runnning hybrid 
<br>
OpenMP-MPI applications. Therefore, I want to disable this behaviour, 
<br>
but don't know how.
<br>
<p>I configured OpenMPI with:
<br>
&nbsp;&nbsp;./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=$OPENMPI_HOME \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-psm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=/system/software/arcus/lib/PBS/11.3.0.121723 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple
<br>
<p>and:
<br>
&nbsp;&nbsp;ompi_info | grep paffinity
<br>
does not report anything. However,
<br>
&nbsp;&nbsp;mpirun -np 2 --report-bindings ./wrk
<br>
reports bindings:
<br>
&nbsp;&nbsp;[login3:04574] MCW rank 1 bound to socket 0[core 1[hwt 0-1]]: 
<br>
[../BB/../../../../../..][../../../../../../../..]
<br>
&nbsp;&nbsp;[login3:04574] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: 
<br>
[BB/../../../../../../..][../../../../../../../..]
<br>
but they cannot be disabled as:
<br>
&nbsp;&nbsp;mpirun -np 2 --bind-to-none ./wrk
<br>
returns:
<br>
&nbsp;&nbsp;mpirun: Error: unknown option &quot;--bind-to-none&quot;
<br>
<p>Any idea on what went wrong?
<br>
<p>Best,
<br>
Albert
<br>
<p><pre>
-- 
---------------------------------
   Dr. Albert Solernou
   Research Associate
   Oxford Supercomputing Centre,
   University of Oxford
   Tel: +44 (0)1865 610631
---------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24458.php">Brock Palen: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Previous message:</strong> <a href="24456.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "[OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24458.php">Brock Palen: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Reply:</strong> <a href="24458.php">Brock Palen: "Re: [OMPI users] pinning processes by default"</a>
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
