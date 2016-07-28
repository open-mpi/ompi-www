<?
$subject_val = "[OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 16:14:06 2009" -->
<!-- isoreceived="20090707201406" -->
<!-- sent="Tue, 7 Jul 2009 16:12:22 -0400" -->
<!-- isosent="20090707201222" -->
<!-- name="Lengyel, Florian" -->
<!-- email="FLengyel_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads" -->
<!-- id="6889DDC1CE0D7845912CB738AEE21A0A0245E2AA_at_MAILBE.acad.gc.cuny.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6889DDC1CE0D7845912CB738AEE21A0A0245E2A7_at_MAILBE.acad.gc.cuny.edu" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads<br>
<strong>From:</strong> Lengyel, Florian (<em>FLengyel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 16:12:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9875.php">Reuti: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Previous message:</strong> <a href="9873.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9875.php">Reuti: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Reply:</strong> <a href="9875.php">Reuti: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Reply:</strong> <a href="9877.php">rahmani: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I may have overlooked something in the archives (not to mention Googling)--if so I apologize, however 
<br>
I have been unable to find info on this particular problem.
<br>
<p>OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads.
<br>
Could use some troubleshooting assistance. Thanks. 
<br>
<p>I'm running SGE 6.0u10 on a linux cluster running OpenSuse 11.
<br>
<p>OpenMPI was compiled with SGE, and the required components are present:
<br>
<p>[flengyel_at_nept OPENMPI]$ ompi_info | grep gridengine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
<br>
<p><p>The parallel execution environment for OpenMPI is as follows:
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
allocation_rule   $fill_up
<br>
control_slaves    TRUE
<br>
job_is_first_task FALSE
<br>
urgency_slots     min
<br>
<p>A trivial OpenMPI job using this pe will run on a queue for Intel E6600 core duo machines:
<br>
<p>[flengyel_at_nept OPENMPI]$ cat sum2.sh
<br>
<p>#!/bin/bash
<br>
#$ -S /bin/bash
<br>
#$ -q x86_64.q
<br>
#$ -N sum
<br>
#$ -pe ompi 4
<br>
<p>#$ -cwd
<br>
<p>export PATH=/home/nept/apps64/openmpi/bin:$PATH
<br>
export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/home/nept/apps64/openmpi/lib
<br>
. /usr/local/sge/default/common/settings.sh
<br>
mpirun --mca pls_gridengine_verbose 2  --prefix /home/nept/apps64/openmpi -v  ./sum
<br>
<p>Here are the results:
<br>
<p>[flengyel_at_nept OPENMPI]$ qsub sum2.sh
<br>
Your job 23194 (&quot;sum&quot;) has been submitted
<br>
<p>[flengyel_at_nept OPENMPI]$ qstat -r -u flengyel
<br>
<p>job-ID  prior   name       user         state submit/start at     queue                          slots ja-task-ID
<br>
-----------------------------------------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;23194 0.25007 sum        flengyel     r     07/07/2009 14:14:40 x86_64.q_at_[hidden]           4       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full jobname:     sum
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master queue:     x86_64.q_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requested PE:     ompi 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Granted PE:       ompi 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hard Resources:  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Soft Resources:  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hard requested queues: x86_64.q
<br>
<p><p>[flengyel_at_nept OPENMPI]$ more sum.o23194
<br>
<p>The sum from 1 to 1000 is: 500500
<br>
[flengyel_at_nept OPENMPI]$ more sum.e23194
<br>
Starting server daemon at host &quot;m49.gc.cuny.edu&quot;
<br>
Starting server daemon at host &quot;m33.gc.cuny.edu&quot;
<br>
Server daemon successfully started with task id &quot;1.m49&quot;
<br>
Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host m49.gc.cuny.edu ...
<br>
Server daemon successfully started with task id &quot;1.m33&quot;
<br>
Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host m33.gc.cuny.edu ...
<br>
/usr/local/sge/utilbin/lx24-amd64/rsh exited with exit code 0
<br>
reading exit code from shepherd ...
<br>
<p>But the same job with the queue set to quad.q for the Q9550 quad core machines
<br>
has daemon trouble:
<br>
<p><p>[flengyel_at_nept OPENMPI]$ !qstat
<br>
qstat -r -u flengyel
<br>
job-ID  prior   name       user         state submit/start at     queue                          slots ja-task-ID 
<br>
-----------------------------------------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;23196 0.25000 sum        flengyel     r     07/07/2009 14:26:21 quad.q_at_[hidden]             2        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full jobname:     sum
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master queue:     quad.q_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requested PE:     ompi 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Granted PE:       ompi 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hard Resources:   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Soft Resources:   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hard requested queues: quad.q
<br>
[flengyel_at_nept OPENMPI]$ more sum.e23196 
<br>
Starting server daemon at host &quot;m15.gc.cuny.edu&quot;
<br>
Starting server daemon at host &quot;m09.gc.cuny.edu&quot;
<br>
Server daemon successfully started with task id &quot;1.m15&quot;
<br>
Server daemon successfully started with task id &quot;1.m09&quot;
<br>
Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host m15.gc.cuny.e
<br>
du ...
<br>
/usr/local/sge/utilbin/lx24-amd64/rsh exited on signal 13 (PIPE)
<br>
reading exit code from shepherd ... Establishing /usr/local/sge/utilbin/lx24-amd
<br>
64/rsh session to host m09.gc.cuny.edu ...
<br>
/usr/local/sge/utilbin/lx24-amd64/rsh exited on signal 13 (PIPE)
<br>
reading exit code from shepherd ... 129
<br>
[m09.gc.cuny.edu:11413] ERROR: A daemon on node m15.gc.cuny.edu failed to start 
<br>
as expected.
<br>
[m09.gc.cuny.edu:11413] ERROR: There may be more information available from
<br>
[m09.gc.cuny.edu:11413] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[m09.gc.cuny.edu:11413] ERROR: If the problem persists, please restart the
<br>
[m09.gc.cuny.edu:11413] ERROR: Grid Engine PE job
<br>
[m09.gc.cuny.edu:11413] ERROR: The daemon exited unexpectedly with status 129.
<br>
129
<br>
[m09.gc.cuny.edu:11413] ERROR: A daemon on node m09.gc.cuny.edu failed to start 
<br>
as expected.
<br>
[m09.gc.cuny.edu:11413] ERROR: There may be more information available from
<br>
[m09.gc.cuny.edu:11413] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[m09.gc.cuny.edu:11413] ERROR: If the problem persists, please restart the
<br>
[m09.gc.cuny.edu:11413] ERROR: Grid Engine PE job
<br>
[m09.gc.cuny.edu:11413] ERROR: The daemon exited unexpectedly with status 129.
<br>
[flengyel_at_nept OPENMPI]$ 
<br>
<p><p>-FL
<br>
<p>------------------------------------------------------
<br>
<a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=206057">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=206057</a>
<br>
<p>To unsubscribe from this discussion, e-mail: [users-unsubscribe_at_[hidden]].
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9875.php">Reuti: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Previous message:</strong> <a href="9873.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9875.php">Reuti: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Reply:</strong> <a href="9875.php">Reuti: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Reply:</strong> <a href="9877.php">rahmani: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
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
