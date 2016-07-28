<?
$subject_val = "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 12:19:23 2009" -->
<!-- isoreceived="20090408161923" -->
<!-- sent="Wed, 8 Apr 2009 18:19:18 +0200" -->
<!-- isosent="20090408161918" -->
<!-- name="Alessandro Surace" -->
<!-- email="zioalex_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init" -->
<!-- id="adbbb9af0904080919n8582d26r4bcb4de7ae0ca009_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49DA5FF1.5040309_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init<br>
<strong>From:</strong> Alessandro Surace (<em>zioalex_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 12:19:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8843.php">Francesco Pietra: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>Previous message:</strong> <a href="8841.php">Gus Correa: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>In reply to:</strong> <a href="8792.php">Prentice Bisbal: "Re: [OMPI users] mpirun: symbol lookup error:	/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8865.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Prentice,
<br>
after some tests I've concluded that is not an environment problem;
<br>
following you can see the env printed by a job. And seems correct.
<br>
I've seen if that the library /usr/local/lib/openmpi/mca_plm_lsf is in the
<br>
appropriate location the job fail:
<br>
<span class="quotelev1">&gt; mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: lsb_init
</span><br>
<p>&nbsp;The problem disappaers  if a rename/rmeove the lib
<br>
/usr/local/lib/openmpi/mca_plm_lsf .
<br>
So I think that the LSF support included in the last version on Open mpi
<br>
doesn't interact well with the lsf process that run openmpi jobs ( perhaps
<br>
TaskManager ).
<br>
<p><p>Have you any ideas?
<br>
<p>Bye
<br>
Alex
<br>
<p>+ exec pam -g /opt/lsf/7.0/linux2.6-glibc2.3-x86/bin/openmpi_wrapper
<br>
/mnt/ewd/mpi/hello/hello
<br>
[grid01.ags.wan:11820] mca: base: component_find: unable to open
<br>
/usr/local/lib/openmpi/mca_plm_lsf: file not found (ignored)
<br>
Hello World! from process 2 out of 4 on grid01.ags.wan
<br>
Hello World! from process 3 out of 4 on grid01.ags.wan
<br>
Hello World! from process 1 out of 4 on grid05.ags.wan
<br>
Hello World! from process 0 out of 4 on grid03.ags.wan
<br>
<p>MANPATH=/opt/lsf/7.0/man:
<br>
EGO_CONFDIR=/opt/lsf/conf/ego/grid-cluster-01/kernel
<br>
LSB_EXEC_CLUSTER=grid-cluster-01
<br>
LSF_EAUTH_AUX_PASS=yes
<br>
HOSTNAME=grid01
<br>
EGO_TOP=/opt/lsf
<br>
LSF_LIM_API_NTRIES=1
<br>
LSF_LOGDIR=/opt/lsf/log
<br>
LSB_BATCH_JID=748
<br>
EGO_SERVERDIR=/opt/lsf/7.0/linux2.6-glibc2.3-x86/etc
<br>
LSB_TRAPSIGS=trap # 15 10 12 2 1
<br>
LS_JOBPID=11809
<br>
LSB_JOBRES_CALLBACK=45290_at_grid01
<br>
LSB_JOB_EXECUSER=lsfadmin
<br>
LSB_JOBID=748
<br>
LSF_SERVERDIR=/opt/lsf/7.0/linux2.6-glibc2.3-x86/etc
<br>
LSB_JOBRES_PID=11809
<br>
LSF_TS_OPTIONS=-p grid01:42740 -c /opt/lsf/conf -s
<br>
/opt/lsf/7.0/linux2.6-glibc2.3-x86/etc -a LINUX86
<br>
LSB_JOBNAME=mpirun.lsf /mnt/ewd/mpi/hello/hello
<br>
PM_SOURCE=pam
<br>
LSF_PJL_TYPE=openmpi
<br>
LSF_LIBDIR=/opt/lsf/7.0/linux2.6-glibc2.3-x86/lib
<br>
USER=lsfadmin
<br>
LSB_EEXEC_REAL_UID=
<br>
EGO_LIBDIR=/opt/lsf/7.0/linux2.6-glibc2.3-x86/lib
<br>
HOSTTYPE=LINUX86
<br>
LSF_INVOKE_CMD=bsub
<br>
LS_EXEC_T=START
<br>
LSF_EAUTH_SERVER=mbatchd_at_grid-cluster-01
<br>
LS_SUBCWD=/mnt/ewd/mpi/hello
<br>
LSF_VERSION=7.0
<br>
LSB_DJOB_RU_INTERVAL=15
<br>
LSB_HOSTS=grid01 grid01 grid05 grid03
<br>
LSB_UNIXGROUP_INT=lsfadmin
<br>
LSB_DJOB_HB_INTERVAL=15
<br>
LSB_JOBFILENAME=/home/lsfadmin/.lsbatch/1239206877.748
<br>
LSB_JOBINDEX=0
<br>
PATH=/opt/lsf/7.0/linux2.6-glibc2.3-x86/bin:/opt/lsf/7.0/linux2.6-glibc2.3-x86/etc:/opt/lsf/7.0/linux2.6-glibc2.3-x86/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/home/lsfadmin/bin
<br>
MAIL=/var/spool/mail/lsfadmin
<br>
LSB_EXIT_PRE_ABORT=99
<br>
LSB_JOBEXIT_STAT=0
<br>
LSF_TSOPT_NUM=0
<br>
PWD=/mnt/ewd/mpi/hello
<br>
LSB_CHKFILENAME=/home/lsfadmin/.lsbatch/1239206877.748
<br>
LSF_EAUTH_CLIENT=user
<br>
LSB_DJOB_HOSTFILE=/home/lsfadmin/.lsbatch/1239206877.748.hostfile
<br>
LSF_BINDIR=/opt/lsf/7.0/linux2.6-glibc2.3-x86/bin
<br>
HOME=/home/lsfadmin
<br>
SHLVL=3
<br>
LSB_ACCT_FILE=/tmp/.1239206877.748.acct
<br>
BINARY_TYPE_HPC=
<br>
LSF_PM_MPIARGS=-p4pg /home/lsfadmin/pam_pg.11813
<br>
LSB_SUB_HOST=grid03
<br>
EGO_LOCAL_CONFDIR=/opt/lsf/conf/ego/grid-cluster-01/kernel
<br>
LSFUSER=lsfadmin
<br>
LSB_QUEUE=normal
<br>
LSB_MCPU_HOSTS=grid03 1 grid05 1 grid01 2
<br>
LOGNAME=lsfadmin
<br>
CVS_RSH=ssh
<br>
XLSF_UIDDIR=/opt/lsf/7.0/linux2.6-glibc2.3-x86/lib/uid
<br>
LESSOPEN=|/usr/bin/lesspipe.sh %s
<br>
EGO_ESRVDIR=/opt/lsf/conf/ego/grid-cluster-01/eservice
<br>
LSB_EEXEC_REAL_GID=
<br>
LSF_ENVDIR=/opt/lsf/conf
<br>
LSF_EGO_ENVDIR=/opt/lsf/conf/ego/grid-cluster-01/kernel
<br>
G_BROKEN_FILENAMES=1
<br>
EGO_BINDIR=/opt/lsf/7.0/linux2.6-glibc2.3-x86/bin
<br>
_=/bin/env
<br>
ldd /mnt/ewd/mpi/fibonacci/fibonacci_mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-gate.so.1 =&gt;  (0x40000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/local/lib/libmpi.so.0 (0x40002000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/local/lib/libopen-rte.so.0 (0x40090000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/local/lib/libopen-pal.so.0 (0x400d2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0x00c00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x00cca000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0x03668000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/i686/nosegneg/libm.so.6 (0x00c06000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/i686/nosegneg/libpthread.so.0 (0x00c2f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/i686/nosegneg/libc.so.6 (0x00ab8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld-linux.so.2 (0x00a95000)
<br>
<p><p>On Mon, Apr 6, 2009 at 10:02 PM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Alessandro Surace wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi guys, I try to repost my question...
</span><br>
<span class="quotelev2">&gt; &gt; I've a problem with the last stable build and the last nightly snapshot.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I run a job directly with mpirun no problem.
</span><br>
<span class="quotelev2">&gt; &gt; If I try to submit it with lsf:
</span><br>
<span class="quotelev2">&gt; &gt; bsub -a openmpi -m grid01 mpirun.lsf /mnt/ewd/mpi/fibonacci/fibonacci_mpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get the follow error:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so:
</span><br>
<span class="quotelev2">&gt; &gt; undefined symbol: lsb_init
</span><br>
<span class="quotelev2">&gt; &gt; Job  /opt/lsf/7.0/linux2.6-glibc2.3-x86/bin/openmpi_wrapper
</span><br>
<span class="quotelev2">&gt; &gt; /mnt/ewd/mpi/fibonacci/fibonacci_mpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've verified that the lsb_init symbol is present in the library:
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_grid01 lib]# strings libbat.* |grep lsb_init
</span><br>
<span class="quotelev2">&gt; &gt; lsb_init
</span><br>
<span class="quotelev2">&gt; &gt; sch_lsb_init
</span><br>
<span class="quotelev2">&gt; &gt; lsb_init()
</span><br>
<span class="quotelev2">&gt; &gt; lsb_init
</span><br>
<span class="quotelev2">&gt; &gt; sch_lsb_init
</span><br>
<span class="quotelev2">&gt; &gt; sch_lsb_init
</span><br>
<span class="quotelev2">&gt; &gt; sch_lsb_init
</span><br>
<span class="quotelev2">&gt; &gt; sch_lsb_init
</span><br>
<span class="quotelev2">&gt; &gt; lsb_init()
</span><br>
<span class="quotelev2">&gt; &gt; sch_lsb_init
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you verify that LSF is passing your evironment along correctly? It
</span><br>
<span class="quotelev1">&gt; looks like your LD_LIBRARY_PATH is set in your login environment, but
</span><br>
<span class="quotelev1">&gt; not the environment that the LSF job runs in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can check this by submitting a jog that executes just the command
</span><br>
<span class="quotelev1">&gt; 'printenv'. Compare the output to what you get when you type 'printenv'
</span><br>
<span class="quotelev1">&gt; on the command. Compare the values for LD_LIBRARY_PATH, in particular.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that looks okay, then try running a job that just executes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldd /mnt/ewd/mpi/fibonacci/fibonacci_mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will show you any libraries that ld can't find in the LSF run-time
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8842/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8843.php">Francesco Pietra: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>Previous message:</strong> <a href="8841.php">Gus Correa: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>In reply to:</strong> <a href="8792.php">Prentice Bisbal: "Re: [OMPI users] mpirun: symbol lookup error:	/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8865.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
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
