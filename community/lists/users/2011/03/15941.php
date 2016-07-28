<?
$subject_val = "Re: [OMPI users] OpenMPI and Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 14:10:57 2011" -->
<!-- isoreceived="20110321181057" -->
<!-- sent="Mon, 21 Mar 2011 12:10:42 -0600" -->
<!-- isosent="20110321181042" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Torque" -->
<!-- id="944F05D3-ACD9-4EE8-93BC-FFB39A630AB7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2423B270-3B75-442D-9F83-DDD37628237C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and Torque<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 14:10:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15942.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15940.php">Jeff Squyres: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>In reply to:</strong> <a href="15937.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15943.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15943.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2011, at 11:59 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I no longer run Torque on my cluster, so my Torqueology is pretty rusty -- but I think there's a Torque command to launch on remote nodes.  tmrsh or pbsrsh or something like that...?
</span><br>
<p>pbsrsh, IIRC
<br>
<p>So run pbsrsh &lt;hostname&gt; printenv to see the environment on a remote node. Etc.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try that and make sure it works.  Open MPI should be using the same API as that command under the covers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also have a dim recollection that the TM API support library(ies?) may not be installed by default.  You may have to ensure that they're available on all nodes...?
</span><br>
<p>This is true - usually not installed by default, and need to be available on all nodes since Torque starts mpiexec on a backend node.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2011, at 1:53 PM, Randall Svancara wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure if there is any extra configuration necessary for torque
</span><br>
<span class="quotelev2">&gt;&gt; to forward the environment.  I have included the output of printenv
</span><br>
<span class="quotelev2">&gt;&gt; for an interactive qsub session.  I am really at a loss here because I
</span><br>
<span class="quotelev2">&gt;&gt; never had this much difficulty making torque run with openmpi.  It has
</span><br>
<span class="quotelev2">&gt;&gt; been mostly a good experience.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Permissions of /tmp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; drwxrwxrwt   4 root root   140 Mar 20 08:57 tmp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec hostname single node:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rsvancara_at_login1 ~]$ qsub -I -lnodes=1:ppn=12
</span><br>
<span class="quotelev2">&gt;&gt; qsub: waiting for job 1667.mgt1.wsuhpc.edu to start
</span><br>
<span class="quotelev2">&gt;&gt; qsub: job 1667.mgt1.wsuhpc.edu ready
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rsvancara_at_node100 ~]$ mpiexec hostname
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; node100
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec hostname two nodes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rsvancara_at_node100 ~]$ mpiexec hostname
</span><br>
<span class="quotelev2">&gt;&gt; [node100:09342] plm:tm: failed to poll for a spawned daemon, return
</span><br>
<span class="quotelev2">&gt;&gt; status = 17002
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 	node99 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPIexec on one node with one cpu:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rsvancara_at_node164 ~]$ mpiexec printenv
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_precondition_transports=5fbd0d3c8e4195f1-80f964226d1575ea
</span><br>
<span class="quotelev2">&gt;&gt; MODULE_VERSION_STACK=3.2.8
</span><br>
<span class="quotelev2">&gt;&gt; MANPATH=/home/software/mpi/intel/openmpi-1.4.3/share/man:/home/software/intel/Compiler/11.1/075/man/en_US:/home/software/intel/Compiler/11.1/075/mkl/man/en_US:/home/software/intel/Compiler/11.1/075/mkl/../man/en_US:/home/software/Modules/3.2.8/share/man:/usr/share/man
</span><br>
<span class="quotelev2">&gt;&gt; HOSTNAME=node164
</span><br>
<span class="quotelev2">&gt;&gt; PBS_VERSION=TORQUE-2.4.7
</span><br>
<span class="quotelev2">&gt;&gt; TERM=xterm
</span><br>
<span class="quotelev2">&gt;&gt; SHELL=/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; HISTSIZE=1000
</span><br>
<span class="quotelev2">&gt;&gt; PBS_JOBNAME=STDIN
</span><br>
<span class="quotelev2">&gt;&gt; PBS_ENVIRONMENT=PBS_INTERACTIVE
</span><br>
<span class="quotelev2">&gt;&gt; PBS_O_WORKDIR=/home/admins/rsvancara
</span><br>
<span class="quotelev2">&gt;&gt; PBS_TASKNUM=1
</span><br>
<span class="quotelev2">&gt;&gt; USER=rsvancara
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/home/software/mpi/intel/openmpi-1.4.3/lib:/home/software/intel/Compiler/11.1/075/lib/intel64:/home/software/intel/Compiler/11.1/075/ipp/em64t/sharedlib:/home/software/intel/Compiler/11.1/075/mkl/lib/em64t:/home/software/intel/Compiler/11.1/075/tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/home/software/intel/Compiler/11.1/075/lib
</span><br>
<span class="quotelev2">&gt;&gt; LS_COLORS=no=00:fi=00:di=00;34:ln=00;36:pi=40;33:so=00;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=00;32:*.cmd=00;32:*.exe=00;32:*.com=00;32:*.btm=00;32:*.bat=00;32:*.sh=00;32:*.csh=00;32:*.tar=00;31:*.tgz=00;31:*.arj=00;31:*.taz=00;31:*.lzh=00;31:*.zip=00;31:*.z=00;31:*.Z=00;31:*.gz=00;31:*.bz2=00;31:*.bz=00;31:*.tz=00;31:*.rpm=00;31:*.cpio=00;31:*.jpg=00;35:*.gif=00;35:*.bmp=00;35:*.xbm=00;35:*.xpm=00;35:*.png=00;35:*.tif=00;35:
</span><br>
<span class="quotelev2">&gt;&gt; PBS_O_HOME=/home/admins/rsvancara
</span><br>
<span class="quotelev2">&gt;&gt; CPATH=/home/software/intel/Compiler/11.1/075/ipp/em64t/include:/home/software/intel/Compiler/11.1/075/mkl/include:/home/software/intel/Compiler/11.1/075/tbb/include
</span><br>
<span class="quotelev2">&gt;&gt; PBS_MOMPORT=15003
</span><br>
<span class="quotelev2">&gt;&gt; PBS_O_QUEUE=batch
</span><br>
<span class="quotelev2">&gt;&gt; NLSPATH=/home/software/intel/Compiler/11.1/075/lib/intel64/locale/%l_%t/%N:/home/software/intel/Compiler/11.1/075/ipp/em64t/lib/locale/%l_%t/%N:/home/software/intel/Compiler/11.1/075/mkl/lib/em64t/locale/%l_%t/%N:/home/software/intel/Compiler/11.1/075/idb/intel64/locale/%l_%t/%N
</span><br>
<span class="quotelev2">&gt;&gt; MODULE_VERSION=3.2.8
</span><br>
<span class="quotelev2">&gt;&gt; MAIL=/var/spool/mail/rsvancara
</span><br>
<span class="quotelev2">&gt;&gt; PBS_O_LOGNAME=rsvancara
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/home/software/mpi/intel/openmpi-1.4.3/bin:/home/software/intel/Compiler/11.1/075/bin/intel64:/home/software/Modules/3.2.8/bin:/bin:/usr/bin:/usr/lpp/mmfs/bin
</span><br>
<span class="quotelev2">&gt;&gt; PBS_O_LANG=en_US.UTF-8
</span><br>
<span class="quotelev2">&gt;&gt; PBS_JOBCOOKIE=D52DE562B685A462849C1136D6B581F9
</span><br>
<span class="quotelev2">&gt;&gt; INPUTRC=/etc/inputrc
</span><br>
<span class="quotelev2">&gt;&gt; PWD=/home/admins/rsvancara
</span><br>
<span class="quotelev2">&gt;&gt; _LMFILES_=/home/software/Modules/3.2.8/modulefiles/modules:/home/software/Modules/3.2.8/modulefiles/null:/home/software/modulefiles/intel/11.1.075:/home/software/modulefiles/openmpi/1.4.3_intel
</span><br>
<span class="quotelev2">&gt;&gt; PBS_NODENUM=0
</span><br>
<span class="quotelev2">&gt;&gt; LANG=C
</span><br>
<span class="quotelev2">&gt;&gt; MODULEPATH=/home/software/Modules/versions:/home/software/Modules/$MODULE_VERSION/modulefiles:/home/software/modulefiles
</span><br>
<span class="quotelev2">&gt;&gt; LOADEDMODULES=modules:null:intel/11.1.075:openmpi/1.4.3_intel
</span><br>
<span class="quotelev2">&gt;&gt; PBS_O_SHELL=/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; PBS_SERVER=mgt1.wsuhpc.edu
</span><br>
<span class="quotelev2">&gt;&gt; PBS_JOBID=1670.mgt1.wsuhpc.edu
</span><br>
<span class="quotelev2">&gt;&gt; SHLVL=1
</span><br>
<span class="quotelev2">&gt;&gt; HOME=/home/admins/rsvancara
</span><br>
<span class="quotelev2">&gt;&gt; INTEL_LICENSES=/home/software/intel/Compiler/11.1/075/licenses:/opt/intel/licenses
</span><br>
<span class="quotelev2">&gt;&gt; PBS_O_HOST=login1
</span><br>
<span class="quotelev2">&gt;&gt; DYLD_LIBRARY_PATH=/home/software/intel/Compiler/11.1/075/tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib
</span><br>
<span class="quotelev2">&gt;&gt; PBS_VNODENUM=0
</span><br>
<span class="quotelev2">&gt;&gt; LOGNAME=rsvancara
</span><br>
<span class="quotelev2">&gt;&gt; PBS_QUEUE=batch
</span><br>
<span class="quotelev2">&gt;&gt; MODULESHOME=/home/software/mpi/intel/openmpi-1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; LESSOPEN=|/usr/bin/lesspipe.sh %s
</span><br>
<span class="quotelev2">&gt;&gt; PBS_O_MAIL=/var/spool/mail/rsvancara
</span><br>
<span class="quotelev2">&gt;&gt; G_BROKEN_FILENAMES=1
</span><br>
<span class="quotelev2">&gt;&gt; PBS_NODEFILE=/var/spool/torque/aux//1670.mgt1.wsuhpc.edu
</span><br>
<span class="quotelev2">&gt;&gt; PBS_O_PATH=/home/software/mpi/intel/openmpi-1.4.3/bin:/home/software/intel/Compiler/11.1/075/bin/intel64:/home/software/Modules/3.2.8/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/lpp/mmfs/bin
</span><br>
<span class="quotelev2">&gt;&gt; module=() {  eval `/home/software/Modules/$MODULE_VERSION/bin/modulecmd bash $*`
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; _=/home/software/mpi/intel/openmpi-1.4.3/bin/mpiexec
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_local_daemon_uri=3236233216.0;tcp://172.20.102.82:33559;tcp://172.40.102.82:33559
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_hnp_uri=3236233216.0;tcp://172.20.102.82:33559;tcp://172.40.102.82:33559
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_mpi_yield_when_idle=0
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_app_num=0
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_UNIVERSE_SIZE=1
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_ess=env
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_ess_num_procs=1
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_SIZE=1
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_LOCAL_SIZE=1
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_ess_jobid=3236233217
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_ess_vpid=0
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_LOCAL_RANK=0
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_OUTPUT_STDERR_FD=19
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPIExec with -mca plm rsh:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rsvancara_at_node164 ~]$ mpiexec -mca plm rsh -mca orte_tmpdir_base
</span><br>
<span class="quotelev2">&gt;&gt; /fastscratch/admins/tmp hostname
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node164
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; node163
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Mar 21, 2011 at 9:22 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you run anything under TM? Try running &quot;hostname&quot; directly from Torque to see if anything works at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error message is telling you that the Torque daemon on the remote node reported a failure when trying to launch the OMPI daemon. Could be that Torque isn't setup to forward environments so the OMPI daemon isn't finding required libs. You could directly run &quot;printenv&quot; to see how your remote environ is being setup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could be that the tmp dir lacks correct permissions for a user to create the required directories. The OMPI daemon tries to create a session directory in the tmp dir, so failure to do so would indeed cause the launch to fail. You can specify the tmp dir with a cmd line option to mpirun. See &quot;mpirun -h&quot; for info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 21, 2011, at 12:21 AM, Randall Svancara wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a question about using OpenMPI and Torque on stateless nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have compiled openmpi 1.4.3 with --with-tm=/usr/local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --without-slurm using intel compiler version 11.1.075.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I run a simple &quot;hello world&quot; mpi program, I am receiving the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node164:11193] plm:tm: failed to poll for a spawned daemon, return
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status = 17002
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        node163 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        node159 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        node158 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        node157 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        node156 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        node155 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        node154 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        node152 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        node151 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        node150 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        node149 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But if I include:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca plm rsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The job runs just fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am not sure what the problem is with torque or openmpi that prevents
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the process from launching on remote nodes.  I have posted to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; torque list and someone suggested that it may be temporary directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; space that can be causing issues.  I have 100MB allocated to /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any ideas as to why I am having this problem would be appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Randall Svancara
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Randall Svancara
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15942.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15940.php">Jeff Squyres: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>In reply to:</strong> <a href="15937.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15943.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15943.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
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
