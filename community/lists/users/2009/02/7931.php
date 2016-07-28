<?
$subject_val = "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 06:12:05 2009" -->
<!-- isoreceived="20090202111205" -->
<!-- sent="Mon, 2 Feb 2009 12:12:14 +0100" -->
<!-- isosent="20090202111214" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE" -->
<!-- id="268D311B-DBD9-4658-B13F-BDDD576509D0_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40902020231s25acb97eh6d232b9a16557fc4_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-02-02 06:12:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7930.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7930.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7938.php">Rolf Vandevaart: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7938.php">Rolf Vandevaart: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 02.02.2009 um 11:31 schrieb Sangamesh B:
<br>
<p><span class="quotelev1">&gt; On Mon, Feb 2, 2009 at 12:15 PM, Reuti &lt;reuti_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 02.02.2009 um 05:44 schrieb Sangamesh B:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sun, Feb 1, 2009 at 10:37 PM, Reuti &lt;reuti_at_staff.uni- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; marburg.de&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 01.02.2009 um 16:00 schrieb Sangamesh B:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sat, Jan 31, 2009 at 6:27 PM, Reuti &lt;reuti_at_staff.uni- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; marburg.de&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Am 31.01.2009 um 08:49 schrieb Sangamesh B:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Jan 30, 2009 at 10:20 PM, Reuti &lt;reuti_at_staff.uni- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; marburg.de&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 30.01.2009 um 15:02 schrieb Sangamesh B:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear Open MPI,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have a solution for the following problem of Open  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI (1.3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; when run through Grid Engine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I changed global execd params with H_MEMORYLOCKED=infinity and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; restarted the sgeexecd in all nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But still the problem persists:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  $cat err.77.CPMD-OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think this might already be the reason why it's not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; working. A
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpihello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; program is running fine through SGE?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; No.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any Open MPI parallel job thru SGE runs only if its running on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; single node (i.e. 8processes on 8 cores of a single node). If  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; of processes is more than 8, then SGE will schedule it on 2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodes -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the job will fail with the above error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now I did a loose integration of Open MPI 1.3 with SGE. The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; job runs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; but all 16 processes run on a single node.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What are the entries in `qconf -sconf`for:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rsh_command
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; rsh_daemon
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ qconf -sconf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; global:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; execd_spool_dir              /opt/gridengine/default/spool
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; qrsh_command                 /usr/bin/ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rsh_command                  /usr/bin/ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rlogin_command               /usr/bin/ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rsh_daemon                   /usr/sbin/sshd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; qrsh_daemon                  /usr/sbin/sshd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reprioritize                 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you must use ssh? Often in a private cluster the rsh based  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one is ok,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with SGE 6.2 the built-in mechanism of SGE. Otherwise please  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; follow this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://gridengine.sunsource.net/howto/qrsh_qlogin_ssh.html">http://gridengine.sunsource.net/howto/qrsh_qlogin_ssh.html</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think its better to check once with Open MPI 1.2.8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What is your mpirun command in the jobscript - you are getting  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; there
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun from Open MPI? According to the output below, it's not  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a loose
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; integration, but you prepare alraedy a machinefile, which is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; superfluous
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; No. I've not prepared the machinefile for Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For Tight integartion job:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/mpi/openmpi/1.3/intel/bin/mpirun -np $NSLOTS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $CPMDBIN/cpmd311-ompi-mkl.x  wf1.in $PP_LIBRARY &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wf1.out_OMPI$NSLOTS.$JOB_ID
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For loose integration job:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/mpi/openmpi/1.3/intel/bin/mpirun -np $NSLOTS -hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $TMPDIR/machines  $CPMDBIN/cpmd311-ompi-mkl.x  wf1.in  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $PP_LIBRARY &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wf1.out_OMPI_$JOB_ID.$NSLOTS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a) you compiled Open MPI with &quot;--with-sge&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes. But ompi_info shows only one component of sge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA ras: gridengine (MCA v2.0, API v2.0,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component v1.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; b) when the $SGE_ROOT variable is set, Open MPI will use a Tight
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Integration
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In SGE job submit script, I set SGE_ROOT= &lt;nothing&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will set the variable to an empty string. You need to use:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; unset SGE_ROOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Right.
</span><br>
<span class="quotelev1">&gt; I used 'unset SGE_ROOT' in the job submission script. Its working now.
</span><br>
<span class="quotelev1">&gt; Hello world jobs are working now. (single &amp; multiple nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What can be the problem with tight integration?
</span><br>
<p>There are obviously two issues for now with the Tight Integration for  
<br>
SGE:
<br>
<p>- Some processes might throw an &quot;err=2&quot; for unknown reason and only  
<br>
from time to time, but run fine.
<br>
<p>- Processes vanish into daemon although SGE's qrsh is used  
<br>
automatically (successive `ps -e f`show that it's called with &quot;...  
<br>
orted --daemonize ...&quot; for a short while) - this I overlooked in my  
<br>
last post when I stated it's working, as my process allocation was  
<br>
fine. Only that they weren't bound to any sge_shepherd.
<br>
<p>Seems SGE integration is broken, and it would be indeed better to  
<br>
stay with 1.2.8 for now :-/
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7930.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7930.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7938.php">Rolf Vandevaart: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7938.php">Rolf Vandevaart: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
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
