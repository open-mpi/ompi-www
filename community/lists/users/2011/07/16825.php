<?
$subject_val = "Re: [OMPI users] Running MPI jobs from external Hard Disk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 15:50:52 2011" -->
<!-- isoreceived="20110705195052" -->
<!-- sent="Tue, 5 Jul 2011 13:50:45 -0600" -->
<!-- isosent="20110705195045" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running MPI jobs from external Hard Disk" -->
<!-- id="885C0C93-4817-4E2D-801B-D77D4276B62E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="09FD9153-564B-4BB8-B3F1-55FFE7C1CEF5_at_wave.tulane.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running MPI jobs from external Hard Disk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 15:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16826.php">Steve Kargl: "[OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16824.php">Robert Sacker: "[OMPI users] mpi &amp; mac"</a>
<li><strong>In reply to:</strong> <a href="16823.php">Chaudhari, Mangesh I: "[OMPI users] Running MPI jobs from external Hard Disk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see Open MPI in your list of modules - looks to me like you are using MPICH? If so, you should send this to their mailing list.
<br>
<p><p>On Jul 5, 2011, at 1:44 PM, Chaudhari, Mangesh I wrote:
<br>
<p><span class="quotelev1">&gt; hi all, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I m trying to run a job from external hard disk and its giving me errors my output log is as follows 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently Loaded Modulefiles:
</span><br>
<span class="quotelev1">&gt;  1) modules                          4) mpich/mpich-mx-1.2.7..7-gcc.64
</span><br>
<span class="quotelev1">&gt;  2) tools/torque-maui                5) tools/amber10-mx
</span><br>
<span class="quotelev1">&gt;  3) tools/mx
</span><br>
<span class="quotelev1">&gt; Host: node10
</span><br>
<span class="quotelev1">&gt; Date: Tue Jul 5 15:17:32 EDT 2011
</span><br>
<span class="quotelev1">&gt; Dir: /home/mic
</span><br>
<span class="quotelev1">&gt; This job has allocated 8 nodes
</span><br>
<span class="quotelev1">&gt; mnode10 mnode10 mnode10 mnode10 mnode10 mnode10 mnode10 mnode10
</span><br>
<span class="quotelev1">&gt; [0] MPI Abort by user Aborting program !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Unit    5 Error on OPEN: inp0                                                               
</span><br>
<span class="quotelev1">&gt; mpiexec: Warning: accept_abort_conn: MPI_Abort from IP 10.11.1.10, killing all.
</span><br>
<span class="quotelev1">&gt; mpiexec: Warning: tasks 0-7 died with signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; mpiexec: Warning: accept_abort_conn: MPI_Abort from IP 10.11.1.10, killing all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Unit    5 Error on OPEN: inp1                                                               
</span><br>
<span class="quotelev1">&gt; [0] MPI Abort by user Aborting program !
</span><br>
<span class="quotelev1">&gt; mpiexec: Warning: tasks 0-7 died with signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; mpiexec: Warning: accept_abort_conn: MPI_Abort from IP 10.11.1.10, killing all.
</span><br>
<span class="quotelev1">&gt; [0] MPI Abort by user Aborting program !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Unit    5 Error on OPEN: inp2                                                               
</span><br>
<span class="quotelev1">&gt; mpiexec: Warning: tasks 0-7 died with signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Unit    5 Error on OPEN: inp3                                                               
</span><br>
<span class="quotelev1">&gt; [0] MPI Abort by user Aborting program !
</span><br>
<span class="quotelev1">&gt; mpiexec: Warning: accept_abort_conn: MPI_Abort from IP 10.11.1.10, killing all.
</span><br>
<span class="quotelev1">&gt; mpiexec: Warning: tasks 0-7 died with signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my script file is as follows : 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ### Number of nodes and processors per node.
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=8
</span><br>
<span class="quotelev1">&gt; #PBS -j oe
</span><br>
<span class="quotelev1">&gt; #PBS -N GAFF_R60
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #AMBERHOME=&quot;/usr/local/amber10-mx&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #Set up environment modules
</span><br>
<span class="quotelev1">&gt; . /usr/local/Modules/3.2.6/init/bash
</span><br>
<span class="quotelev1">&gt; module purge
</span><br>
<span class="quotelev1">&gt; module initclear
</span><br>
<span class="quotelev1">&gt; module load tools/amber10-mx
</span><br>
<span class="quotelev1">&gt; module initadd tools/amber10-mx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #module output
</span><br>
<span class="quotelev1">&gt; module list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #Job output header
</span><br>
<span class="quotelev1">&gt; PBS_O_WORKDIR=`pwd`
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; PBS_O_HOME=/home/bk3
</span><br>
<span class="quotelev1">&gt; echo Host: $HOSTNAME
</span><br>
<span class="quotelev1">&gt; echo Date: $(date)
</span><br>
<span class="quotelev1">&gt; echo Dir: $PWD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #calculate number of CPUs
</span><br>
<span class="quotelev1">&gt; NPROCS=`wc -l &lt; $PBS_NODEFILE`
</span><br>
<span class="quotelev1">&gt; echo This job has allocated $NPROCS nodes
</span><br>
<span class="quotelev1">&gt; echo `cat $PBS_NODEFILE`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #set DO_PARALLEL
</span><br>
<span class="quotelev1">&gt; export DO_PARALLEL=&quot;mpiexec&quot;
</span><br>
<span class="quotelev1">&gt; #export DO_PARALLEL_1=&quot;mpirun -np 1 -machinefile $PBS_NODEFILE&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #run amber10 sander.MPI 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $DO_PARALLEL pmemd -O -i inp0 -p prmtop -c inpcrd  -o mdout0           -r restrt0 -e mden0 -inf mdinfo0
</span><br>
<span class="quotelev1">&gt; $DO_PARALLEL pmemd -O -i inp1 -p prmtop -c restrt0 -o mdout1 -x mdcrd1 -r restrt1 -e mden1 -inf mdinfo1
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; $DO_PARALLEL pmemd -O -i inp2 -p prmtop -c restrt1 -o mdout2 -x mdcrd2 -r restrt2 -e mden2 -inf mdinfo2
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; $DO_PARALLEL pmemd -O -i inp3 -p prmtop -c restrt2 -o mdout3 -x mdcrd3 -r restrt3 -e mden3 -inf mdinfo3 -v mdvel3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I dont know much about MPIs so donot know where exactly the problem is ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance ... !!! 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16826.php">Steve Kargl: "[OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16824.php">Robert Sacker: "[OMPI users] mpi &amp; mac"</a>
<li><strong>In reply to:</strong> <a href="16823.php">Chaudhari, Mangesh I: "[OMPI users] Running MPI jobs from external Hard Disk"</a>
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
