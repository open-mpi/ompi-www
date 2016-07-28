<?
$subject_val = "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 18:42:37 2009" -->
<!-- isoreceived="20090708224237" -->
<!-- sent="Wed, 8 Jul 2009 18:42:05 -0400" -->
<!-- isosent="20090708224205" -->
<!-- name="Lengyel, Florian" -->
<!-- email="flengyel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads" -->
<!-- id="80e171fe0907081542n5922dd28w29bedee458289e5e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A0D379A2-D978-49D0-BC97-C5E175CB1BF0_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads<br>
<strong>From:</strong> Lengyel, Florian (<em>flengyel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-08 18:42:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9888.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9886.php">Rob Latham: "Re: [OMPI users] Parallel I/O Usage"</a>
<li><strong>In reply to:</strong> <a href="9875.php">Reuti: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9877.php">rahmani: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was addressed to the Open MPI list; on the SGE
<br>
list you suggested changing the pe allocation rule from full_up$ to
<br>
pe_slots$; the pe is now
<br>
<p>[flengyel_at_nept OPENMPI]$ qconf -sp ompi
<br>
pe_name           ompi
<br>
slots             999
<br>
user_lists        Research
<br>
xuser_lists       NONE
<br>
start_proc_args   /bin/true
<br>
stop_proc_args    /bin/true
<br>
allocation_rule   $pe_slots
<br>
control_slaves    TRUE
<br>
job_is_first_task FALSE
<br>
urgency_slots     min
<br>
<p>but the result is the same:
<br>
<p>[flengyel_at_nept OPENMPI]$ tail -f sum.e23310
<br>
Starting server daemon at host &quot;m18.gc.cuny.edu&quot;
<br>
Server daemon successfully started with task id &quot;1.m18&quot;
<br>
Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host
<br>
m18.gc.cuny.edu ...
<br>
/usr/local/sge/utilbin/lx24-amd64/rsh exited on signal 13 (PIPE)
<br>
reading exit code from shepherd ... 129
<br>
[m18.gc.cuny.edu:26399] ERROR: A daemon on node m18.gc.cuny.edu failed to
<br>
start as expected.
<br>
[m18.gc.cuny.edu:26399] ERROR: There may be more information available from
<br>
[m18.gc.cuny.edu:26399] ERROR: the 'qstat -t' command on the Grid Engine
<br>
tasks.
<br>
[m18.gc.cuny.edu:26399] ERROR: If the problem persists, please restart the
<br>
[m18.gc.cuny.edu:26399] ERROR: Grid Engine PE job
<br>
[m18.gc.cuny.edu:26399] ERROR: The daemon exited unexpectedly with status
<br>
129.
<br>
<p><p><p>On Tue, Jul 7, 2009 at 5:05 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 07.07.2009 um 22:12 schrieb Lengyel, Florian:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I may have overlooked something in the archives (not to mention
</span><br>
<span class="quotelev2">&gt;&gt; Googling)--if so I apologize, however
</span><br>
<span class="quotelev2">&gt;&gt; I have been unable to find info on this particular problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI+SGE tight integration works on E6600 core duo systems but not on
</span><br>
<span class="quotelev2">&gt;&gt; Q9550 quads.
</span><br>
<span class="quotelev2">&gt;&gt; Could use some troubleshooting assistance. Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Is this what you found our your question?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not aware of this. What should be the cause of it?!? Do you have a link
</span><br>
<span class="quotelev1">&gt; - was it on the SGE list?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running SGE 6.0u10 on a linux cluster running OpenSuse 11.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI was compiled with SGE, and the required components are present:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [flengyel_at_nept OPENMPI]$ ompi_info | grep gridengine
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The parallel execution environment for OpenMPI is as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [flengyel_at_nept OPENMPI]$ qconf -sp ompi
</span><br>
<span class="quotelev2">&gt;&gt; pe_name           ompi
</span><br>
<span class="quotelev2">&gt;&gt; slots             999
</span><br>
<span class="quotelev2">&gt;&gt; user_lists        Research
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists       NONE
</span><br>
<span class="quotelev2">&gt;&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves    TRUE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev2">&gt;&gt; urgency_slots     min
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A trivial OpenMPI job using this pe will run on a queue for Intel E6600
</span><br>
<span class="quotelev2">&gt;&gt; core duo machines:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [flengyel_at_nept OPENMPI]$ cat sum2.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -q x86_64.q
</span><br>
<span class="quotelev2">&gt;&gt; #$ -N sum
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe ompi 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=/home/nept/apps64/openmpi/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/home/nept/apps64/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; . /usr/local/sge/default/common/settings.sh
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca pls_gridengine_verbose 2  --prefix /home/nept/apps64/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; -v  ./sum
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are the results:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [flengyel_at_nept OPENMPI]$ qsub sum2.sh
</span><br>
<span class="quotelev2">&gt;&gt; Your job 23194 (&quot;sum&quot;) has been submitted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [flengyel_at_nept OPENMPI]$ qstat -r -u flengyel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; job-ID  prior   name       user         state submit/start at     queue
</span><br>
<span class="quotelev2">&gt;&gt;                        slots ja-task-ID
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  23194 0.25007 sum        flengyel     r     07/07/2009 14:14:40
</span><br>
<span class="quotelev2">&gt;&gt; x86_64.q_at_[hidden]           4
</span><br>
<span class="quotelev2">&gt;&gt;       Full jobname:     sum
</span><br>
<span class="quotelev2">&gt;&gt;       Master queue:     x86_64.q_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;       Requested PE:     ompi 4
</span><br>
<span class="quotelev2">&gt;&gt;       Granted PE:       ompi 4
</span><br>
<span class="quotelev2">&gt;&gt;       Hard Resources:
</span><br>
<span class="quotelev2">&gt;&gt;       Soft Resources:
</span><br>
<span class="quotelev2">&gt;&gt;       Hard requested queues: x86_64.q
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [flengyel_at_nept OPENMPI]$ more sum.o23194
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The sum from 1 to 1000 is: 500500
</span><br>
<span class="quotelev2">&gt;&gt; [flengyel_at_nept OPENMPI]$ more sum.e23194
</span><br>
<span class="quotelev2">&gt;&gt; Starting server daemon at host &quot;m49.gc.cuny.edu&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Starting server daemon at host &quot;m33.gc.cuny.edu&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Server daemon successfully started with task id &quot;1.m49&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host
</span><br>
<span class="quotelev2">&gt;&gt; m49.gc.cuny.edu ...
</span><br>
<span class="quotelev2">&gt;&gt; Server daemon successfully started with task id &quot;1.m33&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host
</span><br>
<span class="quotelev2">&gt;&gt; m33.gc.cuny.edu ...
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/sge/utilbin/lx24-amd64/rsh exited with exit code 0
</span><br>
<span class="quotelev2">&gt;&gt; reading exit code from shepherd ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But the same job with the queue set to quad.q for the Q9550 quad core
</span><br>
<span class="quotelev2">&gt;&gt; machines
</span><br>
<span class="quotelev2">&gt;&gt; has daemon trouble:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [flengyel_at_nept OPENMPI]$ !qstat
</span><br>
<span class="quotelev2">&gt;&gt; qstat -r -u flengyel
</span><br>
<span class="quotelev2">&gt;&gt; job-ID  prior   name       user         state submit/start at     queue
</span><br>
<span class="quotelev2">&gt;&gt;                        slots ja-task-ID
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  23196 0.25000 sum        flengyel     r     07/07/2009 14:26:21
</span><br>
<span class="quotelev2">&gt;&gt; quad.q_at_[hidden]             2
</span><br>
<span class="quotelev2">&gt;&gt;       Full jobname:     sum
</span><br>
<span class="quotelev2">&gt;&gt;       Master queue:     quad.q_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;       Requested PE:     ompi 2
</span><br>
<span class="quotelev2">&gt;&gt;       Granted PE:       ompi 2
</span><br>
<span class="quotelev2">&gt;&gt;       Hard Resources:
</span><br>
<span class="quotelev2">&gt;&gt;       Soft Resources:
</span><br>
<span class="quotelev2">&gt;&gt;       Hard requested queues: quad.q
</span><br>
<span class="quotelev2">&gt;&gt; [flengyel_at_nept OPENMPI]$ more sum.e23196
</span><br>
<span class="quotelev2">&gt;&gt; Starting server daemon at host &quot;m15.gc.cuny.edu&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Starting server daemon at host &quot;m09.gc.cuny.edu&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Server daemon successfully started with task id &quot;1.m15&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Server daemon successfully started with task id &quot;1.m09&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host
</span><br>
<span class="quotelev2">&gt;&gt; m15.gc.cuny.e
</span><br>
<span class="quotelev2">&gt;&gt; du ...
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/sge/utilbin/lx24-amd64/rsh exited on signal 13 (PIPE)
</span><br>
<span class="quotelev2">&gt;&gt; reading exit code from shepherd ... Establishing
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/sge/utilbin/lx24-amd
</span><br>
<span class="quotelev2">&gt;&gt; 64/rsh session to host m09.gc.cuny.edu ...
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/sge/utilbin/lx24-amd64/rsh exited on signal 13 (PIPE)
</span><br>
<span class="quotelev2">&gt;&gt; reading exit code from shepherd ... 129
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: A daemon on node m15.gc.cuny.edu failed to
</span><br>
<span class="quotelev2">&gt;&gt; start
</span><br>
<span class="quotelev2">&gt;&gt; as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: There may be more information available
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: the 'qstat -t' command on the Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt; tasks.
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: If the problem persists, please restart
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: The daemon exited unexpectedly with status
</span><br>
<span class="quotelev2">&gt;&gt; 129.
</span><br>
<span class="quotelev2">&gt;&gt; 129
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: A daemon on node m09.gc.cuny.edu failed to
</span><br>
<span class="quotelev2">&gt;&gt; start
</span><br>
<span class="quotelev2">&gt;&gt; as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: There may be more information available
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: the 'qstat -t' command on the Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt; tasks.
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: If the problem persists, please restart
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev2">&gt;&gt; [m09.gc.cuny.edu:11413] ERROR: The daemon exited unexpectedly with status
</span><br>
<span class="quotelev2">&gt;&gt; 129.
</span><br>
<span class="quotelev2">&gt;&gt; [flengyel_at_nept OPENMPI]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -FL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do">http://gridengine.sunsource.net/ds/viewMessage.do</a>
</span><br>
<span class="quotelev2">&gt;&gt; ?dsForumId=38&amp;dsMessageId=206057
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To unsubscribe from this discussion, e-mail: [users-
</span><br>
<span class="quotelev2">&gt;&gt; unsubscribe_at_[hidden]].
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9887/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9888.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9886.php">Rob Latham: "Re: [OMPI users] Parallel I/O Usage"</a>
<li><strong>In reply to:</strong> <a href="9875.php">Reuti: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9877.php">rahmani: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
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
