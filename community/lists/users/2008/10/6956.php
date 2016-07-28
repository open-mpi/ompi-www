<?
$subject_val = "Re: [OMPI users] SGE tight integration and ?tm? protocol for start";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 18:48:16 2008" -->
<!-- isoreceived="20081011224816" -->
<!-- sent="Sun, 12 Oct 2008 00:48:04 +0200" -->
<!-- isosent="20081011224804" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE tight integration and ?tm? protocol for start" -->
<!-- id="17A7A32F-71C9-45EE-A086-6E180175966B_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="264855a00810111521m7939dd1bm7d0f0bb05d9d544e_at_mail.gmail.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-11 18:48:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6957.php">Allan Menezes: "[OMPI users] HPL/LINPACK 2.0 AND OPENMPI 1.2.7 AND 1.3 ALPHA"</a>
<li><strong>Previous message:</strong> <a href="6955.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>In reply to:</strong> <a href="6955.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6959.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Reply:</strong> <a href="6959.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 12.10.2008 um 00:21 schrieb Sean Davis:
<br>
<p><span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Pak.  There is only one queue on the SGE system.  Of course,
</span><br>
<span class="quotelev1">&gt; there are queue instances for each machine, which is the usual for
</span><br>
<span class="quotelev1">&gt; SGE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll give the -masterq a look.  And the messages files for the
</span><br>
<span class="quotelev1">&gt; involved machines are devoid of anything useful; in fact, there is no
</span><br>
<span class="quotelev1">&gt; mention of these jobs, in general.
</span><br>
<p>Hi,
<br>
<p>to see more, you can set &quot;loglevel log_info&quot; in the scheduler  
<br>
configuration.
<br>
<p>Do you have more than one network card installed and gave them the  
<br>
same name?
<br>
Your defined &quot;tmpdir&quot; is local on each machine?
<br>
Do you redifine $TMPDIR in your .bashrc or anything else therein?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Sean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Sat, 11 Oct 2008 07:56:02 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] SGE tight integration and ?tm? protocol  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;3E62159B-14B9-4D44-96F6-0345079BCCE5_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know much/anything about SGE (I'll leave that to the Sun  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; folks  on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this list to reply), but I can tell you about the tm plugins: tm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is  the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; protocol used by the PBS/Torque family of launchers.  It looks   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI was built with TM support, but when you launch,  it's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely unable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to find the support libraries that it needs to load  those plugins.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is probably fine in your case, since you want to use SGE,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not TM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 9, 2008, at 4:40 PM, Sean Davis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am relatively new to OpenMPI and Sun Grid Engine parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; integration.  I have a small cluster that is running SGE6.2 on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machines all using Intel Xeon processors.  I have installed OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.2.7 from source using the --with-sge switch.  Now, I am trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; troubleshoot some problems I am having.  I have created a simple  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; script:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The job script looks like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --mca pls_gridengine_verbose 1 -np $NSLOTS hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And the output on the error stream:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; more junksub.sh.e3574
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [shakespeare:05720] mca: base: component_find: unable to open  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ras tm:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [shakespeare:05720] mca: base: component_find: unable to open  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pls tm:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Starting server daemon at host &quot;shakespeare.nci.nih.gov&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Starting server daemon at host &quot;octopus.nci.nih.gov&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Server daemon successfully started with task id &quot;1.shakespeare&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ras tm:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pls tm:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error: executing task of job 3576 failed: failed sending task to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; execd_at_[hidden]: can't find connecti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: A daemon on node octopus.nci.nih.gov  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to start as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: There may be more information  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available  from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: the 'qstat -t' command on the Grid  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Engine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  tasks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: If the problem persists, please  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; restart the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: The daemon exited unexpectedly with   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, there is no output in any output stream.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And if I log into shakespeare and qrsh -q all.q_at_octopus, I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; immediately
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get a slot, so there isn't a &quot;direct&quot; problem with connecting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As I got a hint from folks on the SGE mailing list, it appears that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; qrsh is not being used for job submission.  Any suggestions as  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to why
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this might be the case (or if it is the case)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sean
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6957.php">Allan Menezes: "[OMPI users] HPL/LINPACK 2.0 AND OPENMPI 1.2.7 AND 1.3 ALPHA"</a>
<li><strong>Previous message:</strong> <a href="6955.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>In reply to:</strong> <a href="6955.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6959.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Reply:</strong> <a href="6959.php">Sean Davis: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
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
