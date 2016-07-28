<?
$subject_val = "Re: [OMPI users] printing text fixes a problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  1 06:25:55 2011" -->
<!-- isoreceived="20110201112555" -->
<!-- sent="Tue, 1 Feb 2011 06:25:44 -0500" -->
<!-- isosent="20110201112544" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] printing text fixes a problem?" -->
<!-- id="90C87627-04E8-44E3-AE22-0FD94F7F1BED_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTinu7qM6_mn3e33uA5o35KyeP4Qf6q++mJab2hZd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] printing text fixes a problem?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-01 06:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15463.php">Shiqing Fan: "[OMPI users] Open MPI v1.5.1 Windows Installer with Fortran 77 bindings released"</a>
<li><strong>Previous message:</strong> <a href="15461.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>In reply to:</strong> <a href="15461.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15465.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Reply:</strong> <a href="15465.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's not quite right - a call to MPI-finalize does not terminate any processes. 
<br>
<p>If you're seeing this kind of instability, check the usual suspects such as ensuring you have a totally homogeneous environment (same OS, same version of OMPI, etc). 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Feb 1, 2011, at 4:03 AM, &quot;David Zhang&quot; &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; According to the mpi_finalize documentation, a call to mpi_finalize terminate all processes.  I have ran into this problem before where one process calls mpi_finalize before other processes reach the same line of code and cause errors/hang ups.  Put a mpi_barrier(mpi_comm_world) before mpi_finalize would do the trick.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 31, 2011 at 11:40 PM, abc def &lt;cannonjunk_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having trouble with some MPI programming in Fortran, using openmpi.
</span><br>
<span class="quotelev1">&gt; It seems that my program doesn't work unless I print some unrelated text to the screen. For example, if I have this situation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** hundreds of lines cut ***
</span><br>
<span class="quotelev1">&gt; IF (irank .eq. 0) THEN
</span><br>
<span class="quotelev1">&gt;     CALL print_results1(variable)
</span><br>
<span class="quotelev1">&gt;     CALL print_results2(more_variable)
</span><br>
<span class="quotelev1">&gt; END IF
</span><br>
<span class="quotelev1">&gt; print *, &quot;done&quot;, irank
</span><br>
<span class="quotelev1">&gt; CALL MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; END PROGRAM calculation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The results are not printed unless I include this &quot;print done irank&quot; penultimate line.
</span><br>
<span class="quotelev1">&gt; Also, despite seeing that all ranks reach the print statement, the program hangs, as if they have not all reached MPI_FINALIZE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone help me? Why does it do this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also had many times where the program would crash if I didn't include a print statement in a loop. I've been doing Fortran programming for a while, and this is my nightmare debugging scenario since I've never been able to figure out why the simple printing of statements magically fixes the program, and I usually end up having to go back to a serial solution, which is really slow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anyone might be able to help me, I would be really really grateful!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tom
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15462/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15463.php">Shiqing Fan: "[OMPI users] Open MPI v1.5.1 Windows Installer with Fortran 77 bindings released"</a>
<li><strong>Previous message:</strong> <a href="15461.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>In reply to:</strong> <a href="15461.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15465.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Reply:</strong> <a href="15465.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
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
