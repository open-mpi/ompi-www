<?
$subject_val = "[OMPI users] Execution in multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 14:27:55 2008" -->
<!-- isoreceived="20080929182755" -->
<!-- sent="Mon, 29 Sep 2008 20:30:45 +0200" -->
<!-- isosent="20080929183045" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="[OMPI users] Execution in multicore machines" -->
<!-- id="48E11ED5.2060808_at_aomail.uab.es" -->
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
<strong>Subject:</strong> [OMPI users] Execution in multicore machines<br>
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 14:30:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6771.php">Jed Brown: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Previous message:</strong> <a href="6769.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6771.php">Jed Brown: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Reply:</strong> <a href="6771.php">Jed Brown: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Reply:</strong> <a href="6773.php">Fabian Hänsel: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Reply:</strong> <a href="6796.php">Jeff Squyres: "Re: [OMPI users] Execution in multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I&#180;m doing some probes in a multi core (8 cores per node) machine with 
<br>
NAS benchmarks. Something that I consider strange is occurring...
<br>
<p>I&#180;m using only one NIC and paffinity:
<br>
./bin/mpirun
<br>
&nbsp;&nbsp;-n 8
<br>
&nbsp;&nbsp;--hostfile ./hostfile
<br>
&nbsp;&nbsp;--mca mpi_paffinity_alone 1
<br>
&nbsp;&nbsp;--mca btl_tcp_if_include eth1
<br>
&nbsp;&nbsp;--loadbalance
<br>
&nbsp;&nbsp;./codes/nas/NPB3.3/NPB3.3-MPI/bin/lu.C.8
<br>
<p>I have sufficient memory to run this application in only one node, but:
<br>
<p>1) If I use one node (8 cores) the &quot;user&quot; % is around 100% per core. The 
<br>
execution time is around 430 seconds.
<br>
<p>2) If I use 2 nodes (4 cores in each node) the &quot;user&quot; % is around 95% 
<br>
per core and the &quot;sys&quot; % is 5%. The execution time is around 220 seconds.
<br>
<p>3) If I use 4 nodes (1 cores in each node) the &quot;user&quot; % is around %85 
<br>
per core and the &quot;sys&quot; % is 15%. The execution time is around 200 seconds.
<br>
<p>Well... the questions are:
<br>
<p>A) The execution time in case &quot;1&quot; should be smaller (only sm 
<br>
communication, no?) than case &quot;2&quot; and &quot;3&quot;, no? Cache problems?
<br>
<p>B) Why the &quot;sys&quot; time while using communication inter nodes? NIC driver? 
<br>
Why this time increase when I balance the load across the nodes?
<br>
<p>Thanks,
<br>
<pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6771.php">Jed Brown: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Previous message:</strong> <a href="6769.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6771.php">Jed Brown: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Reply:</strong> <a href="6771.php">Jed Brown: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Reply:</strong> <a href="6773.php">Fabian Hänsel: "Re: [OMPI users] Execution in multicore machines"</a>
<li><strong>Reply:</strong> <a href="6796.php">Jeff Squyres: "Re: [OMPI users] Execution in multicore machines"</a>
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
