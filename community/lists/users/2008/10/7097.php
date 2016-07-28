<?
$subject_val = "[OMPI users] job abort on MPI task exit";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 07:46:52 2008" -->
<!-- isoreceived="20081027114652" -->
<!-- sent="Mon, 27 Oct 2008 22:46:07 +1100" -->
<!-- isosent="20081027114607" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="[OMPI users] job abort on MPI task exit" -->
<!-- id="4905A9FF.7050608_at_anu.edu.au" -->
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
<strong>Subject:</strong> [OMPI users] job abort on MPI task exit<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 07:46:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7098.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7096.php">jody: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7099.php">Ralph Castain: "Re: [OMPI users] job abort on MPI task exit"</a>
<li><strong>Reply:</strong> <a href="7099.php">Ralph Castain: "Re: [OMPI users] job abort on MPI task exit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologies if this has been covered in a previous thread - I
<br>
went back through a lot of posts without seeing anything
<br>
similar.
<br>
<p>In an attempt to protect some users from themselves, I was hoping
<br>
that OpenMPI could be configured so that an MPI task calling
<br>
exit before calling MPI_Finalize() would cause job cleanup, i.e.
<br>
behave effectively as if MPI_Abort() was called.  The reason is
<br>
that many users dont realise they need to use MPI_Abort()
<br>
instead of Fortran stop or C exit.  If exit is called,  all
<br>
other processes get stuck in the next blocking call and, for a
<br>
large walltime limit batch job, that can be a real waste of
<br>
resources.
<br>
<p>I think LAM terminated the job if a task exited with non-zero
<br>
exit status or due to a signal. OpenMPI appears to cleanup
<br>
only in the case a signalled task.  Ideally, any exit before
<br>
MPI_Finalize() should be terminal.  Why is this not the case?
<br>
<p>Thanks,
<br>
David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7098.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7096.php">jody: "Re: [OMPI users] ADIOI_GEN_DELETE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7099.php">Ralph Castain: "Re: [OMPI users] job abort on MPI task exit"</a>
<li><strong>Reply:</strong> <a href="7099.php">Ralph Castain: "Re: [OMPI users] job abort on MPI task exit"</a>
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
