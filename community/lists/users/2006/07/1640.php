<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 18 05:13:53 2006" -->
<!-- isoreceived="20060718091353" -->
<!-- sent="Tue, 18 Jul 2006 11:13:43 +0200" -->
<!-- isosent="20060718091343" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why should the attached code wait on MPI_Bcast" -->
<!-- id="44BCA647.2010504_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3e3c86f90607171859k54652623ya0e6ab4dbdc5cb81_at_mail.gmail.com" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-18 05:13:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1641.php">Keith Refson: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Previous message:</strong> <a href="1639.php">Manal Helal: "[OMPI users] MPI_Finalize runtime error"</a>
<li><strong>In reply to:</strong> <a href="1638.php">s anwar: "[OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1644.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="1644.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>s anwar wrote:
<br>
<span class="quotelev1">&gt; Please see attached source file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; According to my understanding of MPI_Comm_spawn(), the intercommunicator
</span><br>
<span class="quotelev1">&gt; returned is the same as it is returned by MPI_Comm_get_parent() in the
</span><br>
<span class="quotelev1">&gt; spawned processes. I am assuming that there is one intercommunicator
</span><br>
<span class="quotelev1">&gt; which contains all the (spawned) child processes as well as the parent
</span><br>
<span class="quotelev1">&gt; process. If this is the case, then why does an MPI_Bcast() using such an
</span><br>
<span class="quotelev1">&gt; intercommunicator wait indefinately?
</span><br>
<p>your code from line 75:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;one_int, 1, MPI_INT, 0, intercomm);
<br>
<p>from the mpi 2 standard &quot;7.3.2.1. Broadcast&quot;
<br>
<p>&quot;If comm is an intercommunicator, then the call involves all processes in
<br>
the intercommunicator, but with one group (group A) defining the root
<br>
process. All processes in the other group (group B) pass the same value in
<br>
argument root, which is the rank of the root in group A. The root passes
<br>
the value MPI_ROOT in root. All other processes in group A pass the value
<br>
MPI_PROC_NULL in root. Data is broadcast from the root to all processes in
<br>
group B. The receive buffer arguments of the processes in group B must be
<br>
consistent with the send buffer argument of the root.&quot;
<br>
<p>so, you define no group to be the root group (group A). i don't know what
<br>
schould happen, when no root group is defined, but your code firstly don't
<br>
conform to the standard, so don't blame the implementation first.
<br>
<p>by
<br>
bert wesarg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1641.php">Keith Refson: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Previous message:</strong> <a href="1639.php">Manal Helal: "[OMPI users] MPI_Finalize runtime error"</a>
<li><strong>In reply to:</strong> <a href="1638.php">s anwar: "[OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1644.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>Reply:</strong> <a href="1644.php">s anwar: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
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
