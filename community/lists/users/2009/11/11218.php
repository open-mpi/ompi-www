<?
$subject_val = "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 10:10:34 2009" -->
<!-- isoreceived="20091117151034" -->
<!-- sent="Tue, 17 Nov 2009 08:10:25 -0700" -->
<!-- isosent="20091117151025" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)" -->
<!-- id="28D5DE57-D997-43C5-8354-3E419C697AC1_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4B029D28.8020303_at_anu.edu.au" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 10:10:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11219.php">Laurin Müller: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Previous message:</strong> <a href="11217.php">Ralph Castain: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>In reply to:</strong> <a href="11216.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11221.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11221.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11223.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not exactly. It completely depends on how Torque was setup - OMPI isn't forwarding the environment. Torque is.
<br>
<p>We made a design decision at the very beginning of the OMPI project not to forward non-OMPI envars unless directed to do so by the user. I'm afraid I disagree with Michael's claim that other MPIs do forward them - yes, MPICH does, but not all others do.
<br>
<p>The world is bigger than MPICH and OMPI :-)
<br>
<p>Since there is inconsistency in this regard between MPIs, we chose not to forward. Reason was simple: there is no way to know what is safe to forward vs what is not (e.g., what to do with DISPLAY), nor what the underlying environment is trying to forward vs what it isn't. It is very easy to get cross-wise and cause totally unexpected behavior, as users have complained about for years.
<br>
<p>First, if you are using a managed environment like Torque, we recommend that you work with your sys admin to decide how to configure it. This is the best way to resolve a problem.
<br>
<p>Second, if you are not using a managed environment and/or decide not to have that environment do the forwarding, you can tell OMPI to forward the envars you need by specifying them via the -x cmd line option. We already have a request to expand this capability, and I will be doing so as time permits. One option I'll be adding is the reverse of -x - i.e., &quot;forward all envars -except- the specified one(s)&quot;.
<br>
<p>HTH
<br>
ralph
<br>
<p>On Nov 17, 2009, at 5:55 AM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can see the difference - we built Open MPI with tm support.  For some
</span><br>
<span class="quotelev1">&gt; reason, I thought mpirun fed its environment to orted (after orted is
</span><br>
<span class="quotelev1">&gt; launched) so orted can pass it on to MPI tasks.  That should be portable
</span><br>
<span class="quotelev1">&gt; between different launch mechanisms.  But it looks like tm launches
</span><br>
<span class="quotelev1">&gt; orted with the full mpirun environment (at the request of mpirun).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael Sternberg wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi David,
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, your demo is well-chosen and crystal-clear, yet the output is unexpected.  I do not see environment vars passed by default here:
</span><br>
<span class="quotelev2">&gt;&gt; login3$ qsub -l nodes=2:ppn=1 -I
</span><br>
<span class="quotelev2">&gt;&gt; qsub: waiting for job 34683.mds01 to start
</span><br>
<span class="quotelev2">&gt;&gt; qsub: job 34683.mds01 ready
</span><br>
<span class="quotelev2">&gt;&gt; n102$ mpirun -n 2 -machinefile $PBS_NODEFILE hostname
</span><br>
<span class="quotelev2">&gt;&gt; n102
</span><br>
<span class="quotelev2">&gt;&gt; n085
</span><br>
<span class="quotelev2">&gt;&gt; n102$ mpirun -n 2 -machinefile $PBS_NODEFILE env | grep FOO
</span><br>
<span class="quotelev2">&gt;&gt; n102$ export FOO=BAR
</span><br>
<span class="quotelev2">&gt;&gt; n102$ mpirun -n 2 -machinefile $PBS_NODEFILE env | grep FOO
</span><br>
<span class="quotelev2">&gt;&gt; FOO=BAR
</span><br>
<span class="quotelev2">&gt;&gt; n102$ type mpirun
</span><br>
<span class="quotelev2">&gt;&gt; mpirun is hashed (/opt/soft/openmpi-1.3.2-intel10-1/bin/mpirun)
</span><br>
<span class="quotelev2">&gt;&gt; Curious, what do you get upon:
</span><br>
<span class="quotelev2">&gt;&gt; 	where mpirun
</span><br>
<span class="quotelev2">&gt;&gt; I built OpenMPI-1.3.2 here from source with:
</span><br>
<span class="quotelev2">&gt;&gt;    CC=icc  CXX=icpc  FC=ifort  F77=ifort \
</span><br>
<span class="quotelev2">&gt;&gt;    LDFLAGS='-Wl,-z,noexecstack' \
</span><br>
<span class="quotelev2">&gt;&gt;    CFLAGS='-O2 -g -fPIC' \
</span><br>
<span class="quotelev2">&gt;&gt;    CXXFLAGS='-O2 -g -fPIC' \
</span><br>
<span class="quotelev2">&gt;&gt;    FFLAGS='-O2 -g -fPIC' \
</span><br>
<span class="quotelev2">&gt;&gt;    ./configure --prefix=$prefix \
</span><br>
<span class="quotelev2">&gt;&gt;        --with-libnuma=/usr \
</span><br>
<span class="quotelev2">&gt;&gt;        --with-openib=/usr \
</span><br>
<span class="quotelev2">&gt;&gt;        --with-udapl \
</span><br>
<span class="quotelev2">&gt;&gt;        --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt;        --without-tm
</span><br>
<span class="quotelev2">&gt;&gt; I did't find the behavior I saw strange, given that orterun(1) talks only about $OPMI_* and inheritance from the remote shell.  It also mentions a &quot;boot MCA module&quot;, about which I couldn't find much on open-mpi.org - hmm.
</span><br>
<span class="quotelev2">&gt;&gt; In the meantime, I did find a possible solution, namely, to tell ssh to pass a variable using SendEnv/AcceptEnv.  That variable is then seen by and can be interpreted (cautiously) in /etc/profile.d/ scripts.  A user could set it in the job file (or even qalter it post submission):
</span><br>
<span class="quotelev2">&gt;&gt; 	#PBS -v VARNAME=foo:bar:baz
</span><br>
<span class="quotelev2">&gt;&gt; For VARNAME, I think simply &quot;MODULES&quot; or &quot;EXTRAMODULES&quot; could do.
</span><br>
<span class="quotelev2">&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 17, 2009, at 4:29 , David Singleton wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure why you dont see Open MPI behaving like other MPI's w.r.t.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modules/environment on remote MPI tasks - we do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xe:~ &gt; qsub -q express -lnodes=2:ppn=8,walltime=10:00,vmem=2gb -I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qsub: waiting for job 376366.xepbs to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qsub: job 376366.xepbs ready
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dbs900_at_x27 ~]$ module load openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep FOO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dbs900_at_x27 ~]$ setenv FOO BAR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep FOO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FOO=BAR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FOO=BAR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep amber
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dbs900_at_x27 ~]$ module load amber
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep amber
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LOADEDMODULES=openmpi/1.3.3:amber/9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=/apps/openmpi/1.3.3/bin:/home/900/dbs900/bin:/bin:/usr/bin::/opt/bin:/usr/X11R6/bin:/opt/pbs/bin:/sbin:/usr/sbin:/apps/amber/9/exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _LMFILES_=/apps/Modules/modulefiles/openmpi/1.3.3:/apps/Modules/modulefiles/amber/9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AMBERHOME=/apps/amber/9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LOADEDMODULES=openmpi/1.3.3:amber/9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=/apps/openmpi/1.3.3/bin:/home/900/dbs900/bin:/bin:/usr/bin:/opt/bin:/usr/X11R6/bin:/opt/pbs/bin:/sbin:/usr/sbin:/apps/amber/9/exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _LMFILES_=/apps/Modules/modulefiles/openmpi/1.3.3:/apps/Modules/modulefiles/amber/9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AMBERHOME=/apps/amber/9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael Sternberg wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear readers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With OpenMPI, how would one go about requesting to load environment modules (of the <a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a> kind) on remote nodes, augmenting those  normally loaded there by shell dotfiles?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Background:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I run a RHEL-5/CentOS-5 cluster.  I load a bunch of default modules through /etc/profile.d/ and recommend to users to customize modules in ~/.bashrc.  A problem arises for PBS jobs which might need job-specific modules, e.g., to pick a specific flavor of an application.  With other MPI implementations (ahem) which export all (or judiciously nearly all) environment variables by default, you can say:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	#PBS ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	module load foo		# not for OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	mpirun -np 42 ... \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 		bar-app
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not so with OpenMPI - any such customization is only effective for processes on the master (=local) node of the job, and any variables changed by a given module would have to be specifically passed via mpirun -x VARNAME.   On the remote nodes, those variables are not available in the dotfiles because they are passed only once orted is live (after dotfile processing by the shell), which then immediately spawns the application binaries (right?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I thought along the following lines:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (1) I happen to run Lustre, which would allow writing a file coherently across nodes prior to mpirun, and thus hook into the shell dotfile processing, but that seems rather crude.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (2) &quot;mpirun -x PATH -x LD_LIBRARY_PATH &#133;&quot; would take care of a lot, but is not really general.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a recommended way?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   Dr David Singleton               ANU Supercomputer Facility
</span><br>
<span class="quotelev1">&gt;   HPC Systems Manager              and NCI National Facility
</span><br>
<span class="quotelev1">&gt;   David.Singleton_at_[hidden]       Leonard Huxley Bldg (No. 56)
</span><br>
<span class="quotelev1">&gt;   Phone: +61 2 6125 4389           Australian National University
</span><br>
<span class="quotelev1">&gt;   Fax:   +61 2 6125 8199           Canberra, ACT, 0200, Australia
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="11219.php">Laurin Müller: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>Previous message:</strong> <a href="11217.php">Ralph Castain: "Re: [OMPI users] mpirun not working on more than one node"</a>
<li><strong>In reply to:</strong> <a href="11216.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11221.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11221.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11223.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
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
