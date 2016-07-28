<?
$subject_val = "Re: [OMPI users] OpenMPI and Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 15:20:05 2011" -->
<!-- isoreceived="20110321192005" -->
<!-- sent="Mon, 21 Mar 2011 12:19:59 -0700" -->
<!-- isosent="20110321191959" -->
<!-- name="Randall Svancara" -->
<!-- email="rsvancara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Torque" -->
<!-- id="AANLkTi=cROuNJfKtVoL33iVBONkgBeRbKcF1hf2zr68Z_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinoAJwqwb2dDgUDOVsm6Nnw1owhBW4RQ7RC5JJY_at_mail.gmail.com" -->
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
<strong>From:</strong> Randall Svancara (<em>rsvancara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 15:19:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15948.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15946.php">Dominik Goeddeke: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>In reply to:</strong> <a href="15945.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15948.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15948.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.  The pbsdsh tool is great.  I ran an interactive qsub session
<br>
(qsub -I -lnodes=2:ppn=12) and then rand the pbsdsh tool like this:
<br>
<p>[rsvancara_at_node164 ~]$ /usr/local/bin/pbsdsh  -h node164 printenv
<br>
PATH=/bin:/usr/bin
<br>
LANG=C
<br>
PBS_O_HOME=/home/admins/rsvancara
<br>
PBS_O_LANG=en_US.UTF-8
<br>
PBS_O_LOGNAME=rsvancara
<br>
PBS_O_PATH=/home/software/mpi/intel/openmpi-1.4.3/bin:/home/software/intel/Compiler/11.1/075/bin/intel64:/home/software/Modules/3.2.8/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/lpp/mmfs/bin
<br>
PBS_O_MAIL=/var/spool/mail/rsvancara
<br>
PBS_O_SHELL=/bin/bash
<br>
PBS_SERVER=mgt1.wsuhpc.edu
<br>
PBS_O_WORKDIR=/home/admins/rsvancara/TEST
<br>
PBS_O_QUEUE=batch
<br>
PBS_O_HOST=login1
<br>
HOME=/home/admins/rsvancara
<br>
PBS_JOBNAME=STDIN
<br>
PBS_JOBID=1672.mgt1.wsuhpc.edu
<br>
PBS_QUEUE=batch
<br>
PBS_JOBCOOKIE=50E4985E63684BA781EE9294F21EE25E
<br>
PBS_NODENUM=0
<br>
PBS_TASKNUM=146
<br>
PBS_MOMPORT=15003
<br>
PBS_NODEFILE=/var/spool/torque/aux//1672.mgt1.wsuhpc.edu
<br>
PBS_VERSION=TORQUE-2.4.7
<br>
PBS_VNODENUM=0
<br>
PBS_ENVIRONMENT=PBS_BATCH
<br>
ENVIRONMENT=BATCH
<br>
[rsvancara_at_node164 ~]$ /usr/local/bin/pbsdsh  -h node163 printenv
<br>
PATH=/bin:/usr/bin
<br>
LANG=C
<br>
PBS_O_HOME=/home/admins/rsvancara
<br>
PBS_O_LANG=en_US.UTF-8
<br>
PBS_O_LOGNAME=rsvancara
<br>
PBS_O_PATH=/home/software/mpi/intel/openmpi-1.4.3/bin:/home/software/intel/Compiler/11.1/075/bin/intel64:/home/software/Modules/3.2.8/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/lpp/mmfs/bin
<br>
PBS_O_MAIL=/var/spool/mail/rsvancara
<br>
PBS_O_SHELL=/bin/bash
<br>
PBS_SERVER=mgt1.wsuhpc.edu
<br>
PBS_O_WORKDIR=/home/admins/rsvancara/TEST
<br>
PBS_O_QUEUE=batch
<br>
PBS_O_HOST=login1
<br>
HOME=/home/admins/rsvancara
<br>
PBS_JOBNAME=STDIN
<br>
PBS_JOBID=1672.mgt1.wsuhpc.edu
<br>
PBS_QUEUE=batch
<br>
PBS_JOBCOOKIE=50E4985E63684BA781EE9294F21EE25E
<br>
PBS_NODENUM=1
<br>
PBS_TASKNUM=147
<br>
PBS_MOMPORT=15003
<br>
PBS_VERSION=TORQUE-2.4.7
<br>
PBS_VNODENUM=12
<br>
PBS_ENVIRONMENT=PBS_BATCH
<br>
ENVIRONMENT=BATCH
<br>
<p>So one thing that strikes me as bad is the LD_LIBRARY_PATH does not
<br>
appear available.  Attempted to run mpiexec like this and it fails.
<br>
<p>[rsvancara_at_node164 ~]$ /usr/local/bin/pbsdsh  -h node163
<br>
/home/software/mpi/intel/openmpi-1.4.3/bin/mpiexec hostname
<br>
/home/software/mpi/intel/openmpi-1.4.3/bin/mpiexec: error while
<br>
loading shared libraries: libimf.so: cannot open shared object file:
<br>
No such file or directory
<br>
pbsdsh: task 12 exit status 127
<br>
[rsvancara_at_node164 ~]$ /usr/local/bin/pbsdsh  -h node164
<br>
/home/software/mpi/intel/openmpi-1.4.3/bin/mpiexec hostname
<br>
/home/software/mpi/intel/openmpi-1.4.3/bin/mpiexec: error while
<br>
loading shared libraries: libimf.so: cannot open shared object file:
<br>
No such file or directory
<br>
pbsdsh: task 0 exit status 127
<br>
<p>If this is how the openmpi processes are being launched, then it is no
<br>
wonder they are failing and the LD_LIBRARY_PATH error message is
<br>
indeed somewhat accurate.
<br>
<p>So the next question is how to I ensure that this information is
<br>
available to pbsdsh?
<br>
<p>Thanks,
<br>
<p>Randall
<br>
<p><p>On Mon, Mar 21, 2011 at 11:24 AM, Randall Svancara &lt;rsvancara_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Ok, these are good things to check. &#160;I am going to follow through with
</span><br>
<span class="quotelev1">&gt; this in the next hour after our GPFS upgrade. &#160;Thanks!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 21, 2011 at 11:14 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2011, at 1:59 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I no longer run Torque on my cluster, so my Torqueology is pretty rusty -- but I think there's a Torque command to launch on remote nodes. &#160;tmrsh or pbsrsh or something like that...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pbsdsh
</span><br>
<span class="quotelev2">&gt;&gt; If TM is working pbsdsh should work fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Torque+OpenMPI has been working just fine for us.
</span><br>
<span class="quotelev2">&gt;&gt; Do you have libtorque on all your compute hosts? &#160;You should see it open on all hosts if it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try that and make sure it works. &#160;Open MPI should be using the same API as that command under the covers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also have a dim recollection that the TM API support library(ies?) may not be installed by default. &#160;You may have to ensure that they're available on all nodes...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 21, 2011, at 1:53 PM, Randall Svancara wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am not sure if there is any extra configuration necessary for torque
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to forward the environment. &#160;I have included the output of printenv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for an interactive qsub session. &#160;I am really at a loss here because I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; never had this much difficulty making torque run with openmpi. &#160;It has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; been mostly a good experience.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Permissions of /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; drwxrwxrwt &#160; 4 root root &#160; 140 Mar 20 08:57 tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec hostname single node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rsvancara_at_login1 ~]$ qsub -I -lnodes=1:ppn=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; qsub: waiting for job 1667.mgt1.wsuhpc.edu to start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; qsub: job 1667.mgt1.wsuhpc.edu ready
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rsvancara_at_node100 ~]$ mpiexec hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec hostname two nodes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rsvancara_at_node100 ~]$ mpiexec hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node100:09342] plm:tm: failed to poll for a spawned daemon, return
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status = 17002
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1 &#160;while attempting to
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
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; &#160;node99 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPIexec on one node with one cpu:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rsvancara_at_node164 ~]$ mpiexec printenv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_orte_precondition_transports=5fbd0d3c8e4195f1-80f964226d1575ea
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MODULE_VERSION_STACK=3.2.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MANPATH=/home/software/mpi/intel/openmpi-1.4.3/share/man:/home/software/intel/Compiler/11.1/075/man/en_US:/home/software/intel/Compiler/11.1/075/mkl/man/en_US:/home/software/intel/Compiler/11.1/075/mkl/../man/en_US:/home/software/Modules/3.2.8/share/man:/usr/share/man
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HOSTNAME=node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_VERSION=TORQUE-2.4.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TERM=xterm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SHELL=/bin/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HISTSIZE=1000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_JOBNAME=STDIN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_ENVIRONMENT=PBS_INTERACTIVE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_WORKDIR=/home/admins/rsvancara
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_TASKNUM=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; USER=rsvancara
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/home/software/mpi/intel/openmpi-1.4.3/lib:/home/software/intel/Compiler/11.1/075/lib/intel64:/home/software/intel/Compiler/11.1/075/ipp/em64t/sharedlib:/home/software/intel/Compiler/11.1/075/mkl/lib/em64t:/home/software/intel/Compiler/11.1/075/tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/home/software/intel/Compiler/11.1/075/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LS_COLORS=no=00:fi=00:di=00;34:ln=00;36:pi=40;33:so=00;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=00;32:*.cmd=00;32:*.exe=00;32:*.com=00;32:*.btm=00;32:*.bat=00;32:*.sh=00;32:*.csh=00;32:*.tar=00;31:*.tgz=00;31:*.arj=00;31:*.taz=00;31:*.lzh=00;31:*.zip=00;31:*.z=00;31:*.Z=00;31:*.gz=00;31:*.bz2=00;31:*.bz=00;31:*.tz=00;31:*.rpm=00;31:*.cpio=00;31:*.jpg=00;35:*.gif=00;35:*.bmp=00;35:*.xbm=00;35:*.xpm=00;35:*.png=00;35:*.tif=00;35:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_HOME=/home/admins/rsvancara
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CPATH=/home/software/intel/Compiler/11.1/075/ipp/em64t/include:/home/software/intel/Compiler/11.1/075/mkl/include:/home/software/intel/Compiler/11.1/075/tbb/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_MOMPORT=15003
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_QUEUE=batch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NLSPATH=/home/software/intel/Compiler/11.1/075/lib/intel64/locale/%l_%t/%N:/home/software/intel/Compiler/11.1/075/ipp/em64t/lib/locale/%l_%t/%N:/home/software/intel/Compiler/11.1/075/mkl/lib/em64t/locale/%l_%t/%N:/home/software/intel/Compiler/11.1/075/idb/intel64/locale/%l_%t/%N
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MODULE_VERSION=3.2.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MAIL=/var/spool/mail/rsvancara
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_LOGNAME=rsvancara
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=/home/software/mpi/intel/openmpi-1.4.3/bin:/home/software/intel/Compiler/11.1/075/bin/intel64:/home/software/Modules/3.2.8/bin:/bin:/usr/bin:/usr/lpp/mmfs/bin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_LANG=en_US.UTF-8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_JOBCOOKIE=D52DE562B685A462849C1136D6B581F9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INPUTRC=/etc/inputrc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PWD=/home/admins/rsvancara
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _LMFILES_=/home/software/Modules/3.2.8/modulefiles/modules:/home/software/Modules/3.2.8/modulefiles/null:/home/software/modulefiles/intel/11.1.075:/home/software/modulefiles/openmpi/1.4.3_intel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_NODENUM=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LANG=C
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MODULEPATH=/home/software/Modules/versions:/home/software/Modules/$MODULE_VERSION/modulefiles:/home/software/modulefiles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LOADEDMODULES=modules:null:intel/11.1.075:openmpi/1.4.3_intel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_SHELL=/bin/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_SERVER=mgt1.wsuhpc.edu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_JOBID=1670.mgt1.wsuhpc.edu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SHLVL=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HOME=/home/admins/rsvancara
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INTEL_LICENSES=/home/software/intel/Compiler/11.1/075/licenses:/opt/intel/licenses
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_HOST=login1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DYLD_LIBRARY_PATH=/home/software/intel/Compiler/11.1/075/tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_VNODENUM=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LOGNAME=rsvancara
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_QUEUE=batch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MODULESHOME=/home/software/mpi/intel/openmpi-1.4.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LESSOPEN=|/usr/bin/lesspipe.sh %s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_MAIL=/var/spool/mail/rsvancara
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; G_BROKEN_FILENAMES=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_NODEFILE=/var/spool/torque/aux//1670.mgt1.wsuhpc.edu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS_O_PATH=/home/software/mpi/intel/openmpi-1.4.3/bin:/home/software/intel/Compiler/11.1/075/bin/intel64:/home/software/Modules/3.2.8/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/lpp/mmfs/bin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module=() { &#160;eval `/home/software/Modules/$MODULE_VERSION/bin/modulecmd bash $*`
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _=/home/software/mpi/intel/openmpi-1.4.3/bin/mpiexec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_orte_local_daemon_uri=3236233216.0;tcp://172.20.102.82:33559;tcp://172.40.102.82:33559
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_orte_hnp_uri=3236233216.0;tcp://172.20.102.82:33559;tcp://172.40.102.82:33559
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_mpi_yield_when_idle=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_orte_app_num=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_UNIVERSE_SIZE=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_ess=env
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_orte_ess_num_procs=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_COMM_WORLD_SIZE=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_COMM_WORLD_LOCAL_SIZE=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_orte_ess_jobid=3236233217
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_orte_ess_vpid=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_COMM_WORLD_RANK=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_COMM_WORLD_LOCAL_RANK=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL_OUTPUT_STDERR_FD=19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPIExec with -mca plm rsh:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rsvancara_at_node164 ~]$ mpiexec -mca plm rsh -mca orte_tmpdir_base
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /fastscratch/admins/tmp hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node164
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node163
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Mar 21, 2011 at 9:22 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you run anything under TM? Try running &quot;hostname&quot; directly from Torque to see if anything works at all.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The error message is telling you that the Torque daemon on the remote node reported a failure when trying to launch the OMPI daemon. Could be that Torque isn't setup to forward environments so the OMPI daemon isn't finding required libs. You could directly run &quot;printenv&quot; to see how your remote environ is being setup.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Could be that the tmp dir lacks correct permissions for a user to create the required directories. The OMPI daemon tries to create a session directory in the tmp dir, so failure to do so would indeed cause the launch to fail. You can specify the tmp dir with a cmd line option to mpirun. See &quot;mpirun -h&quot; for info.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 21, 2011, at 12:21 AM, Randall Svancara wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have a question about using OpenMPI and Torque on stateless nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have compiled openmpi 1.4.3 with --with-tm=/usr/local
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --without-slurm using intel compiler version 11.1.075.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When I run a simple &quot;hello world&quot; mpi program, I am receiving the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; following error.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [node164:11193] plm:tm: failed to poll for a spawned daemon, return
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; status = 17002
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1 &#160;while attempting to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpiexec noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpiexec was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;node163 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;node159 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;node158 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;node157 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;node156 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;node155 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;node154 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;node152 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;node151 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;node150 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;node149 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But if I include:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The job runs just fine.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am not sure what the problem is with torque or openmpi that prevents
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the process from launching on remote nodes. &#160;I have posted to the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; torque list and someone suggested that it may be temporary directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; space that can be causing issues. &#160;I have 100MB allocated to /tmp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any ideas as to why I am having this problem would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Randall Svancara
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Randall Svancara
</span><br>
<span class="quotelev1">&gt; <a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Randall Svancara
<a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15948.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15946.php">Dominik Goeddeke: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>In reply to:</strong> <a href="15945.php">Randall Svancara: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15948.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15948.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
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
