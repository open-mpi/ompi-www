<?
$subject_val = "[OMPI users] segfault issue - possible bug in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 17:20:23 2008" -->
<!-- isoreceived="20081003212023" -->
<!-- sent="Fri, 3 Oct 2008 15:20:19 -0600" -->
<!-- isosent="20081003212019" -->
<!-- name="Daniel Hansen" -->
<!-- email="dhansen_at_[hidden]" -->
<!-- subject="[OMPI users] segfault issue - possible bug in openmpi" -->
<!-- id="f50c46db0810031420j5f8da32fj9e74d32e7f5a45eb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] segfault issue - possible bug in openmpi<br>
<strong>From:</strong> Daniel Hansen (<em>dhansen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 17:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6853.php">Matt Burgess: "[OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6851.php">kyron_at_[hidden]: "Re: [OMPI users] Tuned Collective MCA params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6854.php">Daniel Hansen: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Reply:</strong> <a href="6854.php">Daniel Hansen: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been testing some code against openmpi lately that always causes it
<br>
to crash during certain mpi function calls.  The code does not seem to be
<br>
the problem, as it runs just fine against mpich.  I have tested it against
<br>
openmpi 1.2.5, 1.2.6, and 1.2.7 and they all exhibit the same problem.
<br>
Also, the problem only occurs in openmpi when running more than 16
<br>
processes.  I have posted this stack trace to the list before, but I am
<br>
submitting it now as a potential bug report.  I need some help debugging it
<br>
and finding out exactly what is going on in openmpi when the segfault
<br>
occurs.  Are there any suggestions on how best to do this?  Is there an easy
<br>
way to attach gdb to one of the processes or something??  I have already
<br>
compiled openmpi with debugging, memory profiling, etc.  How can I best take
<br>
advantage of these features?
<br>
<p>Thanks,
<br>
Daniel Hansen
<br>
Systems Administrator
<br>
BYU Fulton Supercomputing Lab
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6853.php">Matt Burgess: "[OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Previous message:</strong> <a href="6851.php">kyron_at_[hidden]: "Re: [OMPI users] Tuned Collective MCA params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6854.php">Daniel Hansen: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Reply:</strong> <a href="6854.php">Daniel Hansen: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
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
