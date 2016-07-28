<?
$subject_val = "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 08:32:26 2010" -->
<!-- isoreceived="20100129133226" -->
<!-- sent="Fri, 29 Jan 2010 08:32:20 -0500" -->
<!-- isosent="20100129133220" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses" -->
<!-- id="48337F70-7F3B-48CD-B558-34FF8814E2CD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="876512661001290523o50607800oe4a0e4e05d511f2a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 08:32:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11935.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11933.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="11933.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11935.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="11935.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 29, 2010, at 8:23 AM, Laurence Marks wrote:
<br>
<p><span class="quotelev1">&gt; I'll try, but sometimes these things are hard to reproduce and I have
</span><br>
<span class="quotelev1">&gt; to wait for free nodes to do the test.
</span><br>
<p>Understood.
<br>
<p><span class="quotelev1">&gt; If I do manage to reproduce the
</span><br>
<span class="quotelev1">&gt; issue (I've added ERR= traps, so would have to regress) any thing else
</span><br>
<span class="quotelev1">&gt; to look at?
</span><br>
<p>You might want to write up a trivial fortran example outside of your main app -- a 10-20 line app that explicitly reads past the end of a trivial file in one MPI process while all the other processes are waiting in an MPI_Barrier, or somesuch.  That way you could test this easily even on 1 node, and not have to regress your source, etc.
<br>
<p>I think counting the processes should be sufficient.  But with a small/trivial test like described above, you might even want to put in some extra print* statements, just to verify exactly where the process stopped, whether it actually exited, etc.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11935.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11933.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="11933.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11935.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="11935.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
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
