<?
$subject_val = "Re: [OMPI users] openmpi+sge";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  2 10:12:38 2008" -->
<!-- isoreceived="20081002141238" -->
<!-- sent="Thu, 2 Oct 2008 16:12:25 +0200" -->
<!-- isosent="20081002141225" -->
<!-- name="Jaime Perea" -->
<!-- email="jaime.perea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+sge" -->
<!-- id="200810021612.25627.jaime.perea_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="162A75E3-9D3D-4E72-83D8-86D1067C79C2_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2008-10-02 10:12:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6830.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6828.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>In reply to:</strong> <a href="6828.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6830.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Reply:</strong> <a href="6830.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again, thanks for the answer
<br>
<p>Actually I took the definition of the pe from the openmpi 
<br>
webpage, in my case
<br>
<p>qconf -sp orte
<br>
pe_name            orte
<br>
slots              24
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $round_robin
<br>
control_slaves     TRUE
<br>
job_is_first_task  TRUE
<br>
urgency_slots      min
<br>
accounting_summary FALSE
<br>
<p>Our sge is version 6.2 and openmpi was configured with
<br>
the --with-sge switch of course.
<br>
<p>Regards
<br>
<p><pre>
--
Jaime Perea
El Jueves, 2 de Octubre de 2008, Reuti escribi&#243;:
&gt; Hi,
&gt;
&gt; Am 02.10.2008 um 15:37 schrieb Jaime Perea:
&gt; &gt; Hello,
&gt; &gt;
&gt; &gt; I am having some problems with a combination of openmpi+sge6.2
&gt; &gt;
&gt; &gt; Currently I'm working with the 1.3a1r19666 openmpi release and the
&gt;
&gt; AFAIK, you have to enable SGE support in Open MPI 1.3 during its
&gt; compilation.
&gt;
&gt; &gt; myrinet gm libraries (2.1.19)  but the problem was the same with the
&gt; &gt; prior 1.3 version. In short, I'm able to send jobs to a que via qrsh,
&gt; &gt; more or less this way,
&gt; &gt;
&gt; &gt; qrsh -cwd -V -q para -pe orte 6 mpirun -np 6 ctiming
&gt;
&gt; It should also work without specifying the number of slots a second
&gt; time, i.e.:
&gt;
&gt; qrsh -cwd -V -q para -pe orte 6 mpirun ctiming
&gt;
&gt; &gt; ctiming is a small test program and in this way it works, but if I
&gt; &gt; try to
&gt; &gt; send the same task by using qsub on a script like this one
&gt; &gt;
&gt; &gt; #!/bin/sh
&gt; &gt; #$ -pe orte 6
&gt;
&gt; This PE has just /bin/true for start-/stop_proc_args?
&gt;
&gt; &gt; #$ -q para
&gt; &gt; #$ -cwd
&gt; &gt; #
&gt; &gt; mpirun -np $NSLOTS  /model/jaime/ctiming
&gt;
&gt; mpirun /model/jaime/ctiming
&gt;
&gt; &gt; It fails with a message like this,
&gt; &gt; ..............
&gt; &gt;
&gt; &gt; error reading job context from &quot;qlogin_starter&quot;
&gt;
&gt; qlogin_starter should of course only be started with a qlogin command
&gt; in SGE.
&gt;
&gt; &gt; ----------------------------------------------------------------------
&gt; &gt; ----
&gt; &gt; A daemon (pid 11207) died unexpectedly with status 1 while attempting
&gt; &gt; to launch so we are aborting.
&gt; &gt;
&gt; &gt; There may be more information reported by the environment (see above).
&gt; &gt;
&gt; &gt; This may be because the daemon was unable to find all the needed
&gt; &gt; shared
&gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
&gt; &gt; have the
&gt; &gt; location of the shared libraries on the remote nodes and this will
&gt; &gt; automatically be forwarded to the remote nodes.
&gt; &gt;
&gt; &gt; .............
&gt; &gt;
&gt; &gt; I know that LD_LIBRARY_PATH is not the problem,  since I checked
&gt; &gt; that all
&gt; &gt; the environment is present.... any idea?
&gt; &gt;
&gt; &gt; For previous releases of the sge and openmpi I was able to do them
&gt; &gt; work
&gt; &gt; together with a few wrappers,
&gt;
&gt; Which version of SGE are you using?
&gt;
&gt; -- Reuti
&gt;
&gt; &gt; but now the integration looks much better!
&gt; &gt; This happen only when sending openmpi jobs.
&gt; &gt;
&gt; &gt; Thanks and all the best
&gt; &gt;
&gt; &gt; ---
&gt; &gt;
&gt; &gt;            Jaime D. Perea Duarte. &lt;jaime at iaa dot es&gt;
&gt; &gt;              Linux registered user #10472
&gt; &gt;
&gt; &gt;            Dep. Astrofisica Extragalactica.
&gt; &gt;            Instituto de Astrofisica de Andalucia (CSIC)
&gt; &gt;            Apdo. 3004, 18080 Granada, Spain.
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6830.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Previous message:</strong> <a href="6828.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>In reply to:</strong> <a href="6828.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6830.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
<li><strong>Reply:</strong> <a href="6830.php">Reuti: "Re: [OMPI users] openmpi+sge"</a>
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
