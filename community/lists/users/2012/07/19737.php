<?
$subject_val = "Re: [OMPI users] automatically creating a machinefile";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  5 05:28:23 2012" -->
<!-- isoreceived="20120705092823" -->
<!-- sent="Thu, 5 Jul 2012 11:28:09 +0200" -->
<!-- isosent="20120705092809" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] automatically creating a machinefile" -->
<!-- id="38DBC157-3C62-4560-A856-27502425371E_at_staff.uni-marburg.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FF4C5CD.9070101_at_math.tu-dortmund.de" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-05 05:28:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19738.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<li><strong>Previous message:</strong> <a href="19736.php">Dominik Goeddeke: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>In reply to:</strong> <a href="19736.php">Dominik Goeddeke: "Re: [OMPI users] automatically creating a machinefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19740.php">Gus Correa: "Re: [OMPI users] automatically creating a machinefile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 05.07.2012 um 00:38 schrieb Dominik Goeddeke:
<br>
<p><span class="quotelev1">&gt; no idea of Rocks, but with PBS and SLURM, I always do this directly in the job submission script. Below is an example of an admittedly spaghetti-code script that       does this -- assuming proper (un)commenting --  for PBS and SLURM
</span><br>
<p>For SLURM, Torque and GridEngine I would suggest to use the builtin support in Open MPI and MPICH2 directly. So there is no need to build a machinefile from the given list of selected nodes. In addition it will also provide a tight integration of the parallel job into the queuing system and jobs can nicely be removed.
<br>
<p>Is there any reason to bypass this mechanism?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;  and OpenMPI and MPICH2, for one particular machine that I have been toying around with lately ... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dominik
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #################### PBS
</span><br>
<span class="quotelev1">&gt; #PBS -N feast
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=25:ppn=2
</span><br>
<span class="quotelev1">&gt; #PBS -q batch
</span><br>
<span class="quotelev1">&gt; #PBS -l walltime=2:00:00
</span><br>
<span class="quotelev1">&gt; #job should not rerun if it fails
</span><br>
<span class="quotelev1">&gt; #PBS -r n
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ####### SLURM
</span><br>
<span class="quotelev1">&gt; # @ job_name = feaststrong1
</span><br>
<span class="quotelev1">&gt; # @ initialdir = .
</span><br>
<span class="quotelev1">&gt; # @ output = feaststrong1_%j.out
</span><br>
<span class="quotelev1">&gt; # @ error = feaststrong1_%j.err
</span><br>
<span class="quotelev1">&gt; # @ total_tasks = 50
</span><br>
<span class="quotelev1">&gt; # @ cpus_per_task = 1
</span><br>
<span class="quotelev1">&gt; # @ wall_clock_limit = 2:00:00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # modules
</span><br>
<span class="quotelev1">&gt; module purge
</span><br>
<span class="quotelev1">&gt; module load gcc/4.6.2
</span><br>
<span class="quotelev1">&gt; module load openmpi/1.5.4
</span><br>
<span class="quotelev1">&gt; #module load mpich2/1.4.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # cd into wdir
</span><br>
<span class="quotelev1">&gt; cd $HOME/feast/feast/feast/applications/poisson_coproc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##### PBS with MPICH2
</span><br>
<span class="quotelev1">&gt; # create machine files to isolate the master process
</span><br>
<span class="quotelev1">&gt; #cat $PBS_NODEFILE &gt; nodes.txt
</span><br>
<span class="quotelev1">&gt; ## extract slaves
</span><br>
<span class="quotelev1">&gt; #sort -u  nodes.txt &gt; temp.txt
</span><br>
<span class="quotelev1">&gt; #lines=`wc -l temp.txt | awk '{print $1}'`
</span><br>
<span class="quotelev1">&gt; #((lines=$lines - 1))
</span><br>
<span class="quotelev1">&gt; #tail -n $lines temp.txt &gt; slavetemp.txt
</span><br>
<span class="quotelev1">&gt; #cat slavetemp.txt | awk '{print $0 &quot;:2&quot;}' &gt; slaves.txt
</span><br>
<span class="quotelev1">&gt; ## extract master
</span><br>
<span class="quotelev1">&gt; #head -n 1 temp.txt &gt; mastertemp.txt
</span><br>
<span class="quotelev1">&gt; #cat mastertemp.txt | awk '{print $0 &quot;:1&quot;}' &gt; master.txt
</span><br>
<span class="quotelev1">&gt; ## merge into one dual nodefile
</span><br>
<span class="quotelev1">&gt; #cat master.txt &gt; dual.hostfile
</span><br>
<span class="quotelev1">&gt; #cat slaves.txt &gt;&gt; dual.hostfile 
</span><br>
<span class="quotelev1">&gt; ## same for single hostfile
</span><br>
<span class="quotelev1">&gt; #tail -n $lines temp.txt &gt; slavetemp.txt
</span><br>
<span class="quotelev1">&gt; #cat slavetemp.txt | awk '{print $0 &quot;:1&quot;}' &gt; slaves.txt
</span><br>
<span class="quotelev1">&gt; ## extract master
</span><br>
<span class="quotelev1">&gt; #head -n 1 temp.txt &gt; mastertemp.txt
</span><br>
<span class="quotelev1">&gt; #cat mastertemp.txt | awk '{print $0 &quot;:1&quot;}' &gt; master.txt
</span><br>
<span class="quotelev1">&gt; ## merge into one single nodefile
</span><br>
<span class="quotelev1">&gt; #cat master.txt &gt; single.hostfile
</span><br>
<span class="quotelev1">&gt; #cat slaves.txt &gt;&gt; single.hostfile
</span><br>
<span class="quotelev1">&gt; ## and clean up
</span><br>
<span class="quotelev1">&gt; #rm -f slavetemp.txt mastertemp.txt master.txt slaves.txt temp.txt nodes.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # 4 nodes
</span><br>
<span class="quotelev1">&gt; #mpiexec -n 7 -f dual.hostfile ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np007.dat
</span><br>
<span class="quotelev1">&gt; #mkdir arm-strongscaling-series1-L8-nodes04
</span><br>
<span class="quotelev1">&gt; #mv feastlog.* arm-strongscaling-series1-L8-nodes04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # 7 nodes
</span><br>
<span class="quotelev1">&gt; #mpiexec -n 13 -f dual.hostfile ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np013.dat
</span><br>
<span class="quotelev1">&gt; #mkdir arm-strongscaling-series1-L8-nodes07
</span><br>
<span class="quotelev1">&gt; #mv feastlog.* arm-strongscaling-series1-L8-nodes07
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # 13 nodes
</span><br>
<span class="quotelev1">&gt; #mpiexec -n 25 -f dual.hostfile ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np025.dat
</span><br>
<span class="quotelev1">&gt; #mkdir arm-strongscaling-series1-L8-nodes13
</span><br>
<span class="quotelev1">&gt; #mv feastlog.* arm-strongscaling-series1-L8-nodes13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # 25 nodes
</span><br>
<span class="quotelev1">&gt; #mpiexec -n 49 -f dual.hostfile ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np049.dat
</span><br>
<span class="quotelev1">&gt; #mkdir arm-strongscaling-series1-L8-nodes25
</span><br>
<span class="quotelev1">&gt; #mv feastlog.* arm-strongscaling-series1-L8-nodes25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ############## SLURM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # figure out which nodes we got
</span><br>
<span class="quotelev1">&gt; srun /bin/hostname | sort &gt; availhosts3.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lines=`wc -l availhosts3.txt | awk '{print $1}'`
</span><br>
<span class="quotelev1">&gt; ((lines=$lines - 2))
</span><br>
<span class="quotelev1">&gt; tail -n $lines availhosts3.txt &gt; slaves3.txt
</span><br>
<span class="quotelev1">&gt; head -n 1 availhosts3.txt &gt; master3.txt
</span><br>
<span class="quotelev1">&gt; cat master3.txt &gt; hostfile3.txt
</span><br>
<span class="quotelev1">&gt; cat slaves3.txt &gt;&gt; hostfile3.txt
</span><br>
<span class="quotelev1">&gt; # DGDG: SLURM -m arbitrary not supported by OpenMPI
</span><br>
<span class="quotelev1">&gt; #export SLURM_HOSTFILE=./hostfile3.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # 4 nodes
</span><br>
<span class="quotelev1">&gt; #mpirun -np 7 --hostfile hostfile3.txt ./trace.sh ./feastgpu-ompi master.dat.strongscaling.m6.L8.np007.dat
</span><br>
<span class="quotelev1">&gt; mpirun -np 7 --hostfile hostfile3.txt ./feastgpu-ompi master.dat.strongscaling.m6.L8.np007.dat
</span><br>
<span class="quotelev1">&gt; #mpiexec -n 7 -f dual.hostfile ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np007.dat
</span><br>
<span class="quotelev1">&gt; #srun -n 7 -m arbitrary ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np007.dat
</span><br>
<span class="quotelev1">&gt; mkdir arm-strongscaling-series1-L8-nodes04
</span><br>
<span class="quotelev1">&gt; mv feastlog.* arm-strongscaling-series1-L8-nodes04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # 7 nodes
</span><br>
<span class="quotelev1">&gt; #mpirun -np 13 --hostfile hostfile3.txt ./trace.sh ./feastgpu-ompi master.dat.strongscaling.m6.L8.np013.dat
</span><br>
<span class="quotelev1">&gt; mpirun -np 13 --hostfile hostfile3.txt ./feastgpu-ompi master.dat.strongscaling.m6.L8.np013.dat
</span><br>
<span class="quotelev1">&gt; #mpiexec -n 13 -f dual.hostfile ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np013.dat
</span><br>
<span class="quotelev1">&gt; #srun -n 13 -m arbitrary ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np013.dat
</span><br>
<span class="quotelev1">&gt; mkdir arm-strongscaling-series1-L8-nodes07
</span><br>
<span class="quotelev1">&gt; mv feastlog.* arm-strongscaling-series1-L8-nodes07
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # 13 nodes
</span><br>
<span class="quotelev1">&gt; #mpirun -np 25 --hostfile hostfile3.txt ./trace.sh ./feastgpu-ompi master.dat.strongscaling.m6.L8.np025.dat
</span><br>
<span class="quotelev1">&gt; mpirun -np 25 --hostfile hostfile3.txt ./feastgpu-ompi master.dat.strongscaling.m6.L8.np025.dat
</span><br>
<span class="quotelev1">&gt; #mpiexec -n 25 -f dual.hostfile ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np025.dat
</span><br>
<span class="quotelev1">&gt; #srun -n 25 -m arbitrary ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np025.dat
</span><br>
<span class="quotelev1">&gt; mkdir arm-strongscaling-series1-L8-nodes13
</span><br>
<span class="quotelev1">&gt; mv feastlog.* arm-strongscaling-series1-L8-nodes13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # 25 nodes
</span><br>
<span class="quotelev1">&gt; #mpirun -np 49 --hostfile hostfile3.txt ./trace.sh ./feastgpu-ompi master.dat.strongscaling.m6.L8.np049.dat
</span><br>
<span class="quotelev1">&gt; mpirun -np 49 --hostfile hostfile3.txt ./feastgpu-ompi master.dat.strongscaling.m6.L8.np049.dat
</span><br>
<span class="quotelev1">&gt; #mpiexec -n 49 -f dual.hostfile ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np049.dat
</span><br>
<span class="quotelev1">&gt; #srun -n 49 -m arbitrary ./feastgpu-mpich2 master.dat.strongscaling.m6.L8.np049.dat
</span><br>
<span class="quotelev1">&gt; mkdir arm-strongscaling-series1-L8-nodes25
</span><br>
<span class="quotelev1">&gt; mv feastlog.* arm-strongscaling-series1-L8-nodes25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 07/05/2012 12:10 AM, Hodgess, Erin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear MPI people:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way (a script) available to automatically generate a machinefile, please?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This would be on Rocks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev2">&gt;&gt; package:Open MPI root_at_[hidden] Distribution
</span><br>
<span class="quotelev2">&gt;&gt; ompi:version:full:1.3.2
</span><br>
<span class="quotelev2">&gt;&gt; ompi:version:svn:r21054
</span><br>
<span class="quotelev2">&gt;&gt; ompi:version:release_date:Apr 21, 2009
</span><br>
<span class="quotelev2">&gt;&gt; orte:version:full:1.3.2
</span><br>
<span class="quotelev2">&gt;&gt; orte:version:svn:r21054
</span><br>
<span class="quotelev2">&gt;&gt; orte:version:release_date:Apr 21, 2009
</span><br>
<span class="quotelev2">&gt;&gt; opal:version:full:1.3.2
</span><br>
<span class="quotelev2">&gt;&gt; opal:version:svn:r21054
</span><br>
<span class="quotelev2">&gt;&gt; opal:version:release_date:Apr 21, 2009
</span><br>
<span class="quotelev2">&gt;&gt; ident:1.3.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Erin
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Erin M. Hodgess, PhD
</span><br>
<span class="quotelev2">&gt;&gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer and Mathematical Sciences
</span><br>
<span class="quotelev2">&gt;&gt; University of Houston - Downtown
</span><br>
<span class="quotelev2">&gt;&gt; mailto: hodgesse_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jun.-Prof. Dr. Dominik G&#246;ddeke
</span><br>
<span class="quotelev1">&gt; Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
</span><br>
<span class="quotelev1">&gt; Institut f&#252;r Angewandte Mathematik (LS III)
</span><br>
<span class="quotelev1">&gt; Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="19738.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<li><strong>Previous message:</strong> <a href="19736.php">Dominik Goeddeke: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>In reply to:</strong> <a href="19736.php">Dominik Goeddeke: "Re: [OMPI users] automatically creating a machinefile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19740.php">Gus Correa: "Re: [OMPI users] automatically creating a machinefile"</a>
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
