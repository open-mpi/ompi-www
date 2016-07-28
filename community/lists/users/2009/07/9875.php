<?
$subject_val = "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 17:05:42 2009" -->
<!-- isoreceived="20090707210542" -->
<!-- sent="Tue, 7 Jul 2009 23:05:07 +0200" -->
<!-- isosent="20090707210507" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads" -->
<!-- id="A0D379A2-D978-49D0-BC97-C5E175CB1BF0_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6889DDC1CE0D7845912CB738AEE21A0A0245E2AA_at_MAILBE.acad.gc.cuny.edu" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 17:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9876.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9874.php">Lengyel, Florian: "[OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>In reply to:</strong> <a href="9874.php">Lengyel, Florian: "[OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9887.php">Lengyel, Florian: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Reply:</strong> <a href="9887.php">Lengyel, Florian: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 07.07.2009 um 22:12 schrieb Lengyel, Florian:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I may have overlooked something in the archives (not to mention  
</span><br>
<span class="quotelev1">&gt; Googling)--if so I apologize, however
</span><br>
<span class="quotelev1">&gt; I have been unable to find info on this particular problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI+SGE tight integration works on E6600 core duo systems but  
</span><br>
<span class="quotelev1">&gt; not on Q9550 quads.
</span><br>
<span class="quotelev1">&gt; Could use some troubleshooting assistance. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Is this what you found our your question?
<br>
<p>I'm not aware of this. What should be the cause of it?!? Do you have  
<br>
a link - was it on the SGE list?
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running SGE 6.0u10 on a linux cluster running OpenSuse 11.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI was compiled with SGE, and the required components are  
</span><br>
<span class="quotelev1">&gt; present:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [flengyel_at_nept OPENMPI]$ ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.7)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The parallel execution environment for OpenMPI is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [flengyel_at_nept OPENMPI]$ qconf -sp ompi
</span><br>
<span class="quotelev1">&gt; pe_name           ompi
</span><br>
<span class="quotelev1">&gt; slots             999
</span><br>
<span class="quotelev1">&gt; user_lists        Research
</span><br>
<span class="quotelev1">&gt; xuser_lists       NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves    TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots     min
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A trivial OpenMPI job using this pe will run on a queue for Intel  
</span><br>
<span class="quotelev1">&gt; E6600 core duo machines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [flengyel_at_nept OPENMPI]$ cat sum2.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -q x86_64.q
</span><br>
<span class="quotelev1">&gt; #$ -N sum
</span><br>
<span class="quotelev1">&gt; #$ -pe ompi 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=/home/nept/apps64/openmpi/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/home/nept/apps64/openmpi/lib
</span><br>
<span class="quotelev1">&gt; . /usr/local/sge/default/common/settings.sh
</span><br>
<span class="quotelev1">&gt; mpirun --mca pls_gridengine_verbose 2  --prefix /home/nept/apps64/ 
</span><br>
<span class="quotelev1">&gt; openmpi -v  ./sum
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [flengyel_at_nept OPENMPI]$ qsub sum2.sh
</span><br>
<span class="quotelev1">&gt; Your job 23194 (&quot;sum&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [flengyel_at_nept OPENMPI]$ qstat -r -u flengyel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; job-ID  prior   name       user         state submit/start at      
</span><br>
<span class="quotelev1">&gt; queue                          slots ja-task-ID
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt;   23194 0.25007 sum        flengyel     r     07/07/2009 14:14:40  
</span><br>
<span class="quotelev1">&gt; x86_64.q_at_[hidden]           4
</span><br>
<span class="quotelev1">&gt;        Full jobname:     sum
</span><br>
<span class="quotelev1">&gt;        Master queue:     x86_64.q_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Requested PE:     ompi 4
</span><br>
<span class="quotelev1">&gt;        Granted PE:       ompi 4
</span><br>
<span class="quotelev1">&gt;        Hard Resources:
</span><br>
<span class="quotelev1">&gt;        Soft Resources:
</span><br>
<span class="quotelev1">&gt;        Hard requested queues: x86_64.q
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [flengyel_at_nept OPENMPI]$ more sum.o23194
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The sum from 1 to 1000 is: 500500
</span><br>
<span class="quotelev1">&gt; [flengyel_at_nept OPENMPI]$ more sum.e23194
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;m49.gc.cuny.edu&quot;
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;m33.gc.cuny.edu&quot;
</span><br>
<span class="quotelev1">&gt; Server daemon successfully started with task id &quot;1.m49&quot;
</span><br>
<span class="quotelev1">&gt; Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host  
</span><br>
<span class="quotelev1">&gt; m49.gc.cuny.edu ...
</span><br>
<span class="quotelev1">&gt; Server daemon successfully started with task id &quot;1.m33&quot;
</span><br>
<span class="quotelev1">&gt; Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host  
</span><br>
<span class="quotelev1">&gt; m33.gc.cuny.edu ...
</span><br>
<span class="quotelev1">&gt; /usr/local/sge/utilbin/lx24-amd64/rsh exited with exit code 0
</span><br>
<span class="quotelev1">&gt; reading exit code from shepherd ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the same job with the queue set to quad.q for the Q9550 quad  
</span><br>
<span class="quotelev1">&gt; core machines
</span><br>
<span class="quotelev1">&gt; has daemon trouble:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [flengyel_at_nept OPENMPI]$ !qstat
</span><br>
<span class="quotelev1">&gt; qstat -r -u flengyel
</span><br>
<span class="quotelev1">&gt; job-ID  prior   name       user         state submit/start at      
</span><br>
<span class="quotelev1">&gt; queue                          slots ja-task-ID
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt;   23196 0.25000 sum        flengyel     r     07/07/2009 14:26:21  
</span><br>
<span class="quotelev1">&gt; quad.q_at_[hidden]             2
</span><br>
<span class="quotelev1">&gt;        Full jobname:     sum
</span><br>
<span class="quotelev1">&gt;        Master queue:     quad.q_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Requested PE:     ompi 2
</span><br>
<span class="quotelev1">&gt;        Granted PE:       ompi 2
</span><br>
<span class="quotelev1">&gt;        Hard Resources:
</span><br>
<span class="quotelev1">&gt;        Soft Resources:
</span><br>
<span class="quotelev1">&gt;        Hard requested queues: quad.q
</span><br>
<span class="quotelev1">&gt; [flengyel_at_nept OPENMPI]$ more sum.e23196
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;m15.gc.cuny.edu&quot;
</span><br>
<span class="quotelev1">&gt; Starting server daemon at host &quot;m09.gc.cuny.edu&quot;
</span><br>
<span class="quotelev1">&gt; Server daemon successfully started with task id &quot;1.m15&quot;
</span><br>
<span class="quotelev1">&gt; Server daemon successfully started with task id &quot;1.m09&quot;
</span><br>
<span class="quotelev1">&gt; Establishing /usr/local/sge/utilbin/lx24-amd64/rsh session to host  
</span><br>
<span class="quotelev1">&gt; m15.gc.cuny.e
</span><br>
<span class="quotelev1">&gt; du ...
</span><br>
<span class="quotelev1">&gt; /usr/local/sge/utilbin/lx24-amd64/rsh exited on signal 13 (PIPE)
</span><br>
<span class="quotelev1">&gt; reading exit code from shepherd ... Establishing /usr/local/sge/ 
</span><br>
<span class="quotelev1">&gt; utilbin/lx24-amd
</span><br>
<span class="quotelev1">&gt; 64/rsh session to host m09.gc.cuny.edu ...
</span><br>
<span class="quotelev1">&gt; /usr/local/sge/utilbin/lx24-amd64/rsh exited on signal 13 (PIPE)
</span><br>
<span class="quotelev1">&gt; reading exit code from shepherd ... 129
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: A daemon on node m15.gc.cuny.edu  
</span><br>
<span class="quotelev1">&gt; failed to start
</span><br>
<span class="quotelev1">&gt; as expected.
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: There may be more information  
</span><br>
<span class="quotelev1">&gt; available from
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: the 'qstat -t' command on the Grid  
</span><br>
<span class="quotelev1">&gt; Engine tasks.
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: If the problem persists, please  
</span><br>
<span class="quotelev1">&gt; restart the
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 129.
</span><br>
<span class="quotelev1">&gt; 129
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: A daemon on node m09.gc.cuny.edu  
</span><br>
<span class="quotelev1">&gt; failed to start
</span><br>
<span class="quotelev1">&gt; as expected.
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: There may be more information  
</span><br>
<span class="quotelev1">&gt; available from
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: the 'qstat -t' command on the Grid  
</span><br>
<span class="quotelev1">&gt; Engine tasks.
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: If the problem persists, please  
</span><br>
<span class="quotelev1">&gt; restart the
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt; [m09.gc.cuny.edu:11413] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 129.
</span><br>
<span class="quotelev1">&gt; [flengyel_at_nept OPENMPI]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -FL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do">http://gridengine.sunsource.net/ds/viewMessage.do</a>? 
</span><br>
<span class="quotelev1">&gt; dsForumId=38&amp;dsMessageId=206057
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To unsubscribe from this discussion, e-mail: [users- 
</span><br>
<span class="quotelev1">&gt; unsubscribe_at_[hidden]].
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
<li><strong>Next message:</strong> <a href="9876.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Previous message:</strong> <a href="9874.php">Lengyel, Florian: "[OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>In reply to:</strong> <a href="9874.php">Lengyel, Florian: "[OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9887.php">Lengyel, Florian: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Reply:</strong> <a href="9887.php">Lengyel, Florian: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
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
