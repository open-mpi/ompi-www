<?
$subject_val = "Re: [OMPI users] Weird behavior using MPI_Lock";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 13:21:36 2015" -->
<!-- isoreceived="20150213182136" -->
<!-- sent="Fri, 13 Feb 2015 18:21:34 +0000" -->
<!-- isosent="20150213182134" -->
<!-- name="Hjelm, Nathan Thomas" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Weird behavior using MPI_Lock" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153AA1E6CA_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Weird behavior using MPI_Lock" -->
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
<strong>Subject:</strong> Re: [OMPI users] Weird behavior using MPI_Lock<br>
<strong>From:</strong> Hjelm, Nathan Thomas (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-13 13:21:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26327.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26325.php">Thibaud Kloczko: "[OMPI users] Weird behavior using MPI_Lock"</a>
<li><strong>Maybe in reply to:</strong> <a href="26325.php">Thibaud Kloczko: "[OMPI users] Weird behavior using MPI_Lock"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can confirm this issue is already fixed in the 1.8 nightly.
<br>
<p>-Nathan
<br>
<p><p>________________________________________
<br>
From: users on behalf of Thibaud Kloczko
<br>
Sent: Friday, February 13, 2015 3:09:03 AM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] Weird behavior using MPI_Lock
<br>
<p>Hi all,
<br>
<p>I observed non-consistent behaviors for the lock functions when applied to windows either created using MPI_Win_create or using MPI_Win_allocate/MPI_Win_allocate_shared.
<br>
<p>I am using openmpi 1.8.4. A sample of the code is joined to this mail.
<br>
<p>1- Locking a window created using allocate functions.
<br>
<p>As explained by Nathan Hjelm, the MPI_MODE_NOCHECK assert had a bug in its path, so I use 0 instead.
<br>
<p>In my tests, each process use the lock functions as follows, first a lock/unlock for read then a lock/unlock for write, nothing is done between lock/unlock but it does not change the behavior:
<br>
<p>-----
<br>
// Lock for read (local rank)
<br>
MPI_Win_lock(MPI_LOCK_SHARED, rank, 0, win_shared);
<br>
MPI_Win_unlock(rank, win_shared);
<br>
<p>// Lock for write (local rank)
<br>
MPI_Win_lock(MPI_LOCK_EXCLUSIVE, rank, 0, win_shared);
<br>
MPI_Win_unlock(rank, win_shared);
<br>
-----
<br>
<p>This works fine.
<br>
<p>2- Locking a window created using MPI_Win_create.
<br>
<p>In this case, the same code ...
<br>
<p>-----
<br>
// Lock for read (local rank)
<br>
MPI_Win_lock(MPI_LOCK_SHARED, rank, 0, win);
<br>
MPI_Win_unlock(rank, win);
<br>
<p>// Lock for write (local rank)
<br>
MPI_Win_lock(MPI_LOCK_EXCLUSIVE, rank, 0, win);
<br>
MPI_Win_unlock(rank, win);
<br>
-----
<br>
<p>... freezes when entering the lock for write (it happens for all processes)
<br>
<p>Further tests show that it works fine when:
<br>
<p>- the MPI_MODE_NOCHECK assert is used
<br>
- the locks are applied to non-local rank
<br>
- the exclusive lock is done before the shared lock
<br>
<p>In this last case, if I call a third lock with MPI_LOCK_EXCLUSIVE option, it works also.
<br>
<p>Maybe, I misunderstand something :-/ !
<br>
<p>Thanks for your help :-) !
<br>
<p>Cheers,
<br>
<p>Thibaud.
<br>
<p>-------------------------------------------------
<br>
Ing&#233;nieur d'Exp&#233;rimentation et de D&#233;veloppement
<br>
Inria CRISAM
<br>
2004, route des lucioles
<br>
06902 Sophia Antipolis
<br>
FRANCE
<br>
+33 4 92 38 50 03
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26327.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26325.php">Thibaud Kloczko: "[OMPI users] Weird behavior using MPI_Lock"</a>
<li><strong>Maybe in reply to:</strong> <a href="26325.php">Thibaud Kloczko: "[OMPI users] Weird behavior using MPI_Lock"</a>
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
