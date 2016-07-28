<?
$subject_val = "Re: [OMPI users] SGE tight integration and ?tm? protocol for start";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 12 18:55:19 2008" -->
<!-- isoreceived="20081012225519" -->
<!-- sent="Sun, 12 Oct 2008 18:55:14 -0400" -->
<!-- isosent="20081012225514" -->
<!-- name="Sean Davis" -->
<!-- email="sdavis2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE tight integration and ?tm? protocol for start" -->
<!-- id="264855a00810121555t605a9504w9796f78a075e7074_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="17A7A32F-71C9-45EE-A086-6E180175966B_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2008-10-12 18:55:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6960.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Previous message:</strong> <a href="6958.php">Brock Palen: "Re: [OMPI users] HPL/LINPACK 2.0 AND OPENMPI 1.2.7 AND 1.3 ALPHA"</a>
<li><strong>In reply to:</strong> <a href="6956.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6960.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Reply:</strong> <a href="6960.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Oct 11, 2008 at 6:48 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Am 12.10.2008 um 00:21 schrieb Sean Davis:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Pak.  There is only one queue on the SGE system.  Of course,
</span><br>
<span class="quotelev2">&gt;&gt; there are queue instances for each machine, which is the usual for
</span><br>
<span class="quotelev2">&gt;&gt; SGE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll give the -masterq a look.  And the messages files for the
</span><br>
<span class="quotelev2">&gt;&gt; involved machines are devoid of anything useful; in fact, there is no
</span><br>
<span class="quotelev2">&gt;&gt; mention of these jobs, in general.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to see more, you can set &quot;loglevel log_info&quot; in the scheduler configuration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have more than one network card installed and gave them the same
</span><br>
<span class="quotelev1">&gt; name?
</span><br>
<span class="quotelev1">&gt; Your defined &quot;tmpdir&quot; is local on each machine?
</span><br>
<span class="quotelev1">&gt; Do you redifine $TMPDIR in your .bashrc or anything else therein?
</span><br>
<p>The tmpdir is the same on each machine and is local to the machine.
<br>
We do have two interfaces on each machine, one for a local subnet and
<br>
the other for an outside connection from each machine.  The DNS is
<br>
resolved on the outside network.  Why would behavior be different on
<br>
jobs that are run in a PE and only in $round_robin than for standard
<br>
serial jobs or jobs on only one node?
<br>
<p>Sean
<br>
<p><p><span class="quotelev4">&gt;&gt;&gt;&gt; Date: Sat, 11 Oct 2008 07:56:02 -0400
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] SGE tight integration and ?tm? protocol for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message-ID: &lt;3E62159B-14B9-4D44-96F6-0345079BCCE5_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know much/anything about SGE (I'll leave that to the Sun folks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this list to reply), but I can tell you about the tm plugins: tm is  the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; protocol used by the PBS/Torque family of launchers.  It looks  like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI was built with TM support, but when you launch,  it's likely
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to find the support libraries that it needs to load  those plugins.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is probably fine in your case, since you want to use SGE, not TM.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 9, 2008, at 4:40 PM, Sean Davis wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am relatively new to OpenMPI and Sun Grid Engine parallel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; integration.  I have a small cluster that is running SGE6.2 on linux
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; machines all using Intel Xeon processors.  I have installed OpenMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.2.7 from source using the --with-sge switch.  Now, I am trying to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; troubleshoot some problems I am having.  I have created a simple job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; script:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The job script looks like:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --mca pls_gridengine_verbose 1 -np $NSLOTS hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And the output on the error stream:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; more junksub.sh.e3574
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shakespeare:05720] mca: base: component_find: unable to open ras tm:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shakespeare:05720] mca: base: component_find: unable to open pls tm:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Starting server daemon at host &quot;shakespeare.nci.nih.gov&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Starting server daemon at host &quot;octopus.nci.nih.gov&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Server daemon successfully started with task id &quot;1.shakespeare&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open ras tm:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shakespeare:05733] mca: base: component_find: unable to open pls tm:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error: executing task of job 3576 failed: failed sending task to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; execd_at_[hidden]: can't find connecti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: A daemon on node octopus.nci.nih.gov failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to start as expected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: There may be more information available
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: the 'qstat -t' command on the Grid Engine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  tasks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: If the problem persists, please restart the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: Grid Engine PE job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [shakespeare:05720] ERROR: The daemon exited unexpectedly with  status
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, there is no output in any output stream.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And if I log into shakespeare and qrsh -q all.q_at_octopus, I immediately
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; get a slot, so there isn't a &quot;direct&quot; problem with connecting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As I got a hint from folks on the SGE mailing list, it appears that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; qrsh is not being used for job submission.  Any suggestions as to why
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this might be the case (or if it is the case)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sean
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6960.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Previous message:</strong> <a href="6958.php">Brock Palen: "Re: [OMPI users] HPL/LINPACK 2.0 AND OPENMPI 1.2.7 AND 1.3 ALPHA"</a>
<li><strong>In reply to:</strong> <a href="6956.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6960.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
<li><strong>Reply:</strong> <a href="6960.php">Reuti: "Re: [OMPI users] SGE tight integration and ?tm? protocol for start"</a>
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
