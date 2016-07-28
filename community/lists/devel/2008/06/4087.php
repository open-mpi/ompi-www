<?
$subject_val = "[OMPI devel] Pallas fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 03:20:54 2008" -->
<!-- isoreceived="20080604072054" -->
<!-- sent="Wed, 04 Jun 2008 10:20:39 +0300" -->
<!-- isosent="20080604072039" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="[OMPI devel] Pallas fails" -->
<!-- id="48464247.3050306_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> [OMPI devel] Pallas fails<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 03:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4088.php">Mukesh K Srivastava: "[OMPI devel] GCC extendability to OpenMPI Specification"</a>
<li><strong>Previous message:</strong> <a href="4086.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4122.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Pallas fails"</a>
<li><strong>Reply:</strong> <a href="4122.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Pallas fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Last conf. call Jeff mentioned that he see some collectives failures.
<br>
In my MTT testing I also see that Pallas collectives failed - <a href="http://www.open-mpi.org/mtt/index.php?do_redir=682">http://www.open-mpi.org/mtt/index.php?do_redir=682</a>
<br>
<p><p>&nbsp;Alltoall
<br>
<p>#----------------------------------------------------------------
<br>
# Benchmarking Alltoall 
<br>
# #processes = 20 
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.03         0.05         0.04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000       179.15       179.22       179.18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000       155.96       156.02       155.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000       156.93       156.98       156.95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000       163.63       163.67       163.65
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000       115.04       115.08       115.07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000       123.57       123.62       123.59
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000       129.78       129.82       129.80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000       141.45       141.49       141.48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000       960.11       960.24       960.20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000       900.95       901.11       901.04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000       921.95       922.05       922.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000       862.50       862.72       862.60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000      1044.90      1044.95      1044.92
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000      1458.59      1458.77      1458.69
<br>
*** An error occurred in MPI_Alltoall
<br>
*** on communicator MPI COMMUNICATOR 4 SPLIT FROM 0
<br>
*** An error occurred in MPI_Alltoall
<br>
*** on communicator MPI COMMUNICATOR 4 SPLIT FROM 0
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4088.php">Mukesh K Srivastava: "[OMPI devel] GCC extendability to OpenMPI Specification"</a>
<li><strong>Previous message:</strong> <a href="4086.php">Ralf Wildenhues: "Re: [OMPI devel] parallel make install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4122.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Pallas fails"</a>
<li><strong>Reply:</strong> <a href="4122.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Pallas fails"</a>
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
