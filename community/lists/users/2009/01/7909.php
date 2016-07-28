<?
$subject_val = "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 31 07:57:36 2009" -->
<!-- isoreceived="20090131125736" -->
<!-- sent="Sat, 31 Jan 2009 13:57:22 +0100" -->
<!-- isosent="20090131125722" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE" -->
<!-- id="4F575D47-8BD8-4F10-A3EC-A33D093E0EBC_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40901302349p63cbc7far9e98ae5d2b4bcdbc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-31 07:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7910.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Previous message:</strong> <a href="7908.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7908.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7921.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7921.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 31.01.2009 um 08:49 schrieb Sangamesh B:
<br>
<p><span class="quotelev1">&gt; On Fri, Jan 30, 2009 at 10:20 PM, Reuti &lt;reuti_at_staff.uni- 
</span><br>
<span class="quotelev1">&gt; marburg.de&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 30.01.2009 um 15:02 schrieb Sangamesh B:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open MPI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have a solution for the following problem of Open MPI (1.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when run through Grid Engine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I changed global execd params with H_MEMORYLOCKED=infinity and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restarted the sgeexecd in all nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But still the problem persists:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $cat err.77.CPMD-OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think this might already be the reason why it's not working. A  
</span><br>
<span class="quotelev2">&gt;&gt; mpihello
</span><br>
<span class="quotelev2">&gt;&gt; program is running fine through SGE?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any Open MPI parallel job thru SGE runs only if its running on a
</span><br>
<span class="quotelev1">&gt; single node (i.e. 8processes on 8 cores of a single node). If number
</span><br>
<span class="quotelev1">&gt; of processes is more than 8, then SGE will schedule it on 2 nodes -
</span><br>
<span class="quotelev1">&gt; the job will fail with the above error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I did a loose integration of Open MPI 1.3 with SGE. The job runs,
</span><br>
<span class="quotelev1">&gt; but all 16 processes run on a single node.
</span><br>
<p>What are the entries in `qconf -sconf`for:
<br>
<p>rsh_command
<br>
rsh_daemon
<br>
<p>What is your mpirun command in the jobscript - you are getting there  
<br>
the mpirun from Open MPI? According to the output below, it's not a  
<br>
loose integration, but you prepare alraedy a machinefile, which is  
<br>
superfluous for Open MPI.
<br>
<p><p><span class="quotelev1">&gt; $ cat out.83.Hello-OMPI
</span><br>
<span class="quotelev1">&gt; /opt/gridengine/default/spool/node-0-17/active_jobs/83.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc12
</span><br>
<span class="quotelev1">&gt; ibc12
</span><br>
<span class="quotelev1">&gt; ibc12
</span><br>
<span class="quotelev1">&gt; ibc12
</span><br>
<span class="quotelev1">&gt; ibc12
</span><br>
<span class="quotelev1">&gt; ibc12
</span><br>
<span class="quotelev1">&gt; ibc12
</span><br>
<span class="quotelev1">&gt; ibc12
</span><br>
<span class="quotelev1">&gt; Greetings: 1 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 10 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 15 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 9 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 14 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 8 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 11 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 12 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 6 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 0 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 5 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 3 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 13 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 4 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 7 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt; Greetings: 2 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But qhost -u &lt;user name&gt; shows that it is scheduled/running on two  
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any body successful in running Open MPI 1.3 tightly integrated with  
</span><br>
<span class="quotelev1">&gt; SGE?
</span><br>
<p>For a Tight Integration there's a FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid 31947) died unexpectedly with status 129 while  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       node-0-19.local - daemon did not report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       node-0-20.local - daemon did not report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       node-0-21.local - daemon did not report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       node-0-22.local - daemon did not report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The hostnames for infiniband interfaces are ibc0, ibc1, ibc2 ..  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ibc23.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; May be Open MPI is not able to identify hosts as it is using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node-0-..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; . Is this causing open mpi to fail?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sangamesh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Jan 26, 2009 at 5:09 PM, mihlon &lt;vaclam1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello SGE users,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The cluster is installed with Rocks-4.3, SGE 6.0 &amp; Open MPI 1.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI is configured with &quot;--with-sge&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_info shows only one component:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this acceptable?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; maybe yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see: <a href="http://www.open-mpi.org/faq/?category=building#build-rte-sge">http://www.open-mpi.org/faq/?category=building#build-rte-sge</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell$ ompi_info | grep gridengine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Specific frameworks and version numbers may vary, depending on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version of Open MPI.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The Open MPI parallel jobs run successfully through command  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fail when run thru SGE(with -pe orte &lt;slots&gt;).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The error is:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ cat err.26.Helloworld-PRL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A daemon (pid 8462) died unexpectedly with status 129 while  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; needed shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But the same job runs well, if it runs on a single node but  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ cat err.23.Helloworld-PRL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Local host: node-0-4.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Local device: mthca0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node-0-4.local:07869] 7 more processes have sent help message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; help-mpi-btl-openib.txt / error in device init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node-0-4.local:07869] Set MCA parameter  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The following link explains the same problem:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do">http://gridengine.sunsource.net/ds/viewMessage.do</a>? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dsForumId=38&amp;dsMessageId=72398
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With this reference, I put 'ulimit -l unlimited' into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /etc/init.d/sgeexecd in all nodes. Restarted the services.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do not set 'ulimit -l unlimited' in /etc/init.d/sgeexecd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but set it in the SGE:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Run   qconf -mconf   and set    execd_params
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; frontend$&gt; qconf -sconf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; execd_params                 H_MEMORYLOCKED=infinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then restart all your sgeexecd hosts.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Milan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But still the problem persists.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What could be the way out for this?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do">http://gridengine.sunsource.net/ds/viewMessage.do</a>? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dsForumId=38&amp;dsMessageId=99133
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To unsubscribe from this discussion, e-mail:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [users-unsubscribe_at_[hidden]].
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do">http://gridengine.sunsource.net/ds/viewMessage.do</a>? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dsForumId=38&amp;dsMessageId=99461
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To unsubscribe from this discussion, e-mail:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [users-unsubscribe_at_[hidden]].
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7910.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Previous message:</strong> <a href="7908.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7908.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7921.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7921.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
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
