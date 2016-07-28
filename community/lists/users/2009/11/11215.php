<?
$subject_val = "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 07:23:25 2009" -->
<!-- isoreceived="20091117122325" -->
<!-- sent="Tue, 17 Nov 2009 06:23:16 -0600" -->
<!-- isosent="20091117122316" -->
<!-- name="Michael Sternberg" -->
<!-- email="sternberg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)" -->
<!-- id="4DC60189-462D-43A7-8678-4AA313B3D7C4_at_anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4B027AFC.6080407_at_anu.edu.au" -->
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
<strong>From:</strong> Michael Sternberg (<em>sternberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 07:23:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11216.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11214.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="11214.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11216.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11216.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David,
<br>
<p>Hmm, your demo is well-chosen and crystal-clear, yet the output is unexpected.  I do not see environment vars passed by default here:
<br>
<p><p>login3$ qsub -l nodes=2:ppn=1 -I
<br>
qsub: waiting for job 34683.mds01 to start
<br>
qsub: job 34683.mds01 ready
<br>
<p>n102$ mpirun -n 2 -machinefile $PBS_NODEFILE hostname
<br>
n102
<br>
n085
<br>
n102$ mpirun -n 2 -machinefile $PBS_NODEFILE env | grep FOO
<br>
n102$ export FOO=BAR
<br>
n102$ mpirun -n 2 -machinefile $PBS_NODEFILE env | grep FOO
<br>
FOO=BAR
<br>
n102$ type mpirun
<br>
mpirun is hashed (/opt/soft/openmpi-1.3.2-intel10-1/bin/mpirun)
<br>
<p><p>Curious, what do you get upon:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;where mpirun
<br>
<p><p>I built OpenMPI-1.3.2 here from source with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;CC=icc  CXX=icpc  FC=ifort  F77=ifort \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LDFLAGS='-Wl,-z,noexecstack' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS='-O2 -g -fPIC' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CXXFLAGS='-O2 -g -fPIC' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FFLAGS='-O2 -g -fPIC' \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=$prefix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-libnuma=/usr \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib=/usr \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-udapl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-tm
<br>
<p><p>I did't find the behavior I saw strange, given that orterun(1) talks only about $OPMI_* and inheritance from the remote shell.  It also mentions a &quot;boot MCA module&quot;, about which I couldn't find much on open-mpi.org - hmm.
<br>
<p><p>In the meantime, I did find a possible solution, namely, to tell ssh to pass a variable using SendEnv/AcceptEnv.  That variable is then seen by and can be interpreted (cautiously) in /etc/profile.d/ scripts.  A user could set it in the job file (or even qalter it post submission):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#PBS -v VARNAME=foo:bar:baz
<br>
<p>For VARNAME, I think simply &quot;MODULES&quot; or &quot;EXTRAMODULES&quot; could do.
<br>
<p><p>With best regards,
<br>
Michael
<br>
<p><p><p>On Nov 17, 2009, at 4:29 , David Singleton wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure why you dont see Open MPI behaving like other MPI's w.r.t.
</span><br>
<span class="quotelev1">&gt; modules/environment on remote MPI tasks - we do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; xe:~ &gt; qsub -q express -lnodes=2:ppn=8,walltime=10:00,vmem=2gb -I
</span><br>
<span class="quotelev1">&gt; qsub: waiting for job 376366.xepbs to start
</span><br>
<span class="quotelev1">&gt; qsub: job 376366.xepbs ready
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dbs900_at_x27 ~]$ module load openmpi
</span><br>
<span class="quotelev1">&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode hostname
</span><br>
<span class="quotelev1">&gt; x27
</span><br>
<span class="quotelev1">&gt; x28
</span><br>
<span class="quotelev1">&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep FOO
</span><br>
<span class="quotelev1">&gt; [dbs900_at_x27 ~]$ setenv FOO BAR
</span><br>
<span class="quotelev1">&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep FOO
</span><br>
<span class="quotelev1">&gt; FOO=BAR
</span><br>
<span class="quotelev1">&gt; FOO=BAR
</span><br>
<span class="quotelev1">&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep amber
</span><br>
<span class="quotelev1">&gt; [dbs900_at_x27 ~]$ module load amber
</span><br>
<span class="quotelev1">&gt; [dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep amber
</span><br>
<span class="quotelev1">&gt; LOADEDMODULES=openmpi/1.3.3:amber/9
</span><br>
<span class="quotelev1">&gt; PATH=/apps/openmpi/1.3.3/bin:/home/900/dbs900/bin:/bin:/usr/bin::/opt/bin:/usr/X11R6/bin:/opt/pbs/bin:/sbin:/usr/sbin:/apps/amber/9/exe
</span><br>
<span class="quotelev1">&gt; _LMFILES_=/apps/Modules/modulefiles/openmpi/1.3.3:/apps/Modules/modulefiles/amber/9
</span><br>
<span class="quotelev1">&gt; AMBERHOME=/apps/amber/9
</span><br>
<span class="quotelev1">&gt; LOADEDMODULES=openmpi/1.3.3:amber/9
</span><br>
<span class="quotelev1">&gt; PATH=/apps/openmpi/1.3.3/bin:/home/900/dbs900/bin:/bin:/usr/bin:/opt/bin:/usr/X11R6/bin:/opt/pbs/bin:/sbin:/usr/sbin:/apps/amber/9/exe
</span><br>
<span class="quotelev1">&gt; _LMFILES_=/apps/Modules/modulefiles/openmpi/1.3.3:/apps/Modules/modulefiles/amber/9
</span><br>
<span class="quotelev1">&gt; AMBERHOME=/apps/amber/9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael Sternberg wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear readers,
</span><br>
<span class="quotelev2">&gt;&gt; With OpenMPI, how would one go about requesting to load environment modules (of the <a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a> kind) on remote nodes, augmenting those  normally loaded there by shell dotfiles?
</span><br>
<span class="quotelev2">&gt;&gt; Background:
</span><br>
<span class="quotelev2">&gt;&gt; I run a RHEL-5/CentOS-5 cluster.  I load a bunch of default modules through /etc/profile.d/ and recommend to users to customize modules in ~/.bashrc.  A problem arises for PBS jobs which might need job-specific modules, e.g., to pick a specific flavor of an application.  With other MPI implementations (ahem) which export all (or judiciously nearly all) environment variables by default, you can say:
</span><br>
<span class="quotelev2">&gt;&gt; 	#PBS ...
</span><br>
<span class="quotelev2">&gt;&gt; 	module load foo		# not for OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun -np 42 ... \
</span><br>
<span class="quotelev2">&gt;&gt; 		bar-app
</span><br>
<span class="quotelev2">&gt;&gt; Not so with OpenMPI - any such customization is only effective for processes on the master (=local) node of the job, and any variables changed by a given module would have to be specifically passed via mpirun -x VARNAME.   On the remote nodes, those variables are not available in the dotfiles because they are passed only once orted is live (after dotfile processing by the shell), which then immediately spawns the application binaries (right?)
</span><br>
<span class="quotelev2">&gt;&gt; I thought along the following lines:
</span><br>
<span class="quotelev2">&gt;&gt; (1) I happen to run Lustre, which would allow writing a file coherently across nodes prior to mpirun, and thus hook into the shell dotfile processing, but that seems rather crude.
</span><br>
<span class="quotelev2">&gt;&gt; (2) &quot;mpirun -x PATH -x LD_LIBRARY_PATH &#133;&quot; would take care of a lot, but is not really general.
</span><br>
<span class="quotelev2">&gt;&gt; Is there a recommended way?
</span><br>
<span class="quotelev2">&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11215/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11216.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11214.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="11214.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11216.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11216.php">David Singleton: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
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
