<?
$subject_val = "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 09:13:26 2010" -->
<!-- isoreceived="20100129141326" -->
<!-- sent="Fri, 29 Jan 2010 08:13:21 -0600" -->
<!-- isosent="20100129141321" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses" -->
<!-- id="876512661001290613i34d9a7ai59174006db27c69e_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="48337F70-7F3B-48CD-B558-34FF8814E2CD_at_cisco.com" -->
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
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 09:13:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11936.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11934.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="11934.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11947.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="11947.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, but trivial codes don't always reproduce problems.
<br>
<p>Is strace useful?
<br>
<p>On Fri, Jan 29, 2010 at 7:32 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jan 29, 2010, at 8:23 AM, Laurence Marks wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll try, but sometimes these things are hard to reproduce and I have
</span><br>
<span class="quotelev2">&gt;&gt; to wait for free nodes to do the test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Understood.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I do manage to reproduce the
</span><br>
<span class="quotelev2">&gt;&gt; issue (I've added ERR= traps, so would have to regress) any thing else
</span><br>
<span class="quotelev2">&gt;&gt; to look at?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to write up a trivial fortran example outside of your main app -- a 10-20 line app that explicitly reads past the end of a trivial file in one MPI process while all the other processes are waiting in an MPI_Barrier, or somesuch. &#194;&#160;That way you could test this easily even on 1 node, and not have to regress your source, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think counting the processes should be sufficient. &#194;&#160;But with a small/trivial test like described above, you might even want to put in some extra print* statements, just to verify exactly where the process stopped, whether it actually exited, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<p><p><p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Electron crystallography is the branch of science that uses electron
scattering and imaging to study the structure of matter.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11936.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11934.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<li><strong>In reply to:</strong> <a href="11934.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leavingzombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11947.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="11947.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
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
