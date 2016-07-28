<?
$subject_val = "[OMPI users] Global Communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 19:10:07 2009" -->
<!-- isoreceived="20090206001007" -->
<!-- sent="Thu, 5 Feb 2009 16:10:02 -0800 (PST)" -->
<!-- isosent="20090206001002" -->
<!-- name="Ted Yu" -->
<!-- email="tedhyu_at_[hidden]" -->
<!-- subject="[OMPI users] Global Communicator" -->
<!-- id="214206.52541.qm_at_web82707.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Global Communicator<br>
<strong>From:</strong> Ted Yu (<em>tedhyu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 19:10:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7979.php">doriankrause: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7977.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7979.php">doriankrause: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7979.php">doriankrause: "Re: [OMPI users] Global Communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to run a job based on openmpi.&#160; For some reason, the program and the global communicator are not in sync and it reads that there is only one processors, whereas, there should be 2 or more.&#160; Any advice on where to look?&#160; Here is my PBS script.&#160; Thanx!
<br>
<p>PBS SCRIPT:
<br>
#!/bin/sh
<br>
### Set the job name
<br>
#PBS -N HH
<br>
### Declare myprogram non-rerunable
<br>
#PBS -r n
<br>
### Combine standard error and standard out to one file.
<br>
#PBS -j oe
<br>
### Have PBS mail you results
<br>
#PBS -m ae
<br>
#PBS -M tedhyu_at_[hidden]
<br>
### Set the queue name, given to you when you get a reservation.
<br>
#PBS -q workq
<br>
### Specify the number of cpus for your job.&#160; This example will run on 32 cpus
<br>
### using 8 nodes with 4 processes per node.
<br>
#PBS -l nodes=1:ppn=2,walltime=70:00:00
<br>
# Switch to the working directory; by default PBS launches processes from your home directory.
<br>
# Jobs should only be run from /home, /project, or /work; PBS returns results via NFS.
<br>
PBS_O_WORKDIR=/temp1/tedhyu/HH
<br>
export CODE=/project/source/seqquest/seqquest_source_v261j/hive_CentOS4.5_parallel/build_261j/quest_ompi.x
<br>
<p>echo Working directory is $PBS_O_WORKDIR
<br>
mkdir -p $PBS_O_WORKDIR
<br>
cd $PBS_O_WORKDIR
<br>
rm -rf *
<br>
cp /ul/tedhyu/fuelcell/HOH/test/HH.in ./lcao.in
<br>
cp /ul/tedhyu/atom_pbe/* .
<br>
echo Running on host `hostname`
<br>
echo Time is `date`
<br>
echo Directory is `pwd`
<br>
echo This jobs runs on the following processors:
<br>
echo `cat $PBS_NODEFILE`
<br>
Number=`wc -l $PBS_NODEFILE | awk '{print $1}'`
<br>
<p>export Number
<br>
echo ${Number}
<br>
# Define number of processors
<br>
NPROCS=`wc -l &lt; $PBS_NODEFILE`
<br>
# And the number or hosts
<br>
NHOSTS=`cat $PBS_NODEFILE|uniq|wc -l`
<br>
echo This job has allocated $NPROCS cpus
<br>
echo NHOSTS
<br>
#mpirun&#160; -machinefile $PBS_NODEFILE&#160; ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
<br>
#mpiexec -np 2&#160; ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
<br>
/opt/mpich-1.2.5.10-ch_p4-gcc/bin/mpirun -machinefile $PBS_NODEFILE -np $NPROCS ${CODE} &gt;/ul/tedhyu/fuelcell/HOH/test/HH.out
<br>
cd ..
<br>
rm -rf HH
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7979.php">doriankrause: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7977.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7979.php">doriankrause: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Reply:</strong> <a href="7979.php">doriankrause: "Re: [OMPI users] Global Communicator"</a>
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
