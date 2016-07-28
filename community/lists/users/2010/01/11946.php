<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 16:41:25 2010" -->
<!-- isoreceived="20100129214125" -->
<!-- sent="Fri, 29 Jan 2010 15:41:20 -0600" -->
<!-- isosent="20100129214120" -->
<!-- name="Jazcek Braden" -->
<!-- email="jazcek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart error" -->
<!-- id="50ca5db71001291341q75d811adye584fb220ea6a255_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Checkpoint/Restart error" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint/Restart error<br>
<strong>From:</strong> Jazcek Braden (<em>jazcek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 16:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11947.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11945.php">Ashley Pittman: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>Maybe in reply to:</strong> <a href="11767.php">Andreea Costea: "[OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11955.php">Josh Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11955.php">Josh Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>I was following this thread as I had similar symptoms and discovered a
<br>
peculiar error.  when I launch the program, openmpi follows the
<br>
$TMPDIR environment variable and puts the session information in the
<br>
$TMPDIR directory.  However ompi-checkpoint seems to be requiring the
<br>
sessions file to be in /tmp ignoring the $TMPDIR.  Is this by design
<br>
and what would I have to do to get it to obey the $TMPDIR environment
<br>
variable.
<br>
<p><pre>
-- 
Jazcek Braden
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11947.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errorsleavingzombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11945.php">Ashley Pittman: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>Maybe in reply to:</strong> <a href="11767.php">Andreea Costea: "[OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11955.php">Josh Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11955.php">Josh Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
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
