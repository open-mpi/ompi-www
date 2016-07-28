#! /bin/sh
## `phello.sh' SLURM batch script
##
## submission command line:
## sbatch phello.sh
##
## see sbatch(1) for further informations
##
#SBATCH --job-name pHello
#SBATCH --nice=1000
#SBATCH --no-requeue
#SBATCH --mail-type ALL
#SBATCH --error  phello-%j.err
#SBATCH --output phello-%j.out
##
#SBATCH --nodes=7
#SBATCH --ntasks=15

printenv LOCALDIR
printenv SCRATCH
printenv HSL_TMPDIR
printenv HSL_PREFIX

mpirun --verbose phello

exit 0
##
## eos


