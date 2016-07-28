<?
$subject_val = "[OMPI users] communicating with the caller";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 10:32:12 2008" -->
<!-- isoreceived="20080325143212" -->
<!-- sent="Tue, 25 Mar 2008 15:32:17 +0100" -->
<!-- isosent="20080325143217" -->
<!-- name="slimtimmy_at_[hidden]" -->
<!-- email="slimtimmy_at_[hidden]" -->
<!-- subject="[OMPI users] communicating with the caller" -->
<!-- id="47E90CF1.8070005_at_gmx.de" -->
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
<strong>Subject:</strong> [OMPI users] communicating with the caller<br>
<strong>From:</strong> <a href="mailto:slimtimmy_at_[hidden]?Subject=Re:%20[OMPI%20users]%20communicating%20with%20the%20caller"><em>slimtimmy_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-03-25 10:32:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5264.php">George Bosilca: "Re: [OMPI users] 2 questions about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5262.php">powernetfreak_at_[hidden]: "Re: [OMPI users] 2 questions about Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5265.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Reply:</strong> <a href="5265.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm new to OpenMPI and would like to know whether there is a common way
<br>
for a caller of mpirun to communicate with the mpi processes. Basically
<br>
I have a setup where one process is responsible for distributing jobs
<br>
to other mpi processes and collecting the respective results afterwards.
<br>
Now for example I want to enable communication between the master
<br>
process and a GUI application. The GUI should be notified by the master
<br>
about progress being made and it should also be possible for the GUI to
<br>
send commands to the master (so the communication should be possible in
<br>
both ways)
<br>
Is stdin/stdout suitable? (is sending binary data a problem with this
<br>
type of communication?) I also read that the MPI specification does not
<br>
say anything about the use of stdin/stdout. Is it safe to assume that
<br>
most common MPI implementations support it?
<br>
Another way to deal with the problem would be to write some custom
<br>
network code that is used alongside the MPI communication. What is
<br>
commonly used in this situation?
<br>
<p>Best regards
<br>
Timm
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5264.php">George Bosilca: "Re: [OMPI users] 2 questions about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5262.php">powernetfreak_at_[hidden]: "Re: [OMPI users] 2 questions about Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5265.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Reply:</strong> <a href="5265.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
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
