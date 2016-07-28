<?
$subject_val = "Re: [OMPI users] openmpi+sge";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 07:09:51 2008" -->
<!-- isoreceived="20081003110951" -->
<!-- sent="Fri, 3 Oct 2008 13:09:40 +0200" -->
<!-- isosent="20081003110940" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+sge" -->
<!-- id="67BC0441-90BE-4624-8D88-CC75C33070AE_at_staff.uni-marburg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200810031046.46467.jaime.perea_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi+sge<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 07:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6843.php">Eric Thibodeau: "[OMPI users] Tuned Collective MCA params"</a>
<li><strong>Previous message:</strong> <a href="6841.php">Roberto Fichera: "Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6839.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 03.10.2008 um 10:46 schrieb Jaime Perea:
<br>
<p><span class="quotelev1">&gt; Hello again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I already had a 6.1 version of the sge I reverted to it
</span><br>
<span class="quotelev1">&gt; and included the hacks (ssh, sshd -i and qlogin_wrap) and in
</span><br>
<span class="quotelev1">&gt; this way both the interactives qsh and qrsh and batch qsub
</span><br>
<span class="quotelev1">&gt; worked with openmpi.
</span><br>
<span class="quotelev1">&gt; For me this is a solution, but I'm still curious  of what it was
</span><br>
<span class="quotelev1">&gt; going on in 6.2. I will see if there exists a list like this for the
</span><br>
<span class="quotelev1">&gt; sge.
</span><br>
<p>Sure there is, but we will meet again ;-)
<br>
<p><a href="http://gridengine.sunsource.net/maillist.html">http://gridengine.sunsource.net/maillist.html</a>
<br>
<p>It's the users_at_[hidden]
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jaime Perea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; El Jueves, 2 de Octubre de 2008, Rolf Vandevaart escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; On 10/02/08 11:18, Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 02.10.2008 um 16:51 schrieb Jaime Perea:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; builtin, do I have to change them to ssh and sshd as in sge 6.1?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I always used only rsh, as ssh doesn't provide a Tight Integration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with correct accounting (unless you compiled SGE with -tigth-ssh on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your own).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But it would be worth a try with either the rsh or ssh stuff, as the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; builtin starter is a new feature of SGE 6.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As was mentioned, SGE 6.2 has a new Integrated Job Starter so that  
</span><br>
<span class="quotelev2">&gt;&gt; rsh
</span><br>
<span class="quotelev2">&gt;&gt; and ssh do not need to be used to start jobs on remote nodes.   
</span><br>
<span class="quotelev2">&gt;&gt; This is
</span><br>
<span class="quotelev2">&gt;&gt; the recommended way of starting as it is faster than ssh and more
</span><br>
<span class="quotelev2">&gt;&gt; scalable than rsh.  And, you do not need to do any hacks for  
</span><br>
<span class="quotelev2">&gt;&gt; proper job
</span><br>
<span class="quotelev2">&gt;&gt; accounting like was needed for ssh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Under the covers, Open MPI uses qrsh to start the MPI jobs on all the
</span><br>
<span class="quotelev2">&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if that helps, but just wanted to mention that information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks again
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jaime Perea
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; El Jueves, 2 de Octubre de 2008, Reuti escribi&#243;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am 02.10.2008 um 16:12 schrieb Jaime Perea:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi again, thanks for the answer
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Actually I took the definition of the pe from the openmpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; webpage, in my case
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; qconf -sp orte
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pe_name            orte
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; slots              24
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; job_is_first_task  TRUE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; accounting_summary FALSE
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Our sge is version 6.2 and openmpi was configured with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the --with-sge switch of course.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In SGE 6.2 two types of remote startup are implemented. Which one
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are you using (builtin or the former settings for each command) in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the SGE configuration?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jaime Perea
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; El Jueves, 2 de Octubre de 2008, Reuti escribi&#243;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Am 02.10.2008 um 15:37 schrieb Jaime Perea:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am having some problems with a combination of openmpi+sge6.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Currently I'm working with the 1.3a1r19666 openmpi release and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; AFAIK, you have to enable SGE support in Open MPI 1.3 during its
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compilation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; myrinet gm libraries (2.1.19)  but the problem was the same  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the prior 1.3 version. In short, I'm able to send jobs to a que
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; via qrsh,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; more or less this way,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; qrsh -cwd -V -q para -pe orte 6 mpirun -np 6 ctiming
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It should also work without specifying the number of slots a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; second time, i.e.:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; qrsh -cwd -V -q para -pe orte 6 mpirun ctiming
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ctiming is a small test program and in this way it works,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I try to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; send the same task by using qsub on a script like this one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -pe orte 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This PE has just /bin/true for start-/stop_proc_args?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -q para
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np $NSLOTS  /model/jaime/ctiming
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun /model/jaime/ctiming
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It fails with a message like this,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ..............
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error reading job context from &quot;qlogin_starter&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; qlogin_starter should of course only be started with a qlogin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; command in SGE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --- --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A daemon (pid 11207) died unexpectedly with status 1 while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; needed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libraries on the remote node. You may set your  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; will automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; .............
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I know that LD_LIBRARY_PATH is not the problem,  since I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checked
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the environment is present.... any idea?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For previous releases of the sge and openmpi I was able to do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; them work
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; together with a few wrappers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Which version of SGE are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but now the integration looks much better!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This happen only when sending openmpi jobs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks and all the best
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;            Jaime D. Perea Duarte. &lt;jaime at iaa dot es&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;              Linux registered user #10472
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;            Dep. Astrofisica Extragalactica.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;            Instituto de Astrofisica de Andalucia (CSIC)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;            Apdo. 3004, 18080 Granada, Spain.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6843.php">Eric Thibodeau: "[OMPI users] Tuned Collective MCA params"</a>
<li><strong>Previous message:</strong> <a href="6841.php">Roberto Fichera: "Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6839.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
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
