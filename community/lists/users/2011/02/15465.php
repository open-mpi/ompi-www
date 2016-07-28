<?
$subject_val = "Re: [OMPI users] printing text fixes a problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  1 13:04:17 2011" -->
<!-- isoreceived="20110201180417" -->
<!-- sent="Tue, 1 Feb 2011 10:03:32 -0800" -->
<!-- isosent="20110201180332" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] printing text fixes a problem?" -->
<!-- id="AANLkTinYNp-AD6RuYi6cT0o+4qjOEocV8WVLZ7dQB6V-_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="90C87627-04E8-44E3-AE22-0FD94F7F1BED_at_cisco.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-01 13:03:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15466.php">Jeff Squyres: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Previous message:</strong> <a href="15464.php">jody: "[OMPI users] heterogenous cluster"</a>
<li><strong>In reply to:</strong> <a href="15462.php">Jeff Squyres (jsquyres): "Re: [OMPI users] printing text fixes a problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15466.php">Jeff Squyres: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Reply:</strong> <a href="15466.php">Jeff Squyres: "Re: [OMPI users] printing text fixes a problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, that was a typo.  mpi_finalize terminates all mpi processings.
<br>
<p>On Tue, Feb 1, 2011 at 3:25 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; That's not quite right - a call to MPI-finalize does not terminate any
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're seeing this kind of instability, check the usual suspects such as
</span><br>
<span class="quotelev1">&gt; ensuring you have a totally homogeneous environment (same OS, same version
</span><br>
<span class="quotelev1">&gt; of OMPI, etc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 1, 2011, at 4:03 AM, &quot;David Zhang&quot; &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to the mpi_finalize documentation, a call to mpi_finalize
</span><br>
<span class="quotelev1">&gt; terminate all processes.  I have ran into this problem before where one
</span><br>
<span class="quotelev1">&gt; process calls mpi_finalize before other processes reach the same line of
</span><br>
<span class="quotelev1">&gt; code and cause errors/hang ups.  Put a mpi_barrier(mpi_comm_world) before
</span><br>
<span class="quotelev1">&gt; mpi_finalize would do the trick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 31, 2011 at 11:40 PM, abc def &lt; &lt;cannonjunk_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cannonjunk_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having trouble with some MPI programming in Fortran, using openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; It seems that my program doesn't work unless I print some unrelated text
</span><br>
<span class="quotelev2">&gt;&gt; to the screen. For example, if I have this situation:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** hundreds of lines cut ***
</span><br>
<span class="quotelev2">&gt;&gt; IF (irank .eq. 0) THEN
</span><br>
<span class="quotelev2">&gt;&gt;     CALL print_results1(variable)
</span><br>
<span class="quotelev2">&gt;&gt;     CALL print_results2(more_variable)
</span><br>
<span class="quotelev2">&gt;&gt; END IF
</span><br>
<span class="quotelev2">&gt;&gt; print *, &quot;done&quot;, irank
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; END PROGRAM calculation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The results are not printed unless I include this &quot;print done irank&quot;
</span><br>
<span class="quotelev2">&gt;&gt; penultimate line.
</span><br>
<span class="quotelev2">&gt;&gt; Also, despite seeing that all ranks reach the print statement, the program
</span><br>
<span class="quotelev2">&gt;&gt; hangs, as if they have not all reached MPI_FINALIZE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone help me? Why does it do this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also had many times where the program would crash if I didn't include a
</span><br>
<span class="quotelev2">&gt;&gt; print statement in a loop. I've been doing Fortran programming for a while,
</span><br>
<span class="quotelev2">&gt;&gt; and this is my nightmare debugging scenario since I've never been able to
</span><br>
<span class="quotelev2">&gt;&gt; figure out why the simple printing of statements magically fixes the
</span><br>
<span class="quotelev2">&gt;&gt; program, and I usually end up having to go back to a serial solution, which
</span><br>
<span class="quotelev2">&gt;&gt; is really slow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If anyone might be able to help me, I would be really really grateful!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tom
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;users_at_[hidden]&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15465/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15466.php">Jeff Squyres: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Previous message:</strong> <a href="15464.php">jody: "[OMPI users] heterogenous cluster"</a>
<li><strong>In reply to:</strong> <a href="15462.php">Jeff Squyres (jsquyres): "Re: [OMPI users] printing text fixes a problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15466.php">Jeff Squyres: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>Reply:</strong> <a href="15466.php">Jeff Squyres: "Re: [OMPI users] printing text fixes a problem?"</a>
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
