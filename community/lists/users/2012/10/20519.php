<?
$subject_val = "[OMPI users] ompi-clean on single executable";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 24 03:36:22 2012" -->
<!-- isoreceived="20121024073622" -->
<!-- sent="Wed, 24 Oct 2012 11:36:18 +0400" -->
<!-- isosent="20121024073618" -->
<!-- name="Nicolas Deladerriere" -->
<!-- email="nicolas.deladerriere_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-clean on single executable" -->
<!-- id="CABvLwVA4yPodOWXRsMK02bk-wEuvzNmq=59mn3gMAJMFV_66qw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] ompi-clean on single executable<br>
<strong>From:</strong> Nicolas Deladerriere (<em>nicolas.deladerriere_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-24 03:36:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20520.php">Reuti: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20518.php">Yoshiki SATO: "[OMPI users] Java binding requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20520.php">Reuti: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Reply:</strong> <a href="20520.php">Reuti: "Re: [OMPI users] ompi-clean on single executable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am having issue running ompi-clean which clean up (this is normal)
<br>
session associated to a user which means it kills all running jobs
<br>
assoicated to this session (this is also normal). But I would like to be
<br>
able to clean up session associated to a job (a not user).
<br>
<p>Here is my point:
<br>
<p>I am running two executable :
<br>
<p>&nbsp;% mpirun -np 2 myexec1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; run with PID 2399 ...
<br>
&nbsp;% mpirun -np 2 myexec2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; run with PID 2402 ...
<br>
<p>When I run orte-clean I got this result :
<br>
&nbsp;% orte-clean -v
<br>
&nbsp;orte-clean: cleaning session dir tree openmpi-sessions-ndelader_at_myhost_0
<br>
&nbsp;orte-clean: killing any lingering procs
<br>
&nbsp;orte-clean: found potential rogue orterun process
<br>
(pid=2399,user=ndelader), sending SIGKILL...
<br>
&nbsp;orte-clean: found potential rogue orterun process
<br>
(pid=2402,user=ndelader), sending SIGKILL...
<br>
<p>Which means that both jobs have been killed :-(
<br>
Basically I would like to perform orte-clean using executable name or PID
<br>
or whatever that identify which job I want to stop an clean. It seems I
<br>
would need to create an openmpi session per job. Does it make sense ? And I
<br>
would like to be able to do something like following command and get
<br>
following result :
<br>
<p>&nbsp;&nbsp;% orte-clean -v myexec1
<br>
&nbsp;orte-clean: cleaning session dir tree openmpi-sessions-ndelader_at_myhost_0
<br>
&nbsp;orte-clean: killing any lingering procs
<br>
&nbsp;orte-clean: found potential rogue orterun process
<br>
(pid=2399,user=ndelader), sending SIGKILL...
<br>
<p><p>Does it make sense ? Is there a way to perform this kind of selection in
<br>
cleaning process ?
<br>
<p>Regards,
<br>
Nicolas
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20519/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20520.php">Reuti: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Previous message:</strong> <a href="20518.php">Yoshiki SATO: "[OMPI users] Java binding requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20520.php">Reuti: "Re: [OMPI users] ompi-clean on single executable"</a>
<li><strong>Reply:</strong> <a href="20520.php">Reuti: "Re: [OMPI users] ompi-clean on single executable"</a>
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
