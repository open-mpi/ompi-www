<?
$subject_val = "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  6 09:12:35 2010" -->
<!-- isoreceived="20100206141235" -->
<!-- sent="Sat, 6 Feb 2010 08:12:30 -0600" -->
<!-- isosent="20100206141230" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses" -->
<!-- id="876512661002060612y257f5253h3b9537d8c40b8cec_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="40E9A213-135B-4903-AFFE-E1D08145B463_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses<br>
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-06 09:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12029.php">Caciano Machado: "Re: [OMPI users] libtool compile error"</a>
<li><strong>Previous message:</strong> <a href="12027.php">Eugene Loh: "Re: [OMPI users] hostfiles"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11947.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12031.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="12031.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I managed to find time to reproduce the issue, although it is not very
<br>
reproducible in it's results and I suspect it may not be easy to
<br>
reproduce with a simple code plus I've never actually constructed a
<br>
mpi code so.... (I am cc'ing Michael Sternberg who compiled the
<br>
openmpi in case there are flags to add to the compilation.)
<br>
<p>I have 8 processes on a single dual quadcore reading from the same
<br>
file using formatted fortran I/O. I deliberately created an error in
<br>
the read. If this error is a format error, all the processes
<br>
terminate. If the error is because there is not enough data (EOF), I
<br>
get somewhere from 1 to 7 zombie's. They don't seem to be doing
<br>
anything (top -ulmarks shows no CPU activity) but I have no idea if
<br>
they have locks on the file or anything else (I think they might, but
<br>
have no idea how to tell).
<br>
<p>On Fri, Jan 29, 2010 at 6:18 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jan 29, 2010, at 9:13 AM, Laurence Marks wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, but trivial codes don't always reproduce problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, but if the problem is a file reading beyond the end, that should be fairly isolated behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is strace useful?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure. &#194;&#160;But let's check to see if the apps are actually dying or hanging first.
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
<li><strong>Next message:</strong> <a href="12029.php">Caciano Machado: "Re: [OMPI users] libtool compile error"</a>
<li><strong>Previous message:</strong> <a href="12027.php">Eugene Loh: "Re: [OMPI users] hostfiles"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11947.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12031.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Reply:</strong> <a href="12031.php">Laurence Marks: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
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
