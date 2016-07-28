<?
$subject_val = "[OMPI users] OpenMPI+PGI errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 16:24:00 2008" -->
<!-- isoreceived="20080520202400" -->
<!-- sent="Tue, 20 May 2008 13:23:54 -0700" -->
<!-- isosent="20080520202354" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI+PGI errors" -->
<!-- id="df8c8a6d0805201323j15f6e450id447adda218ad294_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI+PGI errors<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-20 16:23:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5712.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="5710.php">Rudd, James: "[OMPI users] ORTE_ERROR_LOG Timeout"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5725.php">Jeff Squyres: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>Reply:</strong> <a href="5725.php">Jeff Squyres: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>Reply:</strong> <a href="5735.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all:
<br>
<p>I've got a user on our ROCKS 4.3 cluster that's having some strange
<br>
errors.  I have other users using the cluster without any such errors
<br>
reported, but this user also runs this code on other clusters without
<br>
any problems, so I'm not really sure where the problem lies.  They are
<br>
getting logs with the following:
<br>
<p>--------
<br>
Warning: no access to tty (Bad file descriptor).
<br>
Thus no job control in this shell.
<br>
data directory is  /mnt/pvfs2/patton/data/chem/aa1
<br>
exec directory is  /mnt/pvfs2/patton/exec/chem/aa1
<br>
arch directory is  /mnt/pvfs2/patton/data/chem/aa1
<br>
mpirun: killing job...
<br>
<p>Terminated
<br>
--------------------------------------------------------------------------
<br>
WARNING: mpirun is in the process of killing a job, but has detected an
<br>
interruption (probably control-C).
<br>
<p>It is dangerous to interrupt mpirun while it is killing a job (proper
<br>
termination may not be guaranteed).  Hit control-C again within 1
<br>
second if you really want to kill mpirun immediately.
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that job rank 0 with PID 14126 on node
<br>
compute-0-23.local exited on signal 15 (Terminated).
<br>
[compute-0-23.local:14124] [0,0,0]-[0,0,1] mca_oob_tcp_msg_recv: readv
<br>
failed: Connection reset by peer (104)
<br>
---------
<br>
<p>The job was submitted with:
<br>
---------
<br>
#!/bin/csh
<br>
##PBS -N for.chem.aa1
<br>
#PBS -l nodes=2
<br>
#PBS -l walltime=0:30:00
<br>
#PBS -m n
<br>
#PBS -j oe
<br>
#PBS -o /home/patton/logs
<br>
#PBS -e /home/patton/logs
<br>
#PBS -V
<br>
#
<br>
# ------ set case specific parameters
<br>
#        and setup directory structure
<br>
#
<br>
set time=000001_000100
<br>
#
<br>
set case=aa1
<br>
set type=chem
<br>
#
<br>
# ---- set up directories
<br>
#
<br>
set SCRATCH=/mnt/pvfs2/patton
<br>
mkdir -p $SCRATCH
<br>
<p>set datadir=$SCRATCH/data/$type/$case
<br>
set execdir=$SCRATCH/exec/$type/$case
<br>
set archdir=$SCRATCH/data/$type/$case
<br>
set les_output=les.$type.$case.out.$time
<br>
<p>set compdir=$HOME/compile/$type/$case
<br>
#set compdir=$HOME/compile/free/aa1
<br>
<p>echo 'data directory is ' $datadir
<br>
echo 'exec directory is ' $execdir
<br>
echo 'arch directory is ' $archdir
<br>
<p>mkdir -p $datadir
<br>
mkdir -p $execdir
<br>
#
<br>
cd $execdir
<br>
rm -fr *
<br>
cp $compdir/* .
<br>
#
<br>
# ------- build machine file for code to read setup
<br>
#
<br>
# ------------ set imachine=0 for NCAR IBM SP    : bluevista
<br>
#                  imachine=1 for NCAR IBM SP    : bluesky
<br>
#                  imachine=2 for ASC SGI Altix  : eagle
<br>
#                  imachine=3 for ERDC Cray XT3  : sapphire
<br>
#                  imachine=4 for ASC HP XC      : falcon
<br>
#                  imachine=5 for NERSC Cray XT4 : franklin
<br>
#                  imachine=6 for WSU Cluster    : aeolus
<br>
#
<br>
set imachine=6
<br>
set store_files=1
<br>
set OMP_NUM_THREADS=1
<br>
#
<br>
echo $imachine &gt; mach.file
<br>
echo $store_files &gt;&gt; mach.file
<br>
echo $datadir &gt;&gt; mach.file
<br>
echo $archdir &gt;&gt; mach.file
<br>
#
<br>
# ---- submit the run
<br>
#
<br>
mpirun -n 2 ./lesmpi.a &gt; $les_output
<br>
#
<br>
# ------ clean up
<br>
#
<br>
mv $execdir/u.* $datadir
<br>
mv $execdir/p.* $datadir
<br>
mv $execdir/his.* $datadir
<br>
cp $execdir/$les_output $datadir
<br>
#
<br>
echo 'job ended '
<br>
exit
<br>
#
<br>
-------------
<br>
(its possible this particular script doesn't match this particular
<br>
error...The user ran the job, and this is what I assembled from
<br>
conversations with him.  In any case, its representative to the jobs
<br>
he's running, and they're all returning similar errors.)
<br>
<p>The error occurs at varying time steps in the runs, and if run without
<br>
MPI, it runs fine to completion.
<br>
<p>Here's the version info:
<br>
<p>[kusznir_at_aeolus ~]$ rpm -qa |grep pgi
<br>
pgilinux86-64-707-1
<br>
openmpi-pgi-docs-1.2.4-1
<br>
openmpi-pgi-devel-1.2.4-1
<br>
roll-pgi-usersguide-4.3-0
<br>
openmpi-pgi-runtime-1.2.4-1
<br>
mpich-ethernet-pgi-1.2.7p1-1
<br>
pgi-rocks-4.3-0
<br>
<p>The OpenMPI rpms were built from the supplied spec (or nearly so,
<br>
anyway) with the following command line:
<br>
CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 rpmbuild -bb --define 'install_in_opt 1' --d
<br>
efine 'install_modulefile 1' --define 'modules_rpm_name environment-modules' --d
<br>
efine 'build_all_in_one_rpm 0'  --define 'configure_options --with-tm=/opt/torqu
<br>
e' --define '_name openmpi-pgi' --define 'use_default_rpm_opt_flags 0' openmpi.s
<br>
pec
<br>
<p>Any suggestions?
<br>
<p>Thanks!
<br>
<p>--Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5712.php">Terry Frankcombe: "Re: [OMPI users] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="5710.php">Rudd, James: "[OMPI users] ORTE_ERROR_LOG Timeout"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5725.php">Jeff Squyres: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>Reply:</strong> <a href="5725.php">Jeff Squyres: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<li><strong>Reply:</strong> <a href="5735.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
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
