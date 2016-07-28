<?
$subject_val = "Re: [OMPI users] printing text fixes a problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  1 03:57:48 2011" -->
<!-- isoreceived="20110201085748" -->
<!-- sent="Tue, 1 Feb 2011 00:57:24 -0800" -->
<!-- isosent="20110201085724" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] printing text fixes a problem?" -->
<!-- id="AANLkTinu7qM6_mn3e33uA5o35KyeP4Qf6q++mJab2hZd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT110-W43560B38DF568E9E0504728BE50_at_phx.gbl" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-01 03:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Previous message:</strong> <a href="15452.php">abc def: "[OMPI users] printing text fixes a problem?"</a>
<li><strong>In reply to:</strong> <a href="15452.php">abc def: "[OMPI users] printing text fixes a problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Reply:</strong> <a href="15454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] printing text fixes a problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to the mpi_finalize documentation, a call to mpi_finalize
<br>
terminate all processes.  I have ran into this problem before where one
<br>
process calls mpi_finalize before other processes reach the same line of
<br>
code and cause errors/hang ups.  Put a mpi_barrier(mpi_comm_world) before
<br>
mpi_finalize would do the trick.
<br>
<p>On Mon, Jan 31, 2011 at 11:40 PM, abc def &lt;cannonjunk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having trouble with some MPI programming in Fortran, using openmpi.
</span><br>
<span class="quotelev1">&gt; It seems that my program doesn't work unless I print some unrelated text to
</span><br>
<span class="quotelev1">&gt; the screen. For example, if I have this situation:
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
<span class="quotelev1">&gt; The results are not printed unless I include this &quot;print done irank&quot;
</span><br>
<span class="quotelev1">&gt; penultimate line.
</span><br>
<span class="quotelev1">&gt; Also, despite seeing that all ranks reach the print statement, the program
</span><br>
<span class="quotelev1">&gt; hangs, as if they have not all reached MPI_FINALIZE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone help me? Why does it do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also had many times where the program would crash if I didn't include a
</span><br>
<span class="quotelev1">&gt; print statement in a loop. I've been doing Fortran programming for a while,
</span><br>
<span class="quotelev1">&gt; and this is my nightmare debugging scenario since I've never been able to
</span><br>
<span class="quotelev1">&gt; figure out why the simple printing of statements magically fixes the
</span><br>
<span class="quotelev1">&gt; program, and I usually end up having to go back to a serial solution, which
</span><br>
<span class="quotelev1">&gt; is really slow.
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-15453/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Previous message:</strong> <a href="15452.php">abc def: "[OMPI users] printing text fixes a problem?"</a>
<li><strong>In reply to:</strong> <a href="15452.php">abc def: "[OMPI users] printing text fixes a problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Reply:</strong> <a href="15454.php">Jeff Squyres (jsquyres): "Re: [OMPI users] printing text fixes a problem?"</a>
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
