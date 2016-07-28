<?
$subject_val = "Re: [OMPI users] openmpi+sge";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 10:46:34 2008" -->
<!-- isoreceived="20081002144634" -->
<!-- sent="Thu, 2 Oct 2008 16:46:29 +0200" -->
<!-- isosent="20081002144629" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+sge" -->
<!-- id="AFAF932A-1518-4E1D-BDE3-2EB029A30FDF_at_staff.uni-marburg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200810021612.25627.jaime.perea_at_gmail.com" -->
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
<strong>Date:</strong> 2008-10-02 10:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6831.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6829.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>In reply to:</strong> <a href="6829.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6831.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Reply:</strong> <a href="6831.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 02.10.2008 um 16:12 schrieb Jaime Perea:
<br>
<p><span class="quotelev1">&gt; Hi again, thanks for the answer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually I took the definition of the pe from the openmpi
</span><br>
<span class="quotelev1">&gt; webpage, in my case
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; qconf -sp orte
</span><br>
<span class="quotelev1">&gt; pe_name            orte
</span><br>
<span class="quotelev1">&gt; slots              24
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  TRUE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary FALSE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our sge is version 6.2 and openmpi was configured with
</span><br>
<span class="quotelev1">&gt; the --with-sge switch of course.
</span><br>
<p>In SGE 6.2 two types of remote startup are implemented. Which one are  
<br>
you using (builtin or the former settings for each command) in the  
<br>
SGE configuration?
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jaime Perea
</span><br>
<span class="quotelev1">&gt; El Jueves, 2 de Octubre de 2008, Reuti escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 02.10.2008 um 15:37 schrieb Jaime Perea:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am having some problems with a combination of openmpi+sge6.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently I'm working with the 1.3a1r19666 openmpi release and the
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; AFAIK, you have to enable SGE support in Open MPI 1.3 during its
</span><br>
<span class="quotelev2">&gt;&gt; compilation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myrinet gm libraries (2.1.19)  but the problem was the same with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prior 1.3 version. In short, I'm able to send jobs to a que via  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qrsh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more or less this way,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qrsh -cwd -V -q para -pe orte 6 mpirun -np 6 ctiming
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It should also work without specifying the number of slots a second
</span><br>
<span class="quotelev2">&gt;&gt; time, i.e.:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; qrsh -cwd -V -q para -pe orte 6 mpirun ctiming
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ctiming is a small test program and in this way it works, but if I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send the same task by using qsub on a script like this one
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -pe orte 6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This PE has just /bin/true for start-/stop_proc_args?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -q para
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np $NSLOTS  /model/jaime/ctiming
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun /model/jaime/ctiming
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It fails with a message like this,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ..............
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error reading job context from &quot;qlogin_starter&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; qlogin_starter should of course only be started with a qlogin command
</span><br>
<span class="quotelev2">&gt;&gt; in SGE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid 11207) died unexpectedly with status 1 while  
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .............
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know that LD_LIBRARY_PATH is not the problem,  since I checked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the environment is present.... any idea?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For previous releases of the sge and openmpi I was able to do them
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; together with a few wrappers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which version of SGE are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but now the integration looks much better!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This happen only when sending openmpi jobs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks and all the best
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Jaime D. Perea Duarte. &lt;jaime at iaa dot es&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              Linux registered user #10472
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Dep. Astrofisica Extragalactica.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Instituto de Astrofisica de Andalucia (CSIC)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Apdo. 3004, 18080 Granada, Spain.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6831.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6829.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>In reply to:</strong> <a href="6829.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6831.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Reply:</strong> <a href="6831.php">Jaime Perea: "Re: [OMPI users] openmpi+sge"</a>
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
