<?
$subject_val = "Re: [OMPI users] openmpi+sge";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 11:25:53 2008" -->
<!-- isoreceived="20081002152553" -->
<!-- sent="Thu, 2 Oct 2008 17:25:40 +0200" -->
<!-- isosent="20081002152540" -->
<!-- name="Jaime Perea" -->
<!-- email="jaime.perea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+sge" -->
<!-- id="200810021725.40729.jaime.perea_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="97A4ED50-665E-4E77-9C78-2AB794D963AE_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Jaime Perea (<em>jaime.perea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-02 11:25:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6834.php">Rolf Vandevaart: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6832.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>In reply to:</strong> <a href="6832.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6834.php">Rolf Vandevaart: "Re: [OMPI users] openmpi+sge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Well, let's try, I downloaded binaries for the sge, 
<br>
<p>I was thinking on rsh, I'm going to try it after
<br>
the old ssh/sshd settings and before than trying 
<br>
to compile the sge... which I guess  is not an easy
<br>
task.
<br>
<p>Regards
<br>
<p><pre>
--
Jaime Perea
El Jueves, 2 de Octubre de 2008, Reuti escribi&#243;:
&gt; Am 02.10.2008 um 16:51 schrieb Jaime Perea:
&gt; &gt; Hi
&gt; &gt;
&gt; &gt; builtin, do I have to change them to ssh and sshd as in sge 6.1?
&gt;
&gt; I always used only rsh, as ssh doesn't provide a Tight Integration
&gt; with correct accounting (unless you compiled SGE with -tigth-ssh on
&gt; your own).
&gt;
&gt; But it would be worth a try with either the rsh or ssh stuff, as the
&gt; builtin starter is a new feature of SGE 6.2.
&gt;
&gt; -- Reuti
&gt;
&gt; &gt; Thanks again
&gt; &gt;
&gt; &gt; --
&gt; &gt; Jaime Perea
&gt; &gt;
&gt; &gt; El Jueves, 2 de Octubre de 2008, Reuti escribi&#243;:
&gt; &gt;&gt; Am 02.10.2008 um 16:12 schrieb Jaime Perea:
&gt; &gt;&gt;&gt; Hi again, thanks for the answer
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Actually I took the definition of the pe from the openmpi
&gt; &gt;&gt;&gt; webpage, in my case
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; qconf -sp orte
&gt; &gt;&gt;&gt; pe_name            orte
&gt; &gt;&gt;&gt; slots              24
&gt; &gt;&gt;&gt; user_lists         NONE
&gt; &gt;&gt;&gt; xuser_lists        NONE
&gt; &gt;&gt;&gt; start_proc_args    /bin/true
&gt; &gt;&gt;&gt; stop_proc_args     /bin/true
&gt; &gt;&gt;&gt; allocation_rule    $round_robin
&gt; &gt;&gt;&gt; control_slaves     TRUE
&gt; &gt;&gt;&gt; job_is_first_task  TRUE
&gt; &gt;&gt;&gt; urgency_slots      min
&gt; &gt;&gt;&gt; accounting_summary FALSE
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Our sge is version 6.2 and openmpi was configured with
&gt; &gt;&gt;&gt; the --with-sge switch of course.
&gt; &gt;&gt;
&gt; &gt;&gt; In SGE 6.2 two types of remote startup are implemented. Which one are
&gt; &gt;&gt; you using (builtin or the former settings for each command) in the
&gt; &gt;&gt; SGE configuration?
&gt; &gt;&gt;
&gt; &gt;&gt; -- Reuti
&gt; &gt;&gt;
&gt; &gt;&gt;&gt; Regards
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; --
&gt; &gt;&gt;&gt; Jaime Perea
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; El Jueves, 2 de Octubre de 2008, Reuti escribi&#243;:
&gt; &gt;&gt;&gt;&gt; Hi,
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; Am 02.10.2008 um 15:37 schrieb Jaime Perea:
&gt; &gt;&gt;&gt;&gt;&gt; Hello,
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; I am having some problems with a combination of openmpi+sge6.2
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; Currently I'm working with the 1.3a1r19666 openmpi release and the
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; AFAIK, you have to enable SGE support in Open MPI 1.3 during its
&gt; &gt;&gt;&gt;&gt; compilation.
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; myrinet gm libraries (2.1.19)  but the problem was the same
&gt; &gt;&gt;&gt;&gt;&gt; with the
&gt; &gt;&gt;&gt;&gt;&gt; prior 1.3 version. In short, I'm able to send jobs to a que via
&gt; &gt;&gt;&gt;&gt;&gt; qrsh,
&gt; &gt;&gt;&gt;&gt;&gt; more or less this way,
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; qrsh -cwd -V -q para -pe orte 6 mpirun -np 6 ctiming
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; It should also work without specifying the number of slots a second
&gt; &gt;&gt;&gt;&gt; time, i.e.:
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; qrsh -cwd -V -q para -pe orte 6 mpirun ctiming
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; ctiming is a small test program and in this way it works, but if I
&gt; &gt;&gt;&gt;&gt;&gt; try to
&gt; &gt;&gt;&gt;&gt;&gt; send the same task by using qsub on a script like this one
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; #!/bin/sh
&gt; &gt;&gt;&gt;&gt;&gt; #$ -pe orte 6
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; This PE has just /bin/true for start-/stop_proc_args?
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; #$ -q para
&gt; &gt;&gt;&gt;&gt;&gt; #$ -cwd
&gt; &gt;&gt;&gt;&gt;&gt; #
&gt; &gt;&gt;&gt;&gt;&gt; mpirun -np $NSLOTS  /model/jaime/ctiming
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; mpirun /model/jaime/ctiming
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; It fails with a message like this,
&gt; &gt;&gt;&gt;&gt;&gt; ..............
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; error reading job context from &quot;qlogin_starter&quot;
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; qlogin_starter should of course only be started with a qlogin
&gt; &gt;&gt;&gt;&gt; command
&gt; &gt;&gt;&gt;&gt; in SGE.
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt;&gt; --
&gt; &gt;&gt;&gt;&gt;&gt; --
&gt; &gt;&gt;&gt;&gt;&gt; ----
&gt; &gt;&gt;&gt;&gt;&gt; A daemon (pid 11207) died unexpectedly with status 1 while
&gt; &gt;&gt;&gt;&gt;&gt; attempting
&gt; &gt;&gt;&gt;&gt;&gt; to launch so we are aborting.
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; There may be more information reported by the environment (see
&gt; &gt;&gt;&gt;&gt;&gt; above).
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed
&gt; &gt;&gt;&gt;&gt;&gt; shared
&gt; &gt;&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
&gt; &gt;&gt;&gt;&gt;&gt; have the
&gt; &gt;&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
&gt; &gt;&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; .............
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; I know that LD_LIBRARY_PATH is not the problem,  since I checked
&gt; &gt;&gt;&gt;&gt;&gt; that all
&gt; &gt;&gt;&gt;&gt;&gt; the environment is present.... any idea?
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; For previous releases of the sge and openmpi I was able to do them
&gt; &gt;&gt;&gt;&gt;&gt; work
&gt; &gt;&gt;&gt;&gt;&gt; together with a few wrappers,
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; Which version of SGE are you using?
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; -- Reuti
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; but now the integration looks much better!
&gt; &gt;&gt;&gt;&gt;&gt; This happen only when sending openmpi jobs.
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; Thanks and all the best
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; ---
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;            Jaime D. Perea Duarte. &lt;jaime at iaa dot es&gt;
&gt; &gt;&gt;&gt;&gt;&gt;              Linux registered user #10472
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;            Dep. Astrofisica Extragalactica.
&gt; &gt;&gt;&gt;&gt;&gt;            Instituto de Astrofisica de Andalucia (CSIC)
&gt; &gt;&gt;&gt;&gt;&gt;            Apdo. 3004, 18080 Granada, Spain.
&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6834.php">Rolf Vandevaart: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6832.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>In reply to:</strong> <a href="6832.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6834.php">Rolf Vandevaart: "Re: [OMPI users] openmpi+sge"</a>
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
