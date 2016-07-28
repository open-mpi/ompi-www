<?
$subject_val = "[OMPI devel] #1506";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 11:18:56 2008" -->
<!-- isoreceived="20080923151856" -->
<!-- sent="Tue, 23 Sep 2008 17:18:52 +0200" -->
<!-- isosent="20080923151852" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] #1506" -->
<!-- id="453d39990809230818q1234ebaqa4942437fa95aa7c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] #1506<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-23 11:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4694.php">Timothy Kaiser: "Re: [OMPI devel] proper way to shut down orted"</a>
<li><strong>Previous message:</strong> <a href="4692.php">Richard Graham: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>It seems like some data corruption in Reduce_scatter function
<br>
<p>I discovered it when added -DCHECK to IMB benchmark, and it seemed to be
<br>
there for ages.
<br>
<p>it runs with voltaire MPI, but failes with OMPI. you will get a seqv with
<br>
IMB3.1 and error with IMB3.0
<br>
<p>host#VER=TRUNK ; /home/USERS/lenny/OMPI_ORTE_${VER}/bin/mpirun -np 2 -H
<br>
witch8 /home/BENCHMARKS/PALLAS/IMB_3.0v/src/IMB-MPI1_${VER} Reduce_scatter
<br>
<p>#---------------------------------------------------
<br>
# Intel (R) MPI Benchmark Suite V3.0v modified by Voltaire, MPI-1 part
<br>
#---------------------------------------------------
<br>
# Date : Tue Sep 23 18:05:35 2008
<br>
# Machine : x86_64
<br>
# System : Linux
<br>
# Release : 2.6.16.46-0.12-smp
<br>
# Version : #1 SMP Thu May 17 14:00:09 UTC 2007
<br>
# MPI Version : 2.0
<br>
# MPI Thread Environment: MPI_THREAD_SINGLE
<br>
<p>#
<br>
# Minimum message length in bytes: 0
<br>
# Maximum message length in bytes: 67108864
<br>
#
<br>
# MPI_Datatype : MPI_BYTE
<br>
# MPI_Datatype for reductions : MPI_FLOAT
<br>
# MPI_Op : MPI_SUM
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># Reduce_scatter
<br>
<p>#-----------------------------------------------------------------------------
<br>
# Benchmarking Reduce_scatter
<br>
# #processes = 2
<br>
#-----------------------------------------------------------------------------
<br>
#Benchmarking #procs #bytes #repetitions t_min[usec] t_max[usec] t_avg[usec]
<br>
defects
<br>
Reduce_scatter 2 0 1000 0.05 0.05 0.05 0.00
<br>
0: Error Reduce_scatter, size = 4, sample #0
<br>
Process 0: Got invalid buffer:
<br>
Buffer entry: 817291591680.000000
<br>
pos: 0
<br>
Process 0: Expected buffer:
<br>
Buffer entry: 0.000000
<br>
Reduce_scatter 2 4 1000 0.98 1.06 1.02 1.00
<br>
Application error code 1 occurred
<br>
[witch8:10190] MPI_ABORT invoked on rank 0 in communicator MPI_COMM_WORLD
<br>
with errorcode 17
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 10190 on
<br>
node witch8 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4693/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4694.php">Timothy Kaiser: "Re: [OMPI devel] proper way to shut down orted"</a>
<li><strong>Previous message:</strong> <a href="4692.php">Richard Graham: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r19600"</a>
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
