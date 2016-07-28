<?
$subject_val = "[OMPI users] Weird behavior using MPI_Lock";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 05:09:05 2015" -->
<!-- isoreceived="20150213100905" -->
<!-- sent="Fri, 13 Feb 2015 11:09:03 +0100 (CET)" -->
<!-- isosent="20150213100903" -->
<!-- name="Thibaud Kloczko" -->
<!-- email="thibaud.kloczko_at_[hidden]" -->
<!-- subject="[OMPI users] Weird behavior using MPI_Lock" -->
<!-- id="1776365956.54757838.1423822143859.JavaMail.zimbra_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20150213021212.GA739_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Weird behavior using MPI_Lock<br>
<strong>From:</strong> Thibaud Kloczko (<em>thibaud.kloczko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-13 05:09:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26326.php">Hjelm, Nathan Thomas: "Re: [OMPI users] Weird behavior using MPI_Lock"</a>
<li><strong>Previous message:</strong> <a href="26324.php">Thibaud Kloczko: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>In reply to:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26326.php">Hjelm, Nathan Thomas: "Re: [OMPI users] Weird behavior using MPI_Lock"</a>
<li><strong>Maybe reply:</strong> <a href="26326.php">Hjelm, Nathan Thomas: "Re: [OMPI users] Weird behavior using MPI_Lock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
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
<p>
<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26325/main_lock.cpp">main_lock.cpp</a>
</ul>
<!-- attachment="main_lock.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26326.php">Hjelm, Nathan Thomas: "Re: [OMPI users] Weird behavior using MPI_Lock"</a>
<li><strong>Previous message:</strong> <a href="26324.php">Thibaud Kloczko: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<li><strong>In reply to:</strong> <a href="26323.php">Nathan Hjelm: "Re: [OMPI users] Fail to lock/unlock a shared memory window iteratively"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26326.php">Hjelm, Nathan Thomas: "Re: [OMPI users] Weird behavior using MPI_Lock"</a>
<li><strong>Maybe reply:</strong> <a href="26326.php">Hjelm, Nathan Thomas: "Re: [OMPI users] Weird behavior using MPI_Lock"</a>
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
