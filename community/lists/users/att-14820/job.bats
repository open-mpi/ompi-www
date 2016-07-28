#!/bin/sh

# This is an example script. Modify it before using it!
# For a list of queues and limits type "qstat -Q"
# Submit the job with "qsub job.bats"
# Check for job status with "qstat -n"
#COPIED PBS BELOW FROM D NEW SWMF/share/JOBscripts/job.nyx


#PBS -V
#PBS -q wasatch
#PBS -N SWMF
#PBS -l nodes=2:ppn=8


# change to the run directory
#cd $SWMF_v2.3/run

# save node list
cat `echo ${PBS_NODEFILE}` > list_of_nodes

#mpirun --preload-binary SWMF.exe

# run (note that number of PE-s is the same as specified in PBS -l nodes)
mpiexec --prefix /opt/libraries/openmpi/openmpi-1.2.7-pgi SWMF.exe > runlog_`date +%y%m%d%H%M`