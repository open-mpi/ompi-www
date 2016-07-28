<?
$subject_val = "Re: [OMPI users] automatically creating a machinefile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  4 18:38:11 2012" -->
<!-- isoreceived="20120704223811" -->
<!-- sent="Thu, 05 Jul 2012 00:38:05 +0200" -->
<!-- isosent="20120704223805" -->
<!-- name="Dominik Goeddeke" -->
<!-- email="dominik.goeddeke_at_[hidden]" -->
<!-- subject="Re: [OMPI users] automatically creating a machinefile" -->
<!-- id="4FF4C5CD.9070101_at_math.tu-dortmund.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="586A4828D7AAA04CA9B258C50A28DA200BF59429_at_BALI.uhd.campus" -->
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
<strong>Subject:</strong> Re: [OMPI users] automatically creating a machinefile<br>
<strong>From:</strong> Dominik Goeddeke (<em>dominik.goeddeke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-04 18:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19737.php">Reuti: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>Previous message:</strong> <a href="19735.php">Hodgess, Erin: "[OMPI users] automatically creating a machinefile"</a>
<li><strong>In reply to:</strong> <a href="19735.php">Hodgess, Erin: "[OMPI users] automatically creating a machinefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19737.php">Reuti: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>Reply:</strong> <a href="19737.php">Reuti: "Re: [OMPI users] automatically creating a machinefile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
no idea of Rocks, but with PBS and SLURM, I always do this directly in 
<br>
the job submission script. Below is an example of an admittedly 
<br>
spaghetti-code script that does this -- assuming proper (un)commenting 
<br>
--  for PBS and SLURM and OpenMPI and MPICH2, for one particular machine 
<br>
that I have been toying around with lately ...
<br>
<p>Dominik
<br>
<p>#!/bin/bash
<br>
<p>#################### PBS
<br>
#PBS -N feast
<br>
#PBS -l nodes=25:ppn=2
<br>
#PBS -q batch
<br>
#PBS -l walltime=2:00:00
<br>
#job should not rerun if it fails
<br>
#PBS -r n
<br>
<p>####### SLURM
<br>
# @ job_name = feaststrong1
<br>
# @ initialdir = .
<br>
# @ output = feaststrong1_%j.out
<br>
# @ error = feaststrong1_%j.err
<br>
# @ total_tasks = 50
<br>
# @ cpus_per_task = 1
<br>
# @ wall_clock_limit = 2:00:00
<br>
<p># modules
<br>
module purge
<br>
module load gcc/4.6.2
<br>
module load openmpi/1.5.4
<br>
#module load mpich2/1.4.1
<br>
<p># cd into wdir
<br>
cd $HOME/feast/feast/feast/applications/poisson_coproc
<br>
<p><p>##### PBS with MPICH2
<br>
# create machine files to isolate the master process
<br>
#cat $PBS_NODEFILE &gt; nodes.txt
<br>
## extract slaves
<br>
#sort -u  nodes.txt &gt; temp.txt
<br>
#lines=`wc -l temp.txt | awk '{print $1}'`
<br>
#((lines=$lines - 1))
<br>
#tail -n $lines temp.txt &gt; slavetemp.txt
<br>
#cat slavetemp.txt | awk '{print $0 &quot;:2&quot;}' &gt; slaves.txt
<br>
## extract master
<br>
#head -n 1 temp.txt &gt; mastertemp.txt
<br>
#cat mastertemp.txt | awk '{print $0 &quot;:1&quot;}' &gt; master.txt
<br>
## merge into one dual nodefile
<br>
#cat master.txt &gt; dual.hostfile
<br>
#cat slaves.txt &gt;&gt; dual.hostfile
<br>
## same for single hostfile
<br>
#tail -n $lines temp.txt &gt; slavetemp.txt
<br>
#cat slavetemp.txt | awk '{print $0 &quot;:1&quot;}' &gt; slaves.txt
<br>
## extract master
<br>
#head -n 1 temp.txt &gt; mastertemp.txt
<br>
#cat mastertemp.txt | awk '{print $0 &quot;:1&quot;}' &gt; master.txt
<br>
## merge into one single nodefile
<br>
#cat master.txt &gt; single.hostfile
<br>
#cat slaves.txt &gt;&gt; single.hostfile
<br>
## and clean up
<br>
#rm -f slavetemp.txt mastertemp.txt master.txt slaves.txt temp.txt nodes.txt
<br>
<p># 4 nodes
<br>
#mpiexec -n 7 -f dual.hostfile ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np007.dat
<br>
#mkdir arm-strongscaling-series1-L8-nodes04
<br>
#mv feastlog.* arm-strongscaling-series1-L8-nodes04
<br>
<p># 7 nodes
<br>
#mpiexec -n 13 -f dual.hostfile ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np013.dat
<br>
#mkdir arm-strongscaling-series1-L8-nodes07
<br>
#mv feastlog.* arm-strongscaling-series1-L8-nodes07
<br>
<p># 13 nodes
<br>
#mpiexec -n 25 -f dual.hostfile ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np025.dat
<br>
#mkdir arm-strongscaling-series1-L8-nodes13
<br>
#mv feastlog.* arm-strongscaling-series1-L8-nodes13
<br>
<p># 25 nodes
<br>
#mpiexec -n 49 -f dual.hostfile ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np049.dat
<br>
#mkdir arm-strongscaling-series1-L8-nodes25
<br>
#mv feastlog.* arm-strongscaling-series1-L8-nodes25
<br>
<p><p>############## SLURM
<br>
<p># figure out which nodes we got
<br>
srun /bin/hostname | sort &gt; availhosts3.txt
<br>
<p>lines=`wc -l availhosts3.txt | awk '{print $1}'`
<br>
((lines=$lines - 2))
<br>
tail -n $lines availhosts3.txt &gt; slaves3.txt
<br>
head -n 1 availhosts3.txt &gt; master3.txt
<br>
cat master3.txt &gt; hostfile3.txt
<br>
cat slaves3.txt &gt;&gt; hostfile3.txt
<br>
# DGDG: SLURM -m arbitrary not supported by OpenMPI
<br>
#export SLURM_HOSTFILE=./hostfile3.txt
<br>
<p><p># 4 nodes
<br>
#mpirun -np 7 --hostfile hostfile3.txt ./trace.sh ./feastgpu-ompi 
<br>
master.dat.strongscaling.m6.L8.np007.dat
<br>
mpirun -np 7 --hostfile hostfile3.txt ./feastgpu-ompi 
<br>
master.dat.strongscaling.m6.L8.np007.dat
<br>
#mpiexec -n 7 -f dual.hostfile ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np007.dat
<br>
#srun -n 7 -m arbitrary ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np007.dat
<br>
mkdir arm-strongscaling-series1-L8-nodes04
<br>
mv feastlog.* arm-strongscaling-series1-L8-nodes04
<br>
<p># 7 nodes
<br>
#mpirun -np 13 --hostfile hostfile3.txt ./trace.sh ./feastgpu-ompi 
<br>
master.dat.strongscaling.m6.L8.np013.dat
<br>
mpirun -np 13 --hostfile hostfile3.txt ./feastgpu-ompi 
<br>
master.dat.strongscaling.m6.L8.np013.dat
<br>
#mpiexec -n 13 -f dual.hostfile ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np013.dat
<br>
#srun -n 13 -m arbitrary ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np013.dat
<br>
mkdir arm-strongscaling-series1-L8-nodes07
<br>
mv feastlog.* arm-strongscaling-series1-L8-nodes07
<br>
<p># 13 nodes
<br>
#mpirun -np 25 --hostfile hostfile3.txt ./trace.sh ./feastgpu-ompi 
<br>
master.dat.strongscaling.m6.L8.np025.dat
<br>
mpirun -np 25 --hostfile hostfile3.txt ./feastgpu-ompi 
<br>
master.dat.strongscaling.m6.L8.np025.dat
<br>
#mpiexec -n 25 -f dual.hostfile ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np025.dat
<br>
#srun -n 25 -m arbitrary ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np025.dat
<br>
mkdir arm-strongscaling-series1-L8-nodes13
<br>
mv feastlog.* arm-strongscaling-series1-L8-nodes13
<br>
<p># 25 nodes
<br>
#mpirun -np 49 --hostfile hostfile3.txt ./trace.sh ./feastgpu-ompi 
<br>
master.dat.strongscaling.m6.L8.np049.dat
<br>
mpirun -np 49 --hostfile hostfile3.txt ./feastgpu-ompi 
<br>
master.dat.strongscaling.m6.L8.np049.dat
<br>
#mpiexec -n 49 -f dual.hostfile ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np049.dat
<br>
#srun -n 49 -m arbitrary ./feastgpu-mpich2 
<br>
master.dat.strongscaling.m6.L8.np049.dat
<br>
mkdir arm-strongscaling-series1-L8-nodes25
<br>
mv feastlog.* arm-strongscaling-series1-L8-nodes25
<br>
<p><p><p><p><p><p>On 07/05/2012 12:10 AM, Hodgess, Erin wrote:
<br>
<span class="quotelev1">&gt; automatically creating a machinefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear MPI people:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way (a script) available to automatically generate a 
</span><br>
<span class="quotelev1">&gt; machinefile, please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would be on Rocks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt; package:Open MPI root_at_[hidden] Distribution
</span><br>
<span class="quotelev1">&gt; ompi:version:full:1.3.2
</span><br>
<span class="quotelev1">&gt; ompi:version:svn:r21054
</span><br>
<span class="quotelev1">&gt; ompi:version:release_date:Apr 21, 2009
</span><br>
<span class="quotelev1">&gt; orte:version:full:1.3.2
</span><br>
<span class="quotelev1">&gt; orte:version:svn:r21054
</span><br>
<span class="quotelev1">&gt; orte:version:release_date:Apr 21, 2009
</span><br>
<span class="quotelev1">&gt; opal:version:full:1.3.2
</span><br>
<span class="quotelev1">&gt; opal:version:svn:r21054
</span><br>
<span class="quotelev1">&gt; opal:version:release_date:Apr 21, 2009
</span><br>
<span class="quotelev1">&gt; ident:1.3.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Erin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Erin M. Hodgess, PhD
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Department of Computer and Mathematical Sciences
</span><br>
<span class="quotelev1">&gt; University of Houston - Downtown
</span><br>
<span class="quotelev1">&gt; mailto: hodgesse_at_[hidden]
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
<p><p><pre>
-- 
Jun.-Prof. Dr. Dominik G&#246;ddeke
Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
Institut f&#252;r Angewandte Mathematik (LS III)
Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
<a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19736/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19737.php">Reuti: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>Previous message:</strong> <a href="19735.php">Hodgess, Erin: "[OMPI users] automatically creating a machinefile"</a>
<li><strong>In reply to:</strong> <a href="19735.php">Hodgess, Erin: "[OMPI users] automatically creating a machinefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19737.php">Reuti: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>Reply:</strong> <a href="19737.php">Reuti: "Re: [OMPI users] automatically creating a machinefile"</a>
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
