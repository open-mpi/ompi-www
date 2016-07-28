<?
$subject_val = "Re: [OMPI users] OpenMPI and Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 13:53:25 2011" -->
<!-- isoreceived="20110321175325" -->
<!-- sent="Mon, 21 Mar 2011 10:53:19 -0700" -->
<!-- isosent="20110321175319" -->
<!-- name="Randall Svancara" -->
<!-- email="rsvancara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Torque" -->
<!-- id="AANLkTikWhq8KNm4Oaa_a9oHaBKzCKQbtjj9Eprs59dmW_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C459A414-B324-4AE8-89F5-57228AACAA7E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-03-21 13:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15937.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15935.php">Ralph Castain: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>In reply to:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15937.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15937.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15939.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not sure if there is any extra configuration necessary for torque
<br>
to forward the environment.  I have included the output of printenv
<br>
for an interactive qsub session.  I am really at a loss here because I
<br>
never had this much difficulty making torque run with openmpi.  It has
<br>
been mostly a good experience.
<br>
<p>Permissions of /tmp
<br>
<p>drwxrwxrwt   4 root root   140 Mar 20 08:57 tmp
<br>
<p>mpiexec hostname single node:
<br>
<p>[rsvancara_at_login1 ~]$ qsub -I -lnodes=1:ppn=12
<br>
qsub: waiting for job 1667.mgt1.wsuhpc.edu to start
<br>
qsub: job 1667.mgt1.wsuhpc.edu ready
<br>
<p>[rsvancara_at_node100 ~]$ mpiexec hostname
<br>
node100
<br>
node100
<br>
node100
<br>
node100
<br>
node100
<br>
node100
<br>
node100
<br>
node100
<br>
node100
<br>
node100
<br>
node100
<br>
node100
<br>
<p>mpiexec hostname two nodes:
<br>
<p>[rsvancara_at_node100 ~]$ mpiexec hostname
<br>
[node100:09342] plm:tm: failed to poll for a spawned daemon, return
<br>
status = 17002
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node99 - daemon did not report back when launched
<br>
<p><p>MPIexec on one node with one cpu:
<br>
<p>[rsvancara_at_node164 ~]$ mpiexec printenv
<br>
OMPI_MCA_orte_precondition_transports=5fbd0d3c8e4195f1-80f964226d1575ea
<br>
MODULE_VERSION_STACK=3.2.8
<br>
MANPATH=/home/software/mpi/intel/openmpi-1.4.3/share/man:/home/software/intel/Compiler/11.1/075/man/en_US:/home/software/intel/Compiler/11.1/075/mkl/man/en_US:/home/software/intel/Compiler/11.1/075/mkl/../man/en_US:/home/software/Modules/3.2.8/share/man:/usr/share/man
<br>
HOSTNAME=node164
<br>
PBS_VERSION=TORQUE-2.4.7
<br>
TERM=xterm
<br>
SHELL=/bin/bash
<br>
HISTSIZE=1000
<br>
PBS_JOBNAME=STDIN
<br>
PBS_ENVIRONMENT=PBS_INTERACTIVE
<br>
PBS_O_WORKDIR=/home/admins/rsvancara
<br>
PBS_TASKNUM=1
<br>
USER=rsvancara
<br>
LD_LIBRARY_PATH=/home/software/mpi/intel/openmpi-1.4.3/lib:/home/software/intel/Compiler/11.1/075/lib/intel64:/home/software/intel/Compiler/11.1/075/ipp/em64t/sharedlib:/home/software/intel/Compiler/11.1/075/mkl/lib/em64t:/home/software/intel/Compiler/11.1/075/tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib:/home/software/intel/Compiler/11.1/075/lib
<br>
LS_COLORS=no=00:fi=00:di=00;34:ln=00;36:pi=40;33:so=00;35:bd=40;33;01:cd=40;33;01:or=01;05;37;41:mi=01;05;37;41:ex=00;32:*.cmd=00;32:*.exe=00;32:*.com=00;32:*.btm=00;32:*.bat=00;32:*.sh=00;32:*.csh=00;32:*.tar=00;31:*.tgz=00;31:*.arj=00;31:*.taz=00;31:*.lzh=00;31:*.zip=00;31:*.z=00;31:*.Z=00;31:*.gz=00;31:*.bz2=00;31:*.bz=00;31:*.tz=00;31:*.rpm=00;31:*.cpio=00;31:*.jpg=00;35:*.gif=00;35:*.bmp=00;35:*.xbm=00;35:*.xpm=00;35:*.png=00;35:*.tif=00;35:
<br>
PBS_O_HOME=/home/admins/rsvancara
<br>
CPATH=/home/software/intel/Compiler/11.1/075/ipp/em64t/include:/home/software/intel/Compiler/11.1/075/mkl/include:/home/software/intel/Compiler/11.1/075/tbb/include
<br>
PBS_MOMPORT=15003
<br>
PBS_O_QUEUE=batch
<br>
NLSPATH=/home/software/intel/Compiler/11.1/075/lib/intel64/locale/%l_%t/%N:/home/software/intel/Compiler/11.1/075/ipp/em64t/lib/locale/%l_%t/%N:/home/software/intel/Compiler/11.1/075/mkl/lib/em64t/locale/%l_%t/%N:/home/software/intel/Compiler/11.1/075/idb/intel64/locale/%l_%t/%N
<br>
MODULE_VERSION=3.2.8
<br>
MAIL=/var/spool/mail/rsvancara
<br>
PBS_O_LOGNAME=rsvancara
<br>
PATH=/home/software/mpi/intel/openmpi-1.4.3/bin:/home/software/intel/Compiler/11.1/075/bin/intel64:/home/software/Modules/3.2.8/bin:/bin:/usr/bin:/usr/lpp/mmfs/bin
<br>
PBS_O_LANG=en_US.UTF-8
<br>
PBS_JOBCOOKIE=D52DE562B685A462849C1136D6B581F9
<br>
INPUTRC=/etc/inputrc
<br>
PWD=/home/admins/rsvancara
<br>
_LMFILES_=/home/software/Modules/3.2.8/modulefiles/modules:/home/software/Modules/3.2.8/modulefiles/null:/home/software/modulefiles/intel/11.1.075:/home/software/modulefiles/openmpi/1.4.3_intel
<br>
PBS_NODENUM=0
<br>
LANG=C
<br>
MODULEPATH=/home/software/Modules/versions:/home/software/Modules/$MODULE_VERSION/modulefiles:/home/software/modulefiles
<br>
LOADEDMODULES=modules:null:intel/11.1.075:openmpi/1.4.3_intel
<br>
PBS_O_SHELL=/bin/bash
<br>
PBS_SERVER=mgt1.wsuhpc.edu
<br>
PBS_JOBID=1670.mgt1.wsuhpc.edu
<br>
SHLVL=1
<br>
HOME=/home/admins/rsvancara
<br>
INTEL_LICENSES=/home/software/intel/Compiler/11.1/075/licenses:/opt/intel/licenses
<br>
PBS_O_HOST=login1
<br>
DYLD_LIBRARY_PATH=/home/software/intel/Compiler/11.1/075/tbb/intel64/cc4.1.0_libc2.4_kernel2.6.16.21/lib
<br>
PBS_VNODENUM=0
<br>
LOGNAME=rsvancara
<br>
PBS_QUEUE=batch
<br>
MODULESHOME=/home/software/mpi/intel/openmpi-1.4.3
<br>
LESSOPEN=|/usr/bin/lesspipe.sh %s
<br>
PBS_O_MAIL=/var/spool/mail/rsvancara
<br>
G_BROKEN_FILENAMES=1
<br>
PBS_NODEFILE=/var/spool/torque/aux//1670.mgt1.wsuhpc.edu
<br>
PBS_O_PATH=/home/software/mpi/intel/openmpi-1.4.3/bin:/home/software/intel/Compiler/11.1/075/bin/intel64:/home/software/Modules/3.2.8/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/lpp/mmfs/bin
<br>
module=() {  eval `/home/software/Modules/$MODULE_VERSION/bin/modulecmd bash $*`
<br>
}
<br>
_=/home/software/mpi/intel/openmpi-1.4.3/bin/mpiexec
<br>
OMPI_MCA_orte_local_daemon_uri=3236233216.0;tcp://172.20.102.82:33559;tcp://172.40.102.82:33559
<br>
OMPI_MCA_orte_hnp_uri=3236233216.0;tcp://172.20.102.82:33559;tcp://172.40.102.82:33559
<br>
OMPI_MCA_mpi_yield_when_idle=0
<br>
OMPI_MCA_orte_app_num=0
<br>
OMPI_UNIVERSE_SIZE=1
<br>
OMPI_MCA_ess=env
<br>
OMPI_MCA_orte_ess_num_procs=1
<br>
OMPI_COMM_WORLD_SIZE=1
<br>
OMPI_COMM_WORLD_LOCAL_SIZE=1
<br>
OMPI_MCA_orte_ess_jobid=3236233217
<br>
OMPI_MCA_orte_ess_vpid=0
<br>
OMPI_COMM_WORLD_RANK=0
<br>
OMPI_COMM_WORLD_LOCAL_RANK=0
<br>
OPAL_OUTPUT_STDERR_FD=19
<br>
<p>MPIExec with -mca plm rsh:
<br>
<p>[rsvancara_at_node164 ~]$ mpiexec -mca plm rsh -mca orte_tmpdir_base
<br>
/fastscratch/admins/tmp hostname
<br>
node164
<br>
node164
<br>
node164
<br>
node164
<br>
node164
<br>
node164
<br>
node164
<br>
node164
<br>
node164
<br>
node164
<br>
node164
<br>
node164
<br>
node163
<br>
node163
<br>
node163
<br>
node163
<br>
node163
<br>
node163
<br>
node163
<br>
node163
<br>
node163
<br>
node163
<br>
node163
<br>
node163
<br>
<p><p>On Mon, Mar 21, 2011 at 9:22 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Can you run anything under TM? Try running &quot;hostname&quot; directly from Torque to see if anything works at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error message is telling you that the Torque daemon on the remote node reported a failure when trying to launch the OMPI daemon. Could be that Torque isn't setup to forward environments so the OMPI daemon isn't finding required libs. You could directly run &quot;printenv&quot; to see how your remote environ is being setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could be that the tmp dir lacks correct permissions for a user to create the required directories. The OMPI daemon tries to create a session directory in the tmp dir, so failure to do so would indeed cause the launch to fail. You can specify the tmp dir with a cmd line option to mpirun. See &quot;mpirun -h&quot; for info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2011, at 12:21 AM, Randall Svancara wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a question about using OpenMPI and Torque on stateless nodes.
</span><br>
<span class="quotelev2">&gt;&gt; I have compiled openmpi 1.4.3 with --with-tm=/usr/local
</span><br>
<span class="quotelev2">&gt;&gt; --without-slurm using intel compiler version 11.1.075.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I run a simple &quot;hello world&quot; mpi program, I am receiving the
</span><br>
<span class="quotelev2">&gt;&gt; following error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [node164:11193] plm:tm: failed to poll for a spawned daemon, return
</span><br>
<span class="quotelev2">&gt;&gt; status = 17002
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1 &#160;while attempting to
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
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node163 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node159 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node158 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node157 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node156 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node155 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node154 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node152 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node151 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node150 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node149 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But if I include:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca plm rsh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The job runs just fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure what the problem is with torque or openmpi that prevents
</span><br>
<span class="quotelev2">&gt;&gt; the process from launching on remote nodes. &#160;I have posted to the
</span><br>
<span class="quotelev2">&gt;&gt; torque list and someone suggested that it may be temporary directory
</span><br>
<span class="quotelev2">&gt;&gt; space that can be causing issues. &#160;I have 100MB allocated to /tmp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas as to why I am having this problem would be appreciated.
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
<p><p><p><pre>
-- 
Randall Svancara
<a href="http://knowyourlinux.com/">http://knowyourlinux.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15937.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15935.php">Ralph Castain: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>In reply to:</strong> <a href="15931.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15937.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15937.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Torque"</a>
<li><strong>Reply:</strong> <a href="15939.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Torque"</a>
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
