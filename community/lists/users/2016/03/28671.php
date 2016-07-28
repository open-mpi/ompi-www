<?
$subject_val = "[OMPI users] Failed Flash run on Pleiades with OpenMPI 1.10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 11:02:11 2016" -->
<!-- isoreceived="20160310160211" -->
<!-- sent="Thu, 10 Mar 2016 11:02:05 -0500" -->
<!-- isosent="20160310160205" -->
<!-- name="Joshua Wall" -->
<!-- email="joshua.e.wall_at_[hidden]" -->
<!-- subject="[OMPI users] Failed Flash run on Pleiades with OpenMPI 1.10.2" -->
<!-- id="CAHnUEozSWST=BQcfuvNqQtPaQ-s4q6Boy6pMJQDmG-gKg2anJA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Failed Flash run on Pleiades with OpenMPI 1.10.2<br>
<strong>From:</strong> Joshua Wall (<em>joshua.e.wall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-10 11:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28670.php">Gilles Gouaillardet: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello, I'm relatively new to building OpenMPI from scratch, so I'm
<br>
going to try and provide a lot of information about exactly what I did
<br>
here. I'm attempting to run the MHD code Flash 4.2.2 on Pleiades (NASA
<br>
AMES), and also need some python mpi4py functionality and Cuda which ruled
<br>
out using the pre-installed MPI implementations. My code has been tested
<br>
and working under a previous build of OpenMPI 1.10.2 on a local cluster at
<br>
Drexel University that does not have a job manager and that uses a simple
<br>
Infiniband setup.. Pleiades is a bit more complicated, but I've been
<br>
following the NASA folks setup commands and they claim looking at my job
<br>
logs from their side that nothing seems wrong communications wise.
<br>
<p>However, when I run just a vanilla version of Flash 4.2.2 it runs for
<br>
several steps and then crashes. Here's the last part of the Flash run
<br>
output:
<br>
<p>&nbsp;*** Wrote particle file to BB_hdf5_part_0008 ****
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17 1.5956E+11 5.4476E+09  (-5.031E+16,  1.969E+16, -2.188E+15) |
<br>
&nbsp;5.448E+09
<br>
&nbsp;*** Wrote plotfile to BB_hdf5_plt_cnt_0009 ****
<br>
&nbsp;WARNING: globalNumParticles = 0!!!
<br>
&nbsp;&nbsp;iteration, no. not moved =            0          69
<br>
&nbsp;&nbsp;iteration, no. not moved =            1          29
<br>
&nbsp;&nbsp;iteration, no. not moved =            2           0
<br>
&nbsp;refined: total leaf blocks =          120
<br>
&nbsp;refined: total blocks =          137
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18 1.7046E+11 5.3814E+09  (-2.516E+16,  2.734E+16, -1.094E+15) |
<br>
&nbsp;5.381E+09
<br>
&nbsp;WARNING: globalNumParticles = 0!!!
<br>
&nbsp;*** Wrote particle file to BB_hdf5_part_0009 ****
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19 1.8122E+11 2.9425E+09  (-2.078E+16, -2.516E+16, -3.391E+16) |
<br>
&nbsp;2.943E+09
<br>
&nbsp;*** Wrote plotfile to BB_hdf5_plt_cnt_0010 ****
<br>
&nbsp;WARNING: globalNumParticles = 0!!!
<br>
&nbsp;&nbsp;iteration, no. not moved =            0         128
<br>
&nbsp;&nbsp;iteration, no. not moved =            1          25
<br>
&nbsp;&nbsp;iteration, no. not moved =            2           0
<br>
&nbsp;refined: total leaf blocks =          456
<br>
&nbsp;refined: total blocks =          521
<br>
&nbsp;Paramesh error : pe           65  needed full blk            1          57
<br>
&nbsp;but could not find it or only  found part of it in the message buffer.
<br>
Contact PARAMESH developers for help.
<br>
--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 65 in communicator MPI COMMUNICATOR 3 SPLIT
<br>
FROM 0
<br>
with errorcode 0.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;Paramesh error : pe           80  needed full blk            1          72
<br>
&nbsp;but could not find it or only  found part of it in the message buffer.
<br>
Contact PARAMESH developers for help.
<br>
<p>You can see the entire output at:
<br>
<p><a href="https://drive.google.com/file/d/0B7Zx9zNTB3icQWZPTUlhZFQtcWs/view?usp=sharing">https://drive.google.com/file/d/0B7Zx9zNTB3icQWZPTUlhZFQtcWs/view?usp=sharing</a>
<br>
<p><p>Okay, so I built it with (as instructed by NASA HECC):
<br>
<p>./configure --with-tm=/PBS
<br>
--with-verbs=/usr --enable-mca-no-build=maffinity-libnuma
<br>
--with-cuda=/nasa/cuda/7.0 --enable-mpi-interface-warning --without-slurm
<br>
--without-loadleveler --enable-mpirun-prefix-by-default
<br>
--enable-btl-openib-failover --prefix=/u/jewall/ompi-1.10.2
<br>
<p><p>And if I run the ompi_info on 96 cores (the same # I did the job on) I get
<br>
the following output:
<br>
<p><a href="https://drive.google.com/file/d/0B7Zx9zNTB3icSHNZaEpZZkhPcXc/view?usp=sharing">https://drive.google.com/file/d/0B7Zx9zNTB3icSHNZaEpZZkhPcXc/view?usp=sharing</a>
<br>
<p>And the job was run with the following script:
<br>
<p>#PBS -S /bin/bash
<br>
#PBS -N cfd
<br>
<p>#PBS -q debug
<br>
#PBS -l select=8:ncpus=12:model=has
<br>
#PBS -l walltime=0:30:00
<br>
#PBS -j oe
<br>
#PBS -W group_list=g23107
<br>
#PBS -m e
<br>
<p># Load a compiler you use to build your executable, for example,
<br>
comp-intel/2015.0.090.
<br>
<p>#source /usr/local/lib/global.profile
<br>
<p>module load git/2.4.5
<br>
module load szip/2.1/gcc
<br>
module load cuda/7.0
<br>
module load gcc/4.9.3
<br>
module load cmake/2.8.12.1
<br>
module load python/2.7.10
<br>
<p># Add your commands here to extend your PATH, etc.
<br>
<p>export MPIHOME=/u/jewall/ompi-1.10.2
<br>
export MPICC=${MPIHOME}/bin/mpicc
<br>
export MPIFC=${MPIHOME}/bin/mpif90
<br>
export MPICXX=${MPIHOME}/bin/mpic++
<br>
export MPIEXEC=${MPIHOME}/bin/mpiexec
<br>
export HDF5=/u/jewall/hdf5
<br>
<p>setenv OMPI_MCA_btl_openib_if_include mlx4_0:1
<br>
<p><p>PATH=$PATH:${PYTHONPATH}:$HOME/bin            # Add private commands to PATH
<br>
<p># By default, PBS executes your job from your home directory.
<br>
# However, you can use the environment variable
<br>
# PBS_O_WORKDIR to change to the directory where
<br>
# you submitted your job.
<br>
<p>cd $PBS_O_WORKDIR
<br>
<p>echo ${PBS_NODEFILE}
<br>
cat ${PBS_NODEFILE} | awk '{print $1}' &gt; &quot;local_host.txt&quot;
<br>
cat local_host.txt
<br>
<p># use of dplace to pin processes to processors may improve performance
<br>
# Here you request to pin processes to processors 4-11 of each Sandy Bridge
<br>
node.
<br>
# For other processor types, you may have to pin to different processors.
<br>
<p># The resource request of select=32 and mpiprocs=8 implies
<br>
# that you want to have 256 MPI processes in total.
<br>
# If this is correct, you can omit the -np 256 for mpiexec
<br>
# that you might have used before.
<br>
<p>${MPIEXEC} --mca mpi_warn_on_fork 0 --mca mpi_cuda_support 0 --mca btl
<br>
self,sm,openib --mca oob_tcp_if_include ib0 -hostfile local_host.txt
<br>
./flash4
<br>
<p>#--mca oob_tcp_if_include ib0 # suggested in an OpenMPI forum for Pleiades
<br>
running
<br>
<p># It is a good practice to write stderr and stdout to a file (ex: output)
<br>
# Otherwise, they will be written to the PBS stderr and stdout in
<br>
/PBS/spool,
<br>
# which has limited amount  of space. When /PBS/spool is filled up, any job
<br>
# that tries to write to /PBS/spool will die.
<br>
<p># -end of script-
<br>
<p>Hopefully this is enough information for someone to find an error in how I
<br>
did things. I also have the outputs of the make, make-test and make-install
<br>
if anyone would like to see those. :)
<br>
<p>Thanks for the help!
<br>
<p>Cordially,
<br>
<p>Joshua Wall
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28672.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28670.php">Gilles Gouaillardet: "Re: [OMPI users] What causes the pingpong bandwidth &quot;hump&quot; on SM?"</a>
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
