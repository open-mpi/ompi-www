<?
$subject_val = "Re: [OMPI users] ompi-clean on single executable";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 24 07:01:56 2012" -->
<!-- isoreceived="20121024110156" -->
<!-- sent="Wed, 24 Oct 2012 15:01:51 +0400" -->
<!-- isosent="20121024110151" -->
<!-- name="Nicolas Deladerriere" -->
<!-- email="nicolas.deladerriere_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-clean on single executable" -->
<!-- id="CABvLwVB8rtdKrgPPRqp3u8zKLxs_KK2KcibquDJCj5SfMWXDXg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9320650F-F566-4EE8-B0F9-3678D0856313_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-clean on single executable<br>
<strong>From:</strong> Nicolas Deladerriere (<em>nicolas.deladerriere_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-24 07:01:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20524.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>Previous message:</strong> <a href="20522.php">Reuti: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20522.php">Reuti: "Re: [OMPI users] ompi-clean on single executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20525.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Reply:</strong> <a href="20525.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti,
<br>
<p>The problem I am facing is a small small part of our production
<br>
system, and I cannot modify our mpirun submission system. This is why
<br>
i am looking at solution using only ompi-clean of mpirun command
<br>
specification.
<br>
<p>Thanks,
<br>
Nicolas
<br>
<p>2012/10/24, Reuti &lt;reuti_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Am 24.10.2012 um 11:33 schrieb Nicolas Deladerriere:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reuti,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your comments,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In our case, we are currently running different mpirun commands on
</span><br>
<span class="quotelev2">&gt;&gt; clusters sharing the same frontend. Basically we use a wrapper to run
</span><br>
<span class="quotelev2">&gt;&gt; the mpirun command and to run an ompi-clean command to clean up the
</span><br>
<span class="quotelev2">&gt;&gt; mpi job if required.
</span><br>
<span class="quotelev2">&gt;&gt; Using ompi-clean like this just kills all other mpi jobs running on
</span><br>
<span class="quotelev2">&gt;&gt; same frontend. I cannot use queuing system
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why? Using it on a single machine was only one possible setup. Its purpose
</span><br>
<span class="quotelev1">&gt; is to distribute jobs to slave hosts. If you have already one frontend as
</span><br>
<span class="quotelev1">&gt; login-machine it fits perfect: the qmaster (in case of SGE) can run there
</span><br>
<span class="quotelev1">&gt; and the execd on the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; as you have suggested this
</span><br>
<span class="quotelev2">&gt;&gt; is why I was wondering a option or other solution associated to
</span><br>
<span class="quotelev2">&gt;&gt; ompi-clean command to avoid this general mpi jobs cleaning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers
</span><br>
<span class="quotelev2">&gt;&gt; Nicolas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2012/10/24, Reuti &lt;reuti_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 24.10.2012 um 09:36 schrieb Nicolas Deladerriere:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am having issue running ompi-clean which clean up (this is normal)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; session associated to a user which means it kills all running jobs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; assoicated to this session (this is also normal). But I would like to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; able to clean up session associated to a job (a not user).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is my point:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am running two executable :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % mpirun -np 2 myexec1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --&gt; run with PID 2399 ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % mpirun -np 2 myexec2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --&gt; run with PID 2402 ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I run orte-clean I got this result :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; % orte-clean -v
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte-clean: cleaning session dir tree
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-sessions-ndelader_at_myhost_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte-clean: killing any lingering procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte-clean: found potential rogue orterun process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (pid=2399,user=ndelader), sending SIGKILL...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte-clean: found potential rogue orterun process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (pid=2402,user=ndelader), sending SIGKILL...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which means that both jobs have been killed :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Basically I would like to perform orte-clean using executable name or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or whatever that identify which job I want to stop an clean. It seems I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would need to create an openmpi session per job. Does it make sense ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would like to be able to do something like following command and get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following result :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  % orte-clean -v myexec1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte-clean: cleaning session dir tree
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi-sessions-ndelader_at_myhost_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte-clean: killing any lingering procs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte-clean: found potential rogue orterun process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (pid=2399,user=ndelader), sending SIGKILL...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does it make sense ? Is there a way to perform this kind of selection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cleaning process ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How many jobs are you starting on how many nodes at one time? This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requirement could be a point to start to use a queuing system, where can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remove job individually and also serialize your workflow. In fact: we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GridEngine also local on workstations for this purpose.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
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
<li><strong>Next message:</strong> <a href="20524.php">Ralph Castain: "Re: [OMPI users] Java binding requirements"</a>
<li><strong>Previous message:</strong> <a href="20522.php">Reuti: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>In reply to:</strong> <a href="20522.php">Reuti: "Re: [OMPI users] ompi-clean on single executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20525.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Reply:</strong> <a href="20525.php">Ralph Castain: "Re: [OMPI users] ompi-clean on single executable"</a>
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
