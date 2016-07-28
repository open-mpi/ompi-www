#!/bin/sh
#  #SBATCH -x node01,node02,node09,node10
set -v

hostname

env | grep SLURM

# clear SLURM environment variables 
#for i in `env | awk -F= '/SLURM/ {print $1}' | grep SLURM`; do
#  echo unsetting $i
#  unset $i
#done

mpirun --display-devel-map pw.x < pw.in

echo hello world, it is now done
