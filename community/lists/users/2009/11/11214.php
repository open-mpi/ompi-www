<?
$subject_val = "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 05:29:24 2009" -->
<!-- isoreceived="20091117102924" -->
<!-- sent="Tue, 17 Nov 2009 21:29:16 +1100" -->
<!-- isosent="20091117102916" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)" -->
<!-- id="4B027AFC.6080407_at_anu.edu.au" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4491_1258451492_4B027223_4491_5263_1_7409DC78-C200-4C0E-B2F8-880D276709A4_at_anl.gov" -->
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
<strong>Date:</strong> 2009-11-17 05:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11215.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11213.php">Michael Sternberg: "[OMPI users] custom modules per job (PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11215.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11215.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Michael,
<br>
<p>I'm not sure why you dont see Open MPI behaving like other MPI's w.r.t.
<br>
modules/environment on remote MPI tasks - we do.
<br>
<p>xe:~ &gt; qsub -q express -lnodes=2:ppn=8,walltime=10:00,vmem=2gb -I
<br>
qsub: waiting for job 376366.xepbs to start
<br>
qsub: job 376366.xepbs ready
<br>
<p>[dbs900_at_x27 ~]$ module load openmpi
<br>
[dbs900_at_x27 ~]$ mpirun -n 2 --bynode hostname
<br>
x27
<br>
x28
<br>
[dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep FOO
<br>
[dbs900_at_x27 ~]$ setenv FOO BAR
<br>
[dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep FOO
<br>
FOO=BAR
<br>
FOO=BAR
<br>
[dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep amber
<br>
[dbs900_at_x27 ~]$ module load amber
<br>
[dbs900_at_x27 ~]$ mpirun -n 2 --bynode env | grep amber
<br>
LOADEDMODULES=openmpi/1.3.3:amber/9
<br>
PATH=/apps/openmpi/1.3.3/bin:/home/900/dbs900/bin:/bin:/usr/bin::/opt/bin:/usr/X11R6/bin:/opt/pbs/bin:/sbin:/usr/sbin:/apps/amber/9/exe
<br>
_LMFILES_=/apps/Modules/modulefiles/openmpi/1.3.3:/apps/Modules/modulefiles/amber/9
<br>
AMBERHOME=/apps/amber/9
<br>
LOADEDMODULES=openmpi/1.3.3:amber/9
<br>
PATH=/apps/openmpi/1.3.3/bin:/home/900/dbs900/bin:/bin:/usr/bin:/opt/bin:/usr/X11R6/bin:/opt/pbs/bin:/sbin:/usr/sbin:/apps/amber/9/exe
<br>
_LMFILES_=/apps/Modules/modulefiles/openmpi/1.3.3:/apps/Modules/modulefiles/amber/9
<br>
AMBERHOME=/apps/amber/9
<br>
<p>David
<br>
<p><p>Michael Sternberg wrote:
<br>
<span class="quotelev1">&gt; Dear readers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With OpenMPI, how would one go about requesting to load environment modules (of the <a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a> kind) on remote nodes, augmenting those  normally loaded there by shell dotfiles?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Background:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run a RHEL-5/CentOS-5 cluster.  I load a bunch of default modules through /etc/profile.d/ and recommend to users to customize modules in ~/.bashrc.  A problem arises for PBS jobs which might need job-specific modules, e.g., to pick a specific flavor of an application.  With other MPI implementations (ahem) which export all (or judiciously nearly all) environment variables by default, you can say:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	#PBS ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	module load foo		# not for OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	mpirun -np 42 ... \
</span><br>
<span class="quotelev1">&gt; 		bar-app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not so with OpenMPI - any such customization is only effective for processes on the master (=local) node of the job, and any variables changed by a given module would have to be specifically passed via mpirun -x VARNAME.   On the remote nodes, those variables are not available in the dotfiles because they are passed only once orted is live (after dotfile processing by the shell), which then immediately spawns the application binaries (right?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought along the following lines:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) I happen to run Lustre, which would allow writing a file coherently across nodes prior to mpirun, and thus hook into the shell dotfile processing, but that seems rather crude.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) &quot;mpirun -x PATH -x LD_LIBRARY_PATH &#133;&quot; would take care of a lot, but is not really general.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a recommended way?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11215.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11213.php">Michael Sternberg: "[OMPI users] custom modules per job (PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11215.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Reply:</strong> <a href="11215.php">Michael Sternberg: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
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
