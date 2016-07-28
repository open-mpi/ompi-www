<?
$subject_val = "[OMPI users] printing text fixes a problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  1 02:40:25 2011" -->
<!-- isoreceived="20110201074025" -->
<!-- sent="Tue, 1 Feb 2011 07:40:19 +0000" -->
<!-- isosent="20110201074019" -->
<!-- name="abc def" -->
<!-- email="cannonjunk_at_[hidden]" -->
<!-- subject="[OMPI users] printing text fixes a problem?" -->
<!-- id="SNT110-W43560B38DF568E9E0504728BE50_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] printing text fixes a problem?<br>
<strong>From:</strong> abc def (<em>cannonjunk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-01 02:40:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15461.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Previous message:</strong> <a href="15459.php">Gustavo Correa: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15461.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Reply:</strong> <a href="15461.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm having trouble with some MPI programming in Fortran, using openmpi.
<br>
It seems that my program doesn't work unless I print some unrelated text to the screen. For example, if I have this situation:
<br>
<p>*** hundreds of lines cut ***
<br>
IF (irank .eq. 0) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CALL print_results1(variable)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CALL print_results2(more_variable)
<br>
END IF
<br>
print *, &quot;done&quot;, irank
<br>
CALL MPI_FINALIZE(ierr)
<br>
END PROGRAM calculation
<br>
<p>The results are not printed unless I include this &quot;print done irank&quot; penultimate line.
<br>
Also, despite seeing that all ranks reach the print statement, the program hangs, as if they have not all reached MPI_FINALIZE.
<br>
<p>Can anyone help me? Why does it do this?
<br>
<p>I also had many times where the program would crash if I didn't include a print statement in a loop. I've been doing Fortran programming for a while, and this is my nightmare debugging scenario since I've never been able to figure out why the simple printing of statements magically fixes the program, and I usually end up having to go back to a serial solution, which is really slow.
<br>
<p>If anyone might be able to help me, I would be really really grateful!!
<br>
<p>Thank you.
<br>
<p>Tom
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15460/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15461.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Previous message:</strong> <a href="15459.php">Gustavo Correa: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15461.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Reply:</strong> <a href="15461.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
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
