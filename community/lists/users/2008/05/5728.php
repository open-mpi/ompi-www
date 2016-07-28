<?
$subject_val = "Re: [OMPI users] OpenMPI+PGI errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 16:12:07 2008" -->
<!-- isoreceived="20080523201207" -->
<!-- sent="Fri, 23 May 2008 13:12:00 -0700" -->
<!-- isosent="20080523201200" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI+PGI errors" -->
<!-- id="df8c8a6d0805231312h338be325i85c18e434f07f242_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D6340A80-D3DB-485E-8BF2-940B98274212_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI+PGI errors<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-23 16:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5729.php">Cally K: "[OMPI users] --bynode vs --byslot"</a>
<li><strong>Previous message:</strong> <a href="5727.php">Jim Kusznir: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
<li><strong>In reply to:</strong> <a href="5725.php">Jeff Squyres: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5735.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've asked for verification, but I recall the original verbal
<br>
complaint claiming the wall time was random and sometimes as short as
<br>
2 minutes into a job.
<br>
<p>They have said they've run more tests with more instrumentation on
<br>
their code, and it always fails in a random place....Same job,
<br>
different results.
<br>
<p>--Jim
<br>
<p>On Fri, May 23, 2008 at 11:54 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This may be a dumb question, but is there a chance that his job is
</span><br>
<span class="quotelev1">&gt; running beyond 30 minutes, and PBS/Torque/whatever is killing it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 20, 2008, at 4:23 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've got a user on our ROCKS 4.3 cluster that's having some strange
</span><br>
<span class="quotelev2">&gt;&gt; errors.  I have other users using the cluster without any such errors
</span><br>
<span class="quotelev2">&gt;&gt; reported, but this user also runs this code on other clusters without
</span><br>
<span class="quotelev2">&gt;&gt; any problems, so I'm not really sure where the problem lies.  They are
</span><br>
<span class="quotelev2">&gt;&gt; getting logs with the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------
</span><br>
<span class="quotelev2">&gt;&gt; Warning: no access to tty (Bad file descriptor).
</span><br>
<span class="quotelev2">&gt;&gt; Thus no job control in this shell.
</span><br>
<span class="quotelev2">&gt;&gt; data directory is  /mnt/pvfs2/patton/data/chem/aa1
</span><br>
<span class="quotelev2">&gt;&gt; exec directory is  /mnt/pvfs2/patton/exec/chem/aa1
</span><br>
<span class="quotelev2">&gt;&gt; arch directory is  /mnt/pvfs2/patton/data/chem/aa1
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terminated
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: mpirun is in the process of killing a job, but has detected
</span><br>
<span class="quotelev2">&gt;&gt; an
</span><br>
<span class="quotelev2">&gt;&gt; interruption (probably control-C).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is dangerous to interrupt mpirun while it is killing a job (proper
</span><br>
<span class="quotelev2">&gt;&gt; termination may not be guaranteed).  Hit control-C again within 1
</span><br>
<span class="quotelev2">&gt;&gt; second if you really want to kill mpirun immediately.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 14126 on node
</span><br>
<span class="quotelev2">&gt;&gt; compute-0-23.local exited on signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-23.local:14124] [0,0,0]-[0,0,1] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The job was submitted with:
</span><br>
<span class="quotelev2">&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/csh
</span><br>
<span class="quotelev2">&gt;&gt; ##PBS -N for.chem.aa1
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=2
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l walltime=0:30:00
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -m n
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -j oe
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -o /home/patton/logs
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -e /home/patton/logs
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -V
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ------ set case specific parameters
</span><br>
<span class="quotelev2">&gt;&gt; #        and setup directory structure
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; set time=000001_000100
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; set case=aa1
</span><br>
<span class="quotelev2">&gt;&gt; set type=chem
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ---- set up directories
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; set SCRATCH=/mnt/pvfs2/patton
</span><br>
<span class="quotelev2">&gt;&gt; mkdir -p $SCRATCH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; set datadir=$SCRATCH/data/$type/$case
</span><br>
<span class="quotelev2">&gt;&gt; set execdir=$SCRATCH/exec/$type/$case
</span><br>
<span class="quotelev2">&gt;&gt; set archdir=$SCRATCH/data/$type/$case
</span><br>
<span class="quotelev2">&gt;&gt; set les_output=les.$type.$case.out.$time
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; set compdir=$HOME/compile/$type/$case
</span><br>
<span class="quotelev2">&gt;&gt; #set compdir=$HOME/compile/free/aa1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo 'data directory is ' $datadir
</span><br>
<span class="quotelev2">&gt;&gt; echo 'exec directory is ' $execdir
</span><br>
<span class="quotelev2">&gt;&gt; echo 'arch directory is ' $archdir
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mkdir -p $datadir
</span><br>
<span class="quotelev2">&gt;&gt; mkdir -p $execdir
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; cd $execdir
</span><br>
<span class="quotelev2">&gt;&gt; rm -fr *
</span><br>
<span class="quotelev2">&gt;&gt; cp $compdir/* .
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ------- build machine file for code to read setup
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ------------ set imachine=0 for NCAR IBM SP    : bluevista
</span><br>
<span class="quotelev2">&gt;&gt; #                  imachine=1 for NCAR IBM SP    : bluesky
</span><br>
<span class="quotelev2">&gt;&gt; #                  imachine=2 for ASC SGI Altix  : eagle
</span><br>
<span class="quotelev2">&gt;&gt; #                  imachine=3 for ERDC Cray XT3  : sapphire
</span><br>
<span class="quotelev2">&gt;&gt; #                  imachine=4 for ASC HP XC      : falcon
</span><br>
<span class="quotelev2">&gt;&gt; #                  imachine=5 for NERSC Cray XT4 : franklin
</span><br>
<span class="quotelev2">&gt;&gt; #                  imachine=6 for WSU Cluster    : aeolus
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; set imachine=6
</span><br>
<span class="quotelev2">&gt;&gt; set store_files=1
</span><br>
<span class="quotelev2">&gt;&gt; set OMP_NUM_THREADS=1
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; echo $imachine &gt; mach.file
</span><br>
<span class="quotelev2">&gt;&gt; echo $store_files &gt;&gt; mach.file
</span><br>
<span class="quotelev2">&gt;&gt; echo $datadir &gt;&gt; mach.file
</span><br>
<span class="quotelev2">&gt;&gt; echo $archdir &gt;&gt; mach.file
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ---- submit the run
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 2 ./lesmpi.a &gt; $les_output
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ------ clean up
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; mv $execdir/u.* $datadir
</span><br>
<span class="quotelev2">&gt;&gt; mv $execdir/p.* $datadir
</span><br>
<span class="quotelev2">&gt;&gt; mv $execdir/his.* $datadir
</span><br>
<span class="quotelev2">&gt;&gt; cp $execdir/$les_output $datadir
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; echo 'job ended '
</span><br>
<span class="quotelev2">&gt;&gt; exit
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; -------------
</span><br>
<span class="quotelev2">&gt;&gt; (its possible this particular script doesn't match this particular
</span><br>
<span class="quotelev2">&gt;&gt; error...The user ran the job, and this is what I assembled from
</span><br>
<span class="quotelev2">&gt;&gt; conversations with him.  In any case, its representative to the jobs
</span><br>
<span class="quotelev2">&gt;&gt; he's running, and they're all returning similar errors.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error occurs at varying time steps in the runs, and if run without
</span><br>
<span class="quotelev2">&gt;&gt; MPI, it runs fine to completion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the version info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [kusznir_at_aeolus ~]$ rpm -qa |grep pgi
</span><br>
<span class="quotelev2">&gt;&gt; pgilinux86-64-707-1
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-pgi-docs-1.2.4-1
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-pgi-devel-1.2.4-1
</span><br>
<span class="quotelev2">&gt;&gt; roll-pgi-usersguide-4.3-0
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-pgi-runtime-1.2.4-1
</span><br>
<span class="quotelev2">&gt;&gt; mpich-ethernet-pgi-1.2.7p1-1
</span><br>
<span class="quotelev2">&gt;&gt; pgi-rocks-4.3-0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The OpenMPI rpms were built from the supplied spec (or nearly so,
</span><br>
<span class="quotelev2">&gt;&gt; anyway) with the following command line:
</span><br>
<span class="quotelev2">&gt;&gt; CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 rpmbuild -bb --define
</span><br>
<span class="quotelev2">&gt;&gt; 'install_in_opt 1' --d
</span><br>
<span class="quotelev2">&gt;&gt; efine 'install_modulefile 1' --define 'modules_rpm_name environment-
</span><br>
<span class="quotelev2">&gt;&gt; modules' --d
</span><br>
<span class="quotelev2">&gt;&gt; efine 'build_all_in_one_rpm 0'  --define 'configure_options --with-
</span><br>
<span class="quotelev2">&gt;&gt; tm=/opt/torqu
</span><br>
<span class="quotelev2">&gt;&gt; e' --define '_name openmpi-pgi' --define 'use_default_rpm_opt_flags
</span><br>
<span class="quotelev2">&gt;&gt; 0' openmpi.s
</span><br>
<span class="quotelev2">&gt;&gt; pec
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Jim
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
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
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5729.php">Cally K: "[OMPI users] --bynode vs --byslot"</a>
<li><strong>Previous message:</strong> <a href="5727.php">Jim Kusznir: "Re: [OMPI users] More OpenMPI errors: how to debug?"</a>
<li><strong>In reply to:</strong> <a href="5725.php">Jeff Squyres: "Re: [OMPI users] OpenMPI+PGI errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5735.php">Jim Kusznir: "Re: [OMPI users] OpenMPI+PGI errors"</a>
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
