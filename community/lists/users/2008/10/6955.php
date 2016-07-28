<?
$subject_val = "Re: [OMPI users] SGE tight integration and ?tm? protocol for start";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 18:21:53 2008" -->
<!-- isoreceived="20081011222153" -->
<!-- sent="Sat, 11 Oct 2008 18:21:49 -0400" -->
<!-- isosent="20081011222149" -->
<!-- name="Sean Davis" -->
<!-- email="sdavis2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE tight integration and ?tm? protocol for start" -->
<!-- id="264855a00810111521m7939dd1bm7d0f0bb05d9d544e_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="48F11BF7.9060108_at_penguincomputing.com" -->
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
<strong>From:</strong> Sean Davis (<em>sdavis2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-11 18:21:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6956.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Previous message:</strong> <a href="6954.php">Pak Lui: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>In reply to:</strong> <a href="6954.php">Pak Lui: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6956.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Reply:</strong> <a href="6956.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Oct 11, 2008 at 5:34 PM, Pak Lui &lt;plui_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It looks like from your earlier discussions on gridengine user alias
</span><br>
<span class="quotelev1">&gt; that you are able to run a simple single queue SGE tightly integrated
</span><br>
<span class="quotelev1">&gt; parallel job with Open MPI, it's just a matter of using multiple queues
</span><br>
<span class="quotelev1">&gt; with your parallel job, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=26298">http://gridengine.sunsource.net/servlets/ReadMsg?list=users&amp;msgNo=26298</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The tm messages are just a red herring. What's more interesting is the
</span><br>
<span class="quotelev1">&gt; verbose messages from qrsh (the lines that you enable by using -mca
</span><br>
<span class="quotelev1">&gt; pls_gridengine_verbose 1, with lines started without the stuff prepended
</span><br>
<span class="quotelev1">&gt;  by OMPI, like [shakespeare:05720]).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting server daemon at host &quot;shakespeare.nci.nih.gov&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting server daemon at host &quot;octopus.nci.nih.gov&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Server daemon successfully started with task id &quot;1.shakespeare&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open ras tm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open pls tm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: executing task of job 3576 failed: failed sending task to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execd_at_[hidden]: can't find connecti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since you see these verbose messages here, it means that you are using
</span><br>
<span class="quotelev1">&gt; &quot;qrsh -inherit&quot; in the backend for launching tasks. (You can also see
</span><br>
<span class="quotelev1">&gt; the qrsh -inherit line by setting &quot;-mca pls_gridnegine_debug 1&quot; in mpirun.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can also see the actual &quot;qrsh -inherit&quot; line by setting &quot;-mca
</span><br>
<span class="quotelev1">&gt; pls_gridnegine_debug 1&quot; in mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those messages above show you that somehow when mpirun is trying to send
</span><br>
<span class="quotelev1">&gt; the SGE tasks to the remote nodes to shakespeare and octopus via 2
</span><br>
<span class="quotelev1">&gt; queues, shakespeare appears to start the server daemon successfully, but
</span><br>
<span class="quotelev1">&gt; you don't seem to get the same message from octopus. Typically I see
</span><br>
<span class="quotelev1">&gt; only 1 message from the server daemon when I use only 1 queue in my
</span><br>
<span class="quotelev1">&gt; parallel job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In order for the head node's &quot;qrsh -inherit&quot; tasks to be accepted by SGE
</span><br>
<span class="quotelev1">&gt; daemons on execution nodes, the execution daemons need to be
</span><br>
<span class="quotelev1">&gt; allocated/notified ahead of time that there are impending tasks coming
</span><br>
<span class="quotelev1">&gt; to the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I don't know why it needs to start the server daemon on octopus
</span><br>
<span class="quotelev1">&gt; when you have 2 queues in your parallel job. But let's say it's the
</span><br>
<span class="quotelev1">&gt; right behavior, SGE seems to have problem starting the task from the
</span><br>
<span class="quotelev1">&gt; headnode shakespeare to octopus (therefore we are the &quot;failed sending
</span><br>
<span class="quotelev1">&gt; task to execd: can't find connection message). Did you already try
</span><br>
<span class="quotelev1">&gt; connecting from shakespeare to octopus? You might also want to check out
</span><br>
<span class="quotelev1">&gt; messages on octopus' log file $SGE_ROOT/default/spool/octopus/messages
</span><br>
<span class="quotelev1">&gt; to see how exactly it isn't accepting the task.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may also be worthwhile to ask the gridengine folks if anyone has
</span><br>
<span class="quotelev1">&gt; tried with parallel job on multiple queues. I am not sure how typical
</span><br>
<span class="quotelev1">&gt; that people use this SGE feature.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have access to a SGE cluster but I notice from an online manual
</span><br>
<span class="quotelev1">&gt; there's a new qsub option (-masterq) in SGE 6.2 that may work. You might
</span><br>
<span class="quotelev1">&gt; want to give it a try. This looks more and more like an SGE issue not
</span><br>
<span class="quotelev1">&gt; able to accept tasks from multiple queues for parallel job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btw, you don't need the --with-sge switch in OMPI configure. It's new in
</span><br>
<span class="quotelev1">&gt; OMPI v1.3 so that we don't build SGE support by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My $.02...
</span><br>
<p>Thanks, Pak.  There is only one queue on the SGE system.  Of course,
<br>
there are queue instances for each machine, which is the usual for
<br>
SGE.
<br>
<p>I'll give the -masterq a look.  And the messages files for the
<br>
involved machines are devoid of anything useful; in fact, there is no
<br>
mention of these jobs, in general.
<br>
<p>Sean
<br>
<p><span class="quotelev2">&gt;&gt; Date: Sat, 11 Oct 2008 07:56:02 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] SGE tight integration and ?tm? protocol for
</span><br>
<span class="quotelev2">&gt;&gt;        start
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;3E62159B-14B9-4D44-96F6-0345079BCCE5_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know much/anything about SGE (I'll leave that to the Sun folks  on
</span><br>
<span class="quotelev2">&gt;&gt; this list to reply), but I can tell you about the tm plugins: tm is  the
</span><br>
<span class="quotelev2">&gt;&gt; protocol used by the PBS/Torque family of launchers.  It looks  like your
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI was built with TM support, but when you launch,  it's likely unable
</span><br>
<span class="quotelev2">&gt;&gt; to find the support libraries that it needs to load  those plugins.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is probably fine in your case, since you want to use SGE, not TM.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 9, 2008, at 4:40 PM, Sean Davis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am relatively new to OpenMPI and Sun Grid Engine parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; integration.  I have a small cluster that is running SGE6.2 on linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines all using Intel Xeon processors.  I have installed OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.7 from source using the --with-sge switch.  Now, I am trying to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; troubleshoot some problems I am having.  I have created a simple job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; script:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The job script looks like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca pls_gridengine_verbose 1 -np $NSLOTS hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And the output on the error stream:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more junksub.sh.e3574
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05720] mca: base: component_find: unable to open ras tm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05720] mca: base: component_find: unable to open pls tm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting server daemon at host &quot;shakespeare.nci.nih.gov&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting server daemon at host &quot;octopus.nci.nih.gov&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Server daemon successfully started with task id &quot;1.shakespeare&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open ras tm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open pls tm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: executing task of job 3576 failed: failed sending task to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execd_at_[hidden]: can't find connecti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05720] ERROR: A daemon on node octopus.nci.nih.gov failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to start as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05720] ERROR: There may be more information available  from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05720] ERROR: the 'qstat -t' command on the Grid Engine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  tasks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05720] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05720] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [shakespeare:05720] ERROR: The daemon exited unexpectedly with  status 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, there is no output in any output stream.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And if I log into shakespeare and qrsh -q all.q_at_octopus, I immediately
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get a slot, so there isn't a &quot;direct&quot; problem with connecting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I got a hint from folks on the SGE mailing list, it appears that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qrsh is not being used for job submission.  Any suggestions as to why
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this might be the case (or if it is the case)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sean
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
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6956.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Previous message:</strong> <a href="6954.php">Pak Lui: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>In reply to:</strong> <a href="6954.php">Pak Lui: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6956.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Reply:</strong> <a href="6956.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
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
