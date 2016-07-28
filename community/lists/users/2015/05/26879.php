<?
$subject_val = "[OMPI users] Openmpi 1.8.5 on Linux with threading support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 07:05:09 2015" -->
<!-- isoreceived="20150519110509" -->
<!-- sent="Tue, 19 May 2015 13:04:47 +0200" -->
<!-- isosent="20150519110447" -->
<!-- name="Nilo Menezes" -->
<!-- email="nilo_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi 1.8.5 on Linux with threading support" -->
<!-- id="555B18CF.8050901_at_nilo.pro.br" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi 1.8.5 on Linux with threading support<br>
<strong>From:</strong> Nilo Menezes (<em>nilo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-19 07:04:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26880.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<li><strong>Previous message:</strong> <a href="26878.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26880.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<li><strong>Reply:</strong> <a href="26880.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to run openmpi with multithread support enabled.
<br>
<p>I'm getting this error messages before init finishes:
<br>
[node011:61627] PSM returned unhandled/unknown connect error: Operation 
<br>
timed out
<br>
[node011:61627] PSM EP connect error (unknown connect error):
<br>
<p>*** An error occurred in MPI_Init_thread
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[node005:51948] Local abort before MPI_INIT completed successfully; not 
<br>
able to aggregate error messages, and not able to guarantee that all 
<br>
other processes were killed!
<br>
*** An error occurred in MPI_Init_thread
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[node039:57062] Local abort before MPI_INIT completed successfully; not 
<br>
able to aggregate error messages, and not able to guarantee that all 
<br>
other processes were killed!
<br>
*** An error occurred in MPI_Init_thread
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[node012:64036] Local abort before MPI_INIT completed successfully; not 
<br>
able to aggregate error messages, and not able to guarantee that all 
<br>
other processes were killed!
<br>
*** An error occurred in MPI_Init_thread
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[node008:14098] Local abort before MPI_INIT completed successfully; not 
<br>
able to aggregate error messages, and not able to guarantee that all 
<br>
other processes were killed!
<br>
*** An error occurred in MPI_Init_thread
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[node011:61627] Local abort before MPI_INIT completed successfully; not 
<br>
able to aggregate error messages, and not able to guarantee that all 
<br>
other processes were killed!
<br>
[node005:51887] 1 more process has sent help message help-mpi-runtime / 
<br>
mpi_init:startup:internal-failure
<br>
[node005:51887] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see 
<br>
all help / error messages
<br>
<p>The library was configured with:
<br>
./configure \
<br>
--prefix=/home/opt \
<br>
--enable-static \
<br>
--enable-mpi-thread-multiple \
<br>
--with-threads
<br>
<p>gcc 4.8.2
<br>
<p>On Linux:
<br>
Linux node001 2.6.32-279.14.1.el6.x86_64 #1 SMP Mon Oct 15 13:44:51 EDT 
<br>
2012 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>The job was started with:
<br>
sbatch --nodes=6 --ntasks=30 --mem=4096  -o result/TOn6t30.txt -e 
<br>
result/TEn6t30.txt job.sh
<br>
<p><p>job.sh contains:
<br>
mpirun --mca btl tcp,self \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca btl_tcp_if_include 172.24.38.0/24 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca oob_tcp_if_include eth0 \
<br>
/home/umons/info/menezes/drsim/build/NameResolution/gameoflife_mpi2 
<br>
--columns=1000 --rows=1000
<br>
<p>I call MPI_INIT with:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int provided;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
<br>
<p>The program is a simple game of life simulation. It runs fine in a 
<br>
single node (with one or many tasks). But fails at random nodes when 
<br>
distributed.
<br>
<p>Any hint may help.
<br>
<p>Best Regards,
<br>
<p>Nilo Menezes
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26880.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<li><strong>Previous message:</strong> <a href="26878.php">Siegmar Gross: "Re: [OMPI users] openmpi-1.8.5: ORTE was unable to start daemons"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26880.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<li><strong>Reply:</strong> <a href="26880.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
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
