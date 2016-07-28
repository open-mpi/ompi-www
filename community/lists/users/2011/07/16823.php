<?
$subject_val = "[OMPI users] Running MPI jobs from external Hard Disk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 15:45:05 2011" -->
<!-- isoreceived="20110705194505" -->
<!-- sent="Tue, 5 Jul 2011 19:44:52 +0000" -->
<!-- isosent="20110705194452" -->
<!-- name="Chaudhari, Mangesh I" -->
<!-- email="mchaudha_at_[hidden]" -->
<!-- subject="[OMPI users] Running MPI jobs from external Hard Disk" -->
<!-- id="09FD9153-564B-4BB8-B3F1-55FFE7C1CEF5_at_wave.tulane.edu" -->
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
<strong>Subject:</strong> [OMPI users] Running MPI jobs from external Hard Disk<br>
<strong>From:</strong> Chaudhari, Mangesh I (<em>mchaudha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 15:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16824.php">Robert Sacker: "[OMPI users] mpi &amp; mac"</a>
<li><strong>Previous message:</strong> <a href="16822.php">Rodrigo Oliveira: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16825.php">Ralph Castain: "Re: [OMPI users] Running MPI jobs from external Hard Disk"</a>
<li><strong>Reply:</strong> <a href="16825.php">Ralph Castain: "Re: [OMPI users] Running MPI jobs from external Hard Disk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi all, 
<br>
<p>I m trying to run a job from external hard disk and its giving me errors my output log is as follows 
<br>
<p><p>Currently Loaded Modulefiles:
<br>
&nbsp;&nbsp;1) modules                          4) mpich/mpich-mx-1.2.7..7-gcc.64
<br>
&nbsp;&nbsp;2) tools/torque-maui                5) tools/amber10-mx
<br>
&nbsp;&nbsp;3) tools/mx
<br>
Host: node10
<br>
Date: Tue Jul 5 15:17:32 EDT 2011
<br>
Dir: /home/mic
<br>
This job has allocated 8 nodes
<br>
mnode10 mnode10 mnode10 mnode10 mnode10 mnode10 mnode10 mnode10
<br>
[0] MPI Abort by user Aborting program !
<br>
<p>&nbsp;&nbsp;Unit    5 Error on OPEN: inp0                                                               
<br>
mpiexec: Warning: accept_abort_conn: MPI_Abort from IP 10.11.1.10, killing all.
<br>
mpiexec: Warning: tasks 0-7 died with signal 15 (Terminated).
<br>
mpiexec: Warning: accept_abort_conn: MPI_Abort from IP 10.11.1.10, killing all.
<br>
<p>&nbsp;&nbsp;Unit    5 Error on OPEN: inp1                                                               
<br>
[0] MPI Abort by user Aborting program !
<br>
mpiexec: Warning: tasks 0-7 died with signal 15 (Terminated).
<br>
mpiexec: Warning: accept_abort_conn: MPI_Abort from IP 10.11.1.10, killing all.
<br>
[0] MPI Abort by user Aborting program !
<br>
<p>&nbsp;&nbsp;Unit    5 Error on OPEN: inp2                                                               
<br>
mpiexec: Warning: tasks 0-7 died with signal 15 (Terminated).
<br>
<p>&nbsp;&nbsp;Unit    5 Error on OPEN: inp3                                                               
<br>
[0] MPI Abort by user Aborting program !
<br>
mpiexec: Warning: accept_abort_conn: MPI_Abort from IP 10.11.1.10, killing all.
<br>
mpiexec: Warning: tasks 0-7 died with signal 15 (Terminated).
<br>
<p><p><p>-----------------------------------------------
<br>
<p>my script file is as follows : 
<br>
<p>### Number of nodes and processors per node.
<br>
#PBS -l nodes=1:ppn=8
<br>
#PBS -j oe
<br>
#PBS -N GAFF_R60
<br>
<p>#AMBERHOME=&quot;/usr/local/amber10-mx&quot;
<br>
<p>#Set up environment modules
<br>
. /usr/local/Modules/3.2.6/init/bash
<br>
module purge
<br>
module initclear
<br>
module load tools/amber10-mx
<br>
module initadd tools/amber10-mx
<br>
<p>#module output
<br>
module list
<br>
<p>#Job output header
<br>
PBS_O_WORKDIR=`pwd`
<br>
cd $PBS_O_WORKDIR
<br>
PBS_O_HOME=/home/bk3
<br>
echo Host: $HOSTNAME
<br>
echo Date: $(date)
<br>
echo Dir: $PWD
<br>
<p>#calculate number of CPUs
<br>
NPROCS=`wc -l &lt; $PBS_NODEFILE`
<br>
echo This job has allocated $NPROCS nodes
<br>
echo `cat $PBS_NODEFILE`
<br>
<p>#set DO_PARALLEL
<br>
export DO_PARALLEL=&quot;mpiexec&quot;
<br>
#export DO_PARALLEL_1=&quot;mpirun -np 1 -machinefile $PBS_NODEFILE&quot;
<br>
<p>#run amber10 sander.MPI 
<br>
<p>$DO_PARALLEL pmemd -O -i inp0 -p prmtop -c inpcrd  -o mdout0           -r restrt0 -e mden0 -inf mdinfo0
<br>
$DO_PARALLEL pmemd -O -i inp1 -p prmtop -c restrt0 -o mdout1 -x mdcrd1 -r restrt1 -e mden1 -inf mdinfo1
<br>
#
<br>
$DO_PARALLEL pmemd -O -i inp2 -p prmtop -c restrt1 -o mdout2 -x mdcrd2 -r restrt2 -e mden2 -inf mdinfo2
<br>
#
<br>
$DO_PARALLEL pmemd -O -i inp3 -p prmtop -c restrt2 -o mdout3 -x mdcrd3 -r restrt3 -e mden3 -inf mdinfo3 -v mdvel3
<br>
<p><p>------------------------------------------------
<br>
<p>I dont know much about MPIs so donot know where exactly the problem is ...
<br>
<p>Thanks in advance ... !!! 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16824.php">Robert Sacker: "[OMPI users] mpi &amp; mac"</a>
<li><strong>Previous message:</strong> <a href="16822.php">Rodrigo Oliveira: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16825.php">Ralph Castain: "Re: [OMPI users] Running MPI jobs from external Hard Disk"</a>
<li><strong>Reply:</strong> <a href="16825.php">Ralph Castain: "Re: [OMPI users] Running MPI jobs from external Hard Disk"</a>
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
