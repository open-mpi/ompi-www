<?
$subject_val = "Re: [OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 07:44:49 2010" -->
<!-- isoreceived="20100709114449" -->
<!-- sent="Fri, 9 Jul 2010 12:44:34 +0100" -->
<!-- isosent="20100709114434" -->
<!-- name="Anton Shterenlikht" -->
<!-- email="mexas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory" -->
<!-- id="20100709114434.GB45534_at_mech-cluster241.men.bris.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A138796A861C994C87C7E4572BB0B53484A62B30EA_at_AVEXMB2.qlogic.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory<br>
<strong>From:</strong> Anton Shterenlikht (<em>mexas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 07:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13558.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13556.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13549.php">Avneesh Pant: "Re: [OMPI users] ipath_userinit: userinit command failed: Cannot	allocate memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 08, 2010 at 11:04:09AM -0700, Avneesh Pant wrote:
<br>
<span class="quotelev1">&gt; Anton,
</span><br>
<span class="quotelev1">&gt; On the node that you saw the failure (u02n065)
</span><br>
<span class="quotelev1">&gt; can you verify what the max locked memory limit
</span><br>
<span class="quotelev1">&gt;  is set to? In a bash  shell you can do this with
</span><br>
<span class="quotelev1">&gt; ulimit -l. It should be set to at least 128K.
</span><br>
<span class="quotelev1">&gt;  Also please verify that the available memory on
</span><br>
<span class="quotelev1">&gt; the node (/proc/meminfo shows this) is sufficient
</span><br>
<span class="quotelev1">&gt; as it may be possible that some zombie
</span><br>
<span class="quotelev1">&gt; processes on that node are consuming memory.
</span><br>
<p>Avneesh, many thanks
<br>
<p>bigblue3&gt; ssh u02n065
<br>
Last login: Fri Jul  9 12:24:17 2010 from bigblue3.cvos.cluster
<br>
u02n065&gt; bash -
<br>
bash-3.2$ ulimit -l
<br>
unlimited
<br>
bash-3.2$ 
<br>
<p><p>This seems to be an intermittent failure.
<br>
I run this test on 8 nodes once and got
<br>
<p>bigblue3&gt; cat z.sh.o335046 
<br>
Warning: no access to tty (Bad file descriptor).
<br>
Thus no job control in this shell.
<br>
/cvos/local/apps/torque/current/spool/aux//335046.bluequeue1.cvos.cluster
<br>
u02n077.cvos.cluster
<br>
u02n072.cvos.cluster
<br>
u02n074.cvos.cluster
<br>
u02n091.cvos.cluster
<br>
u03n061.cvos.cluster
<br>
u01n003.cvos.cluster
<br>
u01n057.cvos.cluster
<br>
u01n080.cvos.cluster
<br>
Warning: Permanently added 'u01n003,10.141.1.3' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u01n057,10.141.1.57' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u02n072,10.141.2.72' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u03n061,10.141.3.61' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u01n080,10.141.1.80' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u02n074,10.141.2.74' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u02n091,10.141.2.91' (RSA) to the list of known hosts.
<br>
u01n003:5.ipath_userinit: userinit command failed: Cannot allocate memory
<br>
u01n003:5.Driver initialization failure on /dev/ipath
<br>
MPIRUN.u02n077: 7 ranks have not yet exited 60 seconds after rank 5 (node u01n003) exited wit out reaching MPI_Finalize().
<br>
MPIRUN.u02n077: Waiting at most another 60 seconds for the remaining ranks to do a clean shut own before terminating 7 node processes
<br>
<p>real    1m15.435s
<br>
user    0m0.061s
<br>
sys     0m0.151s
<br>
Warning: Permanently added 'u02n077.cvos.cluster,10.141.2.77' (RSA) to the list of known host .
<br>
Warning: Permanently added 'u02n072.cvos.cluster' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u02n074.cvos.cluster' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u02n091.cvos.cluster' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u03n061.cvos.cluster' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u01n003.cvos.cluster' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u01n057.cvos.cluster' (RSA) to the list of known hosts.
<br>
Warning: Permanently added 'u01n080.cvos.cluster' (RSA) to the list of known hosts.
<br>
bigblue3&gt; 
<br>
<p><p>I run it again a few minutes later and it worked ok:
<br>
<p><p>bigblue3&gt; cat z.sh.o335165 
<br>
Warning: no access to tty (Bad file descriptor).
<br>
Thus no job control in this shell.
<br>
/cvos/local/apps/torque/current/spool/aux//335165.bluequeue1.cvos.cluster
<br>
u02n072.cvos.cluster
<br>
u02n077.cvos.cluster
<br>
u02n091.cvos.cluster
<br>
u03n061.cvos.cluster
<br>
u01n003.cvos.cluster
<br>
u02n074.cvos.cluster
<br>
u01n057.cvos.cluster
<br>
u01n080.cvos.cluster
<br>
Warning: Permanently added 'u02n077' (RSA) to the list of known hosts.
<br>
&nbsp;Number of tasks=           8  My rank=           0
<br>
&nbsp;Number of tasks=           8  My rank=           7
<br>
&nbsp;Number of tasks=           8  My rank=           1
<br>
&nbsp;Number of tasks=           8  My rank=           3
<br>
&nbsp;Number of tasks=           8  My rank=           5
<br>
&nbsp;Number of tasks=           8  My rank=           6
<br>
&nbsp;Number of tasks=           8  My rank=           2
<br>
&nbsp;Number of tasks=           8  My rank=           4
<br>
<p>real    0m1.590s
<br>
user    0m0.070s
<br>
sys     0m0.182s
<br>
bigblue3&gt; 
<br>
<p>I'll ask my sysadmin about this.
<br>
<p>As I'm just starting MPI, I was worried
<br>
I messed up something in my MPI program.
<br>
This seems ok now.
<br>
<p>Many thanks for your help.
<br>
anton
<br>
<p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Avneesh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Anton Shterenlikht
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, July 08, 2010 9:07 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] ipath_userinit: userinit command failed: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to use MPI with fortran on Linux 2.6.18-164.6.1.el5 x86_64 I compiled this trivial code with mpif90:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      program simple
</span><br>
<span class="quotelev1">&gt;      include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      integer numtasks, rank, ierr, rc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         rc=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;      if (ierr .ne. 0) then
</span><br>
<span class="quotelev1">&gt;         print *,'Error starting MPI program. Terminating.'
</span><br>
<span class="quotelev1">&gt;         call MPI_ABORT(MPI_COMM_WORLD, rc, ierr)
</span><br>
<span class="quotelev1">&gt;      end if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt;      call MPI_COMM_SIZE(MPI_COMM_WORLD, numtasks, ierr)
</span><br>
<span class="quotelev1">&gt;      print *, 'Number of tasks=',numtasks,' My rank=',rank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; !    ****** do some work ******
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run it with mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I use 2 cpus or less, all is fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I try to specify more than 2 cpus I get this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; u02n065:0.ipath_userinit: userinit command failed: Cannot allocate memory u02n065:0.Driver initialization failure on /dev/ipath
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where u02n065 is the node name.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please advise
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; many thanks
</span><br>
<span class="quotelev1">&gt; anton
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Anton Shterenlikht
</span><br>
<span class="quotelev1">&gt; Room 2.6, Queen's Building
</span><br>
<span class="quotelev1">&gt; Mech Eng Dept
</span><br>
<span class="quotelev1">&gt; Bristol University
</span><br>
<span class="quotelev1">&gt; University Walk, Bristol BS8 1TR, UK
</span><br>
<span class="quotelev1">&gt; Tel: +44 (0)117 331 5944
</span><br>
<span class="quotelev1">&gt; Fax: +44 (0)117 929 4423
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Anton Shterenlikht
Room 2.6, Queen's Building
Mech Eng Dept
Bristol University
University Walk, Bristol BS8 1TR, UK
Tel: +44 (0)117 331 5944
Fax: +44 (0)117 929 4423
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13558.php">Andreas Schäfer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13556.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13549.php">Avneesh Pant: "Re: [OMPI users] ipath_userinit: userinit command failed: Cannot	allocate memory"</a>
<!-- nextthread="start" -->
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
