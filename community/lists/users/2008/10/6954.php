<?
$subject_val = "Re: [OMPI users] SGE tight integration and ?tm? protocol for start";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 17:34:52 2008" -->
<!-- isoreceived="20081011213452" -->
<!-- sent="Sat, 11 Oct 2008 14:34:47 -0700" -->
<!-- isosent="20081011213447" -->
<!-- name="Pak Lui" -->
<!-- email="plui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE tight integration and ?tm? protocol for start" -->
<!-- id="48F11BF7.9060108_at_penguincomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.3172.1223734865.16379.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE tight integration and ?tm? protocol for start<br>
<strong>From:</strong> Pak Lui (<em>plui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-11 17:34:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6955.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Previous message:</strong> <a href="6953.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Maybe in reply to:</strong> <a href="6928.php">Sean Davis: "[OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6955.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Reply:</strong> <a href="6955.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like from your earlier discussions on gridengine user alias
<br>
that you are able to run a simple single queue SGE tightly integrated
<br>
parallel job with Open MPI, it's just a matter of using multiple queues
<br>
with your parallel job, right?
<br>
<p><a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=26298">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=26298</a>
<br>
<p>The tm messages are just a red herring. What's more interesting is the
<br>
verbose messages from qrsh (the lines that you enable by using -mca
<br>
pls_gridengine_verbose 1, with lines started without the stuff prepended
<br>
&nbsp;&nbsp;by OMPI, like [shakespeare:05720]).
<br>
<p><span class="quotelev2">&gt;&gt; Starting server daemon at host &quot;shakespeare.nci.nih.gov&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Starting server daemon at host &quot;octopus.nci.nih.gov&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Server daemon successfully started with task id &quot;1.shakespeare&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open ras tm:
</span><br>
<span class="quotelev2">&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open pls tm:
</span><br>
<span class="quotelev2">&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; error: executing task of job 3576 failed: failed sending task to
</span><br>
<span class="quotelev2">&gt;&gt; execd_at_[hidden]: can't find connecti
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<p>Since you see these verbose messages here, it means that you are using
<br>
&quot;qrsh -inherit&quot; in the backend for launching tasks. (You can also see
<br>
the qrsh -inherit line by setting &quot;-mca pls_gridnegine_debug 1&quot; in mpirun.)
<br>
<p>You can also see the actual &quot;qrsh -inherit&quot; line by setting &quot;-mca
<br>
pls_gridnegine_debug 1&quot; in mpirun.
<br>
<p>Those messages above show you that somehow when mpirun is trying to send
<br>
the SGE tasks to the remote nodes to shakespeare and octopus via 2
<br>
queues, shakespeare appears to start the server daemon successfully, but
<br>
you don't seem to get the same message from octopus. Typically I see
<br>
only 1 message from the server daemon when I use only 1 queue in my
<br>
parallel job.
<br>
<p>In order for the head node's &quot;qrsh -inherit&quot; tasks to be accepted by SGE
<br>
daemons on execution nodes, the execution daemons need to be
<br>
allocated/notified ahead of time that there are impending tasks coming
<br>
to the nodes.
<br>
<p>Anyway, I don't know why it needs to start the server daemon on octopus
<br>
when you have 2 queues in your parallel job. But let's say it's the
<br>
right behavior, SGE seems to have problem starting the task from the
<br>
headnode shakespeare to octopus (therefore we are the &quot;failed sending
<br>
task to execd: can't find connection message). Did you already try
<br>
connecting from shakespeare to octopus? You might also want to check out
<br>
messages on octopus' log file $SGE_ROOT/default/spool/octopus/messages
<br>
to see how exactly it isn't accepting the task.
<br>
<p>It may also be worthwhile to ask the gridengine folks if anyone has
<br>
tried with parallel job on multiple queues. I am not sure how typical
<br>
that people use this SGE feature.
<br>
<p>I don't have access to a SGE cluster but I notice from an online manual
<br>
there's a new qsub option (-masterq) in SGE 6.2 that may work. You might
<br>
want to give it a try. This looks more and more like an SGE issue not
<br>
able to accept tasks from multiple queues for parallel job.
<br>
<p>btw, you don't need the --with-sge switch in OMPI configure. It's new in
<br>
OMPI v1.3 so that we don't build SGE support by default.
<br>
<p>My $.02...
<br>
<p>- Pak Lui
<br>
plui_at_[hidden]
<br>
Penguin Computing
<br>
<p>users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Date: Sat, 11 Oct 2008 07:56:02 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] SGE tight integration and ?tm? protocol for
</span><br>
<span class="quotelev1">&gt; 	start
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;3E62159B-14B9-4D44-96F6-0345079BCCE5_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know much/anything about SGE (I'll leave that to the Sun folks  
</span><br>
<span class="quotelev1">&gt; on this list to reply), but I can tell you about the tm plugins: tm is  
</span><br>
<span class="quotelev1">&gt; the protocol used by the PBS/Torque family of launchers.  It looks  
</span><br>
<span class="quotelev1">&gt; like your Open MPI was built with TM support, but when you launch,  
</span><br>
<span class="quotelev1">&gt; it's likely unable to find the support libraries that it needs to load  
</span><br>
<span class="quotelev1">&gt; those plugins.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is probably fine in your case, since you want to use SGE, not TM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 9, 2008, at 4:40 PM, Sean Davis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am relatively new to OpenMPI and Sun Grid Engine parallel
</span><br>
<span class="quotelev2">&gt;&gt; integration.  I have a small cluster that is running SGE6.2 on linux
</span><br>
<span class="quotelev2">&gt;&gt; machines all using Intel Xeon processors.  I have installed OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.7 from source using the --with-sge switch.  Now, I am trying to
</span><br>
<span class="quotelev2">&gt;&gt; troubleshoot some problems I am having.  I have created a simple job
</span><br>
<span class="quotelev2">&gt;&gt; script:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The job script looks like:
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca pls_gridengine_verbose 1 -np $NSLOTS hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And the output on the error stream:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more junksub.sh.e3574
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05720] mca: base: component_find: unable to open ras tm:
</span><br>
<span class="quotelev2">&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05720] mca: base: component_find: unable to open pls tm:
</span><br>
<span class="quotelev2">&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; Starting server daemon at host &quot;shakespeare.nci.nih.gov&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Starting server daemon at host &quot;octopus.nci.nih.gov&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Server daemon successfully started with task id &quot;1.shakespeare&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open ras tm:
</span><br>
<span class="quotelev2">&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open pls tm:
</span><br>
<span class="quotelev2">&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; error: executing task of job 3576 failed: failed sending task to
</span><br>
<span class="quotelev2">&gt;&gt; execd_at_[hidden]: can't find connecti
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05720] ERROR: A daemon on node octopus.nci.nih.gov failed
</span><br>
<span class="quotelev2">&gt;&gt; to start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05720] ERROR: There may be more information available  
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05720] ERROR: the 'qstat -t' command on the Grid Engine  
</span><br>
<span class="quotelev2">&gt;&gt; tasks.
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05720] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05720] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev2">&gt;&gt; [shakespeare:05720] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev2">&gt;&gt; status 1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, there is no output in any output stream.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And if I log into shakespeare and qrsh -q all.q_at_octopus, I immediately
</span><br>
<span class="quotelev2">&gt;&gt; get a slot, so there isn't a &quot;direct&quot; problem with connecting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I got a hint from folks on the SGE mailing list, it appears that
</span><br>
<span class="quotelev2">&gt;&gt; qrsh is not being used for job submission.  Any suggestions as to why
</span><br>
<span class="quotelev2">&gt;&gt; this might be the case (or if it is the case)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sean
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6955.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Previous message:</strong> <a href="6953.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Maybe in reply to:</strong> <a href="6928.php">Sean Davis: "[OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6955.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Reply:</strong> <a href="6955.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
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
