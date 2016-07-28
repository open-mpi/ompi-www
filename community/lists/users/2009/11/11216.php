<?
$subject_val = "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 07:55:13 2009" -->
<!-- isoreceived="20091117125513" -->
<!-- sent="Tue, 17 Nov 2009 23:55:04 +1100" -->
<!-- isosent="20091117125504" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)" -->
<!-- id="4B029D28.8020303_at_anu.edu.au" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4DC60189-462D-43A7-8678-4AA313B3D7C4_at_anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 07:55:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11217.php">Ralph Castain: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Previous message:</strong> <a href="11215.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="11215.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11218.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11218.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can see the difference - we built Open MPI with tm support.  For some
<br>
reason, I thought mpirun fed its environment to orted (after orted is
<br>
launched) so orted can pass it on to MPI tasks.  That should be portable
<br>
between different launch mechanisms.  But it looks like tm launches
<br>
orted with the full mpirun environment (at the request of mpirun).
<br>
<p>Cheers,
<br>
David
<br>
<p><p>Michael Sternberg wrote:
<br>
<span class="quotelev1">&gt; Hi David,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm, your demo is well-chosen and crystal-clear, yet the output is unexpected.  I do not see environment vars passed by default here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; login3$ qsub -l nodes=2:ppn=1 -I
</span><br>
<span class="quotelev1">&gt; qsub: waiting for job 34683.mds01 to start
</span><br>
<span class="quotelev1">&gt; qsub: job 34683.mds01 ready
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; n102$ mpirun -n 2 -machinefile $PBS_NODEFILE hostname
</span><br>
<span class="quotelev1">&gt; n102
</span><br>
<span class="quotelev1">&gt; n085
</span><br>
<span class="quotelev1">&gt; n102$ mpirun -n 2 -machinefile $PBS_NODEFILE env | grep FOO
</span><br>
<span class="quotelev1">&gt; n102$ export FOO=BAR
</span><br>
<span class="quotelev1">&gt; n102$ mpirun -n 2 -machinefile $PBS_NODEFILE env | grep FOO
</span><br>
<span class="quotelev1">&gt; FOO=BAR
</span><br>
<span class="quotelev1">&gt; n102$ type mpirun
</span><br>
<span class="quotelev1">&gt; mpirun is hashed (/opt/soft/openmpi-1.3.2-intel10-1/bin/mpirun)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Curious, what do you get upon:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	where mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I built OpenMPI-1.3.2 here from source with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     CC=icc  CXX=icpc  FC=ifort  F77=ifort \
</span><br>
<span class="quotelev1">&gt;     LDFLAGS='-Wl,-z,noexecstack' \
</span><br>
<span class="quotelev1">&gt;     CFLAGS='-O2 -g -fPIC' \
</span><br>
<span class="quotelev1">&gt;     CXXFLAGS='-O2 -g -fPIC' \
</span><br>
<span class="quotelev1">&gt;     FFLAGS='-O2 -g -fPIC' \
</span><br>
<span class="quotelev1">&gt;     ./configure --prefix=$prefix \
</span><br>
<span class="quotelev1">&gt;         --with-libnuma=/usr \
</span><br>
<span class="quotelev1">&gt;         --with-openib=/usr \
</span><br>
<span class="quotelev1">&gt;         --with-udapl \
</span><br>
<span class="quotelev1">&gt;         --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;         --without-tm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did't find the behavior I saw strange, given that orterun(1) talks only about $OPMI_* and inheritance from the remote shell.  It also mentions a &quot;boot MCA module&quot;, about which I couldn't find much on open-mpi.org - hmm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the meantime, I did find a possible solution, namely, to tell ssh to pass a variable using SendEnv/AcceptEnv.  That variable is then seen by and can be interpreted (cautiously) in /etc/profile.d/ scripts.  A user could set it in the job file (or even qalter it post submission):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	#PBS -v VARNAME=foo:bar:baz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For VARNAME, I think simply &quot;MODULES&quot; or &quot;EXTRAMODULES&quot; could do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 17, 2009, at 4:29 , David Singleton wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure why you dont see Open MPI behaving like other MPI's w.r.t.
</span><br>
<span class="quotelev2">&gt;&gt; modules/environment on remote MPI tasks - we do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; xe:~ &gt; qsub -q express -lnodes=2:ppn=8,walltime=10:00,vmem=2gb -I
</span><br>
<span class="quotelev2">&gt;&gt; qsub: waiting for job 376366.xepbs to start
</span><br>
<span class="quotelev2">&gt;&gt; qsub: job 376366.xepbs ready
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_x27 ~]$ module load openmpi
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode hostname
</span><br>
<span class="quotelev2">&gt;&gt; x27
</span><br>
<span class="quotelev2">&gt;&gt; x28
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep FOO
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_x27 ~]$ setenv FOO BAR
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep FOO
</span><br>
<span class="quotelev2">&gt;&gt; FOO=BAR
</span><br>
<span class="quotelev2">&gt;&gt; FOO=BAR
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep amber
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_x27 ~]$ module load amber
</span><br>
<span class="quotelev2">&gt;&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep amber
</span><br>
<span class="quotelev2">&gt;&gt; LOADEDMODULES=openmpi/1.3.3:amber/9
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/apps/openmpi/1.3.3/bin:/home/900/dbs900/bin:/bin:/usr/bin::/opt/bin:/usr/X11R6/bin:/opt/pbs/bin:/sbin:/usr/sbin:/apps/amber/9/exe
</span><br>
<span class="quotelev2">&gt;&gt; _LMFILES_=/apps/Modules/modulefiles/openmpi/1.3.3:/apps/Modules/modulefiles/amber/9
</span><br>
<span class="quotelev2">&gt;&gt; AMBERHOME=/apps/amber/9
</span><br>
<span class="quotelev2">&gt;&gt; LOADEDMODULES=openmpi/1.3.3:amber/9
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/apps/openmpi/1.3.3/bin:/home/900/dbs900/bin:/bin:/usr/bin:/opt/bin:/usr/X11R6/bin:/opt/pbs/bin:/sbin:/usr/sbin:/apps/amber/9/exe
</span><br>
<span class="quotelev2">&gt;&gt; _LMFILES_=/apps/Modules/modulefiles/openmpi/1.3.3:/apps/Modules/modulefiles/amber/9
</span><br>
<span class="quotelev2">&gt;&gt; AMBERHOME=/apps/amber/9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael Sternberg wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear readers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With OpenMPI, how would one go about requesting to load environment modules (of the <a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a> kind) on remote nodes, augmenting those  normally loaded there by shell dotfiles?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Background:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I run a RHEL-5/CentOS-5 cluster.  I load a bunch of default modules through /etc/profile.d/ and recommend to users to customize modules in ~/.bashrc.  A problem arises for PBS jobs which might need job-specific modules, e.g., to pick a specific flavor of an application.  With other MPI implementations (ahem) which export all (or judiciously nearly all) environment variables by default, you can say:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	#PBS ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	module load foo		# not for OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mpirun -np 42 ... \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		bar-app
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not so with OpenMPI - any such customization is only effective for processes on the master (=local) node of the job, and any variables changed by a given module would have to be specifically passed via mpirun -x VARNAME.   On the remote nodes, those variables are not available in the dotfiles because they are passed only once orted is live (after dotfile processing by the shell), which then immediately spawns the application binaries (right?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought along the following lines:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1) I happen to run Lustre, which would allow writing a file coherently across nodes prior to mpirun, and thus hook into the shell dotfile processing, but that seems rather crude.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (2) &quot;mpirun -x PATH -x LD_LIBRARY_PATH &#133;&quot; would take care of a lot, but is not really general.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a recommended way?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael
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
<p><p><pre>
-- 
--------------------------------------------------------------------------
    Dr David Singleton               ANU Supercomputer Facility
    HPC Systems Manager              and NCI National Facility
    David.Singleton_at_[hidden]       Leonard Huxley Bldg (No. 56)
    Phone: +61 2 6125 4389           Australian National University
    Fax:   +61 2 6125 8199           Canberra, ACT, 0200, Australia
--------------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11217.php">Ralph Castain: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Previous message:</strong> <a href="11215.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="11215.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11218.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11218.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
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
